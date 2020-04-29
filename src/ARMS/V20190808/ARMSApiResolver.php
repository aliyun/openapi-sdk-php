<?php

namespace AlibabaCloud\ARMS\V20190808;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddGrafana addGrafana(array $options = [])
 * @method AddIntegration addIntegration(array $options = [])
 * @method CheckDataConsistency checkDataConsistency(array $options = [])
 * @method CreateAlertContact createAlertContact(array $options = [])
 * @method CreateAlertContactGroup createAlertContactGroup(array $options = [])
 * @method CreateRetcodeApp createRetcodeApp(array $options = [])
 * @method DeleteAlertContact deleteAlertContact(array $options = [])
 * @method DeleteAlertContactGroup deleteAlertContactGroup(array $options = [])
 * @method DeleteAlertRules deleteAlertRules(array $options = [])
 * @method DeleteRetcodeApp deleteRetcodeApp(array $options = [])
 * @method GetConsistencySnapshot getConsistencySnapshot(array $options = [])
 * @method GetPrometheusApiToken getPrometheusApiToken(array $options = [])
 * @method GetRetcodeShareUrl getRetcodeShareUrl(array $options = [])
 * @method GetTrace getTrace(array $options = [])
 * @method ImportAppAlertRules importAppAlertRules(array $options = [])
 * @method ImportCustomAlertRules importCustomAlertRules(array $options = [])
 * @method ListClusterFromGrafana listClusterFromGrafana(array $options = [])
 * @method ListDashboards listDashboards(array $options = [])
 * @method ListPromClusters listPromClusters(array $options = [])
 * @method ListRetcodeApps listRetcodeApps(array $options = [])
 * @method ListTraceApps listTraceApps(array $options = [])
 * @method QueryDataset queryDataset(array $options = [])
 * @method QueryMetric queryMetric(array $options = [])
 * @method SearchAlertContact searchAlertContact(array $options = [])
 * @method SearchAlertContactGroup searchAlertContactGroup(array $options = [])
 * @method SearchAlertHistories searchAlertHistories(array $options = [])
 * @method SearchAlertRules searchAlertRules(array $options = [])
 * @method SearchEvents searchEvents(array $options = [])
 * @method SearchRetcodeAppByPage searchRetcodeAppByPage(array $options = [])
 * @method SearchTraceAppByName searchTraceAppByName(array $options = [])
 * @method SearchTraceAppByPage searchTraceAppByPage(array $options = [])
 * @method SearchTraces searchTraces(array $options = [])
 * @method SetRetcodeShareStatus setRetcodeShareStatus(array $options = [])
 * @method StartAlert startAlert(array $options = [])
 * @method StopAlert stopAlert(array $options = [])
 * @method UpdateAlertContact updateAlertContact(array $options = [])
 * @method UpdateAlertContactGroup updateAlertContactGroup(array $options = [])
 * @method UpdateAlertRule updateAlertRule(array $options = [])
 */
class ARMSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ARMS';

    /** @var string */
    public $version = '2019-08-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'arms';
}

/**
 * @method string getIntegration()
 * @method $this withIntegration($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddGrafana extends Rpc
{
}

/**
 * @method string getIntegration()
 * @method $this withIntegration($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddIntegration extends Rpc
{
}

/**
 * @method string getCurrentTimestamp()
 * @method $this withCurrentTimestamp($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class CheckDataConsistency extends Rpc
{
}

/**
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getDingRobotWebhookUrl()
 * @method $this withDingRobotWebhookUrl($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getSystemNoc()
 * @method $this withSystemNoc($value)
 */
class CreateAlertContact extends Rpc
{
}

/**
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactIds()
 * @method $this withContactIds($value)
 */
class CreateAlertContactGroup extends Rpc
{
}

/**
 * @method string getRetcodeAppName()
 * @method $this withRetcodeAppName($value)
 * @method string getRetcodeAppType()
 * @method $this withRetcodeAppType($value)
 */
class CreateRetcodeApp extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertContact extends Rpc
{
}

/**
 * @method string getContactGroupId()
 * @method $this withContactGroupId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertContactGroup extends Rpc
{
}

/**
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class DeleteAlertRules extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteRetcodeApp extends Rpc
{
}

/**
 * @method string getCurrentTimestamp()
 * @method $this withCurrentTimestamp($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class GetConsistencySnapshot extends Rpc
{
}

class GetPrometheusApiToken extends Rpc
{
}

/**
 * @method string getPid()
 * @method $this withPid($value)
 */
class GetRetcodeShareUrl extends Rpc
{
}

/**
 * @method string getTraceID()
 * @method $this withTraceID($value)
 */
class GetTrace extends Rpc
{
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getPids()
 * @method $this withPids($value)
 * @method string getTemplageAlertConfig()
 * @method $this withTemplageAlertConfig($value)
 * @method string getTemplateAlertId()
 * @method $this withTemplateAlertId($value)
 */
class ImportAppAlertRules extends Rpc
{
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getTemplageAlertConfig()
 * @method $this withTemplageAlertConfig($value)
 */
class ImportCustomAlertRules extends Rpc
{
}

class ListClusterFromGrafana extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListDashboards extends Rpc
{
}

class ListPromClusters extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class ListRetcodeApps extends Rpc
{
}

class ListTraceApps extends Rpc
{
}

/**
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getReduceTail()
 * @method $this withReduceTail($value)
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getOptionalDims()
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getIsDrillDown()
 * @method $this withIsDrillDown($value)
 * @method string getHungryMode()
 * @method $this withHungryMode($value)
 * @method string getOrderByKey()
 * @method $this withOrderByKey($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method array getRequiredDims()
 * @method array getDimensions()
 */
class QueryDataset extends Rpc
{

    /**
     * @param array $optionalDims
     *
     * @return $this
     */
	public function withOptionalDims(array $optionalDims)
	{
	    $this->data['OptionalDims'] = $optionalDims;
		foreach ($optionalDims as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['OptionalDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
	public function withMeasures(array $measures)
	{
	    $this->data['Measures'] = $measures;
		foreach ($measures as $i => $iValue) {
			$this->options['query']['Measures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $requiredDims
     *
     * @return $this
     */
	public function withRequiredDims(array $requiredDims)
	{
	    $this->data['RequiredDims'] = $requiredDims;
		foreach ($requiredDims as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['RequiredDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['Dimensions.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getConsistencyQueryStrategy()
 * @method $this withConsistencyQueryStrategy($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getFilters()
 * @method string getConsistencyDataKey()
 * @method $this withConsistencyDataKey($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getDimensions()
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class QueryMetric extends Rpc
{

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
	public function withMeasures(array $measures)
	{
	    $this->data['Measures'] = $measures;
		foreach ($measures as $i => $iValue) {
			$this->options['query']['Measures.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $i => $iValue) {
			$this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class SearchAlertContact extends Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class SearchAlertContactGroup extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getAlertType()
 * @method $this withAlertType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class SearchAlertHistories extends Rpc
{
}

/**
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class SearchAlertRules extends Rpc
{
}

/**
 * @method string getIsTrigger()
 * @method $this withIsTrigger($value)
 * @method string getAppType()
 * @method $this withAppType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getAlertType()
 * @method $this withAlertType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 */
class SearchEvents extends Rpc
{
}

/**
 * @method string getRetcodeAppName()
 * @method $this withRetcodeAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchRetcodeAppByPage extends Rpc
{
}

/**
 * @method string getTraceAppName()
 * @method $this withTraceAppName($value)
 */
class SearchTraceAppByName extends Rpc
{
}

/**
 * @method string getTraceAppName()
 * @method $this withTraceAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class SearchTraceAppByPage extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getMinDuration()
 * @method $this withMinDuration($value)
 * @method string getServiceIp()
 * @method $this withServiceIp($value)
 * @method string getOperationName()
 * @method $this withOperationName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method array getTag()
 */
class SearchTraces extends Rpc
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
 * @method string getPid()
 * @method $this withPid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetRetcodeShareStatus extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class StartAlert extends Rpc
{
}

/**
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 */
class StopAlert extends Rpc
{
}

/**
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getDingRobotWebhookUrl()
 * @method $this withDingRobotWebhookUrl($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getSystemNoc()
 * @method $this withSystemNoc($value)
 */
class UpdateAlertContact extends Rpc
{
}

/**
 * @method string getContactGroupId()
 * @method $this withContactGroupId($value)
 * @method string getContactGroupName()
 * @method $this withContactGroupName($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactIds()
 * @method $this withContactIds($value)
 */
class UpdateAlertContactGroup extends Rpc
{
}

/**
 * @method string getIsAutoStart()
 * @method $this withIsAutoStart($value)
 * @method string getProxyUserId()
 * @method $this withProxyUserId($value)
 * @method string getContactGroupIds()
 * @method $this withContactGroupIds($value)
 * @method string getAlertId()
 * @method $this withAlertId($value)
 * @method string getTemplageAlertConfig()
 * @method $this withTemplageAlertConfig($value)
 */
class UpdateAlertRule extends Rpc
{
}
