<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DisableEventRule
 *
 * @method array getRuleNames()
 * @method string getRuleName()
 */
class DisableEventRule extends RpcRequest
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
    public $action = 'DisableEventRule';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use getRuleNames() instead.
     *
     * @return array
     */
    public function getRuleNamess()
    {
        return $this->getRuleNames();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRuleNames() instead.
     *
     * @param array $ruleNamess
     *
     * @return $this
     */
    public function setRuleNamess(array $ruleNamess)
    {
        return $this->withRuleNames($ruleNamess);
    }

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
     * @deprecated deprecated since version 2.0, Use withRuleName() instead.
     *
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        return $this->withRuleName($ruleName);
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
