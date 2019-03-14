<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api SetFileCacheExpiredConfig
 *
 * @method string getDomainName()
 * @method string getCacheContent()
 * @method string getOwnerId()
 * @method string getTTL()
 * @method string getConfigId()
 */
class SetFileCacheExpiredConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

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

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }
}
