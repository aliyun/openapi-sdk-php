<?php

namespace AlibabaCloud\Threedvision\V20210131;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method EstimateMonocularImageDepth estimateMonocularImageDepth(array $options = [])
 * @method EstimateMonocularVideoDepth estimateMonocularVideoDepth(array $options = [])
 * @method EstimateStereoImageDepth estimateStereoImageDepth(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method ReconstructBodyBySingleImage reconstructBodyBySingleImage(array $options = [])
 * @method ReconstructThreeDMultiView reconstructThreeDMultiView(array $options = [])
 */
class ThreedvisionApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'threedvision';

    /** @var string */
    public $version = '2021-01-31';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'threedvision';
}

/**
 * @method string getImageURL()
 */
class EstimateMonocularImageDepth extends Rpc
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
 * @method string getSampleRate()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class EstimateMonocularVideoDepth extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSampleRate($value)
    {
        $this->data['SampleRate'] = $value;
        $this->options['form_params']['SampleRate'] = $value;

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
    public function withVideoURL($value)
    {
        $this->data['VideoURL'] = $value;
        $this->options['form_params']['VideoURL'] = $value;

        return $this;
    }
}

/**
 * @method string getRightImageURL()
 * @method string getLeftImageURL()
 */
class EstimateStereoImageDepth extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRightImageURL($value)
    {
        $this->data['RightImageURL'] = $value;
        $this->options['form_params']['RightImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLeftImageURL($value)
    {
        $this->data['LeftImageURL'] = $value;
        $this->options['form_params']['LeftImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getAsync()
 */
class GetAsyncJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

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
}

/**
 * @method string getImageURL()
 */
class ReconstructBodyBySingleImage extends Rpc
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
 * @method string getMode()
 * @method string getZipFileUrl()
 * @method string getAsync()
 */
class ReconstructThreeDMultiView extends Rpc
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
    public function withZipFileUrl($value)
    {
        $this->data['ZipFileUrl'] = $value;
        $this->options['form_params']['ZipFileUrl'] = $value;

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
}
