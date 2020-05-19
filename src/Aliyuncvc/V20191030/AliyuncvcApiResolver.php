<?php

namespace AlibabaCloud\Aliyuncvc\V20191030;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveDevice activeDevice(array $options = [])
 * @method ActiveMeeting activeMeeting(array $options = [])
 * @method BatchCreateDevice batchCreateDevice(array $options = [])
 * @method CreateDeviceMeeting createDeviceMeeting(array $options = [])
 * @method CreateEvaluation createEvaluation(array $options = [])
 * @method CreateLive createLive(array $options = [])
 * @method CreateMeeting createMeeting(array $options = [])
 * @method CreateMeetingInternational createMeetingInternational(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateUserInternational createUserInternational(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteLive deleteLive(array $options = [])
 * @method DeleteMeeting deleteMeeting(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method EndDeviceMeeting endDeviceMeeting(array $options = [])
 * @method EndLive endLive(array $options = [])
 * @method GetDeviceActiveCode getDeviceActiveCode(array $options = [])
 * @method GetDeviceToken getDeviceToken(array $options = [])
 * @method GetMeeting getMeeting(array $options = [])
 * @method GetMeetingInternational getMeetingInternational(array $options = [])
 * @method GetMeetingMember getMeetingMember(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method JoinDeviceMeeting joinDeviceMeeting(array $options = [])
 * @method JoinLive joinLive(array $options = [])
 * @method JoinMeeting joinMeeting(array $options = [])
 * @method JoinMeetingInternational joinMeetingInternational(array $options = [])
 * @method ListDeviceIp listDeviceIp(array $options = [])
 * @method ListEvaluations listEvaluations(array $options = [])
 * @method ListIsvStatistics listIsvStatistics(array $options = [])
 * @method ListMembers listMembers(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ModifyMeetingPassword modifyMeetingPassword(array $options = [])
 * @method ModifyMeetingPasswordInternational modifyMeetingPasswordInternational(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method RegisterUemDevice registerUemDevice(array $options = [])
 * @method StartLive startLive(array $options = [])
 * @method UpdateDeviceHeartBeat updateDeviceHeartBeat(array $options = [])
 * @method UpdateLivePassword updateLivePassword(array $options = [])
 */
class AliyuncvcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'aliyuncvc';

    /** @var string */
    public $version = '2019-10-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'aliyuncvc';
}

/**
 * @method string getIP()
 * @method string getActiveCode()
 * @method string getMac()
 * @method string getDeviceVersion()
 * @method string getSN()
 */
class ActiveDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIP($value)
    {
        $this->data['IP'] = $value;
        $this->options['form_params']['IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActiveCode($value)
    {
        $this->data['ActiveCode'] = $value;
        $this->options['form_params']['ActiveCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMac($value)
    {
        $this->data['Mac'] = $value;
        $this->options['form_params']['Mac'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceVersion($value)
    {
        $this->data['DeviceVersion'] = $value;
        $this->options['form_params']['DeviceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingUUID()
 * @method $this withMeetingUUID($value)
 * @method string getMeetingCode()
 * @method $this withMeetingCode($value)
 */
class ActiveMeeting extends Rpc
{
}

/**
 * @method string getSN()
 */
class BatchCreateDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingName()
 * @method string getOpenPasswordtag()
 * @method string getToken()
 * @method string getPassword()
 * @method string getSN()
 */
class CreateDeviceMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingName($value)
    {
        $this->data['MeetingName'] = $value;
        $this->options['form_params']['MeetingName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordtag($value)
    {
        $this->data['OpenPasswordtag'] = $value;
        $this->options['form_params']['OpenPasswordtag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getCreateTime()
 * @method $this withCreateTime($value)
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMemberUUID()
 * @method $this withMemberUUID($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getEvaluation()
 * @method $this withEvaluation($value)
 * @method string getScore()
 * @method $this withScore($value)
 * @method string getMeetingUUID()
 * @method $this withMeetingUUID($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateEvaluation extends Rpc
{
}

/**
 * @method string getMemo()
 * @method string getUserId()
 * @method string getOpenPasswordFlag()
 * @method string getPassword()
 * @method string getLiveName()
 */
class CreateLive extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemo($value)
    {
        $this->data['Memo'] = $value;
        $this->options['form_params']['Memo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordFlag($value)
    {
        $this->data['OpenPasswordFlag'] = $value;
        $this->options['form_params']['OpenPasswordFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveName($value)
    {
        $this->data['LiveName'] = $value;
        $this->options['form_params']['LiveName'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingName()
 * @method string getUserId()
 * @method string getOpenPasswordFlag()
 * @method string getPassword()
 * @method string getMasterEnableFlag()
 * @method string getMeetingMode()
 */
class CreateMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingName($value)
    {
        $this->data['MeetingName'] = $value;
        $this->options['form_params']['MeetingName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordFlag($value)
    {
        $this->data['OpenPasswordFlag'] = $value;
        $this->options['form_params']['OpenPasswordFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterEnableFlag($value)
    {
        $this->data['MasterEnableFlag'] = $value;
        $this->options['form_params']['MasterEnableFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingMode($value)
    {
        $this->data['MeetingMode'] = $value;
        $this->options['form_params']['MeetingMode'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingName()
 * @method string getUserId()
 * @method string getOpenPasswordFlag()
 * @method string getPassword()
 */
class CreateMeetingInternational extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingName($value)
    {
        $this->data['MeetingName'] = $value;
        $this->options['form_params']['MeetingName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordFlag($value)
    {
        $this->data['OpenPasswordFlag'] = $value;
        $this->options['form_params']['OpenPasswordFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }
}

/**
 * @method string getCount()
 * @method string getUserInfo()
 */
class CreateUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getCount()
 * @method string getUserInfo()
 */
class CreateUserInternational extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getSN()
 */
class DeleteDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getLiveUUID()
 * @method string getUserId()
 */
class DeleteLive extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveUUID($value)
    {
        $this->data['LiveUUID'] = $value;
        $this->options['form_params']['LiveUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingUUID()
 */
class DeleteMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingUUID($value)
    {
        $this->data['MeetingUUID'] = $value;
        $this->options['form_params']['MeetingUUID'] = $value;

        return $this;
    }
}

/**
 * @method string getCount()
 * @method string getUserInfo()
 */
class DeleteUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingUUID()
 * @method string getSN()
 */
class EndDeviceMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingUUID($value)
    {
        $this->data['MeetingUUID'] = $value;
        $this->options['form_params']['MeetingUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getLiveUUID()
 * @method string getUserId()
 */
class EndLive extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveUUID($value)
    {
        $this->data['LiveUUID'] = $value;
        $this->options['form_params']['LiveUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getSN()
 */
class GetDeviceActiveCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getSN()
 * @method $this withSN($value)
 */
class GetDeviceToken extends Rpc
{
}

/**
 * @method string getMeetingUUID()
 */
class GetMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingUUID($value)
    {
        $this->data['MeetingUUID'] = $value;
        $this->options['form_params']['MeetingUUID'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingUUID()
 */
class GetMeetingInternational extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingUUID($value)
    {
        $this->data['MeetingUUID'] = $value;
        $this->options['form_params']['MeetingUUID'] = $value;

        return $this;
    }
}

/**
 * @method string getMeetingUUID()
 * @method $this withMeetingUUID($value)
 */
class GetMeetingMember extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getToken()
 * @method string getPassword()
 * @method string getMeetingCode()
 * @method string getSN()
 */
class JoinDeviceMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingCode($value)
    {
        $this->data['MeetingCode'] = $value;
        $this->options['form_params']['MeetingCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

/**
 * @method string getLiveUUID()
 * @method string getUserId()
 * @method string getPassword()
 */
class JoinLive extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveUUID($value)
    {
        $this->data['LiveUUID'] = $value;
        $this->options['form_params']['LiveUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method string getPassword()
 * @method string getMeetingCode()
 */
class JoinMeeting extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingCode($value)
    {
        $this->data['MeetingCode'] = $value;
        $this->options['form_params']['MeetingCode'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method string getPassword()
 * @method string getMeetingCode()
 */
class JoinMeetingInternational extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingCode($value)
    {
        $this->data['MeetingCode'] = $value;
        $this->options['form_params']['MeetingCode'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getSN()
 */
class ListDeviceIp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSN($value)
    {
        $this->data['SN'] = $value;
        $this->options['form_params']['SN'] = $value;

        return $this;
    }
}

class ListEvaluations extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ListIsvStatistics extends Rpc
{
}

/**
 * @method string getMeetingUUID()
 * @method $this withMeetingUUID($value)
 */
class ListMembers extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getUserId()
 * @method string getOpenPasswordFlag()
 * @method string getMeetingUUID()
 * @method string getPassword()
 */
class ModifyMeetingPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordFlag($value)
    {
        $this->data['OpenPasswordFlag'] = $value;
        $this->options['form_params']['OpenPasswordFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingUUID($value)
    {
        $this->data['MeetingUUID'] = $value;
        $this->options['form_params']['MeetingUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method string getOpenPasswordFlag()
 * @method string getMeetingUUID()
 * @method string getPassword()
 */
class ModifyMeetingPasswordInternational extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordFlag($value)
    {
        $this->data['OpenPasswordFlag'] = $value;
        $this->options['form_params']['OpenPasswordFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMeetingUUID($value)
    {
        $this->data['MeetingUUID'] = $value;
        $this->options['form_params']['MeetingUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }
}

/**
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getDeviceVersion()
 * @method $this withDeviceVersion($value)
 * @method string getSN()
 * @method $this withSN($value)
 */
class RegisterDevice extends Rpc
{
}

/**
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getDeviceVersion()
 * @method $this withDeviceVersion($value)
 */
class RegisterUemDevice extends Rpc
{
}

/**
 * @method string getLiveUUID()
 * @method string getUserId()
 */
class StartLive extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveUUID($value)
    {
        $this->data['LiveUUID'] = $value;
        $this->options['form_params']['LiveUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class UpdateDeviceHeartBeat extends Rpc
{
}

/**
 * @method string getLiveUUID()
 * @method string getUserId()
 * @method string getOpenPasswordFlag()
 * @method string getPassword()
 */
class UpdateLivePassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveUUID($value)
    {
        $this->data['LiveUUID'] = $value;
        $this->options['form_params']['LiveUUID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenPasswordFlag($value)
    {
        $this->data['OpenPasswordFlag'] = $value;
        $this->options['form_params']['OpenPasswordFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }
}
