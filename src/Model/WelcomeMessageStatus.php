<?php
namespace DigitalVirgo\MTSP\Model;

use DigitalVirgo\MTSP\Model\Enum\WelcomeMessageType;
use DigitalVirgo\MTSP\Model\Enum\WelcomeMessageStatus as WelcomeMessageStatusEnum;
use DigitalVirgo\MTSP\Model\Message\ContentCreatorTrait;
use DigitalVirgo\MTSP\Model\Message\ContentCreatorTraitInterface;
use DigitalVirgo\MTSP\Model\Message\ContentsInterface;

/**
 * Class WelcomeMessageStatus
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
class WelcomeMessageStatus extends ModelAbstract implements ContentCreatorTraitInterface
{
    use ContentCreatorTrait;

    /**
     * @var int
     */
    protected $_operatorCode;

    /**
     * @var string
     */
    protected $_statusCode;

    /**
     * @var Message\ContentsInterface
     */
    protected $_contents;

    /**
     * @var boolean
     */
    protected $_active;

    /**
     * @var string
     */
    protected $_type;

    /**
     * @var \DateTime
     */
    protected $_updateDate;

    /**
     * @return int
     */
    public function getOperatorCode()
    {
        return $this->_operatorCode;
    }

    /**
     * @param int $operatorCode
     * @return WelcomeMessageStatus
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
     * @return WelcomeMessageStatus
     */
    public function setStatusCode($statusCode)
    {
        if ($statusCode && !in_array($statusCode, WelcomeMessageStatusEnum::getConstants())) {
            throw new \Exception('Invalid statusCode value. Accepted: ' . implode(', ', WelcomeMessageStatusEnum::getConstants()));
        }

        $this->_statusCode = $statusCode;
        return $this;
    }

    /**
     * @return Message\ContentsInterface
     */
    public function getContents()
    {
        return $this->_contents;
    }

    /**
     * @param Message\ContentsInterface $contents
     * @return WelcomeMessageStatus
     */
    public function setContents($contents)
    {
        if (is_array($contents)) {
            $contents = $this->_createContent($contents, 'SMS');
        } elseif (!$contents instanceof ContentsInterface) {
            throw new \Exception("Invalid contents proviced");
        }


//        var_dump($contents);
//        die;


        //@todo check serialization

        $this->_contents = $contents;
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
     * @param boolean $active
     * @return WelcomeMessageStatus
     */
    public function setActive($active)
    {
        $this->_active = filter_var($active, FILTER_VALIDATE_BOOLEAN);
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param string $type
     * @return WelcomeMessageStatus
     */
    public function setType($type)
    {
        if ($type && !in_array($type, WelcomeMessageType::getConstants())) {
            throw new \Exception('Invalid type value. Accepted: ' . implode(', ', WelcomeMessageType::getConstants()));
        }

        $this->_type = $type;
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
     * @return WelcomeMessageStatus
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
     * @inheritDoc
     */
    protected function _getDomMap()
    {
        return [
            'status' => [
                'operatorCode' => 'operatorCode',
                'statusCode'   => 'statusCode',
                'active' => 'active',
                'contents' => 'contents',
                'type'=>'type',
                'updateDate' => 'updateDate',
            ]
        ];
    }

}