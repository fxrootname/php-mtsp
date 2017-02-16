<?php

namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class BilledStatus
 * @package DigitalVirgo\MTSP\Model\Enum
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class BilledStatus extends EnumAbstract
{
    const STATUS_READY_TO_BILL               = 1;
    const STATUS_SENT_TO_BILL                = 2;
    const DELIVERED                          = 10;
    const FREE_CONTENT                       = 15;
    const BILLED                             = 20;
    const FREE_CONTENT_WAPPUSH_DELIVERED     = 25;
    const BILLED_WAPPUSH_DELIVERED           = 30;
    const NOT_BILLED                         = -20;
    const NOT_DELIVERED                      = -10;
    const EXPIRED                            = -11;
    const NO_CASH                            = -12;
    const OPERATOR_DELIVERY_ERROR            = -13;
    const BILLING_FLOW_ERROR                 = -14;
    const SUBMITTED_NOT_DELIVERED            = -15;
    const FREE_CONTENT_WAPPUSH_NOT_DELIVERED = -25;
    const NOT_BILLED_WAPPUSH_NOT_DELIVERED   = -30;

}
