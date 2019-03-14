<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api DescrebeEventRuleTarget
 *
 * @method string getRuleName()
 */
class DescrebeEventRuleTarget extends Rpc
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
}
