<?php
declare(strict_types=1);

/**
 * Exception type used by the OTTO-backed ApiWeb sample client.
 */
class ApiWebOttoException extends RuntimeException
{
    private int $apiWebCode;
    private array $context;

    /**
     * Initializes a new OTTO sample exception.
     *
     * @param string $message Human-readable error message for the Unicorn log.
     * @param int $apiWebCode ApiWeb item error code.
     * @param array $context Optional debug context.
     */
    public function __construct(string $message, int $apiWebCode = 999, array $context = array())
    {
        parent::__construct($message);
        $this->apiWebCode = $apiWebCode;
        $this->context = $context;
    }

    /**
     * Gets the ApiWeb item error code.
     *
     * @return int ApiWeb item error code.
     */
    public function getApiWebCode(): int
    {
        return $this->apiWebCode;
    }

    /**
     * Gets optional debug context.
     *
     * @return array Debug context values.
     */
    public function getContext(): array
    {
        return $this->context;
    }
}

/**
 * Small OTTO markets API client used by the complete and minimal ApiWeb samples.
 */
final class ApiWebOttoClient
{
    private const MODE_DEMO = 'demo';
    private const MODE_REAL = 'real';

    private const ERROR_CONFIGURATION = 901;
    private const ERROR_AUTH = 102;
    private const ERROR_QUOTA = 429;
    private const ERROR_API_DOWN = 503;
    private const ERROR_MAPPING = 422;
    private const ERROR_UNKNOWN = 999;

    private const ENDPOINT_VERSIONS = array(
        'orders' => 'v4',
        'orders/{salesOrderId}' => 'v4',
        'orders/{salesOrderId}/cancellation' => 'v4',
        'orders/{salesOrderId}/positionItems/{positionItemId}/cancellation' => 'v4',
        'orders/testorders/generation' => 'v4',
        'orders/testorders' => 'v4',
        'products' => 'v5',
        'products/brands' => 'v5',
        'products/categories' => 'v5',
        'products/marketplace-status' => 'v5',
        'products/active-status' => 'v5',
        'products/{sku}' => 'v5',
        'products/{sku}/marketplace-status' => 'v5',
        'products/{sku}/active-status' => 'v5',
        'products/update-tasks/{updateTaskId}' => 'v5',
        'products/update-tasks/{updateTaskId}/failed' => 'v5',
        'products/update-tasks/{updateTaskId}/succeeded' => 'v5',
        'products/prices' => 'v5',
        'quantities' => 'v2',
        'receipts' => 'v3',
        'receipts/{receiptNumber}' => 'v3',
        'receipts/{receiptNumber}/pdf' => 'v3',
        'receipts/{receiptNumber}.pdf' => 'v3',
        'returns' => 'v3',
        'returns/acceptance' => 'v3',
        'returns/rejection' => 'v3',
        'shipments' => 'v1',
        'multiparcel-shipments' => 'v1',
        'shipments/{shipmentId}' => 'v1',
        'shipments/{shipmentId}/positionitems' => 'v1',
        'shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}' => 'v1',
        'shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}/positionitems' => 'v1',
        'token' => 'v1',
        'oauth2/token' => 'oauth2',
        'apps/{appId}/installations/{installationId}/accessToken' => 'v1',
        'price-reductions' => 'v1',
        'shipping-profiles' => 'v1',
        'shipping-profiles/{shippingProfileId}' => 'v1',
        'availability/quantities' => 'v1',
        'availability/quantities/{sku}' => 'v1',
        'availability/product-delivery-information' => 'v1',
        'availability/product-delivery-information/{sku}' => 'v1'
    );

    private array $config;
    private ?string $accessToken = null;

    /**
     * Creates a client from sample configuration.
     */
    public function __construct()
    {
        $config = ApiWebConfig::get('otto', array());
        $this->config = is_array($config) ? $config : array();
    }

    /**
     * Returns whether the sample is configured for deterministic demo mode.
     *
     * @return bool True in demo mode.
     */
    public function isDemoMode(): bool
    {
        return strtolower((string)($this->config['mode'] ?? self::MODE_DEMO)) !== self::MODE_REAL;
    }

    /**
     * Validates OTTO credentials or demo configuration.
     *
     * @return object ApiWeb validation result.
     */
    public function validateCredentials(): object
    {
        $failure = $this->configuredFailure('validateCredentials');
        if ($failure !== '') {
            return (object)array(
                'Valid' => false,
                'Message' => $this->failureMessage($failure, 'validateCredentials')
            );
        }

        if ($this->isDemoMode()) {
            return (object)array(
                'Valid' => true,
                'Message' => 'ApiWeb OTTO demo mode is reachable. Set APIWEB_OTTO_MODE=real and OTTO_* credentials for live OTTO validation.'
            );
        }

        try {
            $this->request('GET', 'shipping-profiles', null, array('limit' => 1));
            return (object)array(
                'Valid' => true,
                'Message' => 'OTTO credentials are valid and shipping-profiles endpoint is reachable.'
            );
        } catch (ApiWebOttoException $exception) {
            return (object)array(
                'Valid' => false,
                'Message' => $exception->getMessage()
            );
        }
    }

    /**
     * Returns complete or minimal ApiWeb capabilities.
     *
     * @param bool $minimal True for the reduced sample method set.
     * @return object Capabilities DTO.
     */
    public function capabilities(bool $minimal = false): object
    {
        $capabilities = apiWebCapabilities();
        $capabilities->SupportedZahlungsarten = array('OttoMarket', 'Plaza');
        $capabilities->ShippingProfiles = $this->shippingProfiles();

        if ($minimal) {
            $capabilities->Features = array('NoBranding', 'NoDummyText');
            $capabilities->SupportedMethods = array(
                'validateCredentials',
                'getCapabilities',
                'getOrders',
                'setOrderSend',
                'setStock',
                'setPrice',
                'setProcessingTime'
            );
            return $capabilities;
        }

        $capabilities->SupportedMethods = array(
            'validateCredentials',
            'getCapabilities',
            'getShippingProfiles',
            'addArticle',
            'setArticle',
            'delArticle',
            'setStock',
            'setPrice',
            'setProcessingTime',
            'addArticleCrossselling',
            'delArticleCrossselling',
            'addArticleAttribut',
            'setArticleAttribut',
            'delArticleAttribut',
            'addArticleImage',
            'setArticleImage',
            'delArticleImage',
            'addCategory',
            'setCategory',
            'delCategory',
            'addCategoryLink',
            'delCategoryLink',
            'getPortalCategories',
            'getOrders',
            'setOrderSend',
            'setOrderPaid',
            'setOrderCancelled',
            'setReturned',
            'getReturned',
            'getFulfillmentByMarketplaceWarehouse',
            'uploadInvoice',
            'uploadRefund',
            'uploadRefundData',
            'downloadInvoices',
            'downloadRefunds',
            'purge',
            'purgeArticles',
            'purgeCategories'
        );

        return $capabilities;
    }

    /**
     * Loads OTTO shipping profiles or returns configured demo fallback profiles.
     *
     * @return array Shipping profile names or identifiers.
     */
    public function shippingProfiles(): array
    {
        if ($this->isDemoMode()) {
            return apiWebShippingProfiles();
        }

        $response = $this->request('GET', 'shipping-profiles');
        $profiles = $this->collectionFromOttoResponse($response);
        $result = array();

        foreach ($profiles as $profile) {
            if (is_object($profile)) {
                $result[] = (string)($profile->name ?? $profile->shippingProfileName ?? $profile->id ?? '');
            } elseif (is_array($profile)) {
                $result[] = (string)($profile['name'] ?? $profile['shippingProfileName'] ?? $profile['id'] ?? '');
            }
        }

        $result = array_values(array_filter(array_unique($result)));
        return count($result) > 0 ? $result : apiWebShippingProfiles();
    }

    /**
     * Creates or updates an OTTO product variation.
     *
     * @param mixed $item Unicorn article payload.
     * @return object Success object with ShopId.
     */
    public function upsertArticle($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-article');
        }

        $payload = $this->buildProductVariationPayload($item);
        $this->request('POST', 'products', array($payload));
        return $this->successFromItem($item, $this->skuFromArticle($item));
    }

    /**
     * Deactivates an OTTO product variation.
     *
     * @param mixed $item Unicorn article payload.
     * @return object Success object with ShopId.
     */
    public function deactivateArticle($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-article-inactive');
        }

        $sku = $this->skuFromArticle($item);
        $payload = array(array('sku' => $sku, 'active' => false));
        $this->request('POST', 'products/active-status', $payload);
        return $this->successFromItem($item, $sku);
    }

    /**
     * Updates stock through OTTO availability quantities.
     *
     * @param mixed $item Unicorn article or stock payload.
     * @return object Success object with ShopId.
     */
    public function setStock($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-stock');
        }

        $payload = array($this->buildQuantityPayload($item));
        $this->request('POST', 'availability/quantities', $payload);
        return $this->successFromItem($item, $this->skuFromArticle($item));
    }

    /**
     * Updates prices through OTTO Products prices endpoint.
     *
     * @param mixed $item Unicorn article or price payload.
     * @return object Success object with ShopId.
     */
    public function setPrice($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-price');
        }

        $payload = array($this->buildPricePayload($item));
        $this->request('POST', 'products/prices', $payload);
        return $this->successFromItem($item, $this->skuFromArticle($item));
    }

    /**
     * Updates processing time and delivery information.
     *
     * @param mixed $item Unicorn article or processing-time payload.
     * @return object Success object with ShopId.
     */
    public function setProcessingTime($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-processing-time');
        }

        $payload = array($this->buildProcessingTimePayload($item));
        $this->request('POST', 'availability/product-delivery-information', $payload);
        return $this->successFromItem($item, $this->skuFromArticle($item));
    }

    /**
     * Downloads OTTO orders and maps them to Unicorn order DTOs.
     *
     * @param Request|null $request ApiWeb request with order query values.
     * @return array Unicorn order DTOs.
     */
    public function getOrders(?Request $request = null): array
    {
        $failure = $this->configuredFailure('getOrders');
        if ($failure !== '') {
            throw new ApiWebOttoException($this->failureMessage($failure, 'getOrders'), $this->failureCode($failure));
        }

        if ($this->isDemoMode()) {
            return array(apiWebOrder('-otto'));
        }

        $query = $this->orderQuery($request);
        $response = $this->request('GET', 'orders', null, $query);
        $orders = $this->collectionFromOttoResponse($response);
        $result = array();

        foreach ($orders as $order) {
            $result[] = $this->mapOttoOrderToUnicorn($order);
        }

        return $result;
    }

    /**
     * Sends shipment data to OTTO.
     *
     * @param mixed $item Unicorn shipment info payload.
     * @return object Success object with ShopId.
     */
    public function setOrderSend($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-shipment');
        }

        $payload = $this->buildShipmentPayload($item);
        $this->request('POST', 'shipments', $payload);
        return $this->successFromItem($item, apiWebReadProperty($this->orderFromInfo($item), 'ShopId', 'shipment'));
    }

    /**
     * Sends an order cancellation to OTTO.
     *
     * @param mixed $item Unicorn cancellation info payload.
     * @return object Success object with ShopId.
     */
    public function setOrderCancelled($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-cancel');
        }

        $order = $this->orderFromInfo($item);
        $salesOrderId = apiWebReadProperty($order, 'ShopId', '');
        if ($salesOrderId === '') {
            throw new ApiWebOttoException('OTTO cancellation failed: Bestellung.ShopId/salesOrderId is missing.', self::ERROR_MAPPING);
        }

        $this->request('POST', 'orders/{salesOrderId}/cancellation', $this->objectToArray($item), array(), array('salesOrderId' => $salesOrderId));
        return $this->successFromItem($item, $salesOrderId);
    }

    /**
     * Downloads return announcements from OTTO.
     *
     * @param int $days Number of days to query.
     * @return array Return announcement DTOs.
     */
    public function getReturned(int $days): array
    {
        if ($this->isDemoMode()) {
            return array((object)array(
                'WawiId' => 0,
                'ShopId' => 'otto-return-' . gmdate('YmdHis'),
                'BestellungShopId' => 'otto-order-returned',
                'RetourenDatum' => gmdate('c'),
                'Artikel' => array()
            ));
        }

        $response = $this->request('GET', 'returns', null, array(
            'limit' => 50,
            'page' => 1,
            'status' => 'ANNOUNCED',
            'fromDate' => gmdate('Y-m-d', time() - max(1, $days) * 86400)
        ));

        return $this->collectionFromOttoResponse($response);
    }

    /**
     * Downloads OTTO portal categories and maps them to ApiWeb category tree DTOs.
     *
     * @return array Category tree roots.
     */
    public function portalCategories(): array
    {
        if ($this->isDemoMode()) {
            $sample = ApiWebConfig::get('sampleData', array());
            $rootId = is_array($sample) && isset($sample['portalRootId']) ? (string)$sample['portalRootId'] : 'apiweb-root';

            return array((object)array(
                'Id' => $rootId,
                'Name' => 'OTTO Root',
                'Subcategories' => array(
                    (object)array('Id' => $rootId . '-fashion', 'Name' => 'Fashion', 'Subcategories' => array()),
                    (object)array('Id' => $rootId . '-home', 'Name' => 'Home', 'Subcategories' => array())
                )
            ));
        }

        $response = $this->request('GET', 'products/categories');
        $categories = $this->collectionFromOttoResponse($response);
        $result = array();

        foreach ($categories as $category) {
            $result[] = $this->mapOttoCategory($category);
        }

        return $result;
    }

    /**
     * Returns marketplace fulfillment warehouse stock.
     *
     * @return array Article stock DTOs.
     */
    public function fulfillmentWarehouse(): array
    {
        if ($this->isDemoMode()) {
            return array((object)array(
                'WawiId' => 0,
                'ShopId' => 'otto-fbm-stock-1',
                'ArtikelNummer' => 'OTTO-FBM-1',
                'Name' => 'OTTO ApiWeb fulfillment stock sample',
                'Lagerbestand' => 12,
                'StockPolicy' => true
            ));
        }

        return array();
    }

    /**
     * Accepts return data through OTTO returns acceptance.
     *
     * @param mixed $item Unicorn return info payload.
     * @return object Success object with ShopId.
     */
    public function setReturned($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-return-upload');
        }

        $this->request('POST', 'returns/acceptance', $this->objectToArray($item));
        return $this->successFromItem($item, apiWebReadProperty($this->orderFromInfo($item), 'ShopId', 'return'));
    }

    /**
     * Sends refund data through OTTO price reductions.
     *
     * @param mixed $item Unicorn refund info payload.
     * @return object Success object with ShopId.
     */
    public function uploadRefundData($item): object
    {
        if ($this->isDemoMode()) {
            return $this->demoSuccess($item, 'otto-refund-data');
        }

        $this->request('POST', 'price-reductions', $this->objectToArray($item));
        return $this->successFromItem($item, apiWebReadProperty($this->orderFromInfo($item), 'ShopId', 'refund'));
    }

    /**
     * Downloads invoices or refunds from OTTO receipts.
     *
     * @param mixed $item Document download query.
     * @param bool $refunds True to return refund documents.
     * @return array Document DTOs.
     */
    public function downloadReceipts($item, bool $refunds = false): array
    {
        if ($this->isDemoMode()) {
            $documentNumber = ($refunds ? 'G' : 'R') . '-OTTO-1';
            return array((object)array(
                'ShopId' => strtolower($documentNumber),
                'BestellungShopId' => apiWebReadProperty($item, 'MarketplaceOrderId', 'otto-order'),
                $refunds ? 'GutschriftsNr' : 'RechnungsNr' => $documentNumber,
                $refunds ? 'GutschriftsDateiFileExtension' : 'RechnungsDateiFileExtension' => 'pdf',
                $refunds ? 'GutschriftsDateiBase64' : 'RechnungsDateiBase64' => base64_encode('%PDF-1.4 OTTO ApiWeb sample')
            ));
        }

        $response = $this->request('GET', 'receipts', null, array(
            'salesOrderId' => apiWebReadProperty($item, 'MarketplaceOrderId', '')
        ));

        return $this->collectionFromOttoResponse($response);
    }

    /**
     * Applies a generic successful result for not directly OTTO-backed metadata operations.
     *
     * @param mixed $item Source payload.
     * @param string $prefix Generated identifier prefix.
     * @return object Success object.
     */
    public function acknowledge($item, string $prefix): object
    {
        return $this->demoSuccess($item, $prefix);
    }

    /**
     * Builds a successful no-op result for OTTO operations that are represented differently by OTTO.
     *
     * @param mixed $item Source payload.
     * @param string $message Explanation for endpoint logs.
     * @return object Success object.
     */
    public function acknowledgeNoOp($item, string $message): object
    {
        ApiWebLogger::info($message);
        return $this->demoSuccess($item, 'otto-ack');
    }

    /**
     * Adds an ApiWeb item error to a result for an exception.
     *
     * @param Result $result Result that receives the error.
     * @param Throwable $exception Exception to convert.
     * @return void
     */
    public static function addExceptionToResult(Result $result, Throwable $exception): void
    {
        $code = $exception instanceof ApiWebOttoException ? $exception->getApiWebCode() : self::ERROR_UNKNOWN;
        $message = $exception->getMessage();

        if ($exception instanceof ApiWebOttoException &&
            (bool)ApiWebConfig::nested('debug', 'includeRequestContextInErrors', false) &&
            count($exception->getContext()) > 0) {
            $message .= ' Debug context: ' . json_encode($exception->getContext(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }

        $result->addError($code, $message);
        ApiWebLogger::warning('ApiWeb OTTO sample returned item error.', array(
            'code' => $code,
            'message' => $message
        ));
    }

    /**
     * Executes a method and converts exceptions to item-level ApiWeb errors.
     *
     * @param Result $result Result to populate.
     * @param callable $callback Callback that returns an item or array.
     * @return void
     */
    public static function guard(Result $result, callable $callback): void
    {
        try {
            $value = $callback();
            if (is_array($value)) {
                foreach ($value as $entry) {
                    $result->addCollectionEntry($entry);
                }
            } else {
                $result->Item = $value;
            }
        } catch (Throwable $exception) {
            self::addExceptionToResult($result, $exception);
        }
    }

    /**
     * Sends one HTTP request to OTTO markets.
     *
     * @param string $httpMethod HTTP method.
     * @param string $endpoint OTTO logical endpoint.
     * @param mixed $body Request body.
     * @param array $query Query parameters.
     * @param array $path Path replacement values.
     * @return mixed Decoded JSON response, raw body, or null for empty response.
     */
    private function request(string $httpMethod, string $endpoint, $body = null, array $query = array(), array $path = array())
    {
        $url = $this->url($endpoint, $path, $query);
        $headers = array(
            'Accept: application/json',
            'User-Agent: unicorn2-apiweb-otto-sample/2.0'
        );

        $bodyString = '';
        if ($body !== null) {
            $bodyString = json_encode($body, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            if ($bodyString === false) {
                throw new ApiWebOttoException('Could not encode OTTO request JSON.', self::ERROR_MAPPING);
            }

            $headers[] = 'Content-Type: application/json';
        }

        if ($endpoint !== 'token' && $endpoint !== 'oauth2/token') {
            $headers[] = 'Authorization: Bearer ' . $this->accessToken();
        }

        $customerIdentifier = (string)($this->config['customerIdentifier'] ?? '');
        if ($customerIdentifier !== '') {
            $headers[] = 'CustomerId: ' . $customerIdentifier;
        }

        $context = stream_context_create(array(
            'http' => array(
                'method' => strtoupper($httpMethod),
                'header' => implode("\r\n", $headers),
                'content' => $bodyString,
                'ignore_errors' => true,
                'timeout' => (int)($this->config['requestTimeoutSeconds'] ?? 30)
            )
        ));

        ApiWebLogger::debug('OTTO request.', array('method' => $httpMethod, 'endpoint' => $endpoint, 'url' => $url));
        $responseBody = @file_get_contents($url, false, $context);
        $status = $this->statusFromHeaders($http_response_header ?? array());

        if ($responseBody === false) {
            throw new ApiWebOttoException(
                'OTTO API request failed before a response was received. Check DNS, TLS, firewall and hosting allow_url_fopen settings.',
                self::ERROR_API_DOWN,
                array('endpoint' => $endpoint, 'url' => $url)
            );
        }

        $decoded = $responseBody !== '' ? json_decode($responseBody) : null;
        if ($status < 200 || $status >= 300) {
            throw new ApiWebOttoException(
                $this->httpErrorMessage($status, $endpoint, $decoded, $responseBody),
                $this->codeFromHttpStatus($status),
                array('endpoint' => $endpoint, 'status' => $status)
            );
        }

        return $decoded ?? $responseBody;
    }

    /**
     * Gets an access token according to configured auth mode.
     *
     * @return string Bearer token.
     */
    private function accessToken(): string
    {
        if ($this->accessToken !== null && $this->accessToken !== '') {
            return $this->accessToken;
        }

        $authMode = (string)($this->config['authMode'] ?? 'bearer');
        if ($authMode === 'bearer') {
            $token = (string)($this->config['bearer']['accessToken'] ?? '');
            if ($token === '') {
                throw new ApiWebOttoException('OTTO bearer auth is selected but OTTO_ACCESS_TOKEN is empty.', self::ERROR_CONFIGURATION);
            }

            return $this->accessToken = $token;
        }

        if ($authMode === 'legacyPassword') {
            return $this->accessToken = $this->legacyPasswordToken();
        }

        if ($authMode === 'oauth2Installation') {
            return $this->accessToken = $this->oauth2InstallationToken();
        }

        throw new ApiWebOttoException('Unsupported OTTO auth mode: ' . $authMode, self::ERROR_CONFIGURATION);
    }

    /**
     * Requests a legacy username/password token.
     *
     * @return string Access token.
     */
    private function legacyPasswordToken(): string
    {
        $legacy = $this->config['legacyPassword'] ?? array();
        $username = (string)($legacy['username'] ?? '');
        $password = (string)($legacy['password'] ?? '');

        if ($username === '' || $password === '') {
            throw new ApiWebOttoException('OTTO legacy auth requires OTTO_USERNAME and OTTO_PASSWORD.', self::ERROR_CONFIGURATION);
        }

        $body = http_build_query(array(
            'username' => $username,
            'password' => $password,
            'grant_type' => 'password',
            'client_id' => 'token-otto-api'
        ), '', '&');

        $response = $this->formRequest('POST', 'token', $body);
        $token = (string)($response->access_token ?? $response->accessToken ?? '');
        if ($token === '') {
            throw new ApiWebOttoException('OTTO token response did not contain an access token.', self::ERROR_AUTH);
        }

        return $token;
    }

    /**
     * Requests an OAuth2 installation access token without hardcoded client values.
     *
     * @return string Installation access token.
     */
    private function oauth2InstallationToken(): string
    {
        $oauth = $this->config['oauth2Installation'] ?? array();
        $clientId = (string)($oauth['clientId'] ?? '');
        $clientSecret = (string)($oauth['clientSecret'] ?? '');
        $appId = (string)($oauth['appId'] ?? '');
        $installationId = (string)($oauth['installationId'] ?? '');

        if ($clientId === '' || $clientSecret === '' || $appId === '' || $installationId === '') {
            throw new ApiWebOttoException(
                'OTTO OAuth2 installation auth requires OTTO_OAUTH2_CLIENT_ID, OTTO_OAUTH2_CLIENT_SECRET, OTTO_APP_ID and OTTO_INSTALLATION_ID.',
                self::ERROR_CONFIGURATION
            );
        }

        $developerTokenResponse = $this->formRequest('POST', 'oauth2/token', http_build_query(array(
            'grant_type' => 'client_credentials',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'scope' => 'developer'
        ), '', '&'));

        $developerToken = (string)($developerTokenResponse->access_token ?? $developerTokenResponse->accessToken ?? '');
        if ($developerToken === '') {
            throw new ApiWebOttoException('OTTO OAuth2 developer token response did not contain an access token.', self::ERROR_AUTH);
        }

        $endpoint = 'apps/{appId}/installations/{installationId}/accessToken';
        $url = $this->url($endpoint, array('appId' => $appId, 'installationId' => $installationId));
        $context = stream_context_create(array('http' => array(
            'method' => 'POST',
            'header' => implode("\r\n", array(
                'Accept: application/json',
                'Authorization: Bearer ' . $developerToken,
                'User-Agent: unicorn2-apiweb-otto-sample/2.0'
            )),
            'ignore_errors' => true,
            'timeout' => (int)($this->config['requestTimeoutSeconds'] ?? 30)
        )));

        $body = @file_get_contents($url, false, $context);
        $status = $this->statusFromHeaders($http_response_header ?? array());
        $decoded = $body !== false && $body !== '' ? json_decode($body) : null;
        if ($body === false || $status < 200 || $status >= 300) {
            throw new ApiWebOttoException($this->httpErrorMessage($status, $endpoint, $decoded, (string)$body), $this->codeFromHttpStatus($status));
        }

        $token = (string)($decoded->access_token ?? $decoded->accessToken ?? '');
        if ($token === '') {
            throw new ApiWebOttoException('OTTO installation access token response did not contain an access token.', self::ERROR_AUTH);
        }

        return $token;
    }

    /**
     * Sends a form encoded request to OTTO token endpoints.
     *
     * @param string $httpMethod HTTP method.
     * @param string $endpoint OTTO endpoint.
     * @param string $body Form encoded body.
     * @return object Decoded token response.
     */
    private function formRequest(string $httpMethod, string $endpoint, string $body): object
    {
        $url = $this->url($endpoint);
        $context = stream_context_create(array('http' => array(
            'method' => strtoupper($httpMethod),
            'header' => implode("\r\n", array(
                'Accept: application/json',
                'Content-Type: application/x-www-form-urlencoded',
                'User-Agent: unicorn2-apiweb-otto-sample/2.0'
            )),
            'content' => $body,
            'ignore_errors' => true,
            'timeout' => (int)($this->config['requestTimeoutSeconds'] ?? 30)
        )));

        $responseBody = @file_get_contents($url, false, $context);
        $status = $this->statusFromHeaders($http_response_header ?? array());
        $decoded = $responseBody !== false && $responseBody !== '' ? json_decode($responseBody) : null;

        if ($responseBody === false || $status < 200 || $status >= 300 || !is_object($decoded)) {
            throw new ApiWebOttoException($this->httpErrorMessage($status, $endpoint, $decoded, (string)$responseBody), $this->codeFromHttpStatus($status));
        }

        return $decoded;
    }

    /**
     * Builds a full OTTO URL from a logical endpoint.
     *
     * @param string $endpoint Logical endpoint.
     * @param array $path Path replacements.
     * @param array $query Query parameters.
     * @return string Absolute OTTO URL.
     */
    private function url(string $endpoint, array $path = array(), array $query = array()): string
    {
        if (!isset(self::ENDPOINT_VERSIONS[$endpoint])) {
            throw new ApiWebOttoException('Unknown OTTO endpoint in ApiWeb sample: ' . $endpoint, self::ERROR_CONFIGURATION);
        }

        $prefix = 'api';
        $environment = strtolower((string)($this->config['environment'] ?? 'live'));
        if ($environment === 'sandbox') {
            $prefix = 'sandbox.api';
        } elseif ($environment === 'nonlive') {
            $prefix = 'nonlive.api';
        }

        $resolvedEndpoint = $endpoint === 'oauth2/token' ? 'token' : $endpoint;
        foreach ($path as $name => $value) {
            $resolvedEndpoint = str_replace('{' . $name . '}', rawurlencode((string)$value), $resolvedEndpoint);
        }

        $url = 'https://' . $prefix . '.otto.market/' . self::ENDPOINT_VERSIONS[$endpoint] . '/' . $resolvedEndpoint;
        if (count($query) > 0) {
            $url .= '?' . http_build_query($query, '', '&');
        }

        return $url;
    }

    /**
     * Builds a ProductVariation-like payload from Unicorn article data.
     *
     * @param mixed $item Unicorn article payload.
     * @return array OTTO product variation payload.
     */
    private function buildProductVariationPayload($item): array
    {
        $customPayload = $this->readObject($item, 'OttoPayload', null);
        if ($customPayload !== null) {
            return $this->objectToArray($customPayload);
        }

        $sku = $this->skuFromArticle($item);
        $name = apiWebReadProperty($item, 'Name', '');
        $ean = apiWebReadProperty($item, 'Ean', '');
        if ($name === '' || $ean === '') {
            throw new ApiWebOttoException(
                'OTTO product mapping requires at least ArtikelNummer/WawiId, Name and Ean. For full fidelity provide an OttoPayload object generated from OTTO ProductVariation v5 rules.',
                self::ERROR_MAPPING
            );
        }

        return array(
            'sku' => $sku,
            'productReference' => substr(apiWebReadProperty($item, 'ArtikelNummer', $sku), 0, 50),
            'ean' => strlen($ean) === 12 ? '0' . $ean : $ean,
            'productDescription' => array(
                'productLine' => $name,
                'description' => apiWebReadProperty($item, 'Beschreibung', $name)
            ),
            'pricing' => array(
                'standardPrice' => array(
                    'amount' => (float)$this->readObject($item, 'Preis', 0),
                    'currency' => $this->currencyIso($this->readObject($item, 'Waehrung', 0))
                )
            ),
            'mediaAssets' => $this->mediaAssets($item),
            'delivery' => array(
                'type' => 'PARCEL',
                'deliveryTime' => (int)$this->readObject($item, 'ProcessingTimeInDays', 1)
            ),
            'logistics' => array(
                'shippingProfileId' => (string)($this->config['defaults']['shippingProfileId'] ?? '')
            )
        );
    }

    /**
     * Builds an OTTO availability quantity payload.
     *
     * @param mixed $item Unicorn article or stock payload.
     * @return array OTTO quantity payload.
     */
    private function buildQuantityPayload($item): array
    {
        return array(
            'sku' => $this->skuFromArticle($item),
            'availableQuantity' => (int)$this->readObject($item, 'Bestand', $this->readObject($item, 'Lagerbestand', 0)),
            'lastModified' => gmdate('c')
        );
    }

    /**
     * Builds an OTTO price update payload.
     *
     * @param mixed $item Unicorn article or price payload.
     * @return array OTTO price payload.
     */
    private function buildPricePayload($item): array
    {
        return array(
            'sku' => $this->skuFromArticle($item),
            'standardPrice' => array(
                'amount' => (float)$this->readObject($item, 'Preis', $this->readObject($item, 'FinalPreis', 0)),
                'currency' => $this->currencyIso($this->readObject($item, 'Waehrung', 0))
            )
        );
    }

    /**
     * Builds an OTTO product delivery information payload.
     *
     * @param mixed $item Unicorn article or processing payload.
     * @return array OTTO delivery information payload.
     */
    private function buildProcessingTimePayload($item): array
    {
        return array(
            'sku' => $this->skuFromArticle($item),
            'processingTime' => (int)$this->readObject($item, 'ProcessingTimeInDays', 1),
            'shippingProfileId' => (string)$this->readObject($item, 'ShippingProfile', (string)($this->config['defaults']['shippingProfileId'] ?? ''))
        );
    }

    /**
     * Builds a basic OTTO shipment payload from Unicorn shipment information.
     *
     * @param mixed $item Unicorn shipment info payload.
     * @return array OTTO shipment payload.
     */
    private function buildShipmentPayload($item): array
    {
        $order = $this->orderFromInfo($item);
        $salesOrderId = apiWebReadProperty($order, 'ShopId', '');
        if ($salesOrderId === '') {
            throw new ApiWebOttoException('OTTO shipment requires Bestellung.ShopId/salesOrderId.', self::ERROR_MAPPING);
        }

        return array(
            'salesOrderId' => $salesOrderId,
            'carrier' => (string)$this->readObject($item, 'Versanddienstleister', (string)($this->config['defaults']['carrier'] ?? 'DHL')),
            'trackingNumber' => (string)$this->readObject($item, 'TrackingNummer', ''),
            'shipFromAddress' => array(
                'city' => (string)($this->config['defaults']['shipFromCity'] ?? ''),
                'zipCode' => (string)($this->config['defaults']['shipFromZipCode'] ?? ''),
                'countryCode' => (string)($this->config['defaults']['shipFromCountryCode'] ?? 'DEU')
            )
        );
    }

    /**
     * Maps an OTTO order object to a Unicorn order DTO shape.
     *
     * @param mixed $order OTTO order object.
     * @return object Unicorn order DTO.
     */
    private function mapOttoOrderToUnicorn($order): object
    {
        $salesOrderId = (string)($order->salesOrderId ?? '');
        $orderNumber = (string)($order->orderNumber ?? $salesOrderId);
        $items = array();

        foreach (($order->positionItems ?? array()) as $position) {
            $product = $position->product ?? new stdClass();
            $items[] = (object)array(
                'WawiId' => 0,
                'ShopId' => (string)($position->positionItemId ?? ''),
                'ArtikelNummer' => (string)($product->sku ?? ''),
                'Name' => (string)($product->productTitle ?? ''),
                'Ean' => (string)($product->ean ?? ''),
                'Menge' => 1,
                'Preis' => (float)($position->itemValueGrossPrice->amount ?? 0),
                'Waehrung' => Waehrung::EURO,
                'Option1' => (string)($position->fulfillmentStatus ?? '')
            );
        }

        return (object)array(
            'WawiId' => 0,
            'ShopId' => $salesOrderId,
            'Bestellnummer' => $orderNumber,
            'Rechnungsnummer' => '',
            'Waehrung' => Waehrung::EURO,
            'Zahlungsart' => Zahlungsart::OttoMarket,
            'Bestelldatum' => (string)($order->orderDate ?? gmdate('c')),
            'Paid' => true,
            'Send' => false,
            'Artikel' => $items
        );
    }

    /**
     * Maps an OTTO category object to the ApiWeb category tree shape.
     *
     * @param mixed $category OTTO category object.
     * @return object ApiWeb category node.
     */
    private function mapOttoCategory($category): object
    {
        $children = array();
        foreach (($category->children ?? $category->subcategories ?? array()) as $child) {
            $children[] = $this->mapOttoCategory($child);
        }

        return (object)array(
            'Id' => (string)($category->id ?? $category->categoryGroupId ?? $category->name ?? ''),
            'Name' => (string)($category->name ?? $category->title ?? $category->id ?? ''),
            'Subcategories' => $children
        );
    }

    /**
     * Builds order download query parameters.
     *
     * @param Request|null $request ApiWeb request.
     * @return array Query parameters.
     */
    private function orderQuery(?Request $request): array
    {
        $queryItem = $request !== null && isset($request->objects[0]) ? $request->objects[0] : null;
        $state = apiWebReadProperty($queryItem, 'State', 'PROCESSABLE');

        return array(
            'limit' => 20,
            'fulfillmentStatus' => strtoupper($state) === 'OPEN' ? 'ANNOUNCED' : 'PROCESSABLE'
        );
    }

    /**
     * Reads collection resources from common OTTO response shapes.
     *
     * @param mixed $response Decoded response.
     * @return array Collection entries.
     */
    private function collectionFromOttoResponse($response): array
    {
        if (is_array($response)) {
            return $response;
        }

        if (is_object($response)) {
            foreach (array('resources', 'items', 'shippingProfiles', 'receipts', 'returns') as $name) {
                if (isset($response->{$name}) && is_array($response->{$name})) {
                    return $response->{$name};
                }
            }
        }

        return array();
    }

    /**
     * Gets a SKU from a Unicorn article payload.
     *
     * @param mixed $item Unicorn article payload.
     * @return string SKU value.
     */
    private function skuFromArticle($item): string
    {
        $sku = apiWebReadProperty($item, 'ArtikelNummer', '');
        if ($sku === '') {
            $sku = apiWebReadProperty($item, 'ShopId', '');
        }
        if ($sku === '') {
            $sku = apiWebReadProperty($item, 'WawiId', '');
        }
        if ($sku === '') {
            throw new ApiWebOttoException('OTTO mapping requires ArtikelNummer, ShopId, or WawiId to build the SKU.', self::ERROR_MAPPING);
        }

        return substr(trim($sku), 0, 50);
    }

    /**
     * Builds a successful mapping object from a source item.
     *
     * @param mixed $item Source item.
     * @param string $shopId Partner identifier.
     * @return object Result item.
     */
    private function successFromItem($item, string $shopId): object
    {
        $result = is_object($item) ? clone $item : new stdClass();
        $result->ShopId = $shopId;
        $result->Success = true;
        return $result;
    }

    /**
     * Builds a deterministic demo success object.
     *
     * @param mixed $item Source item.
     * @param string $prefix Identifier prefix.
     * @return object Demo success object.
     */
    private function demoSuccess($item, string $prefix): object
    {
        if (apiWebShouldFail($item)) {
            throw new ApiWebOttoException('OTTO demo rejected this object because it contains the marker "fail".', self::ERROR_MAPPING);
        }

        $shopId = apiWebReadProperty($item, 'ShopId', '');
        if ($shopId === '') {
            $shopId = $prefix . '-' . apiWebReadProperty($item, 'WawiId', '0') . '-' . substr(sha1(json_encode($item)), 0, 8);
        }

        return $this->successFromItem($item, $shopId);
    }

    /**
     * Reads a nested order from an order-state DTO.
     *
     * @param mixed $item Order-state DTO.
     * @return mixed Order object or original item.
     */
    private function orderFromInfo($item)
    {
        $order = $this->readObject($item, 'Bestellung', null);
        return $order ?? $item;
    }

    /**
     * Reads a property from object or array.
     *
     * @param mixed $item Source object or array.
     * @param string $property Property name.
     * @param mixed $fallback Fallback value.
     * @return mixed Property value or fallback.
     */
    private function readObject($item, string $property, $fallback = null)
    {
        if (is_object($item) && property_exists($item, $property)) {
            return $item->{$property};
        }
        if (is_array($item) && array_key_exists($property, $item)) {
            return $item[$property];
        }
        return $fallback;
    }

    /**
     * Converts objects recursively to arrays.
     *
     * @param mixed $value Source value.
     * @return mixed Converted value.
     */
    private function objectToArray($value)
    {
        if (is_array($value)) {
            return array_map(array($this, 'objectToArray'), $value);
        }
        if (is_object($value)) {
            return array_map(array($this, 'objectToArray'), get_object_vars($value));
        }
        return $value;
    }

    /**
     * Maps Unicorn currency enum values to ISO codes for OTTO.
     *
     * @param mixed $value Unicorn currency value.
     * @return string ISO currency code.
     */
    private function currencyIso($value): string
    {
        if (is_string($value) && strlen($value) === 3) {
            return strtoupper($value);
        }

        return 'EUR';
    }

    /**
     * Maps article image fields to OTTO media asset placeholders.
     *
     * @param mixed $item Article payload.
     * @return array Media asset payloads.
     */
    private function mediaAssets($item): array
    {
        $images = $this->readObject($item, 'Bilder', array());
        if (!is_array($images)) {
            $images = array();
        }

        $result = array();
        foreach ($images as $image) {
            $url = apiWebReadProperty($image, 'Url', '');
            if ($url !== '') {
                $result[] = array('type' => 'IMAGE', 'location' => $url);
            }
        }

        return $result;
    }

    /**
     * Reads HTTP status from response headers.
     *
     * @param array $headers Response headers.
     * @return int HTTP status code.
     */
    private function statusFromHeaders(array $headers): int
    {
        foreach ($headers as $header) {
            if (preg_match('/^HTTP\/\S+\s+(\d+)/', (string)$header, $matches)) {
                return (int)$matches[1];
            }
        }

        return 0;
    }

    /**
     * Builds a helpful OTTO HTTP error message for Unicorn logs.
     *
     * @param int $status HTTP status.
     * @param string $endpoint Logical endpoint.
     * @param mixed $decoded Decoded JSON body.
     * @param string $rawBody Raw response body.
     * @return string Human-readable error.
     */
    private function httpErrorMessage(int $status, string $endpoint, $decoded, string $rawBody): string
    {
        $detail = '';
        if (is_object($decoded)) {
            $detail = (string)($decoded->message ?? $decoded->error_description ?? $decoded->error ?? '');
        }
        if ($detail === '') {
            $detail = trim(substr($rawBody, 0, 1000));
        }

        if ($status === 401 || $status === 403) {
            return 'OTTO rejected credentials or permissions for endpoint ' . $endpoint . '. Check token, installation, app scopes and seller permissions. ' . $detail;
        }
        if ($status === 429) {
            return 'OTTO quota/rate limit reached for endpoint ' . $endpoint . '. Retry later and reduce request frequency. ' . $detail;
        }
        if ($status >= 500 || $status === 0) {
            return 'OTTO API is currently not reachable or returned a server error for endpoint ' . $endpoint . '. Retry later. ' . $detail;
        }

        return 'OTTO API returned HTTP ' . $status . ' for endpoint ' . $endpoint . '. ' . $detail;
    }

    /**
     * Maps HTTP status to ApiWeb item error code.
     *
     * @param int $status HTTP status.
     * @return int ApiWeb item error code.
     */
    private function codeFromHttpStatus(int $status): int
    {
        if ($status === 401 || $status === 403) {
            return self::ERROR_AUTH;
        }
        if ($status === 429) {
            return self::ERROR_QUOTA;
        }
        if ($status >= 500 || $status === 0) {
            return self::ERROR_API_DOWN;
        }
        if ($status === 400 || $status === 422) {
            return self::ERROR_MAPPING;
        }

        return self::ERROR_UNKNOWN;
    }

    /**
     * Gets configured failure simulation mode for one method.
     *
     * @param string $method ApiWeb method.
     * @return string Failure mode.
     */
    private function configuredFailure(string $method): string
    {
        $failure = (string)ApiWebConfig::nested('debug', 'failureMode', '');
        if ($failure === '' || strpos($failure, ':') === false) {
            return $failure;
        }

        list($configuredMethod, $mode) = explode(':', $failure, 2);
        return $configuredMethod === $method ? $mode : '';
    }

    /**
     * Builds a simulated failure message.
     *
     * @param string $failure Failure mode.
     * @param string $method ApiWeb method.
     * @return string Human-readable failure message.
     */
    private function failureMessage(string $failure, string $method): string
    {
        switch ($failure) {
            case 'invalid_credentials':
                return 'Simulated OTTO credential failure for ' . $method . ': token or app installation is invalid.';
            case 'api_down':
                return 'Simulated OTTO outage for ' . $method . ': API is not reachable, retry later.';
            case 'quota':
                return 'Simulated OTTO quota failure for ' . $method . ': request limit exceeded, retry after backoff.';
            case 'unknown':
                return 'Simulated unknown OTTO failure for ' . $method . ': inspect endpoint logs and request payload.';
            default:
                return '';
        }
    }

    /**
     * Maps a simulated failure mode to an ApiWeb error code.
     *
     * @param string $failure Failure mode.
     * @return int ApiWeb error code.
     */
    private function failureCode(string $failure): int
    {
        switch ($failure) {
            case 'invalid_credentials':
                return self::ERROR_AUTH;
            case 'api_down':
                return self::ERROR_API_DOWN;
            case 'quota':
                return self::ERROR_QUOTA;
            default:
                return self::ERROR_UNKNOWN;
        }
    }
}
