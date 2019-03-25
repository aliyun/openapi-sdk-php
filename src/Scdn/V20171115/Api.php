<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeScdnDomainTopUrlVisit describeScdnDomainTopUrlVisit(array $options = [])
 * @method DescribeScdnDomainTopReferVisit describeScdnDomainTopReferVisit(array $options = [])
 * @method DescribeScdnTopDomainsByFlow describeScdnTopDomainsByFlow(array $options = [])
 * @method DescribeIpInfo describeIpInfo(array $options = [])
 * @method DescribeScdnDomainUvData describeScdnDomainUvData(array $options = [])
 * @method DescribeScdnIpInfo describeScdnIpInfo(array $options = [])
 * @method DescribeScdnDomainPvData describeScdnDomainPvData(array $options = [])
 * @method DescribeScdnDomainIspData describeScdnDomainIspData(array $options = [])
 * @method OpenScdnService openScdnService(array $options = [])
 * @method DescribeScdnDomainRealTimeHttpCodeData describeScdnDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeScdnDomainRealTimeSrcTrafficData describeScdnDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeScdnDomainRealTimeQpsData describeScdnDomainRealTimeQpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeByteHitRateData describeScdnDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeScdnDomainRegionData describeScdnDomainRegionData(array $options = [])
 * @method DescribeScdnDomainRealTimeBpsData describeScdnDomainRealTimeBpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeTrafficData describeScdnDomainRealTimeTrafficData(array $options = [])
 * @method DescribeScdnDomainRealTimeSrcBpsData describeScdnDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeScdnDomainRealTimeReqHitRateData describeScdnDomainRealTimeReqHitRateData(array $options = [])
 * @method BatchUpdateScdnDomain batchUpdateScdnDomain(array $options = [])
 * @method DescribeScdnDomainCname describeScdnDomainCname(array $options = [])
 * @method DescribeScdnDomainCertificateInfo describeScdnDomainCertificateInfo(array $options = [])
 * @method DescribeScdnDomainLog describeScdnDomainLog(array $options = [])
 * @method PreloadScdnObjectCaches preloadScdnObjectCaches(array $options = [])
 * @method DescribeScdnCertificateDetail describeScdnCertificateDetail(array $options = [])
 * @method SetScdnDomainCertificate setScdnDomainCertificate(array $options = [])
 * @method DescribeScdnRefreshTasks describeScdnRefreshTasks(array $options = [])
 * @method BatchSetScdnDomainConfigs batchSetScdnDomainConfigs(array $options = [])
 * @method RefreshScdnObjectCaches refreshScdnObjectCaches(array $options = [])
 * @method DescribeScdnCertificateList describeScdnCertificateList(array $options = [])
 * @method DescribeScdnDomainConfigs describeScdnDomainConfigs(array $options = [])
 * @method DescribeScdnRefreshQuota describeScdnRefreshQuota(array $options = [])
 * @method BatchDeleteScdnDomainConfigs batchDeleteScdnDomainConfigs(array $options = [])
 * @method DescribeScdnUserDomains describeScdnUserDomains(array $options = [])
 * @method DescribeScdnUserQuota describeScdnUserQuota(array $options = [])
 * @method DescribeScdnDomainHttpCodeData describeScdnDomainHttpCodeData(array $options = [])
 * @method DescribeScdnDomainHitRateData describeScdnDomainHitRateData(array $options = [])
 * @method DescribeScdnDomainTrafficData describeScdnDomainTrafficData(array $options = [])
 * @method DescribeScdnDomainQpsData describeScdnDomainQpsData(array $options = [])
 * @method DescribeScdnDomainOriginTrafficData describeScdnDomainOriginTrafficData(array $options = [])
 * @method DescribeScdnDomainOriginBpsData describeScdnDomainOriginBpsData(array $options = [])
 * @method DescribeScdnDomainBpsData describeScdnDomainBpsData(array $options = [])
 * @method DeleteScdnDomain deleteScdnDomain(array $options = [])
 * @method StopScdnDomain stopScdnDomain(array $options = [])
 * @method StartScdnDomain startScdnDomain(array $options = [])
 * @method UpdateScdnDomain updateScdnDomain(array $options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method DescribeScdnDomainDetail describeScdnDomainDetail(array $options = [])
 * @method CheckScdnService checkScdnService(array $options = [])
 * @method DescribeScdnService describeScdnService(array $options = [])
 * @method AddScdnDomain addScdnDomain(array $options = [])
 */
class ScdnApiResolver
{
    use ApiResolverTrait;
}

class V20171115Rpc extends Rpc
{
    /** @var string */
    public $product = 'scdn';

    /** @var string */
    public $version = '2017-11-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'scdn';
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
class DescribeScdnDomainTopUrlVisit extends V20171115Rpc
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
class DescribeScdnDomainTopReferVisit extends V20171115Rpc
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
class DescribeScdnTopDomainsByFlow extends V20171115Rpc
{
}

class DescribeIpInfo extends V20171115Rpc
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
class DescribeScdnDomainUvData extends V20171115Rpc
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
class DescribeScdnIpInfo extends V20171115Rpc
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
class DescribeScdnDomainPvData extends V20171115Rpc
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
class DescribeScdnDomainIspData extends V20171115Rpc
{
}

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getDomainCount()
 * @method $this withDomainCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProtectType()
 * @method $this withProtectType($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getElasticProtection()
 * @method $this withElasticProtection($value)
 * @method string getDDoSBasic()
 * @method $this withDDoSBasic($value)
 * @method string getCcProtection()
 * @method $this withCcProtection($value)
 */
class OpenScdnService extends V20171115Rpc
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
class DescribeScdnDomainRealTimeHttpCodeData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeSrcTrafficData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeQpsData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeByteHitRateData extends V20171115Rpc
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
class DescribeScdnDomainRegionData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeBpsData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeTrafficData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeSrcBpsData extends V20171115Rpc
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
class DescribeScdnDomainRealTimeReqHitRateData extends V20171115Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchUpdateScdnDomain extends V20171115Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnDomainCname extends V20171115Rpc
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
class DescribeScdnDomainCertificateInfo extends V20171115Rpc
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
class DescribeScdnDomainLog extends V20171115Rpc
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
class PreloadScdnObjectCaches extends V20171115Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnCertificateDetail extends V20171115Rpc
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
class SetScdnDomainCertificate extends V20171115Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeScdnRefreshTasks extends V20171115Rpc
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
class BatchSetScdnDomainConfigs extends V20171115Rpc
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
class RefreshScdnObjectCaches extends V20171115Rpc
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
class DescribeScdnCertificateList extends V20171115Rpc
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
class DescribeScdnDomainConfigs extends V20171115Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnRefreshQuota extends V20171115Rpc
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
class BatchDeleteScdnDomainConfigs extends V20171115Rpc
{
}

/**
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getCheckDomainShow()
 * @method $this withCheckDomainShow($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 */
class DescribeScdnUserDomains extends V20171115Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnUserQuota extends V20171115Rpc
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
class DescribeScdnDomainHttpCodeData extends V20171115Rpc
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
class DescribeScdnDomainHitRateData extends V20171115Rpc
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
class DescribeScdnDomainTrafficData extends V20171115Rpc
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
class DescribeScdnDomainQpsData extends V20171115Rpc
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
class DescribeScdnDomainOriginTrafficData extends V20171115Rpc
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
class DescribeScdnDomainOriginBpsData extends V20171115Rpc
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
class DescribeScdnDomainBpsData extends V20171115Rpc
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
class DeleteScdnDomain extends V20171115Rpc
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
class StopScdnDomain extends V20171115Rpc
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
class StartScdnDomain extends V20171115Rpc
{
}

/**
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
class UpdateScdnDomain extends V20171115Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
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
class SetDomainServerCertificate extends V20171115Rpc
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
class DescribeScdnDomainDetail extends V20171115Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckScdnService extends V20171115Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnService extends V20171115Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSources()
 * @method $this withSources($value)
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
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 */
class AddScdnDomain extends V20171115Rpc
{
}
