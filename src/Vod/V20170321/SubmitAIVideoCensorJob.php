<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getAIVideoCensorConfig()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getMediaId()
 */
class SubmitAIVideoCensorJob extends RpcRequest
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
    public $action = 'SubmitAIVideoCensorJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData']             = $userData;
        $this->options['query']['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId']             = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $aIVideoCensorConfig
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withAIVideoCensorConfig() instead.
     *
     */
    public function setAIVideoCensorConfig($aIVideoCensorConfig)
    {
        return $this->withAIVideoCensorConfig($aIVideoCensorConfig);
    }

    /**
     * @param string $aIVideoCensorConfig
     *
     * @return $this
     */
    public function withAIVideoCensorConfig($aIVideoCensorConfig)
    {
        $this->data['AIVideoCensorConfig']             = $aIVideoCensorConfig;
        $this->options['query']['AIVideoCensorConfig'] = $aIVideoCensorConfig;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount']             = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount']             = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $mediaId
     *
     * @return $this
     */
    public function withMediaId($mediaId)
    {
        $this->data['MediaId']             = $mediaId;
        $this->options['query']['MediaId'] = $mediaId;

        return $this;
    }
}
