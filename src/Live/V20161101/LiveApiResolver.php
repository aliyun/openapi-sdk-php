<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCasterComponent addCasterComponent(array $options = [])
 * @method AddCasterEpisode addCasterEpisode(array $options = [])
 * @method AddCasterEpisodeGroup addCasterEpisodeGroup(array $options = [])
 * @method AddCasterEpisodeGroupContent addCasterEpisodeGroupContent(array $options = [])
 * @method AddCasterLayout addCasterLayout(array $options = [])
 * @method AddCasterProgram addCasterProgram(array $options = [])
 * @method AddCasterVideoResource addCasterVideoResource(array $options = [])
 * @method AddCustomLiveStreamTranscode addCustomLiveStreamTranscode(array $options = [])
 * @method AddDRMCertificate addDRMCertificate(array $options = [])
 * @method AddLiveAppRecordConfig addLiveAppRecordConfig(array $options = [])
 * @method AddLiveAppSnapshotConfig addLiveAppSnapshotConfig(array $options = [])
 * @method AddLiveASRConfig addLiveASRConfig(array $options = [])
 * @method AddLiveAudioAuditConfig addLiveAudioAuditConfig(array $options = [])
 * @method AddLiveAudioAuditNotifyConfig addLiveAudioAuditNotifyConfig(array $options = [])
 * @method AddLiveDetectNotifyConfig addLiveDetectNotifyConfig(array $options = [])
 * @method AddLiveDomain addLiveDomain(array $options = [])
 * @method AddLiveDomainMapping addLiveDomainMapping(array $options = [])
 * @method AddLiveDomainPlayMapping addLiveDomainPlayMapping(array $options = [])
 * @method AddLivePullStreamInfoConfig addLivePullStreamInfoConfig(array $options = [])
 * @method AddLiveRecordNotifyConfig addLiveRecordNotifyConfig(array $options = [])
 * @method AddLiveRecordVodConfig addLiveRecordVodConfig(array $options = [])
 * @method AddLiveSnapshotDetectPornConfig addLiveSnapshotDetectPornConfig(array $options = [])
 * @method AddLiveStreamTranscode addLiveStreamTranscode(array $options = [])
 * @method AddMultiRateConfig addMultiRateConfig(array $options = [])
 * @method AddPlaylistItems addPlaylistItems(array $options = [])
 * @method AddRtsLiveStreamTranscode addRtsLiveStreamTranscode(array $options = [])
 * @method AddStudioLayout addStudioLayout(array $options = [])
 * @method AddTrancodeSEI addTrancodeSEI(array $options = [])
 * @method AllowPushStream allowPushStream(array $options = [])
 * @method ApplyBoardToken applyBoardToken(array $options = [])
 * @method ApplyRecordToken applyRecordToken(array $options = [])
 * @method BatchDeleteLiveDomainConfigs batchDeleteLiveDomainConfigs(array $options = [])
 * @method BatchSetLiveDomainConfigs batchSetLiveDomainConfigs(array $options = [])
 * @method CheckServiceForRole checkServiceForRole(array $options = [])
 * @method CloseLiveShift closeLiveShift(array $options = [])
 * @method CompleteBoard completeBoard(array $options = [])
 * @method CompleteBoardRecord completeBoardRecord(array $options = [])
 * @method ControlHtmlResource controlHtmlResource(array $options = [])
 * @method CopyCaster copyCaster(array $options = [])
 * @method CopyCasterSceneConfig copyCasterSceneConfig(array $options = [])
 * @method CreateBoard createBoard(array $options = [])
 * @method CreateCaster createCaster(array $options = [])
 * @method CreateLiveRealTimeLogDelivery createLiveRealTimeLogDelivery(array $options = [])
 * @method CreateLiveStreamRecordIndexFiles createLiveStreamRecordIndexFiles(array $options = [])
 * @method CreateMixStream createMixStream(array $options = [])
 * @method CreateRoom createRoom(array $options = [])
 * @method DeleteBoard deleteBoard(array $options = [])
 * @method DeleteCaster deleteCaster(array $options = [])
 * @method DeleteCasterComponent deleteCasterComponent(array $options = [])
 * @method DeleteCasterEpisode deleteCasterEpisode(array $options = [])
 * @method DeleteCasterEpisodeGroup deleteCasterEpisodeGroup(array $options = [])
 * @method DeleteCasterLayout deleteCasterLayout(array $options = [])
 * @method DeleteCasterProgram deleteCasterProgram(array $options = [])
 * @method DeleteCasterSceneConfig deleteCasterSceneConfig(array $options = [])
 * @method DeleteCasterVideoResource deleteCasterVideoResource(array $options = [])
 * @method DeleteHtmlResource deleteHtmlResource(array $options = [])
 * @method DeleteLiveAppRecordConfig deleteLiveAppRecordConfig(array $options = [])
 * @method DeleteLiveAppSnapshotConfig deleteLiveAppSnapshotConfig(array $options = [])
 * @method DeleteLiveASRConfig deleteLiveASRConfig(array $options = [])
 * @method DeleteLiveAudioAuditConfig deleteLiveAudioAuditConfig(array $options = [])
 * @method DeleteLiveAudioAuditNotifyConfig deleteLiveAudioAuditNotifyConfig(array $options = [])
 * @method DeleteLiveDetectNotifyConfig deleteLiveDetectNotifyConfig(array $options = [])
 * @method DeleteLiveDomain deleteLiveDomain(array $options = [])
 * @method DeleteLiveDomainMapping deleteLiveDomainMapping(array $options = [])
 * @method DeleteLiveDomainPlayMapping deleteLiveDomainPlayMapping(array $options = [])
 * @method DeleteLiveLazyPullStreamInfoConfig deleteLiveLazyPullStreamInfoConfig(array $options = [])
 * @method DeleteLivePullStreamInfoConfig deleteLivePullStreamInfoConfig(array $options = [])
 * @method DeleteLiveRealtimeLogDelivery deleteLiveRealtimeLogDelivery(array $options = [])
 * @method DeleteLiveRealTimeLogLogstore deleteLiveRealTimeLogLogstore(array $options = [])
 * @method DeleteLiveRecordNotifyConfig deleteLiveRecordNotifyConfig(array $options = [])
 * @method DeleteLiveRecordVodConfig deleteLiveRecordVodConfig(array $options = [])
 * @method DeleteLiveSnapshotDetectPornConfig deleteLiveSnapshotDetectPornConfig(array $options = [])
 * @method DeleteLiveSpecificStagingConfig deleteLiveSpecificStagingConfig(array $options = [])
 * @method DeleteLiveStreamsNotifyUrlConfig deleteLiveStreamsNotifyUrlConfig(array $options = [])
 * @method DeleteLiveStreamTranscode deleteLiveStreamTranscode(array $options = [])
 * @method DeleteMixStream deleteMixStream(array $options = [])
 * @method DeleteMultiRateConfig deleteMultiRateConfig(array $options = [])
 * @method DeletePlaylist deletePlaylist(array $options = [])
 * @method DeletePlaylistItems deletePlaylistItems(array $options = [])
 * @method DeleteRoom deleteRoom(array $options = [])
 * @method DeleteStudioLayout deleteStudioLayout(array $options = [])
 * @method DescribeBoardEvents describeBoardEvents(array $options = [])
 * @method DescribeBoards describeBoards(array $options = [])
 * @method DescribeBoardSnapshot describeBoardSnapshot(array $options = [])
 * @method DescribeCasterChannels describeCasterChannels(array $options = [])
 * @method DescribeCasterComponents describeCasterComponents(array $options = [])
 * @method DescribeCasterConfig describeCasterConfig(array $options = [])
 * @method DescribeCasterLayouts describeCasterLayouts(array $options = [])
 * @method DescribeCasterProgram describeCasterProgram(array $options = [])
 * @method DescribeCasterRtcInfo describeCasterRtcInfo(array $options = [])
 * @method DescribeCasters describeCasters(array $options = [])
 * @method DescribeCasterSceneAudio describeCasterSceneAudio(array $options = [])
 * @method DescribeCasterScenes describeCasterScenes(array $options = [])
 * @method DescribeCasterStreamUrl describeCasterStreamUrl(array $options = [])
 * @method DescribeCasterSyncGroup describeCasterSyncGroup(array $options = [])
 * @method DescribeCasterVideoResources describeCasterVideoResources(array $options = [])
 * @method DescribeDomainUsageData describeDomainUsageData(array $options = [])
 * @method DescribeDRMCertList describeDRMCertList(array $options = [])
 * @method DescribeForbidPushStreamRoomList describeForbidPushStreamRoomList(array $options = [])
 * @method DescribeHlsLiveStreamRealTimeBpsData describeHlsLiveStreamRealTimeBpsData(array $options = [])
 * @method DescribeHtmlResource describeHtmlResource(array $options = [])
 * @method DescribeLiveAsrConfig describeLiveAsrConfig(array $options = [])
 * @method DescribeLiveAudioAuditConfig describeLiveAudioAuditConfig(array $options = [])
 * @method DescribeLiveAudioAuditNotifyConfig describeLiveAudioAuditNotifyConfig(array $options = [])
 * @method DescribeLiveCertificateDetail describeLiveCertificateDetail(array $options = [])
 * @method DescribeLiveCertificateList describeLiveCertificateList(array $options = [])
 * @method DescribeLiveDetectNotifyConfig describeLiveDetectNotifyConfig(array $options = [])
 * @method DescribeLiveDetectPornData describeLiveDetectPornData(array $options = [])
 * @method DescribeLiveDomainBpsData describeLiveDomainBpsData(array $options = [])
 * @method DescribeLiveDomainBpsDataByTimeStamp describeLiveDomainBpsDataByTimeStamp(array $options = [])
 * @method DescribeLiveDomainCertificateInfo describeLiveDomainCertificateInfo(array $options = [])
 * @method DescribeLiveDomainConfigs describeLiveDomainConfigs(array $options = [])
 * @method DescribeLiveDomainDetail describeLiveDomainDetail(array $options = [])
 * @method DescribeLiveDomainFrameRateAndBitRateData describeLiveDomainFrameRateAndBitRateData(array $options = [])
 * @method DescribeLiveDomainLimit describeLiveDomainLimit(array $options = [])
 * @method DescribeLiveDomainMapping describeLiveDomainMapping(array $options = [])
 * @method DescribeLiveDomainOnlineUserNum describeLiveDomainOnlineUserNum(array $options = [])
 * @method DescribeLiveDomainPushBpsData describeLiveDomainPushBpsData(array $options = [])
 * @method DescribeLiveDomainPushTrafficData describeLiveDomainPushTrafficData(array $options = [])
 * @method DescribeLiveDomainPvUvData describeLiveDomainPvUvData(array $options = [])
 * @method DescribeLiveDomainRealTimeBpsData describeLiveDomainRealTimeBpsData(array $options = [])
 * @method DescribeLiveDomainRealTimeHttpCodeData describeLiveDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeLiveDomainRealtimeLogDelivery describeLiveDomainRealtimeLogDelivery(array $options = [])
 * @method DescribeLiveDomainRealTimeTrafficData describeLiveDomainRealTimeTrafficData(array $options = [])
 * @method DescribeLiveDomainRecordData describeLiveDomainRecordData(array $options = [])
 * @method DescribeLiveDomainRecordUsageData describeLiveDomainRecordUsageData(array $options = [])
 * @method DescribeLiveDomainSnapshotData describeLiveDomainSnapshotData(array $options = [])
 * @method DescribeLiveDomainStagingConfig describeLiveDomainStagingConfig(array $options = [])
 * @method DescribeLiveDomainStreamTranscodeData describeLiveDomainStreamTranscodeData(array $options = [])
 * @method DescribeLiveDomainTimeShiftData describeLiveDomainTimeShiftData(array $options = [])
 * @method DescribeLiveDomainTrafficData describeLiveDomainTrafficData(array $options = [])
 * @method DescribeLiveDomainTranscodeData describeLiveDomainTranscodeData(array $options = [])
 * @method DescribeLiveDrmUsageData describeLiveDrmUsageData(array $options = [])
 * @method DescribeLiveLazyPullStreamConfig describeLiveLazyPullStreamConfig(array $options = [])
 * @method DescribeLivePullStreamConfig describeLivePullStreamConfig(array $options = [])
 * @method DescribeLiveRealtimeDeliveryAcc describeLiveRealtimeDeliveryAcc(array $options = [])
 * @method DescribeLiveRealtimeLogAuthorized describeLiveRealtimeLogAuthorized(array $options = [])
 * @method DescribeLiveRecordConfig describeLiveRecordConfig(array $options = [])
 * @method DescribeLiveRecordNotifyConfig describeLiveRecordNotifyConfig(array $options = [])
 * @method DescribeLiveRecordVodConfigs describeLiveRecordVodConfigs(array $options = [])
 * @method DescribeLiveShiftConfigs describeLiveShiftConfigs(array $options = [])
 * @method DescribeLiveSnapshotConfig describeLiveSnapshotConfig(array $options = [])
 * @method DescribeLiveSnapshotDetectPornConfig describeLiveSnapshotDetectPornConfig(array $options = [])
 * @method DescribeLiveStagingIp describeLiveStagingIp(array $options = [])
 * @method DescribeLiveStreamBitRateData describeLiveStreamBitRateData(array $options = [])
 * @method DescribeLiveStreamCount describeLiveStreamCount(array $options = [])
 * @method DescribeLiveStreamDelayConfig describeLiveStreamDelayConfig(array $options = [])
 * @method DescribeLiveStreamHistoryUserNum describeLiveStreamHistoryUserNum(array $options = [])
 * @method DescribeLiveStreamOptimizedFeatureConfig describeLiveStreamOptimizedFeatureConfig(array $options = [])
 * @method DescribeLiveStreamRecordContent describeLiveStreamRecordContent(array $options = [])
 * @method DescribeLiveStreamRecordIndexFile describeLiveStreamRecordIndexFile(array $options = [])
 * @method DescribeLiveStreamRecordIndexFiles describeLiveStreamRecordIndexFiles(array $options = [])
 * @method DescribeLiveStreamsBlockList describeLiveStreamsBlockList(array $options = [])
 * @method DescribeLiveStreamsControlHistory describeLiveStreamsControlHistory(array $options = [])
 * @method DescribeLiveStreamSnapshotInfo describeLiveStreamSnapshotInfo(array $options = [])
 * @method DescribeLiveStreamsNotifyUrlConfig describeLiveStreamsNotifyUrlConfig(array $options = [])
 * @method DescribeLiveStreamsOnlineList describeLiveStreamsOnlineList(array $options = [])
 * @method DescribeLiveStreamsPublishList describeLiveStreamsPublishList(array $options = [])
 * @method DescribeLiveStreamTranscodeInfo describeLiveStreamTranscodeInfo(array $options = [])
 * @method DescribeLiveStreamTranscodeStreamNum describeLiveStreamTranscodeStreamNum(array $options = [])
 * @method DescribeLiveTagResources describeLiveTagResources(array $options = [])
 * @method DescribeLiveTopDomainsByFlow describeLiveTopDomainsByFlow(array $options = [])
 * @method DescribeLiveUserDomains describeLiveUserDomains(array $options = [])
 * @method DescribeLiveUserTags describeLiveUserTags(array $options = [])
 * @method DescribeLiveVerifyContent describeLiveVerifyContent(array $options = [])
 * @method DescribeMixStreamList describeMixStreamList(array $options = [])
 * @method DescribeRecord describeRecord(array $options = [])
 * @method DescribeRecords describeRecords(array $options = [])
 * @method DescribeRoomKickoutUserList describeRoomKickoutUserList(array $options = [])
 * @method DescribeRoomList describeRoomList(array $options = [])
 * @method DescribeRoomStatus describeRoomStatus(array $options = [])
 * @method DescribeStudioLayouts describeStudioLayouts(array $options = [])
 * @method DescribeToutiaoLivePlay describeToutiaoLivePlay(array $options = [])
 * @method DescribeToutiaoLivePublish describeToutiaoLivePublish(array $options = [])
 * @method DescribeUpBpsPeakData describeUpBpsPeakData(array $options = [])
 * @method DescribeUpBpsPeakOfLine describeUpBpsPeakOfLine(array $options = [])
 * @method DescribeUpPeakPublishStreamData describeUpPeakPublishStreamData(array $options = [])
 * @method DisableLiveRealtimeLogDelivery disableLiveRealtimeLogDelivery(array $options = [])
 * @method EditHtmlResource editHtmlResource(array $options = [])
 * @method EditPlaylist editPlaylist(array $options = [])
 * @method EffectCasterUrgent effectCasterUrgent(array $options = [])
 * @method EffectCasterVideoResource effectCasterVideoResource(array $options = [])
 * @method EnableLiveRealtimeLogDelivery enableLiveRealtimeLogDelivery(array $options = [])
 * @method ForbidLiveStream forbidLiveStream(array $options = [])
 * @method ForbidPushStream forbidPushStream(array $options = [])
 * @method GetMultiRateConfig getMultiRateConfig(array $options = [])
 * @method GetMultiRateConfigList getMultiRateConfigList(array $options = [])
 * @method JoinBoard joinBoard(array $options = [])
 * @method ListLiveRealtimeLogDelivery listLiveRealtimeLogDelivery(array $options = [])
 * @method ListLiveRealtimeLogDeliveryDomains listLiveRealtimeLogDeliveryDomains(array $options = [])
 * @method ListLiveRealtimeLogDeliveryInfos listLiveRealtimeLogDeliveryInfos(array $options = [])
 * @method ListPlaylist listPlaylist(array $options = [])
 * @method ListPlaylistItems listPlaylistItems(array $options = [])
 * @method ModifyCasterComponent modifyCasterComponent(array $options = [])
 * @method ModifyCasterEpisode modifyCasterEpisode(array $options = [])
 * @method ModifyCasterLayout modifyCasterLayout(array $options = [])
 * @method ModifyCasterProgram modifyCasterProgram(array $options = [])
 * @method ModifyCasterVideoResource modifyCasterVideoResource(array $options = [])
 * @method ModifyLiveDomainSchdmByProperty modifyLiveDomainSchdmByProperty(array $options = [])
 * @method ModifyLiveRealtimeLogDelivery modifyLiveRealtimeLogDelivery(array $options = [])
 * @method ModifyStudioLayout modifyStudioLayout(array $options = [])
 * @method OpenLiveShift openLiveShift(array $options = [])
 * @method PublishLiveStagingConfigToProduction publishLiveStagingConfigToProduction(array $options = [])
 * @method RealTimeRecordCommand realTimeRecordCommand(array $options = [])
 * @method RealTimeSnapshotCommand realTimeSnapshotCommand(array $options = [])
 * @method ResumeLiveStream resumeLiveStream(array $options = [])
 * @method RollbackLiveStagingConfig rollbackLiveStagingConfig(array $options = [])
 * @method SendRoomNotification sendRoomNotification(array $options = [])
 * @method SendRoomUserNotification sendRoomUserNotification(array $options = [])
 * @method SetBoardCallback setBoardCallback(array $options = [])
 * @method SetCasterChannel setCasterChannel(array $options = [])
 * @method SetCasterConfig setCasterConfig(array $options = [])
 * @method SetCasterSceneConfig setCasterSceneConfig(array $options = [])
 * @method SetCasterSyncGroup setCasterSyncGroup(array $options = [])
 * @method SetLiveDomainCertificate setLiveDomainCertificate(array $options = [])
 * @method SetLiveDomainStagingConfig setLiveDomainStagingConfig(array $options = [])
 * @method SetLiveLazyPullStreamInfoConfig setLiveLazyPullStreamInfoConfig(array $options = [])
 * @method SetLiveStreamDelayConfig setLiveStreamDelayConfig(array $options = [])
 * @method SetLiveStreamOptimizedFeatureConfig setLiveStreamOptimizedFeatureConfig(array $options = [])
 * @method SetLiveStreamsNotifyUrlConfig setLiveStreamsNotifyUrlConfig(array $options = [])
 * @method StartBoardRecord startBoardRecord(array $options = [])
 * @method StartCaster startCaster(array $options = [])
 * @method StartCasterScene startCasterScene(array $options = [])
 * @method StartLiveDomain startLiveDomain(array $options = [])
 * @method StartLiveIndex startLiveIndex(array $options = [])
 * @method StartPlaylist startPlaylist(array $options = [])
 * @method StopCaster stopCaster(array $options = [])
 * @method StopCasterScene stopCasterScene(array $options = [])
 * @method StopLiveDomain stopLiveDomain(array $options = [])
 * @method StopLiveIndex stopLiveIndex(array $options = [])
 * @method StopPlaylist stopPlaylist(array $options = [])
 * @method TagLiveResources tagLiveResources(array $options = [])
 * @method UnTagLiveResources unTagLiveResources(array $options = [])
 * @method UpdateBoard updateBoard(array $options = [])
 * @method UpdateBoardCallback updateBoardCallback(array $options = [])
 * @method UpdateCasterSceneAudio updateCasterSceneAudio(array $options = [])
 * @method UpdateCasterSceneConfig updateCasterSceneConfig(array $options = [])
 * @method UpdateLiveAppSnapshotConfig updateLiveAppSnapshotConfig(array $options = [])
 * @method UpdateLiveASRConfig updateLiveASRConfig(array $options = [])
 * @method UpdateLiveAudioAuditConfig updateLiveAudioAuditConfig(array $options = [])
 * @method UpdateLiveAudioAuditNotifyConfig updateLiveAudioAuditNotifyConfig(array $options = [])
 * @method UpdateLiveDetectNotifyConfig updateLiveDetectNotifyConfig(array $options = [])
 * @method UpdateLivePullStreamInfoConfig updateLivePullStreamInfoConfig(array $options = [])
 * @method UpdateLiveRecordNotifyConfig updateLiveRecordNotifyConfig(array $options = [])
 * @method UpdateLiveSnapshotDetectPornConfig updateLiveSnapshotDetectPornConfig(array $options = [])
 * @method UpdateLiveTopLevelDomain updateLiveTopLevelDomain(array $options = [])
 * @method UpdateMixStream updateMixStream(array $options = [])
 * @method VerifyLiveDomainOwner verifyLiveDomainOwner(array $options = [])
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
 * @method string getHtmlLayerContent()
 * @method $this withHtmlLayerContent($value)
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getLayerOrder()
 * @method $this withLayerOrder($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getLocationId()
 * @method $this withLocationId($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class AddCasterComponent extends Rpc
{
}

/**
 * @method string getEpisodeName()
 * @method $this withEpisodeName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeType()
 * @method $this withEpisodeType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method array getItem()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
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
			if(isset($depth1Value['ItemName'])){
				$this->options['query']['Item.' . ($depth1 + 1) . '.ItemName'] = $depth1Value['ItemName'];
			}
			if(isset($depth1Value['VodUrl'])){
				$this->options['query']['Item.' . ($depth1 + 1) . '.VodUrl'] = $depth1Value['VodUrl'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterEpisodeGroupContent extends Rpc
{
}

/**
 * @method array getBlendList()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method array getMixList()
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
			if(isset($depth1Value['VolumeRate'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
			}
			if(isset($depth1Value['ValidChannel'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
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
			if(isset($depth1Value['FillMode'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
			}
			if(isset($depth1Value['HeightNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
			}
			if(isset($depth1Value['WidthNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
			}
			if(isset($depth1Value['PositionRefer'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
			}
			foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
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
 * @method array getEpisode()
 * @method string getCasterId()
 * @method $this withCasterId($value)
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
			if(isset($depth1Value['EpisodeType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
			}
			if(isset($depth1Value['EpisodeName'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			foreach ($depth1Value['ComponentId'] as $i => $iValue) {
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['EndTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['SwitchType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndOffset()
 * @method $this withEndOffset($value)
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getVodUrl()
 * @method $this withVodUrl($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getKmsKeyExpireInterval()
 * @method $this withKmsKeyExpireInterval($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getKmsUID()
 * @method $this withKmsUID($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEncryptParameters()
 * @method $this withEncryptParameters($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 * @method string getKmsKeyID()
 * @method $this withKmsKeyID($value)
 */
class AddCustomLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getServCert()
 * @method $this withServCert($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAsk()
 * @method $this withAsk($value)
 * @method string getPassphrase()
 * @method $this withPassphrase($value)
 */
class AddDRMCertificate extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRecordFormat()
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
			if(isset($depth1Value['SliceOssObjectPrefix'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.SliceOssObjectPrefix'] = $depth1Value['SliceOssObjectPrefix'];
			}
			if(isset($depth1Value['Format'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['OssObjectPrefix'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.OssObjectPrefix'] = $depth1Value['OssObjectPrefix'];
			}
			if(isset($depth1Value['CycleDuration'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class AddLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getMnsTopic()
 * @method $this withMnsTopic($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getHttpCallbackURL()
 * @method $this withHttpCallbackURL($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMnsRegion()
 * @method $this withMnsRegion($value)
 */
class AddLiveASRConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class AddLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackTemplate()
 * @method $this withCallbackTemplate($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class AddLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
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
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class AddLiveDomainMapping extends Rpc
{
}

/**
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class AddLiveDomainPlayMapping extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getPullAlways()
 * @method $this withPullAlways($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 */
class AddLivePullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getOnDemandUrl()
 * @method $this withOnDemandUrl($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getNeedStatusNotify()
 * @method $this withNeedStatusNotify($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getAutoCompose()
 * @method $this withAutoCompose($value)
 * @method string getComposeVodTranscodeGroupId()
 * @method $this withComposeVodTranscodeGroupId($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getVodTranscodeGroupId()
 * @method $this withVodTranscodeGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCycleDuration()
 * @method $this withCycleDuration($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveRecordVodConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method array getScene()
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
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
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getMix()
 * @method $this withMix($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEncryptParameters()
 * @method $this withEncryptParameters($value)
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWaterPattern()
 * @method $this withWaterPattern($value)
 * @method string getOnlyAudio()
 * @method $this withOnlyAudio($value)
 */
class AddLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTemplates()
 * @method $this withTemplates($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsLazy()
 * @method $this withIsLazy($value)
 * @method string getAvFormat()
 * @method $this withAvFormat($value)
 * @method string getIsTimeAlign()
 * @method $this withIsTimeAlign($value)
 */
class AddMultiRateConfig extends Rpc
{
}

/**
 * @method string getProgramItems()
 * @method $this withProgramItems($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProgramConfig()
 * @method $this withProgramConfig($value)
 */
class AddPlaylistItems extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getDeleteBframes()
 * @method $this withDeleteBframes($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getOpus()
 * @method $this withOpus($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 */
class AddRtsLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getScreenInputConfigList()
 * @method $this withScreenInputConfigList($value)
 * @method string getLayoutType()
 * @method $this withLayoutType($value)
 * @method string getLayoutName()
 * @method $this withLayoutName($value)
 * @method string getLayerOrderConfigList()
 * @method $this withLayerOrderConfigList($value)
 * @method string getMediaInputConfigList()
 * @method $this withMediaInputConfigList($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getBgImageConfig()
 * @method $this withBgImageConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommonConfig()
 * @method $this withCommonConfig($value)
 */
class AddStudioLayout extends Rpc
{
}

/**
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getRepeat()
 * @method $this withRepeat($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDelay()
 * @method $this withDelay($value)
 */
class AddTrancodeSEI extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ApplyRecordToken extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchDeleteLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchSetLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSPIRegionId()
 * @method $this withSPIRegionId($value)
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getDeletionTaskId()
 * @method $this withDeletionTaskId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class CheckServiceForRole extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CloseLiveShift extends Rpc
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
 * @method string getHtmlUrl()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperate()
 * @method $this withOperate($value)
 * @method string getHtmlResourceId()
 * @method $this withHtmlResourceId($value)
 */
class ControlHtmlResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHtmlUrl($value)
    {
        $this->data['HtmlUrl'] = $value;
        $this->options['query']['htmlUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getSrcCasterId()
 * @method $this withSrcCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyCaster extends Rpc
{
}

/**
 * @method string getFromSceneId()
 * @method $this withFromSceneId($value)
 * @method string getToSceneId()
 * @method $this withToSceneId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyCasterSceneConfig extends Rpc
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getCasterTemplate()
 * @method $this withCasterTemplate($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getNormType()
 * @method $this withNormType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPurchaseTime()
 * @method $this withPurchaseTime($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateCaster extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class CreateLiveRealTimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateLiveStreamRecordIndexFiles extends Rpc
{
}

/**
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getInputStreamList()
 * @method $this withInputStreamList($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackConfig()
 * @method $this withCallbackConfig($value)
 */
class CreateMixStream extends Rpc
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
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getBoardId()
 * @method $this withBoardId($value)
 */
class DeleteBoard extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCaster extends Rpc
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
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterEpisodeGroup extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterLayout extends Rpc
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
 * @method string getType()
 * @method $this withType($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DeleteCasterSceneConfig extends Rpc
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
 * @method string getHtmlUrl()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHtmlResourceId()
 * @method $this withHtmlResourceId($value)
 */
class DeleteHtmlResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHtmlUrl($value)
    {
        $this->data['HtmlUrl'] = $value;
        $this->options['query']['htmlUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAppRecordConfig extends Rpc
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
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveASRConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAudioAuditNotifyConfig extends Rpc
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
class DeleteLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteLiveDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class DeleteLiveDomainMapping extends Rpc
{
}

/**
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class DeleteLiveDomainPlayMapping extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLivePullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class DeleteLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class DeleteLiveRealTimeLogLogstore extends Rpc
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
class DeleteLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveRecordVodConfig extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteLiveSpecificStagingConfig extends Rpc
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
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getMixStreamId()
 * @method $this withMixStreamId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMixStream extends Rpc
{
}

/**
 * @method string getDeleteAll()
 * @method $this withDeleteAll($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTemplates()
 * @method $this withTemplates($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMultiRateConfig extends Rpc
{
}

/**
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePlaylist extends Rpc
{
}

/**
 * @method string getProgramItemIds()
 * @method $this withProgramItemIds($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePlaylistItems extends Rpc
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
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteStudioLayout extends Rpc
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
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterChannels extends Rpc
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
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterConfig extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterLayouts extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeType()
 * @method $this withEpisodeType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
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
class DescribeCasterRtcInfo extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeCasterSceneAudio extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeCasterScenes extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterSyncGroup extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainUsageData extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDRMCertList extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTime()
 * @method $this withTime($value)
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getHtmlUrl()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHtmlResourceId()
 * @method $this withHtmlResourceId($value)
 */
class DescribeHtmlResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHtmlUrl($value)
    {
        $this->data['HtmlUrl'] = $value;
        $this->options['query']['htmlUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveAsrConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveCertificateDetail extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveCertificateList extends Rpc
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
 * @method string getFee()
 * @method $this withFee($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLiveDetectPornData extends Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainBpsData extends Rpc
{
}

/**
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeLiveDomainBpsDataByTimeStamp extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveDomainDetail extends Rpc
{
}

/**
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainFrameRateAndBitRateData extends Rpc
{
}

/**
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainLimit extends Rpc
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
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainOnlineUserNum extends Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainPushBpsData extends Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainPushTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainPvUvData extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealtimeLogDelivery extends Rpc
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
class DescribeLiveDomainRealTimeTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRecordType()
 * @method $this withRecordType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRecordData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRecordUsageData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainSnapshotData extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainStagingConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplit()
 * @method $this withSplit($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainStreamTranscodeData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainTimeShiftData extends Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainTranscodeData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDrmUsageData extends Rpc
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
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLivePullStreamConfig extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class DescribeLiveRealtimeDeliveryAcc extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLiveOpenapiReserve()
 * @method $this withLiveOpenapiReserve($value)
 */
class DescribeLiveRealtimeLogAuthorized extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveRecordConfig extends Rpc
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
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveRecordVodConfigs extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveShiftConfigs extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveSnapshotConfig extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveSnapshotDetectPornConfig extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStagingIp extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamBitRateData extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamDelayConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamHistoryUserNum extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamRecordContent extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 */
class DescribeLiveStreamRecordIndexFile extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamRecordIndexFiles extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsBlockList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRows()
 * @method $this withRows($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class DescribeLiveStreamsControlHistory extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamSnapshotInfo extends Rpc
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
class DescribeLiveStreamsOnlineList extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainTranscodeName()
 * @method $this withDomainTranscodeName($value)
 */
class DescribeLiveStreamTranscodeInfo extends Rpc
{
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
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeLiveTagResources extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegionName()
 * @method $this withRegionName($value)
 * @method array getTag()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 * @method string getLiveDomainType()
 * @method $this withLiveDomainType($value)
 */
class DescribeLiveUserDomains extends Rpc
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
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveUserTags extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveVerifyContent extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getMixStreamId()
 * @method $this withMixStreamId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeMixStreamList extends Rpc
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
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStudioLayouts extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeToutiaoLivePlay extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeToutiaoLivePublish extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpBpsPeakOfLine extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpPeakPublishStreamData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisableLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getHtmlUrl()
 * @method $this withHtmlUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getHtmlContent()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHtmlResourceId()
 * @method $this withHtmlResourceId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class EditHtmlResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHtmlContent($value)
    {
        $this->data['HtmlContent'] = $value;
        $this->options['query']['htmlContent'] = $value;

        return $this;
    }
}

/**
 * @method string getProgramItems()
 * @method $this withProgramItems($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProgramConfig()
 * @method $this withProgramConfig($value)
 */
class EditPlaylist extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class EffectCasterUrgent extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class EffectCasterVideoResource extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
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
class ForbidLiveStream extends Rpc
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
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetMultiRateConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetMultiRateConfigList extends Rpc
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
 * @method string getLiveOpenapiReserve()
 * @method $this withLiveOpenapiReserve($value)
 */
class ListLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class ListLiveRealtimeLogDeliveryDomains extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLiveOpenapiReserve()
 * @method $this withLiveOpenapiReserve($value)
 */
class ListLiveRealtimeLogDeliveryInfos extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListPlaylist extends Rpc
{
}

/**
 * @method string getProgramItemIds()
 * @method $this withProgramItemIds($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListPlaylistItems extends Rpc
{
}

/**
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class ModifyCasterComponent extends Rpc
{
}

/**
 * @method string getEpisodeName()
 * @method $this withEpisodeName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
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
 * @method array getBlendList()
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method array getMixList()
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
			if(isset($depth1Value['VolumeRate'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
			}
			if(isset($depth1Value['ValidChannel'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
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
			if(isset($depth1Value['FillMode'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
			}
			if(isset($depth1Value['HeightNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
			}
			if(isset($depth1Value['WidthNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
			}
			if(isset($depth1Value['PositionRefer'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
			}
			foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
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
 * @method array getEpisode()
 * @method string getCasterId()
 * @method $this withCasterId($value)
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
			if(isset($depth1Value['EpisodeId'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeId'] = $depth1Value['EpisodeId'];
			}
			if(isset($depth1Value['EpisodeType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
			}
			if(isset($depth1Value['EpisodeName'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			foreach ($depth1Value['ComponentId'] as $i => $iValue) {
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['EndTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['SwitchType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndOffset()
 * @method $this withEndOffset($value)
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getVodUrl()
 * @method $this withVodUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class ModifyLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getScreenInputConfigList()
 * @method $this withScreenInputConfigList($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getLayoutName()
 * @method $this withLayoutName($value)
 * @method string getLayerOrderConfigList()
 * @method $this withLayerOrderConfigList($value)
 * @method string getMediaInputConfigList()
 * @method $this withMediaInputConfigList($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getBgImageConfig()
 * @method $this withBgImageConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommonConfig()
 * @method $this withCommonConfig($value)
 */
class ModifyStudioLayout extends Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVision()
 * @method $this withVision($value)
 */
class OpenLiveShift extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PublishLiveStagingConfigToProduction extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class RealTimeRecordCommand extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class RealTimeSnapshotCommand extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResumeLiveStream extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RollbackLiveStagingConfig extends Rpc
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
 * @method string getSeekOffset()
 * @method $this withSeekOffset($value)
 * @method string getPlayStatus()
 * @method $this withPlayStatus($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReloadFlag()
 * @method $this withReloadFlag($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SetCasterChannel extends Rpc
{
}

/**
 * @method string getChannelEnable()
 * @method $this withChannelEnable($value)
 * @method string getProgramEffect()
 * @method $this withProgramEffect($value)
 * @method string getProgramName()
 * @method $this withProgramName($value)
 * @method string getRecordConfig()
 * @method $this withRecordConfig($value)
 * @method string getUrgentMaterialId()
 * @method $this withUrgentMaterialId($value)
 * @method string getTranscodeConfig()
 * @method $this withTranscodeConfig($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDelay()
 * @method $this withDelay($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class SetCasterConfig extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
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
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSyncGroup()
 */
class SetCasterSyncGroup extends Rpc
{

    /**
     * @param array $syncGroup
     *
     * @return $this
     */
	public function withSyncGroup(array $syncGroup)
	{
	    $this->data['SyncGroup'] = $syncGroup;
		foreach ($syncGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['Mode'])){
				$this->options['query']['SyncGroup.' . ($depth1 + 1) . '.Mode'] = $depth1Value['Mode'];
			}
			if(isset($depth1Value['SyncDelayThreshold'])){
				$this->options['query']['SyncGroup.' . ($depth1 + 1) . '.SyncDelayThreshold'] = $depth1Value['SyncDelayThreshold'];
			}
			if(isset($depth1Value['HostResourceId'])){
				$this->options['query']['SyncGroup.' . ($depth1 + 1) . '.HostResourceId'] = $depth1Value['HostResourceId'];
			}
			foreach ($depth1Value['ResourceIds'] as $i => $iValue) {
				$this->options['query']['SyncGroup.' . ($depth1 + 1) . '.ResourceIds.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
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
 */
class SetLiveDomainCertificate extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetLiveDomainStagingConfig extends Rpc
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
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
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
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartCaster extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StartCasterScene extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class StartLiveDomain extends Rpc
{
}

/**
 * @method string getTokenId()
 * @method $this withTokenId($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getOssRamRole()
 * @method $this withOssRamRole($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssUserId()
 * @method $this withOssUserId($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getInputUrl()
 * @method $this withInputUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class StartLiveIndex extends Rpc
{
}

/**
 * @method string getResumeMode()
 * @method $this withResumeMode($value)
 * @method string getStartItemId()
 * @method $this withStartItemId($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartPlaylist extends Rpc
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
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StopCasterScene extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class StopLiveDomain extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopLiveIndex extends Rpc
{
}

/**
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopPlaylist extends Rpc
{
}

/**
 * @method array getTag()
 * @method array getResourceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagLiveResources extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UnTagLiveResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAudioLayer()
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method array getMixList()
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
			if(isset($depth1Value['VolumeRate'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
			}
			if(isset($depth1Value['ValidChannel'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
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
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
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
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class UpdateLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getMnsTopic()
 * @method $this withMnsTopic($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getHttpCallbackURL()
 * @method $this withHttpCallbackURL($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMnsRegion()
 * @method $this withMnsRegion($value)
 */
class UpdateLiveASRConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class UpdateLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackTemplate()
 * @method $this withCallbackTemplate($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class UpdateLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getPullAlways()
 * @method $this withPullAlways($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 */
class UpdateLivePullStreamInfoConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOnDemandUrl()
 * @method $this withOnDemandUrl($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getNeedStatusNotify()
 * @method $this withNeedStatusNotify($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method array getScene()
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
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
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class UpdateLiveTopLevelDomain extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getMixStreamId()
 * @method $this withMixStreamId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getInputStreamList()
 * @method $this withInputStreamList($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateMixStream extends Rpc
{
}

/**
 * @method string getVerifyType()
 * @method $this withVerifyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VerifyLiveDomainOwner extends Rpc
{
}
