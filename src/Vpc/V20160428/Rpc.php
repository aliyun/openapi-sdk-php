<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

class V20160428Rpc extends Rpc
{
    /** @var string */
    public $product = 'Vpc';

    /** @var string */
    public $version = '2016-04-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'vpc';
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewWeight()
 * @method $this withNewWeight($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class ModifyVpnPbrRouteEntryWeight extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewWeight()
 * @method $this withNewWeight($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class ModifyVpnRouteEntryWeight extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEipId()
 * @method $this withEipId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCommonBandwidthPackageIpBandwidth extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEipId()
 * @method $this withEipId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCommonBandwidthPackageIpBandwidth extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublishVpc()
 * @method $this withPublishVpc($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getRouteType()
 * @method $this withRouteType($value)
 */
class PublishVpnRouteEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVpnPbrRouteEntries extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVpnRouteEntries extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class DeleteVpnRouteEntry extends V20160428Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class DeleteVpnPbrRouteEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getPublishVpc()
 * @method $this withPublishVpc($value)
 */
class CreateVpnRouteEntry extends V20160428Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getPublishVpc()
 * @method $this withPublishVpc($value)
 */
class CreateVpnPbrRouteEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEnableDefaultVSwitch()
 * @method $this withEnableDefaultVSwitch($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method array getZoneId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 */
class CreateDefaultVpc extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withZoneId(array $value)
    {
        $this->data['ZoneId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ZoneId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 */
class CreateDefaultVSwitch extends V20160428Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreatePhysicalConnectionOccupancyOrder extends V20160428Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 */
class CreatePhysicalConnectionSetupOrder extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePhysicalConnectionLOA extends V20160428Rpc
{
}

/**
 * @method string getLineLabel()
 * @method $this withLineLabel($value)
 * @method string getLineCode()
 * @method $this withLineCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CompletePhysicalConnectionLOA extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getLineType()
 * @method $this withLineType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConstructionTime()
 * @method $this withConstructionTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCompanyName()
 * @method $this withCompanyName($value)
 * @method string getSi()
 * @method $this withSi($value)
 * @method array getPMInfo()
 */
class ApplyPhysicalConnectionLOA extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPMInfo(array $value)
    {
        $this->data['PMInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMCertificateNo'] = $value[$i]['PMCertificateNo'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMName'] = $value[$i]['PMName'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMCertificateType'] = $value[$i]['PMCertificateType'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMContactInfo'] = $value[$i]['PMContactInfo'];
            $this->options['query']['PMInfo.' . ($i + 1) . '.PMGender'] = $value[$i]['PMGender'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ConvertBandwidthPackage extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 */
class DeleteIpv6InternetBandwidth extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAclEntryComment()
 * @method $this withAclEntryComment($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclEntryId()
 * @method $this withAclEntryId($value)
 */
class ModifyIPv6TranslatorAclListEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePhysicalConnectionOrder extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyIpv6AddressAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyIpv6GatewayAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class DescribeIpv6GatewayAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this withIpv6EgressOnlyRuleId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeIpv6EgressOnlyRules extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this withIpv6EgressOnlyRuleId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIpv6EgressOnlyRule extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateIpv6EgressOnlyRule extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 */
class ReleaseIpv6InternetBandwidth extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 */
class ModifyIpv6InternetBandwidth extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 */
class ModifyIpv6GatewayAttributes extends V20160428Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class ModifyIpv6GatewaySpec extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeIpv6Gateways extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIpv6Address()
 * @method $this withIpv6Address($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 */
class DescribeIpv6Addresses extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class DeleteIpv6Gateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteIpv6InternetEgressOnlyRule extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateIpv6InternetEgressOnlyRule extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateIpv6Gateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getIpv6GatewayId()
 * @method $this withIpv6GatewayId($value)
 */
class AllocateIpv6InternetBandwidth extends V20160428Rpc
{
}

/**
 * @method string getBlockSize()
 * @method $this withBlockSize($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateEipAddresses extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeIPv6TranslatorAclListAttributes extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyIPv6TranslatorAclAttribute extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeIPv6TranslatorAclLists extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclEntryId()
 * @method $this withAclEntryId($value)
 */
class RemoveIPv6TranslatorAclListEntry extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclEntryIp()
 * @method $this withAclEntryIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAclEntryComment()
 * @method $this withAclEntryComment($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddIPv6TranslatorAclListEntry extends V20160428Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIPv6TranslatorAclList extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateIPv6TranslatorAclList extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublicIpAddress()
 * @method $this withPublicIpAddress($value)
 * @method string getLogProject()
 * @method $this withLogProject($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPublicIpType()
 * @method $this withPublicIpType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetPublicIpTrafficAuditLogStatus extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublicIpAddress()
 * @method $this withPublicIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPublicIpType()
 * @method $this withPublicIpType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePublicIpTrafficAuditLogAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTrafficAuditLogAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLogProject()
 * @method $this withLogProject($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetTrafficAuditLogStatus extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIPv6Translator extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class ModifyFlowLogAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeleteFlowLog extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTrafficType()
 * @method $this withTrafficType($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeFlowLogs extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeactiveFlowLog extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class ActiveFlowLog extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTrafficType()
 * @method $this withTrafficType($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class CreateFlowLog extends V20160428Rpc
{
}

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getAllocateIpv6Addr()
 * @method $this withAllocateIpv6Addr($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class DescribeIPv6TranslatorEntries extends V20160428Rpc
{
}

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getEntryBandwidth()
 * @method $this withEntryBandwidth($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getEntryDescription()
 * @method $this withEntryDescription($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 */
class ModifyIPv6TranslatorEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteIPv6TranslatorEntry extends V20160428Rpc
{
}

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getEntryBandwidth()
 * @method $this withEntryBandwidth($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getEntryDescription()
 * @method $this withEntryDescription($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class CreateIPv6TranslatorEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyIPv6TranslatorBandwidth extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyIPv6TranslatorAttribute extends V20160428Rpc
{
}

/**
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAllocateIpv6Addr()
 * @method $this withAllocateIpv6Addr($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAllocateIpv4Addr()
 * @method $this withAllocateIpv4Addr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeIPv6Translators extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateIPv6Translator extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class UnassociateRouteTable extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouteTable extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class AssociateRouteTable extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getEnableIpsec()
 * @method $this withEnableIpsec($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableSsl()
 * @method $this withEnableSsl($value)
 * @method string getSslConnections()
 * @method $this withSslConnections($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class CreateVpnGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkQuotas extends V20160428Rpc
{
}

/**
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyRouteEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEipInstanceId()
 * @method $this withEipInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ReverseLogCollectionStatus extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogProject()
 * @method $this withLogProject($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEipInstanceId()
 * @method $this withEipInstanceId($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class SetLogCollectionAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogProject()
 * @method $this withLogProject($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEipInstanceId()
 * @method $this withEipInstanceId($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class DeleteLogCollectionAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeInstanceFromCen extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GrantInstanceToCen extends V20160428Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGrantRulesToCen extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class MoveResourceGroup extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateRouteTable extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 */
class DescribeSslVpnClientCert extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 */
class RemoveGlobalAccelerationInstanceIp extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 */
class AddGlobalAccelerationInstanceIp extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getCbnUid()
 * @method $this withCbnUid($value)
 * @method string getCbnInstanceId()
 * @method $this withCbnInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeInstanceFromCbn extends V20160428Rpc
{
}

/**
 * @method string getCipher()
 * @method $this withCipher($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCompress()
 * @method $this withCompress($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getProto()
 * @method $this withProto($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySslVpnServer extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 */
class ModifySslVpnClientCert extends V20160428Rpc
{
}

/**
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSslVpnServers extends V20160428Rpc
{
}

/**
 * @method string getCipher()
 * @method $this withCipher($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientIpPool()
 * @method $this withClientIpPool($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCompress()
 * @method $this withCompress($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getProto()
 * @method $this withProto($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSslVpnServer extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 */
class DeleteSslVpnClientCert extends V20160428Rpc
{
}

/**
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSslVpnServer extends V20160428Rpc
{
}

/**
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSslVpnClientCertId()
 * @method $this withSslVpnClientCertId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSslVpnClientCerts extends V20160428Rpc
{
}

/**
 * @method string getSslVpnServerId()
 * @method $this withSslVpnServerId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateSslVpnClientCert extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegionPublicIpAddress extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class ModifyRouteTableAttributes extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TestCrmAction extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class TestAction extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMinutePeriod()
 * @method $this withMinutePeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVpnConnectionLogs extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateGatewayId()
 * @method $this withPrivateGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyPrivateNatGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getVpcId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreatePrivateNatGateway extends V20160428Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['vpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSNatIp()
 * @method $this withSNatIp($value)
 * @method string getPrivateSNatEntryId()
 * @method $this withPrivateSNatEntryId($value)
 */
class ModifyPrivateSNatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePrivateNatGateways extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivateSNatEntryId()
 * @method $this withPrivateSNatEntryId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePrivateSNatEntries extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getDNatIp()
 * @method $this withDNatIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPrivateDNatEntryId()
 * @method $this withPrivateDNatEntryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getDNatPort()
 * @method $this withDNatPort($value)
 */
class ModifyPrivateDNatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivateSNatEntryId()
 * @method $this withPrivateSNatEntryId($value)
 */
class DeletePrivateSNatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPrivateDNatEntryId()
 * @method $this withPrivateDNatEntryId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePrivateDNatEntries extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPrivateDNatEntryId()
 * @method $this withPrivateDNatEntryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePrivateDNatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePrivateNatGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getDNatIp()
 * @method $this withDNatIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getDestinationPort()
 * @method $this withDestinationPort($value)
 * @method string getDNatPort()
 * @method $this withDNatPort($value)
 */
class CreatePrivateDNatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSNatIp()
 * @method $this withSNatIp($value)
 */
class CreatePrivateSNatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class DescribeRouteTableList extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeBgpNetworks extends V20160428Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRouterInterfacesForGlobal extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class ModifyCommonBandwidthPackagePayType extends V20160428Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getKbpsBandwidth()
 * @method $this withKbpsBandwidth($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceUid()
 * @method $this withResourceUid($value)
 * @method string getResourceBid()
 * @method $this withResourceBid($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ModifyEipPayType extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 */
class ModifyGlobalAccelerationInstanceAttributes extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 */
class ModifyGlobalAccelerationInstanceSpec extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 */
class UnassociateGlobalAccelerationInstance extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 */
class DeleteGlobalAccelerationInstance extends V20160428Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeGlobalAccelerationInstances extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServerType()
 * @method $this withServerType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 */
class DescribeServerRelatedGlobalAccelerationInstances extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackendServerId()
 * @method $this withBackendServerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getBackendServerRegionId()
 * @method $this withBackendServerRegionId($value)
 * @method string getBackendServerType()
 * @method $this withBackendServerType($value)
 */
class AssociateGlobalAccelerationInstance extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateGlobalAccelerationInstance extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class TestParam extends V20160428Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVSwitchAttributes extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCommonBandwidthPackageSpec extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RemoveCommonBandwidthPackageIp extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCommonBandwidthPackage extends V20160428Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCommonBandwidthPackages extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCommonBandwidthPackageAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpInstanceId()
 * @method $this withIpInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCommonBandwidthPackageIp extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getZone()
 * @method $this withZone($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class CreateCommonBandwidthPackage extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVRouterByVpcId extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeBgpGroups extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getBgpPeerId()
 * @method $this withBgpPeerId($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeBgpPeers extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNqaId()
 * @method $this withNqaId($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeNqas extends V20160428Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerAsn()
 * @method $this withPeerAsn($value)
 * @method string getIsFakeAsn()
 * @method $this withIsFakeAsn($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyBgpGroupAttribute extends V20160428Rpc
{
}

/**
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNqaId()
 * @method $this withNqaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNqa extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerIpAddress()
 * @method $this withPeerIpAddress($value)
 */
class CreateBgpPeer extends V20160428Rpc
{
}

/**
 * @method string getDestinationIp()
 * @method $this withDestinationIp($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateNqa extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpGroupId()
 * @method $this withBgpGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBgpGroup extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDstCidrBlock()
 * @method $this withDstCidrBlock($value)
 */
class DeleteBgpNetwork extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBgpPeerId()
 * @method $this withBgpPeerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBgpPeer extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNqaId()
 * @method $this withNqaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNqa extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDstCidrBlock()
 * @method $this withDstCidrBlock($value)
 */
class AddBgpNetwork extends V20160428Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerAsn()
 * @method $this withPeerAsn($value)
 * @method string getIsFakeAsn()
 * @method $this withIsFakeAsn($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateBgpGroup extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVpcAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisableVpcClassicLink extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableVpcClassicLink extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociatePhysicalConnectionFromVirtualBorderRouter extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 */
class AssociatePhysicalConnectionToVirtualBorderRouter extends V20160428Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getBandwidth()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInterfaceName()
 * @method $this withInterfaceName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class CreatePhysicalConnectionNew extends V20160428Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['query']['bandwidth'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeVpnGateways extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DownloadVpnConnectionConfig extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 */
class ModifyCustomerGatewayAttribute extends V20160428Rpc
{
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyVpnConnectionAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVpnGatewayAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCustomerGateways extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVpnConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVpnConnections extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVpnGateway extends V20160428Rpc
{
}

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateVpnConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 */
class DeleteCustomerGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpnConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpnGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 */
class DescribeCustomerGateway extends V20160428Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCustomerGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 */
class ModifySnatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNatGatewayAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 */
class ModifyNatGatewaySpec extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSourceVSwitchId()
 * @method $this withSourceVSwitchId($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class DescribeSnatTableEntries extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBandwidthPackageAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSnatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceVSwitchId()
 * @method $this withSourceVSwitchId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 */
class CreateSnatEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZone()
 * @method $this withZone($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getIpCount()
 * @method $this withIpCount($value)
 */
class CreateBandwidthPackage extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class DescribeForwardTableEntries extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBandwidthPackageSpec extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class ModifyForwardEntry extends V20160428Rpc
{
}

/**
 * @method array getRemovedIpAddresses()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RemoveBandwidthPackageIps extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRemovedIpAddresses(array $value)
    {
        $this->data['RemovedIpAddresses'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RemovedIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteForwardEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNatGateway extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeBandwidthPackages extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class DescribeNatGateways extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class CreateForwardEntry extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getBandwidthPackage()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateNatGateway extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBandwidthPackage(array $value)
    {
        $this->data['BandwidthPackage'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.Bandwidth'] = $value[$i]['Bandwidth'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.Zone'] = $value[$i]['Zone'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.InternetChargeType'] = $value[$i]['InternetChargeType'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.ISP'] = $value[$i]['ISP'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.IpCount'] = $value[$i]['IpCount'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBandwidthPackage extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpCount()
 * @method $this withIpCount($value)
 */
class AddBandwidthPackageIps extends V20160428Rpc
{
}

/**
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateHaVip extends V20160428Rpc
{
}

/**
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getEnableIPv6()
 * @method $this withEnableIPv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVpcAttribute extends V20160428Rpc
{
}

/**
 * @method string getVRouterName()
 * @method $this withVRouterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVRouterAttribute extends V20160428Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 */
class ModifyVSwitchAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RecoverVirtualBorderRouter extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseEipAddress extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TerminatePhysicalConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TerminateVirtualBorderRouter extends V20160428Rpc
{
}

/**
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateEipAddress extends V20160428Rpc
{
}

/**
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getBandwidth()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyPhysicalConnectionAttribute extends V20160428Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['query']['bandwidth'] = $value;

        return $this;
    }
}

/**
 * @method string getOppositeRouterId()
 * @method $this withOppositeRouterId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDeleteHealthCheckIp()
 * @method $this withDeleteHealthCheckIp($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHealthCheckTargetIp()
 * @method $this withHealthCheckTargetIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOppositeInterfaceOwnerId()
 * @method $this withOppositeInterfaceOwnerId($value)
 * @method string getHealthCheckSourceIp()
 * @method $this withHealthCheckSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOppositeRouterType()
 * @method $this withOppositeRouterType($value)
 * @method string getOppositeInterfaceId()
 * @method $this withOppositeInterfaceId($value)
 */
class ModifyRouterInterfaceAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 */
class ModifyRouterInterfaceSpec extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getAssociatedPhysicalConnections()
 * @method $this withAssociatedPhysicalConnections($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 */
class ModifyVirtualBorderRouterAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVRouters extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getTag()
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class DescribeVSwitches extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeZones extends V20160428Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class EnablePhysicalConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyEipAddressAttribute extends V20160428Rpc
{
}

/**
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyHaVipAttribute extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeRegions extends V20160428Rpc
{
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeRouterInterfaces extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVRouterId()
 * @method $this withVRouterId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class DescribeRouteTables extends V20160428Rpc
{
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVirtualBorderRouters extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVirtualBorderRoutersForPhysicalConnection extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 */
class DescribeVpcs extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeEipMonitorData extends V20160428Rpc
{
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeHaVips extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePhysicalConnections extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpc extends V20160428Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVSwitch extends V20160428Rpc
{
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostOperator()
 * @method $this withHostOperator($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccessPoints extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFilter2Value()
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getEipAddress()
 * @method $this withEipAddress($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEipAddresses extends V20160428Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter2Value($value)
    {
        $this->data['Filter2Value'] = $value;
        $this->options['query']['Filter.2.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter1Value($value)
    {
        $this->data['Filter1Value'] = $value;
        $this->options['query']['Filter.1.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter2Key($value)
    {
        $this->data['Filter2Key'] = $value;
        $this->options['query']['Filter.2.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter1Key($value)
    {
        $this->data['Filter1Key'] = $value;
        $this->options['query']['Filter.1.Key'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 */
class CreateVpc extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class CreateVSwitch extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 */
class DeactivateRouterInterface extends V20160428Rpc
{
}

/**
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHaVip extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePhysicalConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getNextHopList()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class DeleteRouteEntry extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNextHopList(array $value)
    {
        $this->data['NextHopList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopId'] = $value[$i]['NextHopId'];
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopType'] = $value[$i]['NextHopType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouterInterface extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVirtualBorderRouter extends V20160428Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateHaVip extends V20160428Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this withRedundantPhysicalConnectionId($value)
 * @method string getPeerLocation()
 * @method $this withPeerLocation($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortType()
 * @method $this withPortType($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getBandwidth()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLineOperator()
 * @method $this withLineOperator($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePhysicalConnection extends V20160428Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['query']['bandwidth'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method array getNextHopList()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class CreateRouteEntry extends V20160428Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNextHopList(array $value)
    {
        $this->data['NextHopList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NextHopList.' . ($i + 1) . '.Weight'] = $value[$i]['Weight'];
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopId'] = $value[$i]['NextHopId'];
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopType'] = $value[$i]['NextHopType'];
        }

        return $this;
    }
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getOppositeRouterId()
 * @method $this withOppositeRouterId($value)
 * @method string getOppositeAccessPointId()
 * @method $this withOppositeAccessPointId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckTargetIp()
 * @method $this withHealthCheckTargetIp($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getOppositeInterfaceId()
 * @method $this withOppositeInterfaceId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOppositeRegionId()
 * @method $this withOppositeRegionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOppositeInterfaceOwnerId()
 * @method $this withOppositeInterfaceOwnerId($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getHealthCheckSourceIp()
 * @method $this withHealthCheckSourceIp($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getOppositeRouterType()
 * @method $this withOppositeRouterType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateRouterInterface extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 * @method string getPconnInterfaceId()
 * @method $this withPconnInterfaceId($value)
 */
class CreateVirtualBorderRouter extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 */
class ActivateRouterInterface extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getNetmode()
 * @method $this withNetmode($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class AllocateEipAddress extends V20160428Rpc
{
}

/**
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstanceRegionId()
 * @method $this withInstanceRegionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateEipAddress extends V20160428Rpc
{
}

/**
 * @method string getHaVipId()
 * @method $this withHaVipId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateHaVip extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelPhysicalConnection extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 */
class ConnectRouterInterface extends V20160428Rpc
{
}
