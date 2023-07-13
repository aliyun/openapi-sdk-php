<?php

namespace AlibabaCloud\Mse\V20190531;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAuthPolicy addAuthPolicy(array $options = [])
 * @method AddAuthResource addAuthResource(array $options = [])
 * @method AddBlackWhiteList addBlackWhiteList(array $options = [])
 * @method AddGateway addGateway(array $options = [])
 * @method AddGatewayAuthConsumer addGatewayAuthConsumer(array $options = [])
 * @method AddGatewayDomain addGatewayDomain(array $options = [])
 * @method AddGatewayRoute addGatewayRoute(array $options = [])
 * @method AddGatewayServiceVersion addGatewayServiceVersion(array $options = [])
 * @method AddGatewaySlb addGatewaySlb(array $options = [])
 * @method AddMigrationTask addMigrationTask(array $options = [])
 * @method AddMockRule addMockRule(array $options = [])
 * @method AddSecurityGroupRule addSecurityGroupRule(array $options = [])
 * @method AddServiceSource addServiceSource(array $options = [])
 * @method AddSSLCert addSSLCert(array $options = [])
 * @method ApplyGatewayRoute applyGatewayRoute(array $options = [])
 * @method ApplyTagPolicies applyTagPolicies(array $options = [])
 * @method CloneNacosConfig cloneNacosConfig(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateCircuitBreakerRule createCircuitBreakerRule(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateEngineNamespace createEngineNamespace(array $options = [])
 * @method CreateFlowRule createFlowRule(array $options = [])
 * @method CreateMseServiceApplication createMseServiceApplication(array $options = [])
 * @method CreateNacosConfig createNacosConfig(array $options = [])
 * @method CreateNacosInstance createNacosInstance(array $options = [])
 * @method CreateNacosService createNacosService(array $options = [])
 * @method CreateOrUpdateSwimmingLane createOrUpdateSwimmingLane(array $options = [])
 * @method CreateOrUpdateSwimmingLaneGroup createOrUpdateSwimmingLaneGroup(array $options = [])
 * @method CreateZnode createZnode(array $options = [])
 * @method DeleteAuthResource deleteAuthResource(array $options = [])
 * @method DeleteCircuitBreakerRules deleteCircuitBreakerRules(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteEngineNamespace deleteEngineNamespace(array $options = [])
 * @method DeleteFlowRules deleteFlowRules(array $options = [])
 * @method DeleteGateway deleteGateway(array $options = [])
 * @method DeleteGatewayAuthConsumer deleteGatewayAuthConsumer(array $options = [])
 * @method DeleteGatewayAuthConsumerResource deleteGatewayAuthConsumerResource(array $options = [])
 * @method DeleteGatewayDomain deleteGatewayDomain(array $options = [])
 * @method DeleteGatewayRoute deleteGatewayRoute(array $options = [])
 * @method DeleteGatewayService deleteGatewayService(array $options = [])
 * @method DeleteGatewayServiceVersion deleteGatewayServiceVersion(array $options = [])
 * @method DeleteGatewaySlb deleteGatewaySlb(array $options = [])
 * @method DeleteMigrationTask deleteMigrationTask(array $options = [])
 * @method DeleteNacosConfig deleteNacosConfig(array $options = [])
 * @method DeleteNacosConfigs deleteNacosConfigs(array $options = [])
 * @method DeleteNacosInstance deleteNacosInstance(array $options = [])
 * @method DeleteNacosService deleteNacosService(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method DeleteSecurityGroupRule deleteSecurityGroupRule(array $options = [])
 * @method DeleteServiceSource deleteServiceSource(array $options = [])
 * @method DeleteSwimmingLane deleteSwimmingLane(array $options = [])
 * @method DeleteSwimmingLaneGroup deleteSwimmingLaneGroup(array $options = [])
 * @method DeleteZnode deleteZnode(array $options = [])
 * @method ExportNacosConfig exportNacosConfig(array $options = [])
 * @method ExportZookeeperData exportZookeeperData(array $options = [])
 * @method FetchLosslessRuleList fetchLosslessRuleList(array $options = [])
 * @method GetApplicationList getApplicationList(array $options = [])
 * @method GetApplicationListWithMetircs getApplicationListWithMetircs(array $options = [])
 * @method GetAppMessageQueueRoute getAppMessageQueueRoute(array $options = [])
 * @method GetBlackWhiteList getBlackWhiteList(array $options = [])
 * @method GetEngineNamepace getEngineNamepace(array $options = [])
 * @method GetGateway getGateway(array $options = [])
 * @method GetGatewayAuthConsumerDetail getGatewayAuthConsumerDetail(array $options = [])
 * @method GetGatewayDomainDetail getGatewayDomainDetail(array $options = [])
 * @method GetGatewayOption getGatewayOption(array $options = [])
 * @method GetGatewayRouteDetail getGatewayRouteDetail(array $options = [])
 * @method GetGatewayServiceDetail getGatewayServiceDetail(array $options = [])
 * @method GetGovernanceKubernetesCluster getGovernanceKubernetesCluster(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetImportFileUrl getImportFileUrl(array $options = [])
 * @method GetKubernetesSource getKubernetesSource(array $options = [])
 * @method GetLosslessRuleByApp getLosslessRuleByApp(array $options = [])
 * @method GetMseFeatureSwitch getMseFeatureSwitch(array $options = [])
 * @method GetMseSource getMseSource(array $options = [])
 * @method GetNacosConfig getNacosConfig(array $options = [])
 * @method GetNacosHistoryConfig getNacosHistoryConfig(array $options = [])
 * @method GetOverview getOverview(array $options = [])
 * @method GetPluginConfig getPluginConfig(array $options = [])
 * @method GetPlugins getPlugins(array $options = [])
 * @method GetServiceList getServiceList(array $options = [])
 * @method GetServiceListeners getServiceListeners(array $options = [])
 * @method GetServiceListPage getServiceListPage(array $options = [])
 * @method GetServiceMethodPage getServiceMethodPage(array $options = [])
 * @method GetTagsBySwimmingLaneGroupId getTagsBySwimmingLaneGroupId(array $options = [])
 * @method GetZookeeperDataImportUrl getZookeeperDataImportUrl(array $options = [])
 * @method ImportNacosConfig importNacosConfig(array $options = [])
 * @method ImportServices importServices(array $options = [])
 * @method ImportZookeeperData importZookeeperData(array $options = [])
 * @method ListAnsInstances listAnsInstances(array $options = [])
 * @method ListAnsServiceClusters listAnsServiceClusters(array $options = [])
 * @method ListAnsServices listAnsServices(array $options = [])
 * @method ListAppBySwimmingLaneGroupTag listAppBySwimmingLaneGroupTag(array $options = [])
 * @method ListApplicationsWithTagRules listApplicationsWithTagRules(array $options = [])
 * @method ListAuthPolicy listAuthPolicy(array $options = [])
 * @method ListCircuitBreakerRules listCircuitBreakerRules(array $options = [])
 * @method ListClusterConnectionTypes listClusterConnectionTypes(array $options = [])
 * @method ListClusterHealthCheckTask listClusterHealthCheckTask(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListClusterTypes listClusterTypes(array $options = [])
 * @method ListClusterVersions listClusterVersions(array $options = [])
 * @method ListConfigTrack listConfigTrack(array $options = [])
 * @method ListEngineNamespaces listEngineNamespaces(array $options = [])
 * @method ListEurekaInstances listEurekaInstances(array $options = [])
 * @method ListEurekaServices listEurekaServices(array $options = [])
 * @method ListExportZookeeperData listExportZookeeperData(array $options = [])
 * @method ListFlowRules listFlowRules(array $options = [])
 * @method ListGateway listGateway(array $options = [])
 * @method ListGatewayAuthConsumer listGatewayAuthConsumer(array $options = [])
 * @method ListGatewayAuthConsumerResource listGatewayAuthConsumerResource(array $options = [])
 * @method ListGatewayDomain listGatewayDomain(array $options = [])
 * @method ListGatewayRoute listGatewayRoute(array $options = [])
 * @method ListGatewayRouteOnAuth listGatewayRouteOnAuth(array $options = [])
 * @method ListGatewayService listGatewayService(array $options = [])
 * @method ListGatewaySlb listGatewaySlb(array $options = [])
 * @method ListInstanceCount listInstanceCount(array $options = [])
 * @method ListListenersByConfig listListenersByConfig(array $options = [])
 * @method ListListenersByIp listListenersByIp(array $options = [])
 * @method ListMigrationTask listMigrationTask(array $options = [])
 * @method ListNacosConfigs listNacosConfigs(array $options = [])
 * @method ListNacosHistoryConfigs listNacosHistoryConfigs(array $options = [])
 * @method ListNamingTrack listNamingTrack(array $options = [])
 * @method ListSecurityGroup listSecurityGroup(array $options = [])
 * @method ListSecurityGroupRule listSecurityGroupRule(array $options = [])
 * @method ListServiceSource listServiceSource(array $options = [])
 * @method ListSSLCert listSSLCert(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListZkTrack listZkTrack(array $options = [])
 * @method ListZnodeChildren listZnodeChildren(array $options = [])
 * @method ModifyGovernanceKubernetesCluster modifyGovernanceKubernetesCluster(array $options = [])
 * @method ModifyLosslessRule modifyLosslessRule(array $options = [])
 * @method OfflineGatewayRoute offlineGatewayRoute(array $options = [])
 * @method OrderClusterHealthCheckRiskNotice orderClusterHealthCheckRiskNotice(array $options = [])
 * @method PullServices pullServices(array $options = [])
 * @method PutClusterHealthCheckTask putClusterHealthCheckTask(array $options = [])
 * @method QueryAllSwimmingLane queryAllSwimmingLane(array $options = [])
 * @method QueryAllSwimmingLaneGroup queryAllSwimmingLaneGroup(array $options = [])
 * @method QueryBusinessLocations queryBusinessLocations(array $options = [])
 * @method QueryClusterDetail queryClusterDetail(array $options = [])
 * @method QueryClusterDiskSpecification queryClusterDiskSpecification(array $options = [])
 * @method QueryClusterInfo queryClusterInfo(array $options = [])
 * @method QueryClusterSpecification queryClusterSpecification(array $options = [])
 * @method QueryConfig queryConfig(array $options = [])
 * @method QueryGatewayRegion queryGatewayRegion(array $options = [])
 * @method QueryGatewayType queryGatewayType(array $options = [])
 * @method QueryGovernanceKubernetesCluster queryGovernanceKubernetesCluster(array $options = [])
 * @method QueryInstancesInfo queryInstancesInfo(array $options = [])
 * @method QueryMonitor queryMonitor(array $options = [])
 * @method QueryNamespace queryNamespace(array $options = [])
 * @method QuerySlbSpec querySlbSpec(array $options = [])
 * @method QuerySwimmingLaneById querySwimmingLaneById(array $options = [])
 * @method QueryZnodeDetail queryZnodeDetail(array $options = [])
 * @method RemoveApplication removeApplication(array $options = [])
 * @method RemoveAuthPolicy removeAuthPolicy(array $options = [])
 * @method RestartCluster restartCluster(array $options = [])
 * @method RetryCluster retryCluster(array $options = [])
 * @method SelectGatewaySlb selectGatewaySlb(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAcl updateAcl(array $options = [])
 * @method UpdateAuthPolicy updateAuthPolicy(array $options = [])
 * @method UpdateBlackWhiteList updateBlackWhiteList(array $options = [])
 * @method UpdateCircuitBreakerRule updateCircuitBreakerRule(array $options = [])
 * @method UpdateCluster updateCluster(array $options = [])
 * @method UpdateClusterSpec updateClusterSpec(array $options = [])
 * @method UpdateConfig updateConfig(array $options = [])
 * @method UpdateEngineNamespace updateEngineNamespace(array $options = [])
 * @method UpdateFlowRule updateFlowRule(array $options = [])
 * @method UpdateGatewayAuthConsumer updateGatewayAuthConsumer(array $options = [])
 * @method UpdateGatewayAuthConsumerResource updateGatewayAuthConsumerResource(array $options = [])
 * @method UpdateGatewayAuthConsumerResourceStatus updateGatewayAuthConsumerResourceStatus(array $options = [])
 * @method UpdateGatewayAuthConsumerStatus updateGatewayAuthConsumerStatus(array $options = [])
 * @method UpdateGatewayDomain updateGatewayDomain(array $options = [])
 * @method UpdateGatewayName updateGatewayName(array $options = [])
 * @method UpdateGatewayOption updateGatewayOption(array $options = [])
 * @method UpdateGatewayRoute updateGatewayRoute(array $options = [])
 * @method UpdateGatewayRouteAuth updateGatewayRouteAuth(array $options = [])
 * @method UpdateGatewayRouteCORS updateGatewayRouteCORS(array $options = [])
 * @method UpdateGatewayRouteHeaderOp updateGatewayRouteHeaderOp(array $options = [])
 * @method UpdateGatewayRouteHTTPRewrite updateGatewayRouteHTTPRewrite(array $options = [])
 * @method UpdateGatewayRouteRetry updateGatewayRouteRetry(array $options = [])
 * @method UpdateGatewayRouteTimeout updateGatewayRouteTimeout(array $options = [])
 * @method UpdateGatewayRouteWafStatus updateGatewayRouteWafStatus(array $options = [])
 * @method UpdateGatewayServiceTrafficPolicy updateGatewayServiceTrafficPolicy(array $options = [])
 * @method UpdateGatewayServiceVersion updateGatewayServiceVersion(array $options = [])
 * @method UpdateGatewaySpec updateGatewaySpec(array $options = [])
 * @method UpdateImage updateImage(array $options = [])
 * @method UpdateMessageQueueRoute updateMessageQueueRoute(array $options = [])
 * @method UpdateMigrationTask updateMigrationTask(array $options = [])
 * @method UpdateNacosCluster updateNacosCluster(array $options = [])
 * @method UpdateNacosConfig updateNacosConfig(array $options = [])
 * @method UpdateNacosInstance updateNacosInstance(array $options = [])
 * @method UpdateNacosService updateNacosService(array $options = [])
 * @method UpdatePluginConfig updatePluginConfig(array $options = [])
 * @method UpdateServiceSource updateServiceSource(array $options = [])
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

    /** @var string */
    public $serviceCode = 'mse';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAuthRule()
 * @method $this withAuthRule($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getK8sNamespace()
 * @method $this withK8sNamespace($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class AddAuthPolicy extends Rpc
{
}

/**
 * @method string getIgnoreCase()
 * @method $this withIgnoreCase($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getAuthId()
 * @method $this withAuthId($value)
 * @method string getAuthResourceHeaderList()
 * @method $this withAuthResourceHeaderList($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddAuthResource extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getIsWhite()
 * @method $this withIsWhite($value)
 * @method string getResourceIdJsonList()
 * @method $this withResourceIdJsonList($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AddBlackWhiteList extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getInternetSlbSpec()
 * @method $this withInternetSlbSpec($value)
 * @method string getEnableXtrace()
 * @method $this withEnableXtrace($value)
 * @method string getReplica()
 * @method $this withReplica($value)
 * @method string getEnableHardwareAcceleration()
 * @method $this withEnableHardwareAcceleration($value)
 * @method string getEnableSls()
 * @method $this withEnableSls($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getEnterpriseSecurityGroup()
 * @method $this withEnterpriseSecurityGroup($value)
 * @method array getTag()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSlbSpec()
 * @method $this withSlbSpec($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getZoneInfo()
 * @method $this withZoneInfo($value)
 * @method string getXtraceRatio()
 * @method $this withXtraceRatio($value)
 * @method string getVSwitchId2()
 * @method $this withVSwitchId2($value)
 * @method string getVpc()
 * @method $this withVpc($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class AddGateway extends Rpc
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getKeyName()
 * @method $this withKeyName($value)
 * @method string getTokenPrefix()
 * @method $this withTokenPrefix($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getJwks()
 * @method $this withJwks($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTokenPosition()
 * @method $this withTokenPosition($value)
 * @method string getEncodeType()
 * @method $this withEncodeType($value)
 * @method string getKeyValue()
 * @method $this withKeyValue($value)
 * @method string getTokenPass()
 * @method $this withTokenPass($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getTokenName()
 * @method $this withTokenName($value)
 */
class AddGatewayAuthConsumer extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getTlsMax()
 * @method $this withTlsMax($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getMustHttps()
 * @method $this withMustHttps($value)
 * @method string getHttp2()
 * @method $this withHttp2($value)
 * @method string getTlsMin()
 * @method $this withTlsMin($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getDomainIdListJSON()
 * @method $this withDomainIdListJSON($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getRouteType()
 * @method $this withRouteType($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getEnableWaf()
 * @method $this withEnableWaf($value)
 * @method string getPredicates()
 * @method $this withPredicates($value)
 * @method string getDirectResponseJSON()
 * @method $this withDirectResponseJSON($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFallbackServices()
 * @method $this withFallbackServices($value)
 * @method string getFallback()
 * @method $this withFallback($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getPolicies()
 * @method $this withPolicies($value)
 * @method string getRouteOrder()
 * @method $this withRouteOrder($value)
 * @method string getServices()
 * @method $this withServices($value)
 * @method string getRedirectJSON()
 * @method $this withRedirectJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddGatewayRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getSlbId()
 * @method $this withSlbId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getHttpPort()
 * @method $this withHttpPort($value)
 * @method string getServiceWeight()
 * @method $this withServiceWeight($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getVServiceList()
 * @method $this withVServiceList($value)
 * @method string getHttpsVServerGroupId()
 * @method $this withHttpsVServerGroupId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getHttpsPort()
 * @method $this withHttpsPort($value)
 */
class AddGatewaySlb extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTargetClusterUrl()
 * @method $this withTargetClusterUrl($value)
 * @method string getOriginInstanceAddress()
 * @method $this withOriginInstanceAddress($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getOriginInstanceName()
 * @method $this withOriginInstanceName($value)
 * @method string getProjectDesc()
 * @method $this withProjectDesc($value)
 * @method string getOriginInstanceNamespace()
 * @method $this withOriginInstanceNamespace($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getTargetClusterName()
 * @method $this withTargetClusterName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddMigrationTask extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getExtraJson()
 * @method $this withExtraJson($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getScMockItems()
 * @method $this withScMockItems($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getProviderAppId()
 * @method $this withProviderAppId($value)
 * @method string getProviderAppName()
 * @method $this withProviderAppName($value)
 * @method string getConsumerAppIds()
 * @method $this withConsumerAppIds($value)
 * @method string getDubboMockItems()
 * @method $this withDubboMockItems($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getMockType()
 * @method $this withMockType($value)
 */
class AddMockRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class AddSecurityGroupRule extends Rpc
{
}

/**
 * @method string getIngressOptionsRequest()
 * @method $this withIngressOptionsRequest($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPathList()
 * @method $this withPathList($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getGroupList()
 * @method $this withGroupList($value)
 */
class AddServiceSource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ApplyGatewayRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRules()
 * @method $this withRules($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ApplyTagPolicies extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTargetNamespaceId()
 * @method $this withTargetNamespaceId($value)
 * @method string getOriginNamespaceId()
 * @method $this withOriginNamespaceId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class CloneNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getExtraInfo()
 * @method $this withExtraInfo($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSwitchEnable()
 * @method $this withSwitchEnable($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getSentinelEnable()
 * @method $this withSentinelEnable($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateApplication extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getRetryTimeoutMs()
 * @method $this withRetryTimeoutMs($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getMinRequestAmount()
 * @method $this withMinRequestAmount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getMaxAllowedRtMs()
 * @method $this withMaxAllowedRtMs($value)
 * @method string getHalfOpenBaseAmountPerStep()
 * @method $this withHalfOpenBaseAmountPerStep($value)
 * @method string getStatIntervalMs()
 * @method $this withStatIntervalMs($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getHalfOpenRecoveryStepNum()
 * @method $this withHalfOpenRecoveryStepNum($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class CreateCircuitBreakerRule extends Rpc
{
}

/**
 * @method string getClusterSpecification()
 * @method $this withClusterSpecification($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method array getTag()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPubSlbSpecification()
 * @method $this withPubSlbSpecification($value)
 * @method string getPrivateSlbSpecification()
 * @method $this withPrivateSlbSpecification($value)
 * @method string getInstanceCount()
 * @method $this withInstanceCount($value)
 * @method string getConnectionType()
 * @method $this withConnectionType($value)
 * @method string getClusterVersion()
 * @method $this withClusterVersion($value)
 * @method string getDiskCapacity()
 * @method $this withDiskCapacity($value)
 * @method string getDiskType()
 * @method $this withDiskType($value)
 * @method string getPubNetworkFlow()
 * @method $this withPubNetworkFlow($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateCluster extends Rpc
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getServiceCount()
 * @method $this withServiceCount($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getControlBehavior()
 * @method $this withControlBehavior($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getMaxQueueingTimeMs()
 * @method $this withMaxQueueingTimeMs($value)
 */
class CreateFlowRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getExtraInfo()
 * @method $this withExtraInfo($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSwitchEnable()
 * @method $this withSwitchEnable($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getSentinelEnable()
 * @method $this withSentinelEnable($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateMseServiceApplication extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 */
class CreateNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getMetadata()
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
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
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getProtectThreshold()
 * @method $this withProtectThreshold($value)
 */
class CreateNacosService extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getEnableRules()
 * @method $this withEnableRules($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGatewaySwimmingLaneRouteJson()
 * @method $this withGatewaySwimmingLaneRouteJson($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
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
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Datum'] = $depth2Value['Datum'];
				}
				if(isset($depth2Value['Divisor'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Divisor'] = $depth2Value['Divisor'];
				}
				if(isset($depth2Value['Rate'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Rate'] = $depth2Value['Rate'];
				}
				foreach ($depth2Value['NameList'] as $i => $iValue) {
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.NameList.' . ($i + 1)] = $iValue;
				}
				if(isset($depth2Value['Name'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['Type'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Type'] = $depth2Value['Type'];
				}
				if(isset($depth2Value['Cond'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Cond'] = $depth2Value['Cond'];
				}
				if(isset($depth2Value['Remainder'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Remainder'] = $depth2Value['Remainder'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Operator'])){
					$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.RestItems.' . ($depth2 + 1) . '.Operator'] = $depth2Value['Operator'];
				}
			}
			if(isset($depth1Value['Condition'])){
				$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.Condition'] = $depth1Value['Condition'];
			}
			foreach ($depth1Value['Paths'] as $i => $iValue) {
				$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.Paths.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Priority'])){
				$this->options['form_params']['EntryRules.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			}
		}

		return $this;
    }
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getDbGrayEnable()
 * @method $this withDbGrayEnable($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMessageQueueFilterSide()
 * @method $this withMessageQueueFilterSide($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getMessageQueueGrayEnable()
 * @method $this withMessageQueueGrayEnable($value)
 * @method string getEntryApp()
 * @method $this withEntryApp($value)
 * @method string getRecordCanaryDetail()
 * @method $this withRecordCanaryDetail($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class CreateOrUpdateSwimmingLaneGroup extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class CreateZnode extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteAuthResource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteCircuitBreakerRules extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteEngineNamespace extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteFlowRules extends Rpc
{
}

/**
 * @method string getDeleteSlb()
 * @method $this withDeleteSlb($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGateway extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGatewayAuthConsumer extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getIdList()
 * @method $this withIdList($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGatewayAuthConsumerResource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGatewayDomain extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGatewayRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteGatewayService extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getSlbId()
 * @method $this withSlbId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteGatewaySlb extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteMigrationTask extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getBeta()
 * @method $this withBeta($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteNacosConfigs extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteNacosInstance extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteNacosService extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DeleteNamespace extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteSecurityGroupRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteServiceSource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getLaneId()
 * @method $this withLaneId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteSwimmingLane extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DeleteSwimmingLaneGroup extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DeleteZnode extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getDataIds()
 * @method $this withDataIds($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class ExportNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ExportZookeeperData extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class FetchLosslessRuleList extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSwitchEnable()
 * @method $this withSwitchEnable($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getSentinelEnable()
 * @method $this withSentinelEnable($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetApplicationList extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetApplicationListWithMetircs extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetAppMessageQueueRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getIsWhite()
 * @method $this withIsWhite($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetBlackWhiteList extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetEngineNamepace extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGateway extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGatewayAuthConsumerDetail extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGatewayDomainDetail extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGatewayOption extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGatewayRouteDetail extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetGatewayServiceDetail extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetGovernanceKubernetesCluster extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetImage extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetImportFileUrl extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getIsAll()
 * @method $this withIsAll($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetKubernetesSource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetLosslessRuleByApp extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetMseFeatureSwitch extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetMseSource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getBeta()
 * @method $this withBeta($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNid()
 * @method $this withNid($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetNacosHistoryConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetPluginConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getEnableOnly()
 * @method $this withEnableOnly($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class GetPlugins extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHasIpCount()
 * @method $this withHasIpCount($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetServiceListeners extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getSide()
 * @method $this withSide($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetServiceListPage extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getServiceGroup()
 * @method $this withServiceGroup($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getMethodController()
 * @method $this withMethodController($value)
 */
class GetServiceMethodPage extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetTagsBySwimmingLaneGroupId extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class GetZookeeperDataImportUrl extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 */
class ImportNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getServiceList()
 * @method $this withServiceList($value)
 * @method string getTlsSetting()
 * @method $this withTlsSetting($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getFcServiceName()
 * @method $this withFcServiceName($value)
 * @method string getFcVersion()
 * @method $this withFcVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ImportServices extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 */
class ImportZookeeperData extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAnsInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAnsServiceClusters extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHasIpCount()
 * @method $this withHasIpCount($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAnsServices extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListAppBySwimmingLaneGroupTag extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ListAuthPolicy extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getResourceSearchKey()
 * @method $this withResourceSearchKey($value)
 */
class ListCircuitBreakerRules extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterConnectionTypes extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterHealthCheckTask extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getClusterAliasName()
 * @method $this withClusterAliasName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusters extends Rpc
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getConnectType()
 * @method $this withConnectType($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterTypes extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListClusterVersions extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListConfigTrack extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListEngineNamespaces extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListEurekaInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListEurekaServices extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListExportZookeeperData extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getResourceSearchKey()
 * @method $this withResourceSearchKey($value)
 */
class ListFlowRules extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getConsumerStatus()
 * @method $this withConsumerStatus($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayAuthConsumer extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteName()
 * @method $this withRouteName($value)
 * @method string getResourceStatus()
 * @method $this withResourceStatus($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayAuthConsumerResource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayDomain extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewayRouteOnAuth extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListGatewaySlb extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListInstanceCount extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListListenersByConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListListenersByIp extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOriginInstanceName()
 * @method $this withOriginInstanceName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListMigrationTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListNacosConfigs extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListNacosHistoryConfigs extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListNamingTrack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListSecurityGroup extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListSecurityGroupRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListServiceSource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListSSLCert extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListZkTrack extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListZnodeChildren extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getAligned()
 * @method $this withAligned($value)
 * @method string getFuncType()
 * @method $this withFuncType($value)
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method string getWarmupTime()
 * @method $this withWarmupTime($value)
 * @method string getRelated()
 * @method $this withRelated($value)
 * @method string getNotice()
 * @method $this withNotice($value)
 * @method string getLossLessDetail()
 * @method $this withLossLessDetail($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ModifyLosslessRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class OfflineGatewayRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getMute()
 * @method $this withMute($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNoticeType()
 * @method $this withNoticeType($value)
 * @method string getRiskCode()
 * @method $this withRiskCode($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class OrderClusterHealthCheckRiskNotice extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class PullServices extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class PutClusterHealthCheckTask extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryAllSwimmingLane extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryAllSwimmingLaneGroup extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryBusinessLocations extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAclSwitch()
 * @method $this withAclSwitch($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryClusterDiskSpecification extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getAclSwitch()
 * @method $this withAclSwitch($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryClusterInfo extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getConnectType()
 * @method $this withConnectType($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryClusterSpecification extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getNeedRunningConf()
 * @method $this withNeedRunningConf($value)
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryGatewayRegion extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryGatewayType extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryGovernanceKubernetesCluster extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryInstancesInfo extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getMonitorType()
 * @method $this withMonitorType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStep()
 * @method $this withStep($value)
 */
class QueryMonitor extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class QueryNamespace extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QuerySlbSpec extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getLaneId()
 * @method $this withLaneId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QuerySwimmingLaneById extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class QueryZnodeDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class RemoveApplication extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class RemoveAuthPolicy extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getPodNameList()
 * @method $this withPodNameList($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class RestartCluster extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class RetryCluster extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAuthRule()
 * @method $this withAuthRule($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getK8sNamespace()
 * @method $this withK8sNamespace($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class UpdateAuthPolicy extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getIsWhite()
 * @method $this withIsWhite($value)
 * @method string getResourceIdJsonList()
 * @method $this withResourceIdJsonList($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateBlackWhiteList extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getRetryTimeoutMs()
 * @method $this withRetryTimeoutMs($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getMinRequestAmount()
 * @method $this withMinRequestAmount($value)
 * @method string getMaxAllowedRtMs()
 * @method $this withMaxAllowedRtMs($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getHalfOpenBaseAmountPerStep()
 * @method $this withHalfOpenBaseAmountPerStep($value)
 * @method string getStatIntervalMs()
 * @method $this withStatIntervalMs($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getHalfOpenRecoveryStepNum()
 * @method $this withHalfOpenRecoveryStepNum($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class UpdateCircuitBreakerRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterAliasName()
 * @method $this withClusterAliasName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateCluster extends Rpc
{
}

/**
 * @method string getClusterSpecification()
 * @method $this withClusterSpecification($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getInstanceCount()
 * @method $this withInstanceCount($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMseVersion()
 * @method $this withMseVersion($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateClusterSpec extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getConfigAuthEnabled()
 * @method $this withConfigAuthEnabled($value)
 * @method string getPassWord()
 * @method $this withPassWord($value)
 * @method string getMaxClientCnxns()
 * @method $this withMaxClientCnxns($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getNamingAuthEnabled()
 * @method $this withNamingAuthEnabled($value)
 * @method string getExtendedTypesEnable()
 * @method $this withExtendedTypesEnable($value)
 * @method string getAutopurgeSnapRetainCount()
 * @method $this withAutopurgeSnapRetainCount($value)
 * @method string getConfigSecretEnabled()
 * @method $this withConfigSecretEnabled($value)
 * @method string getMCPEnabled()
 * @method $this withMCPEnabled($value)
 * @method string getSyncLimit()
 * @method $this withSyncLimit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTLSEnabled()
 * @method $this withTLSEnabled($value)
 * @method string getOpenSuperAcl()
 * @method string getEurekaSupported()
 * @method $this withEurekaSupported($value)
 * @method string getSnapshotCount()
 * @method $this withSnapshotCount($value)
 * @method string getMinSessionTimeout()
 * @method $this withMinSessionTimeout($value)
 * @method string getJuteMaxbuffer()
 * @method $this withJuteMaxbuffer($value)
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getMaxSessionTimeout()
 * @method $this withMaxSessionTimeout($value)
 * @method string getTickTime()
 * @method $this withTickTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getServiceCount()
 * @method $this withServiceCount($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateEngineNamespace extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getControlBehavior()
 * @method $this withControlBehavior($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getMaxQueueingTimeMs()
 * @method $this withMaxQueueingTimeMs($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateFlowRule extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getKeyName()
 * @method $this withKeyName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTokenPrefix()
 * @method $this withTokenPrefix($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getJwks()
 * @method $this withJwks($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTokenPosition()
 * @method $this withTokenPosition($value)
 * @method string getEncodeType()
 * @method $this withEncodeType($value)
 * @method string getKeyValue()
 * @method $this withKeyValue($value)
 * @method string getTokenPass()
 * @method $this withTokenPass($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getTokenName()
 * @method $this withTokenName($value)
 */
class UpdateGatewayAuthConsumer extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getResourceList()
 * @method $this withResourceList($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayAuthConsumerResource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getIdList()
 * @method $this withIdList($value)
 * @method string getResourceStatus()
 * @method $this withResourceStatus($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayAuthConsumerResourceStatus extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getConsumerStatus()
 * @method $this withConsumerStatus($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayAuthConsumerStatus extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getTlsMax()
 * @method $this withTlsMax($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getMustHttps()
 * @method $this withMustHttps($value)
 * @method string getHttp2()
 * @method $this withHttp2($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTlsMin()
 * @method $this withTlsMin($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayDomain extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayName extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getDomainIdListJSON()
 * @method $this withDomainIdListJSON($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getEnableWaf()
 * @method $this withEnableWaf($value)
 * @method string getPredicates()
 * @method $this withPredicates($value)
 * @method string getDirectResponseJSON()
 * @method $this withDirectResponseJSON($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFallbackServices()
 * @method $this withFallbackServices($value)
 * @method string getFallback()
 * @method $this withFallback($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getDestinationType()
 * @method $this withDestinationType($value)
 * @method string getRouteOrder()
 * @method $this withRouteOrder($value)
 * @method string getServices()
 * @method $this withServices($value)
 * @method string getRedirectJSON()
 * @method $this withRedirectJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getAuthJSON()
 * @method $this withAuthJSON($value)
 */
class UpdateGatewayRouteAuth extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getCorsJSON()
 * @method $this withCorsJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRouteCORS extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getHeaderOpJSON()
 * @method $this withHeaderOpJSON($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRouteHeaderOp extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getHttpRewriteJSON()
 * @method $this withHttpRewriteJSON($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRouteHTTPRewrite extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getRetryJSON()
 * @method $this withRetryJSON($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRouteRetry extends Rpc
{
}

/**
 * @method string getTimeoutJSON()
 * @method $this withTimeoutJSON($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRouteTimeout extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getEnableWaf()
 * @method $this withEnableWaf($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewayRouteWafStatus extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getGatewayTrafficPolicy()
 * @method $this withGatewayTrafficPolicy($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateGatewayServiceTrafficPolicy extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getReplica()
 * @method $this withReplica($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateGatewaySpec extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateImage extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getFilterSide()
 * @method $this withFilterSide($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class UpdateMessageQueueRoute extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getTargetClusterUrl()
 * @method $this withTargetClusterUrl($value)
 * @method string getOriginInstanceAddress()
 * @method $this withOriginInstanceAddress($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getOriginInstanceName()
 * @method $this withOriginInstanceName($value)
 * @method string getProjectDesc()
 * @method $this withProjectDesc($value)
 * @method string getOriginInstanceNamespace()
 * @method $this withOriginInstanceNamespace($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getTargetClusterName()
 * @method $this withTargetClusterName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateMigrationTask extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getCheckPort()
 * @method $this withCheckPort($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getHealthChecker()
 * @method $this withHealthChecker($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getUseInstancePortForCheck()
 * @method $this withUseInstancePortForCheck($value)
 */
class UpdateNacosCluster extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getEncryptedDataKey()
 * @method $this withEncryptedDataKey($value)
 * @method string getType()
 * @method $this withType($value)
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
 * @method string getDesc()
 * @method $this withDesc($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class UpdateNacosConfig extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getMetadata()
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
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
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
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
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getProtectThreshold()
 * @method $this withProtectThreshold($value)
 */
class UpdateNacosService extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getGmtModified()
 * @method $this withGmtModified($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getPluginId()
 * @method $this withPluginId($value)
 * @method string getGmtCreate()
 * @method $this withGmtCreate($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getConfigLevel()
 * @method $this withConfigLevel($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class UpdatePluginConfig extends Rpc
{
}

/**
 * @method string getIngressOptionsRequest()
 * @method $this withIngressOptionsRequest($value)
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPathList()
 * @method $this withPathList($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateServiceSource extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
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
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpdateZnode extends Rpc
{
}

/**
 * @method string getMseSessionId()
 * @method $this withMseSessionId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getUpgradeVersion()
 * @method $this withUpgradeVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class UpgradeCluster extends Rpc
{
}
