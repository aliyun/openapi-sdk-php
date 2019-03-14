<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api ReleaseMovieSeat
 *
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getLockSeatApplyKey()
 */
class ReleaseMovieSeat extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
}
