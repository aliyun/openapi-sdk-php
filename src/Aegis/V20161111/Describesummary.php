<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class Describesummary extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
