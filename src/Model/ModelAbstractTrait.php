<?php
/**
 * Class ModelAbstractTrait
 *
 * @package DigitalVirgo\MTSP\Model
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model;

/**
 * Class ModelAbstractTrait
 */
trait ModelAbstractTrait
{
    /**
     * Set class data using setters methods
     * @param array $params
     */
    public function setParamsData(array $params)
    {
        foreach ($params as $name => $value) {
            $method = 'set' . ucfirst($name);
            if (method_exists($this, $method)) {
                call_user_func(array($this, $method), $value);
            } else if (property_exists($this, $name)) {
                $this->$name = $value;
            }
        }
    }

    /**
     * Return array structure od DOM document
     * @return array
     */
    protected abstract function _getDomMap();

    /**
     * Convert object into DOMElement based on _getDomMap method
     *
     * @return \DOMElement
     * @throws \Exception
     */
    public function toDomElement()
    {
        $map = $this->_getDomMap();
        if (count($map) != 1) {
            throw new \Exception('_getDomMap must return single element array!');
        }
        $dom = new \DOMDocument();
        $rootName = array_keys($map)[0];
        $root = $dom->createElement($rootName);
        $rootElements = reset($map);
        foreach ($rootElements as $name => $field) {
            $element = null;
            $getterMethod = 'get' . ucfirst($name);
            // get element content
            if (method_exists($this, $getterMethod)) {
                $element = call_user_func([$this, $getterMethod]);
            } else {
                $element = $this->{"_$field"};
            }
            // check is element is set
            if ($element !== null) {

                $this->_appendElement($name, $element, $dom, $root);


            }
        }
        return $root;
    }

    /**
     * Converts basic type to string and append it to DomElement
     * @param $name
     * @param $element
     * @param \DOMDocument $dom
     * @param $root
     * @throws \Exception
     */
    protected function _appendElement($name, $element, \DOMDocument $dom, \DOMElement $root)
    {

        //should be DomElement
        if ($element instanceof ModelAbstractTraitInterface) {
            $root->appendChild($dom->importNode($element->toDomElement(), true));

            //should be simple element
        } else {
            $type = gettype($element);

            if ($type == 'object') {
                $type = get_class($element);
            }

            switch ($type) {
                case "integer":
                case "string":
                case "double":
                    //do nonthing
                    break;
                case "boolean":
                    $element = $element ? 'true' : 'false';
                    break;
                case "DateTime":
                    /** @var \DateTime $element */
                    $element = $element->format('c');
                    break;
                case "array":
                    foreach ($element as $subElement) {
                        $this->_appendElement($name, $subElement, $dom, $root);
                    }
                    return;
                    break;
                case "unknown type":
                case "resource":
                default:
                    throw new \Exception("Unsupported type/class {$type}");
                    break;
            }

            $field = $dom->createElement($name, $element);
            $root->appendChild($field);
        }
    }

    /**
     * Convert object info XML string
     * @param bool $prettyFormat Render Xml with new lines and indentation, default false
     * @return string xml
     */
    public function toXml($prettyFormat = false)
    {
        $xml = new \DOMDocument();
        $xml->appendChild($xml->importNode($this->toDomElement(), true));

        if ($prettyFormat) {
            $xml->preserveWhiteSpace = false;
            $xml->formatOutput = true;
        }

        return $xml->saveXML();
    }

    /**
     * Alias for toXml
     * @see toXml
     */
    public function __toString()
    {
        return $this->toXml(true);
    }

    /**
     * Set object parameters by xml string
     * @param $xml string
     * @return $this
     */
    public function fromXml($xml)
    {
        if (is_string($xml)) {

            if (empty($xml)) {
                return null;
            }

            $xml = new \SimpleXMLElement($xml);
        }

        $map = $this->_getDomMap();
        $map = reset($map);
        //cast xml to array
        $xml = json_decode(json_encode((array)$xml), 1);
        foreach ($xml as $property => $value) {

            if (!array_key_exists($property, $map)) {
                continue;
            }

            if ($value instanceof \SimpleXMLElement && $value->count() == 0) {
                $value = (string)$value;
            }

            if (is_array($value) && $this instanceof \ArrayAccess) {
                foreach ($value as $singleElement) {
                    $this[] = $singleElement;
                }
            } else {
                $setterMethod = 'set' . ucfirst($map[$property]);

                if (method_exists($this, $setterMethod)) {
                    call_user_func([$this, $setterMethod], $value);
                } else {
                    $this->{"_$property"} = $value;
                }
            }
        }
        return $this;
    }

}
