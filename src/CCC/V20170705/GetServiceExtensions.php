<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetServiceExtensions
 *
 * @method string getServiceType()
 * @method string getInstanceId()
 */
class GetServiceExtensions extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetServiceExtensions';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $serviceType
     *
     * @return $this
     */
    public function withServiceType($serviceType)
    {
        $this->data['ServiceType'] = $serviceType;
        $this->options['query']['ServiceType'] = $serviceType;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }
}
