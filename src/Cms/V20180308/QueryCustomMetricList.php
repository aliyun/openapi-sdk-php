<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 * @method string getMd5()
 * @method $this withMd5($value)
 */
class QueryCustomMetricList extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
