<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryCustomerSaleInfo queryCustomerSaleInfo(array $options = [])
 * @method QueryResourceInventory queryResourceInventory(array $options = [])
 * @method QueryTopology queryTopology(array $options = [])
 * @method GetClusterInstance getClusterInstance(array $options = [])
 * @method GetInstancesStatusCount getInstancesStatusCount(array $options = [])
 * @method GetProjectInstance getProjectInstance(array $options = [])
 * @method GetQuotaHistoryInfo getQuotaHistoryInfo(array $options = [])
 * @method GetQuotaInstance getQuotaInstance(array $options = [])
 * @method GetUserInstance getUserInstance(array $options = [])
 */
class TeslaMaxComputeApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'TeslaMaxCompute';

    /** @var string */
    public $version = '2018-01-04';
}

/**
 * @method string getRegionName()
 * @method $this withRegionName($value)
 */
class QueryCustomerSaleInfo extends Rpc
{
}

class QueryResourceInventory extends Rpc
{
}

class QueryTopology extends Rpc
{
}

/**
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetClusterInstance extends Rpc
{
}

/**
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getQuotaId()
 * @method $this withQuotaId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getQuotaName()
 * @method $this withQuotaName($value)
 */
class GetInstancesStatusCount extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetProjectInstance extends Rpc
{
}

/**
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getQuotaName()
 * @method $this withQuotaName($value)
 */
class GetQuotaHistoryInfo extends Rpc
{
}

/**
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQuotaId()
 * @method $this withQuotaId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getQuotaName()
 * @method $this withQuotaName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetQuotaInstance extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class GetUserInstance extends Rpc
{
}
