<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerImageModify
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOsTypeId()
 * @method string getChannel()
 * @method string getRemark()
 * @method string getImageSize()
 * @method string getOwnerId()
 * @method string getVirtBaseImageId()
 * @method string getOperator()
 * @method string getImageCategory()
 * @method string getToken()
 * @method string getAsync()
 * @method string getImageName()
 * @method string getIsPublic()
 * @method string getImageVersion()
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageModify extends RpcRequest
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
    public $action = 'InnerImageModify';

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
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['remark'] = $remark;

        return $this;
    }

    /**
     * @param string $imageSize
     *
     * @return $this
     */
    public function withImageSize($imageSize)
    {
        $this->data['ImageSize'] = $imageSize;
        $this->options['query']['imageSize'] = $imageSize;

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
     * @param string $virtBaseImageId
     *
     * @return $this
     */
    public function withVirtBaseImageId($virtBaseImageId)
    {
        $this->data['VirtBaseImageId'] = $virtBaseImageId;
        $this->options['query']['virtBaseImageId'] = $virtBaseImageId;

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
     * @param string $async
     *
     * @return $this
     */
    public function withAsync($async)
    {
        $this->data['Async'] = $async;
        $this->options['query']['async'] = $async;

        return $this;
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function withImageName($imageName)
    {
        $this->data['ImageName'] = $imageName;
        $this->options['query']['imageName'] = $imageName;

        return $this;
    }

    /**
     * @param string $isPublic
     *
     * @return $this
     */
    public function withIsPublic($isPublic)
    {
        $this->data['IsPublic'] = $isPublic;
        $this->options['query']['isPublic'] = $isPublic;

        return $this;
    }

    /**
     * @param string $imageVersion
     *
     * @return $this
     */
    public function withImageVersion($imageVersion)
    {
        $this->data['ImageVersion'] = $imageVersion;
        $this->options['query']['ImageVersion'] = $imageVersion;

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
}
