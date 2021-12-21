<?php

namespace AlibabaCloud\CCC\V20200701;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbortCampaign abortCampaign(array $options = [])
 * @method AddNumbersToSkillGroup addNumbersToSkillGroup(array $options = [])
 * @method AddPersonalNumbersToUser addPersonalNumbersToUser(array $options = [])
 * @method AddPhoneNumbers addPhoneNumbers(array $options = [])
 * @method AddPhoneNumberToSkillGroups addPhoneNumberToSkillGroups(array $options = [])
 * @method AddSkillGroupsToUser addSkillGroupsToUser(array $options = [])
 * @method AddUsersToSkillGroup addUsersToSkillGroup(array $options = [])
 * @method AnswerCall answerCall(array $options = [])
 * @method AssignUsers assignUsers(array $options = [])
 * @method BargeInCall bargeInCall(array $options = [])
 * @method BlindTransfer blindTransfer(array $options = [])
 * @method CancelAttendedTransfer cancelAttendedTransfer(array $options = [])
 * @method ChangeWorkMode changeWorkMode(array $options = [])
 * @method CoachCall coachCall(array $options = [])
 * @method CompleteAttendedTransfer completeAttendedTransfer(array $options = [])
 * @method CreateCampaign createCampaign(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateSkillGroup createSkillGroup(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method DeleteSkillGroup deleteSkillGroup(array $options = [])
 * @method GetCallDetailRecord getCallDetailRecord(array $options = [])
 * @method GetCampaign getCampaign(array $options = [])
 * @method GetHistoricalCallerReport getHistoricalCallerReport(array $options = [])
 * @method GetHistoricalInstanceReport getHistoricalInstanceReport(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetInstanceTrendingReport getInstanceTrendingReport(array $options = [])
 * @method GetLoginDetails getLoginDetails(array $options = [])
 * @method GetMonoRecording getMonoRecording(array $options = [])
 * @method GetMultiChannelRecording getMultiChannelRecording(array $options = [])
 * @method GetNumberLocation getNumberLocation(array $options = [])
 * @method GetRealtimeInstanceStates getRealtimeInstanceStates(array $options = [])
 * @method GetTurnCredentials getTurnCredentials(array $options = [])
 * @method GetTurnServerList getTurnServerList(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method HoldCall holdCall(array $options = [])
 * @method InitiateAttendedTransfer initiateAttendedTransfer(array $options = [])
 * @method InterceptCall interceptCall(array $options = [])
 * @method LaunchAuthentication launchAuthentication(array $options = [])
 * @method LaunchSurvey launchSurvey(array $options = [])
 * @method ListAgentStateLogs listAgentStateLogs(array $options = [])
 * @method ListAttempts listAttempts(array $options = [])
 * @method ListBriefSkillGroups listBriefSkillGroups(array $options = [])
 * @method ListCallDetailRecords listCallDetailRecords(array $options = [])
 * @method ListCampaigns listCampaigns(array $options = [])
 * @method ListCampaignTrendingReport listCampaignTrendingReport(array $options = [])
 * @method ListCases listCases(array $options = [])
 * @method ListConfigItems listConfigItems(array $options = [])
 * @method ListContactFlows listContactFlows(array $options = [])
 * @method ListDevices listDevices(array $options = [])
 * @method ListHistoricalAgentReport listHistoricalAgentReport(array $options = [])
 * @method ListHistoricalSkillGroupReport listHistoricalSkillGroupReport(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListInstancesOfUser listInstancesOfUser(array $options = [])
 * @method ListIntervalAgentReport listIntervalAgentReport(array $options = [])
 * @method ListIntervalInstanceReport listIntervalInstanceReport(array $options = [])
 * @method ListIntervalSkillGroupReport listIntervalSkillGroupReport(array $options = [])
 * @method ListIvrTrackingDetails listIvrTrackingDetails(array $options = [])
 * @method ListOutboundNumbersOfUser listOutboundNumbersOfUser(array $options = [])
 * @method ListPersonalNumbersOfUser listPersonalNumbersOfUser(array $options = [])
 * @method ListPhoneNumbers listPhoneNumbers(array $options = [])
 * @method ListPhoneNumbersOfSkillGroup listPhoneNumbersOfSkillGroup(array $options = [])
 * @method ListPrivilegesOfUser listPrivilegesOfUser(array $options = [])
 * @method ListRamUsers listRamUsers(array $options = [])
 * @method ListRealtimeAgentStates listRealtimeAgentStates(array $options = [])
 * @method ListRealtimeSkillGroupStates listRealtimeSkillGroupStates(array $options = [])
 * @method ListRecentCallDetailRecords listRecentCallDetailRecords(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListSipCallRecords listSipCallRecords(array $options = [])
 * @method ListSipTraces listSipTraces(array $options = [])
 * @method ListSkillGroups listSkillGroups(array $options = [])
 * @method ListSkillLevelsOfUser listSkillLevelsOfUser(array $options = [])
 * @method ListUnassignedNumbers listUnassignedNumbers(array $options = [])
 * @method ListUserLevelsOfSkillGroup listUserLevelsOfSkillGroup(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method MakeCall makeCall(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ModifyPhoneNumber modifyPhoneNumber(array $options = [])
 * @method ModifySkillGroup modifySkillGroup(array $options = [])
 * @method ModifySkillLevelsOfUser modifySkillLevelsOfUser(array $options = [])
 * @method ModifyUser modifyUser(array $options = [])
 * @method ModifyUserLevelsOfSkillGroup modifyUserLevelsOfSkillGroup(array $options = [])
 * @method MonitorCall monitorCall(array $options = [])
 * @method MuteCall muteCall(array $options = [])
 * @method PauseCampaign pauseCampaign(array $options = [])
 * @method PickOutboundNumbers pickOutboundNumbers(array $options = [])
 * @method PollUserStatus pollUserStatus(array $options = [])
 * @method ReadyForService readyForService(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method ReleaseCall releaseCall(array $options = [])
 * @method RemovePersonalNumbersFromUser removePersonalNumbersFromUser(array $options = [])
 * @method RemovePhoneNumberFromSkillGroups removePhoneNumberFromSkillGroups(array $options = [])
 * @method RemovePhoneNumbers removePhoneNumbers(array $options = [])
 * @method RemovePhoneNumbersFromSkillGroup removePhoneNumbersFromSkillGroup(array $options = [])
 * @method RemoveSkillGroupsFromUser removeSkillGroupsFromUser(array $options = [])
 * @method RemoveUsers removeUsers(array $options = [])
 * @method RemoveUsersFromSkillGroup removeUsersFromSkillGroup(array $options = [])
 * @method ResetAgentState resetAgentState(array $options = [])
 * @method ResetUserPassword resetUserPassword(array $options = [])
 * @method ResumeCampaign resumeCampaign(array $options = [])
 * @method RetrieveCall retrieveCall(array $options = [])
 * @method SaveRTCStatsV2 saveRTCStatsV2(array $options = [])
 * @method SaveTerminalLog saveTerminalLog(array $options = [])
 * @method SaveWebRtcInfo saveWebRtcInfo(array $options = [])
 * @method SaveWebRTCStats saveWebRTCStats(array $options = [])
 * @method SendDtmfSignaling sendDtmfSignaling(array $options = [])
 * @method SignInGroup signInGroup(array $options = [])
 * @method SignOutGroup signOutGroup(array $options = [])
 * @method StartBack2BackCall startBack2BackCall(array $options = [])
 * @method StartPredictiveCall startPredictiveCall(array $options = [])
 * @method SubmitCampaign submitCampaign(array $options = [])
 * @method TakeBreak takeBreak(array $options = [])
 * @method UnmuteCall unmuteCall(array $options = [])
 * @method UpdateConfigItems updateConfigItems(array $options = [])
 */
class CCCApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CCC';

    /** @var string */
    public $version = '2020-07-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 */
class AbortCampaign extends Rpc
{
}

/**
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class AddNumbersToSkillGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AddPersonalNumbersToUser extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getNumberGroupId()
 * @method $this withNumberGroupId($value)
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AddPhoneNumbers extends Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIdList()
 * @method $this withSkillGroupIdList($value)
 */
class AddPhoneNumberToSkillGroups extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillLevelList()
 * @method $this withSkillLevelList($value)
 */
class AddSkillGroupsToUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserSkillLevelList()
 * @method $this withUserSkillLevelList($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class AddUsersToSkillGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AnswerCall extends Rpc
{
}

/**
 * @method string getRamIdList()
 * @method $this withRamIdList($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getWorkMode()
 * @method $this withWorkMode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillLevelList()
 * @method $this withSkillLevelList($value)
 */
class AssignUsers extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBargedUserId()
 * @method $this withBargedUserId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BargeInCall extends Rpc
{
}

/**
 * @method string getTransferee()
 * @method $this withTransferee($value)
 * @method string getTransferor()
 * @method $this withTransferor($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BlindTransfer extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CancelAttendedTransfer extends Rpc
{
}

/**
 * @method string getWorkMode()
 * @method $this withWorkMode($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ChangeWorkMode extends Rpc
{
}

/**
 * @method string getCoachedUserId()
 * @method $this withCoachedUserId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CoachCall extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CompleteAttendedTransfer extends Rpc
{
}

/**
 * @method string getQueueId()
 * @method $this withQueueId($value)
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getSimulation()
 * @method $this withSimulation($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMaxAttemptCount()
 * @method $this withMaxAttemptCount($value)
 * @method string getStrategyParameters()
 * @method $this withStrategyParameters($value)
 * @method string getCaseFileKey()
 * @method $this withCaseFileKey($value)
 * @method string getMinAttemptInterval()
 * @method $this withMinAttemptInterval($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSimulationParameters()
 * @method $this withSimulationParameters($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStrategyType()
 * @method $this withStrategyType($value)
 * @method string getCaseList()
 * @method $this withCaseList($value)
 * @method string getCallableTime()
 * @method $this withCallableTime($value)
 */
class CreateCampaign extends Rpc
{
}

/**
 * @method string getAdminRamIdList()
 * @method $this withAdminRamIdList($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateInstance extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSkillGroup extends Rpc
{
}

/**
 * @method string getLoginName()
 * @method $this withLoginName($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getWorkMode()
 * @method $this withWorkMode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getResetPassword()
 * @method $this withResetPassword($value)
 * @method string getSkillLevelList()
 * @method $this withSkillLevelList($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteSkillGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class GetCallDetailRecord extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 */
class GetCampaign extends Rpc
{
}

/**
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetHistoricalCallerReport extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetHistoricalInstanceReport extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceTrendingReport extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLoginDetails extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetMonoRecording extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetMultiChannelRecording extends Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNumberLocation extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetRealtimeInstanceStates extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetTurnCredentials extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetTurnServerList extends Rpc
{
}

/**
 * @method string getExtension()
 * @method $this withExtension($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMusic()
 * @method $this withMusic($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class HoldCall extends Rpc
{
}

/**
 * @method string getTransferee()
 * @method $this withTransferee($value)
 * @method string getTransferor()
 * @method $this withTransferor($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class InitiateAttendedTransfer extends Rpc
{
}

/**
 * @method string getInterceptedUserId()
 * @method $this withInterceptedUserId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class InterceptCall extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LaunchAuthentication extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LaunchSurvey extends Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListAgentStateLogs extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueueId()
 * @method $this withQueueId($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCaseId()
 * @method $this withCaseId($value)
 * @method string getAttemptId()
 * @method $this withAttemptId($value)
 */
class ListAttempts extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBriefSkillGroups extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getOrderByField()
 * @method $this withOrderByField($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEarlyMediaStateList()
 * @method $this withEarlyMediaStateList($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getSatisfactionList()
 * @method $this withSatisfactionList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getSatisfactionDescriptionList()
 * @method $this withSatisfactionDescriptionList($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getSatisfactionSurveyChannel()
 * @method $this withSatisfactionSurveyChannel($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getContactDisposition()
 * @method $this withContactDisposition($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ListCallDetailRecords extends Rpc
{
}

/**
 * @method string getActualStartTimeTo()
 * @method $this withActualStartTimeTo($value)
 * @method string getQueueId()
 * @method $this withQueueId($value)
 * @method string getActualStartTimeFrom()
 * @method $this withActualStartTimeFrom($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPlanedStartTimeFrom()
 * @method $this withPlanedStartTimeFrom($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPlanedStartTimeTo()
 * @method $this withPlanedStartTimeTo($value)
 * @method string getState()
 * @method $this withState($value)
 */
class ListCampaigns extends Rpc
{
}

/**
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListCampaignTrendingReport extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCases extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class ListConfigItems extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListContactFlows extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDevices extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAgentIdList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListHistoricalAgentReport extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentIdList($value)
    {
        $this->data['AgentIdList'] = $value;
        $this->options['form_params']['AgentIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSkillGroupIdList()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListHistoricalSkillGroupReport extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupIdList($value)
    {
        $this->data['SkillGroupIdList'] = $value;
        $this->options['form_params']['SkillGroupIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstances extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstancesOfUser extends Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class ListIntervalAgentReport extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class ListIntervalInstanceReport extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class ListIntervalSkillGroupReport extends Rpc
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
class ListIvrTrackingDetails extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIdList()
 * @method $this withSkillGroupIdList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListOutboundNumbersOfUser extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsMember()
 * @method $this withIsMember($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPersonalNumbersOfUser extends Rpc
{
}

/**
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPhoneNumbers extends Rpc
{
}

/**
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsMember()
 * @method $this withIsMember($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListPhoneNumbersOfSkillGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListPrivilegesOfUser extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRamUsers extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAgentIdList()
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getAgentName()
 * @method $this withAgentName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStateList()
 */
class ListRealtimeAgentStates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentIdList($value)
    {
        $this->data['AgentIdList'] = $value;
        $this->options['form_params']['AgentIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStateList($value)
    {
        $this->data['StateList'] = $value;
        $this->options['form_params']['StateList'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSkillGroupIdList()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRealtimeSkillGroupStates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupIdList($value)
    {
        $this->data['SkillGroupIdList'] = $value;
        $this->options['form_params']['SkillGroupIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRecentCallDetailRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }
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
 * @method string getContactIdList()
 * @method $this withContactIdList($value)
 */
class ListSipCallRecords extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSipTraces extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSkillGroups extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIsMember()
 * @method $this withIsMember($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSkillLevelsOfUser extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUnassignedNumbers extends Rpc
{
}

/**
 * @method string getIsMember()
 * @method $this withIsMember($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUserLevelsOfSkillGroup extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchPattern()
 * @method $this withSearchPattern($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getMaskedCallee()
 * @method $this withMaskedCallee($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class MakeCall extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyInstance extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyPhoneNumber extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 */
class ModifySkillGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillLevelList()
 * @method $this withSkillLevelList($value)
 */
class ModifySkillLevelsOfUser extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getWorkMode()
 * @method $this withWorkMode($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyUser extends Rpc
{
}

/**
 * @method string getUserLevelList()
 * @method $this withUserLevelList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ModifyUserLevelsOfSkillGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMonitoredUserId()
 * @method $this withMonitoredUserId($value)
 */
class MonitorCall extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class MuteCall extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 */
class PauseCampaign extends Rpc
{
}

/**
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIdList()
 * @method $this withSkillGroupIdList($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 */
class PickOutboundNumbers extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class PollUserStatus extends Rpc
{
}

/**
 * @method string getOutboundScenario()
 * @method $this withOutboundScenario($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ReadyForService extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RegisterDevice extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class ReleaseCall extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RemovePersonalNumbersFromUser extends Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIdList()
 * @method $this withSkillGroupIdList($value)
 */
class RemovePhoneNumberFromSkillGroups extends Rpc
{
}

/**
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RemovePhoneNumbers extends Rpc
{
}

/**
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class RemovePhoneNumbersFromSkillGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIdList()
 * @method $this withSkillGroupIdList($value)
 */
class RemoveSkillGroupsFromUser extends Rpc
{
}

/**
 * @method string getUserIdList()
 * @method $this withUserIdList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RemoveUsers extends Rpc
{
}

/**
 * @method string getUserIdList()
 * @method $this withUserIdList($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class RemoveUsersFromSkillGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ResetAgentState extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ResetUserPassword extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 */
class ResumeCampaign extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class RetrieveCall extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getSenderReport()
 * @method $this withSenderReport($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getReceiverReport()
 * @method $this withReceiverReport($value)
 * @method string getGoogAddress()
 * @method $this withGoogAddress($value)
 * @method string getGeneralInfo()
 * @method $this withGeneralInfo($value)
 */
class SaveRTCStatsV2 extends Rpc
{
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
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SaveWebRtcInfo extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getSenderReport()
 * @method $this withSenderReport($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getReceiverReport()
 * @method $this withReceiverReport($value)
 * @method string getGoogAddress()
 * @method $this withGoogAddress($value)
 * @method string getGeneralInfo()
 * @method $this withGeneralInfo($value)
 */
class SaveWebRTCStats extends Rpc
{
}

/**
 * @method string getDtmf()
 * @method $this withDtmf($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SendDtmfSignaling extends Rpc
{
}

/**
 * @method string getSignedSkillGroupIdList()
 * @method $this withSignedSkillGroupIdList($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SignInGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SignOutGroup extends Rpc
{
}

/**
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getBroker()
 * @method $this withBroker($value)
 * @method string getAdditionalBroker()
 * @method $this withAdditionalBroker($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartBack2BackCall extends Rpc
{
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getMaskedCallee()
 * @method $this withMaskedCallee($value)
 * @method string getContactFlowVariables()
 * @method $this withContactFlowVariables($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class StartPredictiveCall extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCampaignId()
 * @method $this withCampaignId($value)
 */
class SubmitCampaign extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class TakeBreak extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class UnmuteCall extends Rpc
{
}

/**
 * @method string getConfigItems()
 * @method $this withConfigItems($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class UpdateConfigItems extends Rpc
{
}
