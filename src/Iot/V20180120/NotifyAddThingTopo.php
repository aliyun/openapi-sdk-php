<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of NotifyAddThingTopo
 *
 * @method string getGwProductKey()
 * @method string getGwDeviceName()
 * @method string getGwIotId()
 * @method string getDeviceListStr()
 */
class NotifyAddThingTopo extends RpcRequest
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
    public $action = 'NotifyAddThingTopo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGwProductKey() instead.
     *
     * @param string $gwProductKey
     *
     * @return $this
     */
    public function setGwProductKey($gwProductKey)
    {
        return $this->withGwProductKey($gwProductKey);
    }

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
     * @deprecated deprecated since version 2.0, Use withGwDeviceName() instead.
     *
     * @param string $gwDeviceName
     *
     * @return $this
     */
    public function setGwDeviceName($gwDeviceName)
    {
        return $this->withGwDeviceName($gwDeviceName);
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
     * @deprecated deprecated since version 2.0, Use withGwIotId() instead.
     *
     * @param string $gwIotId
     *
     * @return $this
     */
    public function setGwIotId($gwIotId)
    {
        return $this->withGwIotId($gwIotId);
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
     * @deprecated deprecated since version 2.0, Use withDeviceListStr() instead.
     *
     * @param string $deviceListStr
     *
     * @return $this
     */
    public function setDeviceListStr($deviceListStr)
    {
        return $this->withDeviceListStr($deviceListStr);
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
