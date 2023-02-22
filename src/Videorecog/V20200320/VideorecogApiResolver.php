<?php

namespace AlibabaCloud\Videorecog\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectVideoShot detectVideoShot(array $options = [])
 * @method GenerateVideoCover generateVideoCover(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method RecognizeVideoCastCrewList recognizeVideoCastCrewList(array $options = [])
 * @method SplitVideoParts splitVideoParts(array $options = [])
 * @method UnderstandVideoContent understandVideoContent(array $options = [])
 */
class VideorecogApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'videorecog';

    /** @var string */
    public $version = '2020-03-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'videorecog';
}

/**
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class DetectVideoShot extends Rpc
{

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getIsGif()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class GenerateVideoCover extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsGif($value)
    {
        $this->data['IsGif'] = $value;
        $this->options['form_params']['IsGif'] = $value;

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

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
 * @method string getParams()
 * @method string getAsync()
 * @method string getRegisterUrl()
 * @method string getVideoUrl()
 */
class RecognizeVideoCastCrewList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

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
    public function withRegisterUrl($value)
    {
        $this->data['RegisterUrl'] = $value;
        $this->options['form_params']['RegisterUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getTemplate()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class SplitVideoParts extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplate($value)
    {
        $this->data['Template'] = $value;
        $this->options['form_params']['Template'] = $value;

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getVideoURL()
 */
class UnderstandVideoContent extends Rpc
{

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
