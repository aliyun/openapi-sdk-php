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
     * @deprecated deprecated since version 2.0, Use withCluster() instead.
     *
     * @param string $cluster
     *
     * @return $this
     */
    public function setCluster($cluster)
    {
        return $this->withCluster($cluster);
    }

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
     * @deprecated deprecated since version 2.0, Use withQuotaId() instead.
     *
     * @param string $quotaId
     *
     * @return $this
     */
    public function setQuotaId($quotaId)
    {
        return $this->withQuotaId($quotaId);
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
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
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
     * @deprecated deprecated since version 2.0, Use withQuotaName() instead.
     *
     * @param string $quotaName
     *
     * @return $this
     */
    public function setQuotaName($quotaName)
    {
        return $this->withQuotaName($quotaName);
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
