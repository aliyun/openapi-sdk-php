<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDevicesProperty
 *
 * @method array getDeviceName()
 * @method string getProductKey()
 * @method string getItems()
 */
class SetDevicesProperty extends RpcRequest
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
    public $action = 'SetDevicesProperty';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getDeviceName() instead.
     *
     * @return array
     */
    public function getDeviceNames()
    {
        return $this->getDeviceName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceName() instead.
     *
     * @param array $deviceNames
     *
     * @return $this
     */
    public function setDeviceNames(array $deviceNames)
    {
        return $this->withDeviceName($deviceNames);
    }

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function withDeviceName(array $deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->options['query']['DeviceName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductKey() instead.
     *
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        return $this->withProductKey($productKey);
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
     * @deprecated deprecated since version 2.0, Use withItems() instead.
     *
     * @param string $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        return $this->withItems($items);
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
