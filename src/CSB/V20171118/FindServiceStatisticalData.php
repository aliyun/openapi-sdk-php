<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindServiceStatisticalData
 *
 * @method string getCsbId()
 * @method string getEndTime()
 * @method string getServiceName()
 * @method string getStartTime()
 */
class FindServiceStatisticalData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'FindServiceStatisticalData';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

        return $this;
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
     * @param string $serviceName
     *
     * @return $this
     */
    public function withServiceName($serviceName)
    {
        $this->data['ServiceName'] = $serviceName;
        $this->options['query']['ServiceName'] = $serviceName;

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
}
