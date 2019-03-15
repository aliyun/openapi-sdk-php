<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class QueryAppPushStat extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
