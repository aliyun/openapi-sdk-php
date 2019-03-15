<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIpv6AddressCount()
 * @method $this withIpv6AddressCount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 * @method array getIpv6Address()
 */
class AssignIpv6Addresses extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
    public function withIpv6Address(array $ipv6Address)
    {
        $this->data['Ipv6Address'] = $ipv6Address;
        foreach ($ipv6Address as $i => $iValue) {
            $this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
