<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutCustomMetric
 *
 * @method string getMetricList()
 */
class PutCustomMetric extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'PutCustomMetric';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withMetricList() instead.
     *
     * @param string $metricList
     *
     * @return $this
     */
    public function setMetricList($metricList)
    {
        return $this->withMetricList($metricList);
    }

    /**
     * @param string $metricList
     *
     * @return $this
     */
    public function withMetricList($metricList)
    {
        $this->data['MetricList'] = $metricList;
        $this->options['query']['MetricList'] = $metricList;

        return $this;
    }
}
