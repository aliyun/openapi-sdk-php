<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddLogicTableRouteConfig addLogicTableRouteConfig(array $options = [])
 * @method ApproveOrder approveOrder(array $options = [])
 * @method ChangeColumnSecLevel changeColumnSecLevel(array $options = [])
 * @method CloseOrder closeOrder(array $options = [])
 * @method CreateDataCorrectOrder createDataCorrectOrder(array $options = [])
 * @method CreateDataCronClearOrder createDataCronClearOrder(array $options = [])
 * @method CreateDataImportOrder createDataImportOrder(array $options = [])
 * @method CreateFreeLockCorrectOrder createFreeLockCorrectOrder(array $options = [])
 * @method CreateLogicDatabase createLogicDatabase(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method CreateProxy createProxy(array $options = [])
 * @method CreateProxyAccess createProxyAccess(array $options = [])
 * @method CreatePublishGroupTask createPublishGroupTask(array $options = [])
 * @method CreateSQLReviewOrder createSQLReviewOrder(array $options = [])
 * @method CreateStructSyncOrder createStructSyncOrder(array $options = [])
 * @method CreateUploadFileJob createUploadFileJob(array $options = [])
 * @method CreateUploadOSSFileJob createUploadOSSFileJob(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteLogicDatabase deleteLogicDatabase(array $options = [])
 * @method DeleteLogicTableRouteConfig deleteLogicTableRouteConfig(array $options = [])
 * @method DeleteProxy deleteProxy(array $options = [])
 * @method DeleteProxyAccess deleteProxyAccess(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DisableUser disableUser(array $options = [])
 * @method EditLogicDatabase editLogicDatabase(array $options = [])
 * @method EnableUser enableUser(array $options = [])
 * @method ExecuteDataCorrect executeDataCorrect(array $options = [])
 * @method ExecuteDataExport executeDataExport(array $options = [])
 * @method ExecuteScript executeScript(array $options = [])
 * @method ExecuteStructSync executeStructSync(array $options = [])
 * @method GetApprovalDetail getApprovalDetail(array $options = [])
 * @method GetDatabase getDatabase(array $options = [])
 * @method GetDataCorrectBackupFiles getDataCorrectBackupFiles(array $options = [])
 * @method GetDataCorrectOrderDetail getDataCorrectOrderDetail(array $options = [])
 * @method GetDataCorrectSQLFile getDataCorrectSQLFile(array $options = [])
 * @method GetDataCorrectTaskDetail getDataCorrectTaskDetail(array $options = [])
 * @method GetDataCronClearTaskDetailList getDataCronClearTaskDetailList(array $options = [])
 * @method GetDataExportDownloadURL getDataExportDownloadURL(array $options = [])
 * @method GetDataExportOrderDetail getDataExportOrderDetail(array $options = [])
 * @method GetDBTaskSQLJobLog getDBTaskSQLJobLog(array $options = [])
 * @method GetDBTopology getDBTopology(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetLogicDatabase getLogicDatabase(array $options = [])
 * @method GetMetaTableColumn getMetaTableColumn(array $options = [])
 * @method GetMetaTableDetailInfo getMetaTableDetailInfo(array $options = [])
 * @method GetOpLog getOpLog(array $options = [])
 * @method GetOrderBaseInfo getOrderBaseInfo(array $options = [])
 * @method GetOwnerApplyOrderDetail getOwnerApplyOrderDetail(array $options = [])
 * @method GetPermApplyOrderDetail getPermApplyOrderDetail(array $options = [])
 * @method GetPhysicalDatabase getPhysicalDatabase(array $options = [])
 * @method GetProxy getProxy(array $options = [])
 * @method GetSparkJobDetail getSparkJobDetail(array $options = [])
 * @method GetSparkJobDriverLog getSparkJobDriverLog(array $options = [])
 * @method GetSparkJobExecutorLogs getSparkJobExecutorLogs(array $options = [])
 * @method GetSparkJobLog getSparkJobLog(array $options = [])
 * @method GetSQLReviewCheckResultStatus getSQLReviewCheckResultStatus(array $options = [])
 * @method GetSQLReviewOptimizeDetail getSQLReviewOptimizeDetail(array $options = [])
 * @method GetStructSyncExecSqlDetail getStructSyncExecSqlDetail(array $options = [])
 * @method GetStructSyncJobAnalyzeResult getStructSyncJobAnalyzeResult(array $options = [])
 * @method GetStructSyncJobDetail getStructSyncJobDetail(array $options = [])
 * @method GetStructSyncOrderDetail getStructSyncOrderDetail(array $options = [])
 * @method GetTableDBTopology getTableDBTopology(array $options = [])
 * @method GetTableTopology getTableTopology(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetUserActiveTenant getUserActiveTenant(array $options = [])
 * @method GetUserUploadFileJob getUserUploadFileJob(array $options = [])
 * @method GrantUserPermission grantUserPermission(array $options = [])
 * @method InspectProxyAccessSecret inspectProxyAccessSecret(array $options = [])
 * @method KillSparkJob killSparkJob(array $options = [])
 * @method ListColumns listColumns(array $options = [])
 * @method ListDatabases listDatabases(array $options = [])
 * @method ListDatabaseUserPermssions listDatabaseUserPermssions(array $options = [])
 * @method ListDataCorrectPreCheckDB listDataCorrectPreCheckDB(array $options = [])
 * @method ListDataCorrectPreCheckSQL listDataCorrectPreCheckSQL(array $options = [])
 * @method ListDBTaskSQLJob listDBTaskSQLJob(array $options = [])
 * @method ListDBTaskSQLJobDetail listDBTaskSQLJobDetail(array $options = [])
 * @method ListDDLPublishRecords listDDLPublishRecords(array $options = [])
 * @method ListIndexes listIndexes(array $options = [])
 * @method ListInstanceLoginAuditLog listInstanceLoginAuditLog(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListInstanceUserPermissions listInstanceUserPermissions(array $options = [])
 * @method ListLogicDatabases listLogicDatabases(array $options = [])
 * @method ListLogicTableRouteConfig listLogicTableRouteConfig(array $options = [])
 * @method ListLogicTables listLogicTables(array $options = [])
 * @method ListOrders listOrders(array $options = [])
 * @method ListProxies listProxies(array $options = [])
 * @method ListProxyAccesses listProxyAccesses(array $options = [])
 * @method ListProxySQLExecAuditLog listProxySQLExecAuditLog(array $options = [])
 * @method ListSensitiveColumns listSensitiveColumns(array $options = [])
 * @method ListSensitiveColumnsDetail listSensitiveColumnsDetail(array $options = [])
 * @method ListSQLExecAuditLog listSQLExecAuditLog(array $options = [])
 * @method ListSQLReviewOriginSQL listSQLReviewOriginSQL(array $options = [])
 * @method ListTables listTables(array $options = [])
 * @method ListUserPermissions listUserPermissions(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListUserTenants listUserTenants(array $options = [])
 * @method ListWorkFlowNodes listWorkFlowNodes(array $options = [])
 * @method ListWorkFlowTemplates listWorkFlowTemplates(array $options = [])
 * @method ModifyDataCorrectExecSQL modifyDataCorrectExecSQL(array $options = [])
 * @method RegisterInstance registerInstance(array $options = [])
 * @method RegisterUser registerUser(array $options = [])
 * @method RetryDataCorrectPreCheck retryDataCorrectPreCheck(array $options = [])
 * @method RevokeUserPermission revokeUserPermission(array $options = [])
 * @method SearchDatabase searchDatabase(array $options = [])
 * @method SearchTable searchTable(array $options = [])
 * @method SetOwners setOwners(array $options = [])
 * @method SubmitOrderApproval submitOrderApproval(array $options = [])
 * @method SubmitSparkJob submitSparkJob(array $options = [])
 * @method SubmitStructSyncOrderApproval submitStructSyncOrderApproval(array $options = [])
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
    public $serviceCode = 'dms-enterprise';
}

/**
 * @method string getRouteKey()
 * @method $this withRouteKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getRouteExpr()
 * @method $this withRouteExpr($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 */
class AddLogicTableRouteConfig extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getWorkflowInstanceId()
 * @method $this withWorkflowInstanceId($value)
 * @method string getApprovalType()
 * @method $this withApprovalType($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class ApproveOrder extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getIsLogic()
 * @method $this withIsLogic($value)
 * @method string getNewLevel()
 * @method $this withNewLevel($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ChangeColumnSecLevel extends Rpc
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
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getAttachmentKey()
 * @method $this withAttachmentKey($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateDataCorrectOrder extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getAttachmentKey()
 * @method $this withAttachmentKey($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateDataCronClearOrder extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getAttachmentKey()
 * @method $this withAttachmentKey($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateDataImportOrder extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getAttachmentKey()
 * @method $this withAttachmentKey($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateFreeLockCorrectOrder extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDatabaseIds()
 * @method $this withDatabaseIds($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 */
class CreateLogicDatabase extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPluginType()
 * @method $this withPluginType($value)
 * @method string getAttachmentKey()
 * @method $this withAttachmentKey($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getPluginParam()
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPluginParam($value)
    {
        $this->data['PluginParam'] = $value;
        $this->options['form_params']['PluginParam'] = $value;

        return $this;
    }
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class CreateProxy extends Rpc
{
}

/**
 * @method string getIndepAccount()
 * @method $this withIndepAccount($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getIndepPassword()
 * @method $this withIndepPassword($value)
 * @method string getProxyId()
 * @method $this withProxyId($value)
 */
class CreateProxyAccess extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPlanTime()
 * @method $this withPlanTime($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getPublishStrategy()
 * @method $this withPublishStrategy($value)
 */
class CreatePublishGroupTask extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateSQLReviewOrder extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getAttachmentKey()
 * @method $this withAttachmentKey($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getRelatedUserList()
 * @method $this withRelatedUserList($value)
 */
class CreateStructSyncOrder extends Rpc
{
}

/**
 * @method string getUploadType()
 * @method $this withUploadType($value)
 * @method string getFileSource()
 * @method $this withFileSource($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getUploadURL()
 * @method $this withUploadURL($value)
 */
class CreateUploadFileJob extends Rpc
{
}

/**
 * @method string getUploadType()
 * @method $this withUploadType($value)
 * @method string getFileSource()
 * @method $this withFileSource($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getUploadTarget()
 * @method $this withUploadTarget($value)
 */
class CreateUploadOSSFileJob extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getLogicDbId()
 * @method $this withLogicDbId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DeleteLogicDatabase extends Rpc
{
}

/**
 * @method string getRouteKey()
 * @method $this withRouteKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 */
class DeleteLogicTableRouteConfig extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getProxyId()
 * @method $this withProxyId($value)
 */
class DeleteProxy extends Rpc
{
}

/**
 * @method string getProxyAccessId()
 * @method $this withProxyAccessId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class DeleteProxyAccess extends Rpc
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
 * @method string getLogicDbId()
 * @method $this withLogicDbId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDatabaseIds()
 * @method $this withDatabaseIds($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 */
class EditLogicDatabase extends Rpc
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
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getActionDetail()
 * @method $this withActionDetail($value)
 */
class ExecuteDataCorrect extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getActionDetail()
 * @method $this withActionDetail($value)
 */
class ExecuteDataExport extends Rpc
{
}

/**
 * @method string getScript()
 * @method $this withScript($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 */
class ExecuteScript extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ExecuteStructSync extends Rpc
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
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
 */
class GetDatabase extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getActionDetail()
 * @method $this withActionDetail($value)
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
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getOrderActionName()
 * @method $this withOrderActionName($value)
 */
class GetDataCorrectSQLFile extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDataCorrectTaskDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetDataCronClearTaskDetailList extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDBTaskSQLJobLog extends Rpc
{
}

/**
 * @method string getLogicDbId()
 * @method $this withLogicDbId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetDBTopology extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getHost()
 * @method $this withHost($value)
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
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetMetaTableColumn extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetMetaTableDetailInfo extends Rpc
{
}

/**
 * @method string getModule()
 * @method $this withModule($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetOpLog extends Rpc
{
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
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetOwnerApplyOrderDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetPermApplyOrderDetail extends Rpc
{
}

/**
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetPhysicalDatabase extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProxyId()
 * @method $this withProxyId($value)
 */
class GetProxy extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetSparkJobDetail extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetSparkJobDriverLog extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetSparkJobExecutorLogs extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetSparkJobLog extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getOrderActionName()
 * @method $this withOrderActionName($value)
 */
class GetSQLReviewCheckResultStatus extends Rpc
{
}

/**
 * @method string getSQLReviewQueryKey()
 * @method $this withSQLReviewQueryKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetSQLReviewOptimizeDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetStructSyncExecSqlDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getCompareType()
 * @method $this withCompareType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetStructSyncJobAnalyzeResult extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetStructSyncJobDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetStructSyncOrderDetail extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetTableDBTopology extends Rpc
{
}

/**
 * @method string getTableGuid()
 * @method $this withTableGuid($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetTableTopology extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getUid()
 * @method $this withUid($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetUserActiveTenant extends Rpc
{
}

/**
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class GetUserUploadFileJob extends Rpc
{
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getProxyAccessId()
 * @method $this withProxyAccessId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class InspectProxyAccessSecret extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class KillSparkJob extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 */
class ListColumns extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDatabases extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPermType()
 * @method $this withPermType($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListDatabaseUserPermssions extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDataCorrectPreCheckDB extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDataCorrectPreCheckSQL extends Rpc
{
}

/**
 * @method string getDBTaskGroupId()
 * @method $this withDBTaskGroupId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDBTaskSQLJob extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDBTaskSQLJobDetail extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListDDLPublishRecords extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 */
class ListIndexes extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getOpUserName()
 * @method $this withOpUserName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstanceLoginAuditLog extends Rpc
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
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ListInstanceUserPermissions extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListLogicDatabases extends Rpc
{
}

/**
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListLogicTableRouteConfig extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getReturnGuid()
 * @method $this withReturnGuid($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class ListLogicTables extends Rpc
{
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
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListProxies extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getProxyId()
 * @method $this withProxyId($value)
 */
class ListProxyAccesses extends Rpc
{
}

/**
 * @method string getSQLType()
 * @method $this withSQLType($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getOpUserName()
 * @method $this withOpUserName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExecState()
 * @method $this withExecState($value)
 */
class ListProxySQLExecAuditLog extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityLevel()
 * @method $this withSecurityLevel($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListSensitiveColumns extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListSensitiveColumnsDetail extends Rpc
{
}

/**
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getOpUserName()
 * @method $this withOpUserName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getExecState()
 * @method $this withExecState($value)
 */
class ListSQLExecAuditLog extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOrderActionDetail()
 * @method $this withOrderActionDetail($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getOrderActionName()
 * @method $this withOrderActionName($value)
 */
class ListSQLReviewOriginSQL extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getReturnGuid()
 * @method $this withReturnGuid($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class ListTables extends Rpc
{
}

/**
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
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
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserState()
 * @method $this withUserState($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 */
class ListUserTenants extends Rpc
{
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
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getExecSQL()
 * @method $this withExecSQL($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class ModifyDataCorrectExecSQL extends Rpc
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
 * @method string getSkipTest()
 * @method $this withSkipTest($value)
 * @method string getSafeRule()
 * @method $this withSafeRule($value)
 */
class RegisterInstance extends Rpc
{
}

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
 * @method string getUserNick()
 * @method $this withUserNick($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getUid()
 * @method $this withUid($value)
 */
class RegisterUser extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class RetryDataCorrectPreCheck extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
}

/**
 * @method string getReturnGuid()
 * @method $this withReturnGuid($value)
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
class SearchTable extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getOwnerIds()
 * @method $this withOwnerIds($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getOwnerType()
 * @method $this withOwnerType($value)
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
 * @method string getMainClass()
 * @method string getConfiguration()
 * @method string getOssInfo()
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getMainFile()
 * @method string getName()
 * @method string getFiles()
 * @method string getAppCode()
 * @method string getArguments()
 */
class SubmitSparkJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMainClass($value)
    {
        $this->data['MainClass'] = $value;
        $this->options['form_params']['MainClass'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfiguration($value)
    {
        $this->data['Configuration'] = $value;
        $this->options['form_params']['Configuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssInfo($value)
    {
        $this->data['OssInfo'] = $value;
        $this->options['form_params']['OssInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMainFile($value)
    {
        $this->data['MainFile'] = $value;
        $this->options['form_params']['MainFile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFiles($value)
    {
        $this->data['Files'] = $value;
        $this->options['form_params']['Files'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppCode($value)
    {
        $this->data['AppCode'] = $value;
        $this->options['form_params']['AppCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArguments($value)
    {
        $this->data['Arguments'] = $value;
        $this->options['form_params']['Arguments'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getTid()
 * @method $this withTid($value)
 */
class SubmitStructSyncOrderApproval extends Rpc
{
}

/**
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getDbId()
 * @method $this withDbId($value)
 * @method string getLogic()
 * @method $this withLogic($value)
 */
class SyncDatabaseMeta extends Rpc
{
}

/**
 * @method string getIgnoreTable()
 * @method $this withIgnoreTable($value)
 * @method string getTid()
 * @method $this withTid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getSkipTest()
 * @method $this withSkipTest($value)
 */
class UpdateInstance extends Rpc
{
}

/**
 * @method string getRoleNames()
 * @method $this withRoleNames($value)
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
 * @method string getUid()
 * @method $this withUid($value)
 */
class UpdateUser extends Rpc
{
}
