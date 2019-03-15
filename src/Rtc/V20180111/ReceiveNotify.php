<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getEvent()
 * @method $this withEvent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ReceiveNotify extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';
}
