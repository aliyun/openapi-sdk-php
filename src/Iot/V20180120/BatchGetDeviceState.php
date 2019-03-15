<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method array getIotId()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class BatchGetDeviceState extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param array $iotId
     *
     * @return $this
     */
    public function withIotId(array $iotId)
    {
        $this->data['IotId'] = $iotId;
        foreach ($iotId as $i => $iValue) {
            $this->options['query']['IotId.' . ($i + 1)] = $iValue;
        }

        return $this;
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
}
