<?php

namespace AlibabaCloud\Actiontrail\V20171204;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateTrail createTrail(array $options = [])
 * @method DeleteTrail deleteTrail(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeTrails describeTrails(array $options = [])
 * @method GetTrailStatus getTrailStatus(array $options = [])
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
    public $version = '2017-12-04';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'actiontrail';
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
 * @method string getMnsTopicArn()
 * @method $this withMnsTopicArn($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
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
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteTrail extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getIncludeShadowTrails()
 * @method $this withIncludeShadowTrails($value)
 * @method string getNameList()
 * @method $this withNameList($value)
 */
class DescribeTrails extends Rpc
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
 * @method string getRequest()
 * @method $this withRequest($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getEvent()
 * @method $this withEvent($value)
 * @method string getEventAccessKeyId()
 * @method $this withEventAccessKeyId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventRW()
 * @method $this withEventRW($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class LookupEvents extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class StartLogging extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getMnsTopicArn()
 * @method $this withMnsTopicArn($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
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
