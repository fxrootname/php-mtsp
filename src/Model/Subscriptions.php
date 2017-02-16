<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Class Subscriptions
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Subscriptions extends ModelAbstract implements \ArrayAccess, \Iterator
{
    /**
     * @var Subscription[]
     */
    protected $_subscription;

    /**
     * @return Subscription[]
     */
    public function getSubscription()
    {
        return $this->_subscription;
    }

    /**
     * @param Subscription[] $subscription
     * @return Subscriptions
     */
    public function setSubscription($subscription)
    {
        $this->_subscription = $subscription;
        return $this;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value) {
        if (is_array($value)) {
            $value = new Subscription($value);
        }

        if (is_null($offset)) {
            $this->_subscription[] = $value;
        } else {
            $this->_subscription[$offset] = $value;
        }
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset) {
        return isset($this->_subscription[$offset]);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset) {
        unset($this->_subscription[$offset]);
    }

    /**
     * @param mixed $offset
     * @return Subscription|null
     */
    public function offsetGet($offset) {
        return isset($this->_subscription[$offset]) ? $this->_subscription[$offset] : null;
    }

    /**
     * @return Subscription|mixed
     */
    public function current()
    {
        return current($this->_subscription);
    }

    /**
     * @return Subscription|mixed
     */
    public function next()
    {
        return next($this->_subscription);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->_subscription);
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
     * @return Subscription|mixed
     */
    public function rewind()
    {
        return reset($this->_subscription);
    }

    /**
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'subscriptions' => [
                'subscription' => 'subscription'
            ]
        ];

    }

}
