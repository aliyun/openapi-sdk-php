<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDeviceProperty
 *
 * @method string getIotId()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getItems()
 */
class SetDeviceProperty extends RpcRequest
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
    public $action = 'SetDeviceProperty';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId'] = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
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
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $items
     *
     * @return $this
     */
    public function withItems($items)
    {
        $this->data['Items'] = $items;
        $this->options['query']['Items'] = $items;

        return $this;
    }
}
