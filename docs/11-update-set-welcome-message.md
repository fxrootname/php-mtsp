## Update or set welcome message

### Method
`setWelcomeMessage`

### Parameters
`setWelcomeMessage($message, $raw = false)`

1. `$message` WelcomeMessage object or class
2. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $message \DigitalVirgo\MTSP\Model\WelcomeMessage */
   $message = $client->setWelcomeMessage([
       "serviceName" => "SOME_SERVICE_1"
       "serviceType" => "SMS"
       "sms" => [
           "text" => "Welcome text",
       ]
   ]);
   
   ////////////////
   $message = $client->getWelcomeMessage('SOME_SERVICE_1')
   $message->getSms()->setText('New sms text');
   $client->setWelcomeMessage($message);
```
        
### Output
```text
object(DigitalVirgo\MTSP\Model\WelcomeMessage)#22 (10) {
  ["_serviceName":protected]=>
  string(12) "SOME_SERVICE_1"
  ["_serviceType":protected]=>
  string(3) "SMS"
  ["_createDate":protected]=>
  string(19) "2016-02-23T15:42:19"
  ["_statuses":protected]=>
  array(2) {
    [0]=>
    object(DigitalVirgo\MTSP\Model\WelcomeMessageStatus)#25 (6) {
      ["_operatorCode":protected]=>
      int(26002)
      ["_statusCode":protected]=>
      string(7) "CREATED"
      ["_contents":protected]=>
      object(DigitalVirgo\MTSP\Model\Message\Sms)#17 (1) {
        ["_text":protected]=>
        string(13) "Welcome text"
      }
      ["_active":protected]=>
      bool(true)
      ["_type":protected]=>
      string(15) "BILL_PREDEFINED"
      ["_updateDate":protected]=>
      object(DateTime)#18 (3) {
        ["date"]=>
        string(26) "2016-02-25 10:04:06.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
    }
    [1]=>
    object(DigitalVirgo\MTSP\Model\WelcomeMessageStatus)#21 (6) {
      ["_operatorCode":protected]=>
      int(26003)
      ["_statusCode":protected]=>
      string(28) "PROCESSING_BY_GATEWAY_FAILED"
      ["_contents":protected]=>
      object(DigitalVirgo\MTSP\Model\Message\Sms)#19 (1) {
        ["_text":protected]=>
        string(8) "Welcome text"
      }
      ["_active":protected]=>
      bool(true)
      ["_type":protected]=>
      string(15) "BILL_PREDEFINED"
      ["_updateDate":protected]=>
      object(DateTime)#16 (3) {
        ["date"]=>
        string(26) "2016-02-25 10:04:13.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
    }
  }
  ["_sms":protected]=>
  object(DigitalVirgo\MTSP\Model\Message\Sms)#23 (1) {
    ["_text":protected]=>
    string(13) "Welcome text"
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