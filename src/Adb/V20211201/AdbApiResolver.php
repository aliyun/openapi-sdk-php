<?php

namespace AlibabaCloud\Adb\V20211201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateClusterPublicConnection allocateClusterPublicConnection(array $options = [])
 * @method AttachUserENI attachUserENI(array $options = [])
 * @method BindAccount bindAccount(array $options = [])
 * @method BindDBResourceGroupWithUser bindDBResourceGroupWithUser(array $options = [])
 * @method CheckBindRamUser checkBindRamUser(array $options = [])
 * @method CheckSampleDataSet checkSampleDataSet(array $options = [])
 * @method CreateAccount createAccount(array $options = [])
 * @method CreateDBCluster createDBCluster(array $options = [])
 * @method CreateDBResourceGroup createDBResourceGroup(array $options = [])
 * @method CreateElasticPlan createElasticPlan(array $options = [])
 * @method CreateOssSubDirectory createOssSubDirectory(array $options = [])
 * @method CreateSparkTemplate createSparkTemplate(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DeleteDBCluster deleteDBCluster(array $options = [])
 * @method DeleteDBResourceGroup deleteDBResourceGroup(array $options = [])
 * @method DeleteElasticPlan deleteElasticPlan(array $options = [])
 * @method DeleteProcessInstance deleteProcessInstance(array $options = [])
 * @method DeleteSparkTemplate deleteSparkTemplate(array $options = [])
 * @method DeleteSparkTemplateFile deleteSparkTemplateFile(array $options = [])
 * @method DescribeAccountAllPrivileges describeAccountAllPrivileges(array $options = [])
 * @method DescribeAccountPrivilegeObjects describeAccountPrivilegeObjects(array $options = [])
 * @method DescribeAccountPrivileges describeAccountPrivileges(array $options = [])
 * @method DescribeAccounts describeAccounts(array $options = [])
 * @method DescribeAdbMySqlColumns describeAdbMySqlColumns(array $options = [])
 * @method DescribeAdbMySqlSchemas describeAdbMySqlSchemas(array $options = [])
 * @method DescribeAdbMySqlTables describeAdbMySqlTables(array $options = [])
 * @method DescribeAllDataSource describeAllDataSource(array $options = [])
 * @method DescribeApsActionLogs describeApsActionLogs(array $options = [])
 * @method DescribeApsResourceGroups describeApsResourceGroups(array $options = [])
 * @method DescribeAuditLogRecords describeAuditLogRecords(array $options = [])
 * @method DescribeClusterAccessWhiteList describeClusterAccessWhiteList(array $options = [])
 * @method DescribeClusterNetInfo describeClusterNetInfo(array $options = [])
 * @method DescribeColumns describeColumns(array $options = [])
 * @method DescribeDBClusterAttribute describeDBClusterAttribute(array $options = [])
 * @method DescribeDBClusterHealthStatus describeDBClusterHealthStatus(array $options = [])
 * @method DescribeDBClusterPerformance describeDBClusterPerformance(array $options = [])
 * @method DescribeDBClusters describeDBClusters(array $options = [])
 * @method DescribeDBClusterStatus describeDBClusterStatus(array $options = [])
 * @method DescribeDBResourceGroup describeDBResourceGroup(array $options = [])
 * @method DescribeDiagnosisDimensions describeDiagnosisDimensions(array $options = [])
 * @method DescribeDiagnosisRecords describeDiagnosisRecords(array $options = [])
 * @method DescribeDiagnosisSQLInfo describeDiagnosisSQLInfo(array $options = [])
 * @method DescribeDownloadRecords describeDownloadRecords(array $options = [])
 * @method DescribeElasticPlanAttribute describeElasticPlanAttribute(array $options = [])
 * @method DescribeElasticPlanJobs describeElasticPlanJobs(array $options = [])
 * @method DescribeElasticPlans describeElasticPlans(array $options = [])
 * @method DescribeElasticPlanSpecifications describeElasticPlanSpecifications(array $options = [])
 * @method DescribeEnabledPrivileges describeEnabledPrivileges(array $options = [])
 * @method DescribePatternPerformance describePatternPerformance(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSchemas describeSchemas(array $options = [])
 * @method DescribeSparkCodeLog describeSparkCodeLog(array $options = [])
 * @method DescribeSparkCodeOutput describeSparkCodeOutput(array $options = [])
 * @method DescribeSparkCodeWebUi describeSparkCodeWebUi(array $options = [])
 * @method DescribeSqlPattern describeSqlPattern(array $options = [])
 * @method DescribeSQLPatterns describeSQLPatterns(array $options = [])
 * @method DescribeTableAccessCount describeTableAccessCount(array $options = [])
 * @method DescribeTables describeTables(array $options = [])
 * @method DescribeUserQuota describeUserQuota(array $options = [])
 * @method DetachUserENI detachUserENI(array $options = [])
 * @method DisableElasticPlan disableElasticPlan(array $options = [])
 * @method DownloadDiagnosisRecords downloadDiagnosisRecords(array $options = [])
 * @method EnableElasticPlan enableElasticPlan(array $options = [])
 * @method ExistRunningSQLEngine existRunningSQLEngine(array $options = [])
 * @method GetDatabaseObjects getDatabaseObjects(array $options = [])
 * @method GetSparkAppAttemptLog getSparkAppAttemptLog(array $options = [])
 * @method GetSparkAppInfo getSparkAppInfo(array $options = [])
 * @method GetSparkAppLog getSparkAppLog(array $options = [])
 * @method GetSparkAppMetrics getSparkAppMetrics(array $options = [])
 * @method GetSparkAppState getSparkAppState(array $options = [])
 * @method GetSparkAppWebUiAddress getSparkAppWebUiAddress(array $options = [])
 * @method GetSparkConfigLogPath getSparkConfigLogPath(array $options = [])
 * @method GetSparkDefinitions getSparkDefinitions(array $options = [])
 * @method GetSparkLogAnalyzeTask getSparkLogAnalyzeTask(array $options = [])
 * @method GetSparkSQLEngineState getSparkSQLEngineState(array $options = [])
 * @method GetSparkTemplateFileContent getSparkTemplateFileContent(array $options = [])
 * @method GetSparkTemplateFolderTree getSparkTemplateFolderTree(array $options = [])
 * @method GetSparkTemplateFullTree getSparkTemplateFullTree(array $options = [])
 * @method GetTable getTable(array $options = [])
 * @method GetTableColumns getTableColumns(array $options = [])
 * @method GetTableDDL getTableDDL(array $options = [])
 * @method GetTableObjects getTableObjects(array $options = [])
 * @method GetViewDDL getViewDDL(array $options = [])
 * @method GetViewObjects getViewObjects(array $options = [])
 * @method KillSparkApp killSparkApp(array $options = [])
 * @method KillSparkLogAnalyzeTask killSparkLogAnalyzeTask(array $options = [])
 * @method KillSparkSQLEngine killSparkSQLEngine(array $options = [])
 * @method ListSparkAppAttempts listSparkAppAttempts(array $options = [])
 * @method ListSparkApps listSparkApps(array $options = [])
 * @method ListSparkLogAnalyzeTasks listSparkLogAnalyzeTasks(array $options = [])
 * @method ListSparkTemplateFileIds listSparkTemplateFileIds(array $options = [])
 * @method ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method ModifyAccountPrivileges modifyAccountPrivileges(array $options = [])
 * @method ModifyAuditLogConfig modifyAuditLogConfig(array $options = [])
 * @method ModifyClusterAccessWhiteList modifyClusterAccessWhiteList(array $options = [])
 * @method ModifyClusterConnectionString modifyClusterConnectionString(array $options = [])
 * @method ModifyDBCluster modifyDBCluster(array $options = [])
 * @method ModifyDBClusterDescription modifyDBClusterDescription(array $options = [])
 * @method ModifyDBClusterMaintainTime modifyDBClusterMaintainTime(array $options = [])
 * @method ModifyDBResourceGroup modifyDBResourceGroup(array $options = [])
 * @method ModifyElasticPlan modifyElasticPlan(array $options = [])
 * @method PreloadSparkAppMetrics preloadSparkAppMetrics(array $options = [])
 * @method ReleaseClusterPublicConnection releaseClusterPublicConnection(array $options = [])
 * @method RenameSparkTemplateFile renameSparkTemplateFile(array $options = [])
 * @method ResetAccountPassword resetAccountPassword(array $options = [])
 * @method SetSparkAppLogRootPath setSparkAppLogRootPath(array $options = [])
 * @method StartSparkSQLEngine startSparkSQLEngine(array $options = [])
 * @method SubmitSparkApp submitSparkApp(array $options = [])
 * @method SubmitSparkLogAnalyzeTask submitSparkLogAnalyzeTask(array $options = [])
 * @method UnbindAccount unbindAccount(array $options = [])
 * @method UnbindDBResourceGroupWithUser unbindDBResourceGroupWithUser(array $options = [])
 * @method UpdateSparkTemplateFile updateSparkTemplateFile(array $options = [])
 */
class AdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'adb';

    /** @var string */
    public $version = '2021-12-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ads';
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class AllocateClusterPublicConnection extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class AttachUserENI extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getRamUser()
 * @method $this withRamUser($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class BindAccount extends Rpc
{
}

/**
 * @method string getGroupUser()
 * @method $this withGroupUser($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class BindDBResourceGroupWithUser extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class CheckBindRamUser extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class CheckSampleDataSet extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class CreateAccount extends Rpc
{
}

/**
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getEnableDefaultResourcePool()
 * @method $this withEnableDefaultResourcePool($value)
 * @method string getSourceDbClusterId()
 * @method $this withSourceDbClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getStorageResource()
 * @method $this withStorageResource($value)
 * @method array getTag()
 * @method string getDBClusterNetworkType()
 * @method $this withDBClusterNetworkType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDBClusterVersion()
 * @method $this withDBClusterVersion($value)
 * @method string getRestoreToTime()
 * @method $this withRestoreToTime($value)
 * @method string getBackupSetId()
 * @method $this withBackupSetId($value)
 * @method string getUsedTime()
 * @method $this withUsedTime($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getRestoreType()
 * @method $this withRestoreType($value)
 * @method string getVPCId()
 * @method $this withVPCId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getComputeResource()
 * @method $this withComputeResource($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CreateDBCluster extends Rpc
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
 * @method string getMinComputeResource()
 * @method $this withMinComputeResource($value)
 * @method string getMaxClusterCount()
 * @method $this withMaxClusterCount($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getMinClusterCount()
 * @method $this withMinClusterCount($value)
 * @method string getClusterMode()
 * @method $this withClusterMode($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getClusterSizeResource()
 * @method $this withClusterSizeResource($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMaxComputeResource()
 * @method $this withMaxComputeResource($value)
 */
class CreateDBResourceGroup extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getCronExpression()
 * @method $this withCronExpression($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getTargetSize()
 * @method $this withTargetSize($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getAutoScale()
 * @method $this withAutoScale($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class CreateElasticPlan extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method string getPath()
 */
class CreateOssSubDirectory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['form_params']['Path'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method string getAppType()
 * @method string getType()
 * @method string getParentId()
 * @method string getName()
 */
class CreateSparkTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppType($value)
    {
        $this->data['AppType'] = $value;
        $this->options['form_params']['AppType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentId($value)
    {
        $this->data['ParentId'] = $value;
        $this->options['form_params']['ParentId'] = $value;

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
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DeleteAccount extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DeleteDBCluster extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DeleteDBResourceGroup extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class DeleteElasticPlan extends Rpc
{
}

/**
 * @method string getProjectCode()
 * @method $this withProjectCode($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getProcessInstanceId()
 * @method $this withProcessInstanceId($value)
 */
class DeleteProcessInstance extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method string getId()
 */
class DeleteSparkTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method string getId()
 */
class DeleteSparkTemplateFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class DescribeAccountAllPrivileges extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getColumnPrivilegeObject()
 * @method $this withColumnPrivilegeObject($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getTablePrivilegeObject()
 * @method $this withTablePrivilegeObject($value)
 * @method string getPrivilegeType()
 * @method $this withPrivilegeType($value)
 * @method string getDatabasePrivilegeObject()
 * @method $this withDatabasePrivilegeObject($value)
 */
class DescribeAccountPrivilegeObjects extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getColumnPrivilegeObject()
 * @method $this withColumnPrivilegeObject($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getTablePrivilegeObject()
 * @method $this withTablePrivilegeObject($value)
 * @method string getPrivilegeType()
 * @method $this withPrivilegeType($value)
 * @method string getDatabasePrivilegeObject()
 * @method $this withDatabasePrivilegeObject($value)
 */
class DescribeAccountPrivileges extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DescribeAccounts extends Rpc
{
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeAdbMySqlColumns extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeAdbMySqlSchemas extends Rpc
{
}

/**
 * @method string getSchema()
 * @method $this withSchema($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeAdbMySqlTables extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DescribeAllDataSource extends Rpc
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
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStage()
 * @method $this withStage($value)
 * @method string getWorkloadId()
 * @method $this withWorkloadId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeApsActionLogs extends Rpc
{
}

/**
 * @method string getDBClusterId()
 */
class DescribeApsResourceGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostAddress()
 * @method $this withHostAddress($value)
 * @method string getProxyUser()
 * @method $this withProxyUser($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getSqlType()
 * @method $this withSqlType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getQueryKeyword()
 * @method $this withQueryKeyword($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getSucceed()
 * @method $this withSucceed($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeAuditLogRecords extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeClusterAccessWhiteList extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeClusterNetInfo extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DescribeColumns extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeDBClusterAttribute extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeDBClusterHealthStatus extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourcePools()
 * @method $this withResourcePools($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DescribeDBClusterPerformance extends Rpc
{
}

/**
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterStatus()
 * @method $this withDBClusterStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getDBClusterIds()
 * @method $this withDBClusterIds($value)
 */
class DescribeDBClusters extends Rpc
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

class DescribeDBClusterStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 */
class DescribeDBResourceGroup extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDiagnosisDimensions extends Rpc
{
}

/**
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRawStartTime()
 * @method $this withRawStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getRawEndTime()
 * @method $this withRawEndTime($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getMaxScanSize()
 * @method $this withMaxScanSize($value)
 * @method string getResourceGroup()
 * @method $this withResourceGroup($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getPatternId()
 * @method $this withPatternId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getMinPeakMemory()
 * @method $this withMinPeakMemory($value)
 * @method string getMinScanSize()
 * @method $this withMinScanSize($value)
 * @method string getMaxPeakMemory()
 * @method $this withMaxPeakMemory($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeDiagnosisRecords extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getProcessState()
 * @method $this withProcessState($value)
 * @method string getProcessStartTime()
 * @method $this withProcessStartTime($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 * @method string getProcessRcHost()
 * @method $this withProcessRcHost($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDiagnosisSQLInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDownloadRecords extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class DescribeElasticPlanAttribute extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeElasticPlanJobs extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class DescribeElasticPlans extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeElasticPlanSpecifications extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeEnabledPrivileges extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getPatternId()
 * @method $this withPatternId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribePatternPerformance extends Rpc
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
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeSchemas extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeSparkCodeLog extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeSparkCodeOutput extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeSparkCodeWebUi extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getSqlPattern()
 * @method $this withSqlPattern($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeSqlPattern extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeSQLPatterns extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeTableAccessCount extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeTables extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DescribeUserQuota extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class DetachUserENI extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class DisableElasticPlan extends Rpc
{
}

/**
 * @method string getQueryCondition()
 * @method $this withQueryCondition($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRawStartTime()
 * @method $this withRawStartTime($value)
 * @method string getRawEndTime()
 * @method $this withRawEndTime($value)
 * @method string getDatabase()
 * @method $this withDatabase($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getMaxScanSize()
 * @method $this withMaxScanSize($value)
 * @method string getResourceGroup()
 * @method $this withResourceGroup($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getMinPeakMemory()
 * @method $this withMinPeakMemory($value)
 * @method string getMinScanSize()
 * @method $this withMinScanSize($value)
 * @method string getMaxPeakMemory()
 * @method $this withMaxPeakMemory($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DownloadDiagnosisRecords extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class EnableElasticPlan extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method string getDBClusterId()
 */
class ExistRunningSQLEngine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupName($value)
    {
        $this->data['ResourceGroupName'] = $value;
        $this->options['form_params']['ResourceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getFilterOwner()
 * @method $this withFilterOwner($value)
 * @method string getFilterSchemaName()
 * @method $this withFilterSchemaName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetDatabaseObjects extends Rpc
{
}

/**
 * @method string getLogLength()
 * @method string getAttemptId()
 */
class GetSparkAppAttemptLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogLength($value)
    {
        $this->data['LogLength'] = $value;
        $this->options['form_params']['LogLength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttemptId($value)
    {
        $this->data['AttemptId'] = $value;
        $this->options['form_params']['AttemptId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetSparkAppInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getLogLength()
 */
class GetSparkAppLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogLength($value)
    {
        $this->data['LogLength'] = $value;
        $this->options['form_params']['LogLength'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetSparkAppMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetSparkAppState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetSparkAppWebUiAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 */
class GetSparkConfigLogPath extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 */
class GetSparkDefinitions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 */
class GetSparkLogAnalyzeTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupName()
 * @method string getDBClusterId()
 */
class GetSparkSQLEngineState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupName($value)
    {
        $this->data['ResourceGroupName'] = $value;
        $this->options['form_params']['ResourceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method string getId()
 */
class GetSparkTemplateFileContent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 */
class GetSparkTemplateFolderTree extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 */
class GetSparkTemplateFullTree extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetTable extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getColumnName()
 * @method $this withColumnName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetTableColumns extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class GetTableDDL extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilterTblType()
 * @method $this withFilterTblType($value)
 * @method string getFilterDescription()
 * @method $this withFilterDescription($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFilterTblName()
 * @method $this withFilterTblName($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getFilterOwner()
 * @method $this withFilterOwner($value)
 */
class GetTableObjects extends Rpc
{
}

/**
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getViewName()
 * @method $this withViewName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class GetViewDDL extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFilterViewName()
 * @method $this withFilterViewName($value)
 * @method string getFilterViewType()
 * @method $this withFilterViewType($value)
 * @method string getSchemaName()
 * @method $this withSchemaName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getFilterOwner()
 * @method $this withFilterOwner($value)
 */
class GetViewObjects extends Rpc
{
}

/**
 * @method string getAppId()
 */
class KillSparkApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 */
class KillSparkLogAnalyzeTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupName()
 * @method string getDBClusterId()
 */
class KillSparkSQLEngine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupName($value)
    {
        $this->data['ResourceGroupName'] = $value;
        $this->options['form_params']['ResourceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSparkAppAttempts extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method $this withResourceGroupName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSparkApps extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListSparkLogAnalyzeTasks extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 */
class ListSparkTemplateFileIds extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ModifyAccountDescription extends Rpc
{
}

/**
 * @method string getAccountPrivileges()
 * @method $this withAccountPrivileges($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class ModifyAccountPrivileges extends Rpc
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
 * @method string getAuditLogStatus()
 * @method $this withAuditLogStatus($value)
 */
class ModifyAuditLogConfig extends Rpc
{
}

/**
 * @method string getSecurityIps()
 * @method $this withSecurityIps($value)
 * @method string getDBClusterIPArrayAttribute()
 * @method $this withDBClusterIPArrayAttribute($value)
 * @method string getModifyMode()
 * @method $this withModifyMode($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getDBClusterIPArrayName()
 * @method $this withDBClusterIPArrayName($value)
 */
class ModifyClusterAccessWhiteList extends Rpc
{
}

/**
 * @method string getConnectionStringPrefix()
 * @method $this withConnectionStringPrefix($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getCurrentConnectionString()
 * @method $this withCurrentConnectionString($value)
 * @method string getPort()
 * @method $this withPort($value)
 */
class ModifyClusterConnectionString extends Rpc
{
}

/**
 * @method string getEnableDefaultResourcePool()
 * @method $this withEnableDefaultResourcePool($value)
 * @method string getStorageResource()
 * @method $this withStorageResource($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComputeResource()
 * @method $this withComputeResource($value)
 */
class ModifyDBCluster extends Rpc
{
}

/**
 * @method string getDBClusterDescription()
 * @method $this withDBClusterDescription($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class ModifyDBClusterDescription extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 */
class ModifyDBClusterMaintainTime extends Rpc
{
}

/**
 * @method string getMinComputeResource()
 * @method $this withMinComputeResource($value)
 * @method string getMaxClusterCount()
 * @method $this withMaxClusterCount($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getMinClusterCount()
 * @method $this withMinClusterCount($value)
 * @method string getClusterMode()
 * @method $this withClusterMode($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getClusterSizeResource()
 * @method $this withClusterSizeResource($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getMaxComputeResource()
 * @method $this withMaxComputeResource($value)
 */
class ModifyDBResourceGroup extends Rpc
{
}

/**
 * @method string getCronExpression()
 * @method $this withCronExpression($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTargetSize()
 * @method $this withTargetSize($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getElasticPlanName()
 * @method $this withElasticPlanName($value)
 */
class ModifyElasticPlan extends Rpc
{
}

/**
 * @method string getAppId()
 */
class PreloadSparkAppMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 */
class ReleaseClusterPublicConnection extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RenameSparkTemplateFile extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getAccountDescription()
 * @method $this withAccountDescription($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ResetAccountPassword extends Rpc
{
}

/**
 * @method string getDBClusterId()
 * @method string getUseDefaultOss()
 * @method string getOssLogPath()
 */
class SetSparkAppLogRootPath extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseDefaultOss($value)
    {
        $this->data['UseDefaultOss'] = $value;
        $this->options['form_params']['UseDefaultOss'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssLogPath($value)
    {
        $this->data['OssLogPath'] = $value;
        $this->options['form_params']['OssLogPath'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupName()
 * @method string getSlotNum()
 * @method string getDBClusterId()
 * @method string getMinExecutor()
 * @method string getJars()
 * @method string getMaxExecutor()
 * @method string getConfig()
 */
class StartSparkSQLEngine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupName($value)
    {
        $this->data['ResourceGroupName'] = $value;
        $this->options['form_params']['ResourceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlotNum($value)
    {
        $this->data['SlotNum'] = $value;
        $this->options['form_params']['SlotNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinExecutor($value)
    {
        $this->data['MinExecutor'] = $value;
        $this->options['form_params']['MinExecutor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJars($value)
    {
        $this->data['Jars'] = $value;
        $this->options['form_params']['Jars'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxExecutor($value)
    {
        $this->data['MaxExecutor'] = $value;
        $this->options['form_params']['MaxExecutor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfig($value)
    {
        $this->data['Config'] = $value;
        $this->options['form_params']['Config'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupName()
 * @method string getAgentVersion()
 * @method string getData()
 * @method string getAppName()
 * @method string getTemplateFileId()
 * @method string getDBClusterId()
 * @method string getAppType()
 * @method string getAgentSource()
 */
class SubmitSparkApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupName($value)
    {
        $this->data['ResourceGroupName'] = $value;
        $this->options['form_params']['ResourceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentVersion($value)
    {
        $this->data['AgentVersion'] = $value;
        $this->options['form_params']['AgentVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateFileId($value)
    {
        $this->data['TemplateFileId'] = $value;
        $this->options['form_params']['TemplateFileId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppType($value)
    {
        $this->data['AppType'] = $value;
        $this->options['form_params']['AppType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgentSource($value)
    {
        $this->data['AgentSource'] = $value;
        $this->options['form_params']['AgentSource'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class SubmitSparkLogAnalyzeTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class UnbindAccount extends Rpc
{
}

/**
 * @method string getGroupUser()
 * @method $this withGroupUser($value)
 * @method string getDBClusterId()
 * @method $this withDBClusterId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class UnbindDBResourceGroupWithUser extends Rpc
{
}

/**
 * @method string getResourceGroupName()
 * @method string getDBClusterId()
 * @method string getContent()
 * @method string getId()
 */
class UpdateSparkTemplateFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupName($value)
    {
        $this->data['ResourceGroupName'] = $value;
        $this->options['form_params']['ResourceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBClusterId($value)
    {
        $this->data['DBClusterId'] = $value;
        $this->options['form_params']['DBClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}
