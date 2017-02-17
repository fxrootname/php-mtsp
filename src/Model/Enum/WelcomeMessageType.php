<?php
/**
 * Class WelcomeMessageType
 *
 * @package DigitalVirgo\MTSP\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class WelcomeMessageType
 */
class WelcomeMessageType extends EnumAbstract
{

    const NOT_SUPPORTED          = "NOT_SUPPORTED";
    const FREE_PREDEFINED        = "FREE_PREDEFINED";
    const FREE_LAST_SUBSCRIPTION = "FREE_LAST_SUBSCRIPTION";
    const BILL_PREDEFINED        = "BILL_PREDEFINED";
    const BILL_LAST_SUBSCRIPTION = "BILL_LAST_SUBSCRIPTION";
}
