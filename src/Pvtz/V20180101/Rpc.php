<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

class V20180101Rpc extends Rpc
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
class SetProxyPattern extends V20180101Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeStatisticSummary extends V20180101Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeZoneVpcTree extends V20180101Rpc
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
class DescribeRequestGraph extends V20180101Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserServiceStatus extends V20180101Rpc
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
class DescribeChangeLogs extends V20180101Rpc
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
class DescribeZoneInfo extends V20180101Rpc
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
class CheckZoneName extends V20180101Rpc
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
class DeleteZone extends V20180101Rpc
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
class UpdateZoneRemark extends V20180101Rpc
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
class DescribeRegions extends V20180101Rpc
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
class BindZoneVpc extends V20180101Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withVpcs(array $value)
    {
        $this->data['Vpcs'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Vpcs.' . ($i + 1) . '.RegionId'] = $value[$i]['RegionId'];
            $this->options['query']['Vpcs.' . ($i + 1) . '.VpcId'] = $value[$i]['VpcId'];
        }

        return $this;
    }
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
class AddZoneRecord extends V20180101Rpc
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
class DeleteZoneRecord extends V20180101Rpc
{
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
class UpdateZoneRecord extends V20180101Rpc
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
class SetZoneRecordStatus extends V20180101Rpc
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
class DescribeZoneRecords extends V20180101Rpc
{
}

/**
 * @method string getQueryVpcId()
 * @method $this withQueryVpcId($value)
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
class DescribeZones extends V20180101Rpc
{
}

/**
 * @method string getProxyPattern()
 * @method $this withProxyPattern($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getZoneName()
 * @method $this withZoneName($value)
 */
class AddZone extends V20180101Rpc
{
}
