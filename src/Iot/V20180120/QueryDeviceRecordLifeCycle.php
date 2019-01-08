<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDeviceRecordLifeCycle
 *
 * @method array getDeviceList()
 */
class QueryDeviceRecordLifeCycle extends RpcRequest
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
    public $action = 'QueryDeviceRecordLifeCycle';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $deviceList
     *
     * @return $this
     */
    public function withDeviceList(array $deviceList)
    {
        $this->data['DeviceList'] = $deviceList;
        foreach ($deviceList as $i => $iValue) {
            $this->options['query']['DeviceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
