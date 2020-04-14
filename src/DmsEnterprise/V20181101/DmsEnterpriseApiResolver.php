<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApproveOrder approveOrder(array $options = [])
 * @method CloseOrder closeOrder(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CreatePublishGroupTask createPublishGroupTask(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DisableUser disableUser(array $options = [])
 * @method EnableUser enableUser(array $options = [])
 * @method ExecuteDataCorrect executeDataCorrect(array $options = [])
 * @method ExecuteDataExport executeDataExport(array $options = [])
 * @method GetApprovalDetail getApprovalDetail(array $options = [])
 * @method GetDatabase getDatabase(array $options = [])
 * @method GetDataCorrectBackupFiles getDataCorrectBackupFiles(array $options = [])
 * @method GetDataCorrectOrderDetail getDataCorrectOrderDetail(array $options = [])
 * @method GetDataExportDownloadURL getDataExportDownloadURL(array $options = [])
 * @method GetDataExportOrderDetail getDataExportOrderDetail(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetLogicDatabase getLogicDatabase(array $options = [])
 * @method GetOpLog getOpLog(array $options = [])
 * @method GetOrderBaseInfo getOrderBaseInfo(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GrantUserPermission grantUserPermission(array $options = [])
 * @method ListColumns listColumns(array $options = [])
 * @method ListDatabases listDatabases(array $options = [])
 * @method ListDatabaseUserPermssions listDatabaseUserPermssions(array $options = [])
 * @method ListIndexes listIndexes(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListLogicDatabases listLogicDatabases(array $options = [])
 * @method ListLogicTables listLogicTables(array $options = [])
 * @method ListOrders listOrders(array $options = [])
 * @method ListSensitiveColumns listSensitiveColumns(array $options = [])
 * @method ListSensitiveColumnsDetail listSensitiveColumnsDetail(array $options = [])
 * @method ListTables listTables(array $options = [])
 * @method ListUserPermissions listUserPermissions(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListWorkFlowNodes listWorkFlowNodes(array $options = [])
 * @method ListWorkFlowTemplates listWorkFlowTemplates(array $options = [])
 * @method RegisterInstance registerInstance(array $options = [])
 * @method RegisterUser registerUser(array $options = [])
 * @method RevokeUserPermission revokeUserPermission(array $options = [])
 * @method SearchDatabase searchDatabase(array $options = [])
 * @method SearchTable searchTable(array $options = [])
 * @method SetOwners setOwners(array $options = [])
 * @method SubmitOrderApproval submitOrderApproval(array $options = [])
 * @method SyncDatabaseMeta syncDatabaseMeta(array $options = [])
 * @method SyncInstanceMeta syncInstanceMeta(array $options = [])
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
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dmsenterprise';
}

/**
 * @method string getApprovalType()
 * @method $this withApprovalType($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getWorkflowInstanceId()
 * @method $this withWorkflowInstanceId($value)
 */
class ApproveOrder extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getCloseReason()
 * @method $this withCloseReason($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class CloseOrder extends Rpc
{
}

/**
 * @method string getPluginType()
 * @method $this withPluginType($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPluginParam()
 * @method $this withPluginParam($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateOrder extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPlanTime()
 * @method $this withPlanTime($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPublishStrategy()
 * @method $this withPublishStrategy($value)
 */
class CreatePublishGroupTask extends Rpc
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
class DeleteInstance extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DisableUser extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class EnableUser extends Rpc
{
}

/**
 * @method string getActionDetail()
 * @method $this withActionDetail($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ExecuteDataCorrect extends Rpc
{
}

/**
 * @method string getActionDetail()
 * @method $this withActionDetail($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ExecuteDataExport extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getWorkflowInstanceId()
 * @method $this withWorkflowInstanceId($value)
 */
class GetApprovalDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getActionDetail()
 * @method $this withActionDetail($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDataCorrectBackupFiles extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDataCorrectOrderDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDataExportDownloadURL extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDataExportOrderDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['OrderId'] = $value;

        return $this;
    }
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetLogicDatabase extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetOrderBaseInfo extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetUser extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPermTypes()
 * @method $this withPermTypes($value)
 * @method string getDsType()
 * @method $this withDsType($value)
 * @method string getExpireDate()
 * @method $this withExpireDate($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GrantUserPermission extends Rpc
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPermType()
 * @method $this withPermType($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListDatabaseUserPermssions extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOrderStatus()
 * @method $this withOrderStatus($value)
 * @method string getSearchContent()
 * @method $this withSearchContent($value)
 * @method string getSearchDateType()
 * @method $this withSearchDateType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPluginType()
 * @method $this withPluginType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderResultType()
 * @method $this withOrderResultType($value)
 */
class ListOrders extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getSecurityLevel()
 * @method $this withSecurityLevel($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSensitiveColumns extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListSensitiveColumnsDetail extends Rpc
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPermType()
 * @method $this withPermType($value)
 * @method string getDatabaseName()
 * @method $this withDatabaseName($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getDbType()
 * @method $this withDbType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 */
class ListUserPermissions extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListWorkFlowNodes extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListWorkFlowTemplates extends Rpc
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
class RegisterUser extends Rpc
{
}

/**
 * @method string getPermTypes()
 * @method $this withPermTypes($value)
 * @method string getUserAccessId()
 * @method $this withUserAccessId($value)
 * @method string getDsType()
 * @method $this withDsType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class RevokeUserPermission extends Rpc
{
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getOwnerIds()
 * @method $this withOwnerIds($value)
 * @method string getOwnerType()
 * @method $this withOwnerType($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class SetOwners extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class SubmitOrderApproval extends Rpc
{
}

/**
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class SyncDatabaseMeta extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIgnoreTable()
 * @method $this withIgnoreTable($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class SyncInstanceMeta extends Rpc
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
}

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getMaxResultCount()
 * @method $this withMaxResultCount($value)
 * @method string getMaxExecuteCount()
 * @method $this withMaxExecuteCount($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class UpdateUser extends Rpc
{
}
