<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMovieSchedules
 *
 * @method string getBizId()
 * @method string getCinemaId()
 * @method string getExtJson()
 */
class QueryMovieSchedules extends RpcRequest
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
    public $action = 'QueryMovieSchedules';

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
}
