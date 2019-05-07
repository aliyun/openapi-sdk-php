<?php

namespace AlibabaCloud\TagINner\V20181109;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method InnerFixRegion innerFixRegion(array $options = [])
 * @method QueryServiceCode queryServiceCode(array $options = [])
 * @method TagResourcesSystemTags tagResourcesSystemTags(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method InnerListTagResources innerListTagResources(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method InnerUntagResources innerUntagResources(array $options = [])
 * @method InnerTagResources innerTagResources(array $options = [])
 */
class TagINnerApiResolver
{
    use ApiResolverTrait;
}

class V20181109Rpc extends Rpc
{
    /** @var string */
    public $product = 'Tag-Inner';

    /** @var string */
    public $version = '2018-11-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'tag';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFixRegionId()
 * @method $this withFixRegionId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceRelId()
 * @method $this withResourceRelId($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTagValueId()
 * @method $this withTagValueId($value)
 * @method string getTagKeyId()
 * @method $this withTagKeyId($value)
 */
class InnerFixRegion extends V20181109Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryServiceCode extends V20181109Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOperator()
 * @method $this withTagOperator($value)
 * @method array getTag()
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResourcesSystemTags extends V20181109Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTagValues extends V20181109Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class InnerListTagResources extends V20181109Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListTagKeys extends V20181109Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRelease()
 * @method $this withRelease($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getDeleteAll()
 * @method $this withDeleteAll($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOperator()
 * @method $this withTagOperator($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class InnerUntagResources extends V20181109Rpc
{

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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOperator()
 * @method $this withTagOperator($value)
 * @method array getTag()
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class InnerTagResources extends V20181109Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

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
}
