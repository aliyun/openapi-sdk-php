<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BatchUpdateSharedService extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/shared_services/batch_update';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
