<?php

namespace AlibabaCloud\ARMS\V20190808;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddGrafana addGrafana(array $options = [])
 * @method AddIntegration addIntegration(array $options = [])
 * @method ApplyScenario applyScenario(array $options = [])
 * @method CheckDataConsistency checkDataConsistency(array $options = [])
 * @method CheckServiceLinkedRoleForDeleting checkServiceLinkedRoleForDeleting(array $options = [])
 * @method CheckServiceStatus checkServiceStatus(array $options = [])
 * @method ConfigApp configApp(array $options = [])
 * @method CreateAlertContact createAlertContact(array $options = [])
 * @method CreateAlertContactGroup createAlertContactGroup(array $options = [])
 * @method CreateAlertTemplate createAlertTemplate(array $options = [])
 * @method CreateDispatchRule createDispatchRule(array $options = [])
 * @method CreatePrometheusAlertRule createPrometheusAlertRule(array $options = [])
 * @method CreateRetcodeApp createRetcodeApp(array $options = [])
 * @method CreateWebhook createWebhook(array $options = [])
 * @method CreateWehook createWehook(array $options = [])
 * @method DeleteAlertContact deleteAlertContact(array $options = [])
 * @method DeleteAlertContactGroup deleteAlertContactGroup(array $options = [])
 * @method DeleteAlertRules deleteAlertRules(array $options = [])
 * @method DeleteAlertTemplate deleteAlertTemplate(array $options = [])
 * @method DeleteDispatchRule deleteDispatchRule(array $options = [])
 * @method DeleteGrafanaResource deleteGrafanaResource(array $options = [])
 * @method DeletePrometheusAlertRule deletePrometheusAlertRule(array $options = [])
 * @method DeleteRetcodeApp deleteRetcodeApp(array $options = [])
 * @method DeleteScenario deleteScenario(array $options = [])
 * @method DeleteTraceApp deleteTraceApp(array $options = [])
 * @method DescribeDispatchRule describeDispatchRule(array $options = [])
 * @method DescribePrometheusAlertRule describePrometheusAlertRule(array $options = [])
 * @method DescribeTraceLicenseKey describeTraceLicenseKey(array $options = [])
 * @method DescribeTraceLocation describeTraceLocation(array $options = [])
 * @method DisableAlertTemplate disableAlertTemplate(array $options = [])
 * @method EnableAlertTemplate enableAlertTemplate(array $options = [])
 * @method ExportPrometheusRules exportPrometheusRules(array $options = [])
 * @method GetAgentDownloadUrl getAgentDownloadUrl(array $options = [])
 * @method GetAppApiByPage getAppApiByPage(array $options = [])
 * @method GetArmsConsoleUrl getArmsConsoleUrl(array $options = [])
 * @method GetConsistencySnapshot getConsistencySnapshot(array $options = [])
 * @method GetExploreUrl getExploreUrl(array $options = [])
 * @method GetIntegrationToken getIntegrationToken(array $options = [])
 * @method GetMultipleTrace getMultipleTrace(array $options = [])
 * @method GetPrometheusApiToken getPrometheusApiToken(array $options = [])
 * @method GetRetcodeShareUrl getRetcodeShareUrl(array $options = [])
 * @method GetStack getStack(array $options = [])
 * @method GetTrace getTrace(array $options = [])
 * @method GetTraceApp getTraceApp(array $options = [])
 * @method ImportAppAlertRules importAppAlertRules(array $options = [])
 * @method ImportCustomAlertRules importCustomAlertRules(array $options = [])
 * @method ImportPrometheusRules importPrometheusRules(array $options = [])
 * @method ListActivatedAlerts listActivatedAlerts(array $options = [])
 * @method ListAlertTemplates listAlertTemplates(array $options = [])
 * @method ListClusterFromGrafana listClusterFromGrafana(array $options = [])
 * @method ListDashboards listDashboards(array $options = [])
 * @method ListDispatchRule listDispatchRule(array $options = [])
 * @method ListPromClusters listPromClusters(array $options = [])
 * @method ListPrometheusAlertRules listPrometheusAlertRules(array $options = [])
 * @method ListPrometheusAlertTemplates listPrometheusAlertTemplates(array $options = [])
 * @method ListRetcodeApps listRetcodeApps(array $options = [])
 * @method ListScenario listScenario(array $options = [])
 * @method ListServerlessTopNApps listServerlessTopNApps(array $options = [])
 * @method ListTraceApps listTraceApps(array $options = [])
 * @method OpenArmsDefaultSLR openArmsDefaultSLR(array $options = [])
 * @method OpenArmsService openArmsService(array $options = [])
 * @method OpenArmsServiceSecondVersion openArmsServiceSecondVersion(array $options = [])
 * @method OpenVCluster openVCluster(array $options = [])
 * @method OpenXtraceDefaultSLR openXtraceDefaultSLR(array $options = [])
 * @method QueryDataset queryDataset(array $options = [])
 * @method QueryMetric queryMetric(array $options = [])
 * @method QueryMetricByPage queryMetricByPage(array $options = [])
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
 * @method SendCustomIncidents sendCustomIncidents(array $options = [])
 * @method SendMseIncident sendMseIncident(array $options = [])
 * @method SetRetcodeShareStatus setRetcodeShareStatus(array $options = [])
 * @method StartAlert startAlert(array $options = [])
 * @method StopAlert stopAlert(array $options = [])
 * @method UpdateAlertContact updateAlertContact(array $options = [])
 * @method UpdateAlertContactGroup updateAlertContactGroup(array $options = [])
 * @method UpdateAlertRule updateAlertRule(array $options = [])
 * @method UpdateAlertTemplate updateAlertTemplate(array $options = [])
 * @method UpdateDispatchRule updateDispatchRule(array $options = [])
 * @method UpdatePrometheusAlertRule updatePrometheusAlertRule(array $options = [])
 * @method UpdateWebhook updateWebhook(array $options = [])
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
 * @method string getCurrentTimestamp()
 * @method $this withCurrentTimestamp($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class CheckDataConsistency extends Rpc
{
}

/**
 * @method string getSPIRegionId()
 * @method $this withSPIRegionId($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getDeletionTaskId()
 * @method $this withDeletionTaskId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class CheckServiceLinkedRoleForDeleting extends Rpc
{
}

/**
 * @method string getSvcCode()
 * @method $this withSvcCode($value)
 */
class CheckServiceStatus extends Rpc
{
}

/**
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getEnable()
 * @method $this withEnable($value)
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
 * @method string getTemplateProvider()
 * @method $this withTemplateProvider($value)
 * @method string getAnnotations()
 * @method $this withAnnotations($value)
 * @method string getRule()
 * @method $this withRule($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMatchExpressions()
 * @method $this withMatchExpressions($value)
 */
class CreateAlertTemplate extends Rpc
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
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 */
class CreatePrometheusAlertRule extends Rpc
{
}

/**
 * @method string getRetcodeAppName()
 * @method $this withRetcodeAppName($value)
 * @method string getRetcodeAppType()
 * @method $this withRetcodeAppType($value)
 */
class CreateRetcodeApp extends Rpc
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
 */
class CreateWebhook extends Rpc
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
 */
class CreateWehook extends Rpc
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
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertRules extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertTemplate extends Rpc
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
 * @method string getClusterName()
 * @method string getClusterId()
 * @method string getUserId()
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class DeletePrometheusAlertRule extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteRetcodeApp extends Rpc
{
}

/**
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class DeleteScenario extends Rpc
{
}

/**
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
 * @method string getId()
 * @method $this withId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DescribeDispatchRule extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class DescribePrometheusAlertRule extends Rpc
{
}

class DescribeTraceLicenseKey extends Rpc
{
}

class DescribeTraceLocation extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DisableAlertTemplate extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class EnableAlertTemplate extends Rpc
{
}

/**
 * @method string getNameSpace()
 * @method $this withNameSpace($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ExportPrometheusRules extends Rpc
{
}

class GetAgentDownloadUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

class GetArmsConsoleUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCurrentTimestamp()
 * @method $this withCurrentTimestamp($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class GetConsistencySnapshot extends Rpc
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
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class GetIntegrationToken extends Rpc
{
}

/**
 * @method array getTraceIDs()
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

class GetPrometheusApiToken extends Rpc
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
 * @method string getTraceID()
 * @method $this withTraceID($value)
 * @method string getRpcID()
 * @method $this withRpcID($value)
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetStack extends Rpc
{
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
 */
class GetTraceApp extends Rpc
{
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
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
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getTemplateAlertConfig()
 * @method $this withTemplateAlertConfig($value)
 * @method string getTemplageAlertConfig()
 * @method $this withTemplageAlertConfig($value)
 */
class ImportCustomAlertRules extends Rpc
{
}

/**
 * @method string getNameSpace()
 * @method $this withNameSpace($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class ImportPrometheusRules extends Rpc
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
 * @method string getAlertProvider()
 * @method $this withAlertProvider($value)
 * @method string getTemplateProvider()
 * @method $this withTemplateProvider($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAlertTemplates extends Rpc
{
}

class ListClusterFromGrafana extends Rpc
{
}

/**
 * @method string getDashboardName()
 * @method $this withDashboardName($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getRecreateSwitch()
 * @method $this withRecreateSwitch($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 */
class ListDashboards extends Rpc
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

class ListPromClusters extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMatchExpressions()
 * @method $this withMatchExpressions($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPrometheusAlertRules extends Rpc
{
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

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ListRetcodeApps extends Rpc
{
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
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListServerlessTopNApps extends Rpc
{
}

class ListTraceApps extends Rpc
{
}

class OpenArmsDefaultSLR extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OpenArmsService extends Rpc
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
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getReduceTail()
 * @method $this withReduceTail($value)
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getOptionalDims()
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getIsDrillDown()
 * @method $this withIsDrillDown($value)
 * @method string getHungryMode()
 * @method $this withHungryMode($value)
 * @method string getOrderByKey()
 * @method $this withOrderByKey($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method array getRequiredDims()
 * @method array getDimensions()
 */
class QueryDataset extends Rpc
{

    /**
     * @param array $optionalDims
     *
     * @return $this
     */
	public function withOptionalDims(array $optionalDims)
	{
	    $this->data['OptionalDims'] = $optionalDims;
		foreach ($optionalDims as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
     * @param array $requiredDims
     *
     * @return $this
     */
	public function withRequiredDims(array $requiredDims)
	{
	    $this->data['RequiredDims'] = $requiredDims;
		foreach ($requiredDims as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['Dimensions.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getFilters()
 * @method string getConsistencyDataKey()
 * @method $this withConsistencyDataKey($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getDimensions()
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class QueryMetric extends Rpc
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
 * @method array getFilters()
 * @method string getConsistencyDataKey()
 * @method $this withConsistencyDataKey($value)
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
 * @method array getDimensions()
 * @method string getOrder()
 * @method $this withOrder($value)
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
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class SearchAlertRules extends Rpc
{
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
 * @method string getRetcodeAppName()
 * @method $this withRetcodeAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchRetcodeAppByPage extends Rpc
{
}

/**
 * @method string getTraceAppName()
 * @method $this withTraceAppName($value)
 */
class SearchTraceAppByName extends Rpc
{
}

/**
 * @method string getTraceAppName()
 * @method $this withTraceAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchTraceAppByPage extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getIncidents()
 * @method $this withIncidents($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class SendCustomIncidents extends Rpc
{
}

/**
 * @method string getIncidents()
 * @method $this withIncidents($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class SendMseIncident extends Rpc
{
}

/**
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
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class StopAlert extends Rpc
{
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
 * @method string getAnnotations()
 * @method $this withAnnotations($value)
 * @method string getRule()
 * @method $this withRule($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getMatchExpressions()
 * @method $this withMatchExpressions($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAlertTemplate extends Rpc
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
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 */
class UpdatePrometheusAlertRule extends Rpc
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
 */
class UpdateWebhook extends Rpc
{
}
