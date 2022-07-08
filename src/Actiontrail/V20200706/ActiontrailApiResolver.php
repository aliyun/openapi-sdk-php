<?php

namespace AlibabaCloud\Actiontrail\V20200706;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDeliveryHistoryJob createDeliveryHistoryJob(array $options = [])
 * @method CreateTrail createTrail(array $options = [])
 * @method DeleteDeliveryHistoryJob deleteDeliveryHistoryJob(array $options = [])
 * @method DeleteTrail deleteTrail(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeTrails describeTrails(array $options = [])
 * @method GetAccessKeyLastUsedEvents getAccessKeyLastUsedEvents(array $options = [])
 * @method GetAccessKeyLastUsedInfo getAccessKeyLastUsedInfo(array $options = [])
 * @method GetAccessKeyLastUsedIps getAccessKeyLastUsedIps(array $options = [])
 * @method GetAccessKeyLastUsedProducts getAccessKeyLastUsedProducts(array $options = [])
 * @method GetAccessKeyLastUsedResources getAccessKeyLastUsedResources(array $options = [])
 * @method GetDeliveryHistoryJob getDeliveryHistoryJob(array $options = [])
 * @method GetTrailStatus getTrailStatus(array $options = [])
 * @method ListDeliveryHistoryJobs listDeliveryHistoryJobs(array $options = [])
 * @method LookupEvents lookupEvents(array $options = [])
 * @method StartLogging startLogging(array $options = [])
 * @method StopLogging stopLogging(array $options = [])
 * @method UpdateTrail updateTrail(array $options = [])
 */
class ActiontrailApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Actiontrail';

    /** @var string */
    public $version = '2020-07-06';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrailName()
 * @method $this withTrailName($value)
 */
class CreateDeliveryHistoryJob extends Rpc
{
}

/**
 * @method string getSlsProjectArn()
 * @method $this withSlsProjectArn($value)
 * @method string getSlsWriteRoleArn()
 * @method $this withSlsWriteRoleArn($value)
 * @method string getIsOrganizationTrail()
 * @method $this withIsOrganizationTrail($value)
 * @method string getOssKeyPrefix()
 * @method $this withOssKeyPrefix($value)
 * @method string getOssWriteRoleArn()
 * @method $this withOssWriteRoleArn($value)
 * @method string getEventRW()
 * @method $this withEventRW($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getTrailRegion()
 * @method $this withTrailRegion($value)
 */
class CreateTrail extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DeleteDeliveryHistoryJob extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteTrail extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getIncludeOrganizationTrail()
 * @method $this withIncludeOrganizationTrail($value)
 * @method string getIncludeShadowTrails()
 * @method $this withIncludeShadowTrails($value)
 * @method string getNameList()
 * @method $this withNameList($value)
 */
class DescribeTrails extends Rpc
{
}

/**
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetAccessKeyLastUsedEvents extends Rpc
{
}

/**
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 */
class GetAccessKeyLastUsedInfo extends Rpc
{
}

/**
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetAccessKeyLastUsedIps extends Rpc
{
}

/**
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 */
class GetAccessKeyLastUsedProducts extends Rpc
{
}

/**
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetAccessKeyLastUsedResources extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetDeliveryHistoryJob extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getIsOrganizationTrail()
 * @method $this withIsOrganizationTrail($value)
 */
class GetTrailStatus extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDeliveryHistoryJobs extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getLookupAttribute()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class LookupEvents extends Rpc
{

    /**
     * @param array $lookupAttribute
     *
     * @return $this
     */
	public function withLookupAttribute(array $lookupAttribute)
	{
	    $this->data['LookupAttribute'] = $lookupAttribute;
		foreach ($lookupAttribute as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['LookupAttribute.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['LookupAttribute.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class StartLogging extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class StopLogging extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSlsProjectArn()
 * @method $this withSlsProjectArn($value)
 * @method string getSlsWriteRoleArn()
 * @method $this withSlsWriteRoleArn($value)
 * @method string getOssKeyPrefix()
 * @method $this withOssKeyPrefix($value)
 * @method string getOssWriteRoleArn()
 * @method $this withOssWriteRoleArn($value)
 * @method string getEventRW()
 * @method $this withEventRW($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getTrailRegion()
 * @method $this withTrailRegion($value)
 */
class UpdateTrail extends Rpc
{
}
