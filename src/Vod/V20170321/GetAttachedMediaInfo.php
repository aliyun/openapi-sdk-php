<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetAttachedMediaInfo
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getResourceRealOwnerId()
 * @method string getOwnerId()
 * @method string getMediaId()
 * @method string getAuthTimeout()
 */
class GetAttachedMediaInfo extends RpcRequest
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
    public $action = 'GetAttachedMediaInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function withResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->data['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->options['query']['ResourceRealOwnerId'] = $resourceRealOwnerId;

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
     * @param string $authTimeout
     *
     * @return $this
     */
    public function withAuthTimeout($authTimeout)
    {
        $this->data['AuthTimeout'] = $authTimeout;
        $this->options['query']['AuthTimeout'] = $authTimeout;

        return $this;
    }
}
