<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\Roa;

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class IE extends Roa
{
    public $product = 'Nlp';

    public $version = '2018-04-08';

    public $pathPattern = '/nlp/api/ie/[Domain]';

    public $method = 'POST';

    public $serviceCode = 'nlp';
}
