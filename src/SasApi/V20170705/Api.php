<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribePerDateData describePerDateData(array $options = [])
 * @method DescribeThreatTypeLines describeThreatTypeLines(array $options = [])
 * @method DescribeTotalAndRateLine describeTotalAndRateLine(array $options = [])
 * @method DescribeAccountProfileByKey describeAccountProfileByKey(array $options = [])
 * @method DescribeAccountProfileByKeyWord describeAccountProfileByKeyWord(array $options = [])
 * @method DescribeThreatDistribute describeThreatDistribute(array $options = [])
 * @method DescribeHitRateColumn describeHitRateColumn(array $options = [])
 * @method DescribeHitRatePie describeHitRatePie(array $options = [])
 * @method GetAccountProfile getAccountProfile(array $options = [])
 * @method GetInstanceCount getInstanceCount(array $options = [])
 * @method GetPhoneProfile getPhoneProfile(array $options = [])
 * @method GetIpProfile getIpProfile(array $options = [])
 * @method GetIpProfileRequest getIpProfileRequest(array $options = [])
 * @method GetIpHumanClientProbability getIpHumanClientProbability(array $options = [])
 */
class SasApiApiResolver
{
    use ApiResolverTrait;
}

class V20170705Rpc extends Rpc
{
    /** @var string */
    public $product = 'Sas-api';

    /** @var string */
    public $version = '2017-07-05';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribePerDateData extends V20170705Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribeThreatTypeLines extends V20170705Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribeTotalAndRateLine extends V20170705Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeAccountProfileByKey extends V20170705Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeAccountProfileByKeyWord extends V20170705Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHitDay()
 * @method $this withHitDay($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribeThreatDistribute extends V20170705Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHitDay()
 * @method $this withHitDay($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribeHitRateColumn extends V20170705Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getHitDay()
 * @method $this withHitDay($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribeHitRatePie extends V20170705Rpc
{
}

/**
 * @method string getDeviceIdMd5()
 * @method $this withDeviceIdMd5($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getRequestUrl()
 * @method $this withRequestUrl($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserAgent()
 * @method $this withUserAgent($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getAccessTimestamp()
 * @method $this withAccessTimestamp($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetAccountProfile extends V20170705Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetInstanceCount extends V20170705Rpc
{
}

/**
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDataVersion()
 * @method $this withDataVersion($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetPhoneProfile extends V20170705Rpc
{
}

/**
 * @method string getDeviceIdMd5()
 * @method $this withDeviceIdMd5($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getRequestUrl()
 * @method $this withRequestUrl($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserAgent()
 * @method $this withUserAgent($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetIpProfile extends V20170705Rpc
{
}

/**
 * @method string getDeviceIdMd5()
 * @method $this withDeviceIdMd5($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getRequestUrl()
 * @method $this withRequestUrl($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserAgent()
 * @method $this withUserAgent($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetIpProfileRequest extends V20170705Rpc
{
}

/**
 * @method string getDeviceIdMd5()
 * @method $this withDeviceIdMd5($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getRequestUrl()
 * @method $this withRequestUrl($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getUserAgent()
 * @method $this withUserAgent($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getSensType()
 * @method $this withSensType($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class GetIpHumanClientProbability extends V20170705Rpc
{
}
