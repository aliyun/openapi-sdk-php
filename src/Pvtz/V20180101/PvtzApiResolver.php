<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddResolverEndpoint addResolverEndpoint(array $options = [])
 * @method AddResolverRule addResolverRule(array $options = [])
 * @method AddUserVpcAuthorization addUserVpcAuthorization(array $options = [])
 * @method AddZone addZone(array $options = [])
 * @method AddZoneRecord addZoneRecord(array $options = [])
 * @method BindResolverRuleVpc bindResolverRuleVpc(array $options = [])
 * @method BindZoneVpc bindZoneVpc(array $options = [])
 * @method CheckZoneName checkZoneName(array $options = [])
 * @method DeleteResolverEndpoint deleteResolverEndpoint(array $options = [])
 * @method DeleteResolverRule deleteResolverRule(array $options = [])
 * @method DeleteUserVpcAuthorization deleteUserVpcAuthorization(array $options = [])
 * @method DeleteZone deleteZone(array $options = [])
 * @method DeleteZoneRecord deleteZoneRecord(array $options = [])
 * @method DescribeChangeLogs describeChangeLogs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRequestGraph describeRequestGraph(array $options = [])
 * @method DescribeResolverAvailableZones describeResolverAvailableZones(array $options = [])
 * @method DescribeResolverEndpoint describeResolverEndpoint(array $options = [])
 * @method DescribeResolverEndpoints describeResolverEndpoints(array $options = [])
 * @method DescribeResolverRule describeResolverRule(array $options = [])
 * @method DescribeResolverRules describeResolverRules(array $options = [])
 * @method DescribeStatisticSummary describeStatisticSummary(array $options = [])
 * @method DescribeSyncEcsHostTask describeSyncEcsHostTask(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeUserVpcAuthorizations describeUserVpcAuthorizations(array $options = [])
 * @method DescribeZoneInfo describeZoneInfo(array $options = [])
 * @method DescribeZoneRecords describeZoneRecords(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DescribeZoneVpcTree describeZoneVpcTree(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method SetProxyPattern setProxyPattern(array $options = [])
 * @method SetZoneRecordStatus setZoneRecordStatus(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateRecordRemark updateRecordRemark(array $options = [])
 * @method UpdateResolverEndpoint updateResolverEndpoint(array $options = [])
 * @method UpdateResolverRule updateResolverRule(array $options = [])
 * @method UpdateSyncEcsHostTask updateSyncEcsHostTask(array $options = [])
 * @method UpdateZoneRecord updateZoneRecord(array $options = [])
 * @method UpdateZoneRemark updateZoneRemark(array $options = [])
 */
class PvtzApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'pvtz';

    /** @var string */
    public $version = '2018-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'pvtz';
}

/**
 * @method string getVpcRegionId()
 * @method $this withVpcRegionId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getIpConfig()
 */
class AddResolverEndpoint extends Rpc
{

    /**
     * @param array $ipConfig
     *
     * @return $this
     */
	public function withIpConfig(array $ipConfig)
	{
	    $this->data['IpConfig'] = $ipConfig;
		foreach ($ipConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
			}
			if(isset($depth1Value['CidrBlock'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.CidrBlock'] = $depth1Value['CidrBlock'];
			}
			if(isset($depth1Value['AzId'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.AzId'] = $depth1Value['AzId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method array getForwardIp()
 * @method string getType()
 * @method $this withType($value)
 * @method string getZoneName()
 * @method $this withZoneName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddResolverRule extends Rpc
{

    /**
     * @param array $forwardIp
     *
     * @return $this
     */
	public function withForwardIp(array $forwardIp)
	{
	    $this->data['ForwardIp'] = $forwardIp;
		foreach ($forwardIp as $depth1 => $depth1Value) {
			if(isset($depth1Value['Port'])){
				$this->options['query']['ForwardIp.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['ForwardIp.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAuthCode()
 * @method $this withAuthCode($value)
 * @method string getAuthorizedUserId()
 * @method $this withAuthorizedUserId($value)
 * @method string getAuthChannel()
 * @method $this withAuthChannel($value)
 */
class AddUserVpcAuthorization extends Rpc
{
}

/**
 * @method string getProxyPattern()
 * @method $this withProxyPattern($value)
 * @method string getZoneName()
 * @method $this withZoneName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getZoneTag()
 * @method $this withZoneTag($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneType()
 * @method $this withZoneType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddZone extends Rpc
{
}

/**
 * @method string getRr()
 * @method $this withRr($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class AddZoneRecord extends Rpc
{
}

/**
 * @method array getVpc()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class BindResolverRuleVpc extends Rpc
{

    /**
     * @param array $vpc
     *
     * @return $this
     */
	public function withVpc(array $vpc)
	{
	    $this->data['Vpc'] = $vpc;
		foreach ($vpc as $depth1 => $depth1Value) {
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['Vpc.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['VpcId'])){
				$this->options['query']['Vpc.' . ($depth1 + 1) . '.VpcId'] = $depth1Value['VpcId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryrun()
 * @method $this withDryrun($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getVpcs()
 * @method string getRemoteType()
 * @method $this withRemoteType($value)
 */
class BindZoneVpc extends Rpc
{

    /**
     * @param array $vpcs
     *
     * @return $this
     */
	public function withVpcs(array $vpcs)
	{
	    $this->data['Vpcs'] = $vpcs;
		foreach ($vpcs as $depth1 => $depth1Value) {
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['Vpcs.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['VpcId'])){
				$this->options['query']['Vpcs.' . ($depth1 + 1) . '.VpcId'] = $depth1Value['VpcId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getZoneName()
 * @method $this withZoneName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckZoneName extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteResolverEndpoint extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteResolverRule extends Rpc
{
}

/**
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAuthorizedUserId()
 * @method $this withAuthorizedUserId($value)
 */
class DeleteUserVpcAuthorization extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteZone extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteZoneRecord extends Rpc
{
}

/**
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeChangeLogs extends Rpc
{
}

/**
 * @method string getAuthorizedUserId()
 * @method $this withAuthorizedUserId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRequestGraph extends Rpc
{
}

/**
 * @method string getResolverRegionId()
 * @method $this withResolverRegionId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getAzId()
 * @method $this withAzId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeResolverAvailableZones extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeResolverEndpoint extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeResolverEndpoints extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeResolverRule extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNeedDetailAttributes()
 * @method $this withNeedDetailAttributes($value)
 */
class DescribeResolverRules extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeStatisticSummary extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSyncEcsHostTask extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeTags extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAuthorizedUserId()
 * @method $this withAuthorizedUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeUserVpcAuthorizations extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeZoneInfo extends Rpc
{
}

/**
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class DescribeZoneRecords extends Rpc
{
}

/**
 * @method string getQueryVpcId()
 * @method $this withQueryVpcId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getResourceTag()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method array getZoneTag()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getZoneType()
 * @method $this withZoneType($value)
 * @method string getQueryRegionId()
 * @method $this withQueryRegionId($value)
 */
class DescribeZones extends Rpc
{

    /**
     * @param array $resourceTag
     *
     * @return $this
     */
	public function withResourceTag(array $resourceTag)
	{
	    $this->data['ResourceTag'] = $resourceTag;
		foreach ($resourceTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['ResourceTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['ResourceTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $zoneTag
     *
     * @return $this
     */
	public function withZoneTag(array $zoneTag)
	{
	    $this->data['ZoneTag'] = $zoneTag;
		foreach ($zoneTag as $i => $iValue) {
			$this->options['query']['ZoneTag.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeZoneVpcTree extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getTag()
 * @method string getLang()
 * @method $this withLang($value)
 */
class ListTagResources extends Rpc
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
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class MoveResourceGroup extends Rpc
{
}

/**
 * @method string getProxyPattern()
 * @method $this withProxyPattern($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRemoteType()
 * @method $this withRemoteType($value)
 */
class SetProxyPattern extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetZoneRecordStatus extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getTag()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOverWrite()
 * @method $this withOverWrite($value)
 */
class TagResources extends Rpc
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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
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
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateRecordRemark extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getIpConfig()
 */
class UpdateResolverEndpoint extends Rpc
{

    /**
     * @param array $ipConfig
     *
     * @return $this
     */
	public function withIpConfig(array $ipConfig)
	{
	    $this->data['IpConfig'] = $ipConfig;
		foreach ($ipConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
			}
			if(isset($depth1Value['CidrBlock'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.CidrBlock'] = $depth1Value['CidrBlock'];
			}
			if(isset($depth1Value['AzId'])){
				$this->options['query']['IpConfig.' . ($depth1 + 1) . '.AzId'] = $depth1Value['AzId'];
			}
		}

		return $this;
    }
}

/**
 * @method array getForwardIp()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateResolverRule extends Rpc
{

    /**
     * @param array $forwardIp
     *
     * @return $this
     */
	public function withForwardIp(array $forwardIp)
	{
	    $this->data['ForwardIp'] = $forwardIp;
		foreach ($forwardIp as $depth1 => $depth1Value) {
			if(isset($depth1Value['Port'])){
				$this->options['query']['ForwardIp.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['ForwardIp.' . ($depth1 + 1) . '.Ip'] = $depth1Value['Ip'];
			}
		}

		return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getRegion()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateSyncEcsHostTask extends Rpc
{

    /**
     * @param array $region
     *
     * @return $this
     */
	public function withRegion(array $region)
	{
	    $this->data['Region'] = $region;
		foreach ($region as $depth1 => $depth1Value) {
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['Region.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['Region.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getRr()
 * @method $this withRr($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class UpdateZoneRecord extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateZoneRemark extends Rpc
{
}
