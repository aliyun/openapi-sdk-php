<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RevokeClusterCerts extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/certs';

    public $method = 'DELETE';

    public $serviceCode = 'cs';
}
