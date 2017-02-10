<?php

namespace DigitalVirgo\MTSP\Model\Enum;

abstract class EnumAbstract
{
    static function getConstants() {
        $oClass = new \ReflectionClass(get_called_class());
        return $oClass->getConstants();
    }
}