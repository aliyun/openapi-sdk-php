<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReserveMovieSeat
 *
 * @method string getBizId()
 * @method string getScheduleId()
 * @method string getSeatIds()
 * @method string getSeatNames()
 * @method string getBizUid()
 * @method string getMobile()
 * @method string getExtJson()
 */
class ReserveMovieSeat extends RpcRequest
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
    public $action = 'ReserveMovieSeat';

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
