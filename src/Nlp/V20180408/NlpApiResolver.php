<?php

namespace AlibabaCloud\Nlp\V20180408;

use AlibabaCloud\ApiResolverTrait;

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
