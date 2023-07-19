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
 * @method CountJobByCondition countJobByCondition(array $options = [])
 * @method CreateConsumerChannel createConsumerChannel(array $options = [])
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreateDedicatedClusterMonitorRule createDedicatedClusterMonitorRule(array $options = [])
 * @method CreateDtsInstance createDtsInstance(array $options = [])
 * @method CreateJobMonitorRule createJobMonitorRule(array $options = [])
 * @method CreateMigrationJob createMigrationJob(array $options = [])
 * @method CreateSubscriptionInstance createSubscriptionInstance(array $options = [])
 * @method CreateSynchronizationJob createSynchronizationJob(array $options = [])
 * @method DeleteConsumerChannel deleteConsumerChannel(array $options = [])
 * @method DeleteConsumerGroup deleteConsumerGroup(array $options = [])
 * @method DeleteDtsJob deleteDtsJob(array $options = [])
 * @method DeleteDtsJobs deleteDtsJobs(array $options = [])
 * @method DeleteMigrationJob deleteMigrationJob(array $options = [])
 * @method DeleteSubscriptionInstance deleteSubscriptionInstance(array $options = [])
 * @method DeleteSynchronizationJob deleteSynchronizationJob(array $options = [])
 * @method DescribeChannelAccount describeChannelAccount(array $options = [])
 * @method DescribeCheckJobs describeCheckJobs(array $options = [])
 * @method DescribeClusterOperateLogs describeClusterOperateLogs(array $options = [])
 * @method DescribeClusterUsedUtilization describeClusterUsedUtilization(array $options = [])
 * @method DescribeConnectionStatus describeConnectionStatus(array $options = [])
 * @method DescribeConsumerChannel describeConsumerChannel(array $options = [])
 * @method DescribeConsumerGroup describeConsumerGroup(array $options = [])
 * @method DescribeDataCheckReportUrl describeDataCheckReportUrl(array $options = [])
 * @method DescribeDataCheckTableDetails describeDataCheckTableDetails(array $options = [])
 * @method DescribeDataCheckTableDiffDetails describeDataCheckTableDiffDetails(array $options = [])
 * @method DescribeDedicatedCluster describeDedicatedCluster(array $options = [])
 * @method DescribeDedicatedClusterMonitorRule describeDedicatedClusterMonitorRule(array $options = [])
 * @method DescribeDtsEtlJobVersionInfo describeDtsEtlJobVersionInfo(array $options = [])
 * @method DescribeDTSIP describeDTSIP(array $options = [])
 * @method DescribeDtsJobDetail describeDtsJobDetail(array $options = [])
 * @method DescribeDtsJobs describeDtsJobs(array $options = [])
 * @method DescribeDtsServiceLog describeDtsServiceLog(array $options = [])
 * @method DescribeEndpointSwitchStatus describeEndpointSwitchStatus(array $options = [])
 * @method DescribeEtlJobLogs describeEtlJobLogs(array $options = [])
 * @method DescribeInitializationStatus describeInitializationStatus(array $options = [])
 * @method DescribeJobMonitorRule describeJobMonitorRule(array $options = [])
 * @method DescribeMetricList describeMetricList(array $options = [])
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
 * @method DescribeTagKeys describeTagKeys(array $options = [])
 * @method DescribeTagValues describeTagValues(array $options = [])
 * @method InitDtsRdsInstance initDtsRdsInstance(array $options = [])
 * @method ListDedicatedCluster listDedicatedCluster(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyConsumerChannel modifyConsumerChannel(array $options = [])
 * @method ModifyConsumerGroupPassword modifyConsumerGroupPassword(array $options = [])
 * @method ModifyConsumptionTimestamp modifyConsumptionTimestamp(array $options = [])
 * @method ModifyDedicatedCluster modifyDedicatedCluster(array $options = [])
 * @method ModifyDtsJob modifyDtsJob(array $options = [])
 * @method ModifyDtsJobDedicatedCluster modifyDtsJobDedicatedCluster(array $options = [])
 * @method ModifyDtsJobDuLimit modifyDtsJobDuLimit(array $options = [])
 * @method ModifyDtsJobName modifyDtsJobName(array $options = [])
 * @method ModifyDtsJobPassword modifyDtsJobPassword(array $options = [])
 * @method ModifySubscription modifySubscription(array $options = [])
 * @method ModifySubscriptionObject modifySubscriptionObject(array $options = [])
 * @method ModifySynchronizationObject modifySynchronizationObject(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method ResetDtsJob resetDtsJob(array $options = [])
 * @method ResetSynchronizationJob resetSynchronizationJob(array $options = [])
 * @method ReverseTwoWayDirection reverseTwoWayDirection(array $options = [])
 * @method ShieldPrecheck shieldPrecheck(array $options = [])
 * @method SkipPreCheck skipPreCheck(array $options = [])
 * @method StartDtsJob startDtsJob(array $options = [])
 * @method StartDtsJobs startDtsJobs(array $options = [])
 * @method StartMigrationJob startMigrationJob(array $options = [])
 * @method StartSubscriptionInstance startSubscriptionInstance(array $options = [])
 * @method StartSynchronizationJob startSynchronizationJob(array $options = [])
 * @method StopDedicatedCluster stopDedicatedCluster(array $options = [])
 * @method StopDtsJob stopDtsJob(array $options = [])
 * @method StopDtsJobs stopDtsJobs(array $options = [])
 * @method StopMigrationJob stopMigrationJob(array $options = [])
 * @method SummaryJobDetail summaryJobDetail(array $options = [])
 * @method SuspendDtsJob suspendDtsJob(array $options = [])
 * @method SuspendDtsJobs suspendDtsJobs(array $options = [])
 * @method SuspendMigrationJob suspendMigrationJob(array $options = [])
 * @method SuspendSynchronizationJob suspendSynchronizationJob(array $options = [])
 * @method SwitchPhysicalDtsJobToCloud switchPhysicalDtsJobToCloud(array $options = [])
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
 * @method string getDestinationEndpointOwnerID()
 * @method $this withDestinationEndpointOwnerID($value)
 * @method string getDelayPhone()
 * @method $this withDelayPhone($value)
 * @method string getDtsBisLabel()
 * @method $this withDtsBisLabel($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getErrorPhone()
 * @method $this withErrorPhone($value)
 * @method string getDestinationEndpointUserName()
 * @method $this withDestinationEndpointUserName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDestinationEndpointRole()
 * @method $this withDestinationEndpointRole($value)
 * @method string getDbList()
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
 * @method string getDisasterRecoveryJob()
 * @method $this withDisasterRecoveryJob($value)
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
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getDestinationEndpointRegion()
 * @method $this withDestinationEndpointRegion($value)
 * @method string getDataCheckConfigure()
 * @method $this withDataCheckConfigure($value)
 * @method string getReserve()
 * @method string getSourceEndpointVSwitchID()
 * @method $this withSourceEndpointVSwitchID($value)
 * @method string getDataSynchronization()
 * @method $this withDataSynchronization($value)
 * @method string getFileOssUrl()
 * @method $this withFileOssUrl($value)
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
    public function withReserve($value)
    {
        $this->data['Reserve'] = $value;
        $this->options['form_params']['Reserve'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceEndpointInstanceID()
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getDestinationEndpointInstanceID()
 * @method string getSourceEndpointIP()
 * @method string getDestinationEndpointPassword()
 * @method string getMigrationModeDataIntialization()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getMigrationModeStructureIntialization()
 * @method string getMigrationModeDataSynchronization()
 * @method string getDestinationEndpointRegion()
 * @method string getSourceEndpointUserName()
 * @method string getSourceEndpointDatabaseName()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getDestinationEndpointPort()
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPassword()
 * @method string getDestinationEndpointIP()
 * @method string getMigrationJobName()
 * @method $this withMigrationJobName($value)
 * @method string getDestinationEndpointInstanceType()
 * @method string getSourceEndpointEngineName()
 * @method string getSourceEndpointOracleSID()
 * @method string getMigrationObject()
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getDestinationEndpointEngineName()
 * @method string getDestinationEndpointUserName()
 * @method string getDestinationEndpointOracleSID()
 * @method string getSourceEndpointRegion()
 * @method string getDestinationEndpointDataBaseName()
 * @method string getMigrationReserved()
 * @method $this withMigrationReserved($value)
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
    public function withDestinationEndpointDataBaseName($value)
    {
        $this->data['DestinationEndpointDataBaseName'] = $value;
        $this->options['query']['DestinationEndpoint.DataBaseName'] = $value;

        return $this;
    }
}

/**
 * @method string getMigrationJobId()
 * @method $this withMigrationJobId($value)
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
 */
class ConfigureMigrationJobAlert extends Rpc
{
}

/**
 * @method string getCheckpoint()
 * @method $this withCheckpoint($value)
 * @method string getSubscriptionInstanceVSwitchId()
 * @method $this withSubscriptionInstanceVSwitchId($value)
 * @method string getSourceEndpointUserName()
 * @method $this withSourceEndpointUserName($value)
 * @method string getDelayPhone()
 * @method $this withDelayPhone($value)
 * @method string getDtsBisLabel()
 * @method $this withDtsBisLabel($value)
 * @method string getSourceEndpointIP()
 * @method $this withSourceEndpointIP($value)
 * @method string getErrorPhone()
 * @method $this withErrorPhone($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDbList()
 * @method $this withDbList($value)
 * @method string getSubscriptionInstanceNetworkType()
 * @method $this withSubscriptionInstanceNetworkType($value)
 * @method string getSourceEndpointPassword()
 * @method $this withSourceEndpointPassword($value)
 * @method string getSubscriptionInstanceVPCId()
 * @method $this withSubscriptionInstanceVPCId($value)
 * @method string getDelayRuleTime()
 * @method $this withDelayRuleTime($value)
 * @method string getSourceEndpointInstanceType()
 * @method $this withSourceEndpointInstanceType($value)
 * @method string getDtsJobName()
 * @method $this withDtsJobName($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getSourceEndpointRegion()
 * @method $this withSourceEndpointRegion($value)
 * @method string getDelayNotice()
 * @method $this withDelayNotice($value)
 * @method string getSourceEndpointInstanceID()
 * @method $this withSourceEndpointInstanceID($value)
 * @method string getSourceEndpointOwnerID()
 * @method $this withSourceEndpointOwnerID($value)
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getSubscriptionDataTypeDML()
 * @method $this withSubscriptionDataTypeDML($value)
 * @method string getSourceEndpointDatabaseName()
 * @method $this withSourceEndpointDatabaseName($value)
 * @method string getReserve()
 * @method $this withReserve($value)
 * @method string getSubscriptionDataTypeDDL()
 * @method $this withSubscriptionDataTypeDDL($value)
 * @method string getSourceEndpointPort()
 * @method $this withSourceEndpointPort($value)
 * @method string getSourceEndpointOracleSID()
 * @method $this withSourceEndpointOracleSID($value)
 * @method string getErrorNotice()
 * @method $this withErrorNotice($value)
 * @method string getSourceEndpointRole()
 * @method $this withSourceEndpointRole($value)
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
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getDelayAlertPhone()
 * @method $this withDelayAlertPhone($value)
 * @method string getDelayOverSeconds()
 * @method $this withDelayOverSeconds($value)
 * @method string getDelayAlertStatus()
 * @method $this withDelayAlertStatus($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getErrorAlertPhone()
 * @method $this withErrorAlertPhone($value)
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
 * @method string getPartitionKeyModifyTimeMInute()
 * @method string getPartitionKeyModifyTimeDAy()
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSourceEndpointUserName()
 * @method string getSourceEndpointDatabaseName()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointOwnerID()
 * @method string getDestinationEndpointPort()
 * @method string getPartitionKeyModifyTimeYEar()
 * @method string getSourceEndpointRole()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceEndpointPassword()
 * @method string getDestinationEndpointIP()
 * @method string getDestinationEndpointInstanceType()
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 * @method string getDataInitialization()
 * @method $this withDataInitialization($value)
 * @method string getStructureInitialization()
 * @method $this withStructureInitialization($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getPartitionKeyModifyTimeMOnth()
 * @method string getDestinationEndpointUserName()
 * @method string getPartitionKeyModifyTimeHOur()
 * @method string getDestinationEndpointDataBaseName()
 * @method string getMigrationReserved()
 * @method $this withMigrationReserved($value)
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
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSynchronizationReplicatorCompareEnable()
 * @method $this withSynchronizationReplicatorCompareEnable($value)
 * @method string getSynchronizationDirection()
 * @method $this withSynchronizationDirection($value)
 */
class ConfigureSynchronizationJobReplicatorCompare extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSrcDbType()
 * @method $this withSrcDbType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getDestDbType()
 * @method $this withDestDbType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CountJobByCondition extends Rpc
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
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateConsumerGroup extends Rpc
{
}

/**
 * @method string getCpuAlarmThreshold()
 * @method $this withCpuAlarmThreshold($value)
 * @method string getPhones()
 * @method $this withPhones($value)
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getDiskAlarmThreshold()
 * @method $this withDiskAlarmThreshold($value)
 * @method string getMemAlarmThreshold()
 * @method $this withMemAlarmThreshold($value)
 * @method string getDuAlarmThreshold()
 * @method $this withDuAlarmThreshold($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNoticeSwitch()
 * @method $this withNoticeSwitch($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDedicatedClusterMonitorRule extends Rpc
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
 * @method string getDu()
 * @method $this withDu($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getComputeUnit()
 * @method $this withComputeUnit($value)
 * @method string getFeeType()
 * @method $this withFeeType($value)
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
 * @method string getNoticeValue()
 * @method $this withNoticeValue($value)
 * @method string getTimes()
 * @method $this withTimes($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDelayRuleTime()
 * @method $this withDelayRuleTime($value)
 * @method string getPhone()
 * @method $this withPhone($value)
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSourceEndpointInstanceType()
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
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
 * @method string getJobType()
 * @method $this withJobType($value)
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
 * @method string getDtsJobIds()
 * @method $this withDtsJobIds($value)
 */
class DeleteDtsJobs extends Rpc
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
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getOriginType()
 * @method $this withOriginType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeChannelAccount extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCheckType()
 * @method $this withCheckType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeCheckJobs extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getDedicatedClusterId()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getAccountId()
 * @method string getPageSize()
 * @method string getDtsJobId()
 * @method string getEndTime()
 * @method string getOwnerID()
 */
class DescribeClusterOperateLogs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDedicatedClusterId($value)
    {
        $this->data['DedicatedClusterId'] = $value;
        $this->options['form_params']['DedicatedClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['form_params']['AccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDtsJobId($value)
    {
        $this->data['DtsJobId'] = $value;
        $this->options['form_params']['DtsJobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerID($value)
    {
        $this->data['OwnerID'] = $value;
        $this->options['form_params']['OwnerID'] = $value;

        return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getClientToken()
 * @method string getDedicatedClusterId()
 * @method string getAccountId()
 * @method string getSecurityToken()
 * @method string getDtsJobId()
 * @method string getEnv()
 * @method string getOwnerID()
 */
class DescribeClusterUsedUtilization extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDedicatedClusterId($value)
    {
        $this->data['DedicatedClusterId'] = $value;
        $this->options['form_params']['DedicatedClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['form_params']['AccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityToken($value)
    {
        $this->data['SecurityToken'] = $value;
        $this->options['form_params']['SecurityToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDtsJobId($value)
    {
        $this->data['DtsJobId'] = $value;
        $this->options['form_params']['DtsJobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnv($value)
    {
        $this->data['Env'] = $value;
        $this->options['form_params']['Env'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerID($value)
    {
        $this->data['OwnerID'] = $value;
        $this->options['form_params']['OwnerID'] = $value;

        return $this;
    }
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
 * @method string getCheckType()
 * @method $this withCheckType($value)
 * @method string getTbName()
 * @method $this withTbName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 */
class DescribeDataCheckReportUrl extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCheckType()
 * @method $this withCheckType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDataCheckTableDetails extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCheckType()
 * @method $this withCheckType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getTbName()
 * @method $this withTbName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DescribeDataCheckTableDiffDetails extends Rpc
{
}

/**
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedCluster extends Rpc
{
}

/**
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDedicatedClusterMonitorRule extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class DescribeDtsEtlJobVersionInfo extends Rpc
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
 * @method string getSyncSubJobHistory()
 * @method $this withSyncSubJobHistory($value)
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
 * @method string getWithoutDbList()
 * @method $this withWithoutDbList($value)
 * @method string getOrderDirection()
 * @method $this withOrderDirection($value)
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderColumn()
 * @method $this withOrderColumn($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDtsBisLabel()
 * @method $this withDtsBisLabel($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getOriginType()
 * @method $this withOriginType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDtsJobs extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getSubJobType()
 * @method $this withSubJobType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDtsServiceLog extends Rpc
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
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 */
class DescribeEtlJobLogs extends Rpc
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
 * @method string getMetricType()
 * @method string getClientToken()
 * @method string getStartTime()
 * @method string getAccountId()
 * @method string getParam()
 * @method string getDtsJobId()
 * @method string getMetricName()
 * @method string getPeriod()
 * @method string getEndTime()
 * @method string getEnv()
 * @method string getOwnerID()
 */
class DescribeMetricList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['form_params']['AccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParam($value)
    {
        $this->data['Param'] = $value;
        $this->options['form_params']['Param'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDtsJobId($value)
    {
        $this->data['DtsJobId'] = $value;
        $this->options['form_params']['DtsJobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricName($value)
    {
        $this->data['MetricName'] = $value;
        $this->options['form_params']['MetricName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnv($value)
    {
        $this->data['Env'] = $value;
        $this->options['form_params']['Env'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerID($value)
    {
        $this->data['OwnerID'] = $value;
        $this->options['form_params']['OwnerID'] = $value;

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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getJobCode()
 * @method $this withJobCode($value)
 * @method string getName()
 * @method $this withName($value)
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
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getInstFilterRegion()
 * @method $this withInstFilterRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubscriptionInstanceName()
 * @method $this withSubscriptionInstanceName($value)
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
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getSubMigrationJobIds()
 * @method $this withSubMigrationJobIds($value)
 * @method string getTopics()
 * @method $this withTopics($value)
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
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSynchronizationJobName()
 * @method $this withSynchronizationJobName($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getInstFilterRegion()
 * @method $this withInstFilterRegion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeTagKeys extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeTagValues extends Rpc
{
}

/**
 * @method string getEndpointInstanceId()
 * @method $this withEndpointInstanceId($value)
 * @method string getEndpointRegion()
 * @method $this withEndpointRegion($value)
 * @method string getEndpointCenId()
 * @method $this withEndpointCenId($value)
 * @method string getEndpointInstanceType()
 * @method $this withEndpointInstanceType($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class InitDtsRdsInstance extends Rpc
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
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 */
class ListDedicatedCluster extends Rpc
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
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class ModifyConsumerChannel extends Rpc
{
}

/**
 * @method string getConsumerGroupID()
 * @method $this withConsumerGroupID($value)
 * @method string getConsumerGroupPassword()
 * @method $this withConsumerGroupPassword($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getConsumerGroupUserName()
 * @method $this withConsumerGroupUserName($value)
 * @method string getConsumerGroupName()
 * @method $this withConsumerGroupName($value)
 * @method string getSubscriptionInstanceId()
 * @method $this withSubscriptionInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConsumerGroupNewPassword()
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
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDedicatedClusterName()
 * @method $this withDedicatedClusterName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOversoldRatio()
 * @method $this withOversoldRatio($value)
 */
class ModifyDedicatedCluster extends Rpc
{
}

/**
 * @method string getDataInitialization()
 * @method $this withDataInitialization($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStructureInitialization()
 * @method $this withStructureInitialization($value)
 * @method string getEtlOperatorColumnReference()
 * @method string getDataSynchronization()
 * @method $this withDataSynchronization($value)
 * @method string getDbList()
 * @method string getFileOssUrl()
 * @method $this withFileOssUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getModifyTypeEnum()
 * @method string getReserved()
 * @method string getFilterTableName()
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
    public function withEtlOperatorColumnReference($value)
    {
        $this->data['EtlOperatorColumnReference'] = $value;
        $this->options['form_params']['EtlOperatorColumnReference'] = $value;

        return $this;
    }

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
    public function withModifyTypeEnum($value)
    {
        $this->data['ModifyTypeEnum'] = $value;
        $this->options['form_params']['ModifyTypeEnum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReserved($value)
    {
        $this->data['Reserved'] = $value;
        $this->options['form_params']['Reserved'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterTableName($value)
    {
        $this->data['FilterTableName'] = $value;
        $this->options['form_params']['FilterTableName'] = $value;

        return $this;
    }
}

/**
 * @method string getDtsJobIds()
 * @method $this withDtsJobIds($value)
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDtsJobDedicatedCluster extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDuLimit()
 * @method $this withDuLimit($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 */
class ModifyDtsJobDuLimit extends Rpc
{
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
 * @method string getIgnoreErrorSubJob()
 * @method $this withIgnoreErrorSubJob($value)
 * @method string getDtsInstanceId()
 * @method $this withDtsInstanceId($value)
 */
class ReverseTwoWayDirection extends Rpc
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
 * @method string getSkip()
 * @method $this withSkip($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getSkipPreCheckNames()
 * @method $this withSkipPreCheckNames($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getSkipPreCheckItems()
 * @method $this withSkipPreCheckItems($value)
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
 * @method string getDtsJobIds()
 * @method $this withDtsJobIds($value)
 */
class StartDtsJobs extends Rpc
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
 * @method string getDedicatedClusterId()
 * @method $this withDedicatedClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDedicatedClusterName()
 * @method $this withDedicatedClusterName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopDedicatedCluster extends Rpc
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
 * @method string getDtsJobIds()
 * @method $this withDtsJobIds($value)
 */
class StopDtsJobs extends Rpc
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
 * @method string getStructType()
 * @method $this withStructType($value)
 * @method string getDtsJobId()
 * @method $this withDtsJobId($value)
 * @method string getJobCode()
 * @method $this withJobCode($value)
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
 * @method string getDtsJobIds()
 * @method $this withDtsJobIds($value)
 */
class SuspendDtsJobs extends Rpc
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
class SwitchPhysicalDtsJobToCloud extends Rpc
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
