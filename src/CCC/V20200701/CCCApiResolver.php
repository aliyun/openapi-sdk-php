<?php

namespace AlibabaCloud\CCC\V20200701;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AnswerCall answerCall(array $options = [])
 * @method BargeInCall bargeInCall(array $options = [])
 * @method BlindTransfer blindTransfer(array $options = [])
 * @method CancelAttendedTransfer cancelAttendedTransfer(array $options = [])
 * @method ChangeWorkMode changeWorkMode(array $options = [])
 * @method CompleteAttendedTransfer completeAttendedTransfer(array $options = [])
 * @method GetLoginDetails getLoginDetails(array $options = [])
 * @method GetNumberLocation getNumberLocation(array $options = [])
 * @method GetTurnCredentials getTurnCredentials(array $options = [])
 * @method GetTurnServerList getTurnServerList(array $options = [])
 * @method HoldCall holdCall(array $options = [])
 * @method InitiateAttendedTransfer initiateAttendedTransfer(array $options = [])
 * @method InterceptCall interceptCall(array $options = [])
 * @method LaunchAuthentication launchAuthentication(array $options = [])
 * @method LaunchSurvey launchSurvey(array $options = [])
 * @method ListBriefSkillGroups listBriefSkillGroups(array $options = [])
 * @method ListConfigItems listConfigItems(array $options = [])
 * @method ListDevices listDevices(array $options = [])
 * @method ListOutboundNumbersOfUser listOutboundNumbersOfUser(array $options = [])
 * @method ListPrivilegesOfUser listPrivilegesOfUser(array $options = [])
 * @method ListSkillLevelsOfUser listSkillLevelsOfUser(array $options = [])
 * @method MakeCall makeCall(array $options = [])
 * @method MonitorCall monitorCall(array $options = [])
 * @method MuteCall muteCall(array $options = [])
 * @method PickOutboundNumbers pickOutboundNumbers(array $options = [])
 * @method PollUserStatus pollUserStatus(array $options = [])
 * @method ReadyForService readyForService(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method ReleaseCall releaseCall(array $options = [])
 * @method ResetAgentState resetAgentState(array $options = [])
 * @method RetrieveCall retrieveCall(array $options = [])
 * @method SendDtmfSignaling sendDtmfSignaling(array $options = [])
 * @method SignInGroup signInGroup(array $options = [])
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
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetLoginDetails extends Rpc
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
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDevices extends Rpc
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
