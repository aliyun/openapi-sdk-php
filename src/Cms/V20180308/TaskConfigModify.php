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
     * @deprecated deprecated since version 2.0, Use getInstanceList() instead.
     *
     * @return array
     */
    public function getInstanceLists()
    {
        return $this->getInstanceList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceList() instead.
     *
     * @param array $instanceLists
     *
     * @return $this
     */
    public function setInstanceLists(array $instanceLists)
    {
        return $this->withInstanceList($instanceLists);
    }

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
     * @deprecated deprecated since version 2.0, Use withJsonData() instead.
     *
     * @param string $jsonData
     *
     * @return $this
     */
    public function setJsonData($jsonData)
    {
        return $this->withJsonData($jsonData);
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
     * @deprecated deprecated since version 2.0, Use withTaskType() instead.
     *
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        return $this->withTaskType($taskType);
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
     * @deprecated deprecated since version 2.0, Use withTaskScope() instead.
     *
     * @param string $taskScope
     *
     * @return $this
     */
    public function setTaskScope($taskScope)
    {
        return $this->withTaskScope($taskScope);
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
     * @deprecated deprecated since version 2.0, Use withAlertConfig() instead.
     *
     * @param string $alertConfig
     *
     * @return $this
     */
    public function setAlertConfig($alertConfig)
    {
        return $this->withAlertConfig($alertConfig);
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
     * @deprecated deprecated since version 2.0, Use withTaskName() instead.
     *
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        return $this->withTaskName($taskName);
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
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
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
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        return $this->withGroupName($groupName);
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
