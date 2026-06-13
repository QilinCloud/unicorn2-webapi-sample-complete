<?php
declare(strict_types=1);

require_once __DIR__ . '/classes/class.config.php';
require_once __DIR__ . '/classes/class.logger.php';
require_once __DIR__ . '/classes/class.otto.php';

/**
 * Returns the shared ApiWeb API key from sample configuration.
 *
 * @return string Shared API key used by Unicorn and the PHP endpoint.
 */
function getKey(): string
{
    return (string)ApiWebConfig::get('apiKey', 'local-dev-api-key-2026');
}

/**
 * Validates the Unicorn licence key against the optional sample allow-list.
 *
 * @param Request|null $request Parsed ApiWeb request, if available.
 * @return bool True when the sample accepts the licence.
 */
function checkLicence(?Request $request = null): bool
{
    $enabled = (bool)ApiWebConfig::nested('licence', 'enabled', true);
    if (!$enabled) {
        return true;
    }

    $accepted = ApiWebConfig::nested('licence', 'acceptedLicenceKeys', array());
    if (!is_array($accepted) || count($accepted) === 0) {
        return true;
    }

    return $request !== null && in_array((string)$request->licenceKey, $accepted, true);
}

/**
 * Checks whether a named feature is enabled in the sample configuration.
 *
 * @param string $feature Feature name from the ApiWeb sample config.
 * @return bool True when the feature is enabled.
 */
function apiWebFeatureEnabled(string $feature): bool
{
    $features = ApiWebConfig::nested('capabilities', 'Features', array());
    return is_array($features) && in_array($feature, $features, true);
}

/**
 * Reads a property from an object or associative array with a string fallback.
 *
 * @param mixed $item Source object or array.
 * @param string $propertyName Property or key name to read.
 * @param string $fallback Value returned when the property is missing.
 * @return string Property value converted to a string.
 */
function apiWebReadProperty($item, string $propertyName, string $fallback = ''): string
{
    if (is_object($item) && property_exists($item, $propertyName)) {
        return (string)$item->{$propertyName};
    }

    if (is_array($item) && array_key_exists($propertyName, $item)) {
        return (string)$item[$propertyName];
    }

    return $fallback;
}

/**
 * Detects the sample failure marker used by integration tests.
 *
 * @param mixed $item Object or scalar value to inspect.
 * @return bool True when the serialized item contains "fail".
 */
function apiWebShouldFail($item): bool
{
    if ($item === null) {
        return false;
    }

    $json = strtolower((string)json_encode($item));
    return strpos($json, 'fail') !== false;
}

/**
 * Marks a result as successful and assigns a deterministic sample shop ID when needed.
 *
 * @param Result $result ApiWeb result object being populated.
 * @param string $prefix Prefix used for generated partner identifiers.
 * @return void
 */
function apiWebSuccessWithShopId(Result $result, string $prefix): void
{
    if (apiWebShouldFail($result->Item)) {
        $result->addError(422, 'ApiWeb sample rejected this object because it contains the marker "fail".');
        ApiWebLogger::warning('Rejected one ApiWeb sample object.', array('prefix' => $prefix));
        return;
    }

    if (!is_object($result->Item)) {
        $result->Item = new stdClass();
    }

    $shopId = apiWebReadProperty($result->Item, 'ShopId', '');
    if ($shopId === '') {
        $wawiId = apiWebReadProperty($result->Item, 'WawiId', '0');
        $result->Item->ShopId = $prefix . '-' . $wawiId . '-' . substr(sha1(json_encode($result->Item)), 0, 8);
    }

    $result->Item->Success = true;
}

/**
 * Creates a sample order object that mirrors the Unicorn order payload shape.
 *
 * @param string $suffix Optional suffix appended to the generated order identifier.
 * @return object Sample order object.
 */
function apiWebOrder(string $suffix = ''): object
{
    $sample = ApiWebConfig::get('sampleData', array());
    $orderPrefix = is_array($sample) && isset($sample['orderPrefix']) ? (string)$sample['orderPrefix'] : 'apiweb-order';
    $skuPrefix = is_array($sample) && isset($sample['skuPrefix']) ? (string)$sample['skuPrefix'] : 'APIWEB-SAMPLE';
    $orderId = $orderPrefix . '-' . gmdate('YmdHis') . $suffix;

    return (object)array(
        'WawiId' => 0,
        'ShopId' => $orderId,
        'Bestellnummer' => $orderId,
        'Rechnungsnummer' => 'apiweb-invoice-' . gmdate('YmdHis'),
        'Waehrung' => Waehrung::EURO,
        'Zahlungsart' => Zahlungsart::OttoMarket,
        'Versandkosten' => 4.99,
        'Gesamtkosten' => 24.98,
        'Bestelldatum' => gmdate('c'),
        'Paid' => true,
        'Send' => false,
        'Kunde' => (object)array(
            'Vorname' => 'ApiWeb',
            'Nachname' => 'Sample',
            'Email' => 'apiweb.sample@example.invalid'
        ),
        'Lieferanschrift' => (object)array(
            'Firma' => '',
            'Vorname' => 'ApiWeb',
            'Nachname' => 'Sample',
            'Strasse' => 'Musterstrasse',
            'Hausnummer' => '1',
            'PLZ' => '12345',
            'Ort' => 'Musterstadt',
            'LandIso' => 'DE'
        ),
        'Artikel' => array(
            (object)array(
                'WawiId' => 0,
                'ShopId' => strtolower($skuPrefix) . '-1',
                'ArtikelNummer' => $skuPrefix . '-1',
                'Name' => 'ApiWeb sample article',
                'Menge' => 1,
                'Preis' => 19.99,
                'Waehrung' => Waehrung::EURO
            )
        )
    );
}

/**
 * Returns configured ApiWeb sample capabilities.
 *
 * @return object Capabilities object returned to Unicorn.
 */
function apiWebCapabilities(): object
{
    return (object)ApiWebConfig::get('capabilities', array());
}

/**
 * Returns configured ApiWeb shipping profiles.
 *
 * @return array List of shipping profile names.
 */
function apiWebShippingProfiles(): array
{
    $profiles = ApiWebConfig::nested('capabilities', 'ShippingProfiles', array());
    return is_array($profiles) ? $profiles : array();
}

require_once ApiWebConfig::implementationPath();
