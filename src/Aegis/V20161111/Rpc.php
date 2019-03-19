<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

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
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
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
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
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
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScreenTitle()
 * @method $this withScreenTitle($value)
 * @method string getScreenIdSetting()
 * @method $this withScreenIdSetting($value)
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
 * @method string getScreenTitle()
 * @method $this withScreenTitle($value)
 */
class DeleteScreenSetting extends V20161111Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getScreenTitle()
 * @method $this withScreenTitle($value)
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
