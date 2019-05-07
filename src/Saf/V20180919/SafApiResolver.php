<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method ExecuteRequest executeRequest(array $options = [])
 */
class SafApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
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
class ExecuteRequest extends Rpc
{
}
