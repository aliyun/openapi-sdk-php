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
     * @deprecated deprecated since version 2.0, Use withJobInfos() instead.
     *
     * @param string $jobInfos
     *
     * @return $this
     */
    public function setJobInfos($jobInfos)
    {
        return $this->withJobInfos($jobInfos);
    }

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
