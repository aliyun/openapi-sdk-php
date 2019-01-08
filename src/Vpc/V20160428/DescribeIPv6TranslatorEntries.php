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
