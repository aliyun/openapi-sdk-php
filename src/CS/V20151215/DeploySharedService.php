<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeploySharedService extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/deploy';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
