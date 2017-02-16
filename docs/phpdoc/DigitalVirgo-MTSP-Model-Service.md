DigitalVirgo\MTSP\Model\Service
===============

Class Service




* Class name: Service
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_active

    protected boolean $_active





* Visibility: **protected**


### $_activeFrom

    protected \DateTime $_activeFrom





* Visibility: **protected**


### $_activeTo

    protected \DateTime $_activeTo





* Visibility: **protected**


### $_cronSendDates

    protected string $_cronSendDates





* Visibility: **protected**


### $_description

    protected string $_description





* Visibility: **protected**


### $_id

    protected integer $_id





* Visibility: **protected**


### $_sendLa

    protected string $_sendLa





* Visibility: **protected**


### $_serviceName

    protected string $_serviceName





* Visibility: **protected**


### $_serviceType

    protected string $_serviceType





* Visibility: **protected**


### $_serviceStatus

    protected string $_serviceStatus





* Visibility: **protected**


Methods
-------


### isActive

    boolean DigitalVirgo\MTSP\Model\Service::isActive()





* Visibility: **public**




### setActive

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setActive(boolean|string $active)





* Visibility: **public**


#### Arguments
* $active **boolean|string**



### getActiveFrom

    \DateTime DigitalVirgo\MTSP\Model\Service::getActiveFrom()





* Visibility: **public**




### setActiveFrom

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setActiveFrom(\DateTime|string $activeFrom)





* Visibility: **public**


#### Arguments
* $activeFrom **DateTime|string**



### getActiveTo

    \DateTime DigitalVirgo\MTSP\Model\Service::getActiveTo()





* Visibility: **public**




### setActiveTo

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setActiveTo(\DateTime|string $activeTo)





* Visibility: **public**


#### Arguments
* $activeTo **DateTime|string**



### getCronSendDates

    string DigitalVirgo\MTSP\Model\Service::getCronSendDates()





* Visibility: **public**




### setCronSendDates

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setCronSendDates(string $cronSendDates)





* Visibility: **public**


#### Arguments
* $cronSendDates **string**



### getDescription

    string DigitalVirgo\MTSP\Model\Service::getDescription()





* Visibility: **public**




### setDescription

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setDescription(string $description)





* Visibility: **public**


#### Arguments
* $description **string**



### getId

    integer DigitalVirgo\MTSP\Model\Service::getId()





* Visibility: **public**




### setId

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setId(integer $id)





* Visibility: **public**


#### Arguments
* $id **integer**



### getSendLa

    string DigitalVirgo\MTSP\Model\Service::getSendLa()





* Visibility: **public**




### setSendLa

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setSendLa(string $sendLa)





* Visibility: **public**


#### Arguments
* $sendLa **string**



### getServiceName

    string DigitalVirgo\MTSP\Model\Service::getServiceName()





* Visibility: **public**




### setServiceName

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setServiceName(string $serviceName)





* Visibility: **public**


#### Arguments
* $serviceName **string**



### getServiceType

    string DigitalVirgo\MTSP\Model\Service::getServiceType()





* Visibility: **public**




### setServiceType

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setServiceType(string $serviceType)





* Visibility: **public**


#### Arguments
* $serviceType **string**



### getServiceStatus

    string DigitalVirgo\MTSP\Model\Service::getServiceStatus()





* Visibility: **public**




### setServiceStatus

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Model\Service::setServiceStatus(string $serviceStatus)





* Visibility: **public**


#### Arguments
* $serviceStatus **string**



### getSubscriptions

    \DigitalVirgo\MTSP\Model\Subscriptions DigitalVirgo\MTSP\Model\Service::getSubscriptions(null|string|\DateTime $from, null|string|\DateTime $to, boolean $raw)





* Visibility: **public**


#### Arguments
* $from **null|string|DateTime** - &lt;p&gt;Optional date from filter&lt;/p&gt;
* $to **null|string|DateTime** - &lt;p&gt;Optional date to filter&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



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


