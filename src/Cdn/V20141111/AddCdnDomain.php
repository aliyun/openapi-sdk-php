<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddCdnDomain
 *
 * @method string getTopLevelDomain()
 * @method string getSources()
 * @method string getOwnerAccount()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getResourceGroupId()
 * @method string getSourcePort()
 * @method string getPriorities()
 * @method string getSecurityToken()
 * @method string getCdnType()
 * @method string getScope()
 * @method string getSourceType()
 * @method string getCheckUrl()
 * @method string getRegion()
 */
class AddCdnDomain extends RpcRequest
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
    public $action = 'AddCdnDomain';

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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @deprecated deprecated since version 2.0, Use withCdnType() instead.
     *
     * @param string $cdnType
     *
     * @return $this
     */
    public function setCdnType($cdnType)
    {
        return $this->withCdnType($cdnType);
    }

    /**
     * @param string $cdnType
     *
     * @return $this
     */
    public function withCdnType($cdnType)
    {
        $this->data['CdnType'] = $cdnType;
        $this->options['query']['CdnType'] = $cdnType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScope() instead.
     *
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        return $this->withScope($scope);
    }

    /**
     * @param string $scope
     *
     * @return $this
     */
    public function withScope($scope)
    {
        $this->data['Scope'] = $scope;
        $this->options['query']['Scope'] = $scope;

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
     * @deprecated deprecated since version 2.0, Use withCheckUrl() instead.
     *
     * @param string $checkUrl
     *
     * @return $this
     */
    public function setCheckUrl($checkUrl)
    {
        return $this->withCheckUrl($checkUrl);
    }

    /**
     * @param string $checkUrl
     *
     * @return $this
     */
    public function withCheckUrl($checkUrl)
    {
        $this->data['CheckUrl'] = $checkUrl;
        $this->options['query']['CheckUrl'] = $checkUrl;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }
}
