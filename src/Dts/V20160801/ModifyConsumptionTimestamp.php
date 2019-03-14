<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api ModifyConsumptionTimestamp
 *
 * @method string getSubscriptionInstanceId()
 * @method string getConsumptionTimestamp()
 * @method string getOwnerId()
 */
class ModifyConsumptionTimestamp extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

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
