<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCdnDomain addCdnDomain(array $options = [])
 * @method AddFCTrigger addFCTrigger(array $options = [])
 * @method AddLiveAppRecordConfig addLiveAppRecordConfig(array $options = [])
 * @method AddLiveAppSnapshotConfig addLiveAppSnapshotConfig(array $options = [])
 * @method AddLiveDomainMapping addLiveDomainMapping(array $options = [])
 * @method AddLiveStreamTranscode addLiveStreamTranscode(array $options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig(array $options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig(array $options = [])
 * @method CreateLiveStreamRecordIndexFiles createLiveStreamRecordIndexFiles(array $options = [])
 * @method DeleteCacheExpiredConfig deleteCacheExpiredConfig(array $options = [])
 * @method DeleteCdnDomain deleteCdnDomain(array $options = [])
 * @method DeleteFCTrigger deleteFCTrigger(array $options = [])
 * @method DeleteHttpHeaderConfig deleteHttpHeaderConfig(array $options = [])
 * @method DeleteSpecificConfig deleteSpecificConfig(array $options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs(array $options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail(array $options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs(array $options = [])
 * @method DescribeCdnMonitorData describeCdnMonitorData(array $options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp(array $options = [])
 * @method DescribeCdnService describeCdnService(array $options = [])
 * @method DescribeCdnTypes describeCdnTypes(array $options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota(array $options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig(array $options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime(array $options = [])
 * @method DescribeDomainBpsData describeDomainBpsData(array $options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp(array $options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo(array $options = [])
 * @method DescribeDomainConfigs describeDomainConfigs(array $options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig(array $options = [])
 * @method DescribeDomainFileSizeProportionData describeDomainFileSizeProportionData(array $options = [])
 * @method DescribeDomainFlowData describeDomainFlowData(array $options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData(array $options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData(array $options = [])
 * @method DescribeDomainISPData describeDomainISPData(array $options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData(array $options = [])
 * @method DescribeDomainPathData describeDomainPathData(array $options = [])
 * @method DescribeDomainPvData describeDomainPvData(array $options = [])
 * @method DescribeDomainQpsData describeDomainQpsData(array $options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData(array $options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData(array $options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeDomainRegionData describeDomainRegionData(array $options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData(array $options = [])
 * @method DescribeDomainsBySource describeDomainsBySource(array $options = [])
 * @method DescribeDomainSlowRatio describeDomainSlowRatio(array $options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData(array $options = [])
 * @method DescribeDomainSrcFlowData describeDomainSrcFlowData(array $options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay(array $options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit(array $options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit(array $options = [])
 * @method DescribeDomainUvData describeDomainUvData(array $options = [])
 * @method DescribeFCTrigger describeFCTrigger(array $options = [])
 * @method DescribeIpInfo describeIpInfo(array $options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain(array $options = [])
 * @method DescribeL2VipsByDynamicDomain describeL2VipsByDynamicDomain(array $options = [])
 * @method DescribeLivePullStreamConfig describeLivePullStreamConfig(array $options = [])
 * @method DescribeLiveRecordConfig describeLiveRecordConfig(array $options = [])
 * @method DescribeLiveSnapshotConfig describeLiveSnapshotConfig(array $options = [])
 * @method DescribeLiveStreamBitRateData describeLiveStreamBitRateData(array $options = [])
 * @method DescribeLiveStreamOnlineUserNum describeLiveStreamOnlineUserNum(array $options = [])
 * @method DescribeLiveStreamRecordContent describeLiveStreamRecordContent(array $options = [])
 * @method DescribeLiveStreamRecordIndexFile describeLiveStreamRecordIndexFile(array $options = [])
 * @method DescribeLiveStreamRecordIndexFiles describeLiveStreamRecordIndexFiles(array $options = [])
 * @method DescribeLiveStreamsBlockList describeLiveStreamsBlockList(array $options = [])
 * @method DescribeLiveStreamsControlHistory describeLiveStreamsControlHistory(array $options = [])
 * @method DescribeLiveStreamsFrameRateAndBitRateData describeLiveStreamsFrameRateAndBitRateData(array $options = [])
 * @method DescribeLiveStreamSnapshotInfo describeLiveStreamSnapshotInfo(array $options = [])
 * @method DescribeLiveStreamsOnlineList describeLiveStreamsOnlineList(array $options = [])
 * @method DescribeLiveStreamsPublishList describeLiveStreamsPublishList(array $options = [])
 * @method DescribeLiveStreamTranscodeInfo describeLiveStreamTranscodeInfo(array $options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService(array $options = [])
 * @method DescribeRefreshQuota describeRefreshQuota(array $options = [])
 * @method DescribeRefreshTasks describeRefreshTasks(array $options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow(array $options = [])
 * @method DescribeUserConfigs describeUserConfigs(array $options = [])
 * @method DescribeUserCustomerLabels describeUserCustomerLabels(array $options = [])
 * @method DescribeUserCustomLogConfig describeUserCustomLogConfig(array $options = [])
 * @method DescribeUserDomains describeUserDomains(array $options = [])
 * @method ForbidLiveStream forbidLiveStream(array $options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId(array $options = [])
 * @method ModifyCdnDomain modifyCdnDomain(array $options = [])
 * @method ModifyCdnService modifyCdnService(array $options = [])
 * @method ModifyDomainCustomLogConfig modifyDomainCustomLogConfig(array $options = [])
 * @method ModifyFileCacheExpiredConfig modifyFileCacheExpiredConfig(array $options = [])
 * @method ModifyHttpHeaderConfig modifyHttpHeaderConfig(array $options = [])
 * @method ModifyPathCacheExpiredConfig modifyPathCacheExpiredConfig(array $options = [])
 * @method ModifyUserCustomLogConfig modifyUserCustomLogConfig(array $options = [])
 * @method OpenCdnService openCdnService(array $options = [])
 * @method PushObjectCache pushObjectCache(array $options = [])
 * @method RefreshObjectCaches refreshObjectCaches(array $options = [])
 * @method ResumeLiveStream resumeLiveStream(array $options = [])
 * @method SetCcConfig setCcConfig(array $options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method SetDynamicConfig setDynamicConfig(array $options = [])
 * @method SetFileCacheExpiredConfig setFileCacheExpiredConfig(array $options = [])
 * @method SetForceRedirectConfig setForceRedirectConfig(array $options = [])
 * @method SetForwardSchemeConfig setForwardSchemeConfig(array $options = [])
 * @method SetHttpHeaderConfig setHttpHeaderConfig(array $options = [])
 * @method SetHttpsOptionConfig setHttpsOptionConfig(array $options = [])
 * @method SetIgnoreQueryStringConfig setIgnoreQueryStringConfig(array $options = [])
 * @method SetIpAllowListConfig setIpAllowListConfig(array $options = [])
 * @method SetIpBlackListConfig setIpBlackListConfig(array $options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig(array $options = [])
 * @method SetLiveStreamsNotifyUrlConfig setLiveStreamsNotifyUrlConfig(array $options = [])
 * @method SetOptimizeConfig setOptimizeConfig(array $options = [])
 * @method SetPageCompressConfig setPageCompressConfig(array $options = [])
 * @method SetPathCacheExpiredConfig setPathCacheExpiredConfig(array $options = [])
 * @method SetRangeConfig setRangeConfig(array $options = [])
 * @method SetRefererConfig setRefererConfig(array $options = [])
 * @method SetRemoveQueryStringConfig setRemoveQueryStringConfig(array $options = [])
 * @method SetReqAuthConfig setReqAuthConfig(array $options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig(array $options = [])
 * @method SetSourceHostConfig setSourceHostConfig(array $options = [])
 * @method SetVideoSeekConfig setVideoSeekConfig(array $options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig(array $options = [])
 * @method StartCdnDomain startCdnDomain(array $options = [])
 * @method StopCdnDomain stopCdnDomain(array $options = [])
 * @method UpdateFCTrigger updateFCTrigger(array $options = [])
 * @method UpdateLiveAppSnapshotConfig updateLiveAppSnapshotConfig(array $options = [])
 */
class CdnApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cdn';

    /** @var string */
    public $version = '2014-11-11';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getPriorities()
 * @method $this withPriorities($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class AddCdnDomain extends Rpc
{
}

/**
 * @method string getNotes()
 * @method string getEventMetaVersion()
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoleARN()
 * @method string getEventMetaName()
 * @method string getFunctionARN()
 */
class AddFCTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotes($value)
    {
        $this->data['Notes'] = $value;
        $this->options['form_params']['Notes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventMetaVersion($value)
    {
        $this->data['EventMetaVersion'] = $value;
        $this->options['form_params']['EventMetaVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceARN($value)
    {
        $this->data['SourceARN'] = $value;
        $this->options['form_params']['SourceARN'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleARN($value)
    {
        $this->data['RoleARN'] = $value;
        $this->options['form_params']['RoleARN'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventMetaName($value)
    {
        $this->data['EventMetaName'] = $value;
        $this->options['form_params']['EventMetaName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionARN($value)
    {
        $this->data['FunctionARN'] = $value;
        $this->options['form_params']['FunctionARN'] = $value;

        return $this;
    }
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
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
 * @method string getOssObjectPrefix()
 * @method $this withOssObjectPrefix($value)
 */
class AddLiveAppRecordConfig extends Rpc
{
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
 */
class AddLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 */
class AddLiveDomainMapping extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getRecord()
 * @method $this withRecord($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getSnapshot()
 * @method $this withSnapshot($value)
 */
class AddLiveStreamTranscode extends Rpc
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
class BatchDeleteCdnDomainConfig extends Rpc
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
class BatchSetCdnDomainConfig extends Rpc
{
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCacheType()
 * @method $this withCacheType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 */
class DeleteCacheExpiredConfig extends Rpc
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
class DeleteCdnDomain extends Rpc
{
}

/**
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteFCTrigger extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 */
class DeleteHttpHeaderConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteSpecificConfig extends Rpc
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
class DescribeCdnDomainConfigs extends Rpc
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
class DescribeCdnDomainDetail extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLogDay()
 * @method $this withLogDay($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnDomainLogs extends Rpc
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
class DescribeCdnMonitorData extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeCdnRegionAndIsp extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeCdnService extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeCdnTypes extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeCdnUserQuota extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DescribeCustomLogConfig extends Rpc
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
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getOutString()
 * @method $this withOutString($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainAverageResponseTime extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainBpsData extends Rpc
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
class DescribeDomainBpsDataByTimeStamp extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigList()
 * @method $this withConfigList($value)
 */
class DescribeDomainConfigs extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDomainFileSizeProportionData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainFlowData extends Rpc
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
class DescribeDomainHitRateData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainHttpCodeData extends Rpc
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
class DescribeDomainISPData extends Rpc
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
class DescribeDomainMax95BpsData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainPathData extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDomainPvData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainQpsData extends Rpc
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
class DescribeDomainRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class DescribeDomainRealTimeByteHitRateData extends Rpc
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
class DescribeDomainRealTimeHttpCodeData extends Rpc
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
class DescribeDomainRealTimeQpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class DescribeDomainRealTimeReqHitRateData extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class DescribeDomainRealTimeSrcBpsData extends Rpc
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
class DescribeDomainRealTimeSrcTrafficData extends Rpc
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
class DescribeDomainRegionData extends Rpc
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
class DescribeDomainReqHitRateData extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDomainsBySource extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainSlowRatio extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFixTimeGap()
 * @method $this withFixTimeGap($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainSrcBpsData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFixTimeGap()
 * @method $this withFixTimeGap($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainSrcFlowData extends Rpc
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
class DescribeDomainsUsageByDay extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDomainTopReferVisit extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDomainTopUrlVisit extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDomainUvData extends Rpc
{
}

/**
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFCTrigger extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeIpInfo extends Rpc
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
class DescribeL2VipsByDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeL2VipsByDynamicDomain extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLivePullStreamConfig extends Rpc
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
class DescribeLiveRecordConfig extends Rpc
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
 * @method string getStreamName()
 * @method $this withStreamName($value)
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getHlsSwitch()
 * @method $this withHlsSwitch($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamOnlineUserNum extends Rpc
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
class DescribeLiveStreamRecordIndexFiles extends Rpc
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
class DescribeLiveStreamsBlockList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsFrameRateAndBitRateData extends Rpc
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
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveStreamTranscodeInfo extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRangeDataByLocateAndIspService extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeRefreshQuota extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRefreshTasks extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DescribeUserConfigs extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUserCustomerLabels extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCheckDomainShow()
 * @method $this withCheckDomainShow($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 */
class DescribeUserDomains extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getResumeTime()
 * @method $this withResumeTime($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ForbidLiveStream extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class ListDomainsByLogConfigId extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSourcePort()
 * @method $this withSourcePort($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPriorities()
 * @method $this withPriorities($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCdnDomain extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 */
class ModifyCdnService extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class ModifyDomainCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getCacheContent()
 * @method $this withCacheContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 */
class ModifyFileCacheExpiredConfig extends Rpc
{
}

/**
 * @method string getHeaderValue()
 * @method $this withHeaderValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 * @method string getHeaderKey()
 * @method $this withHeaderKey($value)
 */
class ModifyHttpHeaderConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getCacheContent()
 * @method $this withCacheContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 */
class ModifyPathCacheExpiredConfig extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class ModifyUserCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 */
class OpenCdnService extends Rpc
{
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class PushObjectCache extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 */
class RefreshObjectCaches extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAllowIps()
 * @method $this withAllowIps($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBlockIps()
 * @method $this withBlockIps($value)
 */
class SetCcConfig extends Rpc
{
}

/**
 * @method string getServerCertificate()
 * @method $this withServerCertificate($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getServerCertificateStatus()
 * @method $this withServerCertificateStatus($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getForceSet()
 * @method $this withForceSet($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class SetDomainServerCertificate extends Rpc
{
}

/**
 * @method string getDynamicOrigin()
 * @method $this withDynamicOrigin($value)
 * @method string getStaticType()
 * @method $this withStaticType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStaticUri()
 * @method $this withStaticUri($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStaticPath()
 * @method $this withStaticPath($value)
 * @method string getDynamicCacheControl()
 * @method $this withDynamicCacheControl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDynamicConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getCacheContent()
 * @method $this withCacheContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 */
class SetFileCacheExpiredConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRedirectType()
 * @method $this withRedirectType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SetForceRedirectConfig extends Rpc
{
}

/**
 * @method string getSchemeOriginPort()
 * @method $this withSchemeOriginPort($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getSchemeOrigin()
 * @method $this withSchemeOrigin($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetForwardSchemeConfig extends Rpc
{
}

/**
 * @method string getHeaderValue()
 * @method $this withHeaderValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getHeaderKey()
 * @method $this withHeaderKey($value)
 */
class SetHttpHeaderConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getHttp2()
 * @method $this withHttp2($value)
 */
class SetHttpsOptionConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getKeepOssArgs()
 * @method $this withKeepOssArgs($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHashKeyArgs()
 * @method $this withHashKeyArgs($value)
 */
class SetIgnoreQueryStringConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAllowIps()
 * @method $this withAllowIps($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SetIpAllowListConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBlockIps()
 * @method $this withBlockIps($value)
 */
class SetIpBlackListConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPrivateOssAuth()
 * @method $this withPrivateOssAuth($value)
 */
class SetL2OssKeyConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class SetOptimizeConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class SetPageCompressConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getCacheContent()
 * @method $this withCacheContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 */
class SetPathCacheExpiredConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class SetRangeConfig extends Rpc
{
}

/**
 * @method string getReferList()
 * @method $this withReferList($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReferType()
 * @method $this withReferType($value)
 * @method string getDisableAst()
 * @method $this withDisableAst($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAllowEmpty()
 * @method $this withAllowEmpty($value)
 */
class SetRefererConfig extends Rpc
{
}

/**
 * @method string getKeepOssArgs()
 * @method $this withKeepOssArgs($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getAliRemoveArgs()
 * @method $this withAliRemoveArgs($value)
 */
class SetRemoveQueryStringConfig extends Rpc
{
}

/**
 * @method string getKey1()
 * @method $this withKey1($value)
 * @method string getKey2()
 * @method $this withKey2($value)
 * @method string getTimeOut()
 * @method $this withTimeOut($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAuthRemoteDesc()
 * @method $this withAuthRemoteDesc($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetReqAuthConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetReqHeaderConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getBackSrcDomain()
 * @method $this withBackSrcDomain($value)
 */
class SetSourceHostConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class SetVideoSeekConfig extends Rpc
{
}

/**
 * @method string getWaitUrl()
 * @method $this withWaitUrl($value)
 * @method string getWaitUri()
 * @method $this withWaitUri($value)
 * @method string getMaxTimeWait()
 * @method $this withMaxTimeWait($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAllowPct()
 * @method $this withAllowPct($value)
 * @method string getGapTime()
 * @method $this withGapTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetWaitingRoomConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class StartCdnDomain extends Rpc
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
class StopCdnDomain extends Rpc
{
}

/**
 * @method string getNotes()
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getSourceARN()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoleARN()
 * @method string getFunctionARN()
 */
class UpdateFCTrigger extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotes($value)
    {
        $this->data['Notes'] = $value;
        $this->options['form_params']['Notes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceARN($value)
    {
        $this->data['SourceARN'] = $value;
        $this->options['form_params']['SourceARN'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleARN($value)
    {
        $this->data['RoleARN'] = $value;
        $this->options['form_params']['RoleARN'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionARN($value)
    {
        $this->data['FunctionARN'] = $value;
        $this->options['form_params']['FunctionARN'] = $value;

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
 */
class UpdateLiveAppSnapshotConfig extends Rpc
{
}
