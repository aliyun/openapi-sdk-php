<?php

namespace AlibabaCloud\Commondriver\V20151229;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetOrderIdByQueryPurchase getOrderIdByQueryPurchase(array $options = [])
 * @method GetOrderIdByCheckBeforePay getOrderIdByCheckBeforePay(array $options = [])
 */
class CommondriverApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Commondriver';

    /** @var string */
    public $version = '2015-12-29';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOrderId()
 */
class GetOrderIdByQueryPurchase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['query']['orderId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 */
class GetOrderIdByCheckBeforePay extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['query']['orderId'] = $value;

        return $this;
    }
}
