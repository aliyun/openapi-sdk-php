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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

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
     * @deprecated deprecated since version 2.0, Use withMetricName() instead.
     *
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        return $this->withMetricName($metricName);
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
     * @deprecated deprecated since version 2.0, Use withUUID() instead.
     *
     * @param string $uUID
     *
     * @return $this
     */
    public function setUUID($uUID)
    {
        return $this->withUUID($uUID);
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
     * @deprecated deprecated since version 2.0, Use withMd5() instead.
     *
     * @param string $md5
     *
     * @return $this
     */
    public function setMd5($md5)
    {
        return $this->withMd5($md5);
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
