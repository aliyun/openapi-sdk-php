<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetEdgeInstanceMessageRoute
 *
 * @method string getInstanceId()
 * @method string getRouteId()
 */
class GetEdgeInstanceMessageRoute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'GetEdgeInstanceMessageRoute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withRouteId() instead.
     *
     * @param string $routeId
     *
     * @return $this
     */
    public function setRouteId($routeId)
    {
        return $this->withRouteId($routeId);
    }

    /**
     * @param string $routeId
     *
     * @return $this
     */
    public function withRouteId($routeId)
    {
        $this->data['RouteId'] = $routeId;
        $this->options['query']['RouteId'] = $routeId;

        return $this;
    }
}
