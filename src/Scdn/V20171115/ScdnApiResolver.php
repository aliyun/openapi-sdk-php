<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddScdnDomain addScdnDomain(array $options = [])
 * @method BatchDeleteScdnDomainConfigs batchDeleteScdnDomainConfigs(array $options = [])
 * @method BatchSetScdnDomainConfigs batchSetScdnDomainConfigs(array $options = [])
 * @method BatchStartScdnDomain batchStartScdnDomain(array $options = [])
 * @method BatchStopScdnDomain batchStopScdnDomain(array $options = [])
 * @method BatchUpdateScdnDomain batchUpdateScdnDomain(array $options = [])
 * @method CheckScdnService checkScdnService(array $options = [])
 * @method DeleteScdnDomain deleteScdnDomain(array $options = [])
 * @method DeleteScdnSpecificConfig deleteScdnSpecificConfig(array $options = [])
 * @method DescribeScdnCcInfo describeScdnCcInfo(array $options = [])
 * @method DescribeScdnCcQpsInfo describeScdnCcQpsInfo(array $options = [])
 * @method DescribeScdnCcTopIp describeScdnCcTopIp(array $options = [])
 * @method DescribeScdnCcTopUrl describeScdnCcTopUrl(array $options = [])
 * @method DescribeScdnCertificateDetail describeScdnCertificateDetail(array $options = [])
 * @method DescribeScdnCertificateList describeScdnCertificateList(array $options = [])
 * @method DescribeScdnDDoSInfo describeScdnDDoSInfo(array $options = [])
 * @method DescribeScdnDDoSTrafficInfo describeScdnDDoSTrafficInfo(array $options = [])
 * @method DescribeScdnDomainBpsData describeScdnDomainBpsData(array $options = [])
 * @method DescribeScdnDomainCertificateInfo describeScdnDomainCertificateInfo(array $options = [])
 * @method DescribeScdnDomainCname describeScdnDomainCname(array $options = [])
 * @method DescribeScdnDomainConfigs describeScdnDomainConfigs(array $options = [])
 * @method DescribeScdnDomainDetail describeScdnDomainDetail(array $options = [])
 * @method DescribeScdnDomainHitRateData describeScdnDomainHitRateData(array $options = [])
 * @method DescribeScdnDomainHttpCodeData describeScdnDomainHttpCodeData(array $options = [])
 * @method DescribeScdnDomainIspData describeScdnDomainIspData(array $options = [])
 * @method DescribeScdnDomainLog describeScdnDomainLog(array $options = [])
 * @method DescribeScdnDomainOriginBpsData describeScdnDomainOriginBpsData(array $options = [])
 * @method DescribeScdnDomainOriginTrafficData describeScdnDomainOriginTrafficData(array $options = [])
 * @method DescribeScdnDomainPvData describeScdnDomainPvData(array $options = [])
 * @method DescribeScdnDomainQpsData describeScdnDomainQpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeBpsData describeScdnDomainRealTimeBpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeByteHitRateData describeScdnDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeScdnDomainRealTimeHttpCodeData describeScdnDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeScdnDomainRealTimeQpsData describeScdnDomainRealTimeQpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeReqHitRateData describeScdnDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeScdnDomainRealTimeSrcBpsData describeScdnDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeSrcTrafficData describeScdnDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeScdnDomainRealTimeTrafficData describeScdnDomainRealTimeTrafficData(array $options = [])
 * @method DescribeScdnDomainRegionData describeScdnDomainRegionData(array $options = [])
 * @method DescribeScdnDomainTopReferVisit describeScdnDomainTopReferVisit(array $options = [])
 * @method DescribeScdnDomainTopUrlVisit describeScdnDomainTopUrlVisit(array $options = [])
 * @method DescribeScdnDomainTrafficData describeScdnDomainTrafficData(array $options = [])
 * @method DescribeScdnDomainUvData describeScdnDomainUvData(array $options = [])
 * @method DescribeScdnRefreshQuota describeScdnRefreshQuota(array $options = [])
 * @method DescribeScdnRefreshTasks describeScdnRefreshTasks(array $options = [])
 * @method DescribeScdnService describeScdnService(array $options = [])
 * @method DescribeScdnTopDomainsByFlow describeScdnTopDomainsByFlow(array $options = [])
 * @method DescribeScdnUserDomains describeScdnUserDomains(array $options = [])
 * @method DescribeScdnUserProtectInfo describeScdnUserProtectInfo(array $options = [])
 * @method DescribeScdnUserQuota describeScdnUserQuota(array $options = [])
 * @method OpenScdnService openScdnService(array $options = [])
 * @method PreloadScdnObjectCaches preloadScdnObjectCaches(array $options = [])
 * @method RefreshScdnObjectCaches refreshScdnObjectCaches(array $options = [])
 * @method SetScdnBotInfo setScdnBotInfo(array $options = [])
 * @method SetScdnCcInfo setScdnCcInfo(array $options = [])
 * @method SetScdnDDoSInfo setScdnDDoSInfo(array $options = [])
 * @method SetScdnDomainBizInfo setScdnDomainBizInfo(array $options = [])
 * @method SetScdnDomainCertificate setScdnDomainCertificate(array $options = [])
 * @method StartScdnDomain startScdnDomain(array $options = [])
 * @method StopScdnDomain stopScdnDomain(array $options = [])
 * @method UpdateScdnDomain updateScdnDomain(array $options = [])
 */
class ScdnApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'scdn';

    /** @var string */
    public $version = '2017-11-15';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class AddScdnDomain extends Rpc
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
class BatchDeleteScdnDomainConfigs extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchSetScdnDomainConfigs extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchStartScdnDomain extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchStopScdnDomain extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchUpdateScdnDomain extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class CheckScdnService extends Rpc
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
class DeleteScdnDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteScdnSpecificConfig extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnCcInfo extends Rpc
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
class DescribeScdnCcQpsInfo extends Rpc
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
class DescribeScdnCcTopIp extends Rpc
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
class DescribeScdnCcTopUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeScdnCertificateDetail extends Rpc
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
class DescribeScdnCertificateList extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnDDoSInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnDDoSTrafficInfo extends Rpc
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
class DescribeScdnDomainBpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnDomainCname extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DescribeScdnDomainConfigs extends Rpc
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
class DescribeScdnDomainDetail extends Rpc
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
class DescribeScdnDomainHitRateData extends Rpc
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
class DescribeScdnDomainHttpCodeData extends Rpc
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
class DescribeScdnDomainIspData extends Rpc
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
class DescribeScdnDomainLog extends Rpc
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
class DescribeScdnDomainOriginBpsData extends Rpc
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
class DescribeScdnDomainOriginTrafficData extends Rpc
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
class DescribeScdnDomainPvData extends Rpc
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
class DescribeScdnDomainQpsData extends Rpc
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
class DescribeScdnDomainRealTimeBpsData extends Rpc
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
class DescribeScdnDomainRealTimeByteHitRateData extends Rpc
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
class DescribeScdnDomainRealTimeHttpCodeData extends Rpc
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
class DescribeScdnDomainRealTimeQpsData extends Rpc
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
class DescribeScdnDomainRealTimeReqHitRateData extends Rpc
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
class DescribeScdnDomainRealTimeSrcBpsData extends Rpc
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
class DescribeScdnDomainRealTimeSrcTrafficData extends Rpc
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
class DescribeScdnDomainRealTimeTrafficData extends Rpc
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
class DescribeScdnDomainRegionData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeScdnDomainTopReferVisit extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeScdnDomainTopUrlVisit extends Rpc
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
class DescribeScdnDomainTrafficData extends Rpc
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
class DescribeScdnDomainUvData extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeScdnRefreshQuota extends Rpc
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
class DescribeScdnRefreshTasks extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeScdnService extends Rpc
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
class DescribeScdnTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCheckDomainShow()
 * @method $this withCheckDomainShow($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getChangeEndTime()
 * @method $this withChangeEndTime($value)
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
 * @method string getChangeStartTime()
 * @method $this withChangeStartTime($value)
 */
class DescribeScdnUserDomains extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnUserProtectInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeScdnUserQuota extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getCcProtection()
 * @method $this withCcProtection($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getProtectType()
 * @method $this withProtectType($value)
 * @method string getDDoSBasic()
 * @method $this withDDoSBasic($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getDomainCount()
 * @method $this withDomainCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getElasticProtection()
 * @method $this withElasticProtection($value)
 */
class OpenScdnService extends Rpc
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
class PreloadScdnObjectCaches extends Rpc
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
class RefreshScdnObjectCaches extends Rpc
{
}

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetScdnBotInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetScdnCcInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getElasticBandwidth()
 * @method $this withElasticBandwidth($value)
 */
class SetScdnDDoSInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetScdnDomainBizInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class SetScdnDomainCertificate extends Rpc
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
class StartScdnDomain extends Rpc
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
class StopScdnDomain extends Rpc
{
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateScdnDomain extends Rpc
{
}
