<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TranslateECommerce
 *
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getTargetLanguage()
 * @method string getScene()
 */
class TranslateECommerce extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'alimt';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $action = 'TranslateECommerce';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alimt';

    /**
     * @param string $sourceLanguage
     *
     * @return $this
     */
    public function withSourceLanguage($sourceLanguage)
    {
        $this->data['SourceLanguage'] = $sourceLanguage;
        $this->options['query']['SourceLanguage'] = $sourceLanguage;

        return $this;
    }

    /**
     * @param string $sourceText
     *
     * @return $this
     */
    public function withSourceText($sourceText)
    {
        $this->data['SourceText'] = $sourceText;
        $this->options['query']['SourceText'] = $sourceText;

        return $this;
    }

    /**
     * @param string $formatType
     *
     * @return $this
     */
    public function withFormatType($formatType)
    {
        $this->data['FormatType'] = $formatType;
        $this->options['query']['FormatType'] = $formatType;

        return $this;
    }

    /**
     * @param string $targetLanguage
     *
     * @return $this
     */
    public function withTargetLanguage($targetLanguage)
    {
        $this->data['TargetLanguage'] = $targetLanguage;
        $this->options['query']['TargetLanguage'] = $targetLanguage;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function withScene($scene)
    {
        $this->data['Scene'] = $scene;
        $this->options['query']['Scene'] = $scene;

        return $this;
    }
}
