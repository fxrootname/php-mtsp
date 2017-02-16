## Get subscriptions for service

### Method
`getSubscriptions`

### Parameters
`getSubscriptions($serviceName, $from = null, $to = null, $raw = false)`

1. `$serviceName` service name
2. `$from` Filter from date, DateTime object or `strtotime()` string accepted format
3. `$to` Filter to date, DateTime object or `strtotime()` string accepted format
4. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $subscriptions \DigitalVirgo\MTSP\Model\Subscriptions */
   $subscriptions = $client->getSubscriptions('SOME_SERVICE_1');
   $subscriptions = $client->getSubscriptions('SOME_SERVICE_1', new \DateTime(), '2017-01-01');
```
     
### Output
```text
object(DigitalVirgo\MTSP\Model\Subscriptions)#23 (1) {
  ["_subscription":protected]=>
  array(3) {
    [0]=>
    object(DigitalVirgo\MTSP\Model\Subscription)#36 (16) {
      ["_id":protected]=>
      int(123456789)
      ["_active":protected]=>
      bool(true)
      ["_scheduledTo":protected]=>
      object(DateTime)#32 (3) {
        ["date"]=>
        string(26) "2017-09-15 07:30:00.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
      ["_serviceName":protected]=>
      NULL
      ["_serviceType":protected]=>
      NULL
      ["_createDate":protected]=>
      NULL
      ["_updateDate":protected]=>
      NULL
      ["_alertDate":protected]=>
      NULL
      ["_link":protected]=>
      string(40) "/services/SOME_SERVICE_1/subscriptions/123456789"
      ["_status":protected]=>
      array(0) {
      }
      ["_sms":protected]=>
      NULL
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
    [1]=>
    object(DigitalVirgo\MTSP\Model\Subscription)#42 (16) {
      ["_id":protected]=>
      int(123456780)
      ["_active":protected]=>
      bool(true)
      ["_scheduledTo":protected]=>
      object(DateTime)#30 (3) {
        ["date"]=>
        string(26) "2017-09-19 07:30:00.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
      ["_serviceName":protected]=>
      NULL
      ["_serviceType":protected]=>
      NULL
      ["_createDate":protected]=>
      NULL
      ["_updateDate":protected]=>
      NULL
      ["_alertDate":protected]=>
      NULL
      ["_link":protected]=>
      string(40) "/services/SOME_SERVICE_1/subscriptions/123456780"
      ["_status":protected]=>
      array(0) {
      }
      ["_sms":protected]=>
      NULL
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
    [2]=>
    object(DigitalVirgo\MTSP\Model\Subscription)#28 (16) {
      ["_id":protected]=>
      int(123456781)
      ["_active":protected]=>
      bool(true)
      ["_scheduledTo":protected]=>
      object(DateTime)#24 (3) {
        ["date"]=>
        string(26) "2017-09-08 07:30:00.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
      ["_serviceName":protected]=>
      NULL
      ["_serviceType":protected]=>
      NULL
      ["_createDate":protected]=>
      NULL
      ["_updateDate":protected]=>
      NULL
      ["_alertDate":protected]=>
      NULL
      ["_link":protected]=>
      string(40) "/services/SOME_SERVICE_1/subscriptions/123456781"
      ["_status":protected]=>
      array(0) {
      }
      ["_sms":protected]=>
      NULL
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
  }
}
```