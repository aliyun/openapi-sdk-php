<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getBandwidthPackage()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateNatGateway extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

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
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.InternetChargeType'] = $bandwidthPackage[$i]['InternetChargeType'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.ISP'] = $bandwidthPackage[$i]['ISP'];
            $this->options['query']['BandwidthPackage.' . ($i + 1) . '.IpCount'] = $bandwidthPackage[$i]['IpCount'];
        }

        return $this;
    }
}
