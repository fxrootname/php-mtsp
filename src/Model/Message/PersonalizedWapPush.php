<?php

namespace DigitalVirgo\MTSP\Model\Message;

/**
 * Class PersonalizedWapPush
 * @package DigitalVirgo\MTSP\Model\Message
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class PersonalizedWapPush extends WapPush implements PersonalizedTraitInterface
{
    use PersonalizedTrait;
}
