<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateAutoScale extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/cluster/[ClusterId]/autoscale/';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
