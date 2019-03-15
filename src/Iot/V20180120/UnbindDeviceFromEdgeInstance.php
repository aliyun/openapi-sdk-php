<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getInstanceId()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getDeviceType()
 */
class UnbindDeviceFromEdgeInstance extends RpcRequest
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
    public $action = 'UnbindDeviceFromEdgeInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId']             = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName']             = $deviceName;
        $this->options['query']['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey']             = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function withDeviceType($deviceType)
    {
        $this->data['DeviceType']             = $deviceType;
        $this->options['query']['DeviceType'] = $deviceType;

        return $this;
    }
}
