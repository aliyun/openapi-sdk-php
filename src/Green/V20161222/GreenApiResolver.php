<?php

namespace AlibabaCloud\Green\V20161222;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ImageDetection imageDetection(array $options = [])
 * @method ImageResult imageResult(array $options = [])
 * @method ImageResults imageResults(array $options = [])
 * @method SampleFeedback sampleFeedback(array $options = [])
 * @method TextKeywordFilter textKeywordFilter(array $options = [])
 */
class GreenApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Green';

    /** @var string */
    public $version = '2016-12-22';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'green';
}

class ImageDetection extends Roa
{
    /** @var string */
    public $pathPattern = '/image/detection';
}

/**
 * @method string getTaskid()
 */
class ImageResult extends Roa
{
    /** @var string */
    public $pathPattern = '/image/result/[taskid]';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskid($value)
    {
        $this->data['Taskid'] = $value;
        $this->pathParameters['taskid'] = $value;

        return $this;
    }
}

class ImageResults extends Roa
{
    /** @var string */
    public $pathPattern = '/image/results';
}

class SampleFeedback extends Roa
{
    /** @var string */
    public $pathPattern = '/sample/feedback';
}

class TextKeywordFilter extends Roa
{
    /** @var string */
    public $pathPattern = '/text/keyword_filter';
}
