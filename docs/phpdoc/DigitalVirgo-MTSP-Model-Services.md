DigitalVirgo\MTSP\Model\Services
===============

Class Services




* Class name: Services
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)
* This class implements: ArrayAccess, Iterator




Properties
----------


### $_name

    protected array<mixed,string> $_name





* Visibility: **protected**


Methods
-------


### getName

    array<mixed,\string> DigitalVirgo\MTSP\Model\Services::getName()





* Visibility: **public**




### setName

    \DigitalVirgo\MTSP\Model\Services DigitalVirgo\MTSP\Model\Services::setName(array<mixed,\string> $name)





* Visibility: **public**


#### Arguments
* $name **array&lt;mixed,\string&gt;**



### offsetSet

    mixed DigitalVirgo\MTSP\Model\Services::offsetSet(mixed $offset, mixed $value)





* Visibility: **public**


#### Arguments
* $offset **mixed**
* $value **mixed**



### offsetExists

    boolean DigitalVirgo\MTSP\Model\Services::offsetExists(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### offsetUnset

    mixed DigitalVirgo\MTSP\Model\Services::offsetUnset(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### offsetGet

    null|string DigitalVirgo\MTSP\Model\Services::offsetGet(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### current

    mixed DigitalVirgo\MTSP\Model\Services::current()





* Visibility: **public**




### next

    mixed DigitalVirgo\MTSP\Model\Services::next()





* Visibility: **public**




### key

    mixed DigitalVirgo\MTSP\Model\Services::key()





* Visibility: **public**




### valid

    boolean DigitalVirgo\MTSP\Model\Services::valid()





* Visibility: **public**




### rewind

    mixed DigitalVirgo\MTSP\Model\Services::rewind()





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


