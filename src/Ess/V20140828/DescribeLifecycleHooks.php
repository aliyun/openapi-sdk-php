<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeLifecycleHooks extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param array $lifecycleHookId
     *
     * @return $this
     */
    public function withLifecycleHookId(array $lifecycleHookId)
    {
        $this->data['LifecycleHookId'] = $lifecycleHookId;
        foreach ($lifecycleHookId as $i => $iValue) {
            $this->options['query']['LifecycleHookId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
