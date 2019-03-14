<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api QueryMovieSeats
 *
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getScheduleId()
 */
class QueryMovieSeats extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

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
