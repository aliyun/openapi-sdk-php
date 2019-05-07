<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ExecuteRequest executeRequest(array $options = [])
 */
class SafApiResolver
{
    use ApiResolverTrait;
}

class V20180919Rpc extends Rpc
{
    /** @var string */
    public $product = 'saf';

    /** @var string */
    public $version = '2018-09-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

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
