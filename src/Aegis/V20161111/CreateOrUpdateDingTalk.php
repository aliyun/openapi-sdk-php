<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateOrUpdateDingTalk
 *
 * @method string getRuleActionName()
 * @method string getSourceIp()
 * @method string getSendUrl()
 * @method string getId()
 * @method string getIntervalTime()
 */
class CreateOrUpdateDingTalk extends Rpc
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

    /**
     * @param string $sendUrl
     *
     * @return $this
     */
    public function withSendUrl($sendUrl)
    {
        $this->data['SendUrl'] = $sendUrl;
        $this->options['query']['SendUrl'] = $sendUrl;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @param string $intervalTime
     *
     * @return $this
     */
    public function withIntervalTime($intervalTime)
    {
        $this->data['IntervalTime'] = $intervalTime;
        $this->options['query']['IntervalTime'] = $intervalTime;

        return $this;
    }
}
