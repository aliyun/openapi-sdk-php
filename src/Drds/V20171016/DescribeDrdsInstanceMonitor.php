<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDrdsInstanceMonitor
 *
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDrdsInstanceId()
 * @method string getKey()
 * @method string getPeriodMultiple()
 */
class DescribeDrdsInstanceMonitor extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

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
