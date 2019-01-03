<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySystemEventAttribute
 *
 * @method string getEventId()
 * @method string getResourceOwnerId()
 * @method string getAliUid()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getNewPlanTime()
 * @method string getOwnerId()
 * @method string getNewExpireTime()
 */
class ModifySystemEventAttribute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'ModifySystemEventAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withEventId() instead.
     *
     * @param string $eventId
     *
     * @return $this
     */
    public function setEventId($eventId)
    {
        return $this->withEventId($eventId);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withAliUid() instead.
     *
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        return $this->withAliUid($aliUid);
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['AliUid'] = $aliUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId() instead.
     *
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        return $this->withResourceId($resourceId);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withNewPlanTime() instead.
     *
     * @param string $newPlanTime
     *
     * @return $this
     */
    public function setNewPlanTime($newPlanTime)
    {
        return $this->withNewPlanTime($newPlanTime);
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

    /**
     * @deprecated deprecated since version 2.0, Use withNewExpireTime() instead.
     *
     * @param string $newExpireTime
     *
     * @return $this
     */
    public function setNewExpireTime($newExpireTime)
    {
        return $this->withNewExpireTime($newExpireTime);
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
