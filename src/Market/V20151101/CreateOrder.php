<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrder
 *
 * @method string getOrderSouce()
 * @method string getCommodity()
 * @method string getClientToken()
 * @method string getOwnerId()
 * @method string getPaymentType()
 * @method string getOrderType()
 */
class CreateOrder extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

    /**
     * @param string $orderSouce
     *
     * @return $this
     */
    public function withOrderSouce($orderSouce)
    {
        $this->data['OrderSouce'] = $orderSouce;
        $this->options['query']['OrderSouce'] = $orderSouce;

        return $this;
    }

    /**
     * @param string $commodity
     *
     * @return $this
     */
    public function withCommodity($commodity)
    {
        $this->data['Commodity'] = $commodity;
        $this->options['query']['Commodity'] = $commodity;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $paymentType
     *
     * @return $this
     */
    public function withPaymentType($paymentType)
    {
        $this->data['PaymentType'] = $paymentType;
        $this->options['query']['PaymentType'] = $paymentType;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

        return $this;
    }
}
