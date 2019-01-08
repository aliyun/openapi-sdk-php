<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of DescribeInstance
 *
 * @method string getInstanceId()
 */
class DescribeInstance extends RoaRequest
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
    public $action = 'DescribeInstance';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]';

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
