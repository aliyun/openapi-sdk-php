<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DescribeUserServices
 *
 */
class DescribeUserServices extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/region/[RegionId]/services';

    public $serviceCode = 'cs';
}
