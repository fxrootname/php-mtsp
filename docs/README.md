## Usage
### Setup client
```php
Client::getInstance()->setAuth('YOUR_LOGIN', 'YOUR_PASSWORD');
```

### Available methods
1. [Get service names](1-get-service-names.md)
2. [Get service](2-get-service.md)
3. [Get subscriptions for service](3-get-subscriptions.md)
4. [Get subscription details](4-get-subscription-details.md)
5. [Get billed numbers for subscription](5-get-billed-numbers.md)
6. [Get subscribers](6-get-subscribers.md)
7. [Add new subscription](7-add-subscription.md)
8. [Update existing subscription](8-update-subscription.md)
9. [Get welcome message](9-get-welcome-message.md)
10. [Get billed numbers for welcome message](10-get-billed-numbers-for-welcome-message.md)
11. [Update/set welcome message](11-update-set-welcome-message.md)
12. [Hlr information](12-hlr.md)

### Class documentation

[PHPDOC](phpdoc/README.md)

#### Doc's generating
```sh
rm -rf ./out/*
rm -rf ./docs/phpdoc/*

cd vendor/bin
./phpdoc -d ./../../src/ -t ./../../out --template="xml"
./phpdocmd ../../out/structure.xml ./../../docs/phpdoc --index README.md
```