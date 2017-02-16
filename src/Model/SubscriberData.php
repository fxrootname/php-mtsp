<?php
/**
 * Class SubscriberData
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
namespace DigitalVirgo\MTSP\Model;

/**
 * Class SubscriberData
 */
class SubscriberData extends ModelAbstract
{
    /**
     * @var SubscribedMsisdnsPack[]
     */
    protected $_subscribedMsisdnsPack;

    /**
     * Get array of SubscribedMsisdnsPack's
     *
     * @return SubscribedMsisdnsPack[]
     */
    public function getSubscribedMsisdnsPack()
    {
        return $this->_subscribedMsisdnsPack;
    }

    /**
     * Set SubscribedMsisdnsPack's
     *
     * @param SubscribedMsisdnsPack[] $subscribedMsisdnsPack
     * @return SubscriberData
     */
    public function setSubscribedMsisdnsPack($subscribedMsisdnsPack)
    {
        if (is_array($subscribedMsisdnsPack)) {

            /** @todo find other solution */
            if (!is_numeric(array_keys($subscribedMsisdnsPack)[0])) {
                $subscribedMsisdnsPack = [$subscribedMsisdnsPack];
            }

            foreach ($subscribedMsisdnsPack as $subscribedMsisdnsPackItem) {
                $this->addSubscribedMsisdnsPack($subscribedMsisdnsPackItem);
            }

        } else {
            $this->_subscribedMsisdnsPack = $subscribedMsisdnsPack;
        }

        return $this;
    }

    /**
     * Add new SubscribedMsisdnsPack
     *
     * @param $subscribedMsisdnsPack
     * @return $this
     */
    public function addSubscribedMsisdnsPack($subscribedMsisdnsPack)
    {
        if (is_array($subscribedMsisdnsPack)) {
            $subscribedMsisdnsPack = new SubscribedMsisdnsPack($subscribedMsisdnsPack);
        }

        $this->_subscribedMsisdnsPack[] = $subscribedMsisdnsPack;

        return $this;
    }

    /**
     * Return Dom Map for parser
     *
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'SubscriberData' => [
                'subscribedMsisdnsPack' => 'subscribedMsisdnsPack'
            ]
        ];

    }

}
