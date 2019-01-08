<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TaskConfigUnhealthy
 *
 * @method array getTaskIdList()
 */
class TaskConfigUnhealthy extends RpcRequest
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
    public $action = 'TaskConfigUnhealthy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $taskIdList
     *
     * @return $this
     */
    public function withTaskIdList(array $taskIdList)
    {
        $this->data['TaskIdList'] = $taskIdList;
        foreach ($taskIdList as $i => $iValue) {
            $this->options['query']['TaskIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
