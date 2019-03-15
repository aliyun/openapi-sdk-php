<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateController extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/controller/update/[ClusterId]';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
