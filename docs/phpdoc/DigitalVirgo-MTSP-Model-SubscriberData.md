DigitalVirgo\MTSP\Model\SubscriberData
===============

Class SubscriberData




* Class name: SubscriberData
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_subscribedMsisdnsPack

    protected array<mixed,\DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack> $_subscribedMsisdnsPack





* Visibility: **protected**


Methods
-------


### getSubscribedMsisdnsPack

    array<mixed,\DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack> DigitalVirgo\MTSP\Model\SubscriberData::getSubscribedMsisdnsPack()

Get array of SubscribedMsisdnsPack's



* Visibility: **public**




### setSubscribedMsisdnsPack

    \DigitalVirgo\MTSP\Model\SubscriberData DigitalVirgo\MTSP\Model\SubscriberData::setSubscribedMsisdnsPack(array<mixed,\DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack> $subscribedMsisdnsPack)

Set SubscribedMsisdnsPack's



* Visibility: **public**


#### Arguments
* $subscribedMsisdnsPack **array&lt;mixed,\DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack&gt;**



### addSubscribedMsisdnsPack

    \DigitalVirgo\MTSP\Model\SubscriberData DigitalVirgo\MTSP\Model\SubscriberData::addSubscribedMsisdnsPack($subscribedMsisdnsPack)

Add new SubscribedMsisdnsPack



* Visibility: **public**


#### Arguments
* $subscribedMsisdnsPack **mixed**



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


