<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainBpsDataByTimeStamp
 *
 * @method string getIspNames()
 * @method string getSecurityToken()
 * @method string getLocationNames()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getTimePoint()
 */
class DescribeDomainBpsDataByTimeStamp extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DescribeDomainBpsDataByTimeStamp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIspNames() instead.
     *
     * @param string $ispNames
     *
     * @return $this
     */
    public function setIspNames($ispNames)
    {
        return $this->withIspNames($ispNames);
    }

    /**
     * @param string $ispNames
     *
     * @return $this
     */
    public function withIspNames($ispNames)
    {
        $this->data['IspNames'] = $ispNames;
        $this->options['query']['IspNames'] = $ispNames;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withLocationNames() instead.
     *
     * @param string $locationNames
     *
     * @return $this
     */
    public function setLocationNames($locationNames)
    {
        return $this->withLocationNames($locationNames);
    }

    /**
     * @param string $locationNames
     *
     * @return $this
     */
    public function withLocationNames($locationNames)
    {
        $this->data['LocationNames'] = $locationNames;
        $this->options['query']['LocationNames'] = $locationNames;

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
     * @deprecated deprecated since version 2.0, Use withTimePoint() instead.
     *
     * @param string $timePoint
     *
     * @return $this
     */
    public function setTimePoint($timePoint)
    {
        return $this->withTimePoint($timePoint);
    }

    /**
     * @param string $timePoint
     *
     * @return $this
     */
    public function withTimePoint($timePoint)
    {
        $this->data['TimePoint'] = $timePoint;
        $this->options['query']['TimePoint'] = $timePoint;

        return $this;
    }
}
