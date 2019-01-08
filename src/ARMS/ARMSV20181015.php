<?php

namespace AlibabaCloud\ARMS;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the ARMS based on the method name as the Api name.
 *
 * @package   AlibabaCloud\ARMS
 *
 * @method static V20181015\ARMSQueryDataSet aRMSQueryDataSet(array $options = [])
 * @method static V20181015\MetricQuery metricQuery(array $options = [])
 */
class ARMSV20181015
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\ARMS\\V20181015';
}
