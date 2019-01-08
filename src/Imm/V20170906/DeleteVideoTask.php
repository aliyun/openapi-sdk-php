<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteVideoTask
 *
 * @method string getTaskType()
 * @method string getProject()
 * @method string getTaskId()
 */
class DeleteVideoTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'DeleteVideoTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $taskType
     *
     * @return $this
     */
    public function withTaskType($taskType)
    {
        $this->data['TaskType'] = $taskType;
        $this->options['query']['TaskType'] = $taskType;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

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
