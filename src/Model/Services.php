<?php

namespace DigitalVirgo\MTSP\Model;


class Services extends ModelAbstract implements \ArrayAccess
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

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->_name[] = $value;
        } else {
            $this->_name[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->_name[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->_name[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->_name[$offset]) ? $this->_name[$offset] : null;
    }

    protected function _getDomMap()
    {
        return [
            'services' => [
                'name' => 'name'
            ]
        ];

    }

}
