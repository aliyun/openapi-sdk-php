<?php

namespace AlibabaCloud\Cms\V20190101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddTags addTags(array $options = [])
 * @method ApplyMetricRuleTemplate applyMetricRuleTemplate(array $options = [])
 * @method CreateCmsCallNumOrder createCmsCallNumOrder(array $options = [])
 * @method CreateCmsOrder createCmsOrder(array $options = [])
 * @method CreateCmsSmspackageOrder createCmsSmspackageOrder(array $options = [])
 * @method CreateDynamicTagGroup createDynamicTagGroup(array $options = [])
 * @method CreateGroupMetricRules createGroupMetricRules(array $options = [])
 * @method CreateGroupMonitoringAgentProcess createGroupMonitoringAgentProcess(array $options = [])
 * @method CreateHostAvailability createHostAvailability(array $options = [])
 * @method CreateInstantSiteMonitor createInstantSiteMonitor(array $options = [])
 * @method CreateMetricRuleResources createMetricRuleResources(array $options = [])
 * @method CreateMetricRuleTemplate createMetricRuleTemplate(array $options = [])
 * @method CreateMonitorAgentProcess createMonitorAgentProcess(array $options = [])
 * @method CreateMonitorGroup createMonitorGroup(array $options = [])
 * @method CreateMonitorGroupByResourceGroupId createMonitorGroupByResourceGroupId(array $options = [])
 * @method CreateMonitorGroupInstances createMonitorGroupInstances(array $options = [])
 * @method CreateMonitorGroupNotifyPolicy createMonitorGroupNotifyPolicy(array $options = [])
 * @method CreateMonitoringAgentProcess createMonitoringAgentProcess(array $options = [])
 * @method CreateSiteMonitor createSiteMonitor(array $options = [])
 * @method DeleteContact deleteContact(array $options = [])
 * @method DeleteContactGroup deleteContactGroup(array $options = [])
 * @method DeleteCustomMetric deleteCustomMetric(array $options = [])
 * @method DeleteDynamicTagGroup deleteDynamicTagGroup(array $options = [])
 * @method DeleteEventRules deleteEventRules(array $options = [])
 * @method DeleteEventRuleTargets deleteEventRuleTargets(array $options = [])
 * @method DeleteExporterOutput deleteExporterOutput(array $options = [])
 * @method DeleteExporterRule deleteExporterRule(array $options = [])
 * @method DeleteGroupMonitoringAgentProcess deleteGroupMonitoringAgentProcess(array $options = [])
 * @method DeleteHostAvailability deleteHostAvailability(array $options = [])
 * @method DeleteLogMonitor deleteLogMonitor(array $options = [])
 * @method DeleteMetricRuleResources deleteMetricRuleResources(array $options = [])
 * @method DeleteMetricRules deleteMetricRules(array $options = [])
 * @method DeleteMetricRuleTargets deleteMetricRuleTargets(array $options = [])
 * @method DeleteMetricRuleTemplate deleteMetricRuleTemplate(array $options = [])
 * @method DeleteMonitorGroup deleteMonitorGroup(array $options = [])
 * @method DeleteMonitorGroupDynamicRule deleteMonitorGroupDynamicRule(array $options = [])
 * @method DeleteMonitorGroupInstances deleteMonitorGroupInstances(array $options = [])
 * @method DeleteMonitorGroupNotifyPolicy deleteMonitorGroupNotifyPolicy(array $options = [])
 * @method DeleteMonitoringAgentProcess deleteMonitoringAgentProcess(array $options = [])
 * @method DeleteSiteMonitors deleteSiteMonitors(array $options = [])
 * @method DescribeActiveMetricRuleList describeActiveMetricRuleList(array $options = [])
 * @method DescribeAlertHistoryList describeAlertHistoryList(array $options = [])
 * @method DescribeAlertingMetricRuleResources describeAlertingMetricRuleResources(array $options = [])
 * @method DescribeAlertLogCount describeAlertLogCount(array $options = [])
 * @method DescribeAlertLogHistogram describeAlertLogHistogram(array $options = [])
 * @method DescribeAlertLogList describeAlertLogList(array $options = [])
 * @method DescribeContactGroupList describeContactGroupList(array $options = [])
 * @method DescribeContactList describeContactList(array $options = [])
 * @method DescribeContactListByContactGroup describeContactListByContactGroup(array $options = [])
 * @method DescribeCustomEventAttribute describeCustomEventAttribute(array $options = [])
 * @method DescribeCustomEventCount describeCustomEventCount(array $options = [])
 * @method DescribeCustomEventHistogram describeCustomEventHistogram(array $options = [])
 * @method DescribeCustomMetricList describeCustomMetricList(array $options = [])
 * @method DescribeDynamicTagRuleList describeDynamicTagRuleList(array $options = [])
 * @method DescribeEventRuleAttribute describeEventRuleAttribute(array $options = [])
 * @method DescribeEventRuleList describeEventRuleList(array $options = [])
 * @method DescribeEventRuleTargetList describeEventRuleTargetList(array $options = [])
 * @method DescribeExporterOutputList describeExporterOutputList(array $options = [])
 * @method DescribeExporterRuleList describeExporterRuleList(array $options = [])
 * @method DescribeGroupMonitoringAgentProcess describeGroupMonitoringAgentProcess(array $options = [])
 * @method DescribeHostAvailabilityList describeHostAvailabilityList(array $options = [])
 * @method DescribeLogMonitorAttribute describeLogMonitorAttribute(array $options = [])
 * @method DescribeLogMonitorList describeLogMonitorList(array $options = [])
 * @method DescribeMetricData describeMetricData(array $options = [])
 * @method DescribeMetricLast describeMetricLast(array $options = [])
 * @method DescribeMetricList describeMetricList(array $options = [])
 * @method DescribeMetricMetaList describeMetricMetaList(array $options = [])
 * @method DescribeMetricRuleCount describeMetricRuleCount(array $options = [])
 * @method DescribeMetricRuleList describeMetricRuleList(array $options = [])
 * @method DescribeMetricRuleTargets describeMetricRuleTargets(array $options = [])
 * @method DescribeMetricRuleTemplateAttribute describeMetricRuleTemplateAttribute(array $options = [])
 * @method DescribeMetricRuleTemplateList describeMetricRuleTemplateList(array $options = [])
 * @method DescribeMetricTop describeMetricTop(array $options = [])
 * @method DescribeMonitorGroupCategories describeMonitorGroupCategories(array $options = [])
 * @method DescribeMonitorGroupDynamicRules describeMonitorGroupDynamicRules(array $options = [])
 * @method DescribeMonitorGroupInstanceAttribute describeMonitorGroupInstanceAttribute(array $options = [])
 * @method DescribeMonitorGroupInstances describeMonitorGroupInstances(array $options = [])
 * @method DescribeMonitorGroupNotifyPolicyList describeMonitorGroupNotifyPolicyList(array $options = [])
 * @method DescribeMonitorGroups describeMonitorGroups(array $options = [])
 * @method DescribeMonitoringAgentAccessKey describeMonitoringAgentAccessKey(array $options = [])
 * @method DescribeMonitoringAgentConfig describeMonitoringAgentConfig(array $options = [])
 * @method DescribeMonitoringAgentHosts describeMonitoringAgentHosts(array $options = [])
 * @method DescribeMonitoringAgentProcesses describeMonitoringAgentProcesses(array $options = [])
 * @method DescribeMonitoringAgentStatuses describeMonitoringAgentStatuses(array $options = [])
 * @method DescribeMonitoringConfig describeMonitoringConfig(array $options = [])
 * @method DescribeMonitorResourceQuotaAttribute describeMonitorResourceQuotaAttribute(array $options = [])
 * @method DescribeProductResourceTagKeyList describeProductResourceTagKeyList(array $options = [])
 * @method DescribeProductsOfActiveMetricRule describeProductsOfActiveMetricRule(array $options = [])
 * @method DescribeProjectMeta describeProjectMeta(array $options = [])
 * @method DescribeSiteMonitorAttribute describeSiteMonitorAttribute(array $options = [])
 * @method DescribeSiteMonitorData describeSiteMonitorData(array $options = [])
 * @method DescribeSiteMonitorISPCityList describeSiteMonitorISPCityList(array $options = [])
 * @method DescribeSiteMonitorList describeSiteMonitorList(array $options = [])
 * @method DescribeSiteMonitorLog describeSiteMonitorLog(array $options = [])
 * @method DescribeSiteMonitorQuota describeSiteMonitorQuota(array $options = [])
 * @method DescribeSiteMonitorStatistics describeSiteMonitorStatistics(array $options = [])
 * @method DescribeSystemEventAttribute describeSystemEventAttribute(array $options = [])
 * @method DescribeSystemEventCount describeSystemEventCount(array $options = [])
 * @method DescribeSystemEventHistogram describeSystemEventHistogram(array $options = [])
 * @method DescribeSystemEventMetaList describeSystemEventMetaList(array $options = [])
 * @method DescribeTagKeyList describeTagKeyList(array $options = [])
 * @method DescribeTagValueList describeTagValueList(array $options = [])
 * @method DescribeUnhealthyHostAvailability describeUnhealthyHostAvailability(array $options = [])
 * @method DisableActiveMetricRule disableActiveMetricRule(array $options = [])
 * @method DisableEventRules disableEventRules(array $options = [])
 * @method DisableHostAvailability disableHostAvailability(array $options = [])
 * @method DisableMetricRules disableMetricRules(array $options = [])
 * @method DisableSiteMonitors disableSiteMonitors(array $options = [])
 * @method EnableActiveMetricRule enableActiveMetricRule(array $options = [])
 * @method EnableEventRules enableEventRules(array $options = [])
 * @method EnableHostAvailability enableHostAvailability(array $options = [])
 * @method EnableMetricRules enableMetricRules(array $options = [])
 * @method EnableSiteMonitors enableSiteMonitors(array $options = [])
 * @method InstallMonitoringAgent installMonitoringAgent(array $options = [])
 * @method ModifyGroupMonitoringAgentProcess modifyGroupMonitoringAgentProcess(array $options = [])
 * @method ModifyHostAvailability modifyHostAvailability(array $options = [])
 * @method ModifyHostInfo modifyHostInfo(array $options = [])
 * @method ModifyMetricRuleTemplate modifyMetricRuleTemplate(array $options = [])
 * @method ModifyMonitorGroup modifyMonitorGroup(array $options = [])
 * @method ModifyMonitorGroupInstances modifyMonitorGroupInstances(array $options = [])
 * @method ModifySiteMonitor modifySiteMonitor(array $options = [])
 * @method OpenCmsService openCmsService(array $options = [])
 * @method PutContact putContact(array $options = [])
 * @method PutContactGroup putContactGroup(array $options = [])
 * @method PutCustomEvent putCustomEvent(array $options = [])
 * @method PutCustomEventRule putCustomEventRule(array $options = [])
 * @method PutCustomMetric putCustomMetric(array $options = [])
 * @method PutCustomMetricRule putCustomMetricRule(array $options = [])
 * @method PutEventRule putEventRule(array $options = [])
 * @method PutEventRuleTargets putEventRuleTargets(array $options = [])
 * @method PutExporterOutput putExporterOutput(array $options = [])
 * @method PutExporterRule putExporterRule(array $options = [])
 * @method PutGroupMetricRule putGroupMetricRule(array $options = [])
 * @method PutHybridMonitorMetricData putHybridMonitorMetricData(array $options = [])
 * @method PutLogMonitor putLogMonitor(array $options = [])
 * @method PutMetricRuleTargets putMetricRuleTargets(array $options = [])
 * @method PutMonitorGroupDynamicRule putMonitorGroupDynamicRule(array $options = [])
 * @method PutMonitoringConfig putMonitoringConfig(array $options = [])
 * @method PutResourceMetricRule putResourceMetricRule(array $options = [])
 * @method PutResourceMetricRules putResourceMetricRules(array $options = [])
 * @method RemoveTags removeTags(array $options = [])
 * @method SendDryRunSystemEvent sendDryRunSystemEvent(array $options = [])
 * @method UninstallMonitoringAgent uninstallMonitoringAgent(array $options = [])
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
 * @method array getGroupIds()
 * @method array getTag()
 */
class AddTags extends Rpc
{

    /**
     * @param array $groupIds
     *
     * @return $this
     */
	public function withGroupIds(array $groupIds)
	{
	    $this->data['GroupIds'] = $groupIds;
		foreach ($groupIds as $i => $iValue) {
			$this->options['query']['GroupIds.' . ($i + 1)] = $iValue;
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
 * @method string getEnableStartTime()
 * @method $this withEnableStartTime($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 */
class ApplyMetricRuleTemplate extends Rpc
{
}

/**
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getPhoneCount()
 * @method $this withPhoneCount($value)
 */
class CreateCmsCallNumOrder extends Rpc
{
}

/**
 * @method string getSmsCount()
 * @method $this withSmsCount($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getLogMonitorStream()
 * @method $this withLogMonitorStream($value)
 * @method string getCustomTimeSeries()
 * @method $this withCustomTimeSeries($value)
 * @method string getApiCount()
 * @method $this withApiCount($value)
 * @method string getPhoneCount()
 * @method $this withPhoneCount($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getSuggestType()
 * @method $this withSuggestType($value)
 * @method string getEventStoreNum()
 * @method $this withEventStoreNum($value)
 * @method string getSiteTaskNum()
 * @method $this withSiteTaskNum($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getSiteOperatorNum()
 * @method $this withSiteOperatorNum($value)
 * @method string getSiteEcsNum()
 * @method $this withSiteEcsNum($value)
 * @method string getEventStoreTime()
 * @method $this withEventStoreTime($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateCmsOrder extends Rpc
{
}

/**
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getSmsCount()
 * @method $this withSmsCount($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 */
class CreateCmsSmspackageOrder extends Rpc
{
}

/**
 * @method string getEnableSubscribeEvent()
 * @method $this withEnableSubscribeEvent($value)
 * @method string getMatchExpressFilterRelation()
 * @method $this withMatchExpressFilterRelation($value)
 * @method string getEnableInstallAgent()
 * @method $this withEnableInstallAgent($value)
 * @method array getMatchExpress()
 * @method array getContactGroupList()
 * @method array getTemplateIdList()
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getTagRegionId()
 * @method $this withTagRegionId($value)
 */
class CreateDynamicTagGroup extends Rpc
{

    /**
     * @param array $matchExpress
     *
     * @return $this
     */
	public function withMatchExpress(array $matchExpress)
	{
	    $this->data['MatchExpress'] = $matchExpress;
		foreach ($matchExpress as $depth1 => $depth1Value) {
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['MatchExpress.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
			if(isset($depth1Value['TagValueMatchFunction'])){
				$this->options['query']['MatchExpress.' . ($depth1 + 1) . '.TagValueMatchFunction'] = $depth1Value['TagValueMatchFunction'];
			}
		}

		return $this;
    }

    /**
     * @param array $contactGroupList
     *
     * @return $this
     */
	public function withContactGroupList(array $contactGroupList)
	{
	    $this->data['ContactGroupList'] = $contactGroupList;
		foreach ($contactGroupList as $i => $iValue) {
			$this->options['query']['ContactGroupList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $templateIdList
     *
     * @return $this
     */
	public function withTemplateIdList(array $templateIdList)
	{
	    $this->data['TemplateIdList'] = $templateIdList;
		foreach ($templateIdList as $i => $iValue) {
			$this->options['query']['TemplateIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
			if(isset($depth1Value['Webhook'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
			}
			if(isset($depth1Value['EscalationsWarnComparisonOperator'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
			}
			if(isset($depth1Value['RuleName'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
			}
			if(isset($depth1Value['EscalationsInfoStatistics'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
			}
			if(isset($depth1Value['EffectiveInterval'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.EffectiveInterval'] = $depth1Value['EffectiveInterval'];
			}
			if(isset($depth1Value['EscalationsInfoComparisonOperator'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
			}
			if(isset($depth1Value['NoDataPolicy'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.NoDataPolicy'] = $depth1Value['NoDataPolicy'];
			}
			if(isset($depth1Value['NoEffectiveInterval'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.NoEffectiveInterval'] = $depth1Value['NoEffectiveInterval'];
			}
			if(isset($depth1Value['EmailSubject'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.EmailSubject'] = $depth1Value['EmailSubject'];
			}
			if(isset($depth1Value['SilenceTime'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.SilenceTime'] = $depth1Value['SilenceTime'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['EscalationsWarnTimes'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
			}
			if(isset($depth1Value['CompositeExpression'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.CompositeExpression'] = $depth1Value['CompositeExpression'];
			}
			if(isset($depth1Value['EscalationsWarnThreshold'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
			}
			if(isset($depth1Value['Period'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['EscalationsCriticalStatistics'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
			}
			if(isset($depth1Value['EscalationsInfoTimes'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
			}
			if(isset($depth1Value['EscalationsCriticalTimes'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
			}
			if(isset($depth1Value['EscalationsInfoThreshold'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
			}
			if(isset($depth1Value['EscalationsWarnStatistics'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
			}
			if(isset($depth1Value['Namespace'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
			}
			if(isset($depth1Value['Interval'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
			}
			if(isset($depth1Value['RuleId'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.RuleId'] = $depth1Value['RuleId'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['EscalationsCriticalComparisonOperator'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsCriticalThreshold'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
			}
			if(isset($depth1Value['Dimensions'])){
				$this->options['query']['GroupMetricRules.' . ($depth1 + 1) . '.Dimensions'] = $depth1Value['Dimensions'];
			}
		}

		return $this;
    }
}

/**
 * @method array getAlertConfig()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getMatchExpressFilterRelation()
 * @method $this withMatchExpressFilterRelation($value)
 * @method array getMatchExpress()
 */
class CreateGroupMonitoringAgentProcess extends Rpc
{

    /**
     * @param array $alertConfig
     *
     * @return $this
     */
	public function withAlertConfig(array $alertConfig)
	{
	    $this->data['AlertConfig'] = $alertConfig;
		foreach ($alertConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['Times'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
			}
			if(isset($depth1Value['NoEffectiveInterval'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.NoEffectiveInterval'] = $depth1Value['NoEffectiveInterval'];
			}
			if(isset($depth1Value['Webhook'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
			}
			if(isset($depth1Value['SilenceTime'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.SilenceTime'] = $depth1Value['SilenceTime'];
			}
			if(isset($depth1Value['Threshold'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
			}
			if(isset($depth1Value['EffectiveInterval'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.EffectiveInterval'] = $depth1Value['EffectiveInterval'];
			}
			if(isset($depth1Value['ComparisonOperator'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsLevel'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.EscalationsLevel'] = $depth1Value['EscalationsLevel'];
			}
			if(isset($depth1Value['Statistics'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
			}
		}

		return $this;
    }

    /**
     * @param array $matchExpress
     *
     * @return $this
     */
	public function withMatchExpress(array $matchExpress)
	{
	    $this->data['MatchExpress'] = $matchExpress;
		foreach ($matchExpress as $depth1 => $depth1Value) {
			if(isset($depth1Value['Function'])){
				$this->options['query']['MatchExpress.' . ($depth1 + 1) . '.Function'] = $depth1Value['Function'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['MatchExpress.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['MatchExpress.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTaskOptionHttpMethod()
 * @method string getTaskOptionHttpHeader()
 * @method array getAlertConfigEscalationList()
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getAlertConfigSilenceTime()
 * @method string getTaskOptionHttpResponseCharset()
 * @method string getTaskOptionHttpNegative()
 * @method string getTaskOptionInterval()
 * @method string getAlertConfigNotifyType()
 * @method string getTaskOptionTelnetOrPingHost()
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method array getInstanceList()
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAlertConfigEndTime()
 * @method string getTaskOptionHttpURI()
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getTaskOptionHttpPostContent()
 * @method string getAlertConfigStartTime()
 * @method string getAlertConfigWebHook()
 */
class CreateHostAvailability extends Rpc
{

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
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpHeader($value)
    {
        $this->data['TaskOptionHttpHeader'] = $value;
        $this->options['query']['TaskOption.HttpHeader'] = $value;

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
			if(isset($depth1Value['Times'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Operator'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
			}
			if(isset($depth1Value['Aggregate'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Aggregate'] = $depth1Value['Aggregate'];
			}
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
    public function withTaskOptionInterval($value)
    {
        $this->data['TaskOptionInterval'] = $value;
        $this->options['query']['TaskOption.Interval'] = $value;

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
    public function withTaskOptionHttpPostContent($value)
    {
        $this->data['TaskOptionHttpPostContent'] = $value;
        $this->options['query']['TaskOption.HttpPostContent'] = $value;

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
    public function withAlertConfigWebHook($value)
    {
        $this->data['AlertConfigWebHook'] = $value;
        $this->options['query']['AlertConfig.WebHook'] = $value;

        return $this;
    }
}

/**
 * @method string getRandomIspCity()
 * @method $this withRandomIspCity($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getIspCities()
 * @method $this withIspCities($value)
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 */
class CreateInstantSiteMonitor extends Rpc
{
}

/**
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getOverwrite()
 * @method $this withOverwrite($value)
 */
class CreateMetricRuleResources extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
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
			if(isset($depth1Value['Period'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['EscalationsWarnThreshold'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
			}
			if(isset($depth1Value['Webhook'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
			}
			if(isset($depth1Value['EscalationsWarnComparisonOperator'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsCriticalStatistics'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
			}
			if(isset($depth1Value['EscalationsInfoTimes'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
			}
			if(isset($depth1Value['RuleName'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
			}
			if(isset($depth1Value['EscalationsInfoStatistics'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
			}
			if(isset($depth1Value['EscalationsCriticalTimes'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
			}
			if(isset($depth1Value['EscalationsInfoComparisonOperator'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsWarnStatistics'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
			}
			if(isset($depth1Value['EscalationsInfoThreshold'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
			}
			if(isset($depth1Value['Namespace'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
			}
			if(isset($depth1Value['Selector'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Selector'] = $depth1Value['Selector'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['EscalationsCriticalComparisonOperator'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsWarnTimes'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
			}
			if(isset($depth1Value['EscalationsCriticalThreshold'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessUser()
 * @method $this withProcessUser($value)
 */
class CreateMonitorAgentProcess extends Rpc
{
}

/**
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getOptions()
 * @method $this withOptions($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getBindUrl()
 * @method $this withBindUrl($value)
 */
class CreateMonitorGroup extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getEnableSubscribeEvent()
 * @method $this withEnableSubscribeEvent($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEnableInstallAgent()
 * @method $this withEnableInstallAgent($value)
 * @method array getContactGroupList()
 */
class CreateMonitorGroupByResourceGroupId extends Rpc
{

    /**
     * @param array $contactGroupList
     *
     * @return $this
     */
	public function withContactGroupList(array $contactGroupList)
	{
	    $this->data['ContactGroupList'] = $contactGroupList;
		foreach ($contactGroupList as $i => $iValue) {
			$this->options['query']['ContactGroupList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
			if(isset($depth1Value['InstanceId'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['InstanceName'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
			}
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
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
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessUser()
 * @method $this withProcessUser($value)
 */
class CreateMonitoringAgentProcess extends Rpc
{
}

/**
 * @method string getReportProject()
 * @method $this withReportProject($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getIspCities()
 * @method $this withIspCities($value)
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 * @method string getIntervalUnit()
 * @method $this withIntervalUnit($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class CreateSiteMonitor extends Rpc
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
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 */
class DeleteContactGroup extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUUID()
 * @method $this withUUID($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class DeleteCustomMetric extends Rpc
{
}

/**
 * @method string getDynamicTagRuleId()
 * @method $this withDynamicTagRuleId($value)
 */
class DeleteDynamicTagGroup extends Rpc
{
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
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getIds()
 */
class DeleteEventRuleTargets extends Rpc
{

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
 * @method string getDestName()
 * @method $this withDestName($value)
 */
class DeleteExporterOutput extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DeleteExporterRule extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteGroupMonitoringAgentProcess extends Rpc
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

/**
 * @method string getLogId()
 * @method $this withLogId($value)
 */
class DeleteLogMonitor extends Rpc
{
}

/**
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteMetricRuleResources extends Rpc
{
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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteMetricRuleTemplate extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteMonitorGroupDynamicRule extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteMonitorGroupInstances extends Rpc
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
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 */
class DeleteMonitoringAgentProcess extends Rpc
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
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class DescribeActiveMetricRuleList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAlertHistoryList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeAlertingMetricRuleResources extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSendStatus()
 * @method $this withSendStatus($value)
 * @method string getContactGroup()
 * @method $this withContactGroup($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLastMin()
 * @method $this withLastMin($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeAlertLogCount extends Rpc
{
}

/**
 * @method string getSendStatus()
 * @method $this withSendStatus($value)
 * @method string getContactGroup()
 * @method $this withContactGroup($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLastMin()
 * @method $this withLastMin($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeAlertLogHistogram extends Rpc
{
}

/**
 * @method string getSendStatus()
 * @method $this withSendStatus($value)
 * @method string getContactGroup()
 * @method $this withContactGroup($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLastMin()
 * @method $this withLastMin($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DescribeAlertLogList extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeContactGroupList extends Rpc
{
}

/**
 * @method string getChanelType()
 * @method $this withChanelType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChanelValue()
 * @method $this withChanelValue($value)
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
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeCustomEventAttribute extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getName()
 * @method $this withName($value)
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeCustomEventHistogram extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class DescribeCustomMetricList extends Rpc
{
}

/**
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 * @method string getTagRegionId()
 * @method $this withTagRegionId($value)
 */
class DescribeDynamicTagRuleList extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeEventRuleAttribute extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 */
class DescribeEventRuleList extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 */
class DescribeEventRuleTargetList extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeExporterOutputList extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeExporterRuleList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeGroupMonitoringAgentProcess extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeHostAvailabilityList extends Rpc
{
}

/**
 * @method string getMetricName()
 * @method $this withMetricName($value)
 */
class DescribeLogMonitorAttribute extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchValue()
 * @method $this withSearchValue($value)
 */
class DescribeLogMonitorList extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricData extends Rpc
{
}

/**
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricLast extends Rpc
{
}

/**
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricList extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 */
class DescribeMetricMetaList extends Rpc
{
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
 * @method string getEnableState()
 * @method $this withEnableState($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAlertState()
 * @method $this withAlertState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricRuleList extends Rpc
{
}

/**
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeMetricRuleTargets extends Rpc
{
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeMetricRuleTemplateAttribute extends Rpc
{
}

/**
 * @method string getHistory()
 * @method $this withHistory($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeMetricRuleTemplateList extends Rpc
{
}

/**
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderby()
 * @method $this withOrderby($value)
 * @method string getOrderDesc()
 * @method $this withOrderDesc($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeMetricTop extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeMonitorGroupDynamicRules extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeMonitorGroupInstanceAttribute extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeMonitorGroupInstances extends Rpc
{
}

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeMonitorGroupNotifyPolicyList extends Rpc
{
}

/**
 * @method string getSelectContactGroups()
 * @method $this withSelectContactGroups($value)
 * @method string getIncludeTemplateHistory()
 * @method $this withIncludeTemplateHistory($value)
 * @method string getDynamicTagRuleId()
 * @method $this withDynamicTagRuleId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getGroupFounderTagKey()
 * @method $this withGroupFounderTagKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getGroupFounderTagValue()
 * @method $this withGroupFounderTagValue($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DescribeMonitorGroups extends Rpc
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

class DescribeMonitoringAgentAccessKey extends Rpc
{
}

class DescribeMonitoringAgentConfig extends Rpc
{
}

/**
 * @method string getSerialNumbers()
 * @method $this withSerialNumbers($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getInstanceRegionId()
 * @method $this withInstanceRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunHost()
 * @method $this withAliyunHost($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeMonitoringAgentHosts extends Rpc
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
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeMonitoringAgentStatuses extends Rpc
{
}

class DescribeMonitoringConfig extends Rpc
{
}

/**
 * @method string getShowUsed()
 * @method $this withShowUsed($value)
 */
class DescribeMonitorResourceQuotaAttribute extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 */
class DescribeProductResourceTagKeyList extends Rpc
{
}

class DescribeProductsOfActiveMetricRule extends Rpc
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
 * @method string getIncludeAlert()
 * @method $this withIncludeAlert($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSiteMonitorAttribute extends Rpc
{
}

/**
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSiteMonitorData extends Rpc
{
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getAPIProbe()
 * @method $this withAPIProbe($value)
 * @method string getIPV4()
 * @method $this withIPV4($value)
 * @method string getIPV6()
 * @method $this withIPV6($value)
 */
class DescribeSiteMonitorISPCityList extends Rpc
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
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeSiteMonitorLog extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSystemEventAttribute extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSystemEventCount extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSearchKeywords()
 * @method $this withSearchKeywords($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSystemEventHistogram extends Rpc
{
}

class DescribeSystemEventMetaList extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeTagKeyList extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class DescribeTagValueList extends Rpc
{
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
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class DisableActiveMetricRule extends Rpc
{
}

/**
 * @method array getRuleNames()
 */
class DisableEventRules extends Rpc
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
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class DisableSiteMonitors extends Rpc
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
 * @method array getRuleNames()
 */
class EnableEventRules extends Rpc
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
 * @method string getTaskIds()
 * @method $this withTaskIds($value)
 */
class EnableSiteMonitors extends Rpc
{
}

/**
 * @method array getInstanceIds()
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getInstallCommand()
 * @method $this withInstallCommand($value)
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
 * @method array getAlertConfig()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMatchExpressFilterRelation()
 * @method $this withMatchExpressFilterRelation($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyGroupMonitoringAgentProcess extends Rpc
{

    /**
     * @param array $alertConfig
     *
     * @return $this
     */
	public function withAlertConfig(array $alertConfig)
	{
	    $this->data['AlertConfig'] = $alertConfig;
		foreach ($alertConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['Times'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
			}
			if(isset($depth1Value['NoEffectiveInterval'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.NoEffectiveInterval'] = $depth1Value['NoEffectiveInterval'];
			}
			if(isset($depth1Value['Webhook'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
			}
			if(isset($depth1Value['SilenceTime'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.SilenceTime'] = $depth1Value['SilenceTime'];
			}
			if(isset($depth1Value['Threshold'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
			}
			if(isset($depth1Value['EffectiveInterval'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.EffectiveInterval'] = $depth1Value['EffectiveInterval'];
			}
			if(isset($depth1Value['ComparisonOperator'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsLevel'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.EscalationsLevel'] = $depth1Value['EscalationsLevel'];
			}
			if(isset($depth1Value['Statistics'])){
				$this->options['query']['AlertConfig.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTaskOptionHttpMethod()
 * @method string getTaskOptionHttpHeader()
 * @method array getAlertConfigEscalationList()
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getAlertConfigSilenceTime()
 * @method string getTaskOptionHttpResponseCharset()
 * @method string getTaskOptionHttpNegative()
 * @method string getTaskOptionInterval()
 * @method string getAlertConfigNotifyType()
 * @method string getTaskOptionTelnetOrPingHost()
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method string getId()
 * @method $this withId($value)
 * @method array getInstanceList()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAlertConfigEndTime()
 * @method string getTaskOptionHttpURI()
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getTaskOptionHttpPostContent()
 * @method string getAlertConfigStartTime()
 * @method string getAlertConfigWebHook()
 */
class ModifyHostAvailability extends Rpc
{

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
     * @param string $value
     *
     * @return $this
     */
    public function withTaskOptionHttpHeader($value)
    {
        $this->data['TaskOptionHttpHeader'] = $value;
        $this->options['query']['TaskOption.HttpHeader'] = $value;

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
			if(isset($depth1Value['Times'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Operator'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
			}
			if(isset($depth1Value['Aggregate'])){
				$this->options['query']['AlertConfigEscalationList.' . ($depth1 + 1) . '.Aggregate'] = $depth1Value['Aggregate'];
			}
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
    public function withTaskOptionInterval($value)
    {
        $this->data['TaskOptionInterval'] = $value;
        $this->options['query']['TaskOption.Interval'] = $value;

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
    public function withTaskOptionHttpPostContent($value)
    {
        $this->data['TaskOptionHttpPostContent'] = $value;
        $this->options['query']['TaskOption.HttpPostContent'] = $value;

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
    public function withAlertConfigWebHook($value)
    {
        $this->data['AlertConfigWebHook'] = $value;
        $this->options['query']['AlertConfig.WebHook'] = $value;

        return $this;
    }
}

/**
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyHostInfo extends Rpc
{
}

/**
 * @method string getRestVersion()
 * @method $this withRestVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getAlertTemplates()
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
			if(isset($depth1Value['Period'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['EscalationsWarnThreshold'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
			}
			if(isset($depth1Value['Webhook'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
			}
			if(isset($depth1Value['EscalationsWarnComparisonOperator'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsCriticalStatistics'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
			}
			if(isset($depth1Value['EscalationsInfoTimes'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
			}
			if(isset($depth1Value['RuleName'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
			}
			if(isset($depth1Value['EscalationsInfoStatistics'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
			}
			if(isset($depth1Value['EscalationsCriticalTimes'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
			}
			if(isset($depth1Value['EscalationsInfoComparisonOperator'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsWarnStatistics'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
			}
			if(isset($depth1Value['EscalationsInfoThreshold'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
			}
			if(isset($depth1Value['Namespace'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
			}
			if(isset($depth1Value['Selector'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Selector'] = $depth1Value['Selector'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
			if(isset($depth1Value['EscalationsCriticalComparisonOperator'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsWarnTimes'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
			}
			if(isset($depth1Value['EscalationsCriticalThreshold'])){
				$this->options['query']['AlertTemplates.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
			}
		}

		return $this;
    }
}

/**
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getBindUrls()
 * @method $this withBindUrls($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ModifyMonitorGroup extends Rpc
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
			if(isset($depth1Value['InstanceId'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['InstanceName'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.InstanceName'] = $depth1Value['InstanceName'];
			}
			if(isset($depth1Value['RegionId'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Instances.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getIspCities()
 * @method $this withIspCities($value)
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getIntervalUnit()
 * @method $this withIntervalUnit($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ModifySiteMonitor extends Rpc
{
}

class OpenCmsService extends Rpc
{
}

/**
 * @method string getChannelsDingWebHook()
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getChannelsMail()
 * @method string getChannelsAliIM()
 * @method string getDescribe()
 * @method $this withDescribe($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getChannelsSMS()
 */
class PutContact extends Rpc
{

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
    public function withChannelsSMS($value)
    {
        $this->data['ChannelsSMS'] = $value;
        $this->options['query']['Channels.SMS'] = $value;

        return $this;
    }
}

/**
 * @method string getEnableSubscribed()
 * @method $this withEnableSubscribed($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getDescribe()
 * @method $this withDescribe($value)
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
			if(isset($depth1Value['GroupId'])){
				$this->options['query']['EventInfo.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
			}
			if(isset($depth1Value['Time'])){
				$this->options['query']['EventInfo.' . ($depth1 + 1) . '.Time'] = $depth1Value['Time'];
			}
			if(isset($depth1Value['EventName'])){
				$this->options['query']['EventInfo.' . ($depth1 + 1) . '.EventName'] = $depth1Value['EventName'];
			}
			if(isset($depth1Value['Content'])){
				$this->options['query']['EventInfo.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
		}

		return $this;
    }
}

/**
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 * @method string getEmailSubject()
 * @method $this withEmailSubject($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class PutCustomEventRule extends Rpc
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
			if(isset($depth1Value['Period'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['GroupId'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
			}
			if(isset($depth1Value['Values'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.Values'] = $depth1Value['Values'];
			}
			if(isset($depth1Value['Time'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.Time'] = $depth1Value['Time'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Dimensions'])){
				$this->options['query']['MetricList.' . ($depth1 + 1) . '.Dimensions'] = $depth1Value['Dimensions'];
			}
		}

		return $this;
    }
}

/**
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getEmailSubject()
 * @method $this withEmailSubject($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getComparisonOperator()
 * @method $this withComparisonOperator($value)
 * @method string getStatistics()
 * @method $this withStatistics($value)
 */
class PutCustomMetricRule extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getEventPattern()
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getState()
 * @method $this withState($value)
 */
class PutEventRule extends Rpc
{

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
			if(isset($depth1Value['KeywordFilter'])){
				$this->options['query']['EventPattern.' . ($depth1 + 1) . '.KeywordFilter'] = $depth1Value['KeywordFilter'];
			}
			if(isset($depth1Value['Product'])){
				$this->options['query']['EventPattern.' . ($depth1 + 1) . '.Product'] = $depth1Value['Product'];
			}
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
 * @method array getOpenApiParameters()
 * @method array getSlsParameters()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getMnsParameters()
 * @method array getFcParameters()
 */
class PutEventRuleTargets extends Rpc
{

    /**
     * @param array $webhookParameters
     *
     * @return $this
     */
	public function withWebhookParameters(array $webhookParameters)
	{
	    $this->data['WebhookParameters'] = $webhookParameters;
		foreach ($webhookParameters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['Method'])){
				$this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Method'] = $depth1Value['Method'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['WebhookParameters.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
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
			if(isset($depth1Value['Level'])){
				$this->options['query']['ContactParameters.' . ($depth1 + 1) . '.Level'] = $depth1Value['Level'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['ContactParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['ContactGroupName'])){
				$this->options['query']['ContactParameters.' . ($depth1 + 1) . '.ContactGroupName'] = $depth1Value['ContactGroupName'];
			}
		}

		return $this;
    }

    /**
     * @param array $openApiParameters
     *
     * @return $this
     */
	public function withOpenApiParameters(array $openApiParameters)
	{
	    $this->data['OpenApiParameters'] = $openApiParameters;
		foreach ($openApiParameters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Product'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Product'] = $depth1Value['Product'];
			}
			if(isset($depth1Value['Role'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Role'] = $depth1Value['Role'];
			}
			if(isset($depth1Value['Action'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Action'] = $depth1Value['Action'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Arn'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Arn'] = $depth1Value['Arn'];
			}
			if(isset($depth1Value['Region'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
			}
			if(isset($depth1Value['Version'])){
				$this->options['query']['OpenApiParameters.' . ($depth1 + 1) . '.Version'] = $depth1Value['Version'];
			}
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
			if(isset($depth1Value['Project'])){
				$this->options['query']['SlsParameters.' . ($depth1 + 1) . '.Project'] = $depth1Value['Project'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['SlsParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Region'])){
				$this->options['query']['SlsParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
			}
			if(isset($depth1Value['LogStore'])){
				$this->options['query']['SlsParameters.' . ($depth1 + 1) . '.LogStore'] = $depth1Value['LogStore'];
			}
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
			if(isset($depth1Value['Id'])){
				$this->options['query']['MnsParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Region'])){
				$this->options['query']['MnsParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
			}
			if(isset($depth1Value['Queue'])){
				$this->options['query']['MnsParameters.' . ($depth1 + 1) . '.Queue'] = $depth1Value['Queue'];
			}
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
			if(isset($depth1Value['FunctionName'])){
				$this->options['query']['FcParameters.' . ($depth1 + 1) . '.FunctionName'] = $depth1Value['FunctionName'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['FcParameters.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['FcParameters.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Region'])){
				$this->options['query']['FcParameters.' . ($depth1 + 1) . '.Region'] = $depth1Value['Region'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDestName()
 * @method $this withDestName($value)
 * @method string getConfigJson()
 * @method $this withConfigJson($value)
 * @method string getDestType()
 * @method $this withDestType($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class PutExporterOutput extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getDstNames()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getTargetWindows()
 * @method $this withTargetWindows($value)
 * @method string getDescribe()
 * @method $this withDescribe($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 */
class PutExporterRule extends Rpc
{

    /**
     * @param array $dstNames
     *
     * @return $this
     */
	public function withDstNames(array $dstNames)
	{
	    $this->data['DstNames'] = $dstNames;
		foreach ($dstNames as $i => $iValue) {
			$this->options['query']['DstNames.' . ($i + 1)] = $iValue;
		}

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
 * @method string getNoDataPolicy()
 * @method $this withNoDataPolicy($value)
 * @method string getNoEffectiveInterval()
 * @method $this withNoEffectiveInterval($value)
 * @method string getEmailSubject()
 * @method $this withEmailSubject($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getEscalationsWarnTimes()
 * @method string getCompositeExpression()
 * @method $this withCompositeExpression($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEscalationsWarnThreshold()
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getEscalationsCriticalStatistics()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEscalationsInfoTimes()
 * @method string getExtraDimensionJson()
 * @method $this withExtraDimensionJson($value)
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
 * @method string getMetricList()
 * @method $this withMetricList($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class PutHybridMonitorMetricData extends Rpc
{
}

/**
 * @method string getSlsLogstore()
 * @method $this withSlsLogstore($value)
 * @method string getSlsProject()
 * @method $this withSlsProject($value)
 * @method array getValueFilter()
 * @method string getMetricExpress()
 * @method $this withMetricExpress($value)
 * @method string getSlsRegionId()
 * @method $this withSlsRegionId($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTumblingwindows()
 * @method $this withTumblingwindows($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getValueFilterRelation()
 * @method $this withValueFilterRelation($value)
 * @method string getUnit()
 * @method $this withUnit($value)
 * @method array getGroupbys()
 * @method string getLogId()
 * @method $this withLogId($value)
 * @method array getAggregates()
 */
class PutLogMonitor extends Rpc
{

    /**
     * @param array $valueFilter
     *
     * @return $this
     */
	public function withValueFilter(array $valueFilter)
	{
	    $this->data['ValueFilter'] = $valueFilter;
		foreach ($valueFilter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['ValueFilter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['ValueFilter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Operator'])){
				$this->options['query']['ValueFilter.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
			}
		}

		return $this;
    }

    /**
     * @param array $groupbys
     *
     * @return $this
     */
	public function withGroupbys(array $groupbys)
	{
	    $this->data['Groupbys'] = $groupbys;
		foreach ($groupbys as $depth1 => $depth1Value) {
			if(isset($depth1Value['FieldName'])){
				$this->options['query']['Groupbys.' . ($depth1 + 1) . '.FieldName'] = $depth1Value['FieldName'];
			}
			if(isset($depth1Value['Alias'])){
				$this->options['query']['Groupbys.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
			}
		}

		return $this;
    }

    /**
     * @param array $aggregates
     *
     * @return $this
     */
	public function withAggregates(array $aggregates)
	{
	    $this->data['Aggregates'] = $aggregates;
		foreach ($aggregates as $depth1 => $depth1Value) {
			if(isset($depth1Value['FieldName'])){
				$this->options['query']['Aggregates.' . ($depth1 + 1) . '.FieldName'] = $depth1Value['FieldName'];
			}
			if(isset($depth1Value['Function'])){
				$this->options['query']['Aggregates.' . ($depth1 + 1) . '.Function'] = $depth1Value['Function'];
			}
			if(isset($depth1Value['Alias'])){
				$this->options['query']['Aggregates.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
			}
		}

		return $this;
    }
}

/**
 * @method array getTargets()
 * @method string getRuleId()
 * @method $this withRuleId($value)
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
			if(isset($depth1Value['Level'])){
				$this->options['query']['Targets.' . ($depth1 + 1) . '.Level'] = $depth1Value['Level'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['Targets.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Arn'])){
				$this->options['query']['Targets.' . ($depth1 + 1) . '.Arn'] = $depth1Value['Arn'];
			}
		}

		return $this;
    }
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
			if(isset($depth1Value['FilterRelation'])){
				$this->options['query']['GroupRules.' . ($depth1 + 1) . '.FilterRelation'] = $depth1Value['FilterRelation'];
			}
			foreach ($depth1Value['Filters'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Function'])){
					$this->options['query']['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Function'] = $depth2Value['Function'];
				}
				if(isset($depth2Value['Name'])){
					$this->options['query']['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
				if(isset($depth2Value['Value'])){
					$this->options['query']['GroupRules.' . ($depth1 + 1) . '.Filters.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['GroupRules.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAutoInstall()
 * @method $this withAutoInstall($value)
 * @method string getEnableInstallAgentNewECS()
 * @method $this withEnableInstallAgentNewECS($value)
 */
class PutMonitoringConfig extends Rpc
{
}

/**
 * @method string getWebhook()
 * @method $this withWebhook($value)
 * @method string getEscalationsWarnComparisonOperator()
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEffectiveInterval()
 * @method $this withEffectiveInterval($value)
 * @method string getNoDataPolicy()
 * @method $this withNoDataPolicy($value)
 * @method string getNoEffectiveInterval()
 * @method $this withNoEffectiveInterval($value)
 * @method string getEmailSubject()
 * @method $this withEmailSubject($value)
 * @method string getOptions()
 * @method $this withOptions($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getEscalationsWarnTimes()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEscalationsWarnThreshold()
 * @method string getContactGroups()
 * @method $this withContactGroups($value)
 * @method string getEscalationsCriticalStatistics()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getEscalationsCriticalThreshold()
 * @method string getEscalationsInfoStatistics()
 * @method string getEscalationsInfoComparisonOperator()
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getPrometheus()
 * @method $this withPrometheus($value)
 * @method string getCompositeExpression()
 * @method $this withCompositeExpression($value)
 * @method string getResources()
 * @method $this withResources($value)
 * @method string getEscalationsInfoTimes()
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getEscalationsCriticalTimes()
 * @method string getEscalationsWarnStatistics()
 * @method string getEscalationsInfoThreshold()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getEscalationsCriticalComparisonOperator()
 */
class PutResourceMetricRule extends Rpc
{

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
    public function withEscalationsCriticalThreshold($value)
    {
        $this->data['EscalationsCriticalThreshold'] = $value;
        $this->options['query']['Escalations.Critical.Threshold'] = $value;

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
}

/**
 * @method array getRules()
 */
class PutResourceMetricRules extends Rpc
{

    /**
     * @param array $rules
     *
     * @return $this
     */
	public function withRules(array $rules)
	{
	    $this->data['Rules'] = $rules;
		foreach ($rules as $depth1 => $depth1Value) {
			if(isset($depth1Value['Webhook'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Webhook'] = $depth1Value['Webhook'];
			}
			if(isset($depth1Value['EscalationsWarnComparisonOperator'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Warn.ComparisonOperator'] = $depth1Value['EscalationsWarnComparisonOperator'];
			}
			if(isset($depth1Value['RuleName'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
			}
			if(isset($depth1Value['EscalationsInfoStatistics'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Info.Statistics'] = $depth1Value['EscalationsInfoStatistics'];
			}
			if(isset($depth1Value['EffectiveInterval'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.EffectiveInterval'] = $depth1Value['EffectiveInterval'];
			}
			if(isset($depth1Value['EscalationsInfoComparisonOperator'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Info.ComparisonOperator'] = $depth1Value['EscalationsInfoComparisonOperator'];
			}
			if(isset($depth1Value['NoDataPolicy'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.NoDataPolicy'] = $depth1Value['NoDataPolicy'];
			}
			if(isset($depth1Value['NoEffectiveInterval'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.NoEffectiveInterval'] = $depth1Value['NoEffectiveInterval'];
			}
			if(isset($depth1Value['EmailSubject'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.EmailSubject'] = $depth1Value['EmailSubject'];
			}
			if(isset($depth1Value['SilenceTime'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.SilenceTime'] = $depth1Value['SilenceTime'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['EscalationsWarnTimes'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Warn.Times'] = $depth1Value['EscalationsWarnTimes'];
			}
			if(isset($depth1Value['CompositeExpression'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.CompositeExpression'] = $depth1Value['CompositeExpression'];
			}
			if(isset($depth1Value['EscalationsWarnThreshold'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Warn.Threshold'] = $depth1Value['EscalationsWarnThreshold'];
			}
			if(isset($depth1Value['Period'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['ContactGroups'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.ContactGroups'] = $depth1Value['ContactGroups'];
			}
			if(isset($depth1Value['EscalationsCriticalStatistics'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Critical.Statistics'] = $depth1Value['EscalationsCriticalStatistics'];
			}
			if(isset($depth1Value['GroupId'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
			}
			if(isset($depth1Value['EscalationsInfoTimes'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Info.Times'] = $depth1Value['EscalationsInfoTimes'];
			}
			if(isset($depth1Value['Resources'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Resources'] = $depth1Value['Resources'];
			}
			if(isset($depth1Value['EscalationsCriticalTimes'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Critical.Times'] = $depth1Value['EscalationsCriticalTimes'];
			}
			if(isset($depth1Value['EscalationsInfoThreshold'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Info.Threshold'] = $depth1Value['EscalationsInfoThreshold'];
			}
			if(isset($depth1Value['EscalationsWarnStatistics'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Warn.Statistics'] = $depth1Value['EscalationsWarnStatistics'];
			}
			if(isset($depth1Value['Namespace'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Namespace'] = $depth1Value['Namespace'];
			}
			if(isset($depth1Value['Interval'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
			}
			if(isset($depth1Value['RuleId'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.RuleId'] = $depth1Value['RuleId'];
			}
			if(isset($depth1Value['EscalationsCriticalComparisonOperator'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Critical.ComparisonOperator'] = $depth1Value['EscalationsCriticalComparisonOperator'];
			}
			if(isset($depth1Value['EscalationsCriticalThreshold'])){
				$this->options['query']['Rules.' . ($depth1 + 1) . '.Escalations.Critical.Threshold'] = $depth1Value['EscalationsCriticalThreshold'];
			}
		}

		return $this;
    }
}

/**
 * @method array getGroupIds()
 * @method array getTag()
 */
class RemoveTags extends Rpc
{

    /**
     * @param array $groupIds
     *
     * @return $this
     */
	public function withGroupIds(array $groupIds)
	{
	    $this->data['GroupIds'] = $groupIds;
		foreach ($groupIds as $i => $iValue) {
			$this->options['query']['GroupIds.' . ($i + 1)] = $iValue;
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
 */
class UninstallMonitoringAgent extends Rpc
{
}
