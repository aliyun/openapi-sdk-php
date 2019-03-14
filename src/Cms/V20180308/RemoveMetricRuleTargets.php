<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api RemoveMetricRuleTargets
 *
 * @method array getContactGroupTargetIds()
 * @method array getTargetIds()
 * @method array getWebhookTargetIds()
 * @method string getRuleName()
 */
class RemoveMetricRuleTargets extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'PUT';

    public $serviceCode = 'cms';

    /**
     * @param array $contactGroupTargetIds
     *
     * @return $this
     */
    public function withContactGroupTargetIds(array $contactGroupTargetIds)
    {
        $this->data['ContactGroupTargetIds'] = $contactGroupTargetIds;
        foreach ($contactGroupTargetIds as $i => $iValue) {
            $this->options['query']['ContactGroupTargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $targetIds
     *
     * @return $this
     */
    public function withTargetIds(array $targetIds)
    {
        $this->data['TargetIds'] = $targetIds;
        foreach ($targetIds as $i => $iValue) {
            $this->options['query']['TargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $webhookTargetIds
     *
     * @return $this
     */
    public function withWebhookTargetIds(array $webhookTargetIds)
    {
        $this->data['WebhookTargetIds'] = $webhookTargetIds;
        foreach ($webhookTargetIds as $i => $iValue) {
            $this->options['query']['WebhookTargetIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function withRuleName($ruleName)
    {
        $this->data['RuleName'] = $ruleName;
        $this->options['query']['RuleName'] = $ruleName;

        return $this;
    }
}
