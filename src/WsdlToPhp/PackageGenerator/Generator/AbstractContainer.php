<?php

namespace WsdlToPhp\PackageGenerator\Generator;

abstract class AbstractContainer implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var array
     */
    protected $objects;
    /**
     * @var int
     */
    protected $offset;
    /**
     * Very simple cache, holds searches in order to improve preformance for big web services
     * @var array
     */
    private static $cache = array();
    /**
     * @return Container
    */
    public function __construct()
    {
        $this->offset  = 0;
        $this->objects = array();
    }
    /**
     * @param int $offset
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->objects);
    }
    /**
     * @param int $offset
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->objects[$offset] : null;
    }
    /**
     * @param int $offset
     * @param mixed $value
     * @return Container
     */
    public function offsetSet($offset, $value)
    {
        $this->objects[$offset] = $value;
        return $this;
    }
    /**
     * @param int $offset
     * @return Container
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->objects[$offset]);
        }
        return $this;
    }
    /**
     * @return mixed
     */
    public function current()
    {
        return $this->offsetGet($this->offset);
    }
    /**
     * @return mixed
     */
    public function next()
    {
        $this->offset++;
    }
    /**
     * @return int
     */
    public function key()
    {
        return $this->offset;
    }
    /**
     * @return bool
     */
    public function valid()
    {
        return $this->offsetExists($this->offset);
    }
    /**
     * @return Container
     */
    public function rewind()
    {
        $this->offset = 0;
        return $this;
    }
    /**
     * @return int
     */
    public function count()
    {
        return count($this->objects);
    }
    /**
     * Must return the object class name that this container is made to contain
     */
    abstract protected function objectClass();
    /**
     * @param unknown $object
     * @throws \InvalidArgumentException
     * @return Container
     */
    public function add($object)
    {
        if (!is_object($object)) {
            throw new \InvalidArgumentException(sprintf('You must only pass object to this container (%s), "%s" passed as parameter!', get_called_class(), gettype($object)));
        }
        if (get_class($object) !== $this->objectClass()) {
            throw new \InvalidArgumentException(sprintf('Model of type "%s" does not match the object contained by this class: "%s"', get_class($object), $this->objectClass()));
        }
        $this->objects[] = $object;
        return $this;
    }
    /**
     * @param string $key
     * @param string $value
     * @return AbstractModel
     */
    public function get($value, $key)
    {
        if ($this->count() > 0) {
            $cacheValues = array(
                'class'       => get_called_class(),
                'object_class' => $this->objectClass(),
                'value'       => $value,
                'key'         => $key,
            );
            $cachedModel = self::getCache($cacheValues);
            if ($cachedModel === null) {
                foreach ($this->objects as $object) {
                    $get = sprintf('get%s', ucfirst($key));
                    if (!method_exists($object, $get)) {
                        throw new \InvalidArgumentException(sprintf('Property "%s" does not exist or its getter does not exist', $key));
                    }
                    $propertyValue = call_user_func(array(
                        $object,
                        $get,
                    ));
                    if ($value === $propertyValue) {
                        self::setCache($cacheValues, $object);
                        return $object;
                    }
                }
            }
            return $cachedModel;
        }
        return null;
    }
    /**
     * @param array $properties
     * @throws \InvalidArgumentException
     * @return AbstractModel|null
     */
    public function getAs(array $properties)
    {
        if ($this->count() > 0) {
            $cacheValues = array(
                'class'       => get_called_class(),
                'object_class' => $this->objectClass(),
                'properties'  => $properties,
            );
            $cachedModel = self::getCache($properties);
            if ($cachedModel === null) {
                foreach ($this->objects as $object) {
                    $same = true;
                    foreach ($properties as $name=>$value) {
                        $get = sprintf('get%s', ucfirst($name));
                        if (!method_exists($object, $get)) {
                            throw new \InvalidArgumentException(sprintf('Property "%s" does not exist or its getter does not exist', $name));
                        }
                        $propertyValue = call_user_func(array(
                            $object,
                            $get,
                        ));
                        $same &= $propertyValue === $value;
                    }
                    if ((bool)$same === true) {
                        self::setCache($cacheValues, $object);
                        return $object;
                    }
                }
            }
            return $cachedModel;
        }
        return null;
    }
    /**
     * @param array $values
     * @return mixed
     */
    private static function getCache(array $values)
    {
        $key = self::cacheKey($values);
        return array_key_exists($key, self::$cache) ? self::$cache[$key] : null;
    }
    /**
     * @param array $values
     * @return Container
     */
    private static function purgeCache(array $values)
    {
        if (self::getCache($values)) {
            unset(self::$cache[self::cacheKey($values)]);
        }
    }
    /**
     * @param array $values
     * @param mixed $value
     * @return Container
     */
    private static function setCache(array $values, $value)
    {
        self::$cache[self::cacheKey($values)] = $value;
    }
    /**
     * @param array $values
     * @return string
     */
    private static function cacheKey(array $values)
    {
        return sprintf('_%s', var_export($values, true));
    }
}
