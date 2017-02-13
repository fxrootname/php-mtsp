<?php

namespace DigitalVirgo\MTSP\Model\Message\Mms;

use \DigitalVirgo\MTSP\Model\ModelAbstract;

/**
 * Class MmsPart
 * @package DigitalVirgo\MTSP\Model\Message\Mms
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class MmsPart extends ModelAbstract
{

    /**
     * @var string mms data in base64
     * @todo validate is base64
     */
    protected $_data;

    /**
     * @var string data mime type
     * @todo validate mimeType
     */
    protected $_mimeType;

    /**
     * @var string mmsPart name
     */
    protected $_name;

    /**
     * @return string
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @param string $data
     * @return MmsPart
     */
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->_mimeType;
    }

    /**
     * @param string $mimeType
     * @return MmsPart
     */
    public function setMimeType($mimeType)
    {
        $this->_mimeType = $mimeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     * @return MmsPart
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    protected function _getDomMap()
    {
        return [
            'mmsParts' => [
                'data' => 'data',
                'mimeType' => 'mimeType',
                'name' => 'name'
            ]
        ];
    }
}