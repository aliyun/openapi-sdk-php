<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of IdleService
 *
 * @method string getIotInstanceId()
 */
class IdleService extends RpcRequest
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
    public $action = 'IdleService';

    /**
     * @var string
     */
    public $method = 'POST';

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
}
