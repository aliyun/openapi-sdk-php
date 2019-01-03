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
     * @deprecated deprecated since version 2.0, Use withRiskType() instead.
     *
     * @param string $riskType
     *
     * @return $this
     */
    public function setriskType($riskType)
    {
        return $this->withRiskType($riskType);
    }

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withQueryProduct() instead.
     *
     * @param string $queryProduct
     *
     * @return $this
     */
    public function setqueryProduct($queryProduct)
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
        $this->options['query']['queryProduct'] = $queryProduct;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setcurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
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
     * @deprecated deprecated since version 2.0, Use withRiskDescribe() instead.
     *
     * @param string $riskDescribe
     *
     * @return $this
     */
    public function setriskDescribe($riskDescribe)
    {
        return $this->withRiskDescribe($riskDescribe);
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
     * @deprecated deprecated since version 2.0, Use withSrcUid() instead.
     *
     * @param string $srcUid
     *
     * @return $this
     */
    public function setsrcUid($srcUid)
    {
        return $this->withSrcUid($srcUid);
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
     * @deprecated deprecated since version 2.0, Use withSourceCode() instead.
     *
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setsourceCode($sourceCode)
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
        $this->options['query']['sourceCode'] = $sourceCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withQueryRegionId() instead.
     *
     * @param string $queryRegionId
     *
     * @return $this
     */
    public function setqueryRegionId($queryRegionId)
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
        $this->options['query']['queryRegionId'] = $queryRegionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setstatus($status)
    {
        return $this->withStatus($status);
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
