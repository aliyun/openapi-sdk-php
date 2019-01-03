<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryStaticsResponseTime
 *
 * @method string getTimeRange()
 * @method string getTaskId()
 */
class QueryStaticsResponseTime extends RpcRequest
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
    public $action = 'QueryStaticsResponseTime';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTimeRange() instead.
     *
     * @param string $timeRange
     *
     * @return $this
     */
    public function setTimeRange($timeRange)
    {
        return $this->withTimeRange($timeRange);
    }

    /**
     * @param string $timeRange
     *
     * @return $this
     */
    public function withTimeRange($timeRange)
    {
        $this->data['TimeRange'] = $timeRange;
        $this->options['query']['TimeRange'] = $timeRange;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }
}
