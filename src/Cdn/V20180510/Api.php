<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyCdnDomainSchdmByProperty modifyCdnDomainSchdmByProperty(array $options = [])
 * @method DescribeDomainWafReqData describeDomainWafReqData(array $options = [])
 * @method DescribeCdnHttpsDomainSSLInfo describeCdnHttpsDomainSSLInfo(array $options = [])
 * @method ListUserTags listUserTags(array $options = [])
 * @method DescribeCdnDomainByCertificate describeCdnDomainByCertificate(array $options = [])
 * @method DescribeUserCdnStatus describeUserCdnStatus(array $options = [])
 * @method DescribeCdnHttpsDomainList describeCdnHttpsDomainList(array $options = [])
 * @method BatchSetCdnDomainServerCertificate batchSetCdnDomainServerCertificate(array $options = [])
 * @method DeleteUserUsageDataExportTask deleteUserUsageDataExportTask(array $options = [])
 * @method DeleteUsageDetailDataExportTask deleteUsageDetailDataExportTask(array $options = [])
 * @method DescribeRealtimeDeliveryAcc describeRealtimeDeliveryAcc(array $options = [])
 * @method ListFCTrigger listFCTrigger(array $options = [])
 * @method DescribeCdnCertificateDetail describeCdnCertificateDetail(array $options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeDomainSrcHttpCodeData describeDomainSrcHttpCodeData(array $options = [])
 * @method DescribeDomainUsageData describeDomainUsageData(array $options = [])
 * @method DescribeUserUsageDetailDataExportTask describeUserUsageDetailDataExportTask(array $options = [])
 * @method DescribeUserUsageDataExportTask describeUserUsageDataExportTask(array $options = [])
 * @method CreateUserUsageDataExportTask createUserUsageDataExportTask(array $options = [])
 * @method CreateUsageDetailDataExportTask createUsageDetailDataExportTask(array $options = [])
 * @method DescribeCdnCertificateList describeCdnCertificateList(array $options = [])
 * @method DescribeDomainSrcTrafficData describeDomainSrcTrafficData(array $options = [])
 * @method DescribeDomainTrafficData describeDomainTrafficData(array $options = [])
 * @method DescribeCdnUserResourcePackage describeCdnUserResourcePackage(array $options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota(array $options = [])
 * @method DescribeDomainCCData describeDomainCCData(array $options = [])
 * @method DescribeIpInfo describeIpInfo(array $options = [])
 * @method GetUserDomainBlackList getUserDomainBlackList(array $options = [])
 * @method DescribeDomainFileSizeProportionData describeDomainFileSizeProportionData(array $options = [])
 * @method DescribeDomainCCAttackInfo describeDomainCCAttackInfo(array $options = [])
 * @method DescribeDomainPvData describeDomainPvData(array $options = [])
 * @method ModifyCdnSubscribeService modifyCdnSubscribeService(array $options = [])
 * @method DescribeDomainDownstreamBpsOfEdge describeDomainDownstreamBpsOfEdge(array $options = [])
 * @method SetWafConfig setWafConfig(array $options = [])
 * @method SetSourceHostConfig setSourceHostConfig(array $options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp(array $options = [])
 * @method SetCacheExpiredConfig setCacheExpiredConfig(array $options = [])
 * @method SetOptimizeConfig setOptimizeConfig(array $options = [])
 * @method DescribeDomainUpstreamBpsOfEdge describeDomainUpstreamBpsOfEdge(array $options = [])
 * @method SetVideoSeekConfig setVideoSeekConfig(array $options = [])
 * @method DescribeDomainUvData describeDomainUvData(array $options = [])
 * @method DescribeDomainRegionData describeDomainRegionData(array $options = [])
 * @method DescribeCdnTypes describeCdnTypes(array $options = [])
 * @method SetPageCompressConfig setPageCompressConfig(array $options = [])
 * @method DescribeDomainUpstreamOfCenter describeDomainUpstreamOfCenter(array $options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp(array $options = [])
 * @method SetForceRedirectConfig setForceRedirectConfig(array $options = [])
 * @method DescribeDomainRealTimeData describeDomainRealTimeData(array $options = [])
 * @method DescribeDomainISPData describeDomainISPData(array $options = [])
 * @method SetForwardSchemeConfig setForwardSchemeConfig(array $options = [])
 * @method ModifyHttpHeaderConfig modifyHttpHeaderConfig(array $options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig(array $options = [])
 * @method SetBusinessFunctionConfig setBusinessFunctionConfig(array $options = [])
 * @method SetRefererRegexConfig setRefererRegexConfig(array $options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData(array $options = [])
 * @method BatchAddCdnDomain batchAddCdnDomain(array $options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeDomainQpsData describeDomainQpsData(array $options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime(array $options = [])
 * @method ModifyFileCacheExpiredConfig modifyFileCacheExpiredConfig(array $options = [])
 * @method DescribeCdnMonitorData describeCdnMonitorData(array $options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData(array $options = [])
 * @method ModifyDomainCustomLogConfig modifyDomainCustomLogConfig(array $options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData(array $options = [])
 * @method SetHttpHeaderConfig setHttpHeaderConfig(array $options = [])
 * @method SetFileCacheExpiredConfig setFileCacheExpiredConfig(array $options = [])
 * @method BatchUpdateCdnDomain batchUpdateCdnDomain(array $options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo(array $options = [])
 * @method DescribeRefreshQuota describeRefreshQuota(array $options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay(array $options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method UpdateFCTrigger updateFCTrigger(array $options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow(array $options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs(array $options = [])
 * @method DescribeFCTrigger describeFCTrigger(array $options = [])
 * @method DescribeDomainMonthBillingBpsData describeDomainMonthBillingBpsData(array $options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData(array $options = [])
 * @method ModifyUserCustomLogConfig modifyUserCustomLogConfig(array $options = [])
 * @method SetRemoveQueryStringConfig setRemoveQueryStringConfig(array $options = [])
 * @method SetHttpsOptionConfig setHttpsOptionConfig(array $options = [])
 * @method OpenCdnService openCdnService(array $options = [])
 * @method DescribeOneMinuteData describeOneMinuteData(array $options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit(array $options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData(array $options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain(array $options = [])
 * @method SetCcConfig setCcConfig(array $options = [])
 * @method PushObjectCache pushObjectCache(array $options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData(array $options = [])
 * @method ModifyCdnService modifyCdnService(array $options = [])
 * @method SetDomainGreenManagerConfig setDomainGreenManagerConfig(array $options = [])
 * @method SetHttpErrorPageConfig setHttpErrorPageConfig(array $options = [])
 * @method SetIgnoreQueryStringConfig setIgnoreQueryStringConfig(array $options = [])
 * @method DescribeCdnService describeCdnService(array $options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs(array $options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData(array $options = [])
 * @method DescribeRefreshTasks describeRefreshTasks(array $options = [])
 * @method DescribeDomainPathData describeDomainPathData(array $options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail(array $options = [])
 * @method DescribeUserDomains describeUserDomains(array $options = [])
 * @method SetIpAllowListConfig setIpAllowListConfig(array $options = [])
 * @method DescribeDomainCname describeDomainCname(array $options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService(array $options = [])
 * @method SetErrorPageConfig setErrorPageConfig(array $options = [])
 * @method DeleteFCTrigger deleteFCTrigger(array $options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig(array $options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig(array $options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig(array $options = [])
 * @method SetRefererConfig setRefererConfig(array $options = [])
 * @method SetReqAuthConfig setReqAuthConfig(array $options = [])
 * @method AddFCTrigger addFCTrigger(array $options = [])
 * @method DescribeUserConfigs describeUserConfigs(array $options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId(array $options = [])
 * @method SetLocationAccessRestriction setLocationAccessRestriction(array $options = [])
 * @method DescribeCdnDomainBaseDetail describeCdnDomainBaseDetail(array $options = [])
 * @method DescribeDomainConfigs describeDomainConfigs(array $options = [])
 * @method DescribeDomainsBySource describeDomainsBySource(array $options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit(array $options = [])
 * @method RefreshObjectCaches refreshObjectCaches(array $options = [])
 * @method DeleteSpecificConfig deleteSpecificConfig(array $options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig(array $options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig(array $options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig(array $options = [])
 * @method ModifyCdnDomain modifyCdnDomain(array $options = [])
 * @method DeleteCdnDomain deleteCdnDomain(array $options = [])
 * @method SetRangeConfig setRangeConfig(array $options = [])
 * @method AddCdnDomain addCdnDomain(array $options = [])
 * @method SetIpBlackListConfig setIpBlackListConfig(array $options = [])
 * @method StopCdnDomain stopCdnDomain(array $options = [])
 * @method StartCdnDomain startCdnDomain(array $options = [])
 * @method DescribeDomainBpsData describeDomainBpsData(array $options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData(array $options = [])
 */
class CdnApiResolver
{
    use ApiResolverTrait;
}

class V20180510Rpc extends Rpc
{
    /** @var string */
    public $product = 'Cdn';

    /** @var string */
    public $version = '2018-05-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProperty()
 * @method $this withProperty($value)
 */
class ModifyCdnDomainSchdmByProperty extends V20180510Rpc
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
class DescribeDomainWafReqData extends V20180510Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnHttpsDomainSSLInfo extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListUserTags extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 */
class DescribeCdnDomainByCertificate extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserCdnStatus extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnHttpsDomainList extends V20180510Rpc
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
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 */
class BatchSetCdnDomainServerCertificate extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteUserUsageDataExportTask extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteUsageDetailDataExportTask extends V20180510Rpc
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
class DescribeRealtimeDeliveryAcc extends V20180510Rpc
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
class ListFCTrigger extends V20180510Rpc
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
class DescribeCdnCertificateDetail extends V20180510Rpc
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
class DescribeDomainRealTimeHttpCodeData extends V20180510Rpc
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
class DescribeDomainRealTimeSrcTrafficData extends V20180510Rpc
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
class DescribeDomainRealTimeSrcBpsData extends V20180510Rpc
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
class DescribeDomainSrcHttpCodeData extends V20180510Rpc
{
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
class DescribeDomainUsageData extends V20180510Rpc
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
class DescribeUserUsageDetailDataExportTask extends V20180510Rpc
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
class DescribeUserUsageDataExportTask extends V20180510Rpc
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
class CreateUserUsageDataExportTask extends V20180510Rpc
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
class CreateUsageDetailDataExportTask extends V20180510Rpc
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
class DescribeCdnCertificateList extends V20180510Rpc
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
class DescribeDomainSrcTrafficData extends V20180510Rpc
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
class DescribeDomainTrafficData extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnUserResourcePackage extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnUserQuota extends V20180510Rpc
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
class DescribeDomainCCData extends V20180510Rpc
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
class DescribeIpInfo extends V20180510Rpc
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
class GetUserDomainBlackList extends V20180510Rpc
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
class DescribeDomainFileSizeProportionData extends V20180510Rpc
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
class DescribeDomainCCAttackInfo extends V20180510Rpc
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
class DescribeDomainPvData extends V20180510Rpc
{
}

/**
 * @method string getSubEmail()
 * @method $this withSubEmail($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getSubType()
 * @method $this withSubType($value)
 * @method string getSubMobile()
 * @method $this withSubMobile($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubMedia()
 * @method $this withSubMedia($value)
 */
class ModifyCdnSubscribeService extends V20180510Rpc
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
class DescribeDomainDownstreamBpsOfEdge extends V20180510Rpc
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
class SetWafConfig extends V20180510Rpc
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
class SetSourceHostConfig extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnRegionAndIsp extends V20180510Rpc
{
}

/**
 * @method string getCacheType()
 * @method $this withCacheType($value)
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
class SetCacheExpiredConfig extends V20180510Rpc
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
class SetOptimizeConfig extends V20180510Rpc
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
class DescribeDomainUpstreamBpsOfEdge extends V20180510Rpc
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
class SetVideoSeekConfig extends V20180510Rpc
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
class DescribeDomainUvData extends V20180510Rpc
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
class DescribeDomainRegionData extends V20180510Rpc
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
class DescribeCdnTypes extends V20180510Rpc
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
class SetPageCompressConfig extends V20180510Rpc
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
class DescribeDomainUpstreamOfCenter extends V20180510Rpc
{
}

/**
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeDomainBpsDataByTimeStamp extends V20180510Rpc
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
class SetForceRedirectConfig extends V20180510Rpc
{
}

/**
 * @method string getField()
 * @method $this withField($value)
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
class DescribeDomainRealTimeData extends V20180510Rpc
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
class DescribeDomainISPData extends V20180510Rpc
{
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
class SetForwardSchemeConfig extends V20180510Rpc
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
class ModifyHttpHeaderConfig extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DescribeCustomLogConfig extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getArgRegex()
 * @method $this withArgRegex($value)
 * @method string getNullAllowed()
 * @method $this withNullAllowed($value)
 * @method string getConfigs()
 * @method $this withConfigs($value)
 * @method string getArgName()
 * @method $this withArgName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConflictFunction()
 * @method $this withConflictFunction($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 * @method string getArgValue()
 * @method $this withArgValue($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 * @method string getArgId()
 * @method $this withArgId($value)
 * @method string getSeqId()
 * @method $this withSeqId($value)
 */
class SetBusinessFunctionConfig extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getReferRegexs()
 * @method $this withReferRegexs($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getReferType()
 * @method $this withReferType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetRefererRegexConfig extends V20180510Rpc
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
class DescribeDomainRealTimeReqHitRateData extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
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
class BatchAddCdnDomain extends V20180510Rpc
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
class DescribeDomainRealTimeByteHitRateData extends V20180510Rpc
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
class DescribeDomainQpsData extends V20180510Rpc
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
class DescribeDomainAverageResponseTime extends V20180510Rpc
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
class ModifyFileCacheExpiredConfig extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnMonitorData extends V20180510Rpc
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
class DescribeDomainHitRateData extends V20180510Rpc
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
class ModifyDomainCustomLogConfig extends V20180510Rpc
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
class DescribeDomainHttpCodeData extends V20180510Rpc
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
class SetHttpHeaderConfig extends V20180510Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCacheContent()
 * @method $this withCacheContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetFileCacheExpiredConfig extends V20180510Rpc
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
class BatchUpdateCdnDomain extends V20180510Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainCertificateInfo extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRefreshQuota extends V20180510Rpc
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
class DescribeDomainsUsageByDay extends V20180510Rpc
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
class SetDomainServerCertificate extends V20180510Rpc
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
 */
class UpdateFCTrigger extends V20180510Rpc
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
class DescribeTopDomainsByFlow extends V20180510Rpc
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
class DescribeCdnDomainLogs extends V20180510Rpc
{
}

/**
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeFCTrigger extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainMonthBillingBpsData extends V20180510Rpc
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
class DescribeDomainReqHitRateData extends V20180510Rpc
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
class ModifyUserCustomLogConfig extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
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
class SetRemoveQueryStringConfig extends V20180510Rpc
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
class SetHttpsOptionConfig extends V20180510Rpc
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
class OpenCdnService extends V20180510Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDataTime()
 * @method $this withDataTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeOneMinuteData extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainTopReferVisit extends V20180510Rpc
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
class DescribeDomainSrcBpsData extends V20180510Rpc
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
class DescribeL2VipsByDomain extends V20180510Rpc
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
class SetCcConfig extends V20180510Rpc
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
class PushObjectCache extends V20180510Rpc
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
class DescribeDomainRealTimeQpsData extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCdnService extends V20180510Rpc
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
class SetDomainGreenManagerConfig extends V20180510Rpc
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
class SetHttpErrorPageConfig extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
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
class SetIgnoreQueryStringConfig extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCdnService extends V20180510Rpc
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
class DescribeCdnDomainConfigs extends V20180510Rpc
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
class DescribeDomainRealTimeBpsData extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
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
class DescribeRefreshTasks extends V20180510Rpc
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
class DescribeDomainPathData extends V20180510Rpc
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
class DescribeCdnDomainDetail extends V20180510Rpc
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
class DescribeUserDomains extends V20180510Rpc
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
class SetIpAllowListConfig extends V20180510Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainCname extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRangeDataByLocateAndIspService extends V20180510Rpc
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
class SetErrorPageConfig extends V20180510Rpc
{
}

/**
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteFCTrigger extends V20180510Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainCustomLogConfig extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
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
class SetReqHeaderConfig extends V20180510Rpc
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
class SetWaitingRoomConfig extends V20180510Rpc
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
class SetRefererConfig extends V20180510Rpc
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
class SetReqAuthConfig extends V20180510Rpc
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
 */
class AddFCTrigger extends V20180510Rpc
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
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DescribeUserConfigs extends V20180510Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class ListDomainsByLogConfigId extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class SetLocationAccessRestriction extends V20180510Rpc
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
class DescribeCdnDomainBaseDetail extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getConfigList()
 * @method $this withConfigList($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainConfigs extends V20180510Rpc
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
class DescribeDomainsBySource extends V20180510Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainTopUrlVisit extends V20180510Rpc
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
class RefreshObjectCaches extends V20180510Rpc
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
class DeleteSpecificConfig extends V20180510Rpc
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
class BatchDeleteCdnDomainConfig extends V20180510Rpc
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
class SetL2OssKeyConfig extends V20180510Rpc
{

    /** @var string */
    public $method = 'GET';
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
class BatchSetCdnDomainConfig extends V20180510Rpc
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
class ModifyCdnDomain extends V20180510Rpc
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
class DeleteCdnDomain extends V20180510Rpc
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
class SetRangeConfig extends V20180510Rpc
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
class AddCdnDomain extends V20180510Rpc
{
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
class SetIpBlackListConfig extends V20180510Rpc
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
class StopCdnDomain extends V20180510Rpc
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
class StartCdnDomain extends V20180510Rpc
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
class DescribeDomainBpsData extends V20180510Rpc
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
class DescribeDomainMax95BpsData extends V20180510Rpc
{
}
