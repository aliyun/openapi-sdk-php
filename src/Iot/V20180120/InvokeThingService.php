<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InvokeThingService
 *
 * @method string getArgs()
 * @method string getIdentifier()
 * @method string getIotId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class InvokeThingService extends RpcRequest
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
    public $action = 'InvokeThingService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $args
     *
     * @return $this
     */
    public function withArgs($args)
    {
        $this->data['Args'] = $args;
        $this->options['query']['Args'] = $args;

        return $this;
    }

    /**
     * @param string $identifier
     *
     * @return $this
     */
    public function withIdentifier($identifier)
    {
        $this->data['Identifier'] = $identifier;
        $this->options['query']['Identifier'] = $identifier;

        return $this;
    }

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
}
