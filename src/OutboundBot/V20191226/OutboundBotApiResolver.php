<?php

namespace AlibabaCloud\OutboundBot\V20191226;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApplyNumberDistrictInfoParsingResult applyNumberDistrictInfoParsingResult(array $options = [])
 * @method AssignJobs assignJobs(array $options = [])
 * @method CancelJobs cancelJobs(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CreateBatchJobs createBatchJobs(array $options = [])
 * @method CreateBatchRepeatJob createBatchRepeatJob(array $options = [])
 * @method CreateDialogueFlow createDialogueFlow(array $options = [])
 * @method CreateDownloadUrl createDownloadUrl(array $options = [])
 * @method CreateGlobalQuestion createGlobalQuestion(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateIntent createIntent(array $options = [])
 * @method CreateJobDataParsingTask createJobDataParsingTask(array $options = [])
 * @method CreateJobGroup createJobGroup(array $options = [])
 * @method CreateJobGroupExportTask createJobGroupExportTask(array $options = [])
 * @method CreateNumberDistrictInfoDownloadUrl createNumberDistrictInfoDownloadUrl(array $options = [])
 * @method CreateNumberDistrictInfoParsingTask createNumberDistrictInfoParsingTask(array $options = [])
 * @method CreateOutboundCallNumber createOutboundCallNumber(array $options = [])
 * @method CreateScript createScript(array $options = [])
 * @method CreateScriptWaveform createScriptWaveform(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method DeleteAllNumberDistrictInfo deleteAllNumberDistrictInfo(array $options = [])
 * @method DeleteContactBlockList deleteContactBlockList(array $options = [])
 * @method DeleteContactWhiteList deleteContactWhiteList(array $options = [])
 * @method DeleteDialogueFlow deleteDialogueFlow(array $options = [])
 * @method DeleteGlobalQuestion deleteGlobalQuestion(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteIntent deleteIntent(array $options = [])
 * @method DeleteJobGroup deleteJobGroup(array $options = [])
 * @method DeleteOutboundCallNumber deleteOutboundCallNumber(array $options = [])
 * @method DeleteScript deleteScript(array $options = [])
 * @method DeleteScriptWaveform deleteScriptWaveform(array $options = [])
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
 * @method DescribeNumberDistrictInfoStatus describeNumberDistrictInfoStatus(array $options = [])
 * @method DescribeScript describeScript(array $options = [])
 * @method DescribeScriptVoiceConfig describeScriptVoiceConfig(array $options = [])
 * @method DescribeTagHitsSummary describeTagHitsSummary(array $options = [])
 * @method DescribeTTSConfig describeTTSConfig(array $options = [])
 * @method DescribeTTSDemo describeTTSDemo(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DismissNumberDistrictInfoParsingResult dismissNumberDistrictInfoParsingResult(array $options = [])
 * @method DownloadRecording downloadRecording(array $options = [])
 * @method DuplicateScript duplicateScript(array $options = [])
 * @method ExportScript exportScript(array $options = [])
 * @method GetAfterAnswerDelayPlayback getAfterAnswerDelayPlayback(array $options = [])
 * @method GetAsrServerInfo getAsrServerInfo(array $options = [])
 * @method GetBaseStrategyPeriod getBaseStrategyPeriod(array $options = [])
 * @method GetConcurrentConversationQuota getConcurrentConversationQuota(array $options = [])
 * @method GetContactBlockList getContactBlockList(array $options = [])
 * @method GetContactWhiteList getContactWhiteList(array $options = [])
 * @method GetCurrentConcurrency getCurrentConcurrency(array $options = [])
 * @method GetEffectiveDays getEffectiveDays(array $options = [])
 * @method GetEmptyNumberNoMoreCallsInfo getEmptyNumberNoMoreCallsInfo(array $options = [])
 * @method GetInstanceConfig getInstanceConfig(array $options = [])
 * @method GetMaxAttemptsPerDay getMaxAttemptsPerDay(array $options = [])
 * @method GetNumberDistrictInfoTemplateDownloadUrl getNumberDistrictInfoTemplateDownloadUrl(array $options = [])
 * @method GetSummaryInfo getSummaryInfo(array $options = [])
 * @method GetTaskByUuid getTaskByUuid(array $options = [])
 * @method GetVersion getVersion(array $options = [])
 * @method ImportScript importScript(array $options = [])
 * @method InflightTaskTimeout inflightTaskTimeout(array $options = [])
 * @method ListChatbotInstances listChatbotInstances(array $options = [])
 * @method ListDialogueFlows listDialogueFlows(array $options = [])
 * @method ListDownloadTasks listDownloadTasks(array $options = [])
 * @method ListGlobalQuestions listGlobalQuestions(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListIntents listIntents(array $options = [])
 * @method ListJobGroups listJobGroups(array $options = [])
 * @method ListJobGroupsAsync listJobGroupsAsync(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListJobsByGroup listJobsByGroup(array $options = [])
 * @method ListOutboundCallNumbers listOutboundCallNumbers(array $options = [])
 * @method ListResourceTags listResourceTags(array $options = [])
 * @method ListSchedulerInstances listSchedulerInstances(array $options = [])
 * @method ListScriptPublishHistories listScriptPublishHistories(array $options = [])
 * @method ListScripts listScripts(array $options = [])
 * @method ListScriptVoiceConfigs listScriptVoiceConfigs(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ModifyBatchJobs modifyBatchJobs(array $options = [])
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
 * @method string getVersionId()
 * @method $this withVersionId($value)
 */
class ApplyNumberDistrictInfoParsingResult extends Rpc
{
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
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFilterStatus()
 * @method $this withFilterStatus($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourceGroupId()
 * @method $this withSourceGroupId($value)
 * @method string getRingingDuration()
 * @method $this withRingingDuration($value)
 */
class CreateBatchRepeatJob extends Rpc
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
 * @method string getJobGroupDescription()
 * @method $this withJobGroupDescription($value)
 * @method string getJobGroupName()
 * @method $this withJobGroupName($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getRingingDuration()
 * @method $this withRingingDuration($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateJobGroup extends Rpc
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
 * @method string getVersionId()
 * @method $this withVersionId($value)
 */
class CreateNumberDistrictInfoDownloadUrl extends Rpc
{
}

/**
 * @method string getFileSize()
 * @method $this withFileSize($value)
 * @method string getFilePath()
 * @method $this withFilePath($value)
 */
class CreateNumberDistrictInfoParsingTask extends Rpc
{
}

/**
 * @method string getRateLimitCount()
 * @method $this withRateLimitCount($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRateLimitPeriod()
 * @method $this withRateLimitPeriod($value)
 */
class CreateOutboundCallNumber extends Rpc
{
}

/**
 * @method string getTtsConfig()
 * @method $this withTtsConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getScriptName()
 * @method $this withScriptName($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method array getScriptWaveform()
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getNewBargeInEnable()
 * @method $this withNewBargeInEnable($value)
 * @method string getMiniPlaybackEnable()
 * @method $this withMiniPlaybackEnable($value)
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScriptDescription()
 * @method $this withScriptDescription($value)
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

class DeleteAllNumberDistrictInfo extends Rpc
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

class DescribeNumberDistrictInfoStatus extends Rpc
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
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getSpeechRate()
 * @method $this withSpeechRate($value)
 */
class DescribeTTSDemo extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
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
 * @method string getVersionId()
 * @method $this withVersionId($value)
 */
class DismissNumberDistrictInfoParsingResult extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DownloadRecording extends Rpc
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
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 */
class GetAfterAnswerDelayPlayback extends Rpc
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
class GetEffectiveDays extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceConfig extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDownloadTasks extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
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
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class ListSchedulerInstances extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 * @method array getCallingNumber()
 * @method string getScriptId()
 * @method $this withScriptId($value)
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
 * @method string getRingingDuration()
 * @method $this withRingingDuration($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getJobGroupStatus()
 * @method $this withJobGroupStatus($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyJobGroup extends Rpc
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
 * @method string getTtsConfig()
 * @method $this withTtsConfig($value)
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getScriptName()
 * @method $this withScriptName($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method array getScriptWaveform()
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getMiniPlaybackEnabled()
 * @method $this withMiniPlaybackEnabled($value)
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScriptDescription()
 * @method $this withScriptDescription($value)
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
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSpeechRate()
 * @method $this withSpeechRate($value)
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
 * @method string getHasAnsweredFilter()
 * @method $this withHasAnsweredFilter($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryText()
 * @method $this withQueryText($value)
 * @method string getHasHangUpByRejectionFilter()
 * @method $this withHasHangUpByRejectionFilter($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobStatusFilter()
 * @method $this withJobStatusFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class QueryJobsWithResult extends Rpc
{
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
 * @method string getStrategyLevel()
 * @method $this withStrategyLevel($value)
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
}

/**
 * @method string getJobJson()
 * @method $this withJobJson($value)
 * @method array getCallingNumber()
 * @method string getScriptId()
 * @method $this withScriptId($value)
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
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class WithdrawScriptReview extends Rpc
{
}
