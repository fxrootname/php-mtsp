## Get hlr info

### Method
`hlr`

`hlrExtended`

### Parameters
`hlr($msisdn, $raw = false)`

`hlrExtended($msisdn, $raw = false)`

1. `$msisdn` string msisdn number
2. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $hlr \DigitalVirgo\MTSP\Model\Hlr */
   $hlr = $client->hlr('48123456789');
   $hlr = $client->hlrExtended('48123456789');
```
        
### Output
```text
object(DigitalVirgo\MTSP\Model\Hlr)#23 (10) {                                                                                         
  ["_msisdn":protected]=>                                                                                                             
  string(11) "48123456789"                                                                                                            
  ["_operator":protected]=>                                                                                                           
  string(5) "26006"                                                                                                                   
  ["_imsi":protected]=>                                                                                                               
  NULL                                                                                                                                
  ["_originalNetworkName":protected]=>                                                                                                
  NULL                                                                                                                                
  ["_mccmnc":protected]=>                                                                                                             
  NULL                                                                                                                                
  ["_roamingCountyName":protected]=>
  NULL
  ["_originalNetworkPrefix":protected]=>
  NULL
  ["_originalCountryName":protected]=>
  NULL
  ["_originalCountryPrefix":protected]=>
  NULL
  ["_isNumberPorted":protected]=>
  NULL
}

object(DigitalVirgo\MTSP\Model\Hlr)#23 (10) {                                                                                         
  ["_msisdn":protected]=>                                                                                                             
  string(11) "48123456789"                                                                                                            
  ["_operator":protected]=>                                                                                                           
  string(5) "26006"                                                                                                                   
  ["_imsi":protected]=>                                                                                                               
  string(15) "260060005999999"                                                                                                                                
  ["_originalNetworkName":protected]=>                                                                                                
  string(4) "Play"                                                                                                                                
  ["_mccmnc":protected]=>                                                                                                             
  string(5) "26006"                                                                                                                                
  ["_roamingCountyName":protected]=>
  string(6) "Poland"
  ["_originalNetworkPrefix":protected]=>
  string(3) "792"
  ["_originalCountryName":protected]=>
  string(6) "Poland"
  ["_originalCountryPrefix":protected]=>
  string(2) "48"
  ["_isNumberPorted":protected]=>
  bool(true)
}
```