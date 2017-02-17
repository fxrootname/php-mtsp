<?php
/**
 * Class WelcomeMessageStatus
 *
 * @package DigitalVirgo\MTSP\Model\Enum
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class WelcomeMessageStatus
 */
class WelcomeMessageStatus extends EnumAbstract
{

    const CREATED                      = "CREATED";
    const READY_TO_UPDATE              = "READY_TO_UPDATE";
    const SENT_TO_GATEWAY              = "SENT_TO_GATEWAY";
    const NOT_SENT_TO_GATEWAY          = "NOT_SENT_TO_GATEWAY";
    const PROCESSED_BY_GATEWAY         = "PROCESSED_BY_GATEWAY";
    const PROCESSING_BY_GATEWAY_FAILED = "PROCESSING_BY_GATEWAY_FAILED";
    const UNDECLARED_ERROR             = "UNDECLARED_ERROR";

}
