<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateScalingRule
 *
 * @method string getResourceOwnerAccount()
 * @method string getAdjustmentValue()
 * @method string getScalingGroupId()
 * @method string getEstimatedInstanceWarmup()
 * @method string getOwnerAccount()
 * @method string getAdjustmentType()
 * @method string getDisableScaleIn()
 * @method string getOwnerId()
 * @method string getScalingRuleName()
 * @method string getCooldown()
 * @method string getTargetValue()
 * @method string getScalingRuleType()
 * @method string getMetricName()
 */
class CreateScalingRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'CreateScalingRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAdjustmentValue() instead.
     *
     * @param string $adjustmentValue
     *
     * @return $this
     */
    public function setAdjustmentValue($adjustmentValue)
    {
        return $this->withAdjustmentValue($adjustmentValue);
    }

    /**
     * @param string $adjustmentValue
     *
     * @return $this
     */
    public function withAdjustmentValue($adjustmentValue)
    {
        $this->data['AdjustmentValue'] = $adjustmentValue;
        $this->options['query']['AdjustmentValue'] = $adjustmentValue;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEstimatedInstanceWarmup() instead.
     *
     * @param string $estimatedInstanceWarmup
     *
     * @return $this
     */
    public function setEstimatedInstanceWarmup($estimatedInstanceWarmup)
    {
        return $this->withEstimatedInstanceWarmup($estimatedInstanceWarmup);
    }

    /**
     * @param string $estimatedInstanceWarmup
     *
     * @return $this
     */
    public function withEstimatedInstanceWarmup($estimatedInstanceWarmup)
    {
        $this->data['EstimatedInstanceWarmup'] = $estimatedInstanceWarmup;
        $this->options['query']['EstimatedInstanceWarmup'] = $estimatedInstanceWarmup;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAdjustmentType() instead.
     *
     * @param string $adjustmentType
     *
     * @return $this
     */
    public function setAdjustmentType($adjustmentType)
    {
        return $this->withAdjustmentType($adjustmentType);
    }

    /**
     * @param string $adjustmentType
     *
     * @return $this
     */
    public function withAdjustmentType($adjustmentType)
    {
        $this->data['AdjustmentType'] = $adjustmentType;
        $this->options['query']['AdjustmentType'] = $adjustmentType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDisableScaleIn() instead.
     *
     * @param string $disableScaleIn
     *
     * @return $this
     */
    public function setDisableScaleIn($disableScaleIn)
    {
        return $this->withDisableScaleIn($disableScaleIn);
    }

    /**
     * @param string $disableScaleIn
     *
     * @return $this
     */
    public function withDisableScaleIn($disableScaleIn)
    {
        $this->data['DisableScaleIn'] = $disableScaleIn;
        $this->options['query']['DisableScaleIn'] = $disableScaleIn;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName() instead.
     *
     * @param string $scalingRuleName
     *
     * @return $this
     */
    public function setScalingRuleName($scalingRuleName)
    {
        return $this->withScalingRuleName($scalingRuleName);
    }

    /**
     * @param string $scalingRuleName
     *
     * @return $this
     */
    public function withScalingRuleName($scalingRuleName)
    {
        $this->data['ScalingRuleName'] = $scalingRuleName;
        $this->options['query']['ScalingRuleName'] = $scalingRuleName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCooldown() instead.
     *
     * @param string $cooldown
     *
     * @return $this
     */
    public function setCooldown($cooldown)
    {
        return $this->withCooldown($cooldown);
    }

    /**
     * @param string $cooldown
     *
     * @return $this
     */
    public function withCooldown($cooldown)
    {
        $this->data['Cooldown'] = $cooldown;
        $this->options['query']['Cooldown'] = $cooldown;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetValue() instead.
     *
     * @param string $targetValue
     *
     * @return $this
     */
    public function setTargetValue($targetValue)
    {
        return $this->withTargetValue($targetValue);
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function withTargetValue($targetValue)
    {
        $this->data['TargetValue'] = $targetValue;
        $this->options['query']['TargetValue'] = $targetValue;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleType() instead.
     *
     * @param string $scalingRuleType
     *
     * @return $this
     */
    public function setScalingRuleType($scalingRuleType)
    {
        return $this->withScalingRuleType($scalingRuleType);
    }

    /**
     * @param string $scalingRuleType
     *
     * @return $this
     */
    public function withScalingRuleType($scalingRuleType)
    {
        $this->data['ScalingRuleType'] = $scalingRuleType;
        $this->options['query']['ScalingRuleType'] = $scalingRuleType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMetricName() instead.
     *
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        return $this->withMetricName($metricName);
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function withMetricName($metricName)
    {
        $this->data['MetricName'] = $metricName;
        $this->options['query']['MetricName'] = $metricName;

        return $this;
    }
}
