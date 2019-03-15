<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LaunchAppraise extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
