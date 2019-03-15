<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallCenterNumber()
 * @method $this withCallCenterNumber($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class StartBack2BackCall extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
