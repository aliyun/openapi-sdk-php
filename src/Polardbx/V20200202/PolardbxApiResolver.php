<?php

namespace AlibabaCloud\Polardbx\V20200202;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method CancelPolarxOrder cancelPolarxOrder(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateDB createDB(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method CreatePolarxInstance createPolarxInstance(array $options = [])
 * @method CreatePolarxOrder createPolarxOrder(array $options = [])
 * @method CreateSuperAccount createSuperAccount(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteDB deleteDB(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DescribeAccountList describeAccountList(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackupSetList describeBackupSetList(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeDbList describeDbList(array $options = [])
 * @method DescribeDistributeTableList describeDistributeTableList(array $options = [])
 * @method DescribeInstanceDbPerformance describeInstanceDbPerformance(array $options = [])
 * @method DescribeInstancePerformance describeInstancePerformance(array $options = [])
 * @method DescribeInstanceStoragePerformance describeInstanceStoragePerformance(array $options = [])
 * @method DescribeParameters describeParameters(array $options = [])
 * @method DescribePolarxDbInstances describePolarxDbInstances(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeScaleOutMigrateTaskList describeScaleOutMigrateTaskList(array $options = [])
 * @method DescribeSecurityIps describeSecurityIps(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method GetPolarxCommodity getPolarxCommodity(array $options = [])
 * @method GetPolarXPrice getPolarXPrice(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyDatabaseDescription modifyDatabaseDescription(array $options = [])
 * @method ModifyDBInstanceClass modifyDBInstanceClass(array $options = [])
 * @method ModifyDBInstanceConfig modifyDBInstanceConfig(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyParameter modifyParameter(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method RetryPolarxOrder retryPolarxOrder(array $options = [])
 * @method UpdateBackupPolicy updateBackupPolicy(array $options = [])
 * @method UpdatePolarDBXInstanceNode updatePolarDBXInstanceNode(array $options = [])
 * @method UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 */
class PolardbxApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'polardbx';

    /** @var string */
    public $version = '2020-02-02';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'polardbx';
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class AllocateInstancePublicConnection extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getScaleOutToken()
 * @method $this withScaleOutToken($value)
 */
class CancelPolarxOrder extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 */
class CreateBackup extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getCharset()
 * @method $this withCharset($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbDescription()
 * @method $this withDbDescription($value)
 */
class CreateDB extends Rpc
{
}

/**
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getIsReadDBInstance()
 * @method $this withIsReadDBInstance($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPrimaryDBInstanceName()
 * @method $this withPrimaryDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBNodeCount()
 * @method $this withDBNodeCount($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBInstance extends Rpc
{
}

/**
 * @method string getIsAutoRenew()
 * @method $this withIsAutoRenew($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIsHa()
 * @method string getMySQLVersion()
 * @method $this withMySQLVersion($value)
 * @method string getInstanceSeries()
 * @method $this withInstanceSeries($value)
 * @method string getMasterInstId()
 * @method $this withMasterInstId($value)
 * @method string getQuantity()
 * @method $this withQuantity($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreatePolarxInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsHa($value)
    {
        $this->data['IsHa'] = $value;
        $this->options['query']['isHa'] = $value;

        return $this;
    }
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 */
class CreatePolarxOrder extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class CreateSuperAccount extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DeleteAccount extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DeleteDB extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DeleteDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DescribeAccountList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeBackupPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBackupSetList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeDBInstanceAttribute extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDBInstances extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class DescribeDbList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DescribeDistributeTableList extends Rpc
{
}

/**
 * @method string getDbInstanceName()
 * @method $this withDbInstanceName($value)
 * @method string getKeys()
 * @method $this withKeys($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DescribeInstanceDbPerformance extends Rpc
{
}

/**
 * @method string getDbInstanceName()
 * @method $this withDbInstanceName($value)
 * @method string getKeys()
 * @method $this withKeys($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class DescribeInstancePerformance extends Rpc
{
}

/**
 * @method string getDbInstanceName()
 * @method $this withDbInstanceName($value)
 * @method string getStorageInstanceId()
 * @method $this withStorageInstanceId($value)
 * @method string getKeys()
 * @method $this withKeys($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeInstanceStoragePerformance extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 */
class DescribeParameters extends Rpc
{
}

/**
 * @method string getDrdsInstanceId()
 * @method $this withDrdsInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribePolarxDbInstances extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScaleOutMigrateTaskList extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class DescribeSecurityIps extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTasks extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class GetPolarxCommodity extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getNodeCount()
 * @method $this withNodeCount($value)
 */
class GetPolarXPrice extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDbDescription()
 * @method $this withDbDescription($value)
 */
class ModifyDatabaseDescription extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTargetDBInstanceClass()
 * @method $this withTargetDBInstanceClass($value)
 */
class ModifyDBInstanceClass extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 */
class ModifyDBInstanceConfig extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 */
class ModifyDBInstanceDescription extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getParamLevel()
 * @method $this withParamLevel($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyParameter extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 */
class ModifySecurityIps extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 */
class RestartDBInstance extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getScaleOutToken()
 * @method $this withScaleOutToken($value)
 */
class RetryPolarxOrder extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getForceCleanOnHighSpaceUsage()
 * @method $this withForceCleanOnHighSpaceUsage($value)
 * @method string getBackupPlanBegin()
 * @method $this withBackupPlanBegin($value)
 * @method string getRemoveLogRetention()
 * @method $this withRemoveLogRetention($value)
 * @method string getBackupType()
 * @method $this withBackupType($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 * @method string getBackupWay()
 * @method $this withBackupWay($value)
 * @method string getBackupSetRetention()
 * @method $this withBackupSetRetention($value)
 * @method string getBackupPeriod()
 * @method $this withBackupPeriod($value)
 * @method string getLocalLogRetention()
 * @method $this withLocalLogRetention($value)
 * @method string getLogLocalRetentionSpace()
 * @method $this withLogLocalRetentionSpace($value)
 */
class UpdateBackupPolicy extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDbInstanceNodeCount()
 * @method $this withDbInstanceNodeCount($value)
 */
class UpdatePolarDBXInstanceNode extends Rpc
{
}

/**
 * @method string getDBInstanceName()
 * @method $this withDBInstanceName($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getUpgradeTime()
 * @method $this withUpgradeTime($value)
 */
class UpgradeDBInstanceKernelVersion extends Rpc
{
}
