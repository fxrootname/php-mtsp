## Get subscription details

### Method
`getSubscription`

### Parameters
`getSubscription($serviceName, $subscriptionId, $raw = false)`

1. `$serviceName` service name
2. `$subscriptionId` id of subscription to fetch
3. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $subscription \DigitalVirgo\MTSP\Model\Subscription */
   $subscription = $client->getSubscription('SOME_SERVICE_1', 123456);
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
    string(26) "2017-09-15 07:30:00.000000"
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
  array(4) {
    [0]=>
    object(DigitalVirgo\MTSP\Model\Status)#43 (2) {
      ["_operatorCode":protected]=>
      int(26003)
      ["_statusCode":protected]=>
      string(1) "2"
    }
    [1]=>
    object(DigitalVirgo\MTSP\Model\Status)#16 (2) {
      ["_operatorCode":protected]=>
      int(26001)
      ["_statusCode":protected]=>
      string(1) "2"
    }
    [2]=>
    object(DigitalVirgo\MTSP\Model\Status)#41 (2) {
      ["_operatorCode":protected]=>
      int(26006)
      ["_statusCode":protected]=>
      string(1) "2"
    }
    [3]=>
    object(DigitalVirgo\MTSP\Model\Status)#54 (2) {
      ["_operatorCode":protected]=>
      int(26002)
      ["_statusCode":protected]=>
      string(1) "2"
    }
  }
  ["_sms":protected]=>
  object(DigitalVirgo\MTSP\Model\Message\Sms)#44 (1) {
    ["_text":protected]=>
    string(70) "Twoja tresc subksrypcji"
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
