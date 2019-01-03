<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetJobTopology
 *
 * @method string getJobName()
 */
class GetJobTopology extends RpcRequest
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
    public $action = 'GetJobTopology';

    /**
     * @deprecated deprecated since version 2.0, Use withJobName() instead.
     *
     * @param string $jobName
     *
     * @return $this
     */
    public function setJobName($jobName)
    {
        return $this->withJobName($jobName);
    }

    /**
     * @param string $jobName
     *
     * @return $this
     */
    public function withJobName($jobName)
    {
        $this->data['JobName'] = $jobName;
        $this->options['query']['JobName'] = $jobName;

        return $this;
    }
}
