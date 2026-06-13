<?php
declare(strict_types=1);

/**
 * Validates ApiWeb request authentication before endpoint dispatch.
 */
class Authentification
{
    /**
     * Authenticates one ApiWeb request and sends an error answer when validation fails.
     *
     * @param Request $request Parsed ApiWeb request.
     * @param string $sharedSecret Shared ApiWeb API key.
     * @param Answer $answer Mutable answer object used for immediate error responses.
     * @param array $headers Request headers.
     */
    public function __construct(Request $request, string $sharedSecret, Answer $answer, array $headers)
    {
        if ($sharedSecret === '') {
            $answer->setError(102, 'ApiWeb shared secret is missing.');
            $answer->send($request->method, $sharedSecret);
        }

        if (!ApiWebSecurity::validateRequest($headers, $sharedSecret, $request->method, $request->httpMethod, $request->rawBody)) {
            $answer->setErrorCode(102);
            $answer->send($request->method, $sharedSecret);
        }

        $answer->setKey('ok');
    }
}
