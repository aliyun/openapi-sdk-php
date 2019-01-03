<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeIPv6TranslatorEntries
 *
 * @method string getBackendIpv4Port()
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getIpv6TranslatorEntryId()
 * @method string getResourceOwnerAccount()
 * @method string getEntryName()
 * @method string getAllocateIpv6Addr()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getAclStatus()
 * @method string getPageNumber()
 * @method string getAclType()
 * @method string getAllocateIpv6Port()
 * @method string getPageSize()
 * @method string getBackendIpv4Addr()
 * @method string getTransProtocol()
 * @method string getIpv6TranslatorId()
 */
class DescribeIPv6TranslatorEntries extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'DescribeIPv6TranslatorEntries';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withBackendIpv4Port() instead.
     *
     * @param string $backendIpv4Port
     *
     * @return $this
     */
    public function setBackendIpv4Port($backendIpv4Port)
    {
        return $this->withBackendIpv4Port($backendIpv4Port);
    }

    /**
     * @param string $backendIpv4Port
     *
     * @return $this
     */
    public function withBackendIpv4Port($backendIpv4Port)
    {
        $this->data['BackendIpv4Port'] = $backendIpv4Port;
        $this->options['query']['BackendIpv4Port'] = $backendIpv4Port;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAclId() instead.
     *
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        return $this->withAclId($aclId);
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function withAclId($aclId)
    {
        $this->data['AclId'] = $aclId;
        $this->options['query']['AclId'] = $aclId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withIpv6TranslatorEntryId() instead.
     *
     * @param string $ipv6TranslatorEntryId
     *
     * @return $this
     */
    public function setIpv6TranslatorEntryId($ipv6TranslatorEntryId)
    {
        return $this->withIpv6TranslatorEntryId($ipv6TranslatorEntryId);
    }

    /**
     * @param string $ipv6TranslatorEntryId
     *
     * @return $this
     */
    public function withIpv6TranslatorEntryId($ipv6TranslatorEntryId)
    {
        $this->data['Ipv6TranslatorEntryId'] = $ipv6TranslatorEntryId;
        $this->options['query']['Ipv6TranslatorEntryId'] = $ipv6TranslatorEntryId;

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
     * @deprecated deprecated since version 2.0, Use withEntryName() instead.
     *
     * @param string $entryName
     *
     * @return $this
     */
    public function setEntryName($entryName)
    {
        return $this->withEntryName($entryName);
    }

    /**
     * @param string $entryName
     *
     * @return $this
     */
    public function withEntryName($entryName)
    {
        $this->data['EntryName'] = $entryName;
        $this->options['query']['EntryName'] = $entryName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAllocateIpv6Addr() instead.
     *
     * @param string $allocateIpv6Addr
     *
     * @return $this
     */
    public function setAllocateIpv6Addr($allocateIpv6Addr)
    {
        return $this->withAllocateIpv6Addr($allocateIpv6Addr);
    }

    /**
     * @param string $allocateIpv6Addr
     *
     * @return $this
     */
    public function withAllocateIpv6Addr($allocateIpv6Addr)
    {
        $this->data['AllocateIpv6Addr'] = $allocateIpv6Addr;
        $this->options['query']['AllocateIpv6Addr'] = $allocateIpv6Addr;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @deprecated deprecated since version 2.0, Use withAclStatus() instead.
     *
     * @param string $aclStatus
     *
     * @return $this
     */
    public function setAclStatus($aclStatus)
    {
        return $this->withAclStatus($aclStatus);
    }

    /**
     * @param string $aclStatus
     *
     * @return $this
     */
    public function withAclStatus($aclStatus)
    {
        $this->data['AclStatus'] = $aclStatus;
        $this->options['query']['AclStatus'] = $aclStatus;

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
     * @deprecated deprecated since version 2.0, Use withAclType() instead.
     *
     * @param string $aclType
     *
     * @return $this
     */
    public function setAclType($aclType)
    {
        return $this->withAclType($aclType);
    }

    /**
     * @param string $aclType
     *
     * @return $this
     */
    public function withAclType($aclType)
    {
        $this->data['AclType'] = $aclType;
        $this->options['query']['AclType'] = $aclType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAllocateIpv6Port() instead.
     *
     * @param string $allocateIpv6Port
     *
     * @return $this
     */
    public function setAllocateIpv6Port($allocateIpv6Port)
    {
        return $this->withAllocateIpv6Port($allocateIpv6Port);
    }

    /**
     * @param string $allocateIpv6Port
     *
     * @return $this
     */
    public function withAllocateIpv6Port($allocateIpv6Port)
    {
        $this->data['AllocateIpv6Port'] = $allocateIpv6Port;
        $this->options['query']['AllocateIpv6Port'] = $allocateIpv6Port;

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
     * @deprecated deprecated since version 2.0, Use withBackendIpv4Addr() instead.
     *
     * @param string $backendIpv4Addr
     *
     * @return $this
     */
    public function setBackendIpv4Addr($backendIpv4Addr)
    {
        return $this->withBackendIpv4Addr($backendIpv4Addr);
    }

    /**
     * @param string $backendIpv4Addr
     *
     * @return $this
     */
    public function withBackendIpv4Addr($backendIpv4Addr)
    {
        $this->data['BackendIpv4Addr'] = $backendIpv4Addr;
        $this->options['query']['BackendIpv4Addr'] = $backendIpv4Addr;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTransProtocol() instead.
     *
     * @param string $transProtocol
     *
     * @return $this
     */
    public function setTransProtocol($transProtocol)
    {
        return $this->withTransProtocol($transProtocol);
    }

    /**
     * @param string $transProtocol
     *
     * @return $this
     */
    public function withTransProtocol($transProtocol)
    {
        $this->data['TransProtocol'] = $transProtocol;
        $this->options['query']['TransProtocol'] = $transProtocol;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIpv6TranslatorId() instead.
     *
     * @param string $ipv6TranslatorId
     *
     * @return $this
     */
    public function setIpv6TranslatorId($ipv6TranslatorId)
    {
        return $this->withIpv6TranslatorId($ipv6TranslatorId);
    }

    /**
     * @param string $ipv6TranslatorId
     *
     * @return $this
     */
    public function withIpv6TranslatorId($ipv6TranslatorId)
    {
        $this->data['Ipv6TranslatorId'] = $ipv6TranslatorId;
        $this->options['query']['Ipv6TranslatorId'] = $ipv6TranslatorId;

        return $this;
    }
}
