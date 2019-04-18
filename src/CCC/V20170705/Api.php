<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ListCallEventDetailByContactId listCallEventDetailByContactId(array $options = [])
 * @method DialEx dialEx(array $options = [])
 * @method ListPredictiveJobGroups listPredictiveJobGroups(array $options = [])
 * @method GetJobsProgress getJobsProgress(array $options = [])
 * @method GetContactInfoByOutboundTaskId getContactInfoByOutboundTaskId(array $options = [])
 * @method ListVoiceAppraise listVoiceAppraise(array $options = [])
 * @method CreateVoiceAppraise createVoiceAppraise(array $options = [])
 * @method ListAgentEvents listAgentEvents(array $options = [])
 * @method PickOutboundNumbersByTags pickOutboundNumbersByTags(array $options = [])
 * @method GetJobFileUploadUrl getJobFileUploadUrl(array $options = [])
 * @method CreatePredictiveJobGroup createPredictiveJobGroup(array $options = [])
 * @method AddBulkPhoneNumbers addBulkPhoneNumbers(array $options = [])
 * @method CreateCabInstance createCabInstance(array $options = [])
 * @method ListIvrTrackingDetail listIvrTrackingDetail(array $options = [])
 * @method PickOutboundNumbers pickOutboundNumbers(array $options = [])
 * @method QueryRedialIndicator queryRedialIndicator(array $options = [])
 * @method GetAgentState getAgentState(array $options = [])
 * @method AddNumberToSkillGroup addNumberToSkillGroup(array $options = [])
 * @method RemoveNumberFromSkillGroup removeNumberFromSkillGroup(array $options = [])
 * @method ListRecordingOfDualTrack listRecordingOfDualTrack(array $options = [])
 * @method RemoveUsersFromSkillGroup removeUsersFromSkillGroup(array $options = [])
 * @method ListCallMeasureSummaryReports listCallMeasureSummaryReports(array $options = [])
 * @method GetCallMeasureSummaryReport getCallMeasureSummaryReport(array $options = [])
 * @method CallOnlinePrivacyNumber callOnlinePrivacyNumber(array $options = [])
 * @method ModifyPrivacyNumberCallDetail modifyPrivacyNumberCallDetail(array $options = [])
 * @method ListPrivacyNumberCallDetails listPrivacyNumberCallDetails(array $options = [])
 * @method DeleteMedia deleteMedia(array $options = [])
 * @method ModifyMedia modifyMedia(array $options = [])
 * @method PreModifyMedia preModifyMedia(array $options = [])
 * @method ListMedias listMedias(array $options = [])
 * @method CreateMedia createMedia(array $options = [])
 * @method PreCreateMedia preCreateMedia(array $options = [])
 * @method CreateCCCPostOrder createCCCPostOrder(array $options = [])
 * @method FindUsers findUsers(array $options = [])
 * @method ModifyNotificationConfig modifyNotificationConfig(array $options = [])
 * @method ModifySkillGroupOfUser modifySkillGroupOfUser(array $options = [])
 * @method ListOutboundPhoneNumberOfUser listOutboundPhoneNumberOfUser(array $options = [])
 * @method GetInstanceState getInstanceState(array $options = [])
 * @method SimpleDial simpleDial(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method CreateContactFlow createContactFlow(array $options = [])
 * @method CommitContactFlowVersionModification commitContactFlowVersionModification(array $options = [])
 * @method PublishContactFlowVersion publishContactFlowVersion(array $options = [])
 * @method GetPredictiveJob getPredictiveJob(array $options = [])
 * @method GetContactIdentifyByOutBoundTaskId getContactIdentifyByOutBoundTaskId(array $options = [])
 * @method ListSkillGroupStates listSkillGroupStates(array $options = [])
 * @method GetInstanceSummaryReportSinceMidnight getInstanceSummaryReportSinceMidnight(array $options = [])
 * @method GetInstanceSummaryReportByInterval getInstanceSummaryReportByInterval(array $options = [])
 * @method GetInstanceSummaryReport getInstanceSummaryReport(array $options = [])
 * @method ListSkillGroupSummaryReportsByInterval listSkillGroupSummaryReportsByInterval(array $options = [])
 * @method ListSkillGroupSummaryReportsSinceMidnight listSkillGroupSummaryReportsSinceMidnight(array $options = [])
 * @method ListAgentSummaryReportsSinceMidnight listAgentSummaryReportsSinceMidnight(array $options = [])
 * @method ListSkillGroupSummaryReports listSkillGroupSummaryReports(array $options = [])
 * @method ListAgentSummaryReportsByInterval listAgentSummaryReportsByInterval(array $options = [])
 * @method ListAgentSummaryReports listAgentSummaryReports(array $options = [])
 * @method ListAgentStates listAgentStates(array $options = [])
 * @method GetSmsConfig getSmsConfig(array $options = [])
 * @method ListRecentCallRecords listRecentCallRecords(array $options = [])
 * @method SendPredefinedShortMessage sendPredefinedShortMessage(array $options = [])
 * @method LaunchShortMessageAppraise launchShortMessageAppraise(array $options = [])
 * @method GetConversationDetailByContactId getConversationDetailByContactId(array $options = [])
 * @method DeleteJobGroup deleteJobGroup(array $options = [])
 * @method ModifyScenario modifyScenario(array $options = [])
 * @method ListPredictiveJobStatus listPredictiveJobStatus(array $options = [])
 * @method CreatePredictiveJobs createPredictiveJobs(array $options = [])
 * @method CancelPredictiveJobs cancelPredictiveJobs(array $options = [])
 * @method GetJobTemplateDownloadParams getJobTemplateDownloadParams(array $options = [])
 * @method GetScenario getScenario(array $options = [])
 * @method PublishSurvey publishSurvey(array $options = [])
 * @method ModifySurvey modifySurvey(array $options = [])
 * @method ListSurveys listSurveys(array $options = [])
 * @method GetSurvey getSurvey(array $options = [])
 * @method DeleteSurvey deleteSurvey(array $options = [])
 * @method CreateSurvey createSurvey(array $options = [])
 * @method ListBasicStatisticsReportSubItems listBasicStatisticsReportSubItems(array $options = [])
 * @method ListUnreachableContacts listUnreachableContacts(array $options = [])
 * @method DownloadUnreachableContacts downloadUnreachableContacts(array $options = [])
 * @method DownloadOriginalStatisticsReport downloadOriginalStatisticsReport(array $options = [])
 * @method ListPrivilegesOfUser listPrivilegesOfUser(array $options = [])
 * @method GenerateAgentStatisticReport generateAgentStatisticReport(array $options = [])
 * @method StartBack2BackCall startBack2BackCall(array $options = [])
 * @method TwoPartiesCall twoPartiesCall(array $options = [])
 * @method GetAgentData getAgentData(array $options = [])
 * @method GetJobGroup getJobGroup(array $options = [])
 * @method ListScenarioTemplates listScenarioTemplates(array $options = [])
 * @method CreateScenarioFromTemplate createScenarioFromTemplate(array $options = [])
 * @method SuspendJobs suspendJobs(array $options = [])
 * @method SubmitBatchJobs submitBatchJobs(array $options = [])
 * @method ResumeJobs resumeJobs(array $options = [])
 * @method ListJobsByGroup listJobsByGroup(array $options = [])
 * @method CreateBatchJobs createBatchJobs(array $options = [])
 * @method CancelJobs cancelJobs(array $options = [])
 * @method AssignJobs assignJobs(array $options = [])
 * @method GetJobDataUploadParams getJobDataUploadParams(array $options = [])
 * @method LaunchAppraise launchAppraise(array $options = [])
 * @method GetTaskList getTaskList(array $options = [])
 * @method GetJobList getJobList(array $options = [])
 * @method GetConversationList getConversationList(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method ListRealTimeAgent listRealTimeAgent(array $options = [])
 * @method ListConfig listConfig(array $options = [])
 * @method ListScenarios listScenarios(array $options = [])
 * @method CreateScenario createScenario(array $options = [])
 * @method PickLocalNumber pickLocalNumber(array $options = [])
 * @method GetNumberRegionInfo getNumberRegionInfo(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method CreateJobGroup createJobGroup(array $options = [])
 * @method ListJobGroups listJobGroups(array $options = [])
 * @method GetJobStatusByCallId getJobStatusByCallId(array $options = [])
 * @method ListJobStatus listJobStatus(array $options = [])
 * @method StartJob startJob(array $options = [])
 * @method ListRecordingsByContactId listRecordingsByContactId(array $options = [])
 * @method DownloadRecording downloadRecording(array $options = [])
 * @method ListCallDetailRecords listCallDetailRecords(array $options = [])
 * @method ListRecordings listRecordings(array $options = [])
 * @method RefreshToken refreshToken(array $options = [])
 * @method RemovePhoneNumber removePhoneNumber(array $options = [])
 * @method ModifyUser modifyUser(array $options = [])
 * @method ModifySkillGroup modifySkillGroup(array $options = [])
 * @method ModifyPhoneNumber modifyPhoneNumber(array $options = [])
 * @method RemoveUsers removeUsers(array $options = [])
 * @method ListUsersOfSkillGroup listUsersOfSkillGroup(array $options = [])
 * @method RequestLoginInfo requestLoginInfo(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListSkillGroupsOfUser listSkillGroupsOfUser(array $options = [])
 * @method ListSkillGroups listSkillGroups(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListPhoneNumbers listPhoneNumbers(array $options = [])
 * @method ListContactFlows listContactFlows(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetServiceExtensions getServiceExtensions(array $options = [])
 * @method GetConfig getConfig(array $options = [])
 * @method DeleteSkillGroup deleteSkillGroup(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateSkillGroup createSkillGroup(array $options = [])
 * @method AssignUsers assignUsers(array $options = [])
 * @method AddPhoneNumber addPhoneNumber(array $options = [])
 */
class CCCApiResolver
{
    use ApiResolverTrait;
}

class V20170705Rpc extends Rpc
{
    /** @var string */
    public $product = 'CCC';

    /** @var string */
    public $version = '2017-07-05';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ccc';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ListCallEventDetailByContactId extends V20170705Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvider()
 * @method $this withProvider($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 */
class DialEx extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPredictiveJobGroups extends V20170705Rpc
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
class GetJobsProgress extends V20170705Rpc
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
class GetContactInfoByOutboundTaskId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListVoiceAppraise extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 * @method string getIsAppraise()
 * @method $this withIsAppraise($value)
 * @method string getContent()
 */
class CreateVoiceAppraise extends V20170705Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method array getEvent()
 * @method array getRamId()
 */
class ListAgentEvents extends V20170705Rpc
{

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
}

/**
 * @method array getPrioritizedCallerArea()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getServiceTag()
 * @method array getSkillGroupId()
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickOutboundNumbersByTags extends V20170705Rpc
{

    /**
     * @param array $prioritizedCallerArea
     *
     * @return $this
     */
    public function withPrioritizedCallerArea(array $prioritizedCallerArea)
    {
        $this->data['PrioritizedCallerArea'] = $prioritizedCallerArea;
        foreach ($prioritizedCallerArea as $i => $iValue) {
            $this->options['query']['PrioritizedCallerArea.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $serviceTag
     *
     * @return $this
     */
    public function withServiceTag(array $serviceTag)
    {
        $this->data['ServiceTag'] = $serviceTag;
        foreach ($serviceTag as $i => $iValue) {
            $this->options['query']['ServiceTag.' . ($i + 1)] = $iValue;
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetJobFileUploadUrl extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getJobsJson()
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 */
class CreatePredictiveJobGroup extends V20170705Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method array getSkillGroupId()
 * @method array getPhoneNumber()
 */
class AddBulkPhoneNumbers extends V20170705Rpc
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
class CreateCabInstance extends V20170705Rpc
{
}

/**
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListIvrTrackingDetail extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickOutboundNumbers extends V20170705Rpc
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
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getMockResponse()
 * @method $this withMockResponse($value)
 */
class QueryRedialIndicator extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDn()
 * @method $this withDn($value)
 */
class GetAgentState extends V20170705Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class AddNumberToSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class RemoveNumberFromSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getConnectId()
 * @method $this withConnectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecordingOfDualTrack extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method array getUserId()
 */
class RemoveUsersFromSkillGroup extends V20170705Rpc
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
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 */
class ListCallMeasureSummaryReports extends V20170705Rpc
{
}

/**
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getYear()
 * @method $this withYear($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDay()
 * @method $this withDay($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetCallMeasureSummaryReport extends V20170705Rpc
{
}

/**
 * @method string getTelA()
 * @method $this withTelA($value)
 * @method string getTelB()
 * @method $this withTelB($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CallOnlinePrivacyNumber extends V20170705Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ModifyPrivacyNumberCallDetail extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getAgentName()
 * @method $this withAgentName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPrivacyNumberCallDetails extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
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
 */
class ModifyMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class PreModifyMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListMedias extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
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
 */
class CreateMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class PreCreateMedia extends V20170705Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCCCPostOrder extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class FindUsers extends V20170705Rpc
{
}

/**
 * @method array getSubscriptions()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class ModifyNotificationConfig extends V20170705Rpc
{

    /**
     * @param array $subscriptions
     *
     * @return $this
     */
    public function withSubscriptions(array $subscriptions)
    {
        $this->data['Subscriptions'] = $subscriptions;
        foreach ($subscriptions as $depth1 => $depth1Value) {
            $this->options['query']['Subscriptions.' . ($depth1 + 1) . '.DisplayName'] = $depth1Value['DisplayName'];
            $this->options['query']['Subscriptions.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Subscriptions.' . ($depth1 + 1) . '.Selected'] = $depth1Value['Selected'];
        }

        return $this;
    }
}

/**
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRoleId()
 * @method array getSkillGroupId()
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ModifySkillGroupOfUser extends V20170705Rpc
{

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
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListOutboundPhoneNumberOfUser extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceState extends V20170705Rpc
{
}

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContractFlowId()
 * @method $this withContractFlowId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 */
class SimpleDial extends V20170705Rpc
{
}

/**
 * @method array getUserObject()
 * @method string getName()
 * @method $this withName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method array getPhoneNumber()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStorageMaxDays()
 * @method $this withStorageMaxDays($value)
 * @method string getStorageMaxSize()
 * @method $this withStorageMaxSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method array getAdminRamId()
 */
class CreateInstance extends V20170705Rpc
{

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstance extends V20170705Rpc
{
}

/**
 * @method string getCanvas()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 */
class CreateContactFlow extends V20170705Rpc
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
 * @method string getCanvas()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 * @method string getContent()
 */
class CommitContactFlowVersionModification extends V20170705Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 * @method string getUseTianGong()
 * @method $this withUseTianGong($value)
 */
class PublishContactFlowVersion extends V20170705Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetPredictiveJob extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOutboundTaskId()
 * @method $this withOutboundTaskId($value)
 */
class GetContactIdentifyByOutBoundTaskId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupStates extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetInstanceSummaryReportSinceMidnight extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetInstanceSummaryReportByInterval extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetInstanceSummaryReport extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupSummaryReportsByInterval extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroups()
 * @method $this withSkillGroups($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupSummaryReportsSinceMidnight extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentSummaryReportsSinceMidnight extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupSummaryReports extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentSummaryReportsByInterval extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentSummaryReports extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentStates extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getScenario()
 */
class GetSmsConfig extends V20170705Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecentCallRecords extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendPredefinedShortMessage extends V20170705Rpc
{
}

/**
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class LaunchShortMessageAppraise extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetConversationDetailByContactId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DeleteJobGroup extends V20170705Rpc
{
}

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ModifyScenario extends V20170705Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTimeAlignment()
 * @method $this withTimeAlignment($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPredictiveJobStatus extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method array getJobsJson()
 */
class CreatePredictiveJobs extends V20170705Rpc
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
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class CancelPredictiveJobs extends V20170705Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetJobTemplateDownloadParams extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetScenario extends V20170705Rpc
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
class PublishSurvey extends V20170705Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class ModifySurvey extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ListSurveys extends V20170705Rpc
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
class GetSurvey extends V20170705Rpc
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
class DeleteSurvey extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateSurvey extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListBasicStatisticsReportSubItems extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUnreachableContacts extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DownloadUnreachableContacts extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DownloadOriginalStatisticsReport extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListPrivilegesOfUser extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GenerateAgentStatisticReport extends V20170705Rpc
{
}

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallCenterNumber()
 * @method $this withCallCenterNumber($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class StartBack2BackCall extends V20170705Rpc
{
}

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalleeCustomer()
 * @method $this withCalleeCustomer($value)
 * @method string getCalleeAgent()
 * @method $this withCalleeAgent($value)
 */
class TwoPartiesCall extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStartDay()
 * @method $this withStartDay($value)
 * @method string getEndDay()
 * @method $this withEndDay($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetAgentData extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class GetJobGroup extends V20170705Rpc
{
}

class ListScenarioTemplates extends V20170705Rpc
{
}

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class CreateScenarioFromTemplate extends V20170705Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class SuspendJobs extends V20170705Rpc
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
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class SubmitBatchJobs extends V20170705Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ResumeJobs extends V20170705Rpc
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
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobFailureReason()
 * @method $this withJobFailureReason($value)
 * @method string getJobStatus()
 * @method $this withJobStatus($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobsByGroup extends V20170705Rpc
{
}

/**
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubmitted()
 * @method $this withSubmitted($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 */
class CreateBatchJobs extends V20170705Rpc
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
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CancelJobs extends V20170705Rpc
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
}

/**
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method array getJobsJson()
 */
class AssignJobs extends V20170705Rpc
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
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetJobDataUploadParams extends V20170705Rpc
{
}

/**
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LaunchAppraise extends V20170705Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetTaskList extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getQueryAll()
 * @method $this withQueryAll($value)
 */
class GetJobList extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetConversationList extends V20170705Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetJob extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRealTimeAgent extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getConfigItem()
 */
class ListConfig extends V20170705Rpc
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
class ListScenarios extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSurveysJson()
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateScenario extends V20170705Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickLocalNumber extends V20170705Rpc
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
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNumberRegionInfo extends V20170705Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getActionKey()
 * @method $this withActionKey($value)
 * @method string getActionParams()
 * @method $this withActionParams($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class Dialogue extends V20170705Rpc
{
}

/**
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateJobGroup extends V20170705Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobGroups extends V20170705Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetJobStatusByCallId extends V20170705Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTimeAlignment()
 * @method $this withTimeAlignment($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobStatus extends V20170705Rpc
{
}

/**
 * @method string getJobJson()
 * @method $this withJobJson($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSelfHostedCallCenter()
 * @method $this withSelfHostedCallCenter($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class StartJob extends V20170705Rpc
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
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ListRecordingsByContactId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 */
class DownloadRecording extends V20170705Rpc
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
class ListCallDetailRecords extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecordings extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefreshToken extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumberId()
 * @method $this withPhoneNumberId($value)
 */
class RemovePhoneNumber extends V20170705Rpc
{
}

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method array getRoleId()
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ModifyUser extends V20170705Rpc
{

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
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAllowPrivateOutboundNumber()
 * @method $this withAllowPrivateOutboundNumber($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRoutingStrategy()
 * @method $this withRoutingStrategy($value)
 * @method array getUserId()
 */
class ModifySkillGroup extends V20170705Rpc
{

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
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumberId()
 * @method $this withPhoneNumberId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method array getSkillGroupId()
 */
class ModifyPhoneNumber extends V20170705Rpc
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
 * @method array getUserId()
 */
class RemoveUsers extends V20170705Rpc
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
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsersOfSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RequestLoginInfo extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsers extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListSkillGroupsOfUser extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSkillGroups extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRoles extends V20170705Rpc
{
}

/**
 * @method string getOutboundOnly()
 * @method $this withOutboundOnly($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListPhoneNumbers extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListContactFlows extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetUser extends V20170705Rpc
{
}

/**
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetServiceExtensions extends V20170705Rpc
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
class GetConfig extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class DeleteSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLoginName()
 * @method $this withLoginName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method array getRoleId()
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateUser extends V20170705Rpc
{

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
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAllowPrivateOutboundNumber()
 * @method $this withAllowPrivateOutboundNumber($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRoutingStrategy()
 * @method $this withRoutingStrategy($value)
 * @method array getUserId()
 */
class CreateSkillGroup extends V20170705Rpc
{

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
 * @method array getUserRamId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRoleId()
 * @method array getSkillGroupId()
 */
class AssignUsers extends V20170705Rpc
{

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
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 */
class AddPhoneNumber extends V20170705Rpc
{
}
