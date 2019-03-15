<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getActions()
 * @method $this withActions($value)
 * @method array getTargets()
 */
class PutMetricRuleTargets extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'PUT';

    public $serviceCode = 'cms';

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
