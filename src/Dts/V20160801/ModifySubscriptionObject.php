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
     * @deprecated deprecated since version 2.0, Use withSubscriptionObject() instead.
     *
     * @param string $subscriptionObject
     *
     * @return $this
     */
    public function setSubscriptionObject($subscriptionObject)
    {
        return $this->withSubscriptionObject($subscriptionObject);
    }

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
