<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method array getInstanceList()
 * @method string getJsonData()
 * @method $this withJsonData($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getTaskScope()
 * @method $this withTaskScope($value)
 * @method string getAlertConfig()
 * @method $this withAlertConfig($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class TaskConfigModify extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
}
