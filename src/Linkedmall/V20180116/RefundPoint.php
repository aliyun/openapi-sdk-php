<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSellerId()
 * @method $this withSellerId($value)
 * @method string getLmOrderId()
 * @method $this withLmOrderId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefundPoint extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';
}
