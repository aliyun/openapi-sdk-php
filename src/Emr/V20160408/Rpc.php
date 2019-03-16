<?php

namespace AlibabaCloud\Emr\V20160408;

use AlibabaCloud\Rpc;

class V20160408Rpc extends Rpc
{
    /** @var string */
    public $product = 'Emr';

    /** @var string */
    public $version = '2016-04-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'emr';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getReleaseId()
 * @method $this withReleaseId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getReleaseVersion()
 * @method $this withReleaseVersion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListETLJobRelease extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetJobMigrateResult extends V20160408Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class DescribeFlowVariableCollection extends V20160408Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 */
class ModifyFlowVariableCollection extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class SyncDataSourceSchemaTable extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class SyncDataSourceSchemaDatabase extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class KillETLJobInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReleaseId()
 * @method $this withReleaseId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ReleaseETLJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class CloneDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class CloneETLJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getReleaseId()
 * @method $this withReleaseId($value)
 */
class CancelETLJobRelease extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getClusterIdList()
 */
class ListClusterTag extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withClusterIdList(array $value)
    {
        $this->data['ClusterIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ClusterIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 */
class DescribeETLJobStageOutputSchema extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefaultOssPath()
 * @method $this withDefaultOssPath($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getOssConfig()
 * @method $this withOssConfig($value)
 */
class UpdateProjectSetting extends V20160408Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getStageConf()
 * @method $this withStageConf($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStageType()
 * @method $this withStageType($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getStagePlugin()
 * @method $this withStagePlugin($value)
 */
class UpdateETLJobStage extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class ListDataSourceSchemaDatabase extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListDataSourceSchemaTable extends V20160408Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getSql()
 * @method $this withSql($value)
 */
class ResolveETLJobSqlSchema extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResolveId()
 * @method $this withResolveId($value)
 */
class DescribeETLJobSqlSchema extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DescribeDataSourceSchemaTable extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class DescribeDataSourceSchemaDatabase extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class UpdateNavNode extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStageConnection()
 * @method string getClusterConfig()
 * @method $this withClusterConfig($value)
 * @method array getTriggerRule()
 * @method array getStage()
 * @method string getAlertConfig()
 * @method $this withAlertConfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCheck()
 * @method $this withCheck($value)
 */
class UpdateETLJob extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStageConnection(array $value)
    {
        $this->data['StageConnection'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StageConnection.' . ($i + 1) . '.Port'] = $value[$i]['Port'];
            $this->options['query']['StageConnection.' . ($i + 1) . '.From'] = $value[$i]['From'];
            $this->options['query']['StageConnection.' . ($i + 1) . '.To'] = $value[$i]['To'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTriggerRule(array $value)
    {
        $this->data['TriggerRule'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TriggerRule.' . ($i + 1) . '.CronExpr'] = $value[$i]['CronExpr'];
            $this->options['query']['TriggerRule.' . ($i + 1) . '.EndTime'] = $value[$i]['EndTime'];
            $this->options['query']['TriggerRule.' . ($i + 1) . '.StartTime'] = $value[$i]['StartTime'];
            $this->options['query']['TriggerRule.' . ($i + 1) . '.Enabled'] = $value[$i]['Enabled'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStage(array $value)
    {
        $this->data['Stage'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Stage.' . ($i + 1) . '.StageName'] = $value[$i]['StageName'];
            $this->options['query']['Stage.' . ($i + 1) . '.StageConf'] = $value[$i]['StageConf'];
            $this->options['query']['Stage.' . ($i + 1) . '.StageType'] = $value[$i]['StageType'];
            $this->options['query']['Stage.' . ($i + 1) . '.StagePlugin'] = $value[$i]['StagePlugin'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceRunParam()
 * @method string getIsDebug()
 * @method $this withIsDebug($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RunETLJob extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceRunParam(array $value)
    {
        $this->data['InstanceRunParam'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceRunParam.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['InstanceRunParam.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ListNavSubTree extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class ListETLJobTriggerEntity extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListETLJobInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCreateFrom()
 * @method $this withCreateFrom($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeETLJobInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeETLJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeDataSourceSchema extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeDataSourceCommand extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteNavNode extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteETLJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getCategoryType()
 * @method $this withCategoryType($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class CreateNavNode extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNavParentId()
 * @method $this withNavParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateETLJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNavParentId()
 * @method $this withNavParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CheckDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListSupportedServiceName extends V20160408Rpc
{
}

/**
 * @method string getServiceCustomActionName()
 * @method $this withServiceCustomActionName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterServiceCustomActionSupportConfig extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class CommonApiWhiteList extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTopicParam()
 */
class MetastoreUpdateKafkaTopicBatch extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTopicParam(array $value)
    {
        $this->data['TopicParam'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['TopicParam.' . ($i + 1) . '.TopicId'] = $value[$i]['TopicId'];
            $this->options['query']['TopicParam.' . ($i + 1) . '.NumPartitions'] = $value[$i]['NumPartitions'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RenderResourcePoolXml extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterHostGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getHostGroupType()
 * @method $this withHostGroupType($value)
 */
class CreateClusterHostGroup extends V20160408Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 */
class ModifyClusterHostGroup extends V20160408Rpc
{
}

/**
 * @method array getHostInstanceIdList()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class MigrateClusterHostGroupHost extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostInstanceIdList(array $value)
    {
        $this->data['HostInstanceIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostInstanceIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPoolId()
 * @method $this withPoolId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class ListResourceQueue extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListTablePartition extends V20160408Rpc
{
}

/**
 * @method string getPackId()
 * @method $this withPackId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTotalOffset()
 * @method $this withTotalOffset($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getPackMeta()
 * @method $this withPackMeta($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class ContextQueryLog extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListPartition extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceIds()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachPubIp extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceIds(array $value)
    {
        $this->data['InstanceIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method array getAdvancedConfig()
 * @method string getNumPartitions()
 * @method $this withNumPartitions($value)
 */
class MetastoreUpdateKafkaTopic extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAdvancedConfig(array $value)
    {
        $this->data['AdvancedConfig'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AdvancedConfig.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['AdvancedConfig.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListKafkaTopic extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListKafkaConsumerGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 */
class MetastoreDescribeKafkaConsumerGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 */
class MetastoreDescribeKafkaTopic extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 */
class MetastoreDeleteKafkaTopic extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method array getAdvancedConfig()
 * @method string getNumPartitions()
 * @method $this withNumPartitions($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 */
class MetastoreCreateKafkaTopic extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAdvancedConfig(array $value)
    {
        $this->data['AdvancedConfig'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AdvancedConfig.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['AdvancedConfig.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class StartFlow extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInnerIp()
 * @method $this withHostInnerIp($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getFromTimestamp()
 * @method $this withFromTimestamp($value)
 * @method string getToTimestamp()
 * @method $this withToTimestamp($value)
 * @method string getSlsQueryString()
 * @method $this withSlsQueryString($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetLogHistogram extends V20160408Rpc
{
}

/**
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListFlowNodeInstance extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowJobStatistic extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getHostIdList()
 */
class RemoveClusterHosts extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostIdList(array $value)
    {
        $this->data['HostIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class DescribeClusterStatistics extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class MetastoreDescribeTask extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class MetastoreRetryTask extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getTaskSourceType()
 * @method $this withTaskSourceType($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class MetastoreListTask extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterReleased()
 * @method $this withClusterReleased($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getDataSourceName()
 * @method $this withDataSourceName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class MetastoreDescribeDataSource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAddColumn()
 * @method array getAddPartition()
 * @method array getDeleteColumnName()
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method array getDeletePartitionName()
 */
class MetastoreUpdateTable extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAddColumn(array $value)
    {
        $this->data['AddColumn'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AddColumn.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['AddColumn.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['AddColumn.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAddPartition(array $value)
    {
        $this->data['AddPartition'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AddPartition.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['AddPartition.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['AddPartition.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDeleteColumnName(array $value)
    {
        $this->data['DeleteColumnName'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DeleteColumnName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDeletePartitionName(array $value)
    {
        $this->data['DeletePartitionName'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DeletePartitionName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDims()
 * @method $this withDims($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 */
class QueryServiceMetricData extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 */
class ListExecutePlanMigrateInfo extends V20160408Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPremigrtateJobJson()
 * @method $this withPremigrtateJobJson($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ModifyPreMigrateJobs extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class MigrateJobs extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class PreMigrateJobs extends V20160408Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DescribeJobMigrateInfo extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 */
class ListJobMigrateInfo extends V20160408Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizContent()
 * @method $this withBizContent($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AuthorizeSecurityGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeSecurityGroupAttribute extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DescribeUserStatistics extends V20160408Rpc
{
}

/**
 * @method string getJobMigratedNum()
 * @method $this withJobMigratedNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutePlanNum()
 * @method $this withExecutePlanNum($value)
 * @method string getJobNum()
 * @method $this withJobNum($value)
 * @method string getExecutePlanMigratedNum()
 * @method $this withExecutePlanMigratedNum($value)
 * @method string getInteractionJobMigratedNum()
 * @method $this withInteractionJobMigratedNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInteractionJobNum()
 * @method $this withInteractionJobNum($value)
 */
class ModifyUserStatistics extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderFieldName()
 * @method $this withOrderFieldName($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 */
class ListUserStatistics extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class CreateUserStatistics extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUserInfo()
 */
class RetryCreateUserPassword extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserInfo(array $value)
    {
        $this->data['UserInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserInfo.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.GroupName'] = $value[$i]['GroupName'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
        }

        return $this;
    }
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class CreateVerificationCode extends V20160408Rpc
{
}

/**
 * @method string getEmailVerificationCode()
 * @method $this withEmailVerificationCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumberVerificationCode()
 * @method $this withPhoneNumberVerificationCode($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateAlertContact extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteAlertContacts extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListAlertContacts extends V20160408Rpc
{
}

/**
 * @method string getEmailVerificationCode()
 * @method $this withEmailVerificationCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumberVerificationCode()
 * @method $this withPhoneNumberVerificationCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ModifyAlertContact extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListAlertDingDingGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListAlertUserGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getWebHookUrl()
 * @method $this withWebHookUrl($value)
 */
class CreateAlertDingDingGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getWebHookUrl()
 * @method $this withWebHookUrl($value)
 */
class ModifyAlertDingDingGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteAlertDingDingGroups extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteAlertUserGroups extends V20160408Rpc
{
}

/**
 * @method string getUserList()
 * @method $this withUserList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ModifyAlertUserGroup extends V20160408Rpc
{
}

/**
 * @method string getUserList()
 * @method $this withUserList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateAlertUserGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getHostRole()
 * @method $this withHostRole($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 */
class QuerySlsMetricData extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CloneFlowJob extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CloneFlow extends V20160408Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListFlow extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListScalingTaskGroup extends V20160408Rpc
{
}

/**
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method array getCloudWatchTrigger()
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method array getSchedulerTrigger()
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class ModifyScalingRule extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCloudWatchTrigger(array $value)
    {
        $this->data['CloudWatchTrigger'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.EvaluationCount'] = $value[$i]['EvaluationCount'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.Threshold'] = $value[$i]['Threshold'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.MetricName'] = $value[$i]['MetricName'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.ComparisonOperator'] = $value[$i]['ComparisonOperator'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.Statistics'] = $value[$i]['Statistics'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSchedulerTrigger(array $value)
    {
        $this->data['SchedulerTrigger'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.LaunchTime'] = $value[$i]['LaunchTime'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.LaunchExpirationTime'] = $value[$i]['LaunchExpirationTime'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.RecurrenceValue'] = $value[$i]['RecurrenceValue'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.RecurrenceEndTime'] = $value[$i]['RecurrenceEndTime'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.RecurrenceType'] = $value[$i]['RecurrenceType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getActiveRuleCategory()
 * @method $this withActiveRuleCategory($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 */
class ModifyScalingTaskGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeScalingTaskGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 */
class DeleteScalingRule extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteScalingTaskGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getDataDiskSize()
 * @method $this withDataDiskSize($value)
 * @method array getSpotPriceLimits()
 * @method array getScalingRule()
 * @method string getActiveRuleCategory()
 * @method $this withActiveRuleCategory($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method string getDataDiskCount()
 * @method $this withDataDiskCount($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method array getInstanceTypeList()
 */
class CreateScalingTaskGroup extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSpotPriceLimits(array $value)
    {
        $this->data['SpotPriceLimits'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SpotPriceLimits.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['SpotPriceLimits.' . ($i + 1) . '.PriceLimit'] = $value[$i]['PriceLimit'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withScalingRule(array $value)
    {
        $this->data['ScalingRule'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ScalingRule.' . ($i + 1) . '.LaunchTime'] = $value[$i]['LaunchTime'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.RuleCategory'] = $value[$i]['RuleCategory'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.AdjustmentValue'] = $value[$i]['AdjustmentValue'];
            foreach ($value[$i]['SchedulerTriggers'] as $j => $jValue) {
                $this->options['query']['ScalingRule.' . ($i + 1) . '.SchedulerTrigger.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['ScalingRule.' . ($i + 1) . '.AdjustmentType'] = $value[$i]['AdjustmentType'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.Cooldown'] = $value[$i]['Cooldown'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.RuleName'] = $value[$i]['RuleName'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.LaunchExpirationTime'] = $value[$i]['LaunchExpirationTime'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.RecurrenceValue'] = $value[$i]['RecurrenceValue'];
            $this->options['query']['ScalingRule.' . ($i + 1) . '.RecurrenceEndTime'] = $value[$i]['RecurrenceEndTime'];
            foreach ($value[$i]['CloudWatchTriggers'] as $j => $jValue) {
                $this->options['query']['ScalingRule.' . ($i + 1) . '.CloudWatchTrigger.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['ScalingRule.' . ($i + 1) . '.RecurrenceType'] = $value[$i]['RecurrenceType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceTypeList(array $value)
    {
        $this->data['InstanceTypeList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleCategory()
 * @method $this withRuleCategory($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method array getCloudWatchTrigger()
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method array getSchedulerTrigger()
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class CreateScalingRule extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCloudWatchTrigger(array $value)
    {
        $this->data['CloudWatchTrigger'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.EvaluationCount'] = $value[$i]['EvaluationCount'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.Threshold'] = $value[$i]['Threshold'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.MetricName'] = $value[$i]['MetricName'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.ComparisonOperator'] = $value[$i]['ComparisonOperator'];
            $this->options['query']['CloudWatchTrigger.' . ($i + 1) . '.Statistics'] = $value[$i]['Statistics'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSchedulerTrigger(array $value)
    {
        $this->data['SchedulerTrigger'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.LaunchTime'] = $value[$i]['LaunchTime'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.LaunchExpirationTime'] = $value[$i]['LaunchExpirationTime'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.RecurrenceValue'] = $value[$i]['RecurrenceValue'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.RecurrenceEndTime'] = $value[$i]['RecurrenceEndTime'];
            $this->options['query']['SchedulerTrigger.' . ($i + 1) . '.RecurrenceType'] = $value[$i]['RecurrenceType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListScalingRule extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListScalingActivity extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 */
class DescribeScalingRule extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingActivityId()
 * @method $this withScalingActivityId($value)
 */
class DescribeScalingActivity extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterServiceComponentHealthInfo extends V20160408Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowProjectById extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 */
class DescribeEmrMainVersion extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListEmrMainVersion extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method array getMasterInstanceIdList()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getIsResize()
 * @method $this withIsResize($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method array getOptionSoftWareList()
 * @method array getInstanceIdList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 */
class OperateExistsNodeCluster extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMasterInstanceIdList(array $value)
    {
        $this->data['MasterInstanceIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MasterInstanceIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withInstanceIdList(array $value)
    {
        $this->data['InstanceIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['InstanceIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUserInfo()
 */
class CreateUsers extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserInfo(array $value)
    {
        $this->data['UserInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserInfo.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUserInfo()
 */
class CreateUserPassword extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserInfo(array $value)
    {
        $this->data['UserInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserInfo.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.GroupName'] = $value[$i]['GroupName'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class ListUsers extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUser extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class MetastoreDeleteDataResource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefault()
 * @method $this withDefault($value)
 * @method string getAccessType()
 * @method $this withAccessType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMetaType()
 * @method $this withMetaType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class MetastoreCreateDataResource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class MetastoreListDataResources extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefault()
 * @method $this withDefault($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class MetastoreModifyDataResource extends V20160408Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAdhoc()
 * @method $this withAdhoc($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowJob extends V20160408Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowClusterAllHosts extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListEmrAvailableConfig extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getSystemDiskType()
 * @method $this withSystemDiskType($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDataDiskType()
 * @method $this withDataDiskType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ListEmrAvailableResource extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUniqueTag()
 * @method $this withUniqueTag($value)
 * @method string getTemplateBizId()
 * @method $this withTemplateBizId($value)
 */
class CreateClusterWithTemplate extends V20160408Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSqlIndex()
 * @method $this withSqlIndex($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowNodeSqlResult extends V20160408Rpc
{
}

class ListFlowClusterAll extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetUserOutputStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
 */
class GetUserSubmissionStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetUserInputStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetQueueInputStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetQueueOutputStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
 */
class GetQueueSubmissionStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetJobRunningTimeStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetHdfsCapacityStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetJobInputStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetJobOutputStatisticInfo extends V20160408Rpc
{
}

/**
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class KillFlowJob extends V20160408Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getGraph()
 * @method $this withGraph($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class ModifyFlowForWeb extends V20160408Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getGraph()
 * @method $this withGraph($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlowForWeb extends V20160408Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstanceLauncherLog extends V20160408Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowNodeInstanceContainerStatus extends V20160408Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLogName()
 * @method $this withLogName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstanceContainerLog extends V20160408Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SuspendFlow extends V20160408Rpc
{
}

/**
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class SubmitFlow extends V20160408Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SubmitFlowJob extends V20160408Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ResumeFlow extends V20160408Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getReRunFail()
 * @method $this withReRunFail($value)
 */
class RerunFlow extends V20160408Rpc
{
}

/**
 * @method string getRunConf()
 * @method $this withRunConf($value)
 * @method string getEnvConf()
 * @method $this withEnvConf($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getParamConf()
 * @method $this withParamConf($value)
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getCustomVariables()
 * @method $this withCustomVariables($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ModifyFlowJob extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceList(array $value)
    {
        $this->data['ResourceList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceList.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['ResourceList.' . ($i + 1) . '.Alias'] = $value[$i]['Alias'];
        }

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ModifyFlowProject extends V20160408Rpc
{
}

/**
 * @method array getUserList()
 * @method array getQueueList()
 * @method array getHostList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultQueue()
 * @method $this withDefaultQueue($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getDefaultUser()
 * @method $this withDefaultUser($value)
 */
class ModifyFlowProjectClusterSetting extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserList(array $value)
    {
        $this->data['UserList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withQueueList(array $value)
    {
        $this->data['QueueList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['QueueList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostList(array $value)
    {
        $this->data['HostList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class ModifyFlow extends V20160408Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ModifyFlowCategory extends V20160408Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowProjectUser extends V20160408Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowProject extends V20160408Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowProjectClusterSetting extends V20160408Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowClusterHost extends V20160408Rpc
{
}

/**
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method array getStatusList()
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListFlowInstance extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowJobHistory extends V20160408Rpc
{
}

/**
 * @method string getRoot()
 * @method $this withRoot($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowCategory extends V20160408Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowCluster extends V20160408Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class KillFlow extends V20160408Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowProjectClusterSetting extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstance extends V20160408Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowProject extends V20160408Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowCategoryTree extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowInstance extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowJob extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlow extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowCategory extends V20160408Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowProject extends V20160408Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowProjectClusterSetting extends V20160408Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteFlowProjectUser extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlow extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowCategory extends V20160408Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowJob extends V20160408Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateFlowProject extends V20160408Rpc
{
}

/**
 * @method array getUserList()
 * @method array getQueueList()
 * @method array getHostList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultQueue()
 * @method $this withDefaultQueue($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getDefaultUser()
 * @method $this withDefaultUser($value)
 */
class CreateFlowProjectClusterSetting extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserList(array $value)
    {
        $this->data['UserList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withQueueList(array $value)
    {
        $this->data['QueueList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['QueueList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostList(array $value)
    {
        $this->data['HostList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method array getUser()
 */
class CreateFlowProjectUser extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUser(array $value)
    {
        $this->data['User'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['User.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['User.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
        }

        return $this;
    }
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlow extends V20160408Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class CreateFlowCategory extends V20160408Rpc
{
}

/**
 * @method string getRunConf()
 * @method $this withRunConf($value)
 * @method string getEnvConf()
 * @method $this withEnvConf($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getParamConf()
 * @method $this withParamConf($value)
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAdhoc()
 * @method $this withAdhoc($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlowJob extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withResourceList(array $value)
    {
        $this->data['ResourceList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceList.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['ResourceList.' . ($i + 1) . '.Alias'] = $value[$i]['Alias'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeAvailableInstanceType extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOpsCommandName()
 * @method $this withOpsCommandName($value)
 */
class GetOpsCommandDetail extends V20160408Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListOpsOperationTask1 extends V20160408Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListOpsOperationTask extends V20160408Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOpsCommandResultOnce extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndCursor()
 * @method $this withEndCursor($value)
 * @method string getStartCursor()
 * @method $this withStartCursor($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOpsCommandResult extends V20160408Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOpsCommandName()
 * @method $this withOpsCommandName($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getCustomParams()
 * @method $this withCustomParams($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getHostIdList()
 * @method string getDimension()
 * @method $this withDimension($value)
 */
class RunOpsCommand extends V20160408Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostIdList(array $value)
    {
        $this->data['HostIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GetSupportedOpsCommand extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListOpsOperation extends V20160408Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getFromTimestamp()
 * @method $this withFromTimestamp($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getHostInnerIp()
 * @method $this withHostInnerIp($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getToTimestamp()
 * @method $this withToTimestamp($value)
 * @method string getSlsQueryString()
 * @method $this withSlsQueryString($value)
 */
class SearchLog extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListServiceLog extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListSlsLogstoreInfo extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLogFileName()
 * @method $this withLogFileName($value)
 */
class GetLogDownloadUrl extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterFullServiceQuickLink extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRelateId()
 * @method $this withRelateId($value)
 * @method string getParamBizType()
 * @method $this withParamBizType($value)
 */
class ListJobExecutionPlanParams extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getYarnsiteconfig()
 * @method $this withYarnsiteconfig($value)
 * @method array getConfig()
 */
class ModifyResourcePool extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.Note'] = $value[$i]['Note'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['Config.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParentQueueId()
 * @method $this withParentQueueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLeaf()
 * @method $this withLeaf($value)
 * @method array getConfig()
 */
class ModifyResourceQueue extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.Note'] = $value[$i]['Note'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.Id'] = $value[$i]['Id'];
            $this->options['query']['Config.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ModifyJobExecutionPlanFolder extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParamName()
 * @method $this withParamName($value)
 * @method string getParamValue()
 * @method $this withParamValue($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyJobExecutionPlanParam extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getMasterPwd()
 * @method $this withMasterPwd($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getHostGroup()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getUseCustomHiveMetaDb()
 * @method $this withUseCustomHiveMetaDb($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDb()
 * @method $this withInitCustomHiveMetaDb($value)
 */
class ModifyClusterTemplate extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBootstrapAction(array $value)
    {
        $this->data['BootstrapAction'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Arg'] = $value[$i]['Arg'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostGroup(array $value)
    {
        $this->data['HostGroup'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostGroup.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskCapacity'] = $value[$i]['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskType'] = $value[$i]['SysDiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ClusterId'] = $value[$i]['ClusterId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupName'] = $value[$i]['HostGroupName'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.VSwitchId'] = $value[$i]['VSwitchId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.AutoRenew'] = $value[$i]['AutoRenew'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupId'] = $value[$i]['HostGroupId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ChargeType'] = $value[$i]['ChargeType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.MultiInstanceTypes'] = $value[$i]['MultiInstanceTypes'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.CreateType'] = $value[$i]['CreateType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupType'] = $value[$i]['HostGroupType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.FileName'] = $value[$i]['FileName'];
            $this->options['query']['Config.' . ($i + 1) . '.Encrypt'] = $value[$i]['Encrypt'];
            $this->options['query']['Config.' . ($i + 1) . '.Replace'] = $value[$i]['Replace'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCurrentId()
 * @method $this withCurrentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobExecutionPlanHierarchy extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RefreshClusterResourcePool extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterTemplates extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeClusterTemplate extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteClusterTemplate extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getMasterPwd()
 * @method $this withMasterPwd($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getHostGroup()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDb()
 * @method $this withUseCustomHiveMetaDb($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDb()
 * @method $this withInitCustomHiveMetaDb($value)
 */
class CreateClusterTemplate extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBootstrapAction(array $value)
    {
        $this->data['BootstrapAction'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Arg'] = $value[$i]['Arg'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostGroup(array $value)
    {
        $this->data['HostGroup'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostGroup.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskCapacity'] = $value[$i]['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskType'] = $value[$i]['SysDiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ClusterId'] = $value[$i]['ClusterId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupName'] = $value[$i]['HostGroupName'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.VSwitchId'] = $value[$i]['VSwitchId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.AutoRenew'] = $value[$i]['AutoRenew'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupId'] = $value[$i]['HostGroupId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ChargeType'] = $value[$i]['ChargeType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.MultiInstanceTypes'] = $value[$i]['MultiInstanceTypes'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.CreateType'] = $value[$i]['CreateType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupType'] = $value[$i]['HostGroupType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.FileName'] = $value[$i]['FileName'];
            $this->options['query']['Config.' . ($i + 1) . '.Encrypt'] = $value[$i]['Encrypt'];
            $this->options['query']['Config.' . ($i + 1) . '.Replace'] = $value[$i]['Replace'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class SuspendExecutionPlanInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ResumeExecutionPlanInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getArguments()
 * @method $this withArguments($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getRerunFail()
 * @method $this withRerunFail($value)
 */
class RetryExecutionPlanInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParentQueueId()
 * @method $this withParentQueueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLeaf()
 * @method $this withLeaf($value)
 * @method array getConfig()
 */
class CreateResourceQueue extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.Note'] = $value[$i]['Note'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceQueueId()
 * @method $this withResourceQueueId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourceQueue extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterResourcePoolSchedulerType extends V20160408Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getYarnSiteConfig()
 * @method $this withYarnSiteConfig($value)
 * @method array getConfig()
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class CreateResourcePool extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.Note'] = $value[$i]['Note'];
            $this->options['query']['Config.' . ($i + 1) . '.configType'] = $value[$i]['configType'];
            $this->options['query']['Config.' . ($i + 1) . '.TargetId'] = $value[$i]['TargetId'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.Category'] = $value[$i]['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourcePool extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class ListResourcePool extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyResourcePoolSchedulerType extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getHostGroupType()
 * @method $this withHostGroupType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterHostGroup extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConfigTag()
 * @method $this withConfigTag($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterServiceConfigTag extends V20160408Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 */
class QueryAlarmHistory extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class QueryAlarmRules extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterServiceQuickLink extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 */
class ListClusterServiceConfigHistory extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ReleaseClusterHostGroup extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeClusterV2 extends V20160408Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getAutoPayOrder()
 * @method $this withAutoPayOrder($value)
 * @method array getHostComponentInfo()
 * @method array getHostGroup()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResizeClusterV2 extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostComponentInfo(array $value)
    {
        $this->data['HostComponentInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostComponentInfo.' . ($i + 1) . '.HostName'] = $value[$i]['HostName'];
            foreach ($value[$i]['ComponentNameLists'] as $j => $jValue) {
                $this->options['query']['HostComponentInfo.' . ($i + 1) . '.ComponentNameList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['HostComponentInfo.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostGroup(array $value)
    {
        $this->data['HostGroup'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostGroup.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskCapacity'] = $value[$i]['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostKeyPairName'] = $value[$i]['HostKeyPairName'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskType'] = $value[$i]['SysDiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ClusterId'] = $value[$i]['ClusterId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupName'] = $value[$i]['HostGroupName'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.VswitchId'] = $value[$i]['VswitchId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.AutoRenew'] = $value[$i]['AutoRenew'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupId'] = $value[$i]['HostGroupId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ChargeType'] = $value[$i]['ChargeType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.CreateType'] = $value[$i]['CreateType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostPassword'] = $value[$i]['HostPassword'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupType'] = $value[$i]['HostGroupType'];
        }

        return $this;
    }
}

/**
 * @method string getAutoPayOrder()
 * @method $this withAutoPayOrder($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getMasterPwd()
 * @method $this withMasterPwd($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method array getHostComponentInfo()
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method array getUserInfo()
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getAuthorizeContent()
 * @method $this withAuthorizeContent($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getRelatedClusterId()
 * @method $this withRelatedClusterId($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getHostGroup()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 */
class CreateClusterV2 extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostComponentInfo(array $value)
    {
        $this->data['HostComponentInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostComponentInfo.' . ($i + 1) . '.HostName'] = $value[$i]['HostName'];
            foreach ($value[$i]['ComponentNameLists'] as $j => $jValue) {
                $this->options['query']['HostComponentInfo.' . ($i + 1) . '.ComponentNameList.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['HostComponentInfo.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBootstrapAction(array $value)
    {
        $this->data['BootstrapAction'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Arg'] = $value[$i]['Arg'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserInfo(array $value)
    {
        $this->data['UserInfo'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserInfo.' . ($i + 1) . '.Password'] = $value[$i]['Password'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['UserInfo.' . ($i + 1) . '.UserName'] = $value[$i]['UserName'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostGroup(array $value)
    {
        $this->data['HostGroup'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostGroup.' . ($i + 1) . '.Period'] = $value[$i]['Period'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskCapacity'] = $value[$i]['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.SysDiskType'] = $value[$i]['SysDiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ClusterId'] = $value[$i]['ClusterId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupName'] = $value[$i]['HostGroupName'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.VSwitchId'] = $value[$i]['VSwitchId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.AutoRenew'] = $value[$i]['AutoRenew'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.GpuDriver'] = $value[$i]['GpuDriver'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupId'] = $value[$i]['HostGroupId'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.ChargeType'] = $value[$i]['ChargeType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.CreateType'] = $value[$i]['CreateType'];
            $this->options['query']['HostGroup.' . ($i + 1) . '.HostGroupType'] = $value[$i]['HostGroupType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.FileName'] = $value[$i]['FileName'];
            $this->options['query']['Config.' . ($i + 1) . '.Encrypt'] = $value[$i]['Encrypt'];
            $this->options['query']['Config.' . ($i + 1) . '.Replace'] = $value[$i]['Replace'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeClusterOpLog extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class TerminateClusterOperation extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListDependedService extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterBasicInfo extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostRole()
 * @method $this withHostRole($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getComponentStatus()
 * @method $this withComponentStatus($value)
 */
class ListClusterHostComponent extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method array getStatusList()
 * @method string getPrivateIp()
 * @method $this withPrivateIp($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusterHost extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 */
class DescribeClusterServiceConfigHistory extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 * @method string getServiceNameList()
 * @method $this withServiceNameList($value)
 */
class ListRequiredService extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterService extends V20160408Rpc
{
}

/**
 * @method string getExecuteStrategy()
 * @method $this withExecuteStrategy($value)
 * @method array getHostGroupIdList()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOnlyRestartStaleConfigNodes()
 * @method $this withOnlyRestartStaleConfigNodes($value)
 * @method string getNodeCountPerBatch()
 * @method $this withNodeCountPerBatch($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCustomCommand()
 * @method $this withCustomCommand($value)
 * @method string getComponentNameList()
 * @method $this withComponentNameList($value)
 * @method string getServiceActionName()
 * @method $this withServiceActionName($value)
 * @method string getIsRolling()
 * @method $this withIsRolling($value)
 * @method string getTotlerateFailCount()
 * @method $this withTotlerateFailCount($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getCustomParams()
 * @method $this withCustomParams($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getHostIdList()
 * @method $this withHostIdList($value)
 * @method string getTurnOnMaintenanceMode()
 * @method $this withTurnOnMaintenanceMode($value)
 */
class RunClusterServiceAction extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withHostGroupIdList(array $value)
    {
        $this->data['HostGroupIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['HostGroupIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getRefreshHostConfig()
 * @method $this withRefreshHostConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCustomConfigParams()
 * @method $this withCustomConfigParams($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method array getGatewayClusterIdList()
 * @method string getConfigParams()
 * @method $this withConfigParams($value)
 */
class ModifyClusterServiceConfig extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withGatewayClusterIdList(array $value)
    {
        $this->data['GatewayClusterIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['GatewayClusterIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterService extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperation extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationHost extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationHostTask extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 */
class DescribeClusterServiceConfig extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeClusterOperationHostTaskLog extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getService()
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddClusterService extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withService(array $value)
    {
        $this->data['Service'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Service.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CancelOrder extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class MetastoreSearchTables extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class MetastoreDataPreview extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 */
class RunNoteParagraphs extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class StopParagraph extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class RunParagraph extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeParagraph extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteNote extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteParagraph extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreDropTable extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuzzyDatabaseName()
 * @method $this withFuzzyDatabaseName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListDatabases extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFuzzyTableName()
 * @method $this withFuzzyTableName($value)
 */
class MetastoreListTables extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class MetastoreDescribeDatabase extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreDescribeTable extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreDropDatabase extends V20160408Rpc
{
}

/**
 * @method string getDbSource()
 * @method $this withDbSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getLocationUri()
 * @method $this withLocationUri($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 */
class MetastoreCreateDatabase extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFieldDelimiter()
 * @method $this withFieldDelimiter($value)
 * @method array getColumn()
 * @method string getCreateWith()
 * @method $this withCreateWith($value)
 * @method array getPartition()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getCreateSql()
 * @method $this withCreateSql($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getLocationUri()
 * @method $this withLocationUri($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreCreateTable extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withColumn(array $value)
    {
        $this->data['Column'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Column.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Column.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['Column.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPartition(array $value)
    {
        $this->data['Partition'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Partition.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Partition.' . ($i + 1) . '.Comment'] = $value[$i]['Comment'];
            $this->options['query']['Partition.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DetachClusterForNote extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachClusterForNote extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class SaveParagraph extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListNotes extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeNote extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateNote extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class CreateParagraph extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutionPlanWorkNodeIds()
 * @method $this withExecutionPlanWorkNodeIds($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RetryExecutionPlan extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListJobExecutionInstanceTrend extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListExecutionPlanInstanceTrend extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCount()
 * @method $this withCount($value)
 */
class ListFailureJobExecutionInstances extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getEcsOrder()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class ModifyExecutionPlanClusterInfo extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBootstrapAction(array $value)
    {
        $this->data['BootstrapAction'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Arg'] = $value[$i]['Arg'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEcsOrder(array $value)
    {
        $this->data['EcsOrder'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EcsOrder.' . ($i + 1) . '.NodeType'] = $value[$i]['NodeType'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.Index'] = $value[$i]['Index'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method array getJobIdList()
 */
class ModifyExecutionPlanJobInfo extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobIdList(array $value)
    {
        $this->data['JobIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 */
class ModifyExecutionPlanScheduleInfo extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyExecutionPlanBasicInfo extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterScripts extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeClusterScript extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteClusterScript extends V20160408Rpc
{
}

/**
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeIdList()
 * @method $this withNodeIdList($value)
 */
class CreateClusterScript extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class KillExecutionPlanInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceRelease()
 * @method $this withForceRelease($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ReleaseCluster extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ResumeExecutionPlanScheduler extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getArguments()
 * @method $this withArguments($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RunExecutionPlan extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class SuspendExecutionPlanScheduler extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class ListJobs extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyClusterName extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getJobIdList()
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getExecutionPlanVersion()
 * @method $this withExecutionPlanVersion($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getWorkflowDefinition()
 * @method $this withWorkflowDefinition($value)
 * @method array getEcsOrder()
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class ModifyExecutionPlan extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobIdList(array $value)
    {
        $this->data['JobIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBootstrapAction(array $value)
    {
        $this->data['BootstrapAction'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Arg'] = $value[$i]['Arg'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEcsOrder(array $value)
    {
        $this->data['EcsOrder'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EcsOrder.' . ($i + 1) . '.NodeType'] = $value[$i]['NodeType'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.Index'] = $value[$i]['Index'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.FileName'] = $value[$i]['FileName'];
            $this->options['query']['Config.' . ($i + 1) . '.Encrypt'] = $value[$i]['Encrypt'];
            $this->options['query']['Config.' . ($i + 1) . '.Replace'] = $value[$i]['Replace'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getRunParameter()
 * @method $this withRunParameter($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getFailAct()
 * @method $this withFailAct($value)
 */
class ModifyJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getClusterTypeList()
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getCreateType()
 * @method $this withCreateType($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getDefaultStatus()
 * @method $this withDefaultStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusters extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withClusterTypeList(array $value)
    {
        $this->data['ClusterTypeList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ClusterTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getOnlyLastInstance()
 * @method $this withOnlyLastInstance($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getExecutionPlanIdList()
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListExecutionPlanInstances extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withExecutionPlanIdList(array $value)
    {
        $this->data['ExecutionPlanIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ExecutionPlanIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class ListExecutionPlans extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusList(array $value)
    {
        $this->data['StatusList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutionPlanInstanceId()
 * @method $this withExecutionPlanInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobExecutionInstances extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class ListJobInstanceWorkers extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class KillExecutionJobInstance extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeExecutionPlan extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getJobIdList()
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getEcsOrder()
 * @method string getWorkflowDefinition()
 * @method $this withWorkflowDefinition($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class CreateExecutionPlan extends V20160408Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobIdList(array $value)
    {
        $this->data['JobIdList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withBootstrapAction(array $value)
    {
        $this->data['BootstrapAction'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Path'] = $value[$i]['Path'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Arg'] = $value[$i]['Arg'];
            $this->options['query']['BootstrapAction.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionSoftWareList(array $value)
    {
        $this->data['OptionSoftWareList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withEcsOrder(array $value)
    {
        $this->data['EcsOrder'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['EcsOrder.' . ($i + 1) . '.NodeType'] = $value[$i]['NodeType'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskCount'] = $value[$i]['DiskCount'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.NodeCount'] = $value[$i]['NodeCount'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskCapacity'] = $value[$i]['DiskCapacity'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.Index'] = $value[$i]['Index'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.InstanceType'] = $value[$i]['InstanceType'];
            $this->options['query']['EcsOrder.' . ($i + 1) . '.DiskType'] = $value[$i]['DiskType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfig(array $value)
    {
        $this->data['Config'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Config.' . ($i + 1) . '.ConfigKey'] = $value[$i]['ConfigKey'];
            $this->options['query']['Config.' . ($i + 1) . '.FileName'] = $value[$i]['FileName'];
            $this->options['query']['Config.' . ($i + 1) . '.Encrypt'] = $value[$i]['Encrypt'];
            $this->options['query']['Config.' . ($i + 1) . '.Replace'] = $value[$i]['Replace'];
            $this->options['query']['Config.' . ($i + 1) . '.ConfigValue'] = $value[$i]['ConfigValue'];
            $this->options['query']['Config.' . ($i + 1) . '.ServiceName'] = $value[$i]['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getRunParameter()
 * @method $this withRunParameter($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getFailAct()
 * @method $this withFailAct($value)
 */
class CreateJob extends V20160408Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteExecutionPlan extends V20160408Rpc
{
}
