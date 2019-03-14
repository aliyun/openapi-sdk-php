<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ModifySurvey
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
class ModifySurvey extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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
