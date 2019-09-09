<?php

namespace AlibabaCloud\Elasticsearch\V20170613;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method InstallUserPlugins installUserPlugins(array $options = [])
 * @method DescribeElasticsearchHealth describeElasticsearchHealth(array $options = [])
 * @method UpdateAdvancedSetting updateAdvancedSetting(array $options = [])
 * @method UpdateAliwsDict updateAliwsDict(array $options = [])
 * @method RollbackInstance rollbackInstance(array $options = [])
 * @method ListKibanaPlugins listKibanaPlugins(array $options = [])
 * @method DeactivateZones deactivateZones(array $options = [])
 * @method ActivateZones activateZones(array $options = [])
 * @method OpenHttps openHttps(array $options = [])
 * @method CloseHttps closeHttps(array $options = [])
 * @method UpdateKibanaSettings updateKibanaSettings(array $options = [])
 * @method DescribeKibanaSettings describeKibanaSettings(array $options = [])
 * @method InstallKibanaSystemPlugin installKibanaSystemPlugin(array $options = [])
 * @method UninstallKibanaPlugin uninstallKibanaPlugin(array $options = [])
 * @method TriggerNetwork triggerNetwork(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method GetSuggestShrinkableNodes getSuggestShrinkableNodes(array $options = [])
 * @method ListAllNode listAllNode(array $options = [])
 * @method ValidateShrinkNodes validateShrinkNodes(array $options = [])
 * @method ShrinkNode shrinkNode(array $options = [])
 * @method GetTransferableNodes getTransferableNodes(array $options = [])
 * @method ValidateTransferableNodes validateTransferableNodes(array $options = [])
 * @method TransferNode transferNode(array $options = [])
 * @method CancelTask cancelTask(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method UpdatePrivateNetworkWhiteIps updatePrivateNetworkWhiteIps(array $options = [])
 * @method ListPlugins listPlugins(array $options = [])
 * @method InstallSystemPlugin installSystemPlugin(array $options = [])
 * @method UninstallPlugin uninstallPlugin(array $options = [])
 * @method UpdateHotIkDicts updateHotIkDicts(array $options = [])
 * @method UpdateSynonymsDicts updateSynonymsDicts(array $options = [])
 * @method UpdateSnapshotSetting updateSnapshotSetting(array $options = [])
 * @method UpdateWhiteIps updateWhiteIps(array $options = [])
 * @method UpdateDescription updateDescription(array $options = [])
 * @method UpdateBlackIps updateBlackIps(array $options = [])
 * @method UpdateKibanaWhiteIps updateKibanaWhiteIps(array $options = [])
 * @method UpdatePublicNetwork updatePublicNetwork(array $options = [])
 * @method UpdatePublicWhiteIps updatePublicWhiteIps(array $options = [])
 * @method ListSearchLog listSearchLog(array $options = [])
 * @method UpdateInstanceSettings updateInstanceSettings(array $options = [])
 * @method UpdateAdminPassword updateAdminPassword(array $options = [])
 * @method GetRegionConfiguration getRegionConfiguration(array $options = [])
 * @method UpdateDict updateDict(array $options = [])
 * @method UpdateInstance updateInstance(array $options = [])
 * @method RestartInstance restartInstance(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
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
 */
class InstallUserPlugins extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/plugins/user/actions/install';
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
 * @method string getClientToken()
 */
class UpdateAdvancedSetting extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/update-advanced-setting';

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

class GetRegionConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/openapi/region';

    /** @var string */
    public $method = 'GET';
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
 * @method string getResourceGroupId()
 * @method string getInstanceId()
 * @method string getSize()
 * @method string getEsVersion()
 * @method string getDescription()
 * @method string getPage()
 * @method string getOwnerId()
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
