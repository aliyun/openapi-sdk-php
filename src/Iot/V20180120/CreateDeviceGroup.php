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
