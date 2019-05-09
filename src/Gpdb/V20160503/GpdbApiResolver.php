<?php

namespace AlibabaCloud\Gpdb\V20160503;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method DescribeRdsVSwitchs describeRdsVSwitchs(array $options = [])
 * @method DescribeRdsVpcs describeRdsVpcs(array $options = [])
 * @method AddBuDBInstanceRelation addBuDBInstanceRelation(array $options = [])
 * @method DescribeSQLLogRecords describeSQLLogRecords(array $options = [])
 * @method ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method DescribeSQLLogFiles describeSQLLogFiles(array $options = [])
 * @method DescribeSQLCollectorPolicy describeSQLCollectorPolicy(array $options = [])
 * @method DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method RestartDBInstance restartDBInstance(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method ModifySecurityIps modifySecurityIps(array $options = [])
 * @method ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method ModifyDBInstanceConnectionMode modifyDBInstanceConnectionMode(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method DescribeResourceUsage describeResourceUsage(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeDBInstances describeDBInstances(array $options = [])
 * @method DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DeleteDBInstance deleteDBInstance(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method CreateDBInstance createDBInstance(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 */
class GpdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'gpdb';

    /** @var string */
    public $version = '2016-05-03';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'gpdb';
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
class TagResources extends Rpc
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
class ListTagResources extends Rpc
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRdsVSwitchs extends Rpc
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
class DescribeRdsVpcs extends Rpc
{
}

/**
 * @method string getBusinessUnit()
 * @method $this withBusinessUnit($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddBuDBInstanceRelation extends Rpc
{
}

/**
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getQueryKeywords()
 * @method $this withQueryKeywords($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSQLLogRecords extends Rpc
{
}

/**
 * @method string getSQLCollectorStatus()
 * @method $this withSQLCollectorStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifySQLCollectorPolicy extends Rpc
{
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSQLLogFiles extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLCollectorPolicy extends Rpc
{
}

/**
 * @method string getSQLId()
 * @method $this withSQLId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeSlowLogRecords extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class SwitchDBInstanceNetType extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RestartDBInstance extends Rpc
{
}

/**
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ResetAccountPassword extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends Rpc
{
}

/**
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getDBInstanceIPArrayName()
 * @method $this withDBInstanceIPArrayName($value)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this withDBInstanceIPArrayAttribute($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifySecurityIps extends Rpc
{
}

/**
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class ModifyDBInstanceNetworkType extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class ModifyDBInstanceMaintainTime extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 */
class ModifyDBInstanceDescription extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ModifyDBInstanceConnectionString extends Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceConnectionMode extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeResourceUsage extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getDBInstanceIds()
 * @method $this withDBInstanceIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDBInstances extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDBInstancePerformance extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceNetInfo extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceIPArrayList extends Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeAccounts extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDBInstance extends Rpc
{
}

/**
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteDatabase extends Rpc
{
}

/**
 * @method string getDBInstanceGroupCount()
 * @method $this withDBInstanceGroupCount($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getDBInstanceClass()
 * @method $this withDBInstanceClass($value)
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class CreateDBInstance extends Rpc
{
}

/**
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AllocateInstancePublicConnection extends Rpc
{
}
