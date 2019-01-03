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
     * @deprecated deprecated since version 2.0, Use withRealtimeMessageList() instead.
     *
     * @param string $realtimeMessageList
     *
     * @return $this
     */
    public function setRealtimeMessageList($realtimeMessageList)
    {
        return $this->withRealtimeMessageList($realtimeMessageList);
    }

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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withReminderModeList() instead.
     *
     * @param string $reminderModeList
     *
     * @return $this
     */
    public function setReminderModeList($reminderModeList)
    {
        return $this->withReminderModeList($reminderModeList);
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
     * @deprecated deprecated since version 2.0, Use withScheduleMessageTime() instead.
     *
     * @param string $scheduleMessageTime
     *
     * @return $this
     */
    public function setScheduleMessageTime($scheduleMessageTime)
    {
        return $this->withScheduleMessageTime($scheduleMessageTime);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withScheduleMessageTimeZone() instead.
     *
     * @param string $scheduleMessageTimeZone
     *
     * @return $this
     */
    public function setScheduleMessageTimeZone($scheduleMessageTimeZone)
    {
        return $this->withScheduleMessageTimeZone($scheduleMessageTimeZone);
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
