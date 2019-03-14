<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api GetServiceExtensions
 *
 * @method string getServiceType()
 * @method string getInstanceId()
 */
class GetServiceExtensions extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
