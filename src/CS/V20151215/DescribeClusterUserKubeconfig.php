<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DescribeClusterUserKubeconfig
 *
 * @method string getClusterId()
 */
class DescribeClusterUserKubeconfig extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/k8s/[ClusterId]/user_config';

    public $serviceCode = 'cs';

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->pathParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
