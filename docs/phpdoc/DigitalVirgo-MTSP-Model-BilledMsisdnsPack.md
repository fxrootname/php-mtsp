DigitalVirgo\MTSP\Model\BilledMsisdnsPack
===============

Class BilledMsisdnsPack




* Class name: BilledMsisdnsPack
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


### $_status

    protected integer $_status





* Visibility: **protected**


### $_subscriptionId

    protected integer $_subscriptionId





* Visibility: **protected**


### $_billDate

    protected \DateTime $_billDate





* Visibility: **protected**


### $_serviceType

    protected string $_serviceType





* Visibility: **protected**


### $_billed

    protected array<mixed,\DigitalVirgo\MTSP\Model\Billed> $_billed





* Visibility: **protected**


Methods
-------


### getOperator

    string DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getOperator()





* Visibility: **public**




### setOperator

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setOperator(string $operator)





* Visibility: **public**


#### Arguments
* $operator **string**



### getServiceName

    string DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getServiceName()





* Visibility: **public**




### setServiceName

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setServiceName(string $serviceName)





* Visibility: **public**


#### Arguments
* $serviceName **string**



### getBilled

    array<mixed,\DigitalVirgo\MTSP\Model\Billed> DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getBilled()





* Visibility: **public**




### setBilled

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setBilled(array<mixed,\DigitalVirgo\MTSP\Model\Billed> $billed)





* Visibility: **public**


#### Arguments
* $billed **array&lt;mixed,\DigitalVirgo\MTSP\Model\Billed&gt;**



### addBilled

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::addBilled($billed)





* Visibility: **public**


#### Arguments
* $billed **mixed**



### getStatus

    integer DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getStatus()





* Visibility: **public**




### setStatus

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setStatus(integer $status)





* Visibility: **public**


#### Arguments
* $status **integer**



### getSubscriptionId

    integer DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getSubscriptionId()





* Visibility: **public**




### setSubscriptionId

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setSubscriptionId(integer $subscriptionId)





* Visibility: **public**


#### Arguments
* $subscriptionId **integer**



### getBillDate

    \DateTime DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getBillDate()





* Visibility: **public**




### setBillDate

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setBillDate(\DateTime $billDate)





* Visibility: **public**


#### Arguments
* $billDate **DateTime**



### getServiceType

    string DigitalVirgo\MTSP\Model\BilledMsisdnsPack::getServiceType()





* Visibility: **public**




### setServiceType

    \DigitalVirgo\MTSP\Model\BilledMsisdnsPack DigitalVirgo\MTSP\Model\BilledMsisdnsPack::setServiceType($serviceType)





* Visibility: **public**


#### Arguments
* $serviceType **mixed**



### offsetSet

    mixed DigitalVirgo\MTSP\Model\BilledMsisdnsPack::offsetSet(mixed $offset, mixed $value)





* Visibility: **public**


#### Arguments
* $offset **mixed**
* $value **mixed**



### offsetExists

    boolean DigitalVirgo\MTSP\Model\BilledMsisdnsPack::offsetExists(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### offsetUnset

    mixed DigitalVirgo\MTSP\Model\BilledMsisdnsPack::offsetUnset(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### offsetGet

    \DigitalVirgo\MTSP\Model\Billed|null DigitalVirgo\MTSP\Model\BilledMsisdnsPack::offsetGet(mixed $offset)





* Visibility: **public**


#### Arguments
* $offset **mixed**



### current

    \DigitalVirgo\MTSP\Model\Billed|mixed DigitalVirgo\MTSP\Model\BilledMsisdnsPack::current()





* Visibility: **public**




### next

    \DigitalVirgo\MTSP\Model\Billed|mixed DigitalVirgo\MTSP\Model\BilledMsisdnsPack::next()





* Visibility: **public**




### key

    mixed DigitalVirgo\MTSP\Model\BilledMsisdnsPack::key()





* Visibility: **public**




### valid

    boolean DigitalVirgo\MTSP\Model\BilledMsisdnsPack::valid()





* Visibility: **public**




### rewind

    \DigitalVirgo\MTSP\Model\Subscribed|mixed DigitalVirgo\MTSP\Model\BilledMsisdnsPack::rewind()





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


