<?php

namespace AlibabaCloud\Videoenhan\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbstractEcommerceVideo abstractEcommerceVideo(array $options = [])
 * @method AbstractFilmVideo abstractFilmVideo(array $options = [])
 * @method AdjustVideoColor adjustVideoColor(array $options = [])
 * @method EraseVideoLogo eraseVideoLogo(array $options = [])
 * @method EraseVideoSubtitles eraseVideoSubtitles(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method SuperResolveVideo superResolveVideo(array $options = [])
 */
class VideoenhanApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'videoenhan';

    /** @var string */
    public $version = '2020-03-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'videoenhan';
}

/**
 * @method string getDuration()
 * @method string getAsync()
 * @method string getVideoUrl()
 * @method string getWidth()
 * @method string getHeight()
 */
class AbstractEcommerceVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['form_params']['Duration'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWidth($value)
    {
        $this->data['Width'] = $value;
        $this->options['form_params']['Width'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

        return $this;
    }
}

/**
 * @method string getLength()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class AbstractFilmVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLength($value)
    {
        $this->data['Length'] = $value;
        $this->options['form_params']['Length'] = $value;

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
 * @method string getMode()
 * @method string getAsync()
 * @method string getVideoCode()
 * @method string getVideoUrl()
 * @method string getVideoBitrate()
 * @method string getVideoFormat()
 */
class AdjustVideoColor extends Rpc
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
    public function withVideoCode($value)
    {
        $this->data['VideoCode'] = $value;
        $this->options['form_params']['VideoCode'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoBitrate($value)
    {
        $this->data['VideoBitrate'] = $value;
        $this->options['form_params']['VideoBitrate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoFormat($value)
    {
        $this->data['VideoFormat'] = $value;
        $this->options['form_params']['VideoFormat'] = $value;

        return $this;
    }
}

/**
 * @method array getBoxes()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class EraseVideoLogo extends Rpc
{

    /**
     * @param array $boxes
     *
     * @return $this
     */
	public function withBoxes(array $boxes)
	{
	    $this->data['Boxes'] = $boxes;
		foreach ($boxes as $depth1 => $depth1Value) {
			$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.W'] = $depth1Value['W'];
			$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.H'] = $depth1Value['H'];
			$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
		}

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
 * @method string getBH()
 * @method string getAsync()
 * @method string getVideoUrl()
 * @method string getBW()
 * @method string getBX()
 * @method string getBY()
 */
class EraseVideoSubtitles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBH($value)
    {
        $this->data['BH'] = $value;
        $this->options['form_params']['BH'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBW($value)
    {
        $this->data['BW'] = $value;
        $this->options['form_params']['BW'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBX($value)
    {
        $this->data['BX'] = $value;
        $this->options['form_params']['BX'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBY($value)
    {
        $this->data['BY'] = $value;
        $this->options['form_params']['BY'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getJobId()
 */
class GetAsyncJobResult extends Rpc
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
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getBitRate()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class SuperResolveVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitRate($value)
    {
        $this->data['BitRate'] = $value;
        $this->options['form_params']['BitRate'] = $value;

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
