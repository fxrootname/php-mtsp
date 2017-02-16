## Get billed numbers for subscription

### Method
`getBilledNumbers`

### Parameters
`getBilledNumbers($serviceName, $subscriptionId, $raw = false)`

1. `$serviceName` service name
2. `$subscriptionId` id of subscription to fetch
3. `$raw` return raw Xml response instead of Model Object, default `false`

### Example
```php
   // remember to set Your credentials (you have to do it only once) 
   Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
   
   $client = Client::getInstance();
   
   /** @var $billed \DigitalVirgo\MTSP\Model\BilledData */
   $billed = $client->getBilledNumbers('SOME_SERVICE_1', 123456);
```
        
### Output
```text
object(DigitalVirgo\MTSP\Model\BilledData)#30 (2) {
  ["_billedMsisdnsPack":protected]=>
  array(2) {
    [0]=>
    object(DigitalVirgo\MTSP\Model\BilledMsisdnsPack)#31 (7) {
      ["_operator":protected]=>
      string(5) "26006"
      ["_serviceName":protected]=>
      string(6) "SOME_SERVICE_1"
      ["_status":protected]=>
      string(3) "-20"
      ["_subscriptionId":protected]=>
      string(9) "123456"
      ["_billDate":protected]=>
      object(DateTime)#186 (3) {
        ["date"]=>
        string(26) "2016-07-19 07:30:37.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
      ["_serviceType":protected]=>
      NULL
      ["_billed":protected]=>
      array(3) {
        [0]=>
        object(DigitalVirgo\MTSP\Model\Billed)#1161 (4) {
          ["_msisdn":protected]=>
          string(11) "48123456789"
          ["_accId":protected]=>
          int(12345789)
          ["_priceNet":protected]=>
          NULL
          ["_lastTransactionId":protected]=>
          NULL
        }
        [1]=>
        object(DigitalVirgo\MTSP\Model\Billed)#1162 (4) {
          ["_msisdn":protected]=>
          string(11) "48123456789"
          ["_accId":protected]=>
          int(123456789123)
          ["_priceNet":protected]=>
          NULL
          ["_lastTransactionId":protected]=>
          NULL
        }
        [2]=>
        object(DigitalVirgo\MTSP\Model\Billed)#1163 (4) {
          ["_msisdn":protected]=>
          string(11) "48123456789"
          ["_accId":protected]=>
          int(132456789123)
          ["_priceNet":protected]=>
          NULL
          ["_lastTransactionId":protected]=>
          NULL
        }
      }
    }
    [1]=>
    object(DigitalVirgo\MTSP\Model\BilledMsisdnsPack)#1159 (7) {
      ["_operator":protected]=>
      string(5) "26006"
      ["_serviceName":protected]=>
      string(6) "SOME_SERVICE_1"
      ["_status":protected]=>
      string(3) "-12"
      ["_subscriptionId":protected]=>
      string(9) "123456"
      ["_billDate":protected]=>
      object(DateTime)#1160 (3) {
        ["date"]=>
        string(26) "2016-07-19 07:30:37.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
      }
      ["_serviceType":protected]=>
      NULL
      ["_billed":protected]=>
      array(3) {
        [0]=>
        object(DigitalVirgo\MTSP\Model\Billed)#1161 (4) {
          ["_msisdn":protected]=>
          string(11) "48123456789"
          ["_accId":protected]=>
          int(12345789)
          ["_priceNet":protected]=>
          NULL
          ["_lastTransactionId":protected]=>
          NULL
        }
        [1]=>
        object(DigitalVirgo\MTSP\Model\Billed)#1162 (4) {
          ["_msisdn":protected]=>
          string(11) "48123456789"
          ["_accId":protected]=>
          int(123456789123)
          ["_priceNet":protected]=>
          NULL
          ["_lastTransactionId":protected]=>
          NULL
        }
        [2]=>
        object(DigitalVirgo\MTSP\Model\Billed)#1163 (4) {
          ["_msisdn":protected]=>
          string(11) "48123456789"
          ["_accId":protected]=>
          int(132456789123)
          ["_priceNet":protected]=>
          NULL
          ["_lastTransactionId":protected]=>
          NULL
        }
      }
    }
  }
  ["_endFlag":protected]=>
  string(5) "false"
}

```