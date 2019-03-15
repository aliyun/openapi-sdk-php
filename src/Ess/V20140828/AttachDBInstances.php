<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getForceAttach()
 * @method $this withForceAttach($value)
 * @method array getDBInstance()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachDBInstances extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param array $dBInstance
     *
     * @return $this
     */
    public function withDBInstance(array $dBInstance)
    {
        $this->data['DBInstance'] = $dBInstance;
        foreach ($dBInstance as $i => $iValue) {
            $this->options['query']['DBInstance.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
