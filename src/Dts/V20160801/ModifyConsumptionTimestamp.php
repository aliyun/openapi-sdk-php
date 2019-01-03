<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyConsumptionTimestamp
 *
 * @method string getSubscriptionInstanceId()
 * @method string getConsumptionTimestamp()
 * @method string getOwnerId()
 */
class ModifyConsumptionTimestamp extends RpcRequest
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
    public $action = 'ModifyConsumptionTimestamp';

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
     * @deprecated deprecated since version 2.0, Use withConsumptionTimestamp() instead.
     *
     * @param string $consumptionTimestamp
     *
     * @return $this
     */
    public function setConsumptionTimestamp($consumptionTimestamp)
    {
        return $this->withConsumptionTimestamp($consumptionTimestamp);
    }

    /**
     * @param string $consumptionTimestamp
     *
     * @return $this
     */
    public function withConsumptionTimestamp($consumptionTimestamp)
    {
        $this->data['ConsumptionTimestamp'] = $consumptionTimestamp;
        $this->options['query']['ConsumptionTimestamp'] = $consumptionTimestamp;

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
