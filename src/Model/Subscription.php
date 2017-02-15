<?php

namespace DigitalVirgo\MTSP\Model;

use DigitalVirgo\MTSP\Model\Enum\ServiceType;
use DigitalVirgo\MTSP\Service\Client;

/**
 * Class Subscription
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Subscription extends ModelAbstract implements ContentsTraitInterface
{
    use ContentsTrait {
        ContentsTrait::_getDomMap as _contentsTraitGetDomMap;
    }

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
     * @var Status[]
     */
    protected $_status = [];

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

    /**
     * @return Status[]
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param Status[]|array $status
     * @return Subscription
     */
    public function setStatus(array $statuses)
    {

        $this->_status = [];

        foreach ($statuses as $status) {
            if (is_array($status)) {
                $status = new Status($status);
            }

            $this->_status[] = $status;
        }

        return $this;
    }

    /**
     * @param Status|array $status
     *
     */
    public function addStatus($status)
    {
        if (is_array($status)) {
            $status = new Status($status);
        }

        $this->_status[] = $status;
    }

    /**
     * Cleans field that not allowed for update
     * @return $this
     */
    public function cleanBeforeSave()
    {
        $this
            ->setAlertDate(null)
            ->setCreateDate(null)
            ->setLink(null)
            ->setStatus(null)
            ->setUpdateDate(null);

        return $this;
    }

    /**
     * Loads additional content using Client API
     *
     * @return $this
     * @throws \Exception
     */
    public function loadMore()
    {
        if (
            (!$this->getId() || !$this->getServiceName())
            && !$this->getLink()
        ) {
            throw new \Exception('Id or ServiceName is required');
        }

        if (!$this->getServiceName()) {
            $this->setServiceName($this->_fetchServiceNameFromLink());
        }

        $client = Client::getInstance();

        $this->fromXml(
            $client->getSubscription($this->getServiceName(), $this->getId(), true)
        );

        return $this;
    }

    /**
     * Returns serviceName from link property
     * @return string
     * @throws \Exception
     */
    protected function _fetchServiceNameFromLink()
    {
        if (!$this->getLink()) {
            throw new \Exception('Link is required');
        }

        $parts = explode('/', $this->getLink());

        if (count($parts) < 3) {
            throw new \Exception('Invalid link value');
        }

        return $parts[2];
    }

    /**
     * @return array
     */
    protected function _getDomMap()
    {
        return [
            'subscription' => array_merge([
                'id'          => 'id',
                'active'      => 'active',
                'scheduledTo' => 'scheduledTo',
                'serviceName' => 'serviceName',
                'serviceType' => 'serviceType',
                'createDate'  => 'createDate',
                'updateDate'  => 'updateDate',
                'alertDate'   => 'alertDate',
                'link'        => 'link',
                'status'      => 'status'
            ], reset($this->_contentsTraitGetDomMap()))
        ];

    }

}
