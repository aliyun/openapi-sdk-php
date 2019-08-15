<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeDomainQpsDataByLayer describeDomainQpsDataByLayer(array $options = [])
 * @method DeleteSpecificStagingConfig deleteSpecificStagingConfig(array $options = [])
 * @method ModifyCdnDomainSchdmByProperty modifyCdnDomainSchdmByProperty(array $options = [])
 * @method DescribeCdnHttpsDomainList describeCdnHttpsDomainList(array $options = [])
 * @method DescribeCdnDomainByCertificate describeCdnDomainByCertificate(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method DescribeUserTags describeUserTags(array $options = [])
 * @method DescribeTagResources describeTagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method BatchSetCdnDomainServerCertificate batchSetCdnDomainServerCertificate(array $options = [])
 * @method DeleteUsageDetailDataExportTask deleteUsageDetailDataExportTask(array $options = [])
 * @method DeleteUserUsageDataExportTask deleteUserUsageDataExportTask(array $options = [])
 * @method DescribeRealtimeDeliveryAcc describeRealtimeDeliveryAcc(array $options = [])
 * @method ListFCTrigger listFCTrigger(array $options = [])
 * @method DescribeCdnCertificateDetail describeCdnCertificateDetail(array $options = [])
 * @method SetReqAuthConfig setReqAuthConfig(array $options = [])
 * @method UpdateFCTrigger updateFCTrigger(array $options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig(array $options = [])
 * @method SetWafConfig setWafConfig(array $options = [])
 * @method SetVideoSeekConfig setVideoSeekConfig(array $options = [])
 * @method SetRemoveQueryStringConfig setRemoveQueryStringConfig(array $options = [])
 * @method SetRangeConfig setRangeConfig(array $options = [])
 * @method SetPageCompressConfig setPageCompressConfig(array $options = [])
 * @method SetOptimizeConfig setOptimizeConfig(array $options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig(array $options = [])
 * @method SetIpBlackListConfig setIpBlackListConfig(array $options = [])
 * @method SetIgnoreQueryStringConfig setIgnoreQueryStringConfig(array $options = [])
 * @method SetHttpsOptionConfig setHttpsOptionConfig(array $options = [])
 * @method SetHttpErrorPageConfig setHttpErrorPageConfig(array $options = [])
 * @method SetForwardSchemeConfig setForwardSchemeConfig(array $options = [])
 * @method SetFileCacheExpiredConfig setFileCacheExpiredConfig(array $options = [])
 * @method SetDomainGreenManagerConfig setDomainGreenManagerConfig(array $options = [])
 * @method ModifyUserCustomLogConfig modifyUserCustomLogConfig(array $options = [])
 * @method ModifyDomainCustomLogConfig modifyDomainCustomLogConfig(array $options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId(array $options = [])
 * @method DescribeUserUsageDetailDataExportTask describeUserUsageDetailDataExportTask(array $options = [])
 * @method DescribeUserUsageDataExportTask describeUserUsageDataExportTask(array $options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow(array $options = [])
 * @method DescribeFCTrigger describeFCTrigger(array $options = [])
 * @method DescribeDomainUsageData describeDomainUsageData(array $options = [])
 * @method DescribeDomainTrafficData describeDomainTrafficData(array $options = [])
 * @method DescribeDomainSrcTrafficData describeDomainSrcTrafficData(array $options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData(array $options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData(array $options = [])
 * @method DescribeDomainRegionData describeDomainRegionData(array $options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData(array $options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData(array $options = [])
 * @method DescribeDomainQpsData describeDomainQpsData(array $options = [])
 * @method DescribeDomainPathData describeDomainPathData(array $options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData(array $options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData(array $options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig(array $options = [])
 * @method DescribeDomainCname describeDomainCname(array $options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo(array $options = [])
 * @method DescribeDomainBpsData describeDomainBpsData(array $options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig(array $options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs(array $options = [])
 * @method DeleteFCTrigger deleteFCTrigger(array $options = [])
 * @method CreateUserUsageDataExportTask createUserUsageDataExportTask(array $options = [])
 * @method CreateUsageDetailDataExportTask createUsageDetailDataExportTask(array $options = [])
 * @method AddFCTrigger addFCTrigger(array $options = [])
 * @method StartCdnDomain startCdnDomain(array $options = [])
 * @method BatchAddCdnDomain batchAddCdnDomain(array $options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig(array $options = [])
 * @method DescribeCdnUserResourcePackage describeCdnUserResourcePackage(array $options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime(array $options = [])
 * @method BatchStartCdnDomain batchStartCdnDomain(array $options = [])
 * @method ModifyFileCacheExpiredConfig modifyFileCacheExpiredConfig(array $options = [])
 * @method DescribeIpInfo describeIpInfo(array $options = [])
 * @method DescribeDomainFileSizeProportionData describeDomainFileSizeProportionData(array $options = [])
 * @method SetHttpHeaderConfig setHttpHeaderConfig(array $options = [])
 * @method BatchUpdateCdnDomain batchUpdateCdnDomain(array $options = [])
 * @method DescribeDomainPvData describeDomainPvData(array $options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota(array $options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig(array $options = [])
 * @method DescribeRefreshQuota describeRefreshQuota(array $options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method DeleteSpecificConfig deleteSpecificConfig(array $options = [])
 * @method SetSourceHostConfig setSourceHostConfig(array $options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp(array $options = [])
 * @method OpenCdnService openCdnService(array $options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit(array $options = [])
 * @method SetCcConfig setCcConfig(array $options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain(array $options = [])
 * @method DescribeCdnCertificateList describeCdnCertificateList(array $options = [])
 * @method DeleteCdnDomain deleteCdnDomain(array $options = [])
 * @method PushObjectCache pushObjectCache(array $options = [])
 * @method StopCdnDomain stopCdnDomain(array $options = [])
 * @method DescribeDomainUvData describeDomainUvData(array $options = [])
 * @method BatchStopCdnDomain batchStopCdnDomain(array $options = [])
 * @method ModifyCdnService modifyCdnService(array $options = [])
 * @method DescribeCdnService describeCdnService(array $options = [])
 * @method ModifyCdnDomain modifyCdnDomain(array $options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs(array $options = [])
 * @method DescribeRefreshTasks describeRefreshTasks(array $options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail(array $options = [])
 * @method DescribeUserDomains describeUserDomains(array $options = [])
 * @method SetIpAllowListConfig setIpAllowListConfig(array $options = [])
 * @method AddCdnDomain addCdnDomain(array $options = [])
 * @method RefreshObjectCaches refreshObjectCaches(array $options = [])
 * @method DescribeCdnTypes describeCdnTypes(array $options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService(array $options = [])
 * @method SetErrorPageConfig setErrorPageConfig(array $options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig(array $options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp(array $options = [])
 * @method SetRefererConfig setRefererConfig(array $options = [])
 * @method SetForceRedirectConfig setForceRedirectConfig(array $options = [])
 * @method DescribeDomainISPData describeDomainISPData(array $options = [])
 * @method DescribeUserConfigs describeUserConfigs(array $options = [])
 * @method ModifyHttpHeaderConfig modifyHttpHeaderConfig(array $options = [])
 * @method DescribeDomainsBySource describeDomainsBySource(array $options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit(array $options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay(array $options = [])
 * @method DescribeDomainSrcHttpCodeData describeDomainSrcHttpCodeData(array $options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData(array $options = [])
 */
class CdnApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cdn';

    /** @var string */
    public $version = '2018-05-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cdn';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getLayer()
 * @method $this withLayer($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainQpsDataByLayer extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSpecificStagingConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProperty()
 * @method $this withProperty($value)
 */
class ModifyCdnDomainSchdmByProperty extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnHttpsDomainList extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 */
class DescribeCdnDomainByCertificate extends Rpc
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
class TagResources extends Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserTags extends Rpc
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
class DescribeTagResources extends Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
 * @method array getResourceId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 */
class BatchSetCdnDomainServerCertificate extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteUsageDetailDataExportTask extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteUserUsageDataExportTask extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class DescribeRealtimeDeliveryAcc extends Rpc
{
}

/**
 * @method string getEventMetaVersion()
 * @method $this withEventMetaVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEventMetaName()
 * @method $this withEventMetaName($value)
 */
class ListFCTrigger extends Rpc
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
class DescribeCdnCertificateDetail extends Rpc
{
}

/**
 * @method string getKey1()
 * @method $this withKey1($value)
 * @method string getKey2()
 * @method $this withKey2($value)
 * @method string getAuthRemoteDesc()
 * @method $this withAuthRemoteDesc($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeOut()
 * @method $this withTimeOut($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 */
class SetReqAuthConfig extends Rpc
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
}

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetWafConfig extends Rpc
{
}

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetVideoSeekConfig extends Rpc
{
}

/**
 * @method string getAliRemoveArgs()
 * @method $this withAliRemoveArgs($value)
 * @method string getKeepOssArgs()
 * @method $this withKeepOssArgs($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetRemoveQueryStringConfig extends Rpc
{
}

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetRangeConfig extends Rpc
{
}

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetPageCompressConfig extends Rpc
{
}

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetOptimizeConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getPrivateOssAuth()
 * @method $this withPrivateOssAuth($value)
 */
class SetL2OssKeyConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBlockIps()
 * @method $this withBlockIps($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetIpBlackListConfig extends Rpc
{
}

/**
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
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetIgnoreQueryStringConfig extends Rpc
{
}

/**
 * @method string getHttp2()
 * @method $this withHttp2($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetHttpsOptionConfig extends Rpc
{
}

/**
 * @method string getPageUrl()
 * @method $this withPageUrl($value)
 * @method string getErrorCode()
 * @method $this withErrorCode($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetHttpErrorPageConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSchemeOriginPort()
 * @method $this withSchemeOriginPort($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getSchemeOrigin()
 * @method $this withSchemeOrigin($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetForwardSchemeConfig extends Rpc
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
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDomainGreenManagerConfig extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserUsageDetailDataExportTask extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserUsageDataExportTask extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataProtocol()
 * @method $this withDataProtocol($value)
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
class DescribeDomainTrafficData extends Rpc
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
class DescribeDomainSrcTrafficData extends Rpc
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
class DescribeDomainSrcBpsData extends Rpc
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
class DescribeDomainRealTimeReqHitRateData extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class DescribeDomainQpsData extends Rpc
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
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainHitRateData extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainCname extends Rpc
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
class DescribeDomainCertificateInfo extends Rpc
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
class DescribeDomainBpsData extends Rpc
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
class DescribeCdnDomainLogs extends Rpc
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
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUserUsageDataExportTask extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getGroup()
 * @method $this withGroup($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUsageDetailDataExportTask extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartCdnDomain extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class BatchAddCdnDomain extends Rpc
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
class BatchSetCdnDomainConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnUserResourcePackage extends Rpc
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
class DescribeDomainAverageResponseTime extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStartCdnDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
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
class ModifyFileCacheExpiredConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeIpInfo extends Rpc
{
}

/**
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
class DescribeDomainFileSizeProportionData extends Rpc
{
}

/**
 * @method string getHeaderValue()
 * @method $this withHeaderValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getHeaderKey()
 * @method $this withHeaderKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetHttpHeaderConfig extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchUpdateCdnDomain extends Rpc
{
}

/**
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
class DescribeDomainPvData extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnUserQuota extends Rpc
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
class BatchDeleteCdnDomainConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRefreshQuota extends Rpc
{
}

/**
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getForceSet()
 * @method $this withForceSet($value)
 * @method string getServerCertificateStatus()
 * @method $this withServerCertificateStatus($value)
 * @method string getServerCertificate()
 * @method $this withServerCertificate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSpecificConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBackSrcDomain()
 * @method $this withBackSrcDomain($value)
 */
class SetSourceHostConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnRegionAndIsp extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenCdnService extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPercent()
 * @method $this withPercent($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDomainTopReferVisit extends Rpc
{
}

/**
 * @method string getAllowIps()
 * @method $this withAllowIps($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBlockIps()
 * @method $this withBlockIps($value)
 */
class SetCcConfig extends Rpc
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
class DescribeL2VipsByDomain extends Rpc
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
class DescribeCdnCertificateList extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCdnDomain extends Rpc
{
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PushObjectCache extends Rpc
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
class StopCdnDomain extends Rpc
{
}

/**
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
class DescribeDomainUvData extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStopCdnDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCdnService extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnService extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCdnDomain extends Rpc
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
class DescribeCdnDomainConfigs extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
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
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRefreshTasks extends Rpc
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
class DescribeCdnDomainDetail extends Rpc
{
}

/**
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
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
 * @method array getTag()
 */
class DescribeUserDomains extends Rpc
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getAllowIps()
 * @method $this withAllowIps($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetIpAllowListConfig extends Rpc
{
}

/**
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class AddCdnDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 */
class RefreshObjectCaches extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnTypes extends Rpc
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
 * @method string getPageType()
 * @method $this withPageType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCustomPageUrl()
 * @method $this withCustomPageUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetErrorPageConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class SetReqHeaderConfig extends Rpc
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
 * @method string getReferList()
 * @method $this withReferList($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getReferType()
 * @method $this withReferType($value)
 * @method string getDisableAst()
 * @method $this withDisableAst($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAllowEmpty()
 * @method $this withAllowEmpty($value)
 */
class SetRefererConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRedirectType()
 * @method $this withRedirectType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetForceRedirectConfig extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DescribeUserConfigs extends Rpc
{
}

/**
 * @method string getHeaderValue()
 * @method $this withHeaderValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getHeaderKey()
 * @method $this withHeaderKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyHttpHeaderConfig extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainsBySource extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPercent()
 * @method $this withPercent($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDomainTopUrlVisit extends Rpc
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
class DescribeDomainSrcHttpCodeData extends Rpc
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
