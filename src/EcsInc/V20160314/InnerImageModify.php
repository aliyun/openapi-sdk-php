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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setimageId($imageId)
    {
        return $this->withImageId($imageId);
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
     * @deprecated deprecated since version 2.0, Use withOsTypeId() instead.
     *
     * @param string $osTypeId
     *
     * @return $this
     */
    public function setosTypeId($osTypeId)
    {
        return $this->withOsTypeId($osTypeId);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setremark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withImageSize() instead.
     *
     * @param string $imageSize
     *
     * @return $this
     */
    public function setimageSize($imageSize)
    {
        return $this->withImageSize($imageSize);
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
     * @deprecated deprecated since version 2.0, Use withVirtBaseImageId() instead.
     *
     * @param string $virtBaseImageId
     *
     * @return $this
     */
    public function setvirtBaseImageId($virtBaseImageId)
    {
        return $this->withVirtBaseImageId($virtBaseImageId);
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
     * @deprecated deprecated since version 2.0, Use withImageCategory() instead.
     *
     * @param string $imageCategory
     *
     * @return $this
     */
    public function setimageCategory($imageCategory)
    {
        return $this->withImageCategory($imageCategory);
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
     * @deprecated deprecated since version 2.0, Use withAsync() instead.
     *
     * @param string $async
     *
     * @return $this
     */
    public function setasync($async)
    {
        return $this->withAsync($async);
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
     * @deprecated deprecated since version 2.0, Use withImageName() instead.
     *
     * @param string $imageName
     *
     * @return $this
     */
    public function setimageName($imageName)
    {
        return $this->withImageName($imageName);
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
     * @deprecated deprecated since version 2.0, Use withIsPublic() instead.
     *
     * @param string $isPublic
     *
     * @return $this
     */
    public function setisPublic($isPublic)
    {
        return $this->withIsPublic($isPublic);
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
     * @deprecated deprecated since version 2.0, Use withImageVersion() instead.
     *
     * @param string $imageVersion
     *
     * @return $this
     */
    public function setImageVersion($imageVersion)
    {
        return $this->withImageVersion($imageVersion);
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
