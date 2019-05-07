<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeVpnGreTunnels describeVpnGreTunnels(array $options = [])
 * @method DeleteVpnGreTunnel deleteVpnGreTunnel(array $options = [])
 * @method ModifyVpnGreTunnel modifyVpnGreTunnel(array $options = [])
 * @method CreateVpnGreTunnel createVpnGreTunnel(array $options = [])
 * @method ModifyVpnPbrRouteEntryWeight modifyVpnPbrRouteEntryWeight(array $options = [])
 * @method ModifyVpnRouteEntryWeight modifyVpnRouteEntryWeight(array $options = [])
 * @method ModifyCommonBandwidthPackageIpBandwidth modifyCommonBandwidthPackageIpBandwidth(array $options = [])
 * @method CancelCommonBandwidthPackageIpBandwidth cancelCommonBandwidthPackageIpBandwidth(array $options = [])
 * @method PublishVpnRouteEntry publishVpnRouteEntry(array $options = [])
 * @method DescribeVpnPbrRouteEntries describeVpnPbrRouteEntries(array $options = [])
 * @method DescribeVpnRouteEntries describeVpnRouteEntries(array $options = [])
 * @method DeleteVpnRouteEntry deleteVpnRouteEntry(array $options = [])
 * @method DeleteVpnPbrRouteEntry deleteVpnPbrRouteEntry(array $options = [])
 * @method CreateVpnRouteEntry createVpnRouteEntry(array $options = [])
 * @method CreateVpnPbrRouteEntry createVpnPbrRouteEntry(array $options = [])
 * @method CreateDefaultVpc createDefaultVpc(array $options = [])
 * @method CreateDefaultVSwitch createDefaultVSwitch(array $options = [])
 * @method CreatePhysicalConnectionOccupancyOrder createPhysicalConnectionOccupancyOrder(array $options = [])
 * @method CreatePhysicalConnectionSetupOrder createPhysicalConnectionSetupOrder(array $options = [])
 * @method DescribePhysicalConnectionLOA describePhysicalConnectionLOA(array $options = [])
 * @method CompletePhysicalConnectionLOA completePhysicalConnectionLOA(array $options = [])
 * @method ApplyPhysicalConnectionLOA applyPhysicalConnectionLOA(array $options = [])
 * @method ConvertBandwidthPackage convertBandwidthPackage(array $options = [])
 * @method DeleteIpv6InternetBandwidth deleteIpv6InternetBandwidth(array $options = [])
 * @method ModifyIPv6TranslatorAclListEntry modifyIPv6TranslatorAclListEntry(array $options = [])
 * @method DescribePhysicalConnectionOrder describePhysicalConnectionOrder(array $options = [])
 * @method ModifyIpv6AddressAttribute modifyIpv6AddressAttribute(array $options = [])
 * @method ModifyIpv6GatewayAttribute modifyIpv6GatewayAttribute(array $options = [])
 * @method DescribeIpv6GatewayAttribute describeIpv6GatewayAttribute(array $options = [])
 * @method DescribeIpv6EgressOnlyRules describeIpv6EgressOnlyRules(array $options = [])
 * @method DeleteIpv6EgressOnlyRule deleteIpv6EgressOnlyRule(array $options = [])
 * @method CreateIpv6EgressOnlyRule createIpv6EgressOnlyRule(array $options = [])
 * @method ReleaseIpv6InternetBandwidth releaseIpv6InternetBandwidth(array $options = [])
 * @method ModifyIpv6InternetBandwidth modifyIpv6InternetBandwidth(array $options = [])
 * @method ModifyIpv6GatewayAttributes modifyIpv6GatewayAttributes(array $options = [])
 * @method ModifyIpv6GatewaySpec modifyIpv6GatewaySpec(array $options = [])
 * @method DescribeIpv6Gateways describeIpv6Gateways(array $options = [])
 * @method DescribeIpv6Addresses describeIpv6Addresses(array $options = [])
 * @method DeleteIpv6Gateway deleteIpv6Gateway(array $options = [])
 * @method DeleteIpv6InternetEgressOnlyRule deleteIpv6InternetEgressOnlyRule(array $options = [])
 * @method CreateIpv6InternetEgressOnlyRule createIpv6InternetEgressOnlyRule(array $options = [])
 * @method CreateIpv6Gateway createIpv6Gateway(array $options = [])
 * @method AllocateIpv6InternetBandwidth allocateIpv6InternetBandwidth(array $options = [])
 * @method AllocateEipAddresses allocateEipAddresses(array $options = [])
 * @method DescribeIPv6TranslatorAclListAttributes describeIPv6TranslatorAclListAttributes(array $options = [])
 * @method ModifyIPv6TranslatorAclAttribute modifyIPv6TranslatorAclAttribute(array $options = [])
 * @method DescribeIPv6TranslatorAclLists describeIPv6TranslatorAclLists(array $options = [])
 * @method RemoveIPv6TranslatorAclListEntry removeIPv6TranslatorAclListEntry(array $options = [])
 * @method AddIPv6TranslatorAclListEntry addIPv6TranslatorAclListEntry(array $options = [])
 * @method DeleteIPv6TranslatorAclList deleteIPv6TranslatorAclList(array $options = [])
 * @method CreateIPv6TranslatorAclList createIPv6TranslatorAclList(array $options = [])
 * @method SetPublicIpTrafficAuditLogStatus setPublicIpTrafficAuditLogStatus(array $options = [])
 * @method DescribePublicIpTrafficAuditLogAttribute describePublicIpTrafficAuditLogAttribute(array $options = [])
 * @method DeleteExpressConnect deleteExpressConnect(array $options = [])
 * @method DescribeTrafficAuditLogAttribute describeTrafficAuditLogAttribute(array $options = [])
 * @method SetTrafficAuditLogStatus setTrafficAuditLogStatus(array $options = [])
 * @method DeleteIPv6Translator deleteIPv6Translator(array $options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute(array $options = [])
 * @method DeleteFlowLog deleteFlowLog(array $options = [])
 * @method DescribeFlowLogs describeFlowLogs(array $options = [])
 * @method DeactiveFlowLog deactiveFlowLog(array $options = [])
 * @method ActiveFlowLog activeFlowLog(array $options = [])
 * @method CreateFlowLog createFlowLog(array $options = [])
 * @method DescribeIPv6TranslatorEntries describeIPv6TranslatorEntries(array $options = [])
 * @method ModifyIPv6TranslatorEntry modifyIPv6TranslatorEntry(array $options = [])
 * @method DeleteIPv6TranslatorEntry deleteIPv6TranslatorEntry(array $options = [])
 * @method CreateIPv6TranslatorEntry createIPv6TranslatorEntry(array $options = [])
 * @method ModifyIPv6TranslatorBandwidth modifyIPv6TranslatorBandwidth(array $options = [])
 * @method ModifyIPv6TranslatorAttribute modifyIPv6TranslatorAttribute(array $options = [])
 * @method DescribeIPv6Translators describeIPv6Translators(array $options = [])
 * @method CreateIPv6Translator createIPv6Translator(array $options = [])
 * @method UnassociateRouteTable unassociateRouteTable(array $options = [])
 * @method DeleteRouteTable deleteRouteTable(array $options = [])
 * @method AssociateRouteTable associateRouteTable(array $options = [])
 * @method CreateVpnGateway createVpnGateway(array $options = [])
 * @method DescribeNetworkQuotas describeNetworkQuotas(array $options = [])
 * @method ModifyRouteEntry modifyRouteEntry(array $options = [])
 * @method ReverseLogCollectionStatus reverseLogCollectionStatus(array $options = [])
 * @method SetLogCollectionAttribute setLogCollectionAttribute(array $options = [])
 * @method DeleteLogCollectionAttribute deleteLogCollectionAttribute(array $options = [])
 * @method RevokeInstanceFromCen revokeInstanceFromCen(array $options = [])
 * @method GrantInstanceToCen grantInstanceToCen(array $options = [])
 * @method DescribeGrantRulesToCen describeGrantRulesToCen(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method CreateRouteTable createRouteTable(array $options = [])
 * @method DescribeSslVpnClientCert describeSslVpnClientCert(array $options = [])
 * @method RemoveGlobalAccelerationInstanceIp removeGlobalAccelerationInstanceIp(array $options = [])
 * @method AddGlobalAccelerationInstanceIp addGlobalAccelerationInstanceIp(array $options = [])
 * @method RevokeInstanceFromCbn revokeInstanceFromCbn(array $options = [])
 * @method ModifySslVpnServer modifySslVpnServer(array $options = [])
 * @method ModifySslVpnClientCert modifySslVpnClientCert(array $options = [])
 * @method DescribeSslVpnServers describeSslVpnServers(array $options = [])
 * @method CreateSslVpnServer createSslVpnServer(array $options = [])
 * @method DeleteSslVpnClientCert deleteSslVpnClientCert(array $options = [])
 * @method DeleteSslVpnServer deleteSslVpnServer(array $options = [])
 * @method DescribeSslVpnClientCerts describeSslVpnClientCerts(array $options = [])
 * @method CreateSslVpnClientCert createSslVpnClientCert(array $options = [])
 * @method DescribeRegionPublicIpAddress describeRegionPublicIpAddress(array $options = [])
 * @method ModifyRouteTableAttributes modifyRouteTableAttributes(array $options = [])
 * @method TestCrmAction testCrmAction(array $options = [])
 * @method TestAction testAction(array $options = [])
 * @method DescribeVpnConnectionLogs describeVpnConnectionLogs(array $options = [])
 * @method ModifyPrivateNatGateway modifyPrivateNatGateway(array $options = [])
 * @method CreatePrivateNatGateway createPrivateNatGateway(array $options = [])
 * @method ModifyPrivateSNatEntry modifyPrivateSNatEntry(array $options = [])
 * @method DescribePrivateNatGateways describePrivateNatGateways(array $options = [])
 * @method DescribePrivateSNatEntries describePrivateSNatEntries(array $options = [])
 * @method ModifyPrivateDNatEntry modifyPrivateDNatEntry(array $options = [])
 * @method DeletePrivateSNatEntry deletePrivateSNatEntry(array $options = [])
 * @method DescribePrivateDNatEntries describePrivateDNatEntries(array $options = [])
 * @method DeletePrivateDNatEntry deletePrivateDNatEntry(array $options = [])
 * @method DeletePrivateNatGateway deletePrivateNatGateway(array $options = [])
 * @method CreatePrivateDNatEntry createPrivateDNatEntry(array $options = [])
 * @method CreatePrivateSNatEntry createPrivateSNatEntry(array $options = [])
 * @method DescribeRouteTableList describeRouteTableList(array $options = [])
 * @method DescribeBgpNetworks describeBgpNetworks(array $options = [])
 * @method DescribeRouterInterfacesForGlobal describeRouterInterfacesForGlobal(array $options = [])
 * @method ModifyCommonBandwidthPackagePayType modifyCommonBandwidthPackagePayType(array $options = [])
 * @method ModifyEipPayType modifyEipPayType(array $options = [])
 * @method ModifyGlobalAccelerationInstanceAttributes modifyGlobalAccelerationInstanceAttributes(array $options = [])
 * @method ModifyGlobalAccelerationInstanceSpec modifyGlobalAccelerationInstanceSpec(array $options = [])
 * @method UnassociateGlobalAccelerationInstance unassociateGlobalAccelerationInstance(array $options = [])
 * @method DeleteGlobalAccelerationInstance deleteGlobalAccelerationInstance(array $options = [])
 * @method DescribeGlobalAccelerationInstances describeGlobalAccelerationInstances(array $options = [])
 * @method DescribeServerRelatedGlobalAccelerationInstances describeServerRelatedGlobalAccelerationInstances(array $options = [])
 * @method AssociateGlobalAccelerationInstance associateGlobalAccelerationInstance(array $options = [])
 * @method CreateGlobalAccelerationInstance createGlobalAccelerationInstance(array $options = [])
 * @method TestParam testParam(array $options = [])
 * @method DescribeVSwitchAttributes describeVSwitchAttributes(array $options = [])
 * @method ModifyCommonBandwidthPackageSpec modifyCommonBandwidthPackageSpec(array $options = [])
 * @method RemoveCommonBandwidthPackageIp removeCommonBandwidthPackageIp(array $options = [])
 * @method DeleteCommonBandwidthPackage deleteCommonBandwidthPackage(array $options = [])
 * @method DescribeCommonBandwidthPackages describeCommonBandwidthPackages(array $options = [])
 * @method ModifyCommonBandwidthPackageAttribute modifyCommonBandwidthPackageAttribute(array $options = [])
 * @method AddCommonBandwidthPackageIp addCommonBandwidthPackageIp(array $options = [])
 * @method CreateCommonBandwidthPackage createCommonBandwidthPackage(array $options = [])
 * @method DescribeVRouterByVpcId describeVRouterByVpcId(array $options = [])
 * @method DescribeBgpGroups describeBgpGroups(array $options = [])
 * @method DescribeBgpPeers describeBgpPeers(array $options = [])
 * @method DescribeNqas describeNqas(array $options = [])
 * @method ModifyBgpGroupAttribute modifyBgpGroupAttribute(array $options = [])
 * @method ModifyNqa modifyNqa(array $options = [])
 * @method CreateBgpPeer createBgpPeer(array $options = [])
 * @method CreateNqa createNqa(array $options = [])
 * @method DeleteBgpGroup deleteBgpGroup(array $options = [])
 * @method DeleteBgpNetwork deleteBgpNetwork(array $options = [])
 * @method DeleteBgpPeer deleteBgpPeer(array $options = [])
 * @method DeleteNqa deleteNqa(array $options = [])
 * @method AddBgpNetwork addBgpNetwork(array $options = [])
 * @method CreateBgpGroup createBgpGroup(array $options = [])
 * @method DescribeVpcAttribute describeVpcAttribute(array $options = [])
 * @method DisableVpcClassicLink disableVpcClassicLink(array $options = [])
 * @method EnableVpcClassicLink enableVpcClassicLink(array $options = [])
 * @method UnassociatePhysicalConnectionFromVirtualBorderRouter unassociatePhysicalConnectionFromVirtualBorderRouter(array $options = [])
 * @method AssociatePhysicalConnectionToVirtualBorderRouter associatePhysicalConnectionToVirtualBorderRouter(array $options = [])
 * @method CreatePhysicalConnectionNew createPhysicalConnectionNew(array $options = [])
 * @method DescribeVpnGateways describeVpnGateways(array $options = [])
 * @method DownloadVpnConnectionConfig downloadVpnConnectionConfig(array $options = [])
 * @method ModifyCustomerGatewayAttribute modifyCustomerGatewayAttribute(array $options = [])
 * @method ModifyVpnConnectionAttribute modifyVpnConnectionAttribute(array $options = [])
 * @method ModifyVpnGatewayAttribute modifyVpnGatewayAttribute(array $options = [])
 * @method DescribeCustomerGateways describeCustomerGateways(array $options = [])
 * @method DescribeVpnConnection describeVpnConnection(array $options = [])
 * @method DescribeVpnConnections describeVpnConnections(array $options = [])
 * @method DescribeVpnGateway describeVpnGateway(array $options = [])
 * @method CreateVpnConnection createVpnConnection(array $options = [])
 * @method DeleteCustomerGateway deleteCustomerGateway(array $options = [])
 * @method DeleteVpnConnection deleteVpnConnection(array $options = [])
 * @method DeleteVpnGateway deleteVpnGateway(array $options = [])
 * @method DescribeCustomerGateway describeCustomerGateway(array $options = [])
 * @method CreateCustomerGateway createCustomerGateway(array $options = [])
 * @method ModifySnatEntry modifySnatEntry(array $options = [])
 * @method ModifyNatGatewayAttribute modifyNatGatewayAttribute(array $options = [])
 * @method ModifyNatGatewaySpec modifyNatGatewaySpec(array $options = [])
 * @method DescribeSnatTableEntries describeSnatTableEntries(array $options = [])
 * @method ModifyBandwidthPackageAttribute modifyBandwidthPackageAttribute(array $options = [])
 * @method DeleteSnatEntry deleteSnatEntry(array $options = [])
 * @method CreateSnatEntry createSnatEntry(array $options = [])
 * @method CreateBandwidthPackage createBandwidthPackage(array $options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries(array $options = [])
 * @method ModifyBandwidthPackageSpec modifyBandwidthPackageSpec(array $options = [])
 * @method ModifyForwardEntry modifyForwardEntry(array $options = [])
 * @method RemoveBandwidthPackageIps removeBandwidthPackageIps(array $options = [])
 * @method DeleteForwardEntry deleteForwardEntry(array $options = [])
 * @method DeleteNatGateway deleteNatGateway(array $options = [])
 * @method DescribeBandwidthPackages describeBandwidthPackages(array $options = [])
 * @method DescribeNatGateways describeNatGateways(array $options = [])
 * @method CreateForwardEntry createForwardEntry(array $options = [])
 * @method CreateNatGateway createNatGateway(array $options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage(array $options = [])
 * @method AddBandwidthPackageIps addBandwidthPackageIps(array $options = [])
 * @method UnassociateHaVip unassociateHaVip(array $options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute(array $options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute(array $options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute(array $options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter(array $options = [])
 * @method ReleaseEipAddress releaseEipAddress(array $options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection(array $options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter(array $options = [])
 * @method UnassociateEipAddress unassociateEipAddress(array $options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute(array $options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute(array $options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec(array $options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute(array $options = [])
 * @method DescribeVRouters describeVRouters(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection(array $options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute(array $options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces(array $options = [])
 * @method DescribeRouteTables describeRouteTables(array $options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters(array $options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeEipMonitorData describeEipMonitorData(array $options = [])
 * @method DescribeHaVips describeHaVips(array $options = [])
 * @method DescribePhysicalConnections describePhysicalConnections(array $options = [])
 * @method DeleteVpc deleteVpc(array $options = [])
 * @method DeleteVSwitch deleteVSwitch(array $options = [])
 * @method DescribeAccessPoints describeAccessPoints(array $options = [])
 * @method DescribeEipAddresses describeEipAddresses(array $options = [])
 * @method CreateVpc createVpc(array $options = [])
 * @method CreateVSwitch createVSwitch(array $options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface(array $options = [])
 * @method DeleteHaVip deleteHaVip(array $options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection(array $options = [])
 * @method DeleteRouteEntry deleteRouteEntry(array $options = [])
 * @method DeleteRouterInterface deleteRouterInterface(array $options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter(array $options = [])
 * @method CreateHaVip createHaVip(array $options = [])
 * @method CreatePhysicalConnection createPhysicalConnection(array $options = [])
 * @method CreateRouteEntry createRouteEntry(array $options = [])
 * @method CreateRouterInterface createRouterInterface(array $options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter(array $options = [])
 * @method ActivateRouterInterface activateRouterInterface(array $options = [])
 * @method AllocateEipAddress allocateEipAddress(array $options = [])
 * @method AssociateEipAddress associateEipAddress(array $options = [])
 * @method AssociateHaVip associateHaVip(array $options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection(array $options = [])
 * @method ConnectRouterInterface connectRouterInterface(array $options = [])
 */
class VpcApiResolver
{
    use ApiResolverTrait;
}

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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTunnelInstanceId()
 * @method $this withTunnelInstanceId($value)
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
class DescribeVpnGreTunnels extends V20160428Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTunnelInstanceId()
 * @method $this withTunnelInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVpnGreTunnel extends V20160428Rpc
{
}

/**
 * @method string getKeepaliveEnable()
 * @method $this withKeepaliveEnable($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeepaliveSeconds()
 * @method $this withKeepaliveSeconds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getTunnelInstanceId()
 * @method $this withTunnelInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getKeepaliveTimes()
 * @method $this withKeepaliveTimes($value)
 * @method string getChecksumEnable()
 * @method $this withChecksumEnable($value)
 * @method string getGreKey()
 * @method $this withGreKey($value)
 */
class ModifyVpnGreTunnel extends V20160428Rpc
{
}

/**
 * @method string getKeepaliveEnable()
 * @method $this withKeepaliveEnable($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeepaliveSeconds()
 * @method $this withKeepaliveSeconds($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getCustomerGatewayId()
 * @method $this withCustomerGatewayId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getKeepaliveTimes()
 * @method $this withKeepaliveTimes($value)
 * @method string getTunnelIp()
 * @method $this withTunnelIp($value)
 * @method string getChecksumEnable()
 * @method $this withChecksumEnable($value)
 * @method string getGreKey()
 * @method $this withGreKey($value)
 */
class CreateVpnGreTunnel extends V20160428Rpc
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
     * @param array $zoneId
     *
     * @return $this
     */
    public function withZoneId(array $zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        foreach ($zoneId as $i => $iValue) {
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
     * @param array $pMInfo
     *
     * @return $this
     */
    public function withPMInfo(array $pMInfo)
    {
        $this->data['PMInfo'] = $pMInfo;
        foreach ($pMInfo as $depth1 => $depth1Value) {
            $this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMCertificateNo'] = $depth1Value['PMCertificateNo'];
            $this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMName'] = $depth1Value['PMName'];
            $this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMCertificateType'] = $depth1Value['PMCertificateType'];
            $this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMContactInfo'] = $depth1Value['PMContactInfo'];
            $this->options['query']['PMInfo.' . ($depth1 + 1) . '.PMGender'] = $depth1Value['PMGender'];
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getRouterInterfaceId()
 * @method $this withRouterInterfaceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteExpressConnect extends V20160428Rpc
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
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
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
            $this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.InternetChargeType'] = $depth1Value['InternetChargeType'];
            $this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.ISP'] = $depth1Value['ISP'];
            $this->options['query']['BandwidthPackage.' . ($depth1 + 1) . '.IpCount'] = $depth1Value['IpCount'];
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
     * @param array $nextHopList
     *
     * @return $this
     */
    public function withNextHopList(array $nextHopList)
    {
        $this->data['NextHopList'] = $nextHopList;
        foreach ($nextHopList as $depth1 => $depth1Value) {
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopId'] = $depth1Value['NextHopId'];
            $this->options['query']['NextHopList.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
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
 * @method string getMode()
 * @method $this withMode($value)
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
