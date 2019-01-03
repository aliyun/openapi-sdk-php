<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetQuotaHistoryInfo
 *
 * @method string getCluster()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getRegion()
 * @method string getQuotaName()
 */
class GetQuotaHistoryInfo extends RpcRequest
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
    public $action = 'GetQuotaHistoryInfo';

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
