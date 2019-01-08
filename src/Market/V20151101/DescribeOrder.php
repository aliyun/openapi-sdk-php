<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeOrder
 *
 * @method string getOrderId()
 */
class DescribeOrder extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'DescribeOrder';

    /**
     * @var string
     */
    public $method = 'POST';

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
}
