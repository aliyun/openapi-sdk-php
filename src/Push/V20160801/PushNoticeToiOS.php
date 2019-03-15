<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getApnsEnv()
 * @method $this withApnsEnv($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class PushNoticeToiOS extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
