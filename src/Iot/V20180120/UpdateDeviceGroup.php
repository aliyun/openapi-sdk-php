<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api UpdateDeviceGroup
 *
 * @method string getGroupDesc()
 * @method string getIotInstanceId()
 * @method string getGroupId()
 */
class UpdateDeviceGroup extends Rpc
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
