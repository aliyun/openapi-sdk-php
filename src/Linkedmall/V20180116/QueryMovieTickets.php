<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryMovieTickets extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $serviceCode = 'linkedmall';
}
