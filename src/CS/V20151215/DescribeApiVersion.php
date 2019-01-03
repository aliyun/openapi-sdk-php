<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeApiVersion
 *
 */
class DescribeApiVersion extends RoaRequest
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
    public $action = 'DescribeApiVersion';

    /**
     * @var string
     */
    public $pathPattern = '/version';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
