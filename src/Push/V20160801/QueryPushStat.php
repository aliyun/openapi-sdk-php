<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryPushStat extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
