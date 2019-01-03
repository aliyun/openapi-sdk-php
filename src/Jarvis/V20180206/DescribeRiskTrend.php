<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRiskTrend
 *
 * @method string getSourceIp()
 * @method string getQueryProduct()
 * @method string getLang()
 * @method string getPeroid()
 * @method string getSourceCode()
 * @method string getQueryRegionId()
 */
class DescribeRiskTrend extends RpcRequest
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
    public $action = 'DescribeRiskTrend';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withQueryProduct() instead.
     *
     * @param string $queryProduct
     *
     * @return $this
     */
    public function setQueryProduct($queryProduct)
    {
        return $this->withQueryProduct($queryProduct);
    }

    /**
     * @param string $queryProduct
     *
     * @return $this
     */
    public function withQueryProduct($queryProduct)
    {
        $this->data['QueryProduct'] = $queryProduct;
        $this->options['query']['QueryProduct'] = $queryProduct;

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
     * @deprecated deprecated since version 2.0, Use withPeroid() instead.
     *
     * @param string $peroid
     *
     * @return $this
     */
    public function setPeroid($peroid)
    {
        return $this->withPeroid($peroid);
    }

    /**
     * @param string $peroid
     *
     * @return $this
     */
    public function withPeroid($peroid)
    {
        $this->data['Peroid'] = $peroid;
        $this->options['query']['Peroid'] = $peroid;

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

    /**
     * @deprecated deprecated since version 2.0, Use withQueryRegionId() instead.
     *
     * @param string $queryRegionId
     *
     * @return $this
     */
    public function setQueryRegionId($queryRegionId)
    {
        return $this->withQueryRegionId($queryRegionId);
    }

    /**
     * @param string $queryRegionId
     *
     * @return $this
     */
    public function withQueryRegionId($queryRegionId)
    {
        $this->data['QueryRegionId'] = $queryRegionId;
        $this->options['query']['QueryRegionId'] = $queryRegionId;

        return $this;
    }
}
