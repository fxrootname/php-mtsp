<?php

namespace DigitalVirgo\MTSP\Model;

use DigitalVirgo\MTSP\Model\Message;

/**
 * Class ContentsTrait
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
trait ContentsTrait {
    use ModelAbstractTrait;

    /**
     * @var Message\Sms
     */
    protected $_sms;

    /**
     * @var Message\Mms
     */
    protected $_mms;

    /**
     * @var Message\WapPush
     */
    protected $_wapPush;

    /**
     * @var Message\PersonalizedSms
     */
    protected $_personalizedSms;

    /**
     * @var Message\PersonalizedMms
     */
    protected $_personalizedMms;

    /**
     * @var Message\PersonalizedWapPush
     */
    protected $_personalizedWapPush;

    /**
     * @return Message\Sms
     */
    public function getSms()
    {
        return $this->_sms;
    }

    /**
     * @param Message\Sms|array $sms
     * @return $this
     */
    public function setSms($sms)
    {
        if (is_array($sms)) {
            $sms = new Message\Sms($sms);
        }

        $this->_sms = $sms;
        return $this;
    }

    /**
     * @return Message\Mms
     */
    public function getMms()
    {
        return $this->_mms;
    }

    /**
     * @param Message\Mms|array $mms
     * @return $this
     */
    public function setMms($mms)
    {
        if (is_array($mms)) {
            $mms = new Message\Mms($mms);
        }

        $this->_mms = $mms;
        return $this;
    }

    /**
     * @return Message\WapPush
     */
    public function getWapPush()
    {
        return $this->_wapPush;
    }

    /**
     * @param Message\WapPush|array $wapPush
     * @return $this
     */
    public function setWapPush($wapPush)
    {
        if (is_array($wapPush)) {
            $wapPush = new Message\WapPush($wapPush);
        }

        $this->_wapPush = $wapPush;
        return $this;
    }

    /**
     * @return Message\PersonalizedSms
     */
    public function getPersonalizedSms()
    {
        return $this->_personalizedSms;
    }

    /**
     * @param Message\PersonalizedSms|array $personalizedSms
     * @return $this
     */
    public function setPersonalizedSms($personalizedSms)
    {
        if (is_array($personalizedSms)) {
            $personalizedSms = new Message\PersonalizedSms($personalizedSms);
        }

        $this->_personalizedSms = $personalizedSms;
        return $this;
    }

    /**
     * @return Message\PersonalizedMms
     */
    public function getPersonalizedMms()
    {
        return $this->_personalizedMms;
    }

    /**
     * @param Message\PersonalizedMms|array $personalizedMms
     * @return $this
     */
    public function setPersonalizedMms($personalizedMms)
    {
        if (is_array($personalizedMms)) {
            $personalizedMms = new Message\PersonalizedMms($personalizedMms);
        }

        $this->_personalizedMms = $personalizedMms;
        return $this;
    }

    /**
     * @return Message\PersonalizedWapPush
     */
    public function getPersonalizedWapPush()
    {
        return $this->_personalizedWapPush;
    }

    /**
     * @param Message\PersonalizedWapPush|array $personalizedWapPush
     * @return $this
     */
    public function setPersonalizedWapPush($personalizedWapPush)
    {
        if (is_array($personalizedWapPush)) {
            $personalizedWapPush = new Message\PersonalizedWapPush($personalizedWapPush);
        }

        $this->_personalizedWapPush = $personalizedWapPush;
        return $this;
    }

    /**
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            '' => [
                'sms'                 => 'sms',
                'mms'                 => 'mms',
                'wapPush'             => 'wapPush',
                'personalizedSms'     => 'personalizedSms',
                'personalizedMms'     => 'personalizedMms',
                'personalizedWapPush' => 'personalizedWapPush'
            ]
        ];

    }
}