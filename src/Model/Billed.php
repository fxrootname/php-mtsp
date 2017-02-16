<?php

namespace DigitalVirgo\MTSP\Model;

class Billed extends ModelAbstract
{
    /**
     * @var string
     */
    protected $_msisdn;

    /**
     * @var int
     */
    protected $_accId;

    /**
     * @var string
     */
    protected $_priceNet;

    /**
     * @var string
     */
    protected $_lastTransactionId;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->_msisdn;
    }

    /**
     * @param string $msisdn
     * @return Billed
     */
    public function setMsisdn($msisdn)
    {
        $this->_msisdn = $msisdn;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccId()
    {
        return $this->_accId;
    }

    /**
     * @param int $accId
     * @return Billed
     */
    public function setAccId($accId)
    {
        $this->_accId = (int)$accId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceNet()
    {
        return $this->_priceNet;
    }

    /**
     * @param string $priceNet
     * @return Billed
     */
    public function setPriceNet($priceNet)
    {
        $this->_priceNet = $priceNet;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastTransactionId()
    {
        return $this->_lastTransactionId;
    }

    /**
     * @param string $lastTransactionId
     * @return Billed
     */
    public function setLastTransactionId($lastTransactionId)
    {
        $this->_lastTransactionId = $lastTransactionId;
        return $this;
    }


    /**
     * @return array
     */
    protected function _getDomMap()
    {

        return [
            'billed' => [
                'msisdn'             => 'msisdn',
                'accId'              => 'accId',
                'priceNet'           => 'priceNet',
                'lastTransactionId'  => 'lastTransactionId'
            ]
        ];

    }

}
