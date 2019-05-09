<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeAlertHistoryList describeAlertHistoryList(array $options = [])
 * @method PutMetricRuleTargets putMetricRuleTargets(array $options = [])
 * @method DescribeMetricRuleTargets describeMetricRuleTargets(array $options = [])
 * @method RemoveMetricRuleTargets removeMetricRuleTargets(array $options = [])
 * @method ApplyMonitoringTemplate applyMonitoringTemplate(array $options = [])
 * @method CreateMyGroupAlertBatch createMyGroupAlertBatch(array $options = [])
 * @method UpdateMyGroupAlert updateMyGroupAlert(array $options = [])
 * @method GetMyGroupAlert getMyGroupAlert(array $options = [])
 * @method ListMonitoringTemplates listMonitoringTemplates(array $options = [])
 * @method CreateMonitoringTemplate createMonitoringTemplate(array $options = [])
 * @method UpdateMonitoringTemplate updateMonitoringTemplate(array $options = [])
 * @method GetMonitoringTemplate getMonitoringTemplate(array $options = [])
 * @method DeleteMonitoringTemplate deleteMonitoringTemplate(array $options = [])
 * @method QueryProjectMeta queryProjectMeta(array $options = [])
 * @method QueryMetricMeta queryMetricMeta(array $options = [])
 * @method QueryStaticsResponseTime queryStaticsResponseTime(array $options = [])
 * @method QueryStaticsErrorRate queryStaticsErrorRate(array $options = [])
 * @method QueryStaticsAvailability queryStaticsAvailability(array $options = [])
 * @method QueryErrorDistribution queryErrorDistribution(array $options = [])
 * @method QueryTaskMonitorData queryTaskMonitorData(array $options = [])
 * @method QueryTaskConfig queryTaskConfig(array $options = [])
 * @method QueryMonitorData queryMonitorData(array $options = [])
 * @method QuerySystemEventDemo querySystemEventDemo(array $options = [])
 * @method SendDryRunSystemEvent sendDryRunSystemEvent(array $options = [])
 * @method PutMetricAlarm putMetricAlarm(array $options = [])
 * @method DescribeAlarmsForResources describeAlarmsForResources(array $options = [])
 * @method DescribeAlarms describeAlarms(array $options = [])
 * @method PutGroupDynamicRule putGroupDynamicRule(array $options = [])
 * @method DeleteGroupDynamicRule deleteGroupDynamicRule(array $options = [])
 * @method ListGroupDynamicRule listGroupDynamicRule(array $options = [])
 * @method ApplyTemplate applyTemplate(array $options = [])
 * @method DeleteEventRule deleteEventRule(array $options = [])
 * @method DescribeEventRule describeEventRule(array $options = [])
 * @method DeleteEventTargets deleteEventTargets(array $options = [])
 * @method DisableEventRule disableEventRule(array $options = [])
 * @method ListEventRules listEventRules(array $options = [])
 * @method EnableEventRule enableEventRule(array $options = [])
 * @method ListEventTargetsByRule listEventTargetsByRule(array $options = [])
 * @method PutEventRule putEventRule(array $options = [])
 * @method PutEventTargets putEventTargets(array $options = [])
 * @method DescribeContact describeContact(array $options = [])
 * @method GetContacts getContacts(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeTaskDetail describeTaskDetail(array $options = [])
 * @method CreateTask createTask(array $options = [])
 * @method ModifyTask modifyTask(array $options = [])
 * @method DeleteTasks deleteTasks(array $options = [])
 * @method StopTasks stopTasks(array $options = [])
 * @method StartTasks startTasks(array $options = [])
 * @method DescribeISPAreaCity describeISPAreaCity(array $options = [])
 * @method UpdateMyGroupMembers updateMyGroupMembers(array $options = [])
 * @method QueryMetricData queryMetricData(array $options = [])
 * @method QueryMetricLast queryMetricLast(array $options = [])
 * @method QueryMetricList queryMetricList(array $options = [])
 * @method QueryMetricTop queryMetricTop(array $options = [])
 * @method TaskConfigUnhealthy taskConfigUnhealthy(array $options = [])
 * @method TaskConfigDelete taskConfigDelete(array $options = [])
 * @method TaskConfigEnable taskConfigEnable(array $options = [])
 * @method TaskConfigList taskConfigList(array $options = [])
 * @method TaskConfigModify taskConfigModify(array $options = [])
 * @method TaskConfigCreate taskConfigCreate(array $options = [])
 * @method NodeProcessCreate nodeProcessCreate(array $options = [])
 * @method EnableAlarm enableAlarm(array $options = [])
 * @method UpdateAlarm updateAlarm(array $options = [])
 * @method QueryCustomEventHistogram queryCustomEventHistogram(array $options = [])
 * @method ListAlarmHistory listAlarmHistory(array $options = [])
 * @method ListMyGroups listMyGroups(array $options = [])
 * @method NodeProcesses nodeProcesses(array $options = [])
 * @method EnableActiveAlert enableActiveAlert(array $options = [])
 * @method ProfileSet profileSet(array $options = [])
 * @method DeleteAlarm deleteAlarm(array $options = [])
 * @method NodeStatus nodeStatus(array $options = [])
 * @method QuerySystemEventHistogram querySystemEventHistogram(array $options = [])
 * @method ListContactGroup listContactGroup(array $options = [])
 * @method GetMyGroups getMyGroups(array $options = [])
 * @method ListActiveAlertRule listActiveAlertRule(array $options = [])
 * @method DeleteCustomMetric deleteCustomMetric(array $options = [])
 * @method PutEvent putEvent(array $options = [])
 * @method CreateAlarm createAlarm(array $options = [])
 * @method NodeUninstall nodeUninstall(array $options = [])
 * @method ListMyGroupCategories listMyGroupCategories(array $options = [])
 * @method AddMyGroupInstances addMyGroupInstances(array $options = [])
 * @method PutCustomMetric putCustomMetric(array $options = [])
 * @method ListAlarm listAlarm(array $options = [])
 * @method ListMyGroupInstancesDetails listMyGroupInstancesDetails(array $options = [])
 * @method DeleteMyGroupInstances deleteMyGroupInstances(array $options = [])
 * @method CreateMyGroups createMyGroups(array $options = [])
 * @method DisableActiveAlert disableActiveAlert(array $options = [])
 * @method ListProductOfActiveAlert listProductOfActiveAlert(array $options = [])
 * @method ListMyGroupInstances listMyGroupInstances(array $options = [])
 * @method DeleteMyGroups deleteMyGroups(array $options = [])
 * @method NodeInstall nodeInstall(array $options = [])
 * @method NodeList nodeList(array $options = [])
 * @method UpdateMyGroups updateMyGroups(array $options = [])
 * @method NodeProcessDelete nodeProcessDelete(array $options = [])
 * @method QueryCustomMetricList queryCustomMetricList(array $options = [])
 * @method GetNotifyPolicy getNotifyPolicy(array $options = [])
 * @method QueryCustomEventCount queryCustomEventCount(array $options = [])
 * @method QuerySystemEventCount querySystemEventCount(array $options = [])
 * @method ListNotifyPolicy listNotifyPolicy(array $options = [])
 * @method UpdateMyGroupInstances updateMyGroupInstances(array $options = [])
 * @method AccessKeyGet accessKeyGet(array $options = [])
 * @method CreateNotifyPolicy createNotifyPolicy(array $options = [])
 * @method ProfileGet profileGet(array $options = [])
 * @method DisableAlarm disableAlarm(array $options = [])
 * @method DeleteNotifyPolicy deleteNotifyPolicy(array $options = [])
 * @method DescribeAlarmHistory describeAlarmHistory(array $options = [])
 * @method NodeStatusList nodeStatusList(array $options = [])
 * @method QuerySystemEventDetail querySystemEventDetail(array $options = [])
 * @method QueryCustomEventDetail queryCustomEventDetail(array $options = [])
 */
class CmsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cms';

    /** @var string */
    public $version = '2018-03-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cms';
}

/**
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getOnlyCount()
 * @method $this withOnlyCount($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAlertHistoryList extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getActions()
 * @method array getTargets()
 */
class PutMetricRuleTargets extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActions($value)
    {
        $this->data['Actions'] = $value;
        $this->options['form_params']['Actions'] = $value;

        return $this;
    }

    /**
     * @param array $targets
     *
     * @return $this
     */
    public function withTargets(array $targets)
    {
        $this->data['Targets'] = $targets;
        foreach ($targets as $depth1 => $depth1Value) {
            $this->options['query']['Targets.' . ($depth1 + 1) . '.Level'] = $depth1Value['Level'];
            $this->options['query']['Targets.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['Targets.' . ($depth1 + 1) . '.Arn'] = $depth1Value['Arn'];
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeMetricRuleTargets extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method array getContactGroupTargetIds()
 * @method array getTargetIds()
 * @method array getWebhookTargetIds()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class RemoveMetricRuleTargets extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $contactGroupTargetIds
     *
     * @return $this
     */
    public function withContactGroupTargetIds(array $contactGroupTargetIds)
    {
        $this->data['ContactGroupTargetIds'] = $contactGroupTargetIds;
        foreach ($contactGroupTargetIds as $i => $iValue) {
            $this->options['query']['ContactGroupTargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $targetIds
     *
     * @return $this
     */
    public function withTargetIds(array $targetIds)
    {
        $this->data['TargetIds'] = $targetIds;
        foreach ($targetIds as $i => $iValue) {
            $this->options['query']['TargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $webhookTargetIds
     *
     * @return $this
     */
    public function withWebhookTargetIds(array $webhookTargetIds)
    {
        $this->data['WebhookTargetIds'] = $webhookTargetIds;
        foreach ($webhookTargetIds as $i => $iValue) {
            $this->options['query']['WebhookTargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEnableStartTime()
 * @method $this withEnableStartTime($value)
 * @method string getApplyMode()
 * @method $this withApplyMode($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getEnableEndTime()
 * @method $this withEnableEndTime($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNotifyLevel()
 * @method $this withNotifyLevel($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 */
class ApplyMonitoringTemplate extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupAlertJsonArray()
 * @method $this withGroupAlertJsonArray($value)
 */
class CreateMyGroupAlertBatch extends Rpc
{
}

/**
 * @method string getGroupAlertJson()
 * @method $this withGroupAlertJson($value)
 */
class UpdateMyGroupAlert extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 */
class GetMyGroupAlert extends Rpc
{
}

/**
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getHistory()
 * @method $this withHistory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListMonitoringTemplates extends Rpc
{
}

/**
 * @method string getEventRuleTemplatesJson()
 * @method $this withEventRuleTemplatesJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAlertTemplatesJson()
 * @method $this withAlertTemplatesJson($value)
 */
class CreateMonitoringTemplate extends Rpc
{
}

/**
 * @method string getEventRuleTemplatesJson()
 * @method $this withEventRuleTemplatesJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRestVersion()
 * @method $this withRestVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertTemplatesJson()
 * @method $this withAlertTemplatesJson($value)
 */
class UpdateMonitoringTemplate extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetMonitoringTemplate extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteMonitoringTemplate extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 */
class QueryProjectMeta extends Rpc
{
}

/**
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 */
class QueryMetricMeta extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsResponseTime extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsErrorRate extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsAvailability extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryErrorDistribution extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMetricName()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryTaskMonitorData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricName($value)
    {
        $this->data['MetricName'] = $value;
        $this->options['query']['metricName'] = $value;

        return $this;
    }
}

class QueryTaskConfig extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMetricName()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryMonitorData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricName($value)
    {
        $this->data['MetricName'] = $value;
        $this->options['query']['metricName'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 */
class QuerySystemEventDemo extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 * @method string getEventContent()
 * @method $this withEventContent($value)
 */
class SendDryRunSystemEvent extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getSubject()
 * @method $this withSubject($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getNoEffectiveInterval()
 * @method $this withNoEffectiveInterval($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDeepDive()
 * @method $this withDeepDive($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class PutMetricAlarm extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getEnableState()
 * @method $this withEnableState($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertState()
 * @method $this withAlertState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeAlarmsForResources extends Rpc
{
}

/**
 * @method string getEnableState()
 * @method $this withEnableState($value)
 * @method string getNames()
 * @method $this withNames($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertState()
 * @method $this withAlertState($value)
 * @method string getNameKeyword()
 * @method $this withNameKeyword($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 */
class DescribeAlarms extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupRuleArrayJson()
 * @method $this withGroupRuleArrayJson($value)
 */
class PutGroupDynamicRule extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteGroupDynamicRule extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class ListGroupDynamicRule extends Rpc
{
}

/**
 * @method string getEnableStartTime()
 * @method $this withEnableStartTime($value)
 * @method string getApplyMode()
 * @method $this withApplyMode($value)
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getEnableEndTime()
 * @method $this withEnableEndTime($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNotifyLevel()
 * @method $this withNotifyLevel($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 */
class ApplyTemplate extends Rpc
{
}

/**
 * @method array getRuleNames()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DeleteEventRule extends Rpc
{

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
    public function withRuleNames(array $ruleNames)
    {
        $this->data['RuleNames'] = $ruleNames;
        foreach ($ruleNames as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeEventRule extends Rpc
{
}

/**
 * @method array getIds()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DeleteEventTargets extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $ids
     *
     * @return $this
     */
    public function withIds(array $ids)
    {
        $this->data['Ids'] = $ids;
        foreach ($ids as $i => $iValue) {
            $this->options['query']['Ids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getRuleNames()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DisableEventRule extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
    public function withRuleNames(array $ruleNames)
    {
        $this->data['RuleNames'] = $ruleNames;
        foreach ($ruleNames as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListEventRules extends Rpc
{
}

/**
 * @method array getRuleNames()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class EnableEventRule extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
    public function withRuleNames(array $ruleNames)
    {
        $this->data['RuleNames'] = $ruleNames;
        foreach ($ruleNames as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class ListEventTargetsByRule extends Rpc
{
}

/**
 * @method array getEventPattern()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getState()
 * @method $this withState($value)
 */
class PutEventRule extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $eventPattern
     *
     * @return $this
     */
    public function withEventPattern(array $eventPattern)
    {
        $this->data['EventPattern'] = $eventPattern;
        foreach ($eventPattern as $depth1 => $depth1Value) {
            foreach ($depth1Value['LevelList'] as $i => $iValue) {
                $this->options['query']['EventPattern.' . ($depth1 + 1) . '.LevelList.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['EventPattern.' . ($depth1 + 1) . '.Product'] = $depth1Value['Product'];
            foreach ($depth1Value['StatusList'] as $i => $iValue) {
                $this->options['query']['EventPattern.' . ($depth1 + 1) . '.StatusList.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['NameList'] as $i => $iValue) {
                $this->options['query']['EventPattern.' . ($depth1 + 1) . '.NameList.' . ($i + 1)] = $iValue;
            }
            foreach ($depth1Value['EventTypeList'] as $i => $iValue) {
                $this->options['query']['EventPattern.' . ($depth1 + 1) . '.EventTypeList.' . ($i + 1)] = $iValue;
            }
        }

        return $this;
    }
}

/**
 * @method array getWebhookParameters()
 * @method array getContactParameters()
 * @method array getSlsParameters()
 * @method array getFcParameters()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getMnsParameters()
 */
class PutEventTargets extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $webhookParameters
     *
     * @return $this
     */
    public function withWebhookParameters(array $webhookParameters)
    {
        $this->data['WebhookParameters'] = $webhookParameters;
        foreach ($webhookParameters as $depth1 => $depth1Value) {
            $this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
            $this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Method'] = $depth1Value['Method'];
            $this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
        }

        return $this;
    }

    /**
     * @param array $contactParameters
     *
     * @return $this
     */
    public function withContactParameters(array $contactParameters)
    {
        $this->data['ContactParameters'] = $contactParameters;
        foreach ($contactParameters as $depth1 => $depth1Value) {
            $this->options['query']['ContactParameters.' . ($depth1 + 1) . '.Level'] = $depth1Value['Level'];
            $this->options['query']['ContactParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['ContactParameters.' . ($depth1 + 1) . '.ContactGroupName'] = $depth1Value['ContactGroupName'];
        }

        return $this;
    }

    /**
     * @param array $slsParameters
     *
     * @return $this
     */
    public function withSlsParameters(array $slsParameters)
    {
        $this->data['SlsParameters'] = $slsParameters;
        foreach ($slsParameters as $depth1 => $depth1Value) {
            $this->options['query']['SlsParameters.' . ($depth1 + 1) . '.Project'] = $depth1Value['Project'];
            $this->options['query']['SlsParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['SlsParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
            $this->options['query']['SlsParameters.' . ($depth1 + 1) . '.LogStore'] = $depth1Value['LogStore'];
        }

        return $this;
    }

    /**
     * @param array $fcParameters
     *
     * @return $this
     */
    public function withFcParameters(array $fcParameters)
    {
        $this->data['FcParameters'] = $fcParameters;
        foreach ($fcParameters as $depth1 => $depth1Value) {
            $this->options['query']['FcParameters.' . ($depth1 + 1) . '.FunctionName'] = $depth1Value['FunctionName'];
            $this->options['query']['FcParameters.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
            $this->options['query']['FcParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['FcParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
        }

        return $this;
    }

    /**
     * @param array $mnsParameters
     *
     * @return $this
     */
    public function withMnsParameters(array $mnsParameters)
    {
        $this->data['MnsParameters'] = $mnsParameters;
        foreach ($mnsParameters as $depth1 => $depth1Value) {
            $this->options['query']['MnsParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['MnsParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
            $this->options['query']['MnsParameters.' . ($depth1 + 1) . '.Queue'] = $depth1Value['Queue'];
        }

        return $this;
    }
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 */
class DescribeContact extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class GetContacts extends Rpc
{
}

/**
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTaskDetail extends Rpc
{
}

/**
 * @method string getCaller()
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getIspCity()
 * @method $this withIspCity($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getOptions()
 * @method $this withOptions($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getAlertRule()
 * @method $this withAlertRule($value)
 */
class CreateTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['query']['caller'] = $value;

        return $this;
    }
}

/**
 * @method string getCaller()
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getIspCity()
 * @method $this withIspCity($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getOptions()
 * @method $this withOptions($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getAlertRule()
 * @method $this withAlertRule($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ModifyTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['query']['caller'] = $value;

        return $this;
    }
}

/**
 * @method string getIsDeleteAlarms()
 * @method $this withIsDeleteAlarms($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class DeleteTasks extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class StopTasks extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class StartTasks extends Rpc
{
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 */
class DescribeISPAreaCity extends Rpc
{
}

/**
 * @method string getReaders()
 * @method $this withReaders($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMasters()
 * @method $this withMasters($value)
 */
class UpdateMyGroupMembers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class QueryMetricData extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class QueryMetricLast extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class QueryMetricList extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderby()
 * @method $this withOrderby($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getOrderDesc()
 * @method $this withOrderDesc($value)
 */
class QueryMetricTop extends Rpc
{
}

/**
 * @method array getTaskIdList()
 */
class TaskConfigUnhealthy extends Rpc
{

    /**
     * @param array $taskIdList
     *
     * @return $this
     */
    public function withTaskIdList(array $taskIdList)
    {
        $this->data['TaskIdList'] = $taskIdList;
        foreach ($taskIdList as $i => $iValue) {
            $this->options['query']['TaskIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getIdList()
 */
class TaskConfigDelete extends Rpc
{

    /**
     * @param array $idList
     *
     * @return $this
     */
    public function withIdList(array $idList)
    {
        $this->data['IdList'] = $idList;
        foreach ($idList as $i => $iValue) {
            $this->options['query']['IdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getIdList()
 * @method string getEnabled()
 * @method $this withEnabled($value)
 */
class TaskConfigEnable extends Rpc
{

    /**
     * @param array $idList
     *
     * @return $this
     */
    public function withIdList(array $idList)
    {
        $this->data['IdList'] = $idList;
        foreach ($idList as $i => $iValue) {
            $this->options['query']['IdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class TaskConfigList extends Rpc
{
}

/**
 * @method array getInstanceList()
 * @method string getJsonData()
 * @method $this withJsonData($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getAlertConfig()
 * @method $this withAlertConfig($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class TaskConfigModify extends Rpc
{

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function withInstanceList(array $instanceList)
    {
        $this->data['InstanceList'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->options['query']['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getInstanceList()
 * @method string getJsonData()
 * @method $this withJsonData($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getAlertConfig()
 * @method $this withAlertConfig($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class TaskConfigCreate extends Rpc
{

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function withInstanceList(array $instanceList)
    {
        $this->data['InstanceList'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->options['query']['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProcessUser()
 * @method $this withProcessUser($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class NodeProcessCreate extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class EnableAlarm extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class UpdateAlarm extends Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QueryCustomEventHistogram extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListAlarmHistory extends Rpc
{
}

/**
 * @method string getSelectContactGroups()
 * @method $this withSelectContactGroups($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 */
class ListMyGroups extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class NodeProcesses extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class EnableActiveAlert extends Rpc
{
}

/**
 * @method string getEnableInstallAgentNewECS()
 * @method $this withEnableInstallAgentNewECS($value)
 * @method string getEnableActiveAlert()
 * @method $this withEnableActiveAlert($value)
 * @method string getAutoInstall()
 * @method $this withAutoInstall($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ProfileSet extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteAlarm extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class NodeStatus extends Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QuerySystemEventHistogram extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListContactGroup extends Rpc
{
}

/**
 * @method string getSelectContactGroups()
 * @method $this withSelectContactGroups($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBindUrl()
 * @method $this withBindUrl($value)
 */
class GetMyGroups extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListActiveAlertRule extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getUUID()
 * @method $this withUUID($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class DeleteCustomMetric extends Rpc
{
}

/**
 * @method string getEventInfo()
 * @method $this withEventInfo($value)
 */
class PutEvent extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class CreateAlarm extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class NodeUninstall extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class ListMyGroupCategories extends Rpc
{
}

/**
 * @method string getInstances()
 * @method $this withInstances($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class AddMyGroupInstances extends Rpc
{
}

/**
 * @method string getMetricList()
 * @method $this withMetricList($value)
 */
class PutCustomMetric extends Rpc
{
}

/**
 * @method string getIsEnable()
 * @method $this withIsEnable($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAlarm extends Rpc
{
}

/**
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListMyGroupInstancesDetails extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteMyGroupInstances extends Rpc
{
}

/**
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getOptions()
 * @method $this withOptions($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBindUrl()
 * @method $this withBindUrl($value)
 */
class CreateMyGroups extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DisableActiveAlert extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListProductOfActiveAlert extends Rpc
{
}

/**
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListMyGroupInstances extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteMyGroups extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class NodeInstall extends Rpc
{
}

/**
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInstanceRegionId()
 * @method $this withInstanceRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSerialNumbers()
 * @method $this withSerialNumbers($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class NodeList extends Rpc
{
}

/**
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 */
class UpdateMyGroups extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class NodeProcessDelete extends Rpc
{
}

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class QueryCustomMetricList extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class GetNotifyPolicy extends Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QueryCustomEventCount extends Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QuerySystemEventCount extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class ListNotifyPolicy extends Rpc
{
}

/**
 * @method string getInstances()
 * @method $this withInstances($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class UpdateMyGroupInstances extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class AccessKeyGet extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class CreateNotifyPolicy extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ProfileGet extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DisableAlarm extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DeleteNotifyPolicy extends Rpc
{
}

/**
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getOnlyCount()
 * @method $this withOnlyCount($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAlarmHistory extends Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class NodeStatusList extends Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QuerySystemEventDetail extends Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QueryCustomEventDetail extends Rpc
{
}
