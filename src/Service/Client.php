<?php
namespace DigitalVirgo\MTSP\Service;

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

    const API_URL = 'http://mtserviceproxy.services.avantis.pl/';

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

        //@todo apply payload to request

        $response = $this->send(
            $this->createRequest($method, $url, $options)
        );

        /** @var \GuzzleHttp\Stream\Stream $body */
        $body = $response->getBody();

        return (string) $body;
    }

    /**
     * Get Services in xml format
     * @return string
     */
    public function getServices() {
        return $this->_request('/services');
    }

}