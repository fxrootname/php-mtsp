## Get service

### Method
`getService`

### Parameters
`getService($serviceName, $raw = false)`

1. `$serviceName` service name
2. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $service \DigitalVirgo\MTSP\Model\Service */
   $service = $client->getService('SOME_SERVICE_1');
```

### Output
```text
object(DigitalVirgo\MTSP\Model\Service)#23 (10) {
  ["_active":protected]=>
  bool(true)
  ["_activeFrom":protected]=>
  object(DateTime)#33 (3) {
    ["date"]=>
    string(26) "2012-11-12 13:00:00.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["_activeTo":protected]=>
  object(DateTime)#16 (3) {
    ["date"]=>
    string(26) "2017-11-12 15:00:00.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(13) "Europe/Berlin"
  }
  ["_cronSendDates":protected]=>
  string(18) "0 30 7 ? * TUE,FRI"
  ["_description":protected]=>
  string(21) "Serwis SOME_SERVICE_1"
  ["_id":protected]=>
  int(12345)
  ["_sendLa":protected]=>
  NULL
  ["_serviceName":protected]=>
  string(14) "SOME_SERVICE_1"
  ["_serviceType":protected]=>
  NULL
  ["_serviceStatus":protected]=>
  string(10) "PRODUCTION"
}

```