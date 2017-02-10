<?php
namespace DigitalVirgo\MTSP\Service;

use DigitalVirgo\MTSP\Model\Service;
use DigitalVirgo\MTSP\Model\Services;
use DigitalVirgo\MTSP\Model\Subscriptions;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Stream\Stream;

/**
 * Class Client
 * @package DigitalVirgo\MTSP\Service
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class Client extends GuzzleClient {

//    const API_URL = 'http://mtserviceproxy.services.avantis.pl/';
    const API_URL = 'http://beta2:9080/mtsp/';

    /**
     * @var Client
     */
    private static $_instance = null;

    /**
     * @var string
     */
    protected $_username;

    /**
     * @var string
     */
    protected $_password;

    /**
     * Get new instance of client
     *
     * @param string $baseUrl api base url
     * @return Client
     */
    public static function getInstance()
    {
        if (null === static::$_instance) {
            static::$_instance = new static(array(
                'base_url' => self::API_URL,
            ));
        }
        return static::$_instance;
    }

    /**
     * @param $login
     * @param $password
     * @return $this
     */
    public function setAuth($username, $password)
    {
        $this->_username = $username;
        $this->_password = $password;

        $this->_configureAuth();

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param string $username
     * @return Client
     */
    public function setUsername($username)
    {
        $this->_username = $username;
        $this->_configureAuth();
        return $this;
    }


    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->_password = $password;
        $this->_configureAuth();
        return $this;
    }

    /**
     * Setup basic auth
     *
     * @return null
     */
    protected function _configureAuth()
    {
        if ($this->_username && $this->_password) {
            $this->setDefaultOption('auth', [$this->_username, $this->_password]);
        }
    }

    /**
     * Send http request
     *
     * @param string $url Request path
     * @param string $method Http method
     * @param mixed $payload Data to send with request
     * @return string Body string response
     */
    protected function _request($url, $method = 'GET', $payload = null) {

        $options = [];

        switch ($method) {
            case 'GET':
                if (is_array($payload)) {
                    $options['query'] = [$payload];
                } else {
                    $options['query'] = $payload;
                }

                break;
            case 'POST':
                $options['body'] = $payload;
                break;
        }

        $response = $this->send(
            $this->createRequest($method, $url, $options)
        );

        /** @var \GuzzleHttp\Stream\Stream $body */
        $body = $response->getBody();

        return (string) $body;
    }

    /**
     * Get Services in xml format
     * @return Services
     */
    public function getServices() {
        return (new Services())
            ->fromXml(
                $this->_request("services")
            );
    }

    /**
     * @param $serviceName Service name
     * @return Service
     */
    public function getService($serviceName) {

        return (new Service())
            ->fromXml(
                $this->_request("services/{$serviceName}")
            );
    }

    /**
     * @param string $serviceName Service name
     * @param null|string|\DateTime $from Optional date from filter
     * @param null|string|\DateTime $to Optional date to filter
     * @return Subscriptions
     */
    public function getSubscriptions($serviceName, $from = null, $to = null) {

        if ($from xor $to) {
            throw new \Exception('Both dates are required');
        }

        $payload = [];

        if ($from !== null) {
            if (is_string($from)) {
                $from = new \DateTime($from);
            }

            $payload['fromDate'] = $from->format('c');
        }

        if ($to !== null) {
            if (is_string($to)) {
                $to = new \DateTime($to);
            }

            $payload['toDate'] = $to->format('c');
        }

        return (new Subscriptions())
            ->fromXml(
                $this->_request("services/{$serviceName}/subscriptions", "GET", $payload)
            );
    }

    public function getSubscription($serviceName, $subscriptionId) {
        return $this->_request("services/{$serviceName}/subscriptions/{$subscriptionId}");
    }

    public function getBilledNumbers($serviceName, $subscriptionId, $id = null) {
        $payload = [];

        if ($id) {
            $payload['id'] = $id;
        }

        return $this->_request("services/{$serviceName}/subscriptions/{$subscriptionId}/billing", "GET", $payload);
    }

    public function getSubscribers($serviceName, $operator = null) {

        return $this->_request("services/{$serviceName}/subscribers/{$operator}");
    }

    public function addSubscription($serviceName, $scheduledTo, $message) {
//        POST /services/{service_name}/subscriptions/.

//        ALLOWED ASCII CHARACTERS IN TEXT CONTENTS
//0 1 2 3 4 5 6 7 8 9 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d
//e f g h i j k l m n o p q r s t u v w x y z ą ć ę ł ń ó Ś ś ż ź Ą Ć Ę Ł Ń Ó Ś Ż
//Ź ! @ # $ % & * ( ) - _ + = : ; ' " , . / \ < > ?     SP LF CR
//
//
//        ADDITIONAL ALLOWED CHARACTERS IN TEXT CONTENTS FOR RUSSIAN OPERATORS
//                                                           А Б В Г Д Е Ё Ж З И Й К Л М Н О П Р С Т У Ф Х Ц Ч Ш Щ Ъ Ы Ь Э Ю Я а б в г д е ё ж з
//и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я

    }

    public function updateSubscription($serviceName, $subscriptionId, $scheduledTo, $message) {
//        PUT /services/{service name}/subscriptions/.
    }


}