<?php

namespace AlibabaCloud\Geoip\V20200101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeGeoipInstance describeGeoipInstance(array $options = [])
 * @method DescribeGeoipInstanceDataInfos describeGeoipInstanceDataInfos(array $options = [])
 * @method DescribeGeoipInstanceDataUrl describeGeoipInstanceDataUrl(array $options = [])
 * @method DescribeGeoipInstances describeGeoipInstances(array $options = [])
 * @method DescribeGeoipInstanceStatistics describeGeoipInstanceStatistics(array $options = [])
 * @method DescribeIpv4Location describeIpv4Location(array $options = [])
 * @method DescribeIpv6Location describeIpv6Location(array $options = [])
 */
class GeoipApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'geoip';

    /** @var string */
    public $version = '2020-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'geoip';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGeoipInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGeoipInstanceDataInfos extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGeoipInstanceDataUrl extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGeoipInstances extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGeoipInstanceStatistics extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeIpv4Location extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeIpv6Location extends Rpc
{
}
