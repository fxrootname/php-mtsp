DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack
===============

Class SubscribedMsisdnsPack




* Class name: SubscribedMsisdnsPack
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)
* This class implements: ArrayAccess, Iterator




Properties
----------


### $_operator

    protected string $_operator





* Visibility: **protected**


### $_serviceName

    protected string $_serviceName





* Visibility: **protected**


### $_subscribed

    protected array<mixed,\DigitalVirgo\MTSP\Model\Subscribed> $_subscribed





* Visibility: **protected**


Methods
-------


### getOperator

    string DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::getOperator()





* Visibility: **public**




### setOperator

    \DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::setOperator(string $operator)





* Visibility: **public**


#### Arguments
* $operator **string**



### getServiceName

    string DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::getServiceName()





* Visibility: **public**




### setServiceName

    \DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::setServiceName(string $serviceName)





* Visibility: **public**


#### Arguments
* $serviceName **string**



### getSubscribed

    array<mixed,\DigitalVirgo\MTSP\Model\Subscribed> DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::getSubscribed()





* Visibility: **public**




### setSubscribed

    \DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::setSubscribed(array<mixed,\DigitalVirgo\MTSP\Model\Subscribed> $subscribed)





* Visibility: **public**


#### Arguments
* $subscribed **array&lt;mixed,\DigitalVirgo\MTSP\Model\Subscribed&gt;**



### addSubscribed

    \DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::addSubscribed($subscribed)





* Visibility: **public**


#### Arguments
* $subscribed **mixed**



### offsetSet

    mixed DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::offsetSet(mixed $offset, mixed $value)





* Visibility: **public**


#### Arguments
* $offset **mixed**
* $value **mixed**



### offsetExists

    boolean DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::offsetExists(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### offsetUnset

    mixed DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::offsetUnset(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### offsetGet

    \DigitalVirgo\MTSP\Model\Subscribed|null DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::offsetGet(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### current

    \DigitalVirgo\MTSP\Model\Subscribed|mixed DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::current()





* Visibility: **public**




### next

    \DigitalVirgo\MTSP\Model\Subscribed|mixed DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::next()





* Visibility: **public**




### key

    mixed DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::key()





* Visibility: **public**




### valid

    boolean DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::valid()





* Visibility: **public**




### rewind

    \DigitalVirgo\MTSP\Model\Subscribed|mixed DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack::rewind()





* Visibility: **public**




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


