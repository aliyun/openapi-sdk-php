<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Pvtz based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Pvtz\V20180101
 *
 * @method AddZone addZone(array $options = [])
 * @method AddZoneRecord addZoneRecord(array $options = [])
 * @method BindZoneVpc bindZoneVpc(array $options = [])
 * @method CheckZoneName checkZoneName(array $options = [])
 * @method DeleteZone deleteZone(array $options = [])
 * @method DeleteZoneRecord deleteZoneRecord(array $options = [])
 * @method DescribeChangeLogs describeChangeLogs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRequestGraph describeRequestGraph(array $options = [])
 * @method DescribeStatisticSummary describeStatisticSummary(array $options = [])
 * @method DescribeUserServiceStatus describeUserServiceStatus(array $options = [])
 * @method DescribeZoneInfo describeZoneInfo(array $options = [])
 * @method DescribeZoneRecords describeZoneRecords(array $options = [])
 * @method DescribeZoneVpcTree describeZoneVpcTree(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method SetZoneRecordStatus setZoneRecordStatus(array $options = [])
 * @method UpdateZoneRecord updateZoneRecord(array $options = [])
 * @method UpdateZoneRemark updateZoneRemark(array $options = [])
 */
class PvtzApiResolver
{
    use ApiResolverTrait;
}
