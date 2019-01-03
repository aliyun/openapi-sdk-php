<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryEventRecordPlanDetail
 *
 * @method string getPlanId()
 */
class QueryEventRecordPlanDetail extends RpcRequest
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
    public $action = 'QueryEventRecordPlanDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPlanId() instead.
     *
     * @param string $planId
     *
     * @return $this
     */
    public function setPlanId($planId)
    {
        return $this->withPlanId($planId);
    }

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
}
