<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteMyGroupInstances
 *
 * @method string getInstanceIds()
 * @method string getInstanceIdList()
 * @method string getGroupId()
 */
class DeleteMyGroupInstances extends RpcRequest
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
    public $action = 'DeleteMyGroupInstances';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceIds() instead.
     *
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        return $this->withInstanceIds($instanceIds);
    }

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
     * @deprecated deprecated since version 2.0, Use withInstanceIdList() instead.
     *
     * @param string $instanceIdList
     *
     * @return $this
     */
    public function setInstanceIdList($instanceIdList)
    {
        return $this->withInstanceIdList($instanceIdList);
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
}
