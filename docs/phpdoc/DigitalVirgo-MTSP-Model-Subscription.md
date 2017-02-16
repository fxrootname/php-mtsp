DigitalVirgo\MTSP\Model\Subscription
===============

Class Subscription




* Class name: Subscription
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)
* This class implements: [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




Properties
----------


### $_id

    protected integer $_id





* Visibility: **protected**


### $_active

    protected boolean $_active





* Visibility: **protected**


### $_scheduledTo

    protected \DateTime $_scheduledTo





* Visibility: **protected**


### $_serviceName

    protected string $_serviceName





* Visibility: **protected**


### $_serviceType

    protected string $_serviceType





* Visibility: **protected**


### $_createDate

    protected \DateTime $_createDate





* Visibility: **protected**


### $_updateDate

    protected \DateTime $_updateDate





* Visibility: **protected**


### $_alertDate

    protected \DateTime $_alertDate





* Visibility: **protected**


### $_link

    protected string $_link





* Visibility: **protected**


### $_status

    protected array<mixed,\DigitalVirgo\MTSP\Model\Status> $_status = array()





* Visibility: **protected**


### $_sms

    protected \DigitalVirgo\MTSP\Model\Message\Sms $_sms





* Visibility: **protected**


### $_mms

    protected \DigitalVirgo\MTSP\Model\Message\Mms $_mms





* Visibility: **protected**


### $_wapPush

    protected \DigitalVirgo\MTSP\Model\Message\WapPush $_wapPush





* Visibility: **protected**


### $_personalizedSms

    protected \DigitalVirgo\MTSP\Model\Message\PersonalizedSms $_personalizedSms





* Visibility: **protected**


### $_personalizedMms

    protected \DigitalVirgo\MTSP\Model\Message\PersonalizedMms $_personalizedMms





* Visibility: **protected**


### $_personalizedWapPush

    protected \DigitalVirgo\MTSP\Model\Message\PersonalizedWapPush $_personalizedWapPush





* Visibility: **protected**


Methods
-------


### getId

    integer DigitalVirgo\MTSP\Model\Subscription::getId()





* Visibility: **public**




### setId

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setId(integer $id)





* Visibility: **public**


#### Arguments
* $id **integer**



### isActive

    boolean DigitalVirgo\MTSP\Model\Subscription::isActive()





* Visibility: **public**




### setActive

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setActive(boolean|string $active)





* Visibility: **public**


#### Arguments
* $active **boolean|string**



### getScheduledTo

    \DateTime DigitalVirgo\MTSP\Model\Subscription::getScheduledTo()





* Visibility: **public**




### setScheduledTo

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setScheduledTo(\DateTime $scheduledTo)





* Visibility: **public**


#### Arguments
* $scheduledTo **DateTime**



### getServiceName

    string DigitalVirgo\MTSP\Model\Subscription::getServiceName()





* Visibility: **public**




### setServiceName

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setServiceName(string $serviceName)





* Visibility: **public**


#### Arguments
* $serviceName **string**



### getServiceType

    string DigitalVirgo\MTSP\Model\Subscription::getServiceType()





* Visibility: **public**




### setServiceType

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setServiceType(string $serviceType)





* Visibility: **public**


#### Arguments
* $serviceType **string**



### getCreateDate

    \DateTime DigitalVirgo\MTSP\Model\Subscription::getCreateDate()





* Visibility: **public**




### setCreateDate

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setCreateDate(\DateTime $createDate)





* Visibility: **public**


#### Arguments
* $createDate **DateTime**



### getUpdateDate

    \DateTime DigitalVirgo\MTSP\Model\Subscription::getUpdateDate()





* Visibility: **public**




### setUpdateDate

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setUpdateDate(\DateTime $updateDate)





* Visibility: **public**


#### Arguments
* $updateDate **DateTime**



### getAlertDate

    \DateTime DigitalVirgo\MTSP\Model\Subscription::getAlertDate()





* Visibility: **public**




### setAlertDate

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setAlertDate(\DateTime $alertDate)





* Visibility: **public**


#### Arguments
* $alertDate **DateTime**



### getLink

    string DigitalVirgo\MTSP\Model\Subscription::getLink()





* Visibility: **public**




### setLink

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setLink(string $link)





* Visibility: **public**


#### Arguments
* $link **string**



### getStatus

    array<mixed,\DigitalVirgo\MTSP\Model\Status> DigitalVirgo\MTSP\Model\Subscription::getStatus()





* Visibility: **public**




### setStatus

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::setStatus(array<mixed,\DigitalVirgo\MTSP\Model\Status>|array $statuses)





* Visibility: **public**


#### Arguments
* $statuses **array&lt;mixed,\DigitalVirgo\MTSP\Model\Status&gt;|array**



### addStatus

    mixed DigitalVirgo\MTSP\Model\Subscription::addStatus(\DigitalVirgo\MTSP\Model\Status|array $status)





* Visibility: **public**


#### Arguments
* $status **[DigitalVirgo\MTSP\Model\Status](DigitalVirgo-MTSP-Model-Status.md)|array**



### cleanBeforeSave

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::cleanBeforeSave()

Cleans field that not allowed for update



* Visibility: **public**




### loadMore

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Model\Subscription::loadMore()

Loads additional content using Client API



* Visibility: **public**




### _fetchServiceNameFromLink

    string DigitalVirgo\MTSP\Model\Subscription::_fetchServiceNameFromLink()

Returns serviceName from link property



* Visibility: **protected**




### _getDomMap

    array DigitalVirgo\MTSP\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)




### getSms

    mixed DigitalVirgo\MTSP\Model\ContentsTraitInterface::getSms()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




### setSms

    \DigitalVirgo\MTSP\Model\ContentsTrait DigitalVirgo\MTSP\Model\ContentsTraitInterface::setSms(mixed $sms)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)


#### Arguments
* $sms **mixed**



### getMms

    mixed DigitalVirgo\MTSP\Model\ContentsTraitInterface::getMms()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




### setMms

    \DigitalVirgo\MTSP\Model\ContentsTrait DigitalVirgo\MTSP\Model\ContentsTraitInterface::setMms(mixed $mms)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)


#### Arguments
* $mms **mixed**



### getWapPush

    mixed DigitalVirgo\MTSP\Model\ContentsTraitInterface::getWapPush()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




### setWapPush

    \DigitalVirgo\MTSP\Model\ContentsTrait DigitalVirgo\MTSP\Model\ContentsTraitInterface::setWapPush(mixed $wapPush)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)


#### Arguments
* $wapPush **mixed**



### getPersonalizedSms

    mixed DigitalVirgo\MTSP\Model\ContentsTraitInterface::getPersonalizedSms()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




### setPersonalizedSms

    \DigitalVirgo\MTSP\Model\ContentsTrait DigitalVirgo\MTSP\Model\ContentsTraitInterface::setPersonalizedSms(mixed $personalizedSms)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)


#### Arguments
* $personalizedSms **mixed**



### getPersonalizedMms

    mixed DigitalVirgo\MTSP\Model\ContentsTraitInterface::getPersonalizedMms()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




### setPersonalizedMms

    \DigitalVirgo\MTSP\Model\ContentsTrait DigitalVirgo\MTSP\Model\ContentsTraitInterface::setPersonalizedMms(mixed $personalizedMms)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)


#### Arguments
* $personalizedMms **mixed**



### getPersonalizedWapPush

    mixed DigitalVirgo\MTSP\Model\ContentsTraitInterface::getPersonalizedWapPush()





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)




### setPersonalizedWapPush

    \DigitalVirgo\MTSP\Model\ContentsTrait DigitalVirgo\MTSP\Model\ContentsTraitInterface::setPersonalizedWapPush(mixed $personalizedWapPush)





* Visibility: **public**
* This method is defined by [DigitalVirgo\MTSP\Model\ContentsTraitInterface](DigitalVirgo-MTSP-Model-ContentsTraitInterface.md)


#### Arguments
* $personalizedWapPush **mixed**



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


