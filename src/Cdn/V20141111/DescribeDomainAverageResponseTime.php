<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainAverageResponseTime
 *
 * @method string getLocationNameEn()
 * @method string getStartTime()
 * @method string getIspNameEn()
 * @method string getDomainType()
 * @method string getOutString()
 * @method string getTimeMerge()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getInterval()
 */
class DescribeDomainAverageResponseTime extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeDomainAverageResponseTime';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withLocationNameEn() instead.
     *
     * @param string $locationNameEn
     *
     * @return $this
     */
    public function setLocationNameEn($locationNameEn)
    {
        return $this->withLocationNameEn($locationNameEn);
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
     * @deprecated deprecated since version 2.0, Use withIspNameEn() instead.
     *
     * @param string $ispNameEn
     *
     * @return $this
     */
    public function setIspNameEn($ispNameEn)
    {
        return $this->withIspNameEn($ispNameEn);
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
     * @deprecated deprecated since version 2.0, Use withDomainType() instead.
     *
     * @param string $domainType
     *
     * @return $this
     */
    public function setDomainType($domainType)
    {
        return $this->withDomainType($domainType);
    }

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
     * @deprecated deprecated since version 2.0, Use withOutString() instead.
     *
     * @param string $outString
     *
     * @return $this
     */
    public function setOutString($outString)
    {
        return $this->withOutString($outString);
    }

    /**
     * @param string $outString
     *
     * @return $this
     */
    public function withOutString($outString)
    {
        $this->data['OutString'] = $outString;
        $this->options['query']['OutString'] = $outString;

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
