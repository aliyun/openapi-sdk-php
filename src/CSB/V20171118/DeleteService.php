<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteService
 *
 * @method string getServiceName()
 * @method string getServiceId()
 */
class DeleteService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'DeleteService';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withServiceName() instead.
     *
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        return $this->withServiceName($serviceName);
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function withServiceName($serviceName)
    {
        $this->data['ServiceName'] = $serviceName;
        $this->options['query']['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServiceId() instead.
     *
     * @param string $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        return $this->withServiceId($serviceId);
    }

    /**
     * @param string $serviceId
     *
     * @return $this
     */
    public function withServiceId($serviceId)
    {
        $this->data['ServiceId'] = $serviceId;
        $this->options['query']['ServiceId'] = $serviceId;

        return $this;
    }
}
