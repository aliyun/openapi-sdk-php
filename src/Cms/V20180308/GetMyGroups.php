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
     * @deprecated deprecated since version 2.0, Use withSelectContactGroups() instead.
     *
     * @param string $selectContactGroups
     *
     * @return $this
     */
    public function setSelectContactGroups($selectContactGroups)
    {
        return $this->withSelectContactGroups($selectContactGroups);
    }

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
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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

    /**
     * @deprecated deprecated since version 2.0, Use withBindUrl() instead.
     *
     * @param string $bindUrl
     *
     * @return $this
     */
    public function setBindUrl($bindUrl)
    {
        return $this->withBindUrl($bindUrl);
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
