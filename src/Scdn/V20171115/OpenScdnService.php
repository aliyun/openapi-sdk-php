<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OpenScdnService
 *
 * @method string getEndDate()
 * @method string getSecurityToken()
 * @method string getBandwidth()
 * @method string getDomainCount()
 * @method string getOwnerId()
 * @method string getProtectType()
 * @method string getStartDate()
 * @method string getElasticProtection()
 * @method string getDDoSBasic()
 * @method string getCcProtection()
 */
class OpenScdnService extends RpcRequest
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
    public $action = 'OpenScdnService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'scdn';

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function withEndDate($endDate)
    {
        $this->data['EndDate'] = $endDate;
        $this->options['query']['EndDate'] = $endDate;

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
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @param string $domainCount
     *
     * @return $this
     */
    public function withDomainCount($domainCount)
    {
        $this->data['DomainCount'] = $domainCount;
        $this->options['query']['DomainCount'] = $domainCount;

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
     * @param string $protectType
     *
     * @return $this
     */
    public function withProtectType($protectType)
    {
        $this->data['ProtectType'] = $protectType;
        $this->options['query']['ProtectType'] = $protectType;

        return $this;
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function withStartDate($startDate)
    {
        $this->data['StartDate'] = $startDate;
        $this->options['query']['StartDate'] = $startDate;

        return $this;
    }

    /**
     * @param string $elasticProtection
     *
     * @return $this
     */
    public function withElasticProtection($elasticProtection)
    {
        $this->data['ElasticProtection'] = $elasticProtection;
        $this->options['query']['ElasticProtection'] = $elasticProtection;

        return $this;
    }

    /**
     * @param string $dDoSBasic
     *
     * @return $this
     */
    public function withDDoSBasic($dDoSBasic)
    {
        $this->data['DDoSBasic'] = $dDoSBasic;
        $this->options['query']['DDoSBasic'] = $dDoSBasic;

        return $this;
    }

    /**
     * @param string $ccProtection
     *
     * @return $this
     */
    public function withCcProtection($ccProtection)
    {
        $this->data['CcProtection'] = $ccProtection;
        $this->options['query']['CcProtection'] = $ccProtection;

        return $this;
    }
}
