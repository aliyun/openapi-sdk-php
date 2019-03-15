<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getUUID()
 * @method $this withUUID($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class DeleteCustomMetric extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
