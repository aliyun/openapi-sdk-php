<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsRules()
 * @method $this withStatisticsRules($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpressions()
 * @method $this withExpressions($value)
 * @method string getActions()
 * @method $this withActions($value)
 * @method string getRuleGroupIds()
 * @method $this withRuleGroupIds($value)
 */
class CreateOrUpdateRule extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
