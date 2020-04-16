<?php

namespace AlibabaCloud\Elasticsearch\V20170613;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActivateZones activateZones(array $options = [])
 * @method AddConnectableCluster addConnectableCluster(array $options = [])
 * @method AddSnapshotRepo addSnapshotRepo(array $options = [])
 * @method CancelTask cancelTask(array $options = [])
 * @method CloseHttps closeHttps(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateLogstash createLogstash(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method DeactivateZones deactivateZones(array $options = [])
 * @method DeleteConnectedCluster deleteConnectedCluster(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteLogstash deleteLogstash(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteSnapshotRepo deleteSnapshotRepo(array $options = [])
 * @method DescribeConnectableClusters describeConnectableClusters(array $options = [])
 * @method DescribeElasticsearchHealth describeElasticsearchHealth(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeKibanaSettings describeKibanaSettings(array $options = [])
 * @method DescribeLogstash describeLogstash(array $options = [])
 * @method DescribePipelineManagementConfig describePipelineManagementConfig(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method GetRegionConfiguration getRegionConfiguration(array $options = [])
 * @method GetSuggestShrinkableNodes getSuggestShrinkableNodes(array $options = [])
 * @method GetTransferableNodes getTransferableNodes(array $options = [])
 * @method InstallKibanaSystemPlugin installKibanaSystemPlugin(array $options = [])
 * @method InstallLogstashSystemPlugin installLogstashSystemPlugin(array $options = [])
 * @method InstallSystemPlugin installSystemPlugin(array $options = [])
 * @method InstallUserPlugins installUserPlugins(array $options = [])
 * @method InterruptElasticsearchTask interruptElasticsearchTask(array $options = [])
 * @method InterruptLogstashTask interruptLogstashTask(array $options = [])
 * @method ListAllNode listAllNode(array $options = [])
 * @method ListAlternativeSnapshotRepos listAlternativeSnapshotRepos(array $options = [])
 * @method ListConnectedClusters listConnectedClusters(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method ListKibanaPlugins listKibanaPlugins(array $options = [])
 * @method ListLogstash listLogstash(array $options = [])
 * @method ListLogstashLog listLogstashLog(array $options = [])
 * @method ListLogstashPlugins listLogstashPlugins(array $options = [])
 * @method ListPlugins listPlugins(array $options = [])
 * @method ListSearchLog listSearchLog(array $options = [])
 * @method ListSnapshotReposByInstanceId listSnapshotReposByInstanceId(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyWhiteIps modifyWhiteIps(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method OpenHttps openHttps(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method RenewLogstash renewLogstash(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method RestartLogstash restartLogstash(array $options = [])
 * @method ResumeElasticsearchTask resumeElasticsearchTask(array $options = [])
 * @method ResumeLogstashTask resumeLogstashTask(array $options = [])
 * @method RollbackInstance rollbackInstance(array $options = [])
 * @method ShrinkNode shrinkNode(array $options = [])
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
 * @method UpdateBlackIps updateBlackIps(array $options = [])
 * @method UpdateDescription updateDescription(array $options = [])
 * @method UpdateDict updateDict(array $options = [])
 * @method UpdateHotIkDicts updateHotIkDicts(array $options = [])
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
 * @method UpdateSnapshotSetting updateSnapshotSetting(array $options = [])
 * @method UpdateSynonymsDicts updateSynonymsDicts(array $options = [])
 * @method UpdateWhiteIps updateWhiteIps(array $options = [])
 * @method UpgradeEngineVersion upgradeEngineVersion(array $options = [])
 * @method ValidateShrinkNodes validateShrinkNodes(array $options = [])
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
 * @method string getClientToken()
 */
class CreateProject extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/projects';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
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
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
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
}

/**
 * @method string getClientToken()
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteProject extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/projects/[Id]';

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
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getClientToken()
 */
class DescribePipelineManagementConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/logstashes/[InstanceId]//pipeline-management-config';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListAllNode extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/nodes';

    /** @var string */
    public $method = 'GET';
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
 * @method string getDescription()
 * @method string getInstanceCategory()
 * @method string getOwnerId()
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 */
class RollbackInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/rollback';

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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
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
 * @method string getDryRun()
 * @method string getClientToken()
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
}

/**
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
    public function withNodeType($value)
    {
        $this->data['NodeType'] = $value;
        $this->options['query']['nodeType'] = $value;

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
