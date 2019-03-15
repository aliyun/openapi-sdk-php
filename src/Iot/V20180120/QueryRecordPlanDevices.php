<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getPlanId()
 * @method string getCurrentPage()
 * @method string getPageSize()
 */
class QueryRecordPlanDevices extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryRecordPlanDevices';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $planId
     *
     * @return $this
     */
    public function withPlanId($planId)
    {
        $this->data['PlanId'] = $planId;
        $this->options['query']['PlanId'] = $planId;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

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
}
