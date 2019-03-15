<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeOpenApiUsage extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
