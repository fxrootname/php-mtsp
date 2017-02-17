DigitalVirgo\MTSP\Model\WelcomeMessageStatus
===============

Class WelcomeMessageStatus




* Class name: WelcomeMessageStatus
* Namespace: DigitalVirgo\MTSP\Model
* Parent class: [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)
* This class implements: [DigitalVirgo\MTSP\Model\Message\ContentCreatorTraitInterface](DigitalVirgo-MTSP-Model-Message-ContentCreatorTraitInterface.md)




Properties
----------


### $_operatorCode

    protected integer $_operatorCode





* Visibility: **protected**


### $_statusCode

    protected string $_statusCode





* Visibility: **protected**


### $_contents

    protected \DigitalVirgo\MTSP\Model\Message\ContentsInterface $_contents





* Visibility: **protected**


### $_active

    protected boolean $_active





* Visibility: **protected**


### $_type

    protected string $_type





* Visibility: **protected**


### $_updateDate

    protected \DateTime $_updateDate





* Visibility: **protected**


### $contentsClasses

    protected array $contentsClasses = array(\DigitalVirgo\MTSP\Model\Enum\ServiceType::SMS => \DigitalVirgo\MTSP\Model\Message\Sms::class, \DigitalVirgo\MTSP\Model\Enum\ServiceType::PERSONALIZED_SMS => \DigitalVirgo\MTSP\Model\Message\PersonalizedSms::class, \DigitalVirgo\MTSP\Model\Enum\ServiceType::MMS => \DigitalVirgo\MTSP\Model\Message\Mms::class, \DigitalVirgo\MTSP\Model\Enum\ServiceType::PERSONALIZED_MMS => \DigitalVirgo\MTSP\Model\Message\PersonalizedMms::class, \DigitalVirgo\MTSP\Model\Enum\ServiceType::WAPPUSH => \DigitalVirgo\MTSP\Model\Message\WapPush::class, \DigitalVirgo\MTSP\Model\Enum\ServiceType::PERSONALIZED_WAPPUSH => \DigitalVirgo\MTSP\Model\Message\PersonalizedWapPush::class)

Contains list of contents classes



* Visibility: **protected**
* This property is **static**.


Methods
-------


### getOperatorCode

    integer DigitalVirgo\MTSP\Model\WelcomeMessageStatus::getOperatorCode()





* Visibility: **public**




### setOperatorCode

    \DigitalVirgo\MTSP\Model\WelcomeMessageStatus DigitalVirgo\MTSP\Model\WelcomeMessageStatus::setOperatorCode(integer $operatorCode)





* Visibility: **public**


#### Arguments
* $operatorCode **integer**



### getStatusCode

    string DigitalVirgo\MTSP\Model\WelcomeMessageStatus::getStatusCode()





* Visibility: **public**




### setStatusCode

    \DigitalVirgo\MTSP\Model\WelcomeMessageStatus DigitalVirgo\MTSP\Model\WelcomeMessageStatus::setStatusCode(string $statusCode)





* Visibility: **public**


#### Arguments
* $statusCode **string**



### getContents

    \DigitalVirgo\MTSP\Model\Message\ContentsInterface DigitalVirgo\MTSP\Model\WelcomeMessageStatus::getContents()





* Visibility: **public**




### setContents

    \DigitalVirgo\MTSP\Model\WelcomeMessageStatus DigitalVirgo\MTSP\Model\WelcomeMessageStatus::setContents(\DigitalVirgo\MTSP\Model\Message\ContentsInterface $contents)





* Visibility: **public**


#### Arguments
* $contents **[DigitalVirgo\MTSP\Model\Message\ContentsInterface](DigitalVirgo-MTSP-Model-Message-ContentsInterface.md)**



### isActive

    boolean DigitalVirgo\MTSP\Model\WelcomeMessageStatus::isActive()





* Visibility: **public**




### setActive

    \DigitalVirgo\MTSP\Model\WelcomeMessageStatus DigitalVirgo\MTSP\Model\WelcomeMessageStatus::setActive(boolean $active)





* Visibility: **public**


#### Arguments
* $active **boolean**



### getType

    string DigitalVirgo\MTSP\Model\WelcomeMessageStatus::getType()





* Visibility: **public**




### setType

    \DigitalVirgo\MTSP\Model\WelcomeMessageStatus DigitalVirgo\MTSP\Model\WelcomeMessageStatus::setType(string $type)





* Visibility: **public**


#### Arguments
* $type **string**



### getUpdateDate

    \DateTime DigitalVirgo\MTSP\Model\WelcomeMessageStatus::getUpdateDate()





* Visibility: **public**




### setUpdateDate

    \DigitalVirgo\MTSP\Model\WelcomeMessageStatus DigitalVirgo\MTSP\Model\WelcomeMessageStatus::setUpdateDate(\DateTime $updateDate)





* Visibility: **public**


#### Arguments
* $updateDate **DateTime**



### _getDomMap

    array DigitalVirgo\MTSP\Model\ModelAbstract::_getDomMap()

Return array structure od DOM document



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [DigitalVirgo\MTSP\Model\ModelAbstract](DigitalVirgo-MTSP-Model-ModelAbstract.md)




### _createContent

    \DigitalVirgo\MTSP\Model\Message\ContentsInterface DigitalVirgo\MTSP\Model\WelcomeMessageStatus::_createContent(array $contentData, null $serviceType)

Converts raw data into ContentsInterface object



* Visibility: **protected**


#### Arguments
* $contentData **array**
* $serviceType **null**



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


