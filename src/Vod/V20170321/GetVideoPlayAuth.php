<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api GetVideoPlayAuth
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getReAuthInfo()
 * @method string getPlayConfig()
 * @method string getAuthInfoTimeout()
 * @method string getVideoId()
 * @method string getOwnerId()
 */
class GetVideoPlayAuth extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

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
     * @param string $reAuthInfo
     *
     * @return $this
     */
    public function withReAuthInfo($reAuthInfo)
    {
        $this->data['ReAuthInfo'] = $reAuthInfo;
        $this->options['query']['ReAuthInfo'] = $reAuthInfo;

        return $this;
    }

    /**
     * @param string $playConfig
     *
     * @return $this
     */
    public function withPlayConfig($playConfig)
    {
        $this->data['PlayConfig'] = $playConfig;
        $this->options['query']['PlayConfig'] = $playConfig;

        return $this;
    }

    /**
     * @param string $authInfoTimeout
     *
     * @return $this
     */
    public function withAuthInfoTimeout($authInfoTimeout)
    {
        $this->data['AuthInfoTimeout'] = $authInfoTimeout;
        $this->options['query']['AuthInfoTimeout'] = $authInfoTimeout;

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
}
