<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api GetCloudMetricProfiling
 *
 * @method string getProfilingId()
 * @method string getClusterId()
 */
class GetCloudMetricProfiling extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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
