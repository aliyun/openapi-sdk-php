<?php

namespace AlibabaCloud\NlpAutoml\V20191111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetPredictResult getPredictResult(array $options = [])
 * @method RunContactReview runContactReview(array $options = [])
 */
class NlpAutomlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'nlp-automl';

    /** @var string */
    public $version = '2019-11-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'nlpautoml';
}

/**
 * @method string getTopK()
 * @method string getModelId()
 * @method string getDetailTag()
 * @method string getContent()
 * @method string getModelVersion()
 */
class GetPredictResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopK($value)
    {
        $this->data['TopK'] = $value;
        $this->options['form_params']['TopK'] = $value;

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
        $this->options['form_params']['ModelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetailTag($value)
    {
        $this->data['DetailTag'] = $value;
        $this->options['form_params']['DetailTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelVersion($value)
    {
        $this->data['ModelVersion'] = $value;
        $this->options['form_params']['ModelVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getContactScene()
 * @method string getContactPath()
 */
class RunContactReview extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactScene($value)
    {
        $this->data['ContactScene'] = $value;
        $this->options['form_params']['ContactScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContactPath($value)
    {
        $this->data['ContactPath'] = $value;
        $this->options['form_params']['ContactPath'] = $value;

        return $this;
    }
}
