<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeRamUsers
 *
 */
class DescribeRamUsers extends RoaRequest
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
    public $action = 'DescribeRamUsers';

    /**
     * @var string
     */
    public $pathPattern = '/ram/users';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}
