<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DeploySharedService
 *
 * @method string getSharedServiceId()
 * @method string getClusterId()
 */
class DeploySharedService extends RoaRequest
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
    public $action = 'DeploySharedService';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/deploy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

    /**
     * @deprecated deprecated since version 2.0, Use withSharedServiceId() instead.
     *
     * @param string $sharedServiceId
     *
     * @return $this
     */
    public function setSharedServiceId($sharedServiceId)
    {
        return $this->withSharedServiceId($sharedServiceId);
    }

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
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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
