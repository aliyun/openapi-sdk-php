<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitAIVideoCategoryJob
 *
 * @method string getAIVideoCategoryConfig()
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getMediaId()
 */
class SubmitAIVideoCategoryJob extends RpcRequest
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
    public $action = 'SubmitAIVideoCategoryJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withAIVideoCategoryConfig() instead.
     *
     * @param string $aIVideoCategoryConfig
     *
     * @return $this
     */
    public function setAIVideoCategoryConfig($aIVideoCategoryConfig)
    {
        return $this->withAIVideoCategoryConfig($aIVideoCategoryConfig);
    }

    /**
     * @param string $aIVideoCategoryConfig
     *
     * @return $this
     */
    public function withAIVideoCategoryConfig($aIVideoCategoryConfig)
    {
        $this->data['AIVideoCategoryConfig'] = $aIVideoCategoryConfig;
        $this->options['query']['AIVideoCategoryConfig'] = $aIVideoCategoryConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserData() instead.
     *
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        return $this->withUserData($userData);
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData'] = $userData;
        $this->options['query']['UserData'] = $userData;

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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @deprecated deprecated since version 2.0, Use withMediaId() instead.
     *
     * @param string $mediaId
     *
     * @return $this
     */
    public function setMediaId($mediaId)
    {
        return $this->withMediaId($mediaId);
    }

    /**
     * @param string $mediaId
     *
     * @return $this
     */
    public function withMediaId($mediaId)
    {
        $this->data['MediaId'] = $mediaId;
        $this->options['query']['MediaId'] = $mediaId;

        return $this;
    }
}
