<?php

namespace AlibabaCloud\Gpdb\V20160503;

use AlibabaCloud\Rpc;

class V20160503Rpc extends Rpc
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
class UntagResources extends V20160503Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagKey(array $value)
    {
        $this->data['TagKey'] = $value;
        foreach ($value as $i => $iValue) {
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
class TagResources extends V20160503Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
class ListTagResources extends V20160503Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRdsVpcs extends V20160503Rpc
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
class DescribeRdsVSwitchs extends V20160503Rpc
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
class AddBuDBInstanceRelation extends V20160503Rpc
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
class DescribeSQLLogRecords extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeSQLCollectorPolicy extends V20160503Rpc
{
}

/**
 * @method string getSQLCollectorStatus()
 * @method $this withSQLCollectorStatus($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifySQLCollectorPolicy extends V20160503Rpc
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
class DescribeSlowLogRecords extends V20160503Rpc
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
class DescribeSQLLogFiles extends V20160503Rpc
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
class ResetAccountPassword extends V20160503Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class RestartDBInstance extends V20160503Rpc
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
class SwitchDBInstanceNetType extends V20160503Rpc
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
class ModifySecurityIps extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 */
class ReleaseInstancePublicConnection extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 */
class ModifyDBInstanceDescription extends V20160503Rpc
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
class ModifyDBInstanceMaintainTime extends V20160503Rpc
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
class ModifyDBInstanceNetworkType extends V20160503Rpc
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
class ModifyAccountDescription extends V20160503Rpc
{
}

/**
 * @method string getConnectionMode()
 * @method $this withConnectionMode($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class ModifyDBInstanceConnectionMode extends V20160503Rpc
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
class ModifyDBInstanceConnectionString extends V20160503Rpc
{
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
class DescribeDBInstancePerformance extends V20160503Rpc
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
class DescribeDBInstances extends V20160503Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

class DescribeRegions extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeResourceUsage extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceAttribute extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceIPArrayList extends V20160503Rpc
{
}

/**
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeDBInstanceNetInfo extends V20160503Rpc
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
class CreateAccount extends V20160503Rpc
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
class CreateDBInstance extends V20160503Rpc
{
}

/**
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DeleteDatabase extends V20160503Rpc
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
class DeleteDBInstance extends V20160503Rpc
{
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 */
class DescribeAccounts extends V20160503Rpc
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
class AllocateInstancePublicConnection extends V20160503Rpc
{
}
