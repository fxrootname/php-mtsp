<?php

namespace DigitalVirgo\MTSP\Model;

use DigitalVirgo\MTSP\Model\Enum\OperatorCode;
use DigitalVirgo\MTSP\Model\Enum\SubscriptionStatus;

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
     */
    protected $_operatorCode;

    /**
     * @var string
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
        if ($operatorCode && !in_array((int)$operatorCode, OperatorCode::getConstants())) {
            throw new \Exception("Invalid operatorCode value: {$operatorCode}.");
        }

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
        if ($statusCode && !in_array($statusCode, SubscriptionStatus::getConstants())) {
            throw new \Exception('Invalid statusCode value. Accepted: ' . implode(', ', SubscriptionStatus::getConstants()));
        }

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
