<?php

namespace DigitalVirgo\MTSP\Model\Enum;

class ServiceType extends EnumAbstract
{
    const SMS                  = "SMS";
    const WAPPUSH              = "WAPPUSH";
    const MMS                  = "MMS";
    const PERSONALIZED_SMS     = "PERSONALIZED_SMS";
    const PERSONALIZED_WAPPUSH = "PERSONALIZED_WAPPUSH";
    const PERSONALIZED_MMS     = "PERSONALIZED_MMS";

}