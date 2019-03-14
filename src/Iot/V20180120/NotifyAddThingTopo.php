<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api NotifyAddThingTopo
 *
 * @method string getGwProductKey()
 * @method string getGwDeviceName()
 * @method string getIotInstanceId()
 * @method string getGwIotId()
 * @method string getDeviceListStr()
 */
class NotifyAddThingTopo extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param string $gwProductKey
     *
     * @return $this
     */
    public function withGwProductKey($gwProductKey)
    {
        $this->data['GwProductKey'] = $gwProductKey;
        $this->options['query']['GwProductKey'] = $gwProductKey;

        return $this;
    }

    /**
     * @param string $gwDeviceName
     *
     * @return $this
     */
    public function withGwDeviceName($gwDeviceName)
    {
        $this->data['GwDeviceName'] = $gwDeviceName;
        $this->options['query']['GwDeviceName'] = $gwDeviceName;

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
     * @param string $gwIotId
     *
     * @return $this
     */
    public function withGwIotId($gwIotId)
    {
        $this->data['GwIotId'] = $gwIotId;
        $this->options['query']['GwIotId'] = $gwIotId;

        return $this;
    }

    /**
     * @param string $deviceListStr
     *
     * @return $this
     */
    public function withDeviceListStr($deviceListStr)
    {
        $this->data['DeviceListStr'] = $deviceListStr;
        $this->options['query']['DeviceListStr'] = $deviceListStr;

        return $this;
    }
}
