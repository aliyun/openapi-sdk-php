<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StopJobs
 *
 * @method string getJobs()
 * @method string getClusterId()
 */
class StopJobs extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'StopJobs';

    /**
     * @var string
     */
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
