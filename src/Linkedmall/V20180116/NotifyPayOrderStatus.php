<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of NotifyPayOrderStatus
 *
 * @method string getAmount()
 * @method string getPayTypes()
 * @method string getRequestId()
 * @method string getOperationDate()
 * @method string getChannelId()
 */
class NotifyPayOrderStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'linkedmall';

    /**
     * @var string
     */
    public $version = '2018-01-16';

    /**
     * @var string
     */
    public $action = 'NotifyPayOrderStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'linkedmall';

    /**
     * @deprecated deprecated since version 2.0, Use withAmount() instead.
     *
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->withAmount($amount);
    }

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
     * @deprecated deprecated since version 2.0, Use withPayTypes() instead.
     *
     * @param string $payTypes
     *
     * @return $this
     */
    public function setPayTypes($payTypes)
    {
        return $this->withPayTypes($payTypes);
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
     * @deprecated deprecated since version 2.0, Use withRequestId() instead.
     *
     * @param string $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        return $this->withRequestId($requestId);
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
     * @deprecated deprecated since version 2.0, Use withOperationDate() instead.
     *
     * @param string $operationDate
     *
     * @return $this
     */
    public function setOperationDate($operationDate)
    {
        return $this->withOperationDate($operationDate);
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
     * @deprecated deprecated since version 2.0, Use withChannelId() instead.
     *
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        return $this->withChannelId($channelId);
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
