<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of Describesummary
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
class Describesummary extends RpcRequest
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
    public $action = 'Describesummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withTypeNames() instead.
     *
     * @param string $typeNames
     *
     * @return $this
     */
    public function setTypeNames($typeNames)
    {
        return $this->withTypeNames($typeNames);
    }

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
     * @deprecated deprecated since version 2.0, Use withRiskName() instead.
     *
     * @param string $riskName
     *
     * @return $this
     */
    public function setRiskName($riskName)
    {
        return $this->withRiskName($riskName);
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
     * @deprecated deprecated since version 2.0, Use withStatusList() instead.
     *
     * @param string $statusList
     *
     * @return $this
     */
    public function setStatusList($statusList)
    {
        return $this->withStatusList($statusList);
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
     * @deprecated deprecated since version 2.0, Use withRiskLevels() instead.
     *
     * @param string $riskLevels
     *
     * @return $this
     */
    public function setRiskLevels($riskLevels)
    {
        return $this->withRiskLevels($riskLevels);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
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
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDealed() instead.
     *
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        return $this->withDealed($dealed);
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
     * @deprecated deprecated since version 2.0, Use withStrategyId() instead.
     *
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        return $this->withStrategyId($strategyId);
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
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
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
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubTypeNames() instead.
     *
     * @param string $subTypeNames
     *
     * @return $this
     */
    public function setSubTypeNames($subTypeNames)
    {
        return $this->withSubTypeNames($subTypeNames);
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
     * @deprecated deprecated since version 2.0, Use withUuids() instead.
     *
     * @param string $uuids
     *
     * @return $this
     */
    public function setUuids($uuids)
    {
        return $this->withUuids($uuids);
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
