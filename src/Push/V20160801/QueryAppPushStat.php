<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAppPushStat
 *
 * @method string getGranularity()
 * @method string getEndTime()
 * @method string getAppKey()
 * @method string getStartTime()
 */
class QueryAppPushStat extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'QueryAppPushStat';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGranularity() instead.
     *
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        return $this->withGranularity($granularity);
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function withGranularity($granularity)
    {
        $this->data['Granularity'] = $granularity;
        $this->options['query']['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

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
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        return $this->withAppKey($appKey);
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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
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
}
