<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api QueryLogistics
 *
 * @method string getLmOrderId()
 * @method string getBizUid()
 * @method string getBizId()
 */
class QueryLogistics extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
     * @param string $bizUid
     *
     * @return $this
     */
    public function withBizUid($bizUid)
    {
        $this->data['BizUid'] = $bizUid;
        $this->options['query']['BizUid'] = $bizUid;

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
