<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Rpc;

/**
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getTimeSpan()
 * @method $this withTimeSpan($value)
 */
class GetResolveCountSummary extends Rpc
{
    public $product = 'Httpdns';

    public $version = '2016-02-01';

    public $method = 'POST';
}
