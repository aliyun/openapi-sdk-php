<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveDomain
 *
 * @method string getTopLevelDomain()
 * @method string getSecurityToken()
 * @method string getOwnerAccount()
 * @method string getScope()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getCheckUrl()
 * @method string getLiveDomainType()
 */
class AddLiveDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'AddLiveDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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
     * @deprecated deprecated since version 2.0, Use withLiveDomainType() instead.
     *
     * @param string $liveDomainType
     *
     * @return $this
     */
    public function setLiveDomainType($liveDomainType)
    {
        return $this->withLiveDomainType($liveDomainType);
    }

    /**
     * @param string $liveDomainType
     *
     * @return $this
     */
    public function withLiveDomainType($liveDomainType)
    {
        $this->data['LiveDomainType'] = $liveDomainType;
        $this->options['query']['LiveDomainType'] = $liveDomainType;

        return $this;
    }
}
