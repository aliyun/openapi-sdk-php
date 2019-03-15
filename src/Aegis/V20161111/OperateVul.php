<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class OperateVul extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
