<?php

namespace DigitalVirgo\MTSP\Model\Message;

/**
 * Interface PersonalizedTraitInterface
 * @package DigitalVirgo\MTSP\Model\Message
 */
interface PersonalizedTraitInterface
{

    /**
     * @return string
     */
    public function getMsisdn();

    /**
     * @param string $msisdn
     * @return PersonalizedTrait
     */
    public function setMsisdn($msisdn);

}