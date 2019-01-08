<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of ModifyMix
 *
 * @method string getInstanceId()
 * @method string getName()
 */
class ModifyMix extends RoaRequest
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
    public $action = 'ModifyMix';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/mixes/[Name]';

    /**
     * @var string
     */
    public $method = 'PUT';

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

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->pathParameters['Name'] = $name;

        return $this;
    }
}
