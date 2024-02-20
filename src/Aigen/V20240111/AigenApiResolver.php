<?php

namespace AlibabaCloud\Aigen\V20240111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GenerateCosplayImage generateCosplayImage(array $options = [])
 * @method GenerateTextDeformation generateTextDeformation(array $options = [])
 * @method GenerateTextTexture generateTextTexture(array $options = [])
 * @method InteractiveFullSegmentation interactiveFullSegmentation(array $options = [])
 * @method InteractiveScribbleSegmentation interactiveScribbleSegmentation(array $options = [])
 */
class AigenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'aigen';

    /** @var string */
    public $version = '2024-01-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getTemplateImageUrl()
 * @method string getFaceImageUrl()
 * @method string getAsync()
 * @method string getStyle()
 */
class GenerateCosplayImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateImageUrl($value)
    {
        $this->data['TemplateImageUrl'] = $value;
        $this->options['form_params']['TemplateImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageUrl($value)
    {
        $this->data['FaceImageUrl'] = $value;
        $this->options['form_params']['FaceImageUrl'] = $value;

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
    public function withStyle($value)
    {
        $this->data['Style'] = $value;
        $this->options['form_params']['Style'] = $value;

        return $this;
    }
}

/**
 * @method string getTextContent()
 * @method string getFontName()
 * @method string getTtfUrl()
 * @method string getN()
 * @method string getAsync()
 * @method string getPrompt()
 * @method string getOutputImageRatio()
 */
class GenerateTextDeformation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTextContent($value)
    {
        $this->data['TextContent'] = $value;
        $this->options['form_params']['TextContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFontName($value)
    {
        $this->data['FontName'] = $value;
        $this->options['form_params']['FontName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtfUrl($value)
    {
        $this->data['TtfUrl'] = $value;
        $this->options['form_params']['TtfUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withN($value)
    {
        $this->data['N'] = $value;
        $this->options['form_params']['N'] = $value;

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
    public function withPrompt($value)
    {
        $this->data['Prompt'] = $value;
        $this->options['form_params']['Prompt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputImageRatio($value)
    {
        $this->data['OutputImageRatio'] = $value;
        $this->options['form_params']['OutputImageRatio'] = $value;

        return $this;
    }
}

/**
 * @method string getTextContent()
 * @method string getTextureStyle()
 * @method $this withTextureStyle($value)
 * @method string getFontName()
 * @method string getTtfUrl()
 * @method string getN()
 * @method string getAsync()
 * @method string getAlphaChannel()
 * @method string getImageUrl()
 * @method string getImageShortSize()
 * @method string getPrompt()
 * @method string getOutputImageRatio()
 */
class GenerateTextTexture extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTextContent($value)
    {
        $this->data['TextContent'] = $value;
        $this->options['form_params']['TextContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFontName($value)
    {
        $this->data['FontName'] = $value;
        $this->options['form_params']['FontName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTtfUrl($value)
    {
        $this->data['TtfUrl'] = $value;
        $this->options['form_params']['TtfUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withN($value)
    {
        $this->data['N'] = $value;
        $this->options['form_params']['N'] = $value;

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
    public function withAlphaChannel($value)
    {
        $this->data['AlphaChannel'] = $value;
        $this->options['form_params']['AlphaChannel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageShortSize($value)
    {
        $this->data['ImageShortSize'] = $value;
        $this->options['form_params']['ImageShortSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrompt($value)
    {
        $this->data['Prompt'] = $value;
        $this->options['form_params']['Prompt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputImageRatio($value)
    {
        $this->data['OutputImageRatio'] = $value;
        $this->options['form_params']['OutputImageRatio'] = $value;

        return $this;
    }
}

/**
 * @method string getReturnFormat()
 * @method string getAsync()
 * @method string getImageUrl()
 */
class InteractiveFullSegmentation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnFormat($value)
    {
        $this->data['ReturnFormat'] = $value;
        $this->options['form_params']['ReturnFormat'] = $value;

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
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getPosScribbleImageUrl()
 * @method string getIntegratedMaskUrl()
 * @method string getMaskImageUrl()
 * @method string getReturnForm()
 * @method string getNegScribbleImageUrl()
 * @method string getReturnFormat()
 * @method string getEdgeFeathering()
 * @method string getImageUrl()
 * @method string getPostprocessOption()
 */
class InteractiveScribbleSegmentation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPosScribbleImageUrl($value)
    {
        $this->data['PosScribbleImageUrl'] = $value;
        $this->options['form_params']['PosScribbleImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntegratedMaskUrl($value)
    {
        $this->data['IntegratedMaskUrl'] = $value;
        $this->options['form_params']['IntegratedMaskUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaskImageUrl($value)
    {
        $this->data['MaskImageUrl'] = $value;
        $this->options['form_params']['MaskImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnForm($value)
    {
        $this->data['ReturnForm'] = $value;
        $this->options['form_params']['ReturnForm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNegScribbleImageUrl($value)
    {
        $this->data['NegScribbleImageUrl'] = $value;
        $this->options['form_params']['NegScribbleImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReturnFormat($value)
    {
        $this->data['ReturnFormat'] = $value;
        $this->options['form_params']['ReturnFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdgeFeathering($value)
    {
        $this->data['EdgeFeathering'] = $value;
        $this->options['form_params']['EdgeFeathering'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostprocessOption($value)
    {
        $this->data['PostprocessOption'] = $value;
        $this->options['form_params']['PostprocessOption'] = $value;

        return $this;
    }
}
