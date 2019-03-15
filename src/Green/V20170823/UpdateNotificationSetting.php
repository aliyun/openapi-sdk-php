<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getRealtimeMessageList()
 * @method $this withRealtimeMessageList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReminderModeList()
 * @method $this withReminderModeList($value)
 * @method string getScheduleMessageTime()
 * @method $this withScheduleMessageTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getScheduleMessageTimeZone()
 * @method $this withScheduleMessageTimeZone($value)
 */
class UpdateNotificationSetting extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
