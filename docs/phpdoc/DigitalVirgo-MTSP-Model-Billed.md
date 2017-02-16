DigitalVirgo\MTSP\Model\Billed
===============

Class Billed - represents billed msisdn




* Class name: Billed
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_msisdn

    protected string $_msisdn





* Visibility: **protected**


### $_accId

    protected integer $_accId





* Visibility: **protected**


### $_priceNet

    protected string $_priceNet





* Visibility: **protected**


### $_lastTransactionId

    protected string $_lastTransactionId





* Visibility: **protected**


Methods
-------


### getMsisdn

    string DigitalVirgo\MTSP\Model\Billed::getMsisdn()





* Visibility: **public**




### setMsisdn

    \DigitalVirgo\MTSP\Model\Billed DigitalVirgo\MTSP\Model\Billed::setMsisdn(string $msisdn)





* Visibility: **public**


#### Arguments
* $msisdn **string**



### getAccId

    integer DigitalVirgo\MTSP\Model\Billed::getAccId()





* Visibility: **public**




### setAccId

    \DigitalVirgo\MTSP\Model\Billed DigitalVirgo\MTSP\Model\Billed::setAccId(integer $accId)





* Visibility: **public**


#### Arguments
* $accId **integer**



### getPriceNet

    string DigitalVirgo\MTSP\Model\Billed::getPriceNet()





* Visibility: **public**




### setPriceNet

    \DigitalVirgo\MTSP\Model\Billed DigitalVirgo\MTSP\Model\Billed::setPriceNet(string $priceNet)





* Visibility: **public**


#### Arguments
* $priceNet **string**



### getLastTransactionId

    string DigitalVirgo\MTSP\Model\Billed::getLastTransactionId()





* Visibility: **public**




### setLastTransactionId

    \DigitalVirgo\MTSP\Model\Billed DigitalVirgo\MTSP\Model\Billed::setLastTransactionId(string $lastTransactionId)





* Visibility: **public**


#### Arguments
* $lastTransactionId **string**



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


