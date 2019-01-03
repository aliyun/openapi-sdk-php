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
     * @deprecated deprecated since version 2.0, Use withTagOwnerUid() instead.
     *
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function setTagOwnerUid($tagOwnerUid)
    {
        return $this->withTagOwnerUid($tagOwnerUid);
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
     * @deprecated deprecated since version 2.0, Use withDeleteAll() instead.
     *
     * @param string $deleteAll
     *
     * @return $this
     */
    public function setDeleteAll($deleteAll)
    {
        return $this->withDeleteAll($deleteAll);
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
     * @deprecated deprecated since version 2.0, Use withScope() instead.
     *
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        return $this->withScope($scope);
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
     * @deprecated deprecated since version 2.0, Use withTagOwnerBid() instead.
     *
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function setTagOwnerBid($tagOwnerBid)
    {
        return $this->withTagOwnerBid($tagOwnerBid);
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
     * @deprecated deprecated since version 2.0, Use getResourceId() instead.
     *
     * @return array
     */
    public function getResourceIds()
    {
        return $this->getResourceId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId() instead.
     *
     * @param array $resourceIds
     *
     * @return $this
     */
    public function setResourceIds(array $resourceIds)
    {
        return $this->withResourceId($resourceIds);
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
     * @deprecated deprecated since version 2.0, Use getTagKey() instead.
     *
     * @return array
     */
    public function getTagKeys()
    {
        return $this->getTagKey();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey() instead.
     *
     * @param array $tagKeys
     *
     * @return $this
     */
    public function setTagKeys(array $tagKeys)
    {
        return $this->withTagKey($tagKeys);
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
     * @deprecated deprecated since version 2.0, Use withCategory() instead.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        return $this->withCategory($category);
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
