<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method QueryLoRaJoinPermissions queryLoRaJoinPermissions(array $options = [])
 * @method QueryDeviceJobDocument queryDeviceJobDocument(array $options = [])
 * @method QueryDeviceTask queryDeviceTask(array $options = [])
 * @method QueryDeviceTaskListByDevice queryDeviceTaskListByDevice(array $options = [])
 * @method QueryDeviceTaskListByJob queryDeviceTaskListByJob(array $options = [])
 * @method DeleteDeviceJob deleteDeviceJob(array $options = [])
 * @method CancelDeviceTask cancelDeviceTask(array $options = [])
 * @method DeleteDeviceTask deleteDeviceTask(array $options = [])
 * @method QueryDeviceJob queryDeviceJob(array $options = [])
 * @method QueryDeviceJobList queryDeviceJobList(array $options = [])
 * @method UpdateDeviceJob updateDeviceJob(array $options = [])
 * @method CancelDeviceJob cancelDeviceJob(array $options = [])
 * @method CreateDeviceJob createDeviceJob(array $options = [])
 * @method GetLoraNodesTask getLoraNodesTask(array $options = [])
 * @method CreateLoRaNodesTask createLoRaNodesTask(array $options = [])
 * @method QueryDeviceFile queryDeviceFile(array $options = [])
 * @method QueryDeviceFileList queryDeviceFileList(array $options = [])
 * @method DeleteDeviceFile deleteDeviceFile(array $options = [])
 * @method BatchUpdateDeviceNickname batchUpdateDeviceNickname(array $options = [])
 * @method GetNodesAddingTask getNodesAddingTask(array $options = [])
 * @method SetDeviceDesiredProperty setDeviceDesiredProperty(array $options = [])
 * @method QueryDeviceDesiredProperty queryDeviceDesiredProperty(array $options = [])
 * @method CreateProductTags createProductTags(array $options = [])
 * @method UpdateProductTags updateProductTags(array $options = [])
 * @method ListProductTags listProductTags(array $options = [])
 * @method ListProductByTags listProductByTags(array $options = [])
 * @method DeleteProductTags deleteProductTags(array $options = [])
 * @method QueryDeviceGroupByTags queryDeviceGroupByTags(array $options = [])
 * @method QueryDeviceListByDeviceGroup queryDeviceListByDeviceGroup(array $options = [])
 * @method QuerySuperDeviceGroup querySuperDeviceGroup(array $options = [])
 * @method QueryDeviceByTags queryDeviceByTags(array $options = [])
 * @method SetDeviceGroupTags setDeviceGroupTags(array $options = [])
 * @method InvokeThingsService invokeThingsService(array $options = [])
 * @method SetDevicesProperty setDevicesProperty(array $options = [])
 * @method QueryDevicePropertiesData queryDevicePropertiesData(array $options = [])
 * @method QueryAppDeviceList queryAppDeviceList(array $options = [])
 * @method UpdateDeviceGroup updateDeviceGroup(array $options = [])
 * @method QueryDeviceGroupTagList queryDeviceGroupTagList(array $options = [])
 * @method QueryDeviceGroupList queryDeviceGroupList(array $options = [])
 * @method QueryDeviceGroupInfo queryDeviceGroupInfo(array $options = [])
 * @method QueryDeviceGroupByDevice queryDeviceGroupByDevice(array $options = [])
 * @method DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method CreateDeviceGroup createDeviceGroup(array $options = [])
 * @method BatchDeleteDeviceGroupRelations batchDeleteDeviceGroupRelations(array $options = [])
 * @method BatchAddDeviceGroupRelations batchAddDeviceGroupRelations(array $options = [])
 * @method SaveDeviceProp saveDeviceProp(array $options = [])
 * @method DeleteDeviceProp deleteDeviceProp(array $options = [])
 * @method QueryPageByApplyId queryPageByApplyId(array $options = [])
 * @method QueryDevice queryDevice(array $options = [])
 * @method BatchGetDeviceState batchGetDeviceState(array $options = [])
 * @method RRpc rRpc(array $options = [])
 * @method QueryTopicReverseRouteTable queryTopicReverseRouteTable(array $options = [])
 * @method QueryTopicRouteTable queryTopicRouteTable(array $options = [])
 * @method PubBroadcast pubBroadcast(array $options = [])
 * @method DeleteTopicRouteTable deleteTopicRouteTable(array $options = [])
 * @method CreateTopicRouteTable createTopicRouteTable(array $options = [])
 * @method QueryAhDeviceList queryAhDeviceList(array $options = [])
 * @method AhQueryDeviceList ahQueryDeviceList(array $options = [])
 * @method QueryDeviceProp queryDeviceProp(array $options = [])
 * @method CreateRuleAction createRuleAction(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method ListRuleActions listRuleActions(array $options = [])
 * @method StartRule startRule(array $options = [])
 * @method QueryProductTopic queryProductTopic(array $options = [])
 * @method DeleteRuleAction deleteRuleAction(array $options = [])
 * @method StopRule stopRule(array $options = [])
 * @method Pub pub(array $options = [])
 * @method ListRule listRule(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method CreateProductTopic createProductTopic(array $options = [])
 * @method GetDeviceShadow getDeviceShadow(array $options = [])
 * @method DeleteProductTopic deleteProductTopic(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method UpdateProductTopic updateProductTopic(array $options = [])
 * @method GetRuleAction getRuleAction(array $options = [])
 * @method UpdateRuleAction updateRuleAction(array $options = [])
 * @method UpdateDeviceShadow updateDeviceShadow(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method GetGatewayBySubDevice getGatewayBySubDevice(array $options = [])
 * @method QueryBatchRegisterDeviceStatus queryBatchRegisterDeviceStatus(array $options = [])
 * @method RemoveThingTopo removeThingTopo(array $options = [])
 * @method GetThingTopo getThingTopo(array $options = [])
 * @method NotifyAddThingTopo notifyAddThingTopo(array $options = [])
 * @method QueryDevicePropertyData queryDevicePropertyData(array $options = [])
 * @method QueryDevicePropertyStatus queryDevicePropertyStatus(array $options = [])
 * @method BatchRegisterDevice batchRegisterDevice(array $options = [])
 * @method BatchRegisterDeviceWithApplyId batchRegisterDeviceWithApplyId(array $options = [])
 * @method BatchCheckDeviceNames batchCheckDeviceNames(array $options = [])
 * @method UpdateProduct updateProduct(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method SetDeviceProperty setDeviceProperty(array $options = [])
 * @method QueryProductList queryProductList(array $options = [])
 * @method QueryDeviceStatistics queryDeviceStatistics(array $options = [])
 * @method QueryProduct queryProduct(array $options = [])
 * @method QueryDeviceEventData queryDeviceEventData(array $options = [])
 * @method QueryDeviceServiceData queryDeviceServiceData(array $options = [])
 * @method QueryDeviceDetail queryDeviceDetail(array $options = [])
 * @method InvokeThingService invokeThingService(array $options = [])
 * @method GetDeviceStatus getDeviceStatus(array $options = [])
 * @method DisableThing disableThing(array $options = [])
 * @method EnableThing enableThing(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteProduct deleteProduct(array $options = [])
 * @method CreateProduct createProduct(array $options = [])
 */
class IotApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
{
    /** @var string */
    public $product = 'Iot';

    /** @var string */
    public $version = '2018-01-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryLoRaJoinPermissions extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryDeviceJobDocument extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryDeviceTask extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method array getTaskStatus()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceTaskListByDevice extends Rpc
{

    /**
     * @param array $taskStatus
     *
     * @return $this
     */
    public function withTaskStatus(array $taskStatus)
    {
        $this->data['TaskStatus'] = $taskStatus;
        foreach ($taskStatus as $i => $iValue) {
            $this->options['query']['TaskStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method array getTaskStatus()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryDeviceTaskListByJob extends Rpc
{

    /**
     * @param array $taskStatus
     *
     * @return $this
     */
    public function withTaskStatus(array $taskStatus)
    {
        $this->data['TaskStatus'] = $taskStatus;
        foreach ($taskStatus as $i => $iValue) {
            $this->options['query']['TaskStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteDeviceJob extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class CancelDeviceTask extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteDeviceTask extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryDeviceJob extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryDeviceJobList extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getJobConfig()
 * @method $this withJobConfig($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class UpdateDeviceJob extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class CancelDeviceJob extends Rpc
{
}

/**
 * @method string getJobDocument()
 * @method $this withJobDocument($value)
 * @method array getTargetGroup()
 * @method string getPresignedUrlConfig()
 * @method $this withPresignedUrlConfig($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRolloutConfig()
 * @method $this withRolloutConfig($value)
 * @method array getTargetProduct()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTargetSelection()
 * @method $this withTargetSelection($value)
 * @method string getJobDocumentSource()
 * @method $this withJobDocumentSource($value)
 * @method string getAbortConfig()
 * @method $this withAbortConfig($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getTargetDevicesSource()
 * @method $this withTargetDevicesSource($value)
 * @method string getTimeoutConfig()
 * @method $this withTimeoutConfig($value)
 * @method array getTargetDevice()
 */
class CreateDeviceJob extends Rpc
{

    /**
     * @param array $targetGroup
     *
     * @return $this
     */
    public function withTargetGroup(array $targetGroup)
    {
        $this->data['TargetGroup'] = $targetGroup;
        foreach ($targetGroup as $i => $iValue) {
            $this->options['query']['TargetGroup.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $targetProduct
     *
     * @return $this
     */
    public function withTargetProduct(array $targetProduct)
    {
        $this->data['TargetProduct'] = $targetProduct;
        foreach ($targetProduct as $i => $iValue) {
            $this->options['query']['TargetProduct.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $targetDevice
     *
     * @return $this
     */
    public function withTargetDevice(array $targetDevice)
    {
        $this->data['TargetDevice'] = $targetDevice;
        foreach ($targetDevice as $depth1 => $depth1Value) {
            $this->options['query']['TargetDevice.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
            $this->options['query']['TargetDevice.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
            $this->options['query']['TargetDevice.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetLoraNodesTask extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getDeviceInfo()
 */
class CreateLoRaNodesTask extends Rpc
{

    /**
     * @param array $deviceInfo
     *
     * @return $this
     */
    public function withDeviceInfo(array $deviceInfo)
    {
        $this->data['DeviceInfo'] = $deviceInfo;
        foreach ($deviceInfo as $depth1 => $depth1Value) {
            $this->options['query']['DeviceInfo.' . ($depth1 + 1) . '.PinCode'] = $depth1Value['PinCode'];
            $this->options['query']['DeviceInfo.' . ($depth1 + 1) . '.DevEui'] = $depth1Value['DevEui'];
        }

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class QueryDeviceFile extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceFileList extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeleteDeviceFile extends Rpc
{
}

/**
 * @method array getDeviceNicknameInfo()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchUpdateDeviceNickname extends Rpc
{

    /**
     * @param array $deviceNicknameInfo
     *
     * @return $this
     */
    public function withDeviceNicknameInfo(array $deviceNicknameInfo)
    {
        $this->data['DeviceNicknameInfo'] = $deviceNicknameInfo;
        foreach ($deviceNicknameInfo as $depth1 => $depth1Value) {
            $this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
            $this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.Nickname'] = $depth1Value['Nickname'];
            $this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
            $this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetNodesAddingTask extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getVersions()
 * @method $this withVersions($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceDesiredProperty extends Rpc
{
}

/**
 * @method array getIdentifier()
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceDesiredProperty extends Rpc
{

    /**
     * @param array $identifier
     *
     * @return $this
     */
    public function withIdentifier(array $identifier)
    {
        $this->data['Identifier'] = $identifier;
        foreach ($identifier as $i => $iValue) {
            $this->options['query']['Identifier.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class CreateProductTags extends Rpc
{

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function withProductTag(array $productTag)
    {
        $this->data['ProductTag'] = $productTag;
        foreach ($productTag as $depth1 => $depth1Value) {
            $this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
        }

        return $this;
    }
}

/**
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class UpdateProductTags extends Rpc
{

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function withProductTag(array $productTag)
    {
        $this->data['ProductTag'] = $productTag;
        foreach ($productTag as $depth1 => $depth1Value) {
            $this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class ListProductTags extends Rpc
{
}

/**
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class ListProductByTags extends Rpc
{

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function withProductTag(array $productTag)
    {
        $this->data['ProductTag'] = $productTag;
        foreach ($productTag as $depth1 => $depth1Value) {
            $this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getProductTagKey()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DeleteProductTags extends Rpc
{

    /**
     * @param array $productTagKey
     *
     * @return $this
     */
    public function withProductTagKey(array $productTagKey)
    {
        $this->data['ProductTagKey'] = $productTagKey;
        foreach ($productTagKey as $i => $iValue) {
            $this->options['query']['ProductTagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getTag()
 */
class QueryDeviceGroupByTags extends Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryDeviceListByDeviceGroup extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class QuerySuperDeviceGroup extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getTag()
 */
class QueryDeviceByTags extends Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
        }

        return $this;
    }
}

/**
 * @method string getTagString()
 * @method $this withTagString($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class SetDeviceGroupTags extends Rpc
{
}

/**
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class InvokeThingsService extends Rpc
{

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function withDeviceName(array $deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->options['query']['DeviceName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDevicesProperty extends Rpc
{

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function withDeviceName(array $deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->options['query']['DeviceName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method array getIdentifier()
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDevicePropertiesData extends Rpc
{

    /**
     * @param array $identifier
     *
     * @return $this
     */
    public function withIdentifier(array $identifier)
    {
        $this->data['Identifier'] = $identifier;
        foreach ($identifier as $i => $iValue) {
            $this->options['query']['Identifier.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getProductKeyList()
 * @method array getCategoryKeyList()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method array getTagList()
 */
class QueryAppDeviceList extends Rpc
{

    /**
     * @param array $productKeyList
     *
     * @return $this
     */
    public function withProductKeyList(array $productKeyList)
    {
        $this->data['ProductKeyList'] = $productKeyList;
        foreach ($productKeyList as $i => $iValue) {
            $this->options['query']['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $categoryKeyList
     *
     * @return $this
     */
    public function withCategoryKeyList(array $categoryKeyList)
    {
        $this->data['CategoryKeyList'] = $categoryKeyList;
        foreach ($categoryKeyList as $i => $iValue) {
            $this->options['query']['CategoryKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagList
     *
     * @return $this
     */
    public function withTagList(array $tagList)
    {
        $this->data['TagList'] = $tagList;
        foreach ($tagList as $depth1 => $depth1Value) {
            $this->options['query']['TagList.' . ($depth1 + 1) . '.TagName'] = $depth1Value['TagName'];
            $this->options['query']['TagList.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
        }

        return $this;
    }
}

/**
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class UpdateDeviceGroup extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class QueryDeviceGroupTagList extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class QueryDeviceGroupList extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class QueryDeviceGroupInfo extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceGroupByDevice extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteDeviceGroup extends Rpc
{
}

/**
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateDeviceGroup extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getDevice()
 */
class BatchDeleteDeviceGroupRelations extends Rpc
{

    /**
     * @param array $device
     *
     * @return $this
     */
    public function withDevice(array $device)
    {
        $this->data['Device'] = $device;
        foreach ($device as $depth1 => $depth1Value) {
            $this->options['query']['Device.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
            $this->options['query']['Device.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getDevice()
 */
class BatchAddDeviceGroupRelations extends Rpc
{

    /**
     * @param array $device
     *
     * @return $this
     */
    public function withDevice(array $device)
    {
        $this->data['Device'] = $device;
        foreach ($device as $depth1 => $depth1Value) {
            $this->options['query']['Device.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
            $this->options['query']['Device.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
        }

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getProps()
 * @method $this withProps($value)
 */
class SaveDeviceProp extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getPropKey()
 * @method $this withPropKey($value)
 */
class DeleteDeviceProp extends Rpc
{
}

/**
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryPageByApplyId extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDevice extends Rpc
{
}

/**
 * @method array getIotId()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class BatchGetDeviceState extends Rpc
{

    /**
     * @param array $iotId
     *
     * @return $this
     */
    public function withIotId(array $iotId)
    {
        $this->data['IotId'] = $iotId;
        foreach ($iotId as $i => $iValue) {
            $this->options['query']['IotId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function withDeviceName(array $deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->options['query']['DeviceName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRequestBase64Byte()
 * @method $this withRequestBase64Byte($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 */
class RRpc extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class QueryTopicReverseRouteTable extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class QueryTopicRouteTable extends Rpc
{
}

/**
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class PubBroadcast extends Rpc
{
}

/**
 * @method array getDstTopic()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSrcTopic()
 * @method $this withSrcTopic($value)
 */
class DeleteTopicRouteTable extends Rpc
{

    /**
     * @param array $dstTopic
     *
     * @return $this
     */
    public function withDstTopic(array $dstTopic)
    {
        $this->data['DstTopic'] = $dstTopic;
        foreach ($dstTopic as $i => $iValue) {
            $this->options['query']['DstTopic.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getDstTopic()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSrcTopic()
 * @method $this withSrcTopic($value)
 */
class CreateTopicRouteTable extends Rpc
{

    /**
     * @param array $dstTopic
     *
     * @return $this
     */
    public function withDstTopic(array $dstTopic)
    {
        $this->data['DstTopic'] = $dstTopic;
        foreach ($dstTopic as $i => $iValue) {
            $this->options['query']['DstTopic.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getProductKeyList()
 * @method array getCategoryKeyList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method array getTagList()
 */
class QueryAhDeviceList extends Rpc
{

    /**
     * @param array $productKeyList
     *
     * @return $this
     */
    public function withProductKeyList(array $productKeyList)
    {
        $this->data['ProductKeyList'] = $productKeyList;
        foreach ($productKeyList as $i => $iValue) {
            $this->options['query']['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $categoryKeyList
     *
     * @return $this
     */
    public function withCategoryKeyList(array $categoryKeyList)
    {
        $this->data['CategoryKeyList'] = $categoryKeyList;
        foreach ($categoryKeyList as $i => $iValue) {
            $this->options['query']['CategoryKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagList
     *
     * @return $this
     */
    public function withTagList(array $tagList)
    {
        $this->data['TagList'] = $tagList;
        foreach ($tagList as $depth1 => $depth1Value) {
            $this->options['query']['TagList.' . ($depth1 + 1) . '.TagName'] = $depth1Value['TagName'];
            $this->options['query']['TagList.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
        }

        return $this;
    }
}

/**
 * @method array getProductKeyList()
 * @method array getCategoryKeyList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method array getTagList()
 */
class AhQueryDeviceList extends Rpc
{

    /**
     * @param array $productKeyList
     *
     * @return $this
     */
    public function withProductKeyList(array $productKeyList)
    {
        $this->data['ProductKeyList'] = $productKeyList;
        foreach ($productKeyList as $i => $iValue) {
            $this->options['query']['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $categoryKeyList
     *
     * @return $this
     */
    public function withCategoryKeyList(array $categoryKeyList)
    {
        $this->data['CategoryKeyList'] = $categoryKeyList;
        foreach ($categoryKeyList as $i => $iValue) {
            $this->options['query']['CategoryKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagList
     *
     * @return $this
     */
    public function withTagList(array $tagList)
    {
        $this->data['TagList'] = $tagList;
        foreach ($tagList as $depth1 => $depth1Value) {
            $this->options['query']['TagList.' . ($depth1 + 1) . '.TagName'] = $depth1Value['TagName'];
            $this->options['query']['TagList.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
        }

        return $this;
    }
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceProp extends Rpc
{
}

/**
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getErrorActionFlag()
 * @method $this withErrorActionFlag($value)
 */
class CreateRuleAction extends Rpc
{
}

/**
 * @method string getSelect()
 * @method $this withSelect($value)
 * @method string getRuleDesc()
 * @method $this withRuleDesc($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWhere()
 * @method $this withWhere($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTopicType()
 * @method $this withTopicType($value)
 * @method string getShortTopic()
 * @method $this withShortTopic($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ListRuleActions extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class StartRule extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryProductTopic extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getActionId()
 * @method $this withActionId($value)
 */
class DeleteRuleAction extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class StopRule extends Rpc
{
}

/**
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class Pub extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class ListRule extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class GetRule extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTopicShortName()
 * @method $this withTopicShortName($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateProductTopic extends Rpc
{
}

/**
 * @method string getShadowMessage()
 * @method $this withShadowMessage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class GetDeviceShadow extends Rpc
{
}

/**
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class DeleteProductTopic extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteRule extends Rpc
{
}

/**
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getTopicShortName()
 * @method $this withTopicShortName($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateProductTopic extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getActionId()
 * @method $this withActionId($value)
 */
class GetRuleAction extends Rpc
{
}

/**
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getActionId()
 * @method $this withActionId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class UpdateRuleAction extends Rpc
{
}

/**
 * @method string getShadowMessage()
 * @method $this withShadowMessage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class UpdateDeviceShadow extends Rpc
{
}

/**
 * @method string getSelect()
 * @method $this withSelect($value)
 * @method string getRuleDesc()
 * @method $this withRuleDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWhere()
 * @method $this withWhere($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTopicType()
 * @method $this withTopicType($value)
 * @method string getShortTopic()
 * @method $this withShortTopic($value)
 */
class UpdateRule extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class GetGatewayBySubDevice extends Rpc
{
}

/**
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryBatchRegisterDeviceStatus extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class RemoveThingTopo extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class GetThingTopo extends Rpc
{
}

/**
 * @method string getGwProductKey()
 * @method $this withGwProductKey($value)
 * @method string getGwDeviceName()
 * @method $this withGwDeviceName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwIotId()
 * @method $this withGwIotId($value)
 * @method string getDeviceListStr()
 * @method $this withDeviceListStr($value)
 */
class NotifyAddThingTopo extends Rpc
{
}

/**
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDevicePropertyData extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDevicePropertyStatus extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class BatchRegisterDevice extends Rpc
{
}

/**
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class BatchRegisterDeviceWithApplyId extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class BatchCheckDeviceNames extends Rpc
{

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function withDeviceName(array $deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->options['query']['DeviceName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class UpdateProduct extends Rpc
{
}

/**
 * @method string getPinCode()
 * @method $this withPinCode($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getNickname()
 * @method $this withNickname($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 */
class RegisterDevice extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceProperty extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 */
class QueryProductList extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceStatistics extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryProduct extends Rpc
{
}

/**
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceEventData extends Rpc
{
}

/**
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceServiceData extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class QueryDeviceDetail extends Rpc
{
}

/**
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class InvokeThingService extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class GetDeviceStatus extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DisableThing extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class EnableThing extends Rpc
{
}

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DeleteDevice extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DeleteProduct extends Rpc
{
}

/**
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getId2()
 * @method $this withId2($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class CreateProduct extends Rpc
{
}
