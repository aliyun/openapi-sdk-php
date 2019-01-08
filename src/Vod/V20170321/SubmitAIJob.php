<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitAIJob
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getTypes()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getMediaId()
 * @method string getConfig()
 * @method string getMediaType()
 */
class SubmitAIJob extends RpcRequest
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
    public $action = 'SubmitAIJob';

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
        $this->data['UserData'] = $userData;
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
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $types
     *
     * @return $this
     */
    public function withTypes($types)
    {
        $this->data['Types'] = $types;
        $this->options['query']['Types'] = $types;

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

    /**
     * @param string $config
     *
     * @return $this
     */
    public function withConfig($config)
    {
        $this->data['Config'] = $config;
        $this->options['query']['Config'] = $config;

        return $this;
    }

    /**
     * @param string $mediaType
     *
     * @return $this
     */
    public function withMediaType($mediaType)
    {
        $this->data['MediaType'] = $mediaType;
        $this->options['query']['MediaType'] = $mediaType;

        return $this;
    }
}
