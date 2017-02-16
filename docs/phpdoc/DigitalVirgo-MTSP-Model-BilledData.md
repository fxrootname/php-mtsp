DigitalVirgo\MTSP\Model\BilledData
===============

Class BilledData




* Class name: BilledData
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_billedMsisdnsPack

    protected array<mixed,\DigitalVirgo\MTSP\Model\BilledMsisdnsPack> $_billedMsisdnsPack





* Visibility: **protected**


### $_endFlag

    protected boolean $_endFlag





* Visibility: **protected**


Methods
-------


### getBilledMsisdnsPack

    array<mixed,\DigitalVirgo\MTSP\Model\BilledMsisdnsPack> DigitalVirgo\MTSP\Model\BilledData::getBilledMsisdnsPack()





* Visibility: **public**




### setBilledMsisdnsPack

    \DigitalVirgo\MTSP\Model\BilledData DigitalVirgo\MTSP\Model\BilledData::setBilledMsisdnsPack(array<mixed,\DigitalVirgo\MTSP\Model\BilledMsisdnsPack> $billedMsisdnsPack)





* Visibility: **public**


#### Arguments
* $billedMsisdnsPack **array&lt;mixed,\DigitalVirgo\MTSP\Model\BilledMsisdnsPack&gt;**



### addBilledMsisdnsPack

    \DigitalVirgo\MTSP\Model\BilledData DigitalVirgo\MTSP\Model\BilledData::addBilledMsisdnsPack($billedMsisdnsPack)





* Visibility: **public**


#### Arguments
* $billedMsisdnsPack **mixed**



### isEndFlag

    boolean DigitalVirgo\MTSP\Model\BilledData::isEndFlag()





* Visibility: **public**




### setEndFlag

    \DigitalVirgo\MTSP\Model\BilledData DigitalVirgo\MTSP\Model\BilledData::setEndFlag(boolean $endFlag)





* Visibility: **public**


#### Arguments
* $endFlag **boolean**



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


