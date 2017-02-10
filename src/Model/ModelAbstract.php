<?php

namespace DigitalVirgo\MTSP\Model;

/**
 * Class ModelAbstract
 * @package DigitalVirgo\MTSP\Model
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 * Abstract class for model providing xml serialization/deserialization
 */
abstract class ModelAbstract
{
    use ModelAbstractTrait;

    /**
     * ModelAbstract constructor.
     * @param array $params
     */
    public function __construct($params = array())
    {
        if (!empty($params)) {
            $this->setData($params);
        }
    }


}