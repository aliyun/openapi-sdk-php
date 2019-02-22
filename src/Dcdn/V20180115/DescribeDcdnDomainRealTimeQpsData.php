<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDcdnDomainRealTimeQpsData
 *
 * @method string getLocationNameEn()
 * @method string getIspNameEn()
 * @method string getStartTime()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 */
class DescribeDcdnDomainRealTimeQpsData extends RpcRequest
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
    public $action = 'DescribeDcdnDomainRealTimeQpsData';

    /**
     * @var string
     */
    public $serviceCode = 'dcdn';

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
}
