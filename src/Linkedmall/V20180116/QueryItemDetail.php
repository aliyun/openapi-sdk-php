<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryItemDetail extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';
}
