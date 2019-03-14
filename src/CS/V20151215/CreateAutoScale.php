<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api CreateAutoScale
 *
 * @method string getClusterId()
 */
class CreateAutoScale extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/cluster/[ClusterId]/autoscale/';

    public $method = 'POST';

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
