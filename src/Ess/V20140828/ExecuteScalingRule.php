<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api ExecuteScalingRule
 *
 * @method string getResourceOwnerId()
 * @method string getScalingRuleAri()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBreachThreshold()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getMetricValue()
 */
class ExecuteScalingRule extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

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
     * @param string $scalingRuleAri
     *
     * @return $this
     */
    public function withScalingRuleAri($scalingRuleAri)
    {
        $this->data['ScalingRuleAri'] = $scalingRuleAri;
        $this->options['query']['ScalingRuleAri'] = $scalingRuleAri;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $breachThreshold
     *
     * @return $this
     */
    public function withBreachThreshold($breachThreshold)
    {
        $this->data['BreachThreshold'] = $breachThreshold;
        $this->options['query']['BreachThreshold'] = $breachThreshold;

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
     * @param string $metricValue
     *
     * @return $this
     */
    public function withMetricValue($metricValue)
    {
        $this->data['MetricValue'] = $metricValue;
        $this->options['query']['MetricValue'] = $metricValue;

        return $this;
    }
}
