<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method array getLoadBalancer()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachLoadBalancers extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param array $loadBalancer
     *
     * @return $this
     */
    public function withLoadBalancer(array $loadBalancer)
    {
        $this->data['LoadBalancer'] = $loadBalancer;
        foreach ($loadBalancer as $i => $iValue) {
            $this->options['query']['LoadBalancer.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
