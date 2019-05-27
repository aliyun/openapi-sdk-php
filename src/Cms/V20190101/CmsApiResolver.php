<?php

namespace AlibabaCloud\Cms\V20190101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteMetricRuleTargets deleteMetricRuleTargets(array $options = [])
 * @method PutMetricRuleTargets putMetricRuleTargets(array $options = [])
 * @method DescribeMetricRuleTargets describeMetricRuleTargets(array $options = [])
 * @method ModifyMonitorGroupInstances modifyMonitorGroupInstances(array $options = [])
 * @method DescribeMonitoringAgentStatuses describeMonitoringAgentStatuses(array $options = [])
 * @method CreateMonitorAgentProcess createMonitorAgentProcess(array $options = [])
 * @method DescribeAlertHistoryList describeAlertHistoryList(array $options = [])
 * @method DescribeAlertingMetricRuleResources describeAlertingMetricRuleResources(array $options = [])
 * @method DisableActiveMetricRule disableActiveMetricRule(array $options = [])
 * @method DescribeActiveMetricRuleList describeActiveMetricRuleList(array $options = [])
 * @method DescribeProductsOfActiveMetricRule describeProductsOfActiveMetricRule(array $options = [])
 * @method EnableActiveMetricRule enableActiveMetricRule(array $options = [])
 * @method DescribeMonitorGroupInstanceAttribute describeMonitorGroupInstanceAttribute(array $options = [])
 * @method DescribeMonitorGroupNotifyPolicyList describeMonitorGroupNotifyPolicyList(array $options = [])
 * @method DeleteMonitorGroup deleteMonitorGroup(array $options = [])
 * @method CreateMonitorGroup createMonitorGroup(array $options = [])
 * @method DescribeMonitorGroups describeMonitorGroups(array $options = [])
 * @method DeleteMonitorGroupNotifyPolicy deleteMonitorGroupNotifyPolicy(array $options = [])
 * @method DescribeMonitorGroupDynamicRules describeMonitorGroupDynamicRules(array $options = [])
 * @method CreateMonitorGroupInstances createMonitorGroupInstances(array $options = [])
 * @method CreateMonitorGroupNotifyPolicy createMonitorGroupNotifyPolicy(array $options = [])
 * @method DeleteMonitorGroupInstances deleteMonitorGroupInstances(array $options = [])
 * @method DeleteMonitorGroupDynamicRule deleteMonitorGroupDynamicRule(array $options = [])
 * @method PutMonitorGroupDynamicRule putMonitorGroupDynamicRule(array $options = [])
 * @method DescribeMonitorGroupInstances describeMonitorGroupInstances(array $options = [])
 * @method DescribeMonitorGroupCategories describeMonitorGroupCategories(array $options = [])
 * @method ModifyMonitorGroup modifyMonitorGroup(array $options = [])
 * @method DescribeMetricRuleList describeMetricRuleList(array $options = [])
 * @method PutResourceMetricRule putResourceMetricRule(array $options = [])
 * @method PutGroupMetricRule putGroupMetricRule(array $options = [])
 * @method EnableMetricRules enableMetricRules(array $options = [])
 * @method DescribeMetricRuleCount describeMetricRuleCount(array $options = [])
 * @method CreateGroupMetricRules createGroupMetricRules(array $options = [])
 * @method DisableMetricRules disableMetricRules(array $options = [])
 * @method DeleteMetricRules deleteMetricRules(array $options = [])
 * @method ModifyMetricRuleTemplate modifyMetricRuleTemplate(array $options = [])
 * @method ApplyMetricRuleTemplate applyMetricRuleTemplate(array $options = [])
 * @method DescribeMetricRuleTemplateAttribute describeMetricRuleTemplateAttribute(array $options = [])
 * @method CreateMetricRuleTemplate createMetricRuleTemplate(array $options = [])
 * @method DeleteMetricRuleTemplate deleteMetricRuleTemplate(array $options = [])
 * @method DescribeMetricRuleTemplateList describeMetricRuleTemplateList(array $options = [])
 * @method PutCustomEvent putCustomEvent(array $options = [])
 * @method DescribeCustomEventCount describeCustomEventCount(array $options = [])
 * @method DescribeCustomEventAttribute describeCustomEventAttribute(array $options = [])
 * @method DescribeCustomEventHistogram describeCustomEventHistogram(array $options = [])
 * @method DeleteCustomMetric deleteCustomMetric(array $options = [])
 * @method DescribeCustomMetricList describeCustomMetricList(array $options = [])
 * @method PutCustomMetric putCustomMetric(array $options = [])
 * @method DescribeEventRuleAttribute describeEventRuleAttribute(array $options = [])
 * @method DeleteContactGroup deleteContactGroup(array $options = [])
 * @method DescribeContactList describeContactList(array $options = [])
 * @method DescribeContactListByContactGroup describeContactListByContactGroup(array $options = [])
 * @method DeleteContact deleteContact(array $options = [])
 * @method PutContactGroup putContactGroup(array $options = [])
 * @method PutContact putContact(array $options = [])
 * @method DescribeContactGroupList describeContactGroupList(array $options = [])
 * @method PutEventRuleTargets putEventRuleTargets(array $options = [])
 * @method DeleteEventRuleTargets deleteEventRuleTargets(array $options = [])
 * @method DisableEventRules disableEventRules(array $options = [])
 * @method DescribeEventRuleTargetList describeEventRuleTargetList(array $options = [])
 * @method DeleteEventRules deleteEventRules(array $options = [])
 * @method EnableEventRules enableEventRules(array $options = [])
 * @method PutEventRule putEventRule(array $options = [])
 * @method DescribeEventRuleList describeEventRuleList(array $options = [])
 * @method DescribeSystemEventAttribute describeSystemEventAttribute(array $options = [])
 * @method DescribeSystemEventHistogram describeSystemEventHistogram(array $options = [])
 * @method DescribeSystemEventCount describeSystemEventCount(array $options = [])
 * @method DescribeSystemEventMetaList describeSystemEventMetaList(array $options = [])
 * @method DescribeMonitoringAgentProcesses describeMonitoringAgentProcesses(array $options = [])
 * @method UninstallMonitoringAgent uninstallMonitoringAgent(array $options = [])
 * @method DescribeMonitoringAgentAccessKey describeMonitoringAgentAccessKey(array $options = [])
 * @method InstallMonitoringAgent installMonitoringAgent(array $options = [])
 * @method SendDryRunSystemEvent sendDryRunSystemEvent(array $options = [])
 * @method CreateMonitoringAgentProcess createMonitoringAgentProcess(array $options = [])
 * @method DescribeMonitoringAgentConfig describeMonitoringAgentConfig(array $options = [])
 * @method DeleteMonitoringAgentProcess deleteMonitoringAgentProcess(array $options = [])
 * @method DescribeMonitoringAgentHosts describeMonitoringAgentHosts(array $options = [])
 * @method DescribeSiteMonitorData describeSiteMonitorData(array $options = [])
 * @method ModifySiteMonitor modifySiteMonitor(array $options = [])
 * @method DescribeSiteMonitorISPCityList describeSiteMonitorISPCityList(array $options = [])
 * @method DescribeSiteMonitorQuota describeSiteMonitorQuota(array $options = [])
 * @method DescribeSiteMonitorStatistics describeSiteMonitorStatistics(array $options = [])
 * @method EnableSiteMonitors enableSiteMonitors(array $options = [])
 * @method DescribeSiteMonitorAttribute describeSiteMonitorAttribute(array $options = [])
 * @method DescribeSiteMonitorList describeSiteMonitorList(array $options = [])
 * @method DeleteSiteMonitors deleteSiteMonitors(array $options = [])
 * @method DisableSiteMonitors disableSiteMonitors(array $options = [])
 * @method CreateSiteMonitor createSiteMonitor(array $options = [])
 * @method DescribeProjectMeta describeProjectMeta(array $options = [])
 * @method DescribeMetricList describeMetricList(array $options = [])
 * @method DescribeMetricMetaList describeMetricMetaList(array $options = [])
 * @method DescribeMetricTop describeMetricTop(array $options = [])
 * @method DescribeMetricData describeMetricData(array $options = [])
 * @method DescribeMetricLast describeMetricLast(array $options = [])
 * @method EnableHostAvailability enableHostAvailability(array $options = [])
 * @method ModifyHostAvailability modifyHostAvailability(array $options = [])
 * @method DisableHostAvailability disableHostAvailability(array $options = [])
 * @method DescribeUnhealthyHostAvailability describeUnhealthyHostAvailability(array $options = [])
 * @method CreateHostAvailability createHostAvailability(array $options = [])
 * @method DescribeHostAvailabilityList describeHostAvailabilityList(array $options = [])
 * @method DeleteHostAvailability deleteHostAvailability(array $options = [])
 * @method DescribeMonitoringConfig describeMonitoringConfig(array $options = [])
 * @method PutMonitoringConfig putMonitoringConfig(array $options = [])
 */
class CmsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cms';

    /** @var string */
    public $version = '2019-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cms';
}

/**
 * @method array getTargetIds()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteMetricRuleTargets extends Rpc
{

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
}

/**
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method array getTargets()
 */
class PutMetricRuleTargets extends Rpc
{

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
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeMetricRuleTargets extends Rpc
{
}

/**
 * @method array getInstances()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class ModifyMonitorGroupInstances extends Rpc
{

    /**
     * @param array $instances
     *
     * @return $this
     */
    public function withInstances(array $instances)
    {
        $this->data['Instances'] = $instances;
        foreach ($instances as $depth1 => $depth1Value) {
            $this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
            $this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
            $this->options['query']['Instances.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
            $this->options['query']['Instances.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeMonitoringAgentStatuses extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getProcessUser()
 * @method $this withProcessUser($value)
 */
class CreateMonitorAgentProcess extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAlertStatus()
 * @method $this withAlertStatus($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class DescribeAlertHistoryList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeAlertingMetricRuleResources extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class DisableActiveMetricRule extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class DescribeActiveMetricRuleList extends Rpc
{
}

class DescribeProductsOfActiveMetricRule extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class EnableActiveMetricRule extends Rpc
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
class DescribeMonitorGroupInstanceAttribute extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMonitorGroupNotifyPolicyList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteMonitorGroup extends Rpc
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
class CreateMonitorGroup extends Rpc
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
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMonitorGroups extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteMonitorGroupNotifyPolicy extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeMonitorGroupDynamicRules extends Rpc
{
}

/**
 * @method array getInstances()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class CreateMonitorGroupInstances extends Rpc
{

    /**
     * @param array $instances
     *
     * @return $this
     */
    public function withInstances(array $instances)
    {
        $this->data['Instances'] = $instances;
        foreach ($instances as $depth1 => $depth1Value) {
            $this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
            $this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
            $this->options['query']['Instances.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
            $this->options['query']['Instances.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class CreateMonitorGroupNotifyPolicy extends Rpc
{
}

/**
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteMonitorGroupInstances extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteMonitorGroupDynamicRule extends Rpc
{
}

/**
 * @method array getGroupRules()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class PutMonitorGroupDynamicRule extends Rpc
{

    /**
     * @param array $groupRules
     *
     * @return $this
     */
    public function withGroupRules(array $groupRules)
    {
        $this->data['GroupRules'] = $groupRules;
        foreach ($groupRules as $depth1 => $depth1Value) {
            $this->options['query']['GroupRules.' . ($depth1 + 1) . '.FilterRelation'] = $depth1Value['FilterRelation'];
            foreach ($depth1Value['Filters'] as $depth2 => $depth2Value) {
                $this->options['query']['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Function'] = $depth2Value['Function'];
                $this->options['query']['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
                $this->options['query']['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
            }
            $this->options['query']['GroupRules.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }
}

/**
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
class DescribeMonitorGroupInstances extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeMonitorGroupCategories extends Rpc
{
}

/**
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 */
class ModifyMonitorGroup extends Rpc
{
}

/**
 * @method string getEnableState()
 * @method $this withEnableState($value)
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertState()
 * @method $this withAlertState($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricRuleList extends Rpc
{
}

/**
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getEscalationsWarnComparisonOperator()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEscalationsInfoStatistics()
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getEscalationsInfoComparisonOperator()
 * @method string getNoEffectiveInterval()
 * @method $this withNoEffectiveInterval($value)
 * @method string getEmailSubject()
 * @method $this withEmailSubject($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getEscalationsWarnTimes()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEscalationsWarnThreshold()
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getEscalationsCriticalStatistics()
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getEscalationsInfoTimes()
 * @method string getEscalationsCriticalTimes()
 * @method string getEscalationsWarnStatistics()
 * @method string getEscalationsInfoThreshold()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getEscalationsCriticalComparisonOperator()
 * @method string getEscalationsCriticalThreshold()
 */
class PutResourceMetricRule extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnComparisonOperator($value)
    {
        $this->data['EscalationsWarnComparisonOperator'] = $value;
        $this->options['query']['Escalations.Warn.ComparisonOperator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoStatistics($value)
    {
        $this->data['EscalationsInfoStatistics'] = $value;
        $this->options['query']['Escalations.Info.Statistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoComparisonOperator($value)
    {
        $this->data['EscalationsInfoComparisonOperator'] = $value;
        $this->options['query']['Escalations.Info.ComparisonOperator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnTimes($value)
    {
        $this->data['EscalationsWarnTimes'] = $value;
        $this->options['query']['Escalations.Warn.Times'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnThreshold($value)
    {
        $this->data['EscalationsWarnThreshold'] = $value;
        $this->options['query']['Escalations.Warn.Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalStatistics($value)
    {
        $this->data['EscalationsCriticalStatistics'] = $value;
        $this->options['query']['Escalations.Critical.Statistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoTimes($value)
    {
        $this->data['EscalationsInfoTimes'] = $value;
        $this->options['query']['Escalations.Info.Times'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalTimes($value)
    {
        $this->data['EscalationsCriticalTimes'] = $value;
        $this->options['query']['Escalations.Critical.Times'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnStatistics($value)
    {
        $this->data['EscalationsWarnStatistics'] = $value;
        $this->options['query']['Escalations.Warn.Statistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoThreshold($value)
    {
        $this->data['EscalationsInfoThreshold'] = $value;
        $this->options['query']['Escalations.Info.Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalComparisonOperator($value)
    {
        $this->data['EscalationsCriticalComparisonOperator'] = $value;
        $this->options['query']['Escalations.Critical.ComparisonOperator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalThreshold($value)
    {
        $this->data['EscalationsCriticalThreshold'] = $value;
        $this->options['query']['Escalations.Critical.Threshold'] = $value;

        return $this;
    }
}

/**
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getEscalationsWarnComparisonOperator()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEscalationsInfoStatistics()
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getEscalationsInfoComparisonOperator()
 * @method string getNoEffectiveInterval()
 * @method $this withNoEffectiveInterval($value)
 * @method string getEmailSubject()
 * @method $this withEmailSubject($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getEscalationsWarnTimes()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEscalationsWarnThreshold()
 * @method string getEscalationsCriticalStatistics()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEscalationsInfoTimes()
 * @method string getEscalationsCriticalTimes()
 * @method string getEscalationsWarnStatistics()
 * @method string getEscalationsInfoThreshold()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getEscalationsCriticalComparisonOperator()
 * @method string getEscalationsCriticalThreshold()
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class PutGroupMetricRule extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnComparisonOperator($value)
    {
        $this->data['EscalationsWarnComparisonOperator'] = $value;
        $this->options['query']['Escalations.Warn.ComparisonOperator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoStatistics($value)
    {
        $this->data['EscalationsInfoStatistics'] = $value;
        $this->options['query']['Escalations.Info.Statistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoComparisonOperator($value)
    {
        $this->data['EscalationsInfoComparisonOperator'] = $value;
        $this->options['query']['Escalations.Info.ComparisonOperator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnTimes($value)
    {
        $this->data['EscalationsWarnTimes'] = $value;
        $this->options['query']['Escalations.Warn.Times'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnThreshold($value)
    {
        $this->data['EscalationsWarnThreshold'] = $value;
        $this->options['query']['Escalations.Warn.Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalStatistics($value)
    {
        $this->data['EscalationsCriticalStatistics'] = $value;
        $this->options['query']['Escalations.Critical.Statistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoTimes($value)
    {
        $this->data['EscalationsInfoTimes'] = $value;
        $this->options['query']['Escalations.Info.Times'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalTimes($value)
    {
        $this->data['EscalationsCriticalTimes'] = $value;
        $this->options['query']['Escalations.Critical.Times'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsWarnStatistics($value)
    {
        $this->data['EscalationsWarnStatistics'] = $value;
        $this->options['query']['Escalations.Warn.Statistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsInfoThreshold($value)
    {
        $this->data['EscalationsInfoThreshold'] = $value;
        $this->options['query']['Escalations.Info.Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalComparisonOperator($value)
    {
        $this->data['EscalationsCriticalComparisonOperator'] = $value;
        $this->options['query']['Escalations.Critical.ComparisonOperator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEscalationsCriticalThreshold($value)
    {
        $this->data['EscalationsCriticalThreshold'] = $value;
        $this->options['query']['Escalations.Critical.Threshold'] = $value;

        return $this;
    }
}

/**
 * @method array getRuleId()
 */
class EnableMetricRules extends Rpc
{

    /**
     * @param array $ruleId
     *
     * @return $this
     */
    public function withRuleId(array $ruleId)
    {
        $this->data['RuleId'] = $ruleId;
        foreach ($ruleId as $i => $iValue) {
            $this->options['query']['RuleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 */
class DescribeMetricRuleCount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getGroupMetricRules()
 */
class CreateGroupMetricRules extends Rpc
{

    /**
     * @param array $groupMetricRules
     *
     * @return $this
     */
    public function withGroupMetricRules(array $groupMetricRules)
    {
        $this->data['GroupMetricRules'] = $groupMetricRules;
        foreach ($groupMetricRules as $depth1 => $depth1Value) {
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.EffectiveInterval'] = $depth1Value['EffectiveInterval'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.NoEffectiveInterval'] = $depth1Value['NoEffectiveInterval'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.EmailSubject'] = $depth1Value['EmailSubject'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.SilenceTime'] = $depth1Value['SilenceTime'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.RuleId'] = $depth1Value['RuleId'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
            $this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Dimensions'] = $depth1Value['Dimensions'];
        }

        return $this;
    }
}

/**
 * @method array getRuleId()
 */
class DisableMetricRules extends Rpc
{

    /**
     * @param array $ruleId
     *
     * @return $this
     */
    public function withRuleId(array $ruleId)
    {
        $this->data['RuleId'] = $ruleId;
        foreach ($ruleId as $i => $iValue) {
            $this->options['query']['RuleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getId()
 */
class DeleteMetricRules extends Rpc
{

    /**
     * @param array $id
     *
     * @return $this
     */
    public function withId(array $id)
    {
        $this->data['Id'] = $id;
        foreach ($id as $i => $iValue) {
            $this->options['query']['Id.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getRestVersion()
 * @method $this withRestVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getAlertTemplates()
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class ModifyMetricRuleTemplate extends Rpc
{

    /**
     * @param array $alertTemplates
     *
     * @return $this
     */
    public function withAlertTemplates(array $alertTemplates)
    {
        $this->data['AlertTemplates'] = $alertTemplates;
        foreach ($alertTemplates as $depth1 => $depth1Value) {
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Selector'] = $depth1Value['Selector'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
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
class ApplyMetricRuleTemplate extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DescribeMetricRuleTemplateAttribute extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getAlertTemplates()
 */
class CreateMetricRuleTemplate extends Rpc
{

    /**
     * @param array $alertTemplates
     *
     * @return $this
     */
    public function withAlertTemplates(array $alertTemplates)
    {
        $this->data['AlertTemplates'] = $alertTemplates;
        foreach ($alertTemplates as $depth1 => $depth1Value) {
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Selector'] = $depth1Value['Selector'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
            $this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
        }

        return $this;
    }
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteMetricRuleTemplate extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHistory()
 * @method $this withHistory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMetricRuleTemplateList extends Rpc
{
}

/**
 * @method array getEventInfo()
 */
class PutCustomEvent extends Rpc
{

    /**
     * @param array $eventInfo
     *
     * @return $this
     */
    public function withEventInfo(array $eventInfo)
    {
        $this->data['EventInfo'] = $eventInfo;
        foreach ($eventInfo as $depth1 => $depth1Value) {
            $this->options['query']['EventInfo.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
            $this->options['query']['EventInfo.' . ($depth1 + 1) . '.Time'] = $depth1Value['Time'];
            $this->options['query']['EventInfo.' . ($depth1 + 1) . '.EventName'] = $depth1Value['EventName'];
            $this->options['query']['EventInfo.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
        }

        return $this;
    }
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 */
class DescribeCustomEventCount extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCustomEventAttribute extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 */
class DescribeCustomEventHistogram extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class DescribeCustomMetricList extends Rpc
{
}

/**
 * @method array getMetricList()
 */
class PutCustomMetric extends Rpc
{

    /**
     * @param array $metricList
     *
     * @return $this
     */
    public function withMetricList(array $metricList)
    {
        $this->data['MetricList'] = $metricList;
        foreach ($metricList as $depth1 => $depth1Value) {
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.Values'] = $depth1Value['Values'];
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.Time'] = $depth1Value['Time'];
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['MetricList.' . ($depth1 + 1) . '.Dimensions'] = $depth1Value['Dimensions'];
        }

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeEventRuleAttribute extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 */
class DeleteContactGroup extends Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeContactList extends Rpc
{
}

/**
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 */
class DescribeContactListByContactGroup extends Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 */
class DeleteContact extends Rpc
{
}

/**
 * @method string getDescribe()
 * @method $this withDescribe($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method array getContactNames()
 */
class PutContactGroup extends Rpc
{

    /**
     * @param array $contactNames
     *
     * @return $this
     */
    public function withContactNames(array $contactNames)
    {
        $this->data['ContactNames'] = $contactNames;
        foreach ($contactNames as $i => $iValue) {
            $this->options['query']['ContactNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getChannelsMail()
 * @method string getChannelsAliIM()
 * @method string getChannelsDingWebHook()
 * @method string getDescribe()
 * @method $this withDescribe($value)
 * @method string getChannelsSMS()
 */
class PutContact extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelsMail($value)
    {
        $this->data['ChannelsMail'] = $value;
        $this->options['query']['Channels.Mail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelsAliIM($value)
    {
        $this->data['ChannelsAliIM'] = $value;
        $this->options['query']['Channels.AliIM'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelsDingWebHook($value)
    {
        $this->data['ChannelsDingWebHook'] = $value;
        $this->options['query']['Channels.DingWebHook'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelsSMS($value)
    {
        $this->data['ChannelsSMS'] = $value;
        $this->options['query']['Channels.SMS'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeContactGroupList extends Rpc
{
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
class PutEventRuleTargets extends Rpc
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
 * @method array getIds()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DeleteEventRuleTargets extends Rpc
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
 */
class DisableEventRules extends Rpc
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
class DescribeEventRuleTargetList extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method array getRuleNames()
 */
class DeleteEventRules extends Rpc
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
 * @method array getRuleNames()
 */
class EnableEventRules extends Rpc
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
 * @method array getEventPattern()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeEventRuleList extends Rpc
{

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSystemEventAttribute extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSystemEventHistogram extends Rpc
{
}

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSystemEventCount extends Rpc
{
}

class DescribeSystemEventMetaList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeMonitoringAgentProcesses extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UninstallMonitoringAgent extends Rpc
{
}

class DescribeMonitoringAgentAccessKey extends Rpc
{
}

/**
 * @method array getInstanceIds()
 * @method string getForce()
 * @method $this withForce($value)
 */
class InstallMonitoringAgent extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getProcessUser()
 * @method $this withProcessUser($value)
 */
class CreateMonitoringAgentProcess extends Rpc
{
}

class DescribeMonitoringAgentConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 */
class DeleteMonitoringAgentProcess extends Rpc
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
 * @method string getSerialNumbers()
 * @method $this withSerialNumbers($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMonitoringAgentHosts extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSiteMonitorData extends Rpc
{
}

/**
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getIspCities()
 * @method $this withIspCities($value)
 */
class ModifySiteMonitor extends Rpc
{
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 */
class DescribeSiteMonitorISPCityList extends Rpc
{
}

class DescribeSiteMonitorQuota extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSiteMonitorStatistics extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class EnableSiteMonitors extends Rpc
{
}

/**
 * @method string getIncludeAlert()
 * @method $this withIncludeAlert($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSiteMonitorAttribute extends Rpc
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
class DescribeSiteMonitorList extends Rpc
{
}

/**
 * @method string getIsDeleteAlarms()
 * @method $this withIsDeleteAlarms($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class DeleteSiteMonitors extends Rpc
{
}

/**
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class DisableSiteMonitors extends Rpc
{
}

/**
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getIspCities()
 * @method $this withIspCities($value)
 */
class CreateSiteMonitor extends Rpc
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
class DescribeProjectMeta extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricList extends Rpc
{
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 */
class DescribeMetricMetaList extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderby()
 * @method $this withOrderby($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getOrderDesc()
 * @method $this withOrderDesc($value)
 */
class DescribeMetricTop extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricData extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricLast extends Rpc
{
}

/**
 * @method array getId()
 */
class EnableHostAvailability extends Rpc
{

    /**
     * @param array $id
     *
     * @return $this
     */
    public function withId(array $id)
    {
        $this->data['Id'] = $id;
        foreach ($id as $i => $iValue) {
            $this->options['query']['Id.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getInstanceList()
 * @method string getTaskOptionHttpMethod()
 * @method array getAlertConfigEscalationList()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getAlertConfigSilenceTime()
 * @method string getTaskOptionHttpResponseCharset()
 * @method string getAlertConfigEndTime()
 * @method string getTaskOptionHttpURI()
 * @method string getTaskOptionHttpNegative()
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getAlertConfigNotifyType()
 * @method string getAlertConfigStartTime()
 * @method string getTaskOptionTelnetOrPingHost()
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConfigWebHook()
 */
class ModifyHostAvailability extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpMethod($value)
    {
        $this->data['TaskOptionHttpMethod'] = $value;
        $this->options['query']['TaskOption.HttpMethod'] = $value;

        return $this;
    }

    /**
     * @param array $alertConfigEscalationList
     *
     * @return $this
     */
    public function withAlertConfigEscalationList(array $alertConfigEscalationList)
    {
        $this->data['AlertConfigEscalationList'] = $alertConfigEscalationList;
        foreach ($alertConfigEscalationList as $depth1 => $depth1Value) {
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Aggregate'] = $depth1Value['Aggregate'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigSilenceTime($value)
    {
        $this->data['AlertConfigSilenceTime'] = $value;
        $this->options['query']['AlertConfig.SilenceTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpResponseCharset($value)
    {
        $this->data['TaskOptionHttpResponseCharset'] = $value;
        $this->options['query']['TaskOption.HttpResponseCharset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigEndTime($value)
    {
        $this->data['AlertConfigEndTime'] = $value;
        $this->options['query']['AlertConfig.EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpURI($value)
    {
        $this->data['TaskOptionHttpURI'] = $value;
        $this->options['query']['TaskOption.HttpURI'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpNegative($value)
    {
        $this->data['TaskOptionHttpNegative'] = $value;
        $this->options['query']['TaskOption.HttpNegative'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigNotifyType($value)
    {
        $this->data['AlertConfigNotifyType'] = $value;
        $this->options['query']['AlertConfig.NotifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigStartTime($value)
    {
        $this->data['AlertConfigStartTime'] = $value;
        $this->options['query']['AlertConfig.StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionTelnetOrPingHost($value)
    {
        $this->data['TaskOptionTelnetOrPingHost'] = $value;
        $this->options['query']['TaskOption.TelnetOrPingHost'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpResponseMatchContent($value)
    {
        $this->data['TaskOptionHttpResponseMatchContent'] = $value;
        $this->options['query']['TaskOption.HttpResponseMatchContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigWebHook($value)
    {
        $this->data['AlertConfigWebHook'] = $value;
        $this->options['query']['AlertConfig.WebHook'] = $value;

        return $this;
    }
}

/**
 * @method array getId()
 */
class DisableHostAvailability extends Rpc
{

    /**
     * @param array $id
     *
     * @return $this
     */
    public function withId(array $id)
    {
        $this->data['Id'] = $id;
        foreach ($id as $i => $iValue) {
            $this->options['query']['Id.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getId()
 */
class DescribeUnhealthyHostAvailability extends Rpc
{

    /**
     * @param array $id
     *
     * @return $this
     */
    public function withId(array $id)
    {
        $this->data['Id'] = $id;
        foreach ($id as $i => $iValue) {
            $this->options['query']['Id.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getInstanceList()
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskOptionHttpMethod()
 * @method array getAlertConfigEscalationList()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getAlertConfigSilenceTime()
 * @method string getTaskOptionHttpResponseCharset()
 * @method string getAlertConfigEndTime()
 * @method string getTaskOptionHttpURI()
 * @method string getTaskOptionHttpNegative()
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getAlertConfigNotifyType()
 * @method string getAlertConfigStartTime()
 * @method string getTaskOptionTelnetOrPingHost()
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method string getAlertConfigWebHook()
 */
class CreateHostAvailability extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpMethod($value)
    {
        $this->data['TaskOptionHttpMethod'] = $value;
        $this->options['query']['TaskOption.HttpMethod'] = $value;

        return $this;
    }

    /**
     * @param array $alertConfigEscalationList
     *
     * @return $this
     */
    public function withAlertConfigEscalationList(array $alertConfigEscalationList)
    {
        $this->data['AlertConfigEscalationList'] = $alertConfigEscalationList;
        foreach ($alertConfigEscalationList as $depth1 => $depth1Value) {
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
            $this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Aggregate'] = $depth1Value['Aggregate'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigSilenceTime($value)
    {
        $this->data['AlertConfigSilenceTime'] = $value;
        $this->options['query']['AlertConfig.SilenceTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpResponseCharset($value)
    {
        $this->data['TaskOptionHttpResponseCharset'] = $value;
        $this->options['query']['TaskOption.HttpResponseCharset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigEndTime($value)
    {
        $this->data['AlertConfigEndTime'] = $value;
        $this->options['query']['AlertConfig.EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpURI($value)
    {
        $this->data['TaskOptionHttpURI'] = $value;
        $this->options['query']['TaskOption.HttpURI'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpNegative($value)
    {
        $this->data['TaskOptionHttpNegative'] = $value;
        $this->options['query']['TaskOption.HttpNegative'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigNotifyType($value)
    {
        $this->data['AlertConfigNotifyType'] = $value;
        $this->options['query']['AlertConfig.NotifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigStartTime($value)
    {
        $this->data['AlertConfigStartTime'] = $value;
        $this->options['query']['AlertConfig.StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionTelnetOrPingHost($value)
    {
        $this->data['TaskOptionTelnetOrPingHost'] = $value;
        $this->options['query']['TaskOption.TelnetOrPingHost'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpResponseMatchContent($value)
    {
        $this->data['TaskOptionHttpResponseMatchContent'] = $value;
        $this->options['query']['TaskOption.HttpResponseMatchContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlertConfigWebHook($value)
    {
        $this->data['AlertConfigWebHook'] = $value;
        $this->options['query']['AlertConfig.WebHook'] = $value;

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
class DescribeHostAvailabilityList extends Rpc
{
}

/**
 * @method array getId()
 */
class DeleteHostAvailability extends Rpc
{

    /**
     * @param array $id
     *
     * @return $this
     */
    public function withId(array $id)
    {
        $this->data['Id'] = $id;
        foreach ($id as $i => $iValue) {
            $this->options['query']['Id.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

class DescribeMonitoringConfig extends Rpc
{
}

/**
 * @method string getEnableInstallAgentNewECS()
 * @method $this withEnableInstallAgentNewECS($value)
 * @method string getAutoInstall()
 * @method $this withAutoInstall($value)
 */
class PutMonitoringConfig extends Rpc
{
}
