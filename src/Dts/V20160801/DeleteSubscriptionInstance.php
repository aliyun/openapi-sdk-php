<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSubscriptionInstance extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}
