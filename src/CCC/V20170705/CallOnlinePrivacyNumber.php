<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getTelA()
 * @method $this withTelA($value)
 * @method string getTelB()
 * @method $this withTelB($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CallOnlinePrivacyNumber extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
