<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAndPublishSpecialContactFlow
 *
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
     * @deprecated deprecated since version 2.0, Use withAgentBotAsrAppKey() instead.
     *
     * @param string $agentBotAsrAppKey
     *
     * @return $this
     */
    public function setAgentBotAsrAppKey($agentBotAsrAppKey)
    {
        return $this->withAgentBotAsrAppKey($agentBotAsrAppKey);
    }

    /**
     * @param string $agentBotAsrAppKey
     *
     * @return $this
     */
    public function withAgentBotAsrAppKey($agentBotAsrAppKey)
    {
        $this->data['AgentBotAsrAppKey'] = $agentBotAsrAppKey;
        $this->options['query']['AgentBotAsrAppKey'] = $agentBotAsrAppKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIvrTemplate() instead.
     *
     * @param string $ivrTemplate
     *
     * @return $this
     */
    public function setIvrTemplate($ivrTemplate)
    {
        return $this->withIvrTemplate($ivrTemplate);
    }

    /**
     * @param string $ivrTemplate
     *
     * @return $this
     */
    public function withIvrTemplate($ivrTemplate)
    {
        $this->data['IvrTemplate'] = $ivrTemplate;
        $this->options['query']['IvrTemplate'] = $ivrTemplate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentBotTtsUserData() instead.
     *
     * @param string $agentBotTtsUserData
     *
     * @return $this
     */
    public function setAgentBotTtsUserData($agentBotTtsUserData)
    {
        return $this->withAgentBotTtsUserData($agentBotTtsUserData);
    }

    /**
     * @param string $agentBotTtsUserData
     *
     * @return $this
     */
    public function withAgentBotTtsUserData($agentBotTtsUserData)
    {
        $this->data['AgentBotTtsUserData'] = $agentBotTtsUserData;
        $this->options['query']['AgentBotTtsUserData'] = $agentBotTtsUserData;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPublishAllMedia() instead.
     *
     * @param string $publishAllMedia
     *
     * @return $this
     */
    public function setPublishAllMedia($publishAllMedia)
    {
        return $this->withPublishAllMedia($publishAllMedia);
    }

    /**
     * @param string $publishAllMedia
     *
     * @return $this
     */
    public function withPublishAllMedia($publishAllMedia)
    {
        $this->data['PublishAllMedia'] = $publishAllMedia;
        $this->options['query']['PublishAllMedia'] = $publishAllMedia;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentBotAsrUserData() instead.
     *
     * @param string $agentBotAsrUserData
     *
     * @return $this
     */
    public function setAgentBotAsrUserData($agentBotAsrUserData)
    {
        return $this->withAgentBotAsrUserData($agentBotAsrUserData);
    }

    /**
     * @param string $agentBotAsrUserData
     *
     * @return $this
     */
    public function withAgentBotAsrUserData($agentBotAsrUserData)
    {
        $this->data['AgentBotAsrUserData'] = $agentBotAsrUserData;
        $this->options['query']['AgentBotAsrUserData'] = $agentBotAsrUserData;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentBotEndPoint() instead.
     *
     * @param string $agentBotEndPoint
     *
     * @return $this
     */
    public function setAgentBotEndPoint($agentBotEndPoint)
    {
        return $this->withAgentBotEndPoint($agentBotEndPoint);
    }

    /**
     * @param string $agentBotEndPoint
     *
     * @return $this
     */
    public function withAgentBotEndPoint($agentBotEndPoint)
    {
        $this->data['AgentBotEndPoint'] = $agentBotEndPoint;
        $this->options['query']['AgentBotEndPoint'] = $agentBotEndPoint;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getNumber() instead.
     *
     * @return array
     */
    public function getNumbers()
    {
        return $this->getNumber();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNumber() instead.
     *
     * @param array $numbers
     *
     * @return $this
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
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIvrContent() instead.
     *
     * @param string $ivrContent
     *
     * @return $this
     */
    public function setIvrContent($ivrContent)
    {
        return $this->withIvrContent($ivrContent);
    }

    /**
     * @param string $ivrContent
     *
     * @return $this
     */
    public function withIvrContent($ivrContent)
    {
        $this->data['IvrContent'] = $ivrContent;
        $this->options['query']['IvrContent'] = $ivrContent;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentBotScenarioId() instead.
     *
     * @param string $agentBotScenarioId
     *
     * @return $this
     */
    public function setAgentBotScenarioId($agentBotScenarioId)
    {
        return $this->withAgentBotScenarioId($agentBotScenarioId);
    }

    /**
     * @param string $agentBotScenarioId
     *
     * @return $this
     */
    public function withAgentBotScenarioId($agentBotScenarioId)
    {
        $this->data['AgentBotScenarioId'] = $agentBotScenarioId;
        $this->options['query']['AgentBotScenarioId'] = $agentBotScenarioId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUseTianGong() instead.
     *
     * @param string $useTianGong
     *
     * @return $this
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
        $this->data['UseTianGong'] = $useTianGong;
        $this->options['query']['UseTianGong'] = $useTianGong;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentBotTtsAppKey() instead.
     *
     * @param string $agentBotTtsAppKey
     *
     * @return $this
     */
    public function setAgentBotTtsAppKey($agentBotTtsAppKey)
    {
        return $this->withAgentBotTtsAppKey($agentBotTtsAppKey);
    }

    /**
     * @param string $agentBotTtsAppKey
     *
     * @return $this
     */
    public function withAgentBotTtsAppKey($agentBotTtsAppKey)
    {
        $this->data['AgentBotTtsAppKey'] = $agentBotTtsAppKey;
        $this->options['query']['AgentBotTtsAppKey'] = $agentBotTtsAppKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withContactFlowName() instead.
     *
     * @param string $contactFlowName
     *
     * @return $this
     */
    public function setContactFlowName($contactFlowName)
    {
        return $this->withContactFlowName($contactFlowName);
    }

    /**
     * @param string $contactFlowName
     *
     * @return $this
     */
    public function withContactFlowName($contactFlowName)
    {
        $this->data['ContactFlowName'] = $contactFlowName;
        $this->options['query']['ContactFlowName'] = $contactFlowName;

        return $this;
    }
}
