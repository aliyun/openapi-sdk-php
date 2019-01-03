<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetVideoPlayInfo
 *
 * @method string getSignVersion()
 * @method string getResourceOwnerId()
 * @method string getClientVersion()
 * @method string getResourceOwnerAccount()
 * @method string getChannel()
 * @method string getPlaySign()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getClientTS()
 */
class GetVideoPlayInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'GetVideoPlayInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withSignVersion() instead.
     *
     * @param string $signVersion
     *
     * @return $this
     */
    public function setSignVersion($signVersion)
    {
        return $this->withSignVersion($signVersion);
    }

    /**
     * @param string $signVersion
     *
     * @return $this
     */
    public function withSignVersion($signVersion)
    {
        $this->data['SignVersion'] = $signVersion;
        $this->options['query']['SignVersion'] = $signVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientVersion() instead.
     *
     * @param string $clientVersion
     *
     * @return $this
     */
    public function setClientVersion($clientVersion)
    {
        return $this->withClientVersion($clientVersion);
    }

    /**
     * @param string $clientVersion
     *
     * @return $this
     */
    public function withClientVersion($clientVersion)
    {
        $this->data['ClientVersion'] = $clientVersion;
        $this->options['query']['ClientVersion'] = $clientVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        return $this->withChannel($channel);
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['Channel'] = $channel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPlaySign() instead.
     *
     * @param string $playSign
     *
     * @return $this
     */
    public function setPlaySign($playSign)
    {
        return $this->withPlaySign($playSign);
    }

    /**
     * @param string $playSign
     *
     * @return $this
     */
    public function withPlaySign($playSign)
    {
        $this->data['PlaySign'] = $playSign;
        $this->options['query']['PlaySign'] = $playSign;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVideoId() instead.
     *
     * @param string $videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        return $this->withVideoId($videoId);
    }

    /**
     * @param string $videoId
     *
     * @return $this
     */
    public function withVideoId($videoId)
    {
        $this->data['VideoId'] = $videoId;
        $this->options['query']['VideoId'] = $videoId;

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
     * @deprecated deprecated since version 2.0, Use withClientTS() instead.
     *
     * @param string $clientTS
     *
     * @return $this
     */
    public function setClientTS($clientTS)
    {
        return $this->withClientTS($clientTS);
    }

    /**
     * @param string $clientTS
     *
     * @return $this
     */
    public function withClientTS($clientTS)
    {
        $this->data['ClientTS'] = $clientTS;
        $this->options['query']['ClientTS'] = $clientTS;

        return $this;
    }
}
