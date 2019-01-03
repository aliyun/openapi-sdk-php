<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyIPv6TranslatorEntry
 *
 * @method string getBackendIpv4Port()
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getIpv6TranslatorEntryId()
 * @method string getResourceOwnerAccount()
 * @method string getEntryName()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getAclStatus()
 * @method string getEntryBandwidth()
 * @method string getAclType()
 * @method string getAllocateIpv6Port()
 * @method string getEntryDescription()
 * @method string getBackendIpv4Addr()
 * @method string getTransProtocol()
 */
class ModifyIPv6TranslatorEntry extends RpcRequest
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
    public $action = 'ModifyIPv6TranslatorEntry';

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
     * @deprecated deprecated since version 2.0, Use withEntryBandwidth() instead.
     *
     * @param string $entryBandwidth
     *
     * @return $this
     */
    public function setEntryBandwidth($entryBandwidth)
    {
        return $this->withEntryBandwidth($entryBandwidth);
    }

    /**
     * @param string $entryBandwidth
     *
     * @return $this
     */
    public function withEntryBandwidth($entryBandwidth)
    {
        $this->data['EntryBandwidth'] = $entryBandwidth;
        $this->options['query']['EntryBandwidth'] = $entryBandwidth;

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
     * @deprecated deprecated since version 2.0, Use withEntryDescription() instead.
     *
     * @param string $entryDescription
     *
     * @return $this
     */
    public function setEntryDescription($entryDescription)
    {
        return $this->withEntryDescription($entryDescription);
    }

    /**
     * @param string $entryDescription
     *
     * @return $this
     */
    public function withEntryDescription($entryDescription)
    {
        $this->data['EntryDescription'] = $entryDescription;
        $this->options['query']['EntryDescription'] = $entryDescription;

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
}
