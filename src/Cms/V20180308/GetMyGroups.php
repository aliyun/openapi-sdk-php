<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetMyGroups
 *
 * @method string getSelectContactGroups()
 * @method string getInstanceId()
 * @method string getGroupId()
 * @method string getType()
 * @method string getGroupName()
 * @method string getBindUrl()
 */
class GetMyGroups extends RpcRequest
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
    public $action = 'GetMyGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $selectContactGroups
     *
     * @return $this
     */
    public function withSelectContactGroups($selectContactGroups)
    {
        $this->data['SelectContactGroups'] = $selectContactGroups;
        $this->options['query']['SelectContactGroups'] = $selectContactGroups;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

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

    /**
     * @param string $bindUrl
     *
     * @return $this
     */
    public function withBindUrl($bindUrl)
    {
        $this->data['BindUrl'] = $bindUrl;
        $this->options['query']['BindUrl'] = $bindUrl;

        return $this;
    }
}
