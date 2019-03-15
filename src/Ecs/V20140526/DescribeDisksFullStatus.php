<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method array getEventId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEventTimeStart()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getDiskId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventTimeEnd()
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDisksFullStatus extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
}
