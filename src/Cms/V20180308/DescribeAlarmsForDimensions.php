<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getEnableState()
 * @method $this withEnableState($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertState()
 * @method $this withAlertState($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class DescribeAlarmsForDimensions extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
