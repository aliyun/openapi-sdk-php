<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetCloudMetricProfiling
 *
 * @method string getProfilingId()
 * @method string getClusterId()
 */
class GetCloudMetricProfiling extends RpcRequest
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
    public $action = 'GetCloudMetricProfiling';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param string $profilingId
     *
     * @return $this
     */
    public function withProfilingId($profilingId)
    {
        $this->data['ProfilingId'] = $profilingId;
        $this->options['query']['ProfilingId'] = $profilingId;

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
