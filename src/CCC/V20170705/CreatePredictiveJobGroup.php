<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getJobsJson()
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 */
class CreatePredictiveJobGroup extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param array $jobsJson
     *
     * @return $this
     */
    public function withJobsJson(array $jobsJson)
    {
        $this->data['JobsJson'] = $jobsJson;
        foreach ($jobsJson as $i => $iValue) {
            $this->options['query']['JobsJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
