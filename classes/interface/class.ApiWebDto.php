<?php
declare(strict_types=1);

/**
 * Base DTO helper for ApiWeb sample objects that can be assigned from arrays or decoded JSON objects.
 */
class ApiWebDto
{
    /**
     * Initializes a DTO and optionally assigns source values.
     *
     * @param mixed $source Optional source array or object.
     */
    public function __construct($source = null)
    {
        if ($source !== null) {
            $this->assign($source);
        }
    }

    /**
     * Copies public source values onto this DTO.
     *
     * @param mixed $source Source array or object.
     * @return void
     */
    public function assign($source)
    {
        $values = is_array($source) ? $source : (is_object($source) ? get_object_vars($source) : array());
        foreach ($values as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     * Converts this DTO to an associative array.
     *
     * @return array Public DTO values.
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
