<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\Roa;

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class WordSegment extends Roa
{
    public $product = 'Nlp';

    public $version = '2018-04-08';

    public $pathPattern = '/nlp/api/wordsegment/[Domain]';

    public $method = 'POST';

    public $serviceCode = 'nlp';
}
