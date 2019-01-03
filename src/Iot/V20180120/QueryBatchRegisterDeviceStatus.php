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
     * @deprecated deprecated since version 2.0, Use withApplyId() instead.
     *
     * @param string $applyId
     *
     * @return $this
     */
    public function setApplyId($applyId)
    {
        return $this->withApplyId($applyId);
    }

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
     * @deprecated deprecated since version 2.0, Use withProductKey() instead.
     *
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        return $this->withProductKey($productKey);
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
