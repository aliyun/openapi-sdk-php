<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCheckWarningSummary
 *
 * @method string getRiskName()
 * @method string getSourceIp()
 * @method string getRiskStatus()
 * @method string getPageSize()
 * @method string getStrategyId()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getTypeName()
 * @method string getStatus()
 * @method string getUuids()
 */
class DescribeCheckWarningSummary extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeCheckWarningSummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $riskName
     *
     * @return $this
     */
    public function withRiskName($riskName)
    {
        $this->data['RiskName'] = $riskName;
        $this->options['query']['RiskName'] = $riskName;

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
     * @param string $riskStatus
     *
     * @return $this
     */
    public function withRiskStatus($riskStatus)
    {
        $this->data['RiskStatus'] = $riskStatus;
        $this->options['query']['RiskStatus'] = $riskStatus;

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
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function withStrategyId($strategyId)
    {
        $this->data['StrategyId'] = $strategyId;
        $this->options['query']['StrategyId'] = $strategyId;

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
        $this->options['query']['CurrentPage'] = $currentPage;

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
     * @param string $typeName
     *
     * @return $this
     */
    public function withTypeName($typeName)
    {
        $this->data['TypeName'] = $typeName;
        $this->options['query']['TypeName'] = $typeName;

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
        $this->options['query']['Status'] = $status;

        return $this;
    }

    /**
     * @param string $uuids
     *
     * @return $this
     */
    public function withUuids($uuids)
    {
        $this->data['Uuids'] = $uuids;
        $this->options['query']['Uuids'] = $uuids;

        return $this;
    }
}
