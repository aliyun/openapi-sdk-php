<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetSurvey
 *
 * @method string getSurveyId()
 * @method string getInstanceId()
 * @method string getScenarioId()
 */
class GetSurvey extends RpcRequest
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
    public $action = 'GetSurvey';

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
}
