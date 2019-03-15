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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEntryName()
 * @method $this withEntryName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getEntryBandwidth()
 * @method $this withEntryBandwidth($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getAllocateIpv6Port()
 * @method $this withAllocateIpv6Port($value)
 * @method string getEntryDescription()
 * @method $this withEntryDescription($value)
 * @method string getBackendIpv4Addr()
 * @method $this withBackendIpv4Addr($value)
 * @method string getTransProtocol()
 * @method $this withTransProtocol($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 */
class CreateIPv6TranslatorEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
