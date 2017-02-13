<?php

namespace DigitalVirgo\MTSP\Model;

interface ModelAbstractTraitInterface {

    /**
     * Set class data using setters methods
     * @param array $params
     */
    public function setParamsData(array $params);

    /**
     * Convert object into DOMElement based on _getDomMap method
     *
     * @return \DOMElement
     * @throws \Exception
     */
    public function toDomElement();

    /**
     * Convert object info XML string
     * @param bool $prettyFormat Render Xml with new lines and indentation, default false
     * @return string xml
     */
    public function toXml($prettyFormat = false);

    /**
     * Set object parameters by xml string
     * @param $xml string
     * @return $this
     */
    public function fromXml($xml);
}