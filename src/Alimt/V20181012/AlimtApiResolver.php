<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method TranslateGeneral translateGeneral(array $options = [])
 * @method TranslateECommerce translateECommerce(array $options = [])
 */
class AlimtApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'alimt';

    /** @var string */
    public $version = '2018-10-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alimt';
}

/**
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getTargetLanguage()
 * @method string getScene()
 */
class TranslateGeneral extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatType($value)
    {
        $this->data['FormatType'] = $value;
        $this->options['form_params']['FormatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getTargetLanguage()
 * @method string getScene()
 */
class TranslateECommerce extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceLanguage($value)
    {
        $this->data['SourceLanguage'] = $value;
        $this->options['form_params']['SourceLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceText($value)
    {
        $this->data['SourceText'] = $value;
        $this->options['form_params']['SourceText'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatType($value)
    {
        $this->data['FormatType'] = $value;
        $this->options['form_params']['FormatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetLanguage($value)
    {
        $this->data['TargetLanguage'] = $value;
        $this->options['form_params']['TargetLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }
}
