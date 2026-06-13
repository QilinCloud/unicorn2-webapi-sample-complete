<?php
declare(strict_types=1);

/**
 * Represents one ApiWeb protocol or item-level error.
 */
class ApiWebError
{
    public int $Code;
    public string $Message;

    /**
     * Initializes a new ApiWeb error.
     *
     * @param int $code Numeric ApiWeb error code.
     * @param string $message Human-readable error message.
     */
    public function __construct(int $code = -1, string $message = '')
    {
        $this->Code = $code;
        $this->Message = $message;
    }
}
