<?php

namespace AlibabaCloud\LinkWAN\V20181230;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method SubmitExternalNodesAddingTask submitExternalNodesAddingTask(array $options = [])
 * @method SubmitExternalNodeTuplesImportingTask submitExternalNodeTuplesImportingTask(array $options = [])
 * @method DeleteExternalNodeTuples deleteExternalNodeTuples(array $options = [])
 * @method UpdateEmbeddedNsAutoSyncEnablingState updateEmbeddedNsAutoSyncEnablingState(array $options = [])
 * @method CreateCustomLocalJoinPermission createCustomLocalJoinPermission(array $options = [])
 * @method UpdateRoamingJoinPermission updateRoamingJoinPermission(array $options = [])
 * @method UpdateOwnedLocalJoinPermission updateOwnedLocalJoinPermission(array $options = [])
 * @method UpdateRoamingJoinPermissionEnablingState updateRoamingJoinPermissionEnablingState(array $options = [])
 * @method UpdateOwnedLocalJoinPermissionEnablingState updateOwnedLocalJoinPermissionEnablingState(array $options = [])
 * @method ListNodeTransferPacketPaths listNodeTransferPacketPaths(array $options = [])
 * @method CountNodesByNodeGroupId countNodesByNodeGroupId(array $options = [])
 * @method CountNodesByOwnedJoinPermissionId countNodesByOwnedJoinPermissionId(array $options = [])
 * @method ListNodesByNodeGroupId listNodesByNodeGroupId(array $options = [])
 * @method ListNodesByOwnedJoinPermissionId listNodesByOwnedJoinPermissionId(array $options = [])
 * @method SendMulticastCommand sendMulticastCommand(array $options = [])
 * @method SendUnicastCommand sendUnicastCommand(array $options = [])
 * @method ListBoundNodesByMcAddress listBoundNodesByMcAddress(array $options = [])
 * @method GetNodeMulticastConfig getNodeMulticastConfig(array $options = [])
 * @method GetMulticastGroup getMulticastGroup(array $options = [])
 * @method UnbindNodesFromMulticastGroup unbindNodesFromMulticastGroup(array $options = [])
 * @method BindNodesToMulticastGroup bindNodesToMulticastGroup(array $options = [])
 * @method DeleteMulticastGroup deleteMulticastGroup(array $options = [])
 * @method CreateMulticastGroup createMulticastGroup(array $options = [])
 * @method UpdateNotificationsHandleState updateNotificationsHandleState(array $options = [])
 * @method UpdateLabNodeJoinAcceptConfig updateLabNodeJoinAcceptConfig(array $options = [])
 * @method UpdateLabNodeDownlinkConfig updateLabNodeDownlinkConfig(array $options = [])
 * @method UpdateLabNodeDebugConfig updateLabNodeDebugConfig(array $options = [])
 * @method UpdateLabNode updateLabNode(array $options = [])
 * @method UpdateLabGatewayUartCtrl updateLabGatewayUartCtrl(array $options = [])
 * @method UpdateLabGatewaySshCtrl updateLabGatewaySshCtrl(array $options = [])
 * @method UpdateLabGatewayGwmpConfig updateLabGatewayGwmpConfig(array $options = [])
 * @method UpdateLabGateway updateLabGateway(array $options = [])
 * @method UpdateGatewayEnablingState updateGatewayEnablingState(array $options = [])
 * @method UpdateGateway updateGateway(array $options = [])
 * @method UnregisterKpmPublicKey unregisterKpmPublicKey(array $options = [])
 * @method UnbindLabNodeFromLabGateway unbindLabNodeFromLabGateway(array $options = [])
 * @method TriggerLabGatewayLogReport triggerLabGatewayLogReport(array $options = [])
 * @method TriggerLabGatewayDeviceInfoReport triggerLabGatewayDeviceInfoReport(array $options = [])
 * @method TriggerLabGatewayConfigReport triggerLabGatewayConfigReport(array $options = [])
 * @method SubmitNodeTupleOrder submitNodeTupleOrder(array $options = [])
 * @method SubmitGatewayTupleOrder submitGatewayTupleOrder(array $options = [])
 * @method SendMacCommandToLabNode sendMacCommandToLabNode(array $options = [])
 * @method SendBusinessCommandToLabNode sendBusinessCommandToLabNode(array $options = [])
 * @method RegisterKpmPublicKey registerKpmPublicKey(array $options = [])
 * @method RebootLabGateway rebootLabGateway(array $options = [])
 * @method ListNotifications listNotifications(array $options = [])
 * @method ListNodeTupleOrders listNodeTupleOrders(array $options = [])
 * @method ListNodeGroupTransferFlowStats listNodeGroupTransferFlowStats(array $options = [])
 * @method ListLabNodes listLabNodes(array $options = [])
 * @method ListLabNodeLogs listLabNodeLogs(array $options = [])
 * @method ListLabGateways listLabGateways(array $options = [])
 * @method ListLabGatewayLogs listLabGatewayLogs(array $options = [])
 * @method ListGatewayTupleOrders listGatewayTupleOrders(array $options = [])
 * @method ListGatewayTransferPackets listGatewayTransferPackets(array $options = [])
 * @method ListGatewayTransferFlowStats listGatewayTransferFlowStats(array $options = [])
 * @method ListGatewaysGisInfo listGatewaysGisInfo(array $options = [])
 * @method ListGatewayOnlineRecords listGatewayOnlineRecords(array $options = [])
 * @method ListBoundLabNodes listBoundLabNodes(array $options = [])
 * @method ListBoundLabGateways listBoundLabGateways(array $options = [])
 * @method ListActiveGateways listActiveGateways(array $options = [])
 * @method GetUserLicense getUserLicense(array $options = [])
 * @method GetNotification getNotification(array $options = [])
 * @method GetNodeTuplesDownloadUrl getNodeTuplesDownloadUrl(array $options = [])
 * @method GetNodeTupleOrder getNodeTupleOrder(array $options = [])
 * @method GetLabNodeJoinAcceptConfig getLabNodeJoinAcceptConfig(array $options = [])
 * @method GetLabNodeDownlinkConfig getLabNodeDownlinkConfig(array $options = [])
 * @method GetLabNodeDebugConfig getLabNodeDebugConfig(array $options = [])
 * @method GetLabNode getLabNode(array $options = [])
 * @method GetLabGatewayGwmpConfig getLabGatewayGwmpConfig(array $options = [])
 * @method GetLabGateway getLabGateway(array $options = [])
 * @method GetGatewayTuplesDownloadUrl getGatewayTuplesDownloadUrl(array $options = [])
 * @method GetGatewayTupleOrder getGatewayTupleOrder(array $options = [])
 * @method GetGatewayTransferPacketsDownloadUrl getGatewayTransferPacketsDownloadUrl(array $options = [])
 * @method GetGatewayStatusStat getGatewayStatusStat(array $options = [])
 * @method GetGatewayPacketStat getGatewayPacketStat(array $options = [])
 * @method GetGateway getGateway(array $options = [])
 * @method GetFreqBandPlanGroup getFreqBandPlanGroup(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DeleteLabNode deleteLabNode(array $options = [])
 * @method DeleteLabGateway deleteLabGateway(array $options = [])
 * @method DeleteGateway deleteGateway(array $options = [])
 * @method CreateLabNode createLabNode(array $options = [])
 * @method CreateLabGateway createLabGateway(array $options = [])
 * @method CreateGateway createGateway(array $options = [])
 * @method CountNotifications countNotifications(array $options = [])
 * @method CountNodeTupleOrders countNodeTupleOrders(array $options = [])
 * @method CountLabNodes countLabNodes(array $options = [])
 * @method CountGateways countGateways(array $options = [])
 * @method DeleteLocalJoinPermission deleteLocalJoinPermission(array $options = [])
 * @method CreateLocalJoinPermission createLocalJoinPermission(array $options = [])
 * @method BindLabNodeToLabGateway bindLabNodeToLabGateway(array $options = [])
 * @method GetOwnedJoinPermission getOwnedJoinPermission(array $options = [])
 * @method GetRentedJoinPermission getRentedJoinPermission(array $options = [])
 * @method ListOwnedJoinPermissions listOwnedJoinPermissions(array $options = [])
 * @method ListRentedJoinPermissions listRentedJoinPermissions(array $options = [])
 * @method CountLabGateways countLabGateways(array $options = [])
 * @method CountOwnedJoinPermissions countOwnedJoinPermissions(array $options = [])
 * @method CountGatewayTupleOrders countGatewayTupleOrders(array $options = [])
 * @method CountRentedJoinPermissions countRentedJoinPermissions(array $options = [])
 * @method ApplyRoamingJoinPermission applyRoamingJoinPermission(array $options = [])
 * @method ReturnJoinPermission returnJoinPermission(array $options = [])
 * @method SubmitJoinPermissionAuthOrder submitJoinPermissionAuthOrder(array $options = [])
 * @method AcceptJoinPermissionAuthOrder acceptJoinPermissionAuthOrder(array $options = [])
 * @method CancelJoinPermissionAuthOrder cancelJoinPermissionAuthOrder(array $options = [])
 * @method RejectJoinPermissionAuthOrder rejectJoinPermissionAuthOrder(array $options = [])
 * @method GetJoinPermissionAuthOrder getJoinPermissionAuthOrder(array $options = [])
 * @method GetKpmPublicKey getKpmPublicKey(array $options = [])
 * @method CreateNodeGroup createNodeGroup(array $options = [])
 * @method DeleteNodeGroup deleteNodeGroup(array $options = [])
 * @method UpdateNodeGroup updateNodeGroup(array $options = [])
 * @method GetNodeGroup getNodeGroup(array $options = [])
 * @method ListNodeGroups listNodeGroups(array $options = [])
 * @method CountNodeGroups countNodeGroups(array $options = [])
 * @method BindJoinPermissionToNodeGroup bindJoinPermissionToNodeGroup(array $options = [])
 * @method UpdateDataDispatchConfig updateDataDispatchConfig(array $options = [])
 * @method UpdateDataDispatchEnablingState updateDataDispatchEnablingState(array $options = [])
 * @method AddNodeToGroup addNodeToGroup(array $options = [])
 * @method RemoveNodeFromGroup removeNodeFromGroup(array $options = [])
 * @method GetNode getNode(array $options = [])
 * @method ListNodeGroupTransferPackets listNodeGroupTransferPackets(array $options = [])
 * @method GetNodeGroupTransferPacketsDownloadUrl getNodeGroupTransferPacketsDownloadUrl(array $options = [])
 * @method UnbindJoinPermissionFromNodeGroup unbindJoinPermissionFromNodeGroup(array $options = [])
 * @method ListGateways listGateways(array $options = [])
 * @method ListFreqBandPlanGroups listFreqBandPlanGroups(array $options = [])
 * @method ListActivatedFeatures listActivatedFeatures(array $options = [])
 * @method CheckCloudProductOpenStatus checkCloudProductOpenStatus(array $options = [])
 */
class LinkWANApiResolver
{
    use ApiResolverTrait;
}

class V20181230Rpc extends Rpc
{
    /** @var string */
    public $product = 'LinkWAN';

    /** @var string */
    public $version = '2018-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'linkwan';
}

/**
 * @method string getNodeGroupId()
 * @method array getNodes()
 */
class SubmitExternalNodesAddingTask extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param array $nodes
     *
     * @return $this
     */
    public function withNodes(array $nodes)
    {
        $this->data['Nodes'] = $nodes;
        foreach ($nodes as $depth1 => $depth1Value) {
            $this->options['form_params']['Nodes.' . ($depth1 + 1) . '.DevEui'] = $depth1Value['DevEui'];
        }

        return $this;
    }
}

/**
 * @method array getNodeTuples()
 */
class SubmitExternalNodeTuplesImportingTask extends V20181230Rpc
{

    /**
     * @param array $nodeTuples
     *
     * @return $this
     */
    public function withNodeTuples(array $nodeTuples)
    {
        $this->data['NodeTuples'] = $nodeTuples;
        foreach ($nodeTuples as $depth1 => $depth1Value) {
            $this->options['form_params']['NodeTuples.' . ($depth1 + 1) . '.AppSKey'] = $depth1Value['AppSKey'];
            $this->options['form_params']['NodeTuples.' . ($depth1 + 1) . '.NwkSKey'] = $depth1Value['NwkSKey'];
            $this->options['form_params']['NodeTuples.' . ($depth1 + 1) . '.LoraVer'] = $depth1Value['LoraVer'];
            $this->options['form_params']['NodeTuples.' . ($depth1 + 1) . '.DevEui'] = $depth1Value['DevEui'];
        }

        return $this;
    }
}

/**
 * @method array getDevEuiList()
 */
class DeleteExternalNodeTuples extends V20181230Rpc
{

    /**
     * @param array $devEuiList
     *
     * @return $this
     */
    public function withDevEuiList(array $devEuiList)
    {
        $this->data['DevEuiList'] = $devEuiList;
        foreach ($devEuiList as $i => $iValue) {
            $this->options['form_params']['DevEuiList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getEnabled()
 */
class UpdateEmbeddedNsAutoSyncEnablingState extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method string getFreqBandPlanGroupId()
 * @method string getJoinEui()
 * @method string getJoinPermissionName()
 */
class CreateCustomLocalJoinPermission extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinEui($value)
    {
        $this->data['JoinEui'] = $value;
        $this->options['form_params']['JoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionName($value)
    {
        $this->data['JoinPermissionName'] = $value;
        $this->options['form_params']['JoinPermissionName'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method string getJoinPermissionName()
 */
class UpdateRoamingJoinPermission extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionName($value)
    {
        $this->data['JoinPermissionName'] = $value;
        $this->options['form_params']['JoinPermissionName'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method string getJoinPermissionId()
 * @method string getFreqBandPlanGroupId()
 * @method string getJoinPermissionName()
 */
class UpdateOwnedLocalJoinPermission extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionName($value)
    {
        $this->data['JoinPermissionName'] = $value;
        $this->options['form_params']['JoinPermissionName'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method string getEnabled()
 */
class UpdateRoamingJoinPermissionEnablingState extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method string getEnabled()
 */
class UpdateOwnedLocalJoinPermissionEnablingState extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getDevEui()
 * @method string getBase64EncodedMacPayload()
 * @method string getLogMillis()
 */
class ListNodeTransferPacketPaths extends V20181230Rpc
{

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBase64EncodedMacPayload($value)
    {
        $this->data['Base64EncodedMacPayload'] = $value;
        $this->options['form_params']['Base64EncodedMacPayload'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogMillis($value)
    {
        $this->data['LogMillis'] = $value;
        $this->options['form_params']['LogMillis'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 * @method string getFuzzyDevEui()
 */
class CountNodesByNodeGroupId extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method string getFuzzyDevEui()
 */
class CountNodesByOwnedJoinPermissionId extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getOffset()
 * @method string getNodeGroupId()
 * @method string getFuzzyDevEui()
 * @method string getLimit()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListNodesByNodeGroupId extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getOffset()
 * @method string getJoinPermissionId()
 * @method string getFuzzyDevEui()
 * @method string getLimit()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListNodesByOwnedJoinPermissionId extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getMcAddress()
 * @method string getFPort()
 * @method string getContent()
 */
class SendMulticastCommand extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcAddress($value)
    {
        $this->data['McAddress'] = $value;
        $this->options['form_params']['McAddress'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFPort($value)
    {
        $this->data['FPort'] = $value;
        $this->options['form_params']['FPort'] = $value;

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
}

/**
 * @method string getDevEui()
 * @method string getMaxRetries()
 * @method string getCleanUp()
 * @method string getFPort()
 * @method string getComfirmed()
 * @method string getContent()
 */
class SendUnicastCommand extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxRetries($value)
    {
        $this->data['MaxRetries'] = $value;
        $this->options['form_params']['MaxRetries'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCleanUp($value)
    {
        $this->data['CleanUp'] = $value;
        $this->options['form_params']['CleanUp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFPort($value)
    {
        $this->data['FPort'] = $value;
        $this->options['form_params']['FPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComfirmed($value)
    {
        $this->data['Comfirmed'] = $value;
        $this->options['form_params']['Comfirmed'] = $value;

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
}

/**
 * @method string getOffset()
 * @method string getLimit()
 * @method string getMcAddress()
 */
class ListBoundNodesByMcAddress extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcAddress($value)
    {
        $this->data['McAddress'] = $value;
        $this->options['form_params']['McAddress'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 */
class GetNodeMulticastConfig extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getMcAddress()
 */
class GetMulticastGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcAddress($value)
    {
        $this->data['McAddress'] = $value;
        $this->options['form_params']['McAddress'] = $value;

        return $this;
    }
}

/**
 * @method string getMcAddress()
 * @method array getDevEuiList()
 */
class UnbindNodesFromMulticastGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcAddress($value)
    {
        $this->data['McAddress'] = $value;
        $this->options['form_params']['McAddress'] = $value;

        return $this;
    }

    /**
     * @param array $devEuiList
     *
     * @return $this
     */
    public function withDevEuiList(array $devEuiList)
    {
        $this->data['DevEuiList'] = $devEuiList;
        foreach ($devEuiList as $i => $iValue) {
            $this->options['form_params']['DevEuiList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getMcAddress()
 * @method array getDevEuiList()
 */
class BindNodesToMulticastGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcAddress($value)
    {
        $this->data['McAddress'] = $value;
        $this->options['form_params']['McAddress'] = $value;

        return $this;
    }

    /**
     * @param array $devEuiList
     *
     * @return $this
     */
    public function withDevEuiList(array $devEuiList)
    {
        $this->data['DevEuiList'] = $devEuiList;
        foreach ($devEuiList as $i => $iValue) {
            $this->options['form_params']['DevEuiList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getMcAddress()
 */
class DeleteMulticastGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMcAddress($value)
    {
        $this->data['McAddress'] = $value;
        $this->options['form_params']['McAddress'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method string getFrequency()
 * @method string getLoraVersion()
 * @method string getPeriodicity()
 * @method string getDataRate()
 */
class CreateMulticastGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrequency($value)
    {
        $this->data['Frequency'] = $value;
        $this->options['form_params']['Frequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoraVersion($value)
    {
        $this->data['LoraVersion'] = $value;
        $this->options['form_params']['LoraVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriodicity($value)
    {
        $this->data['Periodicity'] = $value;
        $this->options['form_params']['Periodicity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataRate($value)
    {
        $this->data['DataRate'] = $value;
        $this->options['form_params']['DataRate'] = $value;

        return $this;
    }
}

/**
 * @method array getNotificationId()
 * @method string getTargetHandleState()
 */
class UpdateNotificationsHandleState extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $notificationId
     *
     * @return $this
     */
    public function withNotificationId(array $notificationId)
    {
        $this->data['NotificationId'] = $notificationId;
        foreach ($notificationId as $i => $iValue) {
            $this->options['form_params']['NotificationId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetHandleState($value)
    {
        $this->data['TargetHandleState'] = $value;
        $this->options['form_params']['TargetHandleState'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getDebugConfig()
 * @method string getJoinAcceptConfig()
 */
class UpdateLabNodeJoinAcceptConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugConfig($value)
    {
        $this->data['DebugConfig'] = $value;
        $this->options['form_params']['DebugConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinAcceptConfig($value)
    {
        $this->data['JoinAcceptConfig'] = $value;
        $this->options['form_params']['JoinAcceptConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getDebugConfig()
 * @method string getDownlinkConfig()
 */
class UpdateLabNodeDownlinkConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugConfig($value)
    {
        $this->data['DebugConfig'] = $value;
        $this->options['form_params']['DebugConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDownlinkConfig($value)
    {
        $this->data['DownlinkConfig'] = $value;
        $this->options['form_params']['DownlinkConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getDebugConfigJson()
 */
class UpdateLabNodeDebugConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugConfigJson($value)
    {
        $this->data['DebugConfigJson'] = $value;
        $this->options['form_params']['DebugConfigJson'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method string getDevEui()
 * @method string getLoraVersion()
 * @method string getName()
 */
class UpdateLabNode extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoraVersion($value)
    {
        $this->data['LoraVersion'] = $value;
        $this->options['form_params']['LoraVersion'] = $value;

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
 * @method string getGwEui()
 * @method string getEnabled()
 */
class UpdateLabGatewayUartCtrl extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 * @method string getEnabled()
 */
class UpdateLabGatewaySshCtrl extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 * @method string getGwmpConfig()
 */
class UpdateLabGatewayGwmpConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwmpConfig($value)
    {
        $this->data['GwmpConfig'] = $value;
        $this->options['form_params']['GwmpConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 * @method string getName()
 */
class UpdateLabGateway extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

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
 * @method string getGwEui()
 * @method string getEnabled()
 */
class UpdateGatewayEnablingState extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }
}

/**
 * @method string getCity()
 * @method string getLatitude()
 * @method string getDescription()
 * @method string getAddressCode()
 * @method string getGisCoordinateSystem()
 * @method string getLongitude()
 * @method string getAddress()
 * @method string getGwEui()
 * @method string getFreqBandPlanGroupId()
 * @method string getDistrict()
 * @method string getName()
 * @method string getCommunicationMode()
 */
class UpdateGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCity($value)
    {
        $this->data['City'] = $value;
        $this->options['form_params']['City'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLatitude($value)
    {
        $this->data['Latitude'] = $value;
        $this->options['form_params']['Latitude'] = $value;

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
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressCode($value)
    {
        $this->data['AddressCode'] = $value;
        $this->options['form_params']['AddressCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGisCoordinateSystem($value)
    {
        $this->data['GisCoordinateSystem'] = $value;
        $this->options['form_params']['GisCoordinateSystem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLongitude($value)
    {
        $this->data['Longitude'] = $value;
        $this->options['form_params']['Longitude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDistrict($value)
    {
        $this->data['District'] = $value;
        $this->options['form_params']['District'] = $value;

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
    public function withCommunicationMode($value)
    {
        $this->data['CommunicationMode'] = $value;
        $this->options['form_params']['CommunicationMode'] = $value;

        return $this;
    }
}

class UnregisterKpmPublicKey extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method string getGwEui()
 */
class UnbindLabNodeFromLabGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class TriggerLabGatewayLogReport extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class TriggerLabGatewayDeviceInfoReport extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class TriggerLabGatewayConfigReport extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getLoraVersion()
 * @method string getRequiredCount()
 */
class SubmitNodeTupleOrder extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoraVersion($value)
    {
        $this->data['LoraVersion'] = $value;
        $this->options['form_params']['LoraVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequiredCount($value)
    {
        $this->data['RequiredCount'] = $value;
        $this->options['form_params']['RequiredCount'] = $value;

        return $this;
    }
}

/**
 * @method string getRequiredCount()
 */
class SubmitGatewayTupleOrder extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequiredCount($value)
    {
        $this->data['RequiredCount'] = $value;
        $this->options['form_params']['RequiredCount'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getDebugConfig()
 * @method string getMacCommand()
 */
class SendMacCommandToLabNode extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugConfig($value)
    {
        $this->data['DebugConfig'] = $value;
        $this->options['form_params']['DebugConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMacCommand($value)
    {
        $this->data['MacCommand'] = $value;
        $this->options['form_params']['MacCommand'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getDebugConfig()
 * @method string getBusinessCommand()
 */
class SendBusinessCommandToLabNode extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugConfig($value)
    {
        $this->data['DebugConfig'] = $value;
        $this->options['form_params']['DebugConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessCommand($value)
    {
        $this->data['BusinessCommand'] = $value;
        $this->options['form_params']['BusinessCommand'] = $value;

        return $this;
    }
}

/**
 * @method string getPublicKey()
 */
class RegisterKpmPublicKey extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicKey($value)
    {
        $this->data['PublicKey'] = $value;
        $this->options['form_params']['PublicKey'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class RebootLabGateway extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getOffset()
 * @method string getEndMillis()
 * @method string getHandleState()
 * @method string getLimit()
 * @method array getCategory()
 * @method string getBeginMillis()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListNotifications extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHandleState($value)
    {
        $this->data['HandleState'] = $value;
        $this->options['form_params']['HandleState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param array $category
     *
     * @return $this
     */
    public function withCategory(array $category)
    {
        $this->data['Category'] = $category;
        foreach ($category as $i => $iValue) {
            $this->options['form_params']['Category.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getIsKpm()
 * @method string getOffset()
 * @method string getLimit()
 * @method array getState()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListNodeTupleOrders extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsKpm($value)
    {
        $this->data['IsKpm'] = $value;
        $this->options['form_params']['IsKpm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param array $state
     *
     * @return $this
     */
    public function withState(array $state)
    {
        $this->data['State'] = $state;
        foreach ($state as $i => $iValue) {
            $this->options['form_params']['State.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getBeginMillis()
 * @method string getNodeGroupId()
 * @method string getTimeIntervalUnit()
 */
class ListNodeGroupTransferFlowStats extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeIntervalUnit($value)
    {
        $this->data['TimeIntervalUnit'] = $value;
        $this->options['form_params']['TimeIntervalUnit'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getOffset()
 * @method string getFreqBandPlanGroupId()
 * @method string getFuzzyDevEui()
 * @method string getLimit()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListLabNodes extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getPageNumber()
 * @method string getDevEui()
 * @method string getPageSize()
 * @method string getBeginMillis()
 */
class ListLabNodeLogs extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

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
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getOffset()
 * @method string getFuzzyGwEui()
 * @method string getFreqBandPlanGroupId()
 * @method string getLimit()
 * @method string getOnlineState()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListLabGateways extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyGwEui($value)
    {
        $this->data['FuzzyGwEui'] = $value;
        $this->options['form_params']['FuzzyGwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnlineState($value)
    {
        $this->data['OnlineState'] = $value;
        $this->options['form_params']['OnlineState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 * @method string getEndMillis()
 * @method string getPageNumber()
 * @method string getDevEui()
 * @method string getPageSize()
 * @method string getBeginMillis()
 */
class ListLabGatewayLogs extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

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
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }
}

/**
 * @method string getOffset()
 * @method string getLimit()
 * @method array getState()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListGatewayTupleOrders extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param array $state
     *
     * @return $this
     */
    public function withState(array $state)
    {
        $this->data['State'] = $state;
        foreach ($state as $i => $iValue) {
            $this->options['form_params']['State.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getGwEui()
 * @method string getDevEui()
 * @method string getCategory()
 * @method string getBeginMillis()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListGatewayTransferPackets extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getBeginMillis()
 * @method string getGwEui()
 * @method string getTimeIntervalUnit()
 */
class ListGatewayTransferFlowStats extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeIntervalUnit($value)
    {
        $this->data['TimeIntervalUnit'] = $value;
        $this->options['form_params']['TimeIntervalUnit'] = $value;

        return $this;
    }
}

class ListGatewaysGisInfo extends V20181230Rpc
{
}

/**
 * @method string getOffSet()
 * @method string getLimit()
 * @method string getGwEui()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListGatewayOnlineRecords extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffSet($value)
    {
        $this->data['OffSet'] = $value;
        $this->options['form_params']['OffSet'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class ListBoundLabNodes extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 */
class ListBoundLabGateways extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

class ListActiveGateways extends V20181230Rpc
{
}

class GetUserLicense extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getNotificationId()
 */
class GetNotification extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotificationId($value)
    {
        $this->data['NotificationId'] = $value;
        $this->options['form_params']['NotificationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 */
class GetNodeTuplesDownloadUrl extends V20181230Rpc
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
 * @method string getOrderId()
 */
class GetNodeTupleOrder extends V20181230Rpc
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
 * @method string getDevEui()
 */
class GetLabNodeJoinAcceptConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 */
class GetLabNodeDownlinkConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 */
class GetLabNodeDebugConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 */
class GetLabNode extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class GetLabGatewayGwmpConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class GetLabGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 */
class GetGatewayTuplesDownloadUrl extends V20181230Rpc
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
 * @method string getOrderId()
 */
class GetGatewayTupleOrder extends V20181230Rpc
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
 * @method string getGwEui()
 * @method string getEndMillis()
 * @method string getDevEui()
 * @method string getCategory()
 * @method string getBeginMillis()
 * @method string getSortingField()
 * @method string getAscending()
 */
class GetGatewayTransferPacketsDownloadUrl extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class GetGatewayStatusStat extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getBeginMillis()
 * @method string getGwEui()
 */
class GetGatewayPacketStat extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class GetGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class GetFreqBandPlanGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

class DescribeRegions extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 */
class DeleteLabNode extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class DeleteLabGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 */
class DeleteGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method string getLoraVersion()
 * @method string getFreqBandPlanGroupId()
 * @method string getName()
 */
class CreateLabNode extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoraVersion($value)
    {
        $this->data['LoraVersion'] = $value;
        $this->options['form_params']['LoraVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

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
 * @method string getFreqBandPlanGroupId()
 * @method string getName()
 */
class CreateLabGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

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
 * @method string getCity()
 * @method string getLatitude()
 * @method string getDescription()
 * @method string getAddressCode()
 * @method string getGisCoordinateSystem()
 * @method string getLongitude()
 * @method string getPinCode()
 * @method string getAddress()
 * @method string getGwEui()
 * @method string getFreqBandPlanGroupId()
 * @method string getDistrict()
 * @method string getName()
 * @method string getCommunicationMode()
 */
class CreateGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCity($value)
    {
        $this->data['City'] = $value;
        $this->options['form_params']['City'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLatitude($value)
    {
        $this->data['Latitude'] = $value;
        $this->options['form_params']['Latitude'] = $value;

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
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressCode($value)
    {
        $this->data['AddressCode'] = $value;
        $this->options['form_params']['AddressCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGisCoordinateSystem($value)
    {
        $this->data['GisCoordinateSystem'] = $value;
        $this->options['form_params']['GisCoordinateSystem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLongitude($value)
    {
        $this->data['Longitude'] = $value;
        $this->options['form_params']['Longitude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPinCode($value)
    {
        $this->data['PinCode'] = $value;
        $this->options['form_params']['PinCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddress($value)
    {
        $this->data['Address'] = $value;
        $this->options['form_params']['Address'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDistrict($value)
    {
        $this->data['District'] = $value;
        $this->options['form_params']['District'] = $value;

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
    public function withCommunicationMode($value)
    {
        $this->data['CommunicationMode'] = $value;
        $this->options['form_params']['CommunicationMode'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getHandleState()
 * @method array getCategory()
 * @method string getBeginMillis()
 */
class CountNotifications extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHandleState($value)
    {
        $this->data['HandleState'] = $value;
        $this->options['form_params']['HandleState'] = $value;

        return $this;
    }

    /**
     * @param array $category
     *
     * @return $this
     */
    public function withCategory(array $category)
    {
        $this->data['Category'] = $category;
        foreach ($category as $i => $iValue) {
            $this->options['form_params']['Category.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }
}

/**
 * @method string getIsKpm()
 * @method array getStates()
 */
class CountNodeTupleOrders extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsKpm($value)
    {
        $this->data['IsKpm'] = $value;
        $this->options['form_params']['IsKpm'] = $value;

        return $this;
    }

    /**
     * @param array $states
     *
     * @return $this
     */
    public function withStates(array $states)
    {
        $this->data['States'] = $states;
        foreach ($states as $i => $iValue) {
            $this->options['form_params']['States.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getActivationState()
 * @method string getFreqBandPlanGroupId()
 * @method string getFuzzyDevEui()
 */
class CountLabNodes extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActivationState($value)
    {
        $this->data['ActivationState'] = $value;
        $this->options['form_params']['ActivationState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getFuzzyGwEui()
 * @method string getFreqBandPlanGroupId()
 * @method string getFuzzyCity()
 * @method string getOnlineState()
 * @method string getIsEnabled()
 */
class CountGateways extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyGwEui($value)
    {
        $this->data['FuzzyGwEui'] = $value;
        $this->options['form_params']['FuzzyGwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyCity($value)
    {
        $this->data['FuzzyCity'] = $value;
        $this->options['form_params']['FuzzyCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnlineState($value)
    {
        $this->data['OnlineState'] = $value;
        $this->options['form_params']['OnlineState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsEnabled($value)
    {
        $this->data['IsEnabled'] = $value;
        $this->options['form_params']['IsEnabled'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 */
class DeleteLocalJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getClassMode()
 * @method string getFreqBandPlanGroupId()
 * @method string getUseDefaultJoinEui()
 * @method string getJoinPermissionName()
 */
class CreateLocalJoinPermission extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseDefaultJoinEui($value)
    {
        $this->data['UseDefaultJoinEui'] = $value;
        $this->options['form_params']['UseDefaultJoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionName($value)
    {
        $this->data['JoinPermissionName'] = $value;
        $this->options['form_params']['JoinPermissionName'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getGwEui()
 */
class BindLabNodeToLabGateway extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGwEui($value)
    {
        $this->data['GwEui'] = $value;
        $this->options['form_params']['GwEui'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 */
class GetOwnedJoinPermission extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 */
class GetRentedJoinPermission extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyJoinPermissionName()
 * @method string getOffset()
 * @method string getFuzzyRenterAliyunId()
 * @method string getEnabled()
 * @method string getFuzzyJoinEui()
 * @method string getLimit()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListOwnedJoinPermissions extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinPermissionName($value)
    {
        $this->data['FuzzyJoinPermissionName'] = $value;
        $this->options['form_params']['FuzzyJoinPermissionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyRenterAliyunId($value)
    {
        $this->data['FuzzyRenterAliyunId'] = $value;
        $this->options['form_params']['FuzzyRenterAliyunId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinEui($value)
    {
        $this->data['FuzzyJoinEui'] = $value;
        $this->options['form_params']['FuzzyJoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getEnabled()
 * @method string getFuzzyJoinEui()
 * @method string getLimit()
 * @method string getFuzzyJoinPermissionName()
 * @method string getOffset()
 * @method string getBoundNodeGroup()
 * @method string getFuzzyOwnerAliyunId()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListRentedJoinPermissions extends V20181230Rpc
{

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
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinEui($value)
    {
        $this->data['FuzzyJoinEui'] = $value;
        $this->options['form_params']['FuzzyJoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinPermissionName($value)
    {
        $this->data['FuzzyJoinPermissionName'] = $value;
        $this->options['form_params']['FuzzyJoinPermissionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBoundNodeGroup($value)
    {
        $this->data['BoundNodeGroup'] = $value;
        $this->options['form_params']['BoundNodeGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyOwnerAliyunId($value)
    {
        $this->data['FuzzyOwnerAliyunId'] = $value;
        $this->options['form_params']['FuzzyOwnerAliyunId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getFuzzyGwEui()
 * @method string getFreqBandPlanGroupId()
 * @method string getOnlineState()
 */
class CountLabGateways extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyGwEui($value)
    {
        $this->data['FuzzyGwEui'] = $value;
        $this->options['form_params']['FuzzyGwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnlineState($value)
    {
        $this->data['OnlineState'] = $value;
        $this->options['form_params']['OnlineState'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyJoinPermissionName()
 * @method string getFuzzyRenterAliyunId()
 * @method string getEnabled()
 * @method string getFuzzyJoinEui()
 */
class CountOwnedJoinPermissions extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinPermissionName($value)
    {
        $this->data['FuzzyJoinPermissionName'] = $value;
        $this->options['form_params']['FuzzyJoinPermissionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyRenterAliyunId($value)
    {
        $this->data['FuzzyRenterAliyunId'] = $value;
        $this->options['form_params']['FuzzyRenterAliyunId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinEui($value)
    {
        $this->data['FuzzyJoinEui'] = $value;
        $this->options['form_params']['FuzzyJoinEui'] = $value;

        return $this;
    }
}

/**
 * @method array getStates()
 */
class CountGatewayTupleOrders extends V20181230Rpc
{

    /**
     * @param array $states
     *
     * @return $this
     */
    public function withStates(array $states)
    {
        $this->data['States'] = $states;
        foreach ($states as $i => $iValue) {
            $this->options['form_params']['States.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getFuzzyJoinPermissionName()
 * @method string getType()
 * @method string getEnabled()
 * @method string getBoundNodeGroup()
 * @method string getFuzzyJoinEui()
 * @method string getFuzzyOwnerAliyunId()
 */
class CountRentedJoinPermissions extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinPermissionName($value)
    {
        $this->data['FuzzyJoinPermissionName'] = $value;
        $this->options['form_params']['FuzzyJoinPermissionName'] = $value;

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
    public function withEnabled($value)
    {
        $this->data['Enabled'] = $value;
        $this->options['form_params']['Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBoundNodeGroup($value)
    {
        $this->data['BoundNodeGroup'] = $value;
        $this->options['form_params']['BoundNodeGroup'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinEui($value)
    {
        $this->data['FuzzyJoinEui'] = $value;
        $this->options['form_params']['FuzzyJoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyOwnerAliyunId($value)
    {
        $this->data['FuzzyOwnerAliyunId'] = $value;
        $this->options['form_params']['FuzzyOwnerAliyunId'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method string getFreqBandPlanGroupId()
 * @method string getJoinPermissionName()
 */
class ApplyRoamingJoinPermission extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassMode($value)
    {
        $this->data['ClassMode'] = $value;
        $this->options['form_params']['ClassMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionName($value)
    {
        $this->data['JoinPermissionName'] = $value;
        $this->options['form_params']['JoinPermissionName'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method string getJoinPermissionType()
 */
class ReturnJoinPermission extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionType($value)
    {
        $this->data['JoinPermissionType'] = $value;
        $this->options['form_params']['JoinPermissionType'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method string getRenterAliyunId()
 */
class SubmitJoinPermissionAuthOrder extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRenterAliyunId($value)
    {
        $this->data['RenterAliyunId'] = $value;
        $this->options['form_params']['RenterAliyunId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 */
class AcceptJoinPermissionAuthOrder extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

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
 * @method string getOrderId()
 */
class CancelJoinPermissionAuthOrder extends V20181230Rpc
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
 * @method string getOrderId()
 */
class RejectJoinPermissionAuthOrder extends V20181230Rpc
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
 * @method string getOrderId()
 */
class GetJoinPermissionAuthOrder extends V20181230Rpc
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

class GetKpmPublicKey extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupName()
 * @method string getJoinPermissionId()
 */
class CreateNodeGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupName($value)
    {
        $this->data['NodeGroupName'] = $value;
        $this->options['form_params']['NodeGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 */
class DeleteNodeGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupName()
 * @method string getNodeGroupId()
 */
class UpdateNodeGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupName($value)
    {
        $this->data['NodeGroupName'] = $value;
        $this->options['form_params']['NodeGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 */
class GetNodeGroup extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getOffset()
 * @method string getFuzzyJoinEui()
 * @method string getFuzzyDevEui()
 * @method string getLimit()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListNodeGroups extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinEui($value)
    {
        $this->data['FuzzyJoinEui'] = $value;
        $this->options['form_params']['FuzzyJoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method string getFuzzyJoinEui()
 * @method string getFuzzyDevEui()
 */
class CountNodeGroups extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyJoinEui($value)
    {
        $this->data['FuzzyJoinEui'] = $value;
        $this->options['form_params']['FuzzyJoinEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyDevEui($value)
    {
        $this->data['FuzzyDevEui'] = $value;
        $this->options['form_params']['FuzzyDevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 * @method string getJoinPermissionId()
 */
class BindJoinPermissionToNodeGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }
}

/**
 * @method string getUplinkTopic()
 * @method string getProductKey()
 * @method string getProductType()
 * @method string getProductName()
 * @method string getUplinkRegionName()
 * @method string getNodeGroupId()
 * @method string getDataDispatchDestination()
 */
class UpdateDataDispatchConfig extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUplinkTopic($value)
    {
        $this->data['UplinkTopic'] = $value;
        $this->options['form_params']['UplinkTopic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductKey($value)
    {
        $this->data['ProductKey'] = $value;
        $this->options['form_params']['ProductKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductName($value)
    {
        $this->data['ProductName'] = $value;
        $this->options['form_params']['ProductName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUplinkRegionName($value)
    {
        $this->data['UplinkRegionName'] = $value;
        $this->options['form_params']['UplinkRegionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDispatchDestination($value)
    {
        $this->data['DataDispatchDestination'] = $value;
        $this->options['form_params']['DataDispatchDestination'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 * @method string getDataDispatchEnabled()
 */
class UpdateDataDispatchEnablingState extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataDispatchEnabled($value)
    {
        $this->data['DataDispatchEnabled'] = $value;
        $this->options['form_params']['DataDispatchEnabled'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getPinCode()
 * @method string getNodeGroupId()
 */
class AddNodeToGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPinCode($value)
    {
        $this->data['PinCode'] = $value;
        $this->options['form_params']['PinCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method string getNodeGroupId()
 */
class RemoveNodeFromGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 */
class GetNode extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getDevEui()
 * @method string getNodeGroupId()
 * @method string getCategory()
 * @method string getBeginMillis()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListNodeGroupTransferPackets extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method string getDevEui()
 * @method string getNodeGroupId()
 * @method string getCategory()
 * @method string getBeginMillis()
 * @method string getSortingField()
 * @method string getAscending()
 */
class GetNodeGroupTransferPacketsDownloadUrl extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMillis($value)
    {
        $this->data['EndMillis'] = $value;
        $this->options['form_params']['EndMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDevEui($value)
    {
        $this->data['DevEui'] = $value;
        $this->options['form_params']['DevEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategory($value)
    {
        $this->data['Category'] = $value;
        $this->options['form_params']['Category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBeginMillis($value)
    {
        $this->data['BeginMillis'] = $value;
        $this->options['form_params']['BeginMillis'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 * @method string getJoinPermissionId()
 */
class UnbindJoinPermissionFromNodeGroup extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeGroupId($value)
    {
        $this->data['NodeGroupId'] = $value;
        $this->options['form_params']['NodeGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJoinPermissionId($value)
    {
        $this->data['JoinPermissionId'] = $value;
        $this->options['form_params']['JoinPermissionId'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyGwEui()
 * @method string getLimit()
 * @method string getFuzzyCity()
 * @method string getOnlineState()
 * @method string getIsEnabled()
 * @method string getFuzzyName()
 * @method string getOffset()
 * @method string getFreqBandPlanGroupId()
 * @method string getSortingField()
 * @method string getAscending()
 */
class ListGateways extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyGwEui($value)
    {
        $this->data['FuzzyGwEui'] = $value;
        $this->options['form_params']['FuzzyGwEui'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyCity($value)
    {
        $this->data['FuzzyCity'] = $value;
        $this->options['form_params']['FuzzyCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOnlineState($value)
    {
        $this->data['OnlineState'] = $value;
        $this->options['form_params']['OnlineState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsEnabled($value)
    {
        $this->data['IsEnabled'] = $value;
        $this->options['form_params']['IsEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFuzzyName($value)
    {
        $this->data['FuzzyName'] = $value;
        $this->options['form_params']['FuzzyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOffset($value)
    {
        $this->data['Offset'] = $value;
        $this->options['form_params']['Offset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFreqBandPlanGroupId($value)
    {
        $this->data['FreqBandPlanGroupId'] = $value;
        $this->options['form_params']['FreqBandPlanGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortingField($value)
    {
        $this->data['SortingField'] = $value;
        $this->options['form_params']['SortingField'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAscending($value)
    {
        $this->data['Ascending'] = $value;
        $this->options['form_params']['Ascending'] = $value;

        return $this;
    }
}

class ListFreqBandPlanGroups extends V20181230Rpc
{

    /** @var string */
    public $scheme = 'http';
}

class ListActivatedFeatures extends V20181230Rpc
{
}

/**
 * @method string getServiceCode()
 */
class CheckCloudProductOpenStatus extends V20181230Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}
