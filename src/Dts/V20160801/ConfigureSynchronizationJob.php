<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

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
class ConfigureSynchronizationJob extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';

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
