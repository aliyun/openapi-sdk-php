<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getDevice()
 */
class BatchAddDeviceGroupRelations extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param array $device
     *
     * @return $this
     */
    public function withDevice(array $device)
    {
        $this->data['Device'] = $device;
        foreach ($device as $i => $iValue) {
            $this->options['query']['Device.' . ($i + 1) . '.DeviceName'] = $device[$i]['DeviceName'];
            $this->options['query']['Device.' . ($i + 1) . '.ProductKey'] = $device[$i]['ProductKey'];
        }

        return $this;
    }
}
