<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeResourcesBySystemTag
 *
 * @method string getResourceOwnerId()
 * @method string getOwnerBid()
 * @method string getOwnerUid()
 * @method string getTagValue()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getRelatedKey()
 */
class DescribeResourcesBySystemTag extends RpcRequest
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
    public $action = 'DescribeResourcesBySystemTag';

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
     * @deprecated deprecated since version 2.0, Use withOwnerBid() instead.
     *
     * @param string $ownerBid
     *
     * @return $this
     */
    public function setOwnerBid($ownerBid)
    {
        return $this->withOwnerBid($ownerBid);
    }

    /**
     * @param string $ownerBid
     *
     * @return $this
     */
    public function withOwnerBid($ownerBid)
    {
        $this->data['OwnerBid'] = $ownerBid;
        $this->options['query']['OwnerBid'] = $ownerBid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerUid() instead.
     *
     * @param string $ownerUid
     *
     * @return $this
     */
    public function setOwnerUid($ownerUid)
    {
        return $this->withOwnerUid($ownerUid);
    }

    /**
     * @param string $ownerUid
     *
     * @return $this
     */
    public function withOwnerUid($ownerUid)
    {
        $this->data['OwnerUid'] = $ownerUid;
        $this->options['query']['OwnerUid'] = $ownerUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagValue() instead.
     *
     * @param string $tagValue
     *
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        return $this->withTagValue($tagValue);
    }

    /**
     * @param string $tagValue
     *
     * @return $this
     */
    public function withTagValue($tagValue)
    {
        $this->data['TagValue'] = $tagValue;
        $this->options['query']['TagValue'] = $tagValue;

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
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRelatedKey() instead.
     *
     * @param string $relatedKey
     *
     * @return $this
     */
    public function setRelatedKey($relatedKey)
    {
        return $this->withRelatedKey($relatedKey);
    }

    /**
     * @param string $relatedKey
     *
     * @return $this
     */
    public function withRelatedKey($relatedKey)
    {
        $this->data['RelatedKey'] = $relatedKey;
        $this->options['query']['RelatedKey'] = $relatedKey;

        return $this;
    }
}
