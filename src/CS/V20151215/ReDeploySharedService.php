<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api ReDeploySharedService
 *
 * @method string getSharedServiceId()
 * @method string getClusterId()
 */
class ReDeploySharedService extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/redeploy';

    public $method = 'POST';

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
