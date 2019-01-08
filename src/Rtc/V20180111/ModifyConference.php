<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyConference
 *
 * @method string getStartTime()
 * @method string getType()
 * @method string getConferenceId()
 * @method string getConferenceName()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getRemindNotice()
 */
class ModifyConference extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'ModifyConference';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $conferenceId
     *
     * @return $this
     */
    public function withConferenceId($conferenceId)
    {
        $this->data['ConferenceId'] = $conferenceId;
        $this->options['query']['ConferenceId'] = $conferenceId;

        return $this;
    }

    /**
     * @param string $conferenceName
     *
     * @return $this
     */
    public function withConferenceName($conferenceName)
    {
        $this->data['ConferenceName'] = $conferenceName;
        $this->options['query']['ConferenceName'] = $conferenceName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $remindNotice
     *
     * @return $this
     */
    public function withRemindNotice($remindNotice)
    {
        $this->data['RemindNotice'] = $remindNotice;
        $this->options['query']['RemindNotice'] = $remindNotice;

        return $this;
    }
}
