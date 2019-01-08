<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScdnDomainOriginTrafficData
 *
 * @method string getStartTime()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getInterval()
 */
class DescribeScdnDomainOriginTrafficData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'scdn';

    /**
     * @var string
     */
    public $version = '2017-11-15';

    /**
     * @var string
     */
    public $action = 'DescribeScdnDomainOriginTrafficData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'scdn';

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
