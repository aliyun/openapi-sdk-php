<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api GetJobTopology
 *
 * @method string getJobName()
 */
class GetJobTopology extends Rpc
{
    public $product = 'TeslaStream';

    public $version = '2018-01-15';

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
