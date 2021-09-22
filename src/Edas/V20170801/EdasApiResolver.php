<?php

namespace AlibabaCloud\Edas\V20170801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbortAndRollbackChangeOrder abortAndRollbackChangeOrder(array $options = [])
 * @method AbortChangeOrder abortChangeOrder(array $options = [])
 * @method AddLogPath addLogPath(array $options = [])
 * @method AddMockRule addMockRule(array $options = [])
 * @method AddServiceTimeConfig addServiceTimeConfig(array $options = [])
 * @method AuthorizeApplication authorizeApplication(array $options = [])
 * @method AuthorizeResourceGroup authorizeResourceGroup(array $options = [])
 * @method AuthorizeRole authorizeRole(array $options = [])
 * @method BindEcsSlb bindEcsSlb(array $options = [])
 * @method BindK8sSlb bindK8sSlb(array $options = [])
 * @method BindSlb bindSlb(array $options = [])
 * @method ChangeDeployGroup changeDeployGroup(array $options = [])
 * @method ContinuePipeline continuePipeline(array $options = [])
 * @method ConvertK8sResource convertK8sResource(array $options = [])
 * @method CreateApplicationScalingRule createApplicationScalingRule(array $options = [])
 * @method CreateApplicationTemplate createApplicationTemplate(array $options = [])
 * @method CreateEnvAppGroup createEnvAppGroup(array $options = [])
 * @method CreateEnvHsfTrafficControl createEnvHsfTrafficControl(array $options = [])
 * @method CreateEnvHttpTrafficControl createEnvHttpTrafficControl(array $options = [])
 * @method CreateGrayEnvironment createGrayEnvironment(array $options = [])
 * @method CreateIDCImportCommand createIDCImportCommand(array $options = [])
 * @method CreateK8sConfigMap createK8sConfigMap(array $options = [])
 * @method CreateK8sIngressRule createK8sIngressRule(array $options = [])
 * @method CreateK8sSecret createK8sSecret(array $options = [])
 * @method CreateK8sService createK8sService(array $options = [])
 * @method DelegateAdminRole delegateAdminRole(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method DeleteApplicationScalingRule deleteApplicationScalingRule(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteClusterMember deleteClusterMember(array $options = [])
 * @method DeleteConfigCenter deleteConfigCenter(array $options = [])
 * @method DeleteDegradeControl deleteDegradeControl(array $options = [])
 * @method DeleteDeployGroup deleteDeployGroup(array $options = [])
 * @method DeleteEcu deleteEcu(array $options = [])
 * @method DeleteEnvAppGroup deleteEnvAppGroup(array $options = [])
 * @method DeleteEnvHsfTrafficControl deleteEnvHsfTrafficControl(array $options = [])
 * @method DeleteEnvHttpTrafficControl deleteEnvHttpTrafficControl(array $options = [])
 * @method DeleteFlowControl deleteFlowControl(array $options = [])
 * @method DeleteGrayEnvironment deleteGrayEnvironment(array $options = [])
 * @method DeleteK8sApplication deleteK8sApplication(array $options = [])
 * @method DeleteK8sConfigMap deleteK8sConfigMap(array $options = [])
 * @method DeleteK8sIngressRule deleteK8sIngressRule(array $options = [])
 * @method DeleteK8sSecret deleteK8sSecret(array $options = [])
 * @method DeleteK8sService deleteK8sService(array $options = [])
 * @method DeleteLogPath deleteLogPath(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method DeleteServiceGroup deleteServiceGroup(array $options = [])
 * @method DeleteServiceTimeConfig deleteServiceTimeConfig(array $options = [])
 * @method DeleteSwimmingLane deleteSwimmingLane(array $options = [])
 * @method DeleteSwimmingLaneGroup deleteSwimmingLaneGroup(array $options = [])
 * @method DeleteUserDefineRegion deleteUserDefineRegion(array $options = [])
 * @method DeployApplication deployApplication(array $options = [])
 * @method DeployK8sApplication deployK8sApplication(array $options = [])
 * @method DescribeAppInstanceList describeAppInstanceList(array $options = [])
 * @method DescribeApplicationScalingRule describeApplicationScalingRule(array $options = [])
 * @method DescribeApplicationScalingRules describeApplicationScalingRules(array $options = [])
 * @method DescribeLocalitySetting describeLocalitySetting(array $options = [])
 * @method DisableApplicationScalingRule disableApplicationScalingRule(array $options = [])
 * @method DisableDegradeControl disableDegradeControl(array $options = [])
 * @method DisableFlowControl disableFlowControl(array $options = [])
 * @method DisableMockRule disableMockRule(array $options = [])
 * @method EnableApplicationScalingRule enableApplicationScalingRule(array $options = [])
 * @method EnableDegradeControl enableDegradeControl(array $options = [])
 * @method EnableFlowControl enableFlowControl(array $options = [])
 * @method EnableMockRule enableMockRule(array $options = [])
 * @method ExecuteStatus executeStatus(array $options = [])
 * @method GetAccountMockRule getAccountMockRule(array $options = [])
 * @method GetAppDeployment getAppDeployment(array $options = [])
 * @method GetApplication getApplication(array $options = [])
 * @method GetChangeOrderInfo getChangeOrderInfo(array $options = [])
 * @method GetCluster getCluster(array $options = [])
 * @method GetContainerConfiguration getContainerConfiguration(array $options = [])
 * @method GetEnvTrafficControl getEnvTrafficControl(array $options = [])
 * @method GetGrayAppGroup getGrayAppGroup(array $options = [])
 * @method GetGrayApps getGrayApps(array $options = [])
 * @method GetGrayEnvironments getGrayEnvironments(array $options = [])
 * @method GetJavaStartUpConfig getJavaStartUpConfig(array $options = [])
 * @method GetJvmConfiguration getJvmConfiguration(array $options = [])
 * @method GetK8sApplication getK8sApplication(array $options = [])
 * @method GetK8sCluster getK8sCluster(array $options = [])
 * @method GetK8sServices getK8sServices(array $options = [])
 * @method GetK8sStorageInfo getK8sStorageInfo(array $options = [])
 * @method GetMockRuleByConsumerAppId getMockRuleByConsumerAppId(array $options = [])
 * @method GetMockRuleById getMockRuleById(array $options = [])
 * @method GetMockRuleByProviderAppId getMockRuleByProviderAppId(array $options = [])
 * @method GetPackageStorageCredential getPackageStorageCredential(array $options = [])
 * @method GetScalingRules getScalingRules(array $options = [])
 * @method GetSecureToken getSecureToken(array $options = [])
 * @method GetServiceConsumersPage getServiceConsumersPage(array $options = [])
 * @method GetServiceDetail getServiceDetail(array $options = [])
 * @method GetServiceList getServiceList(array $options = [])
 * @method GetServiceListPage getServiceListPage(array $options = [])
 * @method GetServiceMethodPage getServiceMethodPage(array $options = [])
 * @method GetServiceProvidersPage getServiceProvidersPage(array $options = [])
 * @method GetSpringCloudTestMethod getSpringCloudTestMethod(array $options = [])
 * @method GetSslCertificateList getSslCertificateList(array $options = [])
 * @method GetSubAccountInfo getSubAccountInfo(array $options = [])
 * @method GetSwimmingLane getSwimmingLane(array $options = [])
 * @method GetWebContainerConfig getWebContainerConfig(array $options = [])
 * @method ImportK8sCluster importK8sCluster(array $options = [])
 * @method InsertApplication insertApplication(array $options = [])
 * @method InsertCluster insertCluster(array $options = [])
 * @method InsertClusterMember insertClusterMember(array $options = [])
 * @method InsertConfigCenter insertConfigCenter(array $options = [])
 * @method InsertDegradeControl insertDegradeControl(array $options = [])
 * @method InsertDeployGroup insertDeployGroup(array $options = [])
 * @method InsertFlowControl insertFlowControl(array $options = [])
 * @method InsertK8sApplication insertK8sApplication(array $options = [])
 * @method InsertOrUpdateRegion insertOrUpdateRegion(array $options = [])
 * @method InsertRole insertRole(array $options = [])
 * @method InsertServiceGroup insertServiceGroup(array $options = [])
 * @method InsertSwimmingLane insertSwimmingLane(array $options = [])
 * @method InsertSwimmingLaneGroup insertSwimmingLaneGroup(array $options = [])
 * @method InstallAgent installAgent(array $options = [])
 * @method ListAliyunRegion listAliyunRegion(array $options = [])
 * @method ListApplication listApplication(array $options = [])
 * @method ListApplicationEcu listApplicationEcu(array $options = [])
 * @method ListAuthority listAuthority(array $options = [])
 * @method ListBuildPack listBuildPack(array $options = [])
 * @method ListChildrenStacks listChildrenStacks(array $options = [])
 * @method ListCluster listCluster(array $options = [])
 * @method ListClusterMembers listClusterMembers(array $options = [])
 * @method ListComponents listComponents(array $options = [])
 * @method ListConfigCenters listConfigCenters(array $options = [])
 * @method ListConsumedServices listConsumedServices(array $options = [])
 * @method ListConvertableEcu listConvertableEcu(array $options = [])
 * @method ListCSBGateway listCSBGateway(array $options = [])
 * @method ListDegradeControls listDegradeControls(array $options = [])
 * @method ListDeployGroup listDeployGroup(array $options = [])
 * @method ListEcsNotInCluster listEcsNotInCluster(array $options = [])
 * @method ListEcuByRegion listEcuByRegion(array $options = [])
 * @method ListFlowControls listFlowControls(array $options = [])
 * @method ListHistoryDeployVersion listHistoryDeployVersion(array $options = [])
 * @method ListK8sConfigMaps listK8sConfigMaps(array $options = [])
 * @method ListK8sIngressRules listK8sIngressRules(array $options = [])
 * @method ListK8sPvc listK8sPvc(array $options = [])
 * @method ListK8sSecrets listK8sSecrets(array $options = [])
 * @method ListMethods listMethods(array $options = [])
 * @method ListOperationLogs listOperationLogs(array $options = [])
 * @method ListPublishedServices listPublishedServices(array $options = [])
 * @method ListRecentChangeOrder listRecentChangeOrder(array $options = [])
 * @method ListResourceGroup listResourceGroup(array $options = [])
 * @method ListRole listRole(array $options = [])
 * @method ListRootStacks listRootStacks(array $options = [])
 * @method ListScaleOutEcu listScaleOutEcu(array $options = [])
 * @method ListServiceGroups listServiceGroups(array $options = [])
 * @method ListSlb listSlb(array $options = [])
 * @method ListStatus listStatus(array $options = [])
 * @method ListSubAccount listSubAccount(array $options = [])
 * @method ListSwimmingLane listSwimmingLane(array $options = [])
 * @method ListSwimmingLaneGroup listSwimmingLaneGroup(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListUserDefineRegion listUserDefineRegion(array $options = [])
 * @method ListVpc listVpc(array $options = [])
 * @method MigrateEcu migrateEcu(array $options = [])
 * @method ModifyScalingRule modifyScalingRule(array $options = [])
 * @method QueryApplicationStatus queryApplicationStatus(array $options = [])
 * @method QueryConfigCenter queryConfigCenter(array $options = [])
 * @method QueryEccInfo queryEccInfo(array $options = [])
 * @method QueryK8sClusterLogProjectInfo queryK8sClusterLogProjectInfo(array $options = [])
 * @method QueryMigrateEcuList queryMigrateEcuList(array $options = [])
 * @method QueryMigrateRegionList queryMigrateRegionList(array $options = [])
 * @method QueryRegionConfig queryRegionConfig(array $options = [])
 * @method QueryServiceTimeConfig queryServiceTimeConfig(array $options = [])
 * @method QuerySlsLogStoreList querySlsLogStoreList(array $options = [])
 * @method RemoveMockRule removeMockRule(array $options = [])
 * @method ResetApplication resetApplication(array $options = [])
 * @method RestartApplication restartApplication(array $options = [])
 * @method RestartK8sApplication restartK8sApplication(array $options = [])
 * @method RetryChangeOrderTask retryChangeOrderTask(array $options = [])
 * @method RollbackApplication rollbackApplication(array $options = [])
 * @method RollbackChangeOrder rollbackChangeOrder(array $options = [])
 * @method ScaleInApplication scaleInApplication(array $options = [])
 * @method ScaleK8sApplication scaleK8sApplication(array $options = [])
 * @method ScaleOutApplication scaleOutApplication(array $options = [])
 * @method ScaleoutApplicationWithNewInstances scaleoutApplicationWithNewInstances(array $options = [])
 * @method StartApplication startApplication(array $options = [])
 * @method StartK8sApplication startK8sApplication(array $options = [])
 * @method StopApplication stopApplication(array $options = [])
 * @method StopK8sApplication stopK8sApplication(array $options = [])
 * @method SwitchAdvancedMonitoring switchAdvancedMonitoring(array $options = [])
 * @method SynchronizeResource synchronizeResource(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method ToggleGrayIngress toggleGrayIngress(array $options = [])
 * @method TransformClusterMember transformClusterMember(array $options = [])
 * @method UnbindK8sSlb unbindK8sSlb(array $options = [])
 * @method UnbindSlb unbindSlb(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAccountInfo updateAccountInfo(array $options = [])
 * @method UpdateApplicationBaseInfo updateApplicationBaseInfo(array $options = [])
 * @method UpdateApplicationScalingRule updateApplicationScalingRule(array $options = [])
 * @method UpdateContainer updateContainer(array $options = [])
 * @method UpdateContainerConfiguration updateContainerConfiguration(array $options = [])
 * @method UpdateDegradeControl updateDegradeControl(array $options = [])
 * @method UpdateEnvAppGroup updateEnvAppGroup(array $options = [])
 * @method UpdateEnvHttpTrafficControl updateEnvHttpTrafficControl(array $options = [])
 * @method UpdateFlowControl updateFlowControl(array $options = [])
 * @method UpdateHealthCheckUrl updateHealthCheckUrl(array $options = [])
 * @method UpdateHookConfiguration updateHookConfiguration(array $options = [])
 * @method UpdateJvmConfiguration updateJvmConfiguration(array $options = [])
 * @method UpdateK8sApplicationBaseInfo updateK8sApplicationBaseInfo(array $options = [])
 * @method UpdateK8sApplicationConfig updateK8sApplicationConfig(array $options = [])
 * @method UpdateK8sConfigMap updateK8sConfigMap(array $options = [])
 * @method UpdateK8sIngressRule updateK8sIngressRule(array $options = [])
 * @method UpdateK8sResource updateK8sResource(array $options = [])
 * @method UpdateK8sSecret updateK8sSecret(array $options = [])
 * @method UpdateK8sService updateK8sService(array $options = [])
 * @method UpdateK8sSlb updateK8sSlb(array $options = [])
 * @method UpdateLocalitySetting updateLocalitySetting(array $options = [])
 * @method UpdateMockRule updateMockRule(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method UpdateSlsLogStore updateSlsLogStore(array $options = [])
 * @method UpdateSwimmingLane updateSwimmingLane(array $options = [])
 * @method UpdateSwimmingLaneGroup updateSwimmingLaneGroup(array $options = [])
 * @method UpdateSwimmingLanePriority updateSwimmingLanePriority(array $options = [])
 * @method UppateEnvHsfTrafficControl uppateEnvHsfTrafficControl(array $options = [])
 * @method ValidateK8sResource validateK8sResource(array $options = [])
 */
class EdasApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Edas';

    /** @var string */
    public $version = '2017-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'Edas';
}

/**
 * @method string getChangeOrderId()
 */
class AbortAndRollbackChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/change_order_abort_and_rollback';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeOrderId($value)
    {
        $this->data['ChangeOrderId'] = $value;
        $this->options['query']['ChangeOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getChangeOrderId()
 */
class AbortChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/change_order_abort';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeOrderId($value)
    {
        $this->data['ChangeOrderId'] = $value;
        $this->options['query']['ChangeOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getAppId()
 */
class AddLogPath extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/log/popListLogDirs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['form_params']['Path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getScMockItemJson()
 * @method string getDubboMockItemJson()
 * @method string getExtraJson()
 * @method string getProviderAppId()
 * @method string getSource()
 * @method string getProviderAppName()
 * @method string getEnable()
 * @method string getName()
 * @method string getNamespace()
 * @method string getConsumerAppsJson()
 * @method string getRegion()
 */
class AddMockRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/addMockRule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScMockItemJson($value)
    {
        $this->data['ScMockItemJson'] = $value;
        $this->options['query']['ScMockItemJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDubboMockItemJson($value)
    {
        $this->data['DubboMockItemJson'] = $value;
        $this->options['query']['DubboMockItemJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraJson($value)
    {
        $this->data['ExtraJson'] = $value;
        $this->options['query']['ExtraJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProviderAppId($value)
    {
        $this->data['ProviderAppId'] = $value;
        $this->options['query']['ProviderAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProviderAppName($value)
    {
        $this->data['ProviderAppName'] = $value;
        $this->options['query']['ProviderAppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnable($value)
    {
        $this->data['Enable'] = $value;
        $this->options['query']['Enable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppsJson($value)
    {
        $this->data['ConsumerAppsJson'] = $value;
        $this->options['query']['ConsumerAppsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getServiceType()
 * @method string getConsumerAppId()
 * @method string getAppId()
 * @method string getServiceVersion()
 * @method string getNamespace()
 * @method string getServiceName()
 * @method string getSource()
 * @method string getRegion()
 * @method string getServiceGroup()
 * @method string getConsumerAppName()
 * @method string getTimeout()
 */
class AddServiceTimeConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/timeout/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['Path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['ServiceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppId($value)
    {
        $this->data['ConsumerAppId'] = $value;
        $this->options['query']['ConsumerAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['ServiceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceGroup($value)
    {
        $this->data['ServiceGroup'] = $value;
        $this->options['query']['ServiceGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppName($value)
    {
        $this->data['ConsumerAppName'] = $value;
        $this->options['query']['ConsumerAppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIds()
 * @method string getTargetUserId()
 */
class AuthorizeApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authorize_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIds($value)
    {
        $this->data['AppIds'] = $value;
        $this->options['query']['AppIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupIds()
 * @method string getTargetUserId()
 */
class AuthorizeResourceGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authorize_res_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupIds($value)
    {
        $this->data['ResourceGroupIds'] = $value;
        $this->options['query']['ResourceGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleIds()
 * @method string getTargetUserId()
 */
class AuthorizeRole extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authorize_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleIds($value)
    {
        $this->data['RoleIds'] = $value;
        $this->options['query']['RoleIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getVServerGroupId()
 * @method string getListenerPort()
 * @method string getVForwardingUrlRule()
 * @method string getSlbId()
 * @method string getDeployGroupId()
 * @method string getListenerHealthCheckUrl()
 * @method string getAppId()
 * @method string getListenerProtocol()
 * @method string getVServerGroupName()
 */
class BindEcsSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/slb/bind_slb';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVServerGroupId($value)
    {
        $this->data['VServerGroupId'] = $value;
        $this->options['query']['VServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerPort($value)
    {
        $this->data['ListenerPort'] = $value;
        $this->options['query']['ListenerPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVForwardingUrlRule($value)
    {
        $this->data['VForwardingUrlRule'] = $value;
        $this->options['query']['VForwardingUrlRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployGroupId($value)
    {
        $this->data['DeployGroupId'] = $value;
        $this->options['query']['DeployGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerHealthCheckUrl($value)
    {
        $this->data['ListenerHealthCheckUrl'] = $value;
        $this->options['query']['ListenerHealthCheckUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerProtocol($value)
    {
        $this->data['ListenerProtocol'] = $value;
        $this->options['query']['ListenerProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVServerGroupName($value)
    {
        $this->data['VServerGroupName'] = $value;
        $this->options['query']['VServerGroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getScheduler()
 * @method string getServicePortInfos()
 * @method string getSlbId()
 * @method string getSlbProtocol()
 * @method string getPort()
 * @method string getAppId()
 * @method string getSpecification()
 * @method string getClusterId()
 * @method string getType()
 * @method string getTargetPort()
 */
class BindK8sSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduler($value)
    {
        $this->data['Scheduler'] = $value;
        $this->options['query']['Scheduler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServicePortInfos($value)
    {
        $this->data['ServicePortInfos'] = $value;
        $this->options['query']['ServicePortInfos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbProtocol($value)
    {
        $this->data['SlbProtocol'] = $value;
        $this->options['query']['SlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['query']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpecification($value)
    {
        $this->data['Specification'] = $value;
        $this->options['query']['Specification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetPort($value)
    {
        $this->data['TargetPort'] = $value;
        $this->options['query']['TargetPort'] = $value;

        return $this;
    }
}

/**
 * @method string getVServerGroupId()
 * @method string getListenerPort()
 * @method string getSlbId()
 * @method string getAppId()
 * @method string getSlbIp()
 * @method string getType()
 */
class BindSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/app/bind_slb_json';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVServerGroupId($value)
    {
        $this->data['VServerGroupId'] = $value;
        $this->options['query']['VServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerPort($value)
    {
        $this->data['ListenerPort'] = $value;
        $this->options['query']['ListenerPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbIp($value)
    {
        $this->data['SlbIp'] = $value;
        $this->options['query']['SlbIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getForceStatus()
 * @method string getAppId()
 * @method string getEccInfo()
 * @method string getGroupName()
 */
class ChangeDeployGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_change_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceStatus($value)
    {
        $this->data['ForceStatus'] = $value;
        $this->options['query']['ForceStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getConfirm()
 * @method string getPipelineId()
 */
class ContinuePipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/pipeline_batch_confirm';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfirm($value)
    {
        $this->data['Confirm'] = $value;
        $this->options['query']['Confirm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['query']['PipelineId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getResourceName()
 * @method string getClusterId()
 * @method string getResourceType()
 */
class ConvertK8sResource extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/k8s_resource_convert';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceName($value)
    {
        $this->data['ResourceName'] = $value;
        $this->options['query']['ResourceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getScalingRuleEnable()
 * @method string getScalingRuleTimer()
 * @method string getScalingRuleMetric()
 * @method string getAppId()
 * @method string getScalingRuleTrigger()
 * @method string getScalingRuleType()
 */
class CreateApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/application_scaling_rule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleEnable($value)
    {
        $this->data['ScalingRuleEnable'] = $value;
        $this->options['query']['ScalingRuleEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleTimer($value)
    {
        $this->data['ScalingRuleTimer'] = $value;
        $this->options['query']['ScalingRuleTimer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleMetric($value)
    {
        $this->data['ScalingRuleMetric'] = $value;
        $this->options['query']['ScalingRuleMetric'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleTrigger($value)
    {
        $this->data['ScalingRuleTrigger'] = $value;
        $this->options['query']['ScalingRuleTrigger'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleType($value)
    {
        $this->data['ScalingRuleType'] = $value;
        $this->options['query']['ScalingRuleType'] = $value;

        return $this;
    }
}

/**
 * @method string getNasId()
 * @method string getEnableAhas()
 * @method string getSlsConfigs()
 * @method string getCommandArgs()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getDescription()
 * @method string getEnvs()
 * @method string getEnvFroms()
 * @method string getRequestCpu()
 * @method string getRequestMem()
 * @method string getShowName()
 * @method string getLimitMem()
 * @method string getConfigMountDescs()
 * @method string getDeployAcrossZones()
 * @method string getDeployAcrossNodes()
 * @method string getPreStop()
 * @method string getReplicas()
 * @method string getLimitCpu()
 * @method string getWebContainerConfig()
 * @method string getPackageConfig()
 * @method string getIsMultilingualApp()
 * @method string getNasMountDescs()
 * @method string getLocalVolumes()
 * @method string getCommand()
 * @method string getNasStorageType()
 * @method string getImageConfig()
 * @method string getSourceConfig()
 * @method string getEmptyDirs()
 * @method string getPvcMountDescs()
 * @method string getName()
 * @method string getAttributes()
 * @method string getRuntimeClassName()
 * @method string getJavaStartUpConfig()
 * @method string getPostStart()
 */
class CreateApplicationTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/cnedas/app_template';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasId($value)
    {
        $this->data['NasId'] = $value;
        $this->options['form_params']['NasId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAhas($value)
    {
        $this->data['EnableAhas'] = $value;
        $this->options['form_params']['EnableAhas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlsConfigs($value)
    {
        $this->data['SlsConfigs'] = $value;
        $this->options['form_params']['SlsConfigs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommandArgs($value)
    {
        $this->data['CommandArgs'] = $value;
        $this->options['form_params']['CommandArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['form_params']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['form_params']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['form_params']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvFroms($value)
    {
        $this->data['EnvFroms'] = $value;
        $this->options['form_params']['EnvFroms'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestCpu($value)
    {
        $this->data['RequestCpu'] = $value;
        $this->options['form_params']['RequestCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestMem($value)
    {
        $this->data['RequestMem'] = $value;
        $this->options['form_params']['RequestMem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowName($value)
    {
        $this->data['ShowName'] = $value;
        $this->options['form_params']['ShowName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitMem($value)
    {
        $this->data['LimitMem'] = $value;
        $this->options['form_params']['LimitMem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigMountDescs($value)
    {
        $this->data['ConfigMountDescs'] = $value;
        $this->options['form_params']['ConfigMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployAcrossZones($value)
    {
        $this->data['DeployAcrossZones'] = $value;
        $this->options['form_params']['DeployAcrossZones'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployAcrossNodes($value)
    {
        $this->data['DeployAcrossNodes'] = $value;
        $this->options['form_params']['DeployAcrossNodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreStop($value)
    {
        $this->data['PreStop'] = $value;
        $this->options['form_params']['PreStop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['form_params']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitCpu($value)
    {
        $this->data['LimitCpu'] = $value;
        $this->options['form_params']['LimitCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainerConfig($value)
    {
        $this->data['WebContainerConfig'] = $value;
        $this->options['form_params']['WebContainerConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageConfig($value)
    {
        $this->data['PackageConfig'] = $value;
        $this->options['form_params']['PackageConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsMultilingualApp($value)
    {
        $this->data['IsMultilingualApp'] = $value;
        $this->options['form_params']['IsMultilingualApp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasMountDescs($value)
    {
        $this->data['NasMountDescs'] = $value;
        $this->options['form_params']['NasMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalVolumes($value)
    {
        $this->data['LocalVolumes'] = $value;
        $this->options['form_params']['LocalVolumes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['form_params']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasStorageType($value)
    {
        $this->data['NasStorageType'] = $value;
        $this->options['form_params']['NasStorageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageConfig($value)
    {
        $this->data['ImageConfig'] = $value;
        $this->options['form_params']['ImageConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceConfig($value)
    {
        $this->data['SourceConfig'] = $value;
        $this->options['form_params']['SourceConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmptyDirs($value)
    {
        $this->data['EmptyDirs'] = $value;
        $this->options['form_params']['EmptyDirs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPvcMountDescs($value)
    {
        $this->data['PvcMountDescs'] = $value;
        $this->options['form_params']['PvcMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuntimeClassName($value)
    {
        $this->data['RuntimeClassName'] = $value;
        $this->options['form_params']['RuntimeClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJavaStartUpConfig($value)
    {
        $this->data['JavaStartUpConfig'] = $value;
        $this->options['form_params']['JavaStartUpConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostStart($value)
    {
        $this->data['PostStart'] = $value;
        $this->options['form_params']['PostStart'] = $value;

        return $this;
    }
}

/**
 * @method string getPointcutName()
 * @method string getScopes()
 */
class CreateEnvAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_app_groups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopes($value)
    {
        $this->data['Scopes'] = $value;
        $this->options['form_params']['Scopes'] = $value;

        return $this;
    }
}

/**
 * @method string getParamTypes()
 * @method string getCondition()
 * @method string getAppId()
 * @method string getLabelAdviceName()
 * @method string getPointcutName()
 * @method string getServiceName()
 * @method string getTriggerPolicy()
 * @method string getGroup()
 * @method string getMethodName()
 */
class CreateEnvHsfTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_hsf_traffic_control';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamTypes($value)
    {
        $this->data['ParamTypes'] = $value;
        $this->options['form_params']['ParamTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['form_params']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelAdviceName($value)
    {
        $this->data['LabelAdviceName'] = $value;
        $this->options['form_params']['LabelAdviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTriggerPolicy($value)
    {
        $this->data['TriggerPolicy'] = $value;
        $this->options['form_params']['TriggerPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['form_params']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getCondition()
 * @method string getUrlPath()
 * @method string getAppId()
 * @method string getLabelAdviceName()
 * @method string getPointcutName()
 * @method string getTriggerPolicy()
 */
class CreateEnvHttpTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_http_traffic_control';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['form_params']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlPath($value)
    {
        $this->data['UrlPath'] = $value;
        $this->options['form_params']['UrlPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelAdviceName($value)
    {
        $this->data['LabelAdviceName'] = $value;
        $this->options['form_params']['LabelAdviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTriggerPolicy($value)
    {
        $this->data['TriggerPolicy'] = $value;
        $this->options['form_params']['TriggerPolicy'] = $value;

        return $this;
    }
}

/**
 * @method string getShowName()
 * @method string getLogicalRegionId()
 * @method string getDescription()
 * @method string getTag()
 */
class CreateGrayEnvironment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowName($value)
    {
        $this->data['ShowName'] = $value;
        $this->options['form_params']['ShowName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['form_params']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class CreateIDCImportCommand extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/create_idc_import_command';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getNamespace()
 * @method string getName()
 * @method string getClusterId()
 */
class CreateK8sConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_config_map';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getName()
 * @method string getIngressConf()
 * @method string getClusterId()
 */
class CreateK8sIngressRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_ingress';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressConf($value)
    {
        $this->data['IngressConf'] = $value;
        $this->options['query']['IngressConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getBase64Encoded()
 * @method string getData()
 * @method string getName()
 * @method string getNamespace()
 * @method string getClusterId()
 * @method string getCertId()
 * @method string getType()
 * @method string getCertRegionId()
 */
class CreateK8sSecret extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_secret';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBase64Encoded($value)
    {
        $this->data['Base64Encoded'] = $value;
        $this->options['form_params']['Base64Encoded'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertId($value)
    {
        $this->data['CertId'] = $value;
        $this->options['form_params']['CertId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertRegionId($value)
    {
        $this->data['CertRegionId'] = $value;
        $this->options['form_params']['CertRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getType()
 * @method string getServicePorts()
 */
class CreateK8sService extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_service';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServicePorts($value)
    {
        $this->data['ServicePorts'] = $value;
        $this->options['query']['ServicePorts'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetUserId()
 */
class DelegateAdminRole extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/delegate_admin_role';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class DeleteApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_delete_app';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class DeleteApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/application_scaling_rule';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getMode()
 * @method string getClusterId()
 */
class DeleteCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['query']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterMemberId()
 * @method string getClusterId()
 */
class DeleteClusterMember extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_member';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterMemberId($value)
    {
        $this->data['ClusterMemberId'] = $value;
        $this->options['query']['ClusterMemberId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class DeleteConfigCenter extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenter';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DeleteDegradeControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradeControl';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupName()
 */
class DeleteDeployGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/deploy_group';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getEcuId()
 */
class DeleteEcu extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/delete_ecu';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcuId($value)
    {
        $this->data['EcuId'] = $value;
        $this->options['query']['EcuId'] = $value;

        return $this;
    }
}

/**
 * @method string getPointcutName()
 * @method string getScopes()
 */
class DeleteEnvAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/EnvAppGroups';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['query']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopes($value)
    {
        $this->data['Scopes'] = $value;
        $this->options['query']['Scopes'] = $value;

        return $this;
    }
}

/**
 * @method string getLabelAdviceName()
 * @method string getPointcutName()
 */
class DeleteEnvHsfTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_hsf_traffic_control';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelAdviceName($value)
    {
        $this->data['LabelAdviceName'] = $value;
        $this->options['query']['LabelAdviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['query']['PointcutName'] = $value;

        return $this;
    }
}

/**
 * @method string getLabelAdviceName()
 * @method string getPointcutName()
 */
class DeleteEnvHttpTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_http_traffic_control';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelAdviceName($value)
    {
        $this->data['LabelAdviceName'] = $value;
        $this->options['query']['LabelAdviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['query']['PointcutName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DeleteFlowControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowControl';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 * @method string getPointcutName()
 */
class DeleteGrayEnvironment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['query']['PointcutName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class DeleteK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_apps';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getName()
 * @method string getClusterId()
 */
class DeleteK8sConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_config_map';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getName()
 * @method string getClusterId()
 */
class DeleteK8sIngressRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_ingress';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getNamespace()
 * @method string getClusterId()
 */
class DeleteK8sSecret extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_secret';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 */
class DeleteK8sService extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_service';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getAppId()
 */
class DeleteLogPath extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/log/popListLogDirs';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['Path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleId()
 */
class DeleteRole extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/delete_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['query']['RoleId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class DeleteServiceGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/serviceGroups';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteServiceTimeConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/timeout/remove';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getLaneId()
 */
class DeleteSwimmingLane extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lanes';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaneId($value)
    {
        $this->data['LaneId'] = $value;
        $this->options['query']['LaneId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class DeleteSwimmingLaneGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lane_groups';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getRegionTag()
 * @method string getId()
 */
class DeleteUserDefineRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/user_region_def';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionTag($value)
    {
        $this->data['RegionTag'] = $value;
        $this->options['query']['RegionTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getBuildPackId()
 * @method string getComponentIds()
 * @method string getGroupId()
 * @method string getBatchWaitTime()
 * @method string getReleaseType()
 * @method string getBatch()
 * @method string getAppEnv()
 * @method string getPackageVersion()
 * @method string getGray()
 * @method string getAppId()
 * @method string getImageUrl()
 * @method string getWarUrl()
 * @method string getTrafficControlStrategy()
 * @method string getDesc()
 * @method string getDeployType()
 */
class DeployApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_deploy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentIds($value)
    {
        $this->data['ComponentIds'] = $value;
        $this->options['query']['ComponentIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReleaseType($value)
    {
        $this->data['ReleaseType'] = $value;
        $this->options['query']['ReleaseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatch($value)
    {
        $this->data['Batch'] = $value;
        $this->options['query']['Batch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppEnv($value)
    {
        $this->data['AppEnv'] = $value;
        $this->options['query']['AppEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGray($value)
    {
        $this->data['Gray'] = $value;
        $this->options['query']['Gray'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWarUrl($value)
    {
        $this->data['WarUrl'] = $value;
        $this->options['query']['WarUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrafficControlStrategy($value)
    {
        $this->data['TrafficControlStrategy'] = $value;
        $this->options['query']['TrafficControlStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['query']['Desc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['query']['DeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getNasId()
 * @method string getWebContainer()
 * @method string getEnableAhas()
 * @method string getSlsConfigs()
 * @method string getReadiness()
 * @method string getPackageVersionId()
 * @method string getBatchWaitTime()
 * @method string getLiveness()
 * @method string getEnvs()
 * @method string getCpuLimit()
 * @method string getPackageVersion()
 * @method string getStorageType()
 * @method string getEnvFroms()
 * @method string getConfigMountDescs()
 * @method string getEdasContainerVersion()
 * @method string getPackageUrl()
 * @method string getMemoryLimit()
 * @method string getImageTag()
 * @method string getDeployAcrossZones()
 * @method string getDeployAcrossNodes()
 * @method string getMemoryRequest()
 * @method string getImage()
 * @method string getPreStop()
 * @method string getMountDescs()
 * @method string getReplicas()
 * @method string getCpuRequest()
 * @method string getWebContainerConfig()
 * @method string getLocalVolume()
 * @method string getCommand()
 * @method string getUpdateStrategy()
 * @method string getArgs()
 * @method string getJDK()
 * @method string getUseBodyEncoding()
 * @method string getChangeOrderDesc()
 * @method string getUriEncoding()
 * @method string getAppId()
 * @method string getBatchTimeout()
 * @method string getPvcMountDescs()
 * @method string getEmptyDirs()
 * @method string getMcpuRequest()
 * @method string getMcpuLimit()
 * @method string getVolumesStr()
 * @method string getRuntimeClassName()
 * @method string getTrafficControlStrategy()
 * @method string getPostStart()
 * @method string getJavaStartUpConfig()
 */
class DeployK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_apps';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasId($value)
    {
        $this->data['NasId'] = $value;
        $this->options['query']['NasId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAhas($value)
    {
        $this->data['EnableAhas'] = $value;
        $this->options['query']['EnableAhas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlsConfigs($value)
    {
        $this->data['SlsConfigs'] = $value;
        $this->options['query']['SlsConfigs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersionId($value)
    {
        $this->data['PackageVersionId'] = $value;
        $this->options['query']['PackageVersionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuLimit($value)
    {
        $this->data['CpuLimit'] = $value;
        $this->options['query']['CpuLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorageType($value)
    {
        $this->data['StorageType'] = $value;
        $this->options['query']['StorageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvFroms($value)
    {
        $this->data['EnvFroms'] = $value;
        $this->options['query']['EnvFroms'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigMountDescs($value)
    {
        $this->data['ConfigMountDescs'] = $value;
        $this->options['query']['ConfigMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdasContainerVersion($value)
    {
        $this->data['EdasContainerVersion'] = $value;
        $this->options['query']['EdasContainerVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryLimit($value)
    {
        $this->data['MemoryLimit'] = $value;
        $this->options['query']['MemoryLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageTag($value)
    {
        $this->data['ImageTag'] = $value;
        $this->options['query']['ImageTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployAcrossZones($value)
    {
        $this->data['DeployAcrossZones'] = $value;
        $this->options['query']['DeployAcrossZones'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployAcrossNodes($value)
    {
        $this->data['DeployAcrossNodes'] = $value;
        $this->options['query']['DeployAcrossNodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryRequest($value)
    {
        $this->data['MemoryRequest'] = $value;
        $this->options['query']['MemoryRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImage($value)
    {
        $this->data['Image'] = $value;
        $this->options['query']['Image'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreStop($value)
    {
        $this->data['PreStop'] = $value;
        $this->options['query']['PreStop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountDescs($value)
    {
        $this->data['MountDescs'] = $value;
        $this->options['query']['MountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuRequest($value)
    {
        $this->data['CpuRequest'] = $value;
        $this->options['query']['CpuRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainerConfig($value)
    {
        $this->data['WebContainerConfig'] = $value;
        $this->options['query']['WebContainerConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalVolume($value)
    {
        $this->data['LocalVolume'] = $value;
        $this->options['query']['LocalVolume'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUpdateStrategy($value)
    {
        $this->data['UpdateStrategy'] = $value;
        $this->options['query']['UpdateStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArgs($value)
    {
        $this->data['Args'] = $value;
        $this->options['query']['Args'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJDK($value)
    {
        $this->data['JDK'] = $value;
        $this->options['query']['JDK'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseBodyEncoding($value)
    {
        $this->data['UseBodyEncoding'] = $value;
        $this->options['query']['UseBodyEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeOrderDesc($value)
    {
        $this->data['ChangeOrderDesc'] = $value;
        $this->options['query']['ChangeOrderDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUriEncoding($value)
    {
        $this->data['UriEncoding'] = $value;
        $this->options['query']['UriEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchTimeout($value)
    {
        $this->data['BatchTimeout'] = $value;
        $this->options['query']['BatchTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPvcMountDescs($value)
    {
        $this->data['PvcMountDescs'] = $value;
        $this->options['query']['PvcMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmptyDirs($value)
    {
        $this->data['EmptyDirs'] = $value;
        $this->options['query']['EmptyDirs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcpuRequest($value)
    {
        $this->data['McpuRequest'] = $value;
        $this->options['query']['McpuRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcpuLimit($value)
    {
        $this->data['McpuLimit'] = $value;
        $this->options['query']['McpuLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVolumesStr($value)
    {
        $this->data['VolumesStr'] = $value;
        $this->options['query']['VolumesStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuntimeClassName($value)
    {
        $this->data['RuntimeClassName'] = $value;
        $this->options['query']['RuntimeClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrafficControlStrategy($value)
    {
        $this->data['TrafficControlStrategy'] = $value;
        $this->options['query']['TrafficControlStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostStart($value)
    {
        $this->data['PostStart'] = $value;
        $this->options['query']['PostStart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJavaStartUpConfig($value)
    {
        $this->data['JavaStartUpConfig'] = $value;
        $this->options['query']['JavaStartUpConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getWithNodeInfo()
 */
class DescribeAppInstanceList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/app_instance_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithNodeInfo($value)
    {
        $this->data['WithNodeInfo'] = $value;
        $this->options['query']['WithNodeInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class DescribeApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/application_scaling_rule';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class DescribeApplicationScalingRules extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/application_scaling_rules';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 * @method string getAppId()
 * @method string getRegion()
 */
class DescribeLocalitySetting extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/applications/locality/setting';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class DisableApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/disable_application_scaling_rule';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DisableDegradeControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradecontrol/disable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DisableFlowControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowcontrol/disable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DisableMockRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/disableMockRule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class EnableApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/enable_application_scaling_rule';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class EnableDegradeControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradecontrol/enable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class EnableFlowControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowcontrol/enable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class EnableMockRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/enableMockRule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountId()
 * @method string getNamespaceId()
 * @method string getAppId()
 * @method string getIp()
 * @method string getTenantId()
 * @method string getPodName()
 * @method string getSource()
 * @method string getRegion()
 * @method string getStatus()
 */
class ExecuteStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mse/status/execute';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['query']['AccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['query']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPodName($value)
    {
        $this->data['PodName'] = $value;
        $this->options['query']['PodName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getProviderAppName()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getName()
 * @method string getNamespace()
 * @method string getRegion()
 * @method string getConsumerAppName()
 */
class GetAccountMockRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/getAccountMockRule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProviderAppName($value)
    {
        $this->data['ProviderAppName'] = $value;
        $this->options['query']['ProviderAppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppName($value)
    {
        $this->data['ConsumerAppName'] = $value;
        $this->options['query']['ConsumerAppName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetAppDeployment extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/app_deployment';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getChangeOrderId()
 */
class GetChangeOrderInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/change_order_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeOrderId($value)
    {
        $this->data['ChangeOrderId'] = $value;
        $this->options['query']['ChangeOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class GetCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 */
class GetContainerConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/container_config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getPointcutName()
 */
class GetEnvTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_traffic_control_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['query']['PointcutName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIds()
 * @method string getLogicalRegionId()
 * @method string getPointcutName()
 */
class GetGrayAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/app_group_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIds($value)
    {
        $this->data['AppIds'] = $value;
        $this->options['query']['AppIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['query']['PointcutName'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterTypes()
 * @method string getAppname()
 * @method string getPhysicalRegionId()
 */
class GetGrayApps extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/app_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterTypes($value)
    {
        $this->data['ClusterTypes'] = $value;
        $this->options['query']['ClusterTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppname($value)
    {
        $this->data['Appname'] = $value;
        $this->options['query']['Appname'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhysicalRegionId($value)
    {
        $this->data['PhysicalRegionId'] = $value;
        $this->options['query']['PhysicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class GetGrayEnvironments extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetJavaStartUpConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/java_start_up_config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 */
class GetJvmConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_jvm_config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getFrom()
 */
class GetK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_application';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['query']['From'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterType()
 * @method string getRegionTag()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class GetK8sCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s_clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['ClusterType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionTag($value)
    {
        $this->data['RegionTag'] = $value;
        $this->options['query']['RegionTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetK8sServices extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_service';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class GetK8sStorageInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_storage';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getConsumerAppId()
 * @method string getRegion()
 */
class GetMockRuleByConsumerAppId extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/getMockRuleByConsumerAppId';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppId($value)
    {
        $this->data['ConsumerAppId'] = $value;
        $this->options['query']['ConsumerAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class GetMockRuleById extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/getMockRuleById';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getProviderAppId()
 * @method string getRegion()
 */
class GetMockRuleByProviderAppId extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/getMockRuleByProviderAppId';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProviderAppId($value)
    {
        $this->data['ProviderAppId'] = $value;
        $this->options['query']['ProviderAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

class GetPackageStorageCredential extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/package_storage_credential';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMode()
 * @method string getAppId()
 * @method string getGroupId()
 */
class GetScalingRules extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/scalingRules';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['query']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class GetSecureToken extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/secure_token';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getRegistryType()
 * @method string getOrigin()
 * @method string getIp()
 * @method string getSource()
 * @method string getServiceType()
 * @method string getSize()
 * @method string getAppId()
 * @method string getNamespace()
 * @method string getServiceVersion()
 * @method string getServiceName()
 * @method string getPage()
 * @method string getRegion()
 * @method string getServiceId()
 * @method string getGroup()
 */
class GetServiceConsumersPage extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mseForOam/getServiceConsumersPage';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistryType($value)
    {
        $this->data['RegistryType'] = $value;
        $this->options['query']['registryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['origin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['serviceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['serviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['query']['serviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['group'] = $value;

        return $this;
    }
}

/**
 * @method string getRegistryType()
 * @method string getServiceType()
 * @method string getOrigin()
 * @method string getAppId()
 * @method string getIp()
 * @method string getNamespace()
 * @method string getServiceVersion()
 * @method string getServiceName()
 * @method string getSource()
 * @method string getRegion()
 * @method string getServiceId()
 * @method string getGroup()
 */
class GetServiceDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mseForOam/getServiceDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistryType($value)
    {
        $this->data['RegistryType'] = $value;
        $this->options['query']['registryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['origin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['serviceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['serviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['query']['serviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['group'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceType()
 * @method string getSide()
 * @method string getOrigin()
 * @method string getSearchType()
 * @method string getNamespace()
 * @method string getRegion()
 * @method string getSearchValue()
 */
class GetServiceList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mseForOam/getServiceList';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['query']['side'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['origin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchType($value)
    {
        $this->data['SearchType'] = $value;
        $this->options['query']['searchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['query']['searchValue'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceType()
 * @method string getSide()
 * @method string getSize()
 * @method string getOrigin()
 * @method string getSearchType()
 * @method string getNamespace()
 * @method string getPage()
 * @method string getRegion()
 * @method string getSearchValue()
 */
class GetServiceListPage extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mseForOam/getServiceListPage';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['query']['side'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['origin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchType($value)
    {
        $this->data['SearchType'] = $value;
        $this->options['query']['searchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSearchValue($value)
    {
        $this->data['SearchValue'] = $value;
        $this->options['query']['searchValue'] = $value;

        return $this;
    }
}

/**
 * @method string getRegistryType()
 * @method string getOrigin()
 * @method string getIp()
 * @method string getSource()
 * @method string getPageNumber()
 * @method string getPath()
 * @method string getServiceType()
 * @method string getAppId()
 * @method string getNamespace()
 * @method string getServiceVersion()
 * @method string getPageSize()
 * @method string getName()
 * @method string getServiceName()
 * @method string getRegion()
 * @method string getServiceId()
 * @method string getMethodController()
 * @method string getGroup()
 */
class GetServiceMethodPage extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mseForOam/getServiceMethodPage';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistryType($value)
    {
        $this->data['RegistryType'] = $value;
        $this->options['query']['registryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['origin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['serviceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['serviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['query']['serviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodController($value)
    {
        $this->data['MethodController'] = $value;
        $this->options['query']['methodController'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['group'] = $value;

        return $this;
    }
}

/**
 * @method string getRegistryType()
 * @method string getOrigin()
 * @method string getIp()
 * @method string getSource()
 * @method string getServiceType()
 * @method string getSize()
 * @method string getAppId()
 * @method string getNamespace()
 * @method string getServiceVersion()
 * @method string getServiceName()
 * @method string getPage()
 * @method string getRegion()
 * @method string getServiceId()
 * @method string getGroup()
 */
class GetServiceProvidersPage extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mseForOam/getServiceProvidersPage';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegistryType($value)
    {
        $this->data['RegistryType'] = $value;
        $this->options['query']['registryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrigin($value)
    {
        $this->data['Origin'] = $value;
        $this->options['query']['origin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['serviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['serviceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['serviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['query']['serviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['group'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getNamespace()
 * @method string getHttpMethod()
 * @method string getMethodSignature()
 * @method string getServiceName()
 * @method string getRegion()
 * @method string getRequiredPath()
 * @method string getMethodController()
 */
class GetSpringCloudTestMethod extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mse/test/springcloud/method';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['appId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHttpMethod($value)
    {
        $this->data['HttpMethod'] = $value;
        $this->options['query']['httpMethod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodSignature($value)
    {
        $this->data['MethodSignature'] = $value;
        $this->options['query']['methodSignature'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['serviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequiredPath($value)
    {
        $this->data['RequiredPath'] = $value;
        $this->options['query']['requiredPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodController($value)
    {
        $this->data['MethodController'] = $value;
        $this->options['query']['methodController'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNo()
 * @method string getPageSize()
 */
class GetSslCertificateList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/ssl_certificate';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetUserId()
 */
class GetSubAccountInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/sub_account_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getLaneId()
 */
class GetSwimmingLane extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lane';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaneId($value)
    {
        $this->data['LaneId'] = $value;
        $this->options['query']['LaneId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetWebContainerConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/web_container_config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getMode()
 * @method string getEnableAsm()
 * @method string getNamespaceId()
 * @method string getClusterId()
 */
class ImportK8sCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/import_k8s_cluster';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['query']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAsm($value)
    {
        $this->data['EnableAsm'] = $value;
        $this->options['query']['EnableAsm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getWebContainer()
 * @method string getEcuInfo()
 * @method string getMinHeapSize()
 * @method string getBuildPackId()
 * @method string getComponentIds()
 * @method string getHealthCheckUrl()
 * @method string getReservedPortStr()
 * @method string getJvmOptions()
 * @method string getDescription()
 * @method string getCpu()
 * @method string getMaxPermSize()
 * @method string getClusterId()
 * @method string getMaxHeapSize()
 * @method string getEnablePortCheck()
 * @method string getApplicationName()
 * @method string getJdk()
 * @method string getMem()
 * @method string getLogicalRegionId()
 * @method string getEnableUrlCheck()
 * @method string getPackageType()
 * @method string getHooks()
 */
class InsertApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_create_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcuInfo($value)
    {
        $this->data['EcuInfo'] = $value;
        $this->options['query']['EcuInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinHeapSize($value)
    {
        $this->data['MinHeapSize'] = $value;
        $this->options['query']['MinHeapSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentIds($value)
    {
        $this->data['ComponentIds'] = $value;
        $this->options['query']['ComponentIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckUrl($value)
    {
        $this->data['HealthCheckUrl'] = $value;
        $this->options['query']['HealthCheckUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReservedPortStr($value)
    {
        $this->data['ReservedPortStr'] = $value;
        $this->options['query']['ReservedPortStr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJvmOptions($value)
    {
        $this->data['JvmOptions'] = $value;
        $this->options['query']['JvmOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxPermSize($value)
    {
        $this->data['MaxPermSize'] = $value;
        $this->options['query']['MaxPermSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxHeapSize($value)
    {
        $this->data['MaxHeapSize'] = $value;
        $this->options['query']['MaxHeapSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePortCheck($value)
    {
        $this->data['EnablePortCheck'] = $value;
        $this->options['query']['EnablePortCheck'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationName($value)
    {
        $this->data['ApplicationName'] = $value;
        $this->options['query']['ApplicationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJdk($value)
    {
        $this->data['Jdk'] = $value;
        $this->options['query']['Jdk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['Mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableUrlCheck($value)
    {
        $this->data['EnableUrlCheck'] = $value;
        $this->options['query']['EnableUrlCheck'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['query']['PackageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHooks($value)
    {
        $this->data['Hooks'] = $value;
        $this->options['query']['Hooks'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterType()
 * @method string getIaasProvider()
 * @method string getLogicalRegionId()
 * @method string getClusterName()
 * @method string getVpcId()
 * @method string getNetworkMode()
 * @method string getOversoldFactor()
 */
class InsertCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['ClusterType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIaasProvider($value)
    {
        $this->data['IaasProvider'] = $value;
        $this->options['query']['IaasProvider'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterName($value)
    {
        $this->data['ClusterName'] = $value;
        $this->options['query']['ClusterName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkMode($value)
    {
        $this->data['NetworkMode'] = $value;
        $this->options['query']['NetworkMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOversoldFactor($value)
    {
        $this->data['OversoldFactor'] = $value;
        $this->options['query']['OversoldFactor'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getInstanceIds()
 * @method string getClusterId()
 */
class InsertClusterMember extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_member';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['query']['password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getData()
 * @method string getAppName()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class InsertConfigCenter extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenter';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getDuration()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getRtThreshold()
 * @method string getServiceName()
 * @method string getMethodName()
 */
class InsertDegradeControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradeControl';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['query']['Duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRtThreshold($value)
    {
        $this->data['RtThreshold'] = $value;
        $this->options['query']['RtThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupName()
 * @method string getInitPackageVersionId()
 */
class InsertDeployGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/deploy_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitPackageVersionId($value)
    {
        $this->data['InitPackageVersionId'] = $value;
        $this->options['query']['InitPackageVersionId'] = $value;

        return $this;
    }
}

/**
 * @method string getConsumerAppId()
 * @method string getGranularity()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getServiceName()
 * @method string getThreshold()
 * @method string getStrategy()
 * @method string getMethodName()
 */
class InsertFlowControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowControl';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppId($value)
    {
        $this->data['ConsumerAppId'] = $value;
        $this->options['query']['ConsumerAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGranularity($value)
    {
        $this->data['Granularity'] = $value;
        $this->options['query']['Granularity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['query']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategy($value)
    {
        $this->data['Strategy'] = $value;
        $this->options['query']['Strategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getNasId()
 * @method string getIntranetSlbId()
 * @method string getEnvs()
 * @method string getRequestsMem()
 * @method string getStorageType()
 * @method string getConfigMountDescs()
 * @method string getAppName()
 * @method string getRequestsmCpu()
 * @method string getDeployAcrossZones()
 * @method string getIntranetSlbPort()
 * @method string getDeployAcrossNodes()
 * @method string getPreStop()
 * @method string getBuildPackId()
 * @method string getLocalVolume()
 * @method string getUseBodyEncoding()
 * @method string getEmptyDirs()
 * @method string getPackageType()
 * @method string getRuntimeClassName()
 * @method string getPostStart()
 * @method string getRepoId()
 * @method string getInternetTargetPort()
 * @method string getWebContainer()
 * @method string getEnableAsm()
 * @method string getEnableAhas()
 * @method string getSlsConfigs()
 * @method string getCommandArgs()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getCsClusterId()
 * @method string getInternetSlbPort()
 * @method string getPackageVersion()
 * @method string getTimeout()
 * @method string getEnvFroms()
 * @method string getLimitMem()
 * @method string getLimitmCpu()
 * @method string getEdasContainerVersion()
 * @method string getInternetSlbId()
 * @method string getLogicalRegionId()
 * @method string getPackageUrl()
 * @method string getInternetSlbProtocol()
 * @method string getMountDescs()
 * @method string getReplicas()
 * @method string getLimitCpu()
 * @method string getWebContainerConfig()
 * @method string getIsMultilingualApp()
 * @method string getClusterId()
 * @method string getIntranetTargetPort()
 * @method string getCommand()
 * @method string getJDK()
 * @method string getUriEncoding()
 * @method string getIntranetSlbProtocol()
 * @method string getImageUrl()
 * @method string getPvcMountDescs()
 * @method string getNamespace()
 * @method string getApplicationDescription()
 * @method string getRequestsCpu()
 * @method string getJavaStartUpConfig()
 */
class InsertK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/create_k8s_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasId($value)
    {
        $this->data['NasId'] = $value;
        $this->options['query']['NasId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetSlbId($value)
    {
        $this->data['IntranetSlbId'] = $value;
        $this->options['query']['IntranetSlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestsMem($value)
    {
        $this->data['RequestsMem'] = $value;
        $this->options['query']['RequestsMem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorageType($value)
    {
        $this->data['StorageType'] = $value;
        $this->options['query']['StorageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigMountDescs($value)
    {
        $this->data['ConfigMountDescs'] = $value;
        $this->options['query']['ConfigMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestsmCpu($value)
    {
        $this->data['RequestsmCpu'] = $value;
        $this->options['query']['RequestsmCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployAcrossZones($value)
    {
        $this->data['DeployAcrossZones'] = $value;
        $this->options['query']['DeployAcrossZones'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetSlbPort($value)
    {
        $this->data['IntranetSlbPort'] = $value;
        $this->options['query']['IntranetSlbPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployAcrossNodes($value)
    {
        $this->data['DeployAcrossNodes'] = $value;
        $this->options['query']['DeployAcrossNodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreStop($value)
    {
        $this->data['PreStop'] = $value;
        $this->options['query']['PreStop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalVolume($value)
    {
        $this->data['LocalVolume'] = $value;
        $this->options['query']['LocalVolume'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseBodyEncoding($value)
    {
        $this->data['UseBodyEncoding'] = $value;
        $this->options['query']['UseBodyEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmptyDirs($value)
    {
        $this->data['EmptyDirs'] = $value;
        $this->options['query']['EmptyDirs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['query']['PackageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuntimeClassName($value)
    {
        $this->data['RuntimeClassName'] = $value;
        $this->options['query']['RuntimeClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostStart($value)
    {
        $this->data['PostStart'] = $value;
        $this->options['query']['PostStart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoId($value)
    {
        $this->data['RepoId'] = $value;
        $this->options['query']['RepoId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetTargetPort($value)
    {
        $this->data['InternetTargetPort'] = $value;
        $this->options['query']['InternetTargetPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAsm($value)
    {
        $this->data['EnableAsm'] = $value;
        $this->options['query']['EnableAsm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAhas($value)
    {
        $this->data['EnableAhas'] = $value;
        $this->options['query']['EnableAhas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlsConfigs($value)
    {
        $this->data['SlsConfigs'] = $value;
        $this->options['query']['SlsConfigs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommandArgs($value)
    {
        $this->data['CommandArgs'] = $value;
        $this->options['query']['CommandArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCsClusterId($value)
    {
        $this->data['CsClusterId'] = $value;
        $this->options['query']['CsClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetSlbPort($value)
    {
        $this->data['InternetSlbPort'] = $value;
        $this->options['query']['InternetSlbPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvFroms($value)
    {
        $this->data['EnvFroms'] = $value;
        $this->options['query']['EnvFroms'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitMem($value)
    {
        $this->data['LimitMem'] = $value;
        $this->options['query']['LimitMem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitmCpu($value)
    {
        $this->data['LimitmCpu'] = $value;
        $this->options['query']['LimitmCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdasContainerVersion($value)
    {
        $this->data['EdasContainerVersion'] = $value;
        $this->options['query']['EdasContainerVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetSlbId($value)
    {
        $this->data['InternetSlbId'] = $value;
        $this->options['query']['InternetSlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetSlbProtocol($value)
    {
        $this->data['InternetSlbProtocol'] = $value;
        $this->options['query']['InternetSlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountDescs($value)
    {
        $this->data['MountDescs'] = $value;
        $this->options['query']['MountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitCpu($value)
    {
        $this->data['LimitCpu'] = $value;
        $this->options['query']['LimitCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainerConfig($value)
    {
        $this->data['WebContainerConfig'] = $value;
        $this->options['query']['WebContainerConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsMultilingualApp($value)
    {
        $this->data['IsMultilingualApp'] = $value;
        $this->options['query']['IsMultilingualApp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetTargetPort($value)
    {
        $this->data['IntranetTargetPort'] = $value;
        $this->options['query']['IntranetTargetPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJDK($value)
    {
        $this->data['JDK'] = $value;
        $this->options['query']['JDK'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUriEncoding($value)
    {
        $this->data['UriEncoding'] = $value;
        $this->options['query']['UriEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetSlbProtocol($value)
    {
        $this->data['IntranetSlbProtocol'] = $value;
        $this->options['query']['IntranetSlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPvcMountDescs($value)
    {
        $this->data['PvcMountDescs'] = $value;
        $this->options['query']['PvcMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationDescription($value)
    {
        $this->data['ApplicationDescription'] = $value;
        $this->options['query']['ApplicationDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestsCpu($value)
    {
        $this->data['RequestsCpu'] = $value;
        $this->options['query']['RequestsCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJavaStartUpConfig($value)
    {
        $this->data['JavaStartUpConfig'] = $value;
        $this->options['query']['JavaStartUpConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getDebugEnable()
 * @method string getRegionTag()
 * @method string getRegionName()
 * @method string getDescription()
 * @method string getId()
 */
class InsertOrUpdateRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/user_region_def';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugEnable($value)
    {
        $this->data['DebugEnable'] = $value;
        $this->options['query']['DebugEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionTag($value)
    {
        $this->data['RegionTag'] = $value;
        $this->options['query']['RegionTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionName($value)
    {
        $this->data['RegionName'] = $value;
        $this->options['query']['RegionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleName()
 * @method string getActionData()
 */
class InsertRole extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/create_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['query']['RoleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionData($value)
    {
        $this->data['ActionData'] = $value;
        $this->options['query']['ActionData'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupName()
 */
class InsertServiceGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/serviceGroups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppInfos()
 * @method string getEntryRules()
 * @method string getLogicalRegionId()
 * @method string getEnableRules()
 * @method string getGroupId()
 * @method string getName()
 * @method string getTag()
 */
class InsertSwimmingLane extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lanes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInfos($value)
    {
        $this->data['AppInfos'] = $value;
        $this->options['query']['AppInfos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntryRules($value)
    {
        $this->data['EntryRules'] = $value;
        $this->options['query']['EntryRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableRules($value)
    {
        $this->data['EnableRules'] = $value;
        $this->options['query']['EnableRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['query']['Tag'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIds()
 * @method string getLogicalRegionId()
 * @method string getName()
 * @method string getEntryApp()
 */
class InsertSwimmingLaneGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lane_groups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIds($value)
    {
        $this->data['AppIds'] = $value;
        $this->options['query']['AppIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntryApp($value)
    {
        $this->data['EntryApp'] = $value;
        $this->options['query']['EntryApp'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method string getDoAsync()
 * @method string getClusterId()
 */
class InstallAgent extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/ecss/install_agent';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['InstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDoAsync($value)
    {
        $this->data['DoAsync'] = $value;
        $this->options['query']['DoAsync'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

class ListAliyunRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/region_list';
}

/**
 * @method string getResourceGroupId()
 * @method string getAppName()
 * @method string getLogicalRegionId()
 * @method string getClusterId()
 * @method string getLogicalRegionIdFilter()
 */
class ListApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['query']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionIdFilter($value)
    {
        $this->data['LogicalRegionIdFilter'] = $value;
        $this->options['query']['LogicalRegionIdFilter'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListApplicationEcu extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/ecu_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

class ListAuthority extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authority_list';
}

class ListBuildPack extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/build_pack_list';
}

/**
 * @method string getStackId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class ListChildrenStacks extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/s2i/list_children_stack';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStackId($value)
    {
        $this->data['StackId'] = $value;
        $this->options['query']['StackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method string getLogicalRegionId()
 */
class ListCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['query']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getClusterId()
 * @method string getEcsList()
 */
class ListClusterMembers extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_member_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsList($value)
    {
        $this->data['EcsList'] = $value;
        $this->options['query']['EcsList'] = $value;

        return $this;
    }
}

class ListComponents extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/components';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppName()
 * @method string getLogicalRegionId()
 * @method string getDataIdPattern()
 * @method string getGroup()
 */
class ListConfigCenters extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenters';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataIdPattern($value)
    {
        $this->data['DataIdPattern'] = $value;
        $this->options['query']['DataIdPattern'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListConsumedServices extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/listConsumedServices';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class ListConvertableEcu extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/convertable_ecu_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class ListCSBGateway extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/csbgateway/gateway';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListDegradeControls extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/degradeControls';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListDeployGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/deploy_group_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpcId()
 * @method string getNetworkMode()
 */
class ListEcsNotInCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/ecs_not_in_cluster';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkMode($value)
    {
        $this->data['NetworkMode'] = $value;
        $this->options['query']['NetworkMode'] = $value;

        return $this;
    }
}

/**
 * @method string getAct()
 * @method string getLogicalRegionId()
 */
class ListEcuByRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/ecu_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAct($value)
    {
        $this->data['Act'] = $value;
        $this->options['query']['Act'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListFlowControls extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/flowControls';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListHistoryDeployVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/deploy_history_version_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getCondition()
 * @method string getPageNo()
 * @method string getNamespace()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getShowRelatedApps()
 */
class ListK8sConfigMaps extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_config_map';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['query']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowRelatedApps($value)
    {
        $this->data['ShowRelatedApps'] = $value;
        $this->options['query']['ShowRelatedApps'] = $value;

        return $this;
    }
}

/**
 * @method string getCondition()
 * @method string getNamespace()
 * @method string getClusterId()
 */
class ListK8sIngressRules extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_ingress';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['query']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getClusterId()
 */
class ListK8sPvc extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_pvc';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getCondition()
 * @method string getPageNo()
 * @method string getNamespace()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getShowRelatedApps()
 */
class ListK8sSecrets extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_secret';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['query']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['query']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShowRelatedApps($value)
    {
        $this->data['ShowRelatedApps'] = $value;
        $this->options['query']['ShowRelatedApps'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getServiceName()
 */
class ListMethods extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/list_methods';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getCurrentPage()
 * @method string getUserId()
 */
class ListOperationLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/operationlog/log_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['query']['BeginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['query']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListPublishedServices extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/listPublishedServices';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListRecentChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/change_order_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

class ListResourceGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/reg_group_list';
}

class ListRole extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/role_list';
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class ListRootStacks extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/s2i/list_root_stack';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getMem()
 * @method string getLogicalRegionId()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getInstanceNum()
 * @method string getCpu()
 * @method string getClusterId()
 */
class ListScaleOutEcu extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/scale_out_ecu_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['Mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceNum($value)
    {
        $this->data['InstanceNum'] = $value;
        $this->options['query']['InstanceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

class ListServiceGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/serviceGroups';

    /** @var string */
    public $method = 'GET';
}

class ListSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/slb_list';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIp()
 * @method string getPodName()
 * @method string getSource()
 * @method string getAccountId()
 * @method string getNamespaceId()
 * @method string getAppId()
 * @method string getTenantId()
 * @method string getRegion()
 * @method string getStatus()
 */
class ListStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mse/status/list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPodName($value)
    {
        $this->data['PodName'] = $value;
        $this->options['query']['PodName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['query']['AccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['query']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

class ListSubAccount extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/sub_account_list';
}

/**
 * @method string getGroupId()
 */
class ListSwimmingLane extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lanes';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class ListSwimmingLaneGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lane_groups';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceType()
 * @method string getResourceRegionId()
 * @method string getResourceIds()
 * @method string getTags()
 */
class ListTagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/tag/tags';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceRegionId($value)
    {
        $this->data['ResourceRegionId'] = $value;
        $this->options['query']['ResourceRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getDebugEnable()
 */
class ListUserDefineRegion extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/user_region_defs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugEnable($value)
    {
        $this->data['DebugEnable'] = $value;
        $this->options['query']['DebugEnable'] = $value;

        return $this;
    }
}

class ListVpc extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/vpc_list';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceIds()
 * @method string getLogicalRegionId()
 */
class MigrateEcu extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/migrate_ecu';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['InstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getInStep()
 * @method string getOutInstanceNum()
 * @method string getOutRT()
 * @method string getInInstanceNum()
 * @method string getVSwitchIds()
 * @method string getTemplateInstanceId()
 * @method string getAcceptEULA()
 * @method string getOutStep()
 * @method string getOutCPU()
 * @method string getKeyPairName()
 * @method string getPassword()
 * @method string getTemplateVersion()
 * @method string getInCondition()
 * @method string getInRT()
 * @method string getInCpu()
 * @method string getOutDuration()
 * @method string getMultiAzPolicy()
 * @method string getOutLoad()
 * @method string getInLoad()
 * @method string getGroupId()
 * @method string getResourceFrom()
 * @method string getOutEnable()
 * @method string getTemplateId()
 * @method string getScalingPolicy()
 * @method string getOutCondition()
 * @method string getInDuration()
 * @method string getInEnable()
 * @method string getAppId()
 * @method string getVpcId()
 * @method string getTemplateInstanceName()
 */
class ModifyScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/scaling_rules';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInStep($value)
    {
        $this->data['InStep'] = $value;
        $this->options['query']['InStep'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutInstanceNum($value)
    {
        $this->data['OutInstanceNum'] = $value;
        $this->options['query']['OutInstanceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutRT($value)
    {
        $this->data['OutRT'] = $value;
        $this->options['query']['OutRT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInInstanceNum($value)
    {
        $this->data['InInstanceNum'] = $value;
        $this->options['query']['InInstanceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchIds($value)
    {
        $this->data['VSwitchIds'] = $value;
        $this->options['query']['VSwitchIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateInstanceId($value)
    {
        $this->data['TemplateInstanceId'] = $value;
        $this->options['query']['TemplateInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptEULA($value)
    {
        $this->data['AcceptEULA'] = $value;
        $this->options['query']['AcceptEULA'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutStep($value)
    {
        $this->data['OutStep'] = $value;
        $this->options['query']['OutStep'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutCPU($value)
    {
        $this->data['OutCPU'] = $value;
        $this->options['query']['OutCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyPairName($value)
    {
        $this->data['KeyPairName'] = $value;
        $this->options['query']['KeyPairName'] = $value;

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
        $this->options['query']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['query']['TemplateVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInCondition($value)
    {
        $this->data['InCondition'] = $value;
        $this->options['query']['InCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInRT($value)
    {
        $this->data['InRT'] = $value;
        $this->options['query']['InRT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInCpu($value)
    {
        $this->data['InCpu'] = $value;
        $this->options['query']['InCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutDuration($value)
    {
        $this->data['OutDuration'] = $value;
        $this->options['query']['OutDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMultiAzPolicy($value)
    {
        $this->data['MultiAzPolicy'] = $value;
        $this->options['query']['MultiAzPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutLoad($value)
    {
        $this->data['OutLoad'] = $value;
        $this->options['query']['OutLoad'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInLoad($value)
    {
        $this->data['InLoad'] = $value;
        $this->options['query']['InLoad'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceFrom($value)
    {
        $this->data['ResourceFrom'] = $value;
        $this->options['query']['ResourceFrom'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutEnable($value)
    {
        $this->data['OutEnable'] = $value;
        $this->options['query']['OutEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['query']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingPolicy($value)
    {
        $this->data['ScalingPolicy'] = $value;
        $this->options['query']['ScalingPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutCondition($value)
    {
        $this->data['OutCondition'] = $value;
        $this->options['query']['OutCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInDuration($value)
    {
        $this->data['InDuration'] = $value;
        $this->options['query']['InDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInEnable($value)
    {
        $this->data['InEnable'] = $value;
        $this->options['query']['InEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateInstanceName($value)
    {
        $this->data['TemplateInstanceName'] = $value;
        $this->options['query']['TemplateInstanceName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class QueryApplicationStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_status';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class QueryConfigCenter extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenter';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getEccId()
 */
class QueryEccInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/ecc';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccId($value)
    {
        $this->data['EccId'] = $value;
        $this->options['query']['EccId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class QueryK8sClusterLogProjectInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/sls/project';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class QueryMigrateEcuList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/migrate_ecu_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class QueryMigrateRegionList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/migrate_region_select';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

class QueryRegionConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/region_config';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getServiceType()
 * @method string getAppId()
 * @method string getServiceVersion()
 * @method string getPageSize()
 * @method string getNamespace()
 * @method string getServiceName()
 * @method string getSource()
 * @method string getRegion()
 * @method string getServiceGroup()
 * @method string getPageNumber()
 */
class QueryServiceTimeConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/timeout/page';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['ServiceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['ServiceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceGroup($value)
    {
        $this->data['ServiceGroup'] = $value;
        $this->options['query']['ServiceGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getType()
 */
class QuerySlsLogStoreList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/sls/query_sls_log_store_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class RemoveMockRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/removeMockRule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class ResetApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_reset';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class RestartApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_restart';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getTimeout()
 */
class RestartK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/restart_k8s_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }
}

/**
 * @method string getRetryStatus()
 * @method string getTaskId()
 */
class RetryChangeOrderTask extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/task_retry';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetryStatus($value)
    {
        $this->data['RetryStatus'] = $value;
        $this->options['query']['RetryStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['query']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getBatchWaitTime()
 * @method string getBatch()
 * @method string getHistoryVersion()
 */
class RollbackApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_rollback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatch($value)
    {
        $this->data['Batch'] = $value;
        $this->options['query']['Batch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHistoryVersion($value)
    {
        $this->data['HistoryVersion'] = $value;
        $this->options['query']['HistoryVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getChangeOrderId()
 */
class RollbackChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/changeorder/rollback';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeOrderId($value)
    {
        $this->data['ChangeOrderId'] = $value;
        $this->options['query']['ChangeOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getForceStatus()
 * @method string getAppId()
 * @method string getEccInfo()
 */
class ScaleInApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_scale_in';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceStatus($value)
    {
        $this->data['ForceStatus'] = $value;
        $this->options['query']['ForceStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getReplicas()
 * @method string getAppId()
 * @method string getTimeout()
 */
class ScaleK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_apps';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }
}

/**
 * @method string getEcuInfo()
 * @method string getDeployGroup()
 * @method string getAppId()
 */
class ScaleOutApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_scale_out';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcuInfo($value)
    {
        $this->data['EcuInfo'] = $value;
        $this->options['query']['EcuInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployGroup($value)
    {
        $this->data['DeployGroup'] = $value;
        $this->options['query']['DeployGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAutoRenewPeriod()
 * @method string getTemplateInstanceId()
 * @method string getGroupId()
 * @method string getInstanceChargePeriodUnit()
 * @method string getClusterId()
 * @method string getScalingNum()
 * @method string getTemplateId()
 * @method string getScalingPolicy()
 * @method string getTemplateVersion()
 * @method string getAutoRenew()
 * @method string getAppId()
 * @method string getInstanceChargePeriod()
 * @method string getInstanceChargeType()
 */
class ScaleoutApplicationWithNewInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/scaling/scale_out';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenewPeriod($value)
    {
        $this->data['AutoRenewPeriod'] = $value;
        $this->options['query']['AutoRenewPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateInstanceId($value)
    {
        $this->data['TemplateInstanceId'] = $value;
        $this->options['query']['TemplateInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceChargePeriodUnit($value)
    {
        $this->data['InstanceChargePeriodUnit'] = $value;
        $this->options['query']['InstanceChargePeriodUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingNum($value)
    {
        $this->data['ScalingNum'] = $value;
        $this->options['query']['ScalingNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['query']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingPolicy($value)
    {
        $this->data['ScalingPolicy'] = $value;
        $this->options['query']['ScalingPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateVersion($value)
    {
        $this->data['TemplateVersion'] = $value;
        $this->options['query']['TemplateVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenew($value)
    {
        $this->data['AutoRenew'] = $value;
        $this->options['query']['AutoRenew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceChargePeriod($value)
    {
        $this->data['InstanceChargePeriod'] = $value;
        $this->options['query']['InstanceChargePeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceChargeType($value)
    {
        $this->data['InstanceChargeType'] = $value;
        $this->options['query']['InstanceChargeType'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class StartApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_start';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getReplicas()
 * @method string getAppId()
 * @method string getTimeout()
 */
class StartK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/start_k8s_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class StopApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_stop';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getTimeout()
 */
class StopK8sApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/stop_k8s_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }
}

/**
 * @method string getEnableAdvancedMonitoring()
 * @method string getAppId()
 */
class SwitchAdvancedMonitoring extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/monitor/advancedMonitorInfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAdvancedMonitoring($value)
    {
        $this->data['EnableAdvancedMonitoring'] = $value;
        $this->options['query']['EnableAdvancedMonitoring'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getResourceIds()
 */
class SynchronizeResource extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/pop_sync_resource';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceType()
 * @method string getResourceRegionId()
 * @method string getResourceIds()
 * @method string getTags()
 */
class TagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/tag/tags';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceRegionId($value)
    {
        $this->data['ResourceRegionId'] = $value;
        $this->options['query']['ResourceRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 * @method string getEnable()
 * @method string getPointcutName()
 */
class ToggleGrayIngress extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_switch';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['form_params']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnable($value)
    {
        $this->data['Enable'] = $value;
        $this->options['form_params']['Enable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getInstanceIds()
 * @method string getTargetClusterId()
 */
class TransformClusterMember extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/transform_cluster_member';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['query']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['InstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetClusterId($value)
    {
        $this->data['TargetClusterId'] = $value;
        $this->options['query']['TargetClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getSlbName()
 * @method string getAppId()
 * @method string getClusterId()
 * @method string getType()
 */
class UnbindK8sSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbName($value)
    {
        $this->data['SlbName'] = $value;
        $this->options['query']['SlbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getSlbId()
 * @method string getAppId()
 * @method string getDeleteListener()
 * @method string getType()
 */
class UnbindSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/app/unbind_slb_json';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteListener($value)
    {
        $this->data['DeleteListener'] = $value;
        $this->options['query']['DeleteListener'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getTagKeys()
 * @method string getDeleteAll()
 * @method string getResourceRegionId()
 * @method string getResourceType()
 * @method string getResourceIds()
 */
class UntagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/tag/tags';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeys($value)
    {
        $this->data['TagKeys'] = $value;
        $this->options['query']['TagKeys'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteAll($value)
    {
        $this->data['DeleteAll'] = $value;
        $this->options['query']['DeleteAll'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceRegionId($value)
    {
        $this->data['ResourceRegionId'] = $value;
        $this->options['query']['ResourceRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getTelephone()
 * @method string getEmail()
 */
class UpdateAccountInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/edit_account_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTelephone($value)
    {
        $this->data['Telephone'] = $value;
        $this->options['query']['Telephone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmail($value)
    {
        $this->data['Email'] = $value;
        $this->options['query']['Email'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getAppName()
 * @method string getAppId()
 * @method string getDesc()
 */
class UpdateApplicationBaseInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/update_app_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['query']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['query']['Desc'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getScalingRuleEnable()
 * @method string getScalingRuleTimer()
 * @method string getScalingRuleMetric()
 * @method string getAppId()
 * @method string getScalingRuleTrigger()
 * @method string getScalingRuleType()
 */
class UpdateApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/eam/scale/application_scaling_rule';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleEnable($value)
    {
        $this->data['ScalingRuleEnable'] = $value;
        $this->options['query']['ScalingRuleEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleTimer($value)
    {
        $this->data['ScalingRuleTimer'] = $value;
        $this->options['query']['ScalingRuleTimer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleMetric($value)
    {
        $this->data['ScalingRuleMetric'] = $value;
        $this->options['query']['ScalingRuleMetric'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleTrigger($value)
    {
        $this->data['ScalingRuleTrigger'] = $value;
        $this->options['query']['ScalingRuleTrigger'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleType($value)
    {
        $this->data['ScalingRuleType'] = $value;
        $this->options['query']['ScalingRuleType'] = $value;

        return $this;
    }
}

/**
 * @method string getBuildPackId()
 * @method string getAppId()
 */
class UpdateContainer extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_update_container';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getUseBodyEncoding()
 * @method string getMaxThreads()
 * @method string getURIEncoding()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getHttpPort()
 * @method string getContextPath()
 */
class UpdateContainerConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/container_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseBodyEncoding($value)
    {
        $this->data['UseBodyEncoding'] = $value;
        $this->options['query']['UseBodyEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxThreads($value)
    {
        $this->data['MaxThreads'] = $value;
        $this->options['query']['MaxThreads'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withURIEncoding($value)
    {
        $this->data['URIEncoding'] = $value;
        $this->options['query']['URIEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHttpPort($value)
    {
        $this->data['HttpPort'] = $value;
        $this->options['query']['HttpPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContextPath($value)
    {
        $this->data['ContextPath'] = $value;
        $this->options['query']['ContextPath'] = $value;

        return $this;
    }
}

/**
 * @method string getDuration()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getRtThreshold()
 * @method string getServiceName()
 * @method string getRuleId()
 * @method string getMethodName()
 */
class UpdateDegradeControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradeControl';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['query']['Duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRtThreshold($value)
    {
        $this->data['RtThreshold'] = $value;
        $this->options['query']['RtThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getPointcutName()
 * @method string getScopes()
 */
class UpdateEnvAppGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_app_groups';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopes($value)
    {
        $this->data['Scopes'] = $value;
        $this->options['form_params']['Scopes'] = $value;

        return $this;
    }
}

/**
 * @method string getCondition()
 * @method string getUrlPath()
 * @method string getAppId()
 * @method string getLabelAdviceName()
 * @method string getPointcutName()
 * @method string getTriggerPolicy()
 */
class UpdateEnvHttpTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_http_traffic_control';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['form_params']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlPath($value)
    {
        $this->data['UrlPath'] = $value;
        $this->options['form_params']['UrlPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelAdviceName($value)
    {
        $this->data['LabelAdviceName'] = $value;
        $this->options['form_params']['LabelAdviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTriggerPolicy($value)
    {
        $this->data['TriggerPolicy'] = $value;
        $this->options['form_params']['TriggerPolicy'] = $value;

        return $this;
    }
}

/**
 * @method string getConsumerAppId()
 * @method string getGranularity()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getServiceName()
 * @method string getThreshold()
 * @method string getRuleId()
 * @method string getStrategy()
 * @method string getMethodName()
 */
class UpdateFlowControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowControl';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppId($value)
    {
        $this->data['ConsumerAppId'] = $value;
        $this->options['query']['ConsumerAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGranularity($value)
    {
        $this->data['Granularity'] = $value;
        $this->options['query']['Granularity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['query']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategy($value)
    {
        $this->data['Strategy'] = $value;
        $this->options['query']['Strategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getHcURL()
 */
class UpdateHealthCheckUrl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/modify_hc_url';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHcURL($value)
    {
        $this->data['HcURL'] = $value;
        $this->options['query']['hcURL'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getHooks()
 */
class UpdateHookConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/app/config_app_hook_json';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHooks($value)
    {
        $this->data['Hooks'] = $value;
        $this->options['query']['Hooks'] = $value;

        return $this;
    }
}

/**
 * @method string getMinHeapSize()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getOptions()
 * @method string getMaxPermSize()
 * @method string getMaxHeapSize()
 */
class UpdateJvmConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_jvm_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinHeapSize($value)
    {
        $this->data['MinHeapSize'] = $value;
        $this->options['query']['MinHeapSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptions($value)
    {
        $this->data['Options'] = $value;
        $this->options['query']['Options'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxPermSize($value)
    {
        $this->data['MaxPermSize'] = $value;
        $this->options['query']['MaxPermSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxHeapSize($value)
    {
        $this->data['MaxHeapSize'] = $value;
        $this->options['query']['MaxHeapSize'] = $value;

        return $this;
    }
}

/**
 * @method string getOwner()
 * @method string getAppId()
 * @method string getPhoneNumber()
 * @method string getDescription()
 * @method string getEmail()
 */
class UpdateK8sApplicationBaseInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/update_app_basic_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwner($value)
    {
        $this->data['Owner'] = $value;
        $this->options['query']['Owner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNumber($value)
    {
        $this->data['PhoneNumber'] = $value;
        $this->options['query']['PhoneNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmail($value)
    {
        $this->data['Email'] = $value;
        $this->options['query']['Email'] = $value;

        return $this;
    }
}

/**
 * @method string getMemoryRequest()
 * @method string getAppId()
 * @method string getCpuRequest()
 * @method string getMemoryLimit()
 * @method string getClusterId()
 * @method string getCpuLimit()
 * @method string getMcpuLimit()
 * @method string getMcpuRequest()
 * @method string getTimeout()
 */
class UpdateK8sApplicationConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_app_configuration';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryRequest($value)
    {
        $this->data['MemoryRequest'] = $value;
        $this->options['query']['MemoryRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuRequest($value)
    {
        $this->data['CpuRequest'] = $value;
        $this->options['query']['CpuRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryLimit($value)
    {
        $this->data['MemoryLimit'] = $value;
        $this->options['query']['MemoryLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuLimit($value)
    {
        $this->data['CpuLimit'] = $value;
        $this->options['query']['CpuLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcpuLimit($value)
    {
        $this->data['McpuLimit'] = $value;
        $this->options['query']['McpuLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcpuRequest($value)
    {
        $this->data['McpuRequest'] = $value;
        $this->options['query']['McpuRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['query']['Timeout'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getNamespace()
 * @method string getName()
 * @method string getClusterId()
 */
class UpdateK8sConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_config_map';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getName()
 * @method string getIngressConf()
 * @method string getClusterId()
 */
class UpdateK8sIngressRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_ingress';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressConf($value)
    {
        $this->data['IngressConf'] = $value;
        $this->options['query']['IngressConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method string getClusterId()
 * @method string getResourceContent()
 */
class UpdateK8sResource extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/oam/update_k8s_resource_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceContent($value)
    {
        $this->data['ResourceContent'] = $value;
        $this->options['form_params']['ResourceContent'] = $value;

        return $this;
    }
}

/**
 * @method string getBase64Encoded()
 * @method string getData()
 * @method string getName()
 * @method string getNamespace()
 * @method string getClusterId()
 * @method string getCertId()
 * @method string getType()
 * @method string getCertRegionId()
 */
class UpdateK8sSecret extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_secret';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBase64Encoded($value)
    {
        $this->data['Base64Encoded'] = $value;
        $this->options['form_params']['Base64Encoded'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertId($value)
    {
        $this->data['CertId'] = $value;
        $this->options['form_params']['CertId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertRegionId($value)
    {
        $this->data['CertRegionId'] = $value;
        $this->options['form_params']['CertRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getName()
 * @method string getType()
 * @method string getServicePorts()
 */
class UpdateK8sService extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_service';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServicePorts($value)
    {
        $this->data['ServicePorts'] = $value;
        $this->options['query']['ServicePorts'] = $value;

        return $this;
    }
}

/**
 * @method string getScheduler()
 * @method string getServicePortInfos()
 * @method string getSlbProtocol()
 * @method string getSlbName()
 * @method string getPort()
 * @method string getAppId()
 * @method string getDisableForceOverride()
 * @method string getSpecification()
 * @method string getClusterId()
 * @method string getType()
 * @method string getTargetPort()
 */
class UpdateK8sSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduler($value)
    {
        $this->data['Scheduler'] = $value;
        $this->options['query']['Scheduler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServicePortInfos($value)
    {
        $this->data['ServicePortInfos'] = $value;
        $this->options['query']['ServicePortInfos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbProtocol($value)
    {
        $this->data['SlbProtocol'] = $value;
        $this->options['query']['SlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbName($value)
    {
        $this->data['SlbName'] = $value;
        $this->options['query']['SlbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['query']['Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisableForceOverride($value)
    {
        $this->data['DisableForceOverride'] = $value;
        $this->options['query']['DisableForceOverride'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpecification($value)
    {
        $this->data['Specification'] = $value;
        $this->options['query']['Specification'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetPort($value)
    {
        $this->data['TargetPort'] = $value;
        $this->options['query']['TargetPort'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 * @method string getAppId()
 * @method string getThreshold()
 * @method string getRegion()
 * @method string getEnabled()
 */
class UpdateLocalitySetting extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/applications/locality/setting';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['query']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['query']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getScMockItemJson()
 * @method string getDubboMockItemJson()
 * @method string getExtraJson()
 * @method string getName()
 * @method string getId()
 * @method string getRegion()
 */
class UpdateMockRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/sp/api/mock/updateMockRule';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScMockItemJson($value)
    {
        $this->data['ScMockItemJson'] = $value;
        $this->options['query']['ScMockItemJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDubboMockItemJson($value)
    {
        $this->data['DubboMockItemJson'] = $value;
        $this->options['query']['DubboMockItemJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraJson($value)
    {
        $this->data['ExtraJson'] = $value;
        $this->options['query']['ExtraJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleId()
 * @method string getActionData()
 */
class UpdateRole extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/edit_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['query']['RoleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionData($value)
    {
        $this->data['ActionData'] = $value;
        $this->options['query']['ActionData'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigs()
 * @method string getAppId()
 */
class UpdateSlsLogStore extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/sls/update_sls_log_store';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigs($value)
    {
        $this->data['Configs'] = $value;
        $this->options['form_params']['Configs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppInfos()
 * @method string getLaneId()
 * @method string getEntryRules()
 * @method string getEnableRules()
 * @method string getName()
 */
class UpdateSwimmingLane extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lanes';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInfos($value)
    {
        $this->data['AppInfos'] = $value;
        $this->options['query']['AppInfos'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLaneId($value)
    {
        $this->data['LaneId'] = $value;
        $this->options['query']['LaneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntryRules($value)
    {
        $this->data['EntryRules'] = $value;
        $this->options['query']['EntryRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableRules($value)
    {
        $this->data['EnableRules'] = $value;
        $this->options['query']['EnableRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIds()
 * @method string getGroupId()
 * @method string getName()
 * @method string getEntryApp()
 */
class UpdateSwimmingLaneGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lane_groups';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIds($value)
    {
        $this->data['AppIds'] = $value;
        $this->options['query']['AppIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntryApp($value)
    {
        $this->data['EntryApp'] = $value;
        $this->options['query']['EntryApp'] = $value;

        return $this;
    }
}

/**
 * @method string getPriorities()
 */
class UpdateSwimmingLanePriority extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/trafficmgnt/swimming_lane';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriorities($value)
    {
        $this->data['Priorities'] = $value;
        $this->options['query']['Priorities'] = $value;

        return $this;
    }
}

/**
 * @method string getParamTypes()
 * @method string getCondition()
 * @method string getAppId()
 * @method string getLabelAdviceName()
 * @method string getPointcutName()
 * @method string getServiceName()
 * @method string getTriggerPolicy()
 * @method string getGroup()
 * @method string getMethodName()
 */
class UppateEnvHsfTrafficControl extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/gray/env_hsf_traffic_control';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamTypes($value)
    {
        $this->data['ParamTypes'] = $value;
        $this->options['form_params']['ParamTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCondition($value)
    {
        $this->data['Condition'] = $value;
        $this->options['form_params']['Condition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelAdviceName($value)
    {
        $this->data['LabelAdviceName'] = $value;
        $this->options['form_params']['LabelAdviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPointcutName($value)
    {
        $this->data['PointcutName'] = $value;
        $this->options['form_params']['PointcutName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTriggerPolicy($value)
    {
        $this->data['TriggerPolicy'] = $value;
        $this->options['form_params']['TriggerPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['form_params']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getKind()
 * @method string getAppId()
 * @method string getNamespace()
 * @method string getFormat()
 * @method string getContent()
 */
class ValidateK8sResource extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/validate_k8s_resource';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKind($value)
    {
        $this->data['Kind'] = $value;
        $this->options['form_params']['Kind'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormat($value)
    {
        $this->data['Format'] = $value;
        $this->options['form_params']['Format'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }
}
