<?php

namespace DigitalVirgo\MTSP\Util;

use DigitalVirgo\MTSP\Model\Service;
use Cron\CronExpression;

class Helper {

    /**
     * Converts Quartz format to Cron format
     * @param $quartzString
     * @return array Cron string and seccond from quartz
     */
    public static function quartzToCron($quartzString)
    {
        $quartzString = str_replace("?", "*", $quartzString);

        $parts = explode(" ", $quartzString);

        // add year if missing
        if (count($parts) == 6) {
            $parts[6] = "*";
        }

        //convert months: 4 index
        $parts[4] = str_replace(
            ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            ['1',   '2',   '3',   '4',   '5',   '6',   '7',   '8',   '9',   '10',  '11',  '12'],
            $parts[4]
        );

        //convert day of week: 5 index
        if (is_numeric($parts[5])) { //check number format
            $parts[5] = (int)$parts[5];
            $parts[5]--;
            if ($parts[5] == 0) {
                $parts[5] = 7;
            }
        } else {
            $parts[5] = str_replace(
                ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                ['7',   '1',   '2',   '3',   '4',   '5',   '6'],
                $parts[5]
            );
        }

        //skip secconds
        $secconds = $parts[0];
        unset($parts[0]);

        $cronExpression = implode(" ", $parts);

        return [$cronExpression, $secconds];
    }

    /**
     * @param Service|string $serviceOrCron Service or Quartz cron string
     * @param string $currentTime Time for next calculation
     * @param int $nth Number execution
     * @return \DateTime
     * @throws \Exception
     */
    public static function getNextRunDate($serviceOrCron, $currentTime = 'now', $nth = 0)
    {
        if ($serviceOrCron instanceof Service) {

            if (!$serviceOrCron->getCronSendDates()) {
                throw new \Exception('Missing cronSendDates in Service');
            }

            $serviceOrCron = $serviceOrCron->getCronSendDates();
        }

        list($cronString, $secconds) = Helper::quartzToCron($serviceOrCron);

        $cronExpression = CronExpression::factory($cronString);

        $nextExecution = $cronExpression->getNextRunDate($currentTime, $nth);

        // set secconds
        if (is_numeric($secconds)) {
            $nextExecution->add(new \DateInterval("PT{$secconds}S"));
        }

        return $nextExecution;
    }

    public static function isMessageTextValid($text)
    {
        if (empty($text)) {
            return true;
        }

        //@todo

        //        ALLOWED ASCII CHARACTERS IN TEXT CONTENTS
        //0 1 2 3 4 5 6 7 8 9 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d
        //e f g h i j k l m n o p q r s t u v w x y z ą ć ę ł ń ó Ś ś ż ź Ą Ć Ę Ł Ń Ó Ś Ż
        //Ź ! @ # $ % & * ( ) - _ + = : ; ' " , . / \ < > ?     SP LF CR
        //
        //
        //        ADDITIONAL ALLOWED CHARACTERS IN TEXT CONTENTS FOR RUSSIAN OPERATORS
        //                                                           А Б В Г Д Е Ё Ж З И Й К Л М Н О П Р С Т У Ф Х Ц Ч Ш Щ Ъ Ы Ь Э Ю Я а б в г д е ё ж з
        //и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я



        return true;

    }

}