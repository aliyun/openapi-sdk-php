<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetQuotaInstance
 *
 * @method string getCluster()
 * @method string getPageSize()
 * @method string getQuotaId()
 * @method string getPageNum()
 * @method string getRegion()
 * @method string getQuotaName()
 * @method string getStatus()
 */
class GetQuotaInstance extends RpcRequest
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
    public $action = 'GetQuotaInstance';

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

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

    /**
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
