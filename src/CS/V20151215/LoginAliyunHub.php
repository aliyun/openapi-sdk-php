<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class LoginAliyunHub extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/admin/clusters/[ClusterId]/hub_login';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
