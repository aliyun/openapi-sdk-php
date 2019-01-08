<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMonthlyBill
 *
 * @method string getBillingCycle()
 */
class QueryMonthlyBill extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'QueryMonthlyBill';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $billingCycle
     *
     * @return $this
     */
    public function withBillingCycle($billingCycle)
    {
        $this->data['BillingCycle'] = $billingCycle;
        $this->options['query']['BillingCycle'] = $billingCycle;

        return $this;
    }
}
