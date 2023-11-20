<?php

namespace AlibabaCloud\Oms\V20190527;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetDomainFields getDomainFields(array $options = [])
 */
class OmsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Oms';

    /** @var string */
    public $version = '2019-05-27';
}

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getUseCache()
 * @method $this withUseCache($value)
 */
class GetDomainFields extends Rpc
{
}
