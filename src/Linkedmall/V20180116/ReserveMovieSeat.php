<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api ReserveMovieSeat
 *
 * @method string getSeatIds()
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getMobile()
 * @method string getSeatNames()
 * @method string getScheduleId()
 */
class ReserveMovieSeat extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param string $seatIds
     *
     * @return $this
     */
    public function withSeatIds($seatIds)
    {
        $this->data['SeatIds'] = $seatIds;
        $this->options['query']['SeatIds'] = $seatIds;

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
     * @param string $mobile
     *
     * @return $this
     */
    public function withMobile($mobile)
    {
        $this->data['Mobile'] = $mobile;
        $this->options['query']['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @param string $seatNames
     *
     * @return $this
     */
    public function withSeatNames($seatNames)
    {
        $this->data['SeatNames'] = $seatNames;
        $this->options['query']['SeatNames'] = $seatNames;

        return $this;
    }

    /**
     * @param string $scheduleId
     *
     * @return $this
     */
    public function withScheduleId($scheduleId)
    {
        $this->data['ScheduleId'] = $scheduleId;
        $this->options['query']['ScheduleId'] = $scheduleId;

        return $this;
    }
}
