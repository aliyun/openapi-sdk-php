<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api DeleteTrigger
 *
 * @method string getClusterId()
 * @method string getApplicationId()
 */
class DeleteTrigger extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/trigger/[ApplicationId]';

    public $method = 'DELETE';

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
