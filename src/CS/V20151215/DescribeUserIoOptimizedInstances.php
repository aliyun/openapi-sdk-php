<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeUserIoOptimizedInstances
 *
 */
class DescribeUserIoOptimizedInstances extends RoaRequest
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
    public $action = 'DescribeUserIoOptimizedInstances';

    /**
     * @var string
     */
    public $pathPattern = '/instances/io_optimized';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
