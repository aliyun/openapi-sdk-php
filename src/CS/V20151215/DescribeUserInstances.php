<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeUserInstances
 *
 */
class DescribeUserInstances extends RoaRequest
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
    public $action = 'DescribeUserInstances';

    /**
     * @var string
     */
    public $pathPattern = '/instances';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
