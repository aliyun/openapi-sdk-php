<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getInstanceId()
 * @method string getRouteId()
 */
class DeleteEdgeInstanceMessageRoute extends RpcRequest
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
    public $action = 'DeleteEdgeInstanceMessageRoute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId']             = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $routeId
     *
     * @return $this
     */
    public function withRouteId($routeId)
    {
        $this->data['RouteId']             = $routeId;
        $this->options['query']['RouteId'] = $routeId;

        return $this;
    }
}
