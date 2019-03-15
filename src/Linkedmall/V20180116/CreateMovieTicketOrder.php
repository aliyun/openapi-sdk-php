<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getOutTradeId()
 * @method $this withOutTradeId($value)
 * @method string getLockSeatAppKey()
 * @method $this withLockSeatAppKey($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 */
class CreateMovieTicketOrder extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $serviceCode = 'linkedmall';
}
