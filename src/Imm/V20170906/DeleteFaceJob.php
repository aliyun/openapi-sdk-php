<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api DeleteFaceJob
 *
 * @method string getJobId()
 * @method string getProject()
 * @method string getClearIndexData()
 */
class DeleteFaceJob extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

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
     * @param string $clearIndexData
     *
     * @return $this
     */
    public function withClearIndexData($clearIndexData)
    {
        $this->data['ClearIndexData'] = $clearIndexData;
        $this->options['query']['ClearIndexData'] = $clearIndexData;

        return $this;
    }
}
