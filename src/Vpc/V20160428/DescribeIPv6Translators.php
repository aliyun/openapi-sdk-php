<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAllocateIpv6Addr()
 * @method $this withAllocateIpv6Addr($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAllocateIpv4Addr()
 * @method $this withAllocateIpv4Addr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIpv6TranslatorId()
 * @method $this withIpv6TranslatorId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeIPv6Translators extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
