<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getExBody()
 * @method $this withExBody($value)
 * @method string getExUrl()
 * @method $this withExUrl($value)
 * @method string getExMethod()
 * @method $this withExMethod($value)
 */
class DescribeExplorer extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
