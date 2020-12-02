<?php

namespace AlibabaCloud\OutboundBot\V20191226;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssignJobs assignJobs(array $options = [])
 * @method CancelJobs cancelJobs(array $options = [])
 * @method CreateBatchJobs createBatchJobs(array $options = [])
 * @method CreateDialogueFlow createDialogueFlow(array $options = [])
 * @method CreateGlobalQuestion createGlobalQuestion(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateIntent createIntent(array $options = [])
 * @method CreateJobGroup createJobGroup(array $options = [])
 * @method CreateOutboundCallNumber createOutboundCallNumber(array $options = [])
 * @method CreateScript createScript(array $options = [])
 * @method CreateScriptWaveform createScriptWaveform(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method DeleteDialogueFlow deleteDialogueFlow(array $options = [])
 * @method DeleteGlobalQuestion deleteGlobalQuestion(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteIntent deleteIntent(array $options = [])
 * @method DeleteJobGroup deleteJobGroup(array $options = [])
 * @method DeleteOutboundCallNumber deleteOutboundCallNumber(array $options = [])
 * @method DeleteScript deleteScript(array $options = [])
 * @method DeleteScriptWaveform deleteScriptWaveform(array $options = [])
 * @method DescribeGlobalQuestion describeGlobalQuestion(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeIntent describeIntent(array $options = [])
 * @method DescribeJob describeJob(array $options = [])
 * @method DescribeJobGroup describeJobGroup(array $options = [])
 * @method DescribeScript describeScript(array $options = [])
 * @method DescribeScriptVoiceConfig describeScriptVoiceConfig(array $options = [])
 * @method DescribeTagHitsSummary describeTagHitsSummary(array $options = [])
 * @method DescribeTTSConfig describeTTSConfig(array $options = [])
 * @method DescribeTTSDemo describeTTSDemo(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DownloadRecording downloadRecording(array $options = [])
 * @method DuplicateScript duplicateScript(array $options = [])
 * @method ExportScript exportScript(array $options = [])
 * @method ImportScript importScript(array $options = [])
 * @method ListDialogueFlows listDialogueFlows(array $options = [])
 * @method ListGlobalQuestions listGlobalQuestions(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListIntents listIntents(array $options = [])
 * @method ListJobGroups listJobGroups(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListJobsByGroup listJobsByGroup(array $options = [])
 * @method ListMedia listMedia(array $options = [])
 * @method ListOutboundCallNumbers listOutboundCallNumbers(array $options = [])
 * @method ListScriptPublishHistories listScriptPublishHistories(array $options = [])
 * @method ListScripts listScripts(array $options = [])
 * @method ListScriptVoiceConfigs listScriptVoiceConfigs(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ModifyBatchJobs modifyBatchJobs(array $options = [])
 * @method ModifyDialogueFlow modifyDialogueFlow(array $options = [])
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
 * @method QueryScriptsByStatus queryScriptsByStatus(array $options = [])
 * @method QueryScriptWaveforms queryScriptWaveforms(array $options = [])
 * @method RecordFailure recordFailure(array $options = [])
 * @method ResumeJobs resumeJobs(array $options = [])
 * @method RollbackScript rollbackScript(array $options = [])
 * @method StartJob startJob(array $options = [])
 * @method SubmitBatchJobs submitBatchJobs(array $options = [])
 * @method SubmitRecording submitRecording(array $options = [])
 * @method SubmitScriptReview submitScriptReview(array $options = [])
 * @method SuspendJobs suspendJobs(array $options = [])
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
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
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
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
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
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getScriptDescription()
 * @method $this withScriptDescription($value)
 */
class CreateScript extends Rpc
{
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeJob extends Rpc
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
 * @method string getSignatureUrl()
 * @method $this withSignatureUrl($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ImportScript extends Rpc
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

class ListInstances extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListJobGroups extends Rpc
{
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
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 */
class ListMedia extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getCallingNumber()
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
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
 * @method string getChatbotId()
 * @method $this withChatbotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAsrConfig()
 * @method $this withAsrConfig($value)
 * @method string getScriptDescription()
 * @method $this withScriptDescription($value)
 */
class ModifyScript extends Rpc
{
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
 * @method string getJobJson()
 * @method $this withJobJson($value)
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
 */
class SubmitScriptReview extends Rpc
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
 * @method string getScriptId()
 * @method $this withScriptId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class WithdrawScriptReview extends Rpc
{
}
