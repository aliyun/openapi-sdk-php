<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getDataSourceId2()
 * @method $this withDataSourceId2($value)
 * @method string getDataSourceId1()
 * @method $this withDataSourceId1($value)
 * @method string getTimeWindow()
 * @method $this withTimeWindow($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getExpression2()
 * @method $this withExpression2($value)
 * @method string getExpression1()
 * @method $this withExpression1($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsRules()
 * @method $this withStatisticsRules($value)
 * @method string getJoinRelation()
 * @method $this withJoinRelation($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getActions()
 * @method $this withActions($value)
 */
class CreateOrUpdateJoinRule extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
