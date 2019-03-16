<?php

namespace AlibabaCloud\Actiontrail\V20171204;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeRegions describeRegions(array $options = [])
 * @method LookupEvents lookupEvents(array $options = [])
 * @method UpdateTrail updateTrail(array $options = [])
 * @method StopLogging stopLogging(array $options = [])
 * @method GetTrailStatus getTrailStatus(array $options = [])
 * @method DescribeTrails describeTrails(array $options = [])
 * @method StartLogging startLogging(array $options = [])
 * @method CreateTrail createTrail(array $options = [])
 * @method DeleteTrail deleteTrail(array $options = [])
 */
class ActiontrailApiResolver
{
    use ApiResolverTrait;
}
