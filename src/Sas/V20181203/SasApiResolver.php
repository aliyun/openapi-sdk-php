<?php

namespace AlibabaCloud\Sas\V20181203;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddInstallCode addInstallCode(array $options = [])
 * @method AddVpcHoneyPot addVpcHoneyPot(array $options = [])
 * @method CheckQuaraFileId checkQuaraFileId(array $options = [])
 * @method CheckSecurityEventId checkSecurityEventId(array $options = [])
 * @method CreateAntiBruteForceRule createAntiBruteForceRule(array $options = [])
 * @method CreateBackupPolicy createBackupPolicy(array $options = [])
 * @method CreateFileDetect createFileDetect(array $options = [])
 * @method CreateFileDetectUploadUrl createFileDetectUploadUrl(array $options = [])
 * @method CreateHoneypot createHoneypot(array $options = [])
 * @method CreateHoneypotNode createHoneypotNode(array $options = [])
 * @method CreateHoneypotProbe createHoneypotProbe(array $options = [])
 * @method CreateOrUpdateAssetGroup createOrUpdateAssetGroup(array $options = [])
 * @method CreateServiceLinkedRole createServiceLinkedRole(array $options = [])
 * @method CreateSimilarSecurityEventsQueryTask createSimilarSecurityEventsQueryTask(array $options = [])
 * @method CreateSuspEventNote createSuspEventNote(array $options = [])
 * @method CreateVulAutoRepairConfig createVulAutoRepairConfig(array $options = [])
 * @method DeleteBackupPolicy deleteBackupPolicy(array $options = [])
 * @method DeleteBackupPolicyMachine deleteBackupPolicyMachine(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method DeleteLoginBaseConfig deleteLoginBaseConfig(array $options = [])
 * @method DeleteStrategy deleteStrategy(array $options = [])
 * @method DeleteTagWithUuid deleteTagWithUuid(array $options = [])
 * @method DeleteVpcHoneyPot deleteVpcHoneyPot(array $options = [])
 * @method DescribeAccessKeyLeakDetail describeAccessKeyLeakDetail(array $options = [])
 * @method DescribeAccesskeyLeakList describeAccesskeyLeakList(array $options = [])
 * @method DescribeAffectedMaliciousFileImages describeAffectedMaliciousFileImages(array $options = [])
 * @method DescribeAlarmEventDetail describeAlarmEventDetail(array $options = [])
 * @method DescribeAlarmEventList describeAlarmEventList(array $options = [])
 * @method DescribeAlarmEventStackInfo describeAlarmEventStackInfo(array $options = [])
 * @method DescribeAllEntity describeAllEntity(array $options = [])
 * @method DescribeAllGroups describeAllGroups(array $options = [])
 * @method DescribeAntiBruteForceRules describeAntiBruteForceRules(array $options = [])
 * @method DescribeAssetDetailByUuid describeAssetDetailByUuid(array $options = [])
 * @method DescribeAssetDetailByUuids describeAssetDetailByUuids(array $options = [])
 * @method DescribeAssetSummary describeAssetSummary(array $options = [])
 * @method DescribeAttackAnalysisData describeAttackAnalysisData(array $options = [])
 * @method DescribeAutoDelConfig describeAutoDelConfig(array $options = [])
 * @method DescribeBackupClients describeBackupClients(array $options = [])
 * @method DescribeBackupFiles describeBackupFiles(array $options = [])
 * @method DescribeBackupPolicies describeBackupPolicies(array $options = [])
 * @method DescribeBackupRestoreCount describeBackupRestoreCount(array $options = [])
 * @method DescribeBruteForceSummary describeBruteForceSummary(array $options = [])
 * @method DescribeCheckEcsWarnings describeCheckEcsWarnings(array $options = [])
 * @method DescribeCheckWarningDetail describeCheckWarningDetail(array $options = [])
 * @method DescribeCheckWarnings describeCheckWarnings(array $options = [])
 * @method DescribeCheckWarningSummary describeCheckWarningSummary(array $options = [])
 * @method DescribeCloudCenterInstances describeCloudCenterInstances(array $options = [])
 * @method DescribeCloudProductFieldStatistics describeCloudProductFieldStatistics(array $options = [])
 * @method DescribeCommonOverallConfig describeCommonOverallConfig(array $options = [])
 * @method DescribeConcernNecessity describeConcernNecessity(array $options = [])
 * @method DescribeContainerStatistics describeContainerStatistics(array $options = [])
 * @method DescribeCriteria describeCriteria(array $options = [])
 * @method DescribeDingTalk describeDingTalk(array $options = [])
 * @method DescribeDomainCount describeDomainCount(array $options = [])
 * @method DescribeDomainDetail describeDomainDetail(array $options = [])
 * @method DescribeDomainList describeDomainList(array $options = [])
 * @method DescribeEmgVulItem describeEmgVulItem(array $options = [])
 * @method DescribeExportInfo describeExportInfo(array $options = [])
 * @method DescribeExposedInstanceCriteria describeExposedInstanceCriteria(array $options = [])
 * @method DescribeExposedInstanceDetail describeExposedInstanceDetail(array $options = [])
 * @method DescribeExposedInstanceList describeExposedInstanceList(array $options = [])
 * @method DescribeExposedStatistics describeExposedStatistics(array $options = [])
 * @method DescribeExposedStatisticsDetail describeExposedStatisticsDetail(array $options = [])
 * @method DescribeFieldStatistics describeFieldStatistics(array $options = [])
 * @method DescribeFrontVulPatchList describeFrontVulPatchList(array $options = [])
 * @method DescribeGroupedContainerInstances describeGroupedContainerInstances(array $options = [])
 * @method DescribeGroupedInstances describeGroupedInstances(array $options = [])
 * @method DescribeGroupedMaliciousFiles describeGroupedMaliciousFiles(array $options = [])
 * @method DescribeGroupedTags describeGroupedTags(array $options = [])
 * @method DescribeGroupedVul describeGroupedVul(array $options = [])
 * @method DescribeHoneyPotAuth describeHoneyPotAuth(array $options = [])
 * @method DescribeHoneyPotSuspStatistics describeHoneyPotSuspStatistics(array $options = [])
 * @method DescribeImageBaselineCheckSummary describeImageBaselineCheckSummary(array $options = [])
 * @method DescribeImageFixTask describeImageFixTask(array $options = [])
 * @method DescribeImageGroupedVulList describeImageGroupedVulList(array $options = [])
 * @method DescribeImageListWithBaselineName describeImageListWithBaselineName(array $options = [])
 * @method DescribeImageScanAuthCount describeImageScanAuthCount(array $options = [])
 * @method DescribeImageStatistics describeImageStatistics(array $options = [])
 * @method DescribeImageVulList describeImageVulList(array $options = [])
 * @method DescribeInstallCaptcha describeInstallCaptcha(array $options = [])
 * @method DescribeInstallCodes describeInstallCodes(array $options = [])
 * @method DescribeInstanceAntiBruteForceRules describeInstanceAntiBruteForceRules(array $options = [])
 * @method DescribeInstanceRebootStatus describeInstanceRebootStatus(array $options = [])
 * @method DescribeInstanceStatistics describeInstanceStatistics(array $options = [])
 * @method DescribeLoginBaseConfigs describeLoginBaseConfigs(array $options = [])
 * @method DescribeLogstoreStorage describeLogstoreStorage(array $options = [])
 * @method DescribeModuleConfig describeModuleConfig(array $options = [])
 * @method DescribeNoticeConfig describeNoticeConfig(array $options = [])
 * @method DescribeOnceTask describeOnceTask(array $options = [])
 * @method DescribePropertyCount describePropertyCount(array $options = [])
 * @method DescribePropertyCronDetail describePropertyCronDetail(array $options = [])
 * @method DescribePropertyPortDetail describePropertyPortDetail(array $options = [])
 * @method DescribePropertyPortItem describePropertyPortItem(array $options = [])
 * @method DescribePropertyProcDetail describePropertyProcDetail(array $options = [])
 * @method DescribePropertyProcItem describePropertyProcItem(array $options = [])
 * @method DescribePropertyScaDetail describePropertyScaDetail(array $options = [])
 * @method DescribePropertySoftwareDetail describePropertySoftwareDetail(array $options = [])
 * @method DescribePropertySoftwareItem describePropertySoftwareItem(array $options = [])
 * @method DescribePropertyUsageNewest describePropertyUsageNewest(array $options = [])
 * @method DescribePropertyUserDetail describePropertyUserDetail(array $options = [])
 * @method DescribePropertyUserItem describePropertyUserItem(array $options = [])
 * @method DescribeRestoreJobs describeRestoreJobs(array $options = [])
 * @method DescribeRiskCheckItemResult describeRiskCheckItemResult(array $options = [])
 * @method DescribeRiskCheckResult describeRiskCheckResult(array $options = [])
 * @method DescribeRiskCheckSummary describeRiskCheckSummary(array $options = [])
 * @method DescribeRiskItemType describeRiskItemType(array $options = [])
 * @method DescribeRiskListCheckResult describeRiskListCheckResult(array $options = [])
 * @method DescribeRiskType describeRiskType(array $options = [])
 * @method DescribeScanTaskProgress describeScanTaskProgress(array $options = [])
 * @method DescribeSearchCondition describeSearchCondition(array $options = [])
 * @method DescribeSecureSuggestion describeSecureSuggestion(array $options = [])
 * @method DescribeSecurityCheckScheduleConfig describeSecurityCheckScheduleConfig(array $options = [])
 * @method DescribeSecurityEventOperations describeSecurityEventOperations(array $options = [])
 * @method DescribeSecurityEventOperationStatus describeSecurityEventOperationStatus(array $options = [])
 * @method DescribeSecurityStatInfo describeSecurityStatInfo(array $options = [])
 * @method DescribeServiceLinkedRoleStatus describeServiceLinkedRoleStatus(array $options = [])
 * @method DescribeSimilarEventScenarios describeSimilarEventScenarios(array $options = [])
 * @method DescribeSimilarSecurityEvents describeSimilarSecurityEvents(array $options = [])
 * @method DescribeStrategy describeStrategy(array $options = [])
 * @method DescribeStrategyDetail describeStrategyDetail(array $options = [])
 * @method DescribeStrategyExecDetail describeStrategyExecDetail(array $options = [])
 * @method DescribeStrategyTarget describeStrategyTarget(array $options = [])
 * @method DescribeSummaryInfo describeSummaryInfo(array $options = [])
 * @method DescribeSupportRegion describeSupportRegion(array $options = [])
 * @method DescribeSuspEventDetail describeSuspEventDetail(array $options = [])
 * @method DescribeSuspEventQuaraFiles describeSuspEventQuaraFiles(array $options = [])
 * @method DescribeSuspEvents describeSuspEvents(array $options = [])
 * @method DescribeSuspiciousOverallConfig describeSuspiciousOverallConfig(array $options = [])
 * @method DescribeSuspiciousUUIDConfig describeSuspiciousUUIDConfig(array $options = [])
 * @method DescribeUserBackupMachines describeUserBackupMachines(array $options = [])
 * @method DescribeUserBaselineAuthorization describeUserBaselineAuthorization(array $options = [])
 * @method DescribeUserLayoutAuthorization describeUserLayoutAuthorization(array $options = [])
 * @method DescribeUuidsByVulNames describeUuidsByVulNames(array $options = [])
 * @method DescribeVendorList describeVendorList(array $options = [])
 * @method DescribeVersionConfig describeVersionConfig(array $options = [])
 * @method DescribeVpcHoneyPotCriteria describeVpcHoneyPotCriteria(array $options = [])
 * @method DescribeVpcHoneyPotList describeVpcHoneyPotList(array $options = [])
 * @method DescribeVpcList describeVpcList(array $options = [])
 * @method DescribeVulDetails describeVulDetails(array $options = [])
 * @method DescribeVulExportInfo describeVulExportInfo(array $options = [])
 * @method DescribeVulList describeVulList(array $options = [])
 * @method DescribeVulWhitelist describeVulWhitelist(array $options = [])
 * @method DescribeWarningExportInfo describeWarningExportInfo(array $options = [])
 * @method DescribeWarningMachines describeWarningMachines(array $options = [])
 * @method DescribeWebLockBindList describeWebLockBindList(array $options = [])
 * @method DescribeWebLockConfigList describeWebLockConfigList(array $options = [])
 * @method DescribeWebLockFileEvents describeWebLockFileEvents(array $options = [])
 * @method ExportRecord exportRecord(array $options = [])
 * @method ExportVul exportVul(array $options = [])
 * @method ExportWarning exportWarning(array $options = [])
 * @method FixCheckWarnings fixCheckWarnings(array $options = [])
 * @method GetBackupStorageCount getBackupStorageCount(array $options = [])
 * @method GetCheckDetail getCheckDetail(array $options = [])
 * @method GetFileDetectResult getFileDetectResult(array $options = [])
 * @method GetSuspiciousStatistics getSuspiciousStatistics(array $options = [])
 * @method GetVulStatistics getVulStatistics(array $options = [])
 * @method HandleSecurityEvents handleSecurityEvents(array $options = [])
 * @method HandleSimilarSecurityEvents handleSimilarSecurityEvents(array $options = [])
 * @method IgnoreHcCheckWarnings ignoreHcCheckWarnings(array $options = [])
 * @method InstallBackupClient installBackupClient(array $options = [])
 * @method InstallCloudMonitor installCloudMonitor(array $options = [])
 * @method ListCheckInstanceResult listCheckInstanceResult(array $options = [])
 * @method ListCheckResult listCheckResult(array $options = [])
 * @method ListHoneypot listHoneypot(array $options = [])
 * @method ListHoneypotAlarmEvents listHoneypotAlarmEvents(array $options = [])
 * @method ListHoneypotNode listHoneypotNode(array $options = [])
 * @method ListVulAutoRepairConfig listVulAutoRepairConfig(array $options = [])
 * @method ModifyAntiBruteForceRule modifyAntiBruteForceRule(array $options = [])
 * @method ModifyAssetGroup modifyAssetGroup(array $options = [])
 * @method ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method ModifyBackupPolicyStatus modifyBackupPolicyStatus(array $options = [])
 * @method ModifyClearLogstoreStorage modifyClearLogstoreStorage(array $options = [])
 * @method ModifyCreateVulWhitelist modifyCreateVulWhitelist(array $options = [])
 * @method ModifyEmgVulSubmit modifyEmgVulSubmit(array $options = [])
 * @method ModifyGroupProperty modifyGroupProperty(array $options = [])
 * @method ModifyInstanceAntiBruteForceRule modifyInstanceAntiBruteForceRule(array $options = [])
 * @method ModifyLoginBaseConfig modifyLoginBaseConfig(array $options = [])
 * @method ModifyLoginSwitchConfig modifyLoginSwitchConfig(array $options = [])
 * @method ModifyOpenLogShipper modifyOpenLogShipper(array $options = [])
 * @method ModifyOperateVul modifyOperateVul(array $options = [])
 * @method ModifyPropertyScheduleConfig modifyPropertyScheduleConfig(array $options = [])
 * @method ModifyPushAllTask modifyPushAllTask(array $options = [])
 * @method ModifyRiskCheckStatus modifyRiskCheckStatus(array $options = [])
 * @method ModifyRiskSingleResultStatus modifyRiskSingleResultStatus(array $options = [])
 * @method ModifySecurityCheckScheduleConfig modifySecurityCheckScheduleConfig(array $options = [])
 * @method ModifyStartVulScan modifyStartVulScan(array $options = [])
 * @method ModifyStrategy modifyStrategy(array $options = [])
 * @method ModifyStrategyTarget modifyStrategyTarget(array $options = [])
 * @method ModifyTagWithUuid modifyTagWithUuid(array $options = [])
 * @method ModifyVpcHoneyPot modifyVpcHoneyPot(array $options = [])
 * @method ModifyVulTargetConfig modifyVulTargetConfig(array $options = [])
 * @method ModifyWebLockCreateConfig modifyWebLockCreateConfig(array $options = [])
 * @method ModifyWebLockDeleteConfig modifyWebLockDeleteConfig(array $options = [])
 * @method ModifyWebLockStart modifyWebLockStart(array $options = [])
 * @method ModifyWebLockStatus modifyWebLockStatus(array $options = [])
 * @method ModifyWebLockUpdateConfig modifyWebLockUpdateConfig(array $options = [])
 * @method OperateAgentClientInstall operateAgentClientInstall(array $options = [])
 * @method OperateCommonOverallConfig operateCommonOverallConfig(array $options = [])
 * @method OperateSuspiciousOverallConfig operateSuspiciousOverallConfig(array $options = [])
 * @method OperateSuspiciousTargetConfig operateSuspiciousTargetConfig(array $options = [])
 * @method OperateVuls operateVuls(array $options = [])
 * @method OperationCancelIgnoreSuspEvent operationCancelIgnoreSuspEvent(array $options = [])
 * @method OperationSuspEvents operationSuspEvents(array $options = [])
 * @method PauseClient pauseClient(array $options = [])
 * @method PublicCreateImageScanTask publicCreateImageScanTask(array $options = [])
 * @method PublicPreCheckImageScanTask publicPreCheckImageScanTask(array $options = [])
 * @method PublicSyncAndCreateImageScanTask publicSyncAndCreateImageScanTask(array $options = [])
 * @method QueryGroupedSecurityEventMarkMissList queryGroupedSecurityEventMarkMissList(array $options = [])
 * @method QueryGroupIdByGroupName queryGroupIdByGroupName(array $options = [])
 * @method RebootMachine rebootMachine(array $options = [])
 * @method RefreshAssets refreshAssets(array $options = [])
 * @method RefreshContainerAssets refreshContainerAssets(array $options = [])
 * @method RollbackSuspEventQuaraFile rollbackSuspEventQuaraFile(array $options = [])
 * @method SasInstallCode sasInstallCode(array $options = [])
 * @method StartBaselineSecurityCheck startBaselineSecurityCheck(array $options = [])
 * @method StartVirusScanTask startVirusScanTask(array $options = [])
 * @method UnbindAegis unbindAegis(array $options = [])
 * @method UninstallBackupClient uninstallBackupClient(array $options = [])
 * @method ValidateHcWarnings validateHcWarnings(array $options = [])
 */
class SasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Sas';

    /** @var string */
    public $version = '2018-12-03';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getExpiredDate()
 * @method $this withExpiredDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOnlyImage()
 * @method $this withOnlyImage($value)
 * @method string getVendorName()
 * @method $this withVendorName($value)
 */
class AddInstallCode extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class AddVpcHoneyPot extends Rpc
{
}

/**
 * @method array getQuaraFileIds()
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CheckQuaraFileId extends Rpc
{

    /**
     * @param array $quaraFileIds
     *
     * @return $this
     */
	public function withQuaraFileIds(array $quaraFileIds)
	{
	    $this->data['QuaraFileIds'] = $quaraFileIds;
		foreach ($quaraFileIds as $i => $iValue) {
			$this->options['query']['QuaraFileIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getSecurityEventIds()
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CheckSecurityEventId extends Rpc
{

    /**
     * @param array $securityEventIds
     *
     * @return $this
     */
	public function withSecurityEventIds(array $securityEventIds)
	{
	    $this->data['SecurityEventIds'] = $securityEventIds;
		foreach ($securityEventIds as $i => $iValue) {
			$this->options['query']['SecurityEventIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForbiddenTime()
 * @method $this withForbiddenTime($value)
 * @method string getFailCount()
 * @method $this withFailCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnableSmartRule()
 * @method $this withEnableSmartRule($value)
 * @method array getUuidList()
 * @method string getName()
 * @method $this withName($value)
 * @method string getSpan()
 * @method $this withSpan($value)
 * @method string getDefaultRule()
 * @method $this withDefaultRule($value)
 */
class CreateAntiBruteForceRule extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getUuidList()
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 * @method string getPolicyRegionId()
 * @method $this withPolicyRegionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateBackupPolicy extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getHashKey()
 * @method $this withHashKey($value)
 * @method string getOssKey()
 * @method $this withOssKey($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateFileDetect extends Rpc
{
}

/**
 * @method array getHashKeyList()
 * @method string getType()
 * @method $this withType($value)
 * @method array getHashKeyContextList()
 */
class CreateFileDetectUploadUrl extends Rpc
{

    /**
     * @param array $hashKeyList
     *
     * @return $this
     */
	public function withHashKeyList(array $hashKeyList)
	{
	    $this->data['HashKeyList'] = $hashKeyList;
		foreach ($hashKeyList as $i => $iValue) {
			$this->options['query']['HashKeyList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hashKeyContextList
     *
     * @return $this
     */
	public function withHashKeyContextList(array $hashKeyContextList)
	{
	    $this->data['HashKeyContextList'] = $hashKeyContextList;
		foreach ($hashKeyContextList as $depth1 => $depth1Value) {
			if(isset($depth1Value['HashKey'])){
				$this->options['query']['HashKeyContextList.' . ($depth1 + 1) . '.HashKey'] = $depth1Value['HashKey'];
			}
			if(isset($depth1Value['FileSize'])){
				$this->options['query']['HashKeyContextList.' . ($depth1 + 1) . '.FileSize'] = $depth1Value['FileSize'];
			}
		}

		return $this;
    }
}

/**
 * @method string getHoneypotName()
 * @method $this withHoneypotName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getHoneypotImageId()
 * @method $this withHoneypotImageId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getMeta()
 * @method $this withMeta($value)
 * @method string getHoneypotImageName()
 * @method $this withHoneypotImageName($value)
 */
class CreateHoneypot extends Rpc
{
}

/**
 * @method string getAvailableProbeNum()
 * @method $this withAvailableProbeNum($value)
 * @method string getAllowHoneypotAccessInternet()
 * @method $this withAllowHoneypotAccessInternet($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method array getSecurityGroupProbeIpList()
 * @method string getNodeVersion()
 * @method $this withNodeVersion($value)
 */
class CreateHoneypotNode extends Rpc
{

    /**
     * @param array $securityGroupProbeIpList
     *
     * @return $this
     */
	public function withSecurityGroupProbeIpList(array $securityGroupProbeIpList)
	{
	    $this->data['SecurityGroupProbeIpList'] = $securityGroupProbeIpList;
		foreach ($securityGroupProbeIpList as $i => $iValue) {
			$this->options['query']['SecurityGroupProbeIpList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getControlNodeId()
 * @method $this withControlNodeId($value)
 * @method string getProxyIp()
 * @method $this withProxyIp($value)
 * @method string getPing()
 * @method $this withPing($value)
 * @method string getProbeId()
 * @method $this withProbeId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getProbeVersion()
 * @method $this withProbeVersion($value)
 * @method array getServiceIpList()
 * @method array getHoneypotBindList()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getArp()
 * @method $this withArp($value)
 * @method string getProbeType()
 * @method $this withProbeType($value)
 * @method string getProbeStatus()
 * @method $this withProbeStatus($value)
 * @method string getBusinessGroupId()
 * @method $this withBusinessGroupId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateHoneypotProbe extends Rpc
{

    /**
     * @param array $serviceIpList
     *
     * @return $this
     */
	public function withServiceIpList(array $serviceIpList)
	{
	    $this->data['ServiceIpList'] = $serviceIpList;
		foreach ($serviceIpList as $i => $iValue) {
			$this->options['query']['ServiceIpList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $honeypotBindList
     *
     * @return $this
     */
	public function withHoneypotBindList(array $honeypotBindList)
	{
	    $this->data['HoneypotBindList'] = $honeypotBindList;
		foreach ($honeypotBindList as $depth1 => $depth1Value) {
			foreach ($depth1Value['BindPortList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['StartPort'])){
					$this->options['query']['HoneypotBindList.' . ($depth1 + 1) . '.BindPortList.' . ($depth2 + 1) . '.StartPort'] = $depth2Value['StartPort'];
				}
				if(isset($depth2Value['BindPort'])){
					$this->options['query']['HoneypotBindList.' . ($depth1 + 1) . '.BindPortList.' . ($depth2 + 1) . '.BindPort'] = $depth2Value['BindPort'];
				}
				if(isset($depth2Value['Fixed'])){
					$this->options['query']['HoneypotBindList.' . ($depth1 + 1) . '.BindPortList.' . ($depth2 + 1) . '.Fixed'] = $depth2Value['Fixed'];
				}
				if(isset($depth2Value['EndPort'])){
					$this->options['query']['HoneypotBindList.' . ($depth1 + 1) . '.BindPortList.' . ($depth2 + 1) . '.EndPort'] = $depth2Value['EndPort'];
				}
				if(isset($depth2Value['TargetPort'])){
					$this->options['query']['HoneypotBindList.' . ($depth1 + 1) . '.BindPortList.' . ($depth2 + 1) . '.TargetPort'] = $depth2Value['TargetPort'];
				}
			}
			if(isset($depth1Value['HoneypotId'])){
				$this->options['query']['HoneypotBindList.' . ($depth1 + 1) . '.HoneypotId'] = $depth1Value['HoneypotId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class CreateOrUpdateAssetGroup extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateServiceLinkedRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSecurityEventId()
 * @method $this withSecurityEventId($value)
 * @method string getSimilarEventScenarioCode()
 * @method $this withSimilarEventScenarioCode($value)
 */
class CreateSimilarSecurityEventsQueryTask extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getNote()
 * @method $this withNote($value)
 */
class CreateSuspEventNote extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getVulAutoRepairConfigList()
 */
class CreateVulAutoRepairConfig extends Rpc
{

    /**
     * @param array $vulAutoRepairConfigList
     *
     * @return $this
     */
	public function withVulAutoRepairConfigList(array $vulAutoRepairConfigList)
	{
	    $this->data['VulAutoRepairConfigList'] = $vulAutoRepairConfigList;
		foreach ($vulAutoRepairConfigList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AliasName'])){
				$this->options['query']['VulAutoRepairConfigList.' . ($depth1 + 1) . '.AliasName'] = $depth1Value['AliasName'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['VulAutoRepairConfigList.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 */
class DeleteBackupPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method array getUuidList()
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 */
class DeleteBackupPolicyMachine extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteGroup extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DeleteLoginBaseConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DeleteStrategy extends Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuidList()
 * @method $this withUuidList($value)
 */
class DeleteTagWithUuid extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DeleteVpcHoneyPot extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeAccessKeyLeakDetail extends Rpc
{
}

/**
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getStartTs()
 * @method $this withStartTs($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeAccesskeyLeakList extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageDigest()
 * @method $this withImageDigest($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 * @method string getMaliciousMd5()
 * @method $this withMaliciousMd5($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getRepoInstanceId()
 * @method $this withRepoInstanceId($value)
 * @method string getImageLayer()
 * @method $this withImageLayer($value)
 * @method string getRepoRegionId()
 * @method $this withRepoRegionId($value)
 * @method array getUuids()
 */
class DescribeAffectedMaliciousFileImages extends Rpc
{

    /**
     * @param array $uuids
     *
     * @return $this
     */
	public function withUuids(array $uuids)
	{
	    $this->data['Uuids'] = $uuids;
		foreach ($uuids as $i => $iValue) {
			$this->options['query']['Uuids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
class DescribeAlarmEventDetail extends Rpc
{
}

/**
 * @method string getTimeEnd()
 * @method $this withTimeEnd($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getAlarmEventType()
 * @method $this withAlarmEventType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getAlarmEventName()
 * @method $this withAlarmEventName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTacticId()
 * @method $this withTacticId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUniqueInfo()
 * @method $this withUniqueInfo($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOperateTimeEnd()
 * @method $this withOperateTimeEnd($value)
 * @method array getOperateErrorCodeList()
 * @method string getOperateTimeStart()
 * @method $this withOperateTimeStart($value)
 * @method string getTimeStart()
 * @method $this withTimeStart($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeAlarmEventList extends Rpc
{

    /**
     * @param array $operateErrorCodeList
     *
     * @return $this
     */
	public function withOperateErrorCodeList(array $operateErrorCodeList)
	{
	    $this->data['OperateErrorCodeList'] = $operateErrorCodeList;
		foreach ($operateErrorCodeList as $i => $iValue) {
			$this->options['query']['OperateErrorCodeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getUniqueInfo()
 * @method $this withUniqueInfo($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeAlarmEventStackInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAllEntity extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeAllGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAntiBruteForceRules extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeAssetDetailByUuid extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeAssetDetailByUuids extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAssetSummary extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getBase64()
 * @method $this withBase64($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeAttackAnalysisData extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeAutoDelConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSupportRegionId()
 * @method $this withSupportRegionId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeBackupClients extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getSnapshotHash()
 * @method $this withSnapshotHash($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeBackupFiles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMachineRemark()
 * @method $this withMachineRemark($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeBackupPolicies extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeBackupRestoreCount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeBruteForceSummary extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCheckEcsWarnings extends Rpc
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
class DescribeCheckWarningDetail extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getCheckType()
 * @method $this withCheckType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCheckId()
 * @method $this withCheckId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getRiskStatus()
 * @method $this withRiskStatus($value)
 */
class DescribeCheckWarnings extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRiskStatus()
 * @method $this withRiskStatus($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeCheckWarningSummary extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getImportance()
 * @method $this withImportance($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNoPage()
 * @method $this withNoPage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLogicalExp()
 * @method $this withLogicalExp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getMachineTypes()
 * @method $this withMachineTypes($value)
 * @method string getNoGroupTrace()
 * @method $this withNoGroupTrace($value)
 */
class DescribeCloudCenterInstances extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeCloudProductFieldStatistics extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeCommonOverallConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeConcernNecessity extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeContainerStatistics extends Rpc
{
}

/**
 * @method string getSupportAutoTag()
 * @method $this withSupportAutoTag($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getMachineTypes()
 * @method $this withMachineTypes($value)
 */
class DescribeCriteria extends Rpc
{
}

/**
 * @method string getRuleActionName()
 * @method $this withRuleActionName($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDingTalk extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDomainCount extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDomainDetail extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getFuzzyDomain()
 * @method $this withFuzzyDomain($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDomainType()
 * @method $this withDomainType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeDomainList extends Rpc
{
}

/**
 * @method string getScanType()
 * @method $this withScanType($value)
 * @method string getCheckType()
 * @method $this withCheckType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCheckStatus()
 * @method $this withCheckStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getVulName()
 * @method $this withVulName($value)
 * @method string getRiskStatus()
 * @method $this withRiskStatus($value)
 */
class DescribeEmgVulItem extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeExportInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class DescribeExposedInstanceCriteria extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeExposedInstanceDetail extends Rpc
{
}

/**
 * @method string getExposurePort()
 * @method $this withExposurePort($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVulStatus()
 * @method $this withVulStatus($value)
 * @method string getExposureIp()
 * @method $this withExposureIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getExposureComponent()
 * @method $this withExposureComponent($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getHealthStatus()
 * @method $this withHealthStatus($value)
 */
class DescribeExposedInstanceList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeExposedStatistics extends Rpc
{
}

/**
 * @method string getStatisticsType()
 * @method $this withStatisticsType($value)
 * @method string getStatisticsTypeGatewayType()
 * @method $this withStatisticsTypeGatewayType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatisticsTypeInstanceValue()
 * @method $this withStatisticsTypeInstanceValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeExposedStatisticsDetail extends Rpc
{
}

/**
 * @method string getMachineTypes()
 * @method $this withMachineTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeFieldStatistics extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 */
class DescribeFrontVulPatchList extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupField()
 * @method $this withGroupField($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLogicalExp()
 * @method $this withLogicalExp($value)
 * @method string getFieldValue()
 * @method $this withFieldValue($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeGroupedContainerInstances extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupField()
 * @method $this withGroupField($value)
 * @method string getNoPage()
 * @method $this withNoPage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFieldValue()
 * @method $this withFieldValue($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getMachineTypes()
 * @method $this withMachineTypes($value)
 */
class DescribeGroupedInstances extends Rpc
{
}

/**
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getFuzzyMaliciousName()
 * @method $this withFuzzyMaliciousName($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageDigest()
 * @method $this withImageDigest($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getRepoInstanceId()
 * @method $this withRepoInstanceId($value)
 * @method string getImageLayer()
 * @method $this withImageLayer($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 * @method string getRepoRegionId()
 * @method $this withRepoRegionId($value)
 * @method array getUuids()
 */
class DescribeGroupedMaliciousFiles extends Rpc
{

    /**
     * @param array $uuids
     *
     * @return $this
     */
	public function withUuids(array $uuids)
	{
	    $this->data['Uuids'] = $uuids;
		foreach ($uuids as $i => $iValue) {
			$this->options['query']['Uuids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMachineTypes()
 * @method $this withMachineTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeGroupedTags extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getMinScore()
 * @method $this withMinScore($value)
 * @method string getAttachTypes()
 * @method $this withAttachTypes($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSearchTags()
 * @method $this withSearchTags($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeGroupedVul extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeHoneyPotAuth extends Rpc
{
}

/**
 * @method string getStatisticsDays()
 * @method $this withStatisticsDays($value)
 * @method string getStatisticsKeyType()
 * @method $this withStatisticsKeyType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 */
class DescribeHoneyPotSuspStatistics extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCriteriaType()
 * @method $this withCriteriaType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 */
class DescribeImageBaselineCheckSummary extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeImageFixTask extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getLastTsEnd()
 * @method $this withLastTsEnd($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getIsLatest()
 * @method $this withIsLatest($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getPatchId()
 * @method $this withPatchId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getCveId()
 * @method $this withCveId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getImageDigest()
 * @method $this withImageDigest($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLastTsStart()
 * @method $this withLastTsStart($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSearchTags()
 * @method $this withSearchTags($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getRepoInstanceId()
 * @method $this withRepoInstanceId($value)
 * @method string getImageLayer()
 * @method $this withImageLayer($value)
 * @method string getRepoRegionId()
 * @method $this withRepoRegionId($value)
 */
class DescribeImageGroupedVulList extends Rpc
{
}

/**
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageDigest()
 * @method $this withImageDigest($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCriteriaType()
 * @method $this withCriteriaType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getBaselineNameKey()
 * @method $this withBaselineNameKey($value)
 * @method string getRepoInstanceId()
 * @method $this withRepoInstanceId($value)
 */
class DescribeImageListWithBaselineName extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeImageScanAuthCount extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeImageStatistics extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getModifyTsEnd()
 * @method $this withModifyTsEnd($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 * @method string getRepoId()
 * @method $this withRepoId($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getCveId()
 * @method $this withCveId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getRepoNamespace()
 * @method $this withRepoNamespace($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getModifyTsStart()
 * @method $this withModifyTsStart($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getRepoName()
 * @method $this withRepoName($value)
 * @method string getRepoInstanceId()
 * @method $this withRepoInstanceId($value)
 * @method string getRepoRegionId()
 * @method $this withRepoRegionId($value)
 */
class DescribeImageVulList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDeadline()
 * @method $this withDeadline($value)
 */
class DescribeInstallCaptcha extends Rpc
{
}

/**
 * @method string getSubAccountName()
 * @method $this withSubAccountName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeInstallCodes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getUuidList()
 */
class DescribeInstanceAntiBruteForceRules extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeInstanceRebootStatus extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeInstanceStatistics extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeLoginBaseConfigs extends Rpc
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
class DescribeLogstoreStorage extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeModuleConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeNoticeConfig extends Rpc
{
}

/**
 * @method array getStatusList()
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getRootTaskId()
 * @method $this withRootTaskId($value)
 * @method string getEndTimeQuery()
 * @method $this withEndTimeQuery($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFinish()
 * @method $this withFinish($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getStartTimeQuery()
 * @method $this withStartTimeQuery($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTargetQuery()
 * @method $this withTargetQuery($value)
 */
class DescribeOnceTask extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuidList()
 * @method $this withUuidList($value)
 */
class DescribePropertyCount extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribePropertyCronDetail extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getBindIp()
 * @method $this withBindIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getProcName()
 * @method $this withProcName($value)
 */
class DescribePropertyPortDetail extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getForceFlush()
 * @method $this withForceFlush($value)
 */
class DescribePropertyPortItem extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getCmdline()
 * @method $this withCmdline($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProcTimeStart()
 * @method $this withProcTimeStart($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProcTimeEnd()
 * @method $this withProcTimeEnd($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribePropertyProcDetail extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getForceFlush()
 * @method $this withForceFlush($value)
 */
class DescribePropertyProcItem extends Rpc
{
}

/**
 * @method string getSearchItemSub()
 * @method $this withSearchItemSub($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getSearchItem()
 * @method $this withSearchItem($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProcessStartedStart()
 * @method $this withProcessStartedStart($value)
 * @method string getProcessStartedEnd()
 * @method $this withProcessStartedEnd($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getScaVersion()
 * @method $this withScaVersion($value)
 * @method string getSearchInfoSub()
 * @method $this withSearchInfoSub($value)
 * @method string getSearchInfo()
 * @method $this withSearchInfo($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getScaName()
 * @method $this withScaName($value)
 * @method string getScaNamePattern()
 * @method $this withScaNamePattern($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribePropertyScaDetail extends Rpc
{
}

/**
 * @method string getSoftwareVersion()
 * @method $this withSoftwareVersion($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstallTimeStart()
 * @method $this withInstallTimeStart($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstallTimeEnd()
 * @method $this withInstallTimeEnd($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribePropertySoftwareDetail extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getForceFlush()
 * @method $this withForceFlush($value)
 */
class DescribePropertySoftwareItem extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribePropertyUsageNewest extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLastLoginTimeStart()
 * @method $this withLastLoginTimeStart($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLastLoginTimeEnd()
 * @method $this withLastLoginTimeEnd($value)
 * @method string getExtend()
 * @method $this withExtend($value)
 * @method string getIsRoot()
 * @method $this withIsRoot($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class DescribePropertyUserDetail extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getForceFlush()
 * @method $this withForceFlush($value)
 */
class DescribePropertyUserItem extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMachineRemark()
 * @method $this withMachineRemark($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRestoreJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeRiskCheckItemResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAssetType()
 * @method $this withAssetType($value)
 * @method string getQueryFlag()
 * @method $this withQueryFlag($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getItemIds()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRiskCheckResult extends Rpc
{

    /**
     * @param array $itemIds
     *
     * @return $this
     */
	public function withItemIds(array $itemIds)
	{
	    $this->data['ItemIds'] = $itemIds;
		foreach ($itemIds as $i => $iValue) {
			$this->options['query']['ItemIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeRiskCheckSummary extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRiskItemType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getInstanceIds()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRiskListCheckResult extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeRiskType extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeScanTaskProgress extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSearchCondition extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSecureSuggestion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSecurityCheckScheduleConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSecurityEventId()
 * @method $this withSecurityEventId($value)
 */
class DescribeSecurityEventOperations extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSecurityEventIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSecurityEventOperationStatus extends Rpc
{

    /**
     * @param array $securityEventIds
     *
     * @return $this
     */
	public function withSecurityEventIds(array $securityEventIds)
	{
	    $this->data['SecurityEventIds'] = $securityEventIds;
		foreach ($securityEventIds as $i => $iValue) {
			$this->options['query']['SecurityEventIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeSecurityStatInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeServiceLinkedRoleStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSecurityEventId()
 * @method $this withSecurityEventId($value)
 */
class DescribeSimilarEventScenarios extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeSimilarSecurityEvents extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getStrategyIds()
 * @method $this withStrategyIds($value)
 */
class DescribeStrategy extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeStrategyDetail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 */
class DescribeStrategyExecDetail extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class DescribeStrategyTarget extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeSummaryInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeSupportRegion extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSuspiciousEventId()
 * @method $this withSuspiciousEventId($value)
 */
class DescribeSuspEventDetail extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getGroupingId()
 * @method $this withGroupingId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getQuaraTag()
 * @method $this withQuaraTag($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeSuspEventQuaraFiles extends Rpc
{
}

/**
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventNames()
 * @method $this withEventNames($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTacticId()
 * @method string getAlarmUniqueInfo()
 * @method $this withAlarmUniqueInfo($value)
 * @method string getUniqueInfo()
 * @method $this withUniqueInfo($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOperateTimeEnd()
 * @method $this withOperateTimeEnd($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 * @method string getTimeEnd()
 * @method $this withTimeEnd($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getOperateErrorCodeList()
 * @method string getOperateTimeStart()
 * @method $this withOperateTimeStart($value)
 * @method string getTimeStart()
 * @method $this withTimeStart($value)
 * @method string getLevels()
 * @method $this withLevels($value)
 * @method string getParentEventTypes()
 * @method $this withParentEventTypes($value)
 */
class DescribeSuspEvents extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTacticId($value)
    {
        $this->data['TacticId'] = $value;
        $this->options['form_params']['TacticId'] = $value;

        return $this;
    }

    /**
     * @param array $operateErrorCodeList
     *
     * @return $this
     */
	public function withOperateErrorCodeList(array $operateErrorCodeList)
	{
	    $this->data['OperateErrorCodeList'] = $operateErrorCodeList;
		foreach ($operateErrorCodeList as $i => $iValue) {
			$this->options['query']['OperateErrorCodeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeSuspiciousOverallConfig extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeSuspiciousUUIDConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUserBackupMachines extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserBaselineAuthorization extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserLayoutAuthorization extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getVpcInstanceIds()
 * @method $this withVpcInstanceIds($value)
 * @method array getVulNames()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getFieldValue()
 * @method $this withFieldValue($value)
 * @method string getFieldName()
 * @method $this withFieldName($value)
 * @method string getSearchTags()
 * @method $this withSearchTags($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 */
class DescribeUuidsByVulNames extends Rpc
{

    /**
     * @param array $vulNames
     *
     * @return $this
     */
	public function withVulNames(array $vulNames)
	{
	    $this->data['VulNames'] = $vulNames;
		foreach ($vulNames as $i => $iValue) {
			$this->options['query']['VulNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVendorList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class DescribeVersionConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVpcHoneyPotCriteria extends Rpc
{
}

/**
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHoneyPotExistence()
 * @method $this withHoneyPotExistence($value)
 * @method string getVpcRegionId()
 * @method $this withVpcRegionId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class DescribeVpcHoneyPotList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVpcList extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeVulDetails extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeVulExportInfo extends Rpc
{
}

/**
 * @method string getMinScore()
 * @method $this withMinScore($value)
 * @method string getAttachTypes()
 * @method $this withAttachTypes($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getVpcInstanceIds()
 * @method $this withVpcInstanceIds($value)
 * @method string getCreateTsStart()
 * @method $this withCreateTsStart($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getModifyTsEnd()
 * @method $this withModifyTsEnd($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getCreateTsEnd()
 * @method $this withCreateTsEnd($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getModifyTsStart()
 * @method $this withModifyTsStart($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBatchName()
 * @method $this withBatchName($value)
 */
class DescribeVulList extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeVulWhitelist extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExportId()
 * @method $this withExportId($value)
 */
class DescribeWarningExportInfo extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMachineName()
 * @method $this withMachineName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getHaveRisk()
 * @method $this withHaveRisk($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeWarningMachines extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeWebLockBindList extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebLockConfigList extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTsEnd()
 * @method $this withTsEnd($value)
 * @method string getProcessName()
 * @method $this withProcessName($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getTsBegin()
 * @method $this withTsBegin($value)
 */
class DescribeWebLockFileEvents extends Rpc
{
}

/**
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ExportRecord extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getMinScore()
 * @method $this withMinScore($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getAttachTypes()
 * @method $this withAttachTypes($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getVpcInstanceIds()
 * @method $this withVpcInstanceIds($value)
 * @method string getContainerFieldName()
 * @method $this withContainerFieldName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getContainerFieldValue()
 * @method $this withContainerFieldValue($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBatchName()
 * @method $this withBatchName($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSearchTags()
 * @method $this withSearchTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ExportVul extends Rpc
{
}

/**
 * @method string getIsCleartextPwd()
 * @method $this withIsCleartextPwd($value)
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getRiskName()
 * @method $this withRiskName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getTypeNames()
 * @method $this withTypeNames($value)
 * @method string getIsSummaryExport()
 * @method $this withIsSummaryExport($value)
 * @method string getRiskIds()
 * @method $this withRiskIds($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 * @method string getSubTypeNames()
 * @method $this withSubTypeNames($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ExportWarning extends Rpc
{
}

/**
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getCheckParams()
 * @method $this withCheckParams($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class FixCheckWarnings extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetBackupStorageCount extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCheckId()
 * @method $this withCheckId($value)
 */
class GetCheckDetail extends Rpc
{
}

/**
 * @method array getHashKeyList()
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetFileDetectResult extends Rpc
{

    /**
     * @param array $hashKeyList
     *
     * @return $this
     */
	public function withHashKeyList(array $hashKeyList)
	{
	    $this->data['HashKeyList'] = $hashKeyList;
		foreach ($hashKeyList as $i => $iValue) {
			$this->options['query']['HashKeyList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupIdList()
 * @method $this withGroupIdList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetSuspiciousStatistics extends Rpc
{
}

/**
 * @method string getTypeList()
 * @method $this withTypeList($value)
 * @method string getGroupIdList()
 * @method $this withGroupIdList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetVulStatistics extends Rpc
{
}

/**
 * @method string getMarkMissParam()
 * @method $this withMarkMissParam($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getSecurityEventIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperationCode()
 * @method $this withOperationCode($value)
 * @method string getOperationParams()
 * @method $this withOperationParams($value)
 * @method string getMarkBatch()
 * @method $this withMarkBatch($value)
 */
class HandleSecurityEvents extends Rpc
{

    /**
     * @param array $securityEventIds
     *
     * @return $this
     */
	public function withSecurityEventIds(array $securityEventIds)
	{
	    $this->data['SecurityEventIds'] = $securityEventIds;
		foreach ($securityEventIds as $i => $iValue) {
			$this->options['query']['SecurityEventIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMarkMissParam()
 * @method $this withMarkMissParam($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperationCode()
 * @method $this withOperationCode($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOperationParams()
 * @method $this withOperationParams($value)
 */
class HandleSimilarSecurityEvents extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getCheckIds()
 * @method $this withCheckIds($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCheckWarningIds()
 * @method $this withCheckWarningIds($value)
 */
class IgnoreHcCheckWarnings extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getUuidList()
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 */
class InstallBackupClient extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAgentAccessKey()
 * @method $this withAgentAccessKey($value)
 * @method string getAgentSecretKey()
 * @method $this withAgentSecretKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getUuidList()
 * @method string getArgusVersion()
 * @method $this withArgusVersion($value)
 * @method array getInstanceIdList()
 */
class InstallCloudMonitor extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceIdList
     *
     * @return $this
     */
	public function withInstanceIdList(array $instanceIdList)
	{
	    $this->data['InstanceIdList'] = $instanceIdList;
		foreach ($instanceIdList as $i => $iValue) {
			$this->options['query']['InstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRegionIdKey()
 * @method $this withRegionIdKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCheckId()
 * @method $this withCheckId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getSortTypes()
 * @method string getInstanceIdKey()
 * @method $this withInstanceIdKey($value)
 * @method string getInstanceNameKey()
 * @method $this withInstanceNameKey($value)
 * @method array getInstanceIds()
 * @method array getStatuses()
 */
class ListCheckInstanceResult extends Rpc
{

    /**
     * @param array $sortTypes
     *
     * @return $this
     */
	public function withSortTypes(array $sortTypes)
	{
	    $this->data['SortTypes'] = $sortTypes;
		foreach ($sortTypes as $i => $iValue) {
			$this->options['query']['SortTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $statuses
     *
     * @return $this
     */
	public function withStatuses(array $statuses)
	{
	    $this->data['Statuses'] = $statuses;
		foreach ($statuses as $i => $iValue) {
			$this->options['query']['Statuses.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getInstanceSubTypes()
 * @method array getStandardIds()
 * @method array getRiskLevels()
 * @method array getInstanceTypes()
 * @method string getCheckKey()
 * @method $this withCheckKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getVendors()
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method array getRequirementIds()
 * @method array getSortTypes()
 * @method array getInstanceIds()
 * @method array getStatuses()
 */
class ListCheckResult extends Rpc
{

    /**
     * @param array $instanceSubTypes
     *
     * @return $this
     */
	public function withInstanceSubTypes(array $instanceSubTypes)
	{
	    $this->data['InstanceSubTypes'] = $instanceSubTypes;
		foreach ($instanceSubTypes as $i => $iValue) {
			$this->options['query']['InstanceSubTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $standardIds
     *
     * @return $this
     */
	public function withStandardIds(array $standardIds)
	{
	    $this->data['StandardIds'] = $standardIds;
		foreach ($standardIds as $i => $iValue) {
			$this->options['query']['StandardIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $riskLevels
     *
     * @return $this
     */
	public function withRiskLevels(array $riskLevels)
	{
	    $this->data['RiskLevels'] = $riskLevels;
		foreach ($riskLevels as $i => $iValue) {
			$this->options['query']['RiskLevels.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function withInstanceTypes(array $instanceTypes)
	{
	    $this->data['InstanceTypes'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $vendors
     *
     * @return $this
     */
	public function withVendors(array $vendors)
	{
	    $this->data['Vendors'] = $vendors;
		foreach ($vendors as $i => $iValue) {
			$this->options['query']['Vendors.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $requirementIds
     *
     * @return $this
     */
	public function withRequirementIds(array $requirementIds)
	{
	    $this->data['RequirementIds'] = $requirementIds;
		foreach ($requirementIds as $i => $iValue) {
			$this->options['query']['RequirementIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sortTypes
     *
     * @return $this
     */
	public function withSortTypes(array $sortTypes)
	{
	    $this->data['SortTypes'] = $sortTypes;
		foreach ($sortTypes as $i => $iValue) {
			$this->options['query']['SortTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $statuses
     *
     * @return $this
     */
	public function withStatuses(array $statuses)
	{
	    $this->data['Statuses'] = $statuses;
		foreach ($statuses as $i => $iValue) {
			$this->options['query']['Statuses.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getHoneypotName()
 * @method $this withHoneypotName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method array getHoneypotIds()
 */
class ListHoneypot extends Rpc
{

    /**
     * @param array $honeypotIds
     *
     * @return $this
     */
	public function withHoneypotIds(array $honeypotIds)
	{
	    $this->data['HoneypotIds'] = $honeypotIds;
		foreach ($honeypotIds as $i => $iValue) {
			$this->options['query']['HoneypotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSrcIp()
 * @method array getRiskLevelList()
 * @method string getPageSize()
 * @method string getDstIp()
 * @method string getDealed()
 * @method string getCurrentPage()
 * @method string getRequestId()
 */
class ListHoneypotAlarmEvents extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrcIp($value)
    {
        $this->data['SrcIp'] = $value;
        $this->options['form_params']['SrcIp'] = $value;

        return $this;
    }

    /**
     * @param array $riskLevelList
     *
     * @return $this
     */
	public function withRiskLevelList(array $riskLevelList)
	{
	    $this->data['RiskLevelList'] = $riskLevelList;
		foreach ($riskLevelList as $i => $iValue) {
			$this->options['form_params']['RiskLevelList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDstIp($value)
    {
        $this->data['DstIp'] = $value;
        $this->options['form_params']['DstIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDealed($value)
    {
        $this->data['Dealed'] = $value;
        $this->options['form_params']['Dealed'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestId($value)
    {
        $this->data['RequestId'] = $value;
        $this->options['form_params']['RequestId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getNodeName()
 * @method $this withNodeName($value)
 */
class ListHoneypotNode extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 */
class ListVulAutoRepairConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForbiddenTime()
 * @method $this withForbiddenTime($value)
 * @method string getFailCount()
 * @method $this withFailCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnableSmartRule()
 * @method $this withEnableSmartRule($value)
 * @method array getUuidList()
 * @method string getId()
 * @method $this withId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSpan()
 * @method $this withSpan($value)
 * @method string getDefaultRule()
 * @method $this withDefaultRule($value)
 */
class ModifyAntiBruteForceRule extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ModifyAssetGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getUuidList()
 * @method string getId()
 * @method $this withId($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 * @method string getPolicyRegionId()
 * @method $this withPolicyRegionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyBackupPolicy extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyBackupPolicyStatus extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUserLogStore()
 * @method $this withUserLogStore($value)
 * @method string getUserProject()
 * @method $this withUserProject($value)
 */
class ModifyClearLogstoreStorage extends Rpc
{
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 * @method string getTargetInfo()
 * @method $this withTargetInfo($value)
 */
class ModifyCreateVulWhitelist extends Rpc
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
class ModifyEmgVulSubmit extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ModifyGroupProperty extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getNewRuleId()
 * @method $this withNewRuleId($value)
 */
class ModifyInstanceAntiBruteForceRule extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyLoginBaseConfig extends Rpc
{
}

/**
 * @method string getItem()
 * @method $this withItem($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyLoginSwitchConfig extends Rpc
{
}

/**
 * @method array getLogMetaList()
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHotTtl()
 * @method $this withHotTtl($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTargetRegionId()
 * @method $this withTargetRegionId($value)
 */
class ModifyOpenLogShipper extends Rpc
{

    /**
     * @param array $logMetaList
     *
     * @return $this
     */
	public function withLogMetaList(array $logMetaList)
	{
	    $this->data['LogMetaList'] = $logMetaList;
		foreach ($logMetaList as $depth1 => $depth1Value) {
			if(isset($depth1Value['HotTtl'])){
				$this->options['query']['LogMetaList.' . ($depth1 + 1) . '.HotTtl'] = $depth1Value['HotTtl'];
			}
			if(isset($depth1Value['Ttl'])){
				$this->options['query']['LogMetaList.' . ($depth1 + 1) . '.Ttl'] = $depth1Value['Ttl'];
			}
			if(isset($depth1Value['ConfigLogStore'])){
				$this->options['query']['LogMetaList.' . ($depth1 + 1) . '.ConfigLogStore'] = $depth1Value['ConfigLogStore'];
			}
			if(isset($depth1Value['Status'])){
				$this->options['query']['LogMetaList.' . ($depth1 + 1) . '.Status'] = $depth1Value['Status'];
			}
		}

		return $this;
    }
}

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInfo()
 * @method $this withInfo($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 */
class ModifyOperateVul extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScheduleTime()
 * @method $this withScheduleTime($value)
 */
class ModifyPropertyScheduleConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTasks()
 * @method $this withTasks($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ModifyPushAllTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyRiskCheckStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getIds()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyRiskSingleResultStatus extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDaysOfWeek()
 * @method $this withDaysOfWeek($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifySecurityCheckScheduleConfig extends Rpc
{
}

/**
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ModifyStartVulScan extends Rpc
{
}

/**
 * @method string getCycleDays()
 * @method $this withCycleDays($value)
 * @method string getRiskSubTypeName()
 * @method $this withRiskSubTypeName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getRiskCustomParams()
 * @method $this withRiskCustomParams($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getCycleStartTime()
 * @method $this withCycleStartTime($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyStrategy extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyStrategyTarget extends Rpc
{
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getMachineTypes()
 * @method $this withMachineTypes($value)
 * @method string getTagList()
 * @method $this withTagList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuidList()
 * @method $this withUuidList($value)
 */
class ModifyTagWithUuid extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHoneyPotAction()
 * @method $this withHoneyPotAction($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class ModifyVpcHoneyPot extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class ModifyVulTargetConfig extends Rpc
{
}

/**
 * @method string getLocalBackupDir()
 * @method $this withLocalBackupDir($value)
 * @method string getExclusiveFile()
 * @method $this withExclusiveFile($value)
 * @method string getExclusiveFileType()
 * @method $this withExclusiveFileType($value)
 * @method string getDir()
 * @method $this withDir($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInclusiveFile()
 * @method $this withInclusiveFile($value)
 * @method string getExclusiveDir()
 * @method $this withExclusiveDir($value)
 * @method string getInclusiveFileType()
 * @method $this withInclusiveFileType($value)
 * @method string getDefenceMode()
 * @method $this withDefenceMode($value)
 */
class ModifyWebLockCreateConfig extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyWebLockDeleteConfig extends Rpc
{
}

/**
 * @method string getLocalBackupDir()
 * @method $this withLocalBackupDir($value)
 * @method string getExclusiveFile()
 * @method $this withExclusiveFile($value)
 * @method string getExclusiveFileType()
 * @method $this withExclusiveFileType($value)
 * @method string getDir()
 * @method $this withDir($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getExclusiveDir()
 * @method $this withExclusiveDir($value)
 * @method string getInclusiveFileType()
 * @method $this withInclusiveFileType($value)
 * @method string getDefenceMode()
 * @method $this withDefenceMode($value)
 */
class ModifyWebLockStart extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyWebLockStatus extends Rpc
{
}

/**
 * @method string getLocalBackupDir()
 * @method $this withLocalBackupDir($value)
 * @method string getExclusiveFile()
 * @method $this withExclusiveFile($value)
 * @method string getExclusiveFileType()
 * @method $this withExclusiveFileType($value)
 * @method string getDir()
 * @method $this withDir($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInclusiveFile()
 * @method $this withInclusiveFile($value)
 * @method string getExclusiveDir()
 * @method $this withExclusiveDir($value)
 * @method string getInclusiveFileType()
 * @method $this withInclusiveFileType($value)
 * @method string getDefenceMode()
 * @method $this withDefenceMode($value)
 */
class ModifyWebLockUpdateConfig extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class OperateAgentClientInstall extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class OperateCommonOverallConfig extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 * @method string getNoTargetAsOn()
 * @method $this withNoTargetAsOn($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class OperateSuspiciousOverallConfig extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getTargetOperations()
 * @method $this withTargetOperations($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceDirectoryAccountId()
 * @method $this withResourceDirectoryAccountId($value)
 */
class OperateSuspiciousTargetConfig extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method array getVulNames()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method array getUuids()
 */
class OperateVuls extends Rpc
{

    /**
     * @param array $vulNames
     *
     * @return $this
     */
	public function withVulNames(array $vulNames)
	{
	    $this->data['VulNames'] = $vulNames;
		foreach ($vulNames as $i => $iValue) {
			$this->options['query']['VulNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $uuids
     *
     * @return $this
     */
	public function withUuids(array $uuids)
	{
	    $this->data['Uuids'] = $uuids;
		foreach ($uuids as $i => $iValue) {
			$this->options['query']['Uuids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getSecurityEventIds()
 */
class OperationCancelIgnoreSuspEvent extends Rpc
{

    /**
     * @param array $securityEventIds
     *
     * @return $this
     */
	public function withSecurityEventIds(array $securityEventIds)
	{
	    $this->data['SecurityEventIds'] = $securityEventIds;
		foreach ($securityEventIds as $i => $iValue) {
			$this->options['query']['SecurityEventIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSuspiciousEventIds()
 * @method $this withSuspiciousEventIds($value)
 * @method string getSubOperation()
 * @method $this withSubOperation($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWarnType()
 * @method $this withWarnType($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class OperationSuspEvents extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class PauseClient extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDigests()
 * @method $this withDigests($value)
 * @method string getRegistryTypes()
 * @method $this withRegistryTypes($value)
 * @method string getRegionIds()
 * @method $this withRegionIds($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRepoNamespaces()
 * @method $this withRepoNamespaces($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getRepoIds()
 * @method $this withRepoIds($value)
 * @method string getRepoNames()
 * @method $this withRepoNames($value)
 */
class PublicCreateImageScanTask extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDigests()
 * @method $this withDigests($value)
 * @method string getRegistryTypes()
 * @method $this withRegistryTypes($value)
 * @method string getRegionIds()
 * @method $this withRegionIds($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRepoNamespaces()
 * @method $this withRepoNamespaces($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getRepoIds()
 * @method $this withRepoIds($value)
 * @method string getRepoNames()
 * @method $this withRepoNames($value)
 */
class PublicPreCheckImageScanTask extends Rpc
{
}

/**
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getImageItems()
 * @method $this withImageItems($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class PublicSyncAndCreateImageScanTask extends Rpc
{
}

/**
 * @method string getRemark()
 * @method string getEventName()
 * @method string getDisposalWay()
 * @method $this withDisposalWay($value)
 * @method string getMaxId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method string getFrom()
 * @method string getLang()
 * @method string getCurrentPage()
 */
class QueryGroupedSecurityEventMarkMissList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['form_params']['Remark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventName($value)
    {
        $this->data['EventName'] = $value;
        $this->options['form_params']['EventName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxId($value)
    {
        $this->data['MaxId'] = $value;
        $this->options['form_params']['MaxId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLang($value)
    {
        $this->data['Lang'] = $value;
        $this->options['form_params']['Lang'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class QueryGroupIdByGroupName extends Rpc
{
}

/**
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class RebootMachine extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAssetType()
 * @method $this withAssetType($value)
 */
class RefreshAssets extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAssetType()
 * @method $this withAssetType($value)
 */
class RefreshContainerAssets extends Rpc
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
class RollbackSuspEventQuaraFile extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class SasInstallCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getItemIds()
 * @method string getType()
 * @method $this withType($value)
 * @method array getAssets()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class StartBaselineSecurityCheck extends Rpc
{

    /**
     * @param array $itemIds
     *
     * @return $this
     */
	public function withItemIds(array $itemIds)
	{
	    $this->data['ItemIds'] = $itemIds;
		foreach ($itemIds as $i => $iValue) {
			$this->options['query']['ItemIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $assets
     *
     * @return $this
     */
	public function withAssets(array $assets)
	{
	    $this->data['Assets'] = $assets;
		foreach ($assets as $i => $iValue) {
			$this->options['query']['Assets.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetInfo()
 * @method $this withTargetInfo($value)
 */
class StartVirusScanTask extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class UnbindAegis extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getUuidList()
 * @method string getPolicyVersion()
 * @method $this withPolicyVersion($value)
 */
class UninstallBackupClient extends Rpc
{

    /**
     * @param array $uuidList
     *
     * @return $this
     */
	public function withUuidList(array $uuidList)
	{
	    $this->data['UuidList'] = $uuidList;
		foreach ($uuidList as $i => $iValue) {
			$this->options['query']['UuidList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRiskIds()
 * @method $this withRiskIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ValidateHcWarnings extends Rpc
{
}
