<?php

namespace AlibabaCloud\Polardb\V20170801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyAutoRenewAttribute modifyAutoRenewAttribute(array $options = [])
 * @method DescribeAutoRenewAttribute describeAutoRenewAttribute(array $options = [])
 * @method ModifyDBNodeClass modifyDBNodeClass(array $options = [])
 * @method DeleteDBNodes deleteDBNodes(array $options = [])
 * @method CreateDBNodes createDBNodes(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyAccountPassword modifyAccountPassword(array $options = [])
 * @method ModifyDBDescription modifyDBDescription(array $options = [])
 * @method ModifyDBEndpointAddress modifyDBEndpointAddress(array $options = [])
 * @method CreateDBEndpointAddress createDBEndpointAddress(array $options = [])
 * @method DeleteDBEndpointAddress deleteDBEndpointAddress(array $options = [])
 * @method ModifyDBClusterEndpoint modifyDBClusterEndpoint(array $options = [])
 * @method DeleteDBClusterEndpoint deleteDBClusterEndpoint(array $options = [])
 * @method CreateDBClusterEndpoint createDBClusterEndpoint(array $options = [])
 * @method DescribeDBClusterEndpoints describeDBClusterEndpoints(array $options = [])
 * @method ModifyDBClusterParameters modifyDBClusterParameters(array $options = [])
 * @method DescribeDBClusterParameters describeDBClusterParameters(array $options = [])
 * @method RestartDBNode restartDBNode(array $options = [])
 * @method ModifyDBClusterAccessWhitelist modifyDBClusterAccessWhitelist(array $options = [])
 * @method DescribeDBClusterAccessWhitelist describeDBClusterAccessWhitelist(array $options = [])
 * @method ModifyDBClusterMaintainTime modifyDBClusterMaintainTime(array $options = [])
 * @method CreateDatabase createDatabase(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method ResetAccount resetAccount(array $options = [])
 * @method GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteBackup deleteBackup(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateDBCluster createDBCluster(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyDBClusterDescription modifyDBClusterDescription(array $options = [])
 * @method DescribeDBClusterAttribute describeDBClusterAttribute(array $options = [])
 * @method DescribeDBClusters describeDBClusters(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method DeleteDBCluster deleteDBCluster(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method DescribeBackups describeBackups(array $options = [])
 */
class PolardbApiResolver
{
    use ApiResolverTrait;
}

class V20170801Rpc extends Rpc
{
    /** @var string */
    public $product = 'polardb';

    /** @var string */
    public $version = '2017-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'polardb';
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class ModifyAutoRenewAttribute extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeAutoRenewAttribute extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 * @method string getDBNodeTargetClass()
 * @method $this withDBNodeTargetClass($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBNodeClass extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getDBNodeId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBNodes extends V20170801Rpc
{

    /**
     * @param array $dBNodeId
     *
     * @return $this
     */
    public function withDBNodeId(array $dBNodeId)
    {
        $this->data['DBNodeId'] = $dBNodeId;
        foreach ($dBNodeId as $i => $iValue) {
            $this->options['query']['DBNodeId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDBNode()
 */
class CreateDBNodes extends V20170801Rpc
{

    /**
     * @param array $dBNode
     *
     * @return $this
     */
    public function withDBNode(array $dBNode)
    {
        $this->data['DBNode'] = $dBNode;
        foreach ($dBNode as $depth1 => $depth1Value) {
            $this->options['query']['DBNode.' . ($depth1 + 1) . '.TargetClass'] = $depth1Value['TargetClass'];
            $this->options['query']['DBNode.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
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
class UntagResources extends V20170801Rpc
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
class TagResources extends V20170801Rpc
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
class ListTagResources extends V20170801Rpc
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
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getNewAccountPassword()
 * @method $this withNewAccountPassword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountPassword extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBDescription extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBEndpointAddress extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDBEndpointAddress extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBEndpointAddress extends V20170801Rpc
{
}

/**
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterEndpoint extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBClusterEndpoint extends V20170801Rpc
{
}

/**
 * @method string getAutoAddNewNodes()
 * @method $this withAutoAddNewNodes($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndpointConfig()
 * @method $this withEndpointConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 * @method string getReadWriteMode()
 * @method $this withReadWriteMode($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 */
class CreateDBClusterEndpoint extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBEndpointId()
 * @method $this withDBEndpointId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterEndpoints extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class ModifyDBClusterParameters extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterParameters extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBNodeId()
 * @method $this withDBNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartDBNode extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getDBClusterIPArrayName()
 * @method $this withDBClusterIPArrayName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBClusterIPArrayAttribute()
 * @method $this withDBClusterIPArrayAttribute($value)
 */
class ModifyDBClusterAccessWhitelist extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAccessWhitelist extends V20170801Rpc
{
}

/**
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterMaintainTime extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBDescription()
 * @method $this withDBDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCharacterSetName()
 * @method $this withCharacterSetName($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 */
class CreateDatabase extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDatabases extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RevokeAccountPrivilege extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetAccount extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountPrivilege()
 * @method $this withAccountPrivilege($value)
 */
class GrantAccountPrivilege extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDatabase extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteAccount extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBackup extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateBackup extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getClusterNetworkType()
 * @method $this withClusterNetworkType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getDBNodeClass()
 * @method $this withDBNodeClass($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBVersion()
 * @method $this withDBVersion($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBCluster extends V20170801Rpc
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
class DescribeRegions extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class ModifyAccountDescription extends V20170801Rpc
{
}

/**
 * @method string getPreferredBackupTime()
 * @method $this withPreferredBackupTime($value)
 * @method string getPreferredBackupPeriod()
 * @method $this withPreferredBackupPeriod($value)
 * @method string getBackupRetentionPeriod()
 * @method $this withBackupRetentionPeriod($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyBackupPolicy extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDBClusterDescription extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBClusterAttribute extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterStatus()
 * @method $this withDBClusterStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClusters extends V20170801Rpc
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 */
class CreateAccount extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBCluster extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccounts extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeBackupPolicy extends V20170801Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
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
 * @method string getBackupStatus()
 * @method $this withBackupStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBackupMode()
 * @method $this withBackupMode($value)
 */
class DescribeBackups extends V20170801Rpc
{
}
