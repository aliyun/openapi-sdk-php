<?php

namespace AlibabaCloud\Ivpd\V20190625;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ChangeImageSize changeImageSize(array $options = [])
 * @method DetectImageElements detectImageElements(array $options = [])
 * @method ExtendImageStyle extendImageStyle(array $options = [])
 * @method MakeSuperResolutionImage makeSuperResolutionImage(array $options = [])
 * @method RecognizeImageColor recognizeImageColor(array $options = [])
 * @method RecognizeImageStyle recognizeImageStyle(array $options = [])
 * @method RecolorImage recolorImage(array $options = [])
 * @method SegmentImage segmentImage(array $options = [])
 */
class IvpdApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ivpd';

    /** @var string */
    public $version = '2019-06-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ivpd';
}

/**
 * @method string getUrl()
 * @method string getWidth()
 * @method string getHeight()
 */
class ChangeImageSize extends Rpc
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
 * @method string getMajorUrl()
 * @method string getStyleUrl()
 */
class ExtendImageStyle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMajorUrl($value)
    {
        $this->data['MajorUrl'] = $value;
        $this->options['form_params']['MajorUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStyleUrl($value)
    {
        $this->data['StyleUrl'] = $value;
        $this->options['form_params']['StyleUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getUrl()
 */
class MakeSuperResolutionImage extends Rpc
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
 * @method string getUrl()
 * @method string getColorCount()
 */
class RecognizeImageColor extends Rpc
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
}

/**
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
 * @method array getColorTemplate()
 * @method string getUrl()
 * @method string getMode()
 * @method string getColorCount()
 * @method string getRefUrl()
 */
class RecolorImage extends Rpc
{

    /**
     * @param array $colorTemplate
     *
     * @return $this
     */
	public function withColorTemplate(array $colorTemplate)
	{
	    $this->data['ColorTemplate'] = $colorTemplate;
		foreach ($colorTemplate as $depth1 => $depth1Value) {
			$this->options['form_params']['ColorTemplate.' . ($depth1 + 1) . '.Color'] = $depth1Value['Color'];
		}

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
    public function withRefUrl($value)
    {
        $this->data['RefUrl'] = $value;
        $this->options['form_params']['RefUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getUrl()
 */
class SegmentImage extends Rpc
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
