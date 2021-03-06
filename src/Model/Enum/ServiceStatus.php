<?php
/**
 * Class ServiceStatus
 *
 * @package DigitalVirgo\MTSP\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class ServiceStatus
 */
class ServiceStatus extends EnumAbstract
{
    const CONFIGURE  = "CONFIGURE";
    const TEST       = "TEST";
    const PRODUCTION = "PRODUCTION";

}
