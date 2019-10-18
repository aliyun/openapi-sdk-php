<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchAddDeviceGroupRelations batchAddDeviceGroupRelations(array $options = [])
 * @method BatchBindDeviceToEdgeInstanceWithDriver batchBindDeviceToEdgeInstanceWithDriver(array $options = [])
 * @method BatchCheckDeviceNames batchCheckDeviceNames(array $options = [])
 * @method BatchClearEdgeInstanceDeviceConfig batchClearEdgeInstanceDeviceConfig(array $options = [])
 * @method BatchDeleteDeviceGroupRelations batchDeleteDeviceGroupRelations(array $options = [])
 * @method BatchGetDeviceDriver batchGetDeviceDriver(array $options = [])
 * @method BatchGetDeviceState batchGetDeviceState(array $options = [])
 * @method BatchGetEdgeInstanceDeviceConfig batchGetEdgeInstanceDeviceConfig(array $options = [])
 * @method BatchGetEdgeInstanceDriverConfigs batchGetEdgeInstanceDriverConfigs(array $options = [])
 * @method BatchQueryDeviceDetail batchQueryDeviceDetail(array $options = [])
 * @method BatchRegisterDevice batchRegisterDevice(array $options = [])
 * @method BatchRegisterDeviceWithApplyId batchRegisterDeviceWithApplyId(array $options = [])
 * @method BatchSetEdgeInstanceDeviceConfig batchSetEdgeInstanceDeviceConfig(array $options = [])
 * @method BatchUnbindDeviceFromEdgeInstance batchUnbindDeviceFromEdgeInstance(array $options = [])
 * @method BatchUpdateDeviceNickname batchUpdateDeviceNickname(array $options = [])
 * @method BindDriverToEdgeInstance bindDriverToEdgeInstance(array $options = [])
 * @method BindGatewayToEdgeInstance bindGatewayToEdgeInstance(array $options = [])
 * @method ClearEdgeInstanceDriverConfigs clearEdgeInstanceDriverConfigs(array $options = [])
 * @method CloseEdgeInstanceDeployment closeEdgeInstanceDeployment(array $options = [])
 * @method CreateDataAPIService createDataAPIService(array $options = [])
 * @method CreateDeviceGroup createDeviceGroup(array $options = [])
 * @method CreateEdgeInstance createEdgeInstance(array $options = [])
 * @method CreateEdgeInstanceDeployment createEdgeInstanceDeployment(array $options = [])
 * @method CreateLoRaNodesTask createLoRaNodesTask(array $options = [])
 * @method CreateProduct createProduct(array $options = [])
 * @method CreateProductTags createProductTags(array $options = [])
 * @method CreateProductTopic createProductTopic(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateRuleAction createRuleAction(array $options = [])
 * @method CreateTopicRouteTable createTopicRouteTable(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteDeviceFile deleteDeviceFile(array $options = [])
 * @method DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method DeleteDeviceProp deleteDeviceProp(array $options = [])
 * @method DeleteEdgeInstance deleteEdgeInstance(array $options = [])
 * @method DeleteProduct deleteProduct(array $options = [])
 * @method DeleteProductTags deleteProductTags(array $options = [])
 * @method DeleteProductTopic deleteProductTopic(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteRuleAction deleteRuleAction(array $options = [])
 * @method DeleteTopicRouteTable deleteTopicRouteTable(array $options = [])
 * @method DisableThing disableThing(array $options = [])
 * @method EnableThing enableThing(array $options = [])
 * @method GetDataAPIServiceDetail getDataAPIServiceDetail(array $options = [])
 * @method GetDeviceShadow getDeviceShadow(array $options = [])
 * @method GetDeviceStatus getDeviceStatus(array $options = [])
 * @method GetEdgeInstance getEdgeInstance(array $options = [])
 * @method GetEdgeInstanceDeployment getEdgeInstanceDeployment(array $options = [])
 * @method GetGatewayBySubDevice getGatewayBySubDevice(array $options = [])
 * @method GetLoraNodesTask getLoraNodesTask(array $options = [])
 * @method GetNodesAddingTask getNodesAddingTask(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method GetRuleAction getRuleAction(array $options = [])
 * @method GetThingTopo getThingTopo(array $options = [])
 * @method InvokeDataAPIService invokeDataAPIService(array $options = [])
 * @method InvokeThingService invokeThingService(array $options = [])
 * @method InvokeThingsService invokeThingsService(array $options = [])
 * @method ListProductByTags listProductByTags(array $options = [])
 * @method ListProductTags listProductTags(array $options = [])
 * @method ListRule listRule(array $options = [])
 * @method ListRuleActions listRuleActions(array $options = [])
 * @method NotifyAddThingTopo notifyAddThingTopo(array $options = [])
 * @method Pub pub(array $options = [])
 * @method PubBroadcast pubBroadcast(array $options = [])
 * @method QueryAppDeviceList queryAppDeviceList(array $options = [])
 * @method QueryBatchRegisterDeviceStatus queryBatchRegisterDeviceStatus(array $options = [])
 * @method QueryCertUrlByApplyId queryCertUrlByApplyId(array $options = [])
 * @method QueryDevice queryDevice(array $options = [])
 * @method QueryDeviceByDriver queryDeviceByDriver(array $options = [])
 * @method QueryDeviceByTags queryDeviceByTags(array $options = [])
 * @method QueryDeviceCert queryDeviceCert(array $options = [])
 * @method QueryDeviceDesiredProperty queryDeviceDesiredProperty(array $options = [])
 * @method QueryDeviceDetail queryDeviceDetail(array $options = [])
 * @method QueryDeviceEventData queryDeviceEventData(array $options = [])
 * @method QueryDeviceFile queryDeviceFile(array $options = [])
 * @method QueryDeviceFileList queryDeviceFileList(array $options = [])
 * @method QueryDeviceGroupByDevice queryDeviceGroupByDevice(array $options = [])
 * @method QueryDeviceGroupByTags queryDeviceGroupByTags(array $options = [])
 * @method QueryDeviceGroupInfo queryDeviceGroupInfo(array $options = [])
 * @method QueryDeviceGroupList queryDeviceGroupList(array $options = [])
 * @method QueryDeviceGroupTagList queryDeviceGroupTagList(array $options = [])
 * @method QueryDeviceListByDeviceGroup queryDeviceListByDeviceGroup(array $options = [])
 * @method QueryDeviceProp queryDeviceProp(array $options = [])
 * @method QueryDevicePropertiesData queryDevicePropertiesData(array $options = [])
 * @method QueryDevicePropertyData queryDevicePropertyData(array $options = [])
 * @method QueryDevicePropertyStatus queryDevicePropertyStatus(array $options = [])
 * @method QueryDeviceServiceData queryDeviceServiceData(array $options = [])
 * @method QueryDeviceStatistics queryDeviceStatistics(array $options = [])
 * @method QueryEdgeInstance queryEdgeInstance(array $options = [])
 * @method QueryEdgeInstanceDevice queryEdgeInstanceDevice(array $options = [])
 * @method QueryEdgeInstanceDriver queryEdgeInstanceDriver(array $options = [])
 * @method QueryEdgeInstanceGateway queryEdgeInstanceGateway(array $options = [])
 * @method QueryEdgeInstanceHistoricDeployment queryEdgeInstanceHistoricDeployment(array $options = [])
 * @method QueryLoRaJoinPermissions queryLoRaJoinPermissions(array $options = [])
 * @method QueryPageByApplyId queryPageByApplyId(array $options = [])
 * @method QueryProduct queryProduct(array $options = [])
 * @method QueryProductList queryProductList(array $options = [])
 * @method QueryProductTopic queryProductTopic(array $options = [])
 * @method QuerySuperDeviceGroup querySuperDeviceGroup(array $options = [])
 * @method QueryTopicReverseRouteTable queryTopicReverseRouteTable(array $options = [])
 * @method QueryTopicRouteTable queryTopicRouteTable(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method RemoveThingTopo removeThingTopo(array $options = [])
 * @method RRpc rRpc(array $options = [])
 * @method SaveDeviceProp saveDeviceProp(array $options = [])
 * @method SetDeviceDesiredProperty setDeviceDesiredProperty(array $options = [])
 * @method SetDeviceGroupTags setDeviceGroupTags(array $options = [])
 * @method SetDeviceProperty setDeviceProperty(array $options = [])
 * @method SetDevicesProperty setDevicesProperty(array $options = [])
 * @method SetEdgeInstanceDriverConfigs setEdgeInstanceDriverConfigs(array $options = [])
 * @method StartRule startRule(array $options = [])
 * @method StopRule stopRule(array $options = [])
 * @method UnbindDriverFromEdgeInstance unbindDriverFromEdgeInstance(array $options = [])
 * @method UpdateDeviceGroup updateDeviceGroup(array $options = [])
 * @method UpdateDeviceShadow updateDeviceShadow(array $options = [])
 * @method UpdateEdgeInstance updateEdgeInstance(array $options = [])
 * @method UpdateProduct updateProduct(array $options = [])
 * @method UpdateProductTags updateProductTags(array $options = [])
 * @method UpdateProductTopic updateProductTopic(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method UpdateRuleAction updateRuleAction(array $options = [])
 */
class IotApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Iot';

    /** @var string */
    public $version = '2018-01-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'iot';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchBindDeviceToEdgeInstanceWithDriver extends Rpc
{

    /**
     * @param array $iotIds
     *
     * @return $this
     */
	public function withIotIds(array $iotIds)
	{
	    $this->data['IotIds'] = $iotIds;
		foreach ($iotIds as $i => $iValue) {
			$this->options['query']['IotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchClearEdgeInstanceDeviceConfig extends Rpc
{

    /**
     * @param array $iotIds
     *
     * @return $this
     */
	public function withIotIds(array $iotIds)
	{
	    $this->data['IotIds'] = $iotIds;
		foreach ($iotIds as $i => $iValue) {
			$this->options['query']['IotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchGetDeviceDriver extends Rpc
{

    /**
     * @param array $iotIds
     *
     * @return $this
     */
	public function withIotIds(array $iotIds)
	{
	    $this->data['IotIds'] = $iotIds;
		foreach ($iotIds as $i => $iValue) {
			$this->options['query']['IotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getIotId()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchGetEdgeInstanceDeviceConfig extends Rpc
{

    /**
     * @param array $iotIds
     *
     * @return $this
     */
	public function withIotIds(array $iotIds)
	{
	    $this->data['IotIds'] = $iotIds;
		foreach ($iotIds as $i => $iValue) {
			$this->options['query']['IotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDriverIds()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchGetEdgeInstanceDriverConfigs extends Rpc
{

    /**
     * @param array $driverIds
     *
     * @return $this
     */
	public function withDriverIds(array $driverIds)
	{
	    $this->data['DriverIds'] = $driverIds;
		foreach ($driverIds as $i => $iValue) {
			$this->options['query']['DriverIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
 */
class BatchQueryDeviceDetail extends Rpc
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
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchRegisterDevice extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchRegisterDeviceWithApplyId extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getDeviceConfigs()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchSetEdgeInstanceDeviceConfig extends Rpc
{

    /**
     * @param array $deviceConfigs
     *
     * @return $this
     */
	public function withDeviceConfigs(array $deviceConfigs)
	{
	    $this->data['DeviceConfigs'] = $deviceConfigs;
		foreach ($deviceConfigs as $depth1 => $depth1Value) {
			$this->options['query']['DeviceConfigs.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
			$this->options['query']['DeviceConfigs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BatchUnbindDeviceFromEdgeInstance extends Rpc
{

    /**
     * @param array $iotIds
     *
     * @return $this
     */
	public function withIotIds(array $iotIds)
	{
	    $this->data['IotIds'] = $iotIds;
		foreach ($iotIds as $i => $iValue) {
			$this->options['query']['IotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class BindDriverToEdgeInstance extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class BindGatewayToEdgeInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class ClearEdgeInstanceDriverConfigs extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class CloseEdgeInstanceDeployment extends Rpc
{
}

/**
 * @method string getApiPath()
 * @method $this withApiPath($value)
 * @method array getRequestParam()
 * @method string getFolderId()
 * @method $this withFolderId($value)
 * @method string getTemplateSql()
 * @method $this withTemplateSql($value)
 * @method array getResponseParam()
 * @method string getOriginSql()
 * @method $this withOriginSql($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateDataAPIService extends Rpc
{

    /**
     * @param array $requestParam
     *
     * @return $this
     */
	public function withRequestParam(array $requestParam)
	{
	    $this->data['RequestParam'] = $requestParam;
		foreach ($requestParam as $depth1 => $depth1Value) {
			$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Required'] = $depth1Value['Required'];
			$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
			$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Example'] = $depth1Value['Example'];
		}

		return $this;
    }

    /**
     * @param array $responseParam
     *
     * @return $this
     */
	public function withResponseParam(array $responseParam)
	{
	    $this->data['ResponseParam'] = $responseParam;
		foreach ($responseParam as $depth1 => $depth1Value) {
			$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Required'] = $depth1Value['Required'];
			$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
			$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Example'] = $depth1Value['Example'];
		}

		return $this;
    }
}

/**
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class CreateDeviceGroup extends Rpc
{
}

/**
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateEdgeInstance extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class CreateEdgeInstanceDeployment extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
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
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getId2()
 * @method $this withId2($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 */
class CreateProduct extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
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
 * @method string getSelect()
 * @method $this withSelect($value)
 * @method string getRuleDesc()
 * @method $this withRuleDesc($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getShortTopic()
 * @method $this withShortTopic($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getWhere()
 * @method $this withWhere($value)
 * @method string getTopicType()
 * @method $this withTopicType($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getErrorActionFlag()
 * @method $this withErrorActionFlag($value)
 */
class CreateRuleAction extends Rpc
{
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteDevice extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeleteDeviceFile extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class DeleteDeviceGroup extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getPropKey()
 * @method $this withPropKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteDeviceProp extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class DeleteEdgeInstance extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class DeleteProduct extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getProductTagKey()
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getActionId()
 * @method $this withActionId($value)
 */
class DeleteRuleAction extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DisableThing extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class EnableThing extends Rpc
{
}

/**
 * @method string getApiSrn()
 * @method $this withApiSrn($value)
 */
class GetDataAPIServiceDetail extends Rpc
{
}

/**
 * @method string getShadowMessage()
 * @method $this withShadowMessage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetDeviceShadow extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetDeviceStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class GetEdgeInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeploymentId()
 * @method $this withDeploymentId($value)
 */
class GetEdgeInstanceDeployment extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetGatewayBySubDevice extends Rpc
{
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetNodesAddingTask extends Rpc
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
 * @method string getActionId()
 * @method $this withActionId($value)
 */
class GetRuleAction extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
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
 */
class GetThingTopo extends Rpc
{
}

/**
 * @method string getApiSrn()
 * @method $this withApiSrn($value)
 * @method array getParam()
 */
class InvokeDataAPIService extends Rpc
{

    /**
     * @param array $param
     *
     * @return $this
     */
	public function withParam(array $param)
	{
	    $this->data['Param'] = $param;
		foreach ($param as $depth1 => $depth1Value) {
			$this->options['form_params']['Param.' . ($depth1 + 1) . '.ListParamType'] = $depth1Value['ListParamType'];
			foreach ($depth1Value['ListParamValue'] as $i => $iValue) {
				$this->options['form_params']['Param.' . ($depth1 + 1) . '.ListParamValue.' . ($i + 1)] = $iValue;
			}
			$this->options['form_params']['Param.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
			$this->options['form_params']['Param.' . ($depth1 + 1) . '.ParamName'] = $depth1Value['ParamName'];
		}

		return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class InvokeThingService extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
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
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class ListProductTags extends Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
class ListRuleActions extends Rpc
{
}

/**
 * @method string getGwProductKey()
 * @method $this withGwProductKey($value)
 * @method string getDeviceListStr()
 * @method $this withDeviceListStr($value)
 * @method string getGwDeviceName()
 * @method $this withGwDeviceName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwIotId()
 * @method $this withGwIotId($value)
 */
class NotifyAddThingTopo extends Rpc
{
}

/**
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class Pub extends Rpc
{
}

/**
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class PubBroadcast extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getTagList()
 * @method array getProductKeyList()
 * @method array getCategoryKeyList()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryAppDeviceList extends Rpc
{

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
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryBatchRegisterDeviceStatus extends Rpc
{
}

/**
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryCertUrlByApplyId extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryDevice extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryDeviceByDriver extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceCert extends Rpc
{
}

/**
 * @method array getIdentifier()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceDetail extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceEventData extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class QueryDeviceFile extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceFileList extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceGroupByDevice extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryDeviceGroupInfo extends Rpc
{
}

/**
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryDeviceGroupList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryDeviceGroupTagList extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryDeviceListByDeviceGroup extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceProp extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getIdentifier()
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
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
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDevicePropertyData extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDevicePropertyStatus extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceServiceData extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryDeviceStatistics extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 */
class QueryEdgeInstance extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryEdgeInstanceDevice extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryEdgeInstanceDriver extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryEdgeInstanceGateway extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryEdgeInstanceHistoricDeployment extends Rpc
{
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryLoRaJoinPermissions extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryPageByApplyId extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryProduct extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 */
class QueryProductList extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QueryProductTopic extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class QuerySuperDeviceGroup extends Rpc
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
 * @method string getPinCode()
 * @method $this withPinCode($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getNickname()
 * @method $this withNickname($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RegisterDevice extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RemoveThingTopo extends Rpc
{
}

/**
 * @method string getRequestBase64Byte()
 * @method $this withRequestBase64Byte($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RRpc extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getProps()
 * @method $this withProps($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class SaveDeviceProp extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getVersions()
 * @method $this withVersions($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceDesiredProperty extends Rpc
{
}

/**
 * @method string getTagString()
 * @method $this withTagString($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class SetDeviceGroupTags extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceProperty extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceName()
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
 * @method array getConfigs()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class SetEdgeInstanceDriverConfigs extends Rpc
{

    /**
     * @param array $configs
     *
     * @return $this
     */
	public function withConfigs(array $configs)
	{
	    $this->data['Configs'] = $configs;
		foreach ($configs as $depth1 => $depth1Value) {
			$this->options['query']['Configs.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			$this->options['query']['Configs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			$this->options['query']['Configs.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

		return $this;
    }
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
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class StopRule extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class UnbindDriverFromEdgeInstance extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 */
class UpdateDeviceGroup extends Rpc
{
}

/**
 * @method string getShadowMessage()
 * @method $this withShadowMessage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class UpdateDeviceShadow extends Rpc
{
}

/**
 * @method string getBizEnable()
 * @method $this withBizEnable($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateEdgeInstance extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 */
class UpdateProduct extends Rpc
{
}

/**
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
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
 * @method string getSelect()
 * @method $this withSelect($value)
 * @method string getRuleDesc()
 * @method $this withRuleDesc($value)
 * @method string getShortTopic()
 * @method $this withShortTopic($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getWhere()
 * @method $this withWhere($value)
 * @method string getTopicType()
 * @method $this withTopicType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateRule extends Rpc
{
}

/**
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getActionId()
 * @method $this withActionId($value)
 */
class UpdateRuleAction extends Rpc
{
}
