<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchGetJobMetricInfo
 *
 * @method string getJobInfos()
 */
class BatchGetJobMetricInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaStream';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'BatchGetJobMetricInfo';

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
