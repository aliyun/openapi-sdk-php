<?php

namespace AlibabaCloud\Imagerecog\V20190930;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyingRubbish classifyingRubbish(array $options = [])
 * @method DetectFruits detectFruits(array $options = [])
 * @method DetectImageElements detectImageElements(array $options = [])
 * @method EvaluateCertificateQuality evaluateCertificateQuality(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method RecognizeFood recognizeFood(array $options = [])
 * @method RecognizeImageColor recognizeImageColor(array $options = [])
 * @method RecognizeImageStyle recognizeImageStyle(array $options = [])
 * @method RecognizeScene recognizeScene(array $options = [])
 * @method RecognizeVehicleType recognizeVehicleType(array $options = [])
 * @method TaggingAdImage taggingAdImage(array $options = [])
 * @method TaggingImage taggingImage(array $options = [])
 */
class ImagerecogApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imagerecog';

    /** @var string */
    public $version = '2019-09-30';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class ClassifyingRubbish extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class DetectFruits extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getUrl()
 */
class DetectImageElements extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getType()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class EvaluateCertificateQuality extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getAsync()
 * @method $this withAsync($value)
 */
class GetAsyncJobResult extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class RecognizeFood extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getColorCount()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getUrl()
 */
class RecognizeImageColor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColorCount($value)
    {
        $this->data['ColorCount'] = $value;
        $this->options['form_params']['ColorCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getUrl()
 */
class RecognizeImageStyle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class RecognizeScene extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 */
class RecognizeVehicleType extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getAsync()
 * @method string getImageURL()
 */
class TaggingAdImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getMode()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getAsync()
 * @method string getImageURL()
 */
class TaggingImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}
