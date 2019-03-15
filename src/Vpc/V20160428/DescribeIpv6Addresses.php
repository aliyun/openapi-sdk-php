<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIpv6InternetBandwidthId()
 * @method $this withIpv6InternetBandwidthId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAssociatedInstanceType()
 * @method $this withAssociatedInstanceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getIpv6AddressId()
 * @method $this withIpv6AddressId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIpv6Address()
 * @method $this withIpv6Address($value)
 * @method string getAssociatedInstanceId()
 * @method $this withAssociatedInstanceId($value)
 */
class DescribeIpv6Addresses extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
