<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Rpc;

/**
 * Api Action
 *
 * @method string getOrderId()
 * @method string getStepCode()
 */
class Action extends Rpc
{
    public $product = 'TeslaDam';

    public $version = '2018-01-18';

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
