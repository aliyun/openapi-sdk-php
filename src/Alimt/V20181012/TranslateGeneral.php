<?php

namespace AlibabaCloud\Alimt\V20181012;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TranslateGeneral
 *
 * @method string getSourceLanguage()
 * @method string getSourceText()
 * @method string getFormatType()
 * @method string getTargetLanguage()
 * @method string getScene()
 */
class TranslateGeneral extends RpcRequest
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
    public $action = 'TranslateGeneral';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alimt';

    /**
     * @deprecated deprecated since version 2.0, Use withSourceLanguage() instead.
     *
     * @param string $sourceLanguage
     *
     * @return $this
     */
    public function setSourceLanguage($sourceLanguage)
    {
        return $this->withSourceLanguage($sourceLanguage);
    }

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
     * @deprecated deprecated since version 2.0, Use withSourceText() instead.
     *
     * @param string $sourceText
     *
     * @return $this
     */
    public function setSourceText($sourceText)
    {
        return $this->withSourceText($sourceText);
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
     * @deprecated deprecated since version 2.0, Use withFormatType() instead.
     *
     * @param string $formatType
     *
     * @return $this
     */
    public function setFormatType($formatType)
    {
        return $this->withFormatType($formatType);
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
     * @deprecated deprecated since version 2.0, Use withTargetLanguage() instead.
     *
     * @param string $targetLanguage
     *
     * @return $this
     */
    public function setTargetLanguage($targetLanguage)
    {
        return $this->withTargetLanguage($targetLanguage);
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
     * @deprecated deprecated since version 2.0, Use withScene() instead.
     *
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        return $this->withScene($scene);
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
