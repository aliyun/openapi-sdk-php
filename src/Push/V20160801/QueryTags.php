<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getKeyType()
 * @method $this withKeyType($value)
 */
class QueryTags extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
