<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCustomMetric
 *
 * @method string getGroupId()
 * @method string getMetricName()
 * @method string getUUID()
 * @method string getMd5()
 */
class DeleteCustomMetric extends RpcRequest
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
    public $action = 'DeleteCustomMetric';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function withMetricName($metricName)
    {
        $this->data['MetricName'] = $metricName;
        $this->options['query']['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @param string $uUID
     *
     * @return $this
     */
    public function withUUID($uUID)
    {
        $this->data['UUID'] = $uUID;
        $this->options['query']['UUID'] = $uUID;

        return $this;
    }

    /**
     * @param string $md5
     *
     * @return $this
     */
    public function withMd5($md5)
    {
        $this->data['Md5'] = $md5;
        $this->options['query']['Md5'] = $md5;

        return $this;
    }
}
