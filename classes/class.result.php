<?php
declare(strict_types=1);

/**
 * Represents one per-object ApiWeb result entry.
 */
class Result
{
    public array $Errors = array();
    public array $Collection = array();
    public $Item = null;

    /**
     * Initializes a new ApiWeb result for one request item.
     *
     * @param mixed $item Request item or response item associated with this result.
     */
    public function __construct($item = null)
    {
        $this->Item = $item;
    }

    /**
     * Adds one item to the result collection.
     *
     * @param mixed $item Collection item to append.
     * @return void
     */
    public function addCollectionEntry($item): void
    {
        $this->Collection[] = $item;
    }

    /**
     * Adds one item-level error to this result.
     *
     * @param int $code Numeric ApiWeb error code.
     * @param string $message Human-readable error message.
     * @return void
     */
    public function addError(int $code = -1, string $message = ''): void
    {
        $this->Errors[] = new ApiWebError($code, $message);
    }
}
