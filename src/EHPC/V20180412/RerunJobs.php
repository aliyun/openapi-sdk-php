<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api RerunJobs
 *
 * @method string getJobs()
 * @method string getClusterId()
 */
class RerunJobs extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $jobs
     *
     * @return $this
     */
    public function withJobs($jobs)
    {
        $this->data['Jobs'] = $jobs;
        $this->options['query']['Jobs'] = $jobs;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }
}
