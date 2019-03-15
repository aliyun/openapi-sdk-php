<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class ModifySurvey extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
