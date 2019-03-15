<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 */
class QueryMetricMeta extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
