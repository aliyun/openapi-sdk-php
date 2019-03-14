<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api DescribeHitRateColumn
 *
 * @method string getEndDate()
 * @method string getSourceIp()
 * @method string getHitDay()
 * @method string getStartDate()
 * @method string getApiType()
 */
class DescribeHitRateColumn extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';

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
