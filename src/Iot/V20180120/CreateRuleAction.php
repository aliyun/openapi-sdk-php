<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getErrorActionFlag()
 * @method $this withErrorActionFlag($value)
 */
class CreateRuleAction extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
