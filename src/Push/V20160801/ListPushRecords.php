<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class ListPushRecords extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
