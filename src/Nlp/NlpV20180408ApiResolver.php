<?php

namespace AlibabaCloud\Nlp;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Nlp based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Nlp
 *
 * @method V20180408\Entity entity(array $options = [])
 * @method V20180408\IE iE(array $options = [])
 * @method V20180408\KWE kWE(array $options = [])
 * @method V20180408\ReviewAnalysis reviewAnalysis(array $options = [])
 * @method V20180408\Sentiment sentiment(array $options = [])
 * @method V20180408\TextStructure textStructure(array $options = [])
 * @method V20180408\Translate translate(array $options = [])
 * @method V20180408\WordPos wordPos(array $options = [])
 * @method V20180408\WordSegment wordSegment(array $options = [])
 */
class NlpV20180408ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Nlp\\V20180408';
}
