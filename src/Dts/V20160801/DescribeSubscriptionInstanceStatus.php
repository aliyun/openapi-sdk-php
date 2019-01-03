<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSubscriptionInstanceStatus
 *
 * @method string getSubscriptionInstanceId()
 * @method string getOwnerId()
 */
class DescribeSubscriptionInstanceStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeSubscriptionInstanceStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSubscriptionInstanceId() instead.
     *
     * @param string $subscriptionInstanceId
     *
     * @return $this
     */
    public function setSubscriptionInstanceId($subscriptionInstanceId)
    {
        return $this->withSubscriptionInstanceId($subscriptionInstanceId);
    }

    /**
     * @param string $subscriptionInstanceId
     *
     * @return $this
     */
    public function withSubscriptionInstanceId($subscriptionInstanceId)
    {
        $this->data['SubscriptionInstanceId'] = $subscriptionInstanceId;
        $this->options['query']['SubscriptionInstanceId'] = $subscriptionInstanceId;

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
}
