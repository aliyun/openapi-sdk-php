<?php

namespace AlibabaCloud\Ens\V20171110;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AccosicateNetworkAcl accosicateNetworkAcl(array $options = [])
 * @method AddBackendServers addBackendServers(array $options = [])
 * @method AddDeviceInternetPort addDeviceInternetPort(array $options = [])
 * @method AddNetworkInterfaceToInstance addNetworkInterfaceToInstance(array $options = [])
 * @method AddSnatIpForSnatEntry addSnatIpForSnatEntry(array $options = [])
 * @method AssignPrivateIpAddresses assignPrivateIpAddresses(array $options = [])
 * @method AssociateEnsEipAddress associateEnsEipAddress(array $options = [])
 * @method AttachDisk attachDisk(array $options = [])
 * @method AttachEnsInstances attachEnsInstances(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method AuthorizeSecurityGroupEgress authorizeSecurityGroupEgress(array $options = [])
 * @method CleanDistData cleanDistData(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateARMServerInstances createARMServerInstances(array $options = [])
 * @method CreateClassicNetwork createClassicNetwork(array $options = [])
 * @method CreateDisk createDisk(array $options = [])
 * @method CreateEipInstance createEipInstance(array $options = [])
 * @method CreateEnsRouteEntry createEnsRouteEntry(array $options = [])
 * @method CreateEnsSaleControl createEnsSaleControl(array $options = [])
 * @method CreateEnsService createEnsService(array $options = [])
 * @method CreateEpnInstance createEpnInstance(array $options = [])
 * @method CreateFileSystem createFileSystem(array $options = [])
 * @method CreateForwardEntry createForwardEntry(array $options = [])
 * @method CreateImage createImage(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateInstanceActiveOpsTask createInstanceActiveOpsTask(array $options = [])
 * @method CreateKeyPair createKeyPair(array $options = [])
 * @method CreateLoadBalancer createLoadBalancer(array $options = [])
 * @method CreateLoadBalancerHTTPListener createLoadBalancerHTTPListener(array $options = [])
 * @method CreateLoadBalancerHTTPSListener createLoadBalancerHTTPSListener(array $options = [])
 * @method CreateLoadBalancerTCPListener createLoadBalancerTCPListener(array $options = [])
 * @method CreateLoadBalancerUDPListener createLoadBalancerUDPListener(array $options = [])
 * @method CreateMountTarget createMountTarget(array $options = [])
 * @method CreateNatGateway createNatGateway(array $options = [])
 * @method CreateNetwork createNetwork(array $options = [])
 * @method CreateNetworkAcl createNetworkAcl(array $options = [])
 * @method CreateNetworkAclEntry createNetworkAclEntry(array $options = [])
 * @method CreateSecurityGroup createSecurityGroup(array $options = [])
 * @method CreateSnatEntry createSnatEntry(array $options = [])
 * @method CreateVSwitch createVSwitch(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method DeleteDeviceInternetPort deleteDeviceInternetPort(array $options = [])
 * @method DeleteDisk deleteDisk(array $options = [])
 * @method DeleteEnsRouteEntry deleteEnsRouteEntry(array $options = [])
 * @method DeleteEnsSaleConditionControl deleteEnsSaleConditionControl(array $options = [])
 * @method DeleteEnsSaleControl deleteEnsSaleControl(array $options = [])
 * @method DeleteEpnInstance deleteEpnInstance(array $options = [])
 * @method DeleteFileSystem deleteFileSystem(array $options = [])
 * @method DeleteForwardEntry deleteForwardEntry(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteKeyPairs deleteKeyPairs(array $options = [])
 * @method DeleteLoadBalancerListener deleteLoadBalancerListener(array $options = [])
 * @method DeleteMountTarget deleteMountTarget(array $options = [])
 * @method DeleteNatGateway deleteNatGateway(array $options = [])
 * @method DeleteNetwork deleteNetwork(array $options = [])
 * @method DeleteNetworkAcl deleteNetworkAcl(array $options = [])
 * @method DeleteNetworkAclEntry deleteNetworkAclEntry(array $options = [])
 * @method DeleteSecurityGroup deleteSecurityGroup(array $options = [])
 * @method DeleteSnatEntry deleteSnatEntry(array $options = [])
 * @method DeleteSnatIpForSnatEntry deleteSnatIpForSnatEntry(array $options = [])
 * @method DeleteVSwitch deleteVSwitch(array $options = [])
 * @method DescribeAICImages describeAICImages(array $options = [])
 * @method DescribeApplication describeApplication(array $options = [])
 * @method DescribeApplicationResourceSummary describeApplicationResourceSummary(array $options = [])
 * @method DescribeARMServerInstances describeARMServerInstances(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method DescribeAvailableResourceInfo describeAvailableResourceInfo(array $options = [])
 * @method DescribeBandwitdhByInternetChargeType describeBandwitdhByInternetChargeType(array $options = [])
 * @method DescribeBandWithdChargeType describeBandWithdChargeType(array $options = [])
 * @method DescribeCloudDiskAvailableResourceInfo describeCloudDiskAvailableResourceInfo(array $options = [])
 * @method DescribeCloudDiskTypes describeCloudDiskTypes(array $options = [])
 * @method DescribeCreatePrePaidInstanceResult describeCreatePrePaidInstanceResult(array $options = [])
 * @method DescribeDataDistResult describeDataDistResult(array $options = [])
 * @method DescribeDataDownloadURL describeDataDownloadURL(array $options = [])
 * @method DescribeDataPushResult describeDataPushResult(array $options = [])
 * @method DescribeDeviceService describeDeviceService(array $options = [])
 * @method DescribeDisks describeDisks(array $options = [])
 * @method DescribeEipAddresses describeEipAddresses(array $options = [])
 * @method DescribeElbAvailableResourceInfo describeElbAvailableResourceInfo(array $options = [])
 * @method DescribeEnsCommodityCode describeEnsCommodityCode(array $options = [])
 * @method DescribeEnsCommodityModuleCode describeEnsCommodityModuleCode(array $options = [])
 * @method DescribeEnsEipAddresses describeEnsEipAddresses(array $options = [])
 * @method DescribeEnsNetDistrict describeEnsNetDistrict(array $options = [])
 * @method DescribeEnsNetLevel describeEnsNetLevel(array $options = [])
 * @method DescribeEnsNetSaleDistrict describeEnsNetSaleDistrict(array $options = [])
 * @method DescribeEnsRegionIdIpv6Info describeEnsRegionIdIpv6Info(array $options = [])
 * @method DescribeEnsRegionIdResource describeEnsRegionIdResource(array $options = [])
 * @method DescribeEnsRegions describeEnsRegions(array $options = [])
 * @method DescribeEnsResourceUsage describeEnsResourceUsage(array $options = [])
 * @method DescribeEnsRouteEntryList describeEnsRouteEntryList(array $options = [])
 * @method DescribeEnsSaleControl describeEnsSaleControl(array $options = [])
 * @method DescribeEnsSaleControlAvailableResource describeEnsSaleControlAvailableResource(array $options = [])
 * @method DescribeEnsSaleControlStock describeEnsSaleControlStock(array $options = [])
 * @method DescribeEpnBandWidthData describeEpnBandWidthData(array $options = [])
 * @method DescribeEpnBandwitdhByInternetChargeType describeEpnBandwitdhByInternetChargeType(array $options = [])
 * @method DescribeEpnInstanceAttribute describeEpnInstanceAttribute(array $options = [])
 * @method DescribeEpnInstances describeEpnInstances(array $options = [])
 * @method DescribeEpnMeasurementData describeEpnMeasurementData(array $options = [])
 * @method DescribeExportImageInfo describeExportImageInfo(array $options = [])
 * @method DescribeExportImageStatus describeExportImageStatus(array $options = [])
 * @method DescribeFileSystems describeFileSystems(array $options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries(array $options = [])
 * @method DescribeImageInfos describeImageInfos(array $options = [])
 * @method DescribeImages describeImages(array $options = [])
 * @method DescribeImageSharePermission describeImageSharePermission(array $options = [])
 * @method DescribeInstanceAutoRenewAttribute describeInstanceAutoRenewAttribute(array $options = [])
 * @method DescribeInstanceMonitorData describeInstanceMonitorData(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceSpec describeInstanceSpec(array $options = [])
 * @method DescribeInstanceTypes describeInstanceTypes(array $options = [])
 * @method DescribeInstanceVncUrl describeInstanceVncUrl(array $options = [])
 * @method DescribeKeyPairs describeKeyPairs(array $options = [])
 * @method DescribeLoadBalancerAttribute describeLoadBalancerAttribute(array $options = [])
 * @method DescribeLoadBalancerHTTPListenerAttribute describeLoadBalancerHTTPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerHTTPSListenerAttribute describeLoadBalancerHTTPSListenerAttribute(array $options = [])
 * @method DescribeLoadBalancers describeLoadBalancers(array $options = [])
 * @method DescribeLoadBalancerSpec describeLoadBalancerSpec(array $options = [])
 * @method DescribeLoadBalancerTCPListenerAttribute describeLoadBalancerTCPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerUDPListenerAttribute describeLoadBalancerUDPListenerAttribute(array $options = [])
 * @method DescribeMeasurementData describeMeasurementData(array $options = [])
 * @method DescribeMountTargets describeMountTargets(array $options = [])
 * @method DescribeNatGateways describeNatGateways(array $options = [])
 * @method DescribeNCInformation describeNCInformation(array $options = [])
 * @method DescribeNetworkAcls describeNetworkAcls(array $options = [])
 * @method DescribeNetworkAttribute describeNetworkAttribute(array $options = [])
 * @method DescribeNetworkInterfaces describeNetworkInterfaces(array $options = [])
 * @method DescribeNetworks describeNetworks(array $options = [])
 * @method DescribePrePaidInstanceStock describePrePaidInstanceStock(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method DescribeRegionBandwidthQuota describeRegionBandwidthQuota(array $options = [])
 * @method DescribeRegionIsps describeRegionIsps(array $options = [])
 * @method DescribeRegionResource describeRegionResource(array $options = [])
 * @method DescribeReservedResource describeReservedResource(array $options = [])
 * @method DescribeResourceTimeline describeResourceTimeline(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method DescribeSecurityGroups describeSecurityGroups(array $options = [])
 * @method DescribeSelfImages describeSelfImages(array $options = [])
 * @method DescribeServcieSchedule describeServcieSchedule(array $options = [])
 * @method DescribeSnatAttribute describeSnatAttribute(array $options = [])
 * @method DescribeSnatTableEntries describeSnatTableEntries(array $options = [])
 * @method DescribeUserBandWidthData describeUserBandWidthData(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeWorkflow describeWorkflow(array $options = [])
 * @method DescribeWorkflowActivity describeWorkflowActivity(array $options = [])
 * @method DetachDisk detachDisk(array $options = [])
 * @method DistApplicationData distApplicationData(array $options = [])
 * @method ExportBillDetailData exportBillDetailData(array $options = [])
 * @method ExportImage exportImage(array $options = [])
 * @method ExportMeasurementData exportMeasurementData(array $options = [])
 * @method GetDeviceInternetPort getDeviceInternetPort(array $options = [])
 * @method GetOssStorageAndAccByBuckets getOssStorageAndAccByBuckets(array $options = [])
 * @method GetOssUsageData getOssUsageData(array $options = [])
 * @method ImportKeyPair importKeyPair(array $options = [])
 * @method JoinPublicIpsToEpnInstance joinPublicIpsToEpnInstance(array $options = [])
 * @method JoinSecurityGroup joinSecurityGroup(array $options = [])
 * @method JoinVSwitchesToEpnInstance joinVSwitchesToEpnInstance(array $options = [])
 * @method LeaveSecurityGroup leaveSecurityGroup(array $options = [])
 * @method ListApplications listApplications(array $options = [])
 * @method ModifyEnsEipAddressAttribute modifyEnsEipAddressAttribute(array $options = [])
 * @method ModifyEpnInstance modifyEpnInstance(array $options = [])
 * @method ModifyFileSystem modifyFileSystem(array $options = [])
 * @method ModifyForwardEntry modifyForwardEntry(array $options = [])
 * @method ModifyImageAttribute modifyImageAttribute(array $options = [])
 * @method ModifyImageSharePermission modifyImageSharePermission(array $options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute(array $options = [])
 * @method ModifyInstanceAutoRenewAttribute modifyInstanceAutoRenewAttribute(array $options = [])
 * @method ModifyLoadBalancerAttribute modifyLoadBalancerAttribute(array $options = [])
 * @method ModifyNetworkAttribute modifyNetworkAttribute(array $options = [])
 * @method ModifyPrepayInstanceSpec modifyPrepayInstanceSpec(array $options = [])
 * @method ModifySecurityGroupAttribute modifySecurityGroupAttribute(array $options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute(array $options = [])
 * @method PushApplicationData pushApplicationData(array $options = [])
 * @method RebootAICInstance rebootAICInstance(array $options = [])
 * @method RebootARMServerInstance rebootARMServerInstance(array $options = [])
 * @method RebootInstance rebootInstance(array $options = [])
 * @method RebootInstances rebootInstances(array $options = [])
 * @method RecoverAICInstance recoverAICInstance(array $options = [])
 * @method ReInitDisk reInitDisk(array $options = [])
 * @method ReinitInstance reinitInstance(array $options = [])
 * @method ReinitInstances reinitInstances(array $options = [])
 * @method ReleaseAICInstance releaseAICInstance(array $options = [])
 * @method ReleaseARMServerInstance releaseARMServerInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method ReleasePostPaidInstance releasePostPaidInstance(array $options = [])
 * @method ReleasePrePaidInstance releasePrePaidInstance(array $options = [])
 * @method RemoveBackendServers removeBackendServers(array $options = [])
 * @method RemovePublicIpsFromEpnInstance removePublicIpsFromEpnInstance(array $options = [])
 * @method RemoveVSwitchesFromEpnInstance removeVSwitchesFromEpnInstance(array $options = [])
 * @method RenewARMServerInstance renewARMServerInstance(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RescaleApplication rescaleApplication(array $options = [])
 * @method RescaleDeviceService rescaleDeviceService(array $options = [])
 * @method ResetAICInstance resetAICInstance(array $options = [])
 * @method ResetDeviceInstance resetDeviceInstance(array $options = [])
 * @method ResetDisk resetDisk(array $options = [])
 * @method ResizeDisk resizeDisk(array $options = [])
 * @method RestartDeviceInstance restartDeviceInstance(array $options = [])
 * @method RestartWorkflow restartWorkflow(array $options = [])
 * @method RetryWorkflow retryWorkflow(array $options = [])
 * @method RevokeSecurityGroup revokeSecurityGroup(array $options = [])
 * @method RevokeSecurityGroupEgress revokeSecurityGroupEgress(array $options = [])
 * @method RollbackApplication rollbackApplication(array $options = [])
 * @method RollbackWorkflow rollbackWorkflow(array $options = [])
 * @method RunInstances runInstances(array $options = [])
 * @method RunServiceSchedule runServiceSchedule(array $options = [])
 * @method SetBackendServers setBackendServers(array $options = [])
 * @method SetLoadBalancerHTTPListenerAttribute setLoadBalancerHTTPListenerAttribute(array $options = [])
 * @method SetLoadBalancerHTTPSListenerAttribute setLoadBalancerHTTPSListenerAttribute(array $options = [])
 * @method SetLoadBalancerStatus setLoadBalancerStatus(array $options = [])
 * @method SetLoadBalancerTCPListenerAttribute setLoadBalancerTCPListenerAttribute(array $options = [])
 * @method SetLoadBalancerUDPListenerAttribute setLoadBalancerUDPListenerAttribute(array $options = [])
 * @method StartEpnInstance startEpnInstance(array $options = [])
 * @method StartInstance startInstance(array $options = [])
 * @method StartInstances startInstances(array $options = [])
 * @method StartLoadBalancerListener startLoadBalancerListener(array $options = [])
 * @method StartSnatIpForSnatEntry startSnatIpForSnatEntry(array $options = [])
 * @method StopEpnInstance stopEpnInstance(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method StopInstances stopInstances(array $options = [])
 * @method StopLoadBalancerListener stopLoadBalancerListener(array $options = [])
 * @method StopSnatIpForSnatEntry stopSnatIpForSnatEntry(array $options = [])
 * @method TerminateWorkflow terminateWorkflow(array $options = [])
 * @method UnassignPrivateIpAddresses unassignPrivateIpAddresses(array $options = [])
 * @method UnAssociateEnsEipAddress unAssociateEnsEipAddress(array $options = [])
 * @method UnassociateNetworkAcl unassociateNetworkAcl(array $options = [])
 * @method UpdateEnsSaleControl updateEnsSaleControl(array $options = [])
 * @method UpgradeAICInstanceImage upgradeAICInstanceImage(array $options = [])
 * @method UpgradeApplication upgradeApplication(array $options = [])
 */
class EnsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ens';

    /** @var string */
    public $version = '2017-11-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ens';
}

/**
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResource()
 * @method $this withResource($value)
 */
class AccosicateNetworkAcl extends Rpc
{
}

/**
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class AddBackendServers extends Rpc
{
}

/**
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getNatType()
 * @method $this withNatType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 */
class AddDeviceInternetPort extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNetworks()
 * @method $this withNetworks($value)
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AddNetworkInterfaceToInstance extends Rpc
{
}

/**
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class AddSnatIpForSnatEntry extends Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class AssignPrivateIpAddresses extends Rpc
{
}

/**
 * @method string getStandby()
 * @method $this withStandby($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AssociateEnsEipAddress extends Rpc
{
}

/**
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getDeleteWithInstance()
 * @method $this withDeleteWithInstance($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AttachDisk extends Rpc
{
}

/**
 * @method string getScripts()
 * @method $this withScripts($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AttachEnsInstances extends Rpc
{
}

/**
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AuthorizeSecurityGroup extends Rpc
{
}

/**
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AuthorizeSecurityGroupEgress extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getDataName()
 * @method $this withDataName($value)
 * @method string getDataVersion()
 * @method $this withDataVersion($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CleanDistData extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 */
class CreateApplication extends Rpc
{
}

/**
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getResolution()
 * @method $this withResolution($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getServerType()
 * @method $this withServerType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getNameSpace()
 * @method $this withNameSpace($value)
 * @method string getServerName()
 * @method $this withServerName($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateARMServerInstances extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getNetworkName()
 * @method $this withNetworkName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class CreateClassicNetwork extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class CreateDisk extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateEipInstance extends Rpc
{
}

/**
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 */
class CreateEnsRouteEntry extends Rpc
{
}

/**
 * @method string getSaleControls()
 * @method $this withSaleControls($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getAliUidAccount()
 * @method $this withAliUidAccount($value)
 */
class CreateEnsSaleControl extends Rpc
{
}

/**
 * @method string getEnsServiceId()
 * @method $this withEnsServiceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateEnsService extends Rpc
{
}

/**
 * @method string getNetworkingModel()
 * @method $this withNetworkingModel($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getEPNInstanceType()
 * @method $this withEPNInstanceType($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getEPNInstanceName()
 * @method $this withEPNInstanceName($value)
 */
class CreateEpnInstance extends Rpc
{
}

/**
 * @method string getOrderDetails()
 * @method $this withOrderDetails($value)
 */
class CreateFileSystem extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getHealthCheckPort()
 * @method $this withHealthCheckPort($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 * @method string getStandbyExternalIp()
 * @method $this withStandbyExternalIp($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 */
class CreateForwardEntry extends Rpc
{
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getDeleteAfterImageUpload()
 * @method $this withDeleteAfterImageUpload($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateImage extends Rpc
{
}

/**
 * @method string getUniqueSuffix()
 * @method $this withUniqueSuffix($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPublicIpIdentification()
 * @method $this withPublicIpIdentification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDataDisk1Size()
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 * @method string getSystemDiskSize()
 * @method string getPaymentType()
 * @method $this withPaymentType($value)
 */
class CreateInstance extends Rpc
{

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
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class CreateInstanceActiveOpsTask extends Rpc
{
}

/**
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 */
class CreateKeyPair extends Rpc
{
}

/**
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getLoadBalancerSpec()
 * @method $this withLoadBalancerSpec($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateLoadBalancer extends Rpc
{
}

/**
 * @method string getListenerForward()
 * @method $this withListenerForward($value)
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getXForwardedFor()
 * @method $this withXForwardedFor($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getForwardPort()
 * @method $this withForwardPort($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class CreateLoadBalancerHTTPListener extends Rpc
{
}

/**
 * @method string getListenerForward()
 * @method $this withListenerForward($value)
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getForwardPort()
 * @method $this withForwardPort($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class CreateLoadBalancerHTTPSListener extends Rpc
{
}

/**
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getEstablishedTimeout()
 * @method $this withEstablishedTimeout($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getEipTransmit()
 * @method $this withEipTransmit($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 */
class CreateLoadBalancerTCPListener extends Rpc
{
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckReq()
 * @method $this withHealthCheckReq($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckExp()
 * @method $this withHealthCheckExp($value)
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getEipTransmit()
 * @method $this withEipTransmit($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 */
class CreateLoadBalancerUDPListener extends Rpc
{
}

/**
 * @method string getMountTargetName()
 * @method $this withMountTargetName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 * @method string getNetWorkId()
 * @method $this withNetWorkId($value)
 */
class CreateMountTarget extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class CreateNatGateway extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getNetworkName()
 * @method $this withNetworkName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class CreateNetwork extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkAclName()
 * @method $this withNetworkAclName($value)
 */
class CreateNetworkAcl extends Rpc
{
}

/**
 * @method string getNetworkAclEntryName()
 * @method $this withNetworkAclEntryName($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class CreateNetworkAclEntry extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 */
class CreateSecurityGroup extends Rpc
{
}

/**
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSourceVSwitchId()
 * @method $this withSourceVSwitchId($value)
 * @method string getSourceNetworkId()
 * @method $this withSourceNetworkId($value)
 * @method string getStandbySnatIp()
 * @method $this withStandbySnatIp($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 */
class CreateSnatEntry extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class CreateVSwitch extends Rpc
{
}

/**
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteApplication extends Rpc
{
}

/**
 * @method string getNatType()
 * @method $this withNatType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteDeviceInternetPort extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class DeleteDisk extends Rpc
{
}

/**
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 */
class DeleteEnsRouteEntry extends Rpc
{
}

/**
 * @method string getSaleControls()
 * @method $this withSaleControls($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getAliUidAccount()
 * @method $this withAliUidAccount($value)
 */
class DeleteEnsSaleConditionControl extends Rpc
{
}

/**
 * @method string getSaleControls()
 * @method $this withSaleControls($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getAliUidAccount()
 * @method $this withAliUidAccount($value)
 */
class DeleteEnsSaleControl extends Rpc
{
}

/**
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 */
class DeleteEpnInstance extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteFileSystem extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 */
class DeleteForwardEntry extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 */
class DeleteKeyPairs extends Rpc
{
}

/**
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DeleteLoadBalancerListener extends Rpc
{
}

/**
 * @method string getMountTargetName()
 * @method $this withMountTargetName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DeleteMountTarget extends Rpc
{
}

/**
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 */
class DeleteNatGateway extends Rpc
{
}

/**
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class DeleteNetwork extends Rpc
{
}

/**
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 */
class DeleteNetworkAcl extends Rpc
{
}

/**
 * @method string getNetworkAclEntryId()
 * @method $this withNetworkAclEntryId($value)
 */
class DeleteNetworkAclEntry extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 */
class DeleteSecurityGroup extends Rpc
{
}

/**
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class DeleteSnatEntry extends Rpc
{
}

/**
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class DeleteSnatIpForSnatEntry extends Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class DeleteVSwitch extends Rpc
{
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMaxDate()
 * @method $this withMaxDate($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMinDate()
 * @method $this withMinDate($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 */
class DescribeAICImages extends Rpc
{
}

/**
 * @method string getAppVersions()
 * @method $this withAppVersions($value)
 * @method string getOutDetailStatParams()
 * @method $this withOutDetailStatParams($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeApplication extends Rpc
{
}

/**
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeApplicationResourceSummary extends Rpc
{
}

/**
 * @method string getAICSpecs()
 * @method $this withAICSpecs($value)
 * @method string getOrderByParams()
 * @method $this withOrderByParams($value)
 * @method string getDescribeAICInstances()
 * @method $this withDescribeAICInstances($value)
 * @method string getServerIds()
 * @method $this withServerIds($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxDate()
 * @method $this withMaxDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStates()
 * @method $this withStates($value)
 * @method string getServerSpecs()
 * @method $this withServerSpecs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnsRegionIds()
 * @method $this withEnsRegionIds($value)
 * @method string getMinDate()
 * @method $this withMinDate($value)
 * @method string getLatestAction()
 * @method $this withLatestAction($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeARMServerInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class DescribeAvailableResource extends Rpc
{
}

class DescribeAvailableResourceInfo extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeBandwitdhByInternetChargeType extends Rpc
{
}

class DescribeBandWithdChargeType extends Rpc
{
}

class DescribeCloudDiskAvailableResourceInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 */
class DescribeCloudDiskTypes extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeCreatePrePaidInstanceResult extends Rpc
{
}

/**
 * @method string getDataVersions()
 * @method $this withDataVersions($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getMaxDate()
 * @method $this withMaxDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnsRegionIds()
 * @method $this withEnsRegionIds($value)
 * @method string getMinDate()
 * @method $this withMinDate($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDataNames()
 * @method $this withDataNames($value)
 */
class DescribeDataDistResult extends Rpc
{
}

/**
 * @method string getExpireTimeout()
 * @method $this withExpireTimeout($value)
 * @method string getServerFilterStrategy()
 * @method $this withServerFilterStrategy($value)
 * @method string getDataName()
 * @method $this withDataName($value)
 * @method string getDataVersion()
 * @method $this withDataVersion($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeDataDownloadURL extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRegionIds()
 * @method $this withRegionIds($value)
 * @method string getDataVersions()
 * @method $this withDataVersions($value)
 * @method string getMaxDate()
 * @method $this withMaxDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMinDate()
 * @method $this withMinDate($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDataNames()
 * @method $this withDataNames($value)
 */
class DescribeDataPushResult extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DescribeDeviceService extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getOrderByParams()
 * @method $this withOrderByParams($value)
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getDiskChargeType()
 * @method $this withDiskChargeType($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDiskIds()
 * @method $this withDiskIds($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getEnsRegionIds()
 * @method $this withEnsRegionIds($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeDisks extends Rpc
{
}

/**
 * @method string getEips()
 * @method $this withEips($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 */
class DescribeEipAddresses extends Rpc
{
}

class DescribeElbAvailableResourceInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 */
class DescribeEnsCommodityCode extends Rpc
{
}

/**
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getModuleCode()
 * @method $this withModuleCode($value)
 */
class DescribeEnsCommodityModuleCode extends Rpc
{
}

/**
 * @method string getEipName()
 * @method $this withEipName($value)
 * @method string getEipAddress()
 * @method $this withEipAddress($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getStandby()
 * @method $this withStandby($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 */
class DescribeEnsEipAddresses extends Rpc
{
}

/**
 * @method string getNetLevelCode()
 * @method $this withNetLevelCode($value)
 * @method string getNetDistrictCode()
 * @method $this withNetDistrictCode($value)
 */
class DescribeEnsNetDistrict extends Rpc
{
}

class DescribeEnsNetLevel extends Rpc
{
}

/**
 * @method string getNetLevelCode()
 * @method $this withNetLevelCode($value)
 * @method string getNetDistrictCode()
 * @method $this withNetDistrictCode($value)
 */
class DescribeEnsNetSaleDistrict extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 */
class DescribeEnsRegionIdIpv6Info extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderByParams()
 * @method $this withOrderByParams($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeEnsRegionIdResource extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 */
class DescribeEnsRegions extends Rpc
{
}

/**
 * @method string getExpiredStartTime()
 * @method $this withExpiredStartTime($value)
 * @method string getExpiredEndTime()
 * @method $this withExpiredEndTime($value)
 */
class DescribeEnsResourceUsage extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRouteEntryName()
 * @method $this withRouteEntryName($value)
 * @method string getNextHopId()
 * @method $this withNextHopId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteEntryType()
 * @method $this withRouteEntryType($value)
 * @method string getRouteEntryId()
 * @method $this withRouteEntryId($value)
 */
class DescribeEnsRouteEntryList extends Rpc
{
}

/**
 * @method string getCustomAccount()
 * @method $this withCustomAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getModuleCode()
 * @method $this withModuleCode($value)
 * @method string getAliUidAccount()
 * @method $this withAliUidAccount($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeEnsSaleControl extends Rpc
{
}

/**
 * @method string getCustomAccount()
 * @method $this withCustomAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeEnsSaleControlAvailableResource extends Rpc
{
}

/**
 * @method string getCustomAccount()
 * @method $this withCustomAccount($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getModuleCode()
 * @method $this withModuleCode($value)
 * @method string getAliUidAccount()
 * @method $this withAliUidAccount($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeEnsSaleControlStock extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNetworkingModel()
 * @method $this withNetworkingModel($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeEpnBandWidthData extends Rpc
{
}

/**
 * @method string getNetworkingModel()
 * @method $this withNetworkingModel($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeEpnBandwitdhByInternetChargeType extends Rpc
{
}

/**
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 */
class DescribeEpnInstanceAttribute extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 * @method string getEPNInstanceName()
 * @method $this withEPNInstanceName($value)
 */
class DescribeEpnInstances extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class DescribeEpnMeasurementData extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeExportImageInfo extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 */
class DescribeExportImageStatus extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFileSystemName()
 * @method $this withFileSystemName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeFileSystems extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getShowDetail()
 * @method $this withShowDetail($value)
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 */
class DescribeForwardTableEntries extends Rpc
{
}

/**
 * @method string getOsType()
 * @method $this withOsType($value)
 */
class DescribeImageInfos extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeImages extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class DescribeImageSharePermission extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeInstanceAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceMonitorData extends Rpc
{
}

/**
 * @method string getOrderByParams()
 * @method $this withOrderByParams($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getInstanceResourceType()
 * @method $this withInstanceResourceType($value)
 * @method string getEnsServiceId()
 * @method $this withEnsServiceId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getIntranetIp()
 * @method $this withIntranetIp($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnsRegionIds()
 * @method $this withEnsRegionIds($value)
 */
class DescribeInstances extends Rpc
{
}

class DescribeInstanceSpec extends Rpc
{
}

class DescribeInstanceTypes extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstanceVncUrl extends Rpc
{
}

/**
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeKeyPairs extends Rpc
{
}

/**
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerAttribute extends Rpc
{
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerHTTPListenerAttribute extends Rpc
{
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerHTTPSListenerAttribute extends Rpc
{
}

/**
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getLoadBalancerStatus()
 * @method $this withLoadBalancerStatus($value)
 */
class DescribeLoadBalancers extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLoadBalancerSpec()
 * @method $this withLoadBalancerSpec($value)
 */
class DescribeLoadBalancerSpec extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerTCPListenerAttribute extends Rpc
{
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerUDPListenerAttribute extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class DescribeMeasurementData extends Rpc
{
}

/**
 * @method string getMountTargetName()
 * @method $this withMountTargetName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class DescribeMountTargets extends Rpc
{
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 */
class DescribeNatGateways extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getOpenapiCheck()
 * @method $this withOpenapiCheck($value)
 */
class DescribeNCInformation extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getNetworkAclName()
 * @method $this withNetworkAclName($value)
 */
class DescribeNetworkAcls extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class DescribeNetworkAttribute extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 */
class DescribeNetworkInterfaces extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNetworkName()
 * @method $this withNetworkName($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class DescribeNetworks extends Rpc
{
}

/**
 * @method string getInstanceSpec()
 * @method $this withInstanceSpec($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getDataDiskSize()
 * @method $this withDataDiskSize($value)
 */
class DescribePrePaidInstanceStock extends Rpc
{
}

/**
 * @method string getDataDisks()
 * @method $this withDataDisks($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDataDisk1Size()
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getSystemDiskSize()
 */
class DescribePrice extends Rpc
{

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
    public function withSystemDiskSize($value)
    {
        $this->data['SystemDiskSize'] = $value;
        $this->options['query']['SystemDisk.Size'] = $value;

        return $this;
    }
}

class DescribeRegionBandwidthQuota extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 */
class DescribeRegionIsps extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIspType()
 * @method $this withIspType($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getOpenapiCheck()
 * @method $this withOpenapiCheck($value)
 */
class DescribeRegionResource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class DescribeReservedResource extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getOpenapiCheck()
 * @method $this withOpenapiCheck($value)
 */
class DescribeResourceTimeline extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 */
class DescribeSecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeSecurityGroups extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeSelfImages extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getPodConfigName()
 * @method $this withPodConfigName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeServcieSchedule extends Rpc
{
}

/**
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class DescribeSnatAttribute extends Rpc
{
}

/**
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getShowDetail()
 * @method $this withShowDetail($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNatGatewayId()
 * @method $this withNatGatewayId($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 */
class DescribeSnatTableEntries extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeUserBandWidthData extends Rpc
{
}

/**
 * @method string getOrderByParams()
 * @method $this withOrderByParams($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 */
class DescribeVSwitches extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getWorkFlowId()
 * @method $this withWorkFlowId($value)
 * @method string getBusinessId()
 * @method $this withBusinessId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getWorkFlowName()
 * @method $this withWorkFlowName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 */
class DescribeWorkflow extends Rpc
{
}

/**
 * @method string getWorkFlowId()
 * @method $this withWorkFlowId($value)
 */
class DescribeWorkflowActivity extends Rpc
{
}

/**
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DetachDisk extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getDistStrategy()
 * @method $this withDistStrategy($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DistApplicationData extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class ExportBillDetailData extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOSSRegionId()
 * @method $this withOSSRegionId($value)
 * @method string getOSSBucket()
 * @method $this withOSSBucket($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getOSSPrefix()
 * @method $this withOSSPrefix($value)
 */
class ExportImage extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 */
class ExportMeasurementData extends Rpc
{
}

/**
 * @method string getNatType()
 * @method $this withNatType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class GetDeviceInternetPort extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBucketList()
 * @method $this withBucketList($value)
 */
class GetOssStorageAndAccByBuckets extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 */
class GetOssUsageData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPublicKeyBody()
 * @method $this withPublicKeyBody($value)
 */
class ImportKeyPair extends Rpc
{
}

/**
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 * @method string getInstanceInfos()
 * @method $this withInstanceInfos($value)
 */
class JoinPublicIpsToEpnInstance extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class JoinSecurityGroup extends Rpc
{
}

/**
 * @method string getVSwitchesInfo()
 * @method $this withVSwitchesInfo($value)
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 */
class JoinVSwitchesToEpnInstance extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LeaveSecurityGroup extends Rpc
{
}

/**
 * @method string getClusterNames()
 * @method $this withClusterNames($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getOutAppInfoParams()
 * @method $this withOutAppInfoParams($value)
 * @method string getMaxDate()
 * @method $this withMaxDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppVersions()
 * @method $this withAppVersions($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMinDate()
 * @method $this withMinDate($value)
 */
class ListApplications extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyEnsEipAddressAttribute extends Rpc
{
}

/**
 * @method string getNetworkingModel()
 * @method $this withNetworkingModel($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 * @method string getEPNInstanceName()
 * @method $this withEPNInstanceName($value)
 */
class ModifyEpnInstance extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class ModifyFileSystem extends Rpc
{
}

/**
 * @method string getForwardEntryId()
 * @method $this withForwardEntryId($value)
 * @method string getForwardEntryName()
 * @method $this withForwardEntryName($value)
 * @method string getHealthCheckPort()
 * @method $this withHealthCheckPort($value)
 */
class ModifyForwardEntry extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getProduct()
 */
class ModifyImageAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['query']['product'] = $value;

        return $this;
    }
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getRemoveAccounts()
 * @method $this withRemoveAccounts($value)
 * @method string getAddAccounts()
 * @method $this withAddAccounts($value)
 */
class ModifyImageSharePermission extends Rpc
{
}

/**
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
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ModifyInstanceAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class ModifyLoadBalancerAttribute extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkName()
 * @method $this withNetworkName($value)
 * @method string getNetworkId()
 * @method $this withNetworkId($value)
 */
class ModifyNetworkAttribute extends Rpc
{
}

/**
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyPrepayInstanceSpec extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 */
class ModifySecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVSwitchName()
 * @method $this withVSwitchName($value)
 */
class ModifyVSwitchAttribute extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getPushStrategy()
 * @method $this withPushStrategy($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class PushApplicationData extends Rpc
{
}

/**
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class RebootAICInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getServerIds()
 * @method $this withServerIds($value)
 */
class RebootARMServerInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RebootInstance extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class RebootInstances extends Rpc
{
}

/**
 * @method string getServerId()
 * @method $this withServerId($value)
 */
class RecoverAICInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class ReInitDisk extends Rpc
{
}

/**
 * @method string getImageId()
 * @method string getPassword()
 * @method string getInstanceId()
 */
class ReinitInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['form_params']['ImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ReinitInstances extends Rpc
{
}

/**
 * @method string getServerId()
 * @method $this withServerId($value)
 */
class ReleaseAICInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleaseARMServerInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleaseInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleasePostPaidInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReleasePrePaidInstance extends Rpc
{
}

/**
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class RemoveBackendServers extends Rpc
{
}

/**
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 * @method string getInstanceInfos()
 * @method $this withInstanceInfos($value)
 */
class RemovePublicIpsFromEpnInstance extends Rpc
{
}

/**
 * @method string getVSwitchesInfo()
 * @method $this withVSwitchesInfo($value)
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 */
class RemoveVSwitchesFromEpnInstance extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RenewARMServerInstance extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RenewInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceSelector()
 * @method $this withResourceSelector($value)
 * @method string getToAppVersion()
 * @method $this withToAppVersion($value)
 * @method string getRescaleType()
 * @method $this withRescaleType($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getRescaleLevel()
 * @method $this withRescaleLevel($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RescaleApplication extends Rpc
{
}

/**
 * @method string getResourceSelector()
 * @method string getResourceInfo()
 * @method string getRescaleType()
 * @method $this withRescaleType($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getRescaleLevel()
 * @method $this withRescaleLevel($value)
 * @method string getResourceSpec()
 * @method $this withResourceSpec($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class RescaleDeviceService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceSelector($value)
    {
        $this->data['ResourceSelector'] = $value;
        $this->options['form_params']['ResourceSelector'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceInfo($value)
    {
        $this->data['ResourceInfo'] = $value;
        $this->options['form_params']['ResourceInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ResetAICInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ResetDeviceInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSnapshotId()
 * @method $this withSnapshotId($value)
 * @method string getDiskId()
 * @method $this withDiskId($value)
 */
class ResetDisk extends Rpc
{
}

/**
 * @method string getDiskId()
 * @method $this withDiskId($value)
 * @method string getNewSize()
 * @method $this withNewSize($value)
 */
class ResizeDisk extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RestartDeviceInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWorkflowIds()
 * @method $this withWorkflowIds($value)
 */
class RestartWorkflow extends Rpc
{
}

/**
 * @method string getWorkflowIds()
 * @method $this withWorkflowIds($value)
 */
class RetryWorkflow extends Rpc
{
}

/**
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class RevokeSecurityGroup extends Rpc
{
}

/**
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestCidrIp()
 * @method $this withDestCidrIp($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class RevokeSecurityGroupEgress extends Rpc
{
}

/**
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getFromAppVersion()
 * @method $this withFromAppVersion($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getToAppVersion()
 * @method $this withToAppVersion($value)
 */
class RollbackApplication extends Rpc
{
}

/**
 * @method string getWorkflowIds()
 * @method $this withWorkflowIds($value)
 */
class RollbackWorkflow extends Rpc
{
}

/**
 * @method string getScheduleAreaLevel()
 * @method $this withScheduleAreaLevel($value)
 * @method string getUniqueSuffix()
 * @method $this withUniqueSuffix($value)
 * @method string getInstanceChargeStrategy()
 * @method $this withInstanceChargeStrategy($value)
 * @method string getSecurityId()
 * @method $this withSecurityId($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDisk()
 * @method $this withSystemDisk($value)
 * @method string getNetDistrictCode()
 * @method $this withNetDistrictCode($value)
 * @method string getEnsRegionId()
 * @method $this withEnsRegionId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getPublicIpIdentification()
 * @method $this withPublicIpIdentification($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
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
 * @method string getNetWorkId()
 * @method $this withNetWorkId($value)
 * @method string getSchedulingPriceStrategy()
 * @method $this withSchedulingPriceStrategy($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getDataDisk()
 * @method $this withDataDisk($value)
 * @method string getSchedulingStrategy()
 * @method $this withSchedulingStrategy($value)
 * @method string getCarrier()
 * @method $this withCarrier($value)
 */
class RunInstances extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getPodConfigName()
 * @method $this withPodConfigName($value)
 * @method string getServiceCommands()
 * @method $this withServiceCommands($value)
 * @method string getScheduleStrategy()
 * @method $this withScheduleStrategy($value)
 * @method string getDirectorys()
 * @method $this withDirectorys($value)
 * @method string getPreLockedTimeout()
 * @method $this withPreLockedTimeout($value)
 * @method string getServiceAction()
 * @method $this withServiceAction($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RunServiceSchedule extends Rpc
{
}

/**
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetBackendServers extends Rpc
{
}

/**
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class SetLoadBalancerHTTPListenerAttribute extends Rpc
{
}

/**
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class SetLoadBalancerHTTPSListenerAttribute extends Rpc
{
}

/**
 * @method string getLoadBalancerStatus()
 * @method $this withLoadBalancerStatus($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetLoadBalancerStatus extends Rpc
{
}

/**
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getEstablishedTimeout()
 * @method $this withEstablishedTimeout($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getEipTransmit()
 * @method $this withEipTransmit($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class SetLoadBalancerTCPListenerAttribute extends Rpc
{
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getHealthCheckReq()
 * @method $this withHealthCheckReq($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getHealthCheckExp()
 * @method $this withHealthCheckExp($value)
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getEipTransmit()
 * @method $this withEipTransmit($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 */
class SetLoadBalancerUDPListenerAttribute extends Rpc
{
}

/**
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 */
class StartEpnInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartInstance extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class StartInstances extends Rpc
{
}

/**
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class StartLoadBalancerListener extends Rpc
{
}

/**
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class StartSnatIpForSnatEntry extends Rpc
{
}

/**
 * @method string getEPNInstanceId()
 * @method $this withEPNInstanceId($value)
 */
class StopEpnInstance extends Rpc
{
}

/**
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopInstance extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class StopInstances extends Rpc
{
}

/**
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class StopLoadBalancerListener extends Rpc
{
}

/**
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getSnatEntryId()
 * @method $this withSnatEntryId($value)
 */
class StopSnatIpForSnatEntry extends Rpc
{
}

/**
 * @method string getWorkflowIds()
 * @method $this withWorkflowIds($value)
 */
class TerminateWorkflow extends Rpc
{
}

/**
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class UnassignPrivateIpAddresses extends Rpc
{
}

/**
 * @method string getAllocationId()
 * @method $this withAllocationId($value)
 */
class UnAssociateEnsEipAddress extends Rpc
{
}

/**
 * @method string getNetworkAclId()
 * @method $this withNetworkAclId($value)
 * @method string getResource()
 * @method $this withResource($value)
 */
class UnassociateNetworkAcl extends Rpc
{
}

/**
 * @method string getSaleControls()
 * @method $this withSaleControls($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getAliUidAccount()
 * @method $this withAliUidAccount($value)
 */
class UpdateEnsSaleControl extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getServerIds()
 * @method $this withServerIds($value)
 */
class UpgradeAICInstanceImage extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UpgradeApplication extends Rpc
{
}
