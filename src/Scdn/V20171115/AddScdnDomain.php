<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddScdnDomain
 *
 * @method string getResourceGroupId()
 * @method string getSources()
 * @method string getSecurityToken()
 * @method string getOwnerAccount()
 * @method string getScope()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getCheckUrl()
 */
class AddScdnDomain extends RpcRequest
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
    public $action = 'AddScdnDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'scdn';

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
}
