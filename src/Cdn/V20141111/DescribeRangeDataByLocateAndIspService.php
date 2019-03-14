<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeRangeDataByLocateAndIspService
 *
 * @method string getIspNames()
 * @method string getSecurityToken()
 * @method string getDomainNames()
 * @method string getLocationNames()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 */
class DescribeRangeDataByLocateAndIspService extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

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
