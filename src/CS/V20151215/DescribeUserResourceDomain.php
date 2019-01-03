<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeUserResourceDomain
 *
 */
class DescribeUserResourceDomain extends RoaRequest
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
    public $action = 'DescribeUserResourceDomain';

    /**
     * @var string
     */
    public $pathPattern = '/resource_domain';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
