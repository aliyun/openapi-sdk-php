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
