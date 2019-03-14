<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDomainBpsData
 *
 * @method string getDomainType()
 * @method string getFixTimeGap()
 * @method string getSecurityToken()
 * @method string getTimeMerge()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getInterval()
 * @method string getLocationNameEn()
 * @method string getStartTime()
 * @method string getIspNameEn()
 * @method string getOwnerId()
 */
class DescribeDomainBpsData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

    /**
     * @param string $domainType
     *
     * @return $this
     */
    public function withDomainType($domainType)
    {
        $this->data['DomainType'] = $domainType;
        $this->options['query']['DomainType'] = $domainType;

        return $this;
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
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
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

    /**
     * @param string $locationNameEn
     *
     * @return $this
     */
    public function withLocationNameEn($locationNameEn)
    {
        $this->data['LocationNameEn'] = $locationNameEn;
        $this->options['query']['LocationNameEn'] = $locationNameEn;

        return $this;
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
     * @param string $ispNameEn
     *
     * @return $this
     */
    public function withIspNameEn($ispNameEn)
    {
        $this->data['IspNameEn'] = $ispNameEn;
        $this->options['query']['IspNameEn'] = $ispNameEn;

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
}
