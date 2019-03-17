<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

class V20180308Rpc extends Rpc
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
 * @method array getContactGroupTargetIds()
 * @method array getTargetIds()
 * @method array getWebhookTargetIds()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class RemoveMetricRuleTargets extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withContactGroupTargetIds(array $value)
    {
        $this->data['ContactGroupTargetIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ContactGroupTargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTargetIds(array $value)
    {
        $this->data['TargetIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withWebhookTargetIds(array $value)
    {
        $this->data['WebhookTargetIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['WebhookTargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeMetricRuleTargets extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getActions()
 * @method $this withActions($value)
 * @method array getTargets()
 */
class PutMetricRuleTargets extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTargets(array $value)
    {
        $this->data['Targets'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Targets.' . ($i + 1) . '.Level'] = $value[$i]['Level'];
            $this->options['query']['Targets.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['Targets.' . ($i + 1) . '.Arn'] = $value[$i]['Arn'];
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescrebeEventRuleTarget extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 */
class DescribeSiteMonitorISPAreaCity extends V20180308Rpc
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
class QueryMetricMeta extends V20180308Rpc
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
class QueryProjectMeta extends V20180308Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteMonitoringTemplate extends V20180308Rpc
{
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
class ApplyMonitoringTemplate extends V20180308Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetMonitoringTemplate extends V20180308Rpc
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
class UpdateMonitoringTemplate extends V20180308Rpc
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
class CreateMonitoringTemplate extends V20180308Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsResponseTime extends V20180308Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsErrorRate extends V20180308Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsAvailability extends V20180308Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryErrorDistribution extends V20180308Rpc
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
class ListMonitoringTemplates extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupAlertJsonArray()
 * @method $this withGroupAlertJsonArray($value)
 */
class CreateMyGroupAlertBatch extends V20180308Rpc
{
}

/**
 * @method string getGroupAlertJson()
 * @method $this withGroupAlertJson($value)
 */
class UpdateMyGroupAlert extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAlertName()
 * @method $this withAlertName($value)
 */
class GetMyGroupAlert extends V20180308Rpc
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
class QueryTaskMonitorData extends V20180308Rpc
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

class QueryTaskConfig extends V20180308Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 */
class QuerySystemEventDemo extends V20180308Rpc
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
class SendDryRunSystemEvent extends V20180308Rpc
{
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
class DescribeAlarmsForResources extends V20180308Rpc
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
class PutMetricAlarm extends V20180308Rpc
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
class DescribeAlarmsForDimensions extends V20180308Rpc
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
class DescribeAlarms extends V20180308Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class ListEventTargetsByRule extends V20180308Rpc
{
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
class ListEventRules extends V20180308Rpc
{
}

/**
 * @method array getRuleNames()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class EnableEventRule extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRuleNames(array $value)
    {
        $this->data['RuleNames'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getRuleNames()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DisableEventRule extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRuleNames(array $value)
    {
        $this->data['RuleNames'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeEventRule extends V20180308Rpc
{
}

/**
 * @method array getIds()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DeleteEventTargets extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIds(array $value)
    {
        $this->data['Ids'] = $value;
        foreach ($value as $i => $iValue) {
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
class DeleteEventRule extends V20180308Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRuleNames(array $value)
    {
        $this->data['RuleNames'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
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
class PutEventTargets extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withWebhookParameters(array $value)
    {
        $this->data['WebhookParameters'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Protocol'] = $value[$i]['Protocol'];
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Method'] = $value[$i]['Method'];
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Url'] = $value[$i]['Url'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withContactParameters(array $value)
    {
        $this->data['ContactParameters'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ContactParameters.' . ($i + 1) . '.Level'] = $value[$i]['Level'];
            $this->options['query']['ContactParameters.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['ContactParameters.' . ($i + 1) . '.ContactGroupName'] = $value[$i]['ContactGroupName'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSlsParameters(array $value)
    {
        $this->data['SlsParameters'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SlsParameters.' . ($i + 1) . '.Project'] = $value[$i]['Project'];
            $this->options['query']['SlsParameters.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['SlsParameters.' . ($i + 1) . '.Region'] = $value[$i]['Region'];
            $this->options['query']['SlsParameters.' . ($i + 1) . '.LogStore'] = $value[$i]['LogStore'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFcParameters(array $value)
    {
        $this->data['FcParameters'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['FcParameters.' . ($i + 1) . '.FunctionName'] = $value[$i]['FunctionName'];
            $this->options['query']['FcParameters.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
            $this->options['query']['FcParameters.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['FcParameters.' . ($i + 1) . '.Region'] = $value[$i]['Region'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMnsParameters(array $value)
    {
        $this->data['MnsParameters'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MnsParameters.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['MnsParameters.' . ($i + 1) . '.Region'] = $value[$i]['Region'];
            $this->options['query']['MnsParameters.' . ($i + 1) . '.Queue'] = $value[$i]['Queue'];
        }

        return $this;
    }
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
class PutEventRule extends V20180308Rpc
{
    /** @var string */
    public $method = 'PUT';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEventPattern(array $value)
    {
        $this->data['EventPattern'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['LevelLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.LevelList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['EventPattern.' . ($i + 1) . '.Product'] = $value[$i]['Product'];
            foreach ($value[$i]['StatusLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.StatusList.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['NameLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.NameList.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['EventTypeLists'] as $j => $jValue) {
                $this->options['query']['EventPattern.' . ($i + 1) . '.EventTypeList.' . ($j + 1)] = $jValue;
            }
        }

        return $this;
    }
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 */
class DescribeContact extends V20180308Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class GetContacts extends V20180308Rpc
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
class ApplyTemplate extends V20180308Rpc
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
class CreateTask extends V20180308Rpc
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
class ModifyTask extends V20180308Rpc
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
class DeleteTasks extends V20180308Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class StopTasks extends V20180308Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class StartTasks extends V20180308Rpc
{
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 */
class DescribeISPAreaCity extends V20180308Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTaskDetail extends V20180308Rpc
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
class DescribeTasks extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class ListGroupDynamicRule extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteGroupDynamicRule extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupRuleArrayJson()
 * @method $this withGroupRuleArrayJson($value)
 */
class PutGroupDynamicRule extends V20180308Rpc
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
class UpdateMyGroupMembers extends V20180308Rpc
{
}

/**
 * @method array getTaskIdList()
 */
class TaskConfigUnhealthy extends V20180308Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTaskIdList(array $value)
    {
        $this->data['TaskIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TaskIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getIdList()
 */
class TaskConfigDelete extends V20180308Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIdList(array $value)
    {
        $this->data['IdList'] = $value;
        foreach ($value as $i => $iValue) {
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
class TaskConfigEnable extends V20180308Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withIdList(array $value)
    {
        $this->data['IdList'] = $value;
        foreach ($value as $i => $iValue) {
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
class TaskConfigList extends V20180308Rpc
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
class TaskConfigModify extends V20180308Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceList(array $value)
    {
        $this->data['InstanceList'] = $value;
        foreach ($value as $i => $iValue) {
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
class TaskConfigCreate extends V20180308Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceList(array $value)
    {
        $this->data['InstanceList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
class QueryMetricTop extends V20180308Rpc
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
class QueryMetricList extends V20180308Rpc
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
class QueryMetricLast extends V20180308Rpc
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
class QueryMetricData extends V20180308Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class EnableAlarm extends V20180308Rpc
{
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
class NodeProcessCreate extends V20180308Rpc
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
class UpdateAlarm extends V20180308Rpc
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
class ListAlarmHistory extends V20180308Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QueryCustomEventHistogram extends V20180308Rpc
{
}

/**
 * @method string getSelectContactGroups()
 * @method $this withSelectContactGroups($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 */
class ListMyGroups extends V20180308Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class NodeProcesses extends V20180308Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class EnableActiveAlert extends V20180308Rpc
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
class ProfileSet extends V20180308Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class NodeStatus extends V20180308Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteAlarm extends V20180308Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListContactGroup extends V20180308Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QuerySystemEventHistogram extends V20180308Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListActiveAlertRule extends V20180308Rpc
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
class GetMyGroups extends V20180308Rpc
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
class DeleteCustomMetric extends V20180308Rpc
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
class CreateAlarm extends V20180308Rpc
{
}

/**
 * @method string getEventInfo()
 * @method $this withEventInfo($value)
 */
class PutEvent extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class ListMyGroupCategories extends V20180308Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class NodeUninstall extends V20180308Rpc
{
}

/**
 * @method string getMetricList()
 * @method $this withMetricList($value)
 */
class PutCustomMetric extends V20180308Rpc
{
}

/**
 * @method string getInstances()
 * @method $this withInstances($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class AddMyGroupInstances extends V20180308Rpc
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
class ListAlarm extends V20180308Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteMyGroupInstances extends V20180308Rpc
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
class ListMyGroupInstancesDetails extends V20180308Rpc
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
class CreateMyGroups extends V20180308Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListProductOfActiveAlert extends V20180308Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DisableActiveAlert extends V20180308Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteMyGroups extends V20180308Rpc
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
class ListMyGroupInstances extends V20180308Rpc
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
class NodeList extends V20180308Rpc
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
class NodeInstall extends V20180308Rpc
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
class UpdateMyGroups extends V20180308Rpc
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
class NodeProcessDelete extends V20180308Rpc
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
class QueryCustomMetricList extends V20180308Rpc
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
class GetNotifyPolicy extends V20180308Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QuerySystemEventCount extends V20180308Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QueryCustomEventCount extends V20180308Rpc
{
}

/**
 * @method string getInstances()
 * @method $this withInstances($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class UpdateMyGroupInstances extends V20180308Rpc
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
class ListNotifyPolicy extends V20180308Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class AccessKeyGet extends V20180308Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ProfileGet extends V20180308Rpc
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
class CreateNotifyPolicy extends V20180308Rpc
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
class DeleteNotifyPolicy extends V20180308Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DisableAlarm extends V20180308Rpc
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
class DescribeAlarmHistory extends V20180308Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QuerySystemEventDetail extends V20180308Rpc
{
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class NodeStatusList extends V20180308Rpc
{
}

/**
 * @method string getQueryJson()
 * @method $this withQueryJson($value)
 */
class QueryCustomEventDetail extends V20180308Rpc
{
}
