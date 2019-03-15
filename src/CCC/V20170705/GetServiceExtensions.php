<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetServiceExtensions extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
