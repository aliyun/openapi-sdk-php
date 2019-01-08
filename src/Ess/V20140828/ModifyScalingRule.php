<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyScalingRule
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAdjustmentValue()
 * @method string getEstimatedInstanceWarmup()
 * @method string getOwnerAccount()
 * @method string getAdjustmentType()
 * @method string getDisableScaleIn()
 * @method string getOwnerId()
 * @method string getScalingRuleId()
 * @method string getScalingRuleName()
 * @method string getCooldown()
 * @method string getTargetValue()
 * @method string getMetricName()
 */
class ModifyScalingRule extends RpcRequest
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
    public $action = 'ModifyScalingRule';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
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
     * @param string $scalingRuleId
     *
     * @return $this
     */
    public function withScalingRuleId($scalingRuleId)
    {
        $this->data['ScalingRuleId'] = $scalingRuleId;
        $this->options['query']['ScalingRuleId'] = $scalingRuleId;

        return $this;
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
