<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderby()
 * @method $this withOrderby($value)
 * @method string getExpress()
 * @method $this withExpress($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 * @method string getOrderDesc()
 * @method $this withOrderDesc($value)
 */
class QueryMetricTop extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
