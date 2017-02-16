<?php
/**
 * Class BilledMsisdnsPack
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model;

use DigitalVirgo\MTSP\Model\Enum\BilledStatus;
use DigitalVirgo\MTSP\Model\Enum\OperatorCode;
use DigitalVirgo\MTSP\Model\Enum\ServiceType;

/**
 * Class BilledMsisdnsPack
 */
class BilledMsisdnsPack extends ModelAbstract implements \ArrayAccess, \Iterator
{
    /**
     * @var string
     */
    protected $_operator;

    /**
     * @var string
     */
    protected $_serviceName;

    /**
     * @var int
     */
    protected $_status;

    /**
     * @var int
     */
    protected $_subscriptionId;

    /**
     * @var \DateTime
     */
    protected $_billDate;

    /**
     * @var string
     */
    protected $_serviceType;

    /**
     * @var Billed[]
     */
    protected $_billed;

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->_operator;
    }

    /**
     * @param string $operator
     * @return BilledMsisdnsPack
     * @throws \Exception
     */
    public function setOperator($operator)
    {
        if ($operator && !in_array((int)$operator, OperatorCode::getConstants())) {
            throw new \Exception("Invalid operator value: {$operator}.");
        }

        $this->_operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->_serviceName;
    }

    /**
     * @param string $serviceName
     * @return BilledMsisdnsPack
     */
    public function setServiceName($serviceName)
    {
        $this->_serviceName = $serviceName;
        return $this;
    }

    /**
     * @return Billed[]
     */
    public function getBilled()
    {
        return $this->_billed;
    }

    /**
     * @param Billed[] $billed
     * @return BilledMsisdnsPack
     */
    public function setBilled($billed)
    {
        if (is_array($billed)) {

            foreach ($billed as $billedItem) {
                $this->addBilled($billedItem);
            }

        } else {
            $this->_billed = $billed;
        }

        return $this;
    }

    /**
     * @param $billed
     * @return $this
     */
    public function addBilled($billed)
    {
        if (is_array($billed)) {
            $billed = new Billed($billed);
        }

        $this->_billed[] = $billed;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param int $status
     * @return BilledMsisdnsPack
     */
    public function setStatus($status)
    {
        if ($status && !in_array($status, BilledStatus::getConstants())) {
            throw new \Exception('Invalid status value: ' . $status);
        }

        $this->_status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->_subscriptionId;
    }

    /**
     * @param int $subscriptionId
     * @return BilledMsisdnsPack
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->_subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBillDate()
    {
        return $this->_billDate;
    }

    /**
     * @param \DateTime $billDate
     * @return BilledMsisdnsPack
     */
    public function setBillDate($billDate)
    {
        if (is_string($billDate)) {
            $billDate = new \DateTime($billDate);
        }

        $this->_billDate = $billDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->_serviceType;
    }

    /**
     * @param $serviceType
     * @return BilledMsisdnsPack
     * @throws \Exception
     */
    public function setServiceType($serviceType)
    {
        if ($serviceType && !in_array($serviceType, ServiceType::getConstants())) {
            throw new \Exception('Invalid serviceType value. Accepted: ' . implode(', ', ServiceType::getConstants()));
        }

        $this->_serviceType = $serviceType;
        return $this;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value) {
        if (is_array($value)) {
            $value = new Subscribed($value);
        }

        if (is_null($offset)) {
            $this->_billed[] = $value;
        } else {
            $this->_billed[$offset] = $value;
        }
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset) {
        return isset($this->_billed[$offset]);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset) {
        unset($this->_billed[$offset]);
    }

    /**
     * @param mixed $offset
     * @return Billed|null
     */
    public function offsetGet($offset) {
        return isset($this->_billed[$offset]) ? $this->_billed[$offset] : null;
    }

    /**
     * @return Billed|mixed
     */
    public function current()
    {
        return current($this->_billed);
    }

    /**
     * @return Billed|mixed
     */
    public function next()
    {
        return next($this->_billed);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->_billed);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        $key = $this->key();
        return $key !== null && $key !== false;
    }

    /**
     * @return Subscribed|mixed
     */
    public function rewind()
    {
        return reset($this->_billed);
    }

    /**
     * Return Dom Map for parser
     *
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'billedMsisdnsPack' => [
                'billDate'       => 'billDate',
                'status'         => 'status',
                'subscriptionId' => 'subscriptionId',
                'operator'       => 'operator',
                'serviceName'    => 'serviceName',
                'billed'         => 'billed',
            ]
        ];

    }

}
