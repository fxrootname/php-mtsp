<?php

namespace DigitalVirgo\MTSP\Model\Message;

/**
 * Class PersonalizedSms
 * @package DigitalVirgo\MTSP\Model\Message
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class PersonalizedSms extends Sms implements PersonalizedTraitInterface
{
    use PersonalizedTrait;
}