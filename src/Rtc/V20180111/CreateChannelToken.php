<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateChannelToken
 *
 * @method string getSessionId()
 * @method string getUId()
 * @method string getOwnerId()
 * @method string getNonce()
 * @method string getAppId()
 * @method string getChannelId()
 */
class CreateChannelToken extends RpcRequest
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
    public $action = 'CreateChannelToken';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @deprecated deprecated since version 2.0, Use withSessionId() instead.
     *
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        return $this->withSessionId($sessionId);
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function withSessionId($sessionId)
    {
        $this->data['SessionId'] = $sessionId;
        $this->options['query']['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUId() instead.
     *
     * @param string $uId
     *
     * @return $this
     */
    public function setUId($uId)
    {
        return $this->withUId($uId);
    }

    /**
     * @param string $uId
     *
     * @return $this
     */
    public function withUId($uId)
    {
        $this->data['UId'] = $uId;
        $this->options['query']['UId'] = $uId;

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
     * @deprecated deprecated since version 2.0, Use withNonce() instead.
     *
     * @param string $nonce
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        return $this->withNonce($nonce);
    }

    /**
     * @param string $nonce
     *
     * @return $this
     */
    public function withNonce($nonce)
    {
        $this->data['Nonce'] = $nonce;
        $this->options['query']['Nonce'] = $nonce;

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
