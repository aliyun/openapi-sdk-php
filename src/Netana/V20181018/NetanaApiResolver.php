<?php

namespace AlibabaCloud\Netana\V20181018;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeIpv6LocationAndIsp describeIpv6LocationAndIsp(array $options = [])
 * @method CreateNetworkDiagnostic createNetworkDiagnostic(array $options = [])
 * @method DescribeDiagnosticConfig describeDiagnosticConfig(array $options = [])
 * @method DescribeIpLocationAndIsp describeIpLocationAndIsp(array $options = [])
 * @method DescribeNetworkAnalyticsPacketLoss describeNetworkAnalyticsPacketLoss(array $options = [])
 * @method DescribeNetworkAnalyticsLatency describeNetworkAnalyticsLatency(array $options = [])
 * @method DescribeNetworkAnalyticsDataTransfer describeNetworkAnalyticsDataTransfer(array $options = [])
 * @method DescribeNetworkAnalyticsNetQuality describeNetworkAnalyticsNetQuality(array $options = [])
 * @method DescribeNetworkQuotas describeNetworkQuotas(array $options = [])
 * @method DescribeNetworkQuotaRequestResult describeNetworkQuotaRequestResult(array $options = [])
 * @method CreateNetworkQuotaRequest createNetworkQuotaRequest(array $options = [])
 */
class NetanaApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Netana';

    /** @var string */
    public $version = '2018-10-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'Netana';
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 */
class DescribeIpv6LocationAndIsp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRequestParams()
 * @method $this withRequestParams($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getUserRequestId()
 * @method $this withUserRequestId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRequestApiName()
 * @method $this withRequestApiName($value)
 * @method string getErrorCode()
 * @method $this withErrorCode($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResponseParams()
 * @method $this withResponseParams($value)
 */
class CreateNetworkDiagnostic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeDiagnosticConfig extends Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 */
class DescribeIpLocationAndIsp extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getGrade()
 * @method $this withGrade($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class DescribeNetworkAnalyticsPacketLoss extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getGrade()
 * @method $this withGrade($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeNetworkAnalyticsLatency extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getGrade()
 * @method $this withGrade($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class DescribeNetworkAnalyticsDataTransfer extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getGrade()
 * @method $this withGrade($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeNetworkAnalyticsNetQuality extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getQuotaPublicityName()
 * @method $this withQuotaPublicityName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeNetworkQuotas extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getQuotaPublicityName()
 * @method $this withQuotaPublicityName($value)
 * @method string getQuotaRequestId()
 * @method $this withQuotaRequestId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeNetworkQuotaRequestResult extends Rpc
{
}

/**
 * @method string getRequestReason()
 * @method $this withRequestReason($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getQuotaPublicityName()
 * @method $this withQuotaPublicityName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRequestQuantity()
 * @method $this withRequestQuantity($value)
 * @method string getMobilePhone()
 * @method $this withMobilePhone($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateNetworkQuotaRequest extends Rpc
{
}
