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




//        ALLOWED ASCII CHARACTERS IN TEXT CONTENTS
//0 1 2 3 4 5 6 7 8 9 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d
//e f g h i j k l m n o p q r s t u v w x y z ą ć ę ł ń ó Ś ś ż ź Ą Ć Ę Ł Ń Ó Ś Ż
//Ź ! @ # $ % & * ( ) - _ + = : ; ' " , . / \ < > ?     SP LF CR
//
//
//        ADDITIONAL ALLOWED CHARACTERS IN TEXT CONTENTS FOR RUSSIAN OPERATORS
//                                                           А Б В Г Д Е Ё Ж З И Й К Л М Н О П Р С Т У Ф Х Ц Ч Ш Щ Ъ Ы Ь Э Ю Я а б в г д е ё ж з
//и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я


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