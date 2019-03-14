<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDingTalk
 *
 * @method string getRuleActionName()
 * @method string getSourceIp()
 */
class DescribeDingTalk extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $ruleActionName
     *
     * @return $this
     */
    public function withRuleActionName($ruleActionName)
    {
        $this->data['RuleActionName'] = $ruleActionName;
        $this->options['query']['RuleActionName'] = $ruleActionName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }
}
