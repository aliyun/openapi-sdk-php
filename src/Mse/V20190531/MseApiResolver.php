<?php

namespace AlibabaCloud\Mse\V20190531;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddMockRule addMockRule(array $options = [])
 * @method AddServiceSource addServiceSource(array $options = [])
 * @method CloneNacosConfig cloneNacosConfig(array $options = [])
 * @method CreateAlarmRule createAlarmRule(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateEngineNamespace createEngineNamespace(array $options = [])
 * @method CreateGovernanceKubernetesCluster createGovernanceKubernetesCluster(array $options = [])
 * @method CreateNacosConfig createNacosConfig(array $options = [])
 * @method CreateZnode createZnode(array $options = [])
 * @method DeleteAlarmRule deleteAlarmRule(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteEngineNamespace deleteEngineNamespace(array $options = [])
 * @method DeleteNacosConfig deleteNacosConfig(array $options = [])
 * @method DeleteNacosConfigs deleteNacosConfigs(array $options = [])
 * @method DeleteNacosService deleteNacosService(array $options = [])
 * @method DeleteZnode deleteZnode(array $options = [])
 * @method ExportNacosConfig exportNacosConfig(array $options = [])
 * @method GetEngineNamepace getEngineNamepace(array $options = [])
 * @method GetGateway getGateway(array $options = [])
 * @method GetGatewayOption getGatewayOption(array $options = [])
 * @method GetGovernanceKubernetesCluster getGovernanceKubernetesCluster(array $options = [])
 * @method GetGovernanceKubernetesClusterList getGovernanceKubernetesClusterList(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetImportFileUrl getImportFileUrl(array $options = [])
 * @method GetMseFeatureSwitch getMseFeatureSwitch(array $options = [])
 * @method GetNacosConfig getNacosConfig(array $options = [])
 * @method GetNacosHistoryConfig getNacosHistoryConfig(array $options = [])
 * @method GetOverview getOverview(array $options = [])
 * @method ImportNacosConfig importNacosConfig(array $options = [])
 * @method ListAlarmContactGroups listAlarmContactGroups(array $options = [])
 * @method ListAlarmHistories listAlarmHistories(array $options = [])
 * @method ListAlarmItems listAlarmItems(array $options = [])
 * @method ListAlarmRules listAlarmRules(array $options = [])
 * @method ListAnsInstances listAnsInstances(array $options = [])
 * @method ListAnsServiceClusters listAnsServiceClusters(array $options = [])
 * @method ListAnsServices listAnsServices(array $options = [])
 * @method ListClusterConnectionTypes listClusterConnectionTypes(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListClusterTypes listClusterTypes(array $options = [])
 * @method ListClusterVersions listClusterVersions(array $options = [])
 * @method ListEngineNamespaces listEngineNamespaces(array $options = [])
 * @method ListEurekaInstances listEurekaInstances(array $options = [])
 * @method ListEurekaServices listEurekaServices(array $options = [])
 * @method ListGateway listGateway(array $options = [])
 * @method ListListenersByConfig listListenersByConfig(array $options = [])
 * @method ListListenersByIp listListenersByIp(array $options = [])
 * @method ListNacosConfigs listNacosConfigs(array $options = [])
 * @method ListNacosHistoryConfigs listNacosHistoryConfigs(array $options = [])
 * @method ListZnodeChildren listZnodeChildren(array $options = [])
 * @method ModifyGovernanceKubernetesCluster modifyGovernanceKubernetesCluster(array $options = [])
 * @method QueryBusinessLocations queryBusinessLocations(array $options = [])
 * @method QueryClusterDetail queryClusterDetail(array $options = [])
 * @method QueryClusterDiskSpecification queryClusterDiskSpecification(array $options = [])
 * @method QueryClusterSpecification queryClusterSpecification(array $options = [])
 * @method QueryConfig queryConfig(array $options = [])
 * @method QueryGatewayRegion queryGatewayRegion(array $options = [])
 * @method QueryGatewayType queryGatewayType(array $options = [])
 * @method QueryMonitor queryMonitor(array $options = [])
 * @method QuerySlbSpec querySlbSpec(array $options = [])
 * @method QueryZnodeDetail queryZnodeDetail(array $options = [])
 * @method RestartCluster restartCluster(array $options = [])
 * @method RetryCluster retryCluster(array $options = [])
 * @method ScalingCluster scalingCluster(array $options = [])
 * @method UpdateAcl updateAcl(array $options = [])
 * @method UpdateCluster updateCluster(array $options = [])
 * @method UpdateConfig updateConfig(array $options = [])
 * @method UpdateEngineNamespace updateEngineNamespace(array $options = [])
 * @method UpdateGatewayName updateGatewayName(array $options = [])
 * @method UpdateGatewayOption updateGatewayOption(array $options = [])
 * @method UpdateGatewayRouteHTTPRewrite updateGatewayRouteHTTPRewrite(array $options = [])
 * @method UpdateImage updateImage(array $options = [])
 * @method UpdateNacosConfig updateNacosConfig(array $options = [])
 * @method UpdateNacosInstance updateNacosInstance(array $options = [])
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
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getInfo1()
 * @method $this withInfo1($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInfo2()
 * @method $this withInfo2($value)
 */
class AddServiceSource extends Rpc
{
}

/**
 * @method string getTargetNamespaceId()
 * @method $this withTargetNamespaceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateEngineNamespace extends Rpc
{
}

/**
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getNameSpaceInfos()
 * @method $this withNameSpaceInfos($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getK8sVersion()
 * @method $this withK8sVersion($value)
 * @method string getPilotStartTime()
 * @method $this withPilotStartTime($value)
 */
class CreateGovernanceKubernetesCluster extends Rpc
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
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateNacosConfig extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 */
class CreateZnode extends Rpc
{
}

/**
 * @method string getAlarmRuleId()
 * @method $this withAlarmRuleId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 */
class DeleteAlarmRule extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteEngineNamespace extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
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
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteNacosConfigs extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DeleteNacosService extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
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
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class ExportNacosConfig extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetEngineNamepace extends Rpc
{
}

/**
 * @method string getGatewayUniqueId()
 * @method $this withGatewayUniqueId($value)
 */
class GetGateway extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class GetGatewayOption extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
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
 */
class GetGovernanceKubernetesClusterList extends Rpc
{
}

/**
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
 */
class GetImportFileUrl extends Rpc
{
}

class GetMseFeatureSwitch extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
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
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class GetNacosHistoryConfig extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetOverview extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class ImportNacosConfig extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListAnsServices extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

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
 */
class ListClusters extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class ListClusterTypes extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
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
 */
class ListEurekaServices extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFilterParams()
 * @method $this withFilterParams($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderItem()
 * @method $this withOrderItem($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDescSort()
 * @method $this withDescSort($value)
 */
class ListGateway extends Rpc
{
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
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class ListNacosHistoryConfigs extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
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
 */
class ModifyGovernanceKubernetesCluster extends Rpc
{
}

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
 */
class QueryClusterDetail extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 */
class QueryClusterDiskSpecification extends Rpc
{
}

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
 */
class QueryConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class QueryGatewayRegion extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class QueryGatewayType extends Rpc
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
 * @method string getStep()
 * @method $this withStep($value)
 */
class QueryMonitor extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class QuerySlbSpec extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
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
 */
class ScalingCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAclEntryList()
 * @method $this withAclEntryList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateAcl extends Rpc
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
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateGatewayName extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGatewayOption()
 * @method $this withGatewayOption($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayOption extends Rpc
{
}

/**
 * @method string getHttpRewriteJSON()
 * @method $this withHttpRewriteJSON($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGatewayId()
 * @method $this withGatewayId($value)
 */
class UpdateGatewayRouteHTTPRewrite extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 */
class UpdateImage extends Rpc
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
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getEphemeral()
 * @method $this withEphemeral($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
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
 * @method string getData()
 * @method $this withData($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getRequestPars()
 * @method $this withRequestPars($value)
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
 */
class UpgradeCluster extends Rpc
{
}
