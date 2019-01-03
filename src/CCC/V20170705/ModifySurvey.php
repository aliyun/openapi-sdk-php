<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySurvey
 *
 * @method string getSurveyId()
 * @method string getInstanceId()
 * @method string getRole()
 * @method string getRound()
 * @method string getFlowJson()
 * @method string getName()
 * @method string getGlobalQuestions()
 * @method string getDescription()
 * @method string getCorpora()
 * @method string getSpeechOptimizationParam()
 * @method string getScenarioId()
 * @method string getFlowId()
 */
class ModifySurvey extends RpcRequest
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
    public $action = 'ModifySurvey';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withSurveyId() instead.
     *
     * @param string $surveyId
     *
     * @return $this
     */
    public function setSurveyId($surveyId)
    {
        return $this->withSurveyId($surveyId);
    }

    /**
     * @param string $surveyId
     *
     * @return $this
     */
    public function withSurveyId($surveyId)
    {
        $this->data['SurveyId'] = $surveyId;
        $this->options['query']['SurveyId'] = $surveyId;

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
     * @deprecated deprecated since version 2.0, Use withRole() instead.
     *
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        return $this->withRole($role);
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function withRole($role)
    {
        $this->data['Role'] = $role;
        $this->options['query']['Role'] = $role;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRound() instead.
     *
     * @param string $round
     *
     * @return $this
     */
    public function setRound($round)
    {
        return $this->withRound($round);
    }

    /**
     * @param string $round
     *
     * @return $this
     */
    public function withRound($round)
    {
        $this->data['Round'] = $round;
        $this->options['query']['Round'] = $round;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFlowJson() instead.
     *
     * @param string $flowJson
     *
     * @return $this
     */
    public function setFlowJson($flowJson)
    {
        return $this->withFlowJson($flowJson);
    }

    /**
     * @param string $flowJson
     *
     * @return $this
     */
    public function withFlowJson($flowJson)
    {
        $this->data['FlowJson'] = $flowJson;
        $this->options['query']['FlowJson'] = $flowJson;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGlobalQuestions() instead.
     *
     * @param string $globalQuestions
     *
     * @return $this
     */
    public function setGlobalQuestions($globalQuestions)
    {
        return $this->withGlobalQuestions($globalQuestions);
    }

    /**
     * @param string $globalQuestions
     *
     * @return $this
     */
    public function withGlobalQuestions($globalQuestions)
    {
        $this->data['GlobalQuestions'] = $globalQuestions;
        $this->options['query']['GlobalQuestions'] = $globalQuestions;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCorpora() instead.
     *
     * @param string $corpora
     *
     * @return $this
     */
    public function setCorpora($corpora)
    {
        return $this->withCorpora($corpora);
    }

    /**
     * @param string $corpora
     *
     * @return $this
     */
    public function withCorpora($corpora)
    {
        $this->data['Corpora'] = $corpora;
        $this->options['query']['Corpora'] = $corpora;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSpeechOptimizationParam() instead.
     *
     * @param string $speechOptimizationParam
     *
     * @return $this
     */
    public function setSpeechOptimizationParam($speechOptimizationParam)
    {
        return $this->withSpeechOptimizationParam($speechOptimizationParam);
    }

    /**
     * @param string $speechOptimizationParam
     *
     * @return $this
     */
    public function withSpeechOptimizationParam($speechOptimizationParam)
    {
        $this->data['SpeechOptimizationParam'] = $speechOptimizationParam;
        $this->options['query']['SpeechOptimizationParam'] = $speechOptimizationParam;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScenarioId() instead.
     *
     * @param string $scenarioId
     *
     * @return $this
     */
    public function setScenarioId($scenarioId)
    {
        return $this->withScenarioId($scenarioId);
    }

    /**
     * @param string $scenarioId
     *
     * @return $this
     */
    public function withScenarioId($scenarioId)
    {
        $this->data['ScenarioId'] = $scenarioId;
        $this->options['query']['ScenarioId'] = $scenarioId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFlowId() instead.
     *
     * @param string $flowId
     *
     * @return $this
     */
    public function setFlowId($flowId)
    {
        return $this->withFlowId($flowId);
    }

    /**
     * @param string $flowId
     *
     * @return $this
     */
    public function withFlowId($flowId)
    {
        $this->data['FlowId'] = $flowId;
        $this->options['query']['FlowId'] = $flowId;

        return $this;
    }
}
