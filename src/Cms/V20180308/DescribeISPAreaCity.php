<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIsp()
 * @method $this withIsp($value)
 */
class DescribeISPAreaCity extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
