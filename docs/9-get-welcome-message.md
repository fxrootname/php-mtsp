## Get welcome message

### Method
`getWelcomeMessage`

### Parameters
`getWelcomeMessage($serviceName, $raw = false)`

1. `$serviceName` service name
3. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $welcomeMessage \DigitalVirgo\MTSP\Model\WelcomeMessage */
   $welcomeMessage = $client->getWelcomeMessage("SOME_SERVICE_1");
```
          
### Output
```text
object(DigitalVirgo\MTSP\Model\WelcomeMessage)#30 (10) {
  ["_serviceName":protected]=>
  string(6) "SOME_SERVICE_1"
  ["_serviceType":protected]=>
  string(3) "SMS"
  ["_createDate":protected]=>
  string(19) "2012-11-23T15:20:35"
  ["_statuses":protected]=>
  array(4) {
    [0]=>
    object(DigitalVirgo\MTSP\Model\WelcomeMessageStatus)#31 (6) {
      ["_operatorCode":protected]=>
      int(26003)
      ["_statusCode":protected]=>
      string(20) "PROCESSED_BY_GATEWAY"
      ["_contents":protected]=>
      object(DigitalVirgo\MTSP\Model\Message\Sms)#21 (1) {
        ["_text":protected]=>
        string(40) "Witaj oto wiadomosc powitalna."
      }
      ["_active":protected]=>
      bool(true)
      ["_type":protected]=>
      string(15) "BILL_PREDEFINED"
      ["_updateDate":protected]=>
      object(DateTime)#29 (3) {
        ["date"]=>
        string(26) "2016-11-23 10:51:16.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
    }
    [1]=>
    object(DigitalVirgo\MTSP\Model\WelcomeMessageStatus)#28 (6) {
      ["_operatorCode":protected]=>
      int(26001)
      ["_statusCode":protected]=>
      string(7) "CREATED"
      ["_contents":protected]=>
      object(DigitalVirgo\MTSP\Model\Message\Sms)#19 (1) {
        ["_text":protected]=>
        string(40) "Witaj oto wiadomosc powitalna."
      }
      ["_active":protected]=>
      bool(true)
      ["_type":protected]=>
      string(15) "BILL_PREDEFINED"
      ["_updateDate":protected]=>
      object(DateTime)#37 (3) {
        ["date"]=>
        string(26) "2016-11-23 10:51:12.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
    }
    [2]=>
    object(DigitalVirgo\MTSP\Model\WelcomeMessageStatus)#16 (6) {
      ["_operatorCode":protected]=>
      int(26006)
      ["_statusCode":protected]=>
      string(20) "PROCESSED_BY_GATEWAY"
      ["_contents":protected]=>
      object(DigitalVirgo\MTSP\Model\Message\Sms)#26 (1) {
        ["_text":protected]=>
        string(40) "Witaj oto wiadomosc powitalna."
      }
      ["_active":protected]=>
      bool(true)
      ["_type":protected]=>
      string(15) "BILL_PREDEFINED"
      ["_updateDate":protected]=>
      object(DateTime)#18 (3) {
        ["date"]=>
        string(26) "2016-11-23 10:51:17.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
    }
    [3]=>
    object(DigitalVirgo\MTSP\Model\WelcomeMessageStatus)#24 (6) {
      ["_operatorCode":protected]=>
      int(26002)
      ["_statusCode":protected]=>
      string(7) "CREATED"
      ["_contents":protected]=>
      object(DigitalVirgo\MTSP\Model\Message\Sms)#32 (1) {
        ["_text":protected]=>
        string(40) "Witaj oto wiadomosc powitalna."
      }
      ["_active":protected]=>
      bool(true)
      ["_type":protected]=>
      string(15) "BILL_PREDEFINED"
      ["_updateDate":protected]=>
      object(DateTime)#27 (3) {
        ["date"]=>
        string(26) "2016-11-23 10:51:12.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
    }
  }
  ["_sms":protected]=>
  object(DigitalVirgo\MTSP\Model\Message\Sms)#17 (1) {
    ["_text":protected]=>
    string(40) "Witaj oto wiadomosc powitalna."
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