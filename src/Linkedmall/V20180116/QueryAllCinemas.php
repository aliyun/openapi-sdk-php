<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAllCinemas
 *
 * @method string getBizId()
 * @method string getCityCode()
 * @method string getPageNumber()
 * @method string getExtJson()
 */
class QueryAllCinemas extends RpcRequest
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
    public $action = 'QueryAllCinemas';

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
     * @param string $cityCode
     *
     * @return $this
     */
    public function withCityCode($cityCode)
    {
        $this->data['CityCode'] = $cityCode;
        $this->options['query']['CityCode'] = $cityCode;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

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
