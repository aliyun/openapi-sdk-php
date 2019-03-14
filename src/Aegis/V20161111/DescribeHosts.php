<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeHosts
 *
 * @method string getEventLevels()
 * @method string getSourceIp()
 * @method string getLastDays()
 * @method string getEventTypes()
 */
class DescribeHosts extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
