<?php

namespace AlibabaCloud\Aliyuncvc\V20190919;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveMeetingCode activeMeetingCode(array $options = [])
 * @method CheckMeetingCode checkMeetingCode(array $options = [])
 * @method CreateMeeting createMeeting(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateUserEvaluations createUserEvaluations(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method ListCommodities listCommodities(array $options = [])
 * @method QueryIsvUserInfo queryIsvUserInfo(array $options = [])
 * @method QueryMeetingInfo queryMeetingInfo(array $options = [])
 * @method QueryMemberRecord queryMemberRecord(array $options = [])
 * @method QueryStatistics queryStatistics(array $options = [])
 * @method QueryUserBuyAttribute queryUserBuyAttribute(array $options = [])
 * @method QueryUserEvaluation queryUserEvaluation(array $options = [])
 * @method QueryUserInfo queryUserInfo(array $options = [])
 * @method QueryUserList queryUserList(array $options = [])
 * @method RemoveMeeting removeMeeting(array $options = [])
 */
class AliyuncvcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'aliyuncvc';

    /** @var string */
    public $version = '2019-09-19';

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
class ActiveMeetingCode extends Rpc
{
}

/**
 * @method string getMeetingCode()
 * @method string getUserId()
 */
class CheckMeetingCode extends Rpc
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
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCreateDate()
 * @method $this withCreateDate($value)
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
class CreateUserEvaluations extends Rpc
{
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListCommodities extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryIsvUserInfo extends Rpc
{
}

/**
 * @method string getMeetingUUID()
 */
class QueryMeetingInfo extends Rpc
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
class QueryMemberRecord extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class QueryStatistics extends Rpc
{
}

class QueryUserBuyAttribute extends Rpc
{
}

class QueryUserEvaluation extends Rpc
{
}

class QueryUserInfo extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryUserList extends Rpc
{
}

/**
 * @method string getMeetingUUID()
 */
class RemoveMeeting extends Rpc
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
