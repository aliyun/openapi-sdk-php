<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeHostTotalCount
 *
 * @method string getEventLevels()
 * @method string getSourceIp()
 * @method string getLastDays()
 * @method string getEventTypes()
 */
class DescribeHostTotalCount extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeHostTotalCount';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withEventLevels() instead.
     *
     * @param string $eventLevels
     *
     * @return $this
     */
    public function setEventLevels($eventLevels)
    {
        return $this->withEventLevels($eventLevels);
    }

    /**
     * @param string $eventLevels
     *
     * @return $this
     */
    public function withEventLevels($eventLevels)
    {
        $this->data['EventLevels'] = $eventLevels;
        $this->options['query']['EventLevels'] = $eventLevels;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLastDays() instead.
     *
     * @param string $lastDays
     *
     * @return $this
     */
    public function setLastDays($lastDays)
    {
        return $this->withLastDays($lastDays);
    }

    /**
     * @param string $lastDays
     *
     * @return $this
     */
    public function withLastDays($lastDays)
    {
        $this->data['LastDays'] = $lastDays;
        $this->options['query']['LastDays'] = $lastDays;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventTypes() instead.
     *
     * @param string $eventTypes
     *
     * @return $this
     */
    public function setEventTypes($eventTypes)
    {
        return $this->withEventTypes($eventTypes);
    }

    /**
     * @param string $eventTypes
     *
     * @return $this
     */
    public function withEventTypes($eventTypes)
    {
        $this->data['EventTypes'] = $eventTypes;
        $this->options['query']['EventTypes'] = $eventTypes;

        return $this;
    }
}
