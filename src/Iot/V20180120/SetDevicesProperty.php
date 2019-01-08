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
