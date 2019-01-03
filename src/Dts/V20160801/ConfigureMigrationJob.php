<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigureMigrationJob
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
class ConfigureMigrationJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'ConfigureMigrationJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSourceEndpointInstanceID() instead.
     *
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function setSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        return $this->withSourceEndpointInstanceID($sourceEndpointInstanceID);
    }

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
     * @deprecated deprecated since version 2.0, Use withCheckpoint() instead.
     *
     * @param string $checkpoint
     *
     * @return $this
     */
    public function setCheckpoint($checkpoint)
    {
        return $this->withCheckpoint($checkpoint);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointEngineName() instead.
     *
     * @param string $sourceEndpointEngineName
     *
     * @return $this
     */
    public function setSourceEndpointEngineName($sourceEndpointEngineName)
    {
        return $this->withSourceEndpointEngineName($sourceEndpointEngineName);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointOracleSID() instead.
     *
     * @param string $sourceEndpointOracleSID
     *
     * @return $this
     */
    public function setSourceEndpointOracleSID($sourceEndpointOracleSID)
    {
        return $this->withSourceEndpointOracleSID($sourceEndpointOracleSID);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointInstanceID() instead.
     *
     * @param string $destinationEndpointInstanceID
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceID($destinationEndpointInstanceID)
    {
        return $this->withDestinationEndpointInstanceID($destinationEndpointInstanceID);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointIP() instead.
     *
     * @param string $sourceEndpointIP
     *
     * @return $this
     */
    public function setSourceEndpointIP($sourceEndpointIP)
    {
        return $this->withSourceEndpointIP($sourceEndpointIP);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointPassword() instead.
     *
     * @param string $destinationEndpointPassword
     *
     * @return $this
     */
    public function setDestinationEndpointPassword($destinationEndpointPassword)
    {
        return $this->withDestinationEndpointPassword($destinationEndpointPassword);
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
     * @deprecated deprecated since version 2.0, Use withMigrationObject() instead.
     *
     * @param string $migrationObject
     *
     * @return $this
     */
    public function setMigrationObject($migrationObject)
    {
        return $this->withMigrationObject($migrationObject);
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
     * @deprecated deprecated since version 2.0, Use withMigrationModeDataIntialization() instead.
     *
     * @param string $migrationModeDataIntialization
     *
     * @return $this
     */
    public function setMigrationModeDataIntialization($migrationModeDataIntialization)
    {
        return $this->withMigrationModeDataIntialization($migrationModeDataIntialization);
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
     * @deprecated deprecated since version 2.0, Use withMigrationJobId() instead.
     *
     * @param string $migrationJobId
     *
     * @return $this
     */
    public function setMigrationJobId($migrationJobId)
    {
        return $this->withMigrationJobId($migrationJobId);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointInstanceType() instead.
     *
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function setSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        return $this->withSourceEndpointInstanceType($sourceEndpointInstanceType);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointEngineName() instead.
     *
     * @param string $destinationEndpointEngineName
     *
     * @return $this
     */
    public function setDestinationEndpointEngineName($destinationEndpointEngineName)
    {
        return $this->withDestinationEndpointEngineName($destinationEndpointEngineName);
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
     * @deprecated deprecated since version 2.0, Use withMigrationModeStructureIntialization() instead.
     *
     * @param string $migrationModeStructureIntialization
     *
     * @return $this
     */
    public function setMigrationModeStructureIntialization($migrationModeStructureIntialization)
    {
        return $this->withMigrationModeStructureIntialization($migrationModeStructureIntialization);
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
     * @deprecated deprecated since version 2.0, Use withMigrationModeDataSynchronization() instead.
     *
     * @param string $migrationModeDataSynchronization
     *
     * @return $this
     */
    public function setMigrationModeDataSynchronization($migrationModeDataSynchronization)
    {
        return $this->withMigrationModeDataSynchronization($migrationModeDataSynchronization);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointRegion() instead.
     *
     * @param string $destinationEndpointRegion
     *
     * @return $this
     */
    public function setDestinationEndpointRegion($destinationEndpointRegion)
    {
        return $this->withDestinationEndpointRegion($destinationEndpointRegion);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointUserName() instead.
     *
     * @param string $sourceEndpointUserName
     *
     * @return $this
     */
    public function setSourceEndpointUserName($sourceEndpointUserName)
    {
        return $this->withSourceEndpointUserName($sourceEndpointUserName);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointDatabaseName() instead.
     *
     * @param string $sourceEndpointDatabaseName
     *
     * @return $this
     */
    public function setSourceEndpointDatabaseName($sourceEndpointDatabaseName)
    {
        return $this->withSourceEndpointDatabaseName($sourceEndpointDatabaseName);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointPort() instead.
     *
     * @param string $sourceEndpointPort
     *
     * @return $this
     */
    public function setSourceEndpointPort($sourceEndpointPort)
    {
        return $this->withSourceEndpointPort($sourceEndpointPort);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointOwnerID() instead.
     *
     * @param string $sourceEndpointOwnerID
     *
     * @return $this
     */
    public function setSourceEndpointOwnerID($sourceEndpointOwnerID)
    {
        return $this->withSourceEndpointOwnerID($sourceEndpointOwnerID);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointUserName() instead.
     *
     * @param string $destinationEndpointUserName
     *
     * @return $this
     */
    public function setDestinationEndpointUserName($destinationEndpointUserName)
    {
        return $this->withDestinationEndpointUserName($destinationEndpointUserName);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointPort() instead.
     *
     * @param string $destinationEndpointPort
     *
     * @return $this
     */
    public function setDestinationEndpointPort($destinationEndpointPort)
    {
        return $this->withDestinationEndpointPort($destinationEndpointPort);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointRegion() instead.
     *
     * @param string $sourceEndpointRegion
     *
     * @return $this
     */
    public function setSourceEndpointRegion($sourceEndpointRegion)
    {
        return $this->withSourceEndpointRegion($sourceEndpointRegion);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointRole() instead.
     *
     * @param string $sourceEndpointRole
     *
     * @return $this
     */
    public function setSourceEndpointRole($sourceEndpointRole)
    {
        return $this->withSourceEndpointRole($sourceEndpointRole);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointDataBaseName() instead.
     *
     * @param string $destinationEndpointDataBaseName
     *
     * @return $this
     */
    public function setDestinationEndpointDataBaseName($destinationEndpointDataBaseName)
    {
        return $this->withDestinationEndpointDataBaseName($destinationEndpointDataBaseName);
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
     * @deprecated deprecated since version 2.0, Use withSourceEndpointPassword() instead.
     *
     * @param string $sourceEndpointPassword
     *
     * @return $this
     */
    public function setSourceEndpointPassword($sourceEndpointPassword)
    {
        return $this->withSourceEndpointPassword($sourceEndpointPassword);
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
     * @deprecated deprecated since version 2.0, Use withMigrationReserved() instead.
     *
     * @param string $migrationReserved
     *
     * @return $this
     */
    public function setMigrationReserved($migrationReserved)
    {
        return $this->withMigrationReserved($migrationReserved);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointIP() instead.
     *
     * @param string $destinationEndpointIP
     *
     * @return $this
     */
    public function setDestinationEndpointIP($destinationEndpointIP)
    {
        return $this->withDestinationEndpointIP($destinationEndpointIP);
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
     * @deprecated deprecated since version 2.0, Use withMigrationJobName() instead.
     *
     * @param string $migrationJobName
     *
     * @return $this
     */
    public function setMigrationJobName($migrationJobName)
    {
        return $this->withMigrationJobName($migrationJobName);
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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointInstanceType() instead.
     *
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        return $this->withDestinationEndpointInstanceType($destinationEndpointInstanceType);
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
