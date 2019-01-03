<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveTerminals
 *
 * @method array getTerminalIds()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class RemoveTerminals extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'RemoveTerminals';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @deprecated deprecated since version 2.0, Use getTerminalIds() instead.
     *
     * @return array
     */
    public function getTerminalIdss()
    {
        return $this->getTerminalIds();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTerminalIds() instead.
     *
     * @param array $terminalIdss
     *
     * @return $this
     */
    public function setTerminalIdss(array $terminalIdss)
    {
        return $this->withTerminalIds($terminalIdss);
    }

    /**
     * @param array $terminalIds
     *
     * @return $this
     */
    public function withTerminalIds(array $terminalIds)
    {
        $this->data['TerminalIds'] = $terminalIds;
        foreach ($terminalIds as $i => $iValue) {
            $this->options['query']['TerminalIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChannelId() instead.
     *
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        return $this->withChannelId($channelId);
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function withChannelId($channelId)
    {
        $this->data['ChannelId'] = $channelId;
        $this->options['query']['ChannelId'] = $channelId;

        return $this;
    }
}
