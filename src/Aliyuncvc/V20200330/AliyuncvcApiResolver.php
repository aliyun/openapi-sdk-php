<?php

namespace AlibabaCloud\Aliyuncvc\V20200330;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveMeeting activeMeeting(array $options = [])
 * @method BatchDeleteDevices batchDeleteDevices(array $options = [])
 * @method CreateEvaluation createEvaluation(array $options = [])
 * @method CreateMeeting createMeeting(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method GetMeeting getMeeting(array $options = [])
 * @method GetMembers getMembers(array $options = [])
 * @method JoinMeeting joinMeeting(array $options = [])
 */
class AliyuncvcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'aliyuncvc';

    /** @var string */
    public $version = '2020-03-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'aliyuncvc';
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
 * @method string getGroupId()
 * @method string getSN()
 */
class BatchDeleteDevices extends Rpc
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
 * @method string getMeetingName()
 * @method string getUserId()
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
class GetMembers extends Rpc
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
 * @method string getUserId()
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
    public function withMeetingCode($value)
    {
        $this->data['MeetingCode'] = $value;
        $this->options['form_params']['MeetingCode'] = $value;

        return $this;
    }
}
