<?php
/**
 * Class Subscribed
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model;

/**
 * Class Subscribed
 */
class Subscribed extends ModelAbstract
{
    /**
     * @var string
     */
    protected $_msisdn;

    /**
     * @var \DateTime
     */
    protected $_startDate;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->_msisdn;
    }

    /**
     * @param string $msisdn
     * @return Subscribed
     */
    public function setMsisdn($msisdn)
    {
        $this->_msisdn = $msisdn;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->_startDate;
    }

    /**
     * @param \DateTime|string $startDate
     * @return Subscribed
     */
    public function setStartDate($startDate)
    {
        if (is_string($startDate)) {
            $startDate = new \DateTime($startDate);
        }

        $this->_startDate = $startDate;
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
            'subscribed' => [
                'msisdn' => 'msisdn',
                'startDate' => 'startDate'
            ]
        ];

    }

}
