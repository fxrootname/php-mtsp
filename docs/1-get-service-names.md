## Get service names

### Method
`getServicesNames`

### Parameters
`getServicesNames($raw = false)`

1. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
// remember to set Your credentials (you have to do it only once) 
Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');

$client = Client::getInstance();

/** @var $servicesNames \DigitalVirgo\MTSP\Model\Services */
$servicesNames = $client->getServicesNames();

foreach ($servicesNames as $serviceName) {
    echo $serviceName;
}
```

### Output
```text
object(DigitalVirgo\MTSP\Model\Services)#30 (1) {                                                                                  
 ["_name":protected]=>                                                                                                            
 array(13) {                                                                                                                      
   [0]=>                                                                                                                          
   string(14) "SOME_SERVICE_1"
   [1]=>
   string(14) "SOME_SERVICE_2"
   [2]=>
   string(14) "SOME_SERVICE_3"
   [3]=>
   string(14) "SOME_SERVICE_4"
   [4]=>
   string(14) "SOME_SERVICE_5"
   [5]=>
   string(14) "SOME_SERVICE_6"
   [6]=>
   string(14) "SOME_SERVICE_7"
   [7]=>
   string(14) "SOME_SERVICE_8"
   [8]=>
   string(14) "SOME_SERVICE_9"
   [9]=>
   string(15) "SOME_SERVICE_10"
   [10]=>
   string(15) "SOME_SERVICE_11"
   [11]=>
   string(15) "SOME_SERVICE_12"
   [12]=>
   string(15) "SOME_SERVICE_13"
 }
}
```