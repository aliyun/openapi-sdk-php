<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterUserKubeconfig extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/k8s/[ClusterId]/user_config';

    public $serviceCode = 'cs';
}
