<?php
declare(strict_types=1);

/**
 * Base mirror for Unicorn interface objects used by the ApiWeb PHP sample.
 */
class WawiObject
{
    private $_data = array();
    private $_pluginId = null;
    private $_shopId = null;

    public $WawiId = 0;
    public $Shop = null;

    /**
     * Initializes the object and optionally copies source values.
     *
     * @param mixed $source Optional source array or object.
     */
    public function __construct($source = null)
    {
        $this->Shop = class_exists('ShopBase') ? new ShopBase() : null;
        if ($source !== null) {
            $this->assign($source);
        }
    }

    /**
     * Stores dynamic values and normalizes legacy PluginId/ShopId aliases.
     *
     * @param string $name Property name.
     * @param mixed $value Property value.
     * @return void
     */
    public function __set($name, $value)
    {
        switch ($name) {
            case 'PluginId':
                $this->_pluginId = $value === null ? null : (string)$value;
                break;
            case 'ShopId':
                $this->_shopId = $value === null ? null : (string)$value;
                break;
            default:
                $this->_data[$name] = $value;
                break;
        }
    }

    /**
     * Reads dynamic values and legacy PluginId/ShopId aliases.
     *
     * @param string $name Property name.
     * @return mixed Property value or null.
     */
    public function __get($name)
    {
        switch ($name) {
            case 'PluginId':
                return $this->_pluginId ?? $this->ShopId;
            case 'ShopId':
                return $this->_shopId ?? $this->_pluginId ?? 'W-' . $this->WawiId;
            case 'HasShopId':
                return $this->_shopId !== null;
            default:
                if (array_key_exists($name, $this->_data)) {
                    return $this->_data[$name];
                }

                return property_exists($this, $name) ? $this->$name : null;
        }
    }

    /**
     * Initializes this object from another Wawi object or marks it as empty.
     *
     * @param mixed $wawiObject Source Wawi object.
     * @return void
     */
    public function Init($wawiObject)
    {
        if ($wawiObject === null) {
            $this->WawiId = -1;
            return;
        }

        $this->assign($wawiObject);
    }

    /**
     * Copies normalized source values onto this object.
     *
     * @param mixed $source Source array or object.
     * @return void
     */
    public function assign($source)
    {
        foreach ($this->normalize($source) as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     * Converts this object, including dynamic values, to an associative array.
     *
     * @return array Object values.
     */
    public function toArray()
    {
        $result = get_object_vars($this);
        unset($result['_data'], $result['_pluginId'], $result['_shopId']);

        foreach ($this->_data as $name => $value) {
            $result[$name] = $value;
        }

        $result['ShopId'] = $this->ShopId;
        return $result;
    }

    /**
     * Compares this object with another Wawi object by hash code.
     *
     * @param mixed $obj Object to compare.
     * @return bool True when both objects have the same hash code.
     */
    public function Equals($obj)
    {
        return $obj instanceof WawiObject && $this->GetHashCode() === $obj->GetHashCode();
    }

    /**
     * Returns the legacy Wawi object hash code.
     *
     * @return mixed Hash code value.
     */
    public function GetHashCode()
    {
        return $this->WawiId;
    }

    /**
     * Compares this object with another Wawi object by WawiId.
     *
     * @param mixed $obj Object to compare.
     * @return int Comparison result.
     */
    public function CompareTo($obj)
    {
        if (!($obj instanceof WawiObject)) {
            return 1;
        }

        return $this->WawiId <=> $obj->WawiId;
    }

    /**
     * Normalizes arrays and objects to associative arrays for assignment.
     *
     * @param mixed $source Source array or object.
     * @return array Normalized values.
     */
    private function normalize($source)
    {
        if (is_array($source)) {
            return $source;
        }

        if (is_object($source)) {
            return get_object_vars($source);
        }

        return array();
    }
}
