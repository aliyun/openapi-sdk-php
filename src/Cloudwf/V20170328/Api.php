<?php

namespace AlibabaCloud\Cloudwf\V20170328;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetDailyStatistic getDailyStatistic(array $options = [])
 * @method GetStaTop getStaTop(array $options = [])
 * @method GetApTop getApTop(array $options = [])
 * @method GetApStaMiscAgg getApStaMiscAgg(array $options = [])
 * @method GetScanProbeTimeSer getScanProbeTimeSer(array $options = [])
 * @method WorkbyAction workbyAction(array $options = [])
 * @method CreateRenewOrder createRenewOrder(array $options = [])
 * @method QueryRenewPrice queryRenewPrice(array $options = [])
 * @method ConfigAutoRenew configAutoRenew(array $options = [])
 * @method GetPageProperties getPageProperties(array $options = [])
 * @method GetBatchCreateApAssetProgress getBatchCreateApAssetProgress(array $options = [])
 * @method BatchCreateApAsset batchCreateApAsset(array $options = [])
 * @method CreateApAsset createApAsset(array $options = [])
 * @method CreateProbeDataSubscriber createProbeDataSubscriber(array $options = [])
 * @method GetAllActiveShopByGroup getAllActiveShopByGroup(array $options = [])
 * @method ListOnsTopic listOnsTopic(array $options = [])
 * @method ListOnsEmpowered listOnsEmpowered(array $options = [])
 * @method CheckRoleAuthorized checkRoleAuthorized(array $options = [])
 * @method CreateOnsEmpower createOnsEmpower(array $options = [])
 * @method ListBusinessDetails listBusinessDetails(array $options = [])
 * @method ModifySubAccountPermission modifySubAccountPermission(array $options = [])
 * @method ListBusinesses listBusinesses(array $options = [])
 * @method ListSubAccountPermission listSubAccountPermission(array $options = [])
 * @method GetSubAccountPermission getSubAccountPermission(array $options = [])
 * @method GetSidsAndGids4Bid getSidsAndGids4Bid(array $options = [])
 * @method GetBids4Uid4Root getBids4Uid4Root(array $options = [])
 * @method DelSubAccountPermission delSubAccountPermission(array $options = [])
 * @method CreateSubAccountPermission createSubAccountPermission(array $options = [])
 * @method GetApPortalBind getApPortalBind(array $options = [])
 * @method SaveScanConfig saveScanConfig(array $options = [])
 * @method OemHeatSetting oemHeatSetting(array $options = [])
 * @method OemHeatLine oemHeatLine(array $options = [])
 * @method OemHeatMap oemHeatMap(array $options = [])
 * @method ListScanConfig listScanConfig(array $options = [])
 * @method SavePageConfigTemplate savePageConfigTemplate(array $options = [])
 * @method SaveUmengPagePermission4Root saveUmengPagePermission4Root(array $options = [])
 * @method GetUmengPagePermission4Root getUmengPagePermission4Root(array $options = [])
 * @method GetUserUmengPagePermission getUserUmengPagePermission(array $options = [])
 * @method ListPageConfigTemplate listPageConfigTemplate(array $options = [])
 * @method ListUmengPagePermission4Root listUmengPagePermission4Root(array $options = [])
 * @method DelPageConfigTemplate delPageConfigTemplate(array $options = [])
 * @method DelUmengPagePermission4Root delUmengPagePermission4Root(array $options = [])
 * @method GetPageConfigTemplate getPageConfigTemplate(array $options = [])
 * @method SendCommandByMac sendCommandByMac(array $options = [])
 * @method SetUpgradeImgByModel setUpgradeImgByModel(array $options = [])
 * @method UpgradeAP upgradeAP(array $options = [])
 * @method UpgradeAPGroup upgradeAPGroup(array $options = [])
 * @method OemSitingContrast oemSitingContrast(array $options = [])
 * @method OemSitingSelction oemSitingSelction(array $options = [])
 * @method OemMarketingSettingData oemMarketingSettingData(array $options = [])
 * @method OemMarketingCustomer oemMarketingCustomer(array $options = [])
 * @method OemMarketingPotential oemMarketingPotential(array $options = [])
 * @method OemFlowrateMonitor oemFlowrateMonitor(array $options = [])
 * @method OemFlowrateOverview oemFlowrateOverview(array $options = [])
 * @method OemFlowrateRanking oemFlowrateRanking(array $options = [])
 * @method ListUpgradeImg listUpgradeImg(array $options = [])
 * @method OemFlowrateAnalyse oemFlowrateAnalyse(array $options = [])
 * @method OemFlowrateIntelligent oemFlowrateIntelligent(array $options = [])
 * @method GetUpgradeAPProgress getUpgradeAPProgress(array $options = [])
 * @method GetUpgradeImg getUpgradeImg(array $options = [])
 * @method ListApUpgrade listApUpgrade(array $options = [])
 * @method GetDeviceInfoByMac getDeviceInfoByMac(array $options = [])
 * @method GetSendCommandByMacProgress getSendCommandByMacProgress(array $options = [])
 * @method GetUpgradeAPGroupProgress getUpgradeAPGroupProgress(array $options = [])
 * @method CheckRootPermission checkRootPermission(array $options = [])
 * @method GetAllApModel getAllApModel(array $options = [])
 * @method ListProbeinfo listProbeinfo(array $options = [])
 * @method GetInstanceByShop getInstanceByShop(array $options = [])
 * @method ResumeInstance resumeInstance(array $options = [])
 * @method CeaseInstance ceaseInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method ProduceInstance produceInstance(array $options = [])
 * @method DelPortalTemp delPortalTemp(array $options = [])
 * @method GetPortalTempDetail getPortalTempDetail(array $options = [])
 * @method ListPortalTemplate listPortalTemplate(array $options = [])
 * @method SavePortalTemplate savePortalTemplate(array $options = [])
 * @method ReportZoneDay reportZoneDay(array $options = [])
 * @method ReportZoneHour reportZoneHour(array $options = [])
 * @method ReportZoneMinute reportZoneMinute(array $options = [])
 * @method ReportZoneRealtime reportZoneRealtime(array $options = [])
 * @method ReportDay reportDay(array $options = [])
 * @method ReportHour reportHour(array $options = [])
 * @method ReportMinute reportMinute(array $options = [])
 * @method ReportRealtime reportRealtime(array $options = [])
 * @method ResetApConfig resetApConfig(array $options = [])
 * @method SetScanMode setScanMode(array $options = [])
 * @method GetProbeDataSubscriberConfig getProbeDataSubscriberConfig(array $options = [])
 * @method GetScanMode getScanMode(array $options = [])
 * @method SaveProbeDataSubscriber saveProbeDataSubscriber(array $options = [])
 * @method GetSubAccountStatus getSubAccountStatus(array $options = [])
 * @method UserDataDelete userDataDelete(array $options = [])
 * @method UserDataShowList userDataShowList(array $options = [])
 * @method UserDataUpdate userDataUpdate(array $options = [])
 * @method ShopOverview shopOverview(array $options = [])
 * @method ShopSetfiltermac shopSetfiltermac(array $options = [])
 * @method ShopSetredress shopSetredress(array $options = [])
 * @method ShopShowList shopShowList(array $options = [])
 * @method ShopUpdate shopUpdate(array $options = [])
 * @method UpLoadMap upLoadMap(array $options = [])
 * @method UserAnalyse userAnalyse(array $options = [])
 * @method UserDataCreate userDataCreate(array $options = [])
 * @method ShopGroupCreate shopGroupCreate(array $options = [])
 * @method ShopGroupDelete shopGroupDelete(array $options = [])
 * @method ShopGroupInfo shopGroupInfo(array $options = [])
 * @method ShopGroupShowList shopGroupShowList(array $options = [])
 * @method ShopGroupUpdate shopGroupUpdate(array $options = [])
 * @method ShopInfo shopInfo(array $options = [])
 * @method ShopMarketingList shopMarketingList(array $options = [])
 * @method ShopCreate shopCreate(array $options = [])
 * @method ShopCreatemarketing shopCreatemarketing(array $options = [])
 * @method ShopDataAlarm shopDataAlarm(array $options = [])
 * @method ShopDelete shopDelete(array $options = [])
 * @method ShopDeletemarketing shopDeletemarketing(array $options = [])
 * @method ShopGetfiltermac shopGetfiltermac(array $options = [])
 * @method ShopGetredress shopGetredress(array $options = [])
 * @method SaveApRadioSsidConfig saveApRadioSsidConfig(array $options = [])
 * @method SaveApScanConfig saveApScanConfig(array $options = [])
 * @method SaveGroupApRadioConfig saveGroupApRadioConfig(array $options = [])
 * @method SavePortalConfig savePortalConfig(array $options = [])
 * @method SaveStaStatus saveStaStatus(array $options = [])
 * @method ShopActionReturning shopActionReturning(array $options = [])
 * @method ShopActionCustome shopActionCustome(array $options = [])
 * @method ShopCamera shopCamera(array $options = [])
 * @method SaveApConfig saveApConfig(array $options = [])
 * @method SaveApgroupConfig saveApgroupConfig(array $options = [])
 * @method SaveApgroupScanConfig saveApgroupScanConfig(array $options = [])
 * @method SaveApgroupSsidConfig saveApgroupSsidConfig(array $options = [])
 * @method SaveApMapInfo saveApMapInfo(array $options = [])
 * @method SaveApPortalConfig saveApPortalConfig(array $options = [])
 * @method SaveApRadioConfig saveApRadioConfig(array $options = [])
 * @method ProfileTag profileTag(array $options = [])
 * @method ProfileTrade profileTrade(array $options = [])
 * @method PutOssFile putOssFile(array $options = [])
 * @method RepairAp repairAp(array $options = [])
 * @method RepairGroupAp repairGroupAp(array $options = [])
 * @method ResetAp resetAp(array $options = [])
 * @method SaveAccountConfig saveAccountConfig(array $options = [])
 * @method OnoffGroupApRadio onoffGroupApRadio(array $options = [])
 * @method PeripheryAnalyse peripheryAnalyse(array $options = [])
 * @method ProfileBase profileBase(array $options = [])
 * @method ProfileConsume profileConsume(array $options = [])
 * @method ProfileDistrict profileDistrict(array $options = [])
 * @method ProfileHistory profileHistory(array $options = [])
 * @method ProfileHistoryList profileHistoryList(array $options = [])
 * @method ProfileMedia profileMedia(array $options = [])
 * @method ListApStatus listApStatus(array $options = [])
 * @method ListBriefApConfig listBriefApConfig(array $options = [])
 * @method ListBriefConfigByAction listBriefConfigByAction(array $options = [])
 * @method ListConfigByAction listConfigByAction(array $options = [])
 * @method ListGroupApBriefConfig listGroupApBriefConfig(array $options = [])
 * @method ListStaOnoffLog listStaOnoffLog(array $options = [])
 * @method ListStaStatus listStaStatus(array $options = [])
 * @method ListApDetailInfo listApDetailInfo(array $options = [])
 * @method ListApgroupConfig listApgroupConfig(array $options = [])
 * @method ListApPosition listApPosition(array $options = [])
 * @method ListApPositionMap listApPositionMap(array $options = [])
 * @method ListApPositionStatus listApPositionStatus(array $options = [])
 * @method ListApRadioStatus listApRadioStatus(array $options = [])
 * @method ListApStaStatus listApStaStatus(array $options = [])
 * @method KickAndClearPMKcache kickAndClearPMKcache(array $options = [])
 * @method KickSta kickSta(array $options = [])
 * @method ListAccountConfig listAccountConfig(array $options = [])
 * @method ListApAsset listApAsset(array $options = [])
 * @method ListApAssetCanBeAdded listApAssetCanBeAdded(array $options = [])
 * @method GroupOverview groupOverview(array $options = [])
 * @method GroupTrend groupTrend(array $options = [])
 * @method HeadquartersOverview headquartersOverview(array $options = [])
 * @method HeadquartersRanking headquartersRanking(array $options = [])
 * @method HeadquartersToolsCoincide headquartersToolsCoincide(array $options = [])
 * @method HeadquartersToolsContrast headquartersToolsContrast(array $options = [])
 * @method HeadquartersToolsO2O headquartersToolsO2O(array $options = [])
 * @method HeadquartersTrend headquartersTrend(array $options = [])
 * @method GetOnlineStaTimeSer getOnlineStaTimeSer(array $options = [])
 * @method GetOssServerSign getOssServerSign(array $options = [])
 * @method GetRadioRunHistoryTimeSer getRadioRunHistoryTimeSer(array $options = [])
 * @method GetStaDetailedStatus getStaDetailedStatus(array $options = [])
 * @method GetStaRunHistoryTimeSer getStaRunHistoryTimeSer(array $options = [])
 * @method GroupDetails groupDetails(array $options = [])
 * @method GroupIntime groupIntime(array $options = [])
 * @method GetGroupApRadioConfigProgress getGroupApRadioConfigProgress(array $options = [])
 * @method GetGroupApRadioConfigTemplate getGroupApRadioConfigTemplate(array $options = [])
 * @method GetGroupApRadioOnoffProgress getGroupApRadioOnoffProgress(array $options = [])
 * @method GetGroupApRepairProgress getGroupApRepairProgress(array $options = [])
 * @method GetLatestApStatistic getLatestApStatistic(array $options = [])
 * @method GetLatestStaStatistic getLatestStaStatistic(array $options = [])
 * @method GetMapUrl getMapUrl(array $options = [])
 * @method GetOnlineApTimeSer getOnlineApTimeSer(array $options = [])
 * @method GetApgroupSsidConfigProgress getApgroupSsidConfigProgress(array $options = [])
 * @method GetApRunHistoryTimeSer getApRunHistoryTimeSer(array $options = [])
 * @method GetBatchSaveApAssetProgress getBatchSaveApAssetProgress(array $options = [])
 * @method GetBid getBid(array $options = [])
 * @method GetBindAp4Umeng getBindAp4Umeng(array $options = [])
 * @method GetCrowdList getCrowdList(array $options = [])
 * @method GetGroupApChangeNameTemplate getGroupApChangeNameTemplate(array $options = [])
 * @method GetAddApsProgress getAddApsProgress(array $options = [])
 * @method GetApDetailedConfig getApDetailedConfig(array $options = [])
 * @method GetApDetailedStatus getApDetailedStatus(array $options = [])
 * @method GetApgroupConfigProgress getApgroupConfigProgress(array $options = [])
 * @method GetApgroupDetailedConfig getApgroupDetailedConfig(array $options = [])
 * @method GetApgroupPortalConfigProgress getApgroupPortalConfigProgress(array $options = [])
 * @method GetApgroupScanConfigSaveProgress getApgroupScanConfigSaveProgress(array $options = [])
 * @method DeviceCreate deviceCreate(array $options = [])
 * @method DeviceDelete deviceDelete(array $options = [])
 * @method DeviceShowList deviceShowList(array $options = [])
 * @method DeviceUpdate deviceUpdate(array $options = [])
 * @method ExcelToJson excelToJson(array $options = [])
 * @method FindAp findAp(array $options = [])
 * @method FrequencyAnalyse frequencyAnalyse(array $options = [])
 * @method GetAccountConfig getAccountConfig(array $options = [])
 * @method CheckUmengDataAnalysisPermission checkUmengDataAnalysisPermission(array $options = [])
 * @method DelApPosition delApPosition(array $options = [])
 * @method DeleteApgroupConfig deleteApgroupConfig(array $options = [])
 * @method DeleteApgroupSsidConfig deleteApgroupSsidConfig(array $options = [])
 * @method DeleteApRadioSsidConfig deleteApRadioSsidConfig(array $options = [])
 * @method DeletePositionMap deletePositionMap(array $options = [])
 * @method DeviceBatchCreate deviceBatchCreate(array $options = [])
 * @method AreaUpdate areaUpdate(array $options = [])
 * @method BatchChangeGroupApName batchChangeGroupApName(array $options = [])
 * @method BatchRegisterApAsset batchRegisterApAsset(array $options = [])
 * @method BatchSaveApPosition batchSaveApPosition(array $options = [])
 * @method BusinessCreate businessCreate(array $options = [])
 * @method BusinessInfo businessInfo(array $options = [])
 * @method BusinessShowList businessShowList(array $options = [])
 * @method BusinessUpdate businessUpdate(array $options = [])
 * @method AliyunRegisterApAsset aliyunRegisterApAsset(array $options = [])
 * @method ApgroupBatchAddAp apgroupBatchAddAp(array $options = [])
 * @method ApgroupBatchDeleteAp apgroupBatchDeleteAp(array $options = [])
 * @method AreaCreate areaCreate(array $options = [])
 * @method AreaDelete areaDelete(array $options = [])
 * @method AreaInfo areaInfo(array $options = [])
 * @method AreaShowList areaShowList(array $options = [])
 * @method AddApgroupConfig addApgroupConfig(array $options = [])
 * @method InnerRefund innerRefund(array $options = [])
 * @method InnerProduceCloudWF innerProduceCloudWF(array $options = [])
 * @method InnerCheckOrder innerCheckOrder(array $options = [])
 */
class CloudwfApiResolver
{
    use ApiResolverTrait;
}

class V20170328Rpc extends Rpc
{
    /** @var string */
    public $product = 'cloudwf';

    /** @var string */
    public $version = '2017-03-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudwf';
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class GetDailyStatistic extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class GetStaTop extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class GetApTop extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class GetApStaMiscAgg extends V20170328Rpc
{
}

/**
 * @method string getZoomStart()
 * @method $this withZoomStart($value)
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getZoomEnd()
 * @method $this withZoomEnd($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 */
class GetScanProbeTimeSer extends V20170328Rpc
{
}

/**
 * @method string getActionParamTwo()
 * @method $this withActionParamTwo($value)
 * @method string getWorkAction()
 * @method $this withWorkAction($value)
 * @method string getActionParamOne()
 * @method $this withActionParamOne($value)
 * @method string getWorkToken()
 * @method $this withWorkToken($value)
 */
class WorkbyAction extends V20170328Rpc
{
}

/**
 * @method string getTimeCycleNum()
 * @method $this withTimeCycleNum($value)
 * @method array getApList()
 */
class CreateRenewOrder extends V20170328Rpc
{

    /**
     * @param array $apList
     *
     * @return $this
     */
    public function withApList(array $apList)
    {
        $this->data['ApList'] = $apList;
        foreach ($apList as $i => $iValue) {
            $this->options['query']['ApList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTimeCycleNum()
 * @method $this withTimeCycleNum($value)
 * @method array getApList()
 */
class QueryRenewPrice extends V20170328Rpc
{

    /**
     * @param array $apList
     *
     * @return $this
     */
    public function withApList(array $apList)
    {
        $this->data['ApList'] = $apList;
        foreach ($apList as $i => $iValue) {
            $this->options['query']['ApList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getOffsetDays()
 * @method $this withOffsetDays($value)
 * @method string getMonths()
 * @method $this withMonths($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getApList()
 */
class ConfigAutoRenew extends V20170328Rpc
{

    /**
     * @param array $apList
     *
     * @return $this
     */
    public function withApList(array $apList)
    {
        $this->data['ApList'] = $apList;
        foreach ($apList as $i => $iValue) {
            $this->options['query']['ApList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

class GetPageProperties extends V20170328Rpc
{
}

class GetBatchCreateApAssetProgress extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class BatchCreateApAsset extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class CreateApAsset extends V20170328Rpc
{
}

/**
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class CreateProbeDataSubscriber extends V20170328Rpc
{
}

/**
 * @method array getGids()
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetAllActiveShopByGroup extends V20170328Rpc
{

    /**
     * @param array $gids
     *
     * @return $this
     */
    public function withGids(array $gids)
    {
        $this->data['Gids'] = $gids;
        foreach ($gids as $i => $iValue) {
            $this->options['query']['Gids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class ListOnsTopic extends V20170328Rpc
{
}

class ListOnsEmpowered extends V20170328Rpc
{
}

class CheckRoleAuthorized extends V20170328Rpc
{
}

/**
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class CreateOnsEmpower extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListBusinessDetails extends V20170328Rpc
{
}

/**
 * @method array getShopGroupIds()
 * @method array getShopIds()
 * @method string getPagePermission()
 * @method $this withPagePermission($value)
 * @method string getId()
 * @method $this withId($value)
 * @method array getBusinessIds()
 */
class ModifySubAccountPermission extends V20170328Rpc
{

    /**
     * @param array $shopGroupIds
     *
     * @return $this
     */
    public function withShopGroupIds(array $shopGroupIds)
    {
        $this->data['ShopGroupIds'] = $shopGroupIds;
        foreach ($shopGroupIds as $i => $iValue) {
            $this->options['query']['ShopGroupIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $shopIds
     *
     * @return $this
     */
    public function withShopIds(array $shopIds)
    {
        $this->data['ShopIds'] = $shopIds;
        foreach ($shopIds as $i => $iValue) {
            $this->options['query']['ShopIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $businessIds
     *
     * @return $this
     */
    public function withBusinessIds(array $businessIds)
    {
        $this->data['BusinessIds'] = $businessIds;
        foreach ($businessIds as $i => $iValue) {
            $this->options['query']['BusinessIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

class ListBusinesses extends V20170328Rpc
{
}

/**
 * @method string getSearchUid()
 * @method $this withSearchUid($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListSubAccountPermission extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetSubAccountPermission extends V20170328Rpc
{
}

/**
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class GetSidsAndGids4Bid extends V20170328Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class GetBids4Uid4Root extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DelSubAccountPermission extends V20170328Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method array getShopGroupIds()
 * @method array getShopIds()
 * @method string getPagePermission()
 * @method $this withPagePermission($value)
 * @method string getPermissionType()
 * @method $this withPermissionType($value)
 * @method array getBusinessIds()
 */
class CreateSubAccountPermission extends V20170328Rpc
{

    /**
     * @param array $shopGroupIds
     *
     * @return $this
     */
    public function withShopGroupIds(array $shopGroupIds)
    {
        $this->data['ShopGroupIds'] = $shopGroupIds;
        foreach ($shopGroupIds as $i => $iValue) {
            $this->options['query']['ShopGroupIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $shopIds
     *
     * @return $this
     */
    public function withShopIds(array $shopIds)
    {
        $this->data['ShopIds'] = $shopIds;
        foreach ($shopIds as $i => $iValue) {
            $this->options['query']['ShopIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $businessIds
     *
     * @return $this
     */
    public function withBusinessIds(array $businessIds)
    {
        $this->data['BusinessIds'] = $businessIds;
        foreach ($businessIds as $i => $iValue) {
            $this->options['query']['BusinessIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getBindId()
 * @method $this withBindId($value)
 */
class GetApPortalBind extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class SaveScanConfig extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class OemHeatSetting extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class OemHeatLine extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class OemHeatMap extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchBssid()
 * @method $this withSearchBssid($value)
 * @method string getSearchCompany()
 * @method $this withSearchCompany($value)
 * @method string getSearchSsid()
 * @method $this withSearchSsid($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchGroup()
 * @method $this withSearchGroup($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListScanConfig extends V20170328Rpc
{
}

/**
 * @method string getTempType()
 * @method $this withTempType($value)
 * @method string getTempDesc()
 * @method $this withTempDesc($value)
 * @method string getTempName()
 * @method $this withTempName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTempPermission()
 * @method $this withTempPermission($value)
 */
class SavePageConfigTemplate extends V20170328Rpc
{
}

/**
 * @method string getGsPermission()
 * @method $this withGsPermission($value)
 * @method string getAliyunPk()
 * @method $this withAliyunPk($value)
 * @method string getPagePermission()
 * @method $this withPagePermission($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class SaveUmengPagePermission4Root extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetUmengPagePermission4Root extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetUserUmengPagePermission extends V20170328Rpc
{
}

/**
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchTempName()
 * @method $this withSearchTempName($value)
 */
class ListPageConfigTemplate extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchEmail()
 * @method $this withSearchEmail($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListUmengPagePermission4Root extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DelPageConfigTemplate extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DelUmengPagePermission4Root extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetPageConfigTemplate extends V20170328Rpc
{
}

/**
 * @method array getMacList()
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class SendCommandByMac extends V20170328Rpc
{

    /**
     * @param array $macList
     *
     * @return $this
     */
    public function withMacList(array $macList)
    {
        $this->data['MacList'] = $macList;
        foreach ($macList as $i => $iValue) {
            $this->options['query']['MacList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getImgAddr()
 * @method $this withImgAddr($value)
 * @method string getImgVersion()
 * @method $this withImgVersion($value)
 * @method string getApModelId()
 * @method $this withApModelId($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class SetUpgradeImgByModel extends V20170328Rpc
{
}

/**
 * @method array getIds()
 */
class UpgradeAP extends V20170328Rpc
{

    /**
     * @param array $ids
     *
     * @return $this
     */
    public function withIds(array $ids)
    {
        $this->data['Ids'] = $ids;
        foreach ($ids as $i => $iValue) {
            $this->options['query']['Ids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getIds()
 */
class UpgradeAPGroup extends V20170328Rpc
{

    /**
     * @param array $ids
     *
     * @return $this
     */
    public function withIds(array $ids)
    {
        $this->data['Ids'] = $ids;
        foreach ($ids as $i => $iValue) {
            $this->options['query']['Ids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemSitingContrast extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemSitingSelction extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemMarketingSettingData extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemMarketingCustomer extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemMarketingPotential extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class OemFlowrateMonitor extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemFlowrateOverview extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class OemFlowrateRanking extends V20170328Rpc
{
}

/**
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListUpgradeImg extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class OemFlowrateAnalyse extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class OemFlowrateIntelligent extends V20170328Rpc
{
}

class GetUpgradeAPProgress extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetUpgradeImg extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getSearchApModelName()
 * @method $this withSearchApModelName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListApUpgrade extends V20170328Rpc
{
}

/**
 * @method string getMac()
 * @method $this withMac($value)
 */
class GetDeviceInfoByMac extends V20170328Rpc
{
}

class GetSendCommandByMacProgress extends V20170328Rpc
{
}

class GetUpgradeAPGroupProgress extends V20170328Rpc
{
}

class CheckRootPermission extends V20170328Rpc
{
}

class GetAllApModel extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchUserMac()
 * @method $this withSearchUserMac($value)
 * @method string getSearchSensorMac()
 * @method $this withSearchSensorMac($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchSensorName()
 * @method $this withSearchSensorName($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListProbeinfo extends V20170328Rpc
{
}

/**
 * @method string getShopId()
 * @method $this withShopId($value)
 */
class GetInstanceByShop extends V20170328Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getSpMsg()
 * @method $this withSpMsg($value)
 */
class ResumeInstance extends V20170328Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getSpMsg()
 * @method $this withSpMsg($value)
 */
class CeaseInstance extends V20170328Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getSpMsg()
 * @method $this withSpMsg($value)
 */
class ReleaseInstance extends V20170328Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getProduceParameter()
 * @method $this withProduceParameter($value)
 */
class ProduceInstance extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DelPortalTemp extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 */
class GetPortalTempDetail extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getSearchTempName()
 * @method $this withSearchTempName($value)
 */
class ListPortalTemplate extends V20170328Rpc
{
}

/**
 * @method string getTextContent()
 * @method $this withTextContent($value)
 * @method string getTempName()
 * @method $this withTempName($value)
 * @method string getTextAlign()
 * @method $this withTextAlign($value)
 * @method string getTextColor()
 * @method $this withTextColor($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getOssFileId()
 * @method $this withOssFileId($value)
 */
class SavePortalTemplate extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportZoneDay extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportZoneHour extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportZoneMinute extends V20170328Rpc
{
}

/**
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportZoneRealtime extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportDay extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportHour extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportMinute extends V20170328Rpc
{
}

/**
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ReportRealtime extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class ResetApConfig extends V20170328Rpc
{
}

/**
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method array getMacList()
 */
class SetScanMode extends V20170328Rpc
{

    /**
     * @param array $macList
     *
     * @return $this
     */
    public function withMacList(array $macList)
    {
        $this->data['MacList'] = $macList;
        foreach ($macList as $i => $iValue) {
            $this->options['query']['MacList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetProbeDataSubscriberConfig extends V20170328Rpc
{
}

/**
 * @method array getMacList()
 */
class GetScanMode extends V20170328Rpc
{

    /**
     * @param array $macList
     *
     * @return $this
     */
    public function withMacList(array $macList)
    {
        $this->data['MacList'] = $macList;
        foreach ($macList as $i => $iValue) {
            $this->options['query']['MacList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getApiUrl()
 * @method $this withApiUrl($value)
 * @method string getParamGenScript()
 * @method $this withParamGenScript($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getHttpMethod()
 * @method $this withHttpMethod($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getResourceIds()
 */
class SaveProbeDataSubscriber extends V20170328Rpc
{

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
    public function withResourceIds(array $resourceIds)
    {
        $this->data['ResourceIds'] = $resourceIds;
        foreach ($resourceIds as $i => $iValue) {
            $this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

class GetSubAccountStatus extends V20170328Rpc
{
}

/**
 * @method string getIid()
 * @method $this withIid($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class UserDataDelete extends V20170328Rpc
{
}

/**
 * @method string getIid()
 * @method $this withIid($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPer()
 * @method $this withPer($value)
 */
class UserDataShowList extends V20170328Rpc
{
}

/**
 * @method string getIid()
 * @method $this withIid($value)
 * @method string getUploadFile()
 * @method $this withUploadFile($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getType()
 * @method $this withType($value)
 */
class UserDataUpdate extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ShopOverview extends V20170328Rpc
{
}

/**
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopSetfiltermac extends V20170328Rpc
{
}

/**
 * @method string getWorkday()
 * @method $this withWorkday($value)
 * @method string getFilterclose()
 * @method $this withFilterclose($value)
 * @method string getMinstoptime()
 * @method $this withMinstoptime($value)
 * @method string getHoliday()
 * @method $this withHoliday($value)
 * @method string getHnum()
 * @method $this withHnum($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getClerk()
 * @method $this withClerk($value)
 * @method string getFilterstate()
 * @method $this withFilterstate($value)
 * @method string getWnum()
 * @method $this withWnum($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getCrowdfixed()
 * @method $this withCrowdfixed($value)
 * @method string getMaxstoptime()
 * @method $this withMaxstoptime($value)
 */
class ShopSetredress extends V20170328Rpc
{
}

/**
 * @method string getGid()
 * @method $this withGid($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDirc()
 * @method $this withDirc($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPer()
 * @method $this withPer($value)
 * @method string getShopStatus()
 * @method $this withShopStatus($value)
 */
class ShopShowList extends V20170328Rpc
{
}

/**
 * @method string getShopCoordinate()
 * @method $this withShopCoordinate($value)
 * @method string getShopProvince()
 * @method $this withShopProvince($value)
 * @method string getShopTopType()
 * @method $this withShopTopType($value)
 * @method string getShopAddress()
 * @method $this withShopAddress($value)
 * @method string getShopType()
 * @method $this withShopType($value)
 * @method string getWarnEmail()
 * @method $this withWarnEmail($value)
 * @method string getSid()
 * @method $this withSid($value)
 * @method string getShopTel()
 * @method $this withShopTel($value)
 * @method string getWarnpHone()
 * @method $this withWarnpHone($value)
 * @method string getWarn()
 * @method $this withWarn($value)
 * @method string getShopArea()
 * @method $this withShopArea($value)
 * @method string getShopRemarks()
 * @method $this withShopRemarks($value)
 * @method string getShopCity()
 * @method $this withShopCity($value)
 * @method string getShopSubtype()
 * @method $this withShopSubtype($value)
 * @method string getShopBrand()
 * @method $this withShopBrand($value)
 * @method string getShopName()
 * @method $this withShopName($value)
 * @method string getShopCloseWarn()
 * @method $this withShopCloseWarn($value)
 * @method string getShopManager()
 * @method $this withShopManager($value)
 * @method string getShopBusinessHours()
 * @method $this withShopBusinessHours($value)
 */
class ShopUpdate extends V20170328Rpc
{
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getUploadId()
 * @method $this withUploadId($value)
 * @method string getObjectName()
 * @method $this withObjectName($value)
 * @method string getChunkIndex()
 * @method $this withChunkIndex($value)
 * @method string getChunkCnt()
 * @method $this withChunkCnt($value)
 */
class UpLoadMap extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class UserAnalyse extends V20170328Rpc
{
}

/**
 * @method string getUploadFile()
 * @method $this withUploadFile($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getType()
 * @method $this withType($value)
 */
class UserDataCreate extends V20170328Rpc
{
}

/**
 * @method string getShopIds()
 * @method $this withShopIds($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class ShopGroupCreate extends V20170328Rpc
{
}

/**
 * @method string getGid()
 * @method $this withGid($value)
 */
class ShopGroupDelete extends V20170328Rpc
{
}

/**
 * @method string getGid()
 * @method $this withGid($value)
 */
class ShopGroupInfo extends V20170328Rpc
{
}

/**
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getPer()
 * @method $this withPer($value)
 */
class ShopGroupShowList extends V20170328Rpc
{
}

/**
 * @method string getGid()
 * @method $this withGid($value)
 * @method string getShopIds()
 * @method $this withShopIds($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ShopGroupUpdate extends V20170328Rpc
{
}

/**
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopInfo extends V20170328Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPer()
 * @method $this withPer($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopMarketingList extends V20170328Rpc
{
}

/**
 * @method string getShopCoordinate()
 * @method $this withShopCoordinate($value)
 * @method string getShopProvince()
 * @method $this withShopProvince($value)
 * @method string getShopTopType()
 * @method $this withShopTopType($value)
 * @method string getShopAddress()
 * @method $this withShopAddress($value)
 * @method string getShopType()
 * @method $this withShopType($value)
 * @method string getWarnEmail()
 * @method $this withWarnEmail($value)
 * @method string getShopTel()
 * @method $this withShopTel($value)
 * @method string getWarnpHone()
 * @method $this withWarnpHone($value)
 * @method string getWarn()
 * @method $this withWarn($value)
 * @method string getShopArea()
 * @method $this withShopArea($value)
 * @method string getShopRemarks()
 * @method $this withShopRemarks($value)
 * @method string getShopCity()
 * @method $this withShopCity($value)
 * @method string getShopSubtype()
 * @method $this withShopSubtype($value)
 * @method string getShopBrand()
 * @method $this withShopBrand($value)
 * @method string getShopName()
 * @method $this withShopName($value)
 * @method string getShopCloseWarn()
 * @method $this withShopCloseWarn($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getShopManager()
 * @method $this withShopManager($value)
 * @method string getShopBusinessHours()
 * @method $this withShopBusinessHours($value)
 */
class ShopCreate extends V20170328Rpc
{
}

/**
 * @method string getEtime()
 * @method $this withEtime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStime()
 * @method $this withStime($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopCreatemarketing extends V20170328Rpc
{
}

/**
 * @method string getWarnPhone()
 * @method $this withWarnPhone($value)
 * @method string getWarn()
 * @method $this withWarn($value)
 * @method string getCloseWarn()
 * @method $this withCloseWarn($value)
 * @method string getWarnEmail()
 * @method $this withWarnEmail($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopDataAlarm extends V20170328Rpc
{
}

/**
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopDelete extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopDeletemarketing extends V20170328Rpc
{
}

/**
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopGetfiltermac extends V20170328Rpc
{
}

/**
 * @method string getSid()
 * @method $this withSid($value)
 */
class ShopGetredress extends V20170328Rpc
{
}

/**
 * @method string getNasid()
 * @method $this withNasid($value)
 * @method string getAuthPort()
 * @method $this withAuthPort($value)
 * @method string getHidden()
 * @method $this withHidden($value)
 * @method string getDynamicVlan()
 * @method $this withDynamicVlan($value)
 * @method string getAuthServer()
 * @method $this withAuthServer($value)
 * @method string getSecondaryAcctServer()
 * @method $this withSecondaryAcctServer($value)
 * @method string getSsid()
 * @method $this withSsid($value)
 * @method string getCir()
 * @method $this withCir($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getSecondaryAcctSecret()
 * @method $this withSecondaryAcctSecret($value)
 * @method string getIeee80211w()
 * @method $this withIeee80211w($value)
 * @method string getNetwork()
 * @method $this withNetwork($value)
 * @method string getIsolate()
 * @method $this withIsolate($value)
 * @method string getApAssetId()
 * @method $this withApAssetId($value)
 * @method string getEncKey()
 * @method $this withEncKey($value)
 * @method string getMulticastForward()
 * @method $this withMulticastForward($value)
 * @method string getEncryption()
 * @method $this withEncryption($value)
 * @method string getWmm()
 * @method $this withWmm($value)
 * @method string getAuthCache()
 * @method $this withAuthCache($value)
 * @method string getDisabled()
 * @method $this withDisabled($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getRadioIndex()
 * @method $this withRadioIndex($value)
 * @method string getIgnoreWeakProbe()
 * @method $this withIgnoreWeakProbe($value)
 * @method string getMaxassoc()
 * @method $this withMaxassoc($value)
 * @method string getAcctServer()
 * @method $this withAcctServer($value)
 * @method string getSecondaryAuthServer()
 * @method $this withSecondaryAuthServer($value)
 * @method string getDaeClient()
 * @method $this withDaeClient($value)
 * @method string getDaeSecret()
 * @method $this withDaeSecret($value)
 * @method string getDisassocLowAck()
 * @method $this withDisassocLowAck($value)
 * @method string getSecondaryAuthPort()
 * @method $this withSecondaryAuthPort($value)
 * @method string getAcctSecret()
 * @method $this withAcctSecret($value)
 * @method string getDisassocWeakRssi()
 * @method $this withDisassocWeakRssi($value)
 * @method string getSecondaryAcctPort()
 * @method $this withSecondaryAcctPort($value)
 * @method string getDaePort()
 * @method $this withDaePort($value)
 * @method string getSsidLb()
 * @method $this withSsidLb($value)
 * @method string getAcctPort()
 * @method $this withAcctPort($value)
 * @method string getMaxInactivity()
 * @method $this withMaxInactivity($value)
 * @method string getVlanDhcp()
 * @method $this withVlanDhcp($value)
 * @method string getInstantlyEffective()
 * @method $this withInstantlyEffective($value)
 * @method string getShortPreamble()
 * @method $this withShortPreamble($value)
 * @method string getAuthSecret()
 * @method $this withAuthSecret($value)
 * @method string getSecondaryAuthSecret()
 * @method $this withSecondaryAuthSecret($value)
 * @method string getOwnip()
 * @method $this withOwnip($value)
 */
class SaveApRadioSsidConfig extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 * @method string getApConfigId()
 * @method $this withApConfigId($value)
 */
class SaveApScanConfig extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class SaveGroupApRadioConfig extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class SavePortalConfig extends V20170328Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 */
class SaveStaStatus extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ShopActionReturning extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ShopActionCustome extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ShopCamera extends V20170328Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getApAssetId()
 * @method $this withApAssetId($value)
 * @method string getLogLevel()
 * @method $this withLogLevel($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEchoInt()
 * @method $this withEchoInt($value)
 * @method string getScan()
 * @method $this withScan($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDai()
 * @method $this withDai($value)
 * @method string getLogIp()
 * @method $this withLogIp($value)
 * @method string getMac()
 * @method $this withMac($value)
 */
class SaveApConfig extends V20170328Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getLogLevel()
 * @method $this withLogLevel($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEchoInt()
 * @method $this withEchoInt($value)
 * @method string getScan()
 * @method $this withScan($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDai()
 * @method $this withDai($value)
 * @method string getLogIp()
 * @method $this withLogIp($value)
 */
class SaveApgroupConfig extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class SaveApgroupScanConfig extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class SaveApgroupSsidConfig extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class SaveApMapInfo extends V20170328Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getPortalUrl()
 * @method $this withPortalUrl($value)
 * @method string getPortalStatus()
 * @method $this withPortalStatus($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 * @method string getApConfigId()
 * @method $this withApConfigId($value)
 * @method string getAuthSecret()
 * @method $this withAuthSecret($value)
 * @method string getWebAuthUrl()
 * @method $this withWebAuthUrl($value)
 * @method string getNetwork()
 * @method $this withNetwork($value)
 */
class SaveApPortalConfig extends V20170328Rpc
{
}

/**
 * @method string getRequireMode()
 * @method $this withRequireMode($value)
 * @method string getHtmode()
 * @method $this withHtmode($value)
 * @method string getFrag()
 * @method $this withFrag($value)
 * @method string getMinrate()
 * @method $this withMinrate($value)
 * @method string getMcastRate()
 * @method $this withMcastRate($value)
 * @method string getProbereq()
 * @method $this withProbereq($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getShortgi()
 * @method $this withShortgi($value)
 * @method string getHwmode()
 * @method $this withHwmode($value)
 * @method string getUapsd()
 * @method $this withUapsd($value)
 * @method string getBeaconInt()
 * @method $this withBeaconInt($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getRts()
 * @method $this withRts($value)
 * @method string getTxpower()
 * @method $this withTxpower($value)
 * @method string getNoscan()
 * @method $this withNoscan($value)
 * @method string getBcastRate()
 * @method $this withBcastRate($value)
 * @method string getDisabled()
 * @method $this withDisabled($value)
 * @method string getInstantlyEffective()
 * @method $this withInstantlyEffective($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getRadioIndex()
 * @method $this withRadioIndex($value)
 */
class SaveApRadioConfig extends V20170328Rpc
{
}

/**
 * @method string getIdtype()
 * @method $this withIdtype($value)
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 * @method string getAreaNumber()
 * @method $this withAreaNumber($value)
 */
class ProfileTag extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ProfileTrade extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class PutOssFile extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class RepairAp extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class RepairGroupAp extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class ResetAp extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class SaveAccountConfig extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getDisabled()
 * @method $this withDisabled($value)
 */
class OnoffGroupApRadio extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class PeripheryAnalyse extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ProfileBase extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ProfileConsume extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ProfileDistrict extends V20170328Rpc
{
}

/**
 * @method string getIdtype()
 * @method $this withIdtype($value)
 * @method string getEndMonth()
 * @method $this withEndMonth($value)
 * @method string getBeginMonth()
 * @method $this withBeginMonth($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ProfileHistory extends V20170328Rpc
{
}

/**
 * @method string getIdtype()
 * @method $this withIdtype($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPer()
 * @method $this withPer($value)
 * @method string getAgsid()
 * @method $this withAgsid($value)
 */
class ProfileHistoryList extends V20170328Rpc
{
}

/**
 * @method string getBeginDate()
 * @method $this withBeginDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class ProfileMedia extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getSearchGroupName()
 * @method $this withSearchGroupName($value)
 * @method string getSearchStatus()
 * @method $this withSearchStatus($value)
 * @method string getSearchWanIp()
 * @method $this withSearchWanIp($value)
 * @method string getSearchApModelName()
 * @method $this withSearchApModelName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getSearchBssEquals()
 * @method $this withSearchBssEquals($value)
 * @method string getSearchSwVersion()
 * @method $this withSearchSwVersion($value)
 * @method string getSearchCompanyName()
 * @method $this withSearchCompanyName($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListApStatus extends V20170328Rpc
{
}

/**
 * @method string getSearchScan()
 * @method $this withSearchScan($value)
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getSearchModel()
 * @method $this withSearchModel($value)
 */
class ListBriefApConfig extends V20170328Rpc
{
}

/**
 * @method string getAncestorApgroupId()
 * @method $this withAncestorApgroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFuzzySearch()
 * @method $this withFuzzySearch($value)
 */
class ListBriefConfigByAction extends V20170328Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getActionName()
 * @method $this withActionName($value)
 */
class ListConfigByAction extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getColCnt()
 * @method $this withColCnt($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListGroupApBriefConfig extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchSsid()
 * @method $this withSearchSsid($value)
 * @method string getSearchApName()
 * @method $this withSearchApName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchUsername()
 * @method $this withSearchUsername($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListStaOnoffLog extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchGroupName()
 * @method $this withSearchGroupName($value)
 * @method string getSearchStatus()
 * @method $this withSearchStatus($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchUsername()
 * @method $this withSearchUsername($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getSearchProtocal()
 * @method $this withSearchProtocal($value)
 * @method string getSearchSsid()
 * @method $this withSearchSsid($value)
 * @method string getSearchApName()
 * @method $this withSearchApName($value)
 * @method string getSearchIp()
 * @method $this withSearchIp($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getSearchDescription()
 * @method $this withSearchDescription($value)
 */
class ListStaStatus extends V20170328Rpc
{
}

/**
 * @method string getApAssetId()
 * @method $this withApAssetId($value)
 */
class ListApDetailInfo extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getSearchCompany()
 * @method $this withSearchCompany($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListApgroupConfig extends V20170328Rpc
{
}

/**
 * @method string getMapId()
 * @method $this withMapId($value)
 */
class ListApPosition extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getTotalItem()
 * @method $this withTotalItem($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getMapType()
 * @method $this withMapType($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchApgroupName()
 * @method $this withSearchApgroupName($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListApPositionMap extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class ListApPositionStatus extends V20170328Rpc
{
}

/**
 * @method string getSearchDisabled()
 * @method $this withSearchDisabled($value)
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getSearchChannelEquals()
 * @method $this withSearchChannelEquals($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getSearchApgroupName()
 * @method $this withSearchApgroupName($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getSearchApStatus()
 * @method $this withSearchApStatus($value)
 */
class ListApRadioStatus extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchProtocal()
 * @method $this withSearchProtocal($value)
 * @method string getSearchSsid()
 * @method $this withSearchSsid($value)
 * @method string getSearchIp()
 * @method $this withSearchIp($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchUsername()
 * @method $this withSearchUsername($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListApStaStatus extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class KickAndClearPMKcache extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class KickSta extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSearchEmail()
 * @method $this withSearchEmail($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 */
class ListAccountConfig extends V20170328Rpc
{
}

/**
 * @method string getOrderCol()
 * @method $this withOrderCol($value)
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getSearchSerialNo()
 * @method $this withSearchSerialNo($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getOrderDir()
 * @method $this withOrderDir($value)
 * @method string getSearchModel()
 * @method $this withSearchModel($value)
 */
class ListApAsset extends V20170328Rpc
{
}

/**
 * @method string getSearchName()
 * @method $this withSearchName($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getSearchMac()
 * @method $this withSearchMac($value)
 * @method string getSearchModel()
 * @method $this withSearchModel($value)
 */
class ListApAssetCanBeAdded extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class GroupOverview extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class GroupTrend extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class HeadquartersOverview extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class HeadquartersRanking extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class HeadquartersToolsCoincide extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class HeadquartersToolsContrast extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class HeadquartersToolsO2O extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class HeadquartersTrend extends V20170328Rpc
{
}

/**
 * @method string getZoomStart()
 * @method $this withZoomStart($value)
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getZoomEnd()
 * @method $this withZoomEnd($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 */
class GetOnlineStaTimeSer extends V20170328Rpc
{
}

/**
 * @method string getDirType()
 * @method $this withDirType($value)
 */
class GetOssServerSign extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetRadioRunHistoryTimeSer extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetStaDetailedStatus extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetStaRunHistoryTimeSer extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class GroupDetails extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class GroupIntime extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetGroupApRadioConfigProgress extends V20170328Rpc
{
}

class GetGroupApRadioConfigTemplate extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetGroupApRadioOnoffProgress extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetGroupApRepairProgress extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class GetLatestApStatistic extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class GetLatestStaStatistic extends V20170328Rpc
{
}

/**
 * @method string getMapId()
 * @method $this withMapId($value)
 */
class GetMapUrl extends V20170328Rpc
{
}

/**
 * @method string getZoomStart()
 * @method $this withZoomStart($value)
 * @method string getCompanyId()
 * @method $this withCompanyId($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getZoomEnd()
 * @method $this withZoomEnd($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 */
class GetOnlineApTimeSer extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApgroupSsidConfigProgress extends V20170328Rpc
{
}

/**
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getEnd()
 * @method $this withEnd($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetApRunHistoryTimeSer extends V20170328Rpc
{
}

class GetBatchSaveApAssetProgress extends V20170328Rpc
{
}

/**
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class GetBid extends V20170328Rpc
{
}

class GetBindAp4Umeng extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 * @method string getClassType()
 * @method $this withClassType($value)
 * @method string getGsType()
 * @method $this withGsType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPer()
 * @method $this withPer($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class GetCrowdList extends V20170328Rpc
{
}

class GetGroupApChangeNameTemplate extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetAddApsProgress extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApDetailedConfig extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApDetailedStatus extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApgroupConfigProgress extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApgroupDetailedConfig extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApgroupPortalConfigProgress extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetApgroupScanConfigSaveProgress extends V20170328Rpc
{
}

/**
 * @method string getDeviceNum()
 * @method $this withDeviceNum($value)
 * @method string getDevicePosition()
 * @method $this withDevicePosition($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class DeviceCreate extends V20170328Rpc
{
}

/**
 * @method string getDid()
 * @method $this withDid($value)
 * @method string getMac()
 * @method $this withMac($value)
 */
class DeviceDelete extends V20170328Rpc
{
}

/**
 * @method string getDirc()
 * @method $this withDirc($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPer()
 * @method $this withPer($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class DeviceShowList extends V20170328Rpc
{
}

/**
 * @method string getDevicePosition()
 * @method $this withDevicePosition($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getDid()
 * @method $this withDid($value)
 */
class DeviceUpdate extends V20170328Rpc
{
}

/**
 * @method string getUploadData()
 * @method $this withUploadData($value)
 */
class ExcelToJson extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class FindAp extends V20170328Rpc
{
}

/**
 * @method string getGsid()
 * @method $this withGsid($value)
 */
class FrequencyAnalyse extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetAccountConfig extends V20170328Rpc
{
}

class CheckUmengDataAnalysisPermission extends V20170328Rpc
{
}

/**
 * @method string getApAssetId()
 * @method $this withApAssetId($value)
 * @method string getMapId()
 * @method $this withMapId($value)
 */
class DelApPosition extends V20170328Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteApgroupConfig extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteApgroupSsidConfig extends V20170328Rpc
{
}

/**
 * @method string getInstantlyEffective()
 * @method $this withInstantlyEffective($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteApRadioSsidConfig extends V20170328Rpc
{
}

/**
 * @method string getMapId()
 * @method $this withMapId($value)
 */
class DeletePositionMap extends V20170328Rpc
{
}

/**
 * @method string getSn()
 * @method $this withSn($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 */
class DeviceBatchCreate extends V20170328Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDids()
 * @method $this withDids($value)
 * @method string getAid()
 * @method $this withAid($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class AreaUpdate extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class BatchChangeGroupApName extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class BatchRegisterApAsset extends V20170328Rpc
{
}

/**
 * @method string getJsonData()
 * @method $this withJsonData($value)
 */
class BatchSaveApPosition extends V20170328Rpc
{
}

/**
 * @method string getBusinessCity()
 * @method $this withBusinessCity($value)
 * @method string getCombo()
 * @method $this withCombo($value)
 * @method string getWarnEmail()
 * @method $this withWarnEmail($value)
 * @method string getBusinessManager()
 * @method $this withBusinessManager($value)
 * @method string getBusinessType()
 * @method $this withBusinessType($value)
 * @method string getWarn()
 * @method $this withWarn($value)
 * @method string getBusinessName()
 * @method $this withBusinessName($value)
 * @method string getBusinessTopType()
 * @method $this withBusinessTopType($value)
 * @method string getBusinessAddress()
 * @method $this withBusinessAddress($value)
 * @method string getBusinessTel()
 * @method $this withBusinessTel($value)
 * @method string getBusinessProvince()
 * @method $this withBusinessProvince($value)
 * @method string getBusinessSubtype()
 * @method $this withBusinessSubtype($value)
 */
class BusinessCreate extends V20170328Rpc
{
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 */
class BusinessInfo extends V20170328Rpc
{
}

/**
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPer()
 * @method $this withPer($value)
 */
class BusinessShowList extends V20170328Rpc
{
}

/**
 * @method string getWarn()
 * @method $this withWarn($value)
 * @method string getBusinessCity()
 * @method $this withBusinessCity($value)
 * @method string getWarnEmail()
 * @method $this withWarnEmail($value)
 * @method string getBusinessAddress()
 * @method $this withBusinessAddress($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getBusinessManager()
 * @method $this withBusinessManager($value)
 * @method string getBusinessProvince()
 * @method $this withBusinessProvince($value)
 */
class BusinessUpdate extends V20170328Rpc
{
}

/**
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getSerialNo()
 * @method $this withSerialNo($value)
 */
class AliyunRegisterApAsset extends V20170328Rpc
{
}

/**
 * @method string getApAssetIds()
 * @method $this withApAssetIds($value)
 * @method string getApgroupId()
 * @method $this withApgroupId($value)
 */
class ApgroupBatchAddAp extends V20170328Rpc
{
}

/**
 * @method string getApAssetIds()
 * @method $this withApAssetIds($value)
 */
class ApgroupBatchDeleteAp extends V20170328Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDids()
 * @method $this withDids($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class AreaCreate extends V20170328Rpc
{
}

/**
 * @method string getAid()
 * @method $this withAid($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class AreaDelete extends V20170328Rpc
{
}

/**
 * @method string getAid()
 * @method $this withAid($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class AreaInfo extends V20170328Rpc
{
}

/**
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getPer()
 * @method $this withPer($value)
 * @method string getSid()
 * @method $this withSid($value)
 */
class AreaShowList extends V20170328Rpc
{
}

/**
 * @method string getParentApgroupId()
 * @method $this withParentApgroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class AddApgroupConfig extends V20170328Rpc
{
}

/**
 * @method string getData()
 */
class InnerRefund extends V20170328Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 */
class InnerProduceCloudWF extends V20170328Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 */
class InnerCheckOrder extends V20170328Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}
