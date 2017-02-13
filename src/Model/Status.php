<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Class Status
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Status extends ModelAbstract
{

    /**
     * @var int
     * @todo validate by enum
     */
    protected $_operatorCode;

    /**
     * @var string
     * @todo validate by enum
     */
    protected $_statusCode;

    /**
     * @return int
     */
    public function getOperatorCode()
    {
        return $this->_operatorCode;
    }

    /**
     * @param int $operatorCode
     * @return Status
     */
    public function setOperatorCode($operatorCode)
    {
        $this->_operatorCode = (int)$operatorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->_statusCode;
    }

    /**
     * @param string $statusCode
     * @return Status
     */
    public function setStatusCode($statusCode)
    {
        $this->_statusCode = $statusCode;
        return $this;
    }

    protected function _getDomMap()
    {
        return [
            'status' => [
                'operatorCode' => 'operatorCode',
                'statusCode'   => 'statusCode'
            ]
        ];
    }

}