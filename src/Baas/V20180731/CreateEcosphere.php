<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrderersCount()
 * @method $this withOrderersCount($value)
 * @method string getConsortiumName()
 * @method $this withConsortiumName($value)
 * @method string getSpecName()
 * @method $this withSpecName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getChannelPolicy()
 * @method $this withChannelPolicy($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method array getOrganization()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOrdererType()
 * @method $this withOrdererType($value)
 * @method string getOrdererDomain()
 * @method $this withOrdererDomain($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getPeersCount()
 * @method $this withPeersCount($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateEcosphere extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Domain'] = $organization[$i]['Domain'];
            $this->options['query']['Organization.' . ($i + 1) . '.Name'] = $organization[$i]['Name'];
            $this->options['query']['Organization.' . ($i + 1) . '.Description'] = $organization[$i]['Description'];
        }

        return $this;
    }
}
