<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PutEventTargets
 *
 * @method array getWebhookParameters()
 * @method array getContactParameters()
 * @method array getFcParameters()
 * @method string getRuleName()
 * @method array getMnsParameters()
 */
class PutEventTargets extends RpcRequest
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
    public $action = 'PutEventTargets';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use getWebhookParameters() instead.
     *
     * @return array
     */
    public function getWebhookParameterss()
    {
        return $this->getWebhookParameters();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWebhookParameters() instead.
     *
     * @param array $webhookParameterss
     *
     * @return $this
     */
    public function setWebhookParameterss(array $webhookParameterss)
    {
        return $this->withWebhookParameters($webhookParameterss);
    }

    /**
     * @param array $webhookParameters
     *
     * @return $this
     */
    public function withWebhookParameters(array $webhookParameters)
    {
        $this->data['WebhookParameters'] = $webhookParameters;
        foreach ($webhookParameters as $i => $iValue) {
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Protocol'] = $webhookParameters[$i]['Protocol'];
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Method'] = $webhookParameters[$i]['Method'];
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Id'] = $webhookParameters[$i]['Id'];
            $this->options['query']['WebhookParameters.' . ($i + 1) . '.Url'] = $webhookParameters[$i]['Url'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getContactParameters() instead.
     *
     * @return array
     */
    public function getContactParameterss()
    {
        return $this->getContactParameters();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContactParameters() instead.
     *
     * @param array $contactParameterss
     *
     * @return $this
     */
    public function setContactParameterss(array $contactParameterss)
    {
        return $this->withContactParameters($contactParameterss);
    }

    /**
     * @param array $contactParameters
     *
     * @return $this
     */
    public function withContactParameters(array $contactParameters)
    {
        $this->data['ContactParameters'] = $contactParameters;
        foreach ($contactParameters as $i => $iValue) {
            $this->options['query']['ContactParameters.' . ($i + 1) . '.Level'] = $contactParameters[$i]['Level'];
            $this->options['query']['ContactParameters.' . ($i + 1) . '.Id'] = $contactParameters[$i]['Id'];
            $this->options['query']['ContactParameters.' . ($i + 1) . '.ContactGroupName'] = $contactParameters[$i]['ContactGroupName'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getFcParameters() instead.
     *
     * @return array
     */
    public function getFcParameterss()
    {
        return $this->getFcParameters();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFcParameters() instead.
     *
     * @param array $fcParameterss
     *
     * @return $this
     */
    public function setFcParameterss(array $fcParameterss)
    {
        return $this->withFcParameters($fcParameterss);
    }

    /**
     * @param array $fcParameters
     *
     * @return $this
     */
    public function withFcParameters(array $fcParameters)
    {
        $this->data['FcParameters'] = $fcParameters;
        foreach ($fcParameters as $i => $iValue) {
            $this->options['query']['FcParameters.' . ($i + 1) . '.FunctionName'] = $fcParameters[$i]['FunctionName'];
            $this->options['query']['FcParameters.' . ($i + 1) . '.ServiceName'] = $fcParameters[$i]['ServiceName'];
            $this->options['query']['FcParameters.' . ($i + 1) . '.Id'] = $fcParameters[$i]['Id'];
            $this->options['query']['FcParameters.' . ($i + 1) . '.Region'] = $fcParameters[$i]['Region'];
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

    /**
     * @deprecated deprecated since version 2.0, Use getMnsParameters() instead.
     *
     * @return array
     */
    public function getMnsParameterss()
    {
        return $this->getMnsParameters();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMnsParameters() instead.
     *
     * @param array $mnsParameterss
     *
     * @return $this
     */
    public function setMnsParameterss(array $mnsParameterss)
    {
        return $this->withMnsParameters($mnsParameterss);
    }

    /**
     * @param array $mnsParameters
     *
     * @return $this
     */
    public function withMnsParameters(array $mnsParameters)
    {
        $this->data['MnsParameters'] = $mnsParameters;
        foreach ($mnsParameters as $i => $iValue) {
            $this->options['query']['MnsParameters.' . ($i + 1) . '.Id'] = $mnsParameters[$i]['Id'];
            $this->options['query']['MnsParameters.' . ($i + 1) . '.Region'] = $mnsParameters[$i]['Region'];
            $this->options['query']['MnsParameters.' . ($i + 1) . '.Queue'] = $mnsParameters[$i]['Queue'];
        }

        return $this;
    }
}
