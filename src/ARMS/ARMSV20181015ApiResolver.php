<?php

namespace AlibabaCloud\ARMS;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the ARMS based on the method name as the Api name.
 *
 * @package   AlibabaCloud\ARMS
 *
 * @method V20181015\ARMSQueryDataSet aRMSQueryDataSet(array $options = [])
 * @method V20181015\MetricQuery metricQuery(array $options = [])
 */
class ARMSV20181015ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\ARMS\\V20181015';
}
