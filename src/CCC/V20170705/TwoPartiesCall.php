<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalleeCustomer()
 * @method $this withCalleeCustomer($value)
 * @method string getCalleeAgent()
 * @method $this withCalleeAgent($value)
 */
class TwoPartiesCall extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
