<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method CreateShardingInstance createShardingInstance(array $options = [])
 * @method ModifyActiveOperationPendingTask modifyActiveOperationPendingTask(array $options = [])
 * @method DescribeTargetAVZ describeTargetAVZ(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method DescribeIntranetAttribute describeIntranetAttribute(array $options = [])
 * @method ModifyIntranetAttribute modifyIntranetAttribute(array $options = [])
 * @method FlushExpireKeys flushExpireKeys(array $options = [])
 * @method ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method ModifyAuditLogConfig modifyAuditLogConfig(array $options = [])
 * @method DescribeAuditRecords describeAuditRecords(array $options = [])
 * @method DescribeCacheAnalysisReportList describeCacheAnalysisReportList(array $options = [])
 * @method DescribeCacheAnalysisReport describeCacheAnalysisReport(array $options = [])
 * @method CreateCacheAnalysisTask createCacheAnalysisTask(array $options = [])
 * @method ModifyActiveOperationTask modifyActiveOperationTask(array $options = [])
 * @method DescribeActiveOperationTaskType describeActiveOperationTaskType(array $options = [])
 * @method DescribeActiveOperationTaskRegion describeActiveOperationTaskRegion(array $options = [])
 * @method DescribeActiveOperationTaskCount describeActiveOperationTaskCount(array $options = [])
 * @method DescribeActiveOperationTask describeActiveOperationTask(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method DescribeRunningLogRecords describeRunningLogRecords(array $options = [])
 * @method DescribeErrorLogRecords describeErrorLogRecords(array $options = [])
 * @method UnlinkReplicaInstance unlinkReplicaInstance(array $options = [])
 * @method EvaluateResource evaluateResource(array $options = [])
 * @method ModifyInstanceMajorVersion modifyInstanceMajorVersion(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method DescribeParameterModificationHistory describeParameterModificationHistory(array $options = [])
 * @method EvaluateFailOverSwitch evaluateFailOverSwitch(array $options = [])
 * @method ModifyInstanceVpcAuthMode modifyInstanceVpcAuthMode(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DestroyInstance destroyInstance(array $options = [])
 * @method RebuildInstance rebuildInstance(array $options = [])
 * @method DescribeVerificationList describeVerificationList(array $options = [])
 * @method ModifyReplicaRecoveryMode modifyReplicaRecoveryMode(array $options = [])
 * @method ModifyReplicaVerificationMode modifyReplicaVerificationMode(array $options = [])
 * @method ModifyReplicaDynamicMode modifyReplicaDynamicMode(array $options = [])
 * @method ModifyReplicaFilterMode modifyReplicaFilterMode(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method ModifyDynamicMode modifyDynamicMode(array $options = [])
 * @method DescribeReplicaConflictInfo describeReplicaConflictInfo(array $options = [])
 * @method DescribeStaticVerificationList describeStaticVerificationList(array $options = [])
 * @method CreateStaticVerification createStaticVerification(array $options = [])
 * @method ModifyReplicaRecoverMode modifyReplicaRecoverMode(array $options = [])
 * @method DescribeDynamicVerificationList describeDynamicVerificationList(array $options = [])
 * @method DescribeInstancesByExpireTime describeInstancesByExpireTime(array $options = [])
 * @method ModifyGuardDomainMode modifyGuardDomainMode(array $options = [])
 * @method ModifyInstanceSSL modifyInstanceSSL(array $options = [])
 * @method DescribeInstanceSSL describeInstanceSSL(array $options = [])
 * @method ModifyReplicaMode modifyReplicaMode(array $options = [])
 * @method ModifyReplicaRelation modifyReplicaRelation(array $options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec(array $options = [])
 * @method DescribeLogicInstanceTopology describeLogicInstanceTopology(array $options = [])
 * @method DescribeInstancePerformanceUsage describeInstancePerformanceUsage(array $options = [])
 * @method ModifyInstanceSpecPreCheck modifyInstanceSpecPreCheck(array $options = [])
 * @method ModifyInstanceNetExpireTime modifyInstanceNetExpireTime(array $options = [])
 * @method DescribeReplicas describeReplicas(array $options = [])
 * @method ReleaseReplica releaseReplica(array $options = [])
 * @method DescribeReplicaInitializeProgress describeReplicaInitializeProgress(array $options = [])
 * @method DescribeReplicaPerformance describeReplicaPerformance(array $options = [])
 * @method ModifyReplicaDescription modifyReplicaDescription(array $options = [])
 * @method DescribeReplicaUsage describeReplicaUsage(array $options = [])
 * @method DescribeEngineVersion describeEngineVersion(array $options = [])
 * @method ModifyCertification modifyCertification(array $options = [])
 * @method ModifyInstanceMinorVersion modifyInstanceMinorVersion(array $options = [])
 * @method DescribeCertification describeCertification(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method AddBindingTunnel addBindingTunnel(array $options = [])
 * @method UnbindTunnel unbindTunnel(array $options = [])
 * @method DeleteReplicationGroup deleteReplicationGroup(array $options = [])
 * @method DescribeReplicationGroup describeReplicationGroup(array $options = [])
 * @method ListReplicationGroup listReplicationGroup(array $options = [])
 * @method ModifyReplicationGroup modifyReplicationGroup(array $options = [])
 * @method BindTunnel bindTunnel(array $options = [])
 * @method CreateReplicationGroup createReplicationGroup(array $options = [])
 * @method DescribeMonthlyServiceStatusDetail describeMonthlyServiceStatusDetail(array $options = [])
 * @method DescribeMonthlyServiceStatus describeMonthlyServiceStatus(array $options = [])
 * @method DescribeSecurityIps describeSecurityIps(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime(array $options = [])
 * @method DescribeInstanceAttribute describeInstanceAttribute(array $options = [])
 * @method RestoreInstance restoreInstance(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method SwitchNetwork switchNetwork(array $options = [])
 * @method RenewMultiInstance renewMultiInstance(array $options = [])
 * @method TransformToPrePaid transformToPrePaid(array $options = [])
 * @method SetSnapshotSettings setSnapshotSettings(array $options = [])
 * @method SwitchTempInstance switchTempInstance(array $options = [])
 * @method QueryTask queryTask(array $options = [])
 * @method RestoreSnapshot restoreSnapshot(array $options = [])
 * @method DescribeSnapshots describeSnapshots(array $options = [])
 * @method DescribeTempInstance describeTempInstance(array $options = [])
 * @method GetSnapshotSettings getSnapshotSettings(array $options = [])
 * @method DeleteSnapshotSettings deleteSnapshotSettings(array $options = [])
 * @method DeleteTempInstance deleteTempInstance(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method CreateTempInstance createTempInstance(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DescribeInstanceConfig describeInstanceConfig(array $options = [])
 * @method DescribeHistoryMonitorValues describeHistoryMonitorValues(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DescribeMonitorItems describeMonitorItems(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method FlushInstance flushInstance(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute(array $options = [])
 * @method VerifyPassword verifyPassword(array $options = [])
 * @method ModifyInstanceConfig modifyInstanceConfig(array $options = [])
 */
class RKvstoreApiResolver
{
    use ApiResolverTrait;
}

class V20150101Rpc extends Rpc
{
    /** @var string */
    public $product = 'R-kvstore';

    /** @var string */
    public $version = '2015-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'redisa';
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
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAvailableResource extends V20150101Rpc
{
}

/**
 * @method string getShardStorageQuantity()
 * @method $this withShardStorageQuantity($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getShardReplicaClass()
 * @method $this withShardReplicaClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
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
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getShardQuantity()
 * @method $this withShardQuantity($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getShardReplicaQuantity()
 * @method $this withShardReplicaQuantity($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getRedisManagerClass()
 * @method $this withRedisManagerClass($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getProxyQuantity()
 * @method $this withProxyQuantity($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class CreateShardingInstance extends V20150101Rpc
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
class ModifyActiveOperationPendingTask extends V20150101Rpc
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
class DescribeTargetAVZ extends V20150101Rpc
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
class ListTagResources extends V20150101Rpc
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
class TagResources extends V20150101Rpc
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
class UntagResources extends V20150101Rpc
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
 */
class DescribeIntranetAttribute extends V20150101Rpc
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
 */
class ModifyIntranetAttribute extends V20150101Rpc
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
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class FlushExpireKeys extends V20150101Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBInstanceMonitor extends V20150101Rpc
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
class DescribeDBInstanceMonitor extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateInstancePublicConnection extends V20150101Rpc
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
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends V20150101Rpc
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
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartInstance extends V20150101Rpc
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
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBInstance extends V20150101Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProxyId()
 */
class DescribeInstanceAutoRenewalAttribute extends V20150101Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyId($value)
    {
        $this->data['ProxyId'] = $value;
        $this->options['query']['proxyId'] = $value;

        return $this;
    }
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
class ModifyInstanceAutoRenewalAttribute extends V20150101Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
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
class MigrateToOtherZone extends V20150101Rpc
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
 * @method string getAuditCommand()
 * @method $this withAuditCommand($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRetention()
 * @method $this withRetention($value)
 */
class ModifyAuditLogConfig extends V20150101Rpc
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
 * @method string getHostAddress()
 * @method $this withHostAddress($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeAuditRecords extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getDays()
 * @method $this withDays($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeCacheAnalysisReportList extends V20150101Rpc
{
}

/**
 * @method string getDate()
 * @method $this withDate($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAnalysisType()
 * @method $this withAnalysisType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumbers()
 * @method $this withPageNumbers($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeCacheAnalysisReport extends V20150101Rpc
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
 */
class CreateCacheAnalysisTask extends V20150101Rpc
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
class ModifyActiveOperationTask extends V20150101Rpc
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
class DescribeActiveOperationTaskType extends V20150101Rpc
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
class DescribeActiveOperationTaskRegion extends V20150101Rpc
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
class DescribeActiveOperationTaskCount extends V20150101Rpc
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
class DescribeActiveOperationTask extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeSlowLogRecords extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeRunningLogRecords extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeErrorLogRecords extends V20150101Rpc
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
 * @method string getReplicaId()
 * @method $this withReplicaId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnlinkReplicaInstance extends V20150101Rpc
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
class EvaluateResource extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMajorVersion()
 * @method $this withMajorVersion($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectTime()
 * @method $this withEffectTime($value)
 */
class ModifyInstanceMajorVersion extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class ModifyAccountDescription extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccount extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccount extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CreateAccount extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccountPassword extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccounts extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeAccountPrivilege extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 */
class GrantAccountPrivilege extends V20150101Rpc
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
class DescribeParameters extends V20150101Rpc
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
 * @method string getCharacterType()
 * @method $this withCharacterType($value)
 */
class DescribeParameterTemplates extends V20150101Rpc
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
class DescribeParameterModificationHistory extends V20150101Rpc
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
class EvaluateFailOverSwitch extends V20150101Rpc
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
 * @method string getVpcAuthMode()
 * @method $this withVpcAuthMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceVpcAuthMode extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNewConnectionString()
 * @method $this withNewConnectionString($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIPType()
 * @method $this withIPType($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceConnectionString extends V20150101Rpc
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
class DescribeRdsVpcs extends V20150101Rpc
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
class DescribeRdsVSwitchs extends V20150101Rpc
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
 */
class DestroyInstance extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
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
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class RebuildInstance extends V20150101Rpc
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
class DescribeVerificationList extends V20150101Rpc
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
class ModifyReplicaRecoveryMode extends V20150101Rpc
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
class ModifyReplicaVerificationMode extends V20150101Rpc
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
class ModifyReplicaDynamicMode extends V20150101Rpc
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
class ModifyReplicaFilterMode extends V20150101Rpc
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
class DescribeStrategy extends V20150101Rpc
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
class ModifyDynamicMode extends V20150101Rpc
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
class DescribeReplicaConflictInfo extends V20150101Rpc
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
class DescribeStaticVerificationList extends V20150101Rpc
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
class CreateStaticVerification extends V20150101Rpc
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
class ModifyReplicaRecoverMode extends V20150101Rpc
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
class DescribeDynamicVerificationList extends V20150101Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getHasExpiredRes()
 * @method $this withHasExpiredRes($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getExpirePeriod()
 * @method $this withExpirePeriod($value)
 */
class DescribeInstancesByExpireTime extends V20150101Rpc
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
class ModifyGuardDomainMode extends V20150101Rpc
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
 * @method string getSSLEnabled()
 * @method $this withSSLEnabled($value)
 */
class ModifyInstanceSSL extends V20150101Rpc
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
 */
class DescribeInstanceSSL extends V20150101Rpc
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
class ModifyReplicaMode extends V20150101Rpc
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
class ModifyReplicaRelation extends V20150101Rpc
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getForceUpgrade()
 * @method $this withForceUpgrade($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class ModifyInstanceSpec extends V20150101Rpc
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
 */
class DescribeLogicInstanceTopology extends V20150101Rpc
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
class DescribeInstancePerformanceUsage extends V20150101Rpc
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
 * @method string getTargetInstanceClass()
 * @method $this withTargetInstanceClass($value)
 */
class ModifyInstanceSpecPreCheck extends V20150101Rpc
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
 * @method string getConnectionString()
 * @method $this withConnectionString($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyInstanceNetExpireTime extends V20150101Rpc
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
class DescribeReplicas extends V20150101Rpc
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
class ReleaseReplica extends V20150101Rpc
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
class DescribeReplicaInitializeProgress extends V20150101Rpc
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
class DescribeReplicaPerformance extends V20150101Rpc
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
class ModifyReplicaDescription extends V20150101Rpc
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
class DescribeReplicaUsage extends V20150101Rpc
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
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class DescribeEngineVersion extends V20150101Rpc
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
 * @method string getNoCertification()
 * @method $this withNoCertification($value)
 */
class ModifyCertification extends V20150101Rpc
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
 * @method string getMinorversion()
 * @method $this withMinorversion($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEffectTime()
 * @method $this withEffectTime($value)
 */
class ModifyInstanceMinorVersion extends V20150101Rpc
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
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class DescribeCertification extends V20150101Rpc
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
 */
class DescribeDBInstanceNetInfo extends V20150101Rpc
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
class AddBindingTunnel extends V20150101Rpc
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
class UnbindTunnel extends V20150101Rpc
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
class DeleteReplicationGroup extends V20150101Rpc
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
class DescribeReplicationGroup extends V20150101Rpc
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
class ListReplicationGroup extends V20150101Rpc
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
class ModifyReplicationGroup extends V20150101Rpc
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
class BindTunnel extends V20150101Rpc
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
class CreateReplicationGroup extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMonthlyServiceStatusDetail extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeMonthlyServiceStatus extends V20150101Rpc
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
 */
class DescribeSecurityIps extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSecurityIpGroupAttribute()
 * @method $this withSecurityIpGroupAttribute($value)
 */
class ModifySecurityIps extends V20150101Rpc
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
 * @method string getMaintainStartTime()
 * @method $this withMaintainStartTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaintainEndTime()
 * @method $this withMaintainEndTime($value)
 */
class ModifyInstanceMaintainTime extends V20150101Rpc
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
 */
class DescribeInstanceAttribute extends V20150101Rpc
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
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestoreInstance extends V20150101Rpc
{
}

/**
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
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
 */
class ModifyBackupPolicy extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBackups extends V20150101Rpc
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
 */
class DescribeBackupPolicy extends V20150101Rpc
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
 */
class CreateBackup extends V20150101Rpc
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
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeZones extends V20150101Rpc
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
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTargetNetworkType()
 * @method $this withTargetNetworkType($value)
 * @method string getRetainClassic()
 * @method $this withRetainClassic($value)
 * @method string getClassicExpiredDays()
 * @method $this withClassicExpiredDays($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class SwitchNetwork extends V20150101Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class RenewMultiInstance extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class TransformToPrePaid extends V20150101Rpc
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
 */
class SetSnapshotSettings extends V20150101Rpc
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
 */
class SwitchTempInstance extends V20150101Rpc
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
 */
class QueryTask extends V20150101Rpc
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
 */
class RestoreSnapshot extends V20150101Rpc
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
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeSnapshots extends V20150101Rpc
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
 */
class DescribeTempInstance extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetSnapshotSettings extends V20150101Rpc
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
 */
class DeleteSnapshotSettings extends V20150101Rpc
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
 */
class DeleteTempInstance extends V20150101Rpc
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
 */
class CreateSnapshot extends V20150101Rpc
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
 */
class CreateTempInstance extends V20150101Rpc
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
 */
class DeleteSnapshot extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getInstances()
 * @method $this withInstances($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOrderParamOut()
 * @method $this withOrderParamOut($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getForceUpgrade()
 * @method $this withForceUpgrade($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends V20150101Rpc
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
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getForceUpgrade()
 * @method $this withForceUpgrade($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 */
class RenewInstance extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
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
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class CreateInstance extends V20150101Rpc
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
 */
class DescribeInstanceConfig extends V20150101Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIntervalForHistory()
 * @method $this withIntervalForHistory($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getMonitorKeys()
 * @method $this withMonitorKeys($value)
 */
class DescribeHistoryMonitorValues extends V20150101Rpc
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
 */
class DeleteInstance extends V20150101Rpc
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
class DescribeMonitorItems extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceStatus()
 * @method $this withInstanceStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getExpired()
 * @method $this withExpired($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getArchitectureType()
 * @method $this withArchitectureType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method array getTag()
 */
class DescribeInstances extends V20150101Rpc
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
 */
class FlushInstance extends V20150101Rpc
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
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRegions extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 */
class ModifyInstanceAttribute extends V20150101Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
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
 */
class VerifyPassword extends V20150101Rpc
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
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyInstanceConfig extends V20150101Rpc
{
}
