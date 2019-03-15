<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getAlertName()
 * @method $this withAlertName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getOnlyCount()
 * @method $this withOnlyCount($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAlarmHistory extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
