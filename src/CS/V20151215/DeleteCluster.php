<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DeleteCluster
 *
 * @method string getClusterId()
 */
class DeleteCluster extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $action = 'DeleteCluster';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]';

    /**
     * @var string
     */
    public $method = 'DELETE';

    /**
     * @var string
     */
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
