<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSubscriptionObjectModifyStatus
 *
 * @method string getClientToken()
 * @method string getSubscriptionInstanceId()
 * @method string getOwnerId()
 */
class DescribeSubscriptionObjectModifyStatus extends RpcRequest
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
    public $action = 'DescribeSubscriptionObjectModifyStatus';

    /**
     * @var string
     */
    public $method = 'POST';

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
