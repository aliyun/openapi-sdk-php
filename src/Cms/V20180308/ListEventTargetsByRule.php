<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListEventTargetsByRule
 *
 * @method string getRuleName()
 */
class ListEventTargetsByRule extends RpcRequest
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
    public $action = 'ListEventTargetsByRule';

    /**
     * @var string
     */
    public $method = 'POST';

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
