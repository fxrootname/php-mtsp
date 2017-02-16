DigitalVirgo\MTSP\Model\Message\Mms
===============

Class Mms




* Class name: Mms
* Namespace: DigitalVirgo\MTSP\Model\Message
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_mmsParts

    protected array<mixed,\DigitalVirgo\MTSP\Model\Message\Mms\MmsPart> $_mmsParts





* Visibility: **protected**


### $_title

    protected string $_title





* Visibility: **protected**


Methods
-------


### getMmsParts

    array<mixed,\DigitalVirgo\MTSP\Model\Message\Mms\MmsPart> DigitalVirgo\MTSP\Model\Message\Mms::getMmsParts()





* Visibility: **public**




### setMmsParts

    \DigitalVirgo\MTSP\Model\Message\Mms DigitalVirgo\MTSP\Model\Message\Mms::setMmsParts(array $mmsParts)





* Visibility: **public**


#### Arguments
* $mmsParts **array**



### addMmsPart

    \DigitalVirgo\MTSP\Model\Message\Mms DigitalVirgo\MTSP\Model\Message\Mms::addMmsPart(array|\DigitalVirgo\MTSP\Model\Message\Mms\MmsPart $mmsPart)





* Visibility: **public**


#### Arguments
* $mmsPart **array|[array](DigitalVirgo-MTSP-Model-Message-Mms-MmsPart.md)**



### getTitle

    string DigitalVirgo\MTSP\Model\Message\Mms::getTitle()





* Visibility: **public**




### setTitle

    \DigitalVirgo\MTSP\Model\Message\Mms DigitalVirgo\MTSP\Model\Message\Mms::setTitle(string $title)





* Visibility: **public**


#### Arguments
* $title **string**



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


