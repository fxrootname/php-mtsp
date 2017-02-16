## Add new subscription

### Method
`addSubscription`

### Parameters
`addSubscription($subscription, $raw = false)`

2. `$subscription` array or Subscription object
3. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
    // remember to set Your credentials (you have to do it only once) 
    Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
    
    $client = Client::getInstance();
    
    /** @var $service \DigitalVirgo\MTSP\Model\Service */
    $service = $client->getService('SOME_SERVICE_1');

    /** @var $subscription \DigitalVirgo\MTSP\Model\Subscription */
    $subscription = $client->addSubscription([
        'active' => true,
        'serviceName' => 'SOME_SERVICE_1',
        'mms' => [
            'title' => 'Your mms title',
            'mmsParts' => [
                \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::fromFile('/path/to/file.txt'), //create MmsPart from file
                \DigitalVirgo\MTSP\Model\Message\Mms\MmsPart::fromFile('/path/to/file.jpg'),
            ]
        ],
        'scheduledTo' => \DigitalVirgo\MTSP\Util\Helper::getNextRunDate($service) // generate next date for service
    ]);

    /** @var $newSubscription \DigitalVirgo\MTSP\Model\Subscription */
    $newSubscription = new Subscription();
    $newSubscription->setActive(false);
    $newSubscription->setServiceName('SOME_SERVICE_2');
    $newSubscription->setScheduledTo(
        \DigitalVirgo\MTSP\Util\Helper::getNextRunDate($service, null, 2) // generate 2nd date from now for service
    );
                       
    /** @var $subscription \DigitalVirgo\MTSP\Model\Subscription */
    $subscription = $client->addSubscription($newSubscription);
    
    //not that $newSubscription === $subscription

    /** @var $subscription \DigitalVirgo\MTSP\Model\Subscription */
    $subscription = $client->addSubscription([
        'active' => true,
        'serviceName' => 'SOME_SERVICE_3',
        'sms' => [
            'text' => 'Your sms text'
        ],
        'scheduledTo' => \DigitalVirgo\MTSP\Util\Helper::getNextRunDate($service, '2020-01-01', 10) // generate 10th date after 2020-01-01 for service 
    ]);
```

### Output
```text
object(DigitalVirgo\MTSP\Model\Subscription)#36 (16) {
  ["_id":protected]=>
  int(123456)
  ["_active":protected]=>
  bool(true)
  ["_scheduledTo":protected]=>
  object(DateTime)#53 (3) {
    ["date"]=>
    string(26) "2020-09-15 07:30:00.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["_serviceName":protected]=>
  string(6) "SOME_SERVICE_1"
  ["_serviceType":protected]=>
  string(3) "SMS"
  ["_createDate":protected]=>
  object(DateTime)#32 (3) {
    ["date"]=>
    string(26) "2014-12-19 13:43:06.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["_updateDate":protected]=>
  object(DateTime)#52 (3) {
    ["date"]=>
    string(26) "2014-12-19 13:59:59.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["_alertDate":protected]=>
  NULL
  ["_link":protected]=>
  string(40) "/services/SOME_SERVICE_1/subscriptions/123456"
  ["_status":protected]=>
  array(0) {}
  ["_sms":protected]=>
  object(DigitalVirgo\MTSP\Model\Message\Sms)#44 (1) {
    ["_text":protected]=>
    string(70) "Your sms text"
  }
  ["_mms":protected]=>
  NULL
  ["_wapPush":protected]=>
  NULL
  ["_personalizedSms":protected]=>
  NULL
  ["_personalizedMms":protected]=>
  NULL
  ["_personalizedWapPush":protected]=>
  NULL
}
```