<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerImageQueryProductQuota
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method string getOperator()
 * @method string getToken()
 * @method string getImageProductCodes()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageQueryProductQuota extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerImageQueryProductQuota';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
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
        $this->options['query']['channel'] = $channel;

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
     * @deprecated deprecated since version 2.0, Use withOperator() instead.
     *
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        return $this->withOperator($operator);
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function withOperator($operator)
    {
        $this->data['Operator'] = $operator;
        $this->options['query']['operator'] = $operator;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withToken() instead.
     *
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        return $this->withToken($token);
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->options['query']['token'] = $token;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageProductCodes() instead.
     *
     * @param string $imageProductCodes
     *
     * @return $this
     */
    public function setimageProductCodes($imageProductCodes)
    {
        return $this->withImageProductCodes($imageProductCodes);
    }

    /**
     * @param string $imageProductCodes
     *
     * @return $this
     */
    public function withImageProductCodes($imageProductCodes)
    {
        $this->data['ImageProductCodes'] = $imageProductCodes;
        $this->options['query']['imageProductCodes'] = $imageProductCodes;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAliUid() instead.
     *
     * @param string $aliUid
     *
     * @return $this
     */
    public function setaliUid($aliUid)
    {
        return $this->withAliUid($aliUid);
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['aliUid'] = $aliUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBid() instead.
     *
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        return $this->withBid($bid);
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['bid'] = $bid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProxyId() instead.
     *
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        return $this->withProxyId($proxyId);
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }
}
