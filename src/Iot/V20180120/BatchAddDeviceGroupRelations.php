<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchAddDeviceGroupRelations
 *
 * @method string getGroupId()
 * @method array getDevice()
 */
class BatchAddDeviceGroupRelations extends RpcRequest
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
    public $action = 'BatchAddDeviceGroupRelations';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use getDevice() instead.
     *
     * @return array
     */
    public function getDevices()
    {
        return $this->getDevice();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDevice() instead.
     *
     * @param array $devices
     *
     * @return $this
     */
    public function setDevices(array $devices)
    {
        return $this->withDevice($devices);
    }

    /**
     * @param array $device
     *
     * @return $this
     */
    public function withDevice(array $device)
    {
        $this->data['Device'] = $device;
        foreach ($device as $i => $iValue) {
            $this->options['query']['Device.' . ($i + 1) . '.DeviceName'] = $device[$i]['DeviceName'];
            $this->options['query']['Device.' . ($i + 1) . '.ProductKey'] = $device[$i]['ProductKey'];
        }

        return $this;
    }
}
