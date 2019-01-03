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
     * @deprecated deprecated since version 2.0, Use withCinemaId() instead.
     *
     * @param string $cinemaId
     *
     * @return $this
     */
    public function setCinemaId($cinemaId)
    {
        return $this->withCinemaId($cinemaId);
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
