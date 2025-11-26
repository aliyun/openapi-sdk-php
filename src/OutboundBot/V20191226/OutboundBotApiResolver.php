<?php

namespace AlibabaCloud\OutboundBot\V20191226;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssignJobs assignJobs(array $options = [])
 * @method AssignJobsAsync assignJobsAsync(array $options = [])
 * @method CancelJobs cancelJobs(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CreateAgentProfile createAgentProfile(array $options = [])
 * @method CreateAnnotationMission createAnnotationMission(array $options = [])
 * @method CreateBatchJobs createBatchJobs(array $options = [])
 * @method CreateBatchRepeatJob createBatchRepeatJob(array $options = [])
 * @method CreateBeebotIntent createBeebotIntent(array $options = [])
 * @method CreateBeebotIntentLgf createBeebotIntentLgf(array $options = [])
 * @method CreateBeebotIntentUserSay createBeebotIntentUserSay(array $options = [])
 * @method CreateDialogueFlow createDialogueFlow(array $options = [])
 * @method CreateDownloadUrl createDownloadUrl(array $options = [])
 * @method CreateGlobalQuestion createGlobalQuestion(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateInstanceBindNumber createInstanceBindNumber(array $options = [])
 * @method CreateIntent createIntent(array $options = [])
 * @method CreateJobDataParsingTask createJobDataParsingTask(array $options = [])
 * @method CreateJobGroup createJobGroup(array $options = [])
 * @method CreateJobGroupExportTask createJobGroupExportTask(array $options = [])
 * @method CreateScript createScript(array $options = [])
 * @method CreateScriptWaveform createScriptWaveform(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method CreateTaskExportTask createTaskExportTask(array $options = [])
 * @method DeleteAgentProfiles deleteAgentProfiles(array $options = [])
 * @method DeleteAllNumberDistrictInfo deleteAllNumberDistrictInfo(array $options = [])
 * @method DeleteBeebotIntent deleteBeebotIntent(array $options = [])
 * @method DeleteBeebotIntentLgf deleteBeebotIntentLgf(array $options = [])
 * @method DeleteBeebotIntentUserSay deleteBeebotIntentUserSay(array $options = [])
 * @method DeleteContactBlockList deleteContactBlockList(array $options = [])
 * @method DeleteContactWhiteList deleteContactWhiteList(array $options = [])
 * @method DeleteDialogueFlow deleteDialogueFlow(array $options = [])
 * @method DeleteGlobalQuestion deleteGlobalQuestion(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteIntent deleteIntent(array $options = [])
 * @method DeleteJobGroup deleteJobGroup(array $options = [])
 * @method DeleteOutboundCallNumber deleteOutboundCallNumber(array $options = [])
 * @method DeleteScript deleteScript(array $options = [])
 * @method DeleteScriptRecording deleteScriptRecording(array $options = [])
 * @method DeleteScriptWaveform deleteScriptWaveform(array $options = [])
 * @method DescribeBeebotIntent describeBeebotIntent(array $options = [])
 * @method DescribeDialogueNodeStatistics describeDialogueNodeStatistics(array $options = [])
 * @method DescribeDsReports describeDsReports(array $options = [])
 * @method DescribeGlobalQuestion describeGlobalQuestion(array $options = [])
 * @method DescribeGroupExecutingInfo describeGroupExecutingInfo(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeIntent describeIntent(array $options = [])
 * @method DescribeIntentStatistics describeIntentStatistics(array $options = [])
 * @method DescribeJob describeJob(array $options = [])
 * @method DescribeJobDataParsingTaskProgress describeJobDataParsingTaskProgress(array $options = [])
 * @method DescribeJobGroup describeJobGroup(array $options = [])
 * @method DescribeJobGroupExportTaskProgress describeJobGroupExportTaskProgress(array $options = [])
 * @method DescribeScript describeScript(array $options = [])
 * @method DescribeScriptVoiceConfig describeScriptVoiceConfig(array $options = [])
 * @method DescribeTagHitsSummary describeTagHitsSummary(array $options = [])
 * @method DescribeTenantBindNumber describeTenantBindNumber(array $options = [])
 * @method DescribeTTSConfig describeTTSConfig(array $options = [])
 * @method DescribeTTSDemo describeTTSDemo(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DownloadRecording downloadRecording(array $options = [])
 * @method DownloadScriptRecording downloadScriptRecording(array $options = [])
 * @method DuplicateScript duplicateScript(array $options = [])
 * @method ExportScript exportScript(array $options = [])
 * @method GenerateUploadUrl generateUploadUrl(array $options = [])
 * @method GetAfterAnswerDelayPlayback getAfterAnswerDelayPlayback(array $options = [])
 * @method GetAgentProfile getAgentProfile(array $options = [])
 * @method GetAgentProfileTemplate getAgentProfileTemplate(array $options = [])
 * @method GetAnnotationMissionSummary getAnnotationMissionSummary(array $options = [])
 * @method GetAnnotationMissionTagInfoList getAnnotationMissionTagInfoList(array $options = [])
 * @method GetAsrServerInfo getAsrServerInfo(array $options = [])
 * @method GetAssignJobsAsyncResult getAssignJobsAsyncResult(array $options = [])
 * @method GetBaseStrategyPeriod getBaseStrategyPeriod(array $options = [])
 * @method GetConcurrentConversationQuota getConcurrentConversationQuota(array $options = [])
 * @method GetContactBlockList getContactBlockList(array $options = [])
 * @method GetContactWhiteList getContactWhiteList(array $options = [])
 * @method GetCurrentConcurrency getCurrentConcurrency(array $options = [])
 * @method GetEmptyNumberNoMoreCallsInfo getEmptyNumberNoMoreCallsInfo(array $options = [])
 * @method GetJobDataUploadParams getJobDataUploadParams(array $options = [])
 * @method GetMaxAttemptsPerDay getMaxAttemptsPerDay(array $options = [])
 * @method GetNumberDistrictInfoTemplateDownloadUrl getNumberDistrictInfoTemplateDownloadUrl(array $options = [])
 * @method GetRealtimeConcurrencyReport getRealtimeConcurrencyReport(array $options = [])
 * @method GetSummaryInfo getSummaryInfo(array $options = [])
 * @method GetTaskByUuid getTaskByUuid(array $options = [])
 * @method GetVersion getVersion(array $options = [])
 * @method ImportScript importScript(array $options = [])
 * @method InflightTaskTimeout inflightTaskTimeout(array $options = [])
 * @method ListAgentProfiles listAgentProfiles(array $options = [])
 * @method ListAllTenantBindNumberBinding listAllTenantBindNumberBinding(array $options = [])
 * @method ListAnnotationMission listAnnotationMission(array $options = [])
 * @method ListAnnotationMissionSession listAnnotationMissionSession(array $options = [])
 * @method ListApiPlugins listApiPlugins(array $options = [])
 * @method ListBeebotIntent listBeebotIntent(array $options = [])
 * @method ListBeebotIntentLgf listBeebotIntentLgf(array $options = [])
 * @method ListBeebotIntentUserSay listBeebotIntentUserSay(array $options = [])
 * @method ListChatbotInstances listChatbotInstances(array $options = [])
 * @method ListDialogueFlows listDialogueFlows(array $options = [])
 * @method ListDownloadTasks listDownloadTasks(array $options = [])
 * @method ListFlashSmsTemplates listFlashSmsTemplates(array $options = [])
 * @method ListGlobalQuestions listGlobalQuestions(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListIntentions listIntentions(array $options = [])
 * @method ListIntents listIntents(array $options = [])
 * @method ListJobGroups listJobGroups(array $options = [])
 * @method ListJobGroupsAsync listJobGroupsAsync(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListJobsByGroup listJobsByGroup(array $options = [])
 * @method ListOutboundCallNumbers listOutboundCallNumbers(array $options = [])
 * @method ListResourceTags listResourceTags(array $options = [])
 * @method ListScriptPublishHistories listScriptPublishHistories(array $options = [])
 * @method ListScriptRecording listScriptRecording(array $options = [])
 * @method ListScripts listScripts(array $options = [])
 * @method ListScriptVoiceConfigs listScriptVoiceConfigs(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ModifyAgentProfile modifyAgentProfile(array $options = [])
 * @method ModifyAnnotationMission modifyAnnotationMission(array $options = [])
 * @method ModifyBatchJobs modifyBatchJobs(array $options = [])
 * @method ModifyBeebotIntent modifyBeebotIntent(array $options = [])
 * @method ModifyBeebotIntentLgf modifyBeebotIntentLgf(array $options = [])
 * @method ModifyBeebotIntentUserSay modifyBeebotIntentUserSay(array $options = [])
 * @method ModifyDialogueFlow modifyDialogueFlow(array $options = [])
 * @method ModifyEmptyNumberNoMoreCallsInfo modifyEmptyNumberNoMoreCallsInfo(array $options = [])
 * @method ModifyGlobalQuestion modifyGlobalQuestion(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ModifyIntent modifyIntent(array $options = [])
 * @method ModifyJobGroup modifyJobGroup(array $options = [])
 * @method ModifyOutboundCallNumber modifyOutboundCallNumber(array $options = [])
 * @method ModifyScript modifyScript(array $options = [])
 * @method ModifyScriptVoiceConfig modifyScriptVoiceConfig(array $options = [])
 * @method ModifyTagGroups modifyTagGroups(array $options = [])
 * @method ModifyTTSConfig modifyTTSConfig(array $options = [])
 * @method PublishScript publishScript(array $options = [])
 * @method PublishScriptForDebug publishScriptForDebug(array $options = [])
 * @method QueryJobs queryJobs(array $options = [])
 * @method QueryJobsWithResult queryJobsWithResult(array $options = [])
 * @method QueryScriptsByStatus queryScriptsByStatus(array $options = [])
 * @method QueryScriptWaveforms queryScriptWaveforms(array $options = [])
 * @method RecordFailure recordFailure(array $options = [])
 * @method ResumeJobs resumeJobs(array $options = [])
 * @method RollbackScript rollbackScript(array $options = [])
 * @method SaveAfterAnswerDelayPlayback saveAfterAnswerDelayPlayback(array $options = [])
 * @method SaveAnnotationMissionSessionList saveAnnotationMissionSessionList(array $options = [])
 * @method SaveAnnotationMissionTagInfoList saveAnnotationMissionTagInfoList(array $options = [])
 * @method SaveBaseStrategyPeriod saveBaseStrategyPeriod(array $options = [])
 * @method SaveContactBlockList saveContactBlockList(array $options = [])
 * @method SaveContactWhiteList saveContactWhiteList(array $options = [])
 * @method SaveEffectiveDays saveEffectiveDays(array $options = [])
 * @method SaveMaxAttemptsPerDay saveMaxAttemptsPerDay(array $options = [])
 * @method SearchTask searchTask(array $options = [])
 * @method StartJob startJob(array $options = [])
 * @method SubmitBatchJobs submitBatchJobs(array $options = [])
 * @method SubmitRecording submitRecording(array $options = [])
 * @method SubmitScriptReview submitScriptReview(array $options = [])
 * @method SuspendCall suspendCall(array $options = [])
 * @method SuspendCallWithFile suspendCallWithFile(array $options = [])
 * @method SuspendJobs suspendJobs(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TaskPreparing taskPreparing(array $options = [])
 * @method TerminateCall terminateCall(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UploadScriptRecording uploadScriptRecording(array $options = [])
 * @method WithdrawScriptReview withdrawScriptReview(array $options = [])
 */
class OutboundBotApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OutboundBot';

    /** @var string */
    public $version = '2019-12-26';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'outboundbot';
}

/**
 * @method array getJobsJson()
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRosterType()
 * @method $this withRosterType($value)
 * @method string getJobDataParsingTaskId()
 * @method $this withJobDataParsingTaskId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getIsAsynchrony()
 * @method $this withIsAsynchrony($value)
 */
class AssignJobs extends Rpc
{

    /**
     * @param array $jobsJson
     *
     * @return $this
     */
	public function withJobsJson(array $jobsJson)
	{
	    $this->data['JobsJson'] = $jobsJson;
		foreach ($jobsJson as $i => $iValue) {
			$this->options['query']['JobsJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getJobsJson()
 * @method string getCallingNumber()
 * @method string getInstanceId()
 * @method string getStrategyJson()
 * @method string getJobGroupId()
 */
class AssignJobsAsync extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobsJson($value)
    {
        $this->data['JobsJson'] = $value;
        $this->options['form_params']['JobsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallingNumber($value)
    {
        $this->data['CallingNumber'] = $value;
        $this->options['form_params']['CallingNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategyJson($value)
    {
        $this->data['StrategyJson'] = $value;
        $this->options['form_params']['StrategyJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobGroupId($value)
    {
        $this->data['JobGroupId'] = $value;
        $this->options['form_params']['JobGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobReferenceId()
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CancelJobs extends Rpc
{

    /**
     * @param array $jobReferenceId
     *
     * @return $this
     */
	public function withJobReferenceId(array $jobReferenceId)
	{
	    $this->data['JobReferenceId'] = $jobReferenceId;
		foreach ($jobReferenceId as $i => $iValue) {
			$this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $jobId
     *
     * @return $this
     */
	public function withJobId(array $jobId)
	{
	    $this->data['JobId'] = $jobId;
		foreach ($jobId as $i => $iValue) {
			$this->options['query']['JobId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getModelConfig()
 * @method string getAppIp()
 * @method string getDescription()
 * @method string getAgentProfileTemplateId()
 * @method string getScriptId()
 * @method string getVariablesJson()
 * @method string getInstructionJson()
 * @method string getScenario()
 * @method string getModel()
 * @method string getLabelsJson()
 * @method string getFaqCategoryIds()
 * @method string getInstanceId()
 * @method string getPromptJson()
 * @method string getPrompt()
 */
class CreateAgentProfile extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelConfig($value)
    {
        $this->data['ModelConfig'] = $value;
        $this->options['form_params']['ModelConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIp($value)
    {
        $this->data['AppIp'] = $value;
        $this->options['form_params']['AppIp'] = $value;

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
    public function withAgentProfileTemplateId($value)
    {
        $this->data['AgentProfileTemplateId'] = $value;
        $this->options['form_params']['AgentProfileTemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptId($value)
    {
        $this->data['ScriptId'] = $value;
        $this->options['form_params']['ScriptId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVariablesJson($value)
    {
        $this->data['VariablesJson'] = $value;
        $this->options['form_params']['VariablesJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstructionJson($value)
    {
        $this->data['InstructionJson'] = $value;
        $this->options['form_params']['InstructionJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScenario($value)
    {
        $this->data['Scenario'] = $value;
        $this->options['form_params']['Scenario'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModel($value)
    {
        $this->data['Model'] = $value;
        $this->options['form_params']['Model'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelsJson($value)
    {
        $this->data['LabelsJson'] = $value;
        $this->options['form_params']['LabelsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaqCategoryIds($value)
    {
        $this->data['FaqCategoryIds'] = $value;
        $this->options['form_params']['FaqCategoryIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPromptJson($value)
    {
        $this->data['PromptJson'] = $value;
        $this->options['form_params']['PromptJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrompt($value)
    {
        $this->data['Prompt'] = $value;
        $this->options['form_params']['Prompt'] = $value;

        return $this;
    }
}

/**
 * @method string getSessionEndReasonFilterListJsonString()
 * @method $this withSessionEndReasonFilterListJsonString($value)
 * @method string getSamplingType()
 * @method $this withSamplingType($value)
 * @method array getSessionEndReasonFilterList()
 * @method string getAnnotationMissionDataSourceType()
 * @method $this withAnnotationMissionDataSourceType($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getAnnotationMissionDebugDataSourceListJsonString()
 * @method $this withAnnotationMissionDebugDataSourceListJsonString($value)
 * @method string getConversationTimeEndFilter()
 * @method $this withConversationTimeEndFilter($value)
 * @method string getConversationTimeStartFilter()
 * @method $this withConversationTimeStartFilter($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getExcludeOtherSession()
 * @method $this withExcludeOtherSession($value)
 * @method string getFinished()
 * @method $this withFinished($value)
 * @method string getSamplingRate()
 * @method $this withSamplingRate($value)
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getAnnotationMissionName()
 * @method $this withAnnotationMissionName($value)
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getAnnotationMissionDebugDataSourceList()
 * @method $this withAnnotationMissionDebugDataSourceList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSamplingCount()
 * @method $this withSamplingCount($value)
 */
class CreateAnnotationMission extends Rpc
{

    /**
     * @param array $sessionEndReasonFilterList
     *
     * @return $this
     */
	public function withSessionEndReasonFilterList(array $sessionEndReasonFilterList)
	{
	    $this->data['SessionEndReasonFilterList'] = $sessionEndReasonFilterList;
		foreach ($sessionEndReasonFilterList as $i => $iValue) {
			$this->options['query']['SessionEndReasonFilterList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubmitted()
 * @method $this withSubmitted($value)
 * @method string getBatchJobName()
 * @method $this withBatchJobName($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getBatchJobDescription()
 * @method $this withBatchJobDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateBatchJobs extends Rpc
{

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRecallStrategyJson()
 * @method $this withRecallStrategyJson($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getFilterStatus()
 * @method $this withFilterStatus($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method array getRecallCallingNumber()
 * @method string getRingingDuration()
 * @method $this withRingingDuration($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getFlashSmsExtras()
 * @method $this withFlashSmsExtras($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 * @method string getMinConcurrency()
 * @method $this withMinConcurrency($value)
 */
class CreateBatchRepeatJob extends Rpc
{

    /**
     * @param array $recallCallingNumber
     *
     * @return $this
     */
	public function withRecallCallingNumber(array $recallCallingNumber)
	{
	    $this->data['RecallCallingNumber'] = $recallCallingNumber;
		foreach ($recallCallingNumber as $i => $iValue) {
			$this->options['query']['RecallCallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIntentDefinition()
 * @method $this withIntentDefinition($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateBeebotIntent extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLgfDefinition()
 * @method $this withLgfDefinition($value)
 */
class CreateBeebotIntentLgf extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserSayDefinition()
 * @method $this withUserSayDefinition($value)
 */
class CreateBeebotIntentUserSay extends Rpc
{
}

/**
 * @method string getDialogueFlowType()
 * @method $this withDialogueFlowType($value)
 * @method string getDialogueName()
 * @method $this withDialogueName($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDialogueFlow extends Rpc
{
}

/**
 * @method string getDownloadTaskId()
 * @method $this withDownloadTaskId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class CreateDownloadUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGlobalQuestionName()
 * @method $this withGlobalQuestionName($value)
 * @method string getQuestions()
 * @method $this withQuestions($value)
 * @method string getAnswers()
 * @method $this withAnswers($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGlobalQuestionType()
 * @method $this withGlobalQuestionType($value)
 */
class CreateGlobalQuestion extends Rpc
{
}

/**
 * @method string getMaxConcurrentConversation()
 * @method $this withMaxConcurrentConversation($value)
 * @method string getSecretKey()
 * @method $this withSecretKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method array getCallingNumber()
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getCallCenterInstanceId()
 * @method $this withCallCenterInstanceId($value)
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getNluServiceType()
 * @method $this withNluServiceType($value)
 */
class CreateInstance extends Rpc
{

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceList()
 * @method $this withInstanceList($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 */
class CreateInstanceBindNumber extends Rpc
{
}

/**
 * @method string getUtterances()
 * @method $this withUtterances($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getIntentDescription()
 * @method $this withIntentDescription($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIntentName()
 * @method $this withIntentName($value)
 */
class CreateIntent extends Rpc
{
}

/**
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateJobDataParsingTask extends Rpc
{
}

/**
 * @method string getRecallStrategyJson()
 * @method $this withRecallStrategyJson($value)
 * @method string getJobGroupName()
 * @method $this withJobGroupName($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method array getRecallCallingNumber()
 * @method string getRingingDuration()
 * @method $this withRingingDuration($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getJobGroupDescription()
 * @method $this withJobGroupDescription($value)
 * @method string getFlashSmsExtras()
 * @method $this withFlashSmsExtras($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMinConcurrency()
 * @method $this withMinConcurrency($value)
 */
class CreateJobGroup extends Rpc
{

    /**
     * @param array $recallCallingNumber
     *
     * @return $this
     */
	public function withRecallCallingNumber(array $recallCallingNumber)
	{
	    $this->data['RecallCallingNumber'] = $recallCallingNumber;
		foreach ($recallCallingNumber as $i => $iValue) {
			$this->options['query']['RecallCallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method array getOption()
 */
class CreateJobGroupExportTask extends Rpc
{

    /**
     * @param array $option
     *
     * @return $this
     */
	public function withOption(array $option)
	{
	    $this->data['Option'] = $option;
		foreach ($option as $i => $iValue) {
			$this->options['query']['Option.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTtsConfig()
 * @method $this withTtsConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getScriptName()
 * @method $this withScriptName($value)
 * @method string getNluEngine()
 * @method $this withNluEngine($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getNluAccessType()
 * @method $this withNluAccessType($value)
 * @method array getScriptWaveform()
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getAgentLlm()
 * @method $this withAgentLlm($value)
 * @method string getMiniPlaybackConfigListJsonString()
 * @method $this withMiniPlaybackConfigListJsonString($value)
 * @method string getEmotionEnable()
 * @method $this withEmotionEnable($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getNewBargeInEnable()
 * @method $this withNewBargeInEnable($value)
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getScriptNluProfileJsonString()
 * @method $this withScriptNluProfileJsonString($value)
 * @method string getMiniPlaybackEnable()
 * @method $this withMiniPlaybackEnable($value)
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScriptDescription()
 * @method $this withScriptDescription($value)
 * @method string getLongWaitEnable()
 * @method $this withLongWaitEnable($value)
 * @method array getScriptContent()
 */
class CreateScript extends Rpc
{

    /**
     * @param array $scriptWaveform
     *
     * @return $this
     */
	public function withScriptWaveform(array $scriptWaveform)
	{
	    $this->data['ScriptWaveform'] = $scriptWaveform;
		foreach ($scriptWaveform as $i => $iValue) {
			$this->options['query']['ScriptWaveform.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scriptContent
     *
     * @return $this
     */
	public function withScriptContent(array $scriptContent)
	{
	    $this->data['ScriptContent'] = $scriptContent;
		foreach ($scriptContent as $i => $iValue) {
			$this->options['query']['ScriptContent.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getScriptContent()
 * @method $this withScriptContent($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class CreateScriptWaveform extends Rpc
{
}

/**
 * @method string getTagGroup()
 * @method $this withTagGroup($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateTag extends Rpc
{
}

/**
 * @method string getHasAnswered()
 * @method $this withHasAnswered($value)
 * @method string getActualTimeLte()
 * @method $this withActualTimeLte($value)
 * @method string getOtherId()
 * @method $this withOtherId($value)
 * @method string getTaskCreateTimeLte()
 * @method $this withTaskCreateTimeLte($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTaskCreateTimeGte()
 * @method $this withTaskCreateTimeGte($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getUserIdMatch()
 * @method $this withUserIdMatch($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScriptNameQuery()
 * @method $this withScriptNameQuery($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getTaskStatusStringList()
 * @method $this withTaskStatusStringList($value)
 * @method string getJobGroupNameQuery()
 * @method $this withJobGroupNameQuery($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getHasHangUpByRejection()
 * @method $this withHasHangUpByRejection($value)
 * @method string getHasReachedEndOfFlow()
 * @method $this withHasReachedEndOfFlow($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRecordingDurationGte()
 * @method $this withRecordingDurationGte($value)
 * @method string getCallDurationLte()
 * @method $this withCallDurationLte($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getJobStatusStringList()
 * @method $this withJobStatusStringList($value)
 * @method string getActualTimeGte()
 * @method $this withActualTimeGte($value)
 * @method string getCallDurationGte()
 * @method $this withCallDurationGte($value)
 * @method string getRecordingDurationLte()
 * @method $this withRecordingDurationLte($value)
 */
class CreateTaskExportTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppIp()
 * @method string getAgentProfileIds()
 */
class DeleteAgentProfiles extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIp($value)
    {
        $this->data['AppIp'] = $value;
        $this->options['form_params']['AppIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentProfileIds($value)
    {
        $this->data['AgentProfileIds'] = $value;
        $this->options['form_params']['AgentProfileIds'] = $value;

        return $this;
    }
}

class DeleteAllNumberDistrictInfo extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteBeebotIntent extends Rpc
{
}

/**
 * @method string getLgfId()
 * @method $this withLgfId($value)
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteBeebotIntentLgf extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserSayId()
 * @method $this withUserSayId($value)
 */
class DeleteBeebotIntentUserSay extends Rpc
{
}

/**
 * @method string getContactBlockListId()
 * @method $this withContactBlockListId($value)
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteContactBlockList extends Rpc
{
}

/**
 * @method string getOperator()
 * @method $this withOperator($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactWhiteListId()
 * @method $this withContactWhiteListId($value)
 */
class DeleteContactWhiteList extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDialogueFlowId()
 * @method $this withDialogueFlowId($value)
 */
class DeleteDialogueFlow extends Rpc
{
}

/**
 * @method string getGlobalQuestionId()
 * @method $this withGlobalQuestionId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteGlobalQuestion extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteIntent extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DeleteJobGroup extends Rpc
{
}

/**
 * @method string getOutboundCallNumberId()
 * @method $this withOutboundCallNumberId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteOutboundCallNumber extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteScript extends Rpc
{
}

/**
 * @method string getUuidsJson()
 * @method $this withUuidsJson($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteScriptRecording extends Rpc
{
}

/**
 * @method string getScriptWaveformId()
 * @method $this withScriptWaveformId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteScriptWaveform extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeBeebotIntent extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 */
class DescribeDialogueNodeStatistics extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DescribeDsReports extends Rpc
{
}

/**
 * @method string getGlobalQuestionId()
 * @method $this withGlobalQuestionId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeGlobalQuestion extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DescribeGroupExecutingInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstance extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeIntent extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 */
class DescribeIntentStatistics extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getWithScript()
 * @method $this withWithScript($value)
 */
class DescribeJob extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobDataParsingTaskId()
 * @method $this withJobDataParsingTaskId($value)
 */
class DescribeJobDataParsingTaskProgress extends Rpc
{
}

/**
 * @method array getBriefTypes()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DescribeJobGroup extends Rpc
{

    /**
     * @param array $briefTypes
     *
     * @return $this
     */
	public function withBriefTypes(array $briefTypes)
	{
	    $this->data['BriefTypes'] = $briefTypes;
		foreach ($briefTypes as $i => $iValue) {
			$this->options['query']['BriefTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeJobGroupExportTaskProgress extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeScript extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getScriptVoiceConfigId()
 * @method $this withScriptVoiceConfigId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeScriptVoiceConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DescribeTagHitsSummary extends Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 */
class DescribeTenantBindNumber extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeTTSConfig extends Rpc
{
}

/**
 * @method string getVoice()
 * @method $this withVoice($value)
 * @method string getSecretKey()
 * @method $this withSecretKey($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getPitchRate()
 * @method $this withPitchRate($value)
 * @method string getAliCustomizedVoice()
 * @method $this withAliCustomizedVoice($value)
 * @method string getNlsServiceType()
 * @method $this withNlsServiceType($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getSpeechRate()
 * @method $this withSpeechRate($value)
 */
class DescribeTTSDemo extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 * @method string getActionParams()
 * @method $this withActionParams($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getActionKey()
 * @method $this withActionKey($value)
 */
class Dialogue extends Rpc
{
}

/**
 * @method string getNeedVoiceSliceRecording()
 * @method $this withNeedVoiceSliceRecording($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DownloadRecording extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DownloadScriptRecording extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceScriptId()
 * @method $this withSourceScriptId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DuplicateScript extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ExportScript extends Rpc
{
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class GenerateUploadUrl extends Rpc
{
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class GetAfterAnswerDelayPlayback extends Rpc
{
}

/**
 * @method string getAppIp()
 * @method string getAgentProfileId()
 * @method string getInstanceId()
 */
class GetAgentProfile extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIp($value)
    {
        $this->data['AppIp'] = $value;
        $this->options['form_params']['AppIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentProfileId($value)
    {
        $this->data['AgentProfileId'] = $value;
        $this->options['form_params']['AgentProfileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIp()
 * @method string getAgentProfileTemplateId()
 */
class GetAgentProfileTemplate extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIp($value)
    {
        $this->data['AppIp'] = $value;
        $this->options['form_params']['AppIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentProfileTemplateId($value)
    {
        $this->data['AgentProfileTemplateId'] = $value;
        $this->options['form_params']['AgentProfileTemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getAnnotationMissionId()
 * @method $this withAnnotationMissionId($value)
 */
class GetAnnotationMissionSummary extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class GetAnnotationMissionTagInfoList extends Rpc
{
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class GetAsrServerInfo extends Rpc
{
}

/**
 * @method string getAsyncTaskId()
 * @method $this withAsyncTaskId($value)
 */
class GetAssignJobsAsyncResult extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class GetBaseStrategyPeriod extends Rpc
{
}

class GetConcurrentConversationQuota extends Rpc
{
}

/**
 * @method string getCountTotalRow()
 * @method $this withCountTotalRow($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetContactBlockList extends Rpc
{
}

/**
 * @method string getCountTotalRow()
 * @method $this withCountTotalRow($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetContactWhiteList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetCurrentConcurrency extends Rpc
{
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class GetEmptyNumberNoMoreCallsInfo extends Rpc
{
}

/**
 * @method string getBusiType()
 * @method $this withBusiType($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class GetJobDataUploadParams extends Rpc
{
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class GetMaxAttemptsPerDay extends Rpc
{
}

class GetNumberDistrictInfoTemplateDownloadUrl extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetRealtimeConcurrencyReport extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getInstanceIdList()
 */
class GetSummaryInfo extends Rpc
{

    /**
     * @param array $instanceIdList
     *
     * @return $this
     */
	public function withInstanceIdList(array $instanceIdList)
	{
	    $this->data['InstanceIdList'] = $instanceIdList;
		foreach ($instanceIdList as $i => $iValue) {
			$this->options['query']['InstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getWithConversations()
 * @method $this withWithConversations($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTaskByUuid extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class GetVersion extends Rpc
{
}

/**
 * @method string getSignatureUrl()
 * @method $this withSignatureUrl($value)
 * @method string getNluEngine()
 * @method $this withNluEngine($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ImportScript extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class InflightTaskTimeout extends Rpc
{
}

/**
 * @method string getAppIp()
 * @method string getScriptId()
 * @method string getInstanceId()
 */
class ListAgentProfiles extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIp($value)
    {
        $this->data['AppIp'] = $value;
        $this->options['form_params']['AppIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScriptId($value)
    {
        $this->data['ScriptId'] = $value;
        $this->options['form_params']['ScriptId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getTenant()
 * @method $this withTenant($value)
 */
class ListAllTenantBindNumberBinding extends Rpc
{
}

/**
 * @method string getCreateTimeStartFilter()
 * @method $this withCreateTimeStartFilter($value)
 * @method string getAnnotationStatusListStringFilter()
 * @method $this withAnnotationStatusListStringFilter($value)
 * @method string getAnnotationMissionId()
 * @method $this withAnnotationMissionId($value)
 * @method string getAnnotationMissionName()
 * @method $this withAnnotationMissionName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCreateTimeEndFilter()
 * @method $this withCreateTimeEndFilter($value)
 * @method array getAnnotationStatusListFilter()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListAnnotationMission extends Rpc
{

    /**
     * @param array $annotationStatusListFilter
     *
     * @return $this
     */
	public function withAnnotationStatusListFilter(array $annotationStatusListFilter)
	{
	    $this->data['AnnotationStatusListFilter'] = $annotationStatusListFilter;
		foreach ($annotationStatusListFilter as $i => $iValue) {
			$this->options['query']['AnnotationStatusListFilter.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAnnotationMissionSessionId()
 * @method $this withAnnotationMissionSessionId($value)
 * @method string getAnnotationMissionId()
 * @method $this withAnnotationMissionId($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getIncludeStatusListJsonString()
 * @method $this withIncludeStatusListJsonString($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListAnnotationMissionSession extends Rpc
{
}

/**
 * @method string getUuidsJson()
 * @method $this withUuidsJson($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListApiPlugins extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIntentName()
 * @method $this withIntentName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBeebotIntent extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLgfText()
 * @method $this withLgfText($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBeebotIntentLgf extends Rpc
{
}

/**
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBeebotIntentUserSay extends Rpc
{
}

/**
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListChatbotInstances extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDialogueFlows extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDownloadTasks extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProviderId()
 * @method $this withProviderId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class ListFlashSmsTemplates extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListGlobalQuestions extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 */
class ListInstances extends Rpc
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
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getAnnotationMissionDataSourceType()
 * @method $this withAnnotationMissionDataSourceType($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getBotId()
 * @method $this withBotId($value)
 */
class ListIntentions extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListIntents extends Rpc
{
}

/**
 * @method string getAsyncQuery()
 * @method $this withAsyncQuery($value)
 * @method string getSearchText()
 * @method $this withSearchText($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOnlyMinConcurrencyEnabled()
 * @method $this withOnlyMinConcurrencyEnabled($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupStatusFilter()
 * @method $this withJobGroupStatusFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListJobGroups extends Rpc
{
}

/**
 * @method string getAsyncTaskId()
 * @method $this withAsyncTaskId($value)
 */
class ListJobGroupsAsync extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListJobs extends Rpc
{

    /**
     * @param array $jobId
     *
     * @return $this
     */
	public function withJobId(array $jobId)
	{
	    $this->data['JobId'] = $jobId;
		foreach ($jobId as $i => $iValue) {
			$this->options['query']['JobId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getJobStatus()
 * @method $this withJobStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobFailureReason()
 * @method $this withJobFailureReason($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListJobsByGroup extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListOutboundCallNumbers extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListResourceTags extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListScriptPublishHistories extends Rpc
{
}

/**
 * @method string getRefIdsJson()
 * @method $this withRefIdsJson($value)
 * @method string getUuidsJson()
 * @method $this withUuidsJson($value)
 * @method string getStatesJson()
 * @method $this withStatesJson($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListScriptRecording extends Rpc
{
}

/**
 * @method string getScriptName()
 * @method $this withScriptName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNluEngine()
 * @method $this withNluEngine($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListScripts extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListScriptVoiceConfigs extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
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
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListTags extends Rpc
{
}

/**
 * @method string getModelConfig()
 * @method string getDescription()
 * @method string getVariablesJson()
 * @method string getInstructionJson()
 * @method string getScenario()
 * @method string getApiPluginJson()
 * @method string getModel()
 * @method string getLabelsJson()
 * @method string getAgentProfileId()
 * @method string getFaqCategoryIds()
 * @method string getInstanceId()
 * @method string getPromptJson()
 * @method string getPrompt()
 */
class ModifyAgentProfile extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelConfig($value)
    {
        $this->data['ModelConfig'] = $value;
        $this->options['form_params']['ModelConfig'] = $value;

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
    public function withVariablesJson($value)
    {
        $this->data['VariablesJson'] = $value;
        $this->options['form_params']['VariablesJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstructionJson($value)
    {
        $this->data['InstructionJson'] = $value;
        $this->options['form_params']['InstructionJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScenario($value)
    {
        $this->data['Scenario'] = $value;
        $this->options['form_params']['Scenario'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPluginJson($value)
    {
        $this->data['ApiPluginJson'] = $value;
        $this->options['form_params']['ApiPluginJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModel($value)
    {
        $this->data['Model'] = $value;
        $this->options['form_params']['Model'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLabelsJson($value)
    {
        $this->data['LabelsJson'] = $value;
        $this->options['form_params']['LabelsJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentProfileId($value)
    {
        $this->data['AgentProfileId'] = $value;
        $this->options['form_params']['AgentProfileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaqCategoryIds($value)
    {
        $this->data['FaqCategoryIds'] = $value;
        $this->options['form_params']['FaqCategoryIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPromptJson($value)
    {
        $this->data['PromptJson'] = $value;
        $this->options['form_params']['PromptJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrompt($value)
    {
        $this->data['Prompt'] = $value;
        $this->options['form_params']['Prompt'] = $value;

        return $this;
    }
}

/**
 * @method string getAnnotationStatus()
 * @method $this withAnnotationStatus($value)
 * @method string getDelete()
 * @method $this withDelete($value)
 * @method string getAnnotationMissionId()
 * @method $this withAnnotationMissionId($value)
 * @method string getAnnotationMissionName()
 * @method $this withAnnotationMissionName($value)
 */
class ModifyAnnotationMission extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubmitted()
 * @method $this withSubmitted($value)
 * @method string getBatchJobName()
 * @method $this withBatchJobName($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ModifyBatchJobs extends Rpc
{

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIntentDefinition()
 * @method $this withIntentDefinition($value)
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyBeebotIntent extends Rpc
{
}

/**
 * @method string getLgfId()
 * @method $this withLgfId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLgfDefinition()
 * @method $this withLgfDefinition($value)
 */
class ModifyBeebotIntentLgf extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserSayId()
 * @method $this withUserSayId($value)
 * @method string getUserSayDefinition()
 * @method $this withUserSayDefinition($value)
 */
class ModifyBeebotIntentUserSay extends Rpc
{
}

/**
 * @method string getIsDrafted()
 * @method $this withIsDrafted($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDialogueFlowDefinition()
 * @method $this withDialogueFlowDefinition($value)
 * @method string getDialogueFlowId()
 * @method $this withDialogueFlowId($value)
 */
class ModifyDialogueFlow extends Rpc
{
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEmptyNumberNoMoreCalls()
 * @method $this withEmptyNumberNoMoreCalls($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class ModifyEmptyNumberNoMoreCallsInfo extends Rpc
{
}

/**
 * @method string getGlobalQuestionId()
 * @method $this withGlobalQuestionId($value)
 * @method string getGlobalQuestionName()
 * @method $this withGlobalQuestionName($value)
 * @method string getQuestions()
 * @method $this withQuestions($value)
 * @method string getAnswers()
 * @method $this withAnswers($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGlobalQuestionType()
 * @method $this withGlobalQuestionType($value)
 */
class ModifyGlobalQuestion extends Rpc
{
}

/**
 * @method string getMaxConcurrentConversation()
 * @method $this withMaxConcurrentConversation($value)
 * @method string getSecretKey()
 * @method $this withSecretKey($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getCallCenterInstanceId()
 * @method $this withCallCenterInstanceId($value)
 * @method string getAccessKey()
 * @method $this withAccessKey($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getNluServiceType()
 * @method $this withNluServiceType($value)
 */
class ModifyInstance extends Rpc
{

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getUtterances()
 * @method $this withUtterances($value)
 * @method string getKeywords()
 * @method $this withKeywords($value)
 * @method string getIntentDescription()
 * @method $this withIntentDescription($value)
 * @method string getIntentId()
 * @method $this withIntentId($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIntentName()
 * @method $this withIntentName($value)
 */
class ModifyIntent extends Rpc
{
}

/**
 * @method string getRecallStrategyJson()
 * @method $this withRecallStrategyJson($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method array getRecallCallingNumber()
 * @method string getRingingDuration()
 * @method $this withRingingDuration($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getJobGroupStatus()
 * @method $this withJobGroupStatus($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getFlashSmsExtras()
 * @method $this withFlashSmsExtras($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMinConcurrency()
 * @method $this withMinConcurrency($value)
 */
class ModifyJobGroup extends Rpc
{

    /**
     * @param array $recallCallingNumber
     *
     * @return $this
     */
	public function withRecallCallingNumber(array $recallCallingNumber)
	{
	    $this->data['RecallCallingNumber'] = $recallCallingNumber;
		foreach ($recallCallingNumber as $i => $iValue) {
			$this->options['query']['RecallCallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getOutboundCallNumberId()
 * @method $this withOutboundCallNumberId($value)
 * @method string getRateLimitCount()
 * @method $this withRateLimitCount($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRateLimitPeriod()
 * @method $this withRateLimitPeriod($value)
 */
class ModifyOutboundCallNumber extends Rpc
{
}

/**
 * @method string getChatConfig()
 * @method $this withChatConfig($value)
 * @method string getTtsConfig()
 * @method $this withTtsConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getScriptName()
 * @method $this withScriptName($value)
 * @method string getNluEngine()
 * @method $this withNluEngine($value)
 * @method string getLabelConfig()
 * @method $this withLabelConfig($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getNluAccessType()
 * @method $this withNluAccessType($value)
 * @method array getScriptWaveform()
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getAgentLlm()
 * @method $this withAgentLlm($value)
 * @method string getMiniPlaybackConfigListJsonString()
 * @method $this withMiniPlaybackConfigListJsonString($value)
 * @method string getEmotionEnable()
 * @method $this withEmotionEnable($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getNlsConfig()
 * @method $this withNlsConfig($value)
 * @method string getNewBargeInEnable()
 * @method $this withNewBargeInEnable($value)
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getMiniPlaybackEnable()
 * @method $this withMiniPlaybackEnable($value)
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScriptDescription()
 * @method $this withScriptDescription($value)
 * @method string getLongWaitEnable()
 * @method $this withLongWaitEnable($value)
 * @method array getScriptContent()
 */
class ModifyScript extends Rpc
{

    /**
     * @param array $scriptWaveform
     *
     * @return $this
     */
	public function withScriptWaveform(array $scriptWaveform)
	{
	    $this->data['ScriptWaveform'] = $scriptWaveform;
		foreach ($scriptWaveform as $i => $iValue) {
			$this->options['query']['ScriptWaveform.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $scriptContent
     *
     * @return $this
     */
	public function withScriptContent(array $scriptContent)
	{
	    $this->data['ScriptContent'] = $scriptContent;
		foreach ($scriptContent as $i => $iValue) {
			$this->options['query']['ScriptContent.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getScriptVoiceConfigId()
 * @method $this withScriptVoiceConfigId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScriptWaveformRelation()
 * @method $this withScriptWaveformRelation($value)
 */
class ModifyScriptVoiceConfig extends Rpc
{
}

/**
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTagGroups()
 * @method $this withTagGroups($value)
 */
class ModifyTagGroups extends Rpc
{
}

/**
 * @method string getVoice()
 * @method $this withVoice($value)
 * @method string getNlsServiceType()
 * @method $this withNlsServiceType($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getSpeechRate()
 * @method $this withSpeechRate($value)
 * @method string getPitchRate()
 * @method $this withPitchRate($value)
 */
class ModifyTTSConfig extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class PublishScript extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class PublishScriptForDebug extends Rpc
{
}

/**
 * @method string getTimeAlignment()
 * @method $this withTimeAlignment($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class QueryJobs extends Rpc
{
}

/**
 * @method string getHasReachedEndOfFlowFilter()
 * @method $this withHasReachedEndOfFlowFilter($value)
 * @method string getEndActualTimeFilter()
 * @method $this withEndActualTimeFilter($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHasHangUpByRejectionFilter()
 * @method $this withHasHangUpByRejectionFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartActualTimeFilter()
 * @method $this withStartActualTimeFilter($value)
 * @method string getHasAnsweredFilter()
 * @method $this withHasAnsweredFilter($value)
 * @method array getLabelsJson()
 * @method string getTaskStatusFilter()
 * @method $this withTaskStatusFilter($value)
 * @method string getQueryText()
 * @method $this withQueryText($value)
 * @method string getJobFailureReasonsFilter()
 * @method $this withJobFailureReasonsFilter($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobStatusFilter()
 * @method $this withJobStatusFilter($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class QueryJobsWithResult extends Rpc
{

    /**
     * @param array $labelsJson
     *
     * @return $this
     */
	public function withLabelsJson(array $labelsJson)
	{
	    $this->data['LabelsJson'] = $labelsJson;
		foreach ($labelsJson as $i => $iValue) {
			$this->options['query']['LabelsJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getStatusList()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryScriptsByStatus extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScriptContent()
 * @method $this withScriptContent($value)
 */
class QueryScriptWaveforms extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getActualTime()
 * @method $this withActualTime($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDispositionCode()
 * @method $this withDispositionCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getExceptionCodes()
 * @method $this withExceptionCodes($value)
 */
class RecordFailure extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobReferenceId()
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ResumeJobs extends Rpc
{

    /**
     * @param array $jobReferenceId
     *
     * @return $this
     */
	public function withJobReferenceId(array $jobReferenceId)
	{
	    $this->data['JobReferenceId'] = $jobReferenceId;
		foreach ($jobReferenceId as $i => $iValue) {
			$this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $jobId
     *
     * @return $this
     */
	public function withJobId(array $jobId)
	{
	    $this->data['JobId'] = $jobId;
		foreach ($jobId as $i => $iValue) {
			$this->options['query']['JobId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRollbackVersion()
 * @method $this withRollbackVersion($value)
 */
class RollbackScript extends Rpc
{
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 * @method string getAfterAnswerDelayPlayback()
 * @method $this withAfterAnswerDelayPlayback($value)
 */
class SaveAfterAnswerDelayPlayback extends Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 * @method string getAnnotationMissionDataSourceType()
 * @method $this withAnnotationMissionDataSourceType($value)
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method array getAnnotationMissionSessionList()
 * @method string getAnnotationMissionSessionListJsonString()
 * @method $this withAnnotationMissionSessionListJsonString($value)
 */
class SaveAnnotationMissionSessionList extends Rpc
{

    /**
     * @param array $annotationMissionSessionList
     *
     * @return $this
     */
	public function withAnnotationMissionSessionList(array $annotationMissionSessionList)
	{
	    $this->data['AnnotationMissionSessionList'] = $annotationMissionSessionList;
		foreach ($annotationMissionSessionList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AnnotationMissionId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionId'] = $depth1Value['AnnotationMissionId'];
			}
			if(isset($depth1Value['JobId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.JobId'] = $depth1Value['JobId'];
			}
			if(isset($depth1Value['CreateTime'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.CreateTime'] = $depth1Value['CreateTime'];
			}
			if(isset($depth1Value['ScriptId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.ScriptId'] = $depth1Value['ScriptId'];
			}
			if(isset($depth1Value['ModifiedTime'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.ModifiedTime'] = $depth1Value['ModifiedTime'];
			}
			if(isset($depth1Value['InstanceId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['AnnotationMissionSessionId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionSessionId'] = $depth1Value['AnnotationMissionSessionId'];
			}
			foreach ($depth1Value['AnnotationMissionChatList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['CreateTime'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.CreateTime'] = $depth2Value['CreateTime'];
				}
				if(isset($depth2Value['TagAnnotationStatus'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.TagAnnotationStatus'] = $depth2Value['TagAnnotationStatus'];
				}
				if(isset($depth2Value['AsrAnnotationStatus'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AsrAnnotationStatus'] = $depth2Value['AsrAnnotationStatus'];
				}
				if(isset($depth2Value['AnnotationAsrResult'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationAsrResult'] = $depth2Value['AnnotationAsrResult'];
				}
				if(isset($depth2Value['AnnotationMissionSessionId'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionSessionId'] = $depth2Value['AnnotationMissionSessionId'];
				}
				if(isset($depth2Value['SubStatus'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.SubStatus'] = $depth2Value['SubStatus'];
				}
				if(isset($depth2Value['AnnotationMissionChatId'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatId'] = $depth2Value['AnnotationMissionChatId'];
				}
				if(isset($depth2Value['AnnotationStatus'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationStatus'] = $depth2Value['AnnotationStatus'];
				}
				foreach ($depth2Value['AnnotationMissionChatVocabularyInfoList'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['CreateTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.CreateTime'] = $depth3Value['CreateTime'];
					}
					if(isset($depth3Value['AnnotationMissionSessionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.AnnotationMissionSessionId'] = $depth3Value['AnnotationMissionSessionId'];
					}
					if(isset($depth3Value['VocabularyId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.VocabularyId'] = $depth3Value['VocabularyId'];
					}
					if(isset($depth3Value['AnnotationMissionChatId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatId'] = $depth3Value['AnnotationMissionChatId'];
					}
					if(isset($depth3Value['Delete'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.Delete'] = $depth3Value['Delete'];
					}
					if(isset($depth3Value['AnnotationMissionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.AnnotationMissionId'] = $depth3Value['AnnotationMissionId'];
					}
					if(isset($depth3Value['ModifiedTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.ModifiedTime'] = $depth3Value['ModifiedTime'];
					}
					if(isset($depth3Value['InstanceId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.InstanceId'] = $depth3Value['InstanceId'];
					}
					if(isset($depth3Value['Vocabulary'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.Vocabulary'] = $depth3Value['Vocabulary'];
					}
					if(isset($depth3Value['VocabularyName'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.VocabularyName'] = $depth3Value['VocabularyName'];
					}
					if(isset($depth3Value['Create'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.Create'] = $depth3Value['Create'];
					}
					if(isset($depth3Value['VocabularyWeight'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.VocabularyWeight'] = $depth3Value['VocabularyWeight'];
					}
					if(isset($depth3Value['AnnotationMissionChatVocabularyInfoId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatVocabularyInfoId'] = $depth3Value['AnnotationMissionChatVocabularyInfoId'];
					}
					if(isset($depth3Value['VocabularyDescription'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatVocabularyInfoList.' . ($depth3 + 1) . '.VocabularyDescription'] = $depth3Value['VocabularyDescription'];
					}
				}
				if(isset($depth2Value['SequenceId'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.SequenceId'] = $depth2Value['SequenceId'];
				}
				foreach ($depth2Value['AnnotationMissionChatIntentUserSayInfoList'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['CreateTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.CreateTime'] = $depth3Value['CreateTime'];
					}
					if(isset($depth3Value['AnnotationMissionSessionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.AnnotationMissionSessionId'] = $depth3Value['AnnotationMissionSessionId'];
					}
					if(isset($depth3Value['AnnotationMissionChatId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatId'] = $depth3Value['AnnotationMissionChatId'];
					}
					if(isset($depth3Value['IntentId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.IntentId'] = $depth3Value['IntentId'];
					}
					if(isset($depth3Value['DialogId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.DialogId'] = $depth3Value['DialogId'];
					}
					if(isset($depth3Value['Delete'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.Delete'] = $depth3Value['Delete'];
					}
					if(isset($depth3Value['Content'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.Content'] = $depth3Value['Content'];
					}
					if(isset($depth3Value['AnnotationMissionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.AnnotationMissionId'] = $depth3Value['AnnotationMissionId'];
					}
					if(isset($depth3Value['ModifiedTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.ModifiedTime'] = $depth3Value['ModifiedTime'];
					}
					if(isset($depth3Value['InstanceId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.InstanceId'] = $depth3Value['InstanceId'];
					}
					if(isset($depth3Value['AnnotationMissionChatIntentUserSayInfoId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatIntentUserSayInfoId'] = $depth3Value['AnnotationMissionChatIntentUserSayInfoId'];
					}
					if(isset($depth3Value['Create'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.Create'] = $depth3Value['Create'];
					}
					if(isset($depth3Value['BotId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatIntentUserSayInfoList.' . ($depth3 + 1) . '.BotId'] = $depth3Value['BotId'];
					}
				}
				if(isset($depth2Value['AnnotationMissionId'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionId'] = $depth2Value['AnnotationMissionId'];
				}
				if(isset($depth2Value['ModifiedTime'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.ModifiedTime'] = $depth2Value['ModifiedTime'];
				}
				if(isset($depth2Value['InstanceId'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.InstanceId'] = $depth2Value['InstanceId'];
				}
				if(isset($depth2Value['IntentAnnotationStatus'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.IntentAnnotationStatus'] = $depth2Value['IntentAnnotationStatus'];
				}
				if(isset($depth2Value['OccurTime'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.OccurTime'] = $depth2Value['OccurTime'];
				}
				if(isset($depth2Value['Answer'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.Answer'] = $depth2Value['Answer'];
				}
				foreach ($depth2Value['AnnotationMissionChatCustomizationDataInfoList'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['CreateTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.CreateTime'] = $depth3Value['CreateTime'];
					}
					if(isset($depth3Value['AnnotationMissionSessionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.AnnotationMissionSessionId'] = $depth3Value['AnnotationMissionSessionId'];
					}
					if(isset($depth3Value['AnnotationMissionChatId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatId'] = $depth3Value['AnnotationMissionChatId'];
					}
					if(isset($depth3Value['CustomizationDataId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.CustomizationDataId'] = $depth3Value['CustomizationDataId'];
					}
					if(isset($depth3Value['Delete'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.Delete'] = $depth3Value['Delete'];
					}
					if(isset($depth3Value['Content'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.Content'] = $depth3Value['Content'];
					}
					if(isset($depth3Value['AnnotationMissionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.AnnotationMissionId'] = $depth3Value['AnnotationMissionId'];
					}
					if(isset($depth3Value['CustomizationDataWeight'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.CustomizationDataWeight'] = $depth3Value['CustomizationDataWeight'];
					}
					if(isset($depth3Value['ModifiedTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.ModifiedTime'] = $depth3Value['ModifiedTime'];
					}
					if(isset($depth3Value['InstanceId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.InstanceId'] = $depth3Value['InstanceId'];
					}
					if(isset($depth3Value['Create'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.Create'] = $depth3Value['Create'];
					}
					if(isset($depth3Value['AnnotationMissionChatCustomizationDataInfoId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatCustomizationDataInfoId'] = $depth3Value['AnnotationMissionChatCustomizationDataInfoId'];
					}
					if(isset($depth3Value['CustomizationDataDescription'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.CustomizationDataDescription'] = $depth3Value['CustomizationDataDescription'];
					}
					if(isset($depth3Value['CustomizationDataName'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatCustomizationDataInfoList.' . ($depth3 + 1) . '.CustomizationDataName'] = $depth3Value['CustomizationDataName'];
					}
				}
				foreach ($depth2Value['AnnotationMissionChatTagInfoList'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['AnnotationMissionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.AnnotationMissionId'] = $depth3Value['AnnotationMissionId'];
					}
					if(isset($depth3Value['AnnotationMissionTagInfoId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.AnnotationMissionTagInfoId'] = $depth3Value['AnnotationMissionTagInfoId'];
					}
					if(isset($depth3Value['CreateTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.CreateTime'] = $depth3Value['CreateTime'];
					}
					if(isset($depth3Value['AnnotationMissionTagInfoName'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.AnnotationMissionTagInfoName'] = $depth3Value['AnnotationMissionTagInfoName'];
					}
					if(isset($depth3Value['AnnotationMissionChatTagInfoId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatTagInfoId'] = $depth3Value['AnnotationMissionChatTagInfoId'];
					}
					if(isset($depth3Value['ModifiedTime'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.ModifiedTime'] = $depth3Value['ModifiedTime'];
					}
					if(isset($depth3Value['InstanceId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.InstanceId'] = $depth3Value['InstanceId'];
					}
					if(isset($depth3Value['AnnotationMissionSessionId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.AnnotationMissionSessionId'] = $depth3Value['AnnotationMissionSessionId'];
					}
					if(isset($depth3Value['AnnotationMissionChatId'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.AnnotationMissionChatId'] = $depth3Value['AnnotationMissionChatId'];
					}
					if(isset($depth3Value['Create'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.Create'] = $depth3Value['Create'];
					}
					if(isset($depth3Value['Delete'])){
						$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.AnnotationMissionChatTagInfoList.' . ($depth3 + 1) . '.Delete'] = $depth3Value['Delete'];
					}
				}
				if(isset($depth2Value['OriginalAsrResult'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.OriginalAsrResult'] = $depth2Value['OriginalAsrResult'];
				}
				if(isset($depth2Value['TranslationError'])){
					$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationMissionChatList.' . ($depth2 + 1) . '.TranslationError'] = $depth2Value['TranslationError'];
				}
			}
			if(isset($depth1Value['AnnotationStatus'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.AnnotationStatus'] = $depth1Value['AnnotationStatus'];
			}
			if(isset($depth1Value['JobGroupId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.JobGroupId'] = $depth1Value['JobGroupId'];
			}
			if(isset($depth1Value['SessionId'])){
				$this->options['query']['AnnotationMissionSessionList.' . ($depth1 + 1) . '.SessionId'] = $depth1Value['SessionId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAnnotationMissionTagInfoListJsonString()
 * @method $this withAnnotationMissionTagInfoListJsonString($value)
 * @method string getReset()
 * @method $this withReset($value)
 * @method array getAnnotationMissionTagInfoList()
 */
class SaveAnnotationMissionTagInfoList extends Rpc
{

    /**
     * @param array $annotationMissionTagInfoList
     *
     * @return $this
     */
	public function withAnnotationMissionTagInfoList(array $annotationMissionTagInfoList)
	{
	    $this->data['AnnotationMissionTagInfoList'] = $annotationMissionTagInfoList;
		foreach ($annotationMissionTagInfoList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AnnotationMissionTagInfoId'])){
				$this->options['query']['AnnotationMissionTagInfoList.' . ($depth1 + 1) . '.AnnotationMissionTagInfoId'] = $depth1Value['AnnotationMissionTagInfoId'];
			}
			if(isset($depth1Value['AnnotationMissionTagInfoName'])){
				$this->options['query']['AnnotationMissionTagInfoList.' . ($depth1 + 1) . '.AnnotationMissionTagInfoName'] = $depth1Value['AnnotationMissionTagInfoName'];
			}
			if(isset($depth1Value['InstanceId'])){
				$this->options['query']['AnnotationMissionTagInfoList.' . ($depth1 + 1) . '.InstanceId'] = $depth1Value['InstanceId'];
			}
			if(isset($depth1Value['AnnotationMissionTagInfoDescription'])){
				$this->options['query']['AnnotationMissionTagInfoList.' . ($depth1 + 1) . '.AnnotationMissionTagInfoDescription'] = $depth1Value['AnnotationMissionTagInfoDescription'];
			}
			if(isset($depth1Value['TenantId'])){
				$this->options['query']['AnnotationMissionTagInfoList.' . ($depth1 + 1) . '.TenantId'] = $depth1Value['TenantId'];
			}
			if(isset($depth1Value['Delete'])){
				$this->options['query']['AnnotationMissionTagInfoList.' . ($depth1 + 1) . '.Delete'] = $depth1Value['Delete'];
			}
		}

		return $this;
    }
}

/**
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getOnlyWorkdays()
 * @method $this withOnlyWorkdays($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 * @method string getOnlyWeekdays()
 * @method $this withOnlyWeekdays($value)
 * @method string getWorkingTimeFramesJson()
 * @method $this withWorkingTimeFramesJson($value)
 * @method array getWorkingTime()
 */
class SaveBaseStrategyPeriod extends Rpc
{

    /**
     * @param array $workingTime
     *
     * @return $this
     */
	public function withWorkingTime(array $workingTime)
	{
	    $this->data['WorkingTime'] = $workingTime;
		foreach ($workingTime as $i => $iValue) {
			$this->options['query']['WorkingTime.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getContactBlockListList()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactBlockListsJson()
 * @method $this withContactBlockListsJson($value)
 */
class SaveContactBlockList extends Rpc
{

    /**
     * @param array $contactBlockListList
     *
     * @return $this
     */
	public function withContactBlockListList(array $contactBlockListList)
	{
	    $this->data['ContactBlockListList'] = $contactBlockListList;
		foreach ($contactBlockListList as $i => $iValue) {
			$this->options['query']['ContactBlockListList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getContactWhiteListList()
 * @method string getContactWhiteListsJson()
 * @method $this withContactWhiteListsJson($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SaveContactWhiteList extends Rpc
{

    /**
     * @param array $contactWhiteListList
     *
     * @return $this
     */
	public function withContactWhiteListList(array $contactWhiteListList)
	{
	    $this->data['ContactWhiteListList'] = $contactWhiteListList;
		foreach ($contactWhiteListList as $i => $iValue) {
			$this->options['query']['ContactWhiteListList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEffectiveDays()
 * @method $this withEffectiveDays($value)
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class SaveEffectiveDays extends Rpc
{
}

/**
 * @method string getMaxAttemptsPerDay()
 * @method $this withMaxAttemptsPerDay($value)
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class SaveMaxAttemptsPerDay extends Rpc
{
}

/**
 * @method string getActualTimeLte()
 * @method $this withActualTimeLte($value)
 * @method string getOtherId()
 * @method $this withOtherId($value)
 * @method string getTaskCreateTimeLte()
 * @method $this withTaskCreateTimeLte($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTaskCreateTimeGte()
 * @method $this withTaskCreateTimeGte($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getUserIdMatch()
 * @method $this withUserIdMatch($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScriptNameQuery()
 * @method $this withScriptNameQuery($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getTaskStatusStringList()
 * @method $this withTaskStatusStringList($value)
 * @method string getJobGroupNameQuery()
 * @method $this withJobGroupNameQuery($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method array getLabelsJson()
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRecordingDurationGte()
 * @method $this withRecordingDurationGte($value)
 * @method string getCallDurationLte()
 * @method $this withCallDurationLte($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getJobStatusStringList()
 * @method $this withJobStatusStringList($value)
 * @method string getActualTimeGte()
 * @method $this withActualTimeGte($value)
 * @method string getCallDurationGte()
 * @method $this withCallDurationGte($value)
 * @method string getRecordingDurationLte()
 * @method $this withRecordingDurationLte($value)
 */
class SearchTask extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $labelsJson
     *
     * @return $this
     */
	public function withLabelsJson(array $labelsJson)
	{
	    $this->data['LabelsJson'] = $labelsJson;
		foreach ($labelsJson as $i => $iValue) {
			$this->options['query']['LabelsJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getJobJson()
 * @method $this withJobJson($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getSelfHostedCallCenter()
 * @method $this withSelfHostedCallCenter($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class StartJob extends Rpc
{

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function withCallingNumber(array $callingNumber)
	{
	    $this->data['CallingNumber'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class SubmitBatchJobs extends Rpc
{
}

/**
 * @method string getMergedRecording()
 * @method $this withMergedRecording($value)
 * @method string getResourceRecording()
 * @method $this withResourceRecording($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class SubmitRecording extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 */
class SubmitScriptReview extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getCalledNumbers()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SuspendCall extends Rpc
{

    /**
     * @param array $calledNumbers
     *
     * @return $this
     */
	public function withCalledNumbers(array $calledNumbers)
	{
	    $this->data['CalledNumbers'] = $calledNumbers;
		foreach ($calledNumbers as $i => $iValue) {
			$this->options['query']['CalledNumbers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFilePath()
 * @method $this withFilePath($value)
 */
class SuspendCallWithFile extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobReferenceId()
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class SuspendJobs extends Rpc
{

    /**
     * @param array $jobReferenceId
     *
     * @return $this
     */
	public function withJobReferenceId(array $jobReferenceId)
	{
	    $this->data['JobReferenceId'] = $jobReferenceId;
		foreach ($jobReferenceId as $i => $iValue) {
			$this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $jobId
     *
     * @return $this
     */
	public function withJobId(array $jobId)
	{
	    $this->data['JobId'] = $jobId;
		foreach ($jobId as $i => $iValue) {
			$this->options['query']['JobId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class TaskPreparing extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class TerminateCall extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
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
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class UploadScriptRecording extends Rpc
{
}

/**
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class WithdrawScriptReview extends Rpc
{
}
