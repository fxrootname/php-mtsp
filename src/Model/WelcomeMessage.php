<?php
/**
 * Class WelcomeMessage
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model;

/**
 * Class WelcomeMessage
 */
class WelcomeMessage extends ModelAbstract
{

    use ContentsTrait {
        ContentsTrait::_getDomMap as _contentsTraitGetDomMap;
    }

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
     * @var WelcomeMessageStatus[]
     */
    protected $_statuses;

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->_serviceName;
    }

    /**
     * @param string $serviceName
     * @return WelcomeMessage
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
     * @return WelcomeMessage
     */
    public function setServiceType($serviceType)
    {
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
     * @return WelcomeMessage
     */
    public function setCreateDate($createDate)
    {
        $this->_createDate = $createDate;
        return $this;
    }

    /**
     * @return WelcomeMessageStatus[]
     */
    public function getStatuses()
    {
        return $this->_statuses;
    }

    /**
     * @param WelcomeMessageStatus[] $statuses
     * @return WelcomeMessage
     */
    public function setStatuses($statuses)
    {
        if (is_array($statuses)) {

            foreach ($statuses as $status) {
                $this->addStatus($status);
            }

        } else {
            $this->_statuses = $statuses;
        }

        return $this;
    }

    /**
     * @param $status
     * @return $this
     */
    public function addStatus($status)
    {
        if (is_array($status)) {
            $status = new WelcomeMessageStatus($status);
        }

        $this->_statuses[] = $status;

        return $this;
    }

    /**
     * @inheritDoc
     */
    protected function _getDomMap()
    {
        return [
            'welcome_message' => array_merge([
                'serviceName' => 'serviceName',
                'serviceType' => 'serviceType',
                'createDate'  => 'createDate',
                'status'      => 'statuses',
            ], reset($this->_contentsTraitGetDomMap()))
        ];

    }

}
