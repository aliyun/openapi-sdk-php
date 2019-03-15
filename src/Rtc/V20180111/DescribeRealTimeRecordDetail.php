<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRealTimeRecordDetail extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';
}
