DigitalVirgo\MTSP\Service\Client
===============

Class Client - Provice pi methods




* Class name: Client
* Namespace: DigitalVirgo\MTSP\Service
* Parent class: GuzzleHttp\Client



Constants
----------


### API_URL

    const API_URL = 'http://mtserviceproxy.services.avantis.pl/'





Properties
----------


### $_instance

    private \DigitalVirgo\MTSP\Service\Client $_instance = null

Instance for singleton



* Visibility: **private**
* This property is **static**.


### $_username

    protected string $_username

Username for auth



* Visibility: **protected**


### $_password

    protected string $_password

Password for auth



* Visibility: **protected**


Methods
-------


### getInstance

    \DigitalVirgo\MTSP\Service\Client DigitalVirgo\MTSP\Service\Client::getInstance()

Get new instance of client



* Visibility: **public**
* This method is **static**.




### setAuth

    \DigitalVirgo\MTSP\Service\Client DigitalVirgo\MTSP\Service\Client::setAuth(string $username, string $password)

Set authorization credentials



* Visibility: **public**


#### Arguments
* $username **string**
* $password **string**



### getUsername

    string DigitalVirgo\MTSP\Service\Client::getUsername()

Get current username



* Visibility: **public**




### setUsername

    \DigitalVirgo\MTSP\Service\Client DigitalVirgo\MTSP\Service\Client::setUsername(string $username)

Set username for Auth



* Visibility: **public**


#### Arguments
* $username **string**



### getPassword

    string DigitalVirgo\MTSP\Service\Client::getPassword()

Get current password



* Visibility: **public**




### setPassword

    \DigitalVirgo\MTSP\Service\Client DigitalVirgo\MTSP\Service\Client::setPassword(string $password)

Set password for Auth



* Visibility: **public**


#### Arguments
* $password **string**



### _configureAuth

    \DigitalVirgo\MTSP\Service\Client DigitalVirgo\MTSP\Service\Client::_configureAuth()

Setup basic auth



* Visibility: **protected**




### _request

    string DigitalVirgo\MTSP\Service\Client::_request(string $url, string $method, mixed $payload)

Send http request



* Visibility: **protected**


#### Arguments
* $url **string** - &lt;p&gt;Request path&lt;/p&gt;
* $method **string** - &lt;p&gt;Http method&lt;/p&gt;
* $payload **mixed** - &lt;p&gt;Data to send with request&lt;/p&gt;



### getServicesNames

    \DigitalVirgo\MTSP\Model\Services|string DigitalVirgo\MTSP\Service\Client::getServicesNames(boolean $raw)

Get Services in xml format



* Visibility: **public**


#### Arguments
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getService

    \DigitalVirgo\MTSP\Model\Service DigitalVirgo\MTSP\Service\Client::getService($serviceName, boolean $raw)

Get service by name



* Visibility: **public**


#### Arguments
* $serviceName **mixed** - &lt;p&gt;Service name&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getSubscriptions

    \DigitalVirgo\MTSP\Model\Subscriptions|string DigitalVirgo\MTSP\Service\Client::getSubscriptions(string $serviceName, null|string|\DateTime $from, null|string|\DateTime $to, boolean $raw)

Get subscriptions for service



* Visibility: **public**


#### Arguments
* $serviceName **string** - &lt;p&gt;Service name&lt;/p&gt;
* $from **null|string|DateTime** - &lt;p&gt;Optional date from filter&lt;/p&gt;
* $to **null|string|DateTime** - &lt;p&gt;Optional date to filter&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getSubscription

    \DigitalVirgo\MTSP\Model\Subscription DigitalVirgo\MTSP\Service\Client::getSubscription($serviceName, $subscriptionId, boolean $raw)

Get single subscription



* Visibility: **public**


#### Arguments
* $serviceName **mixed**
* $subscriptionId **mixed**
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getBilledNumbers

    \DigitalVirgo\MTSP\Model\BilledData|string DigitalVirgo\MTSP\Service\Client::getBilledNumbers(string $serviceName, integer|string $subscriptionId, boolean $raw)

Get billed numbers report for subscription



* Visibility: **public**


#### Arguments
* $serviceName **string** - &lt;p&gt;Service Name&lt;/p&gt;
* $subscriptionId **integer|string** - &lt;p&gt;Subscription id&lt;/p&gt;
* $raw **boolean**



### getSubscribers

    \DigitalVirgo\MTSP\Model\SubscriberData|string DigitalVirgo\MTSP\Service\Client::getSubscribers($serviceName, null $operator, boolean $raw)

Get subscribers for service



* Visibility: **public**


#### Arguments
* $serviceName **mixed**
* $operator **null**
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### addSubscription

    \DigitalVirgo\MTSP\Model\Subscription|string DigitalVirgo\MTSP\Service\Client::addSubscription(\DigitalVirgo\MTSP\Model\Subscription|array $subscription, boolean $raw)

Creating new subscription



* Visibility: **public**


#### Arguments
* $subscription **[DigitalVirgo\MTSP\Model\Subscription](DigitalVirgo-MTSP-Model-Subscription.md)|array** - &lt;p&gt;Subscription data&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml response&lt;/p&gt;



### updateSubscription

    \DigitalVirgo\MTSP\Model\Subscription|string DigitalVirgo\MTSP\Service\Client::updateSubscription(\DigitalVirgo\MTSP\Model\Subscription|array $subscription, boolean $raw)

Update Subscription



* Visibility: **public**


#### Arguments
* $subscription **[DigitalVirgo\MTSP\Model\Subscription](DigitalVirgo-MTSP-Model-Subscription.md)|array** - &lt;p&gt;Subscription data&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getWelcomeMessage

    \DigitalVirgo\MTSP\Model\WelcomeMessage|string DigitalVirgo\MTSP\Service\Client::getWelcomeMessage($serviceName, boolean $raw)

Gets welcome message for service



* Visibility: **public**


#### Arguments
* $serviceName **mixed** - &lt;p&gt;Service name&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### getWelcomeMessageBilledNumbers

    \DigitalVirgo\MTSP\Model\BilledData|string DigitalVirgo\MTSP\Service\Client::getWelcomeMessageBilledNumbers($serviceName, null $id, boolean $raw)

Get billed numbers for welcome message



* Visibility: **public**


#### Arguments
* $serviceName **mixed** - &lt;p&gt;Service name&lt;/p&gt;
* $id **null**
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### setWelcomeMessage

    \DigitalVirgo\MTSP\Model\WelcomeMessage|string DigitalVirgo\MTSP\Service\Client::setWelcomeMessage(\DigitalVirgo\MTSP\Model\WelcomeMessage|array $message, boolean $raw)

Create or update welcome message for service



* Visibility: **public**


#### Arguments
* $message **[DigitalVirgo\MTSP\Model\WelcomeMessage](DigitalVirgo-MTSP-Model-WelcomeMessage.md)|array** - &lt;p&gt;Message to set&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### hlr

    \DigitalVirgo\MTSP\Model\Hlr|string DigitalVirgo\MTSP\Service\Client::hlr(string $msisdn, boolean $raw)

Get operator code for Msisdn



* Visibility: **public**


#### Arguments
* $msisdn **string** - &lt;p&gt;Msisdn to check&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;



### hlrExtended

    \DigitalVirgo\MTSP\Model\Hlr|string DigitalVirgo\MTSP\Service\Client::hlrExtended(string $msisdn, boolean $raw)

Get extended msisdn data



* Visibility: **public**


#### Arguments
* $msisdn **string** - &lt;p&gt;Msisdn to check&lt;/p&gt;
* $raw **boolean** - &lt;p&gt;return raw xml output&lt;/p&gt;


