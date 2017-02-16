<?php
/**
 * Class Services
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model;

/**
 * Class Services
 */
class Services extends ModelAbstract implements \ArrayAccess, \Iterator
{
    /**
     * @var string[]
     */
    protected $_name;

    /**
     * @return \string[]
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param \string[] $name
     * @return Services
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->_name[] = $value;
        } else {
            $this->_name[$offset] = $value;
        }
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset) {
        return isset($this->_name[$offset]);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset) {
        unset($this->_name[$offset]);
    }

    /**
     * @param mixed $offset
     * @return null|string
     */
    public function offsetGet($offset) {
        return isset($this->_name[$offset]) ? $this->_name[$offset] : null;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->_name);
    }

    /**
     * @return mixed
     */
    public function next()
    {
        return next($this->_name);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->_name);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        $key = $this->key();
        return $key !== null && $key !== false;
    }

    /**
     * @return mixed
     */
    public function rewind()
    {
        return reset($this->_name);
    }

    /**
     * Return Dom Map for parser
     *
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'services' => [
                'name' => 'name'
            ]
        ];

    }

}
