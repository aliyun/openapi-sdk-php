<?php

namespace AlibabaCloud\Aps\V20240325;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetFxCustomerType getFxCustomerType(array $options = [])
 */
class ApsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'aps';

    /** @var string */
    public $version = '2024-03-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class GetFxCustomerType extends Rpc
{
}
