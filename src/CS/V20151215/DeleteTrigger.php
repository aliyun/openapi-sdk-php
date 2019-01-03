<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DeleteTrigger
 *
 * @method string getClusterId()
 * @method string getApplicationId()
 */
class DeleteTrigger extends RoaRequest
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
    public $action = 'DeleteTrigger';

    /**
     * @var string
     */
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ApplicationId]';

    /**
     * @var string
     */
    public $method = 'DELETE';

    /**
     * @var string
     */
    public $serviceCode = 'cs';

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

    /**
     * @deprecated deprecated since version 2.0, Use withApplicationId() instead.
     *
     * @param string $applicationId
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        return $this->withApplicationId($applicationId);
    }

    /**
     * @param string $applicationId
     *
     * @return $this
     */
    public function withApplicationId($applicationId)
    {
        $this->data['ApplicationId'] = $applicationId;
        $this->pathParameters['ApplicationId'] = $applicationId;

        return $this;
    }
}
