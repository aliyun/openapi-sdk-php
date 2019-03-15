<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\Rpc;

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getService()
 * @method $this withService($value)
 */
class ExecuteRequest extends Rpc
{
    public $product = 'saf';

    public $version = '2018-09-19';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'saf';
}
