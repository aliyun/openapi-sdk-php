<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRuleAction
 *
 * @method string getConfiguration()
 * @method string getRuleId()
 * @method string getType()
 * @method string getErrorActionFlag()
 */
class CreateRuleAction extends RpcRequest
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
    public $action = 'CreateRuleAction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $configuration
     *
     * @return $this
     */
    public function withConfiguration($configuration)
    {
        $this->data['Configuration'] = $configuration;
        $this->options['query']['Configuration'] = $configuration;

        return $this;
    }

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

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $errorActionFlag
     *
     * @return $this
     */
    public function withErrorActionFlag($errorActionFlag)
    {
        $this->data['ErrorActionFlag'] = $errorActionFlag;
        $this->options['query']['ErrorActionFlag'] = $errorActionFlag;

        return $this;
    }
}
