<?php
/**
 * Class BilledData
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model;

/**
 * Class BilledData
 */
class BilledData extends ModelAbstract
{
    /**
     * @var BilledMsisdnsPack[]
     */
    protected $_billedMsisdnsPack;

    /**
     * @var boolean
     */
    protected $_endFlag;


    /**
     * @return BilledMsisdnsPack[]
     */
    public function getBilledMsisdnsPack()
    {
        return $this->_billedMsisdnsPack;
    }

    /**
     * @param BilledMsisdnsPack[] $billedMsisdnsPack
     * @return BilledData
     */
    public function setBilledMsisdnsPack($billedMsisdnsPack)
    {
        if (is_array($billedMsisdnsPack)) {

            /** @todo find other solution */
            if (!is_numeric(array_keys($billedMsisdnsPack)[0])) {
                $billedMsisdnsPack = [$billedMsisdnsPack];
            }

            foreach ($billedMsisdnsPack as $billedMsisdnsPackItem) {
                $this->addBilledMsisdnsPack($billedMsisdnsPackItem);
            }

        } else {
            $this->_billedMsisdnsPack = $billedMsisdnsPack;
        }

        return $this;
    }

    /**
     * @param $billedMsisdnsPack
     * @return $this
     */
    public function addBilledMsisdnsPack($billedMsisdnsPack)
    {
        if (is_array($billedMsisdnsPack)) {
            $billedMsisdnsPack = new BilledMsisdnsPack($billedMsisdnsPack);
        }

        $this->_billedMsisdnsPack[] = $billedMsisdnsPack;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isEndFlag()
    {
        return $this->_endFlag;
    }

    /**
     * @param boolean $endFlag
     * @return BilledData
     */
    public function setEndFlag($endFlag)
    {
        $this->_endFlag = filter_var($endFlag, FILTER_VALIDATE_BOOLEAN);
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
            'BilledData' => [
                'billedMsisdnsPack' => 'billedMsisdnsPack',
                'endFlag' => 'endFlag'
            ]
        ];

    }

}
