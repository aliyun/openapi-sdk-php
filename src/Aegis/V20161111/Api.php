<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeHostStatistics describeHostStatistics(array $options = [])
 * @method DescribeScreenOssUploadInfo describeScreenOssUploadInfo(array $options = [])
 * @method DescribeScreenCityMonitorData describeScreenCityMonitorData(array $options = [])
 * @method DescribeScreenBizStatSimpleQueryResult describeScreenBizStatSimpleQueryResult(array $options = [])
 * @method DescribeScreenEmerRisk describeScreenEmerRisk(array $options = [])
 * @method DescribeScreenTopRequestAndFlow describeScreenTopRequestAndFlow(array $options = [])
 * @method DescribeScreenCloudHcRisk describeScreenCloudHcRisk(array $options = [])
 * @method DescribeScreenTitles describeScreenTitles(array $options = [])
 * @method DescribeScreenTitels describeScreenTitels(array $options = [])
 * @method DescribeOssUploadInfo describeOssUploadInfo(array $options = [])
 * @method DescribeScreenFlowRequestCount describeScreenFlowRequestCount(array $options = [])
 * @method DescribeScreenRequestTopType describeScreenRequestTopType(array $options = [])
 * @method DescribeScreenDataMap describeScreenDataMap(array $options = [])
 * @method DescribeBizStatSimpleQueryResult describeBizStatSimpleQueryResult(array $options = [])
 * @method DescribeCityMonitorData describeCityMonitorData(array $options = [])
 * @method CreateScreenSetting createScreenSetting(array $options = [])
 * @method DescribeGrayFunc describeGrayFunc(array $options = [])
 * @method AutoUpgradeToSasAdvancedVersion autoUpgradeToSasAdvancedVersion(array $options = [])
 * @method DescribeCanUpgradeSas describeCanUpgradeSas(array $options = [])
 * @method DescribeCanTrySas describeCanTrySas(array $options = [])
 * @method ModifyRefreshProcessInfo modifyRefreshProcessInfo(array $options = [])
 * @method DescribeVulRelatedProcess describeVulRelatedProcess(array $options = [])
 * @method DescribeAgentInstallStatus describeAgentInstallStatus(array $options = [])
 * @method DescribeEcsStsStatus describeEcsStsStatus(array $options = [])
 * @method OperateAgentClientInstall operateAgentClientInstall(array $options = [])
 * @method OperateAgentClient operateAgentClient(array $options = [])
 * @method DescribeStsStatus describeStsStatus(array $options = [])
 * @method ModifyWebLockOperateEvents modifyWebLockOperateEvents(array $options = [])
 * @method CanTrySas canTrySas(array $options = [])
 * @method OpenSasTrial openSasTrial(array $options = [])
 * @method DescribeSecureSuggestion describeSecureSuggestion(array $options = [])
 * @method DescribeDefenceThread describeDefenceThread(array $options = [])
 * @method DescribeWhiteListStrategyUuidCount describeWhiteListStrategyUuidCount(array $options = [])
 * @method UpdateWhiteListStrategyRelation updateWhiteListStrategyRelation(array $options = [])
 * @method DescribeWhiteListStrategyList describeWhiteListStrategyList(array $options = [])
 * @method ModifyClearLogstoreStorage modifyClearLogstoreStorage(array $options = [])
 * @method DescribeLogstoreStorage describeLogstoreStorage(array $options = [])
 * @method DescribeShareVmWebshell describeShareVmWebshell(array $options = [])
 * @method OperateTrojan operateTrojan(array $options = [])
 * @method DescribeMaliciousProcess describeMaliciousProcess(array $options = [])
 * @method DescribeCategoryCount describeCategoryCount(array $options = [])
 * @method DeleteSuspEventNode deleteSuspEventNode(array $options = [])
 * @method CreateSuspEventNote createSuspEventNote(array $options = [])
 * @method DescribeWhiteListStrategyCount describeWhiteListStrategyCount(array $options = [])
 * @method DescribeWhiteListEffectiveAssets describeWhiteListEffectiveAssets(array $options = [])
 * @method UpdateWhiteListProcessStatus updateWhiteListProcessStatus(array $options = [])
 * @method DescribeWhiteListGroupStruct describeWhiteListGroupStruct(array $options = [])
 * @method DescribeWhiteListAuthorize describeWhiteListAuthorize(array $options = [])
 * @method SaveWhiteListStrategy saveWhiteListStrategy(array $options = [])
 * @method DescribeWhiteListStrategyStatistics describeWhiteListStrategyStatistics(array $options = [])
 * @method DescribeWhiteListAsset describeWhiteListAsset(array $options = [])
 * @method UpdateWhiteListStrategyStatus updateWhiteListStrategyStatus(array $options = [])
 * @method SaveWhiteListStrategyAssets saveWhiteListStrategyAssets(array $options = [])
 * @method DescribeWhiteListProcess describeWhiteListProcess(array $options = [])
 * @method DescribeAnalysisSlsIndex describeAnalysisSlsIndex(array $options = [])
 * @method DescribeAnalysisStatistics describeAnalysisStatistics(array $options = [])
 * @method DescribeTopicList describeTopicList(array $options = [])
 * @method DescribeAnalysisCurve describeAnalysisCurve(array $options = [])
 * @method ExecuteRuleEngineActualTime executeRuleEngineActualTime(array $options = [])
 * @method DescribeAnalysisShipperStatus describeAnalysisShipperStatus(array $options = [])
 * @method DescribeSlsProject describeSlsProject(array $options = [])
 * @method CreateOrUpdateDingTalk createOrUpdateDingTalk(array $options = [])
 * @method DeleteDingTalk deleteDingTalk(array $options = [])
 * @method DescribeDingTalk describeDingTalk(array $options = [])
 * @method OperateResult operateResult(array $options = [])
 * @method DescribeResultList describeResultList(array $options = [])
 * @method DescribeJoinRuleList describeJoinRuleList(array $options = [])
 * @method DescribeAnalysisLogs describeAnalysisLogs(array $options = [])
 * @method DescribeAnalysisHistograms describeAnalysisHistograms(array $options = [])
 * @method DescribeTraceInfoNode describeTraceInfoNode(array $options = [])
 * @method DescribeTraceInfoNodeList describeTraceInfoNodeList(array $options = [])
 * @method DescribeTraceInfoDetail describeTraceInfoDetail(array $options = [])
 * @method DescribeStatistics describeStatistics(array $options = [])
 * @method DescribeVulMachineList describeVulMachineList(array $options = [])
 * @method ModifyVulLevel modifyVulLevel(array $options = [])
 * @method DescribeVulLevel describeVulLevel(array $options = [])
 * @method DescribeVulLevelStatistics describeVulLevelStatistics(array $options = [])
 * @method DescribeStrategyProcess describeStrategyProcess(array $options = [])
 * @method DescribeCheckWarningDetail describeCheckWarningDetail(array $options = [])
 * @method IgnoreHcCheckWarnings ignoreHcCheckWarnings(array $options = [])
 * @method DescribeCheckWarningSummary describeCheckWarningSummary(array $options = [])
 * @method ValidateHcWarnings validateHcWarnings(array $options = [])
 * @method DescribeWarningMachines describeWarningMachines(array $options = [])
 * @method DescribeCheckWarnings describeCheckWarnings(array $options = [])
 * @method ModifyTargetConfig modifyTargetConfig(array $options = [])
 * @method DescribeTargetConfig describeTargetConfig(array $options = [])
 * @method ModifySaveVulBatch modifySaveVulBatch(array $options = [])
 * @method DeleteVulBatch deleteVulBatch(array $options = [])
 * @method DescribeVulBatch describeVulBatch(array $options = [])
 * @method ModifyVulConfig modifyVulConfig(array $options = [])
 * @method DescribeVulNumStatistics describeVulNumStatistics(array $options = [])
 * @method DeleteJoinRule deleteJoinRule(array $options = [])
 * @method OperateVul operateVul(array $options = [])
 * @method DescribeScreenVersionConfig describeScreenVersionConfig(array $options = [])
 * @method DescribeVulExportInfo describeVulExportInfo(array $options = [])
 * @method ExportVul exportVul(array $options = [])
 * @method ModifyVulTarget modifyVulTarget(array $options = [])
 * @method DescribeTarget describeTarget(array $options = [])
 * @method ModifyAutoDelConfig modifyAutoDelConfig(array $options = [])
 * @method DeleteVulWhitelist deleteVulWhitelist(array $options = [])
 * @method DescribeListAccessKeyIdAuth describeListAccessKeyIdAuth(array $options = [])
 * @method CreateVulWhitelist createVulWhitelist(array $options = [])
 * @method DescribeVulWhitelist describeVulWhitelist(array $options = [])
 * @method DescribeAutoDelConfig describeAutoDelConfig(array $options = [])
 * @method DescribeVulConfig describeVulConfig(array $options = [])
 * @method DescribeVulTargetStatistics describeVulTargetStatistics(array $options = [])
 * @method DescribeGroupStruct describeGroupStruct(array $options = [])
 * @method DescribeGroupedVul describeGroupedVul(array $options = [])
 * @method CreateOrUpdateDataSource createOrUpdateDataSource(array $options = [])
 * @method CreateOrUpdateJoinRule createOrUpdateJoinRule(array $options = [])
 * @method SetDatasourceStatus setDatasourceStatus(array $options = [])
 * @method DescribeMetaData describeMetaData(array $options = [])
 * @method DescribeScreenOperateInfo describeScreenOperateInfo(array $options = [])
 * @method DescribeScreenHostStatistics describeScreenHostStatistics(array $options = [])
 * @method DescribeScoreThread describeScoreThread(array $options = [])
 * @method CreatScreenSetting creatScreenSetting(array $options = [])
 * @method DescribeScreenAttackAnalysisData describeScreenAttackAnalysisData(array $options = [])
 * @method DescribeScreenSummaryInfo describeScreenSummaryInfo(array $options = [])
 * @method ModifyScreenSetting modifyScreenSetting(array $options = [])
 * @method DeleteScreenSetting deleteScreenSetting(array $options = [])
 * @method DescribeScreenSetting describeScreenSetting(array $options = [])
 * @method DescribeScreenScoreThread describeScreenScoreThread(array $options = [])
 * @method DescribeScreenSettings describeScreenSettings(array $options = [])
 * @method DescribeScreenAlarmEventList describeScreenAlarmEventList(array $options = [])
 * @method DescribeScreenSecurityStatInfo describeScreenSecurityStatInfo(array $options = [])
 * @method UpdateCustomizeReportStatus updateCustomizeReportStatus(array $options = [])
 * @method DescribeCustomizeReportChartList describeCustomizeReportChartList(array $options = [])
 * @method OperationCustomizeReportChart operationCustomizeReportChart(array $options = [])
 * @method SaveCustomizeReportConfig saveCustomizeReportConfig(array $options = [])
 * @method DescribeCustomizeReportList describeCustomizeReportList(array $options = [])
 * @method DescribeCustomizeReportChartData describeCustomizeReportChartData(array $options = [])
 * @method DeleteCustomizeReport deleteCustomizeReport(array $options = [])
 * @method DescribeCustomizeReportConfigDetail describeCustomizeReportConfigDetail(array $options = [])
 * @method DescribeSuspTrendStatistics describeSuspTrendStatistics(array $options = [])
 * @method RollbackQuaraFile rollbackQuaraFile(array $options = [])
 * @method OperateSuspiciousEvent operateSuspiciousEvent(array $options = [])
 * @method DescribeQuaraFile describeQuaraFile(array $options = [])
 * @method DescribeSuspEventTypes describeSuspEventTypes(array $options = [])
 * @method DescribeAttackAnalysisData describeAttackAnalysisData(array $options = [])
 * @method DescribeAlarmEventDetail describeAlarmEventDetail(array $options = [])
 * @method DescribeSecurityStatInfo describeSecurityStatInfo(array $options = [])
 * @method DescribeSummaryInfo describeSummaryInfo(array $options = [])
 * @method DescribeHosts describeHosts(array $options = [])
 * @method DescribeOperateInfo describeOperateInfo(array $options = [])
 * @method DescribeHostTotalCount describeHostTotalCount(array $options = [])
 * @method DescribeAlarmEventList describeAlarmEventList(array $options = [])
 * @method DescribePropertyUserDetail describePropertyUserDetail(array $options = [])
 * @method DescribeWebLockEvents describeWebLockEvents(array $options = [])
 * @method ModifyWebLockRefresh modifyWebLockRefresh(array $options = [])
 * @method ModifyWebLockDeleteConfig modifyWebLockDeleteConfig(array $options = [])
 * @method ModifyWebLockStatus modifyWebLockStatus(array $options = [])
 * @method ModifyWebLockMachineList modifyWebLockMachineList(array $options = [])
 * @method ModifyWebLockCreateConfig modifyWebLockCreateConfig(array $options = [])
 * @method DescribeWebLockStatus describeWebLockStatus(array $options = [])
 * @method DescribeWebLockMachineList describeWebLockMachineList(array $options = [])
 * @method DescribeWebLockConfigList describeWebLockConfigList(array $options = [])
 * @method DescribeWebLockBindList describeWebLockBindList(array $options = [])
 * @method ModifyWebLockUpdateConfig modifyWebLockUpdateConfig(array $options = [])
 * @method CreateOrUpdateGroup createOrUpdateGroup(array $options = [])
 * @method DeleteRuleGroup deleteRuleGroup(array $options = [])
 * @method CreateOrUpdateRule createOrUpdateRule(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DescribeRuleList describeRuleList(array $options = [])
 * @method DescribeGroupList describeGroupList(array $options = [])
 * @method DescribeDataSource describeDataSource(array $options = [])
 * @method DescribeBuySummary describeBuySummary(array $options = [])
 * @method ModifyOpenLogShipper modifyOpenLogShipper(array $options = [])
 * @method ModifyLogMetaStatus modifyLogMetaStatus(array $options = [])
 * @method DescribeLogShipperStatus describeLogShipperStatus(array $options = [])
 * @method DescribeLogMeta describeLogMeta(array $options = [])
 * @method OperateSuspiciousTargetConfig operateSuspiciousTargetConfig(array $options = [])
 * @method DescribeSuspiciousUUIDConfig describeSuspiciousUUIDConfig(array $options = [])
 * @method DescribeSuspiciousOverallConfig describeSuspiciousOverallConfig(array $options = [])
 * @method OperateSuspiciousOverallConfig operateSuspiciousOverallConfig(array $options = [])
 * @method DescribeApiBuySummary describeApiBuySummary(array $options = [])
 * @method DescribeTotalStatistics describeTotalStatistics(array $options = [])
 * @method DescribeVersionConfig describeVersionConfig(array $options = [])
 * @method DescribeInstanceStatistics describeInstanceStatistics(array $options = [])
 * @method DescribeUuidStatistics describeUuidStatistics(array $options = [])
 * @method DescribeAllRegionsStatistics describeAllRegionsStatistics(array $options = [])
 * @method DescribeEventLevelCount describeEventLevelCount(array $options = [])
 * @method DescribeAssetSummary describeAssetSummary(array $options = [])
 * @method DescribeEmgUserAgreement describeEmgUserAgreement(array $options = [])
 * @method ModifyEmgVulSubmit modifyEmgVulSubmit(array $options = [])
 * @method DescribeEmgNotice describeEmgNotice(array $options = [])
 * @method DescribeEmgVulGroup describeEmgVulGroup(array $options = [])
 * @method ModifyConcernNecessity modifyConcernNecessity(array $options = [])
 * @method DescribeConcernNecessity describeConcernNecessity(array $options = [])
 * @method DescribeYesterdayStatistics describeYesterdayStatistics(array $options = [])
 * @method DeleteCondition deleteCondition(array $options = [])
 * @method CreateCondition createCondition(array $options = [])
 * @method DescribeVulnerabilitySummary describeVulnerabilitySummary(array $options = [])
 * @method ModifyAssetGroup modifyAssetGroup(array $options = [])
 * @method AutoUpgradeSas autoUpgradeSas(array $options = [])
 * @method DescribeEventCountCurve describeEventCountCurve(array $options = [])
 * @method TransformLeakage transformLeakage(array $options = [])
 * @method DescribeTopRiskyAssets describeTopRiskyAssets(array $options = [])
 * @method DeleteSearchCondition deleteSearchCondition(array $options = [])
 * @method DescribeSearchCondition describeSearchCondition(array $options = [])
 * @method DescribeFilterFields describeFilterFields(array $options = [])
 * @method DescribeHistogram describeHistogram(array $options = [])
 * @method DescribeLogInfo describeLogInfo(array $options = [])
 * @method DeleteLogQuery deleteLogQuery(array $options = [])
 * @method DownloadLog downloadLog(array $options = [])
 * @method DescribeSasLeftCondition describeSasLeftCondition(array $options = [])
 * @method CreateLogQuery createLogQuery(array $options = [])
 * @method DescribeLogItems describeLogItems(array $options = [])
 * @method DescribeLogQuery describeLogQuery(array $options = [])
 * @method DescribeAssetList describeAssetList(array $options = [])
 * @method DescribeSasAssetStatistics describeSasAssetStatistics(array $options = [])
 * @method DescribeSasAssetStatisticsColumn describeSasAssetStatisticsColumn(array $options = [])
 * @method DescribeAssetDetailByUuid describeAssetDetailByUuid(array $options = [])
 * @method ModifySasAssetStatisticsColumn modifySasAssetStatisticsColumn(array $options = [])
 * @method ModifySearchCondition modifySearchCondition(array $options = [])
 * @method OperationSuspEvents operationSuspEvents(array $options = [])
 * @method SaveSuspEventUserSetting saveSuspEventUserSetting(array $options = [])
 * @method RollbackSuspEventQuaraFile rollbackSuspEventQuaraFile(array $options = [])
 * @method DescribeSuspEventDetail describeSuspEventDetail(array $options = [])
 * @method DescribeSuspEventExportInfo describeSuspEventExportInfo(array $options = [])
 * @method DescribeSuspEventQuaraFiles describeSuspEventQuaraFiles(array $options = [])
 * @method DescribeSuspEvents describeSuspEvents(array $options = [])
 * @method DescribeSuspEventUserSetting describeSuspEventUserSetting(array $options = [])
 * @method ExportSuspEvents exportSuspEvents(array $options = [])
 * @method DescribeNsasSuspEventType describeNsasSuspEventType(array $options = [])
 * @method ExecStrategy execStrategy(array $options = [])
 * @method DescribeStrategyExecDetail describeStrategyExecDetail(array $options = [])
 * @method DescribeUuidConfig describeUuidConfig(array $options = [])
 * @method PushAllTask pushAllTask(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method DescribeSuspiciousExportInfo describeSuspiciousExportInfo(array $options = [])
 * @method CreateSuspiciousExport createSuspiciousExport(array $options = [])
 * @method ModifyBatchIgnoreVul modifyBatchIgnoreVul(array $options = [])
 * @method DescribePropertyScheduleConfig describePropertyScheduleConfig(array $options = [])
 * @method OperateWebVul operateWebVul(array $options = [])
 * @method DescribeLoginLogs describeLoginLogs(array $options = [])
 * @method DescribeWebshell describeWebshell(array $options = [])
 * @method DescribeVulDetails describeVulDetails(array $options = [])
 * @method DescribeSuspiciousEvents describeSuspiciousEvents(array $options = [])
 * @method DescribeHostWafs describeHostWafs(array $options = [])
 * @method BatchDeleteWhiteList batchDeleteWhiteList(array $options = [])
 * @method DeleteStrategy deleteStrategy(array $options = [])
 * @method CreateTypeWhiteList createTypeWhiteList(array $options = [])
 * @method CreateUserSetting createUserSetting(array $options = [])
 * @method CreateUserWhiteList createUserWhiteList(array $options = [])
 * @method DescribeExportInfo describeExportInfo(array $options = [])
 * @method DescribeMachineConfig describeMachineConfig(array $options = [])
 * @method DescribeMacConfig describeMacConfig(array $options = [])
 * @method DescribeRisks describeRisks(array $options = [])
 * @method Describesummary describesummary(array $options = [])
 * @method DescribeRiskType describeRiskType(array $options = [])
 * @method DescribeRiskWhiteList describeRiskWhiteList(array $options = [])
 * @method DescribeUserTypeWhiteList describeUserTypeWhiteList(array $options = [])
 * @method DescribeUserSetting describeUserSetting(array $options = [])
 * @method DescribeUserWhiteList describeUserWhiteList(array $options = [])
 * @method DescribeStrategyTarget describeStrategyTarget(array $options = [])
 * @method DescribeStratety describeStratety(array $options = [])
 * @method DescribeStratetyDetail describeStratetyDetail(array $options = [])
 * @method DescribeWarning describeWarning(array $options = [])
 * @method ModifyMachineConfig modifyMachineConfig(array $options = [])
 * @method ExportWarning exportWarning(array $options = [])
 * @method ModifyStrategyTarget modifyStrategyTarget(array $options = [])
 * @method OperateWarning operateWarning(array $options = [])
 * @method ModifyStrategy modifyStrategy(array $options = [])
 * @method DescribeVulList describeVulList(array $options = [])
 * @method QueryCrackEvent queryCrackEvent(array $options = [])
 * @method QueryLoginEvent queryLoginEvent(array $options = [])
 * @method GetStatisticsByUuid getStatisticsByUuid(array $options = [])
 * @method GetCrackStatistics getCrackStatistics(array $options = [])
 * @method GetEntityList getEntityList(array $options = [])
 * @method GetStatistics getStatistics(array $options = [])
 * @method GetAccountStatistics getAccountStatistics(array $options = [])
 * @method RenewInstance renewInstance(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 */
class AegisApiResolver
{
    use ApiResolverTrait;
}

class V20161111Rpc extends Rpc
{
    /** @var string */
    public $product = 'aegis';

    /** @var string */
    public $version = '2016-11-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'vipaegis';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeHostStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenOssUploadInfo extends V20161111Rpc
{
}

/**
 * @method string getScreenId()
 * @method $this withScreenId($value)
 * @method string getDateType()
 * @method $this withDateType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenCityMonitorData extends V20161111Rpc
{
}

/**
 * @method string getRangeUnit()
 * @method $this withRangeUnit($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCustomQuery()
 * @method $this withCustomQuery($value)
 * @method string getRangeValue()
 * @method $this withRangeValue($value)
 */
class DescribeScreenBizStatSimpleQueryResult extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenEmerRisk extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenTopRequestAndFlow extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenCloudHcRisk extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenTitles extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenTitels extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOssUploadInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenFlowRequestCount extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeScreenRequestTopType extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenDataMap extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCustomTimeRange()
 * @method $this withCustomTimeRange($value)
 * @method string getCustomQuery()
 * @method $this withCustomQuery($value)
 */
class DescribeBizStatSimpleQueryResult extends V20161111Rpc
{
}

/**
 * @method string getScreenId()
 * @method $this withScreenId($value)
 * @method string getDateType()
 * @method $this withDateType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCityMonitorData extends V20161111Rpc
{
}

/**
 * @method string getScreenDataMap()
 * @method $this withScreenDataMap($value)
 * @method string getScreenDefault()
 * @method $this withScreenDefault($value)
 * @method string getLogoPower()
 * @method $this withLogoPower($value)
 * @method string getMonitorUrl()
 * @method $this withMonitorUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getLogoUrl()
 * @method $this withLogoUrl($value)
 */
class CreateScreenSetting extends V20161111Rpc
{
}

/**
 * @method string getCondition()
 * @method $this withCondition($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeGrayFunc extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AutoUpgradeToSasAdvancedVersion extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCanUpgradeSas extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCanTrySas extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class ModifyRefreshProcessInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPpid()
 * @method $this withPpid($value)
 */
class DescribeVulRelatedProcess extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeAgentInstallStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEcsStsStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class OperateAgentClientInstall extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class OperateAgentClient extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeStsStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getEventIds()
 * @method $this withEventIds($value)
 */
class ModifyWebLockOperateEvents extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CanTrySas extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBuyVersion()
 * @method $this withBuyVersion($value)
 */
class OpenSasTrial extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSecureSuggestion extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDefenceThread extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeWhiteListStrategyUuidCount extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProcessMethod()
 * @method $this withProcessMethod($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateWhiteListStrategyRelation extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyIds()
 * @method $this withStrategyIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWhiteListStrategyList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyClearLogstoreStorage extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeLogstoreStorage extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSecureToken()
 * @method $this withSecureToken($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeShareVmWebshell extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class OperateTrojan extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class DescribeMaliciousProcess extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCategoryCount extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 */
class DeleteSuspEventNode extends V20161111Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateSuspEventNote extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWhiteListStrategyCount extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNeedStatistics()
 * @method $this withNeedStatistics($value)
 */
class DescribeWhiteListEffectiveAssets extends V20161111Rpc
{
}

/**
 * @method string getProcessIds()
 * @method $this withProcessIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateWhiteListProcessStatus extends V20161111Rpc
{
}

/**
 * @method string getNeedMachineNum()
 * @method $this withNeedMachineNum($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWhiteListGroupStruct extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWhiteListAuthorize extends V20161111Rpc
{
}

/**
 * @method string getStrategyName()
 * @method $this withStrategyName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStudyTime()
 * @method $this withStudyTime($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveWhiteListStrategy extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategyIds()
 * @method $this withStrategyIds($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWhiteListStrategyStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLastMaxId()
 * @method $this withLastMaxId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeWhiteListAsset extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyIds()
 * @method $this withStrategyIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateWhiteListStrategyStatus extends V20161111Rpc
{
}

/**
 * @method string getOperations()
 * @method $this withOperations($value)
 * @method string getRelationType()
 * @method $this withRelationType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveWhiteListStrategyAssets extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProcessType()
 * @method $this withProcessType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class DescribeWhiteListProcess extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAnalysisSlsIndex extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAnalysisStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeTopicList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 */
class DescribeAnalysisCurve extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class ExecuteRuleEngineActualTime extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAnalysisShipperStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class DescribeSlsProject extends V20161111Rpc
{
}

/**
 * @method string getRuleActionName()
 * @method $this withRuleActionName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSendUrl()
 * @method $this withSendUrl($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getIntervalTime()
 * @method $this withIntervalTime($value)
 */
class CreateOrUpdateDingTalk extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteDingTalk extends V20161111Rpc
{
}

/**
 * @method string getRuleActionName()
 * @method $this withRuleActionName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDingTalk extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class OperateResult extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUuidList()
 * @method $this withUuidList($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeResultList extends V20161111Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeJoinRuleList extends V20161111Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['query']['remark'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 */
class DescribeAnalysisLogs extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class DescribeAnalysisHistograms extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVertexId()
 * @method $this withVertexId($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 */
class DescribeTraceInfoNode extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVertexId()
 * @method $this withVertexId($value)
 * @method string getStartType()
 * @method $this withStartType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getPage()
 * @method $this withPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeTraceInfoNodeList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVertexId()
 * @method $this withVertexId($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeTraceInfoDetail extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeVulMachineList extends V20161111Rpc
{
}

/**
 * @method string getConcernLevel()
 * @method $this withConcernLevel($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ModifyVulLevel extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVulLevel extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeVulLevelStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 */
class DescribeStrategyProcess extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCheckWarningId()
 * @method $this withCheckWarningId($value)
 */
class DescribeCheckWarningDetail extends V20161111Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCheckWarningIds()
 * @method $this withCheckWarningIds($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class IgnoreHcCheckWarnings extends V20161111Rpc
{
}

/**
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRiskStatus()
 * @method $this withRiskStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeCheckWarningSummary extends V20161111Rpc
{
}

/**
 * @method string getRiskIds()
 * @method $this withRiskIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ValidateHcWarnings extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMachineName()
 * @method $this withMachineName($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeWarningMachines extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeCheckWarnings extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyTargetConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeTargetConfig extends V20161111Rpc
{
}

/**
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ModifySaveVulBatch extends V20161111Rpc
{
}

/**
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResource()
 * @method $this withResource($value)
 */
class DeleteVulBatch extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResource()
 * @method $this withResource($value)
 */
class DescribeVulBatch extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyVulConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeVulNumStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteJoinRule extends V20161111Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class OperateVul extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenVersionConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeVulExportInfo extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ExportVul extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class ModifyVulTarget extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DescribeTarget extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDays()
 * @method $this withDays($value)
 */
class ModifyAutoDelConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 */
class DeleteVulWhitelist extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeListAccessKeyIdAuth extends V20161111Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 */
class CreateVulWhitelist extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeVulWhitelist extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAutoDelConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeVulConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeVulTargetStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTagIdList()
 * @method string getRemark()
 */
class DescribeGroupStruct extends V20161111Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIdList($value)
    {
        $this->data['TagIdList'] = $value;
        $this->options['query']['tagIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['query']['remark'] = $value;

        return $this;
    }
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLastTsEnd()
 * @method $this withLastTsEnd($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getPatchId()
 * @method $this withPatchId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getLastTsStart()
 * @method $this withLastTsStart($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 */
class DescribeGroupedVul extends V20161111Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getDatasourceDescription()
 * @method $this withDatasourceDescription($value)
 * @method string getFields()
 * @method $this withFields($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class CreateOrUpdateDataSource extends V20161111Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getDataSourceId2()
 * @method $this withDataSourceId2($value)
 * @method string getDataSourceId1()
 * @method $this withDataSourceId1($value)
 * @method string getTimeWindow()
 * @method $this withTimeWindow($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getExpression2()
 * @method $this withExpression2($value)
 * @method string getExpression1()
 * @method $this withExpression1($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsRules()
 * @method $this withStatisticsRules($value)
 * @method string getJoinRelation()
 * @method $this withJoinRelation($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getActions()
 * @method $this withActions($value)
 */
class CreateOrUpdateJoinRule extends V20161111Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class SetDatasourceStatus extends V20161111Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class DescribeMetaData extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeScreenOperateInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenHostStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeScoreThread extends V20161111Rpc
{
}

/**
 * @method string getScreenDataMap()
 * @method $this withScreenDataMap($value)
 * @method string getScreenDefault()
 * @method $this withScreenDefault($value)
 * @method string getLogoPower()
 * @method $this withLogoPower($value)
 * @method string getMonitorUrl()
 * @method $this withMonitorUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getLogoUrl()
 * @method $this withLogoUrl($value)
 */
class CreatScreenSetting extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getBase64()
 * @method $this withBase64($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeScreenAttackAnalysisData extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeScreenSummaryInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScreenTitle()
 * @method $this withScreenTitle($value)
 * @method string getScreenIdSetting()
 * @method $this withScreenIdSetting($value)
 */
class ModifyScreenSetting extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteScreenSetting extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeScreenSetting extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeScreenScoreThread extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeScreenSettings extends V20161111Rpc
{
}

/**
 * @method string getAlarmEventName()
 * @method $this withAlarmEventName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlarmEventType()
 * @method $this withAlarmEventType($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 */
class DescribeScreenAlarmEventList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeScreenSecurityStatInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getReportStatus()
 * @method $this withReportStatus($value)
 */
class UpdateCustomizeReportStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCustomizeReportChartList extends V20161111Rpc
{
}

/**
 * @method string getOperations()
 * @method $this withOperations($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class OperationCustomizeReportChart extends V20161111Rpc
{
}

/**
 * @method string getReportType()
 * @method $this withReportType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getReportEndDate()
 * @method $this withReportEndDate($value)
 * @method string getReportStartDate()
 * @method $this withReportStartDate($value)
 * @method string getRecipients()
 * @method $this withRecipients($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getSendTime()
 * @method $this withSendTime($value)
 * @method string getReportStatus()
 * @method $this withReportStatus($value)
 */
class SaveCustomizeReportConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCustomizeReportList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getChartIds()
 * @method $this withChartIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCustomizeReportChartData extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class DeleteCustomizeReport extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class DescribeCustomizeReportConfigDetail extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeSuspTrendStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 */
class RollbackQuaraFile extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateSuspiciousEvent extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeQuaraFile extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeSuspEventTypes extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getBase64()
 * @method $this withBase64($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeAttackAnalysisData extends V20161111Rpc
{
}

/**
 * @method string getAlarmUniqueInfo()
 * @method $this withAlarmUniqueInfo($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeAlarmEventDetail extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSecurityStatInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSummaryInfo extends V20161111Rpc
{
}

/**
 * @method string getEventLevels()
 * @method $this withEventLevels($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLastDays()
 * @method $this withLastDays($value)
 * @method string getEventTypes()
 * @method $this withEventTypes($value)
 */
class DescribeHosts extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOperateInfo extends V20161111Rpc
{
}

/**
 * @method string getEventLevels()
 * @method $this withEventLevels($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLastDays()
 * @method $this withLastDays($value)
 * @method string getEventTypes()
 * @method $this withEventTypes($value)
 */
class DescribeHostTotalCount extends V20161111Rpc
{
}

/**
 * @method string getAlarmEventName()
 * @method $this withAlarmEventName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlarmEventType()
 * @method $this withAlarmEventType($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 */
class DescribeAlarmEventList extends V20161111Rpc
{
}

/**
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTagIdListString()
 * @method $this withTagIdListString($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getIsRoot()
 * @method $this withIsRoot($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribePropertyUserDetail extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 */
class DescribeWebLockEvents extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class ModifyWebLockRefresh extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class ModifyWebLockDeleteConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyWebLockStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ModifyWebLockMachineList extends V20161111Rpc
{
}

/**
 * @method string getLocalBackupDir()
 * @method $this withLocalBackupDir($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExclusiveFileType()
 * @method $this withExclusiveFileType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDir()
 * @method $this withDir($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getExclusiveDir()
 * @method $this withExclusiveDir($value)
 */
class ModifyWebLockCreateConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebLockStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebLockMachineList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeWebLockConfigList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeWebLockBindList extends V20161111Rpc
{
}

/**
 * @method string getLocalBackupDir()
 * @method $this withLocalBackupDir($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExclusiveFileType()
 * @method $this withExclusiveFileType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDir()
 * @method $this withDir($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getExclusiveDir()
 * @method $this withExclusiveDir($value)
 */
class ModifyWebLockUpdateConfig extends V20161111Rpc
{
}

/**
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMachineGroupIds()
 * @method $this withMachineGroupIds($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateOrUpdateGroup extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteRuleGroup extends V20161111Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsRules()
 * @method $this withStatisticsRules($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpressions()
 * @method $this withExpressions($value)
 * @method string getActions()
 * @method $this withActions($value)
 * @method string getRuleGroupIds()
 * @method $this withRuleGroupIds($value)
 */
class CreateOrUpdateRule extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteRule extends V20161111Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExGroupId()
 * @method $this withExGroupId($value)
 */
class DescribeRuleList extends V20161111Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRuleGroupId()
 * @method $this withRuleGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExGroupId()
 * @method $this withExGroupId($value)
 */
class DescribeGroupList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class DescribeDataSource extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeBuySummary extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyOpenLogShipper extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyLogMetaStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeLogShipperStatus extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeLogMeta extends V20161111Rpc
{
}

/**
 * @method string getTargetOperations()
 * @method $this withTargetOperations($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OperateSuspiciousTargetConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeSuspiciousUUIDConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeSuspiciousOverallConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class OperateSuspiciousOverallConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeApiBuySummary extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSaleId()
 * @method $this withSaleId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSecureToken()
 * @method $this withSecureToken($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWebGroupId()
 * @method $this withWebGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getAction1()
 * @method $this withAction1($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getFlow()
 * @method $this withFlow($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeTotalStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVersionConfig extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeInstanceStatistics extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSaleId()
 * @method $this withSaleId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSecureToken()
 * @method $this withSecureToken($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWebGroupId()
 * @method $this withWebGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAction1()
 * @method $this withAction1($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFlow()
 * @method $this withFlow($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeUuidStatistics extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSaleId()
 * @method $this withSaleId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSecureToken()
 * @method $this withSecureToken($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWebGroupId()
 * @method $this withWebGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAction1()
 * @method $this withAction1($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getFlow()
 * @method $this withFlow($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAllRegionsStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeEventLevelCount extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeAssetSummary extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEmgUserAgreement extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUserAgreement()
 * @method $this withUserAgreement($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyEmgVulSubmit extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEmgNotice extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEmgVulGroup extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getConcernNecessity()
 * @method $this withConcernNecessity($value)
 */
class ModifyConcernNecessity extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeConcernNecessity extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeYesterdayStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteCondition extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFilterConditions()
 * @method $this withFilterConditions($value)
 */
class CreateCondition extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCronJobId()
 * @method $this withCronJobId($value)
 */
class DescribeVulnerabilitySummary extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ModifyAssetGroup extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AutoUpgradeSas extends V20161111Rpc
{
}

/**
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVulEventLevels()
 * @method $this withVulEventLevels($value)
 * @method string getLastDays()
 * @method $this withLastDays($value)
 * @method string getHealthEventLevels()
 * @method $this withHealthEventLevels($value)
 * @method string getSuspiciousEventLevels()
 * @method $this withSuspiciousEventLevels($value)
 */
class DescribeEventCountCurve extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class TransformLeakage extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeTopRiskyAssets extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteSearchCondition extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSearchCondition extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 */
class DescribeFilterFields extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeHistogram extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeLogInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 */
class DeleteLogQuery extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DownloadLog extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConditionType()
 * @method $this withConditionType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFilterConditions()
 * @method $this withFilterConditions($value)
 */
class DescribeSasLeftCondition extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getConditions()
 * @method $this withConditions($value)
 * @method string getQueryDetail()
 * @method $this withQueryDetail($value)
 */
class CreateLogQuery extends V20161111Rpc
{
}

/**
 * @method string getLoginOffset()
 * @method $this withLoginOffset($value)
 * @method string getProcessSnapshotOffset()
 * @method $this withProcessSnapshotOffset($value)
 * @method string getPortSnapshotOffset()
 * @method $this withPortSnapshotOffset($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getNetworkOffset()
 * @method $this withNetworkOffset($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAccountSnapshotOffset()
 * @method $this withAccountSnapshotOffset($value)
 * @method string getProcessOffset()
 * @method $this withProcessOffset($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCrackOffset()
 * @method $this withCrackOffset($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeLogItems extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeLogQuery extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFilterConditions()
 * @method $this withFilterConditions($value)
 */
class DescribeAssetList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsColumn()
 * @method $this withStatisticsColumn($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeSasAssetStatistics extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeSasAssetStatisticsColumn extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeAssetDetailByUuid extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsColumn()
 * @method $this withStatisticsColumn($value)
 */
class ModifySasAssetStatisticsColumn extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFilterConditions()
 * @method $this withFilterConditions($value)
 */
class ModifySearchCondition extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWarnType()
 * @method $this withWarnType($value)
 * @method string getSuspiciousEventIds()
 * @method $this withSuspiciousEventIds($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getSubOperation()
 * @method $this withSubOperation($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class OperationSuspEvents extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLevelsOn()
 * @method $this withLevelsOn($value)
 */
class SaveSuspEventUserSetting extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getQuaraFileId()
 * @method $this withQuaraFileId($value)
 */
class RollbackSuspEventQuaraFile extends V20161111Rpc
{
}

/**
 * @method string getSuspiciousEventId()
 * @method $this withSuspiciousEventId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSuspEventDetail extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeSuspEventExportInfo extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSuspEventQuaraFiles extends V20161111Rpc
{
}

/**
 * @method string getAlarmUniqueInfo()
 * @method $this withAlarmUniqueInfo($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 * @method string getParentEventTypes()
 * @method $this withParentEventTypes($value)
 */
class DescribeSuspEvents extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeSuspEventUserSetting extends V20161111Rpc
{
}

/**
 * @method string getTimeEnd()
 * @method $this withTimeEnd($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTimeStart()
 * @method $this withTimeStart($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 * @method string getParentEventTypes()
 * @method $this withParentEventTypes($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ExportSuspEvents extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeNsasSuspEventType extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 */
class ExecStrategy extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 */
class DescribeStrategyExecDetail extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeUuidConfig extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTasks()
 * @method $this withTasks($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class PushAllTask extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeStrategy extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeSuspiciousExportInfo extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventNameRemark()
 * @method $this withEventNameRemark($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class CreateSuspiciousExport extends V20161111Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class ModifyBatchIgnoreVul extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribePropertyScheduleConfig extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class OperateWebVul extends V20161111Rpc
{
}

/**
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class DescribeLoginLogs extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getTag()
 * @method $this withTag($value)
 */
class DescribeWebshell extends V20161111Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeVulDetails extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class DescribeSuspiciousEvents extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class DescribeHostWafs extends V20161111Rpc
{
}

/**
 * @method string getRiskIdList()
 * @method $this withRiskIdList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class BatchDeleteWhiteList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteStrategy extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 */
class CreateTypeWhiteList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAlertLevels()
 * @method $this withAlertLevels($value)
 * @method string getInvalidWarningKeepDays()
 * @method $this withInvalidWarningKeepDays($value)
 */
class CreateUserSetting extends V20161111Rpc
{
}

/**
 * @method string getRiskIdList()
 * @method $this withRiskIdList($value)
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateUserWhiteList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeExportInfo extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class DescribeMachineConfig extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExtern()
 * @method $this withExtern($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class DescribeMacConfig extends V20161111Rpc
{
}

/**
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 */
class DescribeRisks extends V20161111Rpc
{
}

/**
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class Describesummary extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeRiskType extends V20161111Rpc
{
}

/**
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeRiskWhiteList extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUserTypeWhiteList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUserSetting extends V20161111Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUserWhiteList extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DescribeStrategyTarget extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyIds()
 * @method $this withStrategyIds($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeStratety extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeStratetyDetail extends V20161111Rpc
{
}

/**
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeWarning extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class ModifyMachineConfig extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getIsSummaryExport()
 * @method $this withIsSummaryExport($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getRiskIds()
 * @method $this withRiskIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ExportWarning extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class ModifyStrategyTarget extends V20161111Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getRiskWarningIds()
 * @method $this withRiskWarningIds($value)
 */
class OperateWarning extends V20161111Rpc
{
}

/**
 * @method string getRiskSubTypeName()
 * @method $this withRiskSubTypeName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCycleStartTime()
 * @method $this withCycleStartTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCycleDays()
 * @method $this withCycleDays($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyStrategy extends V20161111Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeVulList extends V20161111Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryCrackEvent extends V20161111Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryLoginEvent extends V20161111Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class GetStatisticsByUuid extends V20161111Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetCrackStatistics extends V20161111Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRegionNo()
 * @method $this withRegionNo($value)
 */
class GetEntityList extends V20161111Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetStatistics extends V20161111Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetAccountStatistics extends V20161111Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVmNumber()
 * @method $this withVmNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class RenewInstance extends V20161111Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVmNumber()
 * @method $this withVmNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 */
class UpgradeInstance extends V20161111Rpc
{
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getIsAutoRenew()
 * @method $this withIsAutoRenew($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVmNumber()
 * @method $this withVmNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 */
class CreateInstance extends V20161111Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ReleaseInstance extends V20161111Rpc
{
}
