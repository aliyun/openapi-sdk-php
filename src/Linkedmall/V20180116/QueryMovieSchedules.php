<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * Api QueryMovieSchedules
 *
 * @method string getCinemaId()
 * @method string getExtJson()
 * @method string getBizId()
 */
class QueryMovieSchedules extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';

    /**
     * @param string $cinemaId
     *
     * @return $this
     */
    public function withCinemaId($cinemaId)
    {
        $this->data['CinemaId'] = $cinemaId;
        $this->options['query']['CinemaId'] = $cinemaId;

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
}
