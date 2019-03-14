<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api QueryErrorDistribution
 *
 * @method string getTimeRange()
 * @method string getTaskId()
 */
class QueryErrorDistribution extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
