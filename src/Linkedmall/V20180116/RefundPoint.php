<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api RefundPoint
 *
 * @method string getReason()
 * @method string getSellerId()
 * @method string getLmOrderId()
 * @method string getBizId()
 */
class RefundPoint extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['Reason'] = $reason;

        return $this;
    }

    /**
     * @param string $sellerId
     *
     * @return $this
     */
    public function withSellerId($sellerId)
    {
        $this->data['SellerId'] = $sellerId;
        $this->options['query']['SellerId'] = $sellerId;

        return $this;
    }

    /**
     * @param string $lmOrderId
     *
     * @return $this
     */
    public function withLmOrderId($lmOrderId)
    {
        $this->data['LmOrderId'] = $lmOrderId;
        $this->options['query']['LmOrderId'] = $lmOrderId;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function withBizId($bizId)
    {
        $this->data['BizId'] = $bizId;
        $this->options['query']['BizId'] = $bizId;

        return $this;
    }
}
