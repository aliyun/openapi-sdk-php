<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDrdsInstanceMonitor
 *
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDrdsInstanceId()
 * @method string getKey()
 * @method string getPeriodMultiple()
 */
class DescribeDrdsInstanceMonitor extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Drds';

    /**
     * @var string
     */
    public $version = '2017-10-16';

    /**
     * @var string
     */
    public $action = 'DescribeDrdsInstanceMonitor';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @deprecated deprecated since version 2.0, Use withDrdsInstanceId() instead.
     *
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        return $this->withDrdsInstanceId($drdsInstanceId);
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function withDrdsInstanceId($drdsInstanceId)
    {
        $this->data['DrdsInstanceId'] = $drdsInstanceId;
        $this->options['query']['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKey() instead.
     *
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        return $this->withKey($key);
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function withKey($key)
    {
        $this->data['Key'] = $key;
        $this->options['query']['Key'] = $key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPeriodMultiple() instead.
     *
     * @param string $periodMultiple
     *
     * @return $this
     */
    public function setPeriodMultiple($periodMultiple)
    {
        return $this->withPeriodMultiple($periodMultiple);
    }

    /**
     * @param string $periodMultiple
     *
     * @return $this
     */
    public function withPeriodMultiple($periodMultiple)
    {
        $this->data['PeriodMultiple'] = $periodMultiple;
        $this->options['query']['PeriodMultiple'] = $periodMultiple;

        return $this;
    }
}
