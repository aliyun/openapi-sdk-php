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
