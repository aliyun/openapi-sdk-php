<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api PutCustomMetric
 *
 * @method string getMetricList()
 */
class PutCustomMetric extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
