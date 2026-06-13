<?php
declare(strict_types=1);

/**
 * Handles ApiWeb HMAC-SHA256 request validation and response signing.
 */
class ApiWebSecurity
{
    public const SIGNATURE_VERSION = '2026-06-13.hmac-sha256';
    public const HEADER_VERSION = 'X-Unicorn-Signature-Version';
    public const HEADER_SOURCE = 'X-Unicorn-Source';
    public const HEADER_API_METHOD = 'X-Unicorn-Api-Method';
    public const HEADER_TIMESTAMP = 'X-Unicorn-Timestamp';
    public const HEADER_NONCE = 'X-Unicorn-Nonce';
    public const HEADER_BODY_HASH = 'X-Unicorn-Body-Sha256';
    public const HEADER_SIGNATURE = 'X-Unicorn-Signature';
    private const MAX_CLOCK_SKEW_SECONDS = 600;

    /**
     * Reads HTTP request headers across common PHP hosting environments.
     *
     * @return array Header key/value pairs.
     */
    public static function getRequestHeaders(): array
    {
        if (function_exists('getallheaders')) {
            $headers = getallheaders();
            if (is_array($headers)) {
                return $headers;
            }
        }

        $headers = array();
        foreach ($_SERVER as $key => $value) {
            if (strpos($key, 'HTTP_') !== 0) {
                continue;
            }

            $name = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($key, 5)))));
            $headers[$name] = $value;
        }

        return $headers;
    }

    /**
     * Validates the ApiWeb request signature headers.
     *
     * @param array $headers Request headers.
     * @param string $sharedSecret Shared ApiWeb API key.
     * @param string $method ApiWeb method name from the request body.
     * @param string $httpMethod HTTP request method.
     * @param string $rawBody Raw JSON request body.
     * @return bool True when the signature and body hash are valid.
     */
    public static function validateRequest(array $headers, string $sharedSecret, string $method, string $httpMethod, string $rawBody): bool
    {
        $version = self::header($headers, self::HEADER_VERSION);
        $apiMethod = self::header($headers, self::HEADER_API_METHOD);
        $timestamp = self::header($headers, self::HEADER_TIMESTAMP);
        $nonce = self::header($headers, self::HEADER_NONCE);
        $bodyHash = self::header($headers, self::HEADER_BODY_HASH);
        $signature = self::header($headers, self::HEADER_SIGNATURE);

        if ($version !== self::SIGNATURE_VERSION || $apiMethod !== $method) {
            return false;
        }

        if ($timestamp === '' || $nonce === '' || $bodyHash === '' || $signature === '') {
            return false;
        }

        if (abs(time() - (int)$timestamp) > self::MAX_CLOCK_SKEW_SECONDS) {
            return false;
        }

        $expectedHash = self::sha256Base64($rawBody);
        if (!hash_equals($expectedHash, $bodyHash)) {
            return false;
        }

        $canonical = self::canonical($timestamp, $nonce, $method, strtoupper($httpMethod), $bodyHash);
        $expectedSignature = self::hmacSha256Base64($sharedSecret, $canonical);

        return hash_equals($expectedSignature, $signature);
    }

    /**
     * Emits response headers required for Unicorn to validate the ApiWeb response.
     *
     * @param string $sharedSecret Shared ApiWeb API key.
     * @param string $method ApiWeb method name being answered.
     * @param string $body Serialized JSON response body.
     * @return void
     */
    public static function sendResponseHeaders(string $sharedSecret, string $method, string $body): void
    {
        $timestamp = (string)time();
        $nonce = bin2hex(random_bytes(16));
        $bodyHash = self::sha256Base64($body);
        $signature = self::hmacSha256Base64(
            $sharedSecret,
            self::canonical($timestamp, $nonce, $method, 'RESPONSE', $bodyHash)
        );

        header('Content-Type: application/json; charset=utf-8');
        header(self::HEADER_VERSION . ': ' . self::SIGNATURE_VERSION);
        header(self::HEADER_SOURCE . ': apiweb-sample');
        header(self::HEADER_API_METHOD . ': ' . $method);
        header(self::HEADER_TIMESTAMP . ': ' . $timestamp);
        header(self::HEADER_NONCE . ': ' . $nonce);
        header(self::HEADER_BODY_HASH . ': ' . $bodyHash);
        header(self::HEADER_SIGNATURE . ': ' . $signature);
    }

    /**
     * Builds the canonical HMAC input string for ApiWeb signatures.
     *
     * @param string $timestamp Unix timestamp header value.
     * @param string $nonce Random nonce header value.
     * @param string $method ApiWeb method name.
     * @param string $transportMethod HTTP method or RESPONSE marker.
     * @param string $bodyHash Base64 encoded SHA-256 body hash.
     * @return string Canonical signature input.
     */
    private static function canonical(string $timestamp, string $nonce, string $method, string $transportMethod, string $bodyHash): string
    {
        return implode("\n", array(
            self::SIGNATURE_VERSION,
            $timestamp,
            $nonce,
            $method,
            $transportMethod,
            $bodyHash
        ));
    }

    /**
     * Computes a base64 encoded SHA-256 hash.
     *
     * @param string $value Value to hash.
     * @return string Base64 encoded SHA-256 hash.
     */
    private static function sha256Base64(string $value): string
    {
        return base64_encode(hash('sha256', $value, true));
    }

    /**
     * Computes a base64 encoded HMAC-SHA256 signature.
     *
     * @param string $secret Shared ApiWeb API key.
     * @param string $canonical Canonical string to sign.
     * @return string Base64 encoded HMAC-SHA256 signature.
     */
    private static function hmacSha256Base64(string $secret, string $canonical): string
    {
        return base64_encode(hash_hmac('sha256', $canonical, $secret, true));
    }

    /**
     * Reads a header case-insensitively.
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
