<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTimeMerge()
 * @method string getOwnerAccount()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getLocationNameEn()
 * @method string getStartTime()
 * @method string getIspNameEn()
 * @method string getOwnerId()
 * @method string getInterval()
 */
class DescribeDomainBpsData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'DescribeDomainBpsData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId']             = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount']             = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $timeMerge
     *
     * @return $this
     */
    public function withTimeMerge($timeMerge)
    {
        $this->data['TimeMerge']             = $timeMerge;
        $this->options['query']['TimeMerge'] = $timeMerge;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount']             = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName']             = $domainName;
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
        $this->data['EndTime']             = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $locationNameEn
     *
     * @return $this
     */
    public function withLocationNameEn($locationNameEn)
    {
        $this->data['LocationNameEn']             = $locationNameEn;
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
        $this->data['StartTime']             = $startTime;
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
        $this->data['IspNameEn']             = $ispNameEn;
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
        $this->data['OwnerId']             = $ownerId;
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
        $this->data['Interval']             = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }
}
