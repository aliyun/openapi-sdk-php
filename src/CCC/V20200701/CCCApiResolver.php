<?php

namespace AlibabaCloud\CCC\V20200701;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddNumbersToSkillGroup addNumbersToSkillGroup(array $options = [])
 * @method AddPhoneNumberToSkillGroups addPhoneNumberToSkillGroups(array $options = [])
 * @method AddSkillGroupsToUser addSkillGroupsToUser(array $options = [])
 * @method AnswerCall answerCall(array $options = [])
 * @method BargeInCall bargeInCall(array $options = [])
 * @method BlindTransfer blindTransfer(array $options = [])
 * @method CancelAttendedTransfer cancelAttendedTransfer(array $options = [])
 * @method ChangeWorkMode changeWorkMode(array $options = [])
 * @method CompleteAttendedTransfer completeAttendedTransfer(array $options = [])
 * @method CreateSkillGroup createSkillGroup(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method DeleteSkillGroup deleteSkillGroup(array $options = [])
 * @method GetLoginDetails getLoginDetails(array $options = [])
 * @method GetMonoRecording getMonoRecording(array $options = [])
 * @method GetMultiChannelRecording getMultiChannelRecording(array $options = [])
 * @method GetNumberLocation getNumberLocation(array $options = [])
 * @method GetTurnCredentials getTurnCredentials(array $options = [])
 * @method GetTurnServerList getTurnServerList(array $options = [])
 * @method HoldCall holdCall(array $options = [])
 * @method InitiateAttendedTransfer initiateAttendedTransfer(array $options = [])
 * @method InterceptCall interceptCall(array $options = [])
 * @method LaunchAuthentication launchAuthentication(array $options = [])
 * @method LaunchSurvey launchSurvey(array $options = [])
 * @method ListBriefSkillGroups listBriefSkillGroups(array $options = [])
 * @method ListCallDetailRecords listCallDetailRecords(array $options = [])
 * @method ListConfigItems listConfigItems(array $options = [])
 * @method ListContactFlows listContactFlows(array $options = [])
 * @method ListDevices listDevices(array $options = [])
 * @method ListHistoricalAgentReport listHistoricalAgentReport(array $options = [])
 * @method ListInstancesOfUser listInstancesOfUser(array $options = [])
 * @method ListOutboundNumbersOfUser listOutboundNumbersOfUser(array $options = [])
 * @method ListPrivilegesOfUser listPrivilegesOfUser(array $options = [])
 * @method ListRealtimeAgentStates listRealtimeAgentStates(array $options = [])
 * @method ListRecentCallDetailRecords listRecentCallDetailRecords(array $options = [])
 * @method ListSkillLevelsOfUser listSkillLevelsOfUser(array $options = [])
 * @method ListUserLevelsOfSkillGroup listUserLevelsOfSkillGroup(array $options = [])
 * @method MakeCall makeCall(array $options = [])
 * @method ModifyPhoneNumber modifyPhoneNumber(array $options = [])
 * @method ModifySkillGroup modifySkillGroup(array $options = [])
 * @method ModifyUser modifyUser(array $options = [])
 * @method ModifyUserLevelsOfSkillGroup modifyUserLevelsOfSkillGroup(array $options = [])
 * @method MonitorCall monitorCall(array $options = [])
 * @method MuteCall muteCall(array $options = [])
 * @method PickOutboundNumbers pickOutboundNumbers(array $options = [])
 * @method PollUserStatus pollUserStatus(array $options = [])
 * @method ReadyForService readyForService(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method ReleaseCall releaseCall(array $options = [])
 * @method RemovePhoneNumbersFromSkillGroup removePhoneNumbersFromSkillGroup(array $options = [])
 * @method ResetAgentState resetAgentState(array $options = [])
 * @method RetrieveCall retrieveCall(array $options = [])
 * @method SendDtmfSignaling sendDtmfSignaling(array $options = [])
 * @method SignInGroup signInGroup(array $options = [])
 * @method SignOutGroup signOutGroup(array $options = [])
 * @method StartBack2BackCall startBack2BackCall(array $options = [])
 * @method TakeBreak takeBreak(array $options = [])
 * @method UnmuteCall unmuteCall(array $options = [])
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

    /** @var string */
    public $serviceCode = 'CCC';
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
 * @method string getOrderByField()
 * @method $this withOrderByField($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getWithRecording()
 * @method $this withWithRecording($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getContactType()
 * @method $this withContactType($value)
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstancesOfUser extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListPrivilegesOfUser extends Rpc
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
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
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
 * @method string getUserId()
 * @method $this withUserId($value)
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
