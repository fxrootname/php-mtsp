DigitalVirgo\MTSP\Model\Message\WapPush
===============

Class WapPush




* Class name: WapPush
* Namespace: DigitalVirgo\MTSP\Model\Message
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)
* This class implements: [DigitalVirgo\MTSP\Model\Message\ContentsInterface](DigitalVirgo-MTSP-Model-Message-ContentsInterface.md)




Properties
----------


### $_title

    protected string $_title





* Visibility: **protected**


### $_url

    protected string $_url





* Visibility: **protected**


Methods
-------


### getTitle

    string DigitalVirgo\MTSP\Model\Message\WapPush::getTitle()





* Visibility: **public**




### setTitle

    \DigitalVirgo\MTSP\Model\Message\WapPush DigitalVirgo\MTSP\Model\Message\WapPush::setTitle(string $title)





* Visibility: **public**


#### Arguments
* $title **string**



### getUrl

    string DigitalVirgo\MTSP\Model\Message\WapPush::getUrl()





* Visibility: **public**




### setUrl

    \DigitalVirgo\MTSP\Model\Message\WapPush DigitalVirgo\MTSP\Model\Message\WapPush::setUrl(string $url)





* Visibility: **public**


#### Arguments
* $url **string**



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


