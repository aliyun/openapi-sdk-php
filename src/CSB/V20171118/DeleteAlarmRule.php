<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteAlarmRule extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $method = 'POST';
}
