<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDcdnDomain addDcdnDomain(array $options = [])
 * @method AddDcdnIpaDomain addDcdnIpaDomain(array $options = [])
 * @method BatchAddDcdnDomain batchAddDcdnDomain(array $options = [])
 * @method BatchDeleteDcdnDomainConfigs batchDeleteDcdnDomainConfigs(array $options = [])
 * @method BatchSetDcdnDomainCertificate batchSetDcdnDomainCertificate(array $options = [])
 * @method BatchSetDcdnDomainConfigs batchSetDcdnDomainConfigs(array $options = [])
 * @method BatchSetDcdnIpaDomainConfigs batchSetDcdnIpaDomainConfigs(array $options = [])
 * @method BatchStartDcdnDomain batchStartDcdnDomain(array $options = [])
 * @method BatchStopDcdnDomain batchStopDcdnDomain(array $options = [])
 * @method CreateDcdnCertificateSigningRequest createDcdnCertificateSigningRequest(array $options = [])
 * @method DeleteDcdnDomain deleteDcdnDomain(array $options = [])
 * @method DeleteDcdnIpaDomain deleteDcdnIpaDomain(array $options = [])
 * @method DeleteDcdnIpaSpecificConfig deleteDcdnIpaSpecificConfig(array $options = [])
 * @method DeleteDcdnSpecificConfig deleteDcdnSpecificConfig(array $options = [])
 * @method DeleteDcdnSpecificStagingConfig deleteDcdnSpecificStagingConfig(array $options = [])
 * @method DescribeDcdnBgpBpsData describeDcdnBgpBpsData(array $options = [])
 * @method DescribeDcdnBgpTrafficData describeDcdnBgpTrafficData(array $options = [])
 * @method DescribeDcdnCertificateDetail describeDcdnCertificateDetail(array $options = [])
 * @method DescribeDcdnCertificateList describeDcdnCertificateList(array $options = [])
 * @method DescribeDcdnConfigOfVersion describeDcdnConfigOfVersion(array $options = [])
 * @method DescribeDcdnDomainBpsData describeDcdnDomainBpsData(array $options = [])
 * @method DescribeDcdnDomainByCertificate describeDcdnDomainByCertificate(array $options = [])
 * @method DescribeDcdnDomainCertificateInfo describeDcdnDomainCertificateInfo(array $options = [])
 * @method DescribeDcdnDomainCname describeDcdnDomainCname(array $options = [])
 * @method DescribeDcdnDomainConfigs describeDcdnDomainConfigs(array $options = [])
 * @method DescribeDcdnDomainDetail describeDcdnDomainDetail(array $options = [])
 * @method DescribeDcdnDomainHitRateData describeDcdnDomainHitRateData(array $options = [])
 * @method DescribeDcdnDomainHttpCodeData describeDcdnDomainHttpCodeData(array $options = [])
 * @method DescribeDcdnDomainIpaBpsData describeDcdnDomainIpaBpsData(array $options = [])
 * @method DescribeDcdnDomainIpaTrafficData describeDcdnDomainIpaTrafficData(array $options = [])
 * @method DescribeDcdnDomainIspData describeDcdnDomainIspData(array $options = [])
 * @method DescribeDcdnDomainLog describeDcdnDomainLog(array $options = [])
 * @method DescribeDcdnDomainMultiUsageData describeDcdnDomainMultiUsageData(array $options = [])
 * @method DescribeDcdnDomainOriginBpsData describeDcdnDomainOriginBpsData(array $options = [])
 * @method DescribeDcdnDomainOriginTrafficData describeDcdnDomainOriginTrafficData(array $options = [])
 * @method DescribeDcdnDomainPvData describeDcdnDomainPvData(array $options = [])
 * @method DescribeDcdnDomainQpsData describeDcdnDomainQpsData(array $options = [])
 * @method DescribeDcdnDomainRealTimeBpsData describeDcdnDomainRealTimeBpsData(array $options = [])
 * @method DescribeDcdnDomainRealTimeByteHitRateData describeDcdnDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeDcdnDomainRealTimeDetailData describeDcdnDomainRealTimeDetailData(array $options = [])
 * @method DescribeDcdnDomainRealTimeHttpCodeData describeDcdnDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeDcdnDomainRealTimeQpsData describeDcdnDomainRealTimeQpsData(array $options = [])
 * @method DescribeDcdnDomainRealTimeReqHitRateData describeDcdnDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeDcdnDomainRealTimeSrcBpsData describeDcdnDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeDcdnDomainRealTimeSrcHttpCodeData describeDcdnDomainRealTimeSrcHttpCodeData(array $options = [])
 * @method DescribeDcdnDomainRealTimeSrcTrafficData describeDcdnDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeDcdnDomainRealTimeTrafficData describeDcdnDomainRealTimeTrafficData(array $options = [])
 * @method DescribeDcdnDomainRegionData describeDcdnDomainRegionData(array $options = [])
 * @method DescribeDcdnDomainStagingConfig describeDcdnDomainStagingConfig(array $options = [])
 * @method DescribeDcdnDomainTopReferVisit describeDcdnDomainTopReferVisit(array $options = [])
 * @method DescribeDcdnDomainTopUrlVisit describeDcdnDomainTopUrlVisit(array $options = [])
 * @method DescribeDcdnDomainTrafficData describeDcdnDomainTrafficData(array $options = [])
 * @method DescribeDcdnDomainUvData describeDcdnDomainUvData(array $options = [])
 * @method DescribeDcdnDomainWebsocketBpsData describeDcdnDomainWebsocketBpsData(array $options = [])
 * @method DescribeDcdnDomainWebsocketHttpCodeData describeDcdnDomainWebsocketHttpCodeData(array $options = [])
 * @method DescribeDcdnDomainWebsocketTrafficData describeDcdnDomainWebsocketTrafficData(array $options = [])
 * @method DescribeDcdnHttpsDomainList describeDcdnHttpsDomainList(array $options = [])
 * @method DescribeDcdnIpaDomainConfigs describeDcdnIpaDomainConfigs(array $options = [])
 * @method DescribeDcdnIpaDomainDetail describeDcdnIpaDomainDetail(array $options = [])
 * @method DescribeDcdnIpaService describeDcdnIpaService(array $options = [])
 * @method DescribeDcdnIpaUserDomains describeDcdnIpaUserDomains(array $options = [])
 * @method DescribeDcdnIpInfo describeDcdnIpInfo(array $options = [])
 * @method DescribeDcdnRefreshQuota describeDcdnRefreshQuota(array $options = [])
 * @method DescribeDcdnRefreshTasks describeDcdnRefreshTasks(array $options = [])
 * @method DescribeDcdnService describeDcdnService(array $options = [])
 * @method DescribeDcdnStagingIp describeDcdnStagingIp(array $options = [])
 * @method DescribeDcdnTagResources describeDcdnTagResources(array $options = [])
 * @method DescribeDcdnTopDomainsByFlow describeDcdnTopDomainsByFlow(array $options = [])
 * @method DescribeDcdnUserBillHistory describeDcdnUserBillHistory(array $options = [])
 * @method DescribeDcdnUserBillType describeDcdnUserBillType(array $options = [])
 * @method DescribeDcdnUserDomains describeDcdnUserDomains(array $options = [])
 * @method DescribeDcdnUserQuota describeDcdnUserQuota(array $options = [])
 * @method DescribeDcdnUserResourcePackage describeDcdnUserResourcePackage(array $options = [])
 * @method DescribeDcdnUserTags describeDcdnUserTags(array $options = [])
 * @method DescribeDcdnVerifyContent describeDcdnVerifyContent(array $options = [])
 * @method DescribeUserDcdnIpaStatus describeUserDcdnIpaStatus(array $options = [])
 * @method DescribeUserDcdnStatus describeUserDcdnStatus(array $options = [])
 * @method ModifyDCdnDomainSchdmByProperty modifyDCdnDomainSchdmByProperty(array $options = [])
 * @method PreloadDcdnObjectCaches preloadDcdnObjectCaches(array $options = [])
 * @method PublishDcdnStagingConfigToProduction publishDcdnStagingConfigToProduction(array $options = [])
 * @method RefreshDcdnObjectCaches refreshDcdnObjectCaches(array $options = [])
 * @method RollbackDcdnStagingConfig rollbackDcdnStagingConfig(array $options = [])
 * @method SetDcdnConfigOfVersion setDcdnConfigOfVersion(array $options = [])
 * @method SetDcdnDomainCertificate setDcdnDomainCertificate(array $options = [])
 * @method SetDcdnDomainCSRCertificate setDcdnDomainCSRCertificate(array $options = [])
 * @method SetDcdnDomainStagingConfig setDcdnDomainStagingConfig(array $options = [])
 * @method StartDcdnDomain startDcdnDomain(array $options = [])
 * @method StartDcdnIpaDomain startDcdnIpaDomain(array $options = [])
 * @method StopDcdnDomain stopDcdnDomain(array $options = [])
 * @method StopDcdnIpaDomain stopDcdnIpaDomain(array $options = [])
 * @method TagDcdnResources tagDcdnResources(array $options = [])
 * @method UntagDcdnResources untagDcdnResources(array $options = [])
 * @method UpdateDcdnDomain updateDcdnDomain(array $options = [])
 * @method UpdateDcdnIpaDomain updateDcdnIpaDomain(array $options = [])
 * @method VerifyDcdnDomainOwner verifyDcdnDomainOwner(array $options = [])
 */
class DcdnApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dcdn';

    /** @var string */
    public $version = '2018-01-15';

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
 */
class AddDcdnDomain extends Rpc
{
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
 */
class AddDcdnIpaDomain extends Rpc
{
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
 */
class BatchAddDcdnDomain extends Rpc
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
class BatchDeleteDcdnDomainConfigs extends Rpc
{
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
class BatchSetDcdnDomainCertificate extends Rpc
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
class BatchSetDcdnDomainConfigs extends Rpc
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
class BatchSetDcdnIpaDomainConfigs extends Rpc
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
class BatchStartDcdnDomain extends Rpc
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
class BatchStopDcdnDomain extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getSANs()
 * @method $this withSANs($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 */
class CreateDcdnCertificateSigningRequest extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteDcdnDomain extends Rpc
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
class DeleteDcdnIpaDomain extends Rpc
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
class DeleteDcdnIpaSpecificConfig extends Rpc
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
class DeleteDcdnSpecificConfig extends Rpc
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
class DeleteDcdnSpecificStagingConfig extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDcdnBgpBpsData extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDcdnBgpTrafficData extends Rpc
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
class DescribeDcdnCertificateDetail extends Rpc
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
class DescribeDcdnCertificateList extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 */
class DescribeDcdnConfigOfVersion extends Rpc
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
class DescribeDcdnDomainBpsData extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 */
class DescribeDcdnDomainByCertificate extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDomainCname extends Rpc
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
 */
class DescribeDcdnDomainConfigs extends Rpc
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
class DescribeDcdnDomainDetail extends Rpc
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
class DescribeDcdnDomainHitRateData extends Rpc
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
class DescribeDcdnDomainHttpCodeData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
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
class DescribeDcdnDomainIpaBpsData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
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
class DescribeDcdnDomainIpaTrafficData extends Rpc
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
class DescribeDcdnDomainIspData extends Rpc
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
class DescribeDcdnDomainLog extends Rpc
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
class DescribeDcdnDomainMultiUsageData extends Rpc
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
class DescribeDcdnDomainOriginBpsData extends Rpc
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
class DescribeDcdnDomainOriginTrafficData extends Rpc
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
class DescribeDcdnDomainPvData extends Rpc
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
class DescribeDcdnDomainQpsData extends Rpc
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
class DescribeDcdnDomainRealTimeBpsData extends Rpc
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
class DescribeDcdnDomainRealTimeByteHitRateData extends Rpc
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
 * @method string getMerge()
 * @method $this withMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getMergeLocIsp()
 * @method $this withMergeLocIsp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 */
class DescribeDcdnDomainRealTimeDetailData extends Rpc
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
class DescribeDcdnDomainRealTimeHttpCodeData extends Rpc
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
class DescribeDcdnDomainRealTimeQpsData extends Rpc
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
class DescribeDcdnDomainRealTimeReqHitRateData extends Rpc
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
class DescribeDcdnDomainRealTimeSrcBpsData extends Rpc
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
class DescribeDcdnDomainRealTimeSrcHttpCodeData extends Rpc
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
class DescribeDcdnDomainRealTimeSrcTrafficData extends Rpc
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
class DescribeDcdnDomainRealTimeTrafficData extends Rpc
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
class DescribeDcdnDomainRegionData extends Rpc
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
class DescribeDcdnDomainStagingConfig extends Rpc
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
class DescribeDcdnDomainTopReferVisit extends Rpc
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
class DescribeDcdnDomainTopUrlVisit extends Rpc
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
class DescribeDcdnDomainTrafficData extends Rpc
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
class DescribeDcdnDomainUvData extends Rpc
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
class DescribeDcdnDomainWebsocketBpsData extends Rpc
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
class DescribeDcdnDomainWebsocketHttpCodeData extends Rpc
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
class DescribeDcdnDomainWebsocketTrafficData extends Rpc
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
class DescribeDcdnHttpsDomainList extends Rpc
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
class DescribeDcdnIpaDomainConfigs extends Rpc
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
class DescribeDcdnIpaDomainDetail extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnIpaService extends Rpc
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
class DescribeDcdnIpaUserDomains extends Rpc
{
}

/**
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnIpInfo extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnRefreshQuota extends Rpc
{
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
class DescribeDcdnRefreshTasks extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnService extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnStagingIp extends Rpc
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
class DescribeDcdnTagResources extends Rpc
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
class DescribeDcdnTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnUserBillHistory extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnUserBillType extends Rpc
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
class DescribeDcdnUserDomains extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnUserQuota extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnUserResourcePackage extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnUserTags extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnVerifyContent extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUserDcdnIpaStatus extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUserDcdnStatus extends Rpc
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
class ModifyDCdnDomainSchdmByProperty extends Rpc
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
class PreloadDcdnObjectCaches extends Rpc
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
class PublishDcdnStagingConfigToProduction extends Rpc
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
class RefreshDcdnObjectCaches extends Rpc
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
class RollbackDcdnStagingConfig extends Rpc
{
}

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getFunctionArgs()
 * @method $this withFunctionArgs($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class SetDcdnConfigOfVersion extends Rpc
{
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
class SetDcdnDomainCertificate extends Rpc
{
}

/**
 * @method string getServerCertificate()
 * @method $this withServerCertificate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDcdnDomainCSRCertificate extends Rpc
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
class SetDcdnDomainStagingConfig extends Rpc
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
class StartDcdnDomain extends Rpc
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
class StartDcdnIpaDomain extends Rpc
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
class StopDcdnDomain extends Rpc
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
class StopDcdnIpaDomain extends Rpc
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
class TagDcdnResources extends Rpc
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
class UntagDcdnResources extends Rpc
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
class UpdateDcdnDomain extends Rpc
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
class UpdateDcdnIpaDomain extends Rpc
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
class VerifyDcdnDomainOwner extends Rpc
{
}
