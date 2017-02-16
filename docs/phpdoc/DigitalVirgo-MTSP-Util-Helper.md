DigitalVirgo\MTSP\Util\Helper
===============

Class Helper




* Class name: Helper
* Namespace: DigitalVirgo\MTSP\Util







Methods
-------


### quartzToCron

    array DigitalVirgo\MTSP\Util\Helper::quartzToCron($quartzString)

Converts Quartz format to Cron format



* Visibility: **public**
* This method is **static**.


#### Arguments
* $quartzString **mixed**



### getNextRunDate

    \DateTime DigitalVirgo\MTSP\Util\Helper::getNextRunDate(\DigitalVirgo\MTSP\Model\Service|string $serviceOrCron, string $currentTime, integer $nth)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $serviceOrCron **[DigitalVirgo\MTSP\Model\Service](DigitalVirgo-MTSP-Model-Service.md)|string** - &lt;p&gt;Service or Quartz cron string&lt;/p&gt;
* $currentTime **string** - &lt;p&gt;Time for next calculation&lt;/p&gt;
* $nth **integer** - &lt;p&gt;Number execution&lt;/p&gt;



### isMessageTextValid

    boolean DigitalVirgo\MTSP\Util\Helper::isMessageTextValid($text)

Validate if message contains allowed characters



* Visibility: **public**
* This method is **static**.


#### Arguments
* $text **mixed**


