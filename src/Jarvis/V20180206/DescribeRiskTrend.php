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
