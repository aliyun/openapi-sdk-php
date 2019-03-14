<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api BatchGetJobMetricInfo
 *
 * @method string getJobInfos()
 */
class BatchGetJobMetricInfo extends Rpc
{
    public $product = 'TeslaStream';

    public $version = '2018-01-15';

    /**
     * @param string $jobInfos
     *
     * @return $this
     */
    public function withJobInfos($jobInfos)
    {
        $this->data['JobInfos'] = $jobInfos;
        $this->options['query']['JobInfos'] = $jobInfos;

        return $this;
    }
}
