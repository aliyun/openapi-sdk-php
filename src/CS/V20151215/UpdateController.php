<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api UpdateController
 *
 * @method string getClusterId()
 */
class UpdateController extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/controller/update/[ClusterId]';

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
