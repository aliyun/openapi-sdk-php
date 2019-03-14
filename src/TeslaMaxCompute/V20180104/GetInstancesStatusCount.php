<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Rpc;

/**
 * Api GetInstancesStatusCount
 *
 * @method string getCluster()
 * @method string getQuotaId()
 * @method string getRegion()
 * @method string getQuotaName()
 */
class GetInstancesStatusCount extends Rpc
{
    public $product = 'TeslaMaxCompute';

    public $version = '2018-01-04';

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
