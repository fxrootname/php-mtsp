DigitalVirgo\MTSP\Model\Hlr
===============

Class ModelAbstract - Abstract class for model providing xml serialization/deserialization




* Class name: Hlr
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_msisdn

    protected string $_msisdn





* Visibility: **protected**


### $_operator

    protected integer $_operator





* Visibility: **protected**


### $_imsi

    protected string $_imsi





* Visibility: **protected**


### $_originalNetworkName

    protected string $_originalNetworkName





* Visibility: **protected**


### $_mccmnc

    protected string $_mccmnc





* Visibility: **protected**


### $_roamingCountyName

    protected string $_roamingCountyName





* Visibility: **protected**


### $_originalNetworkPrefix

    protected string $_originalNetworkPrefix





* Visibility: **protected**


### $_originalCountryName

    protected string $_originalCountryName





* Visibility: **protected**


### $_originalCountryPrefix

    protected string $_originalCountryPrefix





* Visibility: **protected**


### $_isNumberPorted

    protected boolean $_isNumberPorted





* Visibility: **protected**


Methods
-------


### getMsisdn

    string DigitalVirgo\MTSP\Model\Hlr::getMsisdn()





* Visibility: **public**




### setMsisdn

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setMsisdn(string $msisdn)





* Visibility: **public**


#### Arguments
* $msisdn **string**



### getOperator

    integer DigitalVirgo\MTSP\Model\Hlr::getOperator()





* Visibility: **public**




### setOperator

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setOperator(integer $operator)





* Visibility: **public**


#### Arguments
* $operator **integer**



### getImsi

    string DigitalVirgo\MTSP\Model\Hlr::getImsi()





* Visibility: **public**




### setImsi

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setImsi(string $imsi)





* Visibility: **public**


#### Arguments
* $imsi **string**



### getOriginalNetworkName

    string DigitalVirgo\MTSP\Model\Hlr::getOriginalNetworkName()





* Visibility: **public**




### setOriginalNetworkName

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setOriginalNetworkName(string $originalNetworkName)





* Visibility: **public**


#### Arguments
* $originalNetworkName **string**



### getMccmnc

    string DigitalVirgo\MTSP\Model\Hlr::getMccmnc()





* Visibility: **public**




### setMccmnc

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setMccmnc(string $mccmnc)





* Visibility: **public**


#### Arguments
* $mccmnc **string**



### getRoamingCountyName

    string DigitalVirgo\MTSP\Model\Hlr::getRoamingCountyName()





* Visibility: **public**




### setRoamingCountyName

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setRoamingCountyName(string $roamingCountyName)





* Visibility: **public**


#### Arguments
* $roamingCountyName **string**



### getOriginalNetworkPrefix

    string DigitalVirgo\MTSP\Model\Hlr::getOriginalNetworkPrefix()





* Visibility: **public**




### setOriginalNetworkPrefix

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setOriginalNetworkPrefix(string $originalNetworkPrefix)





* Visibility: **public**


#### Arguments
* $originalNetworkPrefix **string**



### getOriginalCountryName

    string DigitalVirgo\MTSP\Model\Hlr::getOriginalCountryName()





* Visibility: **public**




### setOriginalCountryName

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setOriginalCountryName(string $originalCountryName)





* Visibility: **public**


#### Arguments
* $originalCountryName **string**



### getOriginalCountryPrefix

    string DigitalVirgo\MTSP\Model\Hlr::getOriginalCountryPrefix()





* Visibility: **public**




### setOriginalCountryPrefix

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setOriginalCountryPrefix(string $originalCountryPrefix)





* Visibility: **public**


#### Arguments
* $originalCountryPrefix **string**



### getIsNumberPorted

    boolean DigitalVirgo\MTSP\Model\Hlr::getIsNumberPorted()





* Visibility: **public**




### setIsNumberPorted

    \DigitalVirgo\MTSP\Model\Hlr DigitalVirgo\MTSP\Model\Hlr::setIsNumberPorted(boolean $isNumberPorted)





* Visibility: **public**


#### Arguments
* $isNumberPorted **boolean**



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


