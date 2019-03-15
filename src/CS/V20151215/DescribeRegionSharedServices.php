<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeRegionSharedServices extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/region/[Region]/shared_services';

    public $serviceCode = 'cs';
}
