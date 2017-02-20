<?php

namespace DigitalVirgo\MTSP\Model;


use DigitalVirgo\MTSP\Model\Enum\OperatorCode;

class Hlr extends ModelAbstract
{


    /**
     * @var string
     */
    protected $_msisdn;

    /**
     * @var int
     */
    protected $_operator;

    /**
     * @var string
     */
    protected $_imsi;

    /**
     * @var string
     */
    protected $_originalNetworkName;

    /**
     * @var string
     */
    protected $_mccmnc;

    /**
     * @var string
     */
    protected $_roamingCountyName;

    /**
     * @var string
     */
    protected $_originalNetworkPrefix;

    /**
     * @var string
     */
    protected $_originalCountryName;

    /**
     * @var string
     */
    protected $_originalCountryPrefix;

    /**
     * @var bool
     */
    protected $_isNumberPorted;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->_msisdn;
    }

    /**
     * @param string $msisdn
     * @return Hlr
     */
    public function setMsisdn($msisdn)
    {
        $this->_msisdn = $msisdn;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperator()
    {
        return $this->_operator;
    }

    /**
     * @param int $operator
     * @return Hlr
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
    public function getImsi()
    {
        return $this->_imsi;
    }

    /**
     * @param string $imsi
     * @return Hlr
     */
    public function setImsi($imsi)
    {
        $this->_imsi = $imsi;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalNetworkName()
    {
        return $this->_originalNetworkName;
    }

    /**
     * @param string $originalNetworkName
     * @return Hlr
     */
    public function setOriginalNetworkName($originalNetworkName)
    {
        $this->_originalNetworkName = $originalNetworkName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMccmnc()
    {
        return $this->_mccmnc;
    }

    /**
     * @param string $mccmnc
     * @return Hlr
     */
    public function setMccmnc($mccmnc)
    {
        $this->_mccmnc = $mccmnc;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoamingCountyName()
    {
        return $this->_roamingCountyName;
    }

    /**
     * @param string $roamingCountyName
     * @return Hlr
     */
    public function setRoamingCountyName($roamingCountyName)
    {
        $this->_roamingCountyName = $roamingCountyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalNetworkPrefix()
    {
        return $this->_originalNetworkPrefix;
    }

    /**
     * @param string $originalNetworkPrefix
     * @return Hlr
     */
    public function setOriginalNetworkPrefix($originalNetworkPrefix)
    {
        $this->_originalNetworkPrefix = $originalNetworkPrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalCountryName()
    {
        return $this->_originalCountryName;
    }

    /**
     * @param string $originalCountryName
     * @return Hlr
     */
    public function setOriginalCountryName($originalCountryName)
    {
        $this->_originalCountryName = $originalCountryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalCountryPrefix()
    {
        return $this->_originalCountryPrefix;
    }

    /**
     * @param string $originalCountryPrefix
     * @return Hlr
     */
    public function setOriginalCountryPrefix($originalCountryPrefix)
    {
        $this->_originalCountryPrefix = $originalCountryPrefix;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNumberPorted()
    {
        return $this->_isNumberPorted;
    }

    /**
     * @param boolean $isNumberPorted
     * @return Hlr
     */
    public function setIsNumberPorted($isNumberPorted)
    {
        $this->_isNumberPorted = filter_var($isNumberPorted, FILTER_VALIDATE_BOOLEAN);
        return $this;
    }

    /**
     * @inheritDoc
     */
    protected function _getDomMap()
    {
        return [
            'HLR' => [
                'msisdn'                => 'msisdn',
                'operator'              => 'operator',
                'IMSI'                  => 'imsi',
                'originalNetworkName'   => 'originalNetworkName',
                'MCCMNC'                => 'mccmnc',
                'roamingCountyName'     => 'roamingCountyName',
                'originalNetworkPrefix' => 'originalNetworkPrefix',
                'originalCountryName'   => 'originalCountryName',
                'originalCountryPrefix' => 'originalCountryPrefix',
                'isNumberPorted'        => 'isNumberPorted',
            ]
        ];
    }

}