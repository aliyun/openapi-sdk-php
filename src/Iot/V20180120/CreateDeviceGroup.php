<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api CreateDeviceGroup
 *
 * @method string getGroupDesc()
 * @method string getIotInstanceId()
 * @method string getSuperGroupId()
 * @method string getGroupName()
 */
class CreateDeviceGroup extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

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
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

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
