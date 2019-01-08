<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EnableEventRule
 *
 * @method array getRuleNames()
 * @method string getRuleName()
 */
class EnableEventRule extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'EnableEventRule';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param array $ruleNames
     *
     * @return $this
     */
    public function withRuleNames(array $ruleNames)
    {
        $this->data['RuleNames'] = $ruleNames;
        foreach ($ruleNames as $i => $iValue) {
            $this->options['query']['RuleNames.' . ($i + 1)] = $iValue;
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
