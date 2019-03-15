<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateSharedServices extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/shared_services/[ProjectName]/upgrade';

    public $method = 'POST';

    public $serviceCode = 'cs';
}
