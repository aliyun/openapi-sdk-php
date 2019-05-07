<?php

namespace AlibabaCloud\Commondriver\V20151229;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method GetOrderIdByCheckBeforePay getOrderIdByCheckBeforePay(array $options = [])
 * @method GetOrderIdByQueryPurchase getOrderIdByQueryPurchase(array $options = [])
 */
class CommondriverApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
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
