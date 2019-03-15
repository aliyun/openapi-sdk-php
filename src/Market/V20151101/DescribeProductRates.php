<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class DescribeProductRates extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';
}
