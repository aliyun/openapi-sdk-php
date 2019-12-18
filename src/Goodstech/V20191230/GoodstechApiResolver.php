<?php

namespace AlibabaCloud\Goodstech\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyCommodity classifyCommodity(array $options = [])
 */
class GoodstechApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'goodstech';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'goodstech';
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class ClassifyCommodity extends Rpc
{
}
