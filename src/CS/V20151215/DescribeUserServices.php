<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeUserServices
 *
 */
class DescribeUserServices extends RoaRequest
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
    public $action = 'DescribeUserServices';

    /**
     * @var string
     */
    public $pathPattern = '/region/[RegionId]/services';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
