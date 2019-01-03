<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerQueryInstanceCreatedByProduct
 *
 * @method string getResourceOwnerId()
 * @method array getPrivateIpAddresses()
 * @method array getAliUids()
 * @method array getInstanceTypes()
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method string getOperator()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getPublicIpAddresses()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getToken()
 * @method string getVSwitchId()
 */
class InnerQueryInstanceCreatedByProduct extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerQueryInstanceCreatedByProduct';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPrivateIpAddresses() instead.
     *
     * @return array
     */
    public function getPrivateIpAddressess()
    {
        return $this->getPrivateIpAddresses();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateIpAddresses() instead.
     *
     * @param array $privateIpAddressess
     *
     * @return $this
     */
    public function setPrivateIpAddressess(array $privateIpAddressess)
    {
        return $this->withPrivateIpAddresses($privateIpAddressess);
    }

    /**
     * @param array $privateIpAddresses
     *
     * @return $this
     */
    public function withPrivateIpAddresses(array $privateIpAddresses)
    {
        $this->data['PrivateIpAddresses'] = $privateIpAddresses;
        foreach ($privateIpAddresses as $i => $iValue) {
            $this->options['query']['PrivateIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getAliUids() instead.
     *
     * @return array
     */
    public function getAliUidss()
    {
        return $this->getAliUids();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAliUids() instead.
     *
     * @param array $aliUidss
     *
     * @return $this
     */
    public function setAliUidss(array $aliUidss)
    {
        return $this->withAliUids($aliUidss);
    }

    /**
     * @param array $aliUids
     *
     * @return $this
     */
    public function withAliUids(array $aliUids)
    {
        $this->data['AliUids'] = $aliUids;
        foreach ($aliUids as $i => $iValue) {
            $this->options['query']['AliUids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getInstanceTypes() instead.
     *
     * @return array
     */
    public function getInstanceTypess()
    {
        return $this->getInstanceTypes();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceTypes() instead.
     *
     * @param array $instanceTypess
     *
     * @return $this
     */
    public function setInstanceTypess(array $instanceTypess)
    {
        return $this->withInstanceTypes($instanceTypess);
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
    public function withInstanceTypes(array $instanceTypes)
    {
        $this->data['InstanceTypes'] = $instanceTypes;
        foreach ($instanceTypes as $i => $iValue) {
            $this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        return $this->withChannel($channel);
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['channel'] = $channel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityGroupId() instead.
     *
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        return $this->withSecurityGroupId($securityGroupId);
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId($securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        $this->options['query']['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOperator() instead.
     *
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        return $this->withOperator($operator);
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function withOperator($operator)
    {
        $this->data['Operator'] = $operator;
        $this->options['query']['operator'] = $operator;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPublicIpAddresses() instead.
     *
     * @return array
     */
    public function getPublicIpAddressess()
    {
        return $this->getPublicIpAddresses();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPublicIpAddresses() instead.
     *
     * @param array $publicIpAddressess
     *
     * @return $this
     */
    public function setPublicIpAddressess(array $publicIpAddressess)
    {
        return $this->withPublicIpAddresses($publicIpAddressess);
    }

    /**
     * @param array $publicIpAddresses
     *
     * @return $this
     */
    public function withPublicIpAddresses(array $publicIpAddresses)
    {
        $this->data['PublicIpAddresses'] = $publicIpAddresses;
        foreach ($publicIpAddresses as $i => $iValue) {
            $this->options['query']['PublicIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProxyId() instead.
     *
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        return $this->withProxyId($proxyId);
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

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
     * @deprecated deprecated since version 2.0, Use withToken() instead.
     *
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        return $this->withToken($token);
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->options['query']['token'] = $token;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }
}
