<?php

namespace DigitalVirgo\MTSP\Model;

use DigitalVirgo\MTSP\Model\Enum\ServiceType;

class Subscription extends ModelAbstract
{
    /**
     * @var int
     */
    protected $_id;

    /**
     * @var bool
     */
    protected $_active;

    /**
     * @var \DateTime
     */
    protected $_scheduledTo;

    /**
     * @var string
     */
    protected $_serviceName;

    /**
     * @var string
     */
    protected $_serviceType;

    /**
     * @var \DateTime
     */
    protected $_createDate;

    /**
     * @var \DateTime
     */
    protected $_updateDate;

    /**
     * @var \DateTime
     */
    protected $_alertDate;

    /**
     * @var string
     */
    protected $_link;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     * @return Subscription
     */
    public function setId($id)
    {
        $this->_id = (int)$id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->_active;
    }

    /**
     * @param boolean|string $active
     * @return Subscription
     */
    public function setActive($active)
    {
        $this->_active = filter_var($active, FILTER_VALIDATE_BOOLEAN);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledTo()
    {
        return $this->_scheduledTo;
    }

    /**
     * @param \DateTime $scheduledTo
     * @return Subscription
     */
    public function setScheduledTo($scheduledTo)
    {
        if (is_string($scheduledTo)) {
            $scheduledTo = new \DateTime($scheduledTo);
        }

        $this->_scheduledTo = $scheduledTo;
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
     * @return Subscription
     */
    public function setServiceName($serviceName)
    {
        $this->_serviceName = $serviceName;
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
     * @param string $serviceType
     * @return Subscription
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
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->_createDate;
    }

    /**
     * @param \DateTime $createDate
     * @return Subscription
     */
    public function setCreateDate($createDate)
    {
        if (is_string($createDate)) {
            $createDate = new \DateTime($createDate);
        }

        $this->_createDate = $createDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->_updateDate;
    }

    /**
     * @param \DateTime $updateDate
     * @return Subscription
     */
    public function setUpdateDate($updateDate)
    {
        if (is_string($updateDate)) {
            $updateDate = new \DateTime($updateDate);
        }

        $this->_updateDate = $updateDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAlertDate()
    {
        return $this->_alertDate;
    }

    /**
     * @param \DateTime $alertDate
     * @return Subscription
     */
    public function setAlertDate($alertDate)
    {
        if (is_string($alertDate)) {
            $alertDate = new \DateTime($alertDate);
        }

        $this->_alertDate = $alertDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->_link;
    }

    /**
     * @param string $link
     * @return Subscription
     */
    public function setLink($link)
    {
        $this->_link = $link;
        return $this;
    }

    protected function _getDomMap()
    {
        return [
            'subscription' => [
                'id'          => 'id',
                'active'      => 'active',
                'scheduledTo' => 'scheduledTo',
                'serviceName' => 'serviceName',
                'serviceType' => 'serviceType',
                'createDate'  => 'createDate',
                'updateDate'  => 'updateDate',
                'alertDate'   => 'alertDate',
                'link'        => 'link'
            ]
        ];

    }

}
