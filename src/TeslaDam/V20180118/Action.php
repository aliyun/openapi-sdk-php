<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of Action
 *
 * @method string getOrderId()
 * @method string getStepCode()
 */
class Action extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaDam';

    /**
     * @var string
     */
    public $version = '2018-01-18';

    /**
     * @var string
     */
    public $action = 'Action';

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
     * @deprecated deprecated since version 2.0, Use withStepCode() instead.
     *
     * @param string $stepCode
     *
     * @return $this
     */
    public function setStepCode($stepCode)
    {
        return $this->withStepCode($stepCode);
    }

    /**
     * @param string $stepCode
     *
     * @return $this
     */
    public function withStepCode($stepCode)
    {
        $this->data['StepCode'] = $stepCode;
        $this->options['query']['StepCode'] = $stepCode;

        return $this;
    }
}
