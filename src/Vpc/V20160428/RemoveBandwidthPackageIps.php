<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method array getRemovedIpAddresses()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RemoveBandwidthPackageIps extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param array $removedIpAddresses
     *
     * @return $this
     */
    public function withRemovedIpAddresses(array $removedIpAddresses)
    {
        $this->data['RemovedIpAddresses'] = $removedIpAddresses;
        foreach ($removedIpAddresses as $i => $iValue) {
            $this->options['query']['RemovedIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
