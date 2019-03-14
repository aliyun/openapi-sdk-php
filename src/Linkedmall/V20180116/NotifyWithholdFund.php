<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api NotifyWithholdFund
 *
 * @method string getAmount()
 * @method string getPayTypes()
 * @method string getTenantOrderId()
 * @method string getRequestId()
 * @method string getOperationDate()
 * @method string getChannelId()
 */
class NotifyWithholdFund extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function withAmount($amount)
    {
        $this->data['Amount'] = $amount;
        $this->options['query']['Amount'] = $amount;

        return $this;
    }

    /**
     * @param string $payTypes
     *
     * @return $this
     */
    public function withPayTypes($payTypes)
    {
        $this->data['PayTypes'] = $payTypes;
        $this->options['query']['PayTypes'] = $payTypes;

        return $this;
    }

    /**
     * @param string $tenantOrderId
     *
     * @return $this
     */
    public function withTenantOrderId($tenantOrderId)
    {
        $this->data['TenantOrderId'] = $tenantOrderId;
        $this->options['query']['TenantOrderId'] = $tenantOrderId;

        return $this;
    }

    /**
     * @param string $requestId
     *
     * @return $this
     */
    public function withRequestId($requestId)
    {
        $this->data['RequestId'] = $requestId;
        $this->options['query']['RequestId'] = $requestId;

        return $this;
    }

    /**
     * @param string $operationDate
     *
     * @return $this
     */
    public function withOperationDate($operationDate)
    {
        $this->data['OperationDate'] = $operationDate;
        $this->options['query']['OperationDate'] = $operationDate;

        return $this;
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function withChannelId($channelId)
    {
        $this->data['ChannelId'] = $channelId;
        $this->options['query']['ChannelId'] = $channelId;

        return $this;
    }
}
