<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getTimeWindow()
 * @method $this withTimeWindow($value)
 */
class FindAlarmHistory extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';
}
