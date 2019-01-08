<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListRuleActions
 *
 * @method string getRuleId()
 */
class ListRuleActions extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'ListRuleActions';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function withRuleId($ruleId)
    {
        $this->data['RuleId'] = $ruleId;
        $this->options['query']['RuleId'] = $ruleId;

        return $this;
    }
}
