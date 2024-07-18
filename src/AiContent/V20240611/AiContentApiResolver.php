<?php

namespace AlibabaCloud\AiContent\V20240611;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AliyunConsoleOpenApiQueryAliyunConsoleServcieList aliyunConsoleOpenApiQueryAliyunConsoleServcieList(array $options = [])
 * @method Personalizedtxt2imgAddInferenceJob personalizedtxt2imgAddInferenceJob(array $options = [])
 * @method Personalizedtxt2imgAddModelTrainJob personalizedtxt2imgAddModelTrainJob(array $options = [])
 * @method Personalizedtxt2imgQueryImageAsset personalizedtxt2imgQueryImageAsset(array $options = [])
 * @method Personalizedtxt2imgQueryInferenceJobInfo personalizedtxt2imgQueryInferenceJobInfo(array $options = [])
 * @method Personalizedtxt2imgQueryModelTrainJobList personalizedtxt2imgQueryModelTrainJobList(array $options = [])
 * @method Personalizedtxt2imgQueryModelTrainStatus personalizedtxt2imgQueryModelTrainStatus(array $options = [])
 */
class AiContentApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'AiContent';

    /** @var string */
    public $version = '20240611';

    /** @var string */
    protected $scheme = 'https';
}

class AliyunConsoleOpenApiQueryAliyunConsoleServcieList extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/aliyunconsole/queryAliyunConsoleServcieList';
}

/**
 * @method string getBody()
 */
class Personalizedtxt2imgAddInferenceJob extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/personalizedtxt2img/addInferenceJob';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class Personalizedtxt2imgAddModelTrainJob extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/personalizedtxt2img/addModelTrainJob';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getImageId()
 * @method string getModelId()
 * @method string getEncodeFormat()
 * @method string getPromptId()
 */
class Personalizedtxt2imgQueryImageAsset extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/personalizedtxt2img/queryImageAsset';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['query']['imageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->options['query']['modelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEncodeFormat($value)
    {
        $this->data['EncodeFormat'] = $value;
        $this->options['query']['encodeFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPromptId($value)
    {
        $this->data['PromptId'] = $value;
        $this->options['query']['promptId'] = $value;

        return $this;
    }
}

/**
 * @method string getInferenceJobId()
 */
class Personalizedtxt2imgQueryInferenceJobInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/personalizedtxt2img/queryInferenceJobInfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInferenceJobId($value)
    {
        $this->data['InferenceJobId'] = $value;
        $this->options['query']['inferenceJobId'] = $value;

        return $this;
    }
}

class Personalizedtxt2imgQueryModelTrainJobList extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/personalizedtxt2img/queryModelTrainJobList';
}

/**
 * @method string getModelId()
 */
class Personalizedtxt2imgQueryModelTrainStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/personalizedtxt2img/queryModelTrainStatus';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelId($value)
    {
        $this->data['ModelId'] = $value;
        $this->options['query']['modelId'] = $value;

        return $this;
    }
}
