<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateNotificationSetting
 *
 * @method string getRealtimeMessageList()
 * @method string getSourceIp()
 * @method string getReminderModeList()
 * @method string getScheduleMessageTime()
 * @method string getLang()
 * @method string getScheduleMessageTimeZone()
 */
class UpdateNotificationSetting extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'UpdateNotificationSetting';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $realtimeMessageList
     *
     * @return $this
     */
    public function withRealtimeMessageList($realtimeMessageList)
    {
        $this->data['RealtimeMessageList'] = $realtimeMessageList;
        $this->options['query']['RealtimeMessageList'] = $realtimeMessageList;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $reminderModeList
     *
     * @return $this
     */
    public function withReminderModeList($reminderModeList)
    {
        $this->data['ReminderModeList'] = $reminderModeList;
        $this->options['query']['ReminderModeList'] = $reminderModeList;

        return $this;
    }

    /**
     * @param string $scheduleMessageTime
     *
     * @return $this
     */
    public function withScheduleMessageTime($scheduleMessageTime)
    {
        $this->data['ScheduleMessageTime'] = $scheduleMessageTime;
        $this->options['query']['ScheduleMessageTime'] = $scheduleMessageTime;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $scheduleMessageTimeZone
     *
     * @return $this
     */
    public function withScheduleMessageTimeZone($scheduleMessageTimeZone)
    {
        $this->data['ScheduleMessageTimeZone'] = $scheduleMessageTimeZone;
        $this->options['query']['ScheduleMessageTimeZone'] = $scheduleMessageTimeZone;

        return $this;
    }
}
