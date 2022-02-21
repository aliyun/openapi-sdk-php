<?php

namespace AlibabaCloud\Mse\V20190531;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAuthResource addAuthResource(array $options = [])
 * @method AddBlackWhiteList addBlackWhiteList(array $options = [])
 * @method AddGateway addGateway(array $options = [])
 * @method AddGatewayDomain addGatewayDomain(array $options = [])
 * @method AddGatewayRoute addGatewayRoute(array $options = [])
 * @method AddGatewayServiceVersion addGatewayServiceVersion(array $options = [])
 * @method AddGatewaySlb addGatewaySlb(array $options = [])
 * @method AddMockRule addMockRule(array $options = [])
 * @method AddServiceSource addServiceSource(array $options = [])
 * @method AddSSLCert addSSLCert(array $options = [])
 * @method ApplyGatewayRoute applyGatewayRoute(array $options = [])
 * @method ApplyTagPolicies applyTagPolicies(array $options = [])
 * @method CloneNacosConfig cloneNacosConfig(array $options = [])
 * @method CreateAlarmRule createAlarmRule(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateEngineNamespace createEngineNamespace(array $options = [])
 * @method CreateNacosConfig createNacosConfig(array $options = [])
 * @method CreateNacosInstance createNacosInstance(array $options = [])
 * @method CreateNacosService createNacosService(array $options = [])
 * @method CreateOrUpdateSwimmingLane createOrUpdateSwimmingLane(array $options = [])
 * @method CreateOrUpdateSwimmingLaneGroup createOrUpdateSwimmingLaneGroup(array $options = [])
 * @method CreateZnode createZnode(array $options = [])
 * @method DeleteAlarmRule deleteAlarmRule(array $options = [])
 * @method DeleteAuthResource deleteAuthResource(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteEngineNamespace deleteEngineNamespace(array $options = [])
 * @method DeleteGateway deleteGateway(array $options = [])
 * @method DeleteGatewayDomain deleteGatewayDomain(array $options = [])
 * @method DeleteGatewayRoute deleteGatewayRoute(array $options = [])
 * @method DeleteGatewayServiceVersion deleteGatewayServiceVersion(array $options = [])
 * @method DeleteGatewaySlb deleteGatewaySlb(array $options = [])
 * @method DeleteNacosConfig deleteNacosConfig(array $options = [])
 * @method DeleteNacosConfigs deleteNacosConfigs(array $options = [])
 * @method DeleteNacosInstance deleteNacosInstance(array $options = [])
 * @method DeleteNacosService deleteNacosService(array $options = [])
 * @method DeleteServiceSource deleteServiceSource(array $options = [])
 * @method DeleteSwimmingLane deleteSwimmingLane(array $options = [])
 * @method DeleteSwimmingLaneGroup deleteSwimmingLaneGroup(array $options = [])
 * @method DeleteZnode deleteZnode(array $options = [])
 * @method ExportNacosConfig exportNacosConfig(array $options = [])
 * @method GetBlackWhiteList getBlackWhiteList(array $options = [])
 * @method GetEngineNamepace getEngineNamepace(array $options = [])
 * @method GetGateway getGateway(array $options = [])
 * @method GetGatewayDomainDetail getGatewayDomainDetail(array $options = [])
 * @method GetGatewayOption getGatewayOption(array $options = [])
 * @method GetGatewayRouteDetail getGatewayRouteDetail(array $options = [])
 * @method GetGatewayServiceDetail getGatewayServiceDetail(array $options = [])
 * @method GetGovernanceKubernetesCluster getGovernanceKubernetesCluster(array $options = [])
 * @method GetGovernanceKubernetesClusterList getGovernanceKubernetesClusterList(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetImportFileUrl getImportFileUrl(array $options = [])
 * @method GetKubernetesSource getKubernetesSource(array $options = [])
 * @method GetMseFeatureSwitch getMseFeatureSwitch(array $options = [])
 * @method GetMseSource getMseSource(array $options = [])
 * @method GetNacosConfig getNacosConfig(array $options = [])
 * @method GetNacosHistoryConfig getNacosHistoryConfig(array $options = [])
 * @method GetOverview getOverview(array $options = [])
 * @method GetServiceList getServiceList(array $options = [])
 * @method GetTagsBySwimmingLaneGroupId getTagsBySwimmingLaneGroupId(array $options = [])
 * @method ImportNacosConfig importNacosConfig(array $options = [])
 * @method ImportServices importServices(array $options = [])
 * @method ListAlarmContactGroups listAlarmContactGroups(array $options = [])
 * @method ListAlarmHistories listAlarmHistories(array $options = [])
 * @method ListAlarmItems listAlarmItems(array $options = [])
 * @method ListAlarmRules listAlarmRules(array $options = [])
 * @method ListAnsInstances listAnsInstances(array $options = [])
 * @method ListAnsServiceClusters listAnsServiceClusters(array $options = [])
 * @method ListAnsServices listAnsServices(array $options = [])
 * @method ListAppBySwimmingLaneGroupTag listAppBySwimmingLaneGroupTag(array $options = [])
 * @method ListApplicationsWithTagRules listApplicationsWithTagRules(array $options = [])
 * @method ListClusterConnectionTypes listClusterConnectionTypes(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListClusterTypes listClusterTypes(array $options = [])
 * @method ListClusterVersions listClusterVersions(array $options = [])
 * @method ListEngineNamespaces listEngineNamespaces(array $options = [])
 * @method ListEurekaInstances listEurekaInstances(array $options = [])
 * @method ListEurekaServices listEurekaServices(array $options = [])
 * @method ListGateway listGateway(array $options = [])
 * @method ListGatewayDomain listGatewayDomain(array $options = [])
 * @method ListGatewayRoute listGatewayRoute(array $options = [])
 * @method ListGatewayService listGatewayService(array $options = [])
 * @method ListGatewaySlb listGatewaySlb(array $options = [])
 * @method ListListenersByConfig listListenersByConfig(array $options = [])
 * @method ListListenersByIp listListenersByIp(array $options = [])
 * @method ListNacosConfigs listNacosConfigs(array $options = [])
 * @method ListNacosHistoryConfigs listNacosHistoryConfigs(array $options = [])
 * @method ListServiceSource listServiceSource(array $options = [])
 * @method ListSSLCert listSSLCert(array $options = [])
 * @method ListZnodeChildren listZnodeChildren(array $options = [])
 * @method ModifyGovernanceKubernetesCluster modifyGovernanceKubernetesCluster(array $options = [])
 * @method OfflineGatewayRoute offlineGatewayRoute(array $options = [])
 * @method PullServices pullServices(array $options = [])
 * @method QueryAllSwimmingLane queryAllSwimmingLane(array $options = [])
 * @method QueryAllSwimmingLaneGroup queryAllSwimmingLaneGroup(array $options = [])
 * @method QueryBusinessLocations queryBusinessLocations(array $options = [])
 * @method QueryClusterDetail queryClusterDetail(array $options = [])
 * @method QueryClusterDiskSpecification queryClusterDiskSpecification(array $options = [])
 * @method QueryClusterSpecification queryClusterSpecification(array $options = [])
 * @method QueryConfig queryConfig(array $options = [])
 * @method QueryGatewayRegion queryGatewayRegion(array $options = [])
 * @method QueryGatewayType queryGatewayType(array $options = [])
 * @method QueryGovernanceKubernetesCluster queryGovernanceKubernetesCluster(array $options = [])
 * @method QueryMonitor queryMonitor(array $options = [])
 * @method QuerySlbSpec querySlbSpec(array $options = [])
 * @method QuerySwimmingLaneById querySwimmingLaneById(array $options = [])
 * @method QueryZnodeDetail queryZnodeDetail(array $options = [])
 * @method RestartCluster restartCluster(array $options = [])
 * @method RetryCluster retryCluster(array $options = [])
 * @method ScalingCluster scalingCluster(array $options = [])
 * @method SelectGatewaySlb selectGatewaySlb(array $options = [])
 * @method UpdateAcl updateAcl(array $options = [])
 * @method UpdateBlackWhiteList updateBlackWhiteList(array $options = [])
 * @method UpdateCluster updateCluster(array $options = [])
 * @method UpdateConfig updateConfig(array $options = [])
 * @method UpdateEngineNamespace updateEngineNamespace(array $options = [])
 * @method UpdateGatewayDomain updateGatewayDomain(array $options = [])
 * @method UpdateGatewayName updateGatewayName(array $options = [])
 * @method UpdateGatewayOption updateGatewayOption(array $options = [])
 * @method UpdateGatewayRoute updateGatewayRoute(array $options = [])
 * @method UpdateGatewayRouteCORS updateGatewayRouteCORS(array $options = [])
 * @method UpdateGatewayRouteHeaderOp updateGatewayRouteHeaderOp(array $options = [])
 * @method UpdateGatewayRouteHTTPRewrite updateGatewayRouteHTTPRewrite(array $options = [])
 * @method UpdateGatewayRouteRetry updateGatewayRouteRetry(array $options = [])
 * @method UpdateGatewayRouteTimeout updateGatewayRouteTimeout(array $options = [])
 * @method UpdateGatewayServiceVersion updateGatewayServiceVersion(array $options = [])
 * @method UpdateImage updateImage(array $options = [])
 * @method UpdateNacosCluster updateNacosCluster(array $options = [])
 * @method UpdateNacosConfig updateNacosConfig(array $options = [])
 * @method UpdateNacosInstance updateNacosInstance(array $options = [])
 * @method UpdateNacosService updateNacosService(array $options = [])
 * @method UpdateSSLCert updateSSLCert(array $options = [])
 * @method UpdateZnode updateZnode(array $options = [])
 * @method UpgradeCluster upgradeCluster(array $options = [])
 */
class MseApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'mse';

    /** @var string */
    public $version = '2019-05-31';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAuthId()
 * @method $this withAuthId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddAuthResource extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getIsWhite()
 * @method $this withIsWhite($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AddBlackWhiteList extends Rpc
{
}

/**
 * @method string getInternetSlbSpec()
 * @method $this withInternetSlbSpec($value)
 * @method string getReplica()
 * @method $this withReplica($value)
 * @method string getVSwitchId2()
 * @method $this withVSwitchId2($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getEnterpriseSecurityGroup()
 * @method $this withEnterpriseSecurityGroup($value)
 * @method string getVpc()
 * @method $this withVpc($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSlbSpec()
 * @method $this withSlbSpec($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class AddGateway extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getMustHttps()
 * @method $this withMustHttps($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddGatewayDomain extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDomainIdListJSON()
 * @method $this withDomainIdListJSON($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getRouteOrder()
 * @method $this withRouteOrder($value)
 * @method string getServices()
 * @method $this withServices($value)
 * @method string getPredicates()
 * @method $this withPredicates($value)
 * @method string getRedirectJSON()
 * @method $this withRedirectJSON($value)
 * @method string getDirectResponseJSON()
 * @method $this withDirectResponseJSON($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddGatewayRoute extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class AddGatewayServiceVersion extends Rpc
{
}

/**
 * @method string getSlbId()
 * @method $this withSlbId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddGatewaySlb extends Rpc
{
}

/**
 * @method string getExtraJson()
 * @method $this withExtraJson($value)
 * @method string getProviderAppId()
 * @method $this withProviderAppId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getScMockItems()
 * @method $this withScMockItems($value)
 * @method string getProviderAppName()
 * @method $this withProviderAppName($value)
 * @method string getConsumerAppIds()
 * @method $this withConsumerAppIds($value)
 * @method string getDubboMockItems()
 * @method $this withDubboMockItems($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getMockType()
 * @method $this withMockType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class AddMockRule extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddServiceSource extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddSSLCert extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ApplyGatewayRoute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ApplyTagPolicies extends Rpc
{
}

/**
 * @method string getTargetNamespaceId()
 * @method $this withTargetNamespaceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getOriginNamespaceId()
 * @method $this withOriginNamespaceId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class CloneNacosConfig extends Rpc
{
}

/**
 * @method string getNValue()
 * @method $this withNValue($value)
 * @method string getAlarmItem()
 * @method $this withAlarmItem($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getAlarmAliasName()
 * @method $this withAlarmAliasName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getAlertWay()
 * @method $this withAlertWay($value)
 * @method string getAggregates()
 * @method $this withAggregates($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class CreateAlarmRule extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getExtraInfo()
 * @method $this withExtraInfo($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateApplication extends Rpc
{
}

/**
 * @method string getClusterSpecification()
 * @method $this withClusterSpecification($value)
 * @method string getPubSlbSpecification()
 * @method $this withPubSlbSpecification($value)
 * @method string getPrivateSlbSpecification()
 * @method $this withPrivateSlbSpecification($value)
 * @method string getInstanceCount()
 * @method $this withInstanceCount($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getClusterVersion()
 * @method $this withClusterVersion($value)
 * @method string getDiskCapacity()
 * @method $this withDiskCapacity($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getPubNetworkFlow()
 * @method $this withPubNetworkFlow($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServiceCount()
 * @method $this withServiceCount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateEngineNamespace extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getBetaIps()
 * @method $this withBetaIps($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateNacosConfig extends Rpc
{
}

/**
 * @method string getMetadata()
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class CreateNacosInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetadata($value)
    {
        $this->data['Metadata'] = $value;
        $this->options['form_params']['Metadata'] = $value;

        return $this;
    }
}

/**
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getProtectThreshold()
 * @method $this withProtectThreshold($value)
 */
class CreateNacosService extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getGmtModified()
 * @method $this withGmtModified($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getLicenseKey()
 * @method $this withLicenseKey($value)
 * @method string getEntryRule()
 * @method $this withEntryRule($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method array getEntryRules()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGmtCreate()
 * @method $this withGmtCreate($value)
 * @method string getEnableRules()
 * @method $this withEnableRules($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateOrUpdateSwimmingLane extends Rpc
{

    /**
     * @param array $entryRules
     *
     * @return $this
     */
	public function withEntryRules(array $entryRules)
	{
	    $this->data['EntryRules'] = $entryRules;
		foreach ($entryRules as $depth1 => $depth1Value) {
			foreach ($depth1Value['RestItems'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Datum'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Datum'] = $depth2Value['Datum'];
				}
				if(isset($depth2Value['Divisor'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Divisor'] = $depth2Value['Divisor'];
				}
				if(isset($depth2Value['Rate'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Rate'] = $depth2Value['Rate'];
				}
				foreach ($depth2Value['NameList'] as $i => $iValue) {
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.NameList.' . ($i + 1)] = $iValue;
				}
				if(isset($depth2Value['Name'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['Type'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Type'] = $depth2Value['Type'];
				}
				if(isset($depth2Value['Cond'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Cond'] = $depth2Value['Cond'];
				}
				if(isset($depth2Value['Remainder'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Remainder'] = $depth2Value['Remainder'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Operator'])){
					$this->options['query']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Operator'] = $depth2Value['Operator'];
				}
			}
			if(isset($depth1Value['Path'])){
				$this->options['query']['EntryRules.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['Condition'])){
				$this->options['query']['EntryRules.' . ($depth1 + 1) . '.Condition'] = $depth1Value['Condition'];
			}
			if(isset($depth1Value['Enable'])){
				$this->options['query']['EntryRules.' . ($depth1 + 1) . '.Enable'] = $depth1Value['Enable'];
			}
			if(isset($depth1Value['Priority'])){
				$this->options['query']['EntryRules.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getGmtModified()
 * @method $this withGmtModified($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getLicenseKey()
 * @method $this withLicenseKey($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getEntryApp()
 * @method $this withEntryApp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGmtCreate()
 * @method $this withGmtCreate($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateOrUpdateSwimmingLaneGroup extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class CreateZnode extends Rpc
{
}

/**
 * @method string getAlarmRuleId()
 * @method $this withAlarmRuleId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteAlarmRule extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteAuthResource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteEngineNamespace extends Rpc
{
}

/**
 * @method string getDeleteSlb()
 * @method $this withDeleteSlb($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGateway extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteGatewayDomain extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGatewayRoute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteGatewayServiceVersion extends Rpc
{
}

/**
 * @method string getDeleteSlb()
 * @method $this withDeleteSlb($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteGatewaySlb extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getBeta()
 * @method $this withBeta($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class DeleteNacosConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteNacosConfigs extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DeleteNacosInstance extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DeleteNacosService extends Rpc
{
}

/**
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteServiceSource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLaneId()
 * @method $this withLaneId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteSwimmingLane extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteSwimmingLaneGroup extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteZnode extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class ExportNacosConfig extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getIsWhite()
 * @method $this withIsWhite($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetBlackWhiteList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetEngineNamepace extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGateway extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetGatewayDomainDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class GetGatewayOption extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGatewayRouteDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetGatewayServiceDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGovernanceKubernetesCluster extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGovernanceKubernetesClusterList extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 */
class GetImage extends Rpc
{
}

/**
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetImportFileUrl extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetKubernetesSource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetMseFeatureSwitch extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetMseSource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getBeta()
 * @method $this withBeta($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class GetNacosConfig extends Rpc
{
}

/**
 * @method string getNid()
 * @method $this withNid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class GetNacosHistoryConfig extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetOverview extends Rpc
{
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetServiceList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetTagsBySwimmingLaneGroupId extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class ImportNacosConfig extends Rpc
{
}

/**
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getServiceList()
 * @method $this withServiceList($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class ImportServices extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAlarmContactGroups extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAlarmMseType()
 * @method $this withAlarmMseType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getAlarmName()
 * @method $this withAlarmName($value)
 */
class ListAlarmHistories extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAlarmItems extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAlarmMseType()
 * @method $this withAlarmMseType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAlarmRules extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListAnsInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListAnsServiceClusters extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getHasIpCount()
 * @method $this withHasIpCount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListAnsServices extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class ListAppBySwimmingLaneGroupTag extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ListApplicationsWithTagRules extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterConnectionTypes extends Rpc
{
}

/**
 * @method string getClusterAliasName()
 * @method $this withClusterAliasName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusters extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConnectType()
 * @method $this withConnectType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterTypes extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterVersions extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListEngineNamespaces extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListEurekaInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListEurekaServices extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderItem()
 * @method $this withOrderItem($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDescSort()
 * @method $this withDescSort($value)
 * @method string getFilterParams()
 * @method $this withFilterParams($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGateway extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayDomain extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderItem()
 * @method $this withOrderItem($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDescSort()
 * @method $this withDescSort($value)
 * @method string getFilterParams()
 * @method $this withFilterParams($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayRoute extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderItem()
 * @method $this withOrderItem($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDescSort()
 * @method $this withDescSort($value)
 * @method string getFilterParams()
 * @method $this withFilterParams($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayService extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewaySlb extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class ListListenersByConfig extends Rpc
{
}

/**
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListListenersByIp extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class ListNacosConfigs extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class ListNacosHistoryConfigs extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListServiceSource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListSSLCert extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListZnodeChildren extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNamespaceInfos()
 * @method $this withNamespaceInfos($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ModifyGovernanceKubernetesCluster extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class OfflineGatewayRoute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class PullServices extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryAllSwimmingLane extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryAllSwimmingLaneGroup extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryBusinessLocations extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryClusterDetail extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryClusterDiskSpecification extends Rpc
{
}

/**
 * @method string getConnectType()
 * @method $this withConnectType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryClusterSpecification extends Rpc
{
}

/**
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryGatewayRegion extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryGatewayType extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryGovernanceKubernetesCluster extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMonitorType()
 * @method $this withMonitorType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStep()
 * @method $this withStep($value)
 */
class QueryMonitor extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QuerySlbSpec extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLaneId()
 * @method $this withLaneId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QuerySwimmingLaneById extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryZnodeDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPodNameList()
 * @method $this withPodNameList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class RestartCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class RetryCluster extends Rpc
{
}

/**
 * @method string getClusterSpecification()
 * @method $this withClusterSpecification($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMemoryCapacity()
 * @method $this withMemoryCapacity($value)
 * @method string getInstanceCount()
 * @method $this withInstanceCount($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ScalingCluster extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class SelectGatewaySlb extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAclEntryList()
 * @method $this withAclEntryList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateAcl extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getIsWhite()
 * @method $this withIsWhite($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateBlackWhiteList extends Rpc
{
}

/**
 * @method string getClusterAliasName()
 * @method $this withClusterAliasName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateCluster extends Rpc
{
}

/**
 * @method string getOpenSuperAcl()
 * @method string getConfigAuthEnabled()
 * @method $this withConfigAuthEnabled($value)
 * @method string getPassWord()
 * @method $this withPassWord($value)
 * @method string getMinSessionTimeout()
 * @method $this withMinSessionTimeout($value)
 * @method string getMaxClientCnxns()
 * @method $this withMaxClientCnxns($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getJuteMaxbuffer()
 * @method $this withJuteMaxbuffer($value)
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getAutopurgeSnapRetainCount()
 * @method $this withAutopurgeSnapRetainCount($value)
 * @method string getMaxSessionTimeout()
 * @method $this withMaxSessionTimeout($value)
 * @method string getConfigSecretEnabled()
 * @method $this withConfigSecretEnabled($value)
 * @method string getMCPEnabled()
 * @method $this withMCPEnabled($value)
 * @method string getTickTime()
 * @method $this withTickTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSyncLimit()
 * @method $this withSyncLimit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutopurgePurgeInterval()
 * @method $this withAutopurgePurgeInterval($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getInitLimit()
 * @method $this withInitLimit($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UpdateConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenSuperAcl($value)
    {
        $this->data['OpenSuperAcl'] = $value;
        $this->options['form_params']['OpenSuperAcl'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServiceCount()
 * @method $this withServiceCount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateEngineNamespace extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getMustHttps()
 * @method $this withMustHttps($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayDomain extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayName extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getGatewayOption()
 * @method $this withGatewayOption($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayOption extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getDomainIdListJSON()
 * @method $this withDomainIdListJSON($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getRouteOrder()
 * @method $this withRouteOrder($value)
 * @method string getServices()
 * @method $this withServices($value)
 * @method string getPredicates()
 * @method $this withPredicates($value)
 * @method string getRedirectJSON()
 * @method $this withRedirectJSON($value)
 * @method string getDirectResponseJSON()
 * @method $this withDirectResponseJSON($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRoute extends Rpc
{
}

/**
 * @method string getCorsJSON()
 * @method $this withCorsJSON($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayRouteCORS extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getHeaderOpJSON()
 * @method $this withHeaderOpJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayRouteHeaderOp extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getHttpRewriteJSON()
 * @method $this withHttpRewriteJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayRouteHTTPRewrite extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRetryJSON()
 * @method $this withRetryJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayRouteRetry extends Rpc
{
}

/**
 * @method string getTimeoutJSON()
 * @method $this withTimeoutJSON($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayRouteTimeout extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateGatewayServiceVersion extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 */
class UpdateImage extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getCheckPort()
 * @method $this withCheckPort($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getHealthChecker()
 * @method $this withHealthChecker($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getUseInstancePortForCheck()
 * @method $this withUseInstancePortForCheck($value)
 */
class UpdateNacosCluster extends Rpc
{
}

/**
 * @method string getEncryptedDataKey()
 * @method $this withEncryptedDataKey($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getBetaIps()
 * @method $this withBetaIps($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class UpdateNacosConfig extends Rpc
{
}

/**
 * @method string getMetadata()
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateNacosInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetadata($value)
    {
        $this->data['Metadata'] = $value;
        $this->options['form_params']['Metadata'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getProtectThreshold()
 * @method $this withProtectThreshold($value)
 */
class UpdateNacosService extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateSSLCert extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateZnode extends Rpc
{
}

/**
 * @method string getUpgradeVersion()
 * @method $this withUpgradeVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpgradeCluster extends Rpc
{
}
