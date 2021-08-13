<?php

namespace AlibabaCloud\Dts\V20200101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ConfigureDtsJob configureDtsJob(array $options = [])
 * @method ConfigureMigrationJob configureMigrationJob(array $options = [])
 * @method ConfigureMigrationJobAlert configureMigrationJobAlert(array $options = [])
 * @method ConfigureSubscription configureSubscription(array $options = [])
 * @method ConfigureSubscriptionInstance configureSubscriptionInstance(array $options = [])
 * @method ConfigureSubscriptionInstanceAlert configureSubscriptionInstanceAlert(array $options = [])
 * @method ConfigureSynchronizationJob configureSynchronizationJob(array $options = [])
 * @method ConfigureSynchronizationJobAlert configureSynchronizationJobAlert(array $options = [])
 * @method ConfigureSynchronizationJobReplicatorCompare configureSynchronizationJobReplicatorCompare(array $options = [])
 * @method CreateConsumerChannel createConsumerChannel(array $options = [])
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreateDtsInstance createDtsInstance(array $options = [])
 * @method CreateJobMonitorRule createJobMonitorRule(array $options = [])
 * @method CreateMigrationJob createMigrationJob(array $options = [])
 * @method CreateSubscriptionInstance createSubscriptionInstance(array $options = [])
 * @method CreateSynchronizationJob createSynchronizationJob(array $options = [])
 * @method DeleteConsumerChannel deleteConsumerChannel(array $options = [])
 * @method DeleteConsumerGroup deleteConsumerGroup(array $options = [])
 * @method DeleteDtsJob deleteDtsJob(array $options = [])
 * @method DeleteMigrationJob deleteMigrationJob(array $options = [])
 * @method DeleteSubscriptionInstance deleteSubscriptionInstance(array $options = [])
 * @method DeleteSynchronizationJob deleteSynchronizationJob(array $options = [])
 * @method DescribeConnectionStatus describeConnectionStatus(array $options = [])
 * @method DescribeConsumerChannel describeConsumerChannel(array $options = [])
 * @method DescribeConsumerGroup describeConsumerGroup(array $options = [])
 * @method DescribeDTSIP describeDTSIP(array $options = [])
 * @method DescribeDtsJobDetail describeDtsJobDetail(array $options = [])
 * @method DescribeDtsJobs describeDtsJobs(array $options = [])
 * @method DescribeEndpointSwitchStatus describeEndpointSwitchStatus(array $options = [])
 * @method DescribeInitializationStatus describeInitializationStatus(array $options = [])
 * @method DescribeJobMonitorRule describeJobMonitorRule(array $options = [])
 * @method DescribeMigrationJobAlert describeMigrationJobAlert(array $options = [])
 * @method DescribeMigrationJobDetail describeMigrationJobDetail(array $options = [])
 * @method DescribeMigrationJobs describeMigrationJobs(array $options = [])
 * @method DescribeMigrationJobStatus describeMigrationJobStatus(array $options = [])
 * @method DescribePreCheckStatus describePreCheckStatus(array $options = [])
 * @method DescribeSubscriptionInstanceAlert describeSubscriptionInstanceAlert(array $options = [])
 * @method DescribeSubscriptionInstances describeSubscriptionInstances(array $options = [])
 * @method DescribeSubscriptionInstanceStatus describeSubscriptionInstanceStatus(array $options = [])
 * @method DescribeSubscriptionMeta describeSubscriptionMeta(array $options = [])
 * @method DescribeSynchronizationJobAlert describeSynchronizationJobAlert(array $options = [])
 * @method DescribeSynchronizationJobReplicatorCompare describeSynchronizationJobReplicatorCompare(array $options = [])
 * @method DescribeSynchronizationJobs describeSynchronizationJobs(array $options = [])
 * @method DescribeSynchronizationJobStatus describeSynchronizationJobStatus(array $options = [])
 * @method DescribeSynchronizationJobStatusList describeSynchronizationJobStatusList(array $options = [])
 * @method DescribeSynchronizationObjectModifyStatus describeSynchronizationObjectModifyStatus(array $options = [])
 * @method IgnoreJobDetail ignoreJobDetail(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyConsumerChannel modifyConsumerChannel(array $options = [])
 * @method ModifyConsumerGroupPassword modifyConsumerGroupPassword(array $options = [])
 * @method ModifyConsumptionTimestamp modifyConsumptionTimestamp(array $options = [])
 * @method ModifyDtsJob modifyDtsJob(array $options = [])
 * @method ModifyDtsJobName modifyDtsJobName(array $options = [])
 * @method ModifyDtsJobPassword modifyDtsJobPassword(array $options = [])
 * @method ModifySubscription modifySubscription(array $options = [])
 * @method ModifySubscriptionObject modifySubscriptionObject(array $options = [])
 * @method ModifySynchronizationObject modifySynchronizationObject(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ResetDtsJob resetDtsJob(array $options = [])
 * @method ResetSynchronizationJob resetSynchronizationJob(array $options = [])
 * @method ShieldPrecheck shieldPrecheck(array $options = [])
 * @method SkipPreCheck skipPreCheck(array $options = [])
 * @method StartDtsJob startDtsJob(array $options = [])
 * @method StartMigrationJob startMigrationJob(array $options = [])
 * @method StartSubscriptionInstance startSubscriptionInstance(array $options = [])
 * @method StartSynchronizationJob startSynchronizationJob(array $options = [])
 * @method StopDtsJob stopDtsJob(array $options = [])
 * @method StopMigrationJob stopMigrationJob(array $options = [])
 * @method SummaryJobDetail summaryJobDetail(array $options = [])
 * @method SuspendDtsJob suspendDtsJob(array $options = [])
 * @method SuspendMigrationJob suspendMigrationJob(array $options = [])
 * @method SuspendSynchronizationJob suspendSynchronizationJob(array $options = [])
 * @method SwitchSynchronizationEndpoint switchSynchronizationEndpoint(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TransferInstanceClass transferInstanceClass(array $options = [])
 * @method TransferPayType transferPayType(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpgradeTwoWay upgradeTwoWay(array $options = [])
 * @method WhiteIpList whiteIpList(array $options = [])
 */
class DtsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dts';

    /** @var string */
    public $version = '2020-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dts';
}

/**
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getDelayPhone()
 * @method $this withDelayPhone($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getErrorPhone()
 * @method $this withErrorPhone($value)
 * @method string getDestinationEndpointUserName()
 * @method $this withDestinationEndpointUserName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDbList()
 * @method $this withDbList($value)
 * @method string getDestinationEndpointOracleSID()
 * @method $this withDestinationEndpointOracleSID($value)
 * @method string getDestinationEndpointPort()
 * @method $this withDestinationEndpointPort($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getDelayRuleTime()
 * @method $this withDelayRuleTime($value)
 * @method string getDestinationEndpointIP()
 * @method $this withDestinationEndpointIP($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getDtsJobName()
 * @method $this withDtsJobName($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getDelayNotice()
 * @method $this withDelayNotice($value)
 * @method string getDestinationEndpointInstanceType()
 * @method $this withDestinationEndpointInstanceType($value)
 * @method string getDataInitialization()
 * @method $this withDataInitialization($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getStructureInitialization()
 * @method $this withStructureInitialization($value)
 * @method string getSourceEndpointOwnerID()
 * @method $this withSourceEndpointOwnerID($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getDestinationEndpointRegion()
 * @method $this withDestinationEndpointRegion($value)
 * @method string getReserve()
 * @method $this withReserve($value)
 * @method string getDataSynchronization()
 * @method $this withDataSynchronization($value)
 * @method string getDestinationEndpointEngineName()
 * @method $this withDestinationEndpointEngineName($value)
 * @method string getDestinationEndpointInstanceID()
 * @method $this withDestinationEndpointInstanceID($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getDestinationEndpointDataBaseName()
 * @method $this withDestinationEndpointDataBaseName($value)
 * @method string getErrorNotice()
 * @method $this withErrorNotice($value)
 * @method string getSourceEndpointRole()
 * @method $this withSourceEndpointRole($value)
 * @method string getDestinationEndpointPassword()
 * @method $this withDestinationEndpointPassword($value)
 * @method string getSourceEndpointEngineName()
 * @method $this withSourceEndpointEngineName($value)
 */
class ConfigureDtsJob extends Rpc
{
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
 * @method string getMigrationModeDataIntialization()
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointEngineName()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getMigrationModeStructureIntialization()
 * @method string getMigrationModeDataSynchronization()
 * @method string getDestinationEndpointRegion()
 * @method string getSourceEndpointUserName()
 * @method string getSourceEndpointDatabaseName()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getDestinationEndpointUserName()
 * @method string getDestinationEndpointOracleSID()
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
    public function withMigrationObject($value)
    {
        $this->data['MigrationObject'] = $value;
        $this->options['form_params']['MigrationObject'] = $value;

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
    public function withDestinationEndpointOracleSID($value)
    {
        $this->data['DestinationEndpointOracleSID'] = $value;
        $this->options['query']['DestinationEndpoint.OracleSID'] = $value;

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
 * @method string getDelayOverSeconds()
 * @method $this withDelayOverSeconds($value)
 * @method string getDelayAlertStatus()
 * @method $this withDelayAlertStatus($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getErrorAlertPhone()
 * @method $this withErrorAlertPhone($value)
 * @method string getDelayAlertPhone()
 * @method $this withDelayAlertPhone($value)
 * @method string getErrorAlertStatus()
 * @method $this withErrorAlertStatus($value)
 */
class ConfigureMigrationJobAlert extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getSubscriptionInstanceVSwitchId()
 * @method $this withSubscriptionInstanceVSwitchId($value)
 * @method string getDelayNotice()
 * @method $this withDelayNotice($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getSourceEndpointOwnerID()
 * @method $this withSourceEndpointOwnerID($value)
 * @method string getDelayPhone()
 * @method $this withDelayPhone($value)
 * @method string getSubscriptionDataTypeDML()
 * @method $this withSubscriptionDataTypeDML($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getErrorPhone()
 * @method $this withErrorPhone($value)
 * @method string getReserve()
 * @method $this withReserve($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDbList()
 * @method $this withDbList($value)
 * @method string getSubscriptionInstanceNetworkType()
 * @method $this withSubscriptionInstanceNetworkType($value)
 * @method string getSubscriptionDataTypeDDL()
 * @method $this withSubscriptionDataTypeDDL($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSubscriptionInstanceVPCId()
 * @method $this withSubscriptionInstanceVPCId($value)
 * @method string getDelayRuleTime()
 * @method $this withDelayRuleTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getDtsJobName()
 * @method $this withDtsJobName($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getErrorNotice()
 * @method $this withErrorNotice($value)
 * @method string getSourceEndpointRole()
 * @method $this withSourceEndpointRole($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSourceEndpointEngineName()
 * @method $this withSourceEndpointEngineName($value)
 */
class ConfigureSubscription extends Rpc
{
}

/**
 * @method string getSourceEndpointInstanceID()
 * @method string getSourceEndpointOracleSID()
 * @method string getSourceEndpointIP()
 * @method string getSubscriptionDataTypeDML()
 * @method string getSourceEndpointInstanceType()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSubscriptionObject()
 * @method string getSubscriptionInstanceVSwitchId()
 * @method string getSourceEndpointUserName()
 * @method string getSourceEndpointDatabaseName()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getSubscriptionInstanceVPCId()
 * @method string getSubscriptionInstanceNetworkType()
 * @method $this withSubscriptionInstanceNetworkType($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubscriptionDataTypeDDL()
 * @method string getSourceEndpointPassword()
 * @method string getSubscriptionInstanceName()
 * @method $this withSubscriptionInstanceName($value)
 */
class ConfigureSubscriptionInstance extends Rpc
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
    public function withSubscriptionObject($value)
    {
        $this->data['SubscriptionObject'] = $value;
        $this->options['form_params']['SubscriptionObject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubscriptionInstanceVSwitchId($value)
    {
        $this->data['SubscriptionInstanceVSwitchId'] = $value;
        $this->options['query']['SubscriptionInstance.VSwitchId'] = $value;

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
    public function withSubscriptionInstanceVPCId($value)
    {
        $this->data['SubscriptionInstanceVPCId'] = $value;
        $this->options['query']['SubscriptionInstance.VPCId'] = $value;

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
    public function withSubscriptionDataTypeDDL($value)
    {
        $this->data['SubscriptionDataTypeDDL'] = $value;
        $this->options['query']['SubscriptionDataType.DDL'] = $value;

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
}

/**
 * @method string getDelayOverSeconds()
 * @method $this withDelayOverSeconds($value)
 * @method string getDelayAlertStatus()
 * @method $this withDelayAlertStatus($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getErrorAlertPhone()
 * @method $this withErrorAlertPhone($value)
 * @method string getDelayAlertPhone()
 * @method $this withDelayAlertPhone($value)
 * @method string getErrorAlertStatus()
 * @method $this withErrorAlertStatus($value)
 */
class ConfigureSubscriptionInstanceAlert extends Rpc
{
}

/**
 * @method string getSourceEndpointInstanceId()
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getDestinationEndpointInstanceId()
 * @method string getSourceEndpointIP()
 * @method string getSynchronizationObjects()
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
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSourceEndpointUserName()
 * @method string getSourceEndpointDatabaseName()
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
 * @method string getDestinationEndpointDataBaseName()
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
    public function withSynchronizationObjects($value)
    {
        $this->data['SynchronizationObjects'] = $value;
        $this->options['form_params']['SynchronizationObjects'] = $value;

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
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getDelayAlertPhone()
 * @method $this withDelayAlertPhone($value)
 * @method string getDelayOverSeconds()
 * @method $this withDelayOverSeconds($value)
 * @method string getDelayAlertStatus()
 * @method $this withDelayAlertStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getErrorAlertPhone()
 * @method $this withErrorAlertPhone($value)
 * @method string getErrorAlertStatus()
 * @method $this withErrorAlertStatus($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ConfigureSynchronizationJobAlert extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationReplicatorCompareEnable()
 * @method $this withSynchronizationReplicatorCompareEnable($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ConfigureSynchronizationJobReplicatorCompare extends Rpc
{
}

/**
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class CreateConsumerChannel extends Rpc
{
}

/**
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 */
class CreateConsumerGroup extends Rpc
{
}

/**
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getDatabaseCount()
 * @method $this withDatabaseCount($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getComputeUnit()
 * @method $this withComputeUnit($value)
 * @method string getDestinationRegion()
 * @method $this withDestinationRegion($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDestinationEndpointEngineName()
 * @method $this withDestinationEndpointEngineName($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getSyncArchitecture()
 * @method $this withSyncArchitecture($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getSourceRegion()
 * @method $this withSourceRegion($value)
 * @method string getSourceEndpointEngineName()
 * @method $this withSourceEndpointEngineName($value)
 */
class CreateDtsInstance extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getDelayRuleTime()
 * @method $this withDelayRuleTime($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getState()
 * @method $this withState($value)
 */
class CreateJobMonitorRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMigrationJobClass()
 * @method $this withMigrationJobClass($value)
 */
class CreateMigrationJob extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateSubscriptionInstance extends Rpc
{

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
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNetworkType()
 * @method string getSourceEndpointInstanceType()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationJobClass()
 * @method $this withSynchronizationJobClass($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDestRegion()
 * @method $this withDestRegion($value)
 * @method string getTopology()
 * @method $this withTopology($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceCount()
 * @method $this withDBInstanceCount($value)
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
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class DeleteConsumerChannel extends Rpc
{
}

/**
 * @method string getConsumerGroupID()
 * @method $this withConsumerGroupID($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DeleteConsumerGroup extends Rpc
{
}

/**
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class DeleteDtsJob extends Rpc
{
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DeleteMigrationJob extends Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DeleteSubscriptionInstance extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DeleteSynchronizationJob extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getSourceEndpointArchitecture()
 * @method $this withSourceEndpointArchitecture($value)
 * @method string getDestinationEndpointInstanceType()
 * @method $this withDestinationEndpointInstanceType($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getDestinationEndpointRegion()
 * @method $this withDestinationEndpointRegion($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getDestinationEndpointUserName()
 * @method $this withDestinationEndpointUserName($value)
 * @method string getDestinationEndpointArchitecture()
 * @method $this withDestinationEndpointArchitecture($value)
 * @method string getDestinationEndpointOracleSID()
 * @method $this withDestinationEndpointOracleSID($value)
 * @method string getDestinationEndpointEngineName()
 * @method $this withDestinationEndpointEngineName($value)
 * @method string getDestinationEndpointInstanceID()
 * @method $this withDestinationEndpointInstanceID($value)
 * @method string getDestinationEndpointPort()
 * @method $this withDestinationEndpointPort($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getDestinationEndpointIP()
 * @method $this withDestinationEndpointIP($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getDestinationEndpointDatabaseName()
 * @method $this withDestinationEndpointDatabaseName($value)
 * @method string getDestinationEndpointPassword()
 * @method $this withDestinationEndpointPassword($value)
 * @method string getSourceEndpointEngineName()
 * @method $this withSourceEndpointEngineName($value)
 */
class DescribeConnectionStatus extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getParentChannelId()
 * @method $this withParentChannelId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class DescribeConsumerChannel extends Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeConsumerGroup extends Rpc
{
}

/**
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getDestinationEndpointRegion()
 * @method $this withDestinationEndpointRegion($value)
 */
class DescribeDTSIP extends Rpc
{
}

/**
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceID()
 * @method $this withDtsInstanceID($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class DescribeDtsJobDetail extends Rpc
{
}

/**
 * @method string getOrderDirection()
 * @method $this withOrderDirection($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDtsJobs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeEndpointSwitchStatus extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeInitializationStatus extends Rpc
{
}

/**
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 */
class DescribeJobMonitorRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeMigrationJobAlert extends Rpc
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
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getMigrationModeDataSynchronization()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMigrationModeStructureInitialization()
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
    public function withMigrationModeStructureInitialization($value)
    {
        $this->data['MigrationModeStructureInitialization'] = $value;
        $this->options['query']['MigrationMode.StructureInitialization'] = $value;

        return $this;
    }
}

/**
 * @method string getInstFilterRegion()
 * @method $this withInstFilterRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method array getTag()
 */
class DescribeMigrationJobs extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

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
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeMigrationJobStatus extends Rpc
{
}

/**
 * @method string getStructType()
 * @method $this withStructType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobCode()
 * @method $this withJobCode($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getStructPhase()
 * @method $this withStructPhase($value)
 */
class DescribePreCheckStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeSubscriptionInstanceAlert extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstFilterRegion()
 * @method $this withInstFilterRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSubscriptionInstanceName()
 * @method $this withSubscriptionInstanceName($value)
 * @method array getTag()
 */
class DescribeSubscriptionInstances extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeSubscriptionInstanceStatus extends Rpc
{
}

/**
 * @method string getTopics()
 * @method $this withTopics($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getSubMigrationJobIds()
 * @method $this withSubMigrationJobIds($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class DescribeSubscriptionMeta extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class DescribeSynchronizationJobAlert extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class DescribeSynchronizationJobReplicatorCompare extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstFilterRegion()
 * @method $this withInstFilterRegion($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 */
class DescribeSynchronizationJobs extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
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
 * @method string getSynchronizationJobIdListJsonStr()
 * @method $this withSynchronizationJobIdListJsonStr($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class DescribeSynchronizationJobStatusList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSynchronizationObjectModifyStatus extends Rpc
{
}

/**
 * @method string getJobCode()
 * @method $this withJobCode($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class IgnoreJobDetail extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class ModifyConsumerChannel extends Rpc
{
}

/**
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getConsumerGroupID()
 * @method $this withConsumerGroupID($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConsumerGroupNewPassword()
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 */
class ModifyConsumerGroupPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerGroupNewPassword($value)
    {
        $this->data['ConsumerGroupNewPassword'] = $value;
        $this->options['query']['consumerGroupNewPassword'] = $value;

        return $this;
    }
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getConsumptionTimestamp()
 * @method $this withConsumptionTimestamp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class ModifyConsumptionTimestamp extends Rpc
{
}

/**
 * @method string getDbList()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEtlOperatorColumnReference()
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ModifyDtsJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbList($value)
    {
        $this->data['DbList'] = $value;
        $this->options['form_params']['DbList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEtlOperatorColumnReference($value)
    {
        $this->data['EtlOperatorColumnReference'] = $value;
        $this->options['form_params']['EtlOperatorColumnReference'] = $value;

        return $this;
    }
}

/**
 * @method string getDtsJobName()
 * @method $this withDtsJobName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 */
class ModifyDtsJobName extends Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ModifyDtsJobPassword extends Rpc
{
}

/**
 * @method string getDbList()
 * @method $this withDbList($value)
 * @method string getSubscriptionDataTypeDDL()
 * @method $this withSubscriptionDataTypeDDL($value)
 * @method string getSubscriptionDataTypeDML()
 * @method $this withSubscriptionDataTypeDML($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class ModifySubscription extends Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSubscriptionObject()
 * @method $this withSubscriptionObject($value)
 */
class ModifySubscriptionObject extends Rpc
{
}

/**
 * @method string getSynchronizationObjects()
 * @method $this withSynchronizationObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ModifySynchronizationObject extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBuyCount()
 * @method $this withBuyCount($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class RenewInstance extends Rpc
{
}

/**
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ResetDtsJob extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ResetSynchronizationJob extends Rpc
{
}

/**
 * @method string getPrecheckItems()
 * @method $this withPrecheckItems($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class ShieldPrecheck extends Rpc
{
}

/**
 * @method string getSkipPreCheckItems()
 * @method $this withSkipPreCheckItems($value)
 * @method string getSkip()
 * @method $this withSkip($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSkipPreCheckNames()
 * @method $this withSkipPreCheckNames($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 */
class SkipPreCheck extends Rpc
{
}

/**
 * @method string getResetCheckpoint()
 * @method $this withResetCheckpoint($value)
 * @method string getResumeHoldJob()
 * @method $this withResumeHoldJob($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class StartDtsJob extends Rpc
{
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class StartMigrationJob extends Rpc
{
}

/**
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class StartSubscriptionInstance extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class StartSynchronizationJob extends Rpc
{
}

/**
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class StopDtsJob extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class StopMigrationJob extends Rpc
{
}

/**
 * @method string getJobCode()
 * @method $this withJobCode($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class SummaryJobDetail extends Rpc
{
}

/**
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class SuspendDtsJob extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 */
class SuspendMigrationJob extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class SuspendSynchronizationJob extends Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getEndpointType()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getEndpointPort()
 * @method string getEndpointInstanceType()
 * @method string getSourceEndpointOwnerID()
 * @method string getSourceEndpointRole()
 * @method string getEndpointIP()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
    public function withEndpointInstanceId($value)
    {
        $this->data['EndpointInstanceId'] = $value;
        $this->options['query']['Endpoint.InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class TransferInstanceClass extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getBuyCount()
 * @method $this withBuyCount($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class TransferPayType extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpgradeTwoWay extends Rpc
{
}

/**
 * @method string getDestinationRegion()
 * @method $this withDestinationRegion($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class WhiteIpList extends Rpc
{
}
