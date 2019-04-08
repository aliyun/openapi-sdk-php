<?php

namespace AlibabaCloud\Dbs\V20190306;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeFullBackupList describeFullBackupList(array $options = [])
 * @method DescribeBackupPlanList describeBackupPlanList(array $options = [])
 * @method StopBackupPlan stopBackupPlan(array $options = [])
 * @method DescribeIncrementBackupList describeIncrementBackupList(array $options = [])
 * @method DescribeBackupGatewayList describeBackupGatewayList(array $options = [])
 * @method StartBackupPlan startBackupPlan(array $options = [])
 * @method ConfigureBackupPlan configureBackupPlan(array $options = [])
 * @method CreateBackupPlan createBackupPlan(array $options = [])
 */
class DbsApiResolver
{
    use ApiResolverTrait;
}

class V20190306Rpc extends Rpc
{
    /** @var string */
    public $product = 'Dbs';

    /** @var string */
    public $version = '2019-03-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cbs';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFullBackupList extends V20190306Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPlanList extends V20190306Rpc
{
}

/**
 * @method string getStopMethod()
 * @method $this withStopMethod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopBackupPlan extends V20190306Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeIncrementBackupList extends V20190306Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupGatewayList extends V20190306Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartBackupPlan extends V20190306Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getDuplicationArchivePeriod()
 * @method $this withDuplicationArchivePeriod($value)
 * @method string getBackupGatewayId()
 * @method $this withBackupGatewayId($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupObjects()
 * @method $this withBackupObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method $this withDuplicationInfrequentAccessPeriod($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getBackupStartTime()
 * @method $this withBackupStartTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getBackupPlanName()
 * @method $this withBackupPlanName($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getOSSBucketName()
 * @method $this withOSSBucketName($value)
 * @method string getEnableBackupLog()
 * @method $this withEnableBackupLog($value)
 */
class ConfigureBackupPlan extends V20190306Rpc
{
}

/**
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getDatabaseType()
 * @method $this withDatabaseType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 */
class CreateBackupPlan extends V20190306Rpc
{
}
