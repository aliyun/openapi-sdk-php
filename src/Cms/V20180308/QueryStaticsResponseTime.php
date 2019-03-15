<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryStaticsResponseTime extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
