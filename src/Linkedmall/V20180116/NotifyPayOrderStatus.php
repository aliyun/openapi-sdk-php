<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api NotifyPayOrderStatus
 *
 * @method string getAmount()
 * @method string getPayTypes()
 * @method string getRequestId()
 * @method string getOperationDate()
 * @method string getChannelId()
 */
class NotifyPayOrderStatus extends Rpc
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
