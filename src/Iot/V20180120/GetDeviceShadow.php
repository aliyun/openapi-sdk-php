<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetDeviceShadow
 *
 * @method string getShadowMessage()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class GetDeviceShadow extends RpcRequest
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
    public $action = 'GetDeviceShadow';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $shadowMessage
     *
     * @return $this
     */
    public function withShadowMessage($shadowMessage)
    {
        $this->data['ShadowMessage'] = $shadowMessage;
        $this->options['query']['ShadowMessage'] = $shadowMessage;

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
}
