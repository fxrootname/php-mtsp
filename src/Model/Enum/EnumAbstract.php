<?php

namespace DigitalVirgo\MTSP\Model\Enum;

/**
 * Class EnumAbstract
 * @package DigitalVirgo\MTSP\Model\Enum
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
abstract class EnumAbstract
{
    static function getConstants() {
        $oClass = new \ReflectionClass(get_called_class());
        return $oClass->getConstants();
    }
}