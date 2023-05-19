<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDcdnDomain addDcdnDomain(array $options = [])
 * @method AddDcdnIpaDomain addDcdnIpaDomain(array $options = [])
 * @method BatchAddDcdnDomain batchAddDcdnDomain(array $options = [])
 * @method BatchCreateDcdnWafRules batchCreateDcdnWafRules(array $options = [])
 * @method BatchDeleteDcdnDomainConfigs batchDeleteDcdnDomainConfigs(array $options = [])
 * @method BatchDeleteDcdnWafRules batchDeleteDcdnWafRules(array $options = [])
 * @method BatchModifyDcdnWafRules batchModifyDcdnWafRules(array $options = [])
 * @method BatchSetDcdnDomainCertificate batchSetDcdnDomainCertificate(array $options = [])
 * @method BatchSetDcdnDomainConfigs batchSetDcdnDomainConfigs(array $options = [])
 * @method BatchSetDcdnIpaDomainConfigs batchSetDcdnIpaDomainConfigs(array $options = [])
 * @method BatchSetDcdnWafDomainConfigs batchSetDcdnWafDomainConfigs(array $options = [])
 * @method CheckDcdnProjectExist checkDcdnProjectExist(array $options = [])
 * @method CommitStagingRoutineCode commitStagingRoutineCode(array $options = [])
 * @method CreateDcdnDeliverTask createDcdnDeliverTask(array $options = [])
 * @method CreateDcdnSLSRealTimeLogDelivery createDcdnSLSRealTimeLogDelivery(array $options = [])
 * @method CreateDcdnSubTask createDcdnSubTask(array $options = [])
 * @method CreateDcdnWafPolicy createDcdnWafPolicy(array $options = [])
 * @method CreateRoutine createRoutine(array $options = [])
 * @method CreateSlrAndSlsProject createSlrAndSlsProject(array $options = [])
 * @method DeleteDcdnDeliverTask deleteDcdnDeliverTask(array $options = [])
 * @method DeleteDcdnDomain deleteDcdnDomain(array $options = [])
 * @method DeleteDcdnIpaDomain deleteDcdnIpaDomain(array $options = [])
 * @method DeleteDcdnIpaSpecificConfig deleteDcdnIpaSpecificConfig(array $options = [])
 * @method DeleteDcdnKv deleteDcdnKv(array $options = [])
 * @method DeleteDcdnRealTimeLogProject deleteDcdnRealTimeLogProject(array $options = [])
 * @method DeleteDcdnSpecificConfig deleteDcdnSpecificConfig(array $options = [])
 * @method DeleteDcdnSpecificStagingConfig deleteDcdnSpecificStagingConfig(array $options = [])
 * @method DeleteDcdnSubTask deleteDcdnSubTask(array $options = [])
 * @method DeleteDcdnWafPolicy deleteDcdnWafPolicy(array $options = [])
 * @method DeleteRoutine deleteRoutine(array $options = [])
 * @method DeleteRoutineCodeRevision deleteRoutineCodeRevision(array $options = [])
 * @method DeleteRoutineConfEnvs deleteRoutineConfEnvs(array $options = [])
 * @method DescribeDcdnAclFields describeDcdnAclFields(array $options = [])
 * @method DescribeDcdnBgpBpsData describeDcdnBgpBpsData(array $options = [])
 * @method DescribeDcdnBgpTrafficData describeDcdnBgpTrafficData(array $options = [])
 * @method DescribeDcdnBlockedRegions describeDcdnBlockedRegions(array $options = [])
 * @method DescribeDcdnCertificateDetail describeDcdnCertificateDetail(array $options = [])
 * @method DescribeDcdnCertificateList describeDcdnCertificateList(array $options = [])
 * @method DescribeDcdnDeletedDomains describeDcdnDeletedDomains(array $options = [])
 * @method DescribeDcdnDeliverList describeDcdnDeliverList(array $options = [])
 * @method DescribeDcdnDomainBpsData describeDcdnDomainBpsData(array $options = [])
 * @method DescribeDcdnDomainBpsDataByLayer describeDcdnDomainBpsDataByLayer(array $options = [])
 * @method DescribeDcdnDomainByCertificate describeDcdnDomainByCertificate(array $options = [])
 * @method DescribeDcdnDomainCcActivityLog describeDcdnDomainCcActivityLog(array $options = [])
 * @method DescribeDcdnDomainCertificateInfo describeDcdnDomainCertificateInfo(array $options = [])
 * @method DescribeDcdnDomainCname describeDcdnDomainCname(array $options = [])
 * @method DescribeDcdnDomainConfigs describeDcdnDomainConfigs(array $options = [])
 * @method DescribeDcdnDomainDetail describeDcdnDomainDetail(array $options = [])
 * @method DescribeDcdnDomainHitRateData describeDcdnDomainHitRateData(array $options = [])
 * @method DescribeDcdnDomainHttpCodeData describeDcdnDomainHttpCodeData(array $options = [])
 * @method DescribeDcdnDomainHttpCodeDataByLayer describeDcdnDomainHttpCodeDataByLayer(array $options = [])
 * @method DescribeDcdnDomainIpaBpsData describeDcdnDomainIpaBpsData(array $options = [])
 * @method DescribeDcdnDomainIpaConnData describeDcdnDomainIpaConnData(array $options = [])
 * @method DescribeDcdnDomainIpaTrafficData describeDcdnDomainIpaTrafficData(array $options = [])
 * @method DescribeDcdnDomainIspData describeDcdnDomainIspData(array $options = [])
 * @method DescribeDcdnDomainLog describeDcdnDomainLog(array $options = [])
 * @method DescribeDcdnDomainMultiUsageData describeDcdnDomainMultiUsageData(array $options = [])
 * @method DescribeDcdnDomainOriginBpsData describeDcdnDomainOriginBpsData(array $options = [])
 * @method DescribeDcdnDomainOriginTrafficData describeDcdnDomainOriginTrafficData(array $options = [])
 * @method DescribeDcdnDomainProperty describeDcdnDomainProperty(array $options = [])
 * @method DescribeDcdnDomainPvData describeDcdnDomainPvData(array $options = [])
 * @method DescribeDcdnDomainQpsData describeDcdnDomainQpsData(array $options = [])
 * @method DescribeDcdnDomainQpsDataByLayer describeDcdnDomainQpsDataByLayer(array $options = [])
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
 * @method DescribeDcdnErUsageData describeDcdnErUsageData(array $options = [])
 * @method DescribeDcdnFullDomainsBlockIPConfig describeDcdnFullDomainsBlockIPConfig(array $options = [])
 * @method DescribeDcdnFullDomainsBlockIPHistory describeDcdnFullDomainsBlockIPHistory(array $options = [])
 * @method DescribeDcdnHttpsDomainList describeDcdnHttpsDomainList(array $options = [])
 * @method DescribeDcdnIpaDomainConfigs describeDcdnIpaDomainConfigs(array $options = [])
 * @method DescribeDcdnIpaDomainDetail describeDcdnIpaDomainDetail(array $options = [])
 * @method DescribeDcdnIpaService describeDcdnIpaService(array $options = [])
 * @method DescribeDcdnIpaUserDomains describeDcdnIpaUserDomains(array $options = [])
 * @method DescribeDcdnIpInfo describeDcdnIpInfo(array $options = [])
 * @method DescribeDcdnL2Vips describeDcdnL2Vips(array $options = [])
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
 * @method DescribeDcdnUserCertificateExpireCount describeDcdnUserCertificateExpireCount(array $options = [])
 * @method DescribeDcdnUserConfigs describeDcdnUserConfigs(array $options = [])
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
 * @method DescribeDcdnWafDomainDetail describeDcdnWafDomainDetail(array $options = [])
 * @method DescribeDcdnWafDomains describeDcdnWafDomains(array $options = [])
 * @method DescribeDcdnWafFilterInfo describeDcdnWafFilterInfo(array $options = [])
 * @method DescribeDcdnWafGeoInfo describeDcdnWafGeoInfo(array $options = [])
 * @method DescribeDcdnWafLogs describeDcdnWafLogs(array $options = [])
 * @method DescribeDcdnWafPolicies describeDcdnWafPolicies(array $options = [])
 * @method DescribeDcdnWafPolicy describeDcdnWafPolicy(array $options = [])
 * @method DescribeDcdnWafPolicyDomains describeDcdnWafPolicyDomains(array $options = [])
 * @method DescribeDcdnWafPolicyValidDomains describeDcdnWafPolicyValidDomains(array $options = [])
 * @method DescribeDcdnWafRule describeDcdnWafRule(array $options = [])
 * @method DescribeDcdnWafRules describeDcdnWafRules(array $options = [])
 * @method DescribeDcdnWafScenes describeDcdnWafScenes(array $options = [])
 * @method DescribeDcdnWafService describeDcdnWafService(array $options = [])
 * @method DescribeDcdnWafSpecInfo describeDcdnWafSpecInfo(array $options = [])
 * @method DescribeDcdnWafUsageData describeDcdnWafUsageData(array $options = [])
 * @method DescribeRDDomainConfig describeRDDomainConfig(array $options = [])
 * @method DescribeRDDomains describeRDDomains(array $options = [])
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
 * @method GetDcdnKv getDcdnKv(array $options = [])
 * @method ListDcdnRealTimeDeliveryProject listDcdnRealTimeDeliveryProject(array $options = [])
 * @method ModifyDCdnDomainSchdmByProperty modifyDCdnDomainSchdmByProperty(array $options = [])
 * @method ModifyDcdnWafPolicy modifyDcdnWafPolicy(array $options = [])
 * @method ModifyDcdnWafPolicyDomains modifyDcdnWafPolicyDomains(array $options = [])
 * @method ModifyDcdnWafRule modifyDcdnWafRule(array $options = [])
 * @method OpenDcdnService openDcdnService(array $options = [])
 * @method PreloadDcdnObjectCaches preloadDcdnObjectCaches(array $options = [])
 * @method PublishDcdnStagingConfigToProduction publishDcdnStagingConfigToProduction(array $options = [])
 * @method PublishRoutineCodeRevision publishRoutineCodeRevision(array $options = [])
 * @method PutDcdnKv putDcdnKv(array $options = [])
 * @method RefreshDcdnObjectCaches refreshDcdnObjectCaches(array $options = [])
 * @method RollbackDcdnStagingConfig rollbackDcdnStagingConfig(array $options = [])
 * @method SetDcdnDomainCertificate setDcdnDomainCertificate(array $options = [])
 * @method SetDcdnDomainSMCertificate setDcdnDomainSMCertificate(array $options = [])
 * @method SetDcdnDomainStagingConfig setDcdnDomainStagingConfig(array $options = [])
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
 * @method array getTag()
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
 * @method string getPolicyId()
 * @method string getRuleConfigs()
 */
class BatchCreateDcdnWafRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleConfigs($value)
    {
        $this->data['RuleConfigs'] = $value;
        $this->options['form_params']['RuleConfigs'] = $value;

        return $this;
    }
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchDeleteDcdnDomainConfigs extends Rpc
{
}

/**
 * @method string getRuleIds()
 */
class BatchDeleteDcdnWafRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleIds($value)
    {
        $this->data['RuleIds'] = $value;
        $this->options['form_params']['RuleIds'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyId()
 * @method string getRuleConfigs()
 */
class BatchModifyDcdnWafRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleConfigs($value)
    {
        $this->data['RuleConfigs'] = $value;
        $this->options['form_params']['RuleConfigs'] = $value;

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
 * @method string getClientIpTag()
 * @method string getDefenseStatus()
 */
class BatchSetDcdnWafDomainConfigs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainNames($value)
    {
        $this->data['DomainNames'] = $value;
        $this->options['form_params']['DomainNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientIpTag($value)
    {
        $this->data['ClientIpTag'] = $value;
        $this->options['form_params']['ClientIpTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefenseStatus($value)
    {
        $this->data['DefenseStatus'] = $value;
        $this->options['form_params']['DefenseStatus'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class CheckDcdnProjectExist extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCodeDescription()
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
 * @method string getReports()
 * @method string getSchedule()
 * @method string getName()
 * @method string getDomainName()
 * @method string getDeliver()
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
    public function withDeliver($value)
    {
        $this->data['Deliver'] = $value;
        $this->options['form_params']['Deliver'] = $value;

        return $this;
    }
}

/**
 * @method string getSLSLogStore()
 * @method string getProjectName()
 * @method string getDomainName()
 * @method string getSamplingRate()
 * @method string getDataCenter()
 * @method string getSLSProject()
 * @method string getSLSRegion()
 * @method string getBusinessType()
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
    public function withBusinessType($value)
    {
        $this->data['BusinessType'] = $value;
        $this->options['form_params']['BusinessType'] = $value;

        return $this;
    }
}

/**
 * @method string getReportIds()
 * @method string getDomainName()
 */
class CreateDcdnSubTask extends Rpc
{

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
}

/**
 * @method string getDefenseScene()
 * @method string getPolicyType()
 * @method string getPolicyStatus()
 * @method string getPolicyName()
 */
class CreateDcdnWafPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefenseScene($value)
    {
        $this->data['DefenseScene'] = $value;
        $this->options['form_params']['DefenseScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyType($value)
    {
        $this->data['PolicyType'] = $value;
        $this->options['form_params']['PolicyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyStatus($value)
    {
        $this->data['PolicyStatus'] = $value;
        $this->options['form_params']['PolicyStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyName($value)
    {
        $this->data['PolicyName'] = $value;
        $this->options['form_params']['PolicyName'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvConf()
 * @method string getName()
 * @method string getDescription()
 */
class CreateRoutine extends Rpc
{

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
}

/**
 * @method string getRegion()
 * @method string getBusinessType()
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
}

/**
 * @method string getDeliverId()
 * @method $this withDeliverId($value)
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteDcdnIpaSpecificConfig extends Rpc
{
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class DeleteDcdnKv extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DeleteDcdnRealTimeLogProject extends Rpc
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

class DeleteDcdnSubTask extends Rpc
{
}

/**
 * @method string getPolicyId()
 */
class DeleteDcdnWafPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }
}

/**
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
 * @method string getName()
 * @method string getSelectCodeRevision()
 */
class DeleteRoutineCodeRevision extends Rpc
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
}

/**
 * @method string getName()
 * @method string getEnvs()
 */
class DeleteRoutineConfEnvs extends Rpc
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
}

/**
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDcdnAclFields extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDevicePort()
 * @method $this withDevicePort($value)
 */
class DescribeDcdnBgpBpsData extends Rpc
{
}

/**
 * @method string getIsp()
 * @method $this withIsp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnBgpTrafficData extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeDcdnBlockedRegions extends Rpc
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
class DescribeDcdnCertificateDetail extends Rpc
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
class DescribeDcdnCertificateList extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnDeletedDomains extends Rpc
{
}

/**
 * @method string getDeliverId()
 * @method $this withDeliverId($value)
 */
class DescribeDcdnDeliverList extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainBpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getLayer()
 * @method $this withLayer($value)
 */
class DescribeDcdnDomainBpsDataByLayer extends Rpc
{
}

/**
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getSSLStatus()
 * @method $this withSSLStatus($value)
 */
class DescribeDcdnDomainByCertificate extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getTriggerObject()
 * @method $this withTriggerObject($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnDomainCcActivityLog extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnDomainCname extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainHitRateData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainHttpCodeData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getLayer()
 * @method $this withLayer($value)
 */
class DescribeDcdnDomainHttpCodeDataByLayer extends Rpc
{
}

/**
 * @method string getFixTimeGap()
 * @method $this withFixTimeGap($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainIpaBpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 */
class DescribeDcdnDomainIpaConnData extends Rpc
{
}

/**
 * @method string getFixTimeGap()
 * @method $this withFixTimeGap($value)
 * @method string getTimeMerge()
 * @method $this withTimeMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainIpaTrafficData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainIspData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnDomainLog extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainMultiUsageData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainOriginBpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainOriginTrafficData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnDomainProperty extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainPvData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainQpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getLayer()
 * @method $this withLayer($value)
 */
class DescribeDcdnDomainQpsDataByLayer extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainRealTimeBpsData extends Rpc
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
 */
class DescribeDcdnDomainRealTimeByteHitRateData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getField()
 * @method $this withField($value)
 * @method string getMerge()
 * @method $this withMerge($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getMergeLocIsp()
 * @method $this withMergeLocIsp($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainRealTimeDetailData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainRealTimeHttpCodeData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainRealTimeQpsData extends Rpc
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
 */
class DescribeDcdnDomainRealTimeReqHitRateData extends Rpc
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
 */
class DescribeDcdnDomainRealTimeSrcBpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainRealTimeSrcHttpCodeData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainRealTimeSrcTrafficData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainRealTimeTrafficData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainRegionData extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnDomainStagingConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainTopReferVisit extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainTopUrlVisit extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainTrafficData extends Rpc
{
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDataProtocol()
 * @method $this withDataProtocol($value)
 */
class DescribeDcdnDomainUsageData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnDomainUvData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainWebsocketBpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainWebsocketHttpCodeData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 */
class DescribeDcdnDomainWebsocketTrafficData extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRoutineID()
 * @method $this withRoutineID($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 */
class DescribeDcdnErUsageData extends Rpc
{
}

/**
 * @method string getIPList()
 * @method $this withIPList($value)
 */
class DescribeDcdnFullDomainsBlockIPConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getIPList()
 */
class DescribeDcdnFullDomainsBlockIPHistory extends Rpc
{

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
    public function withIPList($value)
    {
        $this->data['IPList'] = $value;
        $this->options['form_params']['IPList'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnHttpsDomainList extends Rpc
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
class DescribeDcdnIpaDomainConfigs extends Rpc
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
 */
class DescribeDcdnIpInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnL2Vips extends Rpc
{
}

/**
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
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
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getIsOverseas()
 * @method $this withIsOverseas($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getHttpCode()
 * @method $this withHttpCode($value)
 */
class DescribeDcdnReport extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class DescribeDcdnReportList extends Rpc
{
}

/**
 * @method string getSecFuncType()
 * @method $this withSecFuncType($value)
 * @method string getLang()
 * @method $this withLang($value)
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
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class DescribeDcdnSLSRealtimeLogDelivery extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 */
class DescribeDcdnSMCertificateDetail extends Rpc
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
class DescribeDcdnSMCertificateList extends Rpc
{
}

class DescribeDcdnStagingIp extends Rpc
{
}

class DescribeDcdnSubList extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeDcdnTagResources extends Rpc
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
}

/**
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnUserBillHistory extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDcdnUserBillType extends Rpc
{
}

class DescribeDcdnUserCertificateExpireCount extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 */
class DescribeDcdnUserConfigs extends Rpc
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
 * @method string getFuncFilter()
 * @method $this withFuncFilter($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 */
class DescribeDcdnUserRealTimeDeliveryField extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDcdnUserResourcePackage extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getSecFunc()
 * @method $this withSecFunc($value)
 */
class DescribeDcdnUserSecDrop extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSecFunc()
 * @method $this withSecFunc($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getObject()
 * @method $this withObject($value)
 */
class DescribeDcdnUserSecDropByMinute extends Rpc
{
}

class DescribeDcdnUserTags extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnVerifyContent extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnWafDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDcdnWafDomainDetail extends Rpc
{
}

/**
 * @method string getQueryArgs()
 * @method $this withQueryArgs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnWafDomains extends Rpc
{
}

/**
 * @method string getDefenseScenes()
 * @method $this withDefenseScenes($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeDcdnWafFilterInfo extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeDcdnWafGeoInfo extends Rpc
{
}

/**
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnWafLogs extends Rpc
{
}

/**
 * @method string getQueryArgs()
 * @method $this withQueryArgs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnWafPolicies extends Rpc
{
}

/**
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DescribeDcdnWafPolicy extends Rpc
{
}

/**
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnWafPolicyDomains extends Rpc
{
}

/**
 * @method string getDefenseScene()
 * @method $this withDefenseScene($value)
 * @method string getDomainNameLike()
 * @method $this withDomainNameLike($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnWafPolicyValidDomains extends Rpc
{
}

/**
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeDcdnWafRule extends Rpc
{
}

/**
 * @method string getQueryArgs()
 * @method $this withQueryArgs($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDcdnWafRules extends Rpc
{
}

/**
 * @method string getDefenseScenes()
 * @method $this withDefenseScenes($value)
 */
class DescribeDcdnWafScenes extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeDcdnWafService extends Rpc
{
}

class DescribeDcdnWafSpecInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 */
class DescribeDcdnWafUsageData extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeRDDomainConfig extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeRDDomains extends Rpc
{
}

/**
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

class DescribeRoutineCanaryEnvs extends Rpc
{
}

/**
 * @method string getName()
 * @method string getSelectCodeRevision()
 */
class DescribeRoutineCodeRevision extends Rpc
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
}

class DescribeRoutineSpec extends Rpc
{
}

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
 */
class DescribeUserDcdnStatus extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getEnvConf()
 * @method string getName()
 * @method string getDescription()
 */
class EditRoutineConf extends Rpc
{

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
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class GetDcdnKv extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class ListDcdnRealTimeDeliveryProject extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getProperty()
 * @method $this withProperty($value)
 */
class ModifyDCdnDomainSchdmByProperty extends Rpc
{
}

/**
 * @method string getPolicyId()
 * @method string getPolicyStatus()
 * @method string getPolicyName()
 */
class ModifyDcdnWafPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyStatus($value)
    {
        $this->data['PolicyStatus'] = $value;
        $this->options['form_params']['PolicyStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyName($value)
    {
        $this->data['PolicyName'] = $value;
        $this->options['form_params']['PolicyName'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyId()
 * @method string getMethod()
 * @method string getBindDomains()
 * @method string getUnbindDomains()
 */
class ModifyDcdnWafPolicyDomains extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

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
    public function withBindDomains($value)
    {
        $this->data['BindDomains'] = $value;
        $this->options['form_params']['BindDomains'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUnbindDomains($value)
    {
        $this->data['UnbindDomains'] = $value;
        $this->options['form_params']['UnbindDomains'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleConfig()
 * @method string getRuleStatus()
 * @method string getRuleName()
 * @method string getRuleId()
 */
class ModifyDcdnWafRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleConfig($value)
    {
        $this->data['RuleConfig'] = $value;
        $this->options['form_params']['RuleConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleStatus($value)
    {
        $this->data['RuleStatus'] = $value;
        $this->options['form_params']['RuleStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['form_params']['RuleId'] = $value;

        return $this;
    }
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
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getL2Preload()
 * @method $this withL2Preload($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getWithHeader()
 * @method $this withWithHeader($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PreloadDcdnObjectCaches extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class PublishDcdnStagingConfigToProduction extends Rpc
{
}

/**
 * @method string getName()
 * @method string getSelectCodeRevision()
 * @method string getEnvs()
 */
class PublishRoutineCodeRevision extends Rpc
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
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getValue()
 * @method string getKey()
 * @method $this withKey($value)
 */
class PutDcdnKv extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['form_params']['Value'] = $value;

        return $this;
    }
}

/**
 * @method string getObjectPath()
 * @method $this withObjectPath($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RefreshDcdnObjectCaches extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class RollbackDcdnStagingConfig extends Rpc
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
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 */
class SetDcdnDomainStagingConfig extends Rpc
{
}

/**
 * @method string getConfigs()
 * @method $this withConfigs($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFunctionId()
 * @method $this withFunctionId($value)
 */
class SetDcdnUserConfig extends Rpc
{
}

/**
 * @method string getSubdomains()
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
 * @method array getResourceId()
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagDcdnResources extends Rpc
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
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
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
 * @method string getSchedule()
 * @method string getName()
 * @method string getDomainName()
 * @method string getDeliver()
 * @method string getDeliverId()
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
 * @method string getProjectName()
 * @method string getDomainName()
 * @method string getSamplingRate()
 * @method string getDataCenter()
 * @method string getSLSProject()
 * @method string getSLSRegion()
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
}

/**
 * @method string getReportIds()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class UpdateDcdnSubTask extends Rpc
{

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
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }
}

/**
 * @method string getFields()
 * @method $this withFields($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 */
class UpdateDcdnUserRealTimeDeliveryField extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCodeDescription()
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getVerifyType()
 * @method $this withVerifyType($value)
 */
class VerifyDcdnDomainOwner extends Rpc
{
}
