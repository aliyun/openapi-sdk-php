<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getAliuid()
 * @method $this withAliuid($value)
 */
class DescribeUserResources extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/ram/resources/[Aliuid]';

    public $serviceCode = 'cs';
}
