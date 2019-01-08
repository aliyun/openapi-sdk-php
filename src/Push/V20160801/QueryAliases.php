<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAliases
 *
 * @method string getAppKey()
 * @method string getDeviceId()
 */
class QueryAliases extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'QueryAliases';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function withDeviceId($deviceId)
    {
        $this->data['DeviceId'] = $deviceId;
        $this->options['query']['DeviceId'] = $deviceId;

        return $this;
    }
}
