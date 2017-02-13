<?php

namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class SubscriptionStatus
 * @package DigitalVirgo\MTSP\Model\Enum
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class SubscriptionStatus extends EnumAbstract
{
    const SUBSCRIPTION_READY_TO_BUILD                   = "1";
    const SUBSCRIPTION_READY_TO_SEND                    = "2";
    const SUBSCRIPTION_SENT_TO_GATEWAY                  = "3";
    const SUBSCRIPTION_NOT_TO_SEND                      = "4";
    const SUBSCRIPTION_RESPONSE_SUCCESSFUL              = "5";
    const SUBSCRIPTION_INACTIVE                         = "-1";
    const SUBSCRIPTION_FAULT_RESPONSE                   = "-5";
    const SUBSCRIPTION_FAILURE_WHILE_SENDING_TO_GATEWAY = "-3";
    const SUBSCRIPTION_NO_CONTENT_FAULT                 = "-6";
    const BILLING_SENT_TO_GATEWAY                       = "13";
    const BILLING_SUCCESSFUL                            = "15";
    const BILLING_FAILURE_AFTER_SENT_TO_GATEWAY         = "-13";
    const BILLING_FAULT_RESPONSE                        = "-15";
    const BILLING_REQUEST_NOT_SUPPORTED                 = "19";
    const SERVICE_OUT_OF_DATE                           = "-21";
    const SERVICE_INACTIVE                              = "-22";
    const BILLING_ERROR                                 = "-19";
    const UNDECLARED_ERROR                              = "-100";
}