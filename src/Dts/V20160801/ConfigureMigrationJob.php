<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api ConfigureMigrationJob
 *
 * @method string getSourceEndpointInstanceID()
 * @method string getCheckpoint()
 * @method string getSourceEndpointEngineName()
 * @method string getSourceEndpointOracleSID()
 * @method string getDestinationEndpointInstanceID()
 * @method string getSourceEndpointIP()
 * @method string getDestinationEndpointPassword()
 * @method string getMigrationObject()
 * @method string getMigrationModeDataIntialization()
 * @method string getMigrationJobId()
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
 * @method string getDestinationEndpointDataBaseName()
 * @method string getSourceEndpointPassword()
 * @method string getMigrationReserved()
 * @method string getDestinationEndpointIP()
 * @method string getMigrationJobName()
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigureMigrationJob extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function withSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        $this->data['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;
        $this->options['query']['SourceEndpoint.InstanceID'] = $sourceEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $checkpoint
     *
     * @return $this
     */
    public function withCheckpoint($checkpoint)
    {
        $this->data['Checkpoint'] = $checkpoint;
        $this->options['query']['Checkpoint'] = $checkpoint;

        return $this;
    }

    /**
     * @param string $sourceEndpointEngineName
     *
     * @return $this
     */
    public function withSourceEndpointEngineName($sourceEndpointEngineName)
    {
        $this->data['SourceEndpointEngineName'] = $sourceEndpointEngineName;
        $this->options['query']['SourceEndpoint.EngineName'] = $sourceEndpointEngineName;

        return $this;
    }

    /**
     * @param string $sourceEndpointOracleSID
     *
     * @return $this
     */
    public function withSourceEndpointOracleSID($sourceEndpointOracleSID)
    {
        $this->data['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;
        $this->options['query']['SourceEndpoint.OracleSID'] = $sourceEndpointOracleSID;

        return $this;
    }

    /**
     * @param string $destinationEndpointInstanceID
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceID($destinationEndpointInstanceID)
    {
        $this->data['DestinationEndpointInstanceID'] = $destinationEndpointInstanceID;
        $this->options['query']['DestinationEndpoint.InstanceID'] = $destinationEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $sourceEndpointIP
     *
     * @return $this
     */
    public function withSourceEndpointIP($sourceEndpointIP)
    {
        $this->data['SourceEndpointIP'] = $sourceEndpointIP;
        $this->options['query']['SourceEndpoint.IP'] = $sourceEndpointIP;

        return $this;
    }

    /**
     * @param string $destinationEndpointPassword
     *
     * @return $this
     */
    public function withDestinationEndpointPassword($destinationEndpointPassword)
    {
        $this->data['DestinationEndpointPassword'] = $destinationEndpointPassword;
        $this->options['query']['DestinationEndpoint.Password'] = $destinationEndpointPassword;

        return $this;
    }

    /**
     * @param string $migrationObject
     *
     * @return $this
     */
    public function withMigrationObject($migrationObject)
    {
        $this->data['MigrationObject'] = $migrationObject;
        $this->options['query']['MigrationObject'] = $migrationObject;

        return $this;
    }

    /**
     * @param string $migrationModeDataIntialization
     *
     * @return $this
     */
    public function withMigrationModeDataIntialization($migrationModeDataIntialization)
    {
        $this->data['MigrationModeDataIntialization'] = $migrationModeDataIntialization;
        $this->options['query']['MigrationMode.DataIntialization'] = $migrationModeDataIntialization;

        return $this;
    }

    /**
     * @param string $migrationJobId
     *
     * @return $this
     */
    public function withMigrationJobId($migrationJobId)
    {
        $this->data['MigrationJobId'] = $migrationJobId;
        $this->options['query']['MigrationJobId'] = $migrationJobId;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function withSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        $this->data['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;
        $this->options['query']['SourceEndpoint.InstanceType'] = $sourceEndpointInstanceType;

        return $this;
    }

    /**
     * @param string $destinationEndpointEngineName
     *
     * @return $this
     */
    public function withDestinationEndpointEngineName($destinationEndpointEngineName)
    {
        $this->data['DestinationEndpointEngineName'] = $destinationEndpointEngineName;
        $this->options['query']['DestinationEndpoint.EngineName'] = $destinationEndpointEngineName;

        return $this;
    }

    /**
     * @param string $migrationModeStructureIntialization
     *
     * @return $this
     */
    public function withMigrationModeStructureIntialization($migrationModeStructureIntialization)
    {
        $this->data['MigrationModeStructureIntialization'] = $migrationModeStructureIntialization;
        $this->options['query']['MigrationMode.StructureIntialization'] = $migrationModeStructureIntialization;

        return $this;
    }

    /**
     * @param string $migrationModeDataSynchronization
     *
     * @return $this
     */
    public function withMigrationModeDataSynchronization($migrationModeDataSynchronization)
    {
        $this->data['MigrationModeDataSynchronization'] = $migrationModeDataSynchronization;
        $this->options['query']['MigrationMode.DataSynchronization'] = $migrationModeDataSynchronization;

        return $this;
    }

    /**
     * @param string $destinationEndpointRegion
     *
     * @return $this
     */
    public function withDestinationEndpointRegion($destinationEndpointRegion)
    {
        $this->data['DestinationEndpointRegion'] = $destinationEndpointRegion;
        $this->options['query']['DestinationEndpoint.Region'] = $destinationEndpointRegion;

        return $this;
    }

    /**
     * @param string $sourceEndpointUserName
     *
     * @return $this
     */
    public function withSourceEndpointUserName($sourceEndpointUserName)
    {
        $this->data['SourceEndpointUserName'] = $sourceEndpointUserName;
        $this->options['query']['SourceEndpoint.UserName'] = $sourceEndpointUserName;

        return $this;
    }

    /**
     * @param string $sourceEndpointDatabaseName
     *
     * @return $this
     */
    public function withSourceEndpointDatabaseName($sourceEndpointDatabaseName)
    {
        $this->data['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;
        $this->options['query']['SourceEndpoint.DatabaseName'] = $sourceEndpointDatabaseName;

        return $this;
    }

    /**
     * @param string $sourceEndpointPort
     *
     * @return $this
     */
    public function withSourceEndpointPort($sourceEndpointPort)
    {
        $this->data['SourceEndpointPort'] = $sourceEndpointPort;
        $this->options['query']['SourceEndpoint.Port'] = $sourceEndpointPort;

        return $this;
    }

    /**
     * @param string $sourceEndpointOwnerID
     *
     * @return $this
     */
    public function withSourceEndpointOwnerID($sourceEndpointOwnerID)
    {
        $this->data['SourceEndpointOwnerID'] = $sourceEndpointOwnerID;
        $this->options['query']['SourceEndpoint.OwnerID'] = $sourceEndpointOwnerID;

        return $this;
    }

    /**
     * @param string $destinationEndpointUserName
     *
     * @return $this
     */
    public function withDestinationEndpointUserName($destinationEndpointUserName)
    {
        $this->data['DestinationEndpointUserName'] = $destinationEndpointUserName;
        $this->options['query']['DestinationEndpoint.UserName'] = $destinationEndpointUserName;

        return $this;
    }

    /**
     * @param string $destinationEndpointPort
     *
     * @return $this
     */
    public function withDestinationEndpointPort($destinationEndpointPort)
    {
        $this->data['DestinationEndpointPort'] = $destinationEndpointPort;
        $this->options['query']['DestinationEndpoint.Port'] = $destinationEndpointPort;

        return $this;
    }

    /**
     * @param string $sourceEndpointRegion
     *
     * @return $this
     */
    public function withSourceEndpointRegion($sourceEndpointRegion)
    {
        $this->data['SourceEndpointRegion'] = $sourceEndpointRegion;
        $this->options['query']['SourceEndpoint.Region'] = $sourceEndpointRegion;

        return $this;
    }

    /**
     * @param string $sourceEndpointRole
     *
     * @return $this
     */
    public function withSourceEndpointRole($sourceEndpointRole)
    {
        $this->data['SourceEndpointRole'] = $sourceEndpointRole;
        $this->options['query']['SourceEndpoint.Role'] = $sourceEndpointRole;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $destinationEndpointDataBaseName
     *
     * @return $this
     */
    public function withDestinationEndpointDataBaseName($destinationEndpointDataBaseName)
    {
        $this->data['DestinationEndpointDataBaseName'] = $destinationEndpointDataBaseName;
        $this->options['query']['DestinationEndpoint.DataBaseName'] = $destinationEndpointDataBaseName;

        return $this;
    }

    /**
     * @param string $sourceEndpointPassword
     *
     * @return $this
     */
    public function withSourceEndpointPassword($sourceEndpointPassword)
    {
        $this->data['SourceEndpointPassword'] = $sourceEndpointPassword;
        $this->options['query']['SourceEndpoint.Password'] = $sourceEndpointPassword;

        return $this;
    }

    /**
     * @param string $migrationReserved
     *
     * @return $this
     */
    public function withMigrationReserved($migrationReserved)
    {
        $this->data['MigrationReserved'] = $migrationReserved;
        $this->options['query']['MigrationReserved'] = $migrationReserved;

        return $this;
    }

    /**
     * @param string $destinationEndpointIP
     *
     * @return $this
     */
    public function withDestinationEndpointIP($destinationEndpointIP)
    {
        $this->data['DestinationEndpointIP'] = $destinationEndpointIP;
        $this->options['query']['DestinationEndpoint.IP'] = $destinationEndpointIP;

        return $this;
    }

    /**
     * @param string $migrationJobName
     *
     * @return $this
     */
    public function withMigrationJobName($migrationJobName)
    {
        $this->data['MigrationJobName'] = $migrationJobName;
        $this->options['query']['MigrationJobName'] = $migrationJobName;

        return $this;
    }

    /**
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        $this->data['DestinationEndpointInstanceType'] = $destinationEndpointInstanceType;
        $this->options['query']['DestinationEndpoint.InstanceType'] = $destinationEndpointInstanceType;

        return $this;
    }
}
