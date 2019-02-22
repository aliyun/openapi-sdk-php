<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddDcdnIpaDomain
 *
 * @method string getTopLevelDomain()
 * @method string getResourceGroupId()
 * @method string getSources()
 * @method string getSecurityToken()
 * @method string getOwnerAccount()
 * @method string getScope()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getCheckUrl()
 */
class AddDcdnIpaDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dcdn';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'AddDcdnIpaDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dcdn';

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
