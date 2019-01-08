<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ActiveDevice
 *
 * @method array getIotIdList()
 */
class ActiveDevice extends RpcRequest
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
    public $action = 'ActiveDevice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $iotIdList
     *
     * @return $this
     */
    public function withIotIdList(array $iotIdList)
    {
        $this->data['IotIdList'] = $iotIdList;
        foreach ($iotIdList as $i => $iValue) {
            $this->options['query']['IotIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
