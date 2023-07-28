<?php

namespace AlibabaCloud\Dts\V20170601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ConfigureMigrationJob configureMigrationJob(array $options = [])
 * @method CreateMigrationJob createMigrationJob(array $options = [])
 * @method DeleteMigrationJob deleteMigrationJob(array $options = [])
 * @method DescirbeMigrationJobs descirbeMigrationJobs(array $options = [])
 * @method DescribeMigrationJobDetail describeMigrationJobDetail(array $options = [])
 * @method DescribeMigrationJobStatus describeMigrationJobStatus(array $options = [])
 * @method ModifyMigrationObject modifyMigrationObject(array $options = [])
 * @method StartMigrationJob startMigrationJob(array $options = [])
 * @method StopMigrationJob stopMigrationJob(array $options = [])
 * @method SuspendMigrationJob suspendMigrationJob(array $options = [])
 */
class DtsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dts';

    /** @var string */
    public $version = '2017-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dts';
}

/**
 * @method string getSourceEndpointInstanceID()
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
 * @method string getDestinationEndpointDataBaseName()
 * @method string getSourceEndpointPassword()
 * @method string getMigrationReserved()
 * @method $this withMigrationReserved($value)
 * @method string getDestinationEndpointIP()
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigureMigrationJob extends Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMigrationJobClass()
 * @method $this withMigrationJobClass($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMigrationJob extends Rpc
{
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 */
class DeleteMigrationJob extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class DescirbeMigrationJobs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationModeDataInitialization()
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getMigrationModeStructureInitialization()
 * @method string getMigrationModeDataSynchronization()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeMigrationJobDetail extends Rpc
{

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
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 */
class DescribeMigrationJobStatus extends Rpc
{
}

/**
 * @method string getMigrationObject()
 * @method $this withMigrationObject($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 */
class ModifyMigrationObject extends Rpc
{
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 */
class StartMigrationJob extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 */
class StopMigrationJob extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 */
class SuspendMigrationJob extends Rpc
{
}
