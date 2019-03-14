<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDomainUsageData
 *
 * @method string getStartTime()
 * @method string getDataProtocol()
 * @method string getArea()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getField()
 * @method string getInterval()
 */
class DescribeDomainUsageData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $dataProtocol
     *
     * @return $this
     */
    public function withDataProtocol($dataProtocol)
    {
        $this->data['DataProtocol'] = $dataProtocol;
        $this->options['query']['DataProtocol'] = $dataProtocol;

        return $this;
    }

    /**
     * @param string $area
     *
     * @return $this
     */
    public function withArea($area)
    {
        $this->data['Area'] = $area;
        $this->options['query']['Area'] = $area;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $field
     *
     * @return $this
     */
    public function withField($field)
    {
        $this->data['Field'] = $field;
        $this->options['query']['Field'] = $field;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }
}
