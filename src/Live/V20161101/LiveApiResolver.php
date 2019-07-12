<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeLiveStreamTranscodeStreamNum describeLiveStreamTranscodeStreamNum(array $options = [])
 * @method UpdateLiveTopLevelDomain updateLiveTopLevelDomain(array $options = [])
 * @method ModifyLiveDomainSchdmByProperty modifyLiveDomainSchdmByProperty(array $options = [])
 * @method SetLiveStreamOptimizedFeatureConfig setLiveStreamOptimizedFeatureConfig(array $options = [])
 * @method DescribeLiveStreamOptimizedFeatureConfig describeLiveStreamOptimizedFeatureConfig(array $options = [])
 * @method SetLiveStreamDelayConfig setLiveStreamDelayConfig(array $options = [])
 * @method DescribeLiveStreamDelayConfig describeLiveStreamDelayConfig(array $options = [])
 * @method SetBoardCallback setBoardCallback(array $options = [])
 * @method DescribeRecords describeRecords(array $options = [])
 * @method DescribeRecord describeRecord(array $options = [])
 * @method CompleteBoardRecord completeBoardRecord(array $options = [])
 * @method StartBoardRecord startBoardRecord(array $options = [])
 * @method ApplyRecordToken applyRecordToken(array $options = [])
 * @method UpdateBoardCallback updateBoardCallback(array $options = [])
 * @method DescribeLiveDomainMapping describeLiveDomainMapping(array $options = [])
 * @method StopLiveIndex stopLiveIndex(array $options = [])
 * @method StartLiveIndex startLiveIndex(array $options = [])
 * @method RealTimeSnapshotCommand realTimeSnapshotCommand(array $options = [])
 * @method DescribeLiveTopDomainsByFlow describeLiveTopDomainsByFlow(array $options = [])
 * @method DescribeLiveDomainRealTimeBpsData describeLiveDomainRealTimeBpsData(array $options = [])
 * @method DescribeLiveDomainRealTimeHttpCodeData describeLiveDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeLiveDomainRealTimeTrafficData describeLiveDomainRealTimeTrafficData(array $options = [])
 * @method DeleteLiveLazyPullStreamInfoConfig deleteLiveLazyPullStreamInfoConfig(array $options = [])
 * @method DescribeLiveLazyPullStreamConfig describeLiveLazyPullStreamConfig(array $options = [])
 * @method SetLiveLazyPullStreamInfoConfig setLiveLazyPullStreamInfoConfig(array $options = [])
 * @method UpdateCasterSceneAudio updateCasterSceneAudio(array $options = [])
 * @method SetCasterChannel setCasterChannel(array $options = [])
 * @method DescribeCasterSceneAudio describeCasterSceneAudio(array $options = [])
 * @method DescribeCasterChannels describeCasterChannels(array $options = [])
 * @method UpdateBoard updateBoard(array $options = [])
 * @method JoinBoard joinBoard(array $options = [])
 * @method DescribeBoardSnapshot describeBoardSnapshot(array $options = [])
 * @method DescribeBoards describeBoards(array $options = [])
 * @method DescribeBoardEvents describeBoardEvents(array $options = [])
 * @method DeleteBoard deleteBoard(array $options = [])
 * @method CreateBoard createBoard(array $options = [])
 * @method CompleteBoard completeBoard(array $options = [])
 * @method ApplyBoardToken applyBoardToken(array $options = [])
 * @method DescribeLiveStreamCount describeLiveStreamCount(array $options = [])
 * @method DescribeLiveCertificateDetail describeLiveCertificateDetail(array $options = [])
 * @method DescribeHlsLiveStreamRealTimeBpsData describeHlsLiveStreamRealTimeBpsData(array $options = [])
 * @method StopLiveDomain stopLiveDomain(array $options = [])
 * @method StartLiveDomain startLiveDomain(array $options = [])
 * @method SetLiveDomainCertificate setLiveDomainCertificate(array $options = [])
 * @method BatchSetLiveDomainConfigs batchSetLiveDomainConfigs(array $options = [])
 * @method DescribeLiveCertificateList describeLiveCertificateList(array $options = [])
 * @method DeleteLiveDomain deleteLiveDomain(array $options = [])
 * @method DescribeLiveDomainConfigs describeLiveDomainConfigs(array $options = [])
 * @method AddLiveDomain addLiveDomain(array $options = [])
 * @method DescribeLiveDomainDetail describeLiveDomainDetail(array $options = [])
 * @method BatchDeleteLiveDomainConfigs batchDeleteLiveDomainConfigs(array $options = [])
 * @method DescribeRoomStatus describeRoomStatus(array $options = [])
 * @method DescribeRoomList describeRoomList(array $options = [])
 * @method DescribeRoomKickoutUserList describeRoomKickoutUserList(array $options = [])
 * @method SendRoomUserNotification sendRoomUserNotification(array $options = [])
 * @method DescribeForbidPushStreamRoomList describeForbidPushStreamRoomList(array $options = [])
 * @method SendRoomNotification sendRoomNotification(array $options = [])
 * @method ForbidPushStream forbidPushStream(array $options = [])
 * @method DeleteRoom deleteRoom(array $options = [])
 * @method CreateRoom createRoom(array $options = [])
 * @method AllowPushStream allowPushStream(array $options = [])
 * @method DescribeLiveUserDomains describeLiveUserDomains(array $options = [])
 * @method DescribeCasterRtcInfo describeCasterRtcInfo(array $options = [])
 * @method DescribeUpBpsPeakData describeUpBpsPeakData(array $options = [])
 * @method DescribeUpBpsPeakOfLine describeUpBpsPeakOfLine(array $options = [])
 * @method DescribeUpPeakPublishStreamData describeUpPeakPublishStreamData(array $options = [])
 * @method DeleteLiveDomainMapping deleteLiveDomainMapping(array $options = [])
 * @method AddLiveDomainMapping addLiveDomainMapping(array $options = [])
 * @method AddCasterEpisodeGroupContent addCasterEpisodeGroupContent(array $options = [])
 * @method ModifyCasterProgram modifyCasterProgram(array $options = [])
 * @method ModifyCasterEpisode modifyCasterEpisode(array $options = [])
 * @method DescribeCasterProgram describeCasterProgram(array $options = [])
 * @method DeleteCasterProgram deleteCasterProgram(array $options = [])
 * @method DeleteCasterEpisodeGroup deleteCasterEpisodeGroup(array $options = [])
 * @method DeleteCasterEpisode deleteCasterEpisode(array $options = [])
 * @method AddCasterProgram addCasterProgram(array $options = [])
 * @method AddCasterEpisodeGroup addCasterEpisodeGroup(array $options = [])
 * @method AddCasterEpisode addCasterEpisode(array $options = [])
 * @method DescribeLiveDomainTranscodeData describeLiveDomainTranscodeData(array $options = [])
 * @method DescribeLiveDomainSnapshotData describeLiveDomainSnapshotData(array $options = [])
 * @method DescribeLiveDomainRecordData describeLiveDomainRecordData(array $options = [])
 * @method RealTimeRecordCommand realTimeRecordCommand(array $options = [])
 * @method DescribeLiveDomainTrafficData describeLiveDomainTrafficData(array $options = [])
 * @method DescribeLiveDomainBpsData describeLiveDomainBpsData(array $options = [])
 * @method AddTrancodeSEI addTrancodeSEI(array $options = [])
 * @method DeleteCasterSceneConfig deleteCasterSceneConfig(array $options = [])
 * @method AddCustomLiveStreamTranscode addCustomLiveStreamTranscode(array $options = [])
 * @method DescribeLiveRecordVodConfigs describeLiveRecordVodConfigs(array $options = [])
 * @method DeleteLiveRecordVodConfig deleteLiveRecordVodConfig(array $options = [])
 * @method AddLiveRecordVodConfig addLiveRecordVodConfig(array $options = [])
 * @method ModifyCasterComponent modifyCasterComponent(array $options = [])
 * @method DescribeCasterComponents describeCasterComponents(array $options = [])
 * @method DeleteCasterComponent deleteCasterComponent(array $options = [])
 * @method AddCasterComponent addCasterComponent(array $options = [])
 * @method StopCaster stopCaster(array $options = [])
 * @method StartCaster startCaster(array $options = [])
 * @method DescribeLiveStreamHistoryUserNum describeLiveStreamHistoryUserNum(array $options = [])
 * @method UpdateCasterSceneConfig updateCasterSceneConfig(array $options = [])
 * @method StopCasterScene stopCasterScene(array $options = [])
 * @method StartCasterScene startCasterScene(array $options = [])
 * @method SetCasterSceneConfig setCasterSceneConfig(array $options = [])
 * @method SetCasterConfig setCasterConfig(array $options = [])
 * @method ModifyCasterVideoResource modifyCasterVideoResource(array $options = [])
 * @method ModifyCasterLayout modifyCasterLayout(array $options = [])
 * @method EffectCasterVideoResource effectCasterVideoResource(array $options = [])
 * @method EffectCasterUrgent effectCasterUrgent(array $options = [])
 * @method DescribeCasterVideoResources describeCasterVideoResources(array $options = [])
 * @method DescribeCasterStreamUrl describeCasterStreamUrl(array $options = [])
 * @method DescribeCasterScenes describeCasterScenes(array $options = [])
 * @method DescribeCasters describeCasters(array $options = [])
 * @method DescribeCasterLayouts describeCasterLayouts(array $options = [])
 * @method DescribeCasterConfig describeCasterConfig(array $options = [])
 * @method DeleteCasterVideoResource deleteCasterVideoResource(array $options = [])
 * @method DeleteCasterLayout deleteCasterLayout(array $options = [])
 * @method DeleteCaster deleteCaster(array $options = [])
 * @method CreateCaster createCaster(array $options = [])
 * @method CopyCasterSceneConfig copyCasterSceneConfig(array $options = [])
 * @method CopyCaster copyCaster(array $options = [])
 * @method AddCasterVideoResource addCasterVideoResource(array $options = [])
 * @method AddCasterLayout addCasterLayout(array $options = [])
 * @method DescribeLivePullStreamConfig describeLivePullStreamConfig(array $options = [])
 * @method DeleteLivePullStreamInfoConfig deleteLivePullStreamInfoConfig(array $options = [])
 * @method AddLivePullStreamInfoConfig addLivePullStreamInfoConfig(array $options = [])
 * @method DescribeLiveStreamBitRateData describeLiveStreamBitRateData(array $options = [])
 * @method AddLiveDetectNotifyConfig addLiveDetectNotifyConfig(array $options = [])
 * @method AddLiveSnapshotDetectPornConfig addLiveSnapshotDetectPornConfig(array $options = [])
 * @method DeleteLiveDetectNotifyConfig deleteLiveDetectNotifyConfig(array $options = [])
 * @method DescribeLiveDetectNotifyConfig describeLiveDetectNotifyConfig(array $options = [])
 * @method DeleteLiveSnapshotDetectPornConfig deleteLiveSnapshotDetectPornConfig(array $options = [])
 * @method DescribeLiveSnapshotDetectPornConfig describeLiveSnapshotDetectPornConfig(array $options = [])
 * @method UpdateLiveDetectNotifyConfig updateLiveDetectNotifyConfig(array $options = [])
 * @method UpdateLiveSnapshotDetectPornConfig updateLiveSnapshotDetectPornConfig(array $options = [])
 * @method AddLiveRecordNotifyConfig addLiveRecordNotifyConfig(array $options = [])
 * @method DeleteLiveStreamsNotifyUrlConfig deleteLiveStreamsNotifyUrlConfig(array $options = [])
 * @method DeleteLiveRecordNotifyConfig deleteLiveRecordNotifyConfig(array $options = [])
 * @method DescribeLiveRecordNotifyConfig describeLiveRecordNotifyConfig(array $options = [])
 * @method DescribeLiveStreamsNotifyUrlConfig describeLiveStreamsNotifyUrlConfig(array $options = [])
 * @method UpdateLiveRecordNotifyConfig updateLiveRecordNotifyConfig(array $options = [])
 * @method DescribeLiveStreamsBlockList describeLiveStreamsBlockList(array $options = [])
 * @method DescribeLiveStreamOnlineUserNum describeLiveStreamOnlineUserNum(array $options = [])
 * @method DescribeLiveStreamsPublishList describeLiveStreamsPublishList(array $options = [])
 * @method DescribeLiveStreamsOnlineList describeLiveStreamsOnlineList(array $options = [])
 * @method DescribeLiveStreamsControlHistory describeLiveStreamsControlHistory(array $options = [])
 * @method AddLiveStreamTranscode addLiveStreamTranscode(array $options = [])
 * @method DeleteLiveStreamTranscode deleteLiveStreamTranscode(array $options = [])
 * @method DescribeLiveStreamsFrameRateAndBitRateData describeLiveStreamsFrameRateAndBitRateData(array $options = [])
 * @method ForbidLiveStream forbidLiveStream(array $options = [])
 * @method DescribeLiveStreamTranscodeInfo describeLiveStreamTranscodeInfo(array $options = [])
 * @method SetLiveStreamsNotifyUrlConfig setLiveStreamsNotifyUrlConfig(array $options = [])
 * @method ResumeLiveStream resumeLiveStream(array $options = [])
 * @method AddLiveAppSnapshotConfig addLiveAppSnapshotConfig(array $options = [])
 * @method AddLiveAppRecordConfig addLiveAppRecordConfig(array $options = [])
 * @method DescribeLiveRecordConfig describeLiveRecordConfig(array $options = [])
 * @method DeleteLiveAppSnapshotConfig deleteLiveAppSnapshotConfig(array $options = [])
 * @method DeleteLiveAppRecordConfig deleteLiveAppRecordConfig(array $options = [])
 * @method CreateLiveStreamRecordIndexFiles createLiveStreamRecordIndexFiles(array $options = [])
 * @method DescribeLiveStreamSnapshotInfo describeLiveStreamSnapshotInfo(array $options = [])
 * @method DescribeLiveStreamRecordIndexFiles describeLiveStreamRecordIndexFiles(array $options = [])
 * @method DescribeLiveStreamRecordIndexFile describeLiveStreamRecordIndexFile(array $options = [])
 * @method DescribeLiveStreamRecordContent describeLiveStreamRecordContent(array $options = [])
 * @method DescribeLiveSnapshotConfig describeLiveSnapshotConfig(array $options = [])
 * @method UpdateLiveAppSnapshotConfig updateLiveAppSnapshotConfig(array $options = [])
 */
class LiveApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'live';

    /** @var string */
    public $version = '2016-11-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'live';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamTranscodeStreamNum extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveTopLevelDomain extends Rpc
{
}

/**
 * @method string getProperty()
 * @method $this withProperty($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyLiveDomainSchdmByProperty extends Rpc
{
}

/**
 * @method string getConfigStatus()
 * @method $this withConfigStatus($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getConfigValue()
 * @method $this withConfigValue($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetLiveStreamOptimizedFeatureConfig extends Rpc
{
}

/**
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamOptimizedFeatureConfig extends Rpc
{
}

/**
 * @method string getFlvLevel()
 * @method $this withFlvLevel($value)
 * @method string getHlsLevel()
 * @method $this withHlsLevel($value)
 * @method string getRtmpDelay()
 * @method $this withRtmpDelay($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlvDelay()
 * @method $this withFlvDelay($value)
 * @method string getRtmpLevel()
 * @method $this withRtmpLevel($value)
 * @method string getHlsDelay()
 * @method $this withHlsDelay($value)
 */
class SetLiveStreamDelayConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamDelayConfig extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getCallbackEnable()
 * @method $this withCallbackEnable($value)
 * @method string getCallbackEvents()
 * @method $this withCallbackEvents($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackUri()
 * @method $this withCallbackUri($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAuthSwitch()
 * @method $this withAuthSwitch($value)
 */
class SetBoardCallback extends Rpc
{
}

/**
 * @method string getRecordState()
 * @method $this withRecordState($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRecords extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRecord extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CompleteBoardRecord extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getBoardId()
 * @method $this withBoardId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class StartBoardRecord extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ApplyRecordToken extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getCallbackEnable()
 * @method $this withCallbackEnable($value)
 * @method string getCallbackEvents()
 * @method $this withCallbackEvents($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackUri()
 * @method $this withCallbackUri($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAuthSwitch()
 * @method $this withAuthSwitch($value)
 */
class UpdateBoardCallback extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainMapping extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopLiveIndex extends Rpc
{
}

/**
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getTokenId()
 * @method $this withTokenId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getInputUrl()
 * @method $this withInputUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getOssRamRole()
 * @method $this withOssRamRole($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssUserId()
 * @method $this withOssUserId($value)
 */
class StartLiveIndex extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class RealTimeSnapshotCommand extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealTimeHttpCodeData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealTimeTrafficData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class DeleteLiveLazyPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveLazyPullStreamConfig extends Rpc
{
}

/**
 * @method string getPullArgs()
 * @method $this withPullArgs($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getPullAuthKey()
 * @method $this withPullAuthKey($value)
 * @method string getPullAuthType()
 * @method $this withPullAuthType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPullDomainName()
 * @method $this withPullDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullAppName()
 * @method $this withPullAppName($value)
 * @method string getPullProtocol()
 * @method $this withPullProtocol($value)
 */
class SetLiveLazyPullStreamInfoConfig extends Rpc
{
}

/**
 * @method array getAudioLayer()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method array getMixList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFollowEnable()
 * @method $this withFollowEnable($value)
 */
class UpdateCasterSceneAudio extends Rpc
{

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
    public function withAudioLayer(array $audioLayer)
    {
        $this->data['AudioLayer'] = $audioLayer;
        foreach ($audioLayer as $depth1 => $depth1Value) {
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
        }

        return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
    public function withMixList(array $mixList)
    {
        $this->data['MixList'] = $mixList;
        foreach ($mixList as $i => $iValue) {
            $this->options['query']['MixList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPlayStatus()
 * @method $this withPlayStatus($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSeekOffset()
 * @method $this withSeekOffset($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SetCasterChannel extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterSceneAudio extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterChannels extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getBoardData()
 * @method $this withBoardData($value)
 */
class UpdateBoard extends Rpc
{
}

/**
 * @method string getBoardId()
 * @method $this withBoardId($value)
 * @method string getAppUid()
 * @method $this withAppUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class JoinBoard extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getBoardId()
 * @method $this withBoardId($value)
 */
class DescribeBoardSnapshot extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeBoards extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getBoardId()
 * @method $this withBoardId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeBoardEvents extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getBoardId()
 * @method $this withBoardId($value)
 */
class DeleteBoard extends Rpc
{
}

/**
 * @method string getAppUid()
 * @method $this withAppUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateBoard extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getBoardId()
 * @method $this withBoardId($value)
 */
class CompleteBoard extends Rpc
{
}

/**
 * @method string getBoardId()
 * @method $this withBoardId($value)
 * @method string getAppUid()
 * @method $this withAppUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ApplyBoardToken extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamCount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveCertificateDetail extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopLiveDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartLiveDomain extends Rpc
{
}

/**
 * @method string getForceSet()
 * @method $this withForceSet($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 */
class SetLiveDomainCertificate extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchSetLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveCertificateList extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveDomain extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 * @method string getLiveDomainType()
 * @method $this withLiveDomainType($value)
 */
class AddLiveDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainDetail extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchDeleteLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRoomStatus extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAnchorId()
 * @method $this withAnchorId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getRoomStatus()
 * @method $this withRoomStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRoomList extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRoomKickoutUserList extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getToAppUid()
 * @method $this withToAppUid($value)
 * @method string getAppUid()
 * @method $this withAppUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class SendRoomUserNotification extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeForbidPushStreamRoomList extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getAppUid()
 * @method $this withAppUid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class SendRoomNotification extends Rpc
{
}

/**
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ForbidPushStream extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteRoom extends Rpc
{
}

/**
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getAnchorId()
 * @method $this withAnchorId($value)
 * @method string getUseAppTranscode()
 * @method $this withUseAppTranscode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateRoom extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class AllowPushStream extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegionName()
 * @method $this withRegionName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getLiveDomainType()
 * @method $this withLiveDomainType($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 */
class DescribeLiveUserDomains extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterRtcInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpBpsPeakData extends Rpc
{
}

/**
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpBpsPeakOfLine extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpPeakPublishStreamData extends Rpc
{
}

/**
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveDomainMapping extends Rpc
{
}

/**
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveDomainMapping extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class AddCasterEpisodeGroupContent extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method array getEpisode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCasterProgram extends Rpc
{

    /**
     * @param array $episode
     *
     * @return $this
     */
    public function withEpisode(array $episode)
    {
        $this->data['Episode'] = $episode;
        foreach ($episode as $depth1 => $depth1Value) {
            $this->options['query']['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
            foreach ($depth1Value['ComponentId'] as $i => $iValue) {
                $this->options['query']['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeId'] = $depth1Value['EpisodeId'];
        }

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getComponentId()
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeName()
 * @method $this withEpisodeName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 */
class ModifyCasterEpisode extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
    public function withComponentId(array $componentId)
    {
        $this->data['ComponentId'] = $componentId;
        foreach ($componentId as $i => $iValue) {
            $this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeType()
 * @method $this withEpisodeType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCasterProgram extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterProgram extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 */
class DeleteCasterEpisodeGroup extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 */
class DeleteCasterEpisode extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method array getEpisode()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterProgram extends Rpc
{

    /**
     * @param array $episode
     *
     * @return $this
     */
    public function withEpisode(array $episode)
    {
        $this->data['Episode'] = $episode;
        foreach ($episode as $depth1 => $depth1Value) {
            $this->options['query']['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
            foreach ($depth1Value['ComponentId'] as $i => $iValue) {
                $this->options['query']['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
            $this->options['query']['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
        }

        return $this;
    }
}

/**
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method array getItem()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterEpisodeGroup extends Rpc
{

    /**
     * @param array $item
     *
     * @return $this
     */
    public function withItem(array $item)
    {
        $this->data['Item'] = $item;
        foreach ($item as $depth1 => $depth1Value) {
            $this->options['query']['Item.' . ($depth1 + 1) . '.VodUrl'] = $depth1Value['VodUrl'];
            $this->options['query']['Item.' . ($depth1 + 1) . '.ItemName'] = $depth1Value['ItemName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getComponentId()
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeType()
 * @method $this withEpisodeType($value)
 * @method string getEpisodeName()
 * @method $this withEpisodeName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterEpisode extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
    public function withComponentId(array $componentId)
    {
        $this->data['ComponentId'] = $componentId;
        foreach ($componentId as $i => $iValue) {
            $this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainTranscodeData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainSnapshotData extends Rpc
{
}

/**
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRecordData extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class RealTimeRecordCommand extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainTrafficData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainBpsData extends Rpc
{
}

/**
 * @method string getDelay()
 * @method $this withDelay($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getRepeat()
 * @method $this withRepeat($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class AddTrancodeSEI extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DeleteCasterSceneConfig extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class AddCustomLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveRecordVodConfigs extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DeleteLiveRecordVodConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAutoCompose()
 * @method $this withAutoCompose($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCycleDuration()
 * @method $this withCycleDuration($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComposeVodTranscodeGroupId()
 * @method $this withComposeVodTranscodeGroupId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getVodTranscodeGroupId()
 * @method $this withVodTranscodeGroupId($value)
 */
class AddLiveRecordVodConfig extends Rpc
{
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class ModifyCasterComponent extends Rpc
{
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterComponents extends Rpc
{
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterComponent extends Rpc
{
}

/**
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getLocationId()
 * @method $this withLocationId($value)
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class AddCasterComponent extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopCaster extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartCaster extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveStreamHistoryUserNum extends Rpc
{
}

/**
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 */
class UpdateCasterSceneConfig extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
    public function withComponentId(array $componentId)
    {
        $this->data['ComponentId'] = $componentId;
        foreach ($componentId as $i => $iValue) {
            $this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopCasterScene extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartCasterScene extends Rpc
{
}

/**
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 */
class SetCasterSceneConfig extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
    public function withComponentId(array $componentId)
    {
        $this->data['ComponentId'] = $componentId;
        foreach ($componentId as $i => $iValue) {
            $this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getChannelEnable()
 * @method $this withChannelEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getProgramEffect()
 * @method $this withProgramEffect($value)
 * @method string getProgramName()
 * @method $this withProgramName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordConfig()
 * @method $this withRecordConfig($value)
 * @method string getUrgentMaterialId()
 * @method $this withUrgentMaterialId($value)
 * @method string getTranscodeConfig()
 * @method $this withTranscodeConfig($value)
 * @method string getDelay()
 * @method $this withDelay($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class SetCasterConfig extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getVodUrl()
 * @method $this withVodUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndOffset()
 * @method $this withEndOffset($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getBeginOffset()
 * @method $this withBeginOffset($value)
 * @method string getLiveStreamUrl()
 * @method $this withLiveStreamUrl($value)
 * @method string getPtsCallbackInterval()
 * @method $this withPtsCallbackInterval($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 */
class ModifyCasterVideoResource extends Rpc
{
}

/**
 * @method array getBlendList()
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method array getMixList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 */
class ModifyCasterLayout extends Rpc
{

    /**
     * @param array $blendList
     *
     * @return $this
     */
    public function withBlendList(array $blendList)
    {
        $this->data['BlendList'] = $blendList;
        foreach ($blendList as $i => $iValue) {
            $this->options['query']['BlendList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
    public function withAudioLayer(array $audioLayer)
    {
        $this->data['AudioLayer'] = $audioLayer;
        foreach ($audioLayer as $depth1 => $depth1Value) {
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
        }

        return $this;
    }

    /**
     * @param array $videoLayer
     *
     * @return $this
     */
    public function withVideoLayer(array $videoLayer)
    {
        $this->data['VideoLayer'] = $videoLayer;
        foreach ($videoLayer as $depth1 => $depth1Value) {
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
            foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
                $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
        }

        return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
    public function withMixList(array $mixList)
    {
        $this->data['MixList'] = $mixList;
        foreach ($mixList as $i => $iValue) {
            $this->options['query']['MixList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EffectCasterVideoResource extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EffectCasterUrgent extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterVideoResources extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterStreamUrl extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterScenes extends Rpc
{
}

/**
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCasters extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 */
class DescribeCasterLayouts extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterConfig extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterVideoResource extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 */
class DeleteCasterLayout extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCaster extends Rpc
{
}

/**
 * @method string getCasterTemplate()
 * @method $this withCasterTemplate($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getNormType()
 * @method $this withNormType($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPurchaseTime()
 * @method $this withPurchaseTime($value)
 */
class CreateCaster extends Rpc
{
}

/**
 * @method string getFromSceneId()
 * @method $this withFromSceneId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToSceneId()
 * @method $this withToSceneId($value)
 */
class CopyCasterSceneConfig extends Rpc
{
}

/**
 * @method string getSrcCasterId()
 * @method $this withSrcCasterId($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyCaster extends Rpc
{
}

/**
 * @method string getVodUrl()
 * @method $this withVodUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndOffset()
 * @method $this withEndOffset($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getBeginOffset()
 * @method $this withBeginOffset($value)
 * @method string getLiveStreamUrl()
 * @method $this withLiveStreamUrl($value)
 * @method string getLocationId()
 * @method $this withLocationId($value)
 * @method string getPtsCallbackInterval()
 * @method $this withPtsCallbackInterval($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 */
class AddCasterVideoResource extends Rpc
{
}

/**
 * @method array getBlendList()
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method array getMixList()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterLayout extends Rpc
{

    /**
     * @param array $blendList
     *
     * @return $this
     */
    public function withBlendList(array $blendList)
    {
        $this->data['BlendList'] = $blendList;
        foreach ($blendList as $i => $iValue) {
            $this->options['query']['BlendList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
    public function withAudioLayer(array $audioLayer)
    {
        $this->data['AudioLayer'] = $audioLayer;
        foreach ($audioLayer as $depth1 => $depth1Value) {
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
            $this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
        }

        return $this;
    }

    /**
     * @param array $videoLayer
     *
     * @return $this
     */
    public function withVideoLayer(array $videoLayer)
    {
        $this->data['VideoLayer'] = $videoLayer;
        foreach ($videoLayer as $depth1 => $depth1Value) {
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
            foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
                $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
        }

        return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
    public function withMixList(array $mixList)
    {
        $this->data['MixList'] = $mixList;
        foreach ($mixList as $i => $iValue) {
            $this->options['query']['MixList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLivePullStreamConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DeleteLivePullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class AddLivePullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveStreamBitRateData extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method array getScene()
 */
class AddLiveSnapshotDetectPornConfig extends Rpc
{

    /**
     * @param array $scene
     *
     * @return $this
     */
    public function withScene(array $scene)
    {
        $this->data['Scene'] = $scene;
        foreach ($scene as $i => $iValue) {
            $this->options['query']['Scene.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveSnapshotDetectPornConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeLiveSnapshotDetectPornConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method array getScene()
 */
class UpdateLiveSnapshotDetectPornConfig extends Rpc
{

    /**
     * @param array $scene
     *
     * @return $this
     */
    public function withScene(array $scene)
    {
        $this->data['Scene'] = $scene;
        foreach ($scene as $i => $iValue) {
            $this->options['query']['Scene.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getOnDemandUrl()
 * @method $this withOnDemandUrl($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNeedStatusNotify()
 * @method $this withNeedStatusNotify($value)
 */
class AddLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getOnDemandUrl()
 * @method $this withOnDemandUrl($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNeedStatusNotify()
 * @method $this withNeedStatusNotify($value)
 */
class UpdateLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class DescribeLiveStreamsBlockList extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveStreamOnlineUserNum extends Rpc
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
class DescribeLiveStreamsPublishList extends Rpc
{
}

/**
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 */
class DescribeLiveStreamsOnlineList extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsControlHistory extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveStreamsFrameRateAndBitRateData extends Rpc
{
}

/**
 * @method string getResumeTime()
 * @method $this withResumeTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOneshot()
 * @method $this withOneshot($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getControlStreamAction()
 * @method $this withControlStreamAction($value)
 */
class ForbidLiveStream extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainTranscodeName()
 * @method $this withDomainTranscodeName($value)
 */
class DescribeLiveStreamTranscodeInfo extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class ResumeLiveStream extends Rpc
{
}

/**
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getRecordFormat()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class AddLiveAppRecordConfig extends Rpc
{

    /**
     * @param array $recordFormat
     *
     * @return $this
     */
    public function withRecordFormat(array $recordFormat)
    {
        $this->data['RecordFormat'] = $recordFormat;
        foreach ($recordFormat as $depth1 => $depth1Value) {
            $this->options['query']['RecordFormat.' . ($depth1 + 1) . '.SliceOssObjectPrefix'] = $depth1Value['SliceOssObjectPrefix'];
            $this->options['query']['RecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
            $this->options['query']['RecordFormat.' . ($depth1 + 1) . '.OssObjectPrefix'] = $depth1Value['OssObjectPrefix'];
            $this->options['query']['RecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
        }

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeLiveRecordConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DeleteLiveAppRecordConfig extends Rpc
{
}

/**
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 */
class CreateLiveStreamRecordIndexFiles extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeLiveStreamSnapshotInfo extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeLiveStreamRecordIndexFiles extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveStreamRecordIndexFile extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class DescribeLiveStreamRecordContent extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeLiveSnapshotConfig extends Rpc
{
}

/**
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveAppSnapshotConfig extends Rpc
{
}
