<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class GetRule extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
