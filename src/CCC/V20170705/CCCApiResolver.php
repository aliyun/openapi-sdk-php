<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbortPredictiveJobs abortPredictiveJobs(array $options = [])
 * @method AddAgentDevice addAgentDevice(array $options = [])
 * @method AddBulkPhoneNumbers addBulkPhoneNumbers(array $options = [])
 * @method AddJobsToPredictiveJobGroup addJobsToPredictiveJobGroup(array $options = [])
 * @method AddPhoneNumber addPhoneNumber(array $options = [])
 * @method AddPhoneTags addPhoneTags(array $options = [])
 * @method AssignJobs assignJobs(array $options = [])
 * @method AssignUsers assignUsers(array $options = [])
 * @method CallOnlinePrivacyNumber callOnlinePrivacyNumber(array $options = [])
 * @method CancelJobs cancelJobs(array $options = [])
 * @method CheckNumberAvaliable checkNumberAvaliable(array $options = [])
 * @method CommitContactFlowVersionModification commitContactFlowVersionModification(array $options = [])
 * @method CreateBatchJobs createBatchJobs(array $options = [])
 * @method CreateCabInstance createCabInstance(array $options = [])
 * @method CreateContactFlow createContactFlow(array $options = [])
 * @method CreateFault createFault(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateJobGroup createJobGroup(array $options = [])
 * @method CreateMedia createMedia(array $options = [])
 * @method CreatePredictiveJobGroup createPredictiveJobGroup(array $options = [])
 * @method CreateScenario createScenario(array $options = [])
 * @method CreateScenarioFromTemplate createScenarioFromTemplate(array $options = [])
 * @method CreateSkillGroup createSkillGroup(array $options = [])
 * @method CreateSurvey createSurvey(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateVoiceAppraise createVoiceAppraise(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteJobGroup deleteJobGroup(array $options = [])
 * @method DeleteMedia deleteMedia(array $options = [])
 * @method DeletePhoneTags deletePhoneTags(array $options = [])
 * @method DeleteSkillGroup deleteSkillGroup(array $options = [])
 * @method DeleteSurvey deleteSurvey(array $options = [])
 * @method DialEx dialEx(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DisableTrunkProviders disableTrunkProviders(array $options = [])
 * @method DownloadAllTypeRecording downloadAllTypeRecording(array $options = [])
 * @method DownloadCabRecording downloadCabRecording(array $options = [])
 * @method DownloadOriginalStatisticsReport downloadOriginalStatisticsReport(array $options = [])
 * @method DownloadRecording downloadRecording(array $options = [])
 * @method DownloadUnreachableContacts downloadUnreachableContacts(array $options = [])
 * @method FindUsers findUsers(array $options = [])
 * @method GenerateAgentStatisticReport generateAgentStatisticReport(array $options = [])
 * @method GetAgentData getAgentData(array $options = [])
 * @method GetCallMeasureSummaryReport getCallMeasureSummaryReport(array $options = [])
 * @method GetConfig getConfig(array $options = [])
 * @method GetContactInfoByOutboundTaskId getContactInfoByOutboundTaskId(array $options = [])
 * @method GetConversationDetailByContactId getConversationDetailByContactId(array $options = [])
 * @method GetConversationList getConversationList(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetInstanceState getInstanceState(array $options = [])
 * @method GetInstanceSummaryReport getInstanceSummaryReport(array $options = [])
 * @method GetInstanceSummaryReportByInterval getInstanceSummaryReportByInterval(array $options = [])
 * @method GetInstanceSummaryReportSinceMidnight getInstanceSummaryReportSinceMidnight(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method GetJobDataUploadParams getJobDataUploadParams(array $options = [])
 * @method GetJobFileUploadUrl getJobFileUploadUrl(array $options = [])
 * @method GetJobGroup getJobGroup(array $options = [])
 * @method GetJobList getJobList(array $options = [])
 * @method GetJobStatusByCallId getJobStatusByCallId(array $options = [])
 * @method GetJobTemplateDownloadParams getJobTemplateDownloadParams(array $options = [])
 * @method GetNumberRegionInfo getNumberRegionInfo(array $options = [])
 * @method GetPredictiveJobGroup getPredictiveJobGroup(array $options = [])
 * @method GetPredictiveTaskData getPredictiveTaskData(array $options = [])
 * @method GetRecordOssUploadParam getRecordOssUploadParam(array $options = [])
 * @method GetRoutePoint getRoutePoint(array $options = [])
 * @method GetScenario getScenario(array $options = [])
 * @method GetServiceExtensions getServiceExtensions(array $options = [])
 * @method GetSmsConfig getSmsConfig(array $options = [])
 * @method GetSurvey getSurvey(array $options = [])
 * @method GetTaskList getTaskList(array $options = [])
 * @method GetTURNCredentials getTURNCredentials(array $options = [])
 * @method GetTURNServerList getTURNServerList(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetUserByExtension getUserByExtension(array $options = [])
 * @method InflightTaskTimeout inflightTaskTimeout(array $options = [])
 * @method LaunchAppraise launchAppraise(array $options = [])
 * @method LaunchShortMessageAppraise launchShortMessageAppraise(array $options = [])
 * @method ListAgentDevices listAgentDevices(array $options = [])
 * @method ListAgentEvents listAgentEvents(array $options = [])
 * @method ListAgentStateLogs listAgentStateLogs(array $options = [])
 * @method ListAgentStates listAgentStates(array $options = [])
 * @method ListAgentSummaryReports listAgentSummaryReports(array $options = [])
 * @method ListAgentSummaryReportsByInterval listAgentSummaryReportsByInterval(array $options = [])
 * @method ListAgentSummaryReportsSinceMidnight listAgentSummaryReportsSinceMidnight(array $options = [])
 * @method ListBasicStatisticsReportSubItems listBasicStatisticsReportSubItems(array $options = [])
 * @method ListCallDetailRecords listCallDetailRecords(array $options = [])
 * @method ListCallEventDetailByContactId listCallEventDetailByContactId(array $options = [])
 * @method ListCallMeasureSummaryReports listCallMeasureSummaryReports(array $options = [])
 * @method ListConfig listConfig(array $options = [])
 * @method ListContactFlows listContactFlows(array $options = [])
 * @method ListInstancesOfUser listInstancesOfUser(array $options = [])
 * @method ListIvrTrackingDetail listIvrTrackingDetail(array $options = [])
 * @method ListJobGroups listJobGroups(array $options = [])
 * @method ListJobsByGroup listJobsByGroup(array $options = [])
 * @method ListJobStatus listJobStatus(array $options = [])
 * @method ListMedias listMedias(array $options = [])
 * @method ListOutboundPhoneNumberOfUser listOutboundPhoneNumberOfUser(array $options = [])
 * @method ListPhoneNumbers listPhoneNumbers(array $options = [])
 * @method ListPhoneTags listPhoneTags(array $options = [])
 * @method ListRealTimeAgent listRealTimeAgent(array $options = [])
 * @method ListRecentCallRecords listRecentCallRecords(array $options = [])
 * @method ListRecordingOfDualTrack listRecordingOfDualTrack(array $options = [])
 * @method ListRecordings listRecordings(array $options = [])
 * @method ListRecordingsByContactId listRecordingsByContactId(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListScenarios listScenarios(array $options = [])
 * @method ListScenarioTemplates listScenarioTemplates(array $options = [])
 * @method ListSkillGroups listSkillGroups(array $options = [])
 * @method ListSkillGroupsOfUser listSkillGroupsOfUser(array $options = [])
 * @method ListSkillGroupStates listSkillGroupStates(array $options = [])
 * @method ListSkillGroupSummaryReports listSkillGroupSummaryReports(array $options = [])
 * @method ListSkillGroupSummaryReportsByInterval listSkillGroupSummaryReportsByInterval(array $options = [])
 * @method ListSkillGroupSummaryReportsSinceMidnight listSkillGroupSummaryReportsSinceMidnight(array $options = [])
 * @method ListSurveys listSurveys(array $options = [])
 * @method ListTransferableSkillGroups listTransferableSkillGroups(array $options = [])
 * @method ListTrunkProviders listTrunkProviders(array $options = [])
 * @method ListTrunksOfSkillGroup listTrunksOfSkillGroup(array $options = [])
 * @method ListUnreachableContacts listUnreachableContacts(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListUsersOfSkillGroup listUsersOfSkillGroup(array $options = [])
 * @method ListVoiceAppraise listVoiceAppraise(array $options = [])
 * @method ModifyAgentDevice modifyAgentDevice(array $options = [])
 * @method ModifyCabInstance modifyCabInstance(array $options = [])
 * @method ModifyCallRatio modifyCallRatio(array $options = [])
 * @method ModifyPhoneNumber modifyPhoneNumber(array $options = [])
 * @method ModifyPhoneTags modifyPhoneTags(array $options = [])
 * @method ModifyPrimaryTrunksOfSkillGroup modifyPrimaryTrunksOfSkillGroup(array $options = [])
 * @method ModifyPrivacyNumberCallDetail modifyPrivacyNumberCallDetail(array $options = [])
 * @method ModifyScenario modifyScenario(array $options = [])
 * @method ModifySkillGroup modifySkillGroup(array $options = [])
 * @method ModifySkillGroupOfUser modifySkillGroupOfUser(array $options = [])
 * @method ModifySkillGroupOutboundNumbers modifySkillGroupOutboundNumbers(array $options = [])
 * @method ModifySurvey modifySurvey(array $options = [])
 * @method ModifyUser modifyUser(array $options = [])
 * @method PickGlobalOutboundNumbers pickGlobalOutboundNumbers(array $options = [])
 * @method PickLocalNumber pickLocalNumber(array $options = [])
 * @method PickOutboundNumbers pickOutboundNumbers(array $options = [])
 * @method PublishContactFlowVersion publishContactFlowVersion(array $options = [])
 * @method PublishPredictiveJobGroup publishPredictiveJobGroup(array $options = [])
 * @method PublishSurvey publishSurvey(array $options = [])
 * @method RefreshToken refreshToken(array $options = [])
 * @method RemovePhoneNumber removePhoneNumber(array $options = [])
 * @method RemoveUsers removeUsers(array $options = [])
 * @method RemoveUsersFromSkillGroup removeUsersFromSkillGroup(array $options = [])
 * @method RequestLoginInfo requestLoginInfo(array $options = [])
 * @method ResetUserStatus resetUserStatus(array $options = [])
 * @method ResumeJobs resumeJobs(array $options = [])
 * @method ResumePredictiveJobs resumePredictiveJobs(array $options = [])
 * @method SaveTerminalLog saveTerminalLog(array $options = [])
 * @method SaveWebRTCStats saveWebRTCStats(array $options = [])
 * @method SendPredefinedShortMessage sendPredefinedShortMessage(array $options = [])
 * @method StartBack2BackCall startBack2BackCall(array $options = [])
 * @method StartJob startJob(array $options = [])
 * @method SubmitBatchJobs submitBatchJobs(array $options = [])
 * @method SubmitCabRecording submitCabRecording(array $options = [])
 * @method SuspendJobs suspendJobs(array $options = [])
 * @method SuspendPredictiveJobs suspendPredictiveJobs(array $options = [])
 * @method TaskPreparing taskPreparing(array $options = [])
 */
class CCCApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CCC';

    /** @var string */
    public $version = '2017-07-05';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class AbortPredictiveJobs extends Rpc
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
 * @method string getRemark()
 * @method string getClientPort()
 * @method $this withClientPort($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getBrowserVersion()
 */
class AddAgentDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['form_params']['Remark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBrowserVersion($value)
    {
        $this->data['BrowserVersion'] = $value;
        $this->options['form_params']['BrowserVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method array getPhoneNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSkillGroupId()
 */
class AddBulkPhoneNumbers extends Rpc
{

    /**
     * @param array $phoneNumber
     *
     * @return $this
     */
	public function withPhoneNumber(array $phoneNumber)
	{
	    $this->data['PhoneNumber'] = $phoneNumber;
		foreach ($phoneNumber as $i => $iValue) {
			$this->options['query']['PhoneNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getJobsJson()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class AddJobsToPredictiveJobGroup extends Rpc
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
			$this->options['form_params']['JobsJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AddPhoneNumber extends Rpc
{
}

/**
 * @method string getRegionNameProvince()
 * @method $this withRegionNameProvince($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConcurrency()
 * @method $this withConcurrency($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvider()
 * @method $this withProvider($value)
 * @method array getPhoneNumberList()
 * @method string getServiceTag()
 * @method $this withServiceTag($value)
 * @method string getSipTag()
 * @method $this withSipTag($value)
 * @method string getRegionNameCity()
 * @method $this withRegionNameCity($value)
 */
class AddPhoneTags extends Rpc
{

    /**
     * @param array $phoneNumberList
     *
     * @return $this
     */
	public function withPhoneNumberList(array $phoneNumberList)
	{
	    $this->data['PhoneNumberList'] = $phoneNumberList;
		foreach ($phoneNumberList as $i => $iValue) {
			$this->options['query']['PhoneNumberList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobsJson()
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
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
 * @method array getRoleId()
 * @method array getUserRamId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSkillGroupId()
 */
class AssignUsers extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function withRoleId(array $roleId)
	{
	    $this->data['RoleId'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->options['query']['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $userRamId
     *
     * @return $this
     */
	public function withUserRamId(array $userRamId)
	{
	    $this->data['UserRamId'] = $userRamId;
		foreach ($userRamId as $i => $iValue) {
			$this->options['query']['UserRamId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function withSkillLevel(array $skillLevel)
	{
	    $this->data['SkillLevel'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
			$this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTelA()
 * @method $this withTelA($value)
 * @method string getTelB()
 * @method $this withTelB($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CallOnlinePrivacyNumber extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 */
class CheckNumberAvaliable extends Rpc
{
}

/**
 * @method string getCanvas()
 * @method string getContent()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 */
class CommitContactFlowVersionModification extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCanvas($value)
    {
        $this->data['Canvas'] = $value;
        $this->options['form_params']['Canvas'] = $value;

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

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubmitted()
 * @method $this withSubmitted($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
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
 * @method string getMaxConcurrentConversation()
 * @method $this withMaxConcurrentConversation($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getCallCenterInstanceId()
 * @method $this withCallCenterInstanceId($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 */
class CreateCabInstance extends Rpc
{
}

/**
 * @method string getCanvas()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateContactFlow extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCanvas($value)
    {
        $this->data['Canvas'] = $value;
        $this->options['form_params']['Canvas'] = $value;

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

/**
 * @method string getAgentOssFileName()
 * @method $this withAgentOssFileName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOperatingSystemVersion()
 * @method $this withOperatingSystemVersion($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMicrophoneList()
 * @method $this withMicrophoneList($value)
 * @method string getClientPort()
 * @method $this withClientPort($value)
 * @method string getCustomFilePath()
 * @method $this withCustomFilePath($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getSpeakerList()
 * @method $this withSpeakerList($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSpeakerEquipment()
 * @method $this withSpeakerEquipment($value)
 * @method string getServicePort()
 * @method $this withServicePort($value)
 * @method string getServiceIp()
 * @method $this withServiceIp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAgentFilePath()
 * @method $this withAgentFilePath($value)
 * @method string getConnectId()
 * @method $this withConnectId($value)
 * @method string getCustomOssFileName()
 * @method $this withCustomOssFileName($value)
 * @method string getMicrophoneEquipment()
 * @method $this withMicrophoneEquipment($value)
 * @method string getBrowserVersion()
 * @method $this withBrowserVersion($value)
 */
class CreateFault extends Rpc
{
}

/**
 * @method array getPhoneNumbers()
 * @method array getUserObject()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStorageMaxDays()
 * @method $this withStorageMaxDays($value)
 * @method array getAdminRamId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getStorageMaxSize()
 * @method $this withStorageMaxSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 */
class CreateInstance extends Rpc
{

    /**
     * @param array $phoneNumbers
     *
     * @return $this
     */
	public function withPhoneNumbers(array $phoneNumbers)
	{
	    $this->data['PhoneNumbers'] = $phoneNumbers;
		foreach ($phoneNumbers as $i => $iValue) {
			$this->options['query']['PhoneNumbers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $userObject
     *
     * @return $this
     */
	public function withUserObject(array $userObject)
	{
	    $this->data['UserObject'] = $userObject;
		foreach ($userObject as $i => $iValue) {
			$this->options['query']['UserObject.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $adminRamId
     *
     * @return $this
     */
	public function withAdminRamId(array $adminRamId)
	{
	    $this->data['AdminRamId'] = $adminRamId;
		foreach ($adminRamId as $i => $iValue) {
			$this->options['query']['AdminRamId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOssFilePath()
 * @method $this withOssFilePath($value)
 * @method string getUploadResult()
 * @method $this withUploadResult($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getOssFileName()
 * @method $this withOssFileName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateMedia extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTimingSchedule()
 * @method $this withTimingSchedule($value)
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 * @method array getJobsJson()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIsDraft()
 * @method $this withIsDraft($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class CreatePredictiveJobGroup extends Rpc
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
			$this->options['form_params']['JobsJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getSurveysJson()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateScenario extends Rpc
{

    /**
     * @param array $surveysJson
     *
     * @return $this
     */
	public function withSurveysJson(array $surveysJson)
	{
	    $this->data['SurveysJson'] = $surveysJson;
		foreach ($surveysJson as $i => $iValue) {
			$this->options['query']['SurveysJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateScenarioFromTemplate extends Rpc
{
}

/**
 * @method string getAllowPrivateOutboundNumber()
 * @method $this withAllowPrivateOutboundNumber($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRoutingStrategy()
 * @method $this withRoutingStrategy($value)
 * @method array getUserId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSkillGroup extends Rpc
{

    /**
     * @param array $userId
     *
     * @return $this
     */
	public function withUserId(array $userId)
	{
	    $this->data['UserId'] = $userId;
		foreach ($userId as $i => $iValue) {
			$this->options['query']['UserId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function withSkillLevel(array $skillLevel)
	{
	    $this->data['SkillLevel'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
			$this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $outboundPhoneNumberId
     *
     * @return $this
     */
	public function withOutboundPhoneNumberId(array $outboundPhoneNumberId)
	{
	    $this->data['OutboundPhoneNumberId'] = $outboundPhoneNumberId;
		foreach ($outboundPhoneNumberId as $i => $iValue) {
			$this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateSurvey extends Rpc
{
}

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method string getLoginName()
 * @method $this withLoginName($value)
 * @method array getRoleId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateUser extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function withRoleId(array $roleId)
	{
	    $this->data['RoleId'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->options['query']['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function withSkillLevel(array $skillLevel)
	{
	    $this->data['SkillLevel'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
			$this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIsAppraise()
 * @method $this withIsAppraise($value)
 * @method string getContent()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 */
class CreateVoiceAppraise extends Rpc
{

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

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteMedia extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getPhoneNumberList()
 */
class DeletePhoneTags extends Rpc
{

    /**
     * @param array $phoneNumberList
     *
     * @return $this
     */
	public function withPhoneNumberList(array $phoneNumberList)
	{
	    $this->data['PhoneNumberList'] = $phoneNumberList;
		foreach ($phoneNumberList as $i => $iValue) {
			$this->options['query']['PhoneNumberList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class DeleteSkillGroup extends Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class DeleteSurvey extends Rpc
{
}

/**
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getRoutPoint()
 * @method $this withRoutPoint($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvider()
 * @method $this withProvider($value)
 * @method string getAnswerMode()
 * @method $this withAnswerMode($value)
 */
class DialEx extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
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
 * @method array getProviderName()
 */
class DisableTrunkProviders extends Rpc
{

    /**
     * @param array $providerName
     *
     * @return $this
     */
	public function withProviderName(array $providerName)
	{
	    $this->data['ProviderName'] = $providerName;
		foreach ($providerName as $i => $iValue) {
			$this->options['query']['ProviderName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DownloadAllTypeRecording extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DownloadCabRecording extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DownloadOriginalStatisticsReport extends Rpc
{
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class DownloadRecording extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DownloadUnreachableContacts extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class FindUsers extends Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GenerateAgentStatisticReport extends Rpc
{
}

/**
 * @method string getStartDay()
 * @method $this withStartDay($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDay()
 * @method $this withEndDay($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetAgentData extends Rpc
{
}

/**
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 * @method string getYear()
 * @method $this withYear($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDay()
 * @method $this withDay($value)
 */
class GetCallMeasureSummaryReport extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class GetConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOutboundTaskId()
 * @method $this withOutboundTaskId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class GetContactInfoByOutboundTaskId extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetConversationDetailByContactId extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetConversationList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceState extends Rpc
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
class GetInstanceSummaryReport extends Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class GetInstanceSummaryReportByInterval extends Rpc
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
class GetInstanceSummaryReportSinceMidnight extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetJob extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetJobDataUploadParams extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetJobFileUploadUrl extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class GetJobGroup extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryAll()
 * @method $this withQueryAll($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetJobList extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetJobStatusByCallId extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetJobTemplateDownloadParams extends Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNumberRegionInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class GetPredictiveJobGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetPredictiveTaskData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetRecordOssUploadParam extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetRoutePoint extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetScenario extends Rpc
{
}

/**
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetServiceExtensions extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getScenario()
 */
class GetSmsConfig extends Rpc
{

    /**
     * @param array $scenario
     *
     * @return $this
     */
	public function withScenario(array $scenario)
	{
	    $this->data['Scenario'] = $scenario;
		foreach ($scenario as $i => $iValue) {
			$this->options['query']['Scenario.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetSurvey extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetTaskList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetTURNCredentials extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetTURNServerList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getExtension()
 * @method $this withExtension($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetUserByExtension extends Rpc
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
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LaunchAppraise extends Rpc
{
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class LaunchShortMessageAppraise extends Rpc
{
}

/**
 * @method string getRamIds()
 * @method $this withRamIds($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListAgentDevices extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method array getRamId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getEvent()
 */
class ListAgentEvents extends Rpc
{

    /**
     * @param array $ramId
     *
     * @return $this
     */
	public function withRamId(array $ramId)
	{
	    $this->data['RamId'] = $ramId;
		foreach ($ramId as $i => $iValue) {
			$this->options['query']['RamId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $event
     *
     * @return $this
     */
	public function withEvent(array $event)
	{
	    $this->data['Event'] = $event;
		foreach ($event as $i => $iValue) {
			$this->options['query']['Event.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRamId()
 * @method $this withRamId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAgentStateLogs extends Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 */
class ListAgentStates extends Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAgentSummaryReports extends Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class ListAgentSummaryReportsByInterval extends Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListAgentSummaryReportsSinceMidnight extends Rpc
{
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBasicStatisticsReportSubItems extends Rpc
{
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactDisposition()
 * @method $this withContactDisposition($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getWithRecording()
 * @method $this withWithRecording($value)
 */
class ListCallDetailRecords extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ListCallEventDetailByContactId extends Rpc
{
}

/**
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 */
class ListCallMeasureSummaryReports extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getConfigItem()
 */
class ListConfig extends Rpc
{

    /**
     * @param array $configItem
     *
     * @return $this
     */
	public function withConfigItem(array $configItem)
	{
	    $this->data['ConfigItem'] = $configItem;
		foreach ($configItem as $i => $iValue) {
			$this->options['query']['ConfigItem.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListContactFlows extends Rpc
{
}

class ListInstancesOfUser extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListIvrTrackingDetail extends Rpc
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
 * @method string getTimeAlignment()
 * @method $this withTimeAlignment($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ListJobStatus extends Rpc
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
class ListMedias extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListOutboundPhoneNumberOfUser extends Rpc
{
}

/**
 * @method string getOutboundOnly()
 * @method $this withOutboundOnly($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListPhoneNumbers extends Rpc
{
}

/**
 * @method array getNumberGroupIds()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOutboundOnly()
 * @method $this withOutboundOnly($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPhoneTags extends Rpc
{

    /**
     * @param array $numberGroupIds
     *
     * @return $this
     */
	public function withNumberGroupIds(array $numberGroupIds)
	{
	    $this->data['NumberGroupIds'] = $numberGroupIds;
		foreach ($numberGroupIds as $i => $iValue) {
			$this->options['query']['NumberGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRealTimeAgent extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRecentCallRecords extends Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getConnectId()
 * @method $this withConnectId($value)
 */
class ListRecordingOfDualTrack extends Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRecordings extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ListRecordingsByContactId extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRoles extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListScenarios extends Rpc
{
}

class ListScenarioTemplates extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSkillGroups extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListSkillGroupsOfUser extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSkillGroupStates extends Rpc
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
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSkillGroupSummaryReports extends Rpc
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
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class ListSkillGroupSummaryReportsByInterval extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroups()
 * @method $this withSkillGroups($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSkillGroupSummaryReportsSinceMidnight extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ListSurveys extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListTransferableSkillGroups extends Rpc
{
}

class ListTrunkProviders extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ListTrunksOfSkillGroup extends Rpc
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
class ListUnreachableContacts extends Rpc
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
class ListUsers extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUsersOfSkillGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListVoiceAppraise extends Rpc
{
}

/**
 * @method string getIsLogin()
 * @method $this withIsLogin($value)
 * @method string getAgentDeviceId()
 * @method $this withAgentDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyAgentDevice extends Rpc
{
}

/**
 * @method string getMaxConcurrentConversation()
 * @method $this withMaxConcurrentConversation($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getCallCenterInstanceId()
 * @method $this withCallCenterInstanceId($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 */
class ModifyCabInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class ModifyCallRatio extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumberId()
 * @method $this withPhoneNumberId($value)
 * @method array getSkillGroupId()
 */
class ModifyPhoneNumber extends Rpc
{

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSkillGroupIdList()
 * @method string getServiceTag()
 * @method $this withServiceTag($value)
 */
class ModifyPhoneTags extends Rpc
{

    /**
     * @param array $skillGroupIdList
     *
     * @return $this
     */
	public function withSkillGroupIdList(array $skillGroupIdList)
	{
	    $this->data['SkillGroupIdList'] = $skillGroupIdList;
		foreach ($skillGroupIdList as $i => $iValue) {
			$this->options['query']['SkillGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getPrimaryProviderName()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ModifyPrimaryTrunksOfSkillGroup extends Rpc
{

    /**
     * @param array $primaryProviderName
     *
     * @return $this
     */
	public function withPrimaryProviderName(array $primaryProviderName)
	{
	    $this->data['PrimaryProviderName'] = $primaryProviderName;
		foreach ($primaryProviderName as $i => $iValue) {
			$this->options['query']['PrimaryProviderName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyPrivacyNumberCallDetail extends Rpc
{
}

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ModifyScenario extends Rpc
{
}

/**
 * @method string getAllowPrivateOutboundNumber()
 * @method $this withAllowPrivateOutboundNumber($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRoutingStrategy()
 * @method $this withRoutingStrategy($value)
 * @method array getUserId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifySkillGroup extends Rpc
{

    /**
     * @param array $userId
     *
     * @return $this
     */
	public function withUserId(array $userId)
	{
	    $this->data['UserId'] = $userId;
		foreach ($userId as $i => $iValue) {
			$this->options['query']['UserId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function withSkillLevel(array $skillLevel)
	{
	    $this->data['SkillLevel'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
			$this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $outboundPhoneNumberId
     *
     * @return $this
     */
	public function withOutboundPhoneNumberId(array $outboundPhoneNumberId)
	{
	    $this->data['OutboundPhoneNumberId'] = $outboundPhoneNumberId;
		foreach ($outboundPhoneNumberId as $i => $iValue) {
			$this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getRoleId()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSkillGroupId()
 */
class ModifySkillGroupOfUser extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function withRoleId(array $roleId)
	{
	    $this->data['RoleId'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->options['query']['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function withSkillLevel(array $skillLevel)
	{
	    $this->data['SkillLevel'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
			$this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ModifySkillGroupOutboundNumbers extends Rpc
{

    /**
     * @param array $outboundPhoneNumberId
     *
     * @return $this
     */
	public function withOutboundPhoneNumberId(array $outboundPhoneNumberId)
	{
	    $this->data['OutboundPhoneNumberId'] = $outboundPhoneNumberId;
		foreach ($outboundPhoneNumberId as $i => $iValue) {
			$this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class ModifySurvey extends Rpc
{
}

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method array getRoleId()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ModifyUser extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function withRoleId(array $roleId)
	{
	    $this->data['RoleId'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->options['query']['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
	public function withSkillLevel(array $skillLevel)
	{
	    $this->data['SkillLevel'] = $skillLevel;
		foreach ($skillLevel as $i => $iValue) {
			$this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIsVirtual()
 * @method $this withIsVirtual($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSkillGroupId()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickGlobalOutboundNumbers extends Rpc
{

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickLocalNumber extends Rpc
{

    /**
     * @param array $candidateNumber
     *
     * @return $this
     */
	public function withCandidateNumber(array $candidateNumber)
	{
	    $this->data['CandidateNumber'] = $candidateNumber;
		foreach ($candidateNumber as $i => $iValue) {
			$this->options['query']['CandidateNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickOutboundNumbers extends Rpc
{

    /**
     * @param array $candidateNumber
     *
     * @return $this
     */
	public function withCandidateNumber(array $candidateNumber)
	{
	    $this->data['CandidateNumber'] = $candidateNumber;
		foreach ($candidateNumber as $i => $iValue) {
			$this->options['query']['CandidateNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 * @method string getUseTianGong()
 * @method $this withUseTianGong($value)
 */
class PublishContactFlowVersion extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class PublishPredictiveJobGroup extends Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class PublishSurvey extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefreshToken extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumberId()
 * @method $this withPhoneNumberId($value)
 */
class RemovePhoneNumber extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getUserId()
 */
class RemoveUsers extends Rpc
{

    /**
     * @param array $userId
     *
     * @return $this
     */
	public function withUserId(array $userId)
	{
	    $this->data['UserId'] = $userId;
		foreach ($userId as $i => $iValue) {
			$this->options['query']['UserId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getUserId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class RemoveUsersFromSkillGroup extends Rpc
{

    /**
     * @param array $userId
     *
     * @return $this
     */
	public function withUserId(array $userId)
	{
	    $this->data['UserId'] = $userId;
		foreach ($userId as $i => $iValue) {
			$this->options['query']['UserId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class RequestLoginInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRamIdList()
 */
class ResetUserStatus extends Rpc
{

    /**
     * @param array $ramIdList
     *
     * @return $this
     */
	public function withRamIdList(array $ramIdList)
	{
	    $this->data['RamIdList'] = $ramIdList;
		foreach ($ramIdList as $i => $iValue) {
			$this->options['query']['RamIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class ResumePredictiveJobs extends Rpc
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
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getUniqueRequestId()
 * @method $this withUniqueRequestId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getMethodName()
 * @method $this withMethodName($value)
 */
class SaveTerminalLog extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getRecordTime()
 * @method $this withRecordTime($value)
 * @method string getCallStartTime()
 * @method $this withCallStartTime($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStats()
 * @method $this withStats($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 * @method string getCallerNumber()
 * @method $this withCallerNumber($value)
 */
class SaveWebRTCStats extends Rpc
{
}

/**
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendPredefinedShortMessage extends Rpc
{
}

/**
 * @method string getCallCenterNumber()
 * @method $this withCallCenterNumber($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class StartBack2BackCall extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobJson()
 * @method $this withJobJson($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getEarlyMediaRecording()
 * @method $this withEarlyMediaRecording($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class SubmitCabRecording extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class SuspendPredictiveJobs extends Rpc
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
