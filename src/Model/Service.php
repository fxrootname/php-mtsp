<?php

namespace DigitalVirgo\MTSP\Model;

use Cron\CronExpression;
use DigitalVirgo\MTSP\Model\Enum\ServiceStatus;
use DigitalVirgo\MTSP\Model\Enum\ServiceType;
use DigitalVirgo\MTSP\Service\Client;

/**
 * Class Service
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Service extends ModelAbstract
{

    /**
     * @var boolean
     */
    protected $_active;

    /**
     * @var \DateTime
     */
    protected $_activeFrom;

    /**
     * @var \DateTime
     */
    protected $_activeTo;

    /**
     * @var string
     */
    protected $_cronSendDates;

    /**
     * @var string
     */
    protected $_description;

    /**
     * @var int
     */
    protected $_id;

    /**
     * @var string
     */
    protected $_sendLa;

    /**
     * @var string
     */
    protected $_serviceName;

    /**
     * @var string
     */
    protected $_serviceType;

    /**
     * @var string
     */
    protected $_serviceStatus;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->_active;
    }

    /**
     * @param boolean|string $active
     * @return Service
     */
    public function setActive($active)
    {
        $this->_active = filter_var($active, FILTER_VALIDATE_BOOLEAN);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActiveFrom()
    {
        return $this->_activeFrom;
    }

    /**
     * @param \DateTime|string $activeFrom
     * @return Service
     */
    public function setActiveFrom($activeFrom)
    {
        if (is_string($activeFrom)) {
            $activeFrom = new \DateTime($activeFrom);
        }

        $this->_activeFrom = $activeFrom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActiveTo()
    {
        return $this->_activeTo;
    }

    /**
     * @param \DateTime|string $activeTo
     * @return Service
     */
    public function setActiveTo($activeTo)
    {
        if (is_string($activeTo)) {
            $activeTo = new \DateTime($activeTo);
        }

        $this->_activeTo = $activeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCronSendDates()
    {
        return $this->_cronSendDates;
    }

    /**
     * @param string $cronSendDates
     * @return Service
     */
    public function setCronSendDates($cronSendDates)
    {
        $this->_cronSendDates = $cronSendDates;
        return $this;
    }

    public function getNextRunDate($currentTime = 'now', $nth = 0)
    {
        if (!$this->getCronSendDates()) {
            throw new \Exception('Missing cronSendDates in Service');
        }

        list($cronString, $secconds) = $this->_quartzToCron($this->getCronSendDates());

        $cronExpression = CronExpression::factory($cronString);

        $nextExecution = $cronExpression->getNextRunDate($currentTime, $nth);

        // set secconds
        if (is_numeric($secconds)) {
            $nextExecution->add(new \DateInterval("PT{$secconds}S"));
        }

        return $nextExecution;
    }

    protected function _quartzToCron($quartzString)
    {
        $quartzString = str_replace("?", "*", $quartzString);

        $parts = explode(" ", $quartzString);

        // add year if missing
        if (count($parts) == 6) {
            $parts[6] = "*";
        }

        //convert months: 4 index
        $parts[4] = str_replace(
            ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            ['1',   '2',   '3',   '4',   '5',   '6',   '7',   '8',   '9',   '10',  '11',  '12'],
            $parts[4]
        );

        //convert day of week: 5 index
        if (is_numeric($parts[5])) { //check number format
            $parts[5] = (int)$parts[5];
            $parts[5]--;
            if ($parts[5] == 0) {
                $parts[5] = 7;
            }
        } else {
            $parts[5] = str_replace(
                ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                ['7',   '1',   '2',   '3',   '4',   '5',   '6'],
                $parts[5]
            );
        }

        //skip secconds
        $secconds = $parts[0];
        unset($parts[0]);

        $cronExpression = implode(" ", $parts);

        return [$cronExpression, $secconds];
       /* return $quartzString;


        return str_replace(
            [
                '?',

                'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'
            ],
            [
                '*',

                '1',   '2',   '3',   '4',   '5',   '6',   '7',   '8',   '9',   '10',  '11',  '12',
            ],
            $quartzString
        );  */
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param string $description
     * @return Service
     */
    public function setDescription($description)
    {
        $this->_description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     * @return Service
     */
    public function setId($id)
    {
        $this->_id = (int)$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSendLa()
    {
        return $this->_sendLa;
    }

    /**
     * @param string $sendLa
     * @return Service
     */
    public function setSendLa($sendLa)
    {
        $this->_sendLa = $sendLa;
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
     * @return Service
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
     * @return Service
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
     * @return string
     */
    public function getServiceStatus()
    {
        return $this->_serviceStatus;
    }

    /**
     * @param string $serviceStatus
     * @return Service
     */
    public function setServiceStatus($serviceStatus)
    {
        if ($serviceStatus && !in_array($serviceStatus, ServiceStatus::getConstants())) {
            throw new \Exception('Invalid serviceStatus value. Accepted: ' . implode(', ', ServiceStatus::getConstants()));
        }

        $this->_serviceStatus = $serviceStatus;
        return $this;
    }

    /**
     * @param null|string|\DateTime $from Optional date from filter
     * @param null|string|\DateTime $to Optional date to filter
     * @param bool $raw return raw xml output
     * @return Subscriptions
     */
    public function getSubscriptions($from = null, $to = null, $raw = false)
    {
        $client = Client::getInstance();

        return $client->getSubscriptions($this->getServiceName(), $from, $to, $raw);
    }

    protected function _getDomMap()
    {
        return [
            'service' => [
                'active'        => 'active',
                'activeFrom'    => 'activeFrom',
                'activeTo'      => 'activeTo',
                'cronSendDates' => 'cronSendDates',
                'description'   => 'description',
                'id'            => 'id',
                'sendLa'        => 'sendLa',
                'serviceName'   => 'serviceName',
                'serviceType'   > 'serviceType',
                'serviceStatus' => 'serviceStatus'
            ]
        ];

    }

}
