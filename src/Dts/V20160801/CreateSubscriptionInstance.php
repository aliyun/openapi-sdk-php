<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 */
class CreateSubscriptionInstance extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}
