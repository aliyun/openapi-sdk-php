<?php

namespace AlibabaCloud\NlsCloudMeta\V20180518;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateToken createToken(array $options = [])
 */
class NlsCloudMetaApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
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
