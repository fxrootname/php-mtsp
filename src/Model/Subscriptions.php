<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Class Subscriptions
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Subscriptions extends ModelAbstract implements \ArrayAccess
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

    public function offsetExists($offset) {
        return isset($this->_subscription[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->_subscription[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->_subscription[$offset]) ? $this->_subscription[$offset] : null;
    }

    protected function _getDomMap()
    {
        return [
            'subscriptions' => [
                'subscription' => 'subscription'
            ]
        ];

    }

}
