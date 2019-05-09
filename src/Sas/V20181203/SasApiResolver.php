<?php

namespace AlibabaCloud\Sas\V20181203;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ModifyPushAllTask modifyPushAllTask(array $options = [])
 * @method DescribeCheckWarningDetail describeCheckWarningDetail(array $options = [])
 * @method DescribeCheckWarnings describeCheckWarnings(array $options = [])
 * @method DescribeWarningMachines describeWarningMachines(array $options = [])
 * @method DescribeCheckWarningSummary describeCheckWarningSummary(array $options = [])
 * @method DescribeStratety describeStratety(array $options = [])
 * @method DescribeStrategyExecDetail describeStrategyExecDetail(array $options = [])
 * @method ModifyOperateVul modifyOperateVul(array $options = [])
 * @method ModifyEmgVulSubmit modifyEmgVulSubmit(array $options = [])
 * @method ModifyDeleteVulWhitelist modifyDeleteVulWhitelist(array $options = [])
 * @method ModifyConcernNecessity modifyConcernNecessity(array $options = [])
 * @method ModifyAutoDelConfig modifyAutoDelConfig(array $options = [])
 * @method DescribeVulWhitelist describeVulWhitelist(array $options = [])
 * @method DescribeVulList describeVulList(array $options = [])
 * @method DescribeVulDetails describeVulDetails(array $options = [])
 * @method DescribeGroupedVul describeGroupedVul(array $options = [])
 * @method DescribeEmgVulGroup describeEmgVulGroup(array $options = [])
 * @method DescribeConcernNecessity describeConcernNecessity(array $options = [])
 * @method DescribeAutoDelConfig describeAutoDelConfig(array $options = [])
 * @method ModifyCreateVulWhitelist modifyCreateVulWhitelist(array $options = [])
 * @method StartBaselineSecurityCheck startBaselineSecurityCheck(array $options = [])
 * @method ModifySecurityCheckScheduleConfig modifySecurityCheckScheduleConfig(array $options = [])
 * @method ModifyRiskSingleResultStatus modifyRiskSingleResultStatus(array $options = [])
 * @method ModifyRiskCheckStatus modifyRiskCheckStatus(array $options = [])
 * @method DescribeUserBaselineAuthorization describeUserBaselineAuthorization(array $options = [])
 * @method DescribeSecurityCheckScheduleConfig describeSecurityCheckScheduleConfig(array $options = [])
 * @method DescribeRiskItemType describeRiskItemType(array $options = [])
 * @method DescribeRiskCheckSummary describeRiskCheckSummary(array $options = [])
 * @method DescribeRiskCheckResult describeRiskCheckResult(array $options = [])
 * @method DescribeSuspEvents describeSuspEvents(array $options = [])
 * @method DescribeSuspEventDetail describeSuspEventDetail(array $options = [])
 * @method DescribeAlarmEventList describeAlarmEventList(array $options = [])
 * @method DescribeAlarmEventDetail describeAlarmEventDetail(array $options = [])
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

    /** @var string */
    public $serviceCode = 'sas';
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
class DescribeCheckWarnings extends Rpc
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
class DescribeWarningMachines extends Rpc
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
class DescribeCheckWarningSummary extends Rpc
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
class DescribeStratety extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 */
class DescribeStrategyExecDetail extends Rpc
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
class ModifyOperateVul extends Rpc
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
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWhitelist()
 * @method $this withWhitelist($value)
 */
class ModifyDeleteVulWhitelist extends Rpc
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
class ModifyConcernNecessity extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDays()
 * @method $this withDays($value)
 */
class ModifyAutoDelConfig extends Rpc
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
class DescribeVulWhitelist extends Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getNecessity()
 * @method $this withNecessity($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class DescribeVulList extends Rpc
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
class DescribeVulDetails extends Rpc
{
}

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDealed()
 * @method $this withDealed($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
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
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEmgVulGroup extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeConcernNecessity extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeAutoDelConfig extends Rpc
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
class ModifyCreateVulWhitelist extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAssets()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getItemIds()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class StartBaselineSecurityCheck extends Rpc
{

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
 * @method string getDaysOfWeek()
 * @method $this withDaysOfWeek($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifySecurityCheckScheduleConfig extends Rpc
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
 * @method string getItemId()
 * @method $this withItemId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 */
class DescribeRiskItemType extends Rpc
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
class DescribeRiskCheckSummary extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 */
class DescribeRiskCheckResult extends Rpc
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
class DescribeSuspEvents extends Rpc
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
class DescribeSuspEventDetail extends Rpc
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
class DescribeAlarmEventList extends Rpc
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
class DescribeAlarmEventDetail extends Rpc
{
}
