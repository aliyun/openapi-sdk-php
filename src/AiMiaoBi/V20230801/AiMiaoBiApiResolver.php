<?php

namespace AlibabaCloud\AiMiaoBi\V20230801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateToken createToken(array $options = [])
 */
class AiMiaoBiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'AiMiaoBi';

    /** @var string */
    public $version = '2023-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getAgentKey()
 * @method $this withAgentKey($value)
 */
class CreateToken extends Rpc
{
}
