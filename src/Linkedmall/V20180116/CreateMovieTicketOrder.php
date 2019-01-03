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
     * @deprecated deprecated since version 2.0, Use withBizId() instead.
     *
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        return $this->withBizId($bizId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withBizUid() instead.
     *
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        return $this->withBizUid($bizUid);
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
     * @deprecated deprecated since version 2.0, Use withOutTradeId() instead.
     *
     * @param string $outTradeId
     *
     * @return $this
     */
    public function setOutTradeId($outTradeId)
    {
        return $this->withOutTradeId($outTradeId);
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
     * @deprecated deprecated since version 2.0, Use withLockSeatAppKey() instead.
     *
     * @param string $lockSeatAppKey
     *
     * @return $this
     */
    public function setLockSeatAppKey($lockSeatAppKey)
    {
        return $this->withLockSeatAppKey($lockSeatAppKey);
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
     * @deprecated deprecated since version 2.0, Use withExtJson() instead.
     *
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        return $this->withExtJson($extJson);
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
