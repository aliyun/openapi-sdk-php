<?php

namespace AlibabaCloud\Hitsdb\V20200615;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateLindormInstance createLindormInstance(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method GetInstanceIpWhiteList getInstanceIpWhiteList(array $options = [])
 * @method GetLindormInstance getLindormInstance(array $options = [])
 * @method GetLindormInstanceEngineList getLindormInstanceEngineList(array $options = [])
 * @method GetLindormInstanceList getLindormInstanceList(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ReleaseLindormInstance releaseLindormInstance(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateInstanceIpWhiteList updateInstanceIpWhiteList(array $options = [])
 * @method UpgradeLindormInstance upgradeLindormInstance(array $options = [])
 */
class HitsdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'hitsdb';

    /** @var string */
    public $version = '2020-06-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'hitsdb';
}

/**
 * @method string getArchVersion()
 * @method $this withArchVersion($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLogSpec()
 * @method $this withLogSpec($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTsdbNum()
 * @method $this withTsdbNum($value)
 * @method string getSolrNum()
 * @method $this withSolrNum($value)
 * @method string getInstanceStorage()
 * @method $this withInstanceStorage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLindormNum()
 * @method $this withLindormNum($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getLogSingleStorage()
 * @method $this withLogSingleStorage($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getArbiterZoneId()
 * @method $this withArbiterZoneId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMultiZoneCombination()
 * @method $this withMultiZoneCombination($value)
 * @method string getTsdbSpec()
 * @method $this withTsdbSpec($value)
 * @method string getFilestoreSpec()
 * @method $this withFilestoreSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getLindormSpec()
 * @method $this withLindormSpec($value)
 * @method string getColdStorage()
 * @method $this withColdStorage($value)
 * @method string getLogNum()
 * @method $this withLogNum($value)
 * @method string getStandbyVSwitchId()
 * @method $this withStandbyVSwitchId($value)
 * @method string getSolrSpec()
 * @method $this withSolrSpec($value)
 * @method string getLogDiskCategory()
 * @method $this withLogDiskCategory($value)
 * @method string getCoreSingleStorage()
 * @method $this withCoreSingleStorage($value)
 * @method string getStandbyZoneId()
 * @method $this withStandbyZoneId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getFilestoreNum()
 * @method $this withFilestoreNum($value)
 * @method string getCoreSpec()
 * @method $this withCoreSpec($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getArbiterVSwitchId()
 * @method $this withArbiterVSwitchId($value)
 */
class CreateLindormInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceIpWhiteList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLindormInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLindormInstanceEngineList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSupportEngine()
 * @method $this withSupportEngine($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getQueryStr()
 * @method $this withQueryStr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 */
class GetLindormInstanceList extends Rpc
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
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
class ListTagResources extends Rpc
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleaseLindormInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTag()
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
class TagResources extends Rpc
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAll()
 * @method $this withAll($value)
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
 */
class UntagResources extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSecurityIpList()
 * @method $this withSecurityIpList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateInstanceIpWhiteList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoenixCoreNum()
 * @method $this withPhoenixCoreNum($value)
 * @method string getPhoenixCoreSpec()
 * @method $this withPhoenixCoreSpec($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getTsdbSpec()
 * @method $this withTsdbSpec($value)
 * @method string getFilestoreSpec()
 * @method $this withFilestoreSpec($value)
 * @method string getLogSpec()
 * @method $this withLogSpec($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTsdbNum()
 * @method $this withTsdbNum($value)
 * @method string getLindormSpec()
 * @method $this withLindormSpec($value)
 * @method string getSolrNum()
 * @method $this withSolrNum($value)
 * @method string getColdStorage()
 * @method $this withColdStorage($value)
 * @method string getLogNum()
 * @method $this withLogNum($value)
 * @method string getSolrSpec()
 * @method $this withSolrSpec($value)
 * @method string getCoreSingleStorage()
 * @method $this withCoreSingleStorage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFilestoreNum()
 * @method $this withFilestoreNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLindormNum()
 * @method $this withLindormNum($value)
 * @method string getLtsCoreNum()
 * @method $this withLtsCoreNum($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLtsCoreSpec()
 * @method $this withLtsCoreSpec($value)
 * @method string getClusterStorage()
 * @method $this withClusterStorage($value)
 * @method string getLogSingleStorage()
 * @method $this withLogSingleStorage($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class UpgradeLindormInstance extends Rpc
{
}
