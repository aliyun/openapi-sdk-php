<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchCheckDeviceNames
 *
 * @method array getDeviceName()
 * @method string getProductKey()
 */
class BatchCheckDeviceNames extends RpcRequest
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
    public $action = 'BatchCheckDeviceNames';

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
}
