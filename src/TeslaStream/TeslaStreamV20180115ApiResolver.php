<?php

namespace AlibabaCloud\TeslaStream;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the TeslaStream based on the method name as the Api name.
 *
 * @package   AlibabaCloud\TeslaStream
 *
 * @method V20180115\BatchGetJobMetricInfo batchGetJobMetricInfo(array $options = [])
 * @method V20180115\BatchGetPluginConfigInfo batchGetPluginConfigInfo(array $options = [])
 * @method V20180115\GetJobTopology getJobTopology(array $options = [])
 */
class TeslaStreamV20180115ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\TeslaStream\\V20180115';
}
