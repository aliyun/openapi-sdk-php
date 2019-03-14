<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api QueryDeviceStat
 *
 * @method string getEndTime()
 * @method string getAppKey()
 * @method string getStartTime()
 * @method string getDeviceType()
 * @method string getQueryType()
 */
class QueryDeviceStat extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function withDeviceType($deviceType)
    {
        $this->data['DeviceType'] = $deviceType;
        $this->options['query']['DeviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $queryType
     *
     * @return $this
     */
    public function withQueryType($queryType)
    {
        $this->data['QueryType'] = $queryType;
        $this->options['query']['QueryType'] = $queryType;

        return $this;
    }
}
