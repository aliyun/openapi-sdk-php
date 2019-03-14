<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api CheckDevices
 *
 * @method string getDeviceIds()
 * @method string getAppKey()
 */
class CheckDevices extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $deviceIds
     *
     * @return $this
     */
    public function withDeviceIds($deviceIds)
    {
        $this->data['DeviceIds'] = $deviceIds;
        $this->options['query']['DeviceIds'] = $deviceIds;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }
}
