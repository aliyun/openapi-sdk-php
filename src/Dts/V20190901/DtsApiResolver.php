<?php

namespace AlibabaCloud\Dts\V20190901;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ConfigureSynchronizationJob configureSynchronizationJob(array $options = [])
 * @method ConfigureSynchronizationJobAlert configureSynchronizationJobAlert(array $options = [])
 * @method CreateSynchronizationJob createSynchronizationJob(array $options = [])
 * @method DeleteSynchronizationJob deleteSynchronizationJob(array $options = [])
 * @method DescribeEndpointSwitchStatus describeEndpointSwitchStatus(array $options = [])
 * @method DescribeSynchronizationJobAlert describeSynchronizationJobAlert(array $options = [])
 * @method DescribeSynchronizationJobs describeSynchronizationJobs(array $options = [])
 * @method DescribeSynchronizationJobStatus describeSynchronizationJobStatus(array $options = [])
 * @method DescribeSynchronizationObjectModifyStatus describeSynchronizationObjectModifyStatus(array $options = [])
 * @method ModifySynchronizationObject modifySynchronizationObject(array $options = [])
 * @method ResetSynchronizationJob resetSynchronizationJob(array $options = [])
 * @method StartSynchronizationJob startSynchronizationJob(array $options = [])
 * @method SuspendSynchronizationJob suspendSynchronizationJob(array $options = [])
 * @method SwitchSynchronizationEndpoint switchSynchronizationEndpoint(array $options = [])
 */
class DtsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dts';

    /** @var string */
    public $version = '2019-09-01';

    /** @var string */
    public $method = 'POST';
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
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ConfigureSynchronizationJob extends Rpc
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
 * @method string getDelayOverSeconds()
 * @method $this withDelayOverSeconds($value)
 * @method string getDelayAlertStatus()
 * @method $this withDelayAlertStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getErrorAlertPhone()
 * @method $this withErrorAlertPhone($value)
 * @method string getDelayAlertPhone()
 * @method $this withDelayAlertPhone($value)
 * @method string getErrorAlertStatus()
 * @method $this withErrorAlertStatus($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ConfigureSynchronizationJobAlert extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDestRegion()
 * @method $this withDestRegion($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTopology()
 * @method $this withTopology($value)
 * @method string getNetworkType()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getSynchronizationJobClass()
 * @method $this withSynchronizationJobClass($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getDestinationEndpointInstanceType()
 */
class CreateSynchronizationJob extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 */
class DeleteSynchronizationJob extends Rpc
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
class DescribeEndpointSwitchStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class DescribeSynchronizationJobAlert extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeSynchronizationJobs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class DescribeSynchronizationJobStatus extends Rpc
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
class DescribeSynchronizationObjectModifyStatus extends Rpc
{
}

/**
 * @method string getSynchronizationObjects()
 * @method $this withSynchronizationObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ModifySynchronizationObject extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ResetSynchronizationJob extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class StartSynchronizationJob extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class SuspendSynchronizationJob extends Rpc
{
}

/**
 * @method string getEndpointInstanceType()
 * @method string getEndpointIP()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getEndpointType()
 * @method string getEndpointPort()
 * @method string getEndpointInstanceId()
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class SwitchSynchronizationEndpoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpointInstanceType($value)
    {
        $this->data['EndpointInstanceType'] = $value;
        $this->options['query']['Endpoint.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpointIP($value)
    {
        $this->data['EndpointIP'] = $value;
        $this->options['query']['Endpoint.IP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpointType($value)
    {
        $this->data['EndpointType'] = $value;
        $this->options['query']['Endpoint.Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpointPort($value)
    {
        $this->data['EndpointPort'] = $value;
        $this->options['query']['Endpoint.Port'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpointInstanceId($value)
    {
        $this->data['EndpointInstanceId'] = $value;
        $this->options['query']['Endpoint.InstanceId'] = $value;

        return $this;
    }
}
