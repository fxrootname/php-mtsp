<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Interface ContentsTrait
 * @package DigitalVirgo\MTSP\Model
 */
interface ContentsTraitInterface {

    /**
     * @return mixed
     */
    public function getSms();

    /**
     * @param mixed $sms
     * @return ContentsTrait
     */
    public function setSms($sms);

    /**
     * @return mixed
     */
    public function getMms();

    /**
     * @param mixed $mms
     * @return ContentsTrait
     */
    public function setMms($mms);

    /**
     * @return mixed
     */
    public function getWapPush();

    /**
     * @param mixed $wapPush
     * @return ContentsTrait
     */
    public function setWapPush($wapPush);

    /**
     * @return mixed
     */
    public function getPersonalizedSms();

    /**
     * @param mixed $personalizedSms
     * @return ContentsTrait
     */
    public function setPersonalizedSms($personalizedSms);

    /**
     * @return mixed
     */
    public function getPersonalizedMms();

    /**
     * @param mixed $personalizedMms
     * @return ContentsTrait
     */
    public function setPersonalizedMms($personalizedMms);

    /**
     * @return mixed
     */
    public function getPersonalizedWapPush();

    /**
     * @param mixed $personalizedWapPush
     * @return ContentsTrait
     */
    public function setPersonalizedWapPush($personalizedWapPush);

}