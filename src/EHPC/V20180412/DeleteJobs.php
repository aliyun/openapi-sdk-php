<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteJobs
 *
 * @method string getJobs()
 * @method string getClusterId()
 */
class DeleteJobs extends RpcRequest
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
    public $action = 'DeleteJobs';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withJobs() instead.
     *
     * @param string $jobs
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        return $this->withJobs($jobs);
    }

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
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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
