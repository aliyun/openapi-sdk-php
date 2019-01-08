<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRiskListDetail
 *
 * @method string getRiskType()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getQueryProduct()
 * @method string getCurrentPage()
 * @method string getRiskDescribe()
 * @method string getLang()
 * @method string getSrcUid()
 * @method string getSourceCode()
 * @method string getQueryRegionId()
 * @method string getStatus()
 */
class DescribeRiskListDetail extends RpcRequest
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
    public $action = 'DescribeRiskListDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $riskType
     *
     * @return $this
     */
    public function withRiskType($riskType)
    {
        $this->data['RiskType'] = $riskType;
        $this->options['query']['riskType'] = $riskType;

        return $this;
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
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['pageSize'] = $pageSize;

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
        $this->options['query']['queryProduct'] = $queryProduct;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $riskDescribe
     *
     * @return $this
     */
    public function withRiskDescribe($riskDescribe)
    {
        $this->data['RiskDescribe'] = $riskDescribe;
        $this->options['query']['riskDescribe'] = $riskDescribe;

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
     * @param string $srcUid
     *
     * @return $this
     */
    public function withSrcUid($srcUid)
    {
        $this->data['SrcUid'] = $srcUid;
        $this->options['query']['srcUid'] = $srcUid;

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
        $this->options['query']['sourceCode'] = $sourceCode;

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
        $this->options['query']['queryRegionId'] = $queryRegionId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['status'] = $status;

        return $this;
    }
}
