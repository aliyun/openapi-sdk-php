<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ReDeploySharedService
 *
 * @method string getSharedServiceId()
 * @method string getClusterId()
 */
class ReDeploySharedService extends RoaRequest
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
    public $action = 'ReDeploySharedService';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/redeploy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @param string $sharedServiceId
     *
     * @return $this
     */
    public function withSharedServiceId($sharedServiceId)
    {
        $this->data['SharedServiceId'] = $sharedServiceId;
        $this->pathParameters['SharedServiceId'] = $sharedServiceId;

        return $this;
    }

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
