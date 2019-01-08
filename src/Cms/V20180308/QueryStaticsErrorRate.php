<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryStaticsErrorRate
 *
 * @method string getTimeRange()
 * @method string getTaskId()
 */
class QueryStaticsErrorRate extends RpcRequest
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
    public $action = 'QueryStaticsErrorRate';

    /**
     * @var string
     */
    public $method = 'POST';

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
