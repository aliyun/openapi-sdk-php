<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SetProxyPattern setProxyPattern(array $options = [])
 * @method DescribeStatisticSummary describeStatisticSummary(array $options = [])
 * @method DescribeRequestGraph describeRequestGraph(array $options = [])
 * @method DescribeZoneVpcTree describeZoneVpcTree(array $options = [])
 * @method AddZoneRecord addZoneRecord(array $options = [])
 * @method DeleteZoneRecord deleteZoneRecord(array $options = [])
 * @method CheckZoneName checkZoneName(array $options = [])
 * @method AddZone addZone(array $options = [])
 * @method DeleteZone deleteZone(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method UpdateZoneRemark updateZoneRemark(array $options = [])
 * @method DescribeZoneInfo describeZoneInfo(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method BindZoneVpc bindZoneVpc(array $options = [])
 * @method UpdateZoneRecord updateZoneRecord(array $options = [])
 * @method SetZoneRecordStatus setZoneRecordStatus(array $options = [])
 * @method DescribeZoneRecords describeZoneRecords(array $options = [])
 * @method DescribeChangeLogs describeChangeLogs(array $options = [])
 * @method DescribeUserServiceStatus describeUserServiceStatus(array $options = [])
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
 * @method string getProxyPattern()
 * @method $this withProxyPattern($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SetProxyPattern extends Rpc
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 */
class DescribeRequestGraph extends Rpc
{
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
 * @method string getRr()
 * @method $this withRr($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class AddZoneRecord extends Rpc
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
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getZoneName()
 * @method $this withZoneName($value)
 */
class CheckZoneName extends Rpc
{
}

/**
 * @method string getProxyPattern()
 * @method $this withProxyPattern($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getZoneName()
 * @method $this withZoneName($value)
 */
class AddZone extends Rpc
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
 * @method string getQueryVpcId()
 * @method $this withQueryVpcId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryRegionId()
 * @method $this withQueryRegionId($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateZoneRemark extends Rpc
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
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getVpcs()
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
            $this->options['query']['Vpcs.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
            $this->options['query']['Vpcs.' . ($depth1 + 1) . '.VpcId'] = $depth1Value['VpcId'];
        }

        return $this;
    }
}

/**
 * @method string getRr()
 * @method $this withRr($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class UpdateZoneRecord extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeZoneRecords extends Rpc
{
}

/**
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
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 */
class DescribeChangeLogs extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserServiceStatus extends Rpc
{
}
