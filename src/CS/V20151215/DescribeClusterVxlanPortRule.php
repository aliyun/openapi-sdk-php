<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterVxlanPortRule extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/vxlan_ports';

    public $serviceCode = 'cs';
}
