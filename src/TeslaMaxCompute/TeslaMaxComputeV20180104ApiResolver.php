<?php

namespace AlibabaCloud\TeslaMaxCompute;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the TeslaMaxCompute based on the method name as the Api name.
 *
 * @package   AlibabaCloud\TeslaMaxCompute
 *
 * @method V20180104\GetClusterInstance getClusterInstance(array $options = [])
 * @method V20180104\GetInstancesStatusCount getInstancesStatusCount(array $options = [])
 * @method V20180104\GetProjectInstance getProjectInstance(array $options = [])
 * @method V20180104\GetQuotaHistoryInfo getQuotaHistoryInfo(array $options = [])
 * @method V20180104\GetQuotaInstance getQuotaInstance(array $options = [])
 * @method V20180104\GetUserInstance getUserInstance(array $options = [])
 * @method V20180104\QueryCustomerSaleInfo queryCustomerSaleInfo(array $options = [])
 * @method V20180104\QueryResourceInventory queryResourceInventory(array $options = [])
 * @method V20180104\QueryTopology queryTopology(array $options = [])
 */
class TeslaMaxComputeV20180104ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\TeslaMaxCompute\\V20180104';
}
