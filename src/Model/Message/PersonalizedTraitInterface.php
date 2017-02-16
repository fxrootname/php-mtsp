<?php
/**
 * Interface PersonalizedTraitInterface
 *
 * @package DigitalVirgo\MTSP\Model\Message
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Message;

/**
 * Interface PersonalizedTraitInterface
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
