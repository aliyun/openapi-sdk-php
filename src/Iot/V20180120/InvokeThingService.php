<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api InvokeThingService
 *
 * @method string getArgs()
 * @method string getIdentifier()
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class InvokeThingService extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

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
