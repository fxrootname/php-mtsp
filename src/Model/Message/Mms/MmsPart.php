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

    /**
     * Converts file Into MmsPart object
     *
     * @param $filePath
     * @return MmsPart
     * @throws \Exception
     */
    public static function fromFile($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \Exception('File does not exists.');
        }

        $mmsPart = (new self())
            ->setName(pathinfo($filePath, PATHINFO_BASENAME))
            ->setMimeType(mime_content_type($filePath))
            ->setData(base64_encode(file_get_contents($filePath)))
        ;

        return $mmsPart;
    }


    /**
     * Save MmsPart to file
     * @param string $fileLocation File destination
     * @return $this
     * @throws \Exception
     */
    public function saveToFile($fileLocation)
    {
        if (!$this->getData()) {
            throw new \Exception("Empty data!");
        }

        $dirName  = $fileLocation;
        $baseName = $this->getName();

        if (!is_dir($fileLocation)) {
            $baseName = pathinfo($fileLocation, PATHINFO_BASENAME);
            $dirName  = pathinfo($fileLocation, PATHINFO_DIRNAME);
        }

        if (!is_writable($dirName)) {
            throw new \Exception("Unable to save file.");
        }

        if ((substr($dirName, strlen($dirName) - 1)) !== '/') {
            $filePath = $dirName . '/' . $baseName;
        } else {
            $filePath = $dirName . $baseName;
        }

        if (file_exists($filePath) && !is_writable($filePath)) {
            throw new \Exception("Unable to overwrite file.");
        }

        file_put_contents($filePath, base64_decode($this->getData()));

        return $this;
    }

    /**
     * @return array
     */
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
