<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateMyGroups
 *
 * @method string getContactGroups()
 * @method string getOptions()
 * @method string getType()
 * @method string getServiceId()
 * @method string getGroupName()
 * @method string getBindUrl()
 */
class CreateMyGroups extends RpcRequest
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
    public $action = 'CreateMyGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withContactGroups() instead.
     *
     * @param string $contactGroups
     *
     * @return $this
     */
    public function setContactGroups($contactGroups)
    {
        return $this->withContactGroups($contactGroups);
    }

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
     * @deprecated deprecated since version 2.0, Use withOptions() instead.
     *
     * @param string $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        return $this->withOptions($options);
    }

    /**
     * @param string $options
     *
     * @return $this
     */
    public function withOptions($options)
    {
        $this->data['Options'] = $options;
        $this->options['query']['Options'] = $options;

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
     * @deprecated deprecated since version 2.0, Use withServiceId() instead.
     *
     * @param string $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        return $this->withServiceId($serviceId);
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
