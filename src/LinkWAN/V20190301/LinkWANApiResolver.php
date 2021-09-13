<?php

namespace AlibabaCloud\LinkWAN\V20190301;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptJoinPermissionAuthOrder acceptJoinPermissionAuthOrder(array $options = [])
 * @method AddNodeToGroup addNodeToGroup(array $options = [])
 * @method ApplyRoamingJoinPermission applyRoamingJoinPermission(array $options = [])
 * @method BindJoinPermissionToNodeGroup bindJoinPermissionToNodeGroup(array $options = [])
 * @method CancelJoinPermissionAuthOrder cancelJoinPermissionAuthOrder(array $options = [])
 * @method CheckCloudProductOpenStatus checkCloudProductOpenStatus(array $options = [])
 * @method CheckUserChargeStatus checkUserChargeStatus(array $options = [])
 * @method CountGateways countGateways(array $options = [])
 * @method CountGatewayTupleOrders countGatewayTupleOrders(array $options = [])
 * @method CountNodeGroups countNodeGroups(array $options = [])
 * @method CountNodesByNodeGroupId countNodesByNodeGroupId(array $options = [])
 * @method CountNodesByOwnedJoinPermissionId countNodesByOwnedJoinPermissionId(array $options = [])
 * @method CountNodeTupleOrders countNodeTupleOrders(array $options = [])
 * @method CountNotifications countNotifications(array $options = [])
 * @method CountOwnedJoinPermissions countOwnedJoinPermissions(array $options = [])
 * @method CountRentedJoinPermissions countRentedJoinPermissions(array $options = [])
 * @method CreateCustomLocalJoinPermission createCustomLocalJoinPermission(array $options = [])
 * @method CreateGateway createGateway(array $options = [])
 * @method CreateLocalJoinPermission createLocalJoinPermission(array $options = [])
 * @method CreateNodeGroup createNodeGroup(array $options = [])
 * @method DeleteGateway deleteGateway(array $options = [])
 * @method DeleteLocalJoinPermission deleteLocalJoinPermission(array $options = [])
 * @method DeleteNodeGroup deleteNodeGroup(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method GetFreqBandPlanGroup getFreqBandPlanGroup(array $options = [])
 * @method GetGateway getGateway(array $options = [])
 * @method GetGatewayPacketStat getGatewayPacketStat(array $options = [])
 * @method GetGatewayStatusStat getGatewayStatusStat(array $options = [])
 * @method GetGatewayTransferPacketsDownloadUrl getGatewayTransferPacketsDownloadUrl(array $options = [])
 * @method GetGatewayTupleOrder getGatewayTupleOrder(array $options = [])
 * @method GetGatewayTuplesDownloadUrl getGatewayTuplesDownloadUrl(array $options = [])
 * @method GetJoinPermissionAuthOrder getJoinPermissionAuthOrder(array $options = [])
 * @method GetLocalConfigSyncTask getLocalConfigSyncTask(array $options = [])
 * @method GetNode getNode(array $options = [])
 * @method GetNodeGroup getNodeGroup(array $options = [])
 * @method GetNodeGroupTransferPacketsDownloadUrl getNodeGroupTransferPacketsDownloadUrl(array $options = [])
 * @method GetNodeLocalConfig getNodeLocalConfig(array $options = [])
 * @method GetNodeTransferPacket getNodeTransferPacket(array $options = [])
 * @method GetNodeTransferPacketsDownloadUrl getNodeTransferPacketsDownloadUrl(array $options = [])
 * @method GetNodeTupleOrder getNodeTupleOrder(array $options = [])
 * @method GetNodeTuplesDownloadUrl getNodeTuplesDownloadUrl(array $options = [])
 * @method GetNotification getNotification(array $options = [])
 * @method GetOwnedJoinPermission getOwnedJoinPermission(array $options = [])
 * @method GetRentedJoinPermission getRentedJoinPermission(array $options = [])
 * @method GetUserLicense getUserLicense(array $options = [])
 * @method GetUserNetProfileDescription getUserNetProfileDescription(array $options = [])
 * @method ListActivatedFeatures listActivatedFeatures(array $options = [])
 * @method ListActiveGateways listActiveGateways(array $options = [])
 * @method ListFreqBandPlanGroups listFreqBandPlanGroups(array $options = [])
 * @method ListGatewayLocalConfigs listGatewayLocalConfigs(array $options = [])
 * @method ListGatewayOnlineRecords listGatewayOnlineRecords(array $options = [])
 * @method ListGateways listGateways(array $options = [])
 * @method ListGatewaysGisInfo listGatewaysGisInfo(array $options = [])
 * @method ListGatewaysPacketStat listGatewaysPacketStat(array $options = [])
 * @method ListGatewayTransferFlowStats listGatewayTransferFlowStats(array $options = [])
 * @method ListGatewayTransferPackets listGatewayTransferPackets(array $options = [])
 * @method ListGatewayTupleOrders listGatewayTupleOrders(array $options = [])
 * @method ListNodeGroups listNodeGroups(array $options = [])
 * @method ListNodeGroupsPacketStat listNodeGroupsPacketStat(array $options = [])
 * @method ListNodeGroupTransferFlowStats listNodeGroupTransferFlowStats(array $options = [])
 * @method ListNodeGroupTransferPackets listNodeGroupTransferPackets(array $options = [])
 * @method ListNodesByNodeGroupId listNodesByNodeGroupId(array $options = [])
 * @method ListNodesByOwnedJoinPermissionId listNodesByOwnedJoinPermissionId(array $options = [])
 * @method ListNodeTransferPacketPaths listNodeTransferPacketPaths(array $options = [])
 * @method ListNodeTransferPackets listNodeTransferPackets(array $options = [])
 * @method ListNodeTupleOrders listNodeTupleOrders(array $options = [])
 * @method ListNotifications listNotifications(array $options = [])
 * @method ListOwnedJoinPermissions listOwnedJoinPermissions(array $options = [])
 * @method ListRentedJoinPermissions listRentedJoinPermissions(array $options = [])
 * @method ListTransferPacket listTransferPacket(array $options = [])
 * @method RejectJoinPermissionAuthOrder rejectJoinPermissionAuthOrder(array $options = [])
 * @method RemoveNodeFromGroup removeNodeFromGroup(array $options = [])
 * @method ReturnJoinPermission returnJoinPermission(array $options = [])
 * @method SendUnicastCommand sendUnicastCommand(array $options = [])
 * @method SubmitGatewayLocalConfigAddingTask submitGatewayLocalConfigAddingTask(array $options = [])
 * @method SubmitGatewayLocalConfigDeletingTask submitGatewayLocalConfigDeletingTask(array $options = [])
 * @method SubmitGatewayTupleOrder submitGatewayTupleOrder(array $options = [])
 * @method SubmitJoinPermissionAuthOrder submitJoinPermissionAuthOrder(array $options = [])
 * @method SubmitKpmEncryptedNodeTupleOrder submitKpmEncryptedNodeTupleOrder(array $options = [])
 * @method SubmitNodeLocalConfigAddingTask submitNodeLocalConfigAddingTask(array $options = [])
 * @method SubmitNodeLocalConfigDeletingTask submitNodeLocalConfigDeletingTask(array $options = [])
 * @method SubmitNodeTupleOrder submitNodeTupleOrder(array $options = [])
 * @method UnbindJoinPermissionFromNodeGroup unbindJoinPermissionFromNodeGroup(array $options = [])
 * @method UpdateDataDispatchConfig updateDataDispatchConfig(array $options = [])
 * @method UpdateDataDispatchEnablingState updateDataDispatchEnablingState(array $options = [])
 * @method UpdateGateway updateGateway(array $options = [])
 * @method UpdateGatewayEnablingState updateGatewayEnablingState(array $options = [])
 * @method UpdateGatewaySshCtrl updateGatewaySshCtrl(array $options = [])
 * @method UpdateNodeEnablingState updateNodeEnablingState(array $options = [])
 * @method UpdateNodeGroup updateNodeGroup(array $options = [])
 * @method UpdateNotificationsHandleState updateNotificationsHandleState(array $options = [])
 * @method UpdateOwnedLocalJoinPermission updateOwnedLocalJoinPermission(array $options = [])
 * @method UpdateOwnedLocalJoinPermissionEnablingState updateOwnedLocalJoinPermissionEnablingState(array $options = [])
 * @method UpdateRoamingJoinPermission updateRoamingJoinPermission(array $options = [])
 * @method UpdateRoamingJoinPermissionEnablingState updateRoamingJoinPermissionEnablingState(array $options = [])
 * @method UpdateUserIsolationState updateUserIsolationState(array $options = [])
 */
class LinkWANApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'LinkWAN';

    /** @var string */
    public $version = '2019-03-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'linkwan';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class AcceptJoinPermissionAuthOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getPinCode()
 * @method $this withPinCode($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class AddNodeToGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getRxDelay()
 * @method $this withRxDelay($value)
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 * @method string getDataRate()
 * @method $this withDataRate($value)
 */
class ApplyRoamingJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BindJoinPermissionToNodeGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CancelJoinPermissionAuthOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CheckCloudProductOpenStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CheckUserChargeStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getFuzzyGwEui()
 * @method $this withFuzzyGwEui($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyCity()
 * @method $this withFuzzyCity($value)
 * @method string getOnlineState()
 * @method $this withOnlineState($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountGateways extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method array getStates()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountGatewayTupleOrders extends Rpc
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
			$this->options['query']['States.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountNodeGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountNodesByNodeGroupId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountNodesByOwnedJoinPermissionId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsKpm()
 * @method $this withIsKpm($value)
 * @method array getStates()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountNodeTupleOrders extends Rpc
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
			$this->options['query']['States.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getHandleState()
 * @method $this withHandleState($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getCategory()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class CountNotifications extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

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
			$this->options['query']['Category.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getFuzzyRenterAliyunId()
 * @method $this withFuzzyRenterAliyunId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CountOwnedJoinPermissions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getBoundNodeGroup()
 * @method $this withBoundNodeGroup($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getFuzzyOwnerAliyunId()
 * @method $this withFuzzyOwnerAliyunId($value)
 */
class CountRentedJoinPermissions extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getJoinEui()
 * @method $this withJoinEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 */
class CreateCustomLocalJoinPermission extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getLatitude()
 * @method $this withLatitude($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAddressCode()
 * @method $this withAddressCode($value)
 * @method string getGisCoordinateSystem()
 * @method $this withGisCoordinateSystem($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getLongitude()
 * @method $this withLongitude($value)
 * @method string getPinCode()
 * @method $this withPinCode($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getDistrict()
 * @method $this withDistrict($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getCommunicationMode()
 * @method $this withCommunicationMode($value)
 */
class CreateGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getRxDelay()
 * @method $this withRxDelay($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getUseDefaultJoinEui()
 * @method $this withUseDefaultJoinEui($value)
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getJoinEui()
 * @method $this withJoinEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 * @method string getDataRate()
 * @method $this withDataRate($value)
 */
class CreateLocalJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupName()
 * @method $this withNodeGroupName($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateNodeGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteLocalJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteNodeGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DescribeRegions extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetFreqBandPlanGroup extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetGateway extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class GetGatewayPacketStat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetGatewayStatusStat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class GetGatewayTransferPacketsDownloadUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetGatewayTupleOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetGatewayTuplesDownloadUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetJoinPermissionAuthOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetLocalConfigSyncTask extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNodeGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class GetNodeGroupTransferPacketsDownloadUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNodeLocalConfig extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getBase64EncodedMacPayload()
 * @method $this withBase64EncodedMacPayload($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getLogMillis()
 * @method $this withLogMillis($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNodeTransferPacket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class GetNodeTransferPacketsDownloadUrl extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNodeTupleOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNodeTuplesDownloadUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getNotificationId()
 * @method $this withNotificationId($value)
 */
class GetNotification extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetOwnedJoinPermission extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetRentedJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetUserLicense extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetUserNetProfileDescription extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvironment()
 * @method $this withEnvironment($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListActivatedFeatures extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListActiveGateways extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListFreqBandPlanGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListGatewayLocalConfigs extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOffSet()
 * @method $this withOffSet($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListGatewayOnlineRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getFuzzyGwEui()
 * @method $this withFuzzyGwEui($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFuzzyCity()
 * @method $this withFuzzyCity($value)
 * @method string getOnlineState()
 * @method $this withOnlineState($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListGateways extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListGatewaysGisInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method array getGwEuiList()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class ListGatewaysPacketStat extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $gwEuiList
     *
     * @return $this
     */
	public function withGwEuiList(array $gwEuiList)
	{
	    $this->data['GwEuiList'] = $gwEuiList;
		foreach ($gwEuiList as $i => $iValue) {
			$this->options['query']['GwEuiList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTimeIntervalUnit()
 * @method $this withTimeIntervalUnit($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class ListGatewayTransferFlowStats extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListGatewayTransferPackets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getState()
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListGatewayTupleOrders extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $state
     *
     * @return $this
     */
	public function withState(array $state)
	{
	    $this->data['State'] = $state;
		foreach ($state as $i => $iValue) {
			$this->options['query']['State.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNodeGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getNodeGroupIdList()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class ListNodeGroupsPacketStat extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $nodeGroupIdList
     *
     * @return $this
     */
	public function withNodeGroupIdList(array $nodeGroupIdList)
	{
	    $this->data['NodeGroupIdList'] = $nodeGroupIdList;
		foreach ($nodeGroupIdList as $i => $iValue) {
			$this->options['query']['NodeGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTimeIntervalUnit()
 * @method $this withTimeIntervalUnit($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class ListNodeGroupTransferFlowStats extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNodeGroupTransferPackets extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNodesByNodeGroupId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNodesByOwnedJoinPermissionId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getBase64EncodedMacPayload()
 * @method $this withBase64EncodedMacPayload($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getLogMillis()
 * @method $this withLogMillis($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListNodeTransferPacketPaths extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNodeTransferPackets extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsKpm()
 * @method $this withIsKpm($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getState()
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNodeTupleOrders extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $state
     *
     * @return $this
     */
	public function withState(array $state)
	{
	    $this->data['State'] = $state;
		foreach ($state as $i => $iValue) {
			$this->options['query']['State.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getHandleState()
 * @method $this withHandleState($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getCategory()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListNotifications extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

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
			$this->options['query']['Category.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getFuzzyRenterAliyunId()
 * @method $this withFuzzyRenterAliyunId($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListOwnedJoinPermissions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getBoundNodeGroup()
 * @method $this withBoundNodeGroup($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getFuzzyOwnerAliyunId()
 * @method $this withFuzzyOwnerAliyunId($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListRentedJoinPermissions extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 */
class ListTransferPacket extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class RejectJoinPermissionAuthOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class RemoveNodeFromGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getJoinPermissionType()
 * @method $this withJoinPermissionType($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ReturnJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getConfirmed()
 * @method $this withConfirmed($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getMaxRetries()
 * @method $this withMaxRetries($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getCleanUp()
 * @method $this withCleanUp($value)
 * @method string getFPort()
 * @method $this withFPort($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SendUnicastCommand extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getFreq()
 * @method $this withFreq($value)
 * @method string getDatr()
 * @method $this withDatr($value)
 * @method string getD2dKey()
 * @method $this withD2dKey($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getD2dAddr()
 * @method $this withD2dAddr($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SubmitGatewayLocalConfigAddingTask extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getD2dAddr()
 * @method $this withD2dAddr($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SubmitGatewayLocalConfigDeletingTask extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getTupleType()
 * @method $this withTupleType($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRequiredCount()
 * @method $this withRequiredCount($value)
 */
class SubmitGatewayTupleOrder extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getRenterAliyunId()
 * @method $this withRenterAliyunId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SubmitJoinPermissionAuthOrder extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getLoraVersion()
 * @method $this withLoraVersion($value)
 * @method string getTupleType()
 * @method $this withTupleType($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRequiredCount()
 * @method $this withRequiredCount($value)
 */
class SubmitKpmEncryptedNodeTupleOrder extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getFreq()
 * @method $this withFreq($value)
 * @method string getDatr()
 * @method $this withDatr($value)
 * @method string getD2dKey()
 * @method $this withD2dKey($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getD2dAddr()
 * @method $this withD2dAddr($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SubmitNodeLocalConfigAddingTask extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SubmitNodeLocalConfigDeletingTask extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getLoraVersion()
 * @method $this withLoraVersion($value)
 * @method string getTupleType()
 * @method $this withTupleType($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRequiredCount()
 * @method $this withRequiredCount($value)
 */
class SubmitNodeTupleOrder extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UnbindJoinPermissionFromNodeGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getUplinkTopic()
 * @method $this withUplinkTopic($value)
 * @method string getDebugSwitch()
 * @method $this withDebugSwitch($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getDataDispatchDestination()
 * @method $this withDataDispatchDestination($value)
 * @method string getUplinkRegionName()
 * @method $this withUplinkRegionName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateDataDispatchConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDataDispatchEnabled()
 * @method $this withDataDispatchEnabled($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateDataDispatchEnablingState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getLatitude()
 * @method $this withLatitude($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAddressCode()
 * @method $this withAddressCode($value)
 * @method string getGisCoordinateSystem()
 * @method $this withGisCoordinateSystem($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getLongitude()
 * @method $this withLongitude($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getDistrict()
 * @method $this withDistrict($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getCommunicationMode()
 * @method $this withCommunicationMode($value)
 */
class UpdateGateway extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateGatewayEnablingState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateGatewaySshCtrl extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getIsEnable()
 * @method $this withIsEnable($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateNodeEnablingState extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getNodeGroupName()
 * @method $this withNodeGroupName($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateNodeGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetHandleState()
 * @method $this withTargetHandleState($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getNotificationId()
 */
class UpdateNotificationsHandleState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }

    /**
     * @param array $notificationId
     *
     * @return $this
     */
	public function withNotificationId(array $notificationId)
	{
	    $this->data['NotificationId'] = $notificationId;
		foreach ($notificationId as $i => $iValue) {
			$this->options['query']['NotificationId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRxDelay()
 * @method $this withRxDelay($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getJoinEui()
 * @method $this withJoinEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 * @method string getDataRate()
 * @method $this withDataRate($value)
 */
class UpdateOwnedLocalJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateOwnedLocalJoinPermissionEnablingState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getRxDelay()
 * @method $this withRxDelay($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 * @method string getDataRate()
 * @method $this withDataRate($value)
 */
class UpdateRoamingJoinPermission extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateRoamingJoinPermissionEnablingState extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}

/**
 * @method string getIsolated()
 * @method $this withIsolated($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateUserIsolationState extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiProduct($value)
    {
        $this->data['ApiProduct'] = $value;
        $this->options['form_params']['ApiProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiRevision($value)
    {
        $this->data['ApiRevision'] = $value;
        $this->options['form_params']['ApiRevision'] = $value;

        return $this;
    }
}
