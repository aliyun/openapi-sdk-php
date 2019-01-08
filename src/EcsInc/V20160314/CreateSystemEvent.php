<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSystemEvent
 *
 * @method string getResourceOwnerId()
 * @method string getEffectTime()
 * @method string getLimitTime()
 * @method string getAliUid()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getEventType()
 */
class CreateSystemEvent extends RpcRequest
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
    public $action = 'CreateSystemEvent';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @param string $effectTime
     *
     * @return $this
     */
    public function withEffectTime($effectTime)
    {
        $this->data['EffectTime'] = $effectTime;
        $this->options['query']['EffectTime'] = $effectTime;

        return $this;
    }

    /**
     * @param string $limitTime
     *
     * @return $this
     */
    public function withLimitTime($limitTime)
    {
        $this->data['LimitTime'] = $limitTime;
        $this->options['query']['LimitTime'] = $limitTime;

        return $this;
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
     * @param string $eventType
     *
     * @return $this
     */
    public function withEventType($eventType)
    {
        $this->data['EventType'] = $eventType;
        $this->options['query']['EventType'] = $eventType;

        return $this;
    }
}
