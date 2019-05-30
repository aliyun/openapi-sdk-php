<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ReportInstancesStatus reportInstancesStatus(array $options = [])
 * @method ModifyFleet modifyFleet(array $options = [])
 * @method DescribeFleets describeFleets(array $options = [])
 * @method DescribeFleetInstances describeFleetInstances(array $options = [])
 * @method DescribeFleetHistory describeFleetHistory(array $options = [])
 * @method DeleteFleet deleteFleet(array $options = [])
 * @method CreateFleet createFleet(array $options = [])
 * @method ModifyReservedInstanceAttribute modifyReservedInstanceAttribute(array $options = [])
 * @method PurchaseReservedInstancesOffering purchaseReservedInstancesOffering(array $options = [])
 * @method ModifyReservedInstances modifyReservedInstances(array $options = [])
 * @method DescribeReservedInstances describeReservedInstances(array $options = [])
 * @method DescribeDemands describeDemands(array $options = [])
 * @method ImportSnapshot importSnapshot(array $options = [])
 * @method ExportSnapshot exportSnapshot(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method AcceptInquiredSystemEvent acceptInquiredSystemEvent(array $options = [])
 * @method RedeployInstance redeployInstance(array $options = [])
 * @method UnassignIpv6Addresses unassignIpv6Addresses(array $options = [])
 * @method AssignIpv6Addresses assignIpv6Addresses(array $options = [])
 * @method DescribeInstanceTopology describeInstanceTopology(array $options = [])
 * @method RenewDedicatedHosts renewDedicatedHosts(array $options = [])
 * @method ReleaseDedicatedHost releaseDedicatedHost(array $options = [])
 * @method ModifyInstanceDeployment modifyInstanceDeployment(array $options = [])
 * @method ModifyDedicatedHostAutoRenewAttribute modifyDedicatedHostAutoRenewAttribute(array $options = [])
 * @method ModifyDedicatedHostAutoReleaseTime modifyDedicatedHostAutoReleaseTime(array $options = [])
 * @method ModifyDedicatedHostAttribute modifyDedicatedHostAttribute(array $options = [])
 * @method DescribeDedicatedHosts describeDedicatedHosts(array $options = [])
 * @method DescribeDedicatedHostTypes describeDedicatedHostTypes(array $options = [])
 * @method DescribeDedicatedHostAutoRenew describeDedicatedHostAutoRenew(array $options = [])
 * @method AllocateDedicatedHosts allocateDedicatedHosts(array $options = [])
 * @method CreateSimulatedSystemEvents createSimulatedSystemEvents(array $options = [])
 * @method CancelSimulatedSystemEvents cancelSimulatedSystemEvents(array $options = [])
 * @method DescribeEniMonitorData describeEniMonitorData(array $options = [])
 * @method DescribeAccountAttributes describeAccountAttributes(array $options = [])
 * @method ModifyLaunchTemplateDefaultVersion modifyLaunchTemplateDefaultVersion(array $options = [])
 * @method DescribeLaunchTemplates describeLaunchTemplates(array $options = [])
 * @method DescribeLaunchTemplateVersions describeLaunchTemplateVersions(array $options = [])
 * @method DeleteLaunchTemplateVersion deleteLaunchTemplateVersion(array $options = [])
 * @method DeleteLaunchTemplate deleteLaunchTemplate(array $options = [])
 * @method CreateLaunchTemplateVersion createLaunchTemplateVersion(array $options = [])
 * @method CreateLaunchTemplate createLaunchTemplate(array $options = [])
 * @method InstallCloudAssistant installCloudAssistant(array $options = [])
 * @method DescribeCloudAssistantStatus describeCloudAssistantStatus(array $options = [])
 * @method UnassignPrivateIpAddresses unassignPrivateIpAddresses(array $options = [])
 * @method AssignPrivateIpAddresses assignPrivateIpAddresses(array $options = [])
 * @method DescribeNetworkInterfacePermissions describeNetworkInterfacePermissions(array $options = [])
 * @method DeleteNetworkInterfacePermission deleteNetworkInterfacePermission(array $options = [])
 * @method CreateNetworkInterfacePermission createNetworkInterfacePermission(array $options = [])
 * @method GetInstanceScreenshot getInstanceScreenshot(array $options = [])
 * @method GetInstanceConsoleOutput getInstanceConsoleOutput(array $options = [])
 * @method DescribeResourcesModification describeResourcesModification(array $options = [])
 * @method DescribeBandwidthLimitation describeBandwidthLimitation(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method ReActivateInstances reActivateInstances(array $options = [])
 * @method DescribeInstancesFullStatus describeInstancesFullStatus(array $options = [])
 * @method DescribeInstanceHistoryEvents describeInstanceHistoryEvents(array $options = [])
 * @method DescribeDisksFullStatus describeDisksFullStatus(array $options = [])
 * @method ModifyUserBusinessBehavior modifyUserBusinessBehavior(array $options = [])
 * @method DescribeUserBusinessBehavior describeUserBusinessBehavior(array $options = [])
 * @method RunInstances runInstances(array $options = [])
 * @method ConvertNatPublicIpToEip convertNatPublicIpToEip(array $options = [])
 * @method ModifyHpcClusterAttribute modifyHpcClusterAttribute(array $options = [])
 * @method DescribeHpcClusters describeHpcClusters(array $options = [])
 * @method DeleteHpcCluster deleteHpcCluster(array $options = [])
 * @method CreateHpcCluster createHpcCluster(array $options = [])
 * @method DescribeSnapshotsUsage describeSnapshotsUsage(array $options = [])
 * @method DescribeSpotPriceHistory describeSpotPriceHistory(array $options = [])
 * @method StopInvocation stopInvocation(array $options = [])
 * @method ModifyCommand modifyCommand(array $options = [])
 * @method InvokeCommand invokeCommand(array $options = [])
 * @method DescribeInvocations describeInvocations(array $options = [])
 * @method DescribeInvocationResults describeInvocationResults(array $options = [])
 * @method DescribeCommands describeCommands(array $options = [])
 * @method DeleteCommand deleteCommand(array $options = [])
 * @method CreateCommand createCommand(array $options = [])
 * @method ModifySecurityGroupEgressRule modifySecurityGroupEgressRule(array $options = [])
 * @method ModifyDiskChargeType modifyDiskChargeType(array $options = [])
 * @method ModifyNetworkInterfaceAttribute modifyNetworkInterfaceAttribute(array $options = [])
 * @method DetachNetworkInterface detachNetworkInterface(array $options = [])
 * @method DescribeNetworkInterfaces describeNetworkInterfaces(array $options = [])
 * @method DeleteNetworkInterface deleteNetworkInterface(array $options = [])
 * @method CreateNetworkInterface createNetworkInterface(array $options = [])
 * @method AttachNetworkInterface attachNetworkInterface(array $options = [])
 * @method DescribeRecommendInstanceType describeRecommendInstanceType(array $options = [])
 * @method ModifyPrepayInstanceSpec modifyPrepayInstanceSpec(array $options = [])
 * @method ModifyInstanceChargeType modifyInstanceChargeType(array $options = [])
 * @method JoinResourceGroup joinResourceGroup(array $options = [])
 * @method ModifySecurityGroupPolicy modifySecurityGroupPolicy(array $options = [])
 * @method DescribeSecurityGroupReferences describeSecurityGroupReferences(array $options = [])
 * @method DetachClassicLinkVpc detachClassicLinkVpc(array $options = [])
 * @method DescribeClassicLinkInstances describeClassicLinkInstances(array $options = [])
 * @method AttachClassicLinkVpc attachClassicLinkVpc(array $options = [])
 * @method DetachInstanceRamRole detachInstanceRamRole(array $options = [])
 * @method DescribeInstanceRamRole describeInstanceRamRole(array $options = [])
 * @method AttachInstanceRamRole attachInstanceRamRole(array $options = [])
 * @method DescribeSnapshotPackage describeSnapshotPackage(array $options = [])
 * @method ModifySecurityGroupRule modifySecurityGroupRule(array $options = [])
 * @method DescribeSnapshotMonitorData describeSnapshotMonitorData(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method ModifyDeploymentSetAttribute modifyDeploymentSetAttribute(array $options = [])
 * @method DescribeDeploymentSets describeDeploymentSets(array $options = [])
 * @method DeleteDeploymentSet deleteDeploymentSet(array $options = [])
 * @method CreateDeploymentSet createDeploymentSet(array $options = [])
 * @method ImportKeyPair importKeyPair(array $options = [])
 * @method DetachKeyPair detachKeyPair(array $options = [])
 * @method DescribeKeyPairs describeKeyPairs(array $options = [])
 * @method DeleteKeyPairs deleteKeyPairs(array $options = [])
 * @method CreateKeyPair createKeyPair(array $options = [])
 * @method AttachKeyPair attachKeyPair(array $options = [])
 * @method ModifyInstanceAutoRenewAttribute modifyInstanceAutoRenewAttribute(array $options = [])
 * @method DescribeInstanceAutoRenewAttribute describeInstanceAutoRenewAttribute(array $options = [])
 * @method DescribeSnapshotLinks describeSnapshotLinks(array $options = [])
 * @method ModifyInstanceAutoReleaseTime modifyInstanceAutoReleaseTime(array $options = [])
 * @method DescribeNewProjectEipMonitorData describeNewProjectEipMonitorData(array $options = [])
 * @method DescribeUserData describeUserData(array $options = [])
 * @method RemoveBandwidthPackageIps removeBandwidthPackageIps(array $options = [])
 * @method ModifyForwardEntry modifyForwardEntry(array $options = [])
 * @method ModifyBandwidthPackageSpec modifyBandwidthPackageSpec(array $options = [])
 * @method DescribeNatGateways describeNatGateways(array $options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries(array $options = [])
 * @method DescribeBandwidthPackages describeBandwidthPackages(array $options = [])
 * @method DeleteNatGateway deleteNatGateway(array $options = [])
 * @method DeleteForwardEntry deleteForwardEntry(array $options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage(array $options = [])
 * @method CreateNatGateway createNatGateway(array $options = [])
 * @method CreateForwardEntry createForwardEntry(array $options = [])
 * @method AddBandwidthPackageIps addBandwidthPackageIps(array $options = [])
 * @method EipFillProduct eipFillProduct(array $options = [])
 * @method EipNotifyPaid eipNotifyPaid(array $options = [])
 * @method EipFillParams eipFillParams(array $options = [])
 * @method ModifyAutoSnapshotPolicyEx modifyAutoSnapshotPolicyEx(array $options = [])
 * @method DescribeAutoSnapshotPolicyEx describeAutoSnapshotPolicyEx(array $options = [])
 * @method DeleteAutoSnapshotPolicy deleteAutoSnapshotPolicy(array $options = [])
 * @method CreateAutoSnapshotPolicy createAutoSnapshotPolicy(array $options = [])
 * @method CancelAutoSnapshotPolicy cancelAutoSnapshotPolicy(array $options = [])
 * @method ApplyAutoSnapshotPolicy applyAutoSnapshotPolicy(array $options = [])
 * @method DescribeImageSupportInstanceTypes describeImageSupportInstanceTypes(array $options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter(array $options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection(array $options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter(array $options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute(array $options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute(array $options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection(array $options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection(array $options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters(array $options = [])
 * @method DescribePhysicalConnections describePhysicalConnections(array $options = [])
 * @method DescribeAccessPoints describeAccessPoints(array $options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter(array $options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection(array $options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter(array $options = [])
 * @method CreatePhysicalConnection createPhysicalConnection(array $options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection(array $options = [])
 * @method ImportImage importImage(array $options = [])
 * @method ExportImage exportImage(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeTaskAttribute describeTaskAttribute(array $options = [])
 * @method CancelTask cancelTask(array $options = [])
 * @method DescribeInstanceTypeFamilies describeInstanceTypeFamilies(array $options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec(array $options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute(array $options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces(array $options = [])
 * @method DeleteRouterInterface deleteRouterInterface(array $options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface(array $options = [])
 * @method CreateRouterInterface createRouterInterface(array $options = [])
 * @method ConnectRouterInterface connectRouterInterface(array $options = [])
 * @method ActivateRouterInterface activateRouterInterface(array $options = [])
 * @method UnassociateHaVip unassociateHaVip(array $options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute(array $options = [])
 * @method DescribeHaVips describeHaVips(array $options = [])
 * @method DeleteHaVip deleteHaVip(array $options = [])
 * @method CreateHaVip createHaVip(array $options = [])
 * @method AssociateHaVip associateHaVip(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RemoveTags removeTags(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeResourceByTags describeResourceByTags(array $options = [])
 * @method AddTags addTags(array $options = [])
 * @method UnassociateEipAddress unassociateEipAddress(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method RevokeSecurityGroupEgress revokeSecurityGroupEgress(array $options = [])
 * @method RevokeSecurityGroup revokeSecurityGroup(array $options = [])
 * @method ResizeDisk resizeDisk(array $options = [])
 * @method ResetDisk resetDisk(array $options = [])
 * @method ReplaceSystemDisk replaceSystemDisk(array $options = [])
 * @method ReleasePublicIpAddress releasePublicIpAddress(array $options = [])
 * @method ReleaseEipAddress releaseEipAddress(array $options = [])
 * @method ReInitDisk reInitDisk(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute(array $options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute(array $options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute(array $options = [])
 * @method ModifySnapshotAttribute modifySnapshotAttribute(array $options = [])
 * @method ModifySecurityGroupAttribute modifySecurityGroupAttribute(array $options = [])
 * @method ModifyInstanceVpcAttribute modifyInstanceVpcAttribute(array $options = [])
 * @method ModifyInstanceVncPasswd modifyInstanceVncPasswd(array $options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec(array $options = [])
 * @method ModifyInstanceNetworkSpec modifyInstanceNetworkSpec(array $options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute(array $options = [])
 * @method ModifyImageSharePermission modifyImageSharePermission(array $options = [])
 * @method ModifyImageShareGroupPermission modifyImageShareGroupPermission(array $options = [])
 * @method ModifyImageAttribute modifyImageAttribute(array $options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute(array $options = [])
 * @method ModifyDiskAttribute modifyDiskAttribute(array $options = [])
 * @method ModifyAutoSnapshotPolicy modifyAutoSnapshotPolicy(array $options = [])
 * @method LeaveSecurityGroup leaveSecurityGroup(array $options = [])
 * @method JoinSecurityGroup joinSecurityGroup(array $options = [])
 * @method DetachDisk detachDisk(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeVRouters describeVRouters(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeSnapshots describeSnapshots(array $options = [])
 * @method DescribeSecurityGroups describeSecurityGroups(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method DescribeRouteTables describeRouteTables(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeLimitation describeLimitation(array $options = [])
 * @method DescribeInstanceVncUrl describeInstanceVncUrl(array $options = [])
 * @method DescribeInstanceVncPasswd describeInstanceVncPasswd(array $options = [])
 * @method DescribeInstanceTypes describeInstanceTypes(array $options = [])
 * @method DescribeInstanceStatus describeInstanceStatus(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstancePhysicalAttribute describeInstancePhysicalAttribute(array $options = [])
 * @method DescribeInstanceMonitorData describeInstanceMonitorData(array $options = [])
 * @method DescribeInstanceAttribute describeInstanceAttribute(array $options = [])
 * @method DescribeImageSharePermission describeImageSharePermission(array $options = [])
 * @method DescribeImages describeImages(array $options = [])
 * @method DescribeEipMonitorData describeEipMonitorData(array $options = [])
 * @method DescribeEipAddresses describeEipAddresses(array $options = [])
 * @method DescribeDisks describeDisks(array $options = [])
 * @method DescribeDiskMonitorData describeDiskMonitorData(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DeleteVSwitch deleteVSwitch(array $options = [])
 * @method DeleteVpc deleteVpc(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DeleteSecurityGroup deleteSecurityGroup(array $options = [])
 * @method DeleteRouteEntry deleteRouteEntry(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteDisk deleteDisk(array $options = [])
 * @method CreateVSwitch createVSwitch(array $options = [])
 * @method CreateVpc createVpc(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method CreateSecurityGroup createSecurityGroup(array $options = [])
 * @method CreateRouteEntry createRouteEntry(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateImage createImage(array $options = [])
 * @method CreateDisk createDisk(array $options = [])
 * @method CopyImage copyImage(array $options = [])
 * @method CancelCopyImage cancelCopyImage(array $options = [])
 * @method AuthorizeSecurityGroupEgress authorizeSecurityGroupEgress(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method AttachDisk attachDisk(array $options = [])
 * @method AssociateEipAddress associateEipAddress(array $options = [])
 * @method AllocatePublicIpAddress allocatePublicIpAddress(array $options = [])
 * @method AllocateEipAddress allocateEipAddress(array $options = [])
 */
class EcsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getDiskId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 * @method array getDevice()
 */
class ReportInstancesStatus extends Rpc
{

    /**
     * @param array $diskId
     *
     * @return $this
     */
    public function withDiskId(array $diskId)
    {
        $this->data['DiskId'] = $diskId;
        foreach ($diskId as $i => $iValue) {
            $this->options['query']['DiskId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $device
     *
     * @return $this
     */
    public function withDevice(array $device)
    {
        $this->data['Device'] = $device;
        foreach ($device as $i => $iValue) {
            $this->options['query']['Device.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerminateInstancesWithExpiration()
 * @method $this withTerminateInstancesWithExpiration($value)
 * @method string getOnDemandTargetCapacity()
 * @method $this withOnDemandTargetCapacity($value)
 * @method string getDefaultTargetCapacityType()
 * @method $this withDefaultTargetCapacityType($value)
 * @method string getExcessCapacityTerminationPolicy()
 * @method $this withExcessCapacityTerminationPolicy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFleetId()
 * @method $this withFleetId($value)
 * @method string getTotalTargetCapacity()
 * @method $this withTotalTargetCapacity($value)
 * @method string getSpotTargetCapacity()
 * @method $this withSpotTargetCapacity($value)
 * @method string getMaxSpotPrice()
 * @method $this withMaxSpotPrice($value)
 */
class ModifyFleet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFleetName()
 * @method $this withFleetName($value)
 * @method array getFleetStatus()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getFleetId()
 */
class DescribeFleets extends Rpc
{

    /**
     * @param array $fleetStatus
     *
     * @return $this
     */
    public function withFleetStatus(array $fleetStatus)
    {
        $this->data['FleetStatus'] = $fleetStatus;
        foreach ($fleetStatus as $i => $iValue) {
            $this->options['query']['FleetStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $fleetId
     *
     * @return $this
     */
    public function withFleetId(array $fleetId)
    {
        $this->data['FleetId'] = $fleetId;
        foreach ($fleetId as $i => $iValue) {
            $this->options['query']['FleetId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
 * @method string getFleetId()
 * @method $this withFleetId($value)
 */
class DescribeFleetInstances extends Rpc
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
 * @method string getFleetId()
 * @method $this withFleetId($value)
 */
class DescribeFleetHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTerminateInstances()
 * @method $this withTerminateInstances($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFleetId()
 * @method $this withFleetId($value)
 */
class DeleteFleet extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFleetType()
 * @method $this withFleetType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTerminateInstancesWithExpiration()
 * @method $this withTerminateInstancesWithExpiration($value)
 * @method string getOnDemandTargetCapacity()
 * @method $this withOnDemandTargetCapacity($value)
 * @method string getFleetName()
 * @method $this withFleetName($value)
 * @method string getSpotAllocationStrategy()
 * @method $this withSpotAllocationStrategy($value)
 * @method string getTerminateInstances()
 * @method $this withTerminateInstances($value)
 * @method string getDefaultTargetCapacityType()
 * @method $this withDefaultTargetCapacityType($value)
 * @method string getExcessCapacityTerminationPolicy()
 * @method $this withExcessCapacityTerminationPolicy($value)
 * @method array getLaunchTemplateConfig()
 * @method string getValidUntil()
 * @method $this withValidUntil($value)
 * @method string getFillGapWithOnDemand()
 * @method $this withFillGapWithOnDemand($value)
 * @method string getSpotInstanceInterruptionBehavior()
 * @method $this withSpotInstanceInterruptionBehavior($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSpotInstancePoolsToUseCount()
 * @method $this withSpotInstancePoolsToUseCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getTotalTargetCapacity()
 * @method $this withTotalTargetCapacity($value)
 * @method string getOnDemandAllocationStrategy()
 * @method $this withOnDemandAllocationStrategy($value)
 * @method string getSpotTargetCapacity()
 * @method $this withSpotTargetCapacity($value)
 * @method string getValidFrom()
 * @method $this withValidFrom($value)
 * @method string getMaxSpotPrice()
 * @method $this withMaxSpotPrice($value)
 */
class CreateFleet extends Rpc
{

    /**
     * @param array $launchTemplateConfig
     *
     * @return $this
     */
    public function withLaunchTemplateConfig(array $launchTemplateConfig)
    {
        $this->data['LaunchTemplateConfig'] = $launchTemplateConfig;
        foreach ($launchTemplateConfig as $depth1 => $depth1Value) {
            $this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
            $this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
            $this->options['query']['LaunchTemplateConfig.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
        }

        return $this;
    }
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
 * @method string getReservedInstanceId()
 * @method $this withReservedInstanceId($value)
 * @method string getReservedInstanceName()
 * @method $this withReservedInstanceName($value)
 */
class ModifyReservedInstanceAttribute extends Rpc
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
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
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
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getReservedInstanceName()
 * @method $this withReservedInstanceName($value)
 * @method string getInstanceAmount()
 * @method $this withInstanceAmount($value)
 */
class PurchaseReservedInstancesOffering extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getConfiguration()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getReservedInstanceId()
 */
class ModifyReservedInstances extends Rpc
{

    /**
     * @param array $configuration
     *
     * @return $this
     */
    public function withConfiguration(array $configuration)
    {
        $this->data['Configuration'] = $configuration;
        foreach ($configuration as $depth1 => $depth1Value) {
            $this->options['query']['Configuration.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
            $this->options['query']['Configuration.' . ($depth1 + 1) . '.ReservedInstanceName'] = $depth1Value['ReservedInstanceName'];
            $this->options['query']['Configuration.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['Configuration.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
            $this->options['query']['Configuration.' . ($depth1 + 1) . '.InstanceAmount'] = $depth1Value['InstanceAmount'];
        }

        return $this;
    }

    /**
     * @param array $reservedInstanceId
     *
     * @return $this
     */
    public function withReservedInstanceId(array $reservedInstanceId)
    {
        $this->data['ReservedInstanceId'] = $reservedInstanceId;
        foreach ($reservedInstanceId as $i => $iValue) {
            $this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLockReason()
 * @method $this withLockReason($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInstanceTypeFamily()
 * @method $this withInstanceTypeFamily($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getReservedInstanceId()
 * @method string getOfferingType()
 * @method $this withOfferingType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getReservedInstanceName()
 * @method $this withReservedInstanceName($value)
 * @method array getStatus()
 */
class DescribeReservedInstances extends Rpc
{

    /**
     * @param array $reservedInstanceId
     *
     * @return $this
     */
    public function withReservedInstanceId(array $reservedInstanceId)
    {
        $this->data['ReservedInstanceId'] = $reservedInstanceId;
        foreach ($reservedInstanceId as $i => $iValue) {
            $this->options['query']['ReservedInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
    public function withStatus(array $status)
    {
        $this->data['Status'] = $status;
        foreach ($status as $i => $iValue) {
            $this->options['query']['Status.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class DescribeDemands extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $demandStatus
     *
     * @return $this
     */
    public function withDemandStatus(array $demandStatus)
    {
        $this->data['DemandStatus'] = $demandStatus;
        foreach ($demandStatus as $i => $iValue) {
            $this->options['query']['DemandStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class ImportSnapshot extends Rpc
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
class ExportSnapshot extends Rpc
{
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
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
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
class TagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
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
class ListTagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
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
class AcceptInquiredSystemEvent extends Rpc
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
class RedeployInstance extends Rpc
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
class UnassignIpv6Addresses extends Rpc
{

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
    public function withIpv6Address(array $ipv6Address)
    {
        $this->data['Ipv6Address'] = $ipv6Address;
        foreach ($ipv6Address as $i => $iValue) {
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
class AssignIpv6Addresses extends Rpc
{

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
    public function withIpv6Address(array $ipv6Address)
    {
        $this->data['Ipv6Address'] = $ipv6Address;
        foreach ($ipv6Address as $i => $iValue) {
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
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInstanceTopology extends Rpc
{
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
class RenewDedicatedHosts extends Rpc
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
class ReleaseDedicatedHost extends Rpc
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
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getAffinity()
 * @method $this withAffinity($value)
 */
class ModifyInstanceDeployment extends Rpc
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
class ModifyDedicatedHostAutoRenewAttribute extends Rpc
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
class ModifyDedicatedHostAutoReleaseTime extends Rpc
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
 * @method string getAutoPlacement()
 * @method $this withAutoPlacement($value)
 * @method string getNetworkAttributesUdpTimeout()
 */
class ModifyDedicatedHostAttribute extends Rpc
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
class DescribeDedicatedHosts extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedHostTypes extends Rpc
{
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
class DescribeDedicatedHostAutoRenew extends Rpc
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
 * @method string getAutoPlacement()
 * @method $this withAutoPlacement($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getNetworkAttributesUdpTimeout()
 */
class AllocateDedicatedHosts extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
class CreateSimulatedSystemEvents extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
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
class CancelSimulatedSystemEvents extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
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
class DescribeEniMonitorData extends Rpc
{
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
class DescribeAccountAttributes extends Rpc
{

    /**
     * @param array $attributeName
     *
     * @return $this
     */
    public function withAttributeName(array $attributeName)
    {
        $this->data['AttributeName'] = $attributeName;
        foreach ($attributeName as $i => $iValue) {
            $this->options['query']['AttributeName.' . ($i + 1)] = $iValue;
        }

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
 * @method string getDefaultVersionNumber()
 * @method $this withDefaultVersionNumber($value)
 */
class ModifyLaunchTemplateDefaultVersion extends Rpc
{
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
class DescribeLaunchTemplates extends Rpc
{

    /**
     * @param array $launchTemplateName
     *
     * @return $this
     */
    public function withLaunchTemplateName(array $launchTemplateName)
    {
        $this->data['LaunchTemplateName'] = $launchTemplateName;
        foreach ($launchTemplateName as $i => $iValue) {
            $this->options['query']['LaunchTemplateName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
    public function withTemplateTag(array $templateTag)
    {
        $this->data['TemplateTag'] = $templateTag;
        foreach ($templateTag as $depth1 => $depth1Value) {
            $this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $launchTemplateId
     *
     * @return $this
     */
    public function withLaunchTemplateId(array $launchTemplateId)
    {
        $this->data['LaunchTemplateId'] = $launchTemplateId;
        foreach ($launchTemplateId as $i => $iValue) {
            $this->options['query']['LaunchTemplateId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class DescribeLaunchTemplateVersions extends Rpc
{

    /**
     * @param array $launchTemplateVersion
     *
     * @return $this
     */
    public function withLaunchTemplateVersion(array $launchTemplateVersion)
    {
        $this->data['LaunchTemplateVersion'] = $launchTemplateVersion;
        foreach ($launchTemplateVersion as $i => $iValue) {
            $this->options['query']['LaunchTemplateVersion.' . ($i + 1)] = $iValue;
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
class DeleteLaunchTemplateVersion extends Rpc
{

    /**
     * @param array $deleteVersion
     *
     * @return $this
     */
    public function withDeleteVersion(array $deleteVersion)
    {
        $this->data['DeleteVersion'] = $deleteVersion;
        foreach ($deleteVersion as $i => $iValue) {
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
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLaunchTemplate extends Rpc
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
class CreateLaunchTemplateVersion extends Rpc
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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
     * @param array $networkInterface
     *
     * @return $this
     */
    public function withNetworkInterface(array $networkInterface)
    {
        $this->data['NetworkInterface'] = $networkInterface;
        foreach ($networkInterface as $depth1 => $depth1Value) {
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
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
     * @param array $dataDisk
     *
     * @return $this
     */
    public function withDataDisk(array $dataDisk)
    {
        $this->data['DataDisk'] = $dataDisk;
        foreach ($dataDisk as $depth1 => $depth1Value) {
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
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
class CreateLaunchTemplate extends Rpc
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
     * @param array $templateTag
     *
     * @return $this
     */
    public function withTemplateTag(array $templateTag)
    {
        $this->data['TemplateTag'] = $templateTag;
        foreach ($templateTag as $depth1 => $depth1Value) {
            $this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
     * @param array $networkInterface
     *
     * @return $this
     */
    public function withNetworkInterface(array $networkInterface)
    {
        $this->data['NetworkInterface'] = $networkInterface;
        foreach ($networkInterface as $depth1 => $depth1Value) {
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
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
     * @param array $dataDisk
     *
     * @return $this
     */
    public function withDataDisk(array $dataDisk)
    {
        $this->data['DataDisk'] = $dataDisk;
        foreach ($dataDisk as $depth1 => $depth1Value) {
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getInstanceId()
 */
class InstallCloudAssistant extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
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
class DescribeCloudAssistantStatus extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
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
 * @method array getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class UnassignPrivateIpAddresses extends Rpc
{

    /**
     * @param array $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress(array $privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        foreach ($privateIpAddress as $i => $iValue) {
            $this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
        }

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
class AssignPrivateIpAddresses extends Rpc
{

    /**
     * @param array $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress(array $privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        foreach ($privateIpAddress as $i => $iValue) {
            $this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class DescribeNetworkInterfacePermissions extends Rpc
{

    /**
     * @param array $networkInterfacePermissionId
     *
     * @return $this
     */
    public function withNetworkInterfacePermissionId(array $networkInterfacePermissionId)
    {
        $this->data['NetworkInterfacePermissionId'] = $networkInterfacePermissionId;
        foreach ($networkInterfacePermissionId as $i => $iValue) {
            $this->options['query']['NetworkInterfacePermissionId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class DeleteNetworkInterfacePermission extends Rpc
{
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
class CreateNetworkInterfacePermission extends Rpc
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
class GetInstanceScreenshot extends Rpc
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
class GetInstanceConsoleOutput extends Rpc
{
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
class DescribeResourcesModification extends Rpc
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
class DescribeBandwidthLimitation extends Rpc
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
class DescribeAvailableResource extends Rpc
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
class ReActivateInstances extends Rpc
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
class DescribeInstancesFullStatus extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
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
     * @param array $instanceEventType
     *
     * @return $this
     */
    public function withInstanceEventType(array $instanceEventType)
    {
        $this->data['InstanceEventType'] = $instanceEventType;
        foreach ($instanceEventType as $i => $iValue) {
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
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
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
class DescribeInstanceHistoryEvents extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $instanceEventCycleStatus
     *
     * @return $this
     */
    public function withInstanceEventCycleStatus(array $instanceEventCycleStatus)
    {
        $this->data['InstanceEventCycleStatus'] = $instanceEventCycleStatus;
        foreach ($instanceEventCycleStatus as $i => $iValue) {
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
     * @param array $instanceEventType
     *
     * @return $this
     */
    public function withInstanceEventType(array $instanceEventType)
    {
        $this->data['InstanceEventType'] = $instanceEventType;
        foreach ($instanceEventType as $i => $iValue) {
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
class DescribeDisksFullStatus extends Rpc
{

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
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
     * @param array $diskId
     *
     * @return $this
     */
    public function withDiskId(array $diskId)
    {
        $this->data['DiskId'] = $diskId;
        foreach ($diskId as $i => $iValue) {
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
 * @method string getStatusValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatusKey()
 */
class ModifyUserBusinessBehavior extends Rpc
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
class DescribeUserBusinessBehavior extends Rpc
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
 * @method string getMinAmount()
 * @method $this withMinAmount($value)
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
 * @method string getAffinity()
 * @method $this withAffinity($value)
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
 * @method string getTenancy()
 * @method $this withTenancy($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getDedicatedHostId()
 * @method $this withDedicatedHostId($value)
 * @method string getCreditSpecification()
 * @method $this withCreditSpecification($value)
 * @method array getSecurityGroupIds()
 * @method array getDataDisk()
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getSystemDiskSize()
 * @method string getSystemDiskDescription()
 */
class RunInstances extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
    public function withIpv6Address(array $ipv6Address)
    {
        $this->data['Ipv6Address'] = $ipv6Address;
        foreach ($ipv6Address as $i => $iValue) {
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
     * @param array $networkInterface
     *
     * @return $this
     */
    public function withNetworkInterface(array $networkInterface)
    {
        $this->data['NetworkInterface'] = $networkInterface;
        foreach ($networkInterface as $depth1 => $depth1Value) {
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
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
     * @param array $securityGroupIds
     *
     * @return $this
     */
    public function withSecurityGroupIds(array $securityGroupIds)
    {
        $this->data['SecurityGroupIds'] = $securityGroupIds;
        foreach ($securityGroupIds as $i => $iValue) {
            $this->options['query']['SecurityGroupIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
    public function withDataDisk(array $dataDisk)
    {
        $this->data['DataDisk'] = $dataDisk;
        foreach ($dataDisk as $depth1 => $depth1Value) {
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ConvertNatPublicIpToEip extends Rpc
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
class ModifyHpcClusterAttribute extends Rpc
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
class DescribeHpcClusters extends Rpc
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
class DeleteHpcCluster extends Rpc
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
class CreateHpcCluster extends Rpc
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
class DescribeSnapshotsUsage extends Rpc
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
class DescribeSpotPriceHistory extends Rpc
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
class StopInvocation extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
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
class ModifyCommand extends Rpc
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
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class InvokeCommand extends Rpc
{

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class DescribeInvocations extends Rpc
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
class DescribeInvocationResults extends Rpc
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
class DescribeCommands extends Rpc
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
class DeleteCommand extends Rpc
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
 * @method string getEnableParameter()
 * @method $this withEnableParameter($value)
 */
class CreateCommand extends Rpc
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
class ModifySecurityGroupEgressRule extends Rpc
{
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
class ModifyDiskChargeType extends Rpc
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
class ModifyNetworkInterfaceAttribute extends Rpc
{

    /**
     * @param array $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId(array $securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        foreach ($securityGroupId as $i => $iValue) {
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
class DetachNetworkInterface extends Rpc
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
class DescribeNetworkInterfaces extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param array $networkInterfaceId
     *
     * @return $this
     */
    public function withNetworkInterfaceId(array $networkInterfaceId)
    {
        $this->data['NetworkInterfaceId'] = $networkInterfaceId;
        foreach ($networkInterfaceId as $i => $iValue) {
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class DeleteNetworkInterface extends Rpc
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
class CreateNetworkInterface extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
class AttachNetworkInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getProxyId()
 */
class DescribeRecommendInstanceType extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['query']['operator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperatorType()
 * @method $this withOperatorType($value)
 * @method string getSystemDiskCategory()
 * @method string getRebootTime()
 * @method $this withRebootTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class ModifyPrepayInstanceSpec extends Rpc
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
class ModifyInstanceChargeType extends Rpc
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
class JoinResourceGroup extends Rpc
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
class ModifySecurityGroupPolicy extends Rpc
{
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
class DescribeSecurityGroupReferences extends Rpc
{

    /**
     * @param array $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId(array $securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        foreach ($securityGroupId as $i => $iValue) {
            $this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachClassicLinkVpc extends Rpc
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
class DescribeClassicLinkInstances extends Rpc
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
class AttachClassicLinkVpc extends Rpc
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
class DetachInstanceRamRole extends Rpc
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
class DescribeInstanceRamRole extends Rpc
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
class AttachInstanceRamRole extends Rpc
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
class DescribeSnapshotPackage extends Rpc
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
class ModifySecurityGroupRule extends Rpc
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
class DescribeSnapshotMonitorData extends Rpc
{
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
class DescribeRenewalPrice extends Rpc
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
class DescribePrice extends Rpc
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
class ModifyDeploymentSetAttribute extends Rpc
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
class DescribeDeploymentSets extends Rpc
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
class DeleteDeploymentSet extends Rpc
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
class CreateDeploymentSet extends Rpc
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
class ImportKeyPair extends Rpc
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
class DetachKeyPair extends Rpc
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
class DescribeKeyPairs extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
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
class DeleteKeyPairs extends Rpc
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
class CreateKeyPair extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class AttachKeyPair extends Rpc
{
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
class ModifyInstanceAutoRenewAttribute extends Rpc
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
class DescribeInstanceAutoRenewAttribute extends Rpc
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
class DescribeSnapshotLinks extends Rpc
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
class ModifyInstanceAutoReleaseTime extends Rpc
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
class DescribeNewProjectEipMonitorData extends Rpc
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
class DescribeUserData extends Rpc
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
class RemoveBandwidthPackageIps extends Rpc
{

    /**
     * @param array $removedIpAddresses
     *
     * @return $this
     */
    public function withRemovedIpAddresses(array $removedIpAddresses)
    {
        $this->data['RemovedIpAddresses'] = $removedIpAddresses;
        foreach ($removedIpAddresses as $i => $iValue) {
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
class ModifyForwardEntry extends Rpc
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
class ModifyBandwidthPackageSpec extends Rpc
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
class DescribeNatGateways extends Rpc
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
class DescribeForwardTableEntries extends Rpc
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
class DescribeBandwidthPackages extends Rpc
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
class DeleteNatGateway extends Rpc
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
class DeleteForwardEntry extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBandwidthPackage extends Rpc
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
class CreateNatGateway extends Rpc
{

    /**
     * @param array $bandwidthPackage
     *
     * @return $this
     */
    public function withBandwidthPackage(array $bandwidthPackage)
    {
        $this->data['BandwidthPackage'] = $bandwidthPackage;
        foreach ($bandwidthPackage as $depth1 => $depth1Value) {
            $this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.Bandwidth'] = $depth1Value['Bandwidth'];
            $this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.Zone'] = $depth1Value['Zone'];
            $this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.IpCount'] = $depth1Value['IpCount'];
        }

        return $this;
    }
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
class CreateForwardEntry extends Rpc
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
class AddBandwidthPackageIps extends Rpc
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
class EipFillProduct extends Rpc
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
class EipNotifyPaid extends Rpc
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
class EipFillParams extends Rpc
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
 * @method string getAutoSnapshotPolicyId()
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class ModifyAutoSnapshotPolicyEx extends Rpc
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
class DescribeAutoSnapshotPolicyEx extends Rpc
{
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
class DeleteAutoSnapshotPolicy extends Rpc
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
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class CreateAutoSnapshotPolicy extends Rpc
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
 * @method string getDiskIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelAutoSnapshotPolicy extends Rpc
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
 * @method string getAutoSnapshotPolicyId()
 * @method string getDiskIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ApplyAutoSnapshotPolicy extends Rpc
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
class DescribeImageSupportInstanceTypes extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class TerminateVirtualBorderRouter extends Rpc
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
class TerminatePhysicalConnection extends Rpc
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
class RecoverVirtualBorderRouter extends Rpc
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
class ModifyVirtualBorderRouterAttribute extends Rpc
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
class ModifyPhysicalConnectionAttribute extends Rpc
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
class EnablePhysicalConnection extends Rpc
{
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
class DescribeVirtualBorderRoutersForPhysicalConnection extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            foreach ($depth1Value['Value'] as $i => $iValue) {
                $this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVirtualBorderRouters extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            foreach ($depth1Value['Value'] as $i => $iValue) {
                $this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class DescribePhysicalConnections extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            foreach ($depth1Value['Value'] as $i => $iValue) {
                $this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccessPoints extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            foreach ($depth1Value['Value'] as $i => $iValue) {
                $this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class DeleteVirtualBorderRouter extends Rpc
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
class DeletePhysicalConnection extends Rpc
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
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 */
class CreateVirtualBorderRouter extends Rpc
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
class CreatePhysicalConnection extends Rpc
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
class CancelPhysicalConnection extends Rpc
{
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
class ImportImage extends Rpc
{

    /**
     * @param array $diskDeviceMapping
     *
     * @return $this
     */
    public function withDiskDeviceMapping(array $diskDeviceMapping)
    {
        $this->data['DiskDeviceMapping'] = $diskDeviceMapping;
        foreach ($diskDeviceMapping as $depth1 => $depth1Value) {
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.OSSBucket'] = $depth1Value['OSSBucket'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskImSize'] = $depth1Value['DiskImSize'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.OSSObject'] = $depth1Value['OSSObject'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskImageSize'] = $depth1Value['DiskImageSize'];
        }

        return $this;
    }
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getImageFormat()
 * @method $this withImageFormat($value)
 */
class ExportImage extends Rpc
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
class DescribeTasks extends Rpc
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
class DescribeTaskAttribute extends Rpc
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
class CancelTask extends Rpc
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
class DescribeInstanceTypeFamilies extends Rpc
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
class ModifyRouterInterfaceSpec extends Rpc
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
class ModifyRouterInterfaceAttribute extends Rpc
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
class DescribeRouterInterfaces extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            foreach ($depth1Value['Value'] as $i => $iValue) {
                $this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouterInterface extends Rpc
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
class DeactivateRouterInterface extends Rpc
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
class CreateRouterInterface extends Rpc
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
class ConnectRouterInterface extends Rpc
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
class ActivateRouterInterface extends Rpc
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
class UnassociateHaVip extends Rpc
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
class ModifyHaVipAttribute extends Rpc
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
class DescribeHaVips extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            foreach ($depth1Value['Value'] as $i => $iValue) {
                $this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHaVip extends Rpc
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
class CreateHaVip extends Rpc
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
class AssociateHaVip extends Rpc
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
class RenewInstance extends Rpc
{
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
class RemoveTags extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeTags extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class DescribeResourceByTags extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class AddTags extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateEipAddress extends Rpc
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
class StopInstance extends Rpc
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
class StartInstance extends Rpc
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
class RevokeSecurityGroupEgress extends Rpc
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
class RevokeSecurityGroup extends Rpc
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
class ResizeDisk extends Rpc
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
class ResetDisk extends Rpc
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
class ReplaceSystemDisk extends Rpc
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
class ReleasePublicIpAddress extends Rpc
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
class ReleaseEipAddress extends Rpc
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
class ReInitDisk extends Rpc
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
class RebootInstance extends Rpc
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
class ModifyVSwitchAttribute extends Rpc
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
class ModifyVRouterAttribute extends Rpc
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
class ModifyVpcAttribute extends Rpc
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
class ModifySnapshotAttribute extends Rpc
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
class ModifySecurityGroupAttribute extends Rpc
{
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
class ModifyInstanceVpcAttribute extends Rpc
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
class ModifyInstanceVncPasswd extends Rpc
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
class ModifyInstanceSpec extends Rpc
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
class ModifyInstanceNetworkSpec extends Rpc
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
class ModifyInstanceAttribute extends Rpc
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
class ModifyImageSharePermission extends Rpc
{

    /**
     * @param array $addAccount
     *
     * @return $this
     */
    public function withAddAccount(array $addAccount)
    {
        $this->data['AddAccount'] = $addAccount;
        foreach ($addAccount as $i => $iValue) {
            $this->options['query']['AddAccount.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $removeAccount
     *
     * @return $this
     */
    public function withRemoveAccount(array $removeAccount)
    {
        $this->data['RemoveAccount'] = $removeAccount;
        foreach ($removeAccount as $i => $iValue) {
            $this->options['query']['RemoveAccount.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class ModifyImageShareGroupPermission extends Rpc
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
class ModifyImageAttribute extends Rpc
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
class ModifyEipAddressAttribute extends Rpc
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
class ModifyDiskAttribute extends Rpc
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
class ModifyAutoSnapshotPolicy extends Rpc
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
class LeaveSecurityGroup extends Rpc
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
class JoinSecurityGroup extends Rpc
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
 */
class DetachDisk extends Rpc
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
class DescribeZones extends Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
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
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVSwitches extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeVRouters extends Rpc
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
class DescribeVpcs extends Rpc
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
class DescribeSnapshots extends Rpc
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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class DescribeSecurityGroups extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
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
class DescribeSecurityGroupAttribute extends Rpc
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
class DescribeRouteTables extends Rpc
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
class DescribeRegions extends Rpc
{
}

/**
 * @method string getLimitation()
 * @method $this withLimitation($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLimitation extends Rpc
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
class DescribeInstanceVncUrl extends Rpc
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
class DescribeInstanceVncPasswd extends Rpc
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
class DescribeInstanceTypes extends Rpc
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
class DescribeInstanceStatus extends Rpc
{
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
class DescribeInstances extends Rpc
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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class DescribeInstancePhysicalAttribute extends Rpc
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
class DescribeInstanceMonitorData extends Rpc
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
class DescribeInstanceAttribute extends Rpc
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
class DescribeImageSharePermission extends Rpc
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
class DescribeImages extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function withFilter(array $filter)
    {
        $this->data['Filter'] = $filter;
        foreach ($filter as $depth1 => $depth1Value) {
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class DescribeEipMonitorData extends Rpc
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
class DescribeEipAddresses extends Rpc
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
class DescribeDisks extends Rpc
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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
     * @param array $additionalAttributes
     *
     * @return $this
     */
    public function withAdditionalAttributes(array $additionalAttributes)
    {
        $this->data['AdditionalAttributes'] = $additionalAttributes;
        foreach ($additionalAttributes as $i => $iValue) {
            $this->options['query']['AdditionalAttributes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class DescribeDiskMonitorData extends Rpc
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
class DescribeClusters extends Rpc
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
class DeleteVSwitch extends Rpc
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
class DeleteVpc extends Rpc
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
class DeleteSnapshot extends Rpc
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
class DeleteSecurityGroup extends Rpc
{
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
class DeleteRouteEntry extends Rpc
{

    /**
     * @param array $nextHopList
     *
     * @return $this
     */
    public function withNextHopList(array $nextHopList)
    {
        $this->data['NextHopList'] = $nextHopList;
        foreach ($nextHopList as $depth1 => $depth1Value) {
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopId'] = $depth1Value['NextHopId'];
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
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
class DeleteInstance extends Rpc
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
class DeleteImage extends Rpc
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
class DeleteDisk extends Rpc
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
class CreateVSwitch extends Rpc
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
class CreateVpc extends Rpc
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
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getSnapshotName()
 * @method $this withSnapshotName($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateSnapshot extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getSecurityGroupType()
 * @method $this withSecurityGroupType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method array getTag()
 */
class CreateSecurityGroup extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
class CreateRouteEntry extends Rpc
{

    /**
     * @param array $nextHopList
     *
     * @return $this
     */
    public function withNextHopList(array $nextHopList)
    {
        $this->data['NextHopList'] = $nextHopList;
        foreach ($nextHopList as $depth1 => $depth1Value) {
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopId'] = $depth1Value['NextHopId'];
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
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
 * @method string getAffinity()
 * @method $this withAffinity($value)
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
 * @method string getTenancy()
 * @method $this withTenancy($value)
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
class CreateInstance extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
     * @param array $arn
     *
     * @return $this
     */
    public function withArn(array $arn)
    {
        $this->data['Arn'] = $arn;
        foreach ($arn as $depth1 => $depth1Value) {
            $this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
            $this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
            $this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
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
     * @param array $dataDisk
     *
     * @return $this
     */
    public function withDataDisk(array $dataDisk)
    {
        $this->data['DataDisk'] = $dataDisk;
        foreach ($dataDisk as $depth1 => $depth1Value) {
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
            $this->options['query']['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
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
class CreateImage extends Rpc
{

    /**
     * @param array $diskDeviceMapping
     *
     * @return $this
     */
    public function withDiskDeviceMapping(array $diskDeviceMapping)
    {
        $this->data['DiskDeviceMapping'] = $diskDeviceMapping;
        foreach ($diskDeviceMapping as $depth1 => $depth1Value) {
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
            $this->options['query']['DiskDeviceMapping.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getEncrypted()
 * @method $this withEncrypted($value)
 * @method string getDiskCategory()
 * @method $this withDiskCategory($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method array getTag()
 * @method array getArn()
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getAdvancedFeatures()
 * @method $this withAdvancedFeatures($value)
 */
class CreateDisk extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $arn
     *
     * @return $this
     */
    public function withArn(array $arn)
    {
        $this->data['Arn'] = $arn;
        foreach ($arn as $depth1 => $depth1Value) {
            $this->options['query']['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
            $this->options['query']['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
            $this->options['query']['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
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
 * @method string getKMSKeyId()
 * @method $this withKMSKeyId($value)
 * @method string getDestinationDescription()
 * @method $this withDestinationDescription($value)
 */
class CopyImage extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCopyImage extends Rpc
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
class AuthorizeSecurityGroupEgress extends Rpc
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
class AuthorizeSecurityGroup extends Rpc
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
class AttachDisk extends Rpc
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
class AssociateEipAddress extends Rpc
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
class AllocatePublicIpAddress extends Rpc
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
class AllocateEipAddress extends Rpc
{
}
