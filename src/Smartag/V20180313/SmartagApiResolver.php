<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateSmartAccessGateway activateSmartAccessGateway(array $options = [])
 * @method ActiveFlowLog activeFlowLog(array $options = [])
 * @method AddACLRule addACLRule(array $options = [])
 * @method AddDnatEntry addDnatEntry(array $options = [])
 * @method AddNetworkOptimizationSetting addNetworkOptimizationSetting(array $options = [])
 * @method AddSagCidr addSagCidr(array $options = [])
 * @method AddSnatEntry addSnatEntry(array $options = [])
 * @method AssociateACL associateACL(array $options = [])
 * @method AssociateFlowLog associateFlowLog(array $options = [])
 * @method AssociateQos associateQos(array $options = [])
 * @method AttachNetworkOptimizationSags attachNetworkOptimizationSags(array $options = [])
 * @method BindSerialNumber bindSerialNumber(array $options = [])
 * @method BindSmartAccessGateway bindSmartAccessGateway(array $options = [])
 * @method BindVbr bindVbr(array $options = [])
 * @method ClearSagCipher clearSagCipher(array $options = [])
 * @method ClearSagRouteableAddress clearSagRouteableAddress(array $options = [])
 * @method CreateACL createACL(array $options = [])
 * @method CreateCloudConnectNetwork createCloudConnectNetwork(array $options = [])
 * @method CreateEnterpriseCode createEnterpriseCode(array $options = [])
 * @method CreateFlowLog createFlowLog(array $options = [])
 * @method CreateHealthCheck createHealthCheck(array $options = [])
 * @method CreateNetworkOptimization createNetworkOptimization(array $options = [])
 * @method CreateQos createQos(array $options = [])
 * @method CreateQosCar createQosCar(array $options = [])
 * @method CreateQosPolicy createQosPolicy(array $options = [])
 * @method CreateSagExpressConnectInterface createSagExpressConnectInterface(array $options = [])
 * @method CreateSagStaticRoute createSagStaticRoute(array $options = [])
 * @method CreateSmartAccessGateway createSmartAccessGateway(array $options = [])
 * @method CreateSmartAccessGatewayClientUser createSmartAccessGatewayClientUser(array $options = [])
 * @method CreateSmartAccessGatewaySoftware createSmartAccessGatewaySoftware(array $options = [])
 * @method DeactiveFlowLog deactiveFlowLog(array $options = [])
 * @method DeleteACL deleteACL(array $options = [])
 * @method DeleteACLRule deleteACLRule(array $options = [])
 * @method DeleteCloudConnectNetwork deleteCloudConnectNetwork(array $options = [])
 * @method DeleteDnatEntry deleteDnatEntry(array $options = [])
 * @method DeleteEnterpriseCode deleteEnterpriseCode(array $options = [])
 * @method DeleteFlowLog deleteFlowLog(array $options = [])
 * @method DeleteHealthCheck deleteHealthCheck(array $options = [])
 * @method DeleteNetworkOptimization deleteNetworkOptimization(array $options = [])
 * @method DeleteNetworkOptimizationSetting deleteNetworkOptimizationSetting(array $options = [])
 * @method DeleteQos deleteQos(array $options = [])
 * @method DeleteQosCar deleteQosCar(array $options = [])
 * @method DeleteQosPolicy deleteQosPolicy(array $options = [])
 * @method DeleteRouteDistributionStrategy deleteRouteDistributionStrategy(array $options = [])
 * @method DeleteSagCidr deleteSagCidr(array $options = [])
 * @method DeleteSagExpressConnectInterface deleteSagExpressConnectInterface(array $options = [])
 * @method DeleteSagStaticRoute deleteSagStaticRoute(array $options = [])
 * @method DeleteSmartAccessGateway deleteSmartAccessGateway(array $options = [])
 * @method DeleteSmartAccessGatewayClientUser deleteSmartAccessGatewayClientUser(array $options = [])
 * @method DeleteSnatEntry deleteSnatEntry(array $options = [])
 * @method DescribeACLAttribute describeACLAttribute(array $options = [])
 * @method DescribeACLs describeACLs(array $options = [])
 * @method DescribeBindableSmartAccessGateways describeBindableSmartAccessGateways(array $options = [])
 * @method DescribeClientUserDNS describeClientUserDNS(array $options = [])
 * @method DescribeCloudConnectNetworks describeCloudConnectNetworks(array $options = [])
 * @method DescribeDeviceAutoUpgradePolicy describeDeviceAutoUpgradePolicy(array $options = [])
 * @method DescribeDnatEntries describeDnatEntries(array $options = [])
 * @method DescribeFlowLogs describeFlowLogs(array $options = [])
 * @method DescribeFlowLogSags describeFlowLogSags(array $options = [])
 * @method DescribeGrantRules describeGrantRules(array $options = [])
 * @method DescribeGrantSagRules describeGrantSagRules(array $options = [])
 * @method DescribeGrantSagVbrRules describeGrantSagVbrRules(array $options = [])
 * @method DescribeHealthCheckAttribute describeHealthCheckAttribute(array $options = [])
 * @method DescribeHealthChecks describeHealthChecks(array $options = [])
 * @method DescribeNetworkOptimizations describeNetworkOptimizations(array $options = [])
 * @method DescribeNetworkOptimizationSags describeNetworkOptimizationSags(array $options = [])
 * @method DescribeNetworkOptimizationSettings describeNetworkOptimizationSettings(array $options = [])
 * @method DescribePbrInterfaces describePbrInterfaces(array $options = [])
 * @method DescribePbrRules describePbrRules(array $options = [])
 * @method DescribePolicyBasedRoutings describePolicyBasedRoutings(array $options = [])
 * @method DescribeQosCars describeQosCars(array $options = [])
 * @method DescribeQoses describeQoses(array $options = [])
 * @method DescribeQosPolicies describeQosPolicies(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRouteDistributionStrategies describeRouteDistributionStrategies(array $options = [])
 * @method DescribeSagCurrentDns describeSagCurrentDns(array $options = [])
 * @method DescribeSAGDeviceInfo describeSAGDeviceInfo(array $options = [])
 * @method DescribeSagDropTopN describeSagDropTopN(array $options = [])
 * @method DescribeSagECRouteBackupAttribute describeSagECRouteBackupAttribute(array $options = [])
 * @method DescribeSagExpressConnectInterfaceList describeSagExpressConnectInterfaceList(array $options = [])
 * @method DescribeSagGlobalRouteProtocol describeSagGlobalRouteProtocol(array $options = [])
 * @method DescribeSagHa describeSagHa(array $options = [])
 * @method DescribeSagLanList describeSagLanList(array $options = [])
 * @method DescribeSagManagementPort describeSagManagementPort(array $options = [])
 * @method DescribeSagOnlineClientStatistics describeSagOnlineClientStatistics(array $options = [])
 * @method DescribeSagPortList describeSagPortList(array $options = [])
 * @method DescribeSagPortRouteProtocolList describeSagPortRouteProtocolList(array $options = [])
 * @method DescribeSagRemoteAccess describeSagRemoteAccess(array $options = [])
 * @method DescribeSagRouteableAddress describeSagRouteableAddress(array $options = [])
 * @method DescribeSagRouteList describeSagRouteList(array $options = [])
 * @method DescribeSagRouteProtocolBgp describeSagRouteProtocolBgp(array $options = [])
 * @method DescribeSagRouteProtocolOspf describeSagRouteProtocolOspf(array $options = [])
 * @method DescribeSagStaticRouteList describeSagStaticRouteList(array $options = [])
 * @method DescribeSagTrafficTopN describeSagTrafficTopN(array $options = [])
 * @method DescribeSagUserDns describeSagUserDns(array $options = [])
 * @method DescribeSagVbrRelations describeSagVbrRelations(array $options = [])
 * @method DescribeSagWan4G describeSagWan4G(array $options = [])
 * @method DescribeSagWanList describeSagWanList(array $options = [])
 * @method DescribeSagWanSnat describeSagWanSnat(array $options = [])
 * @method DescribeSagWifi describeSagWifi(array $options = [])
 * @method DescribeSmartAccessGatewayAttribute describeSmartAccessGatewayAttribute(array $options = [])
 * @method DescribeSmartAccessGatewayClientUsers describeSmartAccessGatewayClientUsers(array $options = [])
 * @method DescribeSmartAccessGatewayHa describeSmartAccessGatewayHa(array $options = [])
 * @method DescribeSmartAccessGateways describeSmartAccessGateways(array $options = [])
 * @method DescribeSmartAccessGatewayVersions describeSmartAccessGatewayVersions(array $options = [])
 * @method DescribeSnatEntries describeSnatEntries(array $options = [])
 * @method DescribeUnbindFlowLogSags describeUnbindFlowLogSags(array $options = [])
 * @method DescribeUserFlowStatistics describeUserFlowStatistics(array $options = [])
 * @method DescribeUserOnlineClients describeUserOnlineClients(array $options = [])
 * @method DescribeUserOnlineClientStatistics describeUserOnlineClientStatistics(array $options = [])
 * @method DetachNetworkOptimizationSags detachNetworkOptimizationSags(array $options = [])
 * @method DiagnoseSmartAccessGateway diagnoseSmartAccessGateway(array $options = [])
 * @method DisableSmartAccessGatewayUser disableSmartAccessGatewayUser(array $options = [])
 * @method DisableSmartAGDpiMonitor disableSmartAGDpiMonitor(array $options = [])
 * @method DisassociateACL disassociateACL(array $options = [])
 * @method DisassociateFlowLog disassociateFlowLog(array $options = [])
 * @method DisassociateQos disassociateQos(array $options = [])
 * @method DiscribeSmartAccessGatewayDiagnosisReport discribeSmartAccessGatewayDiagnosisReport(array $options = [])
 * @method DowngradeSmartAccessGateway downgradeSmartAccessGateway(array $options = [])
 * @method DowngradeSmartAccessGatewaySoftware downgradeSmartAccessGatewaySoftware(array $options = [])
 * @method EnableSmartAccessGatewayUser enableSmartAccessGatewayUser(array $options = [])
 * @method EnableSmartAGDpiMonitor enableSmartAGDpiMonitor(array $options = [])
 * @method GetAclAttribute getAclAttribute(array $options = [])
 * @method GetCloudConnectNetworkUseLimit getCloudConnectNetworkUseLimit(array $options = [])
 * @method GetQosAttribute getQosAttribute(array $options = [])
 * @method GetSmartAccessGatewayUseLimit getSmartAccessGatewayUseLimit(array $options = [])
 * @method GetSmartAGDpiAttribute getSmartAGDpiAttribute(array $options = [])
 * @method GrantInstanceToCbn grantInstanceToCbn(array $options = [])
 * @method GrantSagInstanceToCcn grantSagInstanceToCcn(array $options = [])
 * @method GrantSagInstanceToVbr grantSagInstanceToVbr(array $options = [])
 * @method KickOutClients kickOutClients(array $options = [])
 * @method ListAccessPointNetworkQualities listAccessPointNetworkQualities(array $options = [])
 * @method ListAccessPoints listAccessPoints(array $options = [])
 * @method ListDpiConfigError listDpiConfigError(array $options = [])
 * @method ListDpiGroups listDpiGroups(array $options = [])
 * @method ListDpiSignatures listDpiSignatures(array $options = [])
 * @method ListEnterpriseCode listEnterpriseCode(array $options = [])
 * @method ListSmartAGApiUnsupportedFeature listSmartAGApiUnsupportedFeature(array $options = [])
 * @method ListSmartAGByAccessPoint listSmartAGByAccessPoint(array $options = [])
 * @method ModifyACL modifyACL(array $options = [])
 * @method ModifyACLRule modifyACLRule(array $options = [])
 * @method ModifyClientUserDNS modifyClientUserDNS(array $options = [])
 * @method ModifyCloudConnectNetwork modifyCloudConnectNetwork(array $options = [])
 * @method ModifyDeviceAutoUpgradePolicy modifyDeviceAutoUpgradePolicy(array $options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute(array $options = [])
 * @method ModifyHealthCheck modifyHealthCheck(array $options = [])
 * @method ModifyNetworkOptimization modifyNetworkOptimization(array $options = [])
 * @method ModifyQos modifyQos(array $options = [])
 * @method ModifyQosCar modifyQosCar(array $options = [])
 * @method ModifyQosPolicy modifyQosPolicy(array $options = [])
 * @method ModifyRouteDistributionStrategy modifyRouteDistributionStrategy(array $options = [])
 * @method ModifySAGAdminPassword modifySAGAdminPassword(array $options = [])
 * @method ModifySagCidr modifySagCidr(array $options = [])
 * @method ModifySagECRouteBackup modifySagECRouteBackup(array $options = [])
 * @method ModifySagExpressConnectInterface modifySagExpressConnectInterface(array $options = [])
 * @method ModifySagGlobalRouteProtocol modifySagGlobalRouteProtocol(array $options = [])
 * @method ModifySagHa modifySagHa(array $options = [])
 * @method ModifySagLan modifySagLan(array $options = [])
 * @method ModifySagManagementPort modifySagManagementPort(array $options = [])
 * @method ModifySagPortRole modifySagPortRole(array $options = [])
 * @method ModifySagPortRouteProtocol modifySagPortRouteProtocol(array $options = [])
 * @method ModifySagRemoteAccess modifySagRemoteAccess(array $options = [])
 * @method ModifySagRouteProtocolBgp modifySagRouteProtocolBgp(array $options = [])
 * @method ModifySagRouteProtocolOspf modifySagRouteProtocolOspf(array $options = [])
 * @method ModifySagStaticRoute modifySagStaticRoute(array $options = [])
 * @method ModifySagUserDns modifySagUserDns(array $options = [])
 * @method ModifySagWan modifySagWan(array $options = [])
 * @method ModifySagWanSnat modifySagWanSnat(array $options = [])
 * @method ModifySagWifi modifySagWifi(array $options = [])
 * @method ModifySmartAccessGateway modifySmartAccessGateway(array $options = [])
 * @method ModifySmartAccessGatewayClientUser modifySmartAccessGatewayClientUser(array $options = [])
 * @method ModifySmartAccessGatewayUpBandwidth modifySmartAccessGatewayUpBandwidth(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method OrchestrateSagECRouteBackup orchestrateSagECRouteBackup(array $options = [])
 * @method ProbeAccessPointNetworkQuality probeAccessPointNetworkQuality(array $options = [])
 * @method RebootSmartAccessGateway rebootSmartAccessGateway(array $options = [])
 * @method ResetSmartAccessGatewayClientUserPassword resetSmartAccessGatewayClientUserPassword(array $options = [])
 * @method RevokeInstanceFromCbn revokeInstanceFromCbn(array $options = [])
 * @method RevokeInstanceFromVbr revokeInstanceFromVbr(array $options = [])
 * @method RevokeSagInstanceFromCcn revokeSagInstanceFromCcn(array $options = [])
 * @method RoamClientUser roamClientUser(array $options = [])
 * @method SetSagRouteableAddress setSagRouteableAddress(array $options = [])
 * @method SynchronizeSmartAGWebConfig synchronizeSmartAGWebConfig(array $options = [])
 * @method UnbindSerialNumber unbindSerialNumber(array $options = [])
 * @method UnbindSmartAccessGateway unbindSmartAccessGateway(array $options = [])
 * @method UnbindVbr unbindVbr(array $options = [])
 * @method UnicomOrderConfirm unicomOrderConfirm(array $options = [])
 * @method UnicomSignConfirm unicomSignConfirm(array $options = [])
 * @method UnlockSmartAccessGateway unlockSmartAccessGateway(array $options = [])
 * @method UpdateEnterpriseCode updateEnterpriseCode(array $options = [])
 * @method UpdateSmartAccessGatewayVersion updateSmartAccessGatewayVersion(array $options = [])
 * @method UpdateSmartAGAccessPoint updateSmartAGAccessPoint(array $options = [])
 * @method UpdateSmartAGDpiAttribute updateSmartAGDpiAttribute(array $options = [])
 * @method UpdateSmartAGEnterpriseCode updateSmartAGEnterpriseCode(array $options = [])
 * @method UpgradeSmartAccessGateway upgradeSmartAccessGateway(array $options = [])
 * @method UpgradeSmartAccessGatewaySoftware upgradeSmartAccessGatewaySoftware(array $options = [])
 */
class SmartagApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Smartag';

    /** @var string */
    public $version = '2018-03-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'smartag';
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ActivateSmartAccessGateway extends Rpc
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
class ActiveFlowLog extends Rpc
{
}

/**
 * @method array getDpiGroupIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDestCidr()
 * @method $this withDestCidr($value)
 * @method array getDpiSignatureIds()
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestPortRange()
 * @method $this withDestPortRange($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddACLRule extends Rpc
{

    /**
     * @param array $dpiGroupIds
     *
     * @return $this
     */
	public function withDpiGroupIds(array $dpiGroupIds)
	{
	    $this->data['DpiGroupIds'] = $dpiGroupIds;
		foreach ($dpiGroupIds as $i => $iValue) {
			$this->options['query']['DpiGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dpiSignatureIds
     *
     * @return $this
     */
	public function withDpiSignatureIds(array $dpiSignatureIds)
	{
	    $this->data['DpiSignatureIds'] = $dpiSignatureIds;
		foreach ($dpiSignatureIds as $i => $iValue) {
			$this->options['query']['DpiSignatureIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInternalIp()
 * @method $this withInternalIp($value)
 * @method string getExternalIp()
 * @method $this withExternalIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 * @method string getExternalPort()
 * @method $this withExternalPort($value)
 */
class AddDnatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class AddNetworkOptimizationSetting extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCidr()
 * @method $this withCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableBackup()
 * @method $this withEnableBackup($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class AddSagCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class AddSnatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class AssociateACL extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class AssociateFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class AssociateQos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method array getSmartAGIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachNetworkOptimizationSags extends Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
	public function withSmartAGIds(array $smartAGIds)
	{
	    $this->data['SmartAGIds'] = $smartAGIds;
		foreach ($smartAGIds as $i => $iValue) {
			$this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class BindSerialNumber extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGUid()
 * @method $this withSmartAGUid($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class BindSmartAccessGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getVbrRegionId()
 * @method $this withVbrRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGUid()
 * @method $this withSmartAGUid($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class BindVbr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSnNumber()
 * @method $this withSnNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 */
class ClearSagCipher extends Rpc
{
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 */
class ClearSagRouteableAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
 * @method string getName()
 * @method $this withName($value)
 */
class CreateACL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSnatCidrBlock()
 * @method $this withSnatCidrBlock($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 */
class CreateCloudConnectNetwork extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnterpriseCode()
 * @method $this withEnterpriseCode($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class CreateEnterpriseCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetflowVersion()
 * @method $this withNetflowVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInactiveAging()
 * @method $this withInactiveAging($value)
 * @method string getSlsRegionId()
 * @method $this withSlsRegionId($value)
 * @method string getActiveAging()
 * @method $this withActiveAging($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetflowServerPort()
 * @method $this withNetflowServerPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetflowServerIp()
 * @method $this withNetflowServerIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateFlowLog extends Rpc
{
}

/**
 * @method string getProbeInterval()
 * @method $this withProbeInterval($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFailCountThreshold()
 * @method $this withFailCountThreshold($value)
 * @method string getProbeTimeout()
 * @method $this withProbeTimeout($value)
 * @method string getRttFailThreshold()
 * @method $this withRttFailThreshold($value)
 * @method string getRttThreshold()
 * @method $this withRttThreshold($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDstIpAddr()
 * @method $this withDstIpAddr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSrcIpAddr()
 * @method $this withSrcIpAddr($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSrcPort()
 * @method $this withSrcPort($value)
 * @method string getProbeCount()
 * @method $this withProbeCount($value)
 */
class CreateHealthCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateNetworkOptimization extends Rpc
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
 * @method string getQosName()
 * @method $this withQosName($value)
 * @method string getQosDescription()
 * @method $this withQosDescription($value)
 */
class CreateQos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMinBandwidthAbs()
 * @method $this withMinBandwidthAbs($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPercentSourceType()
 * @method $this withPercentSourceType($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getMaxBandwidthAbs()
 * @method $this withMaxBandwidthAbs($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMaxBandwidthPercent()
 * @method $this withMaxBandwidthPercent($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getMinBandwidthPercent()
 * @method $this withMinBandwidthPercent($value)
 * @method string getLimitType()
 * @method $this withLimitType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateQosCar extends Rpc
{
}

/**
 * @method array getDpiGroupIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDestCidr()
 * @method $this withDestCidr($value)
 * @method array getDpiSignatureIds()
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestPortRange()
 * @method $this withDestPortRange($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateQosPolicy extends Rpc
{

    /**
     * @param array $dpiGroupIds
     *
     * @return $this
     */
	public function withDpiGroupIds(array $dpiGroupIds)
	{
	    $this->data['DpiGroupIds'] = $dpiGroupIds;
		foreach ($dpiGroupIds as $i => $iValue) {
			$this->options['query']['DpiGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dpiSignatureIds
     *
     * @return $this
     */
	public function withDpiSignatureIds(array $dpiSignatureIds)
	{
	    $this->data['DpiSignatureIds'] = $dpiSignatureIds;
		foreach ($dpiSignatureIds as $i => $iValue) {
			$this->options['query']['DpiSignatureIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class CreateSagExpressConnectInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 * @method string getDestinationCidr()
 * @method $this withDestinationCidr($value)
 */
class CreateSagStaticRoute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReceiverTown()
 * @method $this withReceiverTown($value)
 * @method string getReceiverDistrict()
 * @method $this withReceiverDistrict($value)
 * @method string getBuyerMessage()
 * @method $this withBuyerMessage($value)
 * @method string getReceiverState()
 * @method $this withReceiverState($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReceiverPhone()
 * @method $this withReceiverPhone($value)
 * @method string getHaType()
 * @method $this withHaType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getReceiverCountry()
 * @method $this withReceiverCountry($value)
 * @method string getMaxBandWidth()
 * @method $this withMaxBandWidth($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getReceiverAddress()
 * @method $this withReceiverAddress($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHardWareSpec()
 * @method $this withHardWareSpec($value)
 * @method string getReceiverEmail()
 * @method $this withReceiverEmail($value)
 * @method string getReceiverCity()
 * @method $this withReceiverCity($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getCPEVersion()
 * @method $this withCPEVersion($value)
 * @method string getReceiverMobile()
 * @method $this withReceiverMobile($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReceiverName()
 * @method $this withReceiverName($value)
 * @method string getAlreadyHaveSag()
 * @method $this withAlreadyHaveSag($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 * @method string getReceiverZip()
 * @method $this withReceiverZip($value)
 */
class CreateSmartAccessGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserMail()
 * @method $this withUserMail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateSmartAccessGatewayClientUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class CreateSmartAccessGatewaySoftware extends Rpc
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
class DeactiveFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteACL extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcrId()
 * @method $this withAcrId($value)
 */
class DeleteACLRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCloudConnectNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDnatEntryId()
 * @method $this withDnatEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 */
class DeleteDnatEntry extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnterpriseCode()
 * @method $this withEnterpriseCode($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DeleteEnterpriseCode extends Rpc
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
class DeleteFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHcInstanceId()
 * @method $this withHcInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteHealthCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteNetworkOptimization extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteNetworkOptimizationSetting extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteQos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosCarId()
 * @method $this withQosCarId($value)
 */
class DeleteQosCar extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosPolicyId()
 * @method $this withQosPolicyId($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteQosPolicy extends Rpc
{
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getDestCidrBlock()
 * @method $this withDestCidrBlock($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DeleteRouteDistributionStrategy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCidr()
 * @method $this withCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DeleteSagCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class DeleteSagExpressConnectInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 * @method string getDestinationCidr()
 * @method $this withDestinationCidr($value)
 */
class DeleteSagStaticRoute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteSmartAccessGateway extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteSmartAccessGatewayClientUser extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DeleteSnatEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeACLAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
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
class DescribeACLs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
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
 * @method string getCrossAccount()
 * @method $this withCrossAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeBindableSmartAccessGateways extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeClientUserDNS extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeCloudConnectNetworks extends Rpc
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionType()
 * @method $this withVersionType($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeDeviceAutoUpgradePolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
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
 * @method string getSagId()
 * @method $this withSagId($value)
 */
class DescribeDnatEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeFlowLogs extends Rpc
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
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DescribeFlowLogSags extends Rpc
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
 * @method string getAssociatedCcnId()
 * @method $this withAssociatedCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGrantRules extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeGrantSagRules extends Rpc
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
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeGrantSagVbrRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHcInstanceId()
 * @method $this withHcInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeHealthCheckAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHcInstanceId()
 * @method $this withHcInstanceId($value)
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeHealthChecks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
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
class DescribeNetworkOptimizations extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkOptimizationSags extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeNetworkOptimizationSettings extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPbrInstanceId()
 * @method $this withPbrInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePbrInterfaces extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPbrInstanceId()
 * @method $this withPbrInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePbrRules extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPbrInstanceId()
 * @method $this withPbrInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribePolicyBasedRoutings extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosCarId()
 * @method $this withQosCarId($value)
 */
class DescribeQosCars extends Rpc
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
 * @method string getQosIds()
 * @method $this withQosIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosName()
 * @method $this withQosName($value)
 */
class DescribeQoses extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosPolicyId()
 * @method $this withQosPolicyId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 */
class DescribeQosPolicies extends Rpc
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
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeRouteDistributionStrategies extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagCurrentDns extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSAGDeviceInfo extends Rpc
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
 * @method string getSize()
 * @method $this withSize($value)
 */
class DescribeSagDropTopN extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeSagECRouteBackupAttribute extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class DescribeSagExpressConnectInterfaceList extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagGlobalRouteProtocol extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagHa extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagLanList extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagManagementPort extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSmartAGIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSagOnlineClientStatistics extends Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
	public function withSmartAGIds(array $smartAGIds)
	{
	    $this->data['SmartAGIds'] = $smartAGIds;
		foreach ($smartAGIds as $i => $iValue) {
			$this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagPortList extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagPortRouteProtocolList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeSagRemoteAccess extends Rpc
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
 * @method string getSagId()
 * @method $this withSagId($value)
 */
class DescribeSagRouteableAddress extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagRouteList extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagRouteProtocolBgp extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagRouteProtocolOspf extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagStaticRouteList extends Rpc
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
 * @method string getSize()
 * @method $this withSize($value)
 */
class DescribeSagTrafficTopN extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagUserDns extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getVbrInstanceIds()
 * @method string getVbrRegionId()
 * @method $this withVbrRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSagVbrRelations extends Rpc
{

    /**
     * @param array $vbrInstanceIds
     *
     * @return $this
     */
	public function withVbrInstanceIds(array $vbrInstanceIds)
	{
	    $this->data['VbrInstanceIds'] = $vbrInstanceIds;
		foreach ($vbrInstanceIds as $i => $iValue) {
			$this->options['query']['VbrInstanceIds.' . ($i + 1)] = $iValue;
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagWan4G extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagWanList extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagWanSnat extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSagWifi extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeSmartAccessGatewayAttribute extends Rpc
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
 * @method string getUserMail()
 * @method $this withUserMail($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeSmartAccessGatewayClientUsers extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeSmartAccessGatewayHa extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getCanAssociateQos()
 * @method $this withCanAssociateQos($value)
 * @method string getSoftwareVersion()
 * @method $this withSoftwareVersion($value)
 * @method string getUnboundAclIds()
 * @method $this withUnboundAclIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVersionComparator()
 * @method $this withVersionComparator($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHardwareType()
 * @method $this withHardwareType($value)
 * @method array getSmartAGIds()
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAssociatedCcnId()
 * @method $this withAssociatedCcnId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessState()
 * @method $this withBusinessState($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSmartAccessGateways extends Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
	public function withSmartAGIds(array $smartAGIds)
	{
	    $this->data['SmartAGIds'] = $smartAGIds;
		foreach ($smartAGIds as $i => $iValue) {
			$this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
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
 * @method string getVersionType()
 * @method $this withVersionType($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DescribeSmartAccessGatewayVersions extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeSnatEntries extends Rpc
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
class DescribeUnbindFlowLogSags extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getUserNames()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStatisticsDate()
 * @method $this withStatisticsDate($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeUserFlowStatistics extends Rpc
{

    /**
     * @param array $userNames
     *
     * @return $this
     */
	public function withUserNames(array $userNames)
	{
	    $this->data['UserNames'] = $userNames;
		foreach ($userNames as $i => $iValue) {
			$this->options['query']['UserNames.' . ($i + 1)] = $iValue;
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeUserOnlineClients extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getUserNames()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DescribeUserOnlineClientStatistics extends Rpc
{

    /**
     * @param array $userNames
     *
     * @return $this
     */
	public function withUserNames(array $userNames)
	{
	    $this->data['UserNames'] = $userNames;
		foreach ($userNames as $i => $iValue) {
			$this->options['query']['UserNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method array getSmartAGIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachNetworkOptimizationSags extends Rpc
{

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
	public function withSmartAGIds(array $smartAGIds)
	{
	    $this->data['SmartAGIds'] = $smartAGIds;
		foreach ($smartAGIds as $i => $iValue) {
			$this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DiagnoseSmartAccessGateway extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DisableSmartAccessGatewayUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DisableSmartAGDpiMonitor extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DisassociateACL extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DisassociateFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class DisassociateQos extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class DiscribeSmartAccessGatewayDiagnosisReport extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandWidthSpec()
 * @method $this withBandWidthSpec($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class DowngradeSmartAccessGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class DowngradeSmartAccessGatewaySoftware extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class EnableSmartAccessGatewayUser extends Rpc
{
}

/**
 * @method string getSlsLogStore()
 * @method $this withSlsLogStore($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSlsProjectName()
 * @method $this withSlsProjectName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class EnableSmartAGDpiMonitor extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 */
class GetAclAttribute extends Rpc
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
class GetCloudConnectNetworkUseLimit extends Rpc
{
}

/**
 * @method string getQosId()
 * @method $this withQosId($value)
 */
class GetQosAttribute extends Rpc
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
class GetSmartAccessGatewayUseLimit extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class GetSmartAGDpiAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getGrantTrafficService()
 * @method $this withGrantTrafficService($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCenUid()
 * @method $this withCenUid($value)
 * @method string getCenInstanceId()
 * @method $this withCenInstanceId($value)
 */
class GrantInstanceToCbn extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnUid()
 * @method $this withCcnUid($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getGrantTrafficService()
 * @method $this withGrantTrafficService($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class GrantSagInstanceToCcn extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVbrRegionId()
 * @method $this withVbrRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getVbrUid()
 * @method $this withVbrUid($value)
 */
class GrantSagInstanceToVbr extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class KickOutClients extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ListAccessPointNetworkQualities extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ListAccessPoints extends Rpc
{
}

/**
 * @method string getDpiConfigType()
 * @method $this withDpiConfigType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getRuleInstanceId()
 * @method $this withRuleInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDpiConfigError extends Rpc
{
}

/**
 * @method array getDpiGroupIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDpiGroupNames()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDpiGroups extends Rpc
{

    /**
     * @param array $dpiGroupIds
     *
     * @return $this
     */
	public function withDpiGroupIds(array $dpiGroupIds)
	{
	    $this->data['DpiGroupIds'] = $dpiGroupIds;
		foreach ($dpiGroupIds as $i => $iValue) {
			$this->options['query']['DpiGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dpiGroupNames
     *
     * @return $this
     */
	public function withDpiGroupNames(array $dpiGroupNames)
	{
	    $this->data['DpiGroupNames'] = $dpiGroupNames;
		foreach ($dpiGroupNames as $i => $iValue) {
			$this->options['query']['DpiGroupNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDpiSignatureNames()
 * @method array getDpiSignatureIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDpiGroupId()
 * @method $this withDpiGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDpiSignatures extends Rpc
{

    /**
     * @param array $dpiSignatureNames
     *
     * @return $this
     */
	public function withDpiSignatureNames(array $dpiSignatureNames)
	{
	    $this->data['DpiSignatureNames'] = $dpiSignatureNames;
		foreach ($dpiSignatureNames as $i => $iValue) {
			$this->options['query']['DpiSignatureNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dpiSignatureIds
     *
     * @return $this
     */
	public function withDpiSignatureIds(array $dpiSignatureIds)
	{
	    $this->data['DpiSignatureIds'] = $dpiSignatureIds;
		foreach ($dpiSignatureIds as $i => $iValue) {
			$this->options['query']['DpiSignatureIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEnterpriseCode()
 * @method $this withEnterpriseCode($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListEnterpriseCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getOpenApiName()
 * @method $this withOpenApiName($value)
 */
class ListSmartAGApiUnsupportedFeature extends Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
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
 * @method string getSmartAGStatus()
 * @method $this withSmartAGStatus($value)
 */
class ListSmartAGByAccessPoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyACL extends Rpc
{
}

/**
 * @method array getDpiGroupIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDestCidr()
 * @method $this withDestCidr($value)
 * @method array getDpiSignatureIds()
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAcrId()
 * @method $this withAcrId($value)
 * @method string getDestPortRange()
 * @method $this withDestPortRange($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyACLRule extends Rpc
{

    /**
     * @param array $dpiGroupIds
     *
     * @return $this
     */
	public function withDpiGroupIds(array $dpiGroupIds)
	{
	    $this->data['DpiGroupIds'] = $dpiGroupIds;
		foreach ($dpiGroupIds as $i => $iValue) {
			$this->options['query']['DpiGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dpiSignatureIds
     *
     * @return $this
     */
	public function withDpiSignatureIds(array $dpiSignatureIds)
	{
	    $this->data['DpiSignatureIds'] = $dpiSignatureIds;
		foreach ($dpiSignatureIds as $i => $iValue) {
			$this->options['query']['DpiSignatureIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getRecoveredDNS()
 * @method array getAppDNS()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifyClientUserDNS extends Rpc
{

    /**
     * @param array $recoveredDNS
     *
     * @return $this
     */
	public function withRecoveredDNS(array $recoveredDNS)
	{
	    $this->data['RecoveredDNS'] = $recoveredDNS;
		foreach ($recoveredDNS as $i => $iValue) {
			$this->options['query']['RecoveredDNS.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $appDNS
     *
     * @return $this
     */
	public function withAppDNS(array $appDNS)
	{
	    $this->data['AppDNS'] = $appDNS;
		foreach ($appDNS as $i => $iValue) {
			$this->options['query']['AppDNS.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
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
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getInterworkingStatus()
 * @method $this withInterworkingStatus($value)
 */
class ModifyCloudConnectNetwork extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCronExpression()
 * @method $this withCronExpression($value)
 * @method string getTimeZone()
 * @method $this withTimeZone($value)
 * @method string getUpgradeType()
 * @method $this withUpgradeType($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionType()
 * @method $this withVersionType($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifyDeviceAutoUpgradePolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetflowVersion()
 * @method $this withNetflowVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInactiveAging()
 * @method $this withInactiveAging($value)
 * @method string getSlsRegionId()
 * @method $this withSlsRegionId($value)
 * @method string getActiveAging()
 * @method $this withActiveAging($value)
 * @method string getOutputType()
 * @method $this withOutputType($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetflowServerPort()
 * @method $this withNetflowServerPort($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetflowServerIp()
 * @method $this withNetflowServerIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class ModifyFlowLogAttribute extends Rpc
{
}

/**
 * @method string getProbeInterval()
 * @method $this withProbeInterval($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDstPort()
 * @method $this withDstPort($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHcInstanceId()
 * @method $this withHcInstanceId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFailCountThreshold()
 * @method $this withFailCountThreshold($value)
 * @method string getProbeTimeout()
 * @method $this withProbeTimeout($value)
 * @method string getRttFailThreshold()
 * @method $this withRttFailThreshold($value)
 * @method string getRttThreshold()
 * @method $this withRttThreshold($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDstIpAddr()
 * @method $this withDstIpAddr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSrcIpAddr()
 * @method $this withSrcIpAddr($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSrcPort()
 * @method $this withSrcPort($value)
 * @method string getProbeCount()
 * @method $this withProbeCount($value)
 */
class ModifyHealthCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyNetworkOptimization extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosName()
 * @method $this withQosName($value)
 * @method string getQosDescription()
 * @method $this withQosDescription($value)
 */
class ModifyQos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMinBandwidthAbs()
 * @method $this withMinBandwidthAbs($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPercentSourceType()
 * @method $this withPercentSourceType($value)
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getMaxBandwidthAbs()
 * @method $this withMaxBandwidthAbs($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMaxBandwidthPercent()
 * @method $this withMaxBandwidthPercent($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQosCarId()
 * @method $this withQosCarId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getMinBandwidthPercent()
 * @method $this withMinBandwidthPercent($value)
 * @method string getLimitType()
 * @method $this withLimitType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyQosCar extends Rpc
{
}

/**
 * @method array getDpiGroupIds()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourcePortRange()
 * @method $this withSourcePortRange($value)
 * @method string getQosPolicyId()
 * @method $this withQosPolicyId($value)
 * @method string getSourceCidr()
 * @method $this withSourceCidr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDestCidr()
 * @method $this withDestCidr($value)
 * @method array getDpiSignatureIds()
 * @method string getQosId()
 * @method $this withQosId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getDestPortRange()
 * @method $this withDestPortRange($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyQosPolicy extends Rpc
{

    /**
     * @param array $dpiGroupIds
     *
     * @return $this
     */
	public function withDpiGroupIds(array $dpiGroupIds)
	{
	    $this->data['DpiGroupIds'] = $dpiGroupIds;
		foreach ($dpiGroupIds as $i => $iValue) {
			$this->options['query']['DpiGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dpiSignatureIds
     *
     * @return $this
     */
	public function withDpiSignatureIds(array $dpiSignatureIds)
	{
	    $this->data['DpiSignatureIds'] = $dpiSignatureIds;
		foreach ($dpiSignatureIds as $i => $iValue) {
			$this->options['query']['DpiSignatureIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHcInstanceId()
 * @method $this withHcInstanceId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getDestCidrBlock()
 * @method $this withDestCidrBlock($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouteDistribution()
 * @method $this withRouteDistribution($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifyRouteDistributionStrategy extends Rpc
{
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class ModifySAGAdminPassword extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCidr()
 * @method $this withCidr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEnableBackup()
 * @method $this withEnableBackup($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifySagCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExpressConnectionInterface()
 * @method $this withExpressConnectionInterface($value)
 * @method string getHcIp()
 * @method $this withHcIp($value)
 * @method string getRouteBackup()
 * @method $this withRouteBackup($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getExpressConnectionNexthop()
 * @method $this withExpressConnectionNexthop($value)
 */
class ModifySagECRouteBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class ModifySagExpressConnectInterface extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteProtocol()
 * @method $this withRouteProtocol($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class ModifySagGlobalRouteProtocol extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVirtualIp()
 * @method $this withVirtualIp($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class ModifySagHa extends Rpc
{
}

/**
 * @method string getEndIp()
 * @method $this withEndIp($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getStartIp()
 * @method $this withStartIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIPType()
 * @method $this withIPType($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 * @method string getLease()
 * @method $this withLease($value)
 */
class ModifySagLan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getGateway()
 * @method $this withGateway($value)
 */
class ModifySagManagementPort extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class ModifySagPortRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoteIp()
 * @method $this withRemoteIp($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getRemoteAs()
 * @method $this withRemoteAs($value)
 * @method string getRouteProtocol()
 * @method $this withRouteProtocol($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 */
class ModifySagPortRouteProtocol extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoteAccessIp()
 * @method $this withRemoteAccessIp($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifySagRemoteAccess extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeepAlive()
 * @method $this withKeepAlive($value)
 * @method string getHoldTime()
 * @method $this withHoldTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAdvertiseIps()
 * @method $this withAdvertiseIps($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getLocalAs()
 * @method $this withLocalAs($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class ModifySagRouteProtocolBgp extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuthenticationType()
 * @method $this withAuthenticationType($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAreaId()
 * @method $this withAreaId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMd5KeyId()
 * @method $this withMd5KeyId($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getDeadTime()
 * @method $this withDeadTime($value)
 * @method string getMd5Key()
 * @method $this withMd5Key($value)
 * @method string getHelloTime()
 * @method $this withHelloTime($value)
 */
class ModifySagRouteProtocolOspf extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 * @method string getDestinationCidr()
 * @method $this withDestinationCidr($value)
 */
class ModifySagStaticRoute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSlaveDns()
 * @method $this withSlaveDns($value)
 * @method string getMasterDns()
 * @method $this withMasterDns($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class ModifySagUserDns extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getVlan()
 * @method $this withVlan($value)
 * @method string getMask()
 * @method $this withMask($value)
 * @method string getStartIp()
 * @method $this withStartIp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIPType()
 * @method $this withIPType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getSourceIps()
 * @method $this withSourceIps($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getPortName()
 * @method $this withPortName($value)
 * @method string getStopIp()
 * @method $this withStopIp($value)
 * @method string getGateway()
 * @method $this withGateway($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ModifySagWan extends Rpc
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getSnat()
 * @method $this withSnat($value)
 */
class ModifySagWanSnat extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEncryptAlgorithm()
 * @method $this withEncryptAlgorithm($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getAuthenticationType()
 * @method $this withAuthenticationType($value)
 * @method string getSSID()
 * @method $this withSSID($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getIsBroadcast()
 * @method $this withIsBroadcast($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsEnable()
 * @method $this withIsEnable($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 * @method string getIsAuth()
 * @method $this withIsAuth($value)
 */
class ModifySagWifi extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSecurityLockThreshold()
 * @method $this withSecurityLockThreshold($value)
 * @method string getRoutingStrategy()
 * @method $this withRoutingStrategy($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifySmartAccessGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ModifySmartAccessGatewayClientUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpBandwidthWan()
 * @method $this withUpBandwidthWan($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUpBandwidth4G()
 * @method $this withUpBandwidth4G($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifySmartAccessGatewayUpBandwidth extends Rpc
{
}

/**
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
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class MoveResourceGroup extends Rpc
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
class OrchestrateSagECRouteBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getAccessPointIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ProbeAccessPointNetworkQuality extends Rpc
{

    /**
     * @param array $accessPointIds
     *
     * @return $this
     */
	public function withAccessPointIds(array $accessPointIds)
	{
	    $this->data['AccessPointIds'] = $accessPointIds;
		foreach ($accessPointIds as $i => $iValue) {
			$this->options['query']['AccessPointIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class RebootSmartAccessGateway extends Rpc
{
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ResetSmartAccessGatewayClientUserPassword extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCenInstanceId()
 * @method $this withCenInstanceId($value)
 */
class RevokeInstanceFromCbn extends Rpc
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
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class RevokeInstanceFromVbr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class RevokeSagInstanceFromCcn extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOriginSmartAGId()
 * @method $this withOriginSmartAGId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTargetSmartAGId()
 * @method $this withTargetSmartAGId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOriginRegionId()
 * @method $this withOriginRegionId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class RoamClientUser extends Rpc
{
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteableAddress()
 * @method $this withRouteableAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSagId()
 * @method $this withSagId($value)
 */
class SetSagRouteableAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getSmartAGSn()
 * @method $this withSmartAGSn($value)
 */
class SynchronizeSmartAGWebConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UnbindSerialNumber extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCcnId()
 * @method $this withCcnId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGUid()
 * @method $this withSmartAGUid($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UnbindSmartAccessGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getVbrRegionId()
 * @method $this withVbrRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGUid()
 * @method $this withSmartAGUid($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UnbindVbr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTmsCode()
 * @method $this withTmsCode($value)
 * @method array getOrderItem()
 * @method string getOrderPostFee()
 * @method $this withOrderPostFee($value)
 * @method string getTradeId()
 * @method $this withTradeId($value)
 * @method string getOwnerUserId()
 * @method $this withOwnerUserId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTmsOrderCode()
 * @method $this withTmsOrderCode($value)
 */
class UnicomOrderConfirm extends Rpc
{

    /**
     * @param array $orderItem
     *
     * @return $this
     */
	public function withOrderItem(array $orderItem)
	{
	    $this->data['OrderItem'] = $orderItem;
		foreach ($orderItem as $depth1 => $depth1Value) {
			if(isset($depth1Value['ScItemName'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.ScItemName'] = $depth1Value['ScItemName'];
			}
			if(isset($depth1Value['ItemAmount'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.ItemAmount'] = $depth1Value['ItemAmount'];
			}
			foreach ($depth1Value['SnList'] as $i => $iValue) {
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.SnList.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['OrderItemId'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.OrderItemId'] = $depth1Value['OrderItemId'];
			}
			if(isset($depth1Value['ScItemCode'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.ScItemCode'] = $depth1Value['ScItemCode'];
			}
			if(isset($depth1Value['ItemQuantity'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.ItemQuantity'] = $depth1Value['ItemQuantity'];
			}
			if(isset($depth1Value['TradeId'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.TradeId'] = $depth1Value['TradeId'];
			}
			if(isset($depth1Value['TradeItemId'])){
				$this->options['query']['OrderItem.' . ($depth1 + 1) . '.TradeItemId'] = $depth1Value['TradeItemId'];
			}
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
 * @method array getTmsOrder()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnicomSignConfirm extends Rpc
{

    /**
     * @param array $tmsOrder
     *
     * @return $this
     */
	public function withTmsOrder(array $tmsOrder)
	{
	    $this->data['TmsOrder'] = $tmsOrder;
		foreach ($tmsOrder as $depth1 => $depth1Value) {
			if(isset($depth1Value['TmsCode'])){
				$this->options['query']['TmsOrder.' . ($depth1 + 1) . '.TmsCode'] = $depth1Value['TmsCode'];
			}
			if(isset($depth1Value['SigningTime'])){
				$this->options['query']['TmsOrder.' . ($depth1 + 1) . '.SigningTime'] = $depth1Value['SigningTime'];
			}
			if(isset($depth1Value['TmsOrderCode'])){
				$this->options['query']['TmsOrder.' . ($depth1 + 1) . '.TmsOrderCode'] = $depth1Value['TmsOrderCode'];
			}
			if(isset($depth1Value['TradeId'])){
				$this->options['query']['TmsOrder.' . ($depth1 + 1) . '.TradeId'] = $depth1Value['TradeId'];
			}
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
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UnlockSmartAccessGateway extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnterpriseCode()
 * @method $this withEnterpriseCode($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class UpdateEnterpriseCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionType()
 * @method $this withVersionType($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UpdateSmartAccessGatewayVersion extends Rpc
{
}

/**
 * @method string getAccessPointId()
 * @method $this withAccessPointId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UpdateSmartAGAccessPoint extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDpiEnabled()
 * @method $this withDpiEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UpdateSmartAGDpiAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEnterpriseCode()
 * @method $this withEnterpriseCode($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class UpdateSmartAGEnterpriseCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandWidthSpec()
 * @method $this withBandWidthSpec($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class UpgradeSmartAccessGateway extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserCount()
 * @method $this withUserCount($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method string getDataPlan()
 * @method $this withDataPlan($value)
 */
class UpgradeSmartAccessGatewaySoftware extends Rpc
{
}
