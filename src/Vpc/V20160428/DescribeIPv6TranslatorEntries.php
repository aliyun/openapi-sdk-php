<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getBackendIpv4Port()
 * @method $this withBackendIpv4Port($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6TranslatorEntryId()
 * @method $this withIpv6TranslatorEntryId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getAllocateIpv6Addr()
 * @method $this withAllocateIpv6Addr($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class DescribeIPv6TranslatorEntries extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
