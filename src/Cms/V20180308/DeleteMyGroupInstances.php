<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api DeleteMyGroupInstances
 *
 * @method string getInstanceIds()
 * @method string getInstanceIdList()
 * @method string getGroupId()
 */
class DeleteMyGroupInstances extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $instanceIdList
     *
     * @return $this
     */
    public function withInstanceIdList($instanceIdList)
    {
        $this->data['InstanceIdList'] = $instanceIdList;
        $this->options['query']['InstanceIdList'] = $instanceIdList;

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
}
