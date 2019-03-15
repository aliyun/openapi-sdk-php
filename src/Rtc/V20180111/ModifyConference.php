<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getConferenceName()
 * @method $this withConferenceName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRemindNotice()
 * @method $this withRemindNotice($value)
 */
class ModifyConference extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';
}
