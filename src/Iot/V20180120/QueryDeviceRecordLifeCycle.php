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
     * @deprecated deprecated since version 2.0, Use getDeviceList() instead.
     *
     * @return array
     */
    public function getDeviceLists()
    {
        return $this->getDeviceList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceList() instead.
     *
     * @param array $deviceLists
     *
     * @return $this
     */
    public function setDeviceLists(array $deviceLists)
    {
        return $this->withDeviceList($deviceLists);
    }

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
