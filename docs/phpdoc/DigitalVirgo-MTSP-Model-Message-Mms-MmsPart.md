DigitalVirgo\MTSP\Model\Message\Mms\MmsPart
===============

Class MmsPart




* Class name: MmsPart
* Namespace: DigitalVirgo\MTSP\Model\Message\Mms
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_data

    protected string $_data





* Visibility: **protected**


### $_mimeType

    protected string $_mimeType





* Visibility: **protected**


### $_name

    protected string $_name





* Visibility: **protected**


Methods
-------


### getData

    string DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::getData()





* Visibility: **public**




### setData

    \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::setData(string $data)





* Visibility: **public**


#### Arguments
* $data **string**



### getMimeType

    string DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::getMimeType()





* Visibility: **public**




### setMimeType

    \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::setMimeType(string $mimeType)





* Visibility: **public**


#### Arguments
* $mimeType **string**



### getName

    string DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::getName()





* Visibility: **public**




### setName

    \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::setName(string $name)





* Visibility: **public**


#### Arguments
* $name **string**



### fromFile

    \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::fromFile($filePath)

Converts file Into MmsPart object



* Visibility: **public**
* This method is **static**.


#### Arguments
* $filePath **mixed**



### saveToFile

    \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::saveToFile(string $fileLocation)

Save MmsPart to file



* Visibility: **public**


#### Arguments
* $fileLocation **string** - &lt;p&gt;File destination&lt;/p&gt;



### _getDomMap

    array DigitalVirgo\MTSP\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)




### __construct

    mixed DigitalVirgo\MTSP\Model\ModelAbstract::__construct(array $params)

ModelAbstract constructor.



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)


#### Arguments
* $params **array**



### setParamsData

    mixed DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface::setParamsData(array $params)

Set class data using setters methods



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSP-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $params **array**



### toDomElement

    \DOMElement DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface::toDomElement()

Convert object into DOMElement based on _getDomMap method



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSP-Model-ModelAbstractTraitInterface.md)




### _appendElement

    mixed DigitalVirgo\MTSP\Model\ModelAbstract::_appendElement($name, $element, \DOMDocument $dom, $root)

Converts basic type to string and append it to DomElement



* Visibility: **protected**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)


#### Arguments
* $name **mixed**
* $element **mixed**
* $dom **DOMDocument**
* $root **mixed**



### toXml

    string DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface::toXml(boolean $prettyFormat)

Convert object info XML string



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSP-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $prettyFormat **boolean** - &lt;p&gt;Render Xml with new lines and indentation, default false&lt;/p&gt;



### __toString

    mixed DigitalVirgo\MTSP\Model\ModelAbstract::__toString()

Alias for toXml



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)




### fromXml

    \DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface::fromXml($xml)

Set object parameters by xml string



* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface](DigitalVirgo-MTSP-Model-ModelAbstractTraitInterface.md)


#### Arguments
* $xml **mixed** - &lt;p&gt;string&lt;/p&gt;


