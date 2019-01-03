<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDeviceGroup
 *
 * @method string getGroupDesc()
 * @method string getSuperGroupId()
 * @method string getGroupName()
 */
class CreateDeviceGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'CreateDeviceGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGroupDesc() instead.
     *
     * @param string $groupDesc
     *
     * @return $this
     */
    public function setGroupDesc($groupDesc)
    {
        return $this->withGroupDesc($groupDesc);
    }

    /**
     * @param string $groupDesc
     *
     * @return $this
     */
    public function withGroupDesc($groupDesc)
    {
        $this->data['GroupDesc'] = $groupDesc;
        $this->options['query']['GroupDesc'] = $groupDesc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSuperGroupId() instead.
     *
     * @param string $superGroupId
     *
     * @return $this
     */
    public function setSuperGroupId($superGroupId)
    {
        return $this->withSuperGroupId($superGroupId);
    }

    /**
     * @param string $superGroupId
     *
     * @return $this
     */
    public function withSuperGroupId($superGroupId)
    {
        $this->data['SuperGroupId'] = $superGroupId;
        $this->options['query']['SuperGroupId'] = $superGroupId;

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
