<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyUserEventPlanTime
 *
 * @method string getEventId()
 * @method string getResourceOwnerId()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getNewPlanTime()
 * @method string getOwnerId()
 * @method string getNewExpireTime()
 */
class ModifyUserEventPlanTime extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $eventId
     *
     * @return $this
     */
    public function withEventId($eventId)
    {
        $this->data['EventId'] = $eventId;
        $this->options['query']['EventId'] = $eventId;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function withResourceId($resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        $this->options['query']['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $newPlanTime
     *
     * @return $this
     */
    public function withNewPlanTime($newPlanTime)
    {
        $this->data['NewPlanTime'] = $newPlanTime;
        $this->options['query']['NewPlanTime'] = $newPlanTime;

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

    /**
     * @param string $newExpireTime
     *
     * @return $this
     */
    public function withNewExpireTime($newExpireTime)
    {
        $this->data['NewExpireTime'] = $newExpireTime;
        $this->options['query']['NewExpireTime'] = $newExpireTime;

        return $this;
    }
}
