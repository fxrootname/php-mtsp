<?php
/**
 * Class Client
 *
 * @package DigitalVirgo\MTSP\Service
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSP\Service;

use DigitalVirgo\MTSP\Model\BilledData;
use DigitalVirgo\MTSP\Model\Hlr;
use DigitalVirgo\MTSP\Model\ModelAbstractTraitInterface;
use DigitalVirgo\MTSP\Model\Service;
use DigitalVirgo\MTSP\Model\Services;
use DigitalVirgo\MTSP\Model\SubscriberData;
use DigitalVirgo\MTSP\Model\Subscriptions;
use DigitalVirgo\MTSP\Model\Subscription;
use DigitalVirgo\MTSP\Model\WelcomeMessage;
use DigitalVirgo\MTSP\Service\Client\Exception\BadRequestException;
use DigitalVirgo\MTSP\Service\Client\Exception\ForbiddenException;
use DigitalVirgo\MTSP\Service\Client\Exception\MethodNotAllowedException;
use DigitalVirgo\MTSP\Service\Client\Exception\NotFoundException;
use DigitalVirgo\MTSP\Service\Client\Exception\UnauthorizedException;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Stream\Stream;

/**
 * Class Client - Provice pi methods
 */
class Client extends GuzzleClient
{

    const API_URL = 'http://mtserviceproxy.services.avantis.pl/';

    /**
     * Instance for singleton
     *
     * @var Client
     */
    private static $_instance = null;

    /**
     * Username for auth
     *
     * @var string
     */
    protected $_username;

    /**
     * Password for auth
     *
     * @var string
     */
    protected $_password;

    /**
     * Get new instance of client
     *
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
     * Set authorization credentials
     *
     * @param string $username
     * @param string $password
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
     * Get current username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Set username for Auth
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->_username = $username;
        $this->_configureAuth();
        return $this;
    }


    /**
     * Get current password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Set password for Auth
     *
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
     * @return $this
     */
    protected function _configureAuth()
    {
        if ($this->_username && $this->_password) {
            $this->setDefaultOption('auth', [$this->_username, $this->_password]);
        }

        return $this;
    }

    /**
     * Send http request
     *
     * @param string $url Request path
     * @param string $method Http method
     * @param mixed $payload Data to send with request
     * @return string Body string response
     * @throws BadRequestException
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @throws UnauthorizedException
     * @throws \Exception
     */
    protected function _request($url, $method = 'GET', $payload = null)
    {

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
            case 'PUT':
                if ($payload instanceof ModelAbstractTraitInterface) {

//                    var_dump($payload->toXml(true));

                    $options['body'] = Stream::factory($payload->toXml());
                    $options['headers']['Content-type'] = 'application/xml';
                } else {
                    $options['body'] = Stream::factory($payload);
                }
                break;
        }

        try {
            $response = $this->send(
                $this->createRequest($method, $url, $options)
            );
        } catch (ClientException $e) {

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new BadRequestException((string)$e->getResponse()->getBody());
                    break;
                case 401:
                    throw new UnauthorizedException();
                    break;
                case 403:
                    throw new ForbiddenException();
                    break;
                case 404:
                    throw new NotFoundException();
                    break;
                case 405:
                    throw new MethodNotAllowedException();
                    break;
                default:
                    throw new \Exception((string)$e->getResponse()->getBody());
                    break;
            }
        }

        /** @var \GuzzleHttp\Stream\Stream $body */
        $body = $response->getBody();

        return (string)$body;
    }

    /**
     * Get Services in xml format
     *
     * @param bool $raw return raw xml output
     * @return Services|string
     */
    public function getServicesNames($raw = false)
    {

        $response = $this->_request("services");

        if ($raw) {
            return $response;
        }

        return (new Services())->fromXml($response);
    }

    /**
     * Get service by name
     *
     * @param $serviceName Service name
     * @param bool $raw return raw xml output
     * @return Service
     */
    public function getService($serviceName, $raw = false)
    {

        $response = $this->_request("services/{$serviceName}");

        if ($raw) {
            return $response;
        }

        return (new Service())->fromXml($response);
    }

    /**
     * Get subscriptions for service
     *
     * @param string $serviceName Service name
     * @param null|string|\DateTime $from Optional date from filter
     * @param null|string|\DateTime $to Optional date to filter
     * @param bool $raw return raw xml output
     * @return Subscriptions|string
     * @throws \Exception
     */
    public function getSubscriptions($serviceName, $from = null, $to = null, $raw = false)
    {

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

        $response = $this->_request("services/{$serviceName}/subscriptions", "GET", $payload);

        if ($raw) {
            return $response;
        }

        return (new Subscriptions())->fromXml($response);
    }

    /**
     * Get single subscription
     *
     * @param $serviceName
     * @param $subscriptionId
     * @param bool $raw return raw xml output
     * @return Subscription
     */
    public function getSubscription($serviceName, $subscriptionId, $raw = false)
    {
        $response = $this->_request("services/{$serviceName}/subscriptions/{$subscriptionId}");

        if ($raw) {
            return $response;
        }

        return (new Subscription())->fromXml($response);
    }

    /**
     * Get billed numbers report for subscription
     *
     * @param string $serviceName Service Name
     * @param int|string $subscriptionId Subscription id
     * @param bool $raw
     * @return BilledData|string
     */
    public function getBilledNumbers($serviceName, $subscriptionId, $raw = false)
    {
        $response = $this->_request("services/{$serviceName}/subscriptions/{$subscriptionId}/billing", "GET");


        if ($raw) {
            return $response;
        }

        return (new BilledData())->fromXml($response);

    }

    /**
     * Get subscribers for service
     *
     * @param $serviceName
     * @param null $operator
     * @param bool $raw return raw xml output
     * @return SubscriberData|string
     */
    public function getSubscribers($serviceName, $operator = null, $raw = false)
    {

        $response = $this->_request("services/{$serviceName}/subscribers/{$operator}");

        if ($raw) {
            return $response;
        }

        return (new SubscriberData())->fromXml($response);
    }

    /**
     * Creating new subscription
     *
     * @param Subscription|array $subscription Subscription data
     * @param bool $raw return raw xml response
     * @return Subscription|string
     * @throws \Exception
     */
    public function addSubscription($subscription, $raw = false)
    {
        if (is_array($subscription)) {
            $subscription = new Subscription($subscription);
        }

        $serviceName = $subscription->getServiceName();

        if (!$subscription->getServiceName()) {
            throw new \Exception('Missing serviceName in subscription');
        }

        // clean no updateable data
        $subscription->cleanBeforeSave();

        $response = $this->_request("services/{$serviceName}/subscriptions", "POST", $subscription);

        //update existing subscription
        $subscription->fromXml($response);

        if ($raw) {
            return $response;
        }

        return $subscription;

    }

    /**
     * Update Subscription
     *
     * @param Subscription|array $subscription Subscription data
     * @param bool $raw return raw xml output
     * @return Subscription|string
     * @throws \Exception
     */
    public function updateSubscription($subscription, $raw = false)
    {
        if (is_array($subscription)) {
            $subscription = new Subscription($subscription);
        }

        $serviceName = $subscription->getServiceName();

        if (!$serviceName) {
            throw new \Exception('Missing serviceName in subscription');
        }

        // clean no updateable data
        $subscription->cleanBeforeSave();

        $response = $this->_request("services/{$serviceName}/subscriptions", "PUT", $subscription);

        //update existing subscription
        $subscription->fromXml($response);

        if ($raw) {
            return $response;
        }

        return $subscription;

    }

    /**
     * Gets welcome message for service
     *
     * @param $serviceName Service name
     * @param bool $raw return raw xml output
     * @return WelcomeMessage|string
     */
    public function getWelcomeMessage($serviceName, $raw = false)
    {
        $response = $this->_request("services/{$serviceName}/welcome");

        if ($raw) {
            return $response;
        }

        return (new WelcomeMessage())->fromXml($response);
    }

    /**
     * Get billed numbers for welcome message
     *
     * @param $serviceName Service name
     * @param null $id
     * @param bool $raw return raw xml output
     * @return BilledData|string
     */
    public function getWelcomeMessageBilledNumbers($serviceName, $id = null, $raw = false)
    {

        $payload = [];

        if ($id !== null) {
            $payload['id'] = $id;
        }

        $response = $this->_request("services/{$serviceName}/welcome/billing", "GET", $payload);

        if ($raw) {
            return $response;
        }

        return (new BilledData())->fromXml($response);
    }


    /**
     * Create or update welcome message for service
     *
     * @param WelcomeMessage|array $message Message to set
     * @param bool $raw return raw xml output
     * @return WelcomeMessage|string
     */
    public function setWelcomeMessage($message, $raw = false)
    {
        if (is_array($message)) {
            $message = new WelcomeMessage($message);
        }

        $serviceName = $message->getServiceName();

        if (!$serviceName) {
            throw new \Exception('Missing serviceName in message');
        }

        $clonedMessage = clone $message;

        // clean no updateable data
        $clonedMessage->cleanBeforeSave();

        $response = $this->_request("services/{$serviceName}/welcome", "POST", $clonedMessage);

        //update existing message
        $message->fromXml($response);

        if ($raw) {
            return $response;
        }

        return $message;
    }

    /**
     * Get operator code for Msisdn
     *
     * @param string $msisdn Msisdn to check
     * @param bool $raw return raw xml output
     * @return Hlr|string
     */
    public function hlr($msisdn, $raw = false)
    {
        $response = $this->_request("hlr/{$msisdn}");

        if ($raw) {
            return $response;
        }

        return (new Hlr())->fromXml($response);
    }

    /**
     * Get extended msisdn data
     *
     * @param string $msisdn Msisdn to check
     * @param bool $raw return raw xml output
     * @return Hlr|string
     */
    public function hlrExtended($msisdn, $raw = false)
    {
        $response = $this->_request("hlr/extended/{$msisdn}");

        if ($raw) {
            return $response;
        }

        return (new Hlr())->fromXml($response);
    }

}
