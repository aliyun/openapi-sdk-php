<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getSlbID()
 * @method $this withSlbID($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BindSLB extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/slb/[SlbID]/bind';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
