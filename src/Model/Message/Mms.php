<?php
/**
 * Class Mms
 *
 * @package DigitalVirgo\MTSP\Model\Message
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Message;

use DigitalVirgo\MTSP\Model\ModelAbstract;
use DigitalVirgo\MTSP\Model\Message\Mms\MmsPart;
use DigitalVirgo\MTSP\Util\Helper;

/**
 * Class Mms
 */
class Mms extends ModelAbstract
{
    /**
     * @var MmsPart[]
     */
    protected $_mmsParts;

    /**
     * @var string
     */
    protected $_title;

    /**
     * @return MmsPart[]
     */
    public function getMmsParts()
    {
        return $this->_mmsParts;
    }

    /**
     * @param array $mmsParts
     * @return $this
     */
    public function setMmsParts(array $mmsParts)
    {
        foreach ($mmsParts as $mmsPartData) {
            $this->addMmsPart($mmsPartData);
        }

        return $this;
    }

    /**
     * @param array|MmsPart $mmsPart
     * @return $this
     */
    public function addMmsPart($mmsPart) {
        if (is_array($mmsPart)) {
            $mmsPart = new MmsPart($mmsPart);
        }

        $this->_mmsParts[] = $mmsPart;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     * @return Mms
     */
    public function setTitle($title)
    {
        if (!Helper::isMessageTextValid($title)) {
            throw new \Exception('Title have invalid characters');
        }

        $this->_title = $title;
        return $this;
    }

    /**
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'mms' => [
                'mmsParts' => 'mmsParts',
                'title' => 'title'
            ]
        ];
    }

}
