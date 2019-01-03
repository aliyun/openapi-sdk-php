<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyAccessWhiteListAutoShare
 *
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getAutoConfig()
 * @method string getProductName()
 * @method string getWhiteListType()
 * @method string getLang()
 * @method string getSourceCode()
 */
class ModifyAccessWhiteListAutoShare extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'jarvis';

    /**
     * @var string
     */
    public $version = '2018-02-06';

    /**
     * @var string
     */
    public $action = 'ModifyAccessWhiteListAutoShare';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSrcIP() instead.
     *
     * @param string $srcIP
     *
     * @return $this
     */
    public function setSrcIP($srcIP)
    {
        return $this->withSrcIP($srcIP);
    }

    /**
     * @param string $srcIP
     *
     * @return $this
     */
    public function withSrcIP($srcIP)
    {
        $this->data['SrcIP'] = $srcIP;
        $this->options['query']['SrcIP'] = $srcIP;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAutoConfig() instead.
     *
     * @param string $autoConfig
     *
     * @return $this
     */
    public function setAutoConfig($autoConfig)
    {
        return $this->withAutoConfig($autoConfig);
    }

    /**
     * @param string $autoConfig
     *
     * @return $this
     */
    public function withAutoConfig($autoConfig)
    {
        $this->data['AutoConfig'] = $autoConfig;
        $this->options['query']['AutoConfig'] = $autoConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductName() instead.
     *
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        return $this->withProductName($productName);
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function withProductName($productName)
    {
        $this->data['ProductName'] = $productName;
        $this->options['query']['ProductName'] = $productName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWhiteListType() instead.
     *
     * @param string $whiteListType
     *
     * @return $this
     */
    public function setWhiteListType($whiteListType)
    {
        return $this->withWhiteListType($whiteListType);
    }

    /**
     * @param string $whiteListType
     *
     * @return $this
     */
    public function withWhiteListType($whiteListType)
    {
        $this->data['WhiteListType'] = $whiteListType;
        $this->options['query']['WhiteListType'] = $whiteListType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceCode() instead.
     *
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        return $this->withSourceCode($sourceCode);
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['SourceCode'] = $sourceCode;

        return $this;
    }
}
