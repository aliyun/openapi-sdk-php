<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEvents
 *
 * @method string getEventId()
 * @method string getResourceOwnerId()
 * @method string getEffectTime()
 * @method string getPageNumber()
 * @method string getLimitTime()
 * @method string getPageSize()
 * @method string getPlanTime()
 * @method string getAliUid()
 * @method string getExpireTime()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getEventType()
 * @method string getStatus()
 */
class DescribeEvents extends RpcRequest
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
    public $action = 'DescribeEvents';

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
     * @deprecated deprecated since version 2.0, Use withEffectTime() instead.
     *
     * @param string $effectTime
     *
     * @return $this
     */
    public function setEffectTime($effectTime)
    {
        return $this->withEffectTime($effectTime);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLimitTime() instead.
     *
     * @param string $limitTime
     *
     * @return $this
     */
    public function setLimitTime($limitTime)
    {
        return $this->withLimitTime($limitTime);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPlanTime() instead.
     *
     * @param string $planTime
     *
     * @return $this
     */
    public function setPlanTime($planTime)
    {
        return $this->withPlanTime($planTime);
    }

    /**
     * @param string $planTime
     *
     * @return $this
     */
    public function withPlanTime($planTime)
    {
        $this->data['PlanTime'] = $planTime;
        $this->options['query']['PlanTime'] = $planTime;

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
     * @deprecated deprecated since version 2.0, Use withExpireTime() instead.
     *
     * @param string $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        return $this->withExpireTime($expireTime);
    }

    /**
     * @param string $expireTime
     *
     * @return $this
     */
    public function withExpireTime($expireTime)
    {
        $this->data['ExpireTime'] = $expireTime;
        $this->options['query']['ExpireTime'] = $expireTime;

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
     * @deprecated deprecated since version 2.0, Use withEventType() instead.
     *
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        return $this->withEventType($eventType);
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

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
