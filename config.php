<?php
declare(strict_types=1);

/**
 * Central configuration for the standalone OTTO complete ApiWeb sample.
 *
 * For local tests the defaults below are intentionally executable as-is.
 * Production endpoints should move the shared secret to an environment
 * variable or protected hosting secret and keep only non-sensitive defaults in
 * this file.
 */
return array(
    'apiKey' => getenv('APIWEB_TEST_KEY') ?: 'local-dev-api-key-2026',
    'implementation' => 'complete',
    'logLevel' => getenv('APIWEB_LOG_LEVEL') ?: 'info',
    'timezone' => 'UTC',

    'debug' => array(
        'includeRequestContextInErrors' => getenv('APIWEB_INCLUDE_DEBUG_CONTEXT') === '1',
        'failureMode' => getenv('APIWEB_FAILURE_MODE') ?: ''
    ),

    'otto' => array(
        /*
         * demo: local deterministic responses for tests and documentation.
         * real: signed ApiWeb endpoint forwards calls to the OTTO markets API.
         */
        'mode' => getenv('APIWEB_OTTO_MODE') ?: 'demo',
        'environment' => getenv('OTTO_ENVIRONMENT') ?: 'live', // live, nonlive, sandbox
        'authMode' => getenv('OTTO_AUTH_MODE') ?: 'bearer', // bearer, oauth2Installation, legacyPassword
        'customerIdentifier' => getenv('OTTO_CUSTOMER_IDENTIFIER') ?: '',
        'requestTimeoutSeconds' => (int)(getenv('OTTO_TIMEOUT_SECONDS') ?: 30),

        'bearer' => array(
            'accessToken' => getenv('OTTO_ACCESS_TOKEN') ?: '',
            'tokenExpiresAt' => getenv('OTTO_TOKEN_EXPIRES_AT') ?: ''
        ),

        'oauth2Installation' => array(
            'clientId' => getenv('OTTO_OAUTH2_CLIENT_ID') ?: '',
            'clientSecret' => getenv('OTTO_OAUTH2_CLIENT_SECRET') ?: '',
            'scope' => getenv('OTTO_OAUTH2_SCOPE') ?: 'products orders receipts returns shipments availability shipping-profiles',
            'appId' => getenv('OTTO_APP_ID') ?: '',
            'installationId' => getenv('OTTO_INSTALLATION_ID') ?: ''
        ),

        'legacyPassword' => array(
            'username' => getenv('OTTO_USERNAME') ?: '',
            'password' => getenv('OTTO_PASSWORD') ?: ''
        ),

        'defaults' => array(
            'shippingProfileId' => getenv('OTTO_DEFAULT_SHIPPING_PROFILE_ID') ?: '',
            'carrier' => getenv('OTTO_DEFAULT_CARRIER') ?: 'DHL',
            'shipFromCity' => getenv('OTTO_SHIP_FROM_CITY') ?: '',
            'shipFromZipCode' => getenv('OTTO_SHIP_FROM_ZIP') ?: '',
            'shipFromCountryCode' => getenv('OTTO_SHIP_FROM_COUNTRY') ?: 'DEU'
        )
    ),

    'licence' => array(
        'enabled' => true,
        'acceptedLicenceKeys' => array()
    ),

    'capabilities' => array(
        'SupportedLanguages' => array('Deutsch', 'Englisch'),
        'SupportedWaehrungen' => array('EURO', 'USDOLLAR', 'POUND'),
        'SupportedZahlungsarten' => array('PayPal', 'Rechnung', 'Kreditkarte', 'OttoMarket'),
        'ShippingProfiles' => array('Paket National', 'Paket International', 'Kurier Express'),
        'Features' => array(
            'stockPolicy',
            'EmulatedVakos',
            'TeilVersand',
            'FulfillmentByMarketplace',
            'RetoureAnnouncementDownload',
            'PortalCategories',
            'NoBranding',
            'NoDummyText',
            'Purge',
            'InvoiceFileUpload',
            'InvoiceDataUpload',
            'RefundFileUpload',
            'RefundDataUpload',
            'RetoureUpload',
            'InvoiceFileDownload',
            'InvoiceDataDownload',
            'RefundFileDownload',
            'RefundDataDownload'
        )
    ),

    'sampleData' => array(
        'orderPrefix' => 'apiweb-order',
        'skuPrefix' => 'APIWEB-SAMPLE',
        'portalRootId' => 'apiweb-root'
    )
);
