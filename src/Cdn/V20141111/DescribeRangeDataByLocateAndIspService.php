<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRangeDataByLocateAndIspService
 *
 * @method string getIspNames()
 * @method string getSecurityToken()
 * @method string getDomainNames()
 * @method string getLocationNames()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 */
class DescribeRangeDataByLocateAndIspService extends RpcRequest
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
    public $action = 'DescribeRangeDataByLocateAndIspService';

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
     * @deprecated deprecated since version 2.0, Use withDomainNames() instead.
     *
     * @param string $domainNames
     *
     * @return $this
     */
    public function setDomainNames($domainNames)
    {
        return $this->withDomainNames($domainNames);
    }

    /**
     * @param string $domainNames
     *
     * @return $this
     */
    public function withDomainNames($domainNames)
    {
        $this->data['DomainNames'] = $domainNames;
        $this->options['query']['DomainNames'] = $domainNames;

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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setstartTime($startTime)
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
        $this->options['query']['startTime'] = $startTime;

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
}
