<?php
declare(strict_types=1);

/**
 * Base mirror for Unicorn mapping objects that carry Wawi and partner identifiers.
 */
class MappingObject extends WawiObject
{
    public $Success = false;
    public $Shop = null;

    /**
     * Initializes a mapping object and ensures a shop mirror exists when available.
     *
     * @param mixed $source Optional source array or object.
     */
    public function __construct($source = null)
    {
        parent::__construct($source);
        if ($this->Shop === null && class_exists('ShopBase')) {
            $this->Shop = new ShopBase();
        }
    }

    /**
     * Initializes this mapping object from another mapping object or creates an empty shop mirror.
     *
     * @param mixed $mappingObject Source mapping object.
     * @return void
     */
    public function Init($mappingObject)
    {
        if ($mappingObject === null) {
            $this->Shop = class_exists('ShopBase') ? new ShopBase() : null;
            return;
        }

        $this->assign($mappingObject);
    }
}
