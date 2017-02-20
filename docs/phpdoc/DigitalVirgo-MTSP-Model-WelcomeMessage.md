DigitalVirgo\MTSP\Model\WelcomeMessage
===============

Class WelcomeMessage




* Class name: WelcomeMessage
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)





Properties
----------


### $_serviceName

    protected string $_serviceName





* Visibility: **protected**


### $_serviceType

    protected string $_serviceType





* Visibility: **protected**


### $_createDate

    protected \DateTime $_createDate





* Visibility: **protected**


### $_statuses

    protected array<mixed,\DigitalVirgo\MTSP\Model\WelcomeMessageStatus> $_statuses





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


### getServiceName

    string DigitalVirgo\MTSP\Model\WelcomeMessage::getServiceName()





* Visibility: **public**




### setServiceName

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setServiceName(string $serviceName)





* Visibility: **public**


#### Arguments
* $serviceName **string**



### getServiceType

    string DigitalVirgo\MTSP\Model\WelcomeMessage::getServiceType()





* Visibility: **public**




### setServiceType

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setServiceType(string $serviceType)





* Visibility: **public**


#### Arguments
* $serviceType **string**



### getCreateDate

    \DateTime DigitalVirgo\MTSP\Model\WelcomeMessage::getCreateDate()





* Visibility: **public**




### setCreateDate

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setCreateDate(\DateTime $createDate)





* Visibility: **public**


#### Arguments
* $createDate **DateTime**



### getStatuses

    array<mixed,\DigitalVirgo\MTSP\Model\WelcomeMessageStatus> DigitalVirgo\MTSP\Model\WelcomeMessage::getStatuses()





* Visibility: **public**




### setStatuses

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setStatuses(array<mixed,\DigitalVirgo\MTSP\Model\WelcomeMessageStatus> $statuses)





* Visibility: **public**


#### Arguments
* $statuses **array&lt;mixed,\DigitalVirgo\MTSP\Model\WelcomeMessageStatus&gt;**



### addStatus

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::addStatus($status)





* Visibility: **public**


#### Arguments
* $status **mixed**



### cleanBeforeSave

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::cleanBeforeSave()

Cleans field that not allowed for update



* Visibility: **public**




### _getDomMap

    array DigitalVirgo\MTSP\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)




### getSms

    \DigitalVirgo\MTSP\Model\Message\Sms DigitalVirgo\MTSP\Model\WelcomeMessage::getSms()





* Visibility: **public**




### setSms

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setSms(\DigitalVirgo\MTSP\Model\Message\Sms|array $sms)





* Visibility: **public**


#### Arguments
* $sms **[DigitalVirgo\MTSP\Model\Message\Sms](DigitalVirgo-MTSP-Model-Message-Sms.md)|array**



### getMms

    \DigitalVirgo\MTSP\Model\Message\Mms DigitalVirgo\MTSP\Model\WelcomeMessage::getMms()





* Visibility: **public**




### setMms

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setMms(\DigitalVirgo\MTSP\Model\Message\Mms|array $mms)





* Visibility: **public**


#### Arguments
* $mms **[DigitalVirgo\MTSP\Model\Message\Mms](DigitalVirgo-MTSP-Model-Message-Mms.md)|array**



### getWapPush

    \DigitalVirgo\MTSP\Model\Message\WapPush DigitalVirgo\MTSP\Model\WelcomeMessage::getWapPush()





* Visibility: **public**




### setWapPush

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setWapPush(\DigitalVirgo\MTSP\Model\Message\WapPush|array $wapPush)





* Visibility: **public**


#### Arguments
* $wapPush **[DigitalVirgo\MTSP\Model\Message\WapPush](DigitalVirgo-MTSP-Model-Message-WapPush.md)|array**



### getPersonalizedSms

    \DigitalVirgo\MTSP\Model\Message\PersonalizedSms DigitalVirgo\MTSP\Model\WelcomeMessage::getPersonalizedSms()





* Visibility: **public**




### setPersonalizedSms

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setPersonalizedSms(\DigitalVirgo\MTSP\Model\Message\PersonalizedSms|array $personalizedSms)





* Visibility: **public**


#### Arguments
* $personalizedSms **[DigitalVirgo\MTSP\Model\Message\PersonalizedSms](DigitalVirgo-MTSP-Model-Message-PersonalizedSms.md)|array**



### getPersonalizedMms

    \DigitalVirgo\MTSP\Model\Message\PersonalizedMms DigitalVirgo\MTSP\Model\WelcomeMessage::getPersonalizedMms()





* Visibility: **public**




### setPersonalizedMms

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setPersonalizedMms(\DigitalVirgo\MTSP\Model\Message\PersonalizedMms|array $personalizedMms)





* Visibility: **public**


#### Arguments
* $personalizedMms **[DigitalVirgo\MTSP\Model\Message\PersonalizedMms](DigitalVirgo-MTSP-Model-Message-PersonalizedMms.md)|array**



### getPersonalizedWapPush

    \DigitalVirgo\MTSP\Model\Message\PersonalizedWapPush DigitalVirgo\MTSP\Model\WelcomeMessage::getPersonalizedWapPush()





* Visibility: **public**




### setPersonalizedWapPush

    \DigitalVirgo\MTSP\Model\WelcomeMessage DigitalVirgo\MTSP\Model\WelcomeMessage::setPersonalizedWapPush(\DigitalVirgo\MTSP\Model\Message\PersonalizedWapPush|array $personalizedWapPush)





* Visibility: **public**


#### Arguments
* $personalizedWapPush **[DigitalVirgo\MTSP\Model\Message\PersonalizedWapPush](DigitalVirgo-MTSP-Model-Message-PersonalizedWapPush.md)|array**



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


