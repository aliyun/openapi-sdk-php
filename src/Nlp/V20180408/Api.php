<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method IE iE(array $options = [])
 * @method TextStructure textStructure(array $options = [])
 * @method KWE kWE(array $options = [])
 * @method Translate translate(array $options = [])
 * @method Sentiment sentiment(array $options = [])
 * @method WordPos wordPos(array $options = [])
 * @method Entity entity(array $options = [])
 * @method WordSegment wordSegment(array $options = [])
 * @method ReviewAnalysis reviewAnalysis(array $options = [])
 */
class NlpApiResolver
{
    use ApiResolverTrait;
}

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
