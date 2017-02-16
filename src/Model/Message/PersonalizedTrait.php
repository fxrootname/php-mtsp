<?php

namespace DigitalVirgo\MTSP\Model\Message;

use DigitalVirgo\MTSP\Model\ModelAbstractTrait;

/**
 * Class PersonalizedTrait
 * @package DigitalVirgo\MTSP\Model\Message
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 *
 */
trait PersonalizedTrait
{
    use ModelAbstractTrait;

    /**
     * @var string
     */
    protected $_msisdn;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->_msisdn;
    }

    /**
     * @param string $msisdn
     * @return PersonalizedTrait
     */
    public function setMsisdn($msisdn)
    {
        $this->_msisdn = $msisdn;
        return $this;
    }

    /**
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            '' => [
                'msisdn' => 'msisdn',
            ]
        ];

    }

}
