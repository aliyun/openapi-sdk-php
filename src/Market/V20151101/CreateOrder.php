<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOrder
 *
 * @method string getOrderSouce()
 * @method string getCommodity()
 * @method string getClientToken()
 * @method string getOwnerId()
 * @method string getPaymentType()
 * @method string getOrderType()
 */
class CreateOrder extends RpcRequest
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
    public $action = 'CreateOrder';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withOrderSouce() instead.
     *
     * @param string $orderSouce
     *
     * @return $this
     */
    public function setOrderSouce($orderSouce)
    {
        return $this->withOrderSouce($orderSouce);
    }

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
     * @deprecated deprecated since version 2.0, Use withCommodity() instead.
     *
     * @param string $commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        return $this->withCommodity($commodity);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withPaymentType() instead.
     *
     * @param string $paymentType
     *
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        return $this->withPaymentType($paymentType);
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
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
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
