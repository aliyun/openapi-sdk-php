<?php

namespace AlibabaCloud\Vs\V20181212;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDevice addDevice(array $options = [])
 * @method AddRenderingDeviceInternetPorts addRenderingDeviceInternetPorts(array $options = [])
 * @method AddVsPullStreamInfoConfig addVsPullStreamInfoConfig(array $options = [])
 * @method BatchBindDirectories batchBindDirectories(array $options = [])
 * @method BatchBindParentPlatformDevices batchBindParentPlatformDevices(array $options = [])
 * @method BatchBindPurchasedDevices batchBindPurchasedDevices(array $options = [])
 * @method BatchBindTemplate batchBindTemplate(array $options = [])
 * @method BatchBindTemplates batchBindTemplates(array $options = [])
 * @method BatchDeleteDevices batchDeleteDevices(array $options = [])
 * @method BatchDeleteVsDomainConfigs batchDeleteVsDomainConfigs(array $options = [])
 * @method BatchForbidVsStream batchForbidVsStream(array $options = [])
 * @method BatchResumeVsStream batchResumeVsStream(array $options = [])
 * @method BatchSetVsDomainConfigs batchSetVsDomainConfigs(array $options = [])
 * @method BatchStartDevices batchStartDevices(array $options = [])
 * @method BatchStartStreams batchStartStreams(array $options = [])
 * @method BatchStopDevices batchStopDevices(array $options = [])
 * @method BatchStopStreams batchStopStreams(array $options = [])
 * @method BatchUnbindDirectories batchUnbindDirectories(array $options = [])
 * @method BatchUnbindParentPlatformDevices batchUnbindParentPlatformDevices(array $options = [])
 * @method BatchUnbindPurchasedDevices batchUnbindPurchasedDevices(array $options = [])
 * @method BatchUnbindTemplate batchUnbindTemplate(array $options = [])
 * @method BatchUnbindTemplates batchUnbindTemplates(array $options = [])
 * @method BindDirectory bindDirectory(array $options = [])
 * @method BindParentPlatformDevice bindParentPlatformDevice(array $options = [])
 * @method BindPurchasedDevice bindPurchasedDevice(array $options = [])
 * @method BindTemplate bindTemplate(array $options = [])
 * @method ContinuousAdjust continuousAdjust(array $options = [])
 * @method ContinuousMove continuousMove(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateDevice createDevice(array $options = [])
 * @method CreateDeviceAlarm createDeviceAlarm(array $options = [])
 * @method CreateDeviceSnapshot createDeviceSnapshot(array $options = [])
 * @method CreateDirectory createDirectory(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method CreateParentPlatform createParentPlatform(array $options = [])
 * @method CreateRenderingDevice createRenderingDevice(array $options = [])
 * @method CreateStreamSnapshot createStreamSnapshot(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteBucket deleteBucket(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteDirectory deleteDirectory(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method DeleteParentPlatform deleteParentPlatform(array $options = [])
 * @method DeletePreset deletePreset(array $options = [])
 * @method DeleteRenderingDeviceInternetPorts deleteRenderingDeviceInternetPorts(array $options = [])
 * @method DeleteRenderingDevices deleteRenderingDevices(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteVsPullStreamInfoConfig deleteVsPullStreamInfoConfig(array $options = [])
 * @method DeleteVsStreamsNotifyUrlConfig deleteVsStreamsNotifyUrlConfig(array $options = [])
 * @method DescribeAccountStat describeAccountStat(array $options = [])
 * @method DescribeCluster describeCluster(array $options = [])
 * @method DescribeClusterDevices describeClusterDevices(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeDevice describeDevice(array $options = [])
 * @method DescribeDeviceChannels describeDeviceChannels(array $options = [])
 * @method DescribeDeviceGateway describeDeviceGateway(array $options = [])
 * @method DescribeDevices describeDevices(array $options = [])
 * @method DescribeDeviceURL describeDeviceURL(array $options = [])
 * @method DescribeDirectories describeDirectories(array $options = [])
 * @method DescribeDirectory describeDirectory(array $options = [])
 * @method DescribeGroup describeGroup(array $options = [])
 * @method DescribeGroups describeGroups(array $options = [])
 * @method DescribeNodeDevicesInfo describeNodeDevicesInfo(array $options = [])
 * @method DescribeParentPlatform describeParentPlatform(array $options = [])
 * @method DescribeParentPlatformDevices describeParentPlatformDevices(array $options = [])
 * @method DescribeParentPlatforms describeParentPlatforms(array $options = [])
 * @method DescribePresets describePresets(array $options = [])
 * @method DescribePurchasedDevice describePurchasedDevice(array $options = [])
 * @method DescribePurchasedDevices describePurchasedDevices(array $options = [])
 * @method DescribeRecords describeRecords(array $options = [])
 * @method DescribeRenderingDevices describeRenderingDevices(array $options = [])
 * @method DescribeStream describeStream(array $options = [])
 * @method DescribeStreams describeStreams(array $options = [])
 * @method DescribeStreamURL describeStreamURL(array $options = [])
 * @method DescribeStreamVodList describeStreamVodList(array $options = [])
 * @method DescribeTemplate describeTemplate(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method DescribeVodStreamURL describeVodStreamURL(array $options = [])
 * @method DescribeVsCertificateDetail describeVsCertificateDetail(array $options = [])
 * @method DescribeVsCertificateList describeVsCertificateList(array $options = [])
 * @method DescribeVsDomainBpsData describeVsDomainBpsData(array $options = [])
 * @method DescribeVsDomainCertificateInfo describeVsDomainCertificateInfo(array $options = [])
 * @method DescribeVsDomainConfigs describeVsDomainConfigs(array $options = [])
 * @method DescribeVsDomainDetail describeVsDomainDetail(array $options = [])
 * @method DescribeVsDomainPvData describeVsDomainPvData(array $options = [])
 * @method DescribeVsDomainPvUvData describeVsDomainPvUvData(array $options = [])
 * @method DescribeVsDomainRecordData describeVsDomainRecordData(array $options = [])
 * @method DescribeVsDomainRegionData describeVsDomainRegionData(array $options = [])
 * @method DescribeVsDomainReqBpsData describeVsDomainReqBpsData(array $options = [])
 * @method DescribeVsDomainReqTrafficData describeVsDomainReqTrafficData(array $options = [])
 * @method DescribeVsDomainSnapshotData describeVsDomainSnapshotData(array $options = [])
 * @method DescribeVsDomainTrafficData describeVsDomainTrafficData(array $options = [])
 * @method DescribeVsDomainUvData describeVsDomainUvData(array $options = [])
 * @method DescribeVsPullStreamInfoConfig describeVsPullStreamInfoConfig(array $options = [])
 * @method DescribeVsStorageTrafficUsageData describeVsStorageTrafficUsageData(array $options = [])
 * @method DescribeVsStorageUsageData describeVsStorageUsageData(array $options = [])
 * @method DescribeVsStreamsNotifyUrlConfig describeVsStreamsNotifyUrlConfig(array $options = [])
 * @method DescribeVsStreamsOnlineList describeVsStreamsOnlineList(array $options = [])
 * @method DescribeVsStreamsPublishList describeVsStreamsPublishList(array $options = [])
 * @method DescribeVsTopDomainsByFlow describeVsTopDomainsByFlow(array $options = [])
 * @method DescribeVsUpPeakPublishStreamData describeVsUpPeakPublishStreamData(array $options = [])
 * @method DescribeVsUserResourcePackage describeVsUserResourcePackage(array $options = [])
 * @method ForbidVsStream forbidVsStream(array $options = [])
 * @method GetBucketInfo getBucketInfo(array $options = [])
 * @method GotoPreset gotoPreset(array $options = [])
 * @method ListBuckets listBuckets(array $options = [])
 * @method ListDeviceChannels listDeviceChannels(array $options = [])
 * @method ListDeviceRecords listDeviceRecords(array $options = [])
 * @method ListObjects listObjects(array $options = [])
 * @method ModifyDevice modifyDevice(array $options = [])
 * @method ModifyDeviceAlarm modifyDeviceAlarm(array $options = [])
 * @method ModifyDeviceCapture modifyDeviceCapture(array $options = [])
 * @method ModifyDeviceChannels modifyDeviceChannels(array $options = [])
 * @method ModifyDirectory modifyDirectory(array $options = [])
 * @method ModifyGroup modifyGroup(array $options = [])
 * @method ModifyParentPlatform modifyParentPlatform(array $options = [])
 * @method ModifyTemplate modifyTemplate(array $options = [])
 * @method OpenVsService openVsService(array $options = [])
 * @method OperateRenderingDevices operateRenderingDevices(array $options = [])
 * @method PrepareUpload prepareUpload(array $options = [])
 * @method PutBucket putBucket(array $options = [])
 * @method ResetRenderingDevices resetRenderingDevices(array $options = [])
 * @method ResumeVsStream resumeVsStream(array $options = [])
 * @method SetPreset setPreset(array $options = [])
 * @method SetVsDomainCertificate setVsDomainCertificate(array $options = [])
 * @method SetVsStreamsNotifyUrlConfig setVsStreamsNotifyUrlConfig(array $options = [])
 * @method StartDevice startDevice(array $options = [])
 * @method StartParentPlatform startParentPlatform(array $options = [])
 * @method StartRecordStream startRecordStream(array $options = [])
 * @method StartStream startStream(array $options = [])
 * @method StartTransferStream startTransferStream(array $options = [])
 * @method StopAdjust stopAdjust(array $options = [])
 * @method StopDevice stopDevice(array $options = [])
 * @method StopMove stopMove(array $options = [])
 * @method StopRecordStream stopRecordStream(array $options = [])
 * @method StopStream stopStream(array $options = [])
 * @method StopTransferStream stopTransferStream(array $options = [])
 * @method SyncCatalogs syncCatalogs(array $options = [])
 * @method SyncDeviceChannels syncDeviceChannels(array $options = [])
 * @method UnbindDirectory unbindDirectory(array $options = [])
 * @method UnbindParentPlatformDevice unbindParentPlatformDevice(array $options = [])
 * @method UnbindPurchasedDevice unbindPurchasedDevice(array $options = [])
 * @method UnbindTemplate unbindTemplate(array $options = [])
 * @method UnlockDevice unlockDevice(array $options = [])
 * @method UpdateBucketInfo updateBucketInfo(array $options = [])
 * @method UpdateCluster updateCluster(array $options = [])
 * @method UpdateRenderingDeviceSpec updateRenderingDeviceSpec(array $options = [])
 * @method UpdateVsPullStreamInfoConfig updateVsPullStreamInfoConfig(array $options = [])
 * @method UploadDeviceRecord uploadDeviceRecord(array $options = [])
 */
class VsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'vs';

    /** @var string */
    public $version = '2018-12-12';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class AddDevice extends Rpc
{
}

/**
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 */
class AddRenderingDeviceInternetPorts extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getAlways()
 * @method $this withAlways($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 */
class AddVsPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BatchBindDirectories extends Rpc
{
}

/**
 * @method string getParentPlatformId()
 * @method $this withParentPlatformId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BatchBindParentPlatformDevices extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class BatchBindPurchasedDevices extends Rpc
{
}

/**
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getApplyAll()
 * @method $this withApplyAll($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BatchBindTemplate extends Rpc
{
}

/**
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getApplyAll()
 * @method $this withApplyAll($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BatchBindTemplates extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchDeleteDevices extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchDeleteVsDomainConfigs extends Rpc
{
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getControlStreamAction()
 * @method $this withControlStreamAction($value)
 * @method string getResumeTime()
 * @method $this withResumeTime($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOneshot()
 * @method $this withOneshot($value)
 */
class BatchForbidVsStream extends Rpc
{
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getControlStreamAction()
 * @method $this withControlStreamAction($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchResumeVsStream extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchSetVsDomainConfigs extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStartDevices extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStartStreams extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStopDevices extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStopStreams extends Rpc
{
}

/**
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BatchUnbindDirectories extends Rpc
{
}

/**
 * @method string getParentPlatformId()
 * @method $this withParentPlatformId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BatchUnbindParentPlatformDevices extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BatchUnbindPurchasedDevices extends Rpc
{
}

/**
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BatchUnbindTemplate extends Rpc
{
}

/**
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BatchUnbindTemplates extends Rpc
{
}

/**
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BindDirectory extends Rpc
{
}

/**
 * @method string getParentPlatformId()
 * @method $this withParentPlatformId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BindParentPlatformDevice extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class BindPurchasedDevice extends Rpc
{
}

/**
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getApplyAll()
 * @method $this withApplyAll($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BindTemplate extends Rpc
{
}

/**
 * @method string getFocus()
 * @method $this withFocus($value)
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIris()
 * @method $this withIris($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ContinuousAdjust extends Rpc
{
}

/**
 * @method string getTilt()
 * @method $this withTilt($value)
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPan()
 * @method $this withPan($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getZoom()
 * @method $this withZoom($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ContinuousMove extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInternalPorts()
 * @method $this withInternalPorts($value)
 */
class CreateCluster extends Rpc
{
}

/**
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getLatitude()
 * @method $this withLatitude($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getAlarmMethod()
 * @method $this withAlarmMethod($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getLongitude()
 * @method $this withLongitude($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPosInterval()
 * @method $this withPosInterval($value)
 * @method string getDsn()
 * @method $this withDsn($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getAutoPos()
 * @method $this withAutoPos($value)
 */
class CreateDevice extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAlarm()
 * @method $this withAlarm($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubAlarm()
 * @method $this withSubAlarm($value)
 * @method string getExpire()
 * @method $this withExpire($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateDeviceAlarm extends Rpc
{
}

/**
 * @method string getSnapshotConfig()
 * @method $this withSnapshotConfig($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class CreateDeviceSnapshot extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateDirectory extends Rpc
{
}

/**
 * @method string getCaptureVideo()
 * @method $this withCaptureVideo($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCaptureOssPath()
 * @method $this withCaptureOssPath($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getCaptureImage()
 * @method $this withCaptureImage($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOutProtocol()
 * @method $this withOutProtocol($value)
 * @method string getCaptureInterval()
 * @method $this withCaptureInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInProtocol()
 * @method $this withInProtocol($value)
 * @method string getLazyPull()
 * @method $this withLazyPull($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getCaptureOssBucket()
 * @method $this withCaptureOssBucket($value)
 */
class CreateGroup extends Rpc
{
}

/**
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getClientAuth()
 * @method $this withClientAuth($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getClientPassword()
 * @method $this withClientPassword($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClientUsername()
 * @method $this withClientUsername($value)
 */
class CreateParentPlatform extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getEdgeNodeName()
 * @method $this withEdgeNodeName($value)
 */
class CreateRenderingDevice extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class CreateStreamSnapshot extends Rpc
{
}

/**
 * @method string getHlsTs()
 * @method $this withHlsTs($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOssFilePrefix()
 * @method $this withOssFilePrefix($value)
 * @method string getJpgOverwrite()
 * @method $this withJpgOverwrite($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getJpgOnDemand()
 * @method $this withJpgOnDemand($value)
 * @method string getRetention()
 * @method $this withRetention($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getHlsM3u8()
 * @method $this withHlsM3u8($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getTransConfigsJSON()
 * @method $this withTransConfigsJSON($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getTrigger()
 * @method $this withTrigger($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJpgSequence()
 * @method $this withJpgSequence($value)
 * @method string getMp4()
 * @method $this withMp4($value)
 * @method string getFlv()
 * @method $this withFlv($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getFileFormat()
 * @method $this withFileFormat($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateTemplate extends Rpc
{
}

/**
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteBucket extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDevice extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDirectory extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteGroup extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteParentPlatform extends Rpc
{
}

/**
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPresetId()
 * @method $this withPresetId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePreset extends Rpc
{
}

/**
 * @method string getISP()
 * @method $this withISP($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getInternalPort()
 * @method $this withInternalPort($value)
 */
class DeleteRenderingDeviceInternetPorts extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DeleteRenderingDevices extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTemplate extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVsPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteVsStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAccountStat extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCluster extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeClusterDevices extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeClusters extends Rpc
{
}

/**
 * @method string getIncludeDirectory()
 * @method $this withIncludeDirectory($value)
 * @method string getIncludeStats()
 * @method $this withIncludeStats($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDevice extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDeviceChannels extends Rpc
{
}

/**
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpire()
 * @method $this withExpire($value)
 */
class DescribeDeviceGateway extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getIncludeDirectory()
 * @method $this withIncludeDirectory($value)
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getIncludeStats()
 * @method $this withIncludeStats($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDevices extends Rpc
{
}

/**
 * @method string getAuth()
 * @method $this withAuth($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOutProtocol()
 * @method $this withOutProtocol($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpire()
 * @method $this withExpire($value)
 */
class DescribeDeviceURL extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getNoPagination()
 * @method $this withNoPagination($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDirectories extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDirectory extends Rpc
{
}

/**
 * @method string getIncludeStats()
 * @method $this withIncludeStats($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGroup extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getIncludeStats()
 * @method $this withIncludeStats($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInProtocol()
 * @method $this withInProtocol($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeGroups extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 */
class DescribeNodeDevicesInfo extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeParentPlatform extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeParentPlatformDevices extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeParentPlatforms extends Rpc
{
}

/**
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePresets extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribePurchasedDevice extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribePurchasedDevices extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPrivateBucket()
 * @method $this withPrivateBucket($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeRecords extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class DescribeRenderingDevices extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStream extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeStreams extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getAuth()
 * @method $this withAuth($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getOutHostType()
 * @method $this withOutHostType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOutProtocol()
 * @method $this withOutProtocol($value)
 * @method string getTranscode()
 * @method $this withTranscode($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExpire()
 * @method $this withExpire($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeStreamURL extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStreamVodList extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTemplate extends Rpc
{
}

/**
 * @method string getSortDirection()
 * @method $this withSortDirection($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeTemplates extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTxId()
 * @method $this withTxId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 */
class DescribeVodStreamURL extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsCertificateDetail extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsCertificateList extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVsDomainBpsData extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainConfigs extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainDetail extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainPvData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainPvUvData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainRecordData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainRegionData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVsDomainReqBpsData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVsDomainReqTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainSnapshotData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVsDomainTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsDomainUvData extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVsStorageTrafficUsageData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeVsStorageUsageData extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsStreamsOnlineList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsStreamsPublishList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeVsTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeVsUpPeakPublishStreamData extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 */
class DescribeVsUserResourcePackage extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getControlStreamAction()
 * @method $this withControlStreamAction($value)
 * @method string getResumeTime()
 * @method $this withResumeTime($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOneshot()
 * @method $this withOneshot($value)
 */
class ForbidVsStream extends Rpc
{
}

/**
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetBucketInfo extends Rpc
{
}

/**
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPresetId()
 * @method $this withPresetId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GotoPreset extends Rpc
{
}

/**
 * @method string getPrefix()
 * @method $this withPrefix($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListBuckets extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class ListDeviceChannels extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSearchCriteria()
 * @method $this withSearchCriteria($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class ListDeviceRecords extends Rpc
{
}

/**
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getContinuationToken()
 * @method $this withContinuationToken($value)
 * @method string getPrefix()
 * @method $this withPrefix($value)
 * @method string getDelimiter()
 * @method $this withDelimiter($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEncodingType()
 * @method $this withEncodingType($value)
 * @method string getStartAfter()
 * @method $this withStartAfter($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 */
class ListObjects extends Rpc
{
}

/**
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getLatitude()
 * @method $this withLatitude($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getVendor()
 * @method $this withVendor($value)
 * @method string getAlarmMethod()
 * @method $this withAlarmMethod($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getLongitude()
 * @method $this withLongitude($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPosInterval()
 * @method $this withPosInterval($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getAutoPos()
 * @method $this withAutoPos($value)
 */
class ModifyDevice extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmId()
 * @method $this withAlarmId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyDeviceAlarm extends Rpc
{
}

/**
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getImage()
 * @method $this withImage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDeviceCapture extends Rpc
{
}

/**
 * @method string getDeviceStatus()
 * @method $this withDeviceStatus($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChannels()
 * @method $this withChannels($value)
 * @method string getDsn()
 * @method $this withDsn($value)
 */
class ModifyDeviceChannels extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyDirectory extends Rpc
{
}

/**
 * @method string getCaptureVideo()
 * @method $this withCaptureVideo($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getCaptureOssPath()
 * @method $this withCaptureOssPath($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getCaptureImage()
 * @method $this withCaptureImage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOutProtocol()
 * @method $this withOutProtocol($value)
 * @method string getCaptureInterval()
 * @method $this withCaptureInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInProtocol()
 * @method $this withInProtocol($value)
 * @method string getLazyPull()
 * @method $this withLazyPull($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getCaptureOssBucket()
 * @method $this withCaptureOssBucket($value)
 */
class ModifyGroup extends Rpc
{
}

/**
 * @method string getGbId()
 * @method $this withGbId($value)
 * @method string getClientAuth()
 * @method $this withClientAuth($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAutoStart()
 * @method $this withAutoStart($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClientPassword()
 * @method $this withClientPassword($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClientUsername()
 * @method $this withClientUsername($value)
 */
class ModifyParentPlatform extends Rpc
{
}

/**
 * @method string getHlsTs()
 * @method $this withHlsTs($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOssFilePrefix()
 * @method $this withOssFilePrefix($value)
 * @method string getJpgOverwrite()
 * @method $this withJpgOverwrite($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getJpgOnDemand()
 * @method $this withJpgOnDemand($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getRetention()
 * @method $this withRetention($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getHlsM3u8()
 * @method $this withHlsM3u8($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getTransConfigsJSON()
 * @method $this withTransConfigsJSON($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getTrigger()
 * @method $this withTrigger($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getJpgSequence()
 * @method $this withJpgSequence($value)
 * @method string getMp4()
 * @method $this withMp4($value)
 * @method string getFlv()
 * @method $this withFlv($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getFileFormat()
 * @method $this withFileFormat($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyTemplate extends Rpc
{
}

class OpenVsService extends Rpc
{
}

/**
 * @method string getForceStop()
 * @method $this withForceStop($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class OperateRenderingDevices extends Rpc
{
}

/**
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAdditionType()
 * @method $this withAdditionType($value)
 */
class PrepareUpload extends Rpc
{
}

/**
 * @method string getDataRedundancyType()
 * @method $this withDataRedundancyType($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getBucketAcl()
 * @method $this withBucketAcl($value)
 * @method string getDispatcherType()
 * @method $this withDispatcherType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class PutBucket extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ResetRenderingDevices extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getControlStreamAction()
 * @method $this withControlStreamAction($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResumeVsStream extends Rpc
{
}

/**
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPresetId()
 * @method $this withPresetId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetPreset extends Rpc
{
}

/**
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 * @method string getForceSet()
 * @method $this withForceSet($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class SetVsDomainCertificate extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetVsStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartDevice extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartParentPlatform extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class StartRecordStream extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartStream extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTranscode()
 * @method $this withTranscode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 */
class StartTransferStream extends Rpc
{
}

/**
 * @method string getFocus()
 * @method $this withFocus($value)
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getIris()
 * @method $this withIris($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopAdjust extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopDevice extends Rpc
{
}

/**
 * @method string getTilt()
 * @method $this withTilt($value)
 * @method string getSubProtocol()
 * @method $this withSubProtocol($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPan()
 * @method $this withPan($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getZoom()
 * @method $this withZoom($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopMove extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class StopRecordStream extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class StopStream extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getTranscode()
 * @method $this withTranscode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopTransferStream extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SyncCatalogs extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class SyncDeviceChannels extends Rpc
{
}

/**
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class UnbindDirectory extends Rpc
{
}

/**
 * @method string getParentPlatformId()
 * @method $this withParentPlatformId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class UnbindParentPlatformDevice extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class UnbindPurchasedDevice extends Rpc
{
}

/**
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UnbindTemplate extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnlockDevice extends Rpc
{
}

/**
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class UpdateBucketInfo extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMaintainTime()
 * @method $this withMaintainTime($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInternalPorts()
 * @method $this withInternalPorts($value)
 */
class UpdateCluster extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getSpecification()
 * @method $this withSpecification($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class UpdateRenderingDeviceSpec extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getAlways()
 * @method $this withAlways($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 */
class UpdateVsPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getSearchCriteria()
 * @method $this withSearchCriteria($value)
 * @method string getUploadParams()
 * @method $this withUploadParams($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getUploadId()
 * @method $this withUploadId($value)
 * @method string getUploadType()
 * @method $this withUploadType($value)
 * @method string getUploadMode()
 * @method $this withUploadMode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class UploadDeviceRecord extends Rpc
{
}
