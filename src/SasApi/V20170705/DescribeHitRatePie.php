<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeHitRatePie
 *
 * @method string getEndDate()
 * @method string getSourceIp()
 * @method string getStartDate()
 * @method string getHitDay()
 * @method string getApiType()
 */
class DescribeHitRatePie extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sas-api';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'DescribeHitRatePie';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withEndDate() instead.
     *
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        return $this->withEndDate($endDate);
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function withEndDate($endDate)
    {
        $this->data['EndDate'] = $endDate;
        $this->options['query']['EndDate'] = $endDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartDate() instead.
     *
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        return $this->withStartDate($startDate);
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function withStartDate($startDate)
    {
        $this->data['StartDate'] = $startDate;
        $this->options['query']['StartDate'] = $startDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHitDay() instead.
     *
     * @param string $hitDay
     *
     * @return $this
     */
    public function setHitDay($hitDay)
    {
        return $this->withHitDay($hitDay);
    }

    /**
     * @param string $hitDay
     *
     * @return $this
     */
    public function withHitDay($hitDay)
    {
        $this->data['HitDay'] = $hitDay;
        $this->options['query']['HitDay'] = $hitDay;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withApiType() instead.
     *
     * @param string $apiType
     *
     * @return $this
     */
    public function setApiType($apiType)
    {
        return $this->withApiType($apiType);
    }

    /**
     * @param string $apiType
     *
     * @return $this
     */
    public function withApiType($apiType)
    {
        $this->data['ApiType'] = $apiType;
        $this->options['query']['ApiType'] = $apiType;

        return $this;
    }
}
