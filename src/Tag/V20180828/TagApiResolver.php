<?php

namespace AlibabaCloud\Tag\V20180828;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateTags createTags(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ListResourcesByTag listResourcesByTag(array $options = [])
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKeyValueParamList()
 */
class CreateTags extends Rpc
{

    /**
     * @param array $tagKeyValueParamList
     *
     * @return $this
     */
	public function withTagKeyValueParamList(array $tagKeyValueParamList)
	{
	    $this->data['TagKeyValueParamList'] = $tagKeyValueParamList;
		foreach ($tagKeyValueParamList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			foreach ($depth1Value['TagValueParamList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Value'])){
					$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.TagValueParamList.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Description'])){
					$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.TagValueParamList.' . ($depth2 + 1) . '.Description'] = $depth2Value['Description'];
				}
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }
}

/**
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getTagFilterKey()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIncludeAllTags()
 * @method $this withIncludeAllTags($value)
 * @method string getTagFilterValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 * @method string getFuzzyType()
 * @method $this withFuzzyType($value)
 */
class ListResourcesByTag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterKey($value)
    {
        $this->data['TagFilterKey'] = $value;
        $this->options['query']['TagFilter.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterValue($value)
    {
        $this->data['TagFilterValue'] = $value;
        $this->options['query']['TagFilter.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getTagProduct()
 * @method $this withTagProduct($value)
 * @method string getTagFilterKey()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getFuzzyType()
 * @method $this withFuzzyType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagKeys extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterKey($value)
    {
        $this->data['TagFilterKey'] = $value;
        $this->options['query']['TagFilter.Key'] = $value;

        return $this;
    }
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
 * @method string getTagProduct()
 * @method $this withTagProduct($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTagFilterValue()
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getFuzzyType()
 * @method $this withFuzzyType($value)
 */
class ListTagValues extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterValue($value)
    {
        $this->data['TagFilterValue'] = $value;
        $this->options['query']['TagFilter.Value'] = $value;

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
