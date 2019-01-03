<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchUpdateScdnDomain
 *
 * @method string getTopLevelDomain()
 * @method string getResourceGroupId()
 * @method string getSources()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class BatchUpdateScdnDomain extends RpcRequest
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
    public $action = 'BatchUpdateScdnDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'scdn';

    /**
     * @deprecated deprecated since version 2.0, Use withTopLevelDomain() instead.
     *
     * @param string $topLevelDomain
     *
     * @return $this
     */
    public function setTopLevelDomain($topLevelDomain)
    {
        return $this->withTopLevelDomain($topLevelDomain);
    }

    /**
     * @param string $topLevelDomain
     *
     * @return $this
     */
    public function withTopLevelDomain($topLevelDomain)
    {
        $this->data['TopLevelDomain'] = $topLevelDomain;
        $this->options['query']['TopLevelDomain'] = $topLevelDomain;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSources() instead.
     *
     * @param string $sources
     *
     * @return $this
     */
    public function setSources($sources)
    {
        return $this->withSources($sources);
    }

    /**
     * @param string $sources
     *
     * @return $this
     */
    public function withSources($sources)
    {
        $this->data['Sources'] = $sources;
        $this->options['query']['Sources'] = $sources;

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
}
