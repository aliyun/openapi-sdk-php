<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCdnDomain addCdnDomain(array $options = [])
 * @method AddFCTrigger addFCTrigger(array $options = [])
 * @method BatchAddCdnDomain batchAddCdnDomain(array $options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig(array $options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig(array $options = [])
 * @method BatchSetCdnDomainServerCertificate batchSetCdnDomainServerCertificate(array $options = [])
 * @method BatchStartCdnDomain batchStartCdnDomain(array $options = [])
 * @method BatchStopCdnDomain batchStopCdnDomain(array $options = [])
 * @method BatchUpdateCdnDomain batchUpdateCdnDomain(array $options = [])
 * @method CreateCdnCertificateSigningRequest createCdnCertificateSigningRequest(array $options = [])
 * @method CreateCdnDeliverTask createCdnDeliverTask(array $options = [])
 * @method CreateCdnSubTask createCdnSubTask(array $options = [])
 * @method CreateRealTimeLogDelivery createRealTimeLogDelivery(array $options = [])
 * @method CreateUsageDetailDataExportTask createUsageDetailDataExportTask(array $options = [])
 * @method CreateUserUsageDataExportTask createUserUsageDataExportTask(array $options = [])
 * @method DeleteCdnDeliverTask deleteCdnDeliverTask(array $options = [])
 * @method DeleteCdnDomain deleteCdnDomain(array $options = [])
 * @method DeleteCdnSubTask deleteCdnSubTask(array $options = [])
 * @method DeleteFCTrigger deleteFCTrigger(array $options = [])
 * @method DeleteRealtimeLogDelivery deleteRealtimeLogDelivery(array $options = [])
 * @method DeleteRealTimeLogLogstore deleteRealTimeLogLogstore(array $options = [])
 * @method DeleteSpecificConfig deleteSpecificConfig(array $options = [])
 * @method DeleteSpecificStagingConfig deleteSpecificStagingConfig(array $options = [])
 * @method DeleteUsageDetailDataExportTask deleteUsageDetailDataExportTask(array $options = [])
 * @method DeleteUserUsageDataExportTask deleteUserUsageDataExportTask(array $options = [])
 * @method DescribeBlockedRegions describeBlockedRegions(array $options = [])
 * @method DescribeCdnCertificateDetail describeCdnCertificateDetail(array $options = [])
 * @method DescribeCdnCertificateList describeCdnCertificateList(array $options = [])
 * @method DescribeCdnDeletedDomains describeCdnDeletedDomains(array $options = [])
 * @method DescribeCdnDeliverList describeCdnDeliverList(array $options = [])
 * @method DescribeCdnDomainByCertificate describeCdnDomainByCertificate(array $options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs(array $options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail(array $options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs(array $options = [])
 * @method DescribeCdnDomainStagingConfig describeCdnDomainStagingConfig(array $options = [])
 * @method DescribeCdnHttpsDomainList describeCdnHttpsDomainList(array $options = [])
 * @method DescribeCdnOrderCommodityCode describeCdnOrderCommodityCode(array $options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp(array $options = [])
 * @method DescribeCdnReport describeCdnReport(array $options = [])
 * @method DescribeCdnReportList describeCdnReportList(array $options = [])
 * @method DescribeCdnService describeCdnService(array $options = [])
 * @method DescribeCdnSMCertificateDetail describeCdnSMCertificateDetail(array $options = [])
 * @method DescribeCdnSMCertificateList describeCdnSMCertificateList(array $options = [])
 * @method DescribeCdnSubList describeCdnSubList(array $options = [])
 * @method DescribeCdnUserBillHistory describeCdnUserBillHistory(array $options = [])
 * @method DescribeCdnUserBillPrediction describeCdnUserBillPrediction(array $options = [])
 * @method DescribeCdnUserBillType describeCdnUserBillType(array $options = [])
 * @method DescribeCdnUserConfigs describeCdnUserConfigs(array $options = [])
 * @method DescribeCdnUserDomainsByFunc describeCdnUserDomainsByFunc(array $options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota(array $options = [])
 * @method DescribeCdnUserResourcePackage describeCdnUserResourcePackage(array $options = [])
 * @method DescribeCdnWafDomain describeCdnWafDomain(array $options = [])
 * @method DescribeCertificateInfoByID describeCertificateInfoByID(array $options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig(array $options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime(array $options = [])
 * @method DescribeDomainBpsData describeDomainBpsData(array $options = [])
 * @method DescribeDomainBpsDataByLayer describeDomainBpsDataByLayer(array $options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp(array $options = [])
 * @method DescribeDomainCcActivityLog describeDomainCcActivityLog(array $options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo(array $options = [])
 * @method DescribeDomainCname describeDomainCname(array $options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig(array $options = [])
 * @method DescribeDomainDetailDataByLayer describeDomainDetailDataByLayer(array $options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData(array $options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData(array $options = [])
 * @method DescribeDomainHttpCodeDataByLayer describeDomainHttpCodeDataByLayer(array $options = [])
 * @method DescribeDomainISPData describeDomainISPData(array $options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData(array $options = [])
 * @method DescribeDomainMultiUsageData describeDomainMultiUsageData(array $options = [])
 * @method DescribeDomainPathData describeDomainPathData(array $options = [])
 * @method DescribeDomainPvData describeDomainPvData(array $options = [])
 * @method DescribeDomainQpsData describeDomainQpsData(array $options = [])
 * @method DescribeDomainQpsDataByLayer describeDomainQpsDataByLayer(array $options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData(array $options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData(array $options = [])
 * @method DescribeDomainRealTimeDetailData describeDomainRealTimeDetailData(array $options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeDomainRealtimeLogDelivery describeDomainRealtimeLogDelivery(array $options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData(array $options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData(array $options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData(array $options = [])
 * @method DescribeDomainRealTimeSrcHttpCodeData describeDomainRealTimeSrcHttpCodeData(array $options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData(array $options = [])
 * @method DescribeDomainRealTimeTrafficData describeDomainRealTimeTrafficData(array $options = [])
 * @method DescribeDomainRegionData describeDomainRegionData(array $options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData(array $options = [])
 * @method DescribeDomainsBySource describeDomainsBySource(array $options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData(array $options = [])
 * @method DescribeDomainSrcHttpCodeData describeDomainSrcHttpCodeData(array $options = [])
 * @method DescribeDomainSrcQpsData describeDomainSrcQpsData(array $options = [])
 * @method DescribeDomainSrcTopUrlVisit describeDomainSrcTopUrlVisit(array $options = [])
 * @method DescribeDomainSrcTrafficData describeDomainSrcTrafficData(array $options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay(array $options = [])
 * @method DescribeDomainTopClientIpVisit describeDomainTopClientIpVisit(array $options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit(array $options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit(array $options = [])
 * @method DescribeDomainTrafficData describeDomainTrafficData(array $options = [])
 * @method DescribeDomainUsageData describeDomainUsageData(array $options = [])
 * @method DescribeDomainUvData describeDomainUvData(array $options = [])
 * @method DescribeEsExceptionData describeEsExceptionData(array $options = [])
 * @method DescribeEsExecuteData describeEsExecuteData(array $options = [])
 * @method DescribeFCTrigger describeFCTrigger(array $options = [])
 * @method DescribeIpInfo describeIpInfo(array $options = [])
 * @method DescribeIpStatus describeIpStatus(array $options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain(array $options = [])
 * @method DescribePreloadDetailById describePreloadDetailById(array $options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService(array $options = [])
 * @method DescribeRealtimeDeliveryAcc describeRealtimeDeliveryAcc(array $options = [])
 * @method DescribeRefreshQuota describeRefreshQuota(array $options = [])
 * @method DescribeRefreshTaskById describeRefreshTaskById(array $options = [])
 * @method DescribeRefreshTasks describeRefreshTasks(array $options = [])
 * @method DescribeStagingIp describeStagingIp(array $options = [])
 * @method DescribeTagResources describeTagResources(array $options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow(array $options = [])
 * @method DescribeUserCertificateExpireCount describeUserCertificateExpireCount(array $options = [])
 * @method DescribeUserConfigs describeUserConfigs(array $options = [])
 * @method DescribeUserDomains describeUserDomains(array $options = [])
 * @method DescribeUserTags describeUserTags(array $options = [])
 * @method DescribeUserUsageDataExportTask describeUserUsageDataExportTask(array $options = [])
 * @method DescribeUserUsageDetailDataExportTask describeUserUsageDetailDataExportTask(array $options = [])
 * @method DescribeUserVipsByDomain describeUserVipsByDomain(array $options = [])
 * @method DescribeVerifyContent describeVerifyContent(array $options = [])
 * @method DisableRealtimeLogDelivery disableRealtimeLogDelivery(array $options = [])
 * @method EnableRealtimeLogDelivery enableRealtimeLogDelivery(array $options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId(array $options = [])
 * @method ListFCTrigger listFCTrigger(array $options = [])
 * @method ListRealtimeLogDeliveryDomains listRealtimeLogDeliveryDomains(array $options = [])
 * @method ListRealtimeLogDeliveryInfos listRealtimeLogDeliveryInfos(array $options = [])
 * @method ListUserCustomLogConfig listUserCustomLogConfig(array $options = [])
 * @method ModifyCdnDomain modifyCdnDomain(array $options = [])
 * @method ModifyCdnDomainSchdmByProperty modifyCdnDomainSchdmByProperty(array $options = [])
 * @method ModifyRealtimeLogDelivery modifyRealtimeLogDelivery(array $options = [])
 * @method OpenCdnService openCdnService(array $options = [])
 * @method PublishStagingConfigToProduction publishStagingConfigToProduction(array $options = [])
 * @method PushObjectCache pushObjectCache(array $options = [])
 * @method RefreshObjectCaches refreshObjectCaches(array $options = [])
 * @method RollbackStagingConfig rollbackStagingConfig(array $options = [])
 * @method SetCdnDomainCSRCertificate setCdnDomainCSRCertificate(array $options = [])
 * @method SetCdnDomainSMCertificate setCdnDomainSMCertificate(array $options = [])
 * @method SetCdnDomainSSLCertificate setCdnDomainSSLCertificate(array $options = [])
 * @method SetCdnDomainStagingConfig setCdnDomainStagingConfig(array $options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate(array $options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig(array $options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig(array $options = [])
 * @method StartCdnDomain startCdnDomain(array $options = [])
 * @method StopCdnDomain stopCdnDomain(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateCdnDeliverTask updateCdnDeliverTask(array $options = [])
 * @method UpdateCdnSubTask updateCdnSubTask(array $options = [])
 * @method UpdateFCTrigger updateFCTrigger(array $options = [])
 * @method VerifyDomainOwner verifyDomainOwner(array $options = [])
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
}

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
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
class AddCdnDomain extends Rpc
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
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getNotes()
 * @method string getSourceARN()
 * @method string getRoleARN()
 * @method string getEventMetaVersion()
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
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCdnType()
 * @method $this withCdnType($value)
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
class BatchAddCdnDomain extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchSetCdnDomainConfig extends Rpc
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
class BatchSetCdnDomainServerCertificate extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStartCdnDomain extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class BatchStopCdnDomain extends Rpc
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
class BatchUpdateCdnDomain extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getSANs()
 * @method $this withSANs($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateCdnCertificateSigningRequest extends Rpc
{
}

/**
 * @method string getReports()
 * @method string getSchedule()
 * @method string getName()
 * @method string getDomainName()
 * @method string getDeliver()
 */
class CreateCdnDeliverTask extends Rpc
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
 * @method string getReportIds()
 * @method string getDomainName()
 */
class CreateCdnSubTask extends Rpc
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
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class CreateRealTimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
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
 */
class CreateUsageDetailDataExportTask extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class CreateUserUsageDataExportTask extends Rpc
{
}

/**
 * @method string getDeliverId()
 * @method $this withDeliverId($value)
 */
class DeleteCdnDeliverTask extends Rpc
{
}

/**
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

class DeleteCdnSubTask extends Rpc
{
}

/**
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 */
class DeleteFCTrigger extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class DeleteRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class DeleteRealTimeLogLogstore extends Rpc
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
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteSpecificConfig extends Rpc
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
class DeleteSpecificStagingConfig extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteUsageDetailDataExportTask extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteUserUsageDataExportTask extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeBlockedRegions extends Rpc
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
class DescribeCdnCertificateDetail extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCdnDeletedDomains extends Rpc
{
}

/**
 * @method string getDeliverId()
 * @method $this withDeliverId($value)
 */
class DescribeCdnDeliverList extends Rpc
{
}

/**
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getSSLStatus()
 * @method $this withSSLStatus($value)
 */
class DescribeCdnDomainByCertificate extends Rpc
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
 * @method string getConfigId()
 * @method $this withConfigId($value)
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
class DescribeCdnDomainLogs extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeCdnDomainStagingConfig extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCdnHttpsDomainList extends Rpc
{
}

/**
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeCdnOrderCommodityCode extends Rpc
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
class DescribeCdnReport extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class DescribeCdnReportList extends Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertIdentifier()
 * @method $this withCertIdentifier($value)
 */
class DescribeCdnSMCertificateDetail extends Rpc
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
class DescribeCdnSMCertificateList extends Rpc
{
}

class DescribeCdnSubList extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeCdnUserBillHistory extends Rpc
{
}

/**
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDimension()
 * @method $this withDimension($value)
 */
class DescribeCdnUserBillPrediction extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeCdnUserBillType extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 */
class DescribeCdnUserConfigs extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuncId()
 * @method $this withFuncId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCdnUserDomainsByFunc extends Rpc
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
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCdnUserResourcePackage extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeCdnWafDomain extends Rpc
{
}

/**
 * @method string getCertId()
 * @method $this withCertId($value)
 */
class DescribeCertificateInfoByID extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DescribeCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainType()
 * @method $this withDomainType($value)
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
class DescribeDomainAverageResponseTime extends Rpc
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
class DescribeDomainBpsData extends Rpc
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
class DescribeDomainBpsDataByLayer extends Rpc
{
}

/**
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeDomainBpsDataByTimeStamp extends Rpc
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
class DescribeDomainCcActivityLog extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDomainCname extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeDomainCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getField()
 * @method $this withField($value)
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
 * @method string getLayer()
 * @method $this withLayer($value)
 */
class DescribeDomainDetailDataByLayer extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class DescribeDomainHitRateData extends Rpc
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
class DescribeDomainHttpCodeData extends Rpc
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
class DescribeDomainHttpCodeDataByLayer extends Rpc
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
class DescribeDomainISPData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCycle()
 * @method $this withCycle($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeDomainMax95BpsData extends Rpc
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
class DescribeDomainMultiUsageData extends Rpc
{
}

/**
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 */
class DescribeDomainPvData extends Rpc
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
class DescribeDomainQpsData extends Rpc
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
class DescribeDomainQpsDataByLayer extends Rpc
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
class DescribeDomainRealTimeBpsData extends Rpc
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
class DescribeDomainRealTimeByteHitRateData extends Rpc
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
class DescribeDomainRealTimeDetailData extends Rpc
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
class DescribeDomainRealTimeHttpCodeData extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeDomainRealtimeLogDelivery extends Rpc
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
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDomainRealTimeQpsData extends Rpc
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
class DescribeDomainRealTimeReqHitRateData extends Rpc
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
class DescribeDomainRealTimeSrcBpsData extends Rpc
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
class DescribeDomainRealTimeSrcHttpCodeData extends Rpc
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
class DescribeDomainRealTimeSrcTrafficData extends Rpc
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
class DescribeDomainRealTimeTrafficData extends Rpc
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
class DescribeDomainRegionData extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDomainSrcBpsData extends Rpc
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
class DescribeDomainSrcHttpCodeData extends Rpc
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
class DescribeDomainSrcQpsData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDomainSrcTopUrlVisit extends Rpc
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
class DescribeDomainSrcTrafficData extends Rpc
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
class DescribeDomainsUsageByDay extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDomainTopClientIpVisit extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDomainTopReferVisit extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeDomainTopUrlVisit extends Rpc
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
class DescribeDomainTrafficData extends Rpc
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
class DescribeDomainUsageData extends Rpc
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
class DescribeDomainUvData extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeEsExceptionData extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeEsExecuteData extends Rpc
{
}

/**
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 */
class DescribeFCTrigger extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getIP()
 * @method $this withIP($value)
 */
class DescribeIpInfo extends Rpc
{
}

/**
 * @method string getIps()
 * @method $this withIps($value)
 */
class DescribeIpStatus extends Rpc
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
class DescribeL2VipsByDomain extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribePreloadDetailById extends Rpc
{
}

/**
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeRangeDataByLocateAndIspService extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class DescribeRealtimeDeliveryAcc extends Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeRefreshTaskById extends Rpc
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

class DescribeStagingIp extends Rpc
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
class DescribeTagResources extends Rpc
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
class DescribeTopDomainsByFlow extends Rpc
{
}

class DescribeUserCertificateExpireCount extends Rpc
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
 * @method string getSource()
 * @method $this withSource($value)
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

class DescribeUserTags extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeUserUsageDataExportTask extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeUserUsageDetailDataExportTask extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAvailable()
 * @method $this withAvailable($value)
 */
class DescribeUserVipsByDomain extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DescribeVerifyContent extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DisableRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class EnableRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class ListDomainsByLogConfigId extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEventMetaVersion()
 * @method $this withEventMetaVersion($value)
 * @method string getEventMetaName()
 * @method $this withEventMetaName($value)
 */
class ListFCTrigger extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class ListRealtimeLogDeliveryDomains extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class ListRealtimeLogDeliveryInfos extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class ListUserCustomLogConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class ModifyCdnDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getProperty()
 * @method $this withProperty($value)
 */
class ModifyCdnDomainSchdmByProperty extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class ModifyRealtimeLogDelivery extends Rpc
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
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class PublishStagingConfigToProduction extends Rpc
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
class PushObjectCache extends Rpc
{
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
class RefreshObjectCaches extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class RollbackStagingConfig extends Rpc
{
}

/**
 * @method string getServerCertificate()
 * @method $this withServerCertificate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class SetCdnDomainCSRCertificate extends Rpc
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
class SetCdnDomainSMCertificate extends Rpc
{
}

/**
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getCertId()
 * @method $this withCertId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 * @method string getCertRegion()
 * @method $this withCertRegion($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 */
class SetCdnDomainSSLCertificate extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class SetCdnDomainStagingConfig extends Rpc
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
 */
class SetDomainServerCertificate extends Rpc
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
 * @method string getMaxTimeWait()
 * @method $this withMaxTimeWait($value)
 * @method string getWaitUrl()
 * @method $this withWaitUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAllowPct()
 * @method $this withAllowPct($value)
 * @method string getGapTime()
 * @method $this withGapTime($value)
 * @method string getWaitUri()
 * @method $this withWaitUri($value)
 */
class SetWaitingRoomConfig extends Rpc
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
class StartCdnDomain extends Rpc
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
 * @method array getResourceId()
 * @method array getTag()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
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
 * @method string getReports()
 * @method string getSchedule()
 * @method string getName()
 * @method string getDomainName()
 * @method string getDeliver()
 * @method string getDeliverId()
 */
class UpdateCdnDeliverTask extends Rpc
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
 * @method string getReportIds()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class UpdateCdnSubTask extends Rpc
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
 * @method string getTriggerARN()
 * @method $this withTriggerARN($value)
 * @method string getNotes()
 * @method string getSourceARN()
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
 * @method string getGlobalResourcePlan()
 * @method $this withGlobalResourcePlan($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getVerifyType()
 * @method $this withVerifyType($value)
 */
class VerifyDomainOwner extends Rpc
{
}
