<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TaskConfigModify
 *
 * @method array getInstanceList()
 * @method string getJsonData()
 * @method string getTaskType()
 * @method string getTaskScope()
 * @method string getAlertConfig()
 * @method string getGroupId()
 * @method string getTaskName()
 * @method string getId()
 * @method string getGroupName()
 */
class TaskConfigModify extends RpcRequest
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
    public $action = 'TaskConfigModify';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function withInstanceList(array $instanceList)
    {
        $this->data['InstanceList'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->options['query']['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $jsonData
     *
     * @return $this
     */
    public function withJsonData($jsonData)
    {
        $this->data['JsonData'] = $jsonData;
        $this->options['query']['JsonData'] = $jsonData;

        return $this;
    }

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
     * @param string $taskScope
     *
     * @return $this
     */
    public function withTaskScope($taskScope)
    {
        $this->data['TaskScope'] = $taskScope;
        $this->options['query']['TaskScope'] = $taskScope;

        return $this;
    }

    /**
     * @param string $alertConfig
     *
     * @return $this
     */
    public function withAlertConfig($alertConfig)
    {
        $this->data['AlertConfig'] = $alertConfig;
        $this->options['query']['AlertConfig'] = $alertConfig;

        return $this;
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
     * @param string $taskName
     *
     * @return $this
     */
    public function withTaskName($taskName)
    {
        $this->data['TaskName'] = $taskName;
        $this->options['query']['TaskName'] = $taskName;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
