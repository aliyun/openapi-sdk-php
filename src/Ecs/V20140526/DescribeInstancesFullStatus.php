<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeInstancesFullStatus
 *
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method string getEventPublishTimeStart()
 * @method array getInstanceId()
 * @method string getNotBeforeEnd()
 * @method string getHealthStatus()
 * @method string getEventType()
 * @method string getStatus()
 */
class DescribeInstancesFullStatus extends RpcRequest
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
    public $action = 'DescribeInstancesFullStatus';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $eventPublishTimeEnd
     *
     * @return $this
     */
    public function withEventPublishTimeEnd($eventPublishTimeEnd)
    {
        $this->data['EventPublishTimeEnd'] = $eventPublishTimeEnd;
        $this->options['query']['EventPublishTime.End'] = $eventPublishTimeEnd;

        return $this;
    }

    /**
     * @param array $instanceEventType
     *
     * @return $this
     */
    public function withInstanceEventType(array $instanceEventType)
    {
        $this->data['InstanceEventType'] = $instanceEventType;
        foreach ($instanceEventType as $i => $iValue) {
            $this->options['query']['InstanceEventType.' . ($i + 1)] = $iValue;
        }

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
     * @param string $notBeforeStart
     *
     * @return $this
     */
    public function withNotBeforeStart($notBeforeStart)
    {
        $this->data['NotBeforeStart'] = $notBeforeStart;
        $this->options['query']['NotBefore.Start'] = $notBeforeStart;

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
     * @param string $eventPublishTimeStart
     *
     * @return $this
     */
    public function withEventPublishTimeStart($eventPublishTimeStart)
    {
        $this->data['EventPublishTimeStart'] = $eventPublishTimeStart;
        $this->options['query']['EventPublishTime.Start'] = $eventPublishTimeStart;

        return $this;
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $notBeforeEnd
     *
     * @return $this
     */
    public function withNotBeforeEnd($notBeforeEnd)
    {
        $this->data['NotBeforeEnd'] = $notBeforeEnd;
        $this->options['query']['NotBefore.End'] = $notBeforeEnd;

        return $this;
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
