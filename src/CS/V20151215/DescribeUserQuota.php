<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeUserQuota
 *
 */
class DescribeUserQuota extends RoaRequest
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
    public $action = 'DescribeUserQuota';

    /**
     * @var string
     */
    public $pathPattern = '/quota';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
