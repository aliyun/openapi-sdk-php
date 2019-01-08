<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetInstancesStatusCount
 *
 * @method string getCluster()
 * @method string getQuotaId()
 * @method string getRegion()
 * @method string getQuotaName()
 */
class GetInstancesStatusCount extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaMaxCompute';

    /**
     * @var string
     */
    public $version = '2018-01-04';

    /**
     * @var string
     */
    public $action = 'GetInstancesStatusCount';

    /**
     * @param string $cluster
     *
     * @return $this
     */
    public function withCluster($cluster)
    {
        $this->data['Cluster'] = $cluster;
        $this->options['query']['Cluster'] = $cluster;

        return $this;
    }

    /**
     * @param string $quotaId
     *
     * @return $this
     */
    public function withQuotaId($quotaId)
    {
        $this->data['QuotaId'] = $quotaId;
        $this->options['query']['QuotaId'] = $quotaId;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }

    /**
     * @param string $quotaName
     *
     * @return $this
     */
    public function withQuotaName($quotaName)
    {
        $this->data['QuotaName'] = $quotaName;
        $this->options['query']['QuotaName'] = $quotaName;

        return $this;
    }
}
