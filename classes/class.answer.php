<?php
declare(strict_types=1);

/**
 * Represents the ApiWeb JSON response envelope returned to Unicorn.
 */
class Answer
{
    public array $Results = array();
    public ?ApiWebError $Error = null;
    public string $Key = '';
    public bool $Stop;

    /**
     * Initializes a new ApiWeb answer envelope.
     *
     * @param bool $stop Whether Unicorn should stop processing additional items.
     */
    public function __construct(bool $stop = false)
    {
        $this->Stop = $stop;
    }

    /**
     * Sets the response key value.
     *
     * @param string $key Authentication or response marker value.
     * @return void
     */
    public function setKey(string $key): void
    {
        $this->Key = $key;
    }

    /**
     * Sets a predefined ApiWeb protocol error by numeric code.
     *
     * @param int $code ApiWeb protocol error code.
     * @return void
     */
    public function setErrorCode(int $code): void
    {
        $message = '';

        switch ($code) {
            case 100:
                return;
            case 101:
                $message = 'parameter is missing';
                break;
            case 102:
                $message = 'authentification is not valid';
                break;
            case 103:
                $message = 'licence is not valid';
                break;
            default:
                $message = 'unknown ApiWeb error';
                break;
        }

        $this->setError($code, $message);
    }

    /**
     * Sets a custom ApiWeb protocol error.
     *
     * @param int $code ApiWeb error code.
     * @param string $message Human-readable error message.
     * @return void
     */
    public function setError(int $code = -1, string $message = ''): void
    {
        $this->Error = new ApiWebError($code, $message);
    }

    /**
     * Adds one result object to the answer.
     *
     * @param Result $result ApiWeb result to append.
     * @return bool Always true for legacy compatibility.
     */
    public function addResult(Result $result): bool
    {
        $this->Results[] = $result;
        return true;
    }

    /**
     * Reduces write-operation result payloads to the fields Unicorn needs.
     *
     * @param string $method ApiWeb method name.
     * @return void
     */
    public function prepare(string $method): void
    {
        if (!preg_match('/^(add|set|del|upload|purge)/i', $method)) {
            return;
        }

        $nonRemovalProperties = array('WawiId', 'ShopId', 'Name', 'Bestellnummer', 'Rechnungsnummer', 'Success');
        foreach ($this->Results as $result) {
            if ($result->Item !== null) {
                $result->Item = $this->removeRecursive($result->Item, $nonRemovalProperties);
            }
        }
    }

    /**
     * Sends a signed JSON ApiWeb response and terminates the request.
     *
     * @param string $method ApiWeb method being answered.
     * @param string $sharedSecret Shared ApiWeb API key used for response signing.
     * @return void
     */
    public function send(string $method, string $sharedSecret): void
    {
        $body = json_encode($this, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        if ($body === false) {
            $body = '{"Error":{"Code":999,"Message":"Could not encode ApiWeb response."},"Results":[],"Key":"","Stop":false}';
        }

        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        ApiWebSecurity::sendResponseHeaders($sharedSecret, $method, $body);
        echo $body;
        exit;
    }

    /**
     * Removes all object properties except the fields required by Unicorn write callbacks.
     *
     * @param mixed $object Object to sanitize.
     * @param array $allowedProperties Property names that should remain in the response.
     * @return mixed Sanitized object or the original non-object value.
     */
    private function removeRecursive($object, array $allowedProperties)
    {
        if (!is_object($object)) {
            return $object;
        }

        $clean = new stdClass();
        foreach (get_object_vars($object) as $property => $value) {
            if (in_array($property, $allowedProperties, true)) {
                $clean->{$property} = $value;
            }
        }

        return $clean;
    }
}
