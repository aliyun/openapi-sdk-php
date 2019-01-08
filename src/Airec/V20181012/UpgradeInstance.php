<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of UpgradeInstance
 *
 * @method string getInstanceId()
 */
class UpgradeInstance extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Airec';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $action = 'UpgradeInstance';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/upgrade';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'airec';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
