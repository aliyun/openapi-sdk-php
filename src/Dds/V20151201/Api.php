<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method MigrateAvailableZone migrateAvailableZone(array $options = [])
 * @method CheckRecoveryCondition checkRecoveryCondition(array $options = [])
 * @method DescribeBackupDBs describeBackupDBs(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method ModifyInstanceVpcAuthMode modifyInstanceVpcAuthMode(array $options = [])
 * @method ModifyActiveOperationPendingTask modifyActiveOperationPendingTask(array $options = [])
 * @method DescribeTargetAVZ describeTargetAVZ(array $options = [])
 * @method DescribeAvailableEngineVersion describeAvailableEngineVersion(array $options = [])
 * @method DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method EvaluateResource evaluateResource(array $options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask(array $options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion(array $options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType(array $options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount(array $options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask(array $options = [])
 * @method DescribeRunningLogRecords describeRunningLogRecords(array $options = [])
 * @method DescribeErrorLogRecords describeErrorLogRecords(array $options = [])
 * @method ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeAuditLogFilter describeAuditLogFilter(array $options = [])
 * @method ModifyAuditLogFilter modifyAuditLogFilter(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch(array $options = [])
 * @method DescribeKernelReleaseNotes describeKernelReleaseNotes(array $options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 * @method ModifyDescribetion modifyDescribetion(array $options = [])
 * @method ModifyAccountInfo modifyAccountInfo(array $options = [])
 * @method DescribeConnectionInfo describeConnectionInfo(array $options = [])
 * @method DescribePerformanceInfo describePerformanceInfo(array $options = [])
 * @method ModifyConnectionInfo modifyConnectionInfo(array $options = [])
 * @method AddMonitorNode addMonitorNode(array $options = [])
 * @method DeleteMonitorNode deleteMonitorNode(array $options = [])
 * @method RebuildInstance rebuildInstance(array $options = [])
 * @method DestroyInstance destroyInstance(array $options = [])
 * @method DescribeAuditPolicy describeAuditPolicy(array $options = [])
 * @method ModifyAuditPolicy modifyAuditPolicy(array $options = [])
 * @method TransformToPrePaid transformToPrePaid(array $options = [])
 * @method DescribeAvailableTimeRange describeAvailableTimeRange(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DescribeIndexRecommendation describeIndexRecommendation(array $options = [])
 * @method DescribeAvaliableTimeRange describeAvaliableTimeRange(array $options = [])
 * @method CreateRecommendationTask createRecommendationTask(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeMonitorInstances describeMonitorInstances(array $options = [])
 * @method DescribeMonitorAttribute describeMonitorAttribute(array $options = [])
 * @method DeleteMonitorInstance deleteMonitorInstance(array $options = [])
 * @method CreateMonitorInstance createMonitorInstance(array $options = [])
 * @method CheckConnectivity checkConnectivity(array $options = [])
 * @method DescribeVerificationList describeVerificationList(array $options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode(array $options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo(array $options = [])
 * @method ModifyReplicaDynamicMode modifyReplicaDynamicMode(array $options = [])
 * @method ModifyReplicaFilterMode modifyReplicaFilterMode(array $options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList(array $options = [])
 * @method CreateStaticVerification createStaticVerification(array $options = [])
 * @method ModifyDynamicMode modifyDynamicMode(array $options = [])
 * @method ModifyReplicaRecoverMode modifyReplicaRecoverMode(array $options = [])
 * @method DescribeDynamicVerificationList describeDynamicVerificationList(array $options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method SwitchDBInstanceHA switchDBInstanceHA(array $options = [])
 * @method SwithcDBInstanceHA swithcDBInstanceHA(array $options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode(array $options = [])
 * @method AllocatePublicNetworkAddress allocatePublicNetworkAddress(array $options = [])
 * @method ReleasePublicNetworkAddress releasePublicNetworkAddress(array $options = [])
 * @method ModifyReplicaMode modifyReplicaMode(array $options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation(array $options = [])
 * @method DescribeShardingNetworkAddress describeShardingNetworkAddress(array $options = [])
 * @method UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method ModifyParameters modifyParameters(array $options = [])
 * @method DescribeParameterModificationHistory describeParameterModificationHistory(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method ModifyDBInstanceNetExpireTime modifyDBInstanceNetExpireTime(array $options = [])
 * @method DescribeAuditFiles describeAuditFiles(array $options = [])
 * @method DescribeAuditRecords describeAuditRecords(array $options = [])
 * @method ReleaseReplica releaseReplica(array $options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress(array $options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance(array $options = [])
 * @method DescribeReplicas describeReplicas(array $options = [])
 * @method DescribeReplicaUsage describeReplicaUsage(array $options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription(array $options = [])
 * @method AddBindingTunnel addBindingTunnel(array $options = [])
 * @method UnbindTunnel unbindTunnel(array $options = [])
 * @method BindTunnel bindTunnel(array $options = [])
 * @method CreateReplicationGroup createReplicationGroup(array $options = [])
 * @method DeleteReplicationGroup deleteReplicationGroup(array $options = [])
 * @method DescribeReplicationGroup describeReplicationGroup(array $options = [])
 * @method ListReplicationGroup listReplicationGroup(array $options = [])
 * @method ModifyReplicationGroup modifyReplicationGroup(array $options = [])
 * @method DeleteNode deleteNode(array $options = [])
 * @method ModifyNodeSpec modifyNodeSpec(array $options = [])
 * @method CreateNode createNode(array $options = [])
 * @method CreateShardingDBInstance createShardingDBInstance(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method Sample sample(array $options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method RenewDBInstance renewDBInstance(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyDBInstanceSpec modifyDBInstanceSpec(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method RestoreDBInstance restoreDBInstance(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeReplicaSetRole describeReplicaSetRole(array $options = [])
 * @method DescribeSecurityIps describeSecurityIps(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 */
class DdsApiResolver
{
    use ApiResolverTrait;
}

class V20151201Rpc extends Rpc
{
    /** @var string */
    public $product = 'Dds';

    /** @var string */
    public $version = '2015-12-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dds';
}

/**
 * @method string getVswitch()
 * @method $this withVswitch($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MigrateAvailableZone extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getDatabaseNames()
 * @method $this withDatabaseNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getSourceDBInstance()
 * @method $this withSourceDBInstance($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckRecoveryCondition extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceDBInstance()
 * @method $this withSourceDBInstance($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeBackupDBs extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends V20151201Rpc
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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class UntagResources extends V20151201Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends V20151201Rpc
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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpcAuthMode()
 * @method $this withVpcAuthMode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ModifyInstanceVpcAuthMode extends V20151201Rpc
{
}

/**
 * @method string getVpcTaskIdList()
 * @method $this withVpcTaskIdList($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTaskIdList()
 * @method $this withTaskIdList($value)
 * @method string getVpcInstanceId()
 * @method $this withVpcInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyActiveOperationPendingTask extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCurrentAVZ()
 * @method $this withCurrentAVZ($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTargetAVZ extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAvailableEngineVersion extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class DescribeRenewalPrice extends V20151201Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MigrateToOtherZone extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBInstanceType()
 * @method $this withDBInstanceType($value)
 */
class DescribeInstanceAutoRenewalAttribute extends V20151201Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceAutoRenewalAttribute extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShardsInfo()
 * @method $this withShardsInfo($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class EvaluateResource extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyActiveOperationTask extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationTaskRegion extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationTaskType extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeActiveOperationTaskCount extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsHistory()
 * @method $this withIsHistory($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeActiveOperationTask extends V20151201Rpc
{
}

/**
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeRunningLogRecords extends V20151201Rpc
{
}

/**
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeErrorLogRecords extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSSLAction()
 * @method $this withSSLAction($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceSSL extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceSSL extends V20151201Rpc
{
}

/**
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeSlowLogRecords extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAuditLogFilter extends V20151201Rpc
{
}

/**
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAuditLogFilter extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNewConnectionString()
 * @method $this withNewConnectionString($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ModifyDBInstanceConnectionString extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EvaluateFailOverSwitch extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKernelVersion()
 * @method $this withKernelVersion($value)
 */
class DescribeKernelReleaseNotes extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBInstanceKernelVersion extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorNodeId()
 * @method $this withMonitorNodeId($value)
 * @method string getDescribetion()
 * @method $this withDescribetion($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDescribetion extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorNodeId()
 * @method $this withMonitorNodeId($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountInfo extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeConnectionInfo extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribePerformanceInfo extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorNodeId()
 * @method $this withMonitorNodeId($value)
 * @method string getConnectionAddress()
 * @method $this withConnectionAddress($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyConnectionInfo extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionInfo()
 * @method $this withConnectionInfo($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddMonitorNode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMonitorNode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 * @method string getStorageEngine()
 * @method $this withStorageEngine($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSrcDBInstanceId()
 * @method $this withSrcDBInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class RebuildInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DestroyInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAuditPolicy extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getStoragePeriod()
 * @method $this withStoragePeriod($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAuditPolicy extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class TransformToPrePaid extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeAvailableTimeRange extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRdsVSwitchs extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCollection()
 * @method $this withCollection($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeIndexRecommendation extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeAvaliableTimeRange extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class CreateRecommendationTask extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRdsVpcs extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeMonitorInstances extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeMonitorAttribute extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMonitorInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPassWord()
 * @method $this withPassWord($value)
 * @method string getConnectionInfo()
 * @method $this withConnectionInfo($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateMonitorInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPassWord()
 * @method $this withPassWord($value)
 * @method string getConnectionInfo()
 * @method $this withConnectionInfo($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 */
class CheckConnectivity extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeVerificationList extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecoveryMode()
 * @method $this withRecoveryMode($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRecoveryMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVerificationMode()
 * @method $this withVerificationMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaVerificationMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStrategy extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeReplicaConflictInfo extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDynamicMode()
 * @method $this withDynamicMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaDynamicMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFillterDDL()
 * @method $this withFillterDDL($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaFilterMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getDestinationInstanceId()
 * @method $this withDestinationInstanceId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStaticVerificationList extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getDestinationInstanceId()
 * @method $this withDestinationInstanceId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateStaticVerification extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDynamicMode()
 * @method $this withDynamicMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDynamicMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getRecoverMode()
 * @method $this withRecoverMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRecoverMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDynamicVerificationList extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMonitor extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceMonitor extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class SwitchDBInstanceHA extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class SwithcDBInstanceHA extends V20151201Rpc
{
}

/**
 * @method string getDomainMode()
 * @method $this withDomainMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyGuardDomainMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class AllocatePublicNetworkAddress extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ReleasePublicNetworkAddress extends V20151201Rpc
{
}

/**
 * @method string getDomainMode()
 * @method $this withDomainMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrimaryInstanceId()
 * @method $this withPrimaryInstanceId($value)
 * @method string getReplicaMode()
 * @method $this withReplicaMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaMode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaRelation extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeShardingNetworkAddress extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBInstanceEngineVersion extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParameterTemplates extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameters extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeParameterModificationHistory extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameter extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeParameters extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getClassicExpendExpiredDays()
 * @method $this withClassicExpendExpiredDays($value)
 */
class ModifyDBInstanceNetExpireTime extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAuditFiles extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribeAuditRecords extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseReplica extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicaInitializeProgress extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDestinationDBInstanceId()
 * @method $this withDestinationDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeReplicaPerformance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getAttachDbInstanceData()
 * @method $this withAttachDbInstanceData($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeReplicas extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceDBInstanceId()
 * @method $this withSourceDBInstanceId($value)
 * @method string getDestinationDBInstanceId()
 * @method $this withDestinationDBInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicaUsage extends V20151201Rpc
{
}

/**
 * @method string getReplicaDescription()
 * @method $this withReplicaDescription($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicaDescription extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreCheckPointTS()
 * @method $this withRestoreCheckPointTS($value)
 * @method string getSourceDataFilter()
 * @method $this withSourceDataFilter($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getDestinationInstanceId()
 * @method $this withDestinationInstanceId($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getDestinationDataFilter()
 * @method $this withDestinationDataFilter($value)
 */
class AddBindingTunnel extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnbindTunnel extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getSourceContext()
 * @method $this withSourceContext($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationContext()
 * @method $this withDestinationContext($value)
 */
class BindTunnel extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateReplicationGroup extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteReplicationGroup extends V20151201Rpc
{
}

/**
 * @method string getDestinationInstanceIds()
 * @method $this withDestinationInstanceIds($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicationGroup extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListReplicationGroup extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReplicationGroupId()
 * @method $this withReplicationGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyReplicationGroup extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DeleteNode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeStorage()
 * @method $this withNodeStorage($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeClass()
 * @method $this withNodeClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ModifyNodeSpec extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeStorage()
 * @method $this withNodeStorage($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeClass()
 * @method $this withNodeClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class CreateNode extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method array getReplicaSet()
 * @method string getStorageEngine()
 * @method $this withStorageEngine($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSrcDBInstanceId()
 * @method $this withSrcDBInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getConfigServer()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getMongos()
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateShardingDBInstance extends V20151201Rpc
{

    /**
     * @param array $replicaSet
     *
     * @return $this
     */
    public function withReplicaSet(array $replicaSet)
    {
        $this->data['ReplicaSet'] = $replicaSet;
        foreach ($replicaSet as $depth1 => $depth1Value) {
            $this->options['query']['ReplicaSet.' . ($depth1 + 1) . '.Storage'] = $depth1Value['Storage'];
            $this->options['query']['ReplicaSet.' . ($depth1 + 1) . '.Class'] = $depth1Value['Class'];
        }

        return $this;
    }

    /**
     * @param array $configServer
     *
     * @return $this
     */
    public function withConfigServer(array $configServer)
    {
        $this->data['ConfigServer'] = $configServer;
        foreach ($configServer as $depth1 => $depth1Value) {
            $this->options['query']['ConfigServer.' . ($depth1 + 1) . '.Storage'] = $depth1Value['Storage'];
            $this->options['query']['ConfigServer.' . ($depth1 + 1) . '.Class'] = $depth1Value['Class'];
        }

        return $this;
    }

    /**
     * @param array $mongos
     *
     * @return $this
     */
    public function withMongos(array $mongos)
    {
        $this->data['Mongos'] = $mongos;
        foreach ($mongos as $depth1 => $depth1Value) {
            $this->options['query']['Mongos.' . ($depth1 + 1) . '.Class'] = $depth1Value['Class'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMaintainStartTime()
 * @method $this withMaintainStartTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaintainEndTime()
 * @method $this withMaintainEndTime($value)
 */
class ModifyDBInstanceMaintainTime extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class Sample extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceNetworkType extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class RenewDBInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class ModifyAccountDescription extends V20151201Rpc
{
}

/**
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBackupPolicy extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ModifyDBInstanceDescription extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ModifyDBInstanceSpec extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityIpGroupName()
 * @method $this withSecurityIpGroupName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getSecurityIpGroupAttribute()
 * @method $this withSecurityIpGroupAttribute($value)
 */
class ModifySecurityIps extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccountPassword extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class RestartDBInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreDBInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getDBInstanceStatus()
 * @method $this withDBInstanceStatus($value)
 * @method array getTag()
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceType()
 * @method $this withDBInstanceType($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class DescribeDBInstances extends V20151201Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegions extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeReplicaSetRole extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSecurityIps extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBInstanceStorage()
 * @method $this withDBInstanceStorage($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 * @method string getStorageEngine()
 * @method $this withStorageEngine($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDatabaseNames()
 * @method $this withDatabaseNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSrcDBInstanceId()
 * @method $this withSrcDBInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateDBInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccounts extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPolicy extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeBackups extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReplicaSetRole()
 * @method $this withReplicaSetRole($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDBInstancePerformance extends V20151201Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class CreateAccount extends V20151201Rpc
{
}

/**
 * @method string getBackupMethod()
 * @method $this withBackupMethod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateBackup extends V20151201Rpc
{
}
