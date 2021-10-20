<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDataForApiSource addDataForApiSource(array $options = [])
 * @method BatchAddDataForApiSource batchAddDataForApiSource(array $options = [])
 * @method BatchAddDeviceGroupRelations batchAddDeviceGroupRelations(array $options = [])
 * @method BatchAddThingTopo batchAddThingTopo(array $options = [])
 * @method BatchBindDevicesIntoProject batchBindDevicesIntoProject(array $options = [])
 * @method BatchBindDeviceToEdgeInstanceWithDriver batchBindDeviceToEdgeInstanceWithDriver(array $options = [])
 * @method BatchBindProductsIntoProject batchBindProductsIntoProject(array $options = [])
 * @method BatchCheckDeviceNames batchCheckDeviceNames(array $options = [])
 * @method BatchClearEdgeInstanceDeviceConfig batchClearEdgeInstanceDeviceConfig(array $options = [])
 * @method BatchDeleteDeviceGroupRelations batchDeleteDeviceGroupRelations(array $options = [])
 * @method BatchDeleteEdgeInstanceChannel batchDeleteEdgeInstanceChannel(array $options = [])
 * @method BatchGetDeviceBindStatus batchGetDeviceBindStatus(array $options = [])
 * @method BatchGetDeviceState batchGetDeviceState(array $options = [])
 * @method BatchGetEdgeDriver batchGetEdgeDriver(array $options = [])
 * @method BatchGetEdgeInstanceChannel batchGetEdgeInstanceChannel(array $options = [])
 * @method BatchGetEdgeInstanceDeviceChannel batchGetEdgeInstanceDeviceChannel(array $options = [])
 * @method BatchGetEdgeInstanceDeviceConfig batchGetEdgeInstanceDeviceConfig(array $options = [])
 * @method BatchGetEdgeInstanceDeviceDriver batchGetEdgeInstanceDeviceDriver(array $options = [])
 * @method BatchGetEdgeInstanceDriverConfigs batchGetEdgeInstanceDriverConfigs(array $options = [])
 * @method BatchPub batchPub(array $options = [])
 * @method BatchQueryDeviceDetail batchQueryDeviceDetail(array $options = [])
 * @method BatchRegisterDevice batchRegisterDevice(array $options = [])
 * @method BatchRegisterDeviceWithApplyId batchRegisterDeviceWithApplyId(array $options = [])
 * @method BatchSetEdgeInstanceDeviceChannel batchSetEdgeInstanceDeviceChannel(array $options = [])
 * @method BatchSetEdgeInstanceDeviceConfig batchSetEdgeInstanceDeviceConfig(array $options = [])
 * @method BatchUnbindDeviceFromEdgeInstance batchUnbindDeviceFromEdgeInstance(array $options = [])
 * @method BatchUnbindProjectDevices batchUnbindProjectDevices(array $options = [])
 * @method BatchUnbindProjectProducts batchUnbindProjectProducts(array $options = [])
 * @method BatchUpdateDeviceNickname batchUpdateDeviceNickname(array $options = [])
 * @method BindApplicationToEdgeInstance bindApplicationToEdgeInstance(array $options = [])
 * @method BindDriverToEdgeInstance bindDriverToEdgeInstance(array $options = [])
 * @method BindGatewayToEdgeInstance bindGatewayToEdgeInstance(array $options = [])
 * @method BindRoleToEdgeInstance bindRoleToEdgeInstance(array $options = [])
 * @method BindSceneRuleToEdgeInstance bindSceneRuleToEdgeInstance(array $options = [])
 * @method CancelJob cancelJob(array $options = [])
 * @method CancelOTAStrategyByJob cancelOTAStrategyByJob(array $options = [])
 * @method CancelOTATaskByDevice cancelOTATaskByDevice(array $options = [])
 * @method CancelOTATaskByJob cancelOTATaskByJob(array $options = [])
 * @method CancelReleaseProduct cancelReleaseProduct(array $options = [])
 * @method ClearEdgeInstanceDriverConfigs clearEdgeInstanceDriverConfigs(array $options = [])
 * @method CloseDeviceTunnel closeDeviceTunnel(array $options = [])
 * @method CloseEdgeInstanceDeployment closeEdgeInstanceDeployment(array $options = [])
 * @method ConfirmOTATask confirmOTATask(array $options = [])
 * @method CopyThingModel copyThingModel(array $options = [])
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreateConsumerGroupSubscribeRelation createConsumerGroupSubscribeRelation(array $options = [])
 * @method CreateDataAPIService createDataAPIService(array $options = [])
 * @method CreateDeviceDistributeJob createDeviceDistributeJob(array $options = [])
 * @method CreateDeviceDynamicGroup createDeviceDynamicGroup(array $options = [])
 * @method CreateDeviceGroup createDeviceGroup(array $options = [])
 * @method CreateDeviceTunnel createDeviceTunnel(array $options = [])
 * @method CreateEdgeDriver createEdgeDriver(array $options = [])
 * @method CreateEdgeDriverVersion createEdgeDriverVersion(array $options = [])
 * @method CreateEdgeInstance createEdgeInstance(array $options = [])
 * @method CreateEdgeInstanceChannel createEdgeInstanceChannel(array $options = [])
 * @method CreateEdgeInstanceDeployment createEdgeInstanceDeployment(array $options = [])
 * @method CreateEdgeInstanceMessageRouting createEdgeInstanceMessageRouting(array $options = [])
 * @method CreateEdgeOssPreSignedAddress createEdgeOssPreSignedAddress(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method CreateLoRaNodesTask createLoRaNodesTask(array $options = [])
 * @method CreateOTADynamicUpgradeJob createOTADynamicUpgradeJob(array $options = [])
 * @method CreateOTAFirmware createOTAFirmware(array $options = [])
 * @method CreateOTAModule createOTAModule(array $options = [])
 * @method CreateOTAStaticUpgradeJob createOTAStaticUpgradeJob(array $options = [])
 * @method CreateOTAVerifyJob createOTAVerifyJob(array $options = [])
 * @method CreateProduct createProduct(array $options = [])
 * @method CreateProductDistributeJob createProductDistributeJob(array $options = [])
 * @method CreateProductTags createProductTags(array $options = [])
 * @method CreateProductTopic createProductTopic(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateRuleAction createRuleAction(array $options = [])
 * @method CreateRulengDistributeJob createRulengDistributeJob(array $options = [])
 * @method CreateSceneRule createSceneRule(array $options = [])
 * @method CreateSpeech createSpeech(array $options = [])
 * @method CreateStudioAppDomainOpen createStudioAppDomainOpen(array $options = [])
 * @method CreateSubscribeRelation createSubscribeRelation(array $options = [])
 * @method CreateThingModel createThingModel(array $options = [])
 * @method CreateThingScript createThingScript(array $options = [])
 * @method CreateTopicRouteTable createTopicRouteTable(array $options = [])
 * @method DeleteClientIds deleteClientIds(array $options = [])
 * @method DeleteConsumerGroup deleteConsumerGroup(array $options = [])
 * @method DeleteConsumerGroupSubscribeRelation deleteConsumerGroupSubscribeRelation(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteDeviceDistributeJob deleteDeviceDistributeJob(array $options = [])
 * @method DeleteDeviceDynamicGroup deleteDeviceDynamicGroup(array $options = [])
 * @method DeleteDeviceFile deleteDeviceFile(array $options = [])
 * @method DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method DeleteDeviceProp deleteDeviceProp(array $options = [])
 * @method DeleteDeviceSpeech deleteDeviceSpeech(array $options = [])
 * @method DeleteDeviceTunnel deleteDeviceTunnel(array $options = [])
 * @method DeleteEdgeDriver deleteEdgeDriver(array $options = [])
 * @method DeleteEdgeDriverVersion deleteEdgeDriverVersion(array $options = [])
 * @method DeleteEdgeInstance deleteEdgeInstance(array $options = [])
 * @method DeleteEdgeInstanceMessageRouting deleteEdgeInstanceMessageRouting(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteOTAFirmware deleteOTAFirmware(array $options = [])
 * @method DeleteOTAModule deleteOTAModule(array $options = [])
 * @method DeleteProduct deleteProduct(array $options = [])
 * @method DeleteProductTags deleteProductTags(array $options = [])
 * @method DeleteProductTopic deleteProductTopic(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteRuleAction deleteRuleAction(array $options = [])
 * @method DeleteSceneRule deleteSceneRule(array $options = [])
 * @method DeleteSpeech deleteSpeech(array $options = [])
 * @method DeleteStudioAppDomainOpen deleteStudioAppDomainOpen(array $options = [])
 * @method DeleteSubscribeRelation deleteSubscribeRelation(array $options = [])
 * @method DeleteThingModel deleteThingModel(array $options = [])
 * @method DeleteTopicRouteTable deleteTopicRouteTable(array $options = [])
 * @method DisableDeviceTunnel disableDeviceTunnel(array $options = [])
 * @method DisableDeviceTunnelShare disableDeviceTunnelShare(array $options = [])
 * @method DisableSceneRule disableSceneRule(array $options = [])
 * @method DisableThing disableThing(array $options = [])
 * @method EnableDeviceTunnel enableDeviceTunnel(array $options = [])
 * @method EnableDeviceTunnelShare enableDeviceTunnelShare(array $options = [])
 * @method EnableSceneRule enableSceneRule(array $options = [])
 * @method EnableThing enableThing(array $options = [])
 * @method GenerateDeviceNameListURL generateDeviceNameListURL(array $options = [])
 * @method GenerateFileUploadURL generateFileUploadURL(array $options = [])
 * @method GenerateOTAUploadURL generateOTAUploadURL(array $options = [])
 * @method GetDataAPIServiceDetail getDataAPIServiceDetail(array $options = [])
 * @method GetDeviceShadow getDeviceShadow(array $options = [])
 * @method GetDeviceStatus getDeviceStatus(array $options = [])
 * @method GetDeviceTunnelShareStatus getDeviceTunnelShareStatus(array $options = [])
 * @method GetDeviceTunnelStatus getDeviceTunnelStatus(array $options = [])
 * @method GetEdgeDriverVersion getEdgeDriverVersion(array $options = [])
 * @method GetEdgeInstance getEdgeInstance(array $options = [])
 * @method GetEdgeInstanceDeployment getEdgeInstanceDeployment(array $options = [])
 * @method GetEdgeInstanceMessageRouting getEdgeInstanceMessageRouting(array $options = [])
 * @method GetGatewayBySubDevice getGatewayBySubDevice(array $options = [])
 * @method GetLoraNodesTask getLoraNodesTask(array $options = [])
 * @method GetNodesAddingTask getNodesAddingTask(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method GetRuleAction getRuleAction(array $options = [])
 * @method GetSceneRule getSceneRule(array $options = [])
 * @method GetSpeechDeviceDetail getSpeechDeviceDetail(array $options = [])
 * @method GetSpeechVoice getSpeechVoice(array $options = [])
 * @method GetStudioAppTokenOpen getStudioAppTokenOpen(array $options = [])
 * @method GetThingModelTsl getThingModelTsl(array $options = [])
 * @method GetThingModelTslPublished getThingModelTslPublished(array $options = [])
 * @method GetThingScript getThingScript(array $options = [])
 * @method GetThingTemplate getThingTemplate(array $options = [])
 * @method GetThingTopo getThingTopo(array $options = [])
 * @method ImportThingModelTsl importThingModelTsl(array $options = [])
 * @method InvokeDataAPIService invokeDataAPIService(array $options = [])
 * @method InvokeThingService invokeThingService(array $options = [])
 * @method InvokeThingsService invokeThingsService(array $options = [])
 * @method ListAnalyticsData listAnalyticsData(array $options = [])
 * @method ListDeviceDistributeJob listDeviceDistributeJob(array $options = [])
 * @method ListDistributedDevice listDistributedDevice(array $options = [])
 * @method ListDistributedProduct listDistributedProduct(array $options = [])
 * @method ListJob listJob(array $options = [])
 * @method ListOTAFirmware listOTAFirmware(array $options = [])
 * @method ListOTAJobByDevice listOTAJobByDevice(array $options = [])
 * @method ListOTAJobByFirmware listOTAJobByFirmware(array $options = [])
 * @method ListOTAModuleByProduct listOTAModuleByProduct(array $options = [])
 * @method ListOTAModuleVersionsByDevice listOTAModuleVersionsByDevice(array $options = [])
 * @method ListOTATaskByJob listOTATaskByJob(array $options = [])
 * @method ListOTAUnfinishedTaskByDevice listOTAUnfinishedTaskByDevice(array $options = [])
 * @method ListProductByTags listProductByTags(array $options = [])
 * @method ListProductTags listProductTags(array $options = [])
 * @method ListRule listRule(array $options = [])
 * @method ListRuleActions listRuleActions(array $options = [])
 * @method ListSourceReplica listSourceReplica(array $options = [])
 * @method ListTask listTask(array $options = [])
 * @method ListTaskByPage listTaskByPage(array $options = [])
 * @method ListThingModelVersion listThingModelVersion(array $options = [])
 * @method ListThingTemplates listThingTemplates(array $options = [])
 * @method NotifyAddThingTopo notifyAddThingTopo(array $options = [])
 * @method OpenIotService openIotService(array $options = [])
 * @method PrintByTemplate printByTemplate(array $options = [])
 * @method Pub pub(array $options = [])
 * @method PubBroadcast pubBroadcast(array $options = [])
 * @method PublishStudioApp publishStudioApp(array $options = [])
 * @method PublishThingModel publishThingModel(array $options = [])
 * @method PushSpeech pushSpeech(array $options = [])
 * @method QueryAppDeviceList queryAppDeviceList(array $options = [])
 * @method QueryBatchRegisterDeviceStatus queryBatchRegisterDeviceStatus(array $options = [])
 * @method QueryCertUrlByApplyId queryCertUrlByApplyId(array $options = [])
 * @method QueryClientIds queryClientIds(array $options = [])
 * @method QueryConsumerGroupByGroupId queryConsumerGroupByGroupId(array $options = [])
 * @method QueryConsumerGroupList queryConsumerGroupList(array $options = [])
 * @method QueryConsumerGroupStatus queryConsumerGroupStatus(array $options = [])
 * @method QueryDetailSceneRuleLog queryDetailSceneRuleLog(array $options = [])
 * @method QueryDevice queryDevice(array $options = [])
 * @method QueryDeviceBySQL queryDeviceBySQL(array $options = [])
 * @method QueryDeviceByStatus queryDeviceByStatus(array $options = [])
 * @method QueryDeviceByTags queryDeviceByTags(array $options = [])
 * @method QueryDeviceCert queryDeviceCert(array $options = [])
 * @method QueryDeviceDesiredProperty queryDeviceDesiredProperty(array $options = [])
 * @method QueryDeviceDetail queryDeviceDetail(array $options = [])
 * @method QueryDeviceDistributeDetail queryDeviceDistributeDetail(array $options = [])
 * @method QueryDeviceDistributeJob queryDeviceDistributeJob(array $options = [])
 * @method QueryDeviceEventData queryDeviceEventData(array $options = [])
 * @method QueryDeviceFile queryDeviceFile(array $options = [])
 * @method QueryDeviceFileList queryDeviceFileList(array $options = [])
 * @method QueryDeviceGroupByDevice queryDeviceGroupByDevice(array $options = [])
 * @method QueryDeviceGroupByTags queryDeviceGroupByTags(array $options = [])
 * @method QueryDeviceGroupInfo queryDeviceGroupInfo(array $options = [])
 * @method QueryDeviceGroupList queryDeviceGroupList(array $options = [])
 * @method QueryDeviceGroupTagList queryDeviceGroupTagList(array $options = [])
 * @method QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method QueryDeviceListByDeviceGroup queryDeviceListByDeviceGroup(array $options = [])
 * @method QueryDeviceOriginalEventData queryDeviceOriginalEventData(array $options = [])
 * @method QueryDeviceOriginalPropertyData queryDeviceOriginalPropertyData(array $options = [])
 * @method QueryDeviceOriginalPropertyStatus queryDeviceOriginalPropertyStatus(array $options = [])
 * @method QueryDeviceOriginalServiceData queryDeviceOriginalServiceData(array $options = [])
 * @method QueryDeviceProp queryDeviceProp(array $options = [])
 * @method QueryDevicePropertiesData queryDevicePropertiesData(array $options = [])
 * @method QueryDevicePropertyData queryDevicePropertyData(array $options = [])
 * @method QueryDevicePropertyStatus queryDevicePropertyStatus(array $options = [])
 * @method QueryDeviceServiceData queryDeviceServiceData(array $options = [])
 * @method QueryDeviceSpeech queryDeviceSpeech(array $options = [])
 * @method QueryDeviceStatistics queryDeviceStatistics(array $options = [])
 * @method QueryDeviceTunnel queryDeviceTunnel(array $options = [])
 * @method QueryDynamicGroupDevices queryDynamicGroupDevices(array $options = [])
 * @method QueryEdgeDriver queryEdgeDriver(array $options = [])
 * @method QueryEdgeDriverVersion queryEdgeDriverVersion(array $options = [])
 * @method QueryEdgeInstance queryEdgeInstance(array $options = [])
 * @method QueryEdgeInstanceChannel queryEdgeInstanceChannel(array $options = [])
 * @method QueryEdgeInstanceDevice queryEdgeInstanceDevice(array $options = [])
 * @method QueryEdgeInstanceDeviceByDriver queryEdgeInstanceDeviceByDriver(array $options = [])
 * @method QueryEdgeInstanceDriver queryEdgeInstanceDriver(array $options = [])
 * @method QueryEdgeInstanceGateway queryEdgeInstanceGateway(array $options = [])
 * @method QueryEdgeInstanceHistoricDeployment queryEdgeInstanceHistoricDeployment(array $options = [])
 * @method QueryEdgeInstanceMessageRouting queryEdgeInstanceMessageRouting(array $options = [])
 * @method QueryEdgeInstanceSceneRule queryEdgeInstanceSceneRule(array $options = [])
 * @method QueryJob queryJob(array $options = [])
 * @method QueryJobStatistics queryJobStatistics(array $options = [])
 * @method QueryLoRaJoinPermissions queryLoRaJoinPermissions(array $options = [])
 * @method QueryMessageInfo queryMessageInfo(array $options = [])
 * @method QueryOTAFirmware queryOTAFirmware(array $options = [])
 * @method QueryOTAJob queryOTAJob(array $options = [])
 * @method QueryPageByApplyId queryPageByApplyId(array $options = [])
 * @method QueryProduct queryProduct(array $options = [])
 * @method QueryProductCertInfo queryProductCertInfo(array $options = [])
 * @method QueryProductList queryProductList(array $options = [])
 * @method QueryProductTopic queryProductTopic(array $options = [])
 * @method QuerySceneRule querySceneRule(array $options = [])
 * @method QuerySolutionDeviceGroupPage querySolutionDeviceGroupPage(array $options = [])
 * @method QuerySpeech querySpeech(array $options = [])
 * @method QuerySpeechDevice querySpeechDevice(array $options = [])
 * @method QuerySpeechList querySpeechList(array $options = [])
 * @method QuerySpeechPushJob querySpeechPushJob(array $options = [])
 * @method QuerySpeechPushJobDevice querySpeechPushJobDevice(array $options = [])
 * @method QuerySpeechPushJobSpeech querySpeechPushJobSpeech(array $options = [])
 * @method QueryStudioAppDomainListOpen queryStudioAppDomainListOpen(array $options = [])
 * @method QueryStudioAppList queryStudioAppList(array $options = [])
 * @method QueryStudioAppPageListOpen queryStudioAppPageListOpen(array $options = [])
 * @method QueryStudioProjectList queryStudioProjectList(array $options = [])
 * @method QuerySubscribeRelation querySubscribeRelation(array $options = [])
 * @method QuerySummarySceneRuleLog querySummarySceneRuleLog(array $options = [])
 * @method QuerySuperDeviceGroup querySuperDeviceGroup(array $options = [])
 * @method QueryTask queryTask(array $options = [])
 * @method QueryThingModel queryThingModel(array $options = [])
 * @method QueryThingModelExtendConfig queryThingModelExtendConfig(array $options = [])
 * @method QueryThingModelExtendConfigPublished queryThingModelExtendConfigPublished(array $options = [])
 * @method QueryThingModelPublished queryThingModelPublished(array $options = [])
 * @method QueryTopicReverseRouteTable queryTopicReverseRouteTable(array $options = [])
 * @method QueryTopicRouteTable queryTopicRouteTable(array $options = [])
 * @method RefreshDeviceTunnelSharePassword refreshDeviceTunnelSharePassword(array $options = [])
 * @method RefreshStudioAppTokenOpen refreshStudioAppTokenOpen(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method ReleaseEdgeDriverVersion releaseEdgeDriverVersion(array $options = [])
 * @method ReleaseProduct releaseProduct(array $options = [])
 * @method RemoveThingTopo removeThingTopo(array $options = [])
 * @method ReplaceEdgeInstanceGateway replaceEdgeInstanceGateway(array $options = [])
 * @method RerunJob rerunJob(array $options = [])
 * @method ResetConsumerGroupPosition resetConsumerGroupPosition(array $options = [])
 * @method ResetThing resetThing(array $options = [])
 * @method RRpc rRpc(array $options = [])
 * @method SaveDeviceProp saveDeviceProp(array $options = [])
 * @method SetDeviceDesiredProperty setDeviceDesiredProperty(array $options = [])
 * @method SetDeviceGroupTags setDeviceGroupTags(array $options = [])
 * @method SetDeviceProperty setDeviceProperty(array $options = [])
 * @method SetDevicesProperty setDevicesProperty(array $options = [])
 * @method SetEdgeInstanceDriverConfigs setEdgeInstanceDriverConfigs(array $options = [])
 * @method SetProductCertInfo setProductCertInfo(array $options = [])
 * @method SetStudioProjectCooperation setStudioProjectCooperation(array $options = [])
 * @method SetupStudioAppAuthModeOpen setupStudioAppAuthModeOpen(array $options = [])
 * @method SpeechByCombination speechByCombination(array $options = [])
 * @method StartRule startRule(array $options = [])
 * @method StopRule stopRule(array $options = [])
 * @method SubscribeTopic subscribeTopic(array $options = [])
 * @method SyncSpeechByCombination syncSpeechByCombination(array $options = [])
 * @method TestSpeech testSpeech(array $options = [])
 * @method TransformClientId transformClientId(array $options = [])
 * @method TriggerSceneRule triggerSceneRule(array $options = [])
 * @method UnbindApplicationFromEdgeInstance unbindApplicationFromEdgeInstance(array $options = [])
 * @method UnbindDriverFromEdgeInstance unbindDriverFromEdgeInstance(array $options = [])
 * @method UnbindRoleFromEdgeInstance unbindRoleFromEdgeInstance(array $options = [])
 * @method UnbindSceneRuleFromEdgeInstance unbindSceneRuleFromEdgeInstance(array $options = [])
 * @method UpdateConsumerGroup updateConsumerGroup(array $options = [])
 * @method UpdateDeviceGroup updateDeviceGroup(array $options = [])
 * @method UpdateDeviceShadow updateDeviceShadow(array $options = [])
 * @method UpdateEdgeDriverVersion updateEdgeDriverVersion(array $options = [])
 * @method UpdateEdgeInstance updateEdgeInstance(array $options = [])
 * @method UpdateEdgeInstanceChannel updateEdgeInstanceChannel(array $options = [])
 * @method UpdateEdgeInstanceMessageRouting updateEdgeInstanceMessageRouting(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 * @method UpdateOTAModule updateOTAModule(array $options = [])
 * @method UpdateProduct updateProduct(array $options = [])
 * @method UpdateProductFilterConfig updateProductFilterConfig(array $options = [])
 * @method UpdateProductTags updateProductTags(array $options = [])
 * @method UpdateProductTopic updateProductTopic(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method UpdateRuleAction updateRuleAction(array $options = [])
 * @method UpdateSceneRule updateSceneRule(array $options = [])
 * @method UpdateSpeech updateSpeech(array $options = [])
 * @method UpdateSubscribeRelation updateSubscribeRelation(array $options = [])
 * @method UpdateThingModel updateThingModel(array $options = [])
 * @method UpdateThingModelValidationConfig updateThingModelValidationConfig(array $options = [])
 * @method UpdateThingScript updateThingScript(array $options = [])
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
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class AddDataForApiSource extends Rpc
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
 * @method string getContentList()
 * @method $this withContentList($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class BatchAddDataForApiSource extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDevice()
 */
class BatchAddDeviceGroupRelations extends Rpc
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
     * @param array $device
     *
     * @return $this
     */
	public function withDevice(array $device)
	{
	    $this->data['Device'] = $device;
		foreach ($device as $depth1 => $depth1Value) {
			if(isset($depth1Value['DeviceName'])){
				$this->options['query']['Device.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['query']['Device.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGwProductKey()
 * @method $this withGwProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getExt()
 * @method $this withExt($value)
 * @method array getTopoAddItem()
 * @method string getGwDeviceName()
 * @method $this withGwDeviceName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchAddThingTopo extends Rpc
{

    /**
     * @param array $topoAddItem
     *
     * @return $this
     */
	public function withTopoAddItem(array $topoAddItem)
	{
	    $this->data['TopoAddItem'] = $topoAddItem;
		foreach ($topoAddItem as $depth1 => $depth1Value) {
			if(isset($depth1Value['ClientId'])){
				$this->options['query']['TopoAddItem.' . ($depth1 + 1) . '.ClientId'] = $depth1Value['ClientId'];
			}
			if(isset($depth1Value['SignMethod'])){
				$this->options['query']['TopoAddItem.' . ($depth1 + 1) . '.SignMethod'] = $depth1Value['SignMethod'];
			}
			if(isset($depth1Value['Sign'])){
				$this->options['query']['TopoAddItem.' . ($depth1 + 1) . '.Sign'] = $depth1Value['Sign'];
			}
			if(isset($depth1Value['DeviceName'])){
				$this->options['query']['TopoAddItem.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['query']['TopoAddItem.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
			if(isset($depth1Value['Timestamp'])){
				$this->options['query']['TopoAddItem.' . ($depth1 + 1) . '.Timestamp'] = $depth1Value['Timestamp'];
			}
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
 * @method string getProjectId()
 * @method array getDevices()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchBindDevicesIntoProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param array $devices
     *
     * @return $this
     */
	public function withDevices(array $devices)
	{
	    $this->data['Devices'] = $devices;
		foreach ($devices as $depth1 => $depth1Value) {
			if(isset($depth1Value['DeviceName'])){
				$this->options['form_params']['Devices.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['form_params']['Devices.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method array getProductKeys()
 * @method string getIotInstanceId()
 * @method string getProjectId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchBindProductsIntoProject extends Rpc
{

    /**
     * @param array $productKeys
     *
     * @return $this
     */
	public function withProductKeys(array $productKeys)
	{
	    $this->data['ProductKeys'] = $productKeys;
		foreach ($productKeys as $i => $iValue) {
			$this->options['form_params']['ProductKeys.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method array getDeviceNameList()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 */
class BatchCheckDeviceNames extends Rpc
{

    /**
     * @param array $deviceNameList
     *
     * @return $this
     */
	public function withDeviceNameList(array $deviceNameList)
	{
	    $this->data['DeviceNameList'] = $deviceNameList;
		foreach ($deviceNameList as $depth1 => $depth1Value) {
			if(isset($depth1Value['DeviceNickname'])){
				$this->options['query']['DeviceNameList.' . ($depth1 + 1) . '.DeviceNickname'] = $depth1Value['DeviceNickname'];
			}
			if(isset($depth1Value['DeviceName'])){
				$this->options['query']['DeviceNameList.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
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
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDevice()
 */
class BatchDeleteDeviceGroupRelations extends Rpc
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
     * @param array $device
     *
     * @return $this
     */
	public function withDevice(array $device)
	{
	    $this->data['Device'] = $device;
		foreach ($device as $depth1 => $depth1Value) {
			if(isset($depth1Value['DeviceName'])){
				$this->options['query']['Device.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['query']['Device.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getChannelIds()
 */
class BatchDeleteEdgeInstanceChannel extends Rpc
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
     * @param array $channelIds
     *
     * @return $this
     */
	public function withChannelIds(array $channelIds)
	{
	    $this->data['ChannelIds'] = $channelIds;
		foreach ($channelIds as $i => $iValue) {
			$this->options['query']['ChannelIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchGetDeviceBindStatus extends Rpc
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
 * @method array getIotId()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method array getDriverIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchGetEdgeDriver extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getChannelIds()
 */
class BatchGetEdgeInstanceChannel extends Rpc
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
     * @param array $channelIds
     *
     * @return $this
     */
	public function withChannelIds(array $channelIds)
	{
	    $this->data['ChannelIds'] = $channelIds;
		foreach ($channelIds as $i => $iValue) {
			$this->options['query']['ChannelIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchGetEdgeInstanceDeviceChannel extends Rpc
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
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchGetEdgeInstanceDeviceDriver extends Rpc
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
 * @method array getDriverIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopicShortName()
 * @method $this withTopicShortName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 */
class BatchPub extends Rpc
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 */
class BatchQueryDeviceDetail extends Rpc
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchRegisterDevice extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchRegisterDeviceWithApplyId extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class BatchSetEdgeInstanceDeviceChannel extends Rpc
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
 * @method array getDeviceConfigs()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['IotId'])){
				$this->options['query']['DeviceConfigs.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
			}
			if(isset($depth1Value['Content'])){
				$this->options['query']['DeviceConfigs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
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
 * @method array getIotIds()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getProjectId()
 * @method array getDevices()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchUnbindProjectDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param array $devices
     *
     * @return $this
     */
	public function withDevices(array $devices)
	{
	    $this->data['Devices'] = $devices;
		foreach ($devices as $depth1 => $depth1Value) {
			if(isset($depth1Value['DeviceName'])){
				$this->options['form_params']['Devices.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['form_params']['Devices.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
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
 * @method array getProductKeys()
 * @method string getIotInstanceId()
 * @method string getProjectId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchUnbindProjectProducts extends Rpc
{

    /**
     * @param array $productKeys
     *
     * @return $this
     */
	public function withProductKeys(array $productKeys)
	{
	    $this->data['ProductKeys'] = $productKeys;
		foreach ($productKeys as $i => $iValue) {
			$this->options['form_params']['ProductKeys.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDeviceNicknameInfo()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['IotId'])){
				$this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
			}
			if(isset($depth1Value['Nickname'])){
				$this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.Nickname'] = $depth1Value['Nickname'];
			}
			if(isset($depth1Value['DeviceName'])){
				$this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
			}
			if(isset($depth1Value['ProductKey'])){
				$this->options['query']['DeviceNicknameInfo.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
			}
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
 * @method string getApplicationVersion()
 * @method $this withApplicationVersion($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BindApplicationToEdgeInstance extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BindDriverToEdgeInstance extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class BindGatewayToEdgeInstance extends Rpc
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
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BindRoleToEdgeInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class BindSceneRuleToEdgeInstance extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CancelJob extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CancelOTAStrategyByJob extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 */
class CancelOTATaskByDevice extends Rpc
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
 * @method string getCancelScheduledTask()
 * @method $this withCancelScheduledTask($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getCancelUnconfirmedTask()
 * @method $this withCancelUnconfirmedTask($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getCancelQueuedTask()
 * @method $this withCancelQueuedTask($value)
 * @method string getCancelInProgressTask()
 * @method $this withCancelInProgressTask($value)
 * @method string getCancelNotifiedTask()
 * @method $this withCancelNotifiedTask($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CancelOTATaskByJob extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBizTenantId()
 * @method $this withBizTenantId($value)
 */
class CancelReleaseProduct extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ClearEdgeInstanceDriverConfigs extends Rpc
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
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CloseDeviceTunnel extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CloseEdgeInstanceDeployment extends Rpc
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
 * @method array getTaskId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ConfirmOTATask extends Rpc
{

    /**
     * @param array $taskId
     *
     * @return $this
     */
	public function withTaskId(array $taskId)
	{
	    $this->data['TaskId'] = $taskId;
		foreach ($taskId as $i => $iValue) {
			$this->options['query']['TaskId.' . ($i + 1)] = $iValue;
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getTargetProductKey()
 * @method $this withTargetProductKey($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSourceModelVersion()
 * @method $this withSourceModelVersion($value)
 * @method string getSourceProductKey()
 * @method $this withSourceProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CopyThingModel extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateConsumerGroup extends Rpc
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
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateConsumerGroupSubscribeRelation extends Rpc
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
 * @method array getRequestParam()
 * @method string getIotInstanceId()
 * @method string getApiPath()
 * @method string getTemplateSql()
 * @method array getResponseParam()
 * @method string getOriginSql()
 * @method string getDisplayName()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDesc()
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
			if(isset($depth1Value['Name'])){
				$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Desc'])){
				$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
			}
			if(isset($depth1Value['Example'])){
				$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Example'] = $depth1Value['Example'];
			}
			if(isset($depth1Value['Required'])){
				$this->options['form_params']['RequestParam.' . ($depth1 + 1) . '.Required'] = $depth1Value['Required'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiPath($value)
    {
        $this->data['ApiPath'] = $value;
        $this->options['form_params']['ApiPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateSql($value)
    {
        $this->data['TemplateSql'] = $value;
        $this->options['form_params']['TemplateSql'] = $value;

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
			if(isset($depth1Value['Name'])){
				$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Desc'])){
				$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
			}
			if(isset($depth1Value['Example'])){
				$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Example'] = $depth1Value['Example'];
			}
			if(isset($depth1Value['Required'])){
				$this->options['form_params']['ResponseParam.' . ($depth1 + 1) . '.Required'] = $depth1Value['Required'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginSql($value)
    {
        $this->data['OriginSql'] = $value;
        $this->options['form_params']['OriginSql'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['form_params']['Desc'] = $value;

        return $this;
    }
}

/**
 * @method string getCaptcha()
 * @method string getSourceInstanceId()
 * @method string getTargetAliyunId()
 * @method array getTargetInstanceConfig()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 * @method string getTargetUid()
 * @method string getStrategy()
 */
class CreateDeviceDistributeJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaptcha($value)
    {
        $this->data['Captcha'] = $value;
        $this->options['form_params']['Captcha'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceInstanceId($value)
    {
        $this->data['SourceInstanceId'] = $value;
        $this->options['form_params']['SourceInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetAliyunId($value)
    {
        $this->data['TargetAliyunId'] = $value;
        $this->options['form_params']['TargetAliyunId'] = $value;

        return $this;
    }

    /**
     * @param array $targetInstanceConfig
     *
     * @return $this
     */
	public function withTargetInstanceConfig(array $targetInstanceConfig)
	{
	    $this->data['TargetInstanceConfig'] = $targetInstanceConfig;
		foreach ($targetInstanceConfig as $depth1 => $depth1Value) {
			if(isset($depth1Value['TargetInstanceId'])){
				$this->options['form_params']['TargetInstanceConfig.' . ($depth1 + 1) . '.TargetInstanceId'] = $depth1Value['TargetInstanceId'];
			}
		}

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
     * @param array $deviceName
     *
     * @return $this
     */
	public function withDeviceName(array $deviceName)
	{
	    $this->data['DeviceName'] = $deviceName;
		foreach ($deviceName as $i => $iValue) {
			$this->options['form_params']['DeviceName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUid($value)
    {
        $this->data['TargetUid'] = $value;
        $this->options['form_params']['TargetUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategy($value)
    {
        $this->data['Strategy'] = $value;
        $this->options['form_params']['Strategy'] = $value;

        return $this;
    }
}

/**
 * @method string getDynamicGroupExpression()
 * @method $this withDynamicGroupExpression($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateDeviceDynamicGroup extends Rpc
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
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateDeviceGroup extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getUdi()
 * @method $this withUdi($value)
 */
class CreateDeviceTunnel extends Rpc
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
 * @method string getDriverProtocol()
 * @method $this withDriverProtocol($value)
 * @method string getDriverName()
 * @method $this withDriverName($value)
 * @method string getIsBuiltIn()
 * @method $this withIsBuiltIn($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuntime()
 * @method $this withRuntime($value)
 * @method string getUseOfficialConfig()
 * @method $this withUseOfficialConfig($value)
 * @method string getApiProduct()
 * @method string getCpuArch()
 * @method $this withCpuArch($value)
 * @method string getApiRevision()
 */
class CreateEdgeDriver extends Rpc
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
 * @method string getConfigCheckRule()
 * @method $this withConfigCheckRule($value)
 * @method string getArgument()
 * @method $this withArgument($value)
 * @method string getEdgeVersion()
 * @method $this withEdgeVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getContainerConfig()
 * @method $this withContainerConfig($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getDriverConfig()
 * @method $this withDriverConfig($value)
 * @method string getSourceConfig()
 * @method $this withSourceConfig($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateEdgeDriverVersion extends Rpc
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
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class CreateEdgeInstance extends Rpc
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
 * @method array getConfigs()
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateEdgeInstanceChannel extends Rpc
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
			if(isset($depth1Value['Format'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['Content'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateEdgeInstanceDeployment extends Rpc
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
 * @method string getSourceData()
 * @method $this withSourceData($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTopicFilter()
 * @method $this withTopicFilter($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTargetData()
 * @method $this withTargetData($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getTargetIotHubQos()
 * @method $this withTargetIotHubQos($value)
 */
class CreateEdgeInstanceMessageRouting extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getResourceVersion()
 * @method $this withResourceVersion($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateEdgeOssPreSignedAddress extends Rpc
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
 * @method string getJobDocument()
 * @method $this withJobDocument($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRolloutConfig()
 * @method $this withRolloutConfig($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getTimeoutConfig()
 * @method $this withTimeoutConfig($value)
 * @method string getTargetConfig()
 * @method $this withTargetConfig($value)
 * @method string getJobFile()
 * @method $this withJobFile($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getScheduledTime()
 * @method $this withScheduledTime($value)
 */
class CreateJob extends Rpc
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
 * @method array getDeviceInfo()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['PinCode'])){
				$this->options['query']['DeviceInfo.' . ($depth1 + 1) . '.PinCode'] = $depth1Value['PinCode'];
			}
			if(isset($depth1Value['DevEui'])){
				$this->options['query']['DeviceInfo.' . ($depth1 + 1) . '.DevEui'] = $depth1Value['DevEui'];
			}
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
 * @method string getDynamicMode()
 * @method $this withDynamicMode($value)
 * @method string getRetryCount()
 * @method $this withRetryCount($value)
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getNeedConfirm()
 * @method $this withNeedConfirm($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getNeedPush()
 * @method $this withNeedPush($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDownloadProtocol()
 * @method $this withDownloadProtocol($value)
 * @method array getTag()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method array getSrcVersion()
 * @method string getOverwriteMode()
 * @method $this withOverwriteMode($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getMaximumPerMinute()
 * @method $this withMaximumPerMinute($value)
 */
class CreateOTADynamicUpgradeJob extends Rpc
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

    /**
     * @param array $srcVersion
     *
     * @return $this
     */
	public function withSrcVersion(array $srcVersion)
	{
	    $this->data['SrcVersion'] = $srcVersion;
		foreach ($srcVersion as $i => $iValue) {
			$this->options['query']['SrcVersion.' . ($i + 1)] = $iValue;
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
 * @method string getSignMethod()
 * @method $this withSignMethod($value)
 * @method array getMultiFiles()
 * @method string getNeedToVerify()
 * @method $this withNeedToVerify($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFirmwareUrl()
 * @method $this withFirmwareUrl($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFirmwareDesc()
 * @method $this withFirmwareDesc($value)
 * @method string getModuleName()
 * @method $this withModuleName($value)
 * @method string getFirmwareSign()
 * @method $this withFirmwareSign($value)
 * @method string getFirmwareSize()
 * @method $this withFirmwareSize($value)
 * @method string getFirmwareName()
 * @method $this withFirmwareName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getSrcVersion()
 * @method $this withSrcVersion($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getUdi()
 * @method $this withUdi($value)
 * @method string getDestVersion()
 * @method $this withDestVersion($value)
 */
class CreateOTAFirmware extends Rpc
{

    /**
     * @param array $multiFiles
     *
     * @return $this
     */
	public function withMultiFiles(array $multiFiles)
	{
	    $this->data['MultiFiles'] = $multiFiles;
		foreach ($multiFiles as $depth1 => $depth1Value) {
			if(isset($depth1Value['Size'])){
				$this->options['query']['MultiFiles.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['MultiFiles.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['SignValue'])){
				$this->options['query']['MultiFiles.' . ($depth1 + 1) . '.SignValue'] = $depth1Value['SignValue'];
			}
			if(isset($depth1Value['FileMd5'])){
				$this->options['query']['MultiFiles.' . ($depth1 + 1) . '.FileMd5'] = $depth1Value['FileMd5'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['MultiFiles.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
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
 * @method string getModuleName()
 * @method $this withModuleName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateOTAModule extends Rpc
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
 * @method string getRetryCount()
 * @method $this withRetryCount($value)
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getNeedConfirm()
 * @method $this withNeedConfirm($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getNeedPush()
 * @method $this withNeedPush($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDownloadProtocol()
 * @method $this withDownloadProtocol($value)
 * @method string getTargetSelection()
 * @method $this withTargetSelection($value)
 * @method string getScheduleFinishTime()
 * @method $this withScheduleFinishTime($value)
 * @method array getTag()
 * @method string getGrayPercent()
 * @method $this withGrayPercent($value)
 * @method string getDnListFileUrl()
 * @method $this withDnListFileUrl($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method array getSrcVersion()
 * @method string getScheduleTime()
 * @method $this withScheduleTime($value)
 * @method string getOverwriteMode()
 * @method $this withOverwriteMode($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getMaximumPerMinute()
 * @method $this withMaximumPerMinute($value)
 * @method array getTargetDeviceName()
 */
class CreateOTAStaticUpgradeJob extends Rpc
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

    /**
     * @param array $srcVersion
     *
     * @return $this
     */
	public function withSrcVersion(array $srcVersion)
	{
	    $this->data['SrcVersion'] = $srcVersion;
		foreach ($srcVersion as $i => $iValue) {
			$this->options['query']['SrcVersion.' . ($i + 1)] = $iValue;
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

    /**
     * @param array $targetDeviceName
     *
     * @return $this
     */
	public function withTargetDeviceName(array $targetDeviceName)
	{
	    $this->data['TargetDeviceName'] = $targetDeviceName;
		foreach ($targetDeviceName as $i => $iValue) {
			$this->options['query']['TargetDeviceName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getNeedConfirm()
 * @method $this withNeedConfirm($value)
 * @method string getNeedPush()
 * @method $this withNeedPush($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getTag()
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getTargetDeviceName()
 */
class CreateOTAVerifyJob extends Rpc
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
     * @param array $targetDeviceName
     *
     * @return $this
     */
	public function withTargetDeviceName(array $targetDeviceName)
	{
	    $this->data['TargetDeviceName'] = $targetDeviceName;
		foreach ($targetDeviceName as $i => $iValue) {
			$this->options['query']['TargetDeviceName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCategoryKey()
 * @method $this withCategoryKey($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getValidateType()
 * @method $this withValidateType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 * @method string getPublishAuto()
 * @method $this withPublishAuto($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getId2()
 * @method $this withId2($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 */
class CreateProduct extends Rpc
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
 * @method string getCaptcha()
 * @method $this withCaptcha($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getTargetAliyunId()
 * @method $this withTargetAliyunId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 */
class CreateProductDistributeJob extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getProductTag()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
			if(isset($depth1Value['TagKey'])){
				$this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
			}
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopicShortName()
 * @method $this withTopicShortName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateProductTopic extends Rpc
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
 * @method string getSelect()
 * @method $this withSelect($value)
 * @method string getRuleDesc()
 * @method $this withRuleDesc($value)
 * @method string getShortTopic()
 * @method $this withShortTopic($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getWhere()
 * @method $this withWhere($value)
 * @method string getTopicType()
 * @method $this withTopicType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getApiRevision()
 */
class CreateRule extends Rpc
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
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getErrorActionFlag()
 * @method $this withErrorActionFlag($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class CreateRuleAction extends Rpc
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
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateRulengDistributeJob extends Rpc
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
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleDescription()
 * @method $this withRuleDescription($value)
 * @method string getRuleContent()
 * @method $this withRuleContent($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateSceneRule extends Rpc
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
 * @method string getVoice()
 * @method string getProjectCode()
 * @method string getAudioFormat()
 * @method string getIotInstanceId()
 * @method string getText()
 * @method string getSpeechType()
 * @method string getVolume()
 * @method string getBizCode()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSpeechRate()
 */
class CreateSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVoice($value)
    {
        $this->data['Voice'] = $value;
        $this->options['form_params']['Voice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFormat($value)
    {
        $this->data['AudioFormat'] = $value;
        $this->options['form_params']['AudioFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechType($value)
    {
        $this->data['SpeechType'] = $value;
        $this->options['form_params']['SpeechType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVolume($value)
    {
        $this->data['Volume'] = $value;
        $this->options['form_params']['Volume'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizCode($value)
    {
        $this->data['BizCode'] = $value;
        $this->options['form_params']['BizCode'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechRate($value)
    {
        $this->data['SpeechRate'] = $value;
        $this->options['form_params']['SpeechRate'] = $value;

        return $this;
    }
}

/**
 * @method string getProtocol()
 * @method string getIotInstanceId()
 * @method string getHost()
 * @method string getProjectId()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class CreateStudioAppDomainOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocol($value)
    {
        $this->data['Protocol'] = $value;
        $this->options['form_params']['Protocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

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
 * @method string getOtaEventFlag()
 * @method $this withOtaEventFlag($value)
 * @method string getDeviceTopoLifeCycleFlag()
 * @method $this withDeviceTopoLifeCycleFlag($value)
 * @method string getDeviceLifeCycleFlag()
 * @method $this withDeviceLifeCycleFlag($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceStatusChangeFlag()
 * @method $this withDeviceStatusChangeFlag($value)
 * @method string getOtaVersionFlag()
 * @method $this withOtaVersionFlag($value)
 * @method string getDeviceTagFlag()
 * @method $this withDeviceTagFlag($value)
 * @method array getConsumerGroupIds()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getThingHistoryFlag()
 * @method $this withThingHistoryFlag($value)
 * @method string getFoundDeviceListFlag()
 * @method $this withFoundDeviceListFlag($value)
 * @method string getOtaJobFlag()
 * @method $this withOtaJobFlag($value)
 * @method string getApiProduct()
 * @method string getDeviceDataFlag()
 * @method $this withDeviceDataFlag($value)
 * @method string getApiRevision()
 * @method string getMnsConfiguration()
 * @method $this withMnsConfiguration($value)
 */
class CreateSubscribeRelation extends Rpc
{

    /**
     * @param array $consumerGroupIds
     *
     * @return $this
     */
	public function withConsumerGroupIds(array $consumerGroupIds)
	{
	    $this->data['ConsumerGroupIds'] = $consumerGroupIds;
		foreach ($consumerGroupIds as $i => $iValue) {
			$this->options['query']['ConsumerGroupIds.' . ($i + 1)] = $iValue;
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFunctionBlockName()
 * @method $this withFunctionBlockName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getThingModelJson()
 * @method $this withThingModelJson($value)
 * @method string getApiRevision()
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class CreateThingModel extends Rpc
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
 * @method string getScriptType()
 * @method $this withScriptType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getScriptContent()
 * @method $this withScriptContent($value)
 */
class CreateThingScript extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDstTopic()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getAuthConfig()
 * @method $this withAuthConfig($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteClientIds extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteConsumerGroup extends Rpc
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
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteConsumerGroupSubscribeRelation extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteDevice extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteDeviceDistributeJob extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteDeviceDynamicGroup extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteDeviceFile extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteDeviceGroup extends Rpc
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
 * @method string getPropKey()
 * @method $this withPropKey($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DeleteDeviceProp extends Rpc
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
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceSpeechList()
 */
class DeleteDeviceSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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

    /**
     * @param array $deviceSpeechList
     *
     * @return $this
     */
	public function withDeviceSpeechList(array $deviceSpeechList)
	{
	    $this->data['DeviceSpeechList'] = $deviceSpeechList;
		foreach ($deviceSpeechList as $depth1 => $depth1Value) {
			if(isset($depth1Value['BizCode'])){
				$this->options['form_params']['DeviceSpeechList.' . ($depth1 + 1) . '.BizCode'] = $depth1Value['BizCode'];
			}
			if(isset($depth1Value['AudioFormat'])){
				$this->options['form_params']['DeviceSpeechList.' . ($depth1 + 1) . '.AudioFormat'] = $depth1Value['AudioFormat'];
			}
		}

		return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteDeviceTunnel extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteEdgeDriver extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteEdgeDriverVersion extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteEdgeInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteEdgeInstanceMessageRouting extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteJob extends Rpc
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
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteOTAFirmware extends Rpc
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
 * @method string getAuthConfig()
 * @method $this withAuthConfig($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getModuleName()
 * @method $this withModuleName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteOTAModule extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteProduct extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getProductTagKey()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteProductTopic extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteRule extends Rpc
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
 * @method string getActionId()
 * @method $this withActionId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteRuleAction extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteSceneRule extends Rpc
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
 * @method array getSpeechCodeList()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param array $speechCodeList
     *
     * @return $this
     */
	public function withSpeechCodeList(array $speechCodeList)
	{
	    $this->data['SpeechCodeList'] = $speechCodeList;
		foreach ($speechCodeList as $i => $iValue) {
			$this->options['form_params']['SpeechCodeList.' . ($i + 1)] = $iValue;
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
 * @method string getDomainId()
 * @method string getIotInstanceId()
 * @method string getProjectId()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteStudioAppDomainOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainId($value)
    {
        $this->data['DomainId'] = $value;
        $this->options['form_params']['DomainId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteSubscribeRelation extends Rpc
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
 * @method string getIsClearAllFunction()
 * @method $this withIsClearAllFunction($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getPropertyIdentifier()
 * @method string getDTModelId()
 * @method $this withDTModelId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getServiceIdentifier()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getEventIdentifier()
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class DeleteThingModel extends Rpc
{

    /**
     * @param array $propertyIdentifier
     *
     * @return $this
     */
	public function withPropertyIdentifier(array $propertyIdentifier)
	{
	    $this->data['PropertyIdentifier'] = $propertyIdentifier;
		foreach ($propertyIdentifier as $i => $iValue) {
			$this->options['query']['PropertyIdentifier.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $serviceIdentifier
     *
     * @return $this
     */
	public function withServiceIdentifier(array $serviceIdentifier)
	{
	    $this->data['ServiceIdentifier'] = $serviceIdentifier;
		foreach ($serviceIdentifier as $i => $iValue) {
			$this->options['query']['ServiceIdentifier.' . ($i + 1)] = $iValue;
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

    /**
     * @param array $eventIdentifier
     *
     * @return $this
     */
	public function withEventIdentifier(array $eventIdentifier)
	{
	    $this->data['EventIdentifier'] = $eventIdentifier;
		foreach ($eventIdentifier as $i => $iValue) {
			$this->options['query']['EventIdentifier.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getDstTopic()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DisableDeviceTunnel extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DisableDeviceTunnelShare extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DisableSceneRule extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class DisableThing extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class EnableDeviceTunnel extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class EnableDeviceTunnelShare extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class EnableSceneRule extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class EnableThing extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GenerateDeviceNameListURL extends Rpc
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
 * @method string getFileSuffix()
 * @method $this withFileSuffix($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getBizCode()
 * @method $this withBizCode($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GenerateFileUploadURL extends Rpc
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
 * @method string getFileSuffix()
 * @method $this withFileSuffix($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GenerateOTAUploadURL extends Rpc
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
 * @method string getApiSrn()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetDataAPIServiceDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiSrn($value)
    {
        $this->data['ApiSrn'] = $value;
        $this->options['form_params']['ApiSrn'] = $value;

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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetDeviceShadow extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetDeviceStatus extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetDeviceTunnelShareStatus extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetDeviceTunnelStatus extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetEdgeDriverVersion extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetEdgeInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDeploymentId()
 * @method $this withDeploymentId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetEdgeInstanceDeployment extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetEdgeInstanceMessageRouting extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetGatewayBySubDevice extends Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetLoraNodesTask extends Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetNodesAddingTask extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class GetRule extends Rpc
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
 * @method string getActionId()
 * @method $this withActionId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetRuleAction extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class GetSceneRule extends Rpc
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
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetSpeechDeviceDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetSpeechVoice extends Rpc
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
 * @method string getProjectId()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetStudioAppTokenOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

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
 * @method string getSimple()
 * @method $this withSimple($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getDTModelId()
 * @method $this withDTModelId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class GetThingModelTsl extends Rpc
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
 * @method string getSimple()
 * @method $this withSimple($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class GetThingModelTslPublished extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetThingScript extends Rpc
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
 * @method string getCategoryKey()
 * @method $this withCategoryKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class GetThingTemplate extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class GetThingTopo extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFunctionBlockName()
 * @method $this withFunctionBlockName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTslUrl()
 * @method $this withTslUrl($value)
 * @method string getTslStr()
 * @method $this withTslStr($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class ImportThingModelTsl extends Rpc
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
 * @method array getParam()
 * @method string getIotInstanceId()
 * @method string getApiSrn()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['ParamType'])){
				$this->options['form_params']['Param.' . ($depth1 + 1) . '.ParamType'] = $depth1Value['ParamType'];
			}
			foreach ($depth1Value['ListParamValue'] as $i => $iValue) {
				$this->options['form_params']['Param.' . ($depth1 + 1) . '.ListParamValue.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ListParamType'])){
				$this->options['form_params']['Param.' . ($depth1 + 1) . '.ListParamType'] = $depth1Value['ListParamType'];
			}
			if(isset($depth1Value['ParamName'])){
				$this->options['form_params']['Param.' . ($depth1 + 1) . '.ParamName'] = $depth1Value['ParamName'];
			}
			if(isset($depth1Value['ParamValue'])){
				$this->options['form_params']['Param.' . ($depth1 + 1) . '.ParamValue'] = $depth1Value['ParamValue'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiSrn($value)
    {
        $this->data['ApiSrn'] = $value;
        $this->options['form_params']['ApiSrn'] = $value;

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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class InvokeThingService extends Rpc
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
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 */
class InvokeThingsService extends Rpc
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
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsoId()
 * @method $this withIsoId($value)
 * @method string getApiPath()
 * @method $this withApiPath($value)
 * @method array getCondition()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListAnalyticsData extends Rpc
{

    /**
     * @param array $condition
     *
     * @return $this
     */
	public function withCondition(array $condition)
	{
	    $this->data['Condition'] = $condition;
		foreach ($condition as $depth1 => $depth1Value) {
			if(isset($depth1Value['FieldName'])){
				$this->options['query']['Condition.' . ($depth1 + 1) . '.FieldName'] = $depth1Value['FieldName'];
			}
			if(isset($depth1Value['Operate'])){
				$this->options['query']['Condition.' . ($depth1 + 1) . '.Operate'] = $depth1Value['Operate'];
			}
			if(isset($depth1Value['BetweenStart'])){
				$this->options['query']['Condition.' . ($depth1 + 1) . '.BetweenStart'] = $depth1Value['BetweenStart'];
			}
			if(isset($depth1Value['BetweenEnd'])){
				$this->options['query']['Condition.' . ($depth1 + 1) . '.BetweenEnd'] = $depth1Value['BetweenEnd'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Condition.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
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
 * @method string getJobId()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDeviceDistributeJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 */
class ListDistributedDevice extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceInstanceId()
 * @method $this withSourceInstanceId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getTargetInstanceId()
 * @method $this withTargetInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getTargetUid()
 * @method $this withTargetUid($value)
 */
class ListDistributedProduct extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListJob extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDestVersion()
 * @method $this withDestVersion($value)
 */
class ListOTAFirmware extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class ListOTAJobByDevice extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListOTAJobByFirmware extends Rpc
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
 * @method string getAuthConfig()
 * @method $this withAuthConfig($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListOTAModuleByProduct extends Rpc
{

    /** @var string */
    public $method = 'GET';

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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class ListOTAModuleVersionsByDevice extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getDeviceNames()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListOTATaskByJob extends Rpc
{

    /**
     * @param array $deviceNames
     *
     * @return $this
     */
	public function withDeviceNames(array $deviceNames)
	{
	    $this->data['DeviceNames'] = $deviceNames;
		foreach ($deviceNames as $i => $iValue) {
			$this->options['query']['DeviceNames.' . ($i + 1)] = $iValue;
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
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getModuleName()
 * @method $this withModuleName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class ListOTAUnfinishedTaskByDevice extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getProductTag()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
			if(isset($depth1Value['TagKey'])){
				$this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
			}
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListProductTags extends Rpc
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
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListRule extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ListRuleActions extends Rpc
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
 * @method string getContext()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getLpInstanceId()
 * @method $this withLpInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListSourceReplica extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContext($value)
    {
        $this->data['Context'] = $value;
        $this->options['form_params']['Context'] = $value;

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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDevice()
 * @method $this withDevice($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTask extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getDevice()
 * @method $this withDevice($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTaskByPage extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListThingModelVersion extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ListThingTemplates extends Rpc
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
 * @method string getGwProductKey()
 * @method $this withGwProductKey($value)
 * @method string getDeviceListStr()
 * @method $this withDeviceListStr($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwIotId()
 * @method $this withGwIotId($value)
 * @method string getGwDeviceName()
 * @method $this withGwDeviceName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class NotifyAddThingTopo extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenIotService extends Rpc
{
}

/**
 * @method string getProjectCode()
 * @method string getTemplateBizCode()
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getParamsJsonString()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 */
class PrintByTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateBizCode($value)
    {
        $this->data['TemplateBizCode'] = $value;
        $this->options['form_params']['TemplateBizCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withParamsJsonString($value)
    {
        $this->data['ParamsJsonString'] = $value;
        $this->options['form_params']['ParamsJsonString'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method array getUserProp()
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getCorrelationData()
 * @method $this withCorrelationData($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getResponseTopic()
 * @method $this withResponseTopic($value)
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class Pub extends Rpc
{

    /**
     * @param array $userProp
     *
     * @return $this
     */
	public function withUserProp(array $userProp)
	{
	    $this->data['UserProp'] = $userProp;
		foreach ($userProp as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['UserProp.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['UserProp.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getMessageContent()
 * @method $this withMessageContent($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopicFullName()
 * @method $this withTopicFullName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class PubBroadcast extends Rpc
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
 * @method string getDescription()
 * @method string getIotInstanceId()
 * @method string getProjectId()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class PublishStudioApp extends Rpc
{

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
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 */
class PublishThingModel extends Rpc
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
 * @method string getProjectCode()
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getPushMode()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getSpeechCodeList()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 */
class PushSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushMode($value)
    {
        $this->data['PushMode'] = $value;
        $this->options['form_params']['PushMode'] = $value;

        return $this;
    }

    /**
     * @param array $speechCodeList
     *
     * @return $this
     */
	public function withSpeechCodeList(array $speechCodeList)
	{
	    $this->data['SpeechCodeList'] = $speechCodeList;
		foreach ($speechCodeList as $i => $iValue) {
			$this->options['form_params']['SpeechCodeList.' . ($i + 1)] = $iValue;
		}

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
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method array getTagList()
 * @method array getProductKeyList()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getCategoryKeyList()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['TagName'])){
				$this->options['query']['TagList.' . ($depth1 + 1) . '.TagName'] = $depth1Value['TagName'];
			}
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['TagList.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryBatchRegisterDeviceStatus extends Rpc
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
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryCertUrlByApplyId extends Rpc
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
 * @method string getAuthConfig()
 * @method $this withAuthConfig($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryClientIds extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryConsumerGroupByGroupId extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuzzy()
 * @method $this withFuzzy($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryConsumerGroupList extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryConsumerGroupStatus extends Rpc
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
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class QueryDetailSceneRuleLog extends Rpc
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDevice extends Rpc
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
 * @method string getSQL()
 * @method $this withSQL($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceBySQL extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getBizTenantId()
 * @method $this withBizTenantId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryDeviceByStatus extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
			if(isset($depth1Value['TagKey'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
			}
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceCert extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getIdentifier()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceDetail extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceDistributeDetail extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceDistributeJob extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class QueryDeviceEventData extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceFile extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceFileList extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceGroupByDevice extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
			if(isset($depth1Value['TagKey'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
			}
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceGroupInfo extends Rpc
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
 * @method array getGroupTypes()
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceGroupList extends Rpc
{

    /**
     * @param array $groupTypes
     *
     * @return $this
     */
	public function withGroupTypes(array $groupTypes)
	{
	    $this->data['GroupTypes'] = $groupTypes;
		foreach ($groupTypes as $i => $iValue) {
			$this->options['query']['GroupTypes.' . ($i + 1)] = $iValue;
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
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceGroupTagList extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceInfo extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceListByDeviceGroup extends Rpc
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
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceOriginalEventData extends Rpc
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
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceOriginalPropertyData extends Rpc
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
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAsc()
 * @method $this withAsc($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceOriginalPropertyStatus extends Rpc
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
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceOriginalServiceData extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceProp extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDevicePropertyData extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class QueryDevicePropertyStatus extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class QueryDeviceServiceData extends Rpc
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
 * @method string getPageId()
 * @method string getIotId()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceStatistics extends Rpc
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
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryDeviceTunnel extends Rpc
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
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryDynamicGroupDevices extends Rpc
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
 * @method string getDriverName()
 * @method $this withDriverName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeDriver extends Rpc
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
 * @method string getVersionState()
 * @method $this withVersionState($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeDriverVersion extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class QueryEdgeInstance extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceChannel extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceDevice extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class QueryEdgeInstanceDeviceByDriver extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceDriver extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceGateway extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceHistoricDeployment extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceMessageRouting extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryEdgeInstanceSceneRule extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryJob extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryJobStatistics extends Rpc
{

    /** @var string */
    public $method = 'GET';

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
class QueryLoRaJoinPermissions extends Rpc
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
 * @method string getUniMsgId()
 * @method $this withUniMsgId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryMessageInfo extends Rpc
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
 * @method string getFirmwareId()
 * @method $this withFirmwareId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryOTAFirmware extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryOTAJob extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplyId()
 * @method $this withApplyId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryPageByApplyId extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryProduct extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryProductCertInfo extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryProductList extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryProductTopic extends Rpc
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
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySceneRule extends Rpc
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
 * @method string getFuzzyGroupName()
 * @method $this withFuzzyGroupName($value)
 * @method string getProjectCode()
 * @method $this withProjectCode($value)
 * @method string getPageId()
 * @method $this withPageId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySolutionDeviceGroupPage extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSpeechCode()
 */
class QuerySpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechCode($value)
    {
        $this->data['SpeechCode'] = $value;
        $this->options['form_params']['SpeechCode'] = $value;

        return $this;
    }
}

/**
 * @method string getAvailableSpaceScope()
 * @method string getProjectCode()
 * @method string getPageId()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getAvailableSpace()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 */
class QuerySpeechDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAvailableSpaceScope($value)
    {
        $this->data['AvailableSpaceScope'] = $value;
        $this->options['form_params']['AvailableSpaceScope'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withAvailableSpace($value)
    {
        $this->data['AvailableSpace'] = $value;
        $this->options['form_params']['AvailableSpace'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectCode()
 * @method string getPageId()
 * @method string getAudioFormat()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySpeechList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFormat($value)
    {
        $this->data['AudioFormat'] = $value;
        $this->options['form_params']['AudioFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
 * @method array getStatusList()
 * @method string getProjectCode()
 * @method string getPageId()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getPushMode()
 * @method string getApiProduct()
 * @method string getJobCode()
 * @method $this withJobCode($value)
 * @method string getApiRevision()
 */
class QuerySpeechPushJob extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['form_params']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withPushMode($value)
    {
        $this->data['PushMode'] = $value;
        $this->options['form_params']['PushMode'] = $value;

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
 * @method string getPageId()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getApiProduct()
 * @method string getJobCode()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method string getStatus()
 */
class QuerySpeechPushJobDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withJobCode($value)
    {
        $this->data['JobCode'] = $value;
        $this->options['form_params']['JobCode'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getPageId()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getApiProduct()
 * @method string getJobCode()
 * @method string getApiRevision()
 */
class QuerySpeechPushJobSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withJobCode($value)
    {
        $this->data['JobCode'] = $value;
        $this->options['form_params']['JobCode'] = $value;

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
 * @method string getProjectId()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryStudioAppDomainListOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

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
 * @method string getPageSize()
 * @method string getProjectId()
 * @method array getTypes()
 * @method string getFuzzyName()
 * @method string getPageNo()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryStudioAppList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param array $types
     *
     * @return $this
     */
	public function withTypes(array $types)
	{
	    $this->data['Types'] = $types;
		foreach ($types as $i => $iValue) {
			$this->options['form_params']['Types.' . ($i + 1)] = $iValue;
		}

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
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
 * @method string getPageSize()
 * @method string getProjectId()
 * @method string getIsRelease()
 * @method string getPageNo()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryStudioAppPageListOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsRelease($value)
    {
        $this->data['IsRelease'] = $value;
        $this->options['form_params']['IsRelease'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

        return $this;
    }

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
 * @method string getPageSize()
 * @method string getPageNo()
 * @method string getApiProduct()
 * @method string getName()
 * @method string getApiRevision()
 */
class QueryStudioProjectList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

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
 * @method string getType()
 * @method $this withType($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySubscribeRelation extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QuerySummarySceneRuleLog extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySuperDeviceGroup extends Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QueryTask extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDTModelId()
 * @method $this withDTModelId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class QueryThingModel extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class QueryThingModelExtendConfig extends Rpc
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
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class QueryThingModelExtendConfigPublished extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getModelVersion()
 * @method $this withModelVersion($value)
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class QueryThingModelPublished extends Rpc
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
 * @method string getApiProduct()
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getApiRevision()
 */
class QueryTopicReverseRouteTable extends Rpc
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
 * @method string getApiProduct()
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getApiRevision()
 */
class QueryTopicRouteTable extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RefreshDeviceTunnelSharePassword extends Rpc
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
 * @method string getProjectId()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class RefreshStudioAppTokenOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

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
 * @method string getLoraNodeType()
 * @method $this withLoraNodeType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getNickname()
 * @method $this withNickname($value)
 * @method string getPinCode()
 * @method $this withPinCode($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDevEui()
 * @method $this withDevEui($value)
 * @method string getJoinEui()
 * @method $this withJoinEui($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class RegisterDevice extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ReleaseEdgeDriverVersion extends Rpc
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
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getCategoryKey()
 * @method $this withCategoryKey($value)
 * @method string getTemplateIdentifier()
 * @method $this withTemplateIdentifier($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getCategoryName()
 * @method $this withCategoryName($value)
 * @method string getBizTenantId()
 * @method $this withBizTenantId($value)
 */
class ReleaseProduct extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RemoveThingTopo extends Rpc
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
 * @method string getNewGatewayId()
 * @method $this withNewGatewayId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCurrentGatewayId()
 * @method $this withCurrentGatewayId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ReplaceEdgeInstanceGateway extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class RerunJob extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ResetConsumerGroupPosition extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class ResetThing extends Rpc
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
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRequestBase64Byte()
 * @method $this withRequestBase64Byte($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class RRpc extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getProps()
 * @method $this withProps($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class SaveDeviceProp extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getVersions()
 * @method $this withVersions($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceDesiredProperty extends Rpc
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
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTagString()
 * @method $this withTagString($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SetDeviceGroupTags extends Rpc
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
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceProperty extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method array getDeviceName()
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDevicesProperty extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['Format'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['Content'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getIssueModel()
 * @method $this withIssueModel($value)
 */
class SetProductCertInfo extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getStatus()
 */
class SetStudioProjectCooperation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method string getProjectId()
 * @method string getAuthMode()
 * @method string getAppId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class SetupStudioAppAuthModeOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuthMode($value)
    {
        $this->data['AuthMode'] = $value;
        $this->options['form_params']['AuthMode'] = $value;

        return $this;
    }

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
 * @method string getSpeechId()
 * @method string getAudioFormat()
 * @method string getIotId()
 * @method array getCombinationList()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 */
class SpeechByCombination extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechId($value)
    {
        $this->data['SpeechId'] = $value;
        $this->options['form_params']['SpeechId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFormat($value)
    {
        $this->data['AudioFormat'] = $value;
        $this->options['form_params']['AudioFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param array $combinationList
     *
     * @return $this
     */
	public function withCombinationList(array $combinationList)
	{
	    $this->data['CombinationList'] = $combinationList;
		foreach ($combinationList as $i => $iValue) {
			$this->options['form_params']['CombinationList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class StartRule extends Rpc
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
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class StopRule extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method array getTopic()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class SubscribeTopic extends Rpc
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
     * @param array $topic
     *
     * @return $this
     */
	public function withTopic(array $topic)
	{
	    $this->data['Topic'] = $topic;
		foreach ($topic as $i => $iValue) {
			$this->options['query']['Topic.' . ($i + 1)] = $iValue;
		}

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
 * @method string getSpeechId()
 * @method string getAudioFormat()
 * @method string getIotId()
 * @method array getCombinationList()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 */
class SyncSpeechByCombination extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechId($value)
    {
        $this->data['SpeechId'] = $value;
        $this->options['form_params']['SpeechId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFormat($value)
    {
        $this->data['AudioFormat'] = $value;
        $this->options['form_params']['AudioFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotId($value)
    {
        $this->data['IotId'] = $value;
        $this->options['form_params']['IotId'] = $value;

        return $this;
    }

    /**
     * @param array $combinationList
     *
     * @return $this
     */
	public function withCombinationList(array $combinationList)
	{
	    $this->data['CombinationList'] = $combinationList;
		foreach ($combinationList as $i => $iValue) {
			$this->options['form_params']['CombinationList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

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
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getVoice()
 * @method string getProjectCode()
 * @method string getAudioFormat()
 * @method string getIotInstanceId()
 * @method string getText()
 * @method string getSpeechType()
 * @method string getVolume()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSpeechRate()
 */
class TestSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVoice($value)
    {
        $this->data['Voice'] = $value;
        $this->options['form_params']['Voice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAudioFormat($value)
    {
        $this->data['AudioFormat'] = $value;
        $this->options['form_params']['AudioFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechType($value)
    {
        $this->data['SpeechType'] = $value;
        $this->options['form_params']['SpeechType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVolume($value)
    {
        $this->data['Volume'] = $value;
        $this->options['form_params']['Volume'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechRate($value)
    {
        $this->data['SpeechRate'] = $value;
        $this->options['form_params']['SpeechRate'] = $value;

        return $this;
    }
}

/**
 * @method string getAuthConfig()
 * @method $this withAuthConfig($value)
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class TransformClientId extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class TriggerSceneRule extends Rpc
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
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UnbindApplicationFromEdgeInstance extends Rpc
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
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UnbindDriverFromEdgeInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UnbindRoleFromEdgeInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UnbindSceneRuleFromEdgeInstance extends Rpc
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNewGroupName()
 * @method $this withNewGroupName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateConsumerGroup extends Rpc
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
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateDeviceGroup extends Rpc
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
 * @method string getShadowMessage()
 * @method $this withShadowMessage($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getDeltaUpdate()
 * @method $this withDeltaUpdate($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class UpdateDeviceShadow extends Rpc
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
 * @method string getConfigCheckRule()
 * @method $this withConfigCheckRule($value)
 * @method string getArgument()
 * @method $this withArgument($value)
 * @method string getEdgeVersion()
 * @method $this withEdgeVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getContainerConfig()
 * @method $this withContainerConfig($value)
 * @method string getDriverVersion()
 * @method $this withDriverVersion($value)
 * @method string getDriverConfig()
 * @method $this withDriverConfig($value)
 * @method string getSourceConfig()
 * @method $this withSourceConfig($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateEdgeDriverVersion extends Rpc
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
 * @method string getBizEnable()
 * @method $this withBizEnable($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 */
class UpdateEdgeInstance extends Rpc
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
 * @method array getConfigs()
 * @method string getDriverId()
 * @method $this withDriverId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getChannelName()
 * @method $this withChannelName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class UpdateEdgeInstanceChannel extends Rpc
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
			if(isset($depth1Value['Format'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['Content'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Configs.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
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
 * @method string getSourceData()
 * @method $this withSourceData($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTopicFilter()
 * @method $this withTopicFilter($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRouteId()
 * @method $this withRouteId($value)
 * @method string getTargetData()
 * @method $this withTargetData($value)
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getApiRevision()
 * @method string getTargetIotHubQos()
 * @method $this withTargetIotHubQos($value)
 */
class UpdateEdgeInstanceMessageRouting extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRolloutConfig()
 * @method $this withRolloutConfig($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTimeoutConfig()
 * @method $this withTimeoutConfig($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateJob extends Rpc
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
 * @method string getModuleName()
 * @method $this withModuleName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateOTAModule extends Rpc
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
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateProduct extends Rpc
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
 * @method string getPropertyTimestampFilter()
 * @method $this withPropertyTimestampFilter($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getPropertyValueFilter()
 * @method $this withPropertyValueFilter($value)
 */
class UpdateProductFilterConfig extends Rpc
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
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method array getProductTag()
 * @method string getApiProduct()
 * @method string getApiRevision()
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
			if(isset($depth1Value['TagValue'])){
				$this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
			}
			if(isset($depth1Value['TagKey'])){
				$this->options['query']['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
			}
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
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getTopicShortName()
 * @method $this withTopicShortName($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateProductTopic extends Rpc
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
 * @method string getApiProduct()
 * @method string getName()
 * @method $this withName($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateRule extends Rpc
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
 * @method string getConfiguration()
 * @method $this withConfiguration($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getActionId()
 * @method $this withActionId($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateRuleAction extends Rpc
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
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getRuleDescription()
 * @method $this withRuleDescription($value)
 * @method string getRuleContent()
 * @method $this withRuleContent($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateSceneRule extends Rpc
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
 * @method string getVoice()
 * @method string getProjectCode()
 * @method string getIotInstanceId()
 * @method string getVolume()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getSpeechRate()
 * @method string getSpeechCode()
 */
class UpdateSpeech extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVoice($value)
    {
        $this->data['Voice'] = $value;
        $this->options['form_params']['Voice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectCode($value)
    {
        $this->data['ProjectCode'] = $value;
        $this->options['form_params']['ProjectCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIotInstanceId($value)
    {
        $this->data['IotInstanceId'] = $value;
        $this->options['form_params']['IotInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVolume($value)
    {
        $this->data['Volume'] = $value;
        $this->options['form_params']['Volume'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechRate($value)
    {
        $this->data['SpeechRate'] = $value;
        $this->options['form_params']['SpeechRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpeechCode($value)
    {
        $this->data['SpeechCode'] = $value;
        $this->options['form_params']['SpeechCode'] = $value;

        return $this;
    }
}

/**
 * @method string getOtaEventFlag()
 * @method $this withOtaEventFlag($value)
 * @method string getDeviceTopoLifeCycleFlag()
 * @method $this withDeviceTopoLifeCycleFlag($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDeviceLifeCycleFlag()
 * @method $this withDeviceLifeCycleFlag($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceStatusChangeFlag()
 * @method $this withDeviceStatusChangeFlag($value)
 * @method string getOtaVersionFlag()
 * @method $this withOtaVersionFlag($value)
 * @method string getDeviceTagFlag()
 * @method $this withDeviceTagFlag($value)
 * @method array getConsumerGroupIds()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getThingHistoryFlag()
 * @method $this withThingHistoryFlag($value)
 * @method string getFoundDeviceListFlag()
 * @method $this withFoundDeviceListFlag($value)
 * @method string getOtaJobFlag()
 * @method $this withOtaJobFlag($value)
 * @method string getApiProduct()
 * @method string getDeviceDataFlag()
 * @method $this withDeviceDataFlag($value)
 * @method string getApiRevision()
 * @method string getMnsConfiguration()
 * @method $this withMnsConfiguration($value)
 */
class UpdateSubscribeRelation extends Rpc
{

    /**
     * @param array $consumerGroupIds
     *
     * @return $this
     */
	public function withConsumerGroupIds(array $consumerGroupIds)
	{
	    $this->data['ConsumerGroupIds'] = $consumerGroupIds;
		foreach ($consumerGroupIds as $i => $iValue) {
			$this->options['query']['ConsumerGroupIds.' . ($i + 1)] = $iValue;
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
 * @method string getRealTenantId()
 * @method $this withRealTenantId($value)
 * @method string getRealTripartiteKey()
 * @method $this withRealTripartiteKey($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getFunctionBlockName()
 * @method $this withFunctionBlockName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getThingModelJson()
 * @method $this withThingModelJson($value)
 * @method string getApiRevision()
 * @method string getFunctionBlockId()
 * @method $this withFunctionBlockId($value)
 */
class UpdateThingModel extends Rpc
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
 * @method string getValidateType()
 * @method $this withValidateType($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class UpdateThingModelValidationConfig extends Rpc
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
 * @method string getScriptType()
 * @method $this withScriptType($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getScriptContent()
 * @method $this withScriptContent($value)
 */
class UpdateThingScript extends Rpc
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
