<?php

namespace AlibabaCloud\Objectdet\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectMainBody detectMainBody(array $options = [])
 */
class ObjectdetApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'objectdet';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'objectdet';
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class DetectMainBody extends Rpc
{
}
