<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOsTypeId()
 * @method string getChannel()
 * @method string getRemark()
 * @method string getImageSize()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVirtBaseImageId()
 * @method string getOperator()
 * @method string getImageCategory()
 * @method string getToken()
 * @method string getAsync()
 * @method string getImageName()
 * @method string getIsPublic()
 * @method string getImageVersion()
 * @method $this withImageVersion($value)
 * @method string getAliUid()
 * @method string getBid()
 * @method string getProxyId()
 */
class InnerImageModify extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
