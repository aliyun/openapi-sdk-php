<?php

namespace AlibabaCloud\Ddosbgp\V20180720;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddIp addIp(array $options = [])
 * @method CheckAccessLogAuth checkAccessLogAuth(array $options = [])
 * @method CheckGrant checkGrant(array $options = [])
 * @method ConfigSchedruleOnDemand configSchedruleOnDemand(array $options = [])
 * @method CreateSchedruleOnDemand createSchedruleOnDemand(array $options = [])
 * @method DeleteBlackhole deleteBlackhole(array $options = [])
 * @method DeleteIp deleteIp(array $options = [])
 * @method DeleteSchedruleOnDemand deleteSchedruleOnDemand(array $options = [])
 * @method DescribeDdosEvent describeDdosEvent(array $options = [])
 * @method DescribeExcpetionCount describeExcpetionCount(array $options = [])
 * @method DescribeInstanceList describeInstanceList(array $options = [])
 * @method DescribeInstanceSpecs describeInstanceSpecs(array $options = [])
 * @method DescribeOnDemandDdosEvent describeOnDemandDdosEvent(array $options = [])
 * @method DescribeOnDemandInstanceStatus describeOnDemandInstanceStatus(array $options = [])
 * @method DescribeOpEntities describeOpEntities(array $options = [])
 * @method DescribePackIpList describePackIpList(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeTraffic describeTraffic(array $options = [])
 * @method GetSlsOpenStatus getSlsOpenStatus(array $options = [])
 * @method ListOpenedAccessLogInstances listOpenedAccessLogInstances(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyRemark modifyRemark(array $options = [])
 * @method QuerySchedruleOnDemand querySchedruleOnDemand(array $options = [])
 * @method SetInstanceModeOnDemand setInstanceModeOnDemand(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class DdosbgpApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ddosbgp';

    /** @var string */
    public $version = '2018-07-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIpList()
 * @method $this withIpList($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AddIp extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CheckAccessLogAuth extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CheckGrant extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTimeZone()
 * @method $this withTimeZone($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRuleConditionMbps()
 * @method $this withRuleConditionMbps($value)
 * @method string getRuleAction()
 * @method $this withRuleAction($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRuleUndoMode()
 * @method $this withRuleUndoMode($value)
 * @method string getRuleUndoEndTime()
 * @method $this withRuleUndoEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleUndoBeginTime()
 * @method $this withRuleUndoBeginTime($value)
 * @method string getRuleConditionCnt()
 * @method $this withRuleConditionCnt($value)
 * @method string getRuleSwitch()
 * @method $this withRuleSwitch($value)
 * @method string getRuleConditionKpps()
 * @method $this withRuleConditionKpps($value)
 */
class ConfigSchedruleOnDemand extends Rpc
{
}

/**
 * @method string getTimeZone()
 * @method $this withTimeZone($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRuleConditionMbps()
 * @method $this withRuleConditionMbps($value)
 * @method string getRuleAction()
 * @method $this withRuleAction($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRuleUndoMode()
 * @method $this withRuleUndoMode($value)
 * @method string getRuleUndoEndTime()
 * @method $this withRuleUndoEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleUndoBeginTime()
 * @method $this withRuleUndoBeginTime($value)
 * @method string getRuleConditionCnt()
 * @method $this withRuleConditionCnt($value)
 * @method string getRuleSwitch()
 * @method $this withRuleSwitch($value)
 * @method string getRuleConditionKpps()
 * @method $this withRuleConditionKpps($value)
 */
class CreateSchedruleOnDemand extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteBlackhole extends Rpc
{
}

/**
 * @method string getIpList()
 * @method $this withIpList($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteIp extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteSchedruleOnDemand extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeDdosEvent extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeExcpetionCount extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method array getTag()
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getOrderby()
 * @method $this withOrderby($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getOrderdire()
 * @method $this withOrderdire($value)
 * @method string getInstanceTypeList()
 * @method $this withInstanceTypeList($value)
 */
class DescribeInstanceList extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeInstanceSpecs extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeOnDemandDdosEvent extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIdList()
 */
class DescribeOnDemandInstanceStatus extends Rpc
{

    /**
     * @param array $instanceIdList
     *
     * @return $this
     */
	public function withInstanceIdList(array $instanceIdList)
	{
	    $this->data['InstanceIdList'] = $instanceIdList;
		foreach ($instanceIdList as $i => $iValue) {
			$this->options['query']['InstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeOpEntities extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribePackIpList extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getIpnet()
 * @method $this withIpnet($value)
 * @method string getFlowType()
 * @method $this withFlowType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeTraffic extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetSlsOpenStatus extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListOpenedAccessLogInstances extends Rpc
{
}

/**
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getTag()
 * @method array getResourceId()
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
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyRemark extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class QuerySchedruleOnDemand extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIdList()
 */
class SetInstanceModeOnDemand extends Rpc
{

    /**
     * @param array $instanceIdList
     *
     * @return $this
     */
	public function withInstanceIdList(array $instanceIdList)
	{
	    $this->data['InstanceIdList'] = $instanceIdList;
		foreach ($instanceIdList as $i => $iValue) {
			$this->options['query']['InstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method array getTag()
 * @method array getResourceId()
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
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
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
