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
 * @method CheckDcdnProjectExist checkDcdnProjectExist(array $options = [])
 * @method CommitStagingRoutineCode commitStagingRoutineCode(array $options = [])
 * @method CreateDcdnCertificateSigningRequest createDcdnCertificateSigningRequest(array $options = [])
 * @method CreateDcdnDeliverTask createDcdnDeliverTask(array $options = [])
 * @method CreateDcdnSLSRealTimeLogDelivery createDcdnSLSRealTimeLogDelivery(array $options = [])
 * @method CreateDcdnSubTask createDcdnSubTask(array $options = [])
 * @method CreateRoutine createRoutine(array $options = [])
 * @method CreateSlrAndSlsProject createSlrAndSlsProject(array $options = [])
 * @method DcdnHttpRequestTestTool dcdnHttpRequestTestTool(array $options = [])
 * @method DeleteDcdnDeliverTask deleteDcdnDeliverTask(array $options = [])
 * @method DeleteDcdnDomain deleteDcdnDomain(array $options = [])
 * @method DeleteDcdnIpaDomain deleteDcdnIpaDomain(array $options = [])
 * @method DeleteDcdnIpaSpecificConfig deleteDcdnIpaSpecificConfig(array $options = [])
 * @method DeleteDcdnRealTimeLogProject deleteDcdnRealTimeLogProject(array $options = [])
 * @method DeleteDcdnSpecificConfig deleteDcdnSpecificConfig(array $options = [])
 * @method DeleteDcdnSpecificStagingConfig deleteDcdnSpecificStagingConfig(array $options = [])
 * @method DeleteDcdnSubTask deleteDcdnSubTask(array $options = [])
 * @method DeleteRoutine deleteRoutine(array $options = [])
 * @method DeleteRoutineCodeRevision deleteRoutineCodeRevision(array $options = [])
 * @method DeleteRoutineConfEnvs deleteRoutineConfEnvs(array $options = [])
 * @method DescribeDcdnAclFields describeDcdnAclFields(array $options = [])
 * @method DescribeDcdnBgpBpsData describeDcdnBgpBpsData(array $options = [])
 * @method DescribeDcdnBgpTrafficData describeDcdnBgpTrafficData(array $options = [])
 * @method DescribeDcdnBlockedRegions describeDcdnBlockedRegions(array $options = [])
 * @method DescribeDcdnCertificateDetail describeDcdnCertificateDetail(array $options = [])
 * @method DescribeDcdnCertificateList describeDcdnCertificateList(array $options = [])
 * @method DescribeDcdnConfigGroupDetail describeDcdnConfigGroupDetail(array $options = [])
 * @method DescribeDcdnConfigOfVersion describeDcdnConfigOfVersion(array $options = [])
 * @method DescribeDcdnDeletedDomains describeDcdnDeletedDomains(array $options = [])
 * @method DescribeDcdnDeliverList describeDcdnDeliverList(array $options = [])
 * @method DescribeDcdnDomainBpsData describeDcdnDomainBpsData(array $options = [])
 * @method DescribeDcdnDomainByCertificate describeDcdnDomainByCertificate(array $options = [])
 * @method DescribeDcdnDomainCcActivityLog describeDcdnDomainCcActivityLog(array $options = [])
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
 * @method DescribeDcdnDomainProperty describeDcdnDomainProperty(array $options = [])
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
 * @method DescribeDcdnDomainUsageData describeDcdnDomainUsageData(array $options = [])
 * @method DescribeDcdnDomainUvData describeDcdnDomainUvData(array $options = [])
 * @method DescribeDcdnDomainWebsocketBpsData describeDcdnDomainWebsocketBpsData(array $options = [])
 * @method DescribeDcdnDomainWebsocketHttpCodeData describeDcdnDomainWebsocketHttpCodeData(array $options = [])
 * @method DescribeDcdnDomainWebsocketTrafficData describeDcdnDomainWebsocketTrafficData(array $options = [])
 * @method DescribeDcdnEsExceptionData describeDcdnEsExceptionData(array $options = [])
 * @method DescribeDcdnEsExecuteData describeDcdnEsExecuteData(array $options = [])
 * @method DescribeDcdnHttpsDomainList describeDcdnHttpsDomainList(array $options = [])
 * @method DescribeDcdnIpaDomainConfigs describeDcdnIpaDomainConfigs(array $options = [])
 * @method DescribeDcdnIpaDomainDetail describeDcdnIpaDomainDetail(array $options = [])
 * @method DescribeDcdnIpaService describeDcdnIpaService(array $options = [])
 * @method DescribeDcdnIpaUserDomains describeDcdnIpaUserDomains(array $options = [])
 * @method DescribeDcdnIpInfo describeDcdnIpInfo(array $options = [])
 * @method DescribeDcdnRealTimeDeliveryField describeDcdnRealTimeDeliveryField(array $options = [])
 * @method DescribeDcdnRefreshQuota describeDcdnRefreshQuota(array $options = [])
 * @method DescribeDcdnRefreshTaskById describeDcdnRefreshTaskById(array $options = [])
 * @method DescribeDcdnRefreshTasks describeDcdnRefreshTasks(array $options = [])
 * @method DescribeDcdnRegionAndIsp describeDcdnRegionAndIsp(array $options = [])
 * @method DescribeDcdnReport describeDcdnReport(array $options = [])
 * @method DescribeDcdnReportList describeDcdnReportList(array $options = [])
 * @method DescribeDcdnSecFuncInfo describeDcdnSecFuncInfo(array $options = [])
 * @method DescribeDcdnsecService describeDcdnsecService(array $options = [])
 * @method DescribeDcdnSecSpecInfo describeDcdnSecSpecInfo(array $options = [])
 * @method DescribeDcdnService describeDcdnService(array $options = [])
 * @method DescribeDcdnSLSRealtimeLogDelivery describeDcdnSLSRealtimeLogDelivery(array $options = [])
 * @method DescribeDcdnSMCertificateDetail describeDcdnSMCertificateDetail(array $options = [])
 * @method DescribeDcdnSMCertificateList describeDcdnSMCertificateList(array $options = [])
 * @method DescribeDcdnStagingIp describeDcdnStagingIp(array $options = [])
 * @method DescribeDcdnSubList describeDcdnSubList(array $options = [])
 * @method DescribeDcdnTagResources describeDcdnTagResources(array $options = [])
 * @method DescribeDcdnTopDomainsByFlow describeDcdnTopDomainsByFlow(array $options = [])
 * @method DescribeDcdnUserBillHistory describeDcdnUserBillHistory(array $options = [])
 * @method DescribeDcdnUserBillType describeDcdnUserBillType(array $options = [])
 * @method DescribeDcdnUserDomains describeDcdnUserDomains(array $options = [])
 * @method DescribeDcdnUserDomainsByFunc describeDcdnUserDomainsByFunc(array $options = [])
 * @method DescribeDcdnUserQuota describeDcdnUserQuota(array $options = [])
 * @method DescribeDcdnUserRealTimeDeliveryField describeDcdnUserRealTimeDeliveryField(array $options = [])
 * @method DescribeDcdnUserResourcePackage describeDcdnUserResourcePackage(array $options = [])
 * @method DescribeDcdnUserSecDrop describeDcdnUserSecDrop(array $options = [])
 * @method DescribeDcdnUserSecDropByMinute describeDcdnUserSecDropByMinute(array $options = [])
 * @method DescribeDcdnUserTags describeDcdnUserTags(array $options = [])
 * @method DescribeDcdnVerifyContent describeDcdnVerifyContent(array $options = [])
 * @method DescribeDcdnWafDomain describeDcdnWafDomain(array $options = [])
 * @method DescribeRoutine describeRoutine(array $options = [])
 * @method DescribeRoutineCanaryEnvs describeRoutineCanaryEnvs(array $options = [])
 * @method DescribeRoutineCodeRevision describeRoutineCodeRevision(array $options = [])
 * @method DescribeRoutineSpec describeRoutineSpec(array $options = [])
 * @method DescribeRoutineUserInfo describeRoutineUserInfo(array $options = [])
 * @method DescribeUserDcdnIpaStatus describeUserDcdnIpaStatus(array $options = [])
 * @method DescribeUserDcdnStatus describeUserDcdnStatus(array $options = [])
 * @method DescribeUserErStatus describeUserErStatus(array $options = [])
 * @method DescribeUserLogserviceStatus describeUserLogserviceStatus(array $options = [])
 * @method EditRoutineConf editRoutineConf(array $options = [])
 * @method ListDcdnEsTemplateInfo listDcdnEsTemplateInfo(array $options = [])
 * @method ListDcdnRealTimeDeliveryProject listDcdnRealTimeDeliveryProject(array $options = [])
 * @method ModifyDCdnDomainSchdmByProperty modifyDCdnDomainSchdmByProperty(array $options = [])
 * @method OpenDcdnService openDcdnService(array $options = [])
 * @method PreloadDcdnObjectCaches preloadDcdnObjectCaches(array $options = [])
 * @method PublishDcdnStagingConfigToProduction publishDcdnStagingConfigToProduction(array $options = [])
 * @method PublishRoutineCodeRevision publishRoutineCodeRevision(array $options = [])
 * @method RefreshDcdnObjectCaches refreshDcdnObjectCaches(array $options = [])
 * @method RollbackDcdnStagingConfig rollbackDcdnStagingConfig(array $options = [])
 * @method SetDcdnConfigOfVersion setDcdnConfigOfVersion(array $options = [])
 * @method SetDcdnDomainCertificate setDcdnDomainCertificate(array $options = [])
 * @method SetDcdnDomainCSRCertificate setDcdnDomainCSRCertificate(array $options = [])
 * @method SetDcdnDomainSMCertificate setDcdnDomainSMCertificate(array $options = [])
 * @method SetDcdnDomainStagingConfig setDcdnDomainStagingConfig(array $options = [])
 * @method SetDcdnFullDomainsBlockIP setDcdnFullDomainsBlockIP(array $options = [])
 * @method SetDcdnUserConfig setDcdnUserConfig(array $options = [])
 * @method SetRoutineSubdomain setRoutineSubdomain(array $options = [])
 * @method StartDcdnDomain startDcdnDomain(array $options = [])
 * @method StartDcdnIpaDomain startDcdnIpaDomain(array $options = [])
 * @method StopDcdnDomain stopDcdnDomain(array $options = [])
 * @method StopDcdnIpaDomain stopDcdnIpaDomain(array $options = [])
 * @method TagDcdnResources tagDcdnResources(array $options = [])
 * @method UntagDcdnResources untagDcdnResources(array $options = [])
 * @method UpdateDcdnDeliverTask updateDcdnDeliverTask(array $options = [])
 * @method UpdateDcdnDomain updateDcdnDomain(array $options = [])
 * @method UpdateDcdnIpaDomain updateDcdnIpaDomain(array $options = [])
 * @method UpdateDcdnSLSRealtimeLogDelivery updateDcdnSLSRealtimeLogDelivery(array $options = [])
 * @method UpdateDcdnSubTask updateDcdnSubTask(array $options = [])
 * @method UpdateDcdnUserRealTimeDeliveryField updateDcdnUserRealTimeDeliveryField(array $options = [])
 * @method UploadRoutineCode uploadRoutineCode(array $options = [])
 * @method UploadStagingRoutineCode uploadStagingRoutineCode(array $options = [])
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
 * @method string getProtocol()
 * @method $this withProtocol($value)
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckDcdnProjectExist extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCodeDescription()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class CommitStagingRoutineCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodeDescription($value)
    {
        $this->data['CodeDescription'] = $value;
        $this->options['form_params']['CodeDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
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
 * @method string getReports()
 * @method string getDeliver()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchedule()
 * @method string getName()
 */
class CreateDcdnDeliverTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReports($value)
    {
        $this->data['Reports'] = $value;
        $this->options['form_params']['Reports'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliver($value)
    {
        $this->data['Deliver'] = $value;
        $this->options['form_params']['Deliver'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedule($value)
    {
        $this->data['Schedule'] = $value;
        $this->options['form_params']['Schedule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getSLSLogStore()
 * @method string getSLSProject()
 * @method string getBusinessType()
 * @method string getSLSRegion()
 * @method string getProjectName()
 * @method string getDomainName()
 * @method string getSamplingRate()
 * @method string getDataCenter()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateDcdnSLSRealTimeLogDelivery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSLSLogStore($value)
    {
        $this->data['SLSLogStore'] = $value;
        $this->options['form_params']['SLSLogStore'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSLSProject($value)
    {
        $this->data['SLSProject'] = $value;
        $this->options['form_params']['SLSProject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBusinessType($value)
    {
        $this->data['BusinessType'] = $value;
        $this->options['form_params']['BusinessType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSLSRegion($value)
    {
        $this->data['SLSRegion'] = $value;
        $this->options['form_params']['SLSRegion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSamplingRate($value)
    {
        $this->data['SamplingRate'] = $value;
        $this->options['form_params']['SamplingRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataCenter($value)
    {
        $this->data['DataCenter'] = $value;
        $this->options['form_params']['DataCenter'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReportIds()
 */
class CreateDcdnSubTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReportIds($value)
    {
        $this->data['ReportIds'] = $value;
        $this->options['form_params']['ReportIds'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getEnvConf()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class CreateRoutine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvConf($value)
    {
        $this->data['EnvConf'] = $value;
        $this->options['form_params']['EnvConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 */
class CreateSlrAndSlsProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['form_params']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getProxyIp()
 * @method string getScheme()
 * @method string getBody()
 * @method string getHost()
 * @method string getMethod()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUri()
 * @method string getArgs()
 * @method string getHeader()
 */
class DcdnHttpRequestTestTool extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyIp($value)
    {
        $this->data['ProxyIp'] = $value;
        $this->options['form_params']['ProxyIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheme($value)
    {
        $this->data['Scheme'] = $value;
        $this->options['form_params']['Scheme'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHost($value)
    {
        $this->data['Host'] = $value;
        $this->options['form_params']['Host'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethod($value)
    {
        $this->data['Method'] = $value;
        $this->options['form_params']['Method'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUri($value)
    {
        $this->data['Uri'] = $value;
        $this->options['form_params']['Uri'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArgs($value)
    {
        $this->data['Args'] = $value;
        $this->options['form_params']['Args'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeader($value)
    {
        $this->data['Header'] = $value;
        $this->options['form_params']['Header'] = $value;

        return $this;
    }
}

/**
 * @method string getDeliverId()
 * @method $this withDeliverId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDcdnDeliverTask extends Rpc
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
class DeleteDcdnDomain extends Rpc
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
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDcdnRealTimeLogProject extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteDcdnSubTask extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class DeleteRoutine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getSelectCodeRevision()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class DeleteRoutineCodeRevision extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSelectCodeRevision($value)
    {
        $this->data['SelectCodeRevision'] = $value;
        $this->options['form_params']['SelectCodeRevision'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvs()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class DeleteRoutineConfEnvs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['form_params']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnAclFields extends Rpc
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
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnBlockedRegions extends Rpc
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
 * @method string getConfigGroupName()
 * @method $this withConfigGroupName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigGroupId()
 * @method $this withConfigGroupId($value)
 */
class DescribeDcdnConfigGroupDetail extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDeletedDomains extends Rpc
{
}

/**
 * @method string getDeliverId()
 * @method $this withDeliverId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDeliverList extends Rpc
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
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTriggerObject()
 * @method $this withTriggerObject($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDomainCcActivityLog extends Rpc
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
 * @method string getConfigId()
 * @method $this withConfigId($value)
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDomainProperty extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDcdnDomainTopReferVisit extends Rpc
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
class DescribeDcdnDomainUsageData extends Rpc
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeDcdnEsExceptionData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeDcdnEsExecuteData extends Rpc
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
 * @method array getTag()
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
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnRealTimeDeliveryField extends Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnRefreshTaskById extends Rpc
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
class DescribeDcdnRegionAndIsp extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHttpCode()
 * @method $this withHttpCode($value)
 * @method string getIsOverseas()
 * @method $this withIsOverseas($value)
 */
class DescribeDcdnReport extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnReportList extends Rpc
{
}

/**
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecFuncType()
 * @method $this withSecFuncType($value)
 */
class DescribeDcdnSecFuncInfo extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnsecService extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnSecSpecInfo extends Rpc
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
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnSLSRealtimeLogDelivery extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 */
class DescribeDcdnSMCertificateDetail extends Rpc
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
class DescribeDcdnSMCertificateList extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnSubList extends Rpc
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
 * @method array getTag()
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getCoverage()
 * @method $this withCoverage($value)
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
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
 */
class DescribeDcdnUserDomainsByFunc extends Rpc
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
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnUserRealTimeDeliveryField extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDcdnUserResourcePackage extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getSecFunc()
 * @method $this withSecFunc($value)
 */
class DescribeDcdnUserSecDrop extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecFunc()
 * @method $this withSecFunc($value)
 * @method string getObject()
 * @method $this withObject($value)
 */
class DescribeDcdnUserSecDropByMinute extends Rpc
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnWafDomain extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class DescribeRoutine extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRoutineCanaryEnvs extends Rpc
{
}

/**
 * @method string getSelectCodeRevision()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class DescribeRoutineCodeRevision extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSelectCodeRevision($value)
    {
        $this->data['SelectCodeRevision'] = $value;
        $this->options['form_params']['SelectCodeRevision'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRoutineSpec extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRoutineUserInfo extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUserErStatus extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeUserLogserviceStatus extends Rpc
{
}

/**
 * @method string getDescription()
 * @method string getEnvConf()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class EditRoutineConf extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvConf($value)
    {
        $this->data['EnvConf'] = $value;
        $this->options['form_params']['EnvConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOp()
 * @method $this withOp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListDcdnEsTemplateInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListDcdnRealTimeDeliveryProject extends Rpc
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
 * @method string getWebsocketBillType()
 * @method $this withWebsocketBillType($value)
 * @method string getBillType()
 * @method $this withBillType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenDcdnService extends Rpc
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
 * @method string getSelectCodeRevision()
 * @method string getEnvs()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class PublishRoutineCodeRevision extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSelectCodeRevision($value)
    {
        $this->data['SelectCodeRevision'] = $value;
        $this->options['form_params']['SelectCodeRevision'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['form_params']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
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
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 */
class SetDcdnDomainSMCertificate extends Rpc
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
 * @method string getIPList()
 * @method string getBlockInterval()
 * @method string getOperationType()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDcdnFullDomainsBlockIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIPList($value)
    {
        $this->data['IPList'] = $value;
        $this->options['form_params']['IPList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBlockInterval($value)
    {
        $this->data['BlockInterval'] = $value;
        $this->options['form_params']['BlockInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationType($value)
    {
        $this->data['OperationType'] = $value;
        $this->options['form_params']['OperationType'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigs()
 * @method $this withConfigs($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class SetDcdnUserConfig extends Rpc
{
}

/**
 * @method string getSubdomains()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetRoutineSubdomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubdomains($value)
    {
        $this->data['Subdomains'] = $value;
        $this->options['form_params']['Subdomains'] = $value;

        return $this;
    }
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getReports()
 * @method string getDeliver()
 * @method string getDeliverId()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSchedule()
 * @method string getName()
 */
class UpdateDcdnDeliverTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReports($value)
    {
        $this->data['Reports'] = $value;
        $this->options['form_params']['Reports'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliver($value)
    {
        $this->data['Deliver'] = $value;
        $this->options['form_params']['Deliver'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliverId($value)
    {
        $this->data['DeliverId'] = $value;
        $this->options['form_params']['DeliverId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchedule($value)
    {
        $this->data['Schedule'] = $value;
        $this->options['form_params']['Schedule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

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
 * @method string getSLSLogStore()
 * @method string getSLSProject()
 * @method string getSLSRegion()
 * @method string getProjectName()
 * @method string getDomainName()
 * @method string getSamplingRate()
 * @method string getDataCenter()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateDcdnSLSRealtimeLogDelivery extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSLSLogStore($value)
    {
        $this->data['SLSLogStore'] = $value;
        $this->options['form_params']['SLSLogStore'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSLSProject($value)
    {
        $this->data['SLSProject'] = $value;
        $this->options['form_params']['SLSProject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSLSRegion($value)
    {
        $this->data['SLSRegion'] = $value;
        $this->options['form_params']['SLSRegion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->options['form_params']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSamplingRate($value)
    {
        $this->data['SamplingRate'] = $value;
        $this->options['form_params']['SamplingRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataCenter($value)
    {
        $this->data['DataCenter'] = $value;
        $this->options['form_params']['DataCenter'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReportIds()
 */
class UpdateDcdnSubTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReportIds($value)
    {
        $this->data['ReportIds'] = $value;
        $this->options['form_params']['ReportIds'] = $value;

        return $this;
    }
}

/**
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class UpdateDcdnUserRealTimeDeliveryField extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCodeDescription()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class UploadRoutineCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodeDescription($value)
    {
        $this->data['CodeDescription'] = $value;
        $this->options['form_params']['CodeDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getCodeDescription()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 */
class UploadStagingRoutineCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCodeDescription($value)
    {
        $this->data['CodeDescription'] = $value;
        $this->options['form_params']['CodeDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
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
