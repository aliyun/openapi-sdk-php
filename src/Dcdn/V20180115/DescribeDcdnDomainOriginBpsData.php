<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDcdnDomainOriginBpsData
 *
 * @method string getStartTime()
 * @method string getFixTimeGap()
 * @method string getTimeMerge()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getInterval()
 */
class DescribeDcdnDomainOriginBpsData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dcdn';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'DescribeDcdnDomainOriginBpsData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dcdn';

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

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
     * @deprecated deprecated since version 2.0, Use withFixTimeGap() instead.
     *
     * @param string $fixTimeGap
     *
     * @return $this
     */
    public function setFixTimeGap($fixTimeGap)
    {
        return $this->withFixTimeGap($fixTimeGap);
    }

    /**
     * @param string $fixTimeGap
     *
     * @return $this
     */
    public function withFixTimeGap($fixTimeGap)
    {
        $this->data['FixTimeGap'] = $fixTimeGap;
        $this->options['query']['FixTimeGap'] = $fixTimeGap;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeMerge() instead.
     *
     * @param string $timeMerge
     *
     * @return $this
     */
    public function setTimeMerge($timeMerge)
    {
        return $this->withTimeMerge($timeMerge);
    }

    /**
     * @param string $timeMerge
     *
     * @return $this
     */
    public function withTimeMerge($timeMerge)
    {
        $this->data['TimeMerge'] = $timeMerge;
        $this->options['query']['TimeMerge'] = $timeMerge;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
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
