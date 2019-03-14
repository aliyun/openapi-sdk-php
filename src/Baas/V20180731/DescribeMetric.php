<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribeMetric
 *
 * @method string getPeriod()
 * @method string getMetric()
 * @method string getPort()
 * @method string getBizid()
 * @method string getTimeArea()
 * @method string getInnerIp()
 */
class DescribeMetric extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @param string $metric
     *
     * @return $this
     */
    public function withMetric($metric)
    {
        $this->data['Metric'] = $metric;
        $this->options['query']['Metric'] = $metric;

        return $this;
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

        return $this;
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

        return $this;
    }

    /**
     * @param string $timeArea
     *
     * @return $this
     */
    public function withTimeArea($timeArea)
    {
        $this->data['TimeArea'] = $timeArea;
        $this->options['query']['TimeArea'] = $timeArea;

        return $this;
    }

    /**
     * @param string $innerIp
     *
     * @return $this
     */
    public function withInnerIp($innerIp)
    {
        $this->data['InnerIp'] = $innerIp;
        $this->options['query']['InnerIp'] = $innerIp;

        return $this;
    }
}
