## Get subscribers

### Method
`getSubscribers`

### Parameters
`getSubscribers($serviceName, $operator = null, $raw = false)`

1. `$serviceName` service name
2. `$operator` optional, filter for operator
3. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $subscribers \DigitalVirgo\MTSP\Model\SubscriberData */
   $subscribers = $client->getSubscribers("SOME_SERVICE_1");
   $subscribers = $client->getSubscribers("SOME_SERVICE_1", \DigitalVirgo\MTSP\Model\Enum\OperatorCode::POLAND_ORANGE);
```
          
### Output
```text
object(DigitalVirgo\MTSP\Model\SubscriberData)#30 (1) {
  ["_subscribedMsisdnsPack":protected]=>
  array(1) {
    [0]=>
    object(DigitalVirgo\MTSP\Model\SubscribedMsisdnsPack)#31 (3) {
      ["_operator":protected]=>
      string(5) "26003"
      ["_serviceName":protected]=>
      string(6) "SOME_SERVICE_1"
      ["_subscribed":protected]=>
      array(6) {
        [0]=>
        object(DigitalVirgo\MTSP\Model\Subscribed)#18 (2) {
          ["_msisdn":protected]=>
          string(11) "48123456785"
          ["_startDate":protected]=>
          object(DateTime)#16 (3) {
            ["date"]=>
            string(26) "2016-10-17 17:26:26.000000"
            ["timezone_type"]=>
            int(3)
            ["timezone"]=>
            string(13) "Europe/Berlin"
          }
        }
        [1]=>
        object(DigitalVirgo\MTSP\Model\Subscribed)#19 (2) {
          ["_msisdn":protected]=>
          string(11) "48123456784"
          ["_startDate":protected]=>
          object(DateTime)#29 (3) {
            ["date"]=>
            string(26) "2016-10-17 20:37:58.000000"
            ["timezone_type"]=>
            int(3)
            ["timezone"]=>
            string(13) "Europe/Berlin"
          }
        }
        [2]=>
        object(DigitalVirgo\MTSP\Model\Subscribed)#21 (2) {
          ["_msisdn":protected]=>
          string(11) "48123456783"
          ["_startDate":protected]=>
          object(DateTime)#24 (3) {
            ["date"]=>
            string(26) "2016-10-18 14:23:47.000000"
            ["timezone_type"]=>
            int(3)
            ["timezone"]=>
            string(13) "Europe/Berlin"
          }
        }
        [3]=>
        object(DigitalVirgo\MTSP\Model\Subscribed)#26 (2) {
          ["_msisdn":protected]=>
          string(11) "48123456782"
          ["_startDate":protected]=>
          object(DateTime)#37 (3) {
            ["date"]=>
            string(26) "2016-10-16 01:00:40.000000"
            ["timezone_type"]=>
            int(3)
            ["timezone"]=>
            string(13) "Europe/Berlin"
          }
        }
        [4]=>
        object(DigitalVirgo\MTSP\Model\Subscribed)#28 (2) {
          ["_msisdn":protected]=>
          string(11) "48123456781"
          ["_startDate":protected]=>
          object(DateTime)#32 (3) {
            ["date"]=>
            string(26) "2016-10-22 12:43:08.000000"
            ["timezone_type"]=>
            int(3)
            ["timezone"]=>
            string(13) "Europe/Berlin"
          }
        }
        [5]=>
        object(DigitalVirgo\MTSP\Model\Subscribed)#2679 (2) {
          ["_msisdn":protected]=>
          string(11) "48123456780"
          ["_startDate":protected]=>
          object(DateTime)#2680 (3) {
            ["date"]=>
            string(26) "2017-02-14 17:54:34.000000"
            ["timezone_type"]=>
            int(3)
            ["timezone"]=>
            string(13) "Europe/Berlin"
          }
        }
      }
    }
  }
}
```