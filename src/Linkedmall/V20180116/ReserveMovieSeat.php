<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getSeatIds()
 * @method $this withSeatIds($value)
 * @method string getBizUid()
 * @method $this withBizUid($value)
 * @method string getExtJson()
 * @method $this withExtJson($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getSeatNames()
 * @method $this withSeatNames($value)
 * @method string getScheduleId()
 * @method $this withScheduleId($value)
 */
class ReserveMovieSeat extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';
}
