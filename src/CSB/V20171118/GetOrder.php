<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetOrder
 *
 * @method string getOrderId()
 * @method string getServiceName()
 */
class GetOrder extends RpcRequest
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
    public $action = 'GetOrder';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @deprecated deprecated since version 2.0, Use withOrderId() instead.
     *
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        return $this->withOrderId($orderId);
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function withOrderId($orderId)
    {
        $this->data['OrderId'] = $orderId;
        $this->options['query']['OrderId'] = $orderId;

        return $this;
    }

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
}
