<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

class V20140526Rpc extends Rpc
{
    /** @var string */
    public $product = 'Ecs';

    /** @var string */
    public $version = '2014-05-26';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ecs';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDemandStatus()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeDemands extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDemandStatus(array $value)
    {
        $this->data['DemandStatus'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DemandStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagKey(array $value)
    {
        $this->data['TagKey'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AcceptInquiredSystemEvent extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportSnapshot extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ExportSnapshot extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RedeployInstance extends V20140526Rpc
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
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 * @method array getIpv6Address()
 */
class UnassignIpv6Addresses extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIpv6Address(array $value)
    {
        $this->data['Ipv6Address'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 * @method array getIpv6Address()
 */
class AssignIpv6Addresses extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIpv6Address(array $value)
    {
        $this->data['Ipv6Address'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 */
class RenewDedicatedHosts extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseDedicatedHost extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class ModifyInstanceDeployment extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDedicatedHostAutoReleaseTime extends V20140526Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDedicatedHostAutoRenewAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getActionOnMaintenance()
 * @method $this withActionOnMaintenance($value)
 * @method string getDedicatedHostName()
 * @method $this withDedicatedHostName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getNetworkAttributesUdpTimeout()
 */
class ModifyDedicatedHostAttribute extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesSlbUdpTimeout($value)
    {
        $this->data['NetworkAttributesSlbUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.SlbUdpTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesUdpTimeout($value)
    {
        $this->data['NetworkAttributesUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.UdpTimeout'] = $value;

        return $this;
    }
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDedicatedHostName()
 * @method $this withDedicatedHostName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method array getTag()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDedicatedHosts extends V20140526Rpc
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
 * @method string getSupportedInstanceTypeFamily()
 * @method $this withSupportedInstanceTypeFamily($value)
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSupportedInstanceTypesList()
 * @method $this withSupportedInstanceTypesList($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedHostTypes extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getActionOnMaintenance()
 * @method $this withActionOnMaintenance($value)
 * @method array getTag()
 * @method string getDedicatedHostType()
 * @method $this withDedicatedHostType($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getDedicatedHostName()
 * @method $this withDedicatedHostName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getNetworkAttributesUdpTimeout()
 */
class AllocateDedicatedHosts extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesSlbUdpTimeout($value)
    {
        $this->data['NetworkAttributesSlbUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.SlbUdpTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkAttributesUdpTimeout($value)
    {
        $this->data['NetworkAttributesUdpTimeout'] = $value;
        $this->options['query']['NetworkAttributes.UdpTimeout'] = $value;

        return $this;
    }
}

/**
 * @method string getDedicatedHostIds()
 * @method $this withDedicatedHostIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedHostAutoRenew extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNotBefore()
 * @method $this withNotBefore($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class CreateSimulatedSystemEvents extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelSimulatedSystemEvents extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEventId(array $value)
    {
        $this->data['EventId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAttributeName()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeAccountAttributes extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAttributeName(array $value)
    {
        $this->data['AttributeName'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AttributeName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeInstanceAutoRenewList extends V20140526Rpc
{
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RecallInstancesSystemEvent extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEventId(array $value)
    {
        $this->data['EventId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
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
 * @method array getInstanceId()
 */
class DescribeCloudAssistantStatus extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
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
 * @method array getInstanceId()
 */
class InstallCloudAssistant extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetLaunchTemplateData extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkInterfacePermissionId()
 * @method $this withNetworkInterfacePermissionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteNetworkInterfacePermission extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getNetworkInterfacePermissionId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DescribeNetworkInterfacePermissions extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNetworkInterfacePermissionId(array $value)
    {
        $this->data['NetworkInterfacePermissionId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NetworkInterfacePermissionId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPermission()
 * @method $this withPermission($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class CreateNetworkInterfacePermission extends V20140526Rpc
{
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDefaultVersionNumber()
 * @method $this withDefaultVersionNumber($value)
 */
class ModifyLaunchTemplateDefaultVersion extends V20140526Rpc
{
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getMaxVersion()
 * @method $this withMaxVersion($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefaultVersion()
 * @method $this withDefaultVersion($value)
 * @method string getMinVersion()
 * @method $this withMinVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getLaunchTemplateVersion()
 * @method string getDetailFlag()
 * @method $this withDetailFlag($value)
 */
class DescribeLaunchTemplateVersions extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLaunchTemplateVersion(array $value)
    {
        $this->data['LaunchTemplateVersion'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['LaunchTemplateVersion.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTemplateTag()
 * @method array getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTemplateResourceGroupId()
 * @method $this withTemplateResourceGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLaunchTemplates extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLaunchTemplateName(array $value)
    {
        $this->data['LaunchTemplateName'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['LaunchTemplateName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTemplateTag(array $value)
    {
        $this->data['TemplateTag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLaunchTemplateId(array $value)
    {
        $this->data['LaunchTemplateId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['LaunchTemplateId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDeleteVersion()
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLaunchTemplateVersion extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDeleteVersion(array $value)
    {
        $this->data['DeleteVersion'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DeleteVersion.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDiskIops()
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getVersionDescription()
 * @method $this withVersionDescription($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getEnableVmOsConfig()
 * @method $this withEnableVmOsConfig($value)
 * @method array getNetworkInterface()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getDataDisk()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSystemDiskDescription()
 */
class CreateLaunchTemplateVersion extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskIops($value)
    {
        $this->data['SystemDiskIops'] = $value;
        $this->options['query']['SystemDisk.Iops'] = $value;

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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNetworkInterface(array $value)
    {
        $this->data['NetworkInterface'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress'] = $value[$i]['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.VSwitchId'] = $value[$i]['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.SecurityGroupId'] = $value[$i]['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $value[$i]['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDataDisk(array $value)
    {
        $this->data['DataDisk'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $value[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $value[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Encrypted'] = $value[$i]['Encrypted'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DiskName'] = $value[$i]['DiskName'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $value[$i]['DeleteWithInstance'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Device'] = $value[$i]['Device'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLaunchTemplate extends V20140526Rpc
{
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDiskIops()
 * @method array getTemplateTag()
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getTemplateResourceGroupId()
 * @method $this withTemplateResourceGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getVersionDescription()
 * @method $this withVersionDescription($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getEnableVmOsConfig()
 * @method $this withEnableVmOsConfig($value)
 * @method array getNetworkInterface()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getDataDisk()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSystemDiskDescription()
 */
class CreateLaunchTemplate extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskIops($value)
    {
        $this->data['SystemDiskIops'] = $value;
        $this->options['query']['SystemDisk.Iops'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTemplateTag(array $value)
    {
        $this->data['TemplateTag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNetworkInterface(array $value)
    {
        $this->data['NetworkInterface'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress'] = $value[$i]['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.VSwitchId'] = $value[$i]['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.SecurityGroupId'] = $value[$i]['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $value[$i]['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDataDisk(array $value)
    {
        $this->data['DataDisk'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $value[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $value[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Encrypted'] = $value[$i]['Encrypted'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DiskName'] = $value[$i]['DiskName'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $value[$i]['DeleteWithInstance'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Device'] = $value[$i]['Device'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNotBefore()
 * @method $this withNotBefore($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class SetInstancesSystemEvent extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEniId()
 * @method $this withEniId($value)
 */
class DescribeNetworkInterfaceMonitorData extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEniId()
 * @method $this withEniId($value)
 */
class DescribeEniMonitorData extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNotBefore()
 * @method $this withNotBefore($value)
 * @method string getExecuteEvent()
 * @method $this withExecuteEvent($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class CreateInstancesSystemEvent extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 */
class DescribeResourcesModification extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 */
class DescribeBandwidthLimitation extends V20140526Rpc
{
}

class RunPodInstances extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getWakeUp()
 * @method $this withWakeUp($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceScreenshot extends V20140526Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceConsoleOutput extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPodData()
 * @method $this withPodData($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 */
class CreateContainerInstances extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerminateSubscription()
 * @method $this withTerminateSubscription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteContainerInstance extends V20140526Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNewPlanTime()
 * @method $this withNewPlanTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewExpireTime()
 * @method $this withNewExpireTime($value)
 */
class ModifyUserEventPlanTime extends V20140526Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeUserEventDetail extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeAvailableResource extends V20140526Rpc
{
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEventCycleStatus()
 * @method $this withEventCycleStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getInstanceEventCycleStatus()
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventPublishTimeStart()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNotBeforeEnd()
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class DescribeInstanceHistoryEvents extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEventId(array $value)
    {
        $this->data['EventId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceEventCycleStatus(array $value)
    {
        $this->data['InstanceEventCycleStatus'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceEventCycleStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($value)
    {
        $this->data['EventPublishTimeEnd'] = $value;
        $this->options['query']['EventPublishTime.End'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceEventType(array $value)
    {
        $this->data['InstanceEventType'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeStart($value)
    {
        $this->data['NotBeforeStart'] = $value;
        $this->options['query']['NotBefore.Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeStart($value)
    {
        $this->data['EventPublishTimeStart'] = $value;
        $this->options['query']['EventPublishTime.Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeEnd($value)
    {
        $this->data['NotBeforeEnd'] = $value;
        $this->options['query']['NotBefore.End'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSaleStrategy()
 * @method $this withSaleStrategy($value)
 */
class DescribeBandwidthSpec extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSaleStrategy()
 * @method $this withSaleStrategy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 */
class DescribeAvailableZones extends V20140526Rpc
{
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventPublishTimeStart()
 * @method array getInstanceId()
 * @method string getNotBeforeEnd()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeInstancesFullStatus extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEventId(array $value)
    {
        $this->data['EventId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($value)
    {
        $this->data['EventPublishTimeEnd'] = $value;
        $this->options['query']['EventPublishTime.End'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceEventType(array $value)
    {
        $this->data['InstanceEventType'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeStart($value)
    {
        $this->data['NotBeforeStart'] = $value;
        $this->options['query']['NotBefore.Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPublishTimeStart($value)
    {
        $this->data['EventPublishTimeStart'] = $value;
        $this->options['query']['EventPublishTime.Start'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotBeforeEnd($value)
    {
        $this->data['NotBeforeEnd'] = $value;
        $this->options['query']['NotBefore.End'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecondaryPrivateIpAddressCount()
 * @method $this withSecondaryPrivateIpAddressCount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class AssignPrivateIpAddresses extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPrivateIpAddress(array $value)
    {
        $this->data['PrivateIpAddress'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
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
 * @method array getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class UnassignPrivateIpAddresses extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPrivateIpAddress(array $value)
    {
        $this->data['PrivateIpAddress'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReActivateInstances extends V20140526Rpc
{
}

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUniqueSuffix()
 * @method $this withUniqueSuffix($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method array getTag()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCapacityReservationPreference()
 * @method $this withCapacityReservationPreference($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getIpv6Address()
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSpotInterruptionBehavior()
 * @method $this withSpotInterruptionBehavior($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getCapacityReservationId()
 * @method $this withCapacityReservationId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHibernationConfigured()
 * @method $this withHibernationConfigured($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method array getNetworkInterface()
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method array getDataDisk()
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getSystemDiskSize()
 * @method string getSystemDiskDescription()
 */
class RunInstances extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIpv6Address(array $value)
    {
        $this->data['Ipv6Address'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNetworkInterface(array $value)
    {
        $this->data['NetworkInterface'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress'] = $value[$i]['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.VSwitchId'] = $value[$i]['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.SecurityGroupId'] = $value[$i]['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $value[$i]['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDataDisk(array $value)
    {
        $this->data['DataDisk'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $value[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $value[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Encrypted'] = $value[$i]['Encrypted'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.KMSKeyId'] = $value[$i]['KMSKeyId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DiskName'] = $value[$i]['DiskName'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Device'] = $value[$i]['Device'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $value[$i]['DeleteWithInstance'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStatusValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatusKey()
 */
class ModifyUserBusinessBehavior extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusValue($value)
    {
        $this->data['StatusValue'] = $value;
        $this->options['query']['statusValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusKey($value)
    {
        $this->data['StatusKey'] = $value;
        $this->options['query']['statusKey'] = $value;

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
 * @method string getStatusKey()
 */
class DescribeUserBusinessBehavior extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatusKey($value)
    {
        $this->data['StatusKey'] = $value;
        $this->options['query']['statusKey'] = $value;

        return $this;
    }
}

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEventTimeStart()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getDiskId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventTimeEnd()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDisksFullStatus extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEventId(array $value)
    {
        $this->data['EventId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventTimeStart($value)
    {
        $this->data['EventTimeStart'] = $value;
        $this->options['query']['EventTime.Start'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDiskId(array $value)
    {
        $this->data['DiskId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DiskId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventTimeEnd($value)
    {
        $this->data['EventTimeEnd'] = $value;
        $this->options['query']['EventTime.End'] = $value;

        return $this;
    }
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ArchiveInstance extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ConvertNatPublicIpToEip extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHpcCluster extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
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
 * @method string getHpcClusterIds()
 * @method $this withHpcClusterIds($value)
 */
class DescribeHpcClusters extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyHpcClusterAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateHpcCluster extends V20140526Rpc
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
 */
class DescribeSnapshotsUsage extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class DescribeSpotPriceHistory extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInvokeStatus()
 * @method $this withInvokeStatus($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getCommandName()
 * @method $this withCommandName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommandType()
 * @method $this withCommandType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInvocations extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class InvokeCommand extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class StopInvocation extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceId(array $value)
    {
        $this->data['InstanceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
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
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeCommands extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInvokeId()
 * @method $this withInvokeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInvokeRecordStatus()
 * @method $this withInvokeRecordStatus($value)
 */
class DescribeInvocationResults extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getDestGroupId()
 * @method $this withDestGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestGroupOwnerAccount()
 * @method $this withDestGroupOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getDestGroupOwnerId()
 * @method $this withDestGroupOwnerId($value)
 */
class ModifySecurityGroupEgressRule extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceBusinessMonitorData extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAxtCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
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
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeAxtCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getCommandName()
 * @method $this withCommandName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceExecuteStatus()
 * @method $this withInstanceExecuteStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommandType()
 * @method $this withCommandType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeAxtTask extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeAxtTaskResult extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeOut()
 * @method $this withTimeOut($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyAxtCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class StopAxtTask extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCommandContent()
 * @method $this withCommandContent($value)
 * @method string getTimeOut()
 * @method $this withTimeOut($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateAxtCommand extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getTimed()
 * @method $this withTimed($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class CreateAxtTask extends V20140526Rpc
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
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class DescribeRecommendInstanceType extends V20140526Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DetachNetworkInterface extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSecurityGroupId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class ModifyNetworkInterfaceAttribute extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSecurityGroupId(array $value)
    {
        $this->data['SecurityGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class AttachNetworkInterface extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getVisible()
 * @method $this withVisible($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 */
class CreateNetworkInterface extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
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
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DeleteNetworkInterface extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceManaged()
 * @method $this withServiceManaged($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 * @method array getNetworkInterfaceId()
 */
class DescribeNetworkInterfaces extends V20140526Rpc
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
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNetworkInterfaceId(array $value)
    {
        $this->data['NetworkInterfaceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NetworkInterfaceId.' . ($i + 1)] = $iValue;
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
 * @method array getSecurityGroupId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSecurityGroupReferences extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSecurityGroupId(array $value)
    {
        $this->data['SecurityGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDiskChargeType()
 * @method $this withDiskChargeType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDiskChargeType extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getIncludeDataDisks()
 * @method $this withIncludeDataDisks($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ModifyInstanceChargeType extends V20140526Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperatorType()
 * @method $this withOperatorType($value)
 * @method string getSystemDiskCategory()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class ModifyPrepayInstanceSpec extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }
}

/**
 * @method array getGroupNo()
 */
class DescribeGroupReferences extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withGroupNo(array $value)
    {
        $this->data['GroupNo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['GroupNo.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStartInstance()
 * @method $this withStartInstance($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReInitDisks extends V20140526Rpc
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
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInnerAccessPolicy()
 * @method $this withInnerAccessPolicy($value)
 */
class ModifySecurityGroupPolicy extends V20140526Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSnapshotPackage extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeInstanceRamRole extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachClassicLinkVpc extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeClassicLinkInstances extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachClassicLinkVpc extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachInstanceRamRole extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachInstanceRamRole extends V20140526Rpc
{
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSnapshotMonitorData extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceGroupOwnerId()
 * @method $this withSourceGroupOwnerId($value)
 * @method string getSourceGroupOwnerAccount()
 * @method $this withSourceGroupOwnerAccount($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 */
class ModifySecurityGroupRule extends V20140526Rpc
{
}

/**
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDataDisk3Category()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method string getDataDisk4Category()
 * @method string getDataDisk4Size()
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDataDisk2Size()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getDataDisk1Category()
 * @method string getSystemDiskSize()
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class DescribePrice extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3Size($value)
    {
        $this->data['DataDisk3Size'] = $value;
        $this->options['query']['DataDisk.3.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk3Category($value)
    {
        $this->data['DataDisk3Category'] = $value;
        $this->options['query']['DataDisk.3.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4Category($value)
    {
        $this->data['DataDisk4Category'] = $value;
        $this->options['query']['DataDisk.4.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk4Size($value)
    {
        $this->data['DataDisk4Size'] = $value;
        $this->options['query']['DataDisk.4.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2Category($value)
    {
        $this->data['DataDisk2Category'] = $value;
        $this->options['query']['DataDisk.2.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1Size($value)
    {
        $this->data['DataDisk1Size'] = $value;
        $this->options['query']['DataDisk.1.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk2Size($value)
    {
        $this->data['DataDisk2Size'] = $value;
        $this->options['query']['DataDisk.2.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDisk1Category($value)
    {
        $this->data['DataDisk1Category'] = $value;
        $this->options['query']['DataDisk.1.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeRenewalPrice extends V20140526Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class JoinResourceGroup extends V20140526Rpc
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
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnUnableToRedeployFailedInstance()
 * @method $this withOnUnableToRedeployFailedInstance($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class CreateDeploymentSet extends V20140526Rpc
{
}

/**
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDeploymentSet extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDeploymentSetIds()
 * @method $this withDeploymentSetIds($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class DescribeDeploymentSets extends V20140526Rpc
{
}

/**
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDeploymentSetName()
 * @method $this withDeploymentSetName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDeploymentSetAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeInstanceKeyPairInfo extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getKeyPairNames()
 * @method $this withKeyPairNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteKeyPairs extends V20140526Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getKeyPairFingerPrint()
 * @method $this withKeyPairFingerPrint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeKeyPairs extends V20140526Rpc
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
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachKeyPair extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPublicKeyBody()
 * @method $this withPublicKeyBody($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ImportKeyPair extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachKeyPair extends V20140526Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateKeyPair extends V20140526Rpc
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
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceAutoRenewAttribute extends V20140526Rpc
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
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeInstanceAutoRenewAttribute extends V20140526Rpc
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
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceAutoReleaseTime extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StaticEipFillParams extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StaticEipNotifyPaid extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

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
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeForwardTables extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserData extends V20140526Rpc
{
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
class DescribeNewProjectEipMonitorData extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
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
class ModifyForwardEntry extends V20140526Rpc
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
class RemoveBandwidthPackageIps extends V20140526Rpc
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
class DescribeBandwidthPackages extends V20140526Rpc
{
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeForwardTableEntries extends V20140526Rpc
{
}

/**
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
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeNatGateways extends V20140526Rpc
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
class ModifyBandwidthPackageSpec extends V20140526Rpc
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getBandwidthPackage()
 */
class CreateNatGateway extends V20140526Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBandwidthPackage extends V20140526Rpc
{
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
class DeleteForwardEntry extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNatGateway extends V20140526Rpc
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
class AddBandwidthPackageIps extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForwardTableId()
 * @method $this withForwardTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 */
class CreateForwardEntry extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EipFillProduct extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getSnapshotLinkIds()
 * @method $this withSnapshotLinkIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSnapshotLinks extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EipNotifyPaid extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getData()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EipFillParams extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDiskIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelAutoSnapshotPolicy extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskIds($value)
    {
        $this->data['DiskIds'] = $value;
        $this->options['query']['diskIds'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class CreateAutoSnapshotPolicy extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimePoints($value)
    {
        $this->data['TimePoints'] = $value;
        $this->options['query']['timePoints'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetentionDays($value)
    {
        $this->data['RetentionDays'] = $value;
        $this->options['query']['retentionDays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepeatWeekdays($value)
    {
        $this->data['RepeatWeekdays'] = $value;
        $this->options['query']['repeatWeekdays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyName($value)
    {
        $this->data['AutoSnapshotPolicyName'] = $value;
        $this->options['query']['autoSnapshotPolicyName'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoSnapshotPolicyId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAutoSnapshotPolicy extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAutoSnapshotPolicyEx extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoSnapshotPolicyId()
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class ModifyAutoSnapshotPolicyEx extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimePoints($value)
    {
        $this->data['TimePoints'] = $value;
        $this->options['query']['timePoints'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetentionDays($value)
    {
        $this->data['RetentionDays'] = $value;
        $this->options['query']['retentionDays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepeatWeekdays($value)
    {
        $this->data['RepeatWeekdays'] = $value;
        $this->options['query']['repeatWeekdays'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyName($value)
    {
        $this->data['AutoSnapshotPolicyName'] = $value;
        $this->options['query']['autoSnapshotPolicyName'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoSnapshotPolicyId()
 * @method string getDiskIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ApplyAutoSnapshotPolicy extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($value)
    {
        $this->data['AutoSnapshotPolicyId'] = $value;
        $this->options['query']['autoSnapshotPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDiskIds($value)
    {
        $this->data['DiskIds'] = $value;
        $this->options['query']['diskIds'] = $value;

        return $this;
    }
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeImageSupportInstanceTypes extends V20140526Rpc
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
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TerminateVirtualBorderRouter extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 */
class ModifyVirtualBorderRouterAttribute extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RecoverVirtualBorderRouter extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TerminatePhysicalConnection extends V20140526Rpc
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
class DescribeVirtualBorderRouters extends V20140526Rpc
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
class DescribeVirtualBorderRoutersForPhysicalConnection extends V20140526Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnablePhysicalConnection extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 */
class ModifyPhysicalConnectionAttribute extends V20140526Rpc
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
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccessPoints extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribePhysicalConnections extends V20140526Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePhysicalConnection extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVirtualBorderRouter extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 */
class CreatePhysicalConnection extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 */
class CreateVirtualBorderRouter extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelPhysicalConnection extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTaskAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 */
class DescribeTasks extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOSSPrefix()
 * @method $this withOSSPrefix($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getEnableCompress()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 */
class ExportImage extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableCompress($value)
    {
        $this->data['EnableCompress'] = $value;
        $this->options['query']['enableCompress'] = $value;

        return $this;
    }
}

/**
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 */
class ImportImage extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDiskDeviceMapping(array $value)
    {
        $this->data['DiskDeviceMapping'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.OSSBucket'] = $value[$i]['OSSBucket'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.DiskImSize'] = $value[$i]['DiskImSize'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Format'] = $value[$i]['Format'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $value[$i]['Device'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.OSSObject'] = $value[$i]['OSSObject'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.DiskImageSize'] = $value[$i]['DiskImageSize'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class CancelTask extends V20140526Rpc
{
}

/**
 * @method string getGeneration()
 * @method $this withGeneration($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceTypeFamilies extends V20140526Rpc
{
}

/**
 * @method string getOppositeRouterId()
 * @method $this withOppositeRouterId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
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
class ModifyRouterInterfaceAttribute extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 */
class ModifyRouterInterfaceSpec extends V20140526Rpc
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
class ActivateRouterInterface extends V20140526Rpc
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
class ConnectRouterInterface extends V20140526Rpc
{
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
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
class CreateRouterInterface extends V20140526Rpc
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
class DeactivateRouterInterface extends V20140526Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouterInterface extends V20140526Rpc
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
class DescribeRouterInterfaces extends V20140526Rpc
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeHaVips extends V20140526Rpc
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
class ModifyHaVipAttribute extends V20140526Rpc
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
class UnassociateHaVip extends V20140526Rpc
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
class CreateHaVip extends V20140526Rpc
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
class DeleteHaVip extends V20140526Rpc
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
class AssociateHaVip extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
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
class RenewInstance extends V20140526Rpc
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
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateEipAddress extends V20140526Rpc
{
}

/**
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocatePublicIpAddress extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateEipAddress extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getDestGroupId()
 * @method $this withDestGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestGroupOwnerAccount()
 * @method $this withDestGroupOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getDestGroupOwnerId()
 * @method $this withDestGroupOwnerId($value)
 */
class AuthorizeSecurityGroupEgress extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceGroupOwnerId()
 * @method $this withSourceGroupOwnerId($value)
 * @method string getSourceGroupOwnerAccount()
 * @method $this withSourceGroupOwnerAccount($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 */
class AuthorizeSecurityGroup extends V20140526Rpc
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
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDevice()
 * @method $this withDevice($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 */
class AttachDisk extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCopyImage extends V20140526Rpc
{
}

/**
 * @method array getDiskDeviceMapping()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
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
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getImageVersion()
 * @method $this withImageVersion($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 */
class CreateImage extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDiskDeviceMapping(array $value)
    {
        $this->data['DiskDeviceMapping'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.SnapshotId'] = $value[$i]['SnapshotId'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Size'] = $value[$i]['Size'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
            $this->options['query']['DiskDeviceMapping.' . ($i + 1) . '.Device'] = $value[$i]['Device'];
        }

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
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
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
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getTag()
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 */
class CreateDisk extends V20140526Rpc
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
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationImageName()
 * @method $this withDestinationImageName($value)
 * @method string getDestinationRegionId()
 * @method $this withDestinationRegionId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method array getTag()
 * @method string getKmsKeyId()
 * @method $this withKmsKeyId($value)
 * @method string getDestinationDescription()
 * @method $this withDestinationDescription($value)
 */
class CopyImage extends V20140526Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method array getTag()
 */
class CreateSecurityGroup extends V20140526Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method array getNextHopList()
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class CreateRouteEntry extends V20140526Rpc
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
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method array getTag()
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getNodeControllerId()
 * @method $this withNodeControllerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCapacityReservationPreference()
 * @method $this withCapacityReservationPreference($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getUseAdditionalService()
 * @method $this withUseAdditionalService($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getSpotInterruptionBehavior()
 * @method $this withSpotInterruptionBehavior($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getCapacityReservationId()
 * @method $this withCapacityReservationId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHibernationConfigured()
 * @method $this withHibernationConfigured($value)
 * @method array getArn()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getInnerIpAddress()
 * @method $this withInnerIpAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method array getDataDisk()
 * @method string getSystemDiskSize()
 * @method string getSystemDiskDescription()
 */
class CreateInstance extends V20140526Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withArn(array $value)
    {
        $this->data['Arn'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Arn.' . ($i + 1) . '.Rolearn'] = $value[$i]['Rolearn'];
            $this->options['query']['Arn.' . ($i + 1) . '.RoleType'] = $value[$i]['RoleType'];
            $this->options['query']['Arn.' . ($i + 1) . '.AssumeRoleFor'] = $value[$i]['AssumeRoleFor'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDiskName($value)
    {
        $this->data['SystemDiskDiskName'] = $value;
        $this->options['query']['SystemDisk.DiskName'] = $value;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDataDisk(array $value)
    {
        $this->data['DataDisk'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DataDisk.' . ($i + 1) . '.DiskName'] = $value[$i]['DiskName'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $value[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $value[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Encrypted'] = $value[$i]['Encrypted'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Description'] = $value[$i]['Description'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.KMSKeyId'] = $value[$i]['KMSKeyId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Device'] = $value[$i]['Device'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $value[$i]['DeleteWithInstance'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskDescription($value)
    {
        $this->data['SystemDiskDescription'] = $value;
        $this->options['query']['SystemDisk.Description'] = $value;

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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateVSwitch extends V20140526Rpc
{
}

/**
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateVpc extends V20140526Rpc
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
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceSnapshotId()
 * @method $this withSourceSnapshotId($value)
 * @method string getRemoveSourceSnapshot()
 * @method $this withRemoveSourceSnapshot($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method array getTag()
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class CreateSnapshot extends V20140526Rpc
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
class DeleteRouteEntry extends V20140526Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTerminateSubscription()
 * @method $this withTerminateSubscription($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteInstance extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteImage extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDisk extends V20140526Rpc
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
class DeleteVSwitch extends V20140526Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpc extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSnapshot extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSecurityGroup extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDiskMonitorData extends V20140526Rpc
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
 */
class DescribeClusters extends V20140526Rpc
{
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
class DescribeEipMonitorData extends V20140526Rpc
{
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
 * @method string getEipAddress()
 * @method $this withEipAddress($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEipAddresses extends V20140526Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getFilter2Value()
 * @method string getAutoSnapshotPolicyId()
 * @method $this withAutoSnapshotPolicyId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getDeleteAutoSnapshot()
 * @method $this withDeleteAutoSnapshot($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDiskChargeType()
 * @method $this withDiskChargeType($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method array getTag()
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getEnableAutoSnapshot()
 * @method $this withEnableAutoSnapshot($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getFilter1Value()
 * @method string getPortable()
 * @method $this withPortable($value)
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method $this withEnableAutomatedSnapshotPolicy($value)
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method array getAdditionalAttributes()
 * @method string getEnableShared()
 * @method $this withEnableShared($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDisks extends V20140526Rpc
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
     * @param array $value
     *
     * @return $this
     */
    public function withAdditionalAttributes(array $value)
    {
        $this->data['AdditionalAttributes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
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
class DescribeImageSharePermission extends V20140526Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIsSupportIoOptimized()
 * @method $this withIsSupportIoOptimized($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getIsSupportCloudinit()
 * @method $this withIsSupportCloudinit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getShowExpired()
 * @method $this withShowExpired($value)
 * @method string getOSType()
 * @method $this withOSType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFilter()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeImages extends V20140526Rpc
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

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Filter.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getInnerIpAddresses()
 * @method $this withInnerIpAddresses($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPrivateIpAddresses()
 * @method $this withPrivateIpAddresses($value)
 * @method string getHpcClusterId()
 * @method $this withHpcClusterId($value)
 * @method string getFilter2Value()
 * @method string getFilter4Value()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getFilter4Key()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getFilter1Key()
 * @method string getRdmaIpAddresses()
 * @method $this withRdmaIpAddresses($value)
 * @method string getDeviceAvailable()
 * @method $this withDeviceAvailable($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPublicIpAddresses()
 * @method $this withPublicIpAddresses($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getFilter3Value()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getFilter1Value()
 * @method string getNeedSaleCycle()
 * @method $this withNeedSaleCycle($value)
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEipAddresses()
 * @method $this withEipAddresses($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getFilter3Key()
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeInstances extends V20140526Rpc
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
    public function withFilter4Value($value)
    {
        $this->data['Filter4Value'] = $value;
        $this->options['query']['Filter.4.Value'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter4Key($value)
    {
        $this->data['Filter4Key'] = $value;
        $this->options['query']['Filter.4.Key'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter3Value($value)
    {
        $this->data['Filter3Value'] = $value;
        $this->options['query']['Filter.3.Value'] = $value;

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
    public function withFilter3Key($value)
    {
        $this->data['Filter3Key'] = $value;
        $this->options['query']['Filter.3.Key'] = $value;

        return $this;
    }
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstancePhysicalAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceMonitorData extends V20140526Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceVncPasswd extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceTypes extends V20140526Rpc
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
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeInstanceStatus extends V20140526Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceVncUrl extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class DescribeSecurityGroupAttribute extends V20140526Rpc
{
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getRouterType()
 * @method $this withRouterType($value)
 * @method string getRouteTableName()
 * @method $this withRouteTableName($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 */
class DescribeRouteTables extends V20140526Rpc
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
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeRegions extends V20140526Rpc
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
class DescribeVpcs extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFilter2Value()
 * @method string getSnapshotIds()
 * @method $this withSnapshotIds($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getSnapshotLinkId()
 * @method $this withSnapshotLinkId($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getFilter1Key()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceDiskType()
 * @method $this withSourceDiskType($value)
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getSnapshotType()
 * @method $this withSnapshotType($value)
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSnapshots extends V20140526Rpc
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getFuzzyQuery()
 * @method $this withFuzzyQuery($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getIsQueryEcsCount()
 * @method $this withIsQueryEcsCount($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupIds()
 * @method $this withSecurityGroupIds($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 */
class DescribeSecurityGroups extends V20140526Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachDisk extends V20140526Rpc
{
}

/**
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
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
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 */
class DescribeZones extends V20140526Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 */
class DescribeVSwitches extends V20140526Rpc
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
class DescribeVRouters extends V20140526Rpc
{
}

/**
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getDeleteAutoSnapshot()
 * @method $this withDeleteAutoSnapshot($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEnableAutoSnapshot()
 * @method $this withEnableAutoSnapshot($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 */
class ModifyDiskAttribute extends V20140526Rpc
{
}

/**
 * @method string getDataDiskPolicyEnabled()
 * @method $this withDataDiskPolicyEnabled($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskPolicyRetentionDays()
 * @method $this withDataDiskPolicyRetentionDays($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSystemDiskPolicyRetentionLastWeek()
 * @method $this withSystemDiskPolicyRetentionLastWeek($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskPolicyTimePeriod()
 * @method $this withSystemDiskPolicyTimePeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataDiskPolicyRetentionLastWeek()
 * @method $this withDataDiskPolicyRetentionLastWeek($value)
 * @method string getSystemDiskPolicyRetentionDays()
 * @method $this withSystemDiskPolicyRetentionDays($value)
 * @method string getDataDiskPolicyTimePeriod()
 * @method $this withDataDiskPolicyTimePeriod($value)
 * @method string getSystemDiskPolicyEnabled()
 * @method $this withSystemDiskPolicyEnabled($value)
 */
class ModifyAutoSnapshotPolicy extends V20140526Rpc
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
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class LeaveSecurityGroup extends V20140526Rpc
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
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class JoinSecurityGroup extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getAddGroup1()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRemoveGroup1()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyImageShareGroupPermission extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddGroup1($value)
    {
        $this->data['AddGroup1'] = $value;
        $this->options['query']['AddGroup.1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemoveGroup1($value)
    {
        $this->data['RemoveGroup1'] = $value;
        $this->options['query']['RemoveGroup.1'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyImageAttribute extends V20140526Rpc
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
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyEipAddressAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAllowMigrateAcrossZone()
 * @method $this withAllowMigrateAcrossZone($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemporaryInternetMaxBandwidthOut()
 * @method string getSystemDiskCategory()
 * @method string getTemporaryStartTime()
 * @method string getAsync()
 * @method $this withAsync($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTemporaryEndTime()
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 */
class ModifyInstanceSpec extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemporaryInternetMaxBandwidthOut($value)
    {
        $this->data['TemporaryInternetMaxBandwidthOut'] = $value;
        $this->options['query']['Temporary.InternetMaxBandwidthOut'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskCategory($value)
    {
        $this->data['SystemDiskCategory'] = $value;
        $this->options['query']['SystemDisk.Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemporaryStartTime($value)
    {
        $this->data['TemporaryStartTime'] = $value;
        $this->options['query']['Temporary.StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemporaryEndTime($value)
    {
        $this->data['TemporaryEndTime'] = $value;
        $this->options['query']['Temporary.EndTime'] = $value;

        return $this;
    }
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
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkChargeType()
 * @method $this withNetworkChargeType($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getAllocatePublicIp()
 * @method $this withAllocatePublicIp($value)
 */
class ModifyInstanceNetworkSpec extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecyclable()
 * @method $this withRecyclable($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class ModifyInstanceAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method array getAddAccount()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getRemoveAccount()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyImageSharePermission extends V20140526Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAddAccount(array $value)
    {
        $this->data['AddAccount'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AddAccount.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRemoveAccount(array $value)
    {
        $this->data['RemoveAccount'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RemoveAccount.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceVpcAttribute extends V20140526Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVncPassword()
 * @method $this withVncPassword($value)
 */
class ModifyInstanceVncPasswd extends V20140526Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyVpcAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySnapshotAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 */
class ModifySecurityGroupAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAutoStartInstance()
 * @method $this withAutoStartInstance($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReInitDisk extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 */
class RebootInstance extends V20140526Rpc
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
 */
class ModifyVSwitchAttribute extends V20140526Rpc
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
class ModifyVRouterAttribute extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getSystemDiskSize()
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getUseAdditionalService()
 * @method $this withUseAdditionalService($value)
 * @method string getArchitecture()
 * @method $this withArchitecture($value)
 */
class ReplaceSystemDisk extends V20140526Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPublicIpAddress()
 * @method $this withPublicIpAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleasePublicIpAddress extends V20140526Rpc
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
class ReleaseEipAddress extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getDestGroupId()
 * @method $this withDestGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestGroupOwnerAccount()
 * @method $this withDestGroupOwnerAccount($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getDestGroupOwnerId()
 * @method $this withDestGroupOwnerId($value)
 */
class RevokeSecurityGroupEgress extends V20140526Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceGroupOwnerId()
 * @method $this withSourceGroupOwnerId($value)
 * @method string getSourceGroupOwnerAccount()
 * @method $this withSourceGroupOwnerAccount($value)
 * @method string getIpv6DestCidrIp()
 * @method $this withIpv6DestCidrIp($value)
 * @method string getIpv6SourceCidrIp()
 * @method $this withIpv6SourceCidrIp($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 */
class RevokeSecurityGroup extends V20140526Rpc
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
 * @method string getNewSize()
 * @method $this withNewSize($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class ResizeDisk extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetDisk extends V20140526Rpc
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
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateEipAddress extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConfirmStop()
 * @method $this withConfirmStop($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStoppedMode()
 * @method $this withStoppedMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHibernate()
 * @method $this withHibernate($value)
 * @method string getForceStop()
 * @method $this withForceStop($value)
 */
class StopInstance extends V20140526Rpc
{
}

/**
 * @method string getSourceRegionId()
 * @method $this withSourceRegionId($value)
 * @method string getInitLocalDisk()
 * @method $this withInitLocalDisk($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartInstance extends V20140526Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeTags extends V20140526Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeResourceByTags extends V20140526Rpc
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
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class AddTags extends V20140526Rpc
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
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class RemoveTags extends V20140526Rpc
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
