<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrderersCount()
 * @method $this withOrderersCount($value)
 * @method string getSpecName()
 * @method $this withSpecName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getChannelPolicy()
 * @method $this withChannelPolicy($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method array getOrganization()
 * @method string getName()
 * @method $this withName($value)
 * @method string getOrdererType()
 * @method $this withOrdererType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getPeersCount()
 * @method $this withPeersCount($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateConsortium extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $organization[$i]['Id'];
        }

        return $this;
    }
}
