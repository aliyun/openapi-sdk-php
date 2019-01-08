<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySubscriptionObject
 *
 * @method string getSubscriptionObject()
 * @method string getSubscriptionInstanceId()
 * @method string getOwnerId()
 */
class ModifySubscriptionObject extends RpcRequest
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
    public $action = 'ModifySubscriptionObject';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $subscriptionObject
     *
     * @return $this
     */
    public function withSubscriptionObject($subscriptionObject)
    {
        $this->data['SubscriptionObject'] = $subscriptionObject;
        $this->options['query']['SubscriptionObject'] = $subscriptionObject;

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
