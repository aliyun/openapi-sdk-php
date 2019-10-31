<?php

namespace AlibabaCloud\Aliyuncvc\V20191030;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveMeeting activeMeeting(array $options = [])
 * @method CreateEvaluation createEvaluation(array $options = [])
 * @method CreateMeeting createMeeting(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method DeleteMeeting deleteMeeting(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method GetMeeting getMeeting(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method JoinMeeting joinMeeting(array $options = [])
 * @method ListEvaluations listEvaluations(array $options = [])
 * @method ListMembers listMembers(array $options = [])
 * @method ListUsers listUsers(array $options = [])
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
 * @method string getMeetingUUID()
 * @method $this withMeetingUUID($value)
 * @method string getMeetingCode()
 * @method $this withMeetingCode($value)
 */
class ActiveMeeting extends Rpc
{
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
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getMeetingCode()
 * @method string getUserId()
 */
class JoinMeeting extends Rpc
{

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
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

class ListEvaluations extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsers extends Rpc
{
}
