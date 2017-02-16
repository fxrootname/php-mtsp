<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Class SubscribedMsisdnsPack
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class SubscribedMsisdnsPack extends ModelAbstract implements \ArrayAccess, \Iterator
{

    /**
     * @var string
     */
    protected $_operator;

    /**
     * @var string
     */
    protected $_serviceName;

    /**
     * @var Subscribed[]
     */
    protected $_subscribed;

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->_operator;
    }

    /**
     * @param string $operator
     * @return SubscribedMsisdnsPack
     */
    public function setOperator($operator)
    {
        $this->_operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->_serviceName;
    }

    /**
     * @param string $serviceName
     * @return SubscribedMsisdnsPack
     */
    public function setServiceName($serviceName)
    {
        $this->_serviceName = $serviceName;
        return $this;
    }

    /**
     * @return Subscribed[]
     */
    public function getSubscribed()
    {
        return $this->_subscribed;
    }

    /**
     * @param Subscribed[] $subscribed
     * @return SubscribedMsisdnsPack
     */
    public function setSubscribed($subscribed)
    {
        if (is_array($subscribed)) {

            foreach ($subscribed as $subscribedItem) {
                $this->addSubscribed($subscribedItem);
            }

        } else {
            $this->_subscribed = $subscribed;
        }

        return $this;
    }

    /**
     * @param $subscribed
     * @return $this
     */
    public function addSubscribed($subscribed)
    {
        if (is_array($subscribed)) {
            $subscribed = new Subscribed($subscribed);
        }

        $this->_subscribed[] = $subscribed;

        return $this;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value) {
        if (is_array($value)) {
            $value = new Subscribed($value);
        }

        if (is_null($offset)) {
            $this->_subscribed[] = $value;
        } else {
            $this->_subscribed[$offset] = $value;
        }
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset) {
        return isset($this->_subscribed[$offset]);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset) {
        unset($this->_subscribed[$offset]);
    }

    /**
     * @param mixed $offset
     * @return Subscribed|null
     */
    public function offsetGet($offset) {
        return isset($this->_subscribed[$offset]) ? $this->_subscribed[$offset] : null;
    }

    /**
     * @return Subscribed|mixed
     */
    public function current()
    {
        return current($this->_subscribed);
    }

    /**
     * @return Subscribed|mixed
     */
    public function next()
    {
        return next($this->_subscribed);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->_subscribed);
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
     * @return Subscribed|mixed
     */
    public function rewind()
    {
        return reset($this->_subscribed);
    }

    /**
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'subscribedMsisdnsPack' => [
                'operator'    => 'operator',
                'serviceName' => 'serviceName',
                'subscribed'  => 'subscribed',
            ]
        ];

    }

}
