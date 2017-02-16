<?php
/**
 * Class ServiceType
 *
 * @package DigitalVirgo\MTSP\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class ServiceType
 */
class ServiceType extends EnumAbstract
{
    const SMS                  = "SMS";
    const WAPPUSH              = "WAPPUSH";
    const MMS                  = "MMS";
    const PERSONALIZED_SMS     = "PERSONALIZED_SMS";
    const PERSONALIZED_WAPPUSH = "PERSONALIZED_WAPPUSH";
    const PERSONALIZED_MMS     = "PERSONALIZED_MMS";

}
