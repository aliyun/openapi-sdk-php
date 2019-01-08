<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerImageQueryImgsByParam
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getVisibility()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOsTypeId()
 * @method string getChannel()
 * @method string getOwnerId()
 * @method string getOperator()
 * @method string getImageCategory()
 * @method string getToken()
 * @method string getRequestId()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getPage()
 * @method string getBid()
 * @method string getProxyId()
 * @method string getStatus()
 */
class InnerImageQueryImgsByParam extends RpcRequest
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
    public $action = 'InnerImageQueryImgsByParam';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['imageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function withVisibility($visibility)
    {
        $this->data['Visibility'] = $visibility;
        $this->options['query']['visibility'] = $visibility;

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
     * @param string $osTypeId
     *
     * @return $this
     */
    public function withOsTypeId($osTypeId)
    {
        $this->data['OsTypeId'] = $osTypeId;
        $this->options['query']['osTypeId'] = $osTypeId;

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
        $this->options['query']['channel'] = $channel;

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
     * @param string $imageCategory
     *
     * @return $this
     */
    public function withImageCategory($imageCategory)
    {
        $this->data['ImageCategory'] = $imageCategory;
        $this->options['query']['imageCategory'] = $imageCategory;

        return $this;
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
     * @param string $requestId
     *
     * @return $this
     */
    public function withRequestId($requestId)
    {
        $this->data['RequestId'] = $requestId;
        $this->options['query']['requestId'] = $requestId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['pageSize'] = $pageSize;

        return $this;
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
     * @param string $page
     *
     * @return $this
     */
    public function withPage($page)
    {
        $this->data['Page'] = $page;
        $this->options['query']['page'] = $page;

        return $this;
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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['status'] = $status;

        return $this;
    }
}
