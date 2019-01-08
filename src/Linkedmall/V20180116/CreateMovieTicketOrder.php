<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateMovieTicketOrder
 *
 * @method string getBizId()
 * @method string getBizUid()
 * @method string getOutTradeId()
 * @method string getLockSeatAppKey()
 * @method string getExtJson()
 */
class CreateMovieTicketOrder extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'linkedmall';

    /**
     * @var string
     */
    public $version = '2018-01-16';

    /**
     * @var string
     */
    public $action = 'CreateMovieTicketOrder';

    /**
     * @var string
     */
    public $serviceCode = 'linkedmall';

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
     * @param string $outTradeId
     *
     * @return $this
     */
    public function withOutTradeId($outTradeId)
    {
        $this->data['OutTradeId'] = $outTradeId;
        $this->options['query']['OutTradeId'] = $outTradeId;

        return $this;
    }

    /**
     * @param string $lockSeatAppKey
     *
     * @return $this
     */
    public function withLockSeatAppKey($lockSeatAppKey)
    {
        $this->data['LockSeatAppKey'] = $lockSeatAppKey;
        $this->options['query']['LockSeatAppKey'] = $lockSeatAppKey;

        return $this;
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function withExtJson($extJson)
    {
        $this->data['ExtJson'] = $extJson;
        $this->options['query']['ExtJson'] = $extJson;

        return $this;
    }
}
