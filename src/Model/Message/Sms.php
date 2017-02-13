<?php

namespace DigitalVirgo\MTSP\Model\Message;

use DigitalVirgo\MTSP\Model\ModelAbstract;

/**
 * Class Sms
 * @package DigitalVirgo\MTSP\Model\Message
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Sms extends ModelAbstract
{

    /**
     * @var string
     */
    protected $_text;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * @param string $text
     * @return Sms
     */
    public function setText($text)
    {
        $this->_text = $text;
        return $this;
    }

    protected function _getDomMap()
    {
        return [
            'sms' => [
                'text' => 'text'
            ]
        ];
    }

}