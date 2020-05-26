<?php

namespace AlibabaCloud\NlpAutoml\V20191111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateAsyncPredict createAsyncPredict(array $options = [])
 * @method GetAsyncPredict getAsyncPredict(array $options = [])
 * @method GetPredictResult getPredictResult(array $options = [])
 * @method RunContactReview runContactReview(array $options = [])
 * @method RunPreTrainService runPreTrainService(array $options = [])
 * @method RunSmartCallService runSmartCallService(array $options = [])
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
 * @method string getFileType()
 * @method string getDetailTag()
 * @method string getContent()
 * @method string getFileContent()
 * @method string getModelId()
 * @method string getFileUrl()
 * @method string getModelVersion()
 */
class CreateAsyncPredict extends Rpc
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
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

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
    public function withFileContent($value)
    {
        $this->data['FileContent'] = $value;
        $this->options['form_params']['FileContent'] = $value;

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
    public function withFileUrl($value)
    {
        $this->data['FileUrl'] = $value;
        $this->options['form_params']['FileUrl'] = $value;

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
 * @method string getAsyncPredictId()
 * @method $this withAsyncPredictId($value)
 */
class GetAsyncPredict extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

/**
 * @method string getPredictContent()
 * @method string getServiceVersion()
 * @method string getServiceName()
 */
class RunPreTrainService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPredictContent($value)
    {
        $this->data['PredictContent'] = $value;
        $this->options['form_params']['PredictContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['form_params']['ServiceVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }
}

/**
 * @method string getSessionId()
 * @method string getRobotId()
 * @method string getParamContent()
 * @method string getServiceName()
 */
class RunSmartCallService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRobotId($value)
    {
        $this->data['RobotId'] = $value;
        $this->options['form_params']['RobotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamContent($value)
    {
        $this->data['ParamContent'] = $value;
        $this->options['form_params']['ParamContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['form_params']['ServiceName'] = $value;

        return $this;
    }
}
