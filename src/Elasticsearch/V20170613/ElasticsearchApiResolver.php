<?php

namespace AlibabaCloud\Elasticsearch\V20170613;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateZones activateZones(array $options = [])
 * @method AddConnectableCluster addConnectableCluster(array $options = [])
 * @method AddSnapshotRepo addSnapshotRepo(array $options = [])
 * @method CancelDeletion cancelDeletion(array $options = [])
 * @method CancelLogstashDeletion cancelLogstashDeletion(array $options = [])
 * @method CancelTask cancelTask(array $options = [])
 * @method CapacityPlan capacityPlan(array $options = [])
 * @method CloseDiagnosis closeDiagnosis(array $options = [])
 * @method CloseHttps closeHttps(array $options = [])
 * @method CloseManagedIndex closeManagedIndex(array $options = [])
 * @method CreateCollector createCollector(array $options = [])
 * @method CreateDataStream createDataStream(array $options = [])
 * @method CreateDataTasks createDataTasks(array $options = [])
 * @method CreateILMPolicy createILMPolicy(array $options = [])
 * @method CreateIndexTemplate createIndexTemplate(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateLogstash createLogstash(array $options = [])
 * @method CreatePipelines createPipelines(array $options = [])
 * @method CreateSnapshot createSnapshot(array $options = [])
 * @method CreateVpcEndpoint createVpcEndpoint(array $options = [])
 * @method DeactivateZones deactivateZones(array $options = [])
 * @method DeleteCollector deleteCollector(array $options = [])
 * @method DeleteConnectedCluster deleteConnectedCluster(array $options = [])
 * @method DeleteDataStream deleteDataStream(array $options = [])
 * @method DeleteDataTask deleteDataTask(array $options = [])
 * @method DeleteILMPolicy deleteILMPolicy(array $options = [])
 * @method DeleteIndexTemplate deleteIndexTemplate(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteLogstash deleteLogstash(array $options = [])
 * @method DeletePipelines deletePipelines(array $options = [])
 * @method DeleteSnapshotRepo deleteSnapshotRepo(array $options = [])
 * @method DeleteVpcEndpoint deleteVpcEndpoint(array $options = [])
 * @method DescribeAckOperator describeAckOperator(array $options = [])
 * @method DescribeApm describeApm(array $options = [])
 * @method DescribeCollector describeCollector(array $options = [])
 * @method DescribeConnectableClusters describeConnectableClusters(array $options = [])
 * @method DescribeDiagnoseReport describeDiagnoseReport(array $options = [])
 * @method DescribeDiagnosisSettings describeDiagnosisSettings(array $options = [])
 * @method DescribeElasticsearchHealth describeElasticsearchHealth(array $options = [])
 * @method DescribeILMPolicy describeILMPolicy(array $options = [])
 * @method DescribeIndexTemplate describeIndexTemplate(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeKibanaSettings describeKibanaSettings(array $options = [])
 * @method DescribeLogstash describeLogstash(array $options = [])
 * @method DescribePipeline describePipeline(array $options = [])
 * @method DescribePipelineManagementConfig describePipelineManagementConfig(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeSnapshotSetting describeSnapshotSetting(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method DescribeXpackMonitorConfig describeXpackMonitorConfig(array $options = [])
 * @method DiagnoseInstance diagnoseInstance(array $options = [])
 * @method EstimatedLogstashRestartTime estimatedLogstashRestartTime(array $options = [])
 * @method EstimatedRestartTime estimatedRestartTime(array $options = [])
 * @method GetClusterDataInformation getClusterDataInformation(array $options = [])
 * @method GetElastictask getElastictask(array $options = [])
 * @method GetEmonGrafanaAlerts getEmonGrafanaAlerts(array $options = [])
 * @method GetEmonGrafanaDashboards getEmonGrafanaDashboards(array $options = [])
 * @method GetEmonMonitorData getEmonMonitorData(array $options = [])
 * @method GetOpenStoreUsage getOpenStoreUsage(array $options = [])
 * @method GetRegionConfiguration getRegionConfiguration(array $options = [])
 * @method GetSuggestShrinkableNodes getSuggestShrinkableNodes(array $options = [])
 * @method GetTransferableNodes getTransferableNodes(array $options = [])
 * @method InitializeOperationRole initializeOperationRole(array $options = [])
 * @method InstallAckOperator installAckOperator(array $options = [])
 * @method InstallKibanaSystemPlugin installKibanaSystemPlugin(array $options = [])
 * @method InstallLogstashSystemPlugin installLogstashSystemPlugin(array $options = [])
 * @method InstallSystemPlugin installSystemPlugin(array $options = [])
 * @method InstallUserPlugins installUserPlugins(array $options = [])
 * @method InterruptElasticsearchTask interruptElasticsearchTask(array $options = [])
 * @method InterruptLogstashTask interruptLogstashTask(array $options = [])
 * @method ListAckClusters listAckClusters(array $options = [])
 * @method ListAckNamespaces listAckNamespaces(array $options = [])
 * @method ListAllNode listAllNode(array $options = [])
 * @method ListAlternativeSnapshotRepos listAlternativeSnapshotRepos(array $options = [])
 * @method ListApm listApm(array $options = [])
 * @method ListAvailableEsInstanceIds listAvailableEsInstanceIds(array $options = [])
 * @method ListCollectors listCollectors(array $options = [])
 * @method ListConnectedClusters listConnectedClusters(array $options = [])
 * @method ListDataStreams listDataStreams(array $options = [])
 * @method ListDataTasks listDataTasks(array $options = [])
 * @method ListDefaultCollectorConfigurations listDefaultCollectorConfigurations(array $options = [])
 * @method ListDiagnoseIndices listDiagnoseIndices(array $options = [])
 * @method ListDiagnoseReport listDiagnoseReport(array $options = [])
 * @method ListDiagnoseReportIds listDiagnoseReportIds(array $options = [])
 * @method ListDictInformation listDictInformation(array $options = [])
 * @method ListDicts listDicts(array $options = [])
 * @method ListEcsInstances listEcsInstances(array $options = [])
 * @method ListExtendfiles listExtendfiles(array $options = [])
 * @method ListILMPolicies listILMPolicies(array $options = [])
 * @method ListIndexTemplates listIndexTemplates(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method ListInstanceIndices listInstanceIndices(array $options = [])
 * @method ListKibanaPlugins listKibanaPlugins(array $options = [])
 * @method ListLogstash listLogstash(array $options = [])
 * @method ListLogstashLog listLogstashLog(array $options = [])
 * @method ListLogstashPlugins listLogstashPlugins(array $options = [])
 * @method ListNodes listNodes(array $options = [])
 * @method ListPipeline listPipeline(array $options = [])
 * @method ListPipelineIds listPipelineIds(array $options = [])
 * @method ListPlugins listPlugins(array $options = [])
 * @method ListSearchLog listSearchLog(array $options = [])
 * @method ListShardRecoveries listShardRecoveries(array $options = [])
 * @method ListSnapshotReposByInstanceId listSnapshotReposByInstanceId(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method ListVpcEndpoints listVpcEndpoints(array $options = [])
 * @method MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method ModifyDeployMachine modifyDeployMachine(array $options = [])
 * @method ModifyElastictask modifyElastictask(array $options = [])
 * @method ModifyInstanceMaintainTime modifyInstanceMaintainTime(array $options = [])
 * @method ModifyWhiteIps modifyWhiteIps(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method OpenDiagnosis openDiagnosis(array $options = [])
 * @method OpenHttps openHttps(array $options = [])
 * @method PostEmonTryAlarmRule postEmonTryAlarmRule(array $options = [])
 * @method RecommendTemplates recommendTemplates(array $options = [])
 * @method ReinstallCollector reinstallCollector(array $options = [])
 * @method RemoveApm removeApm(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RenewLogstash renewLogstash(array $options = [])
 * @method RestartCollector restartCollector(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method RestartLogstash restartLogstash(array $options = [])
 * @method ResumeElasticsearchTask resumeElasticsearchTask(array $options = [])
 * @method ResumeLogstashTask resumeLogstashTask(array $options = [])
 * @method RolloverDataStream rolloverDataStream(array $options = [])
 * @method RunPipelines runPipelines(array $options = [])
 * @method ShrinkNode shrinkNode(array $options = [])
 * @method StartApm startApm(array $options = [])
 * @method StartCollector startCollector(array $options = [])
 * @method StopApm stopApm(array $options = [])
 * @method StopCollector stopCollector(array $options = [])
 * @method StopPipelines stopPipelines(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TransferNode transferNode(array $options = [])
 * @method TriggerNetwork triggerNetwork(array $options = [])
 * @method UninstallKibanaPlugin uninstallKibanaPlugin(array $options = [])
 * @method UninstallLogstashPlugin uninstallLogstashPlugin(array $options = [])
 * @method UninstallPlugin uninstallPlugin(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAdminPassword updateAdminPassword(array $options = [])
 * @method UpdateAdvancedSetting updateAdvancedSetting(array $options = [])
 * @method UpdateAliwsDict updateAliwsDict(array $options = [])
 * @method UpdateApm updateApm(array $options = [])
 * @method UpdateBlackIps updateBlackIps(array $options = [])
 * @method UpdateCollector updateCollector(array $options = [])
 * @method UpdateCollectorName updateCollectorName(array $options = [])
 * @method UpdateDescription updateDescription(array $options = [])
 * @method UpdateDiagnosisSettings updateDiagnosisSettings(array $options = [])
 * @method UpdateDict updateDict(array $options = [])
 * @method UpdateExtendConfig updateExtendConfig(array $options = [])
 * @method UpdateExtendfiles updateExtendfiles(array $options = [])
 * @method UpdateHotIkDicts updateHotIkDicts(array $options = [])
 * @method UpdateILMPolicy updateILMPolicy(array $options = [])
 * @method UpdateIndexTemplate updateIndexTemplate(array $options = [])
 * @method UpdateInstance updateInstance(array $options = [])
 * @method UpdateInstanceChargeType updateInstanceChargeType(array $options = [])
 * @method UpdateInstanceSettings updateInstanceSettings(array $options = [])
 * @method UpdateKibanaSettings updateKibanaSettings(array $options = [])
 * @method UpdateKibanaWhiteIps updateKibanaWhiteIps(array $options = [])
 * @method UpdateLogstash updateLogstash(array $options = [])
 * @method UpdateLogstashChargeType updateLogstashChargeType(array $options = [])
 * @method UpdateLogstashDescription updateLogstashDescription(array $options = [])
 * @method UpdateLogstashSettings updateLogstashSettings(array $options = [])
 * @method UpdatePipelineManagementConfig updatePipelineManagementConfig(array $options = [])
 * @method UpdatePipelines updatePipelines(array $options = [])
 * @method UpdatePrivateNetworkWhiteIps updatePrivateNetworkWhiteIps(array $options = [])
 * @method UpdatePublicNetwork updatePublicNetwork(array $options = [])
 * @method UpdatePublicWhiteIps updatePublicWhiteIps(array $options = [])
 * @method UpdateReadWritePolicy updateReadWritePolicy(array $options = [])
 * @method UpdateSnapshotSetting updateSnapshotSetting(array $options = [])
 * @method UpdateSynonymsDicts updateSynonymsDicts(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method UpdateWhiteIps updateWhiteIps(array $options = [])
 * @method UpdateXpackMonitorConfig updateXpackMonitorConfig(array $options = [])
 * @method UpgradeEngineVersion upgradeEngineVersion(array $options = [])
 * @method ValidateConnection validateConnection(array $options = [])
 * @method ValidateShrinkNodes validateShrinkNodes(array $options = [])
 * @method ValidateSlrPermission validateSlrPermission(array $options = [])
 * @method ValidateTransferableNodes validateTransferableNodes(array $options = [])
 */
class ElasticsearchApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'elasticsearch';

    /** @var string */
    public $version = '2017-06-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'elasticsearch';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class ActivateZones extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/recover-zones';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class AddConnectableCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/connected-clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AddSnapshotRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/snapshot-repos';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CancelDeletion extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/cancel-deletion';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CancelLogstashDeletion extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/actions/cancel-deletion';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskType()
 * @method string getClientToken()
 */
class CancelTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/cancel-task';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskType($value)
    {
        $this->data['TaskType'] = $value;
        $this->options['query']['taskType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

class CapacityPlan extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/assist/actions/capacity-plan';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getLang()
 */
class CloseDiagnosis extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/actions/close-diagnosis';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CloseHttps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/close-https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getIndex()
 * @method $this withIndex($value)
 */
class CloseManagedIndex extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/indices/[Index]/close-managed';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 */
class CreateCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CreateDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-streams';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CreateDataTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-task';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CreateILMPolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/ilm-policies';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CreateIndexTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/index-templates';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 */
class CreateInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 */
class CreateLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getTrigger()
 */
class CreatePipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrigger($value)
    {
        $this->data['Trigger'] = $value;
        $this->options['query']['trigger'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class CreateSnapshot extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/snapshots';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 * @method string getClientToken()
 */
class CreateVpcEndpoint extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/vpc-endpoints';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class DeactivateZones extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/down-zones';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class DeleteCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getConnectedInstanceId()
 */
class DeleteConnectedCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/connected-clusters';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectedInstanceId($value)
    {
        $this->data['ConnectedInstanceId'] = $value;
        $this->options['query']['connectedInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataStream()
 * @method $this withDataStream($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class DeleteDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-streams/[DataStream]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getTaskId()
 */
class DeleteDataTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-task';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['query']['taskId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeleteILMPolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/ilm-policies/[PolicyName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIndexTemplate()
 * @method $this withIndexTemplate($value)
 */
class DeleteIndexTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/index-templates/[IndexTemplate]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getDeleteType()
 */
class DeleteInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteType($value)
    {
        $this->data['DeleteType'] = $value;
        $this->options['query']['deleteType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getDeleteType()
 */
class DeleteLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteType($value)
    {
        $this->data['DeleteType'] = $value;
        $this->options['query']['deleteType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getPipelineIds()
 */
class DeletePipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineIds($value)
    {
        $this->data['PipelineIds'] = $value;
        $this->options['query']['pipelineIds'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getRepoPath()
 */
class DeleteSnapshotRepo extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/snapshot-repos';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoPath($value)
    {
        $this->data['RepoPath'] = $value;
        $this->options['query']['repoPath'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 */
class DeleteVpcEndpoint extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/vpc-endpoints/[EndpointId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeAckOperator extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/ack-clusters/[ClusterId]/operator';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 */
class DescribeApm extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/apm/[instanceId]';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getResId()
 * @method $this withResId($value)
 */
class DescribeCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAlreadySetItems()
 */
class DescribeConnectableClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/connectable-clusters';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlreadySetItems($value)
    {
        $this->data['AlreadySetItems'] = $value;
        $this->options['query']['alreadySetItems'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getLang()
 */
class DescribeDiagnoseReport extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/reports/[ReportId]';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLang()
 */
class DescribeDiagnosisSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/settings';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeElasticsearchHealth extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/elasticsearch-health';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DescribeILMPolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/ilm-policies/[PolicyName]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIndexTemplate()
 * @method $this withIndexTemplate($value)
 */
class DescribeIndexTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/index-templates/[IndexTemplate]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeKibanaSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/kibana-settings';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPipelineId()
 * @method $this withPipelineId($value)
 */
class DescribePipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines/[PipelineId]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class DescribePipelineManagementConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipeline-management-config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

class DescribeRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/regions';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeSnapshotSetting extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/snapshot-setting';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/templates';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeXpackMonitorConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/xpack-monitor-config';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getLang()
 */
class DiagnoseInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/actions/diagnose';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 */
class EstimatedLogstashRestartTime extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/estimated-time/restart-time';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForce($value)
    {
        $this->data['Force'] = $value;
        $this->options['query']['force'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 */
class EstimatedRestartTime extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/estimated-time/restart-time';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForce($value)
    {
        $this->data['Force'] = $value;
        $this->options['query']['force'] = $value;

        return $this;
    }
}

class GetClusterDataInformation extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/cluster/data-information';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetElastictask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/elastic-task';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEmonGrafanaAlerts extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/emon/projects/[ProjectId]/grafana/proxy/api/alerts';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEmonGrafanaDashboards extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/emon/projects/[ProjectId]/grafana/proxy/api/search';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetEmonMonitorData extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/emon/projects/[ProjectId]/metrics/query';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetOpenStoreUsage extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/openstore/usage';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getZoneId()
 */
class GetRegionConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/region';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['query']['zoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreStatus()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 * @method string getCount()
 */
class GetSuggestShrinkableNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/suggest-shrinkable-nodes';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreStatus($value)
    {
        $this->data['IgnoreStatus'] = $value;
        $this->options['query']['ignoreStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['query']['count'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 * @method string getCount()
 */
class GetTransferableNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/transferable-nodes';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['query']['count'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 */
class InitializeOperationRole extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/user/slr';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class InstallAckOperator extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/ack-clusters/[ClusterId]/operator';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class InstallKibanaSystemPlugin extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/kibana-plugins/system/actions/install';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class InstallLogstashSystemPlugin extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/plugins/system/actions/install';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class InstallSystemPlugin extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/plugins/system/actions/install';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class InstallUserPlugins extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/plugins/user/actions/install';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class InterruptElasticsearchTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/interrupt';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class InterruptLogstashTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/actions/interrupt';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getSize()
 * @method string getVpcId()
 * @method string getPage()
 */
class ListAckClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/ack-clusters';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['vpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getSize()
 * @method string getPage()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListAckNamespaces extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/ack-clusters/[ClusterId]/namespaces';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getExtended()
 */
class ListAllNode extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/nodes';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtended($value)
    {
        $this->data['Extended'] = $value;
        $this->options['query']['extended'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAlreadySetItems()
 */
class ListAlternativeSnapshotRepos extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/alternative-snapshot-repos';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlreadySetItems($value)
    {
        $this->data['AlreadySetItems'] = $value;
        $this->options['query']['alreadySetItems'] = $value;

        return $this;
    }
}

/**
 * @method string getOutput()
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getDescription()
 * @method string getPage()
 */
class ListApm extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/apm';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutput($value)
    {
        $this->data['Output'] = $value;
        $this->options['query']['output'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListAvailableEsInstanceIds extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/available-elasticsearch-for-centralized-management';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getName()
 * @method string getSourceType()
 * @method string getPage()
 * @method string getResId()
 */
class ListCollectors extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['query']['sourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResId($value)
    {
        $this->data['ResId'] = $value;
        $this->options['query']['resId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListConnectedClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/connected-clusters';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIsManaged()
 * @method string getName()
 */
class ListDataStreams extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-streams';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsManaged($value)
    {
        $this->data['IsManaged'] = $value;
        $this->options['query']['isManaged'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDataTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-task';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResType()
 * @method string getResVersion()
 * @method string getSourceType()
 */
class ListDefaultCollectorConfigurations extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/beats/default-configurations';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResType($value)
    {
        $this->data['ResType'] = $value;
        $this->options['query']['resType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResVersion($value)
    {
        $this->data['ResVersion'] = $value;
        $this->options['query']['resVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['query']['sourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLang()
 */
class ListDiagnoseIndices extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/indices';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPage()
 * @method string getDetail()
 * @method string getTrigger()
 * @method string getLang()
 */
class ListDiagnoseReport extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/reports';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDetail($value)
    {
        $this->data['Detail'] = $value;
        $this->options['query']['detail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrigger($value)
    {
        $this->data['Trigger'] = $value;
        $this->options['query']['trigger'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPage()
 * @method string getTrigger()
 * @method string getLang()
 */
class ListDiagnoseReportIds extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/report-ids';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrigger($value)
    {
        $this->data['Trigger'] = $value;
        $this->options['query']['trigger'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAnalyzerType()
 * @method string getBucketName()
 * @method string getKey()
 */
class ListDictInformation extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dict/_info';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAnalyzerType($value)
    {
        $this->data['AnalyzerType'] = $value;
        $this->options['query']['analyzerType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBucketName($value)
    {
        $this->data['BucketName'] = $value;
        $this->options['query']['bucketName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['query']['key'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAnalyzerType()
 * @method string getName()
 */
class ListDicts extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dicts';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAnalyzerType($value)
    {
        $this->data['AnalyzerType'] = $value;
        $this->options['query']['analyzerType'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getEcsInstanceName()
 * @method string getEcsInstanceIds()
 * @method string getSize()
 * @method string getVpcId()
 * @method string getPage()
 * @method string getTags()
 */
class ListEcsInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/ecs';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceName($value)
    {
        $this->data['EcsInstanceName'] = $value;
        $this->options['query']['ecsInstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceIds($value)
    {
        $this->data['EcsInstanceIds'] = $value;
        $this->options['query']['ecsInstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['vpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListExtendfiles extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/extendfiles';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPolicyName()
 */
class ListILMPolicies extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/ilm-policies';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyName($value)
    {
        $this->data['PolicyName'] = $value;
        $this->options['query']['policyName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIndexTemplate()
 */
class ListIndexTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/index-templates';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIndexTemplate($value)
    {
        $this->data['IndexTemplate'] = $value;
        $this->options['query']['indexTemplate'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getInstanceCategory()
 * @method string getTags()
 * @method string getResourceGroupId()
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getEsVersion()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getPage()
 * @method string getPaymentType()
 */
class ListInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceCategory($value)
    {
        $this->data['InstanceCategory'] = $value;
        $this->options['query']['instanceCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['query']['resourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEsVersion($value)
    {
        $this->data['EsVersion'] = $value;
        $this->options['query']['esVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['vpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['query']['zoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPaymentType($value)
    {
        $this->data['PaymentType'] = $value;
        $this->options['query']['paymentType'] = $value;

        return $this;
    }
}

/**
 * @method string getAll()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIsManaged()
 * @method string getSize()
 * @method string getName()
 * @method string getPage()
 * @method string getIsOpenstore()
 */
class ListInstanceIndices extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/indices';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['query']['all'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsManaged($value)
    {
        $this->data['IsManaged'] = $value;
        $this->options['query']['isManaged'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsOpenstore($value)
    {
        $this->data['IsOpenstore'] = $value;
        $this->options['query']['isOpenstore'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getPage()
 */
class ListKibanaPlugins extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/kibana-plugins';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getDescription()
 * @method string getPage()
 * @method string getOwnerId()
 * @method string getVersion()
 */
class ListLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['query']['resourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['query']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['query']['ownerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersion($value)
    {
        $this->data['Version'] = $value;
        $this->options['query']['version'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getPage()
 * @method string getType()
 */
class ListLogstashLog extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/search-log';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['query']['query'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['query']['beginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

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
        $this->options['query']['type'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getName()
 * @method string getPage()
 * @method string getSource()
 */
class ListLogstashPlugins extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/plugins';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

        return $this;
    }
}

/**
 * @method string getEcsInstanceName()
 * @method string getEcsInstanceIds()
 * @method string getSize()
 * @method string getPage()
 * @method string getResId()
 * @method $this withResId($value)
 * @method string getTags()
 */
class ListNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/nodes';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceName($value)
    {
        $this->data['EcsInstanceName'] = $value;
        $this->options['query']['ecsInstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsInstanceIds($value)
    {
        $this->data['EcsInstanceIds'] = $value;
        $this->options['query']['ecsInstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['tags'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getPage()
 * @method string getPipelineId()
 */
class ListPipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['query']['pipelineId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListPipelineIds extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/pipeline-ids';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getName()
 * @method string getPage()
 * @method string getSource()
 */
class ListPlugins extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/plugins';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['query']['source'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getBeginTime()
 * @method string getPage()
 * @method string getType()
 */
class ListSearchLog extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/search-log';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery($value)
    {
        $this->data['Query'] = $value;
        $this->options['query']['query'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginTime($value)
    {
        $this->data['BeginTime'] = $value;
        $this->options['query']['beginTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

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
        $this->options['query']['type'] = $value;

        return $this;
    }
}

/**
 * @method string getActiveOnly()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListShardRecoveries extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/cat-recovery';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActiveOnly($value)
    {
        $this->data['ActiveOnly'] = $value;
        $this->options['query']['activeOnly'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSnapshotReposByInstanceId extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/snapshot-repos';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSize()
 * @method string getNextToken()
 * @method string getPage()
 * @method string getResourceType()
 * @method string getResourceIds()
 * @method string getTags()
 */
class ListTagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tags';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['Size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['Page'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getResourceType()
 */
class ListTags extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tags/all-tags';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSize()
 * @method string getPage()
 */
class ListVpcEndpoints extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/vpc-endpoints';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSize($value)
    {
        $this->data['Size'] = $value;
        $this->options['query']['size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['query']['page'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 */
class MigrateToOtherZone extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/migrate-zones';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class ModifyDeployMachine extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/actions/modify-deploy-machines';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyElastictask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/elastic-task';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class ModifyInstanceMaintainTime extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/modify-maintaintime';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getModifyMode()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 * @method string getClientToken()
 * @method string getNetworkType()
 */
class ModifyWhiteIps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/modify-white-ips';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyMode($value)
    {
        $this->data['ModifyMode'] = $value;
        $this->options['form_params']['modifyMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['form_params']['nodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['networkType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class MoveResourceGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/resourcegroup';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getLang()
 */
class OpenDiagnosis extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/actions/open-diagnosis';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class OpenHttps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/open-https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAlarmGroupId()
 * @method $this withAlarmGroupId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class PostEmonTryAlarmRule extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/emon/projects/[ProjectId]/alarm-groups/[AlarmGroupId]/alarm-rules/_test';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsageScenario()
 */
class RecommendTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/recommended-templates';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUsageScenario($value)
    {
        $this->data['UsageScenario'] = $value;
        $this->options['query']['usageScenario'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class ReinstallCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/actions/reinstall';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class RemoveApm extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/apm/[instanceId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class RenewInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/renew';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class RenewLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/actions/renew';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class RestartCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/actions/restart';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getForce()
 */
class RestartInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/restart';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForce($value)
    {
        $this->data['Force'] = $value;
        $this->options['query']['force'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getForce()
 */
class RestartLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/actions/restart';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForce($value)
    {
        $this->data['Force'] = $value;
        $this->options['query']['force'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class ResumeElasticsearchTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/resume';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class ResumeLogstashTask extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/actions/resume';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getDataStream()
 * @method $this withDataStream($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class RolloverDataStream extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/data-streams/[DataStream]/rollover';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class RunPipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines/action/run';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreStatus()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 * @method string getClientToken()
 */
class ShrinkNode extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/shrink';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreStatus($value)
    {
        $this->data['IgnoreStatus'] = $value;
        $this->options['query']['ignoreStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class StartApm extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/apm/[instanceId]/actions/start';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class StartCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/actions/start';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class StopApm extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/apm/[instanceId]/actions/stop';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class StopCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/actions/stop';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class StopPipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines/action/stop';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

class TagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tags';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 * @method string getClientToken()
 */
class TransferNode extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/transfer';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getActionType()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 * @method string getClientToken()
 * @method string getNetworkType()
 */
class TriggerNetwork extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/network-trigger';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionType($value)
    {
        $this->data['ActionType'] = $value;
        $this->options['form_params']['actionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['form_params']['nodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['networkType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UninstallKibanaPlugin extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/kibana-plugins/actions/uninstall';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UninstallLogstashPlugin extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/plugins/actions/uninstall';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UninstallPlugin extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/plugins/actions/uninstall';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getAll()
 * @method string getTagKeys()
 * @method string getResourceType()
 * @method string getResourceIds()
 */
class UntagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/tags';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['query']['All'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeys($value)
    {
        $this->data['TagKeys'] = $value;
        $this->options['query']['TagKeys'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateAdminPassword extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/admin-pwd';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateAdvancedSetting extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/update-advanced-setting';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateAliwsDict extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/aliws-dict';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getBody()
 */
class UpdateApm extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/apm/[instanceId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateBlackIps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/black-ips';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class UpdateCollector extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getResId()
 * @method $this withResId($value)
 */
class UpdateCollectorName extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/collectors/[ResId]/actions/rename';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getBody()
 */
class UpdateDescription extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/description';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getLang()
 */
class UpdateDiagnosisSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/diagnosis/instances/[InstanceId]/settings';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['query']['lang'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateDict extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/dict';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateExtendConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/extend-configs/actions/update';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateExtendfiles extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/extendfiles';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateHotIkDicts extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/ik-hot-dict';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class UpdateILMPolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/ilm-policies/[PolicyName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getIndexTemplate()
 * @method $this withIndexTemplate($value)
 */
class UpdateIndexTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/index-templates/[IndexTemplate]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreStatus()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getOrderActionType()
 */
class UpdateInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreStatus($value)
    {
        $this->data['IgnoreStatus'] = $value;
        $this->options['query']['ignoreStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderActionType($value)
    {
        $this->data['OrderActionType'] = $value;
        $this->options['query']['orderActionType'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateInstanceChargeType extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/convert-pay-type';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateInstanceSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/instance-settings';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateKibanaSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/update-kibana-settings';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getModifyMode()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateKibanaWhiteIps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/kibana-white-ips';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyMode($value)
    {
        $this->data['ModifyMode'] = $value;
        $this->options['query']['modifyMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateLogstash extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateLogstashChargeType extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/actions/convert-pay-type';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateLogstashDescription extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/description';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateLogstashSettings extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/instance-settings';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdatePipelineManagementConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipeline-management-config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getTrigger()
 */
class UpdatePipelines extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/pipelines';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrigger($value)
    {
        $this->data['Trigger'] = $value;
        $this->options['query']['trigger'] = $value;

        return $this;
    }
}

/**
 * @method string getModifyMode()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdatePrivateNetworkWhiteIps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/private-network-white-ips';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyMode($value)
    {
        $this->data['ModifyMode'] = $value;
        $this->options['query']['modifyMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdatePublicNetwork extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/public-network';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getModifyMode()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdatePublicWhiteIps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/public-white-ips';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyMode($value)
    {
        $this->data['ModifyMode'] = $value;
        $this->options['query']['modifyMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateReadWritePolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/update-read-write-policy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateSnapshotSetting extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/snapshot-setting';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateSynonymsDicts extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/synonymsDict';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class UpdateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/templates/[TemplateName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getModifyMode()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateWhiteIps extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/white-ips';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyMode($value)
    {
        $this->data['ModifyMode'] = $value;
        $this->options['query']['modifyMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class UpdateXpackMonitorConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/xpack-monitor-config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDryRun()
 * @method string getClientToken()
 * @method string getType()
 * @method string getVersion()
 */
class UpgradeEngineVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/upgrade-version';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['query']['dryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['clientToken'] = $value;

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
        $this->options['form_params']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersion($value)
    {
        $this->data['Version'] = $value;
        $this->options['form_params']['version'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class ValidateConnection extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]/validate-connection';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getIgnoreStatus()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 */
class ValidateShrinkNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/validate-shrink-nodes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIgnoreStatus($value)
    {
        $this->data['IgnoreStatus'] = $value;
        $this->options['query']['ignoreStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getRolename()
 */
class ValidateSlrPermission extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/user/servicerolepermission';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['query']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRolename($value)
    {
        $this->data['Rolename'] = $value;
        $this->options['query']['rolename'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNodeType()
 */
class ValidateTransferableNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/validate-transfer-nodes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

        return $this;
    }
}
