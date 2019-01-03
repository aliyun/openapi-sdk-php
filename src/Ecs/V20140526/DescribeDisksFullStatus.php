<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDisksFullStatus
 *
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getEventTimeStart()
 * @method string getPageSize()
 * @method array getDiskId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEventTimeEnd()
 * @method string getHealthStatus()
 * @method string getEventType()
 * @method string getStatus()
 */
class DescribeDisksFullStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeDisksFullStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getEventId() instead.
     *
     * @return array
     */
    public function getEventIds()
    {
        return $this->getEventId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventId() instead.
     *
     * @param array $eventIds
     *
     * @return $this
     */
    public function setEventIds(array $eventIds)
    {
        return $this->withEventId($eventIds);
    }

    /**
     * @param array $eventId
     *
     * @return $this
     */
    public function withEventId(array $eventId)
    {
        $this->data['EventId'] = $eventId;
        foreach ($eventId as $i => $iValue) {
            $this->options['query']['EventId.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use withEventTimeStart() instead.
     *
     * @param string $eventTimeStart
     *
     * @return $this
     */
    public function setEventTimeStart($eventTimeStart)
    {
        return $this->withEventTimeStart($eventTimeStart);
    }

    /**
     * @param string $eventTimeStart
     *
     * @return $this
     */
    public function withEventTimeStart($eventTimeStart)
    {
        $this->data['EventTimeStart'] = $eventTimeStart;
        $this->options['query']['EventTime.Start'] = $eventTimeStart;

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
     * @deprecated deprecated since version 2.0, Use getDiskId() instead.
     *
     * @return array
     */
    public function getDiskIds()
    {
        return $this->getDiskId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDiskId() instead.
     *
     * @param array $diskIds
     *
     * @return $this
     */
    public function setDiskIds(array $diskIds)
    {
        return $this->withDiskId($diskIds);
    }

    /**
     * @param array $diskId
     *
     * @return $this
     */
    public function withDiskId(array $diskId)
    {
        $this->data['DiskId'] = $diskId;
        foreach ($diskId as $i => $iValue) {
            $this->options['query']['DiskId.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @deprecated deprecated since version 2.0, Use withEventTimeEnd() instead.
     *
     * @param string $eventTimeEnd
     *
     * @return $this
     */
    public function setEventTimeEnd($eventTimeEnd)
    {
        return $this->withEventTimeEnd($eventTimeEnd);
    }

    /**
     * @param string $eventTimeEnd
     *
     * @return $this
     */
    public function withEventTimeEnd($eventTimeEnd)
    {
        $this->data['EventTimeEnd'] = $eventTimeEnd;
        $this->options['query']['EventTime.End'] = $eventTimeEnd;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHealthStatus() instead.
     *
     * @param string $healthStatus
     *
     * @return $this
     */
    public function setHealthStatus($healthStatus)
    {
        return $this->withHealthStatus($healthStatus);
    }

    /**
     * @param string $healthStatus
     *
     * @return $this
     */
    public function withHealthStatus($healthStatus)
    {
        $this->data['HealthStatus'] = $healthStatus;
        $this->options['query']['HealthStatus'] = $healthStatus;

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
