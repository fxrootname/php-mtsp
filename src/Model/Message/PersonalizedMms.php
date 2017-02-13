<?php

namespace DigitalVirgo\MTSP\Model\Message;

/**
 * Class PersonalizedMms
 * @package DigitalVirgo\MTSP\Model\Message
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class PersonalizedMms extends Mms implements PersonalizedTraitInterface
{
    use PersonalizedTrait;
}