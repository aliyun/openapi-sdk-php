<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DisableUser disableUser(array $options = [])
 * @method EnableUser enableUser(array $options = [])
 * @method GetDatabase getDatabase(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetLogicDatabase getLogicDatabase(array $options = [])
 * @method GetOpLog getOpLog(array $options = [])
 * @method ListColumns listColumns(array $options = [])
 * @method ListDatabases listDatabases(array $options = [])
 * @method ListIndexes listIndexes(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListLogicDatabases listLogicDatabases(array $options = [])
 * @method ListLogicTables listLogicTables(array $options = [])
 * @method ListTables listTables(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method RegisterInstance registerInstance(array $options = [])
 * @method RegisterUser registerUser(array $options = [])
 * @method SearchDatabase searchDatabase(array $options = [])
 * @method SearchTable searchTable(array $options = [])
 * @method UpdateInstance updateInstance(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 */
class DmsEnterpriseApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dms-enterprise';

    /** @var string */
    public $version = '2018-11-01';

    /** @var string */
    public $serviceCode = 'dmsenterprise';
}

/**
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class DeleteInstance extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DeleteUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DisableUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class EnableUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class GetDatabase extends Rpc
{
}

/**
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class GetInstance extends Rpc
{
}

/**
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetLogicDatabase extends Rpc
{
}

/**
 * @method string getModule()
 * @method $this withModule($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetOpLog extends Rpc
{
}

/**
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListColumns extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDatabases extends Rpc
{
}

/**
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListIndexes extends Rpc
{
}

/**
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getInstanceState()
 * @method $this withInstanceState($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getInstanceSource()
 * @method $this withInstanceSource($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstances extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListLogicDatabases extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListLogicTables extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListTables extends Rpc
{
}

/**
 * @method string getUserState()
 * @method $this withUserState($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getEcsRegion()
 * @method $this withEcsRegion($value)
 * @method string getDdlOnline()
 * @method $this withDdlOnline($value)
 * @method string getUseDsql()
 * @method $this withUseDsql($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getDataLinkName()
 * @method $this withDataLinkName($value)
 * @method string getInstanceSource()
 * @method $this withInstanceSource($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getQueryTimeout()
 * @method $this withQueryTimeout($value)
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getExportTimeout()
 * @method $this withExportTimeout($value)
 * @method string getDatabasePassword()
 * @method $this withDatabasePassword($value)
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getDatabaseUser()
 * @method $this withDatabaseUser($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getDbaUid()
 * @method $this withDbaUid($value)
 * @method string getSafeRule()
 * @method $this withSafeRule($value)
 */
class RegisterInstance extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class RegisterUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getSearchRange()
 * @method $this withSearchRange($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSearchTarget()
 * @method $this withSearchTarget($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 */
class SearchDatabase extends Rpc
{
}

/**
 * @method string getSearchTarget()
 * @method $this withSearchTarget($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getSearchRange()
 * @method $this withSearchRange($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchTable extends Rpc
{
}

/**
 * @method string getSafeRuleId()
 * @method $this withSafeRuleId($value)
 * @method string getEcsRegion()
 * @method $this withEcsRegion($value)
 * @method string getDdlOnline()
 * @method $this withDdlOnline($value)
 * @method string getUseDsql()
 * @method $this withUseDsql($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getDbaId()
 * @method $this withDbaId($value)
 * @method string getDataLinkName()
 * @method $this withDataLinkName($value)
 * @method string getInstanceSource()
 * @method $this withInstanceSource($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getQueryTimeout()
 * @method $this withQueryTimeout($value)
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getExportTimeout()
 * @method $this withExportTimeout($value)
 * @method string getDatabasePassword()
 * @method $this withDatabasePassword($value)
 * @method string getInstanceAlias()
 * @method $this withInstanceAlias($value)
 * @method string getDatabaseUser()
 * @method $this withDatabaseUser($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class UpdateInstance extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class UpdateUser extends Rpc
{

    /** @var string */
    public $method = 'POST';
}
