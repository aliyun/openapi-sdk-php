<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyCdnDomain
 *
 * @method string getTopLevelDomain()
 * @method string getSourcePort()
 * @method string getResourceGroupId()
 * @method string getPriorities()
 * @method string getSources()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getSourceType()
 * @method string getOwnerId()
 */
class ModifyCdnDomain extends RpcRequest
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
    public $action = 'ModifyCdnDomain';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withSourcePort() instead.
     *
     * @param string $sourcePort
     *
     * @return $this
     */
    public function setSourcePort($sourcePort)
    {
        return $this->withSourcePort($sourcePort);
    }

    /**
     * @param string $sourcePort
     *
     * @return $this
     */
    public function withSourcePort($sourcePort)
    {
        $this->data['SourcePort'] = $sourcePort;
        $this->options['query']['SourcePort'] = $sourcePort;

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
     * @deprecated deprecated since version 2.0, Use withPriorities() instead.
     *
     * @param string $priorities
     *
     * @return $this
     */
    public function setPriorities($priorities)
    {
        return $this->withPriorities($priorities);
    }

    /**
     * @param string $priorities
     *
     * @return $this
     */
    public function withPriorities($priorities)
    {
        $this->data['Priorities'] = $priorities;
        $this->options['query']['Priorities'] = $priorities;

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
     * @deprecated deprecated since version 2.0, Use withSourceType() instead.
     *
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        return $this->withSourceType($sourceType);
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function withSourceType($sourceType)
    {
        $this->data['SourceType'] = $sourceType;
        $this->options['query']['SourceType'] = $sourceType;

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
