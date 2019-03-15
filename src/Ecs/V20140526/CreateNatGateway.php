<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getBandwidthPackage()
 */
class CreateNatGateway extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $bandwidthPackage
     *
     * @return $this
     */
    public function withBandwidthPackage(array $bandwidthPackage)
    {
        $this->data['BandwidthPackage'] = $bandwidthPackage;
        foreach ($bandwidthPackage as $i => $iValue) {
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.Bandwidth'] = $bandwidthPackage[$i]['Bandwidth'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.Zone'] = $bandwidthPackage[$i]['Zone'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.IpCount'] = $bandwidthPackage[$i]['IpCount'];
        }

        return $this;
    }
}
