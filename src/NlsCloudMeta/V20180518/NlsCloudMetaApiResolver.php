<?php

namespace AlibabaCloud\NlsCloudMeta\V20180518;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method CreateToken createToken(array $options = [])
 */
class NlsCloudMetaApiResolver
{
    use ApiResolverTrait;
}

class Roa extends \AlibabaCloud\Roa
{
    /** @var string */
    public $product = 'nls-cloud-meta';

    /** @var string */
    public $version = '2018-05-18';

    /** @var string */
    public $method = 'POST';
}

class CreateToken extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/2018-05-18/tokens';
}
