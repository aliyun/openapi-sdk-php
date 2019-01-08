<?php

namespace AlibabaCloud\Pvtz;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Pvtz based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Pvtz
 *
 * @method static V20180101\AddZone addZone(array $options = [])
 * @method static V20180101\AddZoneRecord addZoneRecord(array $options = [])
 * @method static V20180101\BindZoneVpc bindZoneVpc(array $options = [])
 * @method static V20180101\CheckZoneName checkZoneName(array $options = [])
 * @method static V20180101\DeleteZone deleteZone(array $options = [])
 * @method static V20180101\DeleteZoneRecord deleteZoneRecord(array $options = [])
 * @method static V20180101\DescribeChangeLogs describeChangeLogs(array $options = [])
 * @method static V20180101\DescribeRegions describeRegions(array $options = [])
 * @method static V20180101\DescribeRequestGraph describeRequestGraph(array $options = [])
 * @method static V20180101\DescribeStatisticSummary describeStatisticSummary(array $options = [])
 * @method static V20180101\DescribeUserServiceStatus describeUserServiceStatus(array $options = [])
 * @method static V20180101\DescribeZoneInfo describeZoneInfo(array $options = [])
 * @method static V20180101\DescribeZoneRecords describeZoneRecords(array $options = [])
 * @method static V20180101\DescribeZoneVpcTree describeZoneVpcTree(array $options = [])
 * @method static V20180101\DescribeZones describeZones(array $options = [])
 * @method static V20180101\SetZoneRecordStatus setZoneRecordStatus(array $options = [])
 * @method static V20180101\UpdateZoneRecord updateZoneRecord(array $options = [])
 * @method static V20180101\UpdateZoneRemark updateZoneRemark(array $options = [])
 */
class PvtzV20180101
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Pvtz\\V20180101';
}
