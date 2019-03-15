<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getIsSummaryExport()
 * @method $this withIsSummaryExport($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getRiskIds()
 * @method $this withRiskIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ExportWarning extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
