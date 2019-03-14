<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ExportWarning
 *
 * @method string getStatusList()
 * @method string getRiskLevels()
 * @method string getExportType()
 * @method string getDealed()
 * @method string getTypeNames()
 * @method string getIsSummaryExport()
 * @method string getRiskName()
 * @method string getRiskIds()
 * @method string getSourceIp()
 * @method string getStrategyId()
 * @method string getLang()
 * @method string getTypeName()
 * @method string getSubTypeNames()
 * @method string getUuids()
 */
class ExportWarning extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
     * @param string $exportType
     *
     * @return $this
     */
    public function withExportType($exportType)
    {
        $this->data['ExportType'] = $exportType;
        $this->options['query']['ExportType'] = $exportType;

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
     * @param string $isSummaryExport
     *
     * @return $this
     */
    public function withIsSummaryExport($isSummaryExport)
    {
        $this->data['IsSummaryExport'] = $isSummaryExport;
        $this->options['query']['IsSummaryExport'] = $isSummaryExport;

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
     * @param string $riskIds
     *
     * @return $this
     */
    public function withRiskIds($riskIds)
    {
        $this->data['RiskIds'] = $riskIds;
        $this->options['query']['RiskIds'] = $riskIds;

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
