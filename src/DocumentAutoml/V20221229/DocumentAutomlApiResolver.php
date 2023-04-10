<?php

namespace AlibabaCloud\DocumentAutoml\V20221229;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateModelAsyncPredict createModelAsyncPredict(array $options = [])
 * @method GetModelAsyncPredict getModelAsyncPredict(array $options = [])
 * @method PredictClassifierModel predictClassifierModel(array $options = [])
 * @method PredictModel predictModel(array $options = [])
 * @method PredictTemplateModel predictTemplateModel(array $options = [])
 */
class DocumentAutomlApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'documentAutoml';

    /** @var string */
    public $version = '2022-12-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'documentAutoml';
}

/**
 * @method string getBody()
 * @method string getBinaryToText()
 * @method $this withBinaryToText($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 */
class CreateModelAsyncPredict extends Rpc
{

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
 * @method string getAsyncPredictId()
 * @method $this withAsyncPredictId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class GetModelAsyncPredict extends Rpc
{
}

/**
 * @method string getBody()
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getClassifierId()
 * @method $this withClassifierId($value)
 * @method string getAutoPrediction()
 * @method $this withAutoPrediction($value)
 */
class PredictClassifierModel extends Rpc
{

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
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getBinaryToText()
 * @method $this withBinaryToText($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 */
class PredictModel extends Rpc
{

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
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getBinaryToText()
 * @method $this withBinaryToText($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 */
class PredictTemplateModel extends Rpc
{

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
