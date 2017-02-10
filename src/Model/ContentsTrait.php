<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Class ContentsTrait
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
trait ContentsTrait {
    use ModelAbstractTrait;

    protected $_sms;
    protected $_mms;
    protected $_wapPush;
    protected $_personalizedSms;
    protected $_personalizedMms;
    protected $_personalizedWapPush;

    /**
     * @return mixed
     */
    public function getSms()
    {
        return $this->_sms;
    }

    /**
     * @param mixed $sms
     * @return ContentsTrait
     */
    public function setSms($sms)
    {
        $this->_sms = $sms;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMms()
    {
        return $this->_mms;
    }

    /**
     * @param mixed $mms
     * @return ContentsTrait
     */
    public function setMms($mms)
    {
        $this->_mms = $mms;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWapPush()
    {
        return $this->_wapPush;
    }

    /**
     * @param mixed $wapPush
     * @return ContentsTrait
     */
    public function setWapPush($wapPush)
    {
        $this->_wapPush = $wapPush;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonalizedSms()
    {
        return $this->_personalizedSms;
    }

    /**
     * @param mixed $personalizedSms
     * @return ContentsTrait
     */
    public function setPersonalizedSms($personalizedSms)
    {
        $this->_personalizedSms = $personalizedSms;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonalizedMms()
    {
        return $this->_personalizedMms;
    }

    /**
     * @param mixed $personalizedMms
     * @return ContentsTrait
     */
    public function setPersonalizedMms($personalizedMms)
    {
        $this->_personalizedMms = $personalizedMms;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonalizedWapPush()
    {
        return $this->_personalizedWapPush;
    }

    /**
     * @param mixed $personalizedWapPush
     * @return ContentsTrait
     */
    public function setPersonalizedWapPush($personalizedWapPush)
    {
        $this->_personalizedWapPush = $personalizedWapPush;
        return $this;
    }



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