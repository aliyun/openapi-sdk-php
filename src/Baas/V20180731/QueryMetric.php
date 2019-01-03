<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMetric
 *
 * @method string getPeriod()
 * @method string getMetric()
 * @method string getPort()
 * @method string getBizid()
 * @method string getTimeArea()
 * @method string getInnerIp()
 */
class QueryMetric extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'QueryMetric';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

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
     * @deprecated deprecated since version 2.0, Use withMetric() instead.
     *
     * @param string $metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        return $this->withMetric($metric);
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
     * @deprecated deprecated since version 2.0, Use withPort() instead.
     *
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        return $this->withPort($port);
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
     * @deprecated deprecated since version 2.0, Use withBizid() instead.
     *
     * @param string $bizid
     *
     * @return $this
     */
    public function setBizid($bizid)
    {
        return $this->withBizid($bizid);
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
     * @deprecated deprecated since version 2.0, Use withTimeArea() instead.
     *
     * @param string $timeArea
     *
     * @return $this
     */
    public function setTimeArea($timeArea)
    {
        return $this->withTimeArea($timeArea);
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
     * @deprecated deprecated since version 2.0, Use withInnerIp() instead.
     *
     * @param string $innerIp
     *
     * @return $this
     */
    public function setInnerIp($innerIp)
    {
        return $this->withInnerIp($innerIp);
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
