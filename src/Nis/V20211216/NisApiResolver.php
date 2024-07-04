<?php

namespace AlibabaCloud\Nis\V20211216;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateAndAnalyzeNetworkPath createAndAnalyzeNetworkPath(array $options = [])
 * @method CreateNetworkPath createNetworkPath(array $options = [])
 * @method CreateNetworkReachableAnalysis createNetworkReachableAnalysis(array $options = [])
 * @method DeleteNetworkPath deleteNetworkPath(array $options = [])
 * @method DeleteNetworkReachableAnalysis deleteNetworkReachableAnalysis(array $options = [])
 * @method GetInternetTuple getInternetTuple(array $options = [])
 * @method GetNatTopN getNatTopN(array $options = [])
 * @method GetNetworkReachableAnalysis getNetworkReachableAnalysis(array $options = [])
 * @method GetNisNetworkMetrics getNisNetworkMetrics(array $options = [])
 * @method GetNisNetworkRanking getNisNetworkRanking(array $options = [])
 * @method GetTransitRouterFlowTopN getTransitRouterFlowTopN(array $options = [])
 * @method GetVbrFlowTopN getVbrFlowTopN(array $options = [])
 */
class NisApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'nis';

    /** @var string */
    public $version = '2021-12-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'networkana';
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getTargetIpAddress()
 * @method $this withTargetIpAddress($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getSourceAliUid()
 * @method $this withSourceAliUid($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getAuditParam()
 * @method $this withAuditParam($value)
 * @method string getTargetPort()
 * @method $this withTargetPort($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getUseMultiAccount()
 * @method $this withUseMultiAccount($value)
 * @method string getTargetAliUid()
 * @method $this withTargetAliUid($value)
 */
class CreateAndAnalyzeNetworkPath extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getTargetIpAddress()
 * @method $this withTargetIpAddress($value)
 * @method string getNetworkPathName()
 * @method $this withNetworkPathName($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getSourceAliUid()
 * @method $this withSourceAliUid($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method array getTag()
 * @method string getTargetPort()
 * @method $this withTargetPort($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getSourceIpAddress()
 * @method $this withSourceIpAddress($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getUseMultiAccount()
 * @method $this withUseMultiAccount($value)
 * @method string getNetworkPathDescription()
 * @method $this withNetworkPathDescription($value)
 * @method string getTargetAliUid()
 * @method $this withTargetAliUid($value)
 */
class CreateNetworkPath extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getNetworkPathId()
 * @method $this withNetworkPathId($value)
 * @method string getAuditParam()
 * @method $this withAuditParam($value)
 * @method array getTag()
 */
class CreateNetworkReachableAnalysis extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkPathIds()
 * @method $this withNetworkPathIds($value)
 */
class DeleteNetworkPath extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkReachableAnalysisIds()
 * @method $this withNetworkReachableAnalysisIds($value)
 */
class DeleteNetworkReachableAnalysis extends Rpc
{
}

/**
 * @method string getOtherPort()
 * @method $this withOtherPort($value)
 * @method string getCloudIsp()
 * @method $this withCloudIsp($value)
 * @method string getTopN()
 * @method $this withTopN($value)
 * @method string getCloudPort()
 * @method $this withCloudPort($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getOtherIp()
 * @method $this withOtherIp($value)
 * @method string getInstanceList()
 * @method $this withInstanceList($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getUseMultiAccount()
 * @method $this withUseMultiAccount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTupleType()
 * @method $this withTupleType($value)
 * @method string getCloudIp()
 * @method $this withCloudIp($value)
 * @method string getCloudIpList()
 * @method $this withCloudIpList($value)
 * @method string getOtherIsp()
 * @method $this withOtherIsp($value)
 * @method string getOtherCountry()
 * @method $this withOtherCountry($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getOtherCity()
 * @method $this withOtherCity($value)
 * @method array getAccountIds()
 */
class GetInternetTuple extends Rpc
{

    /**
     * @param array $accountIds
     *
     * @return $this
     */
	public function withAccountIds(array $accountIds)
	{
	    $this->data['AccountIds'] = $accountIds;
		foreach ($accountIds as $i => $iValue) {
			$this->options['query']['AccountIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getTopN()
 * @method $this withTopN($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 */
class GetNatTopN extends Rpc
{
}

/**
 * @method string getNetworkReachableAnalysisId()
 * @method $this withNetworkReachableAnalysisId($value)
 */
class GetNetworkReachableAnalysis extends Rpc
{
}

/**
 * @method string getUseCrossAccount()
 * @method $this withUseCrossAccount($value)
 * @method string getScanBy()
 * @method $this withScanBy($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method array getAccountIds()
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class GetNisNetworkMetrics extends Rpc
{

    /**
     * @param array $accountIds
     *
     * @return $this
     */
	public function withAccountIds(array $accountIds)
	{
	    $this->data['AccountIds'] = $accountIds;
		foreach ($accountIds as $i => $iValue) {
			$this->options['query']['AccountIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getUseCrossAccount()
 * @method $this withUseCrossAccount($value)
 * @method string getTopN()
 * @method $this withTopN($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method array getAccountIds()
 */
class GetNisNetworkRanking extends Rpc
{

    /**
     * @param array $accountIds
     *
     * @return $this
     */
	public function withAccountIds(array $accountIds)
	{
	    $this->data['AccountIds'] = $accountIds;
		foreach ($accountIds as $i => $iValue) {
			$this->options['query']['AccountIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getOtherPort()
 * @method $this withOtherPort($value)
 * @method string getTopN()
 * @method $this withTopN($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getThisIp()
 * @method $this withThisIp($value)
 * @method string getOtherIp()
 * @method $this withOtherIp($value)
 * @method string getBandwithPackageId()
 * @method $this withBandwithPackageId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getUseMultiAccount()
 * @method $this withUseMultiAccount($value)
 * @method string getThisRegion()
 * @method $this withThisRegion($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getThisPort()
 * @method $this withThisPort($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOtherRegion()
 * @method $this withOtherRegion($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getAccountIds()
 * @method $this withAccountIds($value)
 */
class GetTransitRouterFlowTopN extends Rpc
{
}

/**
 * @method string getOtherPort()
 * @method $this withOtherPort($value)
 * @method string getTopN()
 * @method $this withTopN($value)
 * @method string getCloudPort()
 * @method $this withCloudPort($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getOtherIp()
 * @method $this withOtherIp($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getSort()
 * @method $this withSort($value)
 * @method string getUseMultiAccount()
 * @method $this withUseMultiAccount($value)
 * @method string getCloudIp()
 * @method $this withCloudIp($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getVirtualBorderRouterId()
 * @method $this withVirtualBorderRouterId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getAccountIds()
 * @method $this withAccountIds($value)
 * @method string getAttachmentId()
 * @method $this withAttachmentId($value)
 */
class GetVbrFlowTopN extends Rpc
{
}
