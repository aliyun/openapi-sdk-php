<?php

namespace AlibabaCloud\LinkWAN\V20181230;

use AlibabaCloud\Rpc;

class V20181230Rpc extends Rpc
{
    /** @var string */
    public $product = 'LinkWAN';

    /** @var string */
    public $version = '2018-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $serviceCode = 'linkwan';
}

/**
 * @method string getSubscribeId()
 * @method $this withSubscribeId($value)
 */
class MeteringQuerySubscribePush extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getOutletAuthInfo()
 * @method $this withOutletAuthInfo($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getOutletUrl()
 * @method $this withOutletUrl($value)
 */
class MeteringSubscribePush extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class QueryMeteringDetail extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 */
class QueryMeteringStatistics extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getSubscribeId()
 * @method $this withSubscribeId($value)
 */
class MeteringUnsubscribePush extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 */
class UpdateRoamingJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 */
class UpdateOwnedLocalJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 */
class UpdateRoamingJoinPermissionEnablingState extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 */
class UpdateOwnedLocalJoinPermissionEnablingState extends V20181230Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getBase64EncodedMacPayload()
 * @method $this withBase64EncodedMacPayload($value)
 * @method string getLogMillis()
 * @method $this withLogMillis($value)
 */
class ListNodeTransferPacketPaths extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 */
class CountNodesByNodeGroupId extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 */
class CountNodesByOwnedJoinPermissionId extends V20181230Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListNodesByNodeGroupId extends V20181230Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListNodesByOwnedJoinPermissionId extends V20181230Rpc
{
}

/**
 * @method string getMcAddress()
 * @method $this withMcAddress($value)
 * @method string getFPort()
 * @method $this withFPort($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class SendMulticastCommand extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getMaxRetries()
 * @method $this withMaxRetries($value)
 * @method string getCleanUp()
 * @method $this withCleanUp($value)
 * @method string getFPort()
 * @method $this withFPort($value)
 * @method string getComfirmed()
 * @method $this withComfirmed($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class SendUnicastCommand extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getMcAddress()
 * @method $this withMcAddress($value)
 */
class ListBoundNodesByMcAddress extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class GetNodeMulticastConfig extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getMcAddress()
 * @method $this withMcAddress($value)
 */
class GetMulticastGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getMcAddress()
 * @method $this withMcAddress($value)
 * @method array getDevEuiList()
 */
class UnbindNodesFromMulticastGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';


    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDevEuiList(array $value)
    {
        $this->data['DevEuiList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DevEuiList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getMcAddress()
 * @method $this withMcAddress($value)
 * @method array getDevEuiList()
 */
class BindNodesToMulticastGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';


    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDevEuiList(array $value)
    {
        $this->data['DevEuiList'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DevEuiList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getMcAddress()
 * @method $this withMcAddress($value)
 */
class DeleteMulticastGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 * @method string getLoraVersion()
 * @method $this withLoraVersion($value)
 * @method string getPeriodicity()
 * @method $this withPeriodicity($value)
 * @method string getDataRate()
 * @method $this withDataRate($value)
 */
class CreateMulticastGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method array getNotificationId()
 * @method string getTargetHandleState()
 * @method $this withTargetHandleState($value)
 */
class UpdateNotificationsHandleState extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';


    /**
     * @param array $value
     *
     * @return $this
     */
    public function withNotificationId(array $value)
    {
        $this->data['NotificationId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['NotificationId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getDebugConfig()
 * @method $this withDebugConfig($value)
 * @method string getJoinAcceptConfig()
 * @method $this withJoinAcceptConfig($value)
 */
class UpdateLabNodeJoinAcceptConfig extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getDebugConfig()
 * @method $this withDebugConfig($value)
 * @method string getDownlinkConfig()
 * @method $this withDownlinkConfig($value)
 */
class UpdateLabNodeDownlinkConfig extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getDebugConfigJson()
 * @method $this withDebugConfigJson($value)
 */
class UpdateLabNodeDebugConfig extends V20181230Rpc
{
}

/**
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getLoraVersion()
 * @method $this withLoraVersion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateLabNode extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 */
class UpdateLabGatewayUartCtrl extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 */
class UpdateLabGatewaySshCtrl extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getGwmpConfig()
 * @method $this withGwmpConfig($value)
 */
class UpdateLabGatewayGwmpConfig extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateLabGateway extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 */
class UpdateGatewayEnablingState extends V20181230Rpc
{
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getCommunicationMode()
 * @method $this withCommunicationMode($value)
 */
class UpdateGateway extends V20181230Rpc
{
}

class UnregisterKpmPublicKey extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class UnbindLabNodeFromLabGateway extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class TriggerLabGatewayLogReport extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class TriggerLabGatewayDeviceInfoReport extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class TriggerLabGatewayConfigReport extends V20181230Rpc
{
}

/**
 * @method string getLoraVersion()
 * @method $this withLoraVersion($value)
 * @method string getRequiredCount()
 * @method $this withRequiredCount($value)
 */
class SubmitNodeTupleOrder extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getRequiredCount()
 * @method $this withRequiredCount($value)
 */
class SubmitGatewayTupleOrder extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getDebugConfig()
 * @method $this withDebugConfig($value)
 * @method string getMacCommand()
 * @method $this withMacCommand($value)
 */
class SendMacCommandToLabNode extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getDebugConfig()
 * @method $this withDebugConfig($value)
 * @method string getBusinessCommand()
 * @method $this withBusinessCommand($value)
 */
class SendBusinessCommandToLabNode extends V20181230Rpc
{
}

/**
 * @method string getPublicKey()
 * @method $this withPublicKey($value)
 */
class RegisterKpmPublicKey extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class RebootLabGateway extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getHandleState()
 * @method $this withHandleState($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getCategory()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListNotifications extends V20181230Rpc
{
    /** @var string */
    public $method = 'GET';

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCategory(array $value)
    {
        $this->data['Category'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Category.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIsKpm()
 * @method $this withIsKpm($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getState()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListNodeTupleOrders extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';


    /**
     * @param array $value
     *
     * @return $this
     */
    public function withState(array $value)
    {
        $this->data['State'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['State.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getTimeIntervalUnit()
 * @method $this withTimeIntervalUnit($value)
 */
class ListNodeGroupTransferFlowStats extends V20181230Rpc
{
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListLabNodes extends V20181230Rpc
{
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class ListLabNodeLogs extends V20181230Rpc
{
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getFuzzyGwEui()
 * @method $this withFuzzyGwEui($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getOnlineState()
 * @method $this withOnlineState($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListLabGateways extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class ListLabGatewayLogs extends V20181230Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getState()
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListGatewayTupleOrders extends V20181230Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withState(array $value)
    {
        $this->data['State'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['State.' . ($i + 1)] = $iValue;
        }

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
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListGatewayTransferPackets extends V20181230Rpc
{
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getTimeIntervalUnit()
 * @method $this withTimeIntervalUnit($value)
 */
class ListGatewayTransferFlowStats extends V20181230Rpc
{
}

class ListGatewaysGisInfo extends V20181230Rpc
{
}

/**
 * @method string getOffSet()
 * @method $this withOffSet($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListGatewayOnlineRecords extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class ListBoundLabNodes extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class ListBoundLabGateways extends V20181230Rpc
{
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
 * @method $this withNotificationId($value)
 */
class GetNotification extends V20181230Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class GetNodeTuplesDownloadUrl extends V20181230Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class GetNodeTupleOrder extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class GetLabNodeJoinAcceptConfig extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class GetLabNodeDownlinkConfig extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class GetLabNodeDebugConfig extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class GetLabNode extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class GetLabGatewayGwmpConfig extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class GetLabGateway extends V20181230Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class GetGatewayTuplesDownloadUrl extends V20181230Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class GetGatewayTupleOrder extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class GetGatewayTransferPacketsDownloadUrl extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class GetGatewayStatusStat extends V20181230Rpc
{
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class GetGatewayPacketStat extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class GetGateway extends V20181230Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class GetFreqBandPlanGroup extends V20181230Rpc
{
}

class DescribeRegions extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class DeleteLabNode extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class DeleteLabGateway extends V20181230Rpc
{
}

/**
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class DeleteGateway extends V20181230Rpc
{
}

/**
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getLoraVersion()
 * @method $this withLoraVersion($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateLabNode extends V20181230Rpc
{
}

/**
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateLabGateway extends V20181230Rpc
{
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getCommunicationMode()
 * @method $this withCommunicationMode($value)
 */
class CreateGateway extends V20181230Rpc
{
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getHandleState()
 * @method $this withHandleState($value)
 * @method array getCategory()
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 */
class CountNotifications extends V20181230Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCategory(array $value)
    {
        $this->data['Category'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Category.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIsKpm()
 * @method $this withIsKpm($value)
 * @method array getStates()
 */
class CountNodeTupleOrders extends V20181230Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStates(array $value)
    {
        $this->data['States'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['States.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getActivationState()
 * @method $this withActivationState($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 */
class CountLabNodes extends V20181230Rpc
{
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getFuzzyGwEui()
 * @method $this withFuzzyGwEui($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getFuzzyCity()
 * @method $this withFuzzyCity($value)
 * @method string getOnlineState()
 * @method $this withOnlineState($value)
 * @method string getIsEnabled()
 * @method $this withIsEnabled($value)
 */
class CountGateways extends V20181230Rpc
{
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
 * @method $this withClassMode($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getUseDefaultJoinEui()
 * @method $this withUseDefaultJoinEui($value)
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 */
class CreateLocalJoinPermission extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getGwEui()
 * @method $this withGwEui($value)
 */
class BindLabNodeToLabGateway extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 */
class GetOwnedJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 */
class GetRentedJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getFuzzyRenterAliyunId()
 * @method $this withFuzzyRenterAliyunId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListOwnedJoinPermissions extends V20181230Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getBoundNodeGroup()
 * @method $this withBoundNodeGroup($value)
 * @method string getFuzzyOwnerAliyunId()
 * @method $this withFuzzyOwnerAliyunId($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListRentedJoinPermissions extends V20181230Rpc
{
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getFuzzyGwEui()
 * @method $this withFuzzyGwEui($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getOnlineState()
 * @method $this withOnlineState($value)
 */
class CountLabGateways extends V20181230Rpc
{
}

/**
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getFuzzyRenterAliyunId()
 * @method $this withFuzzyRenterAliyunId($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 */
class CountOwnedJoinPermissions extends V20181230Rpc
{
}

/**
 * @method array getStates()
 */
class CountGatewayTupleOrders extends V20181230Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStates(array $value)
    {
        $this->data['States'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['States.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getFuzzyJoinPermissionName()
 * @method $this withFuzzyJoinPermissionName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getBoundNodeGroup()
 * @method $this withBoundNodeGroup($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyOwnerAliyunId()
 * @method $this withFuzzyOwnerAliyunId($value)
 */
class CountRentedJoinPermissions extends V20181230Rpc
{
}

/**
 * @method string getClassMode()
 * @method $this withClassMode($value)
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getJoinPermissionName()
 * @method $this withJoinPermissionName($value)
 */
class ApplyRoamingJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getJoinPermissionType()
 * @method $this withJoinPermissionType($value)
 */
class ReturnJoinPermission extends V20181230Rpc
{
}

/**
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getRenterAliyunId()
 * @method $this withRenterAliyunId($value)
 */
class SubmitJoinPermissionAuthOrder extends V20181230Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class AcceptJoinPermissionAuthOrder extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class CancelJoinPermissionAuthOrder extends V20181230Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class RejectJoinPermissionAuthOrder extends V20181230Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 */
class GetJoinPermissionAuthOrder extends V20181230Rpc
{
}

class GetKpmPublicKey extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupName()
 * @method $this withNodeGroupName($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 */
class CreateNodeGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 */
class DeleteNodeGroup extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupName()
 * @method $this withNodeGroupName($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 */
class UpdateNodeGroup extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 */
class GetNodeGroup extends V20181230Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListNodeGroups extends V20181230Rpc
{
}

/**
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getFuzzyJoinEui()
 * @method $this withFuzzyJoinEui($value)
 * @method string getFuzzyDevEui()
 * @method $this withFuzzyDevEui($value)
 */
class CountNodeGroups extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 */
class BindJoinPermissionToNodeGroup extends V20181230Rpc
{
}

/**
 * @method string getUplinkTopic()
 * @method $this withUplinkTopic($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getUplinkRegionName()
 * @method $this withUplinkRegionName($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getDataDispatchDestination()
 * @method $this withDataDispatchDestination($value)
 */
class UpdateDataDispatchConfig extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getDataDispatchEnabled()
 * @method $this withDataDispatchEnabled($value)
 */
class UpdateDataDispatchEnablingState extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getPinCode()
 * @method $this withPinCode($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 */
class AddNodeToGroup extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 */
class RemoveNodeFromGroup extends V20181230Rpc
{
}

/**
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class GetNode extends V20181230Rpc
{
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListNodeGroupTransferPackets extends V20181230Rpc
{
}

/**
 * @method string getEndMillis()
 * @method $this withEndMillis($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getBeginMillis()
 * @method $this withBeginMillis($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class GetNodeGroupTransferPacketsDownloadUrl extends V20181230Rpc
{
}

/**
 * @method string getNodeGroupId()
 * @method $this withNodeGroupId($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 */
class UnbindJoinPermissionFromNodeGroup extends V20181230Rpc
{
}

/**
 * @method string getFuzzyGwEui()
 * @method $this withFuzzyGwEui($value)
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
 * @method string getFreqBandPlanGroupId()
 * @method $this withFreqBandPlanGroupId($value)
 * @method string getSortingField()
 * @method $this withSortingField($value)
 * @method string getAscending()
 * @method $this withAscending($value)
 */
class ListGateways extends V20181230Rpc
{
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
 * @method $this withServiceCode($value)
 */
class CheckCloudProductOpenStatus extends V20181230Rpc
{
}
