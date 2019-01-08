<?php

namespace AlibabaCloud\Scdn;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Scdn based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Scdn
 *
 * @method static V20171115\AddScdnDomain addScdnDomain(array $options = [])
 * @method static V20171115\BatchDeleteScdnDomainConfigs batchDeleteScdnDomainConfigs(array $options = [])
 * @method static V20171115\BatchSetScdnDomainConfigs batchSetScdnDomainConfigs(array $options = [])
 * @method static V20171115\BatchUpdateScdnDomain batchUpdateScdnDomain(array $options = [])
 * @method static V20171115\CheckScdnService checkScdnService(array $options = [])
 * @method static V20171115\DeleteScdnDomain deleteScdnDomain(array $options = [])
 * @method static V20171115\DescribeIpInfo describeIpInfo(array $options = [])
 * @method static V20171115\DescribeScdnCertificateDetail describeScdnCertificateDetail(array $options = [])
 * @method static V20171115\DescribeScdnCertificateList describeScdnCertificateList(array $options = [])
 * @method static V20171115\DescribeScdnDomainBpsData describeScdnDomainBpsData(array $options = [])
 * @method static V20171115\DescribeScdnDomainCertificateInfo describeScdnDomainCertificateInfo(array $options = [])
 * @method static V20171115\DescribeScdnDomainCname describeScdnDomainCname(array $options = [])
 * @method static V20171115\DescribeScdnDomainConfigs describeScdnDomainConfigs(array $options = [])
 * @method static V20171115\DescribeScdnDomainDetail describeScdnDomainDetail(array $options = [])
 * @method static V20171115\DescribeScdnDomainHitRateData describeScdnDomainHitRateData(array $options = [])
 * @method static V20171115\DescribeScdnDomainHttpCodeData describeScdnDomainHttpCodeData(array $options = [])
 * @method static V20171115\DescribeScdnDomainIspData describeScdnDomainIspData(array $options = [])
 * @method static V20171115\DescribeScdnDomainLog describeScdnDomainLog(array $options = [])
 * @method static V20171115\DescribeScdnDomainOriginBpsData describeScdnDomainOriginBpsData(array $options = [])
 * @method static V20171115\DescribeScdnDomainOriginTrafficData describeScdnDomainOriginTrafficData(array $options = [])
 * @method static V20171115\DescribeScdnDomainPvData describeScdnDomainPvData(array $options = [])
 * @method static V20171115\DescribeScdnDomainQpsData describeScdnDomainQpsData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeBpsData describeScdnDomainRealTimeBpsData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeByteHitRateData describeScdnDomainRealTimeByteHitRateData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeHttpCodeData describeScdnDomainRealTimeHttpCodeData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeQpsData describeScdnDomainRealTimeQpsData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeReqHitRateData describeScdnDomainRealTimeReqHitRateData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeSrcBpsData describeScdnDomainRealTimeSrcBpsData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeSrcTrafficData describeScdnDomainRealTimeSrcTrafficData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRealTimeTrafficData describeScdnDomainRealTimeTrafficData(array $options = [])
 * @method static V20171115\DescribeScdnDomainRegionData describeScdnDomainRegionData(array $options = [])
 * @method static V20171115\DescribeScdnDomainTopReferVisit describeScdnDomainTopReferVisit(array $options = [])
 * @method static V20171115\DescribeScdnDomainTopUrlVisit describeScdnDomainTopUrlVisit(array $options = [])
 * @method static V20171115\DescribeScdnDomainTrafficData describeScdnDomainTrafficData(array $options = [])
 * @method static V20171115\DescribeScdnDomainUvData describeScdnDomainUvData(array $options = [])
 * @method static V20171115\DescribeScdnIpInfo describeScdnIpInfo(array $options = [])
 * @method static V20171115\DescribeScdnRefreshQuota describeScdnRefreshQuota(array $options = [])
 * @method static V20171115\DescribeScdnRefreshTasks describeScdnRefreshTasks(array $options = [])
 * @method static V20171115\DescribeScdnService describeScdnService(array $options = [])
 * @method static V20171115\DescribeScdnTopDomainsByFlow describeScdnTopDomainsByFlow(array $options = [])
 * @method static V20171115\DescribeScdnUserDomains describeScdnUserDomains(array $options = [])
 * @method static V20171115\DescribeScdnUserQuota describeScdnUserQuota(array $options = [])
 * @method static V20171115\OpenScdnService openScdnService(array $options = [])
 * @method static V20171115\PreloadScdnObjectCaches preloadScdnObjectCaches(array $options = [])
 * @method static V20171115\RefreshScdnObjectCaches refreshScdnObjectCaches(array $options = [])
 * @method static V20171115\SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method static V20171115\SetScdnDomainCertificate setScdnDomainCertificate(array $options = [])
 * @method static V20171115\StartScdnDomain startScdnDomain(array $options = [])
 * @method static V20171115\StopScdnDomain stopScdnDomain(array $options = [])
 * @method static V20171115\UpdateScdnDomain updateScdnDomain(array $options = [])
 */
class ScdnV20171115
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Scdn\\V20171115';
}
