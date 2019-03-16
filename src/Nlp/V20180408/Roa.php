<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\Roa;

class V20180408Roa extends Roa
{
    /** @var string */
    public $product = 'Nlp';

    /** @var string */
    public $version = '2018-04-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'nlp';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class IE extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/ie/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class TextStructure extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/textstructure/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class KWE extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/kwe/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class Translate extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/translate/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class Sentiment extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/sentiment/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class WordPos extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/wordpos/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class Entity extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/entity/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class WordSegment extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/wordsegment/[Domain]';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ReviewAnalysis extends V20180408Roa
{
    /** @var string */
    public $pathPattern = '/nlp/api/reviewanalysis/[Domain]';
}
