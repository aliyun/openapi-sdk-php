<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigureSynchronizationJob
 *
 * @method string getSourceEndpointInstanceId()
 * @method string getCheckpoint()
 * @method string getDestinationEndpointInstanceId()
 * @method string getSourceEndpointIP()
 * @method string getSynchronizationObjects()
 * @method string getDestinationEndpointPassword()
 * @method string getDataInitialization()
 * @method string getStructureInitialization()
 * @method string getPartitionKeyModifyTimeMInute()
 * @method string getPartitionKeyModifyTimeDAy()
 * @method string getSourceEndpointInstanceType()
 * @method string getSynchronizationJobId()
 * @method string getSynchronizationJobName()
 * @method string getSourceEndpointUserName()
 * @method string getPartitionKeyModifyTimeMOnth()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getDestinationEndpointUserName()
 * @method string getDestinationEndpointPort()
 * @method string getPartitionKeyModifyTimeYEar()
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method string getPartitionKeyModifyTimeHOur()
 * @method string getSourceEndpointPassword()
 * @method string getMigrationReserved()
 * @method string getDestinationEndpointIP()
 * @method string getDestinationEndpointInstanceType()
 */
class ConfigureSynchronizationJob extends RpcRequest
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
    public $action = 'ConfigureSynchronizationJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSourceEndpointInstanceId() instead.
     *
     * @param string $sourceEndpointInstanceId
     *
     * @return $this
     */
    public function setSourceEndpointInstanceId($sourceEndpointInstanceId)
    {
        return $this->withSourceEndpointInstanceId($sourceEndpointInstanceId);
    }

    /**
     * @param string $sourceEndpointInstanceId
     *
     * @return $this
     */
    public function withSourceEndpointInstanceId($sourceEndpointInstanceId)
    {
        $this->data['SourceEndpointInstanceId'] = $sourceEndpointInstanceId;
        $this->options['query']['SourceEndpoint.InstanceId'] = $sourceEndpointInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withDestinationEndpointInstanceId() instead.
     *
     * @param string $destinationEndpointInstanceId
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceId($destinationEndpointInstanceId)
    {
        return $this->withDestinationEndpointInstanceId($destinationEndpointInstanceId);
    }

    /**
     * @param string $destinationEndpointInstanceId
     *
     * @return $this
     */
    public function withDestinationEndpointInstanceId($destinationEndpointInstanceId)
    {
        $this->data['DestinationEndpointInstanceId'] = $destinationEndpointInstanceId;
        $this->options['query']['DestinationEndpoint.InstanceId'] = $destinationEndpointInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withSynchronizationObjects() instead.
     *
     * @param string $synchronizationObjects
     *
     * @return $this
     */
    public function setSynchronizationObjects($synchronizationObjects)
    {
        return $this->withSynchronizationObjects($synchronizationObjects);
    }

    /**
     * @param string $synchronizationObjects
     *
     * @return $this
     */
    public function withSynchronizationObjects($synchronizationObjects)
    {
        $this->data['SynchronizationObjects'] = $synchronizationObjects;
        $this->options['query']['SynchronizationObjects'] = $synchronizationObjects;

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
     * @deprecated deprecated since version 2.0, Use withDataInitialization() instead.
     *
     * @param string $dataInitialization
     *
     * @return $this
     */
    public function setDataInitialization($dataInitialization)
    {
        return $this->withDataInitialization($dataInitialization);
    }

    /**
     * @param string $dataInitialization
     *
     * @return $this
     */
    public function withDataInitialization($dataInitialization)
    {
        $this->data['DataInitialization'] = $dataInitialization;
        $this->options['query']['DataInitialization'] = $dataInitialization;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStructureInitialization() instead.
     *
     * @param string $structureInitialization
     *
     * @return $this
     */
    public function setStructureInitialization($structureInitialization)
    {
        return $this->withStructureInitialization($structureInitialization);
    }

    /**
     * @param string $structureInitialization
     *
     * @return $this
     */
    public function withStructureInitialization($structureInitialization)
    {
        $this->data['StructureInitialization'] = $structureInitialization;
        $this->options['query']['StructureInitialization'] = $structureInitialization;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPartitionKeyModifyTimeMInute() instead.
     *
     * @return string
     */
    public function getPartitionKeyModifyTime_Minute()
    {
        return $this->getPartitionKeyModifyTimeMInute();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPartitionKeyModifyTimeMInute() instead.
     *
     * @param string $partitionKeyModifyTime_Minute
     *
     * @return $this
     */
    public function setPartitionKeyModifyTime_Minute($partitionKeyModifyTime_Minute)
    {
        return $this->withPartitionKeyModifyTimeMInute($partitionKeyModifyTime_Minute);
    }

    /**
     * @param string $partitionKeyModifyTimeMInute
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeMInute($partitionKeyModifyTimeMInute)
    {
        $this->data['PartitionKeyModifyTimeMInute'] = $partitionKeyModifyTimeMInute;
        $this->options['query']['PartitionKey.ModifyTime_Minute'] = $partitionKeyModifyTimeMInute;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPartitionKeyModifyTimeDAy() instead.
     *
     * @return string
     */
    public function getPartitionKeyModifyTime_Day()
    {
        return $this->getPartitionKeyModifyTimeDAy();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPartitionKeyModifyTimeDAy() instead.
     *
     * @param string $partitionKeyModifyTime_Day
     *
     * @return $this
     */
    public function setPartitionKeyModifyTime_Day($partitionKeyModifyTime_Day)
    {
        return $this->withPartitionKeyModifyTimeDAy($partitionKeyModifyTime_Day);
    }

    /**
     * @param string $partitionKeyModifyTimeDAy
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeDAy($partitionKeyModifyTimeDAy)
    {
        $this->data['PartitionKeyModifyTimeDAy'] = $partitionKeyModifyTimeDAy;
        $this->options['query']['PartitionKey.ModifyTime_Day'] = $partitionKeyModifyTimeDAy;

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
     * @deprecated deprecated since version 2.0, Use withSynchronizationJobId() instead.
     *
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function setSynchronizationJobId($synchronizationJobId)
    {
        return $this->withSynchronizationJobId($synchronizationJobId);
    }

    /**
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function withSynchronizationJobId($synchronizationJobId)
    {
        $this->data['SynchronizationJobId'] = $synchronizationJobId;
        $this->options['query']['SynchronizationJobId'] = $synchronizationJobId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSynchronizationJobName() instead.
     *
     * @param string $synchronizationJobName
     *
     * @return $this
     */
    public function setSynchronizationJobName($synchronizationJobName)
    {
        return $this->withSynchronizationJobName($synchronizationJobName);
    }

    /**
     * @param string $synchronizationJobName
     *
     * @return $this
     */
    public function withSynchronizationJobName($synchronizationJobName)
    {
        $this->data['SynchronizationJobName'] = $synchronizationJobName;
        $this->options['query']['SynchronizationJobName'] = $synchronizationJobName;

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
     * @deprecated deprecated since version 2.0, Use getPartitionKeyModifyTimeMOnth() instead.
     *
     * @return string
     */
    public function getPartitionKeyModifyTime_Month()
    {
        return $this->getPartitionKeyModifyTimeMOnth();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPartitionKeyModifyTimeMOnth() instead.
     *
     * @param string $partitionKeyModifyTime_Month
     *
     * @return $this
     */
    public function setPartitionKeyModifyTime_Month($partitionKeyModifyTime_Month)
    {
        return $this->withPartitionKeyModifyTimeMOnth($partitionKeyModifyTime_Month);
    }

    /**
     * @param string $partitionKeyModifyTimeMOnth
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeMOnth($partitionKeyModifyTimeMOnth)
    {
        $this->data['PartitionKeyModifyTimeMOnth'] = $partitionKeyModifyTimeMOnth;
        $this->options['query']['PartitionKey.ModifyTime_Month'] = $partitionKeyModifyTimeMOnth;

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
     * @deprecated deprecated since version 2.0, Use getPartitionKeyModifyTimeYEar() instead.
     *
     * @return string
     */
    public function getPartitionKeyModifyTime_Year()
    {
        return $this->getPartitionKeyModifyTimeYEar();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPartitionKeyModifyTimeYEar() instead.
     *
     * @param string $partitionKeyModifyTime_Year
     *
     * @return $this
     */
    public function setPartitionKeyModifyTime_Year($partitionKeyModifyTime_Year)
    {
        return $this->withPartitionKeyModifyTimeYEar($partitionKeyModifyTime_Year);
    }

    /**
     * @param string $partitionKeyModifyTimeYEar
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeYEar($partitionKeyModifyTimeYEar)
    {
        $this->data['PartitionKeyModifyTimeYEar'] = $partitionKeyModifyTimeYEar;
        $this->options['query']['PartitionKey.ModifyTime_Year'] = $partitionKeyModifyTimeYEar;

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
     * @deprecated deprecated since version 2.0, Use getPartitionKeyModifyTimeHOur() instead.
     *
     * @return string
     */
    public function getPartitionKeyModifyTime_Hour()
    {
        return $this->getPartitionKeyModifyTimeHOur();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPartitionKeyModifyTimeHOur() instead.
     *
     * @param string $partitionKeyModifyTime_Hour
     *
     * @return $this
     */
    public function setPartitionKeyModifyTime_Hour($partitionKeyModifyTime_Hour)
    {
        return $this->withPartitionKeyModifyTimeHOur($partitionKeyModifyTime_Hour);
    }

    /**
     * @param string $partitionKeyModifyTimeHOur
     *
     * @return $this
     */
    public function withPartitionKeyModifyTimeHOur($partitionKeyModifyTimeHOur)
    {
        $this->data['PartitionKeyModifyTimeHOur'] = $partitionKeyModifyTimeHOur;
        $this->options['query']['PartitionKey.ModifyTime_Hour'] = $partitionKeyModifyTimeHOur;

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
