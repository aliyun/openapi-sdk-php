<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryBatchRegisterDeviceStatus
 *
 * @method string getApplyId()
 * @method string getProductKey()
 */
class QueryBatchRegisterDeviceStatus extends RpcRequest
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
    public $action = 'QueryBatchRegisterDeviceStatus';

    /**
     * @var string
     */
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
