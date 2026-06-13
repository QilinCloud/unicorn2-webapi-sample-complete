<?php
declare(strict_types=1);

/**
 * ApiWeb sample front controller.
 *
 * Loads the ApiWeb sample runtime, authenticates the signed Unicorn request,
 * dispatches it to the selected sample implementation, and returns a signed
 * JSON answer.
 */
ob_start();

require_once __DIR__ . '/classes/class.config.php';
require_once __DIR__ . '/classes/class.logger.php';
require_once __DIR__ . '/sync.php';
require_once __DIR__ . '/classes/class.error.php';
require_once __DIR__ . '/classes/class.result.php';
require_once __DIR__ . '/classes/class.security.php';
require_once __DIR__ . '/classes/class.answer.php';
require_once __DIR__ . '/classes/class.request.php';
require_once __DIR__ . '/classes/class.authentification.php';

require_once __DIR__ . '/classes/interface/class.Dictionary.php';
require_once __DIR__ . '/classes/interface/class.Adresse.php';
require_once __DIR__ . '/classes/interface/class.Anschrift.php';
require_once __DIR__ . '/classes/interface/class.WawiObject.php';
require_once __DIR__ . '/classes/interface/class.MappingObject.php';
require_once __DIR__ . '/classes/interface/class.ArtikelBase.php';
require_once __DIR__ . '/classes/interface/class.Artikel.php';
require_once __DIR__ . '/classes/interface/class.ArtikelAttribut.php';
require_once __DIR__ . '/classes/interface/class.ArtikelBild.php';
require_once __DIR__ . '/classes/interface/class.ArtikelLink.php';
require_once __DIR__ . '/classes/interface/class.ArtikelQuerverkauf.php';
require_once __DIR__ . '/classes/interface/class.Bestellung.php';
require_once __DIR__ . '/classes/interface/class.Category.php';
require_once __DIR__ . '/classes/interface/class.EigenschaftBase.php';
require_once __DIR__ . '/classes/interface/class.FreitextEigenschaft.php';
require_once __DIR__ . '/classes/interface/class.Grundpreis.php';
require_once __DIR__ . '/classes/interface/class.Gutschein.php';
require_once __DIR__ . '/classes/interface/class.Hersteller.php';
require_once __DIR__ . '/classes/interface/class.Kategorie.php';
require_once __DIR__ . '/classes/interface/class.Kunde.php';
require_once __DIR__ . '/classes/interface/class.Kundengruppe.php';
require_once __DIR__ . '/classes/interface/class.PortalCategory.php';
require_once __DIR__ . '/classes/interface/class.ShopBase.php';
require_once __DIR__ . '/classes/interface/class.VakoArtikel.php';
require_once __DIR__ . '/classes/interface/class.ZahlungsDaten.php';
require_once __DIR__ . '/classes/interface/class.Eigenschaftswert.php';
require_once __DIR__ . '/classes/interface/class.WertEigenschaft.php';
require_once __DIR__ . '/classes/interface/class.Steuer.php';
require_once __DIR__ . '/classes/interface/class.Sprache.php';
require_once __DIR__ . '/classes/interface/class.Land.php';
require_once __DIR__ . '/classes/interface/class.ApiWebDto.php';
require_once __DIR__ . '/classes/interface/class.ApiWebCapabilities.php';
require_once __DIR__ . '/classes/interface/class.ApiWebDocument.php';
require_once __DIR__ . '/classes/interface/class.ApiWebPartialUpdate.php';
require_once __DIR__ . '/classes/interface/class.ApiWebReturn.php';
require_once __DIR__ . '/classes/interface/class.BestellungsInfo.php';
require_once __DIR__ . '/classes/interface/class.BestellVersandInfo.php';
require_once __DIR__ . '/classes/interface/class.BestellRetourInfo.php';
require_once __DIR__ . '/classes/interface/class.BestellRefundInfo.php';
require_once __DIR__ . '/classes/interface/class.Storno.php';
require_once __DIR__ . '/classes/interface/class.VersandInfo.php';
require_once __DIR__ . '/classes/interface/class.Rechnung.php';
require_once __DIR__ . '/classes/interface/class.Gutschrift.php';

require_once __DIR__ . '/classes/interface/enum.AktivStates.php';
require_once __DIR__ . '/classes/interface/enum.ArtikelFields.php';
require_once __DIR__ . '/classes/interface/enum.ArtikelProperty.php';
require_once __DIR__ . '/classes/interface/enum.BestellungProperty.php';
require_once __DIR__ . '/classes/interface/enum.Geschlecht.php';
require_once __DIR__ . '/classes/interface/enum.Status.php';
require_once __DIR__ . '/classes/interface/enum.Unit.php';
require_once __DIR__ . '/classes/interface/enum.Waehrung.php';
require_once __DIR__ . '/classes/interface/enum.Zahlungsart.php';
require_once __DIR__ . '/classes/interface/enum.Info.php';
require_once __DIR__ . '/classes/interface/enum.Marketplaces.php';
require_once __DIR__ . '/classes/interface/enum.RetourState.php';
require_once __DIR__ . '/classes/interface/enum.StornoReason.php';
require_once __DIR__ . '/classes/interface/enum.GutschriftType.php';

$answer = new Answer(false);

try {
    date_default_timezone_set((string)ApiWebConfig::get('timezone', 'UTC'));

    $rawBody = file_get_contents('php://input');
    $headers = ApiWebSecurity::getRequestHeaders();
    $sharedSecret = getKey();

    $request = new Request($rawBody, $headers, $_SERVER['REQUEST_METHOD'] ?? 'POST', $answer);
    new Authentification($request, $sharedSecret, $answer, $headers);

    ApiWebLogger::info('Received ApiWeb request.', array(
        'method' => $request->method,
        'objects' => is_array($request->objects) ? count($request->objects) : 0
    ));

    if (!checkLicence($request)) {
        ApiWebLogger::warning('Rejected ApiWeb request because licence check failed.', array('method' => $request->method));
        $answer->setErrorCode(103);
        $answer->send($request->method, $sharedSecret);
    }

    if (!function_exists($request->method)) {
        $answer->setError(101, 'Unsupported ApiWeb method: ' . $request->method);
        $answer->send($request->method, $sharedSecret);
    }

    $objects = is_array($request->objects) ? $request->objects : array();
    if (count($objects) === 0) {
        $objects[] = null;
    }

    foreach ($objects as $object) {
        $result = new Result($object);
        call_user_func($request->method, $result, $request);
        $answer->addResult($result);
    }

    $answer->prepare($request->method);
    $answer->send($request->method, $sharedSecret);
} catch (Throwable $exception) {
    ApiWebLogger::exception($exception);
    $answer->setError(999, $exception->getMessage());
    $answer->send($_SERVER['HTTP_X_UNICORN_API_METHOD'] ?? 'unknown', getKey());
}
