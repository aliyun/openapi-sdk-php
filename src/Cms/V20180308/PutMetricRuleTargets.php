<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api PutMetricRuleTargets
 *
 * @method string getRuleName()
 * @method string getActions()
 * @method array getTargets()
 */
class PutMetricRuleTargets extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'PUT';

    public $serviceCode = 'cms';

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

    /**
     * @param string $actions
     *
     * @return $this
     */
    public function withActions($actions)
    {
        $this->data['Actions'] = $actions;
        $this->options['query']['Actions'] = $actions;

        return $this;
    }

    /**
     * @param array $targets
     *
     * @return $this
     */
    public function withTargets(array $targets)
    {
        $this->data['Targets'] = $targets;
        foreach ($targets as $i => $iValue) {
            $this->options['query']['Targets.' . ($i + 1) . '.Level'] = $targets[$i]['Level'];
            $this->options['query']['Targets.' . ($i + 1) . '.Id'] = $targets[$i]['Id'];
            $this->options['query']['Targets.' . ($i + 1) . '.Arn'] = $targets[$i]['Arn'];
        }

        return $this;
    }
}
