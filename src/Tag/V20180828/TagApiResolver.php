<?php

namespace AlibabaCloud\Tag\V20180828;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class TagApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Tag';

    /** @var string */
    public $version = '2018-08-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'tag';
}

/**
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
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getResourceARN()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceARN
     *
     * @return $this
     */
	public function withResourceARN(array $resourceARN)
	{
	    $this->data['ResourceARN'] = $resourceARN;
		foreach ($resourceARN as $i => $iValue) {
			$this->options['query']['ResourceARN.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
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
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method array getResourceARN()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceARN
     *
     * @return $this
     */
	public function withResourceARN(array $resourceARN)
	{
	    $this->data['ResourceARN'] = $resourceARN;
		foreach ($resourceARN as $i => $iValue) {
			$this->options['query']['ResourceARN.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getResourceARN()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceARN
     *
     * @return $this
     */
	public function withResourceARN(array $resourceARN)
	{
	    $this->data['ResourceARN'] = $resourceARN;
		foreach ($resourceARN as $i => $iValue) {
			$this->options['query']['ResourceARN.' . ($i + 1)] = $iValue;
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
