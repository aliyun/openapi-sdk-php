<?php

namespace AlibabaCloud\ARMS\V20190808;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAliClusterIdsToPrometheusGlobalView addAliClusterIdsToPrometheusGlobalView(array $options = [])
 * @method AddGrafana addGrafana(array $options = [])
 * @method AddIntegration addIntegration(array $options = [])
 * @method AddPrometheusGlobalView addPrometheusGlobalView(array $options = [])
 * @method AddPrometheusGlobalViewByAliClusterIds addPrometheusGlobalViewByAliClusterIds(array $options = [])
 * @method AddPrometheusInstance addPrometheusInstance(array $options = [])
 * @method AddPrometheusIntegration addPrometheusIntegration(array $options = [])
 * @method AddRecordingRule addRecordingRule(array $options = [])
 * @method AddTagToFlinkCluster addTagToFlinkCluster(array $options = [])
 * @method AppendInstancesToPrometheusGlobalView appendInstancesToPrometheusGlobalView(array $options = [])
 * @method ApplyScenario applyScenario(array $options = [])
 * @method BindPrometheusGrafanaInstance bindPrometheusGrafanaInstance(array $options = [])
 * @method BlockAlarmNotification blockAlarmNotification(array $options = [])
 * @method ChangeAlarmSeverity changeAlarmSeverity(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CheckCommercialStatus checkCommercialStatus(array $options = [])
 * @method CheckServiceStatus checkServiceStatus(array $options = [])
 * @method ClaimAlarm claimAlarm(array $options = [])
 * @method CloseAlarm closeAlarm(array $options = [])
 * @method ConfigApp configApp(array $options = [])
 * @method CreateAlertContact createAlertContact(array $options = [])
 * @method CreateAlertContactGroup createAlertContactGroup(array $options = [])
 * @method CreateDispatchRule createDispatchRule(array $options = [])
 * @method CreateEnvCustomJob createEnvCustomJob(array $options = [])
 * @method CreateEnvironment createEnvironment(array $options = [])
 * @method CreateEnvPodMonitor createEnvPodMonitor(array $options = [])
 * @method CreateEnvServiceMonitor createEnvServiceMonitor(array $options = [])
 * @method CreateGrafanaWorkspace createGrafanaWorkspace(array $options = [])
 * @method CreateIntegration createIntegration(array $options = [])
 * @method CreateOrUpdateAlertRule createOrUpdateAlertRule(array $options = [])
 * @method CreateOrUpdateContact createOrUpdateContact(array $options = [])
 * @method CreateOrUpdateContactGroup createOrUpdateContactGroup(array $options = [])
 * @method CreateOrUpdateEventBridgeIntegration createOrUpdateEventBridgeIntegration(array $options = [])
 * @method CreateOrUpdateIMRobot createOrUpdateIMRobot(array $options = [])
 * @method CreateOrUpdateNotificationPolicy createOrUpdateNotificationPolicy(array $options = [])
 * @method CreateOrUpdateSilencePolicy createOrUpdateSilencePolicy(array $options = [])
 * @method CreateOrUpdateWebhookContact createOrUpdateWebhookContact(array $options = [])
 * @method CreatePrometheusAlertRule createPrometheusAlertRule(array $options = [])
 * @method CreatePrometheusInstance createPrometheusInstance(array $options = [])
 * @method CreatePrometheusMonitoring createPrometheusMonitoring(array $options = [])
 * @method CreateRetcodeApp createRetcodeApp(array $options = [])
 * @method CreateRumApp createRumApp(array $options = [])
 * @method CreateRumUploadFileUrl createRumUploadFileUrl(array $options = [])
 * @method CreateSyntheticTask createSyntheticTask(array $options = [])
 * @method CreateTimingSyntheticTask createTimingSyntheticTask(array $options = [])
 * @method CreateWebhook createWebhook(array $options = [])
 * @method DelAuthToken delAuthToken(array $options = [])
 * @method DeleteAddonRelease deleteAddonRelease(array $options = [])
 * @method DeleteAlertContact deleteAlertContact(array $options = [])
 * @method DeleteAlertContactGroup deleteAlertContactGroup(array $options = [])
 * @method DeleteAlertRule deleteAlertRule(array $options = [])
 * @method DeleteAlertRules deleteAlertRules(array $options = [])
 * @method DeleteAppList deleteAppList(array $options = [])
 * @method DeleteCmsExporter deleteCmsExporter(array $options = [])
 * @method DeleteContact deleteContact(array $options = [])
 * @method DeleteContactGroup deleteContactGroup(array $options = [])
 * @method DeleteDispatchRule deleteDispatchRule(array $options = [])
 * @method DeleteEnvCustomJob deleteEnvCustomJob(array $options = [])
 * @method DeleteEnvironment deleteEnvironment(array $options = [])
 * @method DeleteEnvironmentFeature deleteEnvironmentFeature(array $options = [])
 * @method DeleteEnvPodMonitor deleteEnvPodMonitor(array $options = [])
 * @method DeleteEnvServiceMonitor deleteEnvServiceMonitor(array $options = [])
 * @method DeleteEventBridgeIntegration deleteEventBridgeIntegration(array $options = [])
 * @method DeleteGrafanaResource deleteGrafanaResource(array $options = [])
 * @method DeleteGrafanaWorkspace deleteGrafanaWorkspace(array $options = [])
 * @method DeleteIMRobot deleteIMRobot(array $options = [])
 * @method DeleteIntegration deleteIntegration(array $options = [])
 * @method DeleteIntegrations deleteIntegrations(array $options = [])
 * @method DeleteNotificationPolicy deleteNotificationPolicy(array $options = [])
 * @method DeletePrometheusAlertRule deletePrometheusAlertRule(array $options = [])
 * @method DeletePrometheusGlobalView deletePrometheusGlobalView(array $options = [])
 * @method DeletePrometheusIntegration deletePrometheusIntegration(array $options = [])
 * @method DeletePrometheusMonitoring deletePrometheusMonitoring(array $options = [])
 * @method DeleteRetcodeApp deleteRetcodeApp(array $options = [])
 * @method DeleteRumApp deleteRumApp(array $options = [])
 * @method DeleteRumUploadFile deleteRumUploadFile(array $options = [])
 * @method DeleteScenario deleteScenario(array $options = [])
 * @method DeleteSilencePolicy deleteSilencePolicy(array $options = [])
 * @method DeleteSourceMap deleteSourceMap(array $options = [])
 * @method DeleteSyntheticTask deleteSyntheticTask(array $options = [])
 * @method DeleteTimingSyntheticTask deleteTimingSyntheticTask(array $options = [])
 * @method DeleteTraceApp deleteTraceApp(array $options = [])
 * @method DeleteWebhookContact deleteWebhookContact(array $options = [])
 * @method DescribeAddonRelease describeAddonRelease(array $options = [])
 * @method DescribeContactGroups describeContactGroups(array $options = [])
 * @method DescribeContacts describeContacts(array $options = [])
 * @method DescribeDispatchRule describeDispatchRule(array $options = [])
 * @method DescribeEnvCustomJob describeEnvCustomJob(array $options = [])
 * @method DescribeEnvironment describeEnvironment(array $options = [])
 * @method DescribeEnvironmentFeature describeEnvironmentFeature(array $options = [])
 * @method DescribeEnvPodMonitor describeEnvPodMonitor(array $options = [])
 * @method DescribeEnvServiceMonitor describeEnvServiceMonitor(array $options = [])
 * @method DescribeIMRobots describeIMRobots(array $options = [])
 * @method DescribePrometheusAlertRule describePrometheusAlertRule(array $options = [])
 * @method DescribeTraceLicenseKey describeTraceLicenseKey(array $options = [])
 * @method DescribeWebhookContacts describeWebhookContacts(array $options = [])
 * @method DoInsightsAction doInsightsAction(array $options = [])
 * @method EnableMetric enableMetric(array $options = [])
 * @method GetAgentDownloadUrl getAgentDownloadUrl(array $options = [])
 * @method GetAlertRules getAlertRules(array $options = [])
 * @method GetAppApiByPage getAppApiByPage(array $options = [])
 * @method GetAppJVMConfig getAppJVMConfig(array $options = [])
 * @method GetAuthToken getAuthToken(array $options = [])
 * @method GetCloudClusterAllUrl getCloudClusterAllUrl(array $options = [])
 * @method GetClusterAllUrl getClusterAllUrl(array $options = [])
 * @method GetCommercialStatus getCommercialStatus(array $options = [])
 * @method GetExploreUrl getExploreUrl(array $options = [])
 * @method GetGrafanaWorkspace getGrafanaWorkspace(array $options = [])
 * @method GetIntegrationState getIntegrationState(array $options = [])
 * @method GetManagedPrometheusStatus getManagedPrometheusStatus(array $options = [])
 * @method GetMultipleTrace getMultipleTrace(array $options = [])
 * @method GetOnCallSchedulesDetail getOnCallSchedulesDetail(array $options = [])
 * @method GetPrometheusApiToken getPrometheusApiToken(array $options = [])
 * @method GetPrometheusGlobalView getPrometheusGlobalView(array $options = [])
 * @method GetPrometheusInstance getPrometheusInstance(array $options = [])
 * @method GetPrometheusIntegration getPrometheusIntegration(array $options = [])
 * @method GetPrometheusMonitoring getPrometheusMonitoring(array $options = [])
 * @method GetRecordingRule getRecordingRule(array $options = [])
 * @method GetRetcodeAppByPid getRetcodeAppByPid(array $options = [])
 * @method GetRetcodeDataByQuery getRetcodeDataByQuery(array $options = [])
 * @method GetRetcodeLogstore getRetcodeLogstore(array $options = [])
 * @method GetRetcodeShareUrl getRetcodeShareUrl(array $options = [])
 * @method GetRumAppInfo getRumAppInfo(array $options = [])
 * @method GetRumApps getRumApps(array $options = [])
 * @method GetRumDataForPage getRumDataForPage(array $options = [])
 * @method GetRumExceptionStack getRumExceptionStack(array $options = [])
 * @method GetRumOcuStatisticData getRumOcuStatisticData(array $options = [])
 * @method GetRumUploadFiles getRumUploadFiles(array $options = [])
 * @method GetSourceMapInfo getSourceMapInfo(array $options = [])
 * @method GetStack getStack(array $options = [])
 * @method GetSyntheticMonitors getSyntheticMonitors(array $options = [])
 * @method GetSyntheticTaskDetail getSyntheticTaskDetail(array $options = [])
 * @method GetSyntheticTaskList getSyntheticTaskList(array $options = [])
 * @method GetSyntheticTaskMonitors getSyntheticTaskMonitors(array $options = [])
 * @method GetTimingSyntheticTask getTimingSyntheticTask(array $options = [])
 * @method GetTrace getTrace(array $options = [])
 * @method GetTraceApp getTraceApp(array $options = [])
 * @method GetTraceAppConfig getTraceAppConfig(array $options = [])
 * @method ImportAppAlertRules importAppAlertRules(array $options = [])
 * @method InitEnvironment initEnvironment(array $options = [])
 * @method InstallAddon installAddon(array $options = [])
 * @method InstallCmsExporter installCmsExporter(array $options = [])
 * @method InstallEnvironmentFeature installEnvironmentFeature(array $options = [])
 * @method InstallManagedPrometheus installManagedPrometheus(array $options = [])
 * @method ListActivatedAlerts listActivatedAlerts(array $options = [])
 * @method ListAddonReleases listAddonReleases(array $options = [])
 * @method ListAddons listAddons(array $options = [])
 * @method ListAlertEvents listAlertEvents(array $options = [])
 * @method ListAlerts listAlerts(array $options = [])
 * @method ListClusterFromGrafana listClusterFromGrafana(array $options = [])
 * @method ListCmsInstances listCmsInstances(array $options = [])
 * @method ListDashboards listDashboards(array $options = [])
 * @method ListDashboardsByName listDashboardsByName(array $options = [])
 * @method ListDispatchRule listDispatchRule(array $options = [])
 * @method ListEnvCustomJobs listEnvCustomJobs(array $options = [])
 * @method ListEnvironmentDashboards listEnvironmentDashboards(array $options = [])
 * @method ListEnvironmentFeatures listEnvironmentFeatures(array $options = [])
 * @method ListEnvironments listEnvironments(array $options = [])
 * @method ListEnvPodMonitors listEnvPodMonitors(array $options = [])
 * @method ListEnvServiceMonitors listEnvServiceMonitors(array $options = [])
 * @method ListEscalationPolicies listEscalationPolicies(array $options = [])
 * @method ListEventBridgeIntegrations listEventBridgeIntegrations(array $options = [])
 * @method ListGrafanaWorkspace listGrafanaWorkspace(array $options = [])
 * @method ListInsightsEvents listInsightsEvents(array $options = [])
 * @method ListIntegration listIntegration(array $options = [])
 * @method ListNotificationPolicies listNotificationPolicies(array $options = [])
 * @method ListOnCallSchedules listOnCallSchedules(array $options = [])
 * @method ListPrometheusAlertRules listPrometheusAlertRules(array $options = [])
 * @method ListPrometheusAlertTemplates listPrometheusAlertTemplates(array $options = [])
 * @method ListPrometheusGlobalView listPrometheusGlobalView(array $options = [])
 * @method ListPrometheusInstanceByTagAndResourceGroupId listPrometheusInstanceByTagAndResourceGroupId(array $options = [])
 * @method ListPrometheusInstances listPrometheusInstances(array $options = [])
 * @method ListPrometheusIntegration listPrometheusIntegration(array $options = [])
 * @method ListPrometheusMonitoring listPrometheusMonitoring(array $options = [])
 * @method ListRetcodeApps listRetcodeApps(array $options = [])
 * @method ListScenario listScenario(array $options = [])
 * @method ListSilencePolicies listSilencePolicies(array $options = [])
 * @method ListSyntheticDetail listSyntheticDetail(array $options = [])
 * @method ListTimingSyntheticTasks listTimingSyntheticTasks(array $options = [])
 * @method ListTraceApps listTraceApps(array $options = [])
 * @method ManageGetRecordingRule manageGetRecordingRule(array $options = [])
 * @method ManageRecordingRule manageRecordingRule(array $options = [])
 * @method OpenArmsDefaultSLR openArmsDefaultSLR(array $options = [])
 * @method OpenArmsServiceSecondVersion openArmsServiceSecondVersion(array $options = [])
 * @method OpenVCluster openVCluster(array $options = [])
 * @method OpenXtraceDefaultSLR openXtraceDefaultSLR(array $options = [])
 * @method QueryAppMetadata queryAppMetadata(array $options = [])
 * @method QueryAppTopology queryAppTopology(array $options = [])
 * @method QueryCommercialUsage queryCommercialUsage(array $options = [])
 * @method QueryMetricByPage queryMetricByPage(array $options = [])
 * @method QueryPromInstallStatus queryPromInstallStatus(array $options = [])
 * @method QueryReleaseMetric queryReleaseMetric(array $options = [])
 * @method RemoveAliClusterIdsFromPrometheusGlobalView removeAliClusterIdsFromPrometheusGlobalView(array $options = [])
 * @method RemoveSourcesFromPrometheusGlobalView removeSourcesFromPrometheusGlobalView(array $options = [])
 * @method RestartEnvironmentFeature restartEnvironmentFeature(array $options = [])
 * @method SaveTraceAppConfig saveTraceAppConfig(array $options = [])
 * @method SearchAlertContact searchAlertContact(array $options = [])
 * @method SearchAlertContactGroup searchAlertContactGroup(array $options = [])
 * @method SearchAlertHistories searchAlertHistories(array $options = [])
 * @method SearchAlertRules searchAlertRules(array $options = [])
 * @method SearchEvents searchEvents(array $options = [])
 * @method SearchRetcodeAppByPage searchRetcodeAppByPage(array $options = [])
 * @method SearchTraceAppByName searchTraceAppByName(array $options = [])
 * @method SearchTraceAppByPage searchTraceAppByPage(array $options = [])
 * @method SearchTraces searchTraces(array $options = [])
 * @method SearchTracesByPage searchTracesByPage(array $options = [])
 * @method SendTTSVerifyLink sendTTSVerifyLink(array $options = [])
 * @method SetRetcodeShareStatus setRetcodeShareStatus(array $options = [])
 * @method StartAlert startAlert(array $options = [])
 * @method StartTimingSyntheticTask startTimingSyntheticTask(array $options = [])
 * @method StopAlert stopAlert(array $options = [])
 * @method StopTimingSyntheticTask stopTimingSyntheticTask(array $options = [])
 * @method SwitchSyntheticTaskStatus switchSyntheticTaskStatus(array $options = [])
 * @method SyncRecordingRules syncRecordingRules(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UninstallManagedPrometheus uninstallManagedPrometheus(array $options = [])
 * @method UninstallPromCluster uninstallPromCluster(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAlertContact updateAlertContact(array $options = [])
 * @method UpdateAlertContactGroup updateAlertContactGroup(array $options = [])
 * @method UpdateAlertRule updateAlertRule(array $options = [])
 * @method UpdateDispatchRule updateDispatchRule(array $options = [])
 * @method UpdateEnvCustomJob updateEnvCustomJob(array $options = [])
 * @method UpdateEnvironment updateEnvironment(array $options = [])
 * @method UpdateEnvPodMonitor updateEnvPodMonitor(array $options = [])
 * @method UpdateEnvServiceMonitor updateEnvServiceMonitor(array $options = [])
 * @method UpdateGrafanaWorkspace updateGrafanaWorkspace(array $options = [])
 * @method UpdateGrafanaWorkspaceVersion updateGrafanaWorkspaceVersion(array $options = [])
 * @method UpdateIntegration updateIntegration(array $options = [])
 * @method UpdateMetricDrop updateMetricDrop(array $options = [])
 * @method UpdatePrometheusAlertRule updatePrometheusAlertRule(array $options = [])
 * @method UpdatePrometheusGlobalView updatePrometheusGlobalView(array $options = [])
 * @method UpdatePrometheusInstance updatePrometheusInstance(array $options = [])
 * @method UpdatePrometheusIntegration updatePrometheusIntegration(array $options = [])
 * @method UpdatePrometheusMonitoring updatePrometheusMonitoring(array $options = [])
 * @method UpdatePrometheusMonitoringStatus updatePrometheusMonitoringStatus(array $options = [])
 * @method UpdateRumApp updateRumApp(array $options = [])
 * @method UpdateRumFileStatus updateRumFileStatus(array $options = [])
 * @method UpdateTimingSyntheticTask updateTimingSyntheticTask(array $options = [])
 * @method UpdateWebhook updateWebhook(array $options = [])
 * @method UpgradeAddonRelease upgradeAddonRelease(array $options = [])
 * @method UpgradeEnvironmentFeature upgradeEnvironmentFeature(array $options = [])
 * @method Upload upload(array $options = [])
 */
class ARMSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ARMS';

    /** @var string */
    public $version = '2019-08-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'arms';
}

/**
 * @method string getGlobalViewClusterId()
 * @method $this withGlobalViewClusterId($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class AddAliClusterIdsToPrometheusGlobalView extends Rpc
{
}

/**
 * @method string getIntegration()
 * @method $this withIntegration($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddGrafana extends Rpc
{
}

/**
 * @method string getIntegration()
 * @method $this withIntegration($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddIntegration extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getClusters()
 * @method $this withClusters($value)
 */
class AddPrometheusGlobalView extends Rpc
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
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class AddPrometheusGlobalViewByAliClusterIds extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 */
class AddPrometheusInstance extends Rpc
{
}

/**
 * @method string getIntegrationType()
 * @method $this withIntegrationType($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddPrometheusIntegration extends Rpc
{
}

/**
 * @method string getRuleYaml()
 * @method $this withRuleYaml($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddRecordingRule extends Rpc
{
}

/**
 * @method string getFlinkWorkSpaceName()
 * @method $this withFlinkWorkSpaceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTargetUserId()
 * @method $this withTargetUserId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getFlinkWorkSpaceId()
 * @method $this withFlinkWorkSpaceId($value)
 */
class AddTagToFlinkCluster extends Rpc
{
}

/**
 * @method string getGlobalViewClusterId()
 * @method $this withGlobalViewClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getClusters()
 * @method $this withClusters($value)
 */
class AppendInstancesToPrometheusGlobalView extends Rpc
{
}

/**
 * @method string getSnForce()
 * @method $this withSnForce($value)
 * @method string getSign()
 * @method $this withSign($value)
 * @method string getSnStat()
 * @method $this withSnStat($value)
 * @method string getScenario()
 * @method $this withScenario($value)
 * @method string getSnDump()
 * @method $this withSnDump($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSnTransfer()
 * @method $this withSnTransfer($value)
 * @method string getUpdateOption()
 * @method $this withUpdateOption($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ApplyScenario extends Rpc
{
}

/**
 * @method string getGrafanaInstanceId()
 * @method $this withGrafanaInstanceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class BindPrometheusGrafanaInstance extends Rpc
{
}

/**
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getHandlerId()
 * @method $this withHandlerId($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 */
class BlockAlarmNotification extends Rpc
{
}

/**
 * @method string getSeverity()
 * @method $this withSeverity($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getHandlerId()
 * @method $this withHandlerId($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 */
class ChangeAlarmSeverity extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getService()
 * @method $this withService($value)
 */
class CheckCommercialStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSvcCode()
 * @method $this withSvcCode($value)
 */
class CheckServiceStatus extends Rpc
{
}

/**
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getHandlerId()
 * @method $this withHandlerId($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 */
class ClaimAlarm extends Rpc
{
}

/**
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getHandlerId()
 * @method $this withHandlerId($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 */
class CloseAlarm extends Rpc
{
}

/**
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getType()
 * @method $this withType($value)
 */
class ConfigApp extends Rpc
{
}

/**
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDingRobotWebhookUrl()
 * @method $this withDingRobotWebhookUrl($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getSystemNoc()
 * @method $this withSystemNoc($value)
 */
class CreateAlertContact extends Rpc
{
}

/**
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactIds()
 * @method $this withContactIds($value)
 */
class CreateAlertContactGroup extends Rpc
{
}

/**
 * @method string getDispatchRule()
 * @method $this withDispatchRule($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class CreateDispatchRule extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getConfigYaml()
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getCustomJobName()
 * @method $this withCustomJobName($value)
 */
class CreateEnvCustomJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getEnvironmentName()
 * @method $this withEnvironmentName($value)
 * @method string getInitEnvironment()
 * @method $this withInitEnvironment($value)
 * @method string getPrometheusInstanceId()
 * @method $this withPrometheusInstanceId($value)
 * @method string getEnvironmentSubType()
 * @method $this withEnvironmentSubType($value)
 * @method array getTags()
 * @method string getGrafanaWorkspaceId()
 * @method $this withGrafanaWorkspaceId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEnvironmentType()
 * @method $this withEnvironmentType($value)
 * @method string getManagedType()
 * @method $this withManagedType($value)
 * @method string getBindResourceId()
 * @method $this withBindResourceId($value)
 * @method string getFeePackage()
 * @method $this withFeePackage($value)
 */
class CreateEnvironment extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getConfigYaml()
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class CreateEnvPodMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getConfigYaml()
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class CreateEnvServiceMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGrafanaWorkspaceName()
 * @method $this withGrafanaWorkspaceName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGrafanaVersion()
 * @method $this withGrafanaVersion($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getGrafanaWorkspaceEdition()
 * @method $this withGrafanaWorkspaceEdition($value)
 */
class CreateGrafanaWorkspace extends Rpc
{
}

/**
 * @method string getDescription()
 * @method string getAutoRecover()
 * @method string getRecoverTime()
 * @method string getIntegrationName()
 * @method string getIntegrationProductType()
 */
class CreateIntegration extends Rpc
{

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
    public function withAutoRecover($value)
    {
        $this->data['AutoRecover'] = $value;
        $this->options['form_params']['AutoRecover'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecoverTime($value)
    {
        $this->data['RecoverTime'] = $value;
        $this->options['form_params']['RecoverTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntegrationName($value)
    {
        $this->data['IntegrationName'] = $value;
        $this->options['form_params']['IntegrationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntegrationProductType($value)
    {
        $this->data['IntegrationProductType'] = $value;
        $this->options['form_params']['IntegrationProductType'] = $value;

        return $this;
    }
}

/**
 * @method string getAlertGroup()
 * @method string getAlertName()
 * @method string getAlertStatus()
 * @method string getAnnotations()
 * @method string getDataConfig()
 * @method string getDuration()
 * @method string getAutoAddTargetConfig()
 * @method string getMetricsKey()
 * @method string getAlertPiplines()
 * @method array getMarkTags()
 * @method string getNotice()
 * @method string getAlertRuleContent()
 * @method string getPromQL()
 * @method string getProduct()
 * @method string getLevel()
 * @method string getAutoAddNewApplication()
 * @method string getFilters()
 * @method string getClusterId()
 * @method string getMessage()
 * @method string getDurationCompareType()
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getNotifyStrategy()
 * @method string getLabels()
 * @method array getTags()
 * @method string getNotifyMode()
 * @method string getAlertType()
 * @method string getAlertCheckType()
 * @method string getMetricsType()
 * @method string getAlertId()
 * @method string getPids()
 */
class CreateOrUpdateAlertRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertGroup($value)
    {
        $this->data['AlertGroup'] = $value;
        $this->options['form_params']['AlertGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertName($value)
    {
        $this->data['AlertName'] = $value;
        $this->options['form_params']['AlertName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertStatus($value)
    {
        $this->data['AlertStatus'] = $value;
        $this->options['form_params']['AlertStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAnnotations($value)
    {
        $this->data['Annotations'] = $value;
        $this->options['form_params']['Annotations'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataConfig($value)
    {
        $this->data['DataConfig'] = $value;
        $this->options['form_params']['DataConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['form_params']['Duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoAddTargetConfig($value)
    {
        $this->data['AutoAddTargetConfig'] = $value;
        $this->options['form_params']['AutoAddTargetConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricsKey($value)
    {
        $this->data['MetricsKey'] = $value;
        $this->options['form_params']['MetricsKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertPiplines($value)
    {
        $this->data['AlertPiplines'] = $value;
        $this->options['form_params']['AlertPiplines'] = $value;

        return $this;
    }

    /**
     * @param array $markTags
     *
     * @return $this
     */
	public function withMarkTags(array $markTags)
	{
	    $this->data['MarkTags'] = $markTags;
		foreach ($markTags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['MarkTags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['MarkTags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotice($value)
    {
        $this->data['Notice'] = $value;
        $this->options['form_params']['Notice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertRuleContent($value)
    {
        $this->data['AlertRuleContent'] = $value;
        $this->options['form_params']['AlertRuleContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPromQL($value)
    {
        $this->data['PromQL'] = $value;
        $this->options['form_params']['PromQL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLevel($value)
    {
        $this->data['Level'] = $value;
        $this->options['form_params']['Level'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoAddNewApplication($value)
    {
        $this->data['AutoAddNewApplication'] = $value;
        $this->options['form_params']['AutoAddNewApplication'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilters($value)
    {
        $this->data['Filters'] = $value;
        $this->options['form_params']['Filters'] = $value;

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
    public function withMessage($value)
    {
        $this->data['Message'] = $value;
        $this->options['form_params']['Message'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDurationCompareType($value)
    {
        $this->data['DurationCompareType'] = $value;
        $this->options['form_params']['DurationCompareType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyStrategy($value)
    {
        $this->data['NotifyStrategy'] = $value;
        $this->options['form_params']['NotifyStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabels($value)
    {
        $this->data['Labels'] = $value;
        $this->options['form_params']['Labels'] = $value;

        return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyMode($value)
    {
        $this->data['NotifyMode'] = $value;
        $this->options['form_params']['NotifyMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertType($value)
    {
        $this->data['AlertType'] = $value;
        $this->options['form_params']['AlertType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertCheckType($value)
    {
        $this->data['AlertCheckType'] = $value;
        $this->options['form_params']['AlertCheckType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricsType($value)
    {
        $this->data['MetricsType'] = $value;
        $this->options['form_params']['MetricsType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertId($value)
    {
        $this->data['AlertId'] = $value;
        $this->options['form_params']['AlertId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPids($value)
    {
        $this->data['Pids'] = $value;
        $this->options['form_params']['Pids'] = $value;

        return $this;
    }
}

/**
 * @method string getContactId()
 * @method string getReissueSendNotice()
 * @method string getIsVerify()
 * @method string getProxyUserId()
 * @method string getCorpUserId()
 * @method string getContactName()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDingRobotUrl()
 * @method $this withDingRobotUrl($value)
 * @method string getPhone()
 * @method string getEmail()
 * @method string getIsEmailVerify()
 */
class CreateOrUpdateContact extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactId($value)
    {
        $this->data['ContactId'] = $value;
        $this->options['form_params']['ContactId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReissueSendNotice($value)
    {
        $this->data['ReissueSendNotice'] = $value;
        $this->options['form_params']['ReissueSendNotice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsVerify($value)
    {
        $this->data['IsVerify'] = $value;
        $this->options['form_params']['IsVerify'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpUserId($value)
    {
        $this->data['CorpUserId'] = $value;
        $this->options['form_params']['CorpUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactName($value)
    {
        $this->data['ContactName'] = $value;
        $this->options['form_params']['ContactName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhone($value)
    {
        $this->data['Phone'] = $value;
        $this->options['form_params']['Phone'] = $value;

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
        $this->options['form_params']['Email'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsEmailVerify($value)
    {
        $this->data['IsEmailVerify'] = $value;
        $this->options['form_params']['IsEmailVerify'] = $value;

        return $this;
    }
}

/**
 * @method string getContactGroupId()
 * @method string getContactGroupName()
 * @method string getProxyUserId()
 * @method string getContactIds()
 */
class CreateOrUpdateContactGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactGroupId($value)
    {
        $this->data['ContactGroupId'] = $value;
        $this->options['form_params']['ContactGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactGroupName($value)
    {
        $this->data['ContactGroupName'] = $value;
        $this->options['form_params']['ContactGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactIds($value)
    {
        $this->data['ContactIds'] = $value;
        $this->options['form_params']['ContactIds'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessSecret()
 * @method string getEventBusRegionId()
 * @method string getDescription()
 * @method string getSource()
 * @method string getEventBusName()
 * @method string getEndpoint()
 * @method string getAccessKey()
 * @method string getName()
 * @method string getId()
 */
class CreateOrUpdateEventBridgeIntegration extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventBusRegionId($value)
    {
        $this->data['EventBusRegionId'] = $value;
        $this->options['form_params']['EventBusRegionId'] = $value;

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
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventBusName($value)
    {
        $this->data['EventBusName'] = $value;
        $this->options['form_params']['EventBusName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpoint($value)
    {
        $this->data['Endpoint'] = $value;
        $this->options['form_params']['Endpoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKey($value)
    {
        $this->data['AccessKey'] = $value;
        $this->options['form_params']['AccessKey'] = $value;

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
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getDailyNoc()
 * @method string getRobotAddress()
 * @method string getDingSignKey()
 * @method string getRobotName()
 * @method string getRobotId()
 * @method string getType()
 * @method string getProxyUserId()
 * @method string getDailyNocTime()
 * @method string getToken()
 * @method string getCardTemplate()
 * @method string getEnableOutgoing()
 */
class CreateOrUpdateIMRobot extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDailyNoc($value)
    {
        $this->data['DailyNoc'] = $value;
        $this->options['form_params']['DailyNoc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotAddress($value)
    {
        $this->data['RobotAddress'] = $value;
        $this->options['form_params']['RobotAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDingSignKey($value)
    {
        $this->data['DingSignKey'] = $value;
        $this->options['form_params']['DingSignKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotName($value)
    {
        $this->data['RobotName'] = $value;
        $this->options['form_params']['RobotName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotId($value)
    {
        $this->data['RobotId'] = $value;
        $this->options['form_params']['RobotId'] = $value;

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
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDailyNocTime($value)
    {
        $this->data['DailyNocTime'] = $value;
        $this->options['form_params']['DailyNocTime'] = $value;

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
        $this->options['form_params']['Token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCardTemplate($value)
    {
        $this->data['CardTemplate'] = $value;
        $this->options['form_params']['CardTemplate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableOutgoing($value)
    {
        $this->data['EnableOutgoing'] = $value;
        $this->options['form_params']['EnableOutgoing'] = $value;

        return $this;
    }
}

/**
 * @method string getIntegrationId()
 * @method string getAreaCodes()
 * @method string getGroupRule()
 * @method string getRepeat()
 * @method string getId()
 * @method string getNotifyRule()
 * @method string getState()
 * @method string getRepeatInterval()
 * @method string getEscalationPolicyId()
 * @method string getSendRecoverMessage()
 * @method string getProxyUserId()
 * @method string getMatchingRules()
 * @method string getDirectedMode()
 * @method string getName()
 * @method string getNotifyTemplate()
 */
class CreateOrUpdateNotificationPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntegrationId($value)
    {
        $this->data['IntegrationId'] = $value;
        $this->options['form_params']['IntegrationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAreaCodes($value)
    {
        $this->data['AreaCodes'] = $value;
        $this->options['form_params']['AreaCodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupRule($value)
    {
        $this->data['GroupRule'] = $value;
        $this->options['form_params']['GroupRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepeat($value)
    {
        $this->data['Repeat'] = $value;
        $this->options['form_params']['Repeat'] = $value;

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
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifyRule($value)
    {
        $this->data['NotifyRule'] = $value;
        $this->options['form_params']['NotifyRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['form_params']['State'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepeatInterval($value)
    {
        $this->data['RepeatInterval'] = $value;
        $this->options['form_params']['RepeatInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationPolicyId($value)
    {
        $this->data['EscalationPolicyId'] = $value;
        $this->options['form_params']['EscalationPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendRecoverMessage($value)
    {
        $this->data['SendRecoverMessage'] = $value;
        $this->options['form_params']['SendRecoverMessage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchingRules($value)
    {
        $this->data['MatchingRules'] = $value;
        $this->options['form_params']['MatchingRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDirectedMode($value)
    {
        $this->data['DirectedMode'] = $value;
        $this->options['form_params']['DirectedMode'] = $value;

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
    public function withNotifyTemplate($value)
    {
        $this->data['NotifyTemplate'] = $value;
        $this->options['form_params']['NotifyTemplate'] = $value;

        return $this;
    }
}

/**
 * @method string getProxyUserId()
 * @method string getMatchingRules()
 * @method string getTimeSlots()
 * @method $this withTimeSlots($value)
 * @method string getAreaCodes()
 * @method string getEffectiveTimeType()
 * @method $this withEffectiveTimeType($value)
 * @method string getName()
 * @method string getId()
 * @method string getState()
 * @method string getTimePeriod()
 * @method $this withTimePeriod($value)
 */
class CreateOrUpdateSilencePolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchingRules($value)
    {
        $this->data['MatchingRules'] = $value;
        $this->options['form_params']['MatchingRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAreaCodes($value)
    {
        $this->data['AreaCodes'] = $value;
        $this->options['form_params']['AreaCodes'] = $value;

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
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['form_params']['State'] = $value;

        return $this;
    }
}

/**
 * @method string getWebhookId()
 * @method string getMethod()
 * @method string getWebhookName()
 * @method string getBizParams()
 * @method string getBody()
 * @method string getProxyUserId()
 * @method string getUrl()
 * @method string getBizHeaders()
 * @method string getRecoverBody()
 */
class CreateOrUpdateWebhookContact extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebhookId($value)
    {
        $this->data['WebhookId'] = $value;
        $this->options['form_params']['WebhookId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethod($value)
    {
        $this->data['Method'] = $value;
        $this->options['form_params']['Method'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebhookName($value)
    {
        $this->data['WebhookName'] = $value;
        $this->options['form_params']['WebhookName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizParams($value)
    {
        $this->data['BizParams'] = $value;
        $this->options['form_params']['BizParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyUserId($value)
    {
        $this->data['ProxyUserId'] = $value;
        $this->options['form_params']['ProxyUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizHeaders($value)
    {
        $this->data['BizHeaders'] = $value;
        $this->options['form_params']['BizHeaders'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecoverBody($value)
    {
        $this->data['RecoverBody'] = $value;
        $this->options['form_params']['RecoverBody'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getAnnotations()
 * @method $this withAnnotations($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDispatchRuleId()
 * @method $this withDispatchRuleId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method array getTags()
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 */
class CreatePrometheusAlertRule extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGrafanaInstanceId()
 * @method $this withGrafanaInstanceId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getStsToken()
 * @method $this withStsToken($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSubClustersJson()
 * @method $this withSubClustersJson($value)
 * @method string getAllSubClustersSuccess()
 * @method $this withAllSubClustersSuccess($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getTags()
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getParamJson()
 * @method $this withParamJson($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getArchiveDuration()
 * @method $this withArchiveDuration($value)
 */
class CreatePrometheusInstance extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getConfigYaml()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreatePrometheusMonitoring extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRetcodeAppName()
 * @method $this withRetcodeAppName($value)
 * @method string getRetcodeAppType()
 * @method $this withRetcodeAppType($value)
 * @method array getTags()
 */
class CreateRetcodeApp extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getSiteType()
 * @method $this withSiteType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppGroup()
 * @method $this withAppGroup($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class CreateRumApp extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSourcemapType()
 * @method $this withSourcemapType($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class CreateRumUploadFileUrl extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 * @method string getUpdateTask()
 * @method $this withUpdateTask($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getMonitorList()
 * @method $this withMonitorList($value)
 * @method string getIpType()
 * @method $this withIpType($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getIntervalTime()
 * @method $this withIntervalTime($value)
 * @method string getCommonParam()
 * @method $this withCommonParam($value)
 * @method string getExtendInterval()
 * @method $this withExtendInterval($value)
 * @method string getNavigation()
 * @method $this withNavigation($value)
 * @method string getDownload()
 * @method $this withDownload($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getNet()
 * @method $this withNet($value)
 */
class CreateSyntheticTask extends Rpc
{
}

/**
 * @method string getAvailableAssertions()
 * @method $this withAvailableAssertions($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getCommonSetting()
 * @method $this withCommonSetting($value)
 * @method string getMonitorCategory()
 * @method $this withMonitorCategory($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getCustomPeriod()
 * @method $this withCustomPeriod($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMonitors()
 * @method $this withMonitors($value)
 */
class CreateTimingSyntheticTask extends Rpc
{
}

/**
 * @method string getHttpHeaders()
 * @method $this withHttpHeaders($value)
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getHttpParams()
 * @method $this withHttpParams($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getRecoverBody()
 * @method $this withRecoverBody($value)
 */
class CreateWebhook extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DelAuthToken extends Rpc
{
}

/**
 * @method string getReleaseName()
 * @method $this withReleaseName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getAddonName()
 * @method $this withAddonName($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteAddonRelease extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertContact extends Rpc
{
}

/**
 * @method string getContactGroupId()
 * @method $this withContactGroupId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertContactGroup extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class DeleteAlertRule extends Rpc
{
}

/**
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertRules extends Rpc
{
}

/**
 * @method array getPids()
 */
class DeleteAppList extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $pids
     *
     * @return $this
     */
	public function withPids(array $pids)
	{
	    $this->data['Pids'] = $pids;
		foreach ($pids as $i => $iValue) {
			$this->options['query']['Pids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCmsExporter extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class DeleteContact extends Rpc
{
}

/**
 * @method string getContactGroupId()
 * @method $this withContactGroupId($value)
 */
class DeleteContactGroup extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteDispatchRule extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getCustomJobName()
 * @method $this withCustomJobName($value)
 */
class DeleteEnvCustomJob extends Rpc
{
}

/**
 * @method string getDeletePromInstance()
 * @method $this withDeletePromInstance($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class DeleteEnvironment extends Rpc
{
}

/**
 * @method string getFeatureName()
 * @method $this withFeatureName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class DeleteEnvironmentFeature extends Rpc
{
}

/**
 * @method string getPodMonitorName()
 * @method $this withPodMonitorName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteEnvPodMonitor extends Rpc
{
}

/**
 * @method string getServiceMonitorName()
 * @method $this withServiceMonitorName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteEnvServiceMonitor extends Rpc
{
}

/**
 * @method string getId()
 */
class DeleteEventBridgeIntegration extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterName()
 * @method string getClusterId()
 */
class DeleteGrafanaResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterName($value)
    {
        $this->data['ClusterName'] = $value;
        $this->options['form_params']['ClusterName'] = $value;

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
 * @method string getGrafanaWorkspaceId()
 * @method $this withGrafanaWorkspaceId($value)
 */
class DeleteGrafanaWorkspace extends Rpc
{
}

/**
 * @method string getRobotId()
 * @method $this withRobotId($value)
 */
class DeleteIMRobot extends Rpc
{
}

/**
 * @method string getIntegration()
 * @method $this withIntegration($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteIntegration extends Rpc
{
}

/**
 * @method string getIntegrationId()
 * @method $this withIntegrationId($value)
 */
class DeleteIntegrations extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteNotificationPolicy extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeletePrometheusAlertRule extends Rpc
{
}

/**
 * @method string getGlobalViewClusterId()
 * @method $this withGlobalViewClusterId($value)
 */
class DeletePrometheusGlobalView extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIntegrationType()
 * @method $this withIntegrationType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeletePrometheusIntegration extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMonitoringName()
 * @method $this withMonitoringName($value)
 */
class DeletePrometheusMonitoring extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPid()
 * @method $this withPid($value)
 */
class DeleteRetcodeApp extends Rpc
{
}

/**
 * @method string getAppGroup()
 * @method $this withAppGroup($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteRumApp extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DeleteRumUploadFile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class DeleteScenario extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteSilencePolicy extends Rpc
{
}

/**
 * @method string getFidList()
 * @method $this withFidList($value)
 * @method string getPid()
 * @method $this withPid($value)
 */
class DeleteSourceMap extends Rpc
{
}

/**
 * @method array getTaskIds()
 */
class DeleteSyntheticTask extends Rpc
{

    /**
     * @param array $taskIds
     *
     * @return $this
     */
	public function withTaskIds(array $taskIds)
	{
	    $this->data['TaskIds'] = $taskIds;
		foreach ($taskIds as $i => $iValue) {
			$this->options['query']['TaskIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteTimingSyntheticTask extends Rpc
{
}

/**
 * @method string getDeleteReason()
 * @method $this withDeleteReason($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DeleteTraceApp extends Rpc
{
}

/**
 * @method string getWebhookId()
 * @method $this withWebhookId($value)
 */
class DeleteWebhookContact extends Rpc
{
}

/**
 * @method string getReleaseName()
 * @method $this withReleaseName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class DescribeAddonRelease extends Rpc
{
}

/**
 * @method string getIsDetail()
 * @method $this withIsDetail($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getGroupIds()
 * @method $this withGroupIds($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class DescribeContactGroups extends Rpc
{
}

/**
 * @method string getContactIds()
 * @method $this withContactIds($value)
 * @method string getVerbose()
 * @method $this withVerbose($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class DescribeContacts extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DescribeDispatchRule extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getCustomJobName()
 * @method $this withCustomJobName($value)
 * @method string getEncryptYaml()
 * @method $this withEncryptYaml($value)
 */
class DescribeEnvCustomJob extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class DescribeEnvironment extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getFeatureName()
 * @method $this withFeatureName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class DescribeEnvironmentFeature extends Rpc
{
}

/**
 * @method string getPodMonitorName()
 * @method $this withPodMonitorName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeEnvPodMonitor extends Rpc
{
}

/**
 * @method string getServiceMonitorName()
 * @method $this withServiceMonitorName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeEnvServiceMonitor extends Rpc
{
}

/**
 * @method string getRobotIds()
 * @method $this withRobotIds($value)
 * @method string getRobotName()
 * @method $this withRobotName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class DescribeIMRobots extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribePrometheusAlertRule extends Rpc
{
}

class DescribeTraceLicenseKey extends Rpc
{
}

/**
 * @method string getWebhookName()
 * @method $this withWebhookName($value)
 * @method string getContactIds()
 * @method $this withContactIds($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class DescribeWebhookContacts extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method string getModule()
 * @method string getHackerUserId()
 */
class DoInsightsAction extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
    public function withModule($value)
    {
        $this->data['Module'] = $value;
        $this->options['form_params']['Module'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHackerUserId($value)
    {
        $this->data['HackerUserId'] = $value;
        $this->options['form_params']['HackerUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getDropMetric()
 * @method $this withDropMetric($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class EnableMetric extends Rpc
{
}

class GetAgentDownloadUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getAlertStatus()
 * @method $this withAlertStatus($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method array getTags()
 * @method string getAlertNames()
 * @method $this withAlertNames($value)
 * @method string getAlertType()
 * @method $this withAlertType($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getIsOr()
 * @method $this withIsOr($value)
 */
class GetAlertRules extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPId()
 * @method $this withPId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIntervalMills()
 * @method $this withIntervalMills($value)
 */
class GetAppApiByPage extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetAppJVMConfig extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetAuthToken extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetCloudClusterAllUrl extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetClusterAllUrl extends Rpc
{
}

/**
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 */
class GetCommercialStatus extends Rpc
{
}

/**
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class GetExploreUrl extends Rpc
{
}

/**
 * @method string getGrafanaWorkspaceId()
 * @method $this withGrafanaWorkspaceId($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 */
class GetGrafanaWorkspace extends Rpc
{
}

/**
 * @method string getIntegration()
 * @method $this withIntegration($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetIntegrationState extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class GetManagedPrometheusStatus extends Rpc
{
}

/**
 * @method array getTraceIDs()
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetMultipleTrace extends Rpc
{

    /**
     * @param array $traceIDs
     *
     * @return $this
     */
	public function withTraceIDs(array $traceIDs)
	{
	    $this->data['TraceIDs'] = $traceIDs;
		foreach ($traceIDs as $i => $iValue) {
			$this->options['query']['TraceIDs.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetOnCallSchedulesDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class GetPrometheusApiToken extends Rpc
{
}

/**
 * @method string getGlobalViewClusterId()
 * @method $this withGlobalViewClusterId($value)
 */
class GetPrometheusGlobalView extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetPrometheusInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIntegrationType()
 * @method $this withIntegrationType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetPrometheusIntegration extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMonitoringName()
 * @method $this withMonitoringName($value)
 */
class GetPrometheusMonitoring extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetRecordingRule extends Rpc
{
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 * @method array getTags()
 */
class GetRetcodeAppByPid extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class GetRetcodeDataByQuery extends Rpc
{
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetRetcodeLogstore extends Rpc
{
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetRetcodeShareUrl extends Rpc
{
}

/**
 * @method string getAppGroup()
 * @method $this withAppGroup($value)
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetRumAppInfo extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppGroup()
 * @method $this withAppGroup($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetRumApps extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppGroup()
 * @method $this withAppGroup($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetRumDataForPage extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSourcemapType()
 * @method $this withSourcemapType($value)
 * @method string getExceptionThreadId()
 * @method $this withExceptionThreadId($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getExceptionBinaryImages()
 * @method $this withExceptionBinaryImages($value)
 * @method string getExceptionStack()
 * @method $this withExceptionStack($value)
 */
class GetRumExceptionStack extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 */
class GetRumOcuStatisticData extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetRumUploadFiles extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getEdition()
 * @method $this withEdition($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getID()
 * @method $this withID($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getAscendingSequence()
 * @method $this withAscendingSequence($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 */
class GetSourceMapInfo extends Rpc
{
}

/**
 * @method string getTraceID()
 * @method $this withTraceID($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRpcID()
 * @method $this withRpcID($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetStack extends Rpc
{
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 */
class GetSyntheticMonitors extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetSyntheticTaskDetail extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class GetSyntheticTaskList extends Rpc
{
}

class GetSyntheticTaskMonitors extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTimingSyntheticTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTraceID()
 * @method $this withTraceID($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetTrace extends Rpc
{
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 * @method array getTags()
 */
class GetTraceApp extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetTraceAppConfig extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method array getTags()
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getPids()
 * @method $this withPids($value)
 * @method string getTemplageAlertConfig()
 * @method $this withTemplageAlertConfig($value)
 * @method string getTemplateAlertId()
 * @method $this withTemplateAlertId($value)
 */
class ImportAppAlertRules extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getCreateAuthToken()
 * @method $this withCreateAuthToken($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getManagedType()
 * @method $this withManagedType($value)
 */
class InitEnvironment extends Rpc
{
}

/**
 * @method string getAddonVersion()
 * @method $this withAddonVersion($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getValues()
 * @method $this withValues($value)
 * @method string getReleaseName()
 * @method $this withReleaseName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class InstallAddon extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDirectArgs()
 * @method $this withDirectArgs($value)
 * @method string getCmsArgs()
 * @method $this withCmsArgs($value)
 * @method string getEnableTag()
 * @method $this withEnableTag($value)
 */
class InstallCmsExporter extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getFeatureName()
 * @method $this withFeatureName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getFeatureVersion()
 * @method $this withFeatureVersion($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class InstallEnvironmentFeature extends Rpc
{
}

/**
 * @method string getGrafanaInstanceId()
 * @method $this withGrafanaInstanceId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getKubeConfig()
 * @method $this withKubeConfig($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class InstallManagedPrometheus extends Rpc
{
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class ListActivatedAlerts extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getAddonName()
 * @method $this withAddonName($value)
 */
class ListAddonReleases extends Rpc
{
}

/**
 * @method string getRegexp()
 * @method $this withRegexp($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListAddons extends Rpc
{
}

/**
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMatchingConditions()
 * @method $this withMatchingConditions($value)
 * @method string getShowNotificationPolicies()
 * @method $this withShowNotificationPolicies($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAlertEvents extends Rpc
{
}

/**
 * @method string getSeverity()
 * @method $this withSeverity($value)
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getIntegrationType()
 * @method $this withIntegrationType($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getShowActivities()
 * @method $this withShowActivities($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDispatchRuleId()
 * @method $this withDispatchRuleId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowEvents()
 * @method $this withShowEvents($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getNotifyRobotName()
 * @method $this withNotifyRobotName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListAlerts extends Rpc
{
}

class ListClusterFromGrafana extends Rpc
{
}

/**
 * @method string getTypeFilter()
 * @method $this withTypeFilter($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListCmsInstances extends Rpc
{
}

/**
 * @method string getDashboardName()
 * @method $this withDashboardName($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getRecreateSwitch()
 * @method $this withRecreateSwitch($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 */
class ListDashboards extends Rpc
{
}

/**
 * @method string getDataSourceType()
 * @method $this withDataSourceType($value)
 * @method string getDashBoardName()
 * @method $this withDashBoardName($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOnlyQuery()
 * @method $this withOnlyQuery($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getDashBoardVersion()
 * @method $this withDashBoardVersion($value)
 */
class ListDashboardsByName extends Rpc
{
}

/**
 * @method string getSystem()
 * @method $this withSystem($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class ListDispatchRule extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getEncryptYaml()
 * @method $this withEncryptYaml($value)
 */
class ListEnvCustomJobs extends Rpc
{
}

/**
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getAddonName()
 * @method $this withAddonName($value)
 */
class ListEnvironmentDashboards extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class ListEnvironmentFeatures extends Rpc
{
}

/**
 * @method string getFilterRegionIds()
 * @method $this withFilterRegionIds($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAddonName()
 * @method $this withAddonName($value)
 * @method string getEnvironmentType()
 * @method $this withEnvironmentType($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getBindResourceId()
 * @method $this withBindResourceId($value)
 * @method string getFeePackage()
 * @method $this withFeePackage($value)
 */
class ListEnvironments extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class ListEnvPodMonitors extends Rpc
{
}

/**
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class ListEnvServiceMonitors extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListEscalationPolicies extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListEventBridgeIntegrations extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class ListGrafanaWorkspace extends Rpc
{
}

/**
 * @method string getInsightsTypes()
 * @method $this withInsightsTypes($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListInsightsEvents extends Rpc
{
}

/**
 * @method string getIsDetail()
 * @method $this withIsDetail($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getIntegrationName()
 * @method $this withIntegrationName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getIntegrationProductType()
 * @method $this withIntegrationProductType($value)
 */
class ListIntegration extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIsDetail()
 * @method $this withIsDetail($value)
 * @method string getDirectedMode()
 * @method $this withDirectedMode($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListNotificationPolicies extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListOnCallSchedules extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getTags()
 * @method string getName()
 * @method $this withName($value)
 * @method string getMatchExpressions()
 * @method $this withMatchExpressions($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPrometheusAlertRules extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class ListPrometheusAlertTemplates extends Rpc
{
}

class ListPrometheusGlobalView extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getListAsConsole()
 * @method $this withListAsConsole($value)
 * @method array getTag()
 */
class ListPrometheusInstanceByTagAndResourceGroupId extends Rpc
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
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getShowGlobalView()
 * @method $this withShowGlobalView($value)
 */
class ListPrometheusInstances extends Rpc
{
}

/**
 * @method string getIntegrationType()
 * @method $this withIntegrationType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListPrometheusIntegration extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class ListPrometheusMonitoring extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTags()
 */
class ListRetcodeApps extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getScenario()
 * @method $this withScenario($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSign()
 * @method $this withSign($value)
 */
class ListScenario extends Rpc
{
}

/**
 * @method string getIsDetail()
 * @method $this withIsDetail($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListSilencePolicies extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getExactFilters()
 * @method $this withExactFilters($value)
 * @method string getSyntheticType()
 * @method $this withSyntheticType($value)
 * @method string getAdvancedFilters()
 * @method $this withAdvancedFilters($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class ListSyntheticDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class ListTimingSyntheticTasks extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method array getTags()
 */
class ListTraceApps extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQueryUserId()
 * @method $this withQueryUserId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ManageGetRecordingRule extends Rpc
{
}

/**
 * @method string getRuleYaml()
 * @method $this withRuleYaml($value)
 * @method string getQueryUserId()
 * @method $this withQueryUserId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ManageRecordingRule extends Rpc
{
}

class OpenArmsDefaultSLR extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 */
class OpenArmsServiceSecondVersion extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getRecreateSwitch()
 * @method $this withRecreateSwitch($value)
 * @method string getLength()
 * @method $this withLength($value)
 */
class OpenVCluster extends Rpc
{
}

class OpenXtraceDefaultSLR extends Rpc
{
}

/**
 * @method string getMetaIds()
 * @method $this withMetaIds($value)
 * @method string getMetaType()
 * @method $this withMetaType($value)
 * @method string getPid()
 * @method $this withPid($value)
 */
class QueryAppMetadata extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRpc()
 * @method $this withRpc($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDb()
 * @method $this withDb($value)
 */
class QueryAppTopology extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method array getAdvancedFilters()
 * @method array getDimensions()
 */
class QueryCommercialUsage extends Rpc
{

    /**
     * @param array $measures
     *
     * @return $this
     */
	public function withMeasures(array $measures)
	{
	    $this->data['Measures'] = $measures;
		foreach ($measures as $i => $iValue) {
			$this->options['query']['Measures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $advancedFilters
     *
     * @return $this
     */
	public function withAdvancedFilters(array $advancedFilters)
	{
	    $this->data['AdvancedFilters'] = $advancedFilters;
		foreach ($advancedFilters as $depth1 => $depth1Value) {
			if(isset($depth1Value['OpType'])){
				$this->options['query']['AdvancedFilters.' . ($depth1 + 1) . '.OpType'] = $depth1Value['OpType'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['AdvancedFilters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['AdvancedFilters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $i => $iValue) {
			$this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getConsistencyQueryStrategy()
 * @method $this withConsistencyQueryStrategy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getConsistencyDataKey()
 * @method $this withConsistencyDataKey($value)
 * @method array getFilters()
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method array getCustomFilters()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method array getDimensions()
 */
class QueryMetricByPage extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
	public function withMeasures(array $measures)
	{
	    $this->data['Measures'] = $measures;
		foreach ($measures as $i => $iValue) {
			$this->options['query']['Measures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $customFilters
     *
     * @return $this
     */
	public function withCustomFilters(array $customFilters)
	{
	    $this->data['CustomFilters'] = $customFilters;
		foreach ($customFilters as $i => $iValue) {
			$this->options['query']['CustomFilters.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $i => $iValue) {
			$this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class QueryPromInstallStatus extends Rpc
{
}

/**
 * @method string getChangeOrderId()
 * @method $this withChangeOrderId($value)
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getCreateTime()
 * @method $this withCreateTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getReleaseEndTime()
 * @method $this withReleaseEndTime($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getReleaseStartTime()
 * @method $this withReleaseStartTime($value)
 */
class QueryReleaseMetric extends Rpc
{
}

/**
 * @method string getGlobalViewClusterId()
 * @method $this withGlobalViewClusterId($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class RemoveAliClusterIdsFromPrometheusGlobalView extends Rpc
{
}

/**
 * @method string getSourceNames()
 * @method $this withSourceNames($value)
 * @method string getGlobalViewClusterId()
 * @method $this withGlobalViewClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class RemoveSourcesFromPrometheusGlobalView extends Rpc
{
}

/**
 * @method string getFeatureName()
 * @method $this withFeatureName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class RestartEnvironmentFeature extends Rpc
{
}

/**
 * @method array getSettings()
 * @method string getPid()
 * @method $this withPid($value)
 */
class SaveTraceAppConfig extends Rpc
{

    /**
     * @param array $settings
     *
     * @return $this
     */
	public function withSettings(array $settings)
	{
	    $this->data['Settings'] = $settings;
		foreach ($settings as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Settings.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Settings.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactIds()
 * @method $this withContactIds($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class SearchAlertContact extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getIsDetail()
 * @method $this withIsDetail($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 */
class SearchAlertContactGroup extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getAlertType()
 * @method $this withAlertType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class SearchAlertHistories extends Rpc
{
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getSystemRegionId()
 * @method $this withSystemRegionId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getTags()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getAlertRuleId()
 * @method $this withAlertRuleId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class SearchAlertRules extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getIsTrigger()
 * @method $this withIsTrigger($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getAlertType()
 * @method $this withAlertType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class SearchEvents extends Rpc
{
}

/**
 * @method string getRetcodeAppId()
 * @method $this withRetcodeAppId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getTags()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getRetcodeAppName()
 * @method $this withRetcodeAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class SearchRetcodeAppByPage extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTraceAppName()
 * @method $this withTraceAppName($value)
 * @method array getTags()
 */
class SearchTraceAppByName extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getTags()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTraceAppName()
 * @method $this withTraceAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class SearchTraceAppByPage extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getServiceIp()
 * @method $this withServiceIp($value)
 * @method array getExclusionFilters()
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method array getTag()
 */
class SearchTraces extends Rpc
{

    /**
     * @param array $exclusionFilters
     *
     * @return $this
     */
	public function withExclusionFilters(array $exclusionFilters)
	{
	    $this->data['ExclusionFilters'] = $exclusionFilters;
		foreach ($exclusionFilters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['ExclusionFilters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['ExclusionFilters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsError()
 * @method $this withIsError($value)
 * @method array getTags()
 * @method string getServiceIp()
 * @method $this withServiceIp($value)
 * @method array getExclusionFilters()
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class SearchTracesByPage extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $exclusionFilters
     *
     * @return $this
     */
	public function withExclusionFilters(array $exclusionFilters)
	{
	    $this->data['ExclusionFilters'] = $exclusionFilters;
		foreach ($exclusionFilters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['ExclusionFilters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['ExclusionFilters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getContactId()
 * @method string getPhone()
 */
class SendTTSVerifyLink extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactId($value)
    {
        $this->data['ContactId'] = $value;
        $this->options['form_params']['ContactId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhone($value)
    {
        $this->data['Phone'] = $value;
        $this->options['form_params']['Phone'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetRetcodeShareStatus extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class StartAlert extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class StartTimingSyntheticTask extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class StopAlert extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class StopTimingSyntheticTask extends Rpc
{
}

/**
 * @method array getTaskIds()
 * @method string getSwitchStatus()
 * @method $this withSwitchStatus($value)
 */
class SwitchSyntheticTaskStatus extends Rpc
{

    /**
     * @param array $taskIds
     *
     * @return $this
     */
	public function withTaskIds(array $taskIds)
	{
	    $this->data['TaskIds'] = $taskIds;
		foreach ($taskIds as $i => $iValue) {
			$this->options['query']['TaskIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTargetClusters()
 * @method $this withTargetClusters($value)
 */
class SyncRecordingRules extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 */
class TagResources extends Rpc
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class UninstallManagedPrometheus extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UninstallPromCluster extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTags()
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
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getDingRobotWebhookUrl()
 * @method $this withDingRobotWebhookUrl($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getSystemNoc()
 * @method $this withSystemNoc($value)
 */
class UpdateAlertContact extends Rpc
{
}

/**
 * @method string getContactGroupId()
 * @method $this withContactGroupId($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactIds()
 * @method $this withContactIds($value)
 */
class UpdateAlertContactGroup extends Rpc
{
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getTemplageAlertConfig()
 * @method $this withTemplageAlertConfig($value)
 */
class UpdateAlertRule extends Rpc
{
}

/**
 * @method string getDispatchRule()
 * @method $this withDispatchRule($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class UpdateDispatchRule extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getConfigYaml()
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getCustomJobName()
 * @method $this withCustomJobName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateEnvCustomJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getEnvironmentName()
 * @method $this withEnvironmentName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getFeePackage()
 * @method $this withFeePackage($value)
 */
class UpdateEnvironment extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getConfigYaml()
 * @method string getPodMonitorName()
 * @method $this withPodMonitorName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateEnvPodMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceMonitorName()
 * @method $this withServiceMonitorName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getConfigYaml()
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateEnvServiceMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGrafanaWorkspaceName()
 * @method $this withGrafanaWorkspaceName($value)
 * @method string getGrafanaWorkspaceId()
 * @method $this withGrafanaWorkspaceId($value)
 */
class UpdateGrafanaWorkspace extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getGrafanaWorkspaceId()
 * @method $this withGrafanaWorkspaceId($value)
 * @method string getGrafanaVersion()
 * @method $this withGrafanaVersion($value)
 */
class UpdateGrafanaWorkspaceVersion extends Rpc
{
}

/**
 * @method string getShortToken()
 * @method string getInitiativeRecoverValue()
 * @method string getLiveness()
 * @method string getIntegrationId()
 * @method string getDescription()
 * @method string getApiEndpoint()
 * @method string getRecoverTime()
 * @method string getDuplicateKey()
 * @method string getIntegrationName()
 * @method string getState()
 * @method string getInitiativeRecoverField()
 * @method string getFieldRedefineRules()
 * @method string getStat()
 * @method string getAutoRecover()
 * @method string getExtendedFieldRedefineRules()
 * @method string getIntegrationProductType()
 */
class UpdateIntegration extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShortToken($value)
    {
        $this->data['ShortToken'] = $value;
        $this->options['form_params']['ShortToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitiativeRecoverValue($value)
    {
        $this->data['InitiativeRecoverValue'] = $value;
        $this->options['form_params']['InitiativeRecoverValue'] = $value;

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
    public function withIntegrationId($value)
    {
        $this->data['IntegrationId'] = $value;
        $this->options['form_params']['IntegrationId'] = $value;

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
    public function withApiEndpoint($value)
    {
        $this->data['ApiEndpoint'] = $value;
        $this->options['form_params']['ApiEndpoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecoverTime($value)
    {
        $this->data['RecoverTime'] = $value;
        $this->options['form_params']['RecoverTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuplicateKey($value)
    {
        $this->data['DuplicateKey'] = $value;
        $this->options['form_params']['DuplicateKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntegrationName($value)
    {
        $this->data['IntegrationName'] = $value;
        $this->options['form_params']['IntegrationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['form_params']['State'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitiativeRecoverField($value)
    {
        $this->data['InitiativeRecoverField'] = $value;
        $this->options['form_params']['InitiativeRecoverField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFieldRedefineRules($value)
    {
        $this->data['FieldRedefineRules'] = $value;
        $this->options['form_params']['FieldRedefineRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStat($value)
    {
        $this->data['Stat'] = $value;
        $this->options['form_params']['Stat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRecover($value)
    {
        $this->data['AutoRecover'] = $value;
        $this->options['form_params']['AutoRecover'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtendedFieldRedefineRules($value)
    {
        $this->data['ExtendedFieldRedefineRules'] = $value;
        $this->options['form_params']['ExtendedFieldRedefineRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntegrationProductType($value)
    {
        $this->data['IntegrationProductType'] = $value;
        $this->options['form_params']['IntegrationProductType'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMetricDrop()
 * @method $this withMetricDrop($value)
 */
class UpdateMetricDrop extends Rpc
{
}

/**
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getAnnotations()
 * @method $this withAnnotations($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDispatchRuleId()
 * @method $this withDispatchRuleId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method array getTags()
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 */
class UpdatePrometheusAlertRule extends Rpc
{

    /**
     * @param array $tags
     *
     * @return $this
     */
	public function withTags(array $tags)
	{
	    $this->data['Tags'] = $tags;
		foreach ($tags as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tags.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAllSubClustersSuccess()
 * @method $this withAllSubClustersSuccess($value)
 * @method string getStsToken()
 * @method $this withStsToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getMostRegionId()
 * @method $this withMostRegionId($value)
 * @method string getParamJson()
 * @method $this withParamJson($value)
 * @method string getSubClustersJson()
 * @method $this withSubClustersJson($value)
 */
class UpdatePrometheusGlobalView extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getStorageDuration()
 * @method $this withStorageDuration($value)
 * @method string getArchiveDuration()
 * @method $this withArchiveDuration($value)
 */
class UpdatePrometheusInstance extends Rpc
{
}

/**
 * @method string getIntegrationType()
 * @method $this withIntegrationType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getParam()
 * @method $this withParam($value)
 */
class UpdatePrometheusIntegration extends Rpc
{
}

/**
 * @method string getConfigYaml()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMonitoringName()
 * @method $this withMonitoringName($value)
 */
class UpdatePrometheusMonitoring extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigYaml($value)
    {
        $this->data['ConfigYaml'] = $value;
        $this->options['form_params']['ConfigYaml'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMonitoringName()
 * @method $this withMonitoringName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdatePrometheusMonitoringStatus extends Rpc
{
}

/**
 * @method string getRestart()
 * @method $this withRestart($value)
 * @method string getAutoRestart()
 * @method $this withAutoRestart($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStop()
 * @method $this withStop($value)
 * @method string getNickname()
 * @method $this withNickname($value)
 * @method string getServiceDomainOperationJson()
 * @method $this withServiceDomainOperationJson($value)
 * @method string getIsSubscribe()
 * @method $this withIsSubscribe($value)
 * @method string getBonreeSDKConfigJson()
 * @method $this withBonreeSDKConfigJson($value)
 */
class UpdateRumApp extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateRumFileStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAvailableAssertions()
 * @method $this withAvailableAssertions($value)
 * @method string getCommonSetting()
 * @method $this withCommonSetting($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getCustomPeriod()
 * @method $this withCustomPeriod($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getMonitors()
 * @method $this withMonitors($value)
 */
class UpdateTimingSyntheticTask extends Rpc
{
}

/**
 * @method string getHttpHeaders()
 * @method $this withHttpHeaders($value)
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getHttpParams()
 * @method $this withHttpParams($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getRecoverBody()
 * @method $this withRecoverBody($value)
 */
class UpdateWebhook extends Rpc
{
}

/**
 * @method string getAddonVersion()
 * @method $this withAddonVersion($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getValues()
 * @method $this withValues($value)
 * @method string getReleaseName()
 * @method $this withReleaseName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 */
class UpgradeAddonRelease extends Rpc
{
}

/**
 * @method string getAliyunLang()
 * @method $this withAliyunLang($value)
 * @method string getValues()
 * @method $this withValues($value)
 * @method string getFeatureName()
 * @method $this withFeatureName($value)
 * @method string getEnvironmentId()
 * @method $this withEnvironmentId($value)
 * @method string getFeatureVersion()
 * @method $this withFeatureVersion($value)
 */
class UpgradeEnvironmentFeature extends Rpc
{
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getFile()
 * @method string getEdition()
 * @method $this withEdition($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class Upload extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFile($value)
    {
        $this->data['File'] = $value;
        $this->options['form_params']['File'] = $value;

        return $this;
    }
}
