<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api QueryBatchRegisterDeviceStatus
 *
 * @method string getApplyId()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 */
class QueryBatchRegisterDeviceStatus extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param string $applyId
     *
     * @return $this
     */
    public function withApplyId($applyId)
    {
        $this->data['ApplyId'] = $applyId;
        $this->options['query']['ApplyId'] = $applyId;

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
