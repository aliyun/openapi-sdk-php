<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getExpiryTimeEnd()
 * @method $this withExpiryTimeEnd($value)
 * @method string getExpiryTimeStart()
 * @method $this withExpiryTimeStart($value)
 * @method string getEffectiveOrNot()
 * @method $this withEffectiveOrNot($value)
 */
class QueryCashCoupons extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';
}
