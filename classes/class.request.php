<?php
declare(strict_types=1);

/**
 * Represents and validates one incoming ApiWeb JSON request envelope.
 */
class Request
{
    public string $source = '';
    public string $method = '';
    public string $licenceKey = '';
    public int $shopId = 0;
    public string $createdAtUtc = '';
    public $reference = null;
    public array $objects = array();
    public string $rawBody = '';
    public string $httpMethod = 'POST';

    /**
     * Parses a raw ApiWeb JSON request and validates mandatory envelope fields.
     *
     * @param string $rawBody Raw JSON request body.
     * @param array $headers HTTP request headers.
     * @param string $httpMethod HTTP method used by the request.
     * @param Answer $answer Mutable answer object used for immediate protocol errors.
     */
    public function __construct(string $rawBody, array $headers, string $httpMethod, Answer $answer)
    {
        $this->rawBody = $rawBody;
        $this->httpMethod = strtoupper($httpMethod);

        if ($this->httpMethod !== 'POST') {
            $answer->setError(101, 'ApiWeb only supports POST.');
            $answer->send('unknown', getKey());
        }

        $decoded = json_decode($rawBody, false);
        if (!is_object($decoded)) {
            $answer->setError(101, 'Request body must be a JSON object.');
            $answer->send('unknown', getKey());
        }

        $this->source = self::read($decoded, 'Source', 'source');
        $this->method = self::read($decoded, 'Method', 'method');
        $this->licenceKey = self::read($decoded, 'LicenceKey', 'licenceKey');
        $this->shopId = (int)self::read($decoded, 'ShopId', 'shopId', 0);
        $this->createdAtUtc = self::read($decoded, 'CreatedAtUtc', 'createdAtUtc');
        $this->reference = self::read($decoded, 'Reference', 'reference', null);
        $objects = self::read($decoded, 'Objects', 'objects', array());
        $this->objects = is_array($objects) ? $objects : array();

        $headerMethod = self::header($headers, ApiWebSecurity::HEADER_API_METHOD);
        if ($this->method === '' && $headerMethod !== '') {
            $this->method = $headerMethod;
        }

        if ($this->source !== 'unicorn2' || $this->method === '') {
            $answer->setError(101, 'Source or method is missing.');
            $answer->send($this->method !== '' ? $this->method : 'unknown', getKey());
        }
    }

    /**
     * Reads a PascalCase or camelCase property from the decoded request body.
     *
     * @param object $source Decoded JSON request body.
     * @param string $pascalName PascalCase property name.
     * @param string $camelName camelCase property name.
     * @param mixed $default Value returned when neither property exists.
     * @return mixed Property value or default.
     */
    private static function read(object $source, string $pascalName, string $camelName, $default = '')
    {
        if (property_exists($source, $pascalName)) {
            return $source->{$pascalName};
        }

        if (property_exists($source, $camelName)) {
            return $source->{$camelName};
        }

        return $default;
    }

    /**
     * Reads a request header case-insensitively.
     *
     * @param array $headers Header key/value pairs.
     * @param string $key Header name to read.
     * @return string Header value or an empty string when missing.
     */
    private static function header(array $headers, string $key): string
    {
        foreach ($headers as $headerKey => $value) {
            if (strcasecmp((string)$headerKey, $key) === 0) {
                return (string)$value;
            }
        }

        return '';
    }
}
