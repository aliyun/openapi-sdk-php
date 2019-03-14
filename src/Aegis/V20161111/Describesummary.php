<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api Describesummary
 *
 * @method string getTypeNames()
 * @method string getRiskName()
 * @method string getStatusList()
 * @method string getSourceIp()
 * @method string getRiskLevels()
 * @method string getPageSize()
 * @method string getDealed()
 * @method string getStrategyId()
 * @method string getCurrentPage()
 * @method string getSubTypeNames()
 * @method string getUuids()
 */
class Describesummary extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $typeNames
     *
     * @return $this
     */
    public function withTypeNames($typeNames)
    {
        $this->data['TypeNames'] = $typeNames;
        $this->options['query']['TypeNames'] = $typeNames;

        return $this;
    }

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
     * @param string $statusList
     *
     * @return $this
     */
    public function withStatusList($statusList)
    {
        $this->data['StatusList'] = $statusList;
        $this->options['query']['StatusList'] = $statusList;

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
     * @param string $riskLevels
     *
     * @return $this
     */
    public function withRiskLevels($riskLevels)
    {
        $this->data['RiskLevels'] = $riskLevels;
        $this->options['query']['RiskLevels'] = $riskLevels;

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
     * @param string $dealed
     *
     * @return $this
     */
    public function withDealed($dealed)
    {
        $this->data['Dealed'] = $dealed;
        $this->options['query']['Dealed'] = $dealed;

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
     * @param string $subTypeNames
     *
     * @return $this
     */
    public function withSubTypeNames($subTypeNames)
    {
        $this->data['SubTypeNames'] = $subTypeNames;
        $this->options['query']['SubTypeNames'] = $subTypeNames;

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
