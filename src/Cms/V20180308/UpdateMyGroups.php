<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateMyGroups
 *
 * @method string getContactGroups()
 * @method string getGroupId()
 * @method string getServiceId()
 * @method string getType()
 * @method string getGroupName()
 * @method string getBindUrls()
 */
class UpdateMyGroups extends RpcRequest
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
    public $action = 'UpdateMyGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $contactGroups
     *
     * @return $this
     */
    public function withContactGroups($contactGroups)
    {
        $this->data['ContactGroups'] = $contactGroups;
        $this->options['query']['ContactGroups'] = $contactGroups;

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
     * @param string $serviceId
     *
     * @return $this
     */
    public function withServiceId($serviceId)
    {
        $this->data['ServiceId'] = $serviceId;
        $this->options['query']['ServiceId'] = $serviceId;

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
     * @param string $bindUrls
     *
     * @return $this
     */
    public function withBindUrls($bindUrls)
    {
        $this->data['BindUrls'] = $bindUrls;
        $this->options['query']['BindUrls'] = $bindUrls;

        return $this;
    }
}
