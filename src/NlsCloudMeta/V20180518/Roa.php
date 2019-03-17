<?php

namespace AlibabaCloud\NlsCloudMeta\V20180518;

use AlibabaCloud\Roa;

class V20180518Roa extends Roa
{
    /** @var string */
    public $product = 'nls-cloud-meta';

    /** @var string */
    public $version = '2018-05-18';

    /** @var string */
    public $method = 'POST';
}

class CreateToken extends V20180518Roa
{
    /** @var string */
    public $pathPattern = '/pop/2018-05-18/tokens';
}
