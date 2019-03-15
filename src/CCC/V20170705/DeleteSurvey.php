<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class DeleteSurvey extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
