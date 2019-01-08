<?php

namespace AlibabaCloud\Dcdn;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dcdn based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dcdn
 *
 * @method static V20180115\AddDcdnDomain addDcdnDomain(array $options = [])
 * @method static V20180115\BatchDeleteDcdnDomainConfig batchDeleteDcdnDomainConfig(array $options = [])
 * @method static V20180115\BatchDeleteDcdnDomainConfigs batchDeleteDcdnDomainConfigs(array $options = [])
 * @method static V20180115\BatchSetDcdnDomainConfigs batchSetDcdnDomainConfigs(array $options = [])
 * @method static V20180115\DeleteDcdnDomain deleteDcdnDomain(array $options = [])
 * @method static V20180115\DescribeCdnUserResourcePackage describeCdnUserResourcePackage(array $options = [])
 * @method static V20180115\DescribeDcdnCertificateDetail describeDcdnCertificateDetail(array $options = [])
 * @method static V20180115\DescribeDcdnCertificateList describeDcdnCertificateList(array $options = [])
 * @method static V20180115\DescribeDcdnDomainBpsData describeDcdnDomainBpsData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainCertificateInfo describeDcdnDomainCertificateInfo(array $options = [])
 * @method static V20180115\DescribeDcdnDomainCname describeDcdnDomainCname(array $options = [])
 * @method static V20180115\DescribeDcdnDomainConfigs describeDcdnDomainConfigs(array $options = [])
 * @method static V20180115\DescribeDcdnDomainDetail describeDcdnDomainDetail(array $options = [])
 * @method static V20180115\DescribeDcdnDomainHitRateData describeDcdnDomainHitRateData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainHttpCodeData describeDcdnDomainHttpCodeData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainIspData describeDcdnDomainIspData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainLog describeDcdnDomainLog(array $options = [])
 * @method static V20180115\DescribeDcdnDomainOriginBpsData describeDcdnDomainOriginBpsData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainOriginTrafficData describeDcdnDomainOriginTrafficData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainPvData describeDcdnDomainPvData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainQpsData describeDcdnDomainQpsData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainRealTimeHttpCodeData describeDcdnDomainRealTimeHttpCodeData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainRealTimeSrcBpsData describeDcdnDomainRealTimeSrcBpsData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainRegionData describeDcdnDomainRegionData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainTopReferVisit describeDcdnDomainTopReferVisit(array $options = [])
 * @method static V20180115\DescribeDcdnDomainTopUrlVisit describeDcdnDomainTopUrlVisit(array $options = [])
 * @method static V20180115\DescribeDcdnDomainTrafficData describeDcdnDomainTrafficData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainUvData describeDcdnDomainUvData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainWebsocketBpsData describeDcdnDomainWebsocketBpsData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainWebsocketHttpCodeData describeDcdnDomainWebsocketHttpCodeData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainWebsocketTrafficData describeDcdnDomainWebsocketTrafficData(array $options = [])
 * @method static V20180115\DescribeDcdnDomainsBySource describeDcdnDomainsBySource(array $options = [])
 * @method static V20180115\DescribeDcdnRefreshQuota describeDcdnRefreshQuota(array $options = [])
 * @method static V20180115\DescribeDcdnRefreshTasks describeDcdnRefreshTasks(array $options = [])
 * @method static V20180115\DescribeDcdnService describeDcdnService(array $options = [])
 * @method static V20180115\DescribeDcdnTopDomainsByFlow describeDcdnTopDomainsByFlow(array $options = [])
 * @method static V20180115\DescribeDcdnUserDomains describeDcdnUserDomains(array $options = [])
 * @method static V20180115\DescribeDcdnUserQuota describeDcdnUserQuota(array $options = [])
 * @method static V20180115\DescribeDcdnUserResourcePackage describeDcdnUserResourcePackage(array $options = [])
 * @method static V20180115\DescribeUserDcdnStatus describeUserDcdnStatus(array $options = [])
 * @method static V20180115\PreloadDcdnObjectCaches preloadDcdnObjectCaches(array $options = [])
 * @method static V20180115\RefreshDcdnObjectCaches refreshDcdnObjectCaches(array $options = [])
 * @method static V20180115\SetDcdnDomainCertificate setDcdnDomainCertificate(array $options = [])
 * @method static V20180115\StartDcdnDomain startDcdnDomain(array $options = [])
 * @method static V20180115\StopDcdnDomain stopDcdnDomain(array $options = [])
 * @method static V20180115\UpdateDcdnDomain updateDcdnDomain(array $options = [])
 */
class DcdnV20180115
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Dcdn\\V20180115';
}
