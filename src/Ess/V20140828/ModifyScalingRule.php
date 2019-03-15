<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getEstimatedInstanceWarmup()
 * @method $this withEstimatedInstanceWarmup($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPredictiveTaskBufferTime()
 * @method $this withPredictiveTaskBufferTime($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getDisableScaleIn()
 * @method $this withDisableScaleIn($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getInitialMaxSize()
 * @method $this withInitialMaxSize($value)
 * @method string getPredictiveValueBuffer()
 * @method $this withPredictiveValueBuffer($value)
 * @method string getScalingRuleName()
 * @method $this withScalingRuleName($value)
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getMinAdjustmentMagnitude()
 * @method $this withMinAdjustmentMagnitude($value)
 * @method string getPredictiveValueBehavior()
 * @method $this withPredictiveValueBehavior($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getPredictiveScalingMode()
 * @method $this withPredictiveScalingMode($value)
 */
class ModifyScalingRule extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
