<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetPathCacheExpiredConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getWeight()
 * @method string getCacheContent()
 * @method string getOwnerId()
 * @method string getTTL()
 */
class SetPathCacheExpiredConfig extends RpcRequest
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
    public $action = 'SetPathCacheExpiredConfig';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $weight
     *
     * @return $this
     */
    public function withWeight($weight)
    {
        $this->data['Weight'] = $weight;
        $this->options['query']['Weight'] = $weight;

        return $this;
    }

    /**
     * @param string $cacheContent
     *
     * @return $this
     */
    public function withCacheContent($cacheContent)
    {
        $this->data['CacheContent'] = $cacheContent;
        $this->options['query']['CacheContent'] = $cacheContent;

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
     * @param string $tTL
     *
     * @return $this
     */
    public function withTTL($tTL)
    {
        $this->data['TTL'] = $tTL;
        $this->options['query']['TTL'] = $tTL;

        return $this;
    }
}
