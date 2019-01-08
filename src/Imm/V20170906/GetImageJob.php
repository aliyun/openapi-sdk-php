<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetImageJob
 *
 * @method string getJobId()
 * @method string getProject()
 * @method string getJobType()
 */
class GetImageJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'GetImageJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $jobId
     *
     * @return $this
     */
    public function withJobId($jobId)
    {
        $this->data['JobId'] = $jobId;
        $this->options['query']['JobId'] = $jobId;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @param string $jobType
     *
     * @return $this
     */
    public function withJobType($jobType)
    {
        $this->data['JobType'] = $jobType;
        $this->options['query']['JobType'] = $jobType;

        return $this;
    }
}
