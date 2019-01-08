<?php

namespace AlibabaCloud\TagINner\V20181109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerUntagResources
 *
 * @method string getResourceOwnerId()
 * @method string getTagOwnerUid()
 * @method string getDeleteAll()
 * @method string getScope()
 * @method string getTagOwnerBid()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getTagKey()
 * @method string getCategory()
 */
class InnerUntagResources extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Tag-Inner';

    /**
     * @var string
     */
    public $version = '2018-11-09';

    /**
     * @var string
     */
    public $action = 'InnerUntagResources';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'tag';

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
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function withTagOwnerUid($tagOwnerUid)
    {
        $this->data['TagOwnerUid'] = $tagOwnerUid;
        $this->options['query']['TagOwnerUid'] = $tagOwnerUid;

        return $this;
    }

    /**
     * @param string $deleteAll
     *
     * @return $this
     */
    public function withDeleteAll($deleteAll)
    {
        $this->data['DeleteAll'] = $deleteAll;
        $this->options['query']['DeleteAll'] = $deleteAll;

        return $this;
    }

    /**
     * @param string $scope
     *
     * @return $this
     */
    public function withScope($scope)
    {
        $this->data['Scope'] = $scope;
        $this->options['query']['Scope'] = $scope;

        return $this;
    }

    /**
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function withTagOwnerBid($tagOwnerBid)
    {
        $this->data['TagOwnerBid'] = $tagOwnerBid;
        $this->options['query']['TagOwnerBid'] = $tagOwnerBid;

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

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
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

        return $this;
    }
}
