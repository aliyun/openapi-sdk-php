<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 */
class AddPhoneNumber extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
