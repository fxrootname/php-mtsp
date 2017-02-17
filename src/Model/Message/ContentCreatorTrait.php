<?php
/**
 * Class ContentCreatorTrait
 *
 * @package DigitalVirgo\MTSP\Model\Message
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Model\Message;

use DigitalVirgo\MTSP\Model\Enum\ServiceType;

/**
 * Class ContentCreatorTrait
 */
trait ContentCreatorTrait
{
    /**
     * Contains list of contents classes
     *
     * @var array
     */
    protected static $contentsClasses = [
        ServiceType::SMS                  => Sms::class,
        ServiceType::PERSONALIZED_SMS     => PersonalizedSms::class,
        ServiceType::MMS                  => Mms::class,
        ServiceType::PERSONALIZED_MMS     => PersonalizedMms::class,
        ServiceType::WAPPUSH              => WapPush::class,
        ServiceType::PERSONALIZED_WAPPUSH => PersonalizedWapPush::class
    ];

    /**
     * Converts raw data into ContentsInterface object
     *
     * @param array $contentData
     * @param null $serviceType
     * @return ContentsInterface
     * @throws \Exception
     */
    protected function _createContent(array $contentData, $serviceType = null)
    {
        if ($serviceType !== null) {
            if ($serviceType && !in_array($serviceType, ServiceType::getConstants())) {
                throw new \Exception('Invalid serviceType value. Accepted: ' . implode(', ', ServiceType::getConstants()));
            }

            $contentClass = self::$contentsClasses[$serviceType];

            return new $contentClass($contentData);

        } else {
            // try determinate class by given properties
            $dataProperties = array_keys($contentData);

            foreach (self::$contentsClasses as $contentClass) {
                $reflection = new \ReflectionClass($contentClass);

                $classProperties = array_map(function ($e) {
                    return trim($e->getName(), '_');

                }, $reflection->getProperties());

                // check properties equility
                if ($classProperties == $dataProperties) {
                    return new $contentClass($contentData);
                }

            }

            throw new \Exception('Unable to determinate content class.');
        }

    }

}
