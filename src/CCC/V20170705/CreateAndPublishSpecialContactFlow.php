<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getAgentBotAsrAppKey()
 * @method string getIvrTemplate()
 * @method string getAgentBotTtsUserData()
 * @method string getPublishAllMedia()
 * @method string getAgentBotAsrUserData()
 * @method string getAgentBotEndPoint()
 * @method array getNumber()
 * @method string getInstanceId()
 * @method string getIvrContent()
 * @method string getAgentBotScenarioId()
 * @method string getUseTianGong()
 * @method string getAgentBotTtsAppKey()
 * @method string getContactFlowName()
 */
class CreateAndPublishSpecialContactFlow extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'CreateAndPublishSpecialContactFlow';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $agentBotAsrAppKey
     *
     * @return $this
     */
    public function withAgentBotAsrAppKey($agentBotAsrAppKey)
    {
        $this->data['AgentBotAsrAppKey']             = $agentBotAsrAppKey;
        $this->options['query']['AgentBotAsrAppKey'] = $agentBotAsrAppKey;

        return $this;
    }

    /**
     * @param string $ivrTemplate
     *
     * @return $this
     */
    public function withIvrTemplate($ivrTemplate)
    {
        $this->data['IvrTemplate']             = $ivrTemplate;
        $this->options['query']['IvrTemplate'] = $ivrTemplate;

        return $this;
    }

    /**
     * @param string $agentBotTtsUserData
     *
     * @return $this
     */
    public function withAgentBotTtsUserData($agentBotTtsUserData)
    {
        $this->data['AgentBotTtsUserData']             = $agentBotTtsUserData;
        $this->options['query']['AgentBotTtsUserData'] = $agentBotTtsUserData;

        return $this;
    }

    /**
     * @param string $publishAllMedia
     *
     * @return $this
     */
    public function withPublishAllMedia($publishAllMedia)
    {
        $this->data['PublishAllMedia']             = $publishAllMedia;
        $this->options['query']['PublishAllMedia'] = $publishAllMedia;

        return $this;
    }

    /**
     * @param string $agentBotAsrUserData
     *
     * @return $this
     */
    public function withAgentBotAsrUserData($agentBotAsrUserData)
    {
        $this->data['AgentBotAsrUserData']             = $agentBotAsrUserData;
        $this->options['query']['AgentBotAsrUserData'] = $agentBotAsrUserData;

        return $this;
    }

    /**
     * @param string $agentBotEndPoint
     *
     * @return $this
     */
    public function withAgentBotEndPoint($agentBotEndPoint)
    {
        $this->data['AgentBotEndPoint']             = $agentBotEndPoint;
        $this->options['query']['AgentBotEndPoint'] = $agentBotEndPoint;

        return $this;
    }

    /**
     * @return array
     * @deprecated deprecated since version 2.0, Use getNumber() instead.
     *
     */
    public function getNumbers()
    {
        return $this->getNumber();
    }

    /**
     * @param array $numbers
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withNumber() instead.
     *
     */
    public function setNumbers(array $numbers)
    {
        return $this->withNumber($numbers);
    }

    /**
     * @param array $number
     *
     * @return $this
     */
    public function withNumber(array $number)
    {
        $this->data['Number'] = $number;
        foreach ($number as $i => $iValue) {
            $this->options['query']['Number.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId']             = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $ivrContent
     *
     * @return $this
     */
    public function withIvrContent($ivrContent)
    {
        $this->data['IvrContent']             = $ivrContent;
        $this->options['query']['IvrContent'] = $ivrContent;

        return $this;
    }

    /**
     * @param string $agentBotScenarioId
     *
     * @return $this
     */
    public function withAgentBotScenarioId($agentBotScenarioId)
    {
        $this->data['AgentBotScenarioId']             = $agentBotScenarioId;
        $this->options['query']['AgentBotScenarioId'] = $agentBotScenarioId;

        return $this;
    }

    /**
     * @param string $useTianGong
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withUseTianGong() instead.
     *
     */
    public function setUseTianGong($useTianGong)
    {
        return $this->withUseTianGong($useTianGong);
    }

    /**
     * @param string $useTianGong
     *
     * @return $this
     */
    public function withUseTianGong($useTianGong)
    {
        $this->data['UseTianGong']             = $useTianGong;
        $this->options['query']['UseTianGong'] = $useTianGong;

        return $this;
    }

    /**
     * @param string $agentBotTtsAppKey
     *
     * @return $this
     */
    public function withAgentBotTtsAppKey($agentBotTtsAppKey)
    {
        $this->data['AgentBotTtsAppKey']             = $agentBotTtsAppKey;
        $this->options['query']['AgentBotTtsAppKey'] = $agentBotTtsAppKey;

        return $this;
    }

    /**
     * @param string $contactFlowName
     *
     * @return $this
     */
    public function withContactFlowName($contactFlowName)
    {
        $this->data['ContactFlowName']             = $contactFlowName;
        $this->options['query']['ContactFlowName'] = $contactFlowName;

        return $this;
    }
}
