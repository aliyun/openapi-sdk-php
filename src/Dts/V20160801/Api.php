<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeMigrationJobs describeMigrationJobs(array $options = [])
 * @method ConfigureSubscriptionInstance configureSubscriptionInstance(array $options = [])
 * @method ConfigureMigrationJob configureMigrationJob(array $options = [])
 * @method DescribeSubscriptionObjectModifyStatus describeSubscriptionObjectModifyStatus(array $options = [])
 * @method ModifySubscriptionObject modifySubscriptionObject(array $options = [])
 * @method StartSubscriptionInstance startSubscriptionInstance(array $options = [])
 * @method CreateSubscriptionInstance createSubscriptionInstance(array $options = [])
 * @method DeleteSubscriptionInstance deleteSubscriptionInstance(array $options = [])
 * @method DescribeSubscriptionInstances describeSubscriptionInstances(array $options = [])
 * @method StartMigrationJob startMigrationJob(array $options = [])
 * @method StopMigrationJob stopMigrationJob(array $options = [])
 * @method SuspendMigrationJob suspendMigrationJob(array $options = [])
 * @method DescirbeMigrationJobs descirbeMigrationJobs(array $options = [])
 * @method DescribeMigrationJobDetail describeMigrationJobDetail(array $options = [])
 * @method DescribeMigrationJobStatus describeMigrationJobStatus(array $options = [])
 * @method ModifyMigrationObject modifyMigrationObject(array $options = [])
 * @method CreateMigrationJob createMigrationJob(array $options = [])
 * @method DeleteMigrationJob deleteMigrationJob(array $options = [])
 * @method ModifyConsumptionTimestamp modifyConsumptionTimestamp(array $options = [])
 * @method DescribeSubscriptionInstanceStatus describeSubscriptionInstanceStatus(array $options = [])
 * @method DescribeSynchronizationObjectModifyStatus describeSynchronizationObjectModifyStatus(array $options = [])
 * @method DescribeInitializationStatus describeInitializationStatus(array $options = [])
 * @method DescribeSynchronizationJobs describeSynchronizationJobs(array $options = [])
 * @method SuspendSynchronizationJob suspendSynchronizationJob(array $options = [])
 * @method ModifySynchronizationObject modifySynchronizationObject(array $options = [])
 * @method ConfigureSynchronizationJob configureSynchronizationJob(array $options = [])
 * @method DeleteSynchronizationJob deleteSynchronizationJob(array $options = [])
 * @method StartSynchronizationJob startSynchronizationJob(array $options = [])
 * @method ConfigurationSynchronizationJob configurationSynchronizationJob(array $options = [])
 * @method CreateSynchronizationJob createSynchronizationJob(array $options = [])
 * @method DescribeSynchronizationJobStatus describeSynchronizationJobStatus(array $options = [])
 */
class DtsApiResolver
{
    use ApiResolverTrait;
}

class V20160801Rpc extends Rpc
{
    /** @var string */
    public $product = 'Dts';

    /** @var string */
    public $version = '2016-08-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMigrationJobs extends V20160801Rpc
{
}

/**
 * @method string getSourceEndpointInstanceID()
 * @method string getSourceEndpointOwnerID()
 * @method string getSubscriptionDataTypeDML()
 * @method string getSubscriptionObject()
 * @method $this withSubscriptionObject($value)
 * @method string getSubscriptionInstanceName()
 * @method $this withSubscriptionInstanceName($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getSubscriptionDataTypeDDL()
 */
class ConfigureSubscriptionInstance extends V20160801Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceID($value)
    {
        $this->data['SourceEndpointInstanceID'] = $value;
        $this->options['query']['SourceEndpoint.InstanceID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointOwnerID($value)
    {
        $this->data['SourceEndpointOwnerID'] = $value;
        $this->options['query']['SourceEndpoint.OwnerID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubscriptionDataTypeDML($value)
    {
        $this->data['SubscriptionDataTypeDML'] = $value;
        $this->options['query']['SubscriptionDataType.DML'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointRole($value)
    {
        $this->data['SourceEndpointRole'] = $value;
        $this->options['query']['SourceEndpoint.Role'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($value)
    {
        $this->data['SourceEndpointInstanceType'] = $value;
        $this->options['query']['SourceEndpoint.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubscriptionDataTypeDDL($value)
    {
        $this->data['SubscriptionDataTypeDDL'] = $value;
        $this->options['query']['SubscriptionDataType.DDL'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceEndpointInstanceID()
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getSourceEndpointEngineName()
 * @method string getSourceEndpointOracleSID()
 * @method string getDestinationEndpointInstanceID()
 * @method string getSourceEndpointIP()
 * @method string getDestinationEndpointPassword()
 * @method string getMigrationObject()
 * @method $this withMigrationObject($value)
 * @method string getMigrationModeDataIntialization()
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointEngineName()
 * @method string getMigrationModeStructureIntialization()
 * @method string getMigrationModeDataSynchronization()
 * @method string getDestinationEndpointRegion()
 * @method string getSourceEndpointUserName()
 * @method string getSourceEndpointDatabaseName()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getDestinationEndpointUserName()
 * @method string getDestinationEndpointPort()
 * @method string getSourceEndpointRegion()
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationEndpointDataBaseName()
 * @method string getSourceEndpointPassword()
 * @method string getMigrationReserved()
 * @method $this withMigrationReserved($value)
 * @method string getDestinationEndpointIP()
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigureMigrationJob extends V20160801Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceID($value)
    {
        $this->data['SourceEndpointInstanceID'] = $value;
        $this->options['query']['SourceEndpoint.InstanceID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointEngineName($value)
    {
        $this->data['SourceEndpointEngineName'] = $value;
        $this->options['query']['SourceEndpoint.EngineName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointOracleSID($value)
    {
        $this->data['SourceEndpointOracleSID'] = $value;
        $this->options['query']['SourceEndpoint.OracleSID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceID($value)
    {
        $this->data['DestinationEndpointInstanceID'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointIP($value)
    {
        $this->data['SourceEndpointIP'] = $value;
        $this->options['query']['SourceEndpoint.IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointPassword($value)
    {
        $this->data['DestinationEndpointPassword'] = $value;
        $this->options['query']['DestinationEndpoint.Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationModeDataIntialization($value)
    {
        $this->data['MigrationModeDataIntialization'] = $value;
        $this->options['query']['MigrationMode.DataIntialization'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($value)
    {
        $this->data['SourceEndpointInstanceType'] = $value;
        $this->options['query']['SourceEndpoint.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointEngineName($value)
    {
        $this->data['DestinationEndpointEngineName'] = $value;
        $this->options['query']['DestinationEndpoint.EngineName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationModeStructureIntialization($value)
    {
        $this->data['MigrationModeStructureIntialization'] = $value;
        $this->options['query']['MigrationMode.StructureIntialization'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationModeDataSynchronization($value)
    {
        $this->data['MigrationModeDataSynchronization'] = $value;
        $this->options['query']['MigrationMode.DataSynchronization'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointRegion($value)
    {
        $this->data['DestinationEndpointRegion'] = $value;
        $this->options['query']['DestinationEndpoint.Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointUserName($value)
    {
        $this->data['SourceEndpointUserName'] = $value;
        $this->options['query']['SourceEndpoint.UserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointDatabaseName($value)
    {
        $this->data['SourceEndpointDatabaseName'] = $value;
        $this->options['query']['SourceEndpoint.DatabaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointPort($value)
    {
        $this->data['SourceEndpointPort'] = $value;
        $this->options['query']['SourceEndpoint.Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointOwnerID($value)
    {
        $this->data['SourceEndpointOwnerID'] = $value;
        $this->options['query']['SourceEndpoint.OwnerID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointUserName($value)
    {
        $this->data['DestinationEndpointUserName'] = $value;
        $this->options['query']['DestinationEndpoint.UserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointPort($value)
    {
        $this->data['DestinationEndpointPort'] = $value;
        $this->options['query']['DestinationEndpoint.Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointRegion($value)
    {
        $this->data['SourceEndpointRegion'] = $value;
        $this->options['query']['SourceEndpoint.Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointRole($value)
    {
        $this->data['SourceEndpointRole'] = $value;
        $this->options['query']['SourceEndpoint.Role'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointDataBaseName($value)
    {
        $this->data['DestinationEndpointDataBaseName'] = $value;
        $this->options['query']['DestinationEndpoint.DataBaseName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointPassword($value)
    {
        $this->data['SourceEndpointPassword'] = $value;
        $this->options['query']['SourceEndpoint.Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointIP($value)
    {
        $this->data['DestinationEndpointIP'] = $value;
        $this->options['query']['DestinationEndpoint.IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($value)
    {
        $this->data['DestinationEndpointInstanceType'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSubscriptionObjectModifyStatus extends V20160801Rpc
{
}

/**
 * @method string getSubscriptionObject()
 * @method $this withSubscriptionObject($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySubscriptionObject extends V20160801Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartSubscriptionInstance extends V20160801Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 */
class CreateSubscriptionInstance extends V20160801Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSubscriptionInstance extends V20160801Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSubscriptionInstanceName()
 * @method $this withSubscriptionInstanceName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSubscriptionInstances extends V20160801Rpc
{
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartMigrationJob extends V20160801Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopMigrationJob extends V20160801Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SuspendMigrationJob extends V20160801Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescirbeMigrationJobs extends V20160801Rpc
{
}

/**
 * @method string getMigrationModeDataSynchronization()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationModeDataInitialization()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMigrationModeStructureInitialization()
 */
class DescribeMigrationJobDetail extends V20160801Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationModeDataSynchronization($value)
    {
        $this->data['MigrationModeDataSynchronization'] = $value;
        $this->options['query']['MigrationMode.DataSynchronization'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationModeDataInitialization($value)
    {
        $this->data['MigrationModeDataInitialization'] = $value;
        $this->options['query']['MigrationMode.DataInitialization'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMigrationModeStructureInitialization($value)
    {
        $this->data['MigrationModeStructureInitialization'] = $value;
        $this->options['query']['MigrationMode.StructureInitialization'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMigrationJobStatus extends V20160801Rpc
{
}

/**
 * @method string getMigrationObject()
 * @method $this withMigrationObject($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyMigrationObject extends V20160801Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMigrationJobClass()
 * @method $this withMigrationJobClass($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMigrationJob extends V20160801Rpc
{
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMigrationJob extends V20160801Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getConsumptionTimestamp()
 * @method $this withConsumptionTimestamp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyConsumptionTimestamp extends V20160801Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSubscriptionInstanceStatus extends V20160801Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSynchronizationObjectModifyStatus extends V20160801Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeInitializationStatus extends V20160801Rpc
{
}

/**
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSynchronizationJobs extends V20160801Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SuspendSynchronizationJob extends V20160801Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationObjects()
 * @method $this withSynchronizationObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySynchronizationObject extends V20160801Rpc
{
}

/**
 * @method string getSourceEndpointInstanceId()
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getDestinationEndpointInstanceId()
 * @method string getSourceEndpointIP()
 * @method string getSynchronizationObjects()
 * @method $this withSynchronizationObjects($value)
 * @method string getDestinationEndpointPassword()
 * @method string getDataInitialization()
 * @method $this withDataInitialization($value)
 * @method string getStructureInitialization()
 * @method $this withStructureInitialization($value)
 * @method string getPartitionKeyModifyTimeMInute()
 * @method string getPartitionKeyModifyTimeDAy()
 * @method string getSourceEndpointInstanceType()
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getSourceEndpointUserName()
 * @method string getPartitionKeyModifyTimeMOnth()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getDestinationEndpointUserName()
 * @method string getDestinationEndpointPort()
 * @method string getPartitionKeyModifyTimeYEar()
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPartitionKeyModifyTimeHOur()
 * @method string getSourceEndpointPassword()
 * @method string getMigrationReserved()
 * @method $this withMigrationReserved($value)
 * @method string getDestinationEndpointIP()
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigureSynchronizationJob extends V20160801Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceId($value)
    {
        $this->data['SourceEndpointInstanceId'] = $value;
        $this->options['query']['SourceEndpoint.InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceId($value)
    {
        $this->data['DestinationEndpointInstanceId'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointIP($value)
    {
        $this->data['SourceEndpointIP'] = $value;
        $this->options['query']['SourceEndpoint.IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointPassword($value)
    {
        $this->data['DestinationEndpointPassword'] = $value;
        $this->options['query']['DestinationEndpoint.Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeMInute($value)
    {
        $this->data['PartitionKeyModifyTimeMInute'] = $value;
        $this->options['query']['PartitionKey.ModifyTime_Minute'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeDAy($value)
    {
        $this->data['PartitionKeyModifyTimeDAy'] = $value;
        $this->options['query']['PartitionKey.ModifyTime_Day'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($value)
    {
        $this->data['SourceEndpointInstanceType'] = $value;
        $this->options['query']['SourceEndpoint.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointUserName($value)
    {
        $this->data['SourceEndpointUserName'] = $value;
        $this->options['query']['SourceEndpoint.UserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeMOnth($value)
    {
        $this->data['PartitionKeyModifyTimeMOnth'] = $value;
        $this->options['query']['PartitionKey.ModifyTime_Month'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointPort($value)
    {
        $this->data['SourceEndpointPort'] = $value;
        $this->options['query']['SourceEndpoint.Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointOwnerID($value)
    {
        $this->data['SourceEndpointOwnerID'] = $value;
        $this->options['query']['SourceEndpoint.OwnerID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointUserName($value)
    {
        $this->data['DestinationEndpointUserName'] = $value;
        $this->options['query']['DestinationEndpoint.UserName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointPort($value)
    {
        $this->data['DestinationEndpointPort'] = $value;
        $this->options['query']['DestinationEndpoint.Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeYEar($value)
    {
        $this->data['PartitionKeyModifyTimeYEar'] = $value;
        $this->options['query']['PartitionKey.ModifyTime_Year'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointRole($value)
    {
        $this->data['SourceEndpointRole'] = $value;
        $this->options['query']['SourceEndpoint.Role'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeHOur($value)
    {
        $this->data['PartitionKeyModifyTimeHOur'] = $value;
        $this->options['query']['PartitionKey.ModifyTime_Hour'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointPassword($value)
    {
        $this->data['SourceEndpointPassword'] = $value;
        $this->options['query']['SourceEndpoint.Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointIP($value)
    {
        $this->data['DestinationEndpointIP'] = $value;
        $this->options['query']['DestinationEndpoint.IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($value)
    {
        $this->data['DestinationEndpointInstanceType'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSynchronizationJob extends V20160801Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartSynchronizationJob extends V20160801Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSourceEndpointInstanceID()
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getDestinationEndpointInstanceID()
 * @method string getInitializationStructureLoad()
 * @method string getInitializationDataLoad()
 * @method string getSynchronizationObject()
 * @method $this withSynchronizationObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigurationSynchronizationJob extends V20160801Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceID($value)
    {
        $this->data['SourceEndpointInstanceID'] = $value;
        $this->options['query']['SourceEndpoint.InstanceID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceID($value)
    {
        $this->data['DestinationEndpointInstanceID'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitializationStructureLoad($value)
    {
        $this->data['InitializationStructureLoad'] = $value;
        $this->options['query']['Initialization.StructureLoad'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitializationDataLoad($value)
    {
        $this->data['InitializationDataLoad'] = $value;
        $this->options['query']['Initialization.DataLoad'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($value)
    {
        $this->data['SourceEndpointInstanceType'] = $value;
        $this->options['query']['SourceEndpoint.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($value)
    {
        $this->data['DestinationEndpointInstanceType'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDestRegion()
 * @method $this withDestRegion($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSynchronizationJobClass()
 * @method $this withSynchronizationJobClass($value)
 * @method string getNetworkType()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointInstanceType()
 */
class CreateSynchronizationJob extends V20160801Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['query']['networkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($value)
    {
        $this->data['SourceEndpointInstanceType'] = $value;
        $this->options['query']['SourceEndpoint.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($value)
    {
        $this->data['DestinationEndpointInstanceType'] = $value;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSynchronizationJobStatus extends V20160801Rpc
{
}
