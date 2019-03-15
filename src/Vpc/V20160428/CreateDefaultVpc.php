<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEnableDefaultVSwitch()
 * @method $this withEnableDefaultVSwitch($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method array getZoneId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 */
class CreateDefaultVpc extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param array $zoneId
     *
     * @return $this
     */
    public function withZoneId(array $zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        foreach ($zoneId as $i => $iValue) {
            $this->options['query']['ZoneId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
