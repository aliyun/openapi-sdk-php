<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ExecuteRequest
 *
 * @method string getServiceParameters()
 * @method string getService()
 */
class ExecuteRequest extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'saf';

    /**
     * @var string
     */
    public $version = '2018-09-19';

    /**
     * @var string
     */
    public $action = 'ExecuteRequest';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'saf';

    /**
     * @deprecated deprecated since version 2.0, Use withServiceParameters() instead.
     *
     * @param string $serviceParameters
     *
     * @return $this
     */
    public function setServiceParameters($serviceParameters)
    {
        return $this->withServiceParameters($serviceParameters);
    }

    /**
     * @param string $serviceParameters
     *
     * @return $this
     */
    public function withServiceParameters($serviceParameters)
    {
        $this->data['ServiceParameters'] = $serviceParameters;
        $this->options['query']['ServiceParameters'] = $serviceParameters;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withService() instead.
     *
     * @param string $service
     *
     * @return $this
     */
    public function setService($service)
    {
        return $this->withService($service);
    }

    /**
     * @param string $service
     *
     * @return $this
     */
    public function withService($service)
    {
        $this->data['Service'] = $service;
        $this->options['query']['Service'] = $service;

        return $this;
    }
}
