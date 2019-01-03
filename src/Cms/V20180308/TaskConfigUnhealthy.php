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
     * @deprecated deprecated since version 2.0, Use getTaskIdList() instead.
     *
     * @return array
     */
    public function getTaskIdLists()
    {
        return $this->getTaskIdList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskIdList() instead.
     *
     * @param array $taskIdLists
     *
     * @return $this
     */
    public function setTaskIdLists(array $taskIdLists)
    {
        return $this->withTaskIdList($taskIdLists);
    }

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
