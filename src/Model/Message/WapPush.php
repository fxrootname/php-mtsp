<?php

namespace DigitalVirgo\MTSP\Model\Message;

use DigitalVirgo\MTSP\Model\ModelAbstract;
use DigitalVirgo\MTSP\Util\Helper;

/**
 * Class WapPush
 * @package DigitalVirgo\MTSP\Model\Message
 *
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 *
 */
class WapPush extends ModelAbstract
{
    /**
     * @var string
     */
    protected $_title;

    /**
     * @var string
     */
    protected $_url;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     * @return WapPush
     * @throws \Exception
     */
    public function setTitle($title)
    {
        if (!Helper::isMessageTextValid($title)) {
            throw new \Exception('Title have invalid characters');
        }

        $this->_title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * @param string $url
     * @return WapPush
     */
    public function setUrl($url)
    {
        $this->_url = $url;
        return $this;
    }

    protected function _getDomMap()
    {
        return [
            'wapPush' => [
                'title' => 'title',
                'url' => 'url',
            ]
        ];
    }

}
