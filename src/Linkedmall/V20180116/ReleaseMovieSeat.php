<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReleaseMovieSeat
 *
 * @method string getBizId()
 * @method string getLockSeatApplyKey()
 * @method string getBizUid()
 * @method string getExtJson()
 */
class ReleaseMovieSeat extends RpcRequest
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
    public $action = 'ReleaseMovieSeat';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $lockSeatApplyKey
     *
     * @return $this
     */
    public function withLockSeatApplyKey($lockSeatApplyKey)
    {
        $this->data['LockSeatApplyKey'] = $lockSeatApplyKey;
        $this->options['query']['LockSeatApplyKey'] = $lockSeatApplyKey;

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
