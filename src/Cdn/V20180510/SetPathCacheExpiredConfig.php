<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getDomainName()
 * @method string getWeight()
 * @method string getCacheContent()
 * @method string getOwnerId()
 * @method string getTTL()
 * @method string getConfigId()
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
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'SetPathCacheExpiredConfig';

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
     * @param string $weight
     *
     * @return $this
     */
    public function withWeight($weight)
    {
        $this->data['Weight']             = $weight;
        $this->options['query']['Weight'] = $weight;

        return $this;
    }

    /**
     * @param string $cacheContent
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withCacheContent() instead.
     *
     */
    public function setCacheContent($cacheContent)
    {
        return $this->withCacheContent($cacheContent);
    }

    /**
     * @param string $cacheContent
     *
     * @return $this
     */
    public function withCacheContent($cacheContent)
    {
        $this->data['CacheContent']             = $cacheContent;
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
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $tTL
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withTTL() instead.
     *
     */
    public function setTTL($tTL)
    {
        return $this->withTTL($tTL);
    }

    /**
     * @param string $tTL
     *
     * @return $this
     */
    public function withTTL($tTL)
    {
        $this->data['TTL']             = $tTL;
        $this->options['query']['TTL'] = $tTL;

        return $this;
    }

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId']             = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }
}
