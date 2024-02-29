<?php

namespace AlibabaCloud\Sddp\V20190103;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateConfig createConfig(array $options = [])
 * @method CreateDataLimit createDataLimit(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateScanTask createScanTask(array $options = [])
 * @method CreateSlrRole createSlrRole(array $options = [])
 * @method DeleteDataLimit deleteDataLimit(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DescribeCategoryTemplateList describeCategoryTemplateList(array $options = [])
 * @method DescribeCategoryTemplateRuleList describeCategoryTemplateRuleList(array $options = [])
 * @method DescribeColumns describeColumns(array $options = [])
 * @method DescribeColumnsV2 describeColumnsV2(array $options = [])
 * @method DescribeConfigs describeConfigs(array $options = [])
 * @method DescribeDataAssets describeDataAssets(array $options = [])
 * @method DescribeDataLimitDetail describeDataLimitDetail(array $options = [])
 * @method DescribeDataLimits describeDataLimits(array $options = [])
 * @method DescribeDataLimitSet describeDataLimitSet(array $options = [])
 * @method DescribeDataMaskingRunHistory describeDataMaskingRunHistory(array $options = [])
 * @method DescribeDataMaskingTasks describeDataMaskingTasks(array $options = [])
 * @method DescribeDataObjectColumnDetail describeDataObjectColumnDetail(array $options = [])
 * @method DescribeDataObjectColumnDetailV2 describeDataObjectColumnDetailV2(array $options = [])
 * @method DescribeDataObjects describeDataObjects(array $options = [])
 * @method DescribeDocTypes describeDocTypes(array $options = [])
 * @method DescribeEventDetail describeEventDetail(array $options = [])
 * @method DescribeEvents describeEvents(array $options = [])
 * @method DescribeEventTypes describeEventTypes(array $options = [])
 * @method DescribeInstances describeInstances(array $options = [])
 * @method DescribeInstanceSources describeInstanceSources(array $options = [])
 * @method DescribeOssObjectDetail describeOssObjectDetail(array $options = [])
 * @method DescribeOssObjectDetailV2 describeOssObjectDetailV2(array $options = [])
 * @method DescribeOssObjects describeOssObjects(array $options = [])
 * @method DescribePackages describePackages(array $options = [])
 * @method DescribeParentInstance describeParentInstance(array $options = [])
 * @method DescribeRiskLevels describeRiskLevels(array $options = [])
 * @method DescribeRules describeRules(array $options = [])
 * @method DescribeTables describeTables(array $options = [])
 * @method DescribeTemplateAllRules describeTemplateAllRules(array $options = [])
 * @method DescribeUserStatus describeUserStatus(array $options = [])
 * @method DisableUserConfig disableUserConfig(array $options = [])
 * @method ExecDatamask execDatamask(array $options = [])
 * @method ManualTriggerMaskingProcess manualTriggerMaskingProcess(array $options = [])
 * @method ModifyDataLimit modifyDataLimit(array $options = [])
 * @method ModifyDefaultLevel modifyDefaultLevel(array $options = [])
 * @method ModifyEventStatus modifyEventStatus(array $options = [])
 * @method ModifyEventTypeStatus modifyEventTypeStatus(array $options = [])
 * @method ModifyReportTaskStatus modifyReportTaskStatus(array $options = [])
 * @method ModifyRule modifyRule(array $options = [])
 * @method ModifyRuleStatus modifyRuleStatus(array $options = [])
 * @method StopMaskingProcess stopMaskingProcess(array $options = [])
 */
class SddpApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Sddp';

    /** @var string */
    public $version = '2019-01-03';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'sddp';
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getConfigList()
 * @method $this withConfigList($value)
 */
class CreateConfig extends Rpc
{
}

/**
 * @method string getOcrStatus()
 * @method $this withOcrStatus($value)
 * @method string getSamplingSize()
 * @method $this withSamplingSize($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getBatchCreate()
 * @method $this withBatchCreate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDataLimitList()
 * @method $this withDataLimitList($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getAutoScan()
 * @method $this withAutoScan($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getLogStoreDay()
 * @method $this withLogStoreDay($value)
 * @method string getCertificatePermission()
 * @method $this withCertificatePermission($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getConnector()
 * @method $this withConnector($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getEventStatus()
 * @method $this withEventStatus($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class CreateDataLimit extends Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSupportForm()
 * @method $this withSupportForm($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getStatExpress()
 * @method $this withStatExpress($value)
 * @method string getContentCategory()
 * @method $this withContentCategory($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getRunHour()
 * @method $this withRunHour($value)
 * @method string getScanRangeContent()
 * @method $this withScanRangeContent($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getDataLimitId()
 * @method $this withDataLimitId($value)
 * @method string getRunMinute()
 * @method $this withRunMinute($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIntervalDay()
 * @method $this withIntervalDay($value)
 * @method string getScanRange()
 * @method $this withScanRange($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOssScanPath()
 * @method $this withOssScanPath($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTaskUserName()
 * @method $this withTaskUserName($value)
 */
class CreateScanTask extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateSlrRole extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDataLimit extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteRule extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUsageScenario()
 * @method $this withUsageScenario($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCategoryTemplateList extends Rpc
{
}

/**
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getParentCategoryIdList()
 * @method $this withParentCategoryIdList($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCategoryTemplateRuleList extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getSensLevelName()
 * @method $this withSensLevelName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeColumns extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getSensLevelName()
 * @method $this withSensLevelName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeColumnsV2 extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeConfigs extends Rpc
{
}

/**
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getRangeId()
 * @method $this withRangeId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeDataAssets extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDataLimitDetail extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCheckStatus()
 * @method $this withCheckStatus($value)
 * @method string getDatamaskStatus()
 * @method $this withDatamaskStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeDataLimits extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDataLimitSet extends Rpc
{
}

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getMainProcessId()
 * @method $this withMainProcessId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getSrcTableName()
 * @method $this withSrcTableName($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDstType()
 * @method $this withDstType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDataMaskingRunHistory extends Rpc
{
}

/**
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDstType()
 * @method $this withDstType($value)
 */
class DescribeDataMaskingTasks extends Rpc
{
}

/**
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DescribeDataObjectColumnDetail extends Rpc
{
}

/**
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DescribeDataObjectColumnDetailV2 extends Rpc
{
}

/**
 * @method string getFileType()
 * @method $this withFileType($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getParentCategoryIds()
 * @method $this withParentCategoryIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getProductIds()
 * @method $this withProductIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getModelTagIds()
 * @method $this withModelTagIds($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getFileCategoryCode()
 * @method $this withFileCategoryCode($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getModelIds()
 * @method $this withModelIds($value)
 */
class DescribeDataObjects extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDocTypes extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeEventDetail extends Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTypeCode()
 * @method $this withTypeCode($value)
 * @method string getSubTypeCode()
 * @method $this withSubTypeCode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetProductCode()
 * @method $this withTargetProductCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDealUserId()
 * @method $this withDealUserId($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getDepartId()
 * @method $this withDepartId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeEvents extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getParentTypeId()
 * @method $this withParentTypeId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeEventTypes extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getNameAccurate()
 * @method $this withNameAccurate($value)
 * @method string getSensLevelName()
 * @method $this withSensLevelName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLastFinishTimeStart()
 * @method $this withLastFinishTimeStart($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCheckStatus()
 * @method $this withCheckStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNeedModelTag()
 * @method $this withNeedModelTag($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getLastFinishTimeEnd()
 * @method $this withLastFinishTimeEnd($value)
 */
class DescribeInstances extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getAuthStatus()
 * @method $this withAuthStatus($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getAuthed()
 * @method $this withAuthed($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DescribeInstanceSources extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOssObjectDetail extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeOssObjectDetailV2 extends Rpc
{
}

/**
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getNeedRiskCount()
 * @method $this withNeedRiskCount($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getLastScanTimeEnd()
 * @method $this withLastScanTimeEnd($value)
 * @method string getLastScanTimeStart()
 * @method $this withLastScanTimeStart($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getFileCategoryCode()
 * @method $this withFileCategoryCode($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DescribeOssObjects extends Rpc
{
}

/**
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribePackages extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCheckStatus()
 * @method $this withCheckStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getClusterStatus()
 * @method $this withClusterStatus($value)
 * @method string getAuthStatus()
 * @method $this withAuthStatus($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 */
class DescribeParentInstance extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRiskLevels extends Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeywordCompatible()
 * @method $this withKeywordCompatible($value)
 * @method string getSupportForm()
 * @method $this withSupportForm($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getContentCategory()
 * @method $this withContentCategory($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRules extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getRiskLevels()
 * @method $this withRiskLevels($value)
 * @method string getNeedRiskCount()
 * @method $this withNeedRiskCount($value)
 * @method string getPackageId()
 * @method $this withPackageId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getQueryName()
 * @method $this withQueryName($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLastScanTimeEnd()
 * @method $this withLastScanTimeEnd($value)
 * @method string getLastScanTimeStart()
 * @method $this withLastScanTimeStart($value)
 * @method string getSensLevelName()
 * @method $this withSensLevelName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeTables extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeTemplateAllRules extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeUserStatus extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DisableUserConfig extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ExecDatamask extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ManualTriggerMaskingProcess extends Rpc
{
}

/**
 * @method string getModifyPassword()
 * @method $this withModifyPassword($value)
 * @method array getVSwitchIdList()
 * @method string getSamplingSize()
 * @method $this withSamplingSize($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getServiceRegionId()
 * @method $this withServiceRegionId($value)
 * @method string getEngineType()
 * @method $this withEngineType($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getAutoScan()
 * @method $this withAutoScan($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method array getSecurityGroupIdList()
 * @method string getLogStoreDay()
 * @method $this withLogStoreDay($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getConnector()
 * @method $this withConnector($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class ModifyDataLimit extends Rpc
{

    /**
     * @param array $vSwitchIdList
     *
     * @return $this
     */
	public function withVSwitchIdList(array $vSwitchIdList)
	{
	    $this->data['VSwitchIdList'] = $vSwitchIdList;
		foreach ($vSwitchIdList as $i => $iValue) {
			$this->options['query']['VSwitchIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $securityGroupIdList
     *
     * @return $this
     */
	public function withSecurityGroupIdList(array $securityGroupIdList)
	{
	    $this->data['SecurityGroupIdList'] = $securityGroupIdList;
		foreach ($securityGroupIdList as $i => $iValue) {
			$this->options['query']['SecurityGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getDefaultId()
 * @method $this withDefaultId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSensitiveIds()
 * @method $this withSensitiveIds($value)
 */
class ModifyDefaultLevel extends Rpc
{
}

/**
 * @method string getBacked()
 * @method $this withBacked($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHandleInfo()
 * @method $this withHandleInfo($value)
 * @method string getDealReason()
 * @method $this withDealReason($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyEventStatus extends Rpc
{
}

/**
 * @method string getSubTypeIds()
 * @method $this withSubTypeIds($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyEventTypeStatus extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getReportTaskStatus()
 * @method $this withReportTaskStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyReportTaskStatus extends Rpc
{
}

/**
 * @method string getWarnLevel()
 * @method $this withWarnLevel($value)
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRiskLevelId()
 * @method $this withRiskLevelId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSupportForm()
 * @method $this withSupportForm($value)
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getStatExpress()
 * @method $this withStatExpress($value)
 * @method string getContentCategory()
 * @method $this withContentCategory($value)
 * @method string getCustomType()
 * @method $this withCustomType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ModifyRule extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ModifyRuleStatus extends Rpc
{
}

/**
 * @method string getFeatureType()
 * @method $this withFeatureType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class StopMaskingProcess extends Rpc
{
}
