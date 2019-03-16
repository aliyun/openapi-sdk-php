<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\Rpc;

class V20180919Rpc extends Rpc
{
    /** @var string */
    public $product = 'saf';

    /** @var string */
    public $version = '2018-09-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $serviceCode = 'saf';
}

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getService()
 * @method $this withService($value)
 */
class ExecuteRequest extends V20180919Rpc
{
}
