<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeVxlanPortsRules
 *
 */
class DescribeVxlanPortsRules extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'DescribeVxlanPortsRules';

    /**
     * @var string
     */
    public $pathPattern = '/config/vxlan_ports';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
